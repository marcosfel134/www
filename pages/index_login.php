<?php
include('../conexao.php');

if(isset($_POST['email']) || isset($_POST['senha'])) {

    if(strlen($_POST['email']) == 0) {
        echo "";
    } else if(strlen($_POST['senha']) == 0) {
        echo "";
    } else {

        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['email'] = $usuario['email'];
            $_SESSION['adm'] = $usuario['adm'];

            header("Location: index_home.php");

        } else {
            echo "<div class='container alert alert-danger alert-dismissible fade show' role='alert'>
            Falha ao logar! Seu usuário e/ou senhas foram digitados incorretamente.
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
          </div>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gerenTI - Login</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../_css/style_login.css">
    <link rel="shortcut icon" href="../_img/favicon.png">
</head>
    <body>

        <div class="cardlogin container px-5 py-3">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="col-12 col-md-6 col-lg-6">
                    <nav class="col-md-12">
                        <h1 class="display-5 text-center">Login - GerenTI</h1>
                        <h3 class="text-center fw-light">Nosso gerente de TI</h3>
                        <br>
                        <form action="" method="POST">
                            <fieldset>
                                <div class="row">
                                    <div class="col-12 my-3">
                                        <label for="usuario">Usuário:</label>
                                        <input class="form-control" type="text" name="email" id="email" placeholder="Digite seu usuário" required>
                                    </div>
    
                                    <div class="col-12 my-3">
                                        <label for="senha">Senha:</label>
                                        <input class="form-control" type="password" name="senha" id="senha" placeholder="Digite sua senha" required>
                                    </div>
    
                                    <div class="col-12 my-3">
                                        <input class="form-control btn-submit" type="submit" value="Logar">
                                    </div>
                                    
                                </div>
                            </fieldset>
                        </form>
                        
                    </nav>
                </div>

                <div class="col-12 col-md-6 col-lg-6">
                    <figure>
                        <img src="../_img/teladelogin.svg" alt="teladelogin">
                    </figure>
                </div>
            </div>
        </div>

        <footer class="p-5 text-center" style="font-size: 10px;">
            <div>
                Todos os direitos reservados &copy;
            </div>
            <div>
                Desenvolvido por: <a target="_blank" href="https://www.linkedin.com/in/marcosfel134/">@marcosfel134</a>
            </div>
        </footer>

    <script src="../js/bootstrap.bundle.min.js"></script>
    </body>
</html>