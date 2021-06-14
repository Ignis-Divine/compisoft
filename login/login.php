<?php 
session_start();
?>

<?php require_once("includes/connection.php"); ?>
<?php include("includes/header.php"); ?>
<?php
if(isset($_SESSION["session_username"])){
    header("Location: ../estadisticas");
}
    if(isset($_POST["login"])){
        if(!empty($_POST['username']) && !empty($_POST['password'])){
            $username=$_POST['username'];
            $password=$_POST['password'];
            $res=mysqli_query($conexion, "SELECT * FROM usertb WHERE username='".$username."' AND password='".$password."'");
            $numrows=mysqli_num_rows($res);
            if($numrows!=0){
                while($row=mysqli_fetch_assoc($res)){
                $dbusername=$row['username'];
                $dbpassword=$row['password'];
                }
                if($username == $dbusername && $password == $dbpassword){
                $_SESSION['session_username']=$username;
                header("Location: ../estadisticas");
                }
            }else{
                $message =  "Nombre de usuario ó contraseña invalida!";
            }
        }else{
            $message = "Todos los campos son requeridos!";
        }
    }
?>
    <div class="container mlogin">
        <div id="login">
            <h1>Logueo</h1>
            <form name="loginform" id="loginform" action="" method="POST">
                <p>
                    <label for="user_login">Nombre De Usuario<br />
                    <input type="text" name="username" id="username" class="input" value="" size="20" /></label>
                </p>
                <p>
                    <label for="user_pass">Contraseña<br />
                    <input type="password" name="password" id="password" class="input" value="" size="20" /></label>
                </p>
                <p class="submit">
                <input type="submit" name="login" class="button" value="Entrar" />
                </p>
            </form>
        </div>
    </div>
<?php if (!empty($message)) {echo "<p class=\"error\">" . "Mensaje: ". $message . "</p>";} ?>