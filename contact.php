<!DOCTYPE html>
<html>        
    <head>
        <title>Olivier Chini, CV d'un futur développeur</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="cv_styles.css">
        <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
        <link rel="stylesheet" type="text/css" href="slick/slick-theme-cv.css"/>
    </head>

    <body>

		<header>
            <h1 class="title_formu">Formulaire de contact</h1>
        </header>

        <div class="contacte_moi">
            <p>Mon profil vous intéresse ? J'en suis ravi ! Vous pouvez me contacter également sur mobile ou directement par mail sans utiliser le formulaire</p>
            <ul>
                <li>Télephone mobile : 06.98.70.24.38</li>
                <li>Mel : chiniolivier@yahoo.fr</li>
                <li>A très bientôt !</li>
            </ul>
        </div>


		<div class="form-container">
    		<form class="formulaire" method="POST" action="contact.php">
    			
    			<p>
    				<label for="nom">Nom ou raison sociale :</label> 
    				<input type="text" name="nom" id="nom"/>
    			</p>

    			<p>
    				<label for="email">Mail :</label> 
    				<input type="email" name="email" id="mail"/>
    			</p>

    			<p>
    				<label for="sujet">Sujet :</label> 
    				<input type="text" name="sujet" id="sujet"/>
    			</p>

    			<p>
    				<label for="message">Votre message :</label> 
    				<textarea name="message" id="message"></textarea>
    			</p>

    			<p>	
    				<input class="button" name="envoi" type="submit" value="envoi" />
    			</p>			
    		</form>
        </div>
            

		<?php

			$mon_mail = 'chiniolivier@yahoo.fr';
			$message_envoye = 'Votre message a bien été pris en compte, revenez au formulaire en cliquant <a class="return" href="contact.php">ici</a>';
            $message_non_envoye = 'l\'envoi de votre message a échoué';
            $champ_invalid = 'champ mal renseigné, au moins un mail et un nom sont nécessaires pour finaliser l\' envoi de votre message';
            $nom = $email = $sujet = $message ="";

            

                    // DEBUT CONDITION ENVOI MESSAGE SUR MON MON MAIL//

            if(isset($_POST['envoi'])){

                function secu($donnees){
                $donnees = trim($donnees);
                $donnees = stripslashes($donnees);
                $donnees = strip_tags($donnees);
                return $donnees;
                }

                $nom = secu($_POST['nom']);
                $email = secu($_POST['email']);
                $sujet = secu($_POST['sujet']);
                $message = secu($_POST['message']);
                
                if((!empty($nom)) && (!empty($email))){
                   

                    $entete_mail = 'De : ' .$nom. '  <' .$email. '>'. "\r\n";

                    // REMPLACEMENT DES CARACTERES SPECIAUX//

                    $message = str_replace("&#039;","'",$message);
                    $message = str_replace("&#8217;","'",$message);
                    $message = str_replace("&quot;","'",$message);
                    $message = str_replace('&lt;br&gt;','',$message);
                    $message = str_replace('&lt;br /gt;','',$message);
                    $message = str_replace("&lt;","&lt;",$message);
                    $message = str_replace("&lt;","&gt;",$message);
                    $message = str_replace("&amp;","&",$message);

                     // ENVOI MAIL UTILISATEUR//

                    if(mail($mon_mail, $sujet, $message, $entete_mail)){

                        echo '<p class="message">' .$message_envoye. '.</p>';
                        
                    }

                    else{

                        echo '<p class="message">' .$message_non_envoye. '</p>';
                    }
                }

                else{
                	echo $champ_invalid;              
				}
            }
		?>                            
    </body>

    <footer>
        <ul>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="mentions.php">Mentions l&eacute;gales</a></li>
        </ul>
    </footer>
</html>