<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <form action="pruebaOlvidoC.php" method="POST">
            <input type="text" name="email" value="" placeholder="email" /> <br/>
            <input type="submit" value="Recordar contraseña" />
        </form>
        
        <?php
        require_once (__DIR__."/../modelo/DAO/DataSource.php");
		try{
			if(isset($_POST['email']) && !empty($_POST['email'])){
                $pass = '*****';
                $mail = $_POST['email'];
                
                $sql = "SELECT password FROM usuario WHERE correo='$mail'";

                if ($conexion->query($sql) === TRUE) {
                    echo "usuario modificado correctamente ";
                } else {
                    echo "Error modificando: " . $conexion->error;
                }
                
                $to = $_POST['email'];//"correo del destinatario";
                $from = "From: " . "Adopet" ;
                $subject = "Recordar contraseña";
                $message = "Su contraseña en Adopet es: " . $pass;

                mail($to, $subject, $message, $from);
                echo 'Correo enviado satisfactoriamente a ' . $mail;
            }
            else 
                echo 'Informacion incompleta';
		}
		catch (Exception $e) {
			echo 'Excepción capturada: ',  $e->getMessage(), "\n";
		}
            
        ?>
    </body>
</html>