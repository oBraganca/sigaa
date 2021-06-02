<?php 

require_once 'vendor/autoload.php';

session_start();

$error = null;

if(isset($_POST['btn_send'])):
    $read = new \CRUD\Read;

    $cpf = $_POST['cpf'];
    $passwd = $_POST['passwd'];
    $passwd = md5($passwd);

    $resultado=$read->read('user_alun', "WHERE cpf = '$cpf' AND password = '$passwd'");
    
    if($resultado){
        $_SESSION['logado'] = true;
        $_SESSION['id_user'] = $resultado[0]['id'];
        $_SESSION['login_user'] = $resultado[0]['name'];
        header("Location: view/index.php");
    }else {
        $error = "Ops... Algo errado, tente novamente";
    }
    
    
endif;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/login.css">
    <script src="js/app.js"></script>
    <link href="img/cefet-mg-logo.ico" rel="icon" type="image/x-icon" />
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
</head>
<body>
    <div class="main-main">
        <main>
            <div class="container">
                <div class="logo">
                    <div class="menu-opc">
                        <a href="">
                            <p>SIGAA</p><p>(Acadêmico)</p>    
                        </a>
                    </div>
                    <div class="menu-opc">
                        <a href="">
                            <p>SIPAC</p><p>(Administrativo)</p>
                        </a>
                    </div>
                    <div class="menu-opc">
                        <a href="">
                            <p>SIGRH</p><p>(Recursos Humanos)</p>        
                        </a>
                    </div>
                    <div class="menu-opc">
                        <a href="">
                            <p>SIGAdmin</p><p>(Administração e Comunicação)</p>
                        </a>
                    </div>
                    <div class="comp">
                        <img src="https://img.icons8.com/dusk/64/000000/chrome.png"/> 
                        Esse site é compativel com o Google Chrome
                    </div>
                </div>
                <div class="content">
                    <div>
                        <img src="https://img.icons8.com/dusk/50/000000/enter-2.png"/>
                    </div>
                    <form action="index.php" method="POST">
                        <div class="inp-cls">
                            <i class="fas fa-id-badge"></i>
                            <input type="text" placeholder="CPF" name="cpf">
                        </div>

                        <div class="inp-cls">
                            <i class="fas fa-unlock-alt"></i>
                            <input type="password" placeholder="Senha" name="passwd">
                        </div>
                        
                        <button type="submit" value="Enviar" name="btn_send">Envie</button>
                        <center>
                            <br><?php echo $error?>
                        </center>
                        <div class="recall-acct">
                            <div>
                                <a href="" >
                                    <p>Criar Identificação Única <i class="fas fa-arrow-right"></i></p>
                                </a>
                            </div>
                            <div>
                                <a href="">
                                    <p>Esqueci minha senha</p>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </main>
        <div class="popup-box">
            <div class="close">
                <i class="far fa-window-close" id="close-pop"></i>
            </div>
            <div class="popup-content">
                <div class="warning">
                    <i class="fas fa-exclamation-triangle"></i>
                    <p>ATENÇÃO!</p>
                    <i class="fas fa-exclamation-triangle"></i>
                </div>
            
                <div class="warning-content">
                    <p> O seu login é o seu CPF e sua senha é a mesma cadastrada na 
                    <a href="">Identificação Única.</a></p>
                    <p> O sistema diferencia letras maiúsculas de minúsculas na senha.</p>
                </div>
            
            </div>
        </div>
    </div>
</body>
</html>