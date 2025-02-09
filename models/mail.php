<?php
  $nombre = $_POST['nom'];
  $cod = random_int(1000, 9999);
  
    $destino = $_POST['correo'];
    $asunto = 'Correo de verificación';

    $mensaje = '
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Correo de Verificación</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
                margin: 0;
                padding: 0;
            }

            .container {
                width: 100%;
                padding: 20px;
                background-color: #f4f4f4;
                text-align: center;
            }

            .email-content {
                background-color: #fff;
                max-width: 600px;
                margin: 0 auto;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }

            .email-header {
                background-color: #483eff;
                color: white;
                padding: 10px;
                border-radius: 8px 8px 0 0;
            }

            .email-body {
                padding: 20px;
                text-align: center;
            }

            .email-body h2 {
                color: #333;
            }

            .email-body p {
                color: #666;
                line-height: 1.6;
            }

            .verify-btn {
                display: inline-block;
                padding: 10px 20px;
                background-color: #31336f;
                color: white;
                text-decoration: none;
                border-radius: 4px;
                margin-top: 20px;
            }

            .email-footer {
                margin-top: 30px;
                font-size: 12px;
                color: #999;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="email-content">
                <div class="email-header">
                        <h1>'.$cod.'</h1>
                </div>
                <div class="email-body">
                    <h2>Hola, '.$nombre.'</h2>
                    <p>Gracias por registrarte en nuestro sitio ampara Artes Bolivia. Por favor, haz clic en el botón de abajo para verificar tu dirección de correo electrónico.</p>
                    <a href="http://localhost/amparaArtesBol/controllers/verificar.php?email='.$destino.'" class="verify-btn">Verificar correo</a>
                    <p>Si no solicitaste este correo, simplemente ignóralo.</p>
                </div>
                <div class="email-footer">
                        <p>&copy; 2024 Tu Sitio Web. Todos los derechos reservados.</p>
                </div>
            </div>
        </div>
    </body>
    </html>
';

    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
    $headers .= 'From: '.$destino.' ';
    $headers .= 'Ampara Artes Bolivia' . "\r\n";

    $enviado = false;
if(mail($destino, $asunto, $mensaje, $headers)) 
  $enviado = true;
    
?>