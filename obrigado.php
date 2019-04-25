<html>
    <head>
        <title>Obrigado! Em breve retornaremos o contato</title>
        <link rel="shortcut icon" href="./favicon.png" type="image/x-icon">
	<link rel="icon" href="./favicon.ico" type="image/x-icon">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css"/>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.css"/>
        <link rel="stylesheet" type="text/css" href="style.css"/>

        <script src="jquery/jquery.js"> </script>
        <script src="bootstrap/js/bootstrap.js"> </script>
        
    </head>
    <body>

        <?php 
			error_reporting(E_ALL ^ E_WARNING); 
            session_start();
            $name = $_SESSION['name']; 
        ?>    
            <div class="container">
                    <div class="row text-center m-4">
                        <div class="col-md-3">
                            
                        </div>
                        <div class="col-md-6 w-box">
                        <h1 class="texto-preto"> Obrigado <span class="destaque paleta-red"><?php echo $name?></span>!</h1>
                        <h3 class="texto-preto">Em breve entraremos em contato com você!</h3>
							<h5 class="texto-preto"> Um dos nossos consultores irá entrar em contato para passar mais informações.
                                                        <br /> Se preferir, compareça no endereço abaixo:
							<br /> Rua Coronel Carlos Porto, 141 - Centro, Jacareí/SP

							<br />
                 
                        <br/>
                            <div>
                                <img src="img/logo.png" alt="Instituto Educacional Iraci Veiga" width="250"/>
                            </div>
                        </div>
                        <div class="col-md-3">
                            
                        </div>
                        <div class="col-md-12">
                            <hr>
                                
                            <h4>Compartilhe com seus amigos! Eles não podem perder essa oportunidade!</h4>
                            <div class="row text-center">
                                <div class="col-md-12">
                                    <a class="bd" href="https://www.facebook.com/sharer/sharer.php?u=http://iraciveiga.com.br">
                                        <img src="img/face1.png" width="64" alt="Facebook"/>
                                    </a>
                                    
                                    <a class="bd" href="whatsapp://send?text=Link do Artigo: http://iraciveiga.com.br">
                                        <img src="img/wpp1.png" width="64" alt="WhatsApp"/>
                                    </a>
                                    <a class="bd" href="https://twitter.com/home?status=http://iraciveiga.com.br">
                                        <img src="img/twt1.png" width="64" alt="Twitter"/>
                                    </a> 
                                </div>    
                            </div>
                        </div>

                    </div>
                </div>
            </div>
    </body>
</html>
