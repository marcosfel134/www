<?php
include('../conexao.php');

if(isset($_POST['user']) || isset($_POST['senha'])) {

    if(strlen($_POST['user']) == 0) {
        echo "";
    } else if(strlen($_POST['senha']) == 0) {
        echo "";
    } else {

        $user = $mysqli->real_escape_string($_POST['user']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM usuarios WHERE user = '$user' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['user'] = $usuario['user'];
            $_SESSION['email'] = $usuario['email'];
            $_SESSION['adm'] = $usuario['adm'];
            $_SESSION['setor'] = $usuario['setor'];

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
    <link rel="stylesheet" href="../_css/style_login1.0.css">
    <link rel="shortcut icon" href="../_img/favicon.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
</head>
    <body>

        <div class="cardlogin container px-5 py-3">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="col-12 col-md-6 col-lg-6">
                    <nav class="col-md-12">
                        <h1 class="text-start"><i class="bi bi-gear-fill"></i> gerenTI</h1>        
                        <span style="font-size: 25px;" class="text-start fw-light">Nosso gerente de TI</span>   
                        <hr>
                        <form action="" method="POST">
                            <fieldset>
                                <div class="row">
                                    <div class="col-12 my-3">
                                        <label for="usuario">Usuário:</label>
                                        <input class="form-control" type="text" name="user" id="user" placeholder="Digite seu usuário" required>
                                    </div>
    
                                    <div class="col-12 my-3">
                                        <label for="senha">Senha:</label>
                                        <input class="form-control" type="password" name="senha" id="senha" placeholder="Digite sua senha" required>
                                    </div>
    
                                    <div class="col-12 my-3">
                                        <input class="form-control btn-submit" type="submit" value="Entrar">
                                    </div>
                                    
                                </div>
                            </fieldset>
                        </form>
                        
                    </nav>
                </div>

                <div class="col-12 col-md-6 col-lg-6">
                    <figure>
                        <img src="../_img/teladelogin2.svg" alt="teladelogin">
                    </figure>
                </div>
            </div>
        </div>

        <?php
        include("../pages_components/footer.php");
        ?>

    <script src="../js/bootstrap.bundle.min.js"></script>
    </body>
</html>