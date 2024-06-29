<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/g2it_fix/user/plugins/login/languages/pt-BR.yaml',
    'modified' => 1633959750,
    'data' => [
        'PLUGIN_LOGIN' => [
            'USERNAME' => 'Usuário',
            'EMAIL' => 'E-mail',
            'USERNAME_EMAIL' => 'Usuário/E-mail',
            'PASSWORD' => 'Senha',
            'ACCESS_DENIED' => 'Acesso negado',
            'LOGIN_FAILED' => 'Falha no login',
            'LOGIN_SUCCESSFUL' => 'Login efetuado com sucesso!',
            'BTN_LOGIN' => 'Entrar',
            'BTN_LOGOUT' => 'Sair',
            'BTN_FORGOT' => 'Esqueci',
            'BTN_REGISTER' => 'Registrar',
            'BTN_RESET' => 'Recuperar Senha',
            'BTN_SEND_INSTRUCTIONS' => 'Enviar e-mail para recuperação',
            'RESET_LINK_EXPIRED' => 'O link de recuperação expirou, tente novamente!',
            'RESET_PASSWORD_RESET' => 'Senha foi recuperada!',
            'RESET_INVALID_LINK' => 'Link de recuperação de senha inválido, tente novamente!',
            'FORGOT_INSTRUCTIONS_SENT_VIA_EMAIL' => 'As instruções para recuperar sua senha foram enviadas para seu e-mail!',
            'FORGOT_FAILED_TO_EMAIL' => 'Falha ao tentar recuperar a senha, tente novamente mais tarde!',
            'FORGOT_CANNOT_RESET_EMAIL_NO_EMAIL' => 'Não é possível recuperar a senha para %s, nenhum e-mail inserido!',
            'FORGOT_CANNOT_RESET_EMAIL_NO_PASSWORD' => 'Não é possível recuperar a senha para %s, este e-mail já está em uso!',
            'FORGOT_USERNAME_DOES_NOT_EXIST' => 'O usuário <b>%s</b> não existe!',
            'FORGOT_EMAIL_NOT_CONFIGURED' => 'Não é possível recuperar a senha. Este site não está configurado para enviar e-mails!',
            'FORGOT_EMAIL_SUBJECT' => '%s requer recuperação da senha',
            'FORGOT_EMAIL_BODY' => '<h1>Recuperação da Senha</h1><p>Olá %1$s,</p><p>Foi feito um pedido no <b>%4$s</b> para recuperar sua senha.</p><p><br /><a href="%2$s" class="btn btn-primary">Clique aqui para recuperar sua senha</a><br /><br /></p><p>Como alternativa, copie a seguinte URL na barra de endereços do navegador:</p> <p class="word-break"><a href="%2$s">%2$s</a></p> <p><br />Atenciosamente,<br /><br />%3$s</p>',
            'SESSION' => '&ldquo;Lembrar-me&rdquo;-Session',
            'REMEMBER_ME' => 'Lembrar-me',
            'REMEMBER_ME_HELP' => 'Defina um cookie persistente no seu navegador para permitir a autenticação de login entre as sessões.',
            'REMEMBER_ME_STOLEN_COOKIE' => 'Outra pessoa usou seu login para acessar essa página. Todas as sessões foram encerradas. Por favor, entre com seu login e confirme seus dados.',
            'BUILTIN_CSS' => 'Use CSS embutido',
            'BUILTIN_CSS_HELP' => 'Inclui o CSS fornecido pelo plugin do administrador',
            'ROUTE' => 'Rota de login',
            'ROUTE_HELP' => 'Rota personalizada para uma página de login personalizada fornecida pelo seu tema',
            'ROUTE_REGISTER' => 'Rpta de registro',
            'ROUTE_REGISTER_HELP' => 'Rota para a página de registro. Confirme aqui se você quer usar a a página de registro embutida. Deixe vazio se você tem seu próprio formulário de registro',
            'USERNAME_NOT_VALID' => 'O nome de usuário deve ter de 3 a 16 caracteres, incluindo letras minúsculas, números, sinais de travessão e hífens. Letras maiúsculas, espaços e caracteres especiais não são aceitos',
            'USERNAME_NOT_AVAILABLE' => 'Usuário %s já existe, escolha outro nome de usuário!',
            'EMAIL_NOT_AVAILABLE' => 'Endereço de e-mail %s já existe, por favor escolha outro endereço de email!',
            'PASSWORD_NOT_VALID' => 'A senha deve conter pelo menos um número, uma letra maiúscula e uma letra minúscula, e pelo menos 8 caracteres ou mais',
            'PASSWORDS_DO_NOT_MATCH' => 'Senhas diferentes. Confirme se você informou a mesma senha',
            'USER_NEEDS_EMAIL_FIELD' => 'O usuário precisa de um campo de e-mail!',
            'EMAIL_SENDING_FAILURE' => 'Ocorreu um erro ao enviar o e-mail!',
            'ACTIVATION_EMAIL_SUBJECT' => 'Link para ativar sua conta no %s',
            'ACTIVATION_EMAIL_BODY' => '<h1>Ativação da conta</h1><p>Olá %1$s, </p><p>Sua conta foi criada com sucesso em <b>%3$s</b>, mas você não pode fazer login até que ela seja ativada.</p><p><br/><a href="%2$s" class="btn-primary">Ative sua conta agora</a><br/><br/></p><p>Como alternativa, copie a seguinte URL na barra de endereços do navegador:</p><p class="word-break"><a href="%2$s">%2$s</a></p><p><br/>Atenciosamente,<br/><br/>%4$s</p>',
            'ACTIVATION_NOTICE_MSG' => 'Olá %s, sua conta foi criada, confira seu e-mail para ativá-la!',
            'WELCOME_EMAIL_SUBJECT' => 'Seja Bem Vindo ao %s',
            'WELCOME_EMAIL_BODY' => '<h1>Sua conta foi Ativada</h1><p>Olá %1$s, </p><p>Sua conta foi ativada com sucesso em <b>%3$s</b>. Utilize a senha padrão <strong>XqyLrr9Tzs</strong> para realizar seu primeiro acesso. Após o login, clique no seu nome e altere sua senha.</p><p><br/><a href="%2$s/login" class="btn-primary">Faça já seu primeiro Acesso</a><br/><br/></p><p>Como alternativa, copie a seguinte URL na barra de endereços do navegador:</p><p class="word-break"><a href="%2$s/login">%2$s</a></p><p><br/>Atenciosamente,<br/><br/>%4$s</p>',
            'WELCOME_NOTICE_MSG' => 'Olá %s, sua conta foi criada com sucesso!',
            'NOTIFICATION_EMAIL_SUBJECT' => 'Novo usuário registrado em %s!',
            'NOTIFICATION_EMAIL_BODY' => '<h1>Novo Usuário</h1><p>Olá, um novo usuário foi registrado e ativado no %1$s.</p><p><ul><li>Usuário: <b>%2$s</b></li><li>E-mail: <b>%3$s</b></ul><p><p><br/><a href="%4$s" class="btn-primary">Visitar %1$s</a><br/><br/></p>',
            'EMAIL_FOOTER' => 'Portal da Revenda',
            'ACTIVATION_LINK_EXPIRED' => 'Link de ativação expirado!',
            'USER_ACTIVATED_SUCCESSFULLY' => 'Conta ativada com Sucesso!',
            'USER_ACTIVATED_SUCCESSFULLY_NOT_ENABLED' => 'Conta de usuário ativada, mas precisa ser habilitada!',
            'INVALID_REQUEST' => 'Requisição Inválida!',
            'USER_REGISTRATION' => 'Usuário Registrado!',
            'USER_REGISTRATION_ENABLED_HELP' => 'Habilita o registro do usuário',
            'VALIDATE_PASSWORD1_AND_PASSWORD2' => 'Validar senha informada duas vezes',
            'VALIDATE_PASSWORD1_AND_PASSWORD2_HELP' => 'Validar e comparar dois campos diferentes para senha, chamados `password1` e `password2`. Habilite essa opção se você tem dois campos de senha no formulário de registro.',
            'SET_USER_DISABLED' => 'Desativar o usuário',
            'SET_USER_DISABLED_HELP' => 'Melhor utilizar com o e-mail de ativação. Adiciona o usuário ao Grav, mas configura como inativo',
            'LOGIN_AFTER_REGISTRATION' => 'Entre com o usuário após ativação',
            'LOGIN_AFTER_REGISTRATION_HELP' => 'Entre com o usuário imediatamente após o registro. Se email de ativação for solicitado, o usuário será logado imediatamente após a ativação da conta',
            'SEND_ACTIVATION_EMAIL' => 'Enviar email de ativação',
            'SEND_ACTIVATION_EMAIL_HELP' => 'Envia um email ao usuário para ativar sua conta. Habilitar a opção `Configurar usuário como inativo` quando usar este recurso, para que o usuário fique inativo e um email será enviado para ativar a conta',
            'SEND_NOTIFICATION_EMAIL' => 'Enviar email de notificação',
            'SEND_NOTIFICATION_EMAIL_HELP' => 'Notifica o administrador do site que um novo usuário foi registrado. O email sera enviado para o campo `To` no plugin de configuração de email',
            'SEND_WELCOME_EMAIL' => 'Envia email de boas vindas',
            'SEND_WELCOME_EMAIL_HELP' => 'Envia um email para o usuário recém registrado',
            'DEFAULT_VALUES' => 'Valores padrão',
            'DEFAULT_VALUES_HELP' => 'Lista de nomes e valores de campos associados, que serão adicionados ao perfil do usuário (arquivo yaml) por padrão, sem serem configuráveis pelo usuário. Separe vários valores com uma vírgula, sem espaços entre os valores',
            'ADDITIONAL_PARAM_KEY' => 'Parâmetro',
            'ADDITIONAL_PARAM_VALUE' => 'Valor',
            'REGISTRATION_FIELDS' => 'Campos de registro',
            'REGISTRATION_FIELDS_HELP' => 'Adicione os campos que serão adicionados ao arquivo Yaml do usuário. Os campos não listados aqui não serão adicionados, mesmo que presentes no formulário de registro',
            'REGISTRATION_FIELD_KEY' => 'Nome do campo',
            'REDIRECT_AFTER_LOGIN' => 'Redirecione após login',
            'REDIRECT_AFTER_LOGIN_HELP' => 'Rota personalizada para redirecionar após login',
            'REDIRECT_AFTER_LOGOUT' => 'Redirecionar após logout',
            'REDIRECT_AFTER_LOGOUT_HELP' => 'Rota personalizada para redirecionar após logout',
            'REDIRECT_AFTER_REGISTRATION' => 'Redirecionar após registro',
            'REDIRECT_AFTER_REGISTRATION_HELP' => 'Rota personalizada para redirecionar após o registro',
            'OPTIONS' => 'Opções',
            'EMAIL_VALIDATION_MESSAGE' => 'O endereço de email deve ser válido!',
            'PASSWORD_VALIDATION_MESSAGE' => 'A senha deve conter pelo menos um número e uma letra maiúscula e minúscula e pelo menos 8 ou mais caracteres',
            'TIMEOUT_HELP' => 'Define o tempo limite da sessão em segundos quando o recurso Remember Me é ativado e verificado pelo usuário. O mínimo é 604800, o que significa 1 semana',
            'GROUPS_HELP' => 'Lista de grupos dos quais o novo usuário registrado fará parte, se houver',
            'SITE_ACCESS_HELP' => 'Lista de níveis de acesso ao site que o novo usuário registrado terá. eXEMPLO: `login` -> `true` ',
            'WELCOME' => 'Bem Vindo',
            'REDIRECT_AFTER_ACTIVATION' => 'Redirecionar após a ativação do usuário',
            'REDIRECT_AFTER_ACTIVATION_HELP' => 'Usado se o usuário precisar ativar a conta por email. Uma vez ativado, este caminho será mostrado',
            'REGISTRATION_DISABLED' => 'Registro desativado',
            'USE_PARENT_ACL_LABEL' => 'Use regras de acesso pai',
            'USE_PARENT_ACL_HELP' => 'Verifique as regras de acesso pai se nenhuma regra estiver definida',
            'PROTECT_PROTECTED_PAGE_MEDIA_LABEL' => 'Proteja uma página de mídia protegida por login',
            'PROTECT_PROTECTED_PAGE_MEDIA_HELP' => 'Se ativada, a mídia de uma página protegida por login também é protegida por login e não pode ser vista a menos que esteja logado',
            'SECURITY_TAB' => 'Segurança',
            'MAX_RESETS_COUNT' => 'Contagem máxima de redefinições de senha',
            'MAX_RESETS_COUNT_HELP' => 'Configuração de proteção contra excessivas redefinições de senha (0 - ilimitado)',
            'MAX_RESETS_INTERVAL' => 'Intervalo máximo de redefinições de senha',
            'MAX_RESETS_INTERVAL_HELP' => 'O intervalo de tempo para a senha máxima redefine o valor da contagem',
            'FORGOT_CANNOT_RESET_IT_IS_BLOCKED' => 'Não é possível recuperar a senha para %s, funcionalidade de recuperar senha temporariamente bloqueada, por favor tente mais tarde (no máximo %s minutos)',
            'MAX_LOGINS_COUNT' => 'Contagem máxima de logins',
            'MAX_LOGINS_COUNT_HELP' => 'Configuração de proteção contra excessos (0 - ilimitado)',
            'MAX_LOGINS_INTERVAL' => 'Intervalo máximo de logins',
            'MAX_LOGINS_INTERVAL_HELP' => 'O intervalo de tempo para o valor da contagem de login',
            'TOO_MANY_LOGIN_ATTEMPTS' => 'Muitas tentativas, falha de login no tempo configurado (%s minutos)!',
            'SECONDS' => 'segundos',
            'MINUTES' => 'minutos',
            'RESETS' => 'redefinições',
            'ATTEMPTS' => 'tentativas',
            'ROUTES' => 'Rotas',
            'ROUTE_FORGOT' => 'Rota para esqueci a senha',
            'ROUTE_RESET' => 'Rota para redefenir a senha',
            'ROUTE_PROFILE' => 'Rota para perfil do usuário',
            'ROUTE_ACTIVATE' => 'Rota pra ativação do usuário',
            'LOGGED_OUT' => 'Você foi desconectado com sucesso!',
            'PAGE_RESTRICTED' => 'Acesso restrito, por favor faça login!',
            'DYNAMIC_VISIBILITY' => 'Visibilidade dinâmica da página',
            'DYNAMIC_VISIBILITY_HELP' => 'Permite o processamento dinâmico da base de visibilidade da página nas regras de acesso se login.visibility_requires_access estiver definido como true em uma página',
            'USER_IS_REMOTE_ONLY' => 'Este usuário foi autenticado com um serviço remoto, assim o perfil não pode ser salvo!',
            '2FA_TITLE' => 'Autenticação de 2 Fatores',
            '2FA_INSTRUCTIONS' => '##### 2-Fator de autenticação
Você tem **2FA** habilitados nessa conta. Por favor, use seu aplicativo **2FA** e entre com os **6-digit code** para completar o processo de login.',
            '2FA_REGEN_HINT' => 'A regeneração da senha exigirá que você atualize seu aplicativo de autenticação',
            '2FA_FAILED' => 'Código de autenticação inválido, por favor tente novamente!',
            '2FA_ENABLED' => '2FA ativado',
            '2FA_ENABLED_HELP' => 'Ative a autenticação para todos os usuários',
            '2FA_CODE_INPUT' => '000000',
            '2FA_SECRET' => 'Senha de autenticação',
            '2FA_SECRET_HELP' => 'Escaneie este QR Code no seu [aplicativo de autenticação](https://learn.getgrav.org/admin-panel/2fa#apps). Também é uma boa ideia salvar a senha em um local seguro, caso você precise reinstalar seu aplicativo. Verifique em [Grav docs](https://learn.getgrav.org/admin-panel/2fa) para mais informações',
            '2FA_REGENERATE' => 'Regenerar',
            'BTN_CANCEL' => 'Cancelar',
            'MANUALLY_ENABLE' => 'Habilitar manualmente',
            'MANUALLY_ENABLE_HELP' => 'Quando usar \'activation email\' e \'notification email\', você pode garantir auto-ativação do usuário, mas requer habilitação manual do usuário para fazer login',
            'IPV6_SUBNET_SIZE' => 'IPv6 tamanho da sub-rede',
            'IPV6_SUBNET_SIZE_HELP' => 'O número do endereço IPv6 normalmente atribuído a uma máquina'
        ]
    ]
];
