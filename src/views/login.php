<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>In n' Out</title>
    <link rel="stylesheet" href="assets/css/comum.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/icofont.min.css">
    <link rel="stylesheet" href="assets/css/login.css">
</head>
<body>
    <form class="form-login" action="#" method="post">
        <div class="card">
            <div class="login-card card">
                <div class="card-header">
                    <i class="icofont-travelling mr-1"></i>
                    <span class="font-weight-light">In </span>
                    <span class="font-weight-bold mx-1">n'</span>
                    <span class="font-weight-light"> Out</span>
                    <i class="icofont-runner-alt-1 ml-1"></i>
                </div>
                <div class="card-body">
                    <?php include(TEMPLATE_PATH . '/messages.php'); ?>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" class="form-control" onBlur="validateEmail()" placeholder="Informe o seu email..." autofocus> <!-- erro >:( -->
                    </div>
                
                    <div class="form-group">
                        <label for="password">Senha:</label>
                        <input type="password" name="password" id="password" class="form-control" onBlur="validatePassword()" placeholder="Informe sua senha...">
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-lg btn-primary btn-block">Entrar</button>
                </div>
            </div>
        </div>

       
    </form>

     <script>
            function validateEmail(){
                var email = document.querySelector('#email');

                if(!email.checkValidity()){
                    document.querySelector('#email').classList.add('is-invalid');
                }

                console.log(!email.checkValidity());
            }

            function validatePassword(){
                var password = document.querySelector('#password');

                if(!password.checkValidity()){
                    document.querySelector('#password').classList.add('is-invalid');
                }

                console.log(!password.checkValidity());
            }
        </script>
</body>
</html>