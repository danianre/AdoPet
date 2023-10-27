<?php
    //Con require_once se incluye el archivo mdbUsuario.php
    require_once (__DIR__."/../mdb/mdbUsuario.php");
    require (__DIR__.'/../../lib/PHPMailer/PHPMailerAutoload.php');
        
        //Se obtiene el correo del formulario del Olvido Contraseña,
        //los datos son recibidos por el método POST
        $correo = filter_input(INPUT_POST,'correo');
       
        //Se llama a la funcion autenticarUsuario() que esta en mdbUsuario.php
        $user = verUsuarioPorCorreo($correo);
        $msg = "El correo no es válido";
        $type_msg="error";
        
        if($user != null){
            //Si el usuario existe se envía un correo de recuperación de contraseña
            $msg = "El correo se encontró en nuestra Base de Datos";

            $mail = new PHPMailer(true);
            $mail->isSMTP();  // telling the class to use SMTP
            $mail->CharSet = 'UTF-8';
            $mail->Encoding = "base64";
            $mail->Host = "smtp.gmail.com";
            $mail->Port = 587;
            $mail->SMTPAuth = true;
            $mail->Username = "adopetsm@gmail.com"; // Usuario servidor de correo
            $mail->Password = "rrjafkvhjandhwkq";      // Contraseña del usuario
            $mail->SMTPSecure = 'tls';
            $mail->setFrom('adopetsm@gmail.com', 'Administrador de Adopet');
            $mail->AddAddress($correo);
            $mail->Subject  = "Cambio de contraseña en Adopet";
            $mail->isHTML(true);
            $body= file_get_contents("mensajecorreo.html");
            $body = str_replace('%usuario%', $user->getNombre(), $body);
            $body = str_replace('%password%', $user->getPassword(), $body);
                        
            //$mail->Body = $body;
            $mail->MsgHTML($body);
            $mail->WordWrap = 50;
            $type_msg="success"; //Con éxito

            if($mail->Send()){
                $msg="Puede realizar la recuperación de la contraseña ingresando a  su correo: ".$correo;
            }else{
                $msg="No se pudo enviar el correo a ".$correo;
                $type_msg="error";
                
            }

            

        }

        $resultado = [
            'msg' => $msg,
            "type" => $type_msg
        ]; //Vector PHP
        
        echo json_encode($resultado); // Convirtiendo en jSon
        




