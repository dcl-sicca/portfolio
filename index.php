<?php
	session_start();
	$_SESSION['use_session'] = 'yes';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link href="https://fonts.googleapis.com/css?family=Archivo:700" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css?family=Orbitron:500" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Charmonman" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Unlock" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <title>Document</title>
</head>


<body>
<div id="shadowing"></div>
  
<header id="header" role="banner" class="main-header">
<nav>
    <!-- Hightbar header -->
    <div class="hightbar">
        <div class="logo"></div>
        <!-- Barre de menu -->
        <div class="nav_menu">
            <ul>
                <li><a href="index.php" target="_self">accueil</a></li>
                <li id="apropos"><a href="#sectionApropos" target="_self">à propos</a></li>
                <li id="moncv"><a href="#sectionCV" target="_self">mon cv</a></li>
                <li id="realisations"><a href="realisations.php" target="_self">réalisations</a></li>
                <li id="references"><a href="references.php" target="_self">références</a></li>
                <!-- <li id="en-cours"><a href="http://blog2.ameria.fr/" target="_blank">blog</a></li> -->
                <li><a href="http://blog2.ameria.fr/" target="_blank">blog</a></li>
                <li id="contactform"><a href="#sectionContact" target="_self">contact</a></li>
            </ul>
        </div>
    </div>
</nav>
</header>
    <div id="ParallaxLion"></div>
    <main>
        <!-- à propos -------------------------------------------------------------------------------------------------------------------------------------->
        <div id="sectionApropos">
            <div class="ContentSection">
                <h1>à propos</h1>
                <div id="QuoteImg">
                    <img src="img/quote.png">
                </div> 
               <p id="lettrine" class="flotte"><img src="img/LABEL_GEN_VF_CMJN.png">Passionné de graphisme et de code, j'exerce depuis plus de 15 ans dans le milieu de la communication et d'Internet. J'ai intégré fin 2018 la formation de développeur web et web mobile d'Aformac (labelisé grande école du numérique) pour renforcer mes connaissances en matière de développement. Le secteur du web est en perpétuelle évolution, et j’élabore sans relâche une veille technologique quotidienne pour appliquer à mes travaux de nouveaux procédés de développement.</p>

               <br><p>Ma vision du web est un mode de partage et de connaissances, où le milieu du libre y exerce une grande influence, de ce fait je suis présent sur de nombreux réseaux et forum pour participer activement à cette évolution et proposer lors de mes futures missions professionnelles des projets moderne et solide.
               </p> 
            </div>
        </div>

        <!-- Parallax Lion vide -->
        <div id="parallaxLionvide"></div>
        <!-- Mon CV ---------------------------------------------------------------------------------------------------------------------------------------->
        <div id="sectionCV">
            <div class="ContentSection">
                <p classe="flotte">
                    <img src="img/CV-sicca.jpg" alt="">
                </p>
                    <div class="pdf">
                        <img src="img/logos/logo-pdf.png" alt="">
                        <a href="img/cv-laurent-juy.pdf">Télécharger mon CV en PDF</a>
                    </div>
                </p>
            </div>
        </div>
        <!-- Parallaxe Aigle -->
        <div id="parallaxAigle"></div>

        <!-- Contact -------------------------------------------------------------------------------------------------------------------------------------->
        <div id="sectionContact">
            <form method="post" action="<?php echo strip_tags($_SERVER['REQUEST_URI']); ?>">
                <div class="contact">
                    <div id="titreContact"><h1>CONTACT <br></h1></div>
                    <fieldset><legend>Vos coordonnées</legend>
                        <input type='text' name='nom' id='nom' maxlength='50' placeholder="NOM *" required>
                        <input type='text' name='prenom' id='prenom' maxlength='50' placeholder="PRÉNOM *" required>   
                        <input type='email' name='email' id='email' maxlength='50' placeholder="EMAIL *" required>
                        <input type='telephone' name='telephone' id='telephone' maxlength='10' placeholder="TELEPHONE *" required>
                        <input type='postal' name='postal' id='postal' maxlength='5' placeholder="CODE POSTAL *" required>
                        <input type='town' name='ville' id='ville' maxlength='50' placeholder="VILLE *" required>
                    </fieldset>
                    <input type='objet' name='objet' id='objet' maxlength='50' placeholder="OBJET *" required>
                    <textarea name='message' id='message' placeholder="Message *"></textarea>
                    <img src="img-captcha.php"/><input type="text" name="capa"/>
                    <input type="submit" value="Envoyer"><input type="reset">
                    <div class="clearer"></div>
			        <div id="result_contact"></div>
                </div>
            </form>
            <?php
                    require('contact/PHPMailer/class.phpmailer.php'); 
                    include_once 'captcha.class.php';

                    // S'il y des données de postées
                    if ($_SERVER['REQUEST_METHOD']=='POST') {

                        // (1) Code PHP pour traiter l'envoi de l'email

                        // Récupération des variables et sécurisation des données
                        $nom     = $_POST['nom']; 
                        $prenom   = $_POST['prenom'];
                        $email   = htmlentities($_POST['email']);// htmlentities() convertit des caractères "spéciaux" en équivalent HTML
                        $telephone   = htmlentities($_POST['telephone']);
                        $postal   = htmlentities($_POST['postal']);
                        $ville   = $_POST['ville'];
                        $objet   = $_POST['objet'];
                        $message = htmlentities($_POST['message']);

                        // Variables concernant l'email
                        
                        $mail = new PHPMailer();
                        $mail->Host = 'smtp.laposte.net';
                        $mail->SMTPAuth   = true;
                        $mail->Port = 25; // Par défaut

                        // Authentification
                        $mail->Username = "sicca";
                        $mail->Password = "Am35sicc@25$$";

                            // Expéditeur
                        $mail->SetFrom('sicca@laposte.net', $prenom.' '. $nom);
                        // Destinataire
                        $mail->AddAddress('laurent.juy@gmail.com', 'JUY Laurent');
                        // Objet
                        $mail->Subject = $objet;

                        // Votre message

                        $bodyMessage='<p>Bonjour, vous avez reçu un message à partir de votre site web Sicca-area.</p>';
                        $bodyMessage .='<p>Nom : '.$prenom.' '.$nom.'</p></br>';
                        $bodyMessage .='<p>'.$postal.' '.$ville.'</p></br>';
                        $bodyMessage .='<p>Telephone : '.$telephone.'</p></br>';
                        $bodyMessage .='<p>Email : '.$email.'</p></br>';
                        $bodyMessage .='<p>'.$message.'</p>';

                        $mail->MsgHTML($bodyMessage);

                        

                        

                        // Modifier l'encodage du mail
                        $mail->CharSet = "utf-8";

                        // Modifier l'adresse de réponse
                        $mail->AddReplyTo($email, $prenom.' '. $nom);

                        
                            
                        if( PhpCaptcha::Validate($_POST['capa'], true) ){
                            //true
                           
                            // Envoi du mail avec gestion des erreurs
                            if(!$mail->Send()) {
                                echo 'Erreur : ' . $mail->ErrorInfo;
                            } 
                            else {
                                echo 'Message envoyé !';
                            }
                        }
                        else {
                            echo 'Erreur Captcha !';
                        }     

                        
                    }
                ?>
</div>
        <!-- Parallaxe Aigle-->
        <div id="parallaxBallon"></div>
    </main>

    <footer>
        <!-- Partenaires ----------------------------------------------------------------------------------------------------------------------------------->
        <?php include('partenaires.php'); ?>
        <!-- Mentions et réseaux sociaux -------------------------------------------------------------------------------------------------------------------->
        <?php include('social.php'); ?>

        <div id="box">
            <div id="boxcontent"  onclick="closebox()">  </div>    
        </div>
        
    </footer>

    <button type="button" id="backtop" title="Haut de page">Haut de page</button>

    <script src="js/hautpage-seomix.js"></script>
    <script src="js/script.js"></script>
    <script src="js/ajax.js"></script>
    <script src="js/lightbox-fade.js"></script>
</body>

</html>