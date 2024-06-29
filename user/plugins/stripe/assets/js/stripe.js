var stripe;

function registerElements(elements, containerName) {
  var container = document.querySelector('.' + containerName);
  var form = container.querySelector('form');
  var error = form.querySelector('.error');
  var errorMessage = error.querySelector('.message');
  var successMessage = container.querySelector('.success-message');

  function enableInputs() {
    Array.prototype.forEach.call(
      form.querySelectorAll(
        "button, input[type='text'], input[type='email'], input[type='tel']"
      ),
      function(input) {
        input.removeAttribute('disabled');
      }
    );
  }

  function disableInputs() {
    Array.prototype.forEach.call(
      form.querySelectorAll(
        "button, input[type='text'], input[type='email'], input[type='tel']"
      ),
      function(input) {
        input.setAttribute('disabled', 'true');
      }
    );
  }

  function triggerBrowserValidation() {
    var submit = document.createElement('input');
    submit.type = 'submit';
    submit.style.display = 'none';
    form.appendChild(submit);
    submit.click();
    submit.remove();
  }

  var savedErrors = {};
  elements.forEach(function(element, idx) {
    element.on('change', function(event) {
      if (event.error) {
        error.classList.add('visible');
        savedErrors[idx] = event.error.message;
        errorMessage.innerText = event.error.message;
      } else {
        savedErrors[idx] = null;

        var nextError = Object.keys(savedErrors)
          .sort()
          .reduce(function(maybeFoundError, key) {
            return maybeFoundError || savedErrors[key];
          }, null);

        if (nextError) {
          errorMessage.innerText = nextError;
        } else {
          error.classList.remove('visible');
        }
      }
    });
  });

  form.addEventListener('submit', function(e) {
    e.preventDefault();
    var plainInputsValid = true;
    Array.prototype.forEach.call(form.querySelectorAll('input'), function(
      input
    ) {
      if (input.checkValidity && !input.checkValidity()) {
        plainInputsValid = false;
        return;
      }
    });
    if (!plainInputsValid) {
      triggerBrowserValidation();
      return;
    }

    disableInputs();

    var name = form.querySelector('#' + containerName + '-name');
    var address1 = form.querySelector('#' + containerName + '-address');
    var city = form.querySelector('#' + containerName + '-city');
    var state = form.querySelector('#' + containerName + '-state');
    var zip = form.querySelector('#' + containerName + '-zip');
    var invoice_number = form.querySelector('#' + containerName + '-invoice-number');
    var amount = form.querySelector('#' + containerName + '-amount');
    var additionalData = {
      name: name ? name.value : undefined,
      address_line1: address1 ? address1.value : undefined,
      address_city: city ? city.value : undefined,
      address_state: state ? state.value : undefined,
      address_zip: zip ? zip.value : undefined
    };

    stripe.createToken(elements[0], additionalData).then(function(result) {
      container.classList.remove('submitting');

      if (result.token) {
        $.ajax({
          type: 'POST',
          url: '/task:stripeCheckout',
          data: {
            token: result.token.id,
            invoice_number: invoice_number.value,
            amount: amount.value
          },
          dataType: 'json'
        }).done(function(r) {
          if (r.success) {
            successMessage.classList.add('visible');
            form.classList.add('invisible');
          } else if (r.message) {
            error.classList.add('visible');
            errorMessage.innerText = r.message;
            enableInputs();
          }
        });
      } else {
        enableInputs();
      }
    });
  });
}