<?php
                    require('PHPMailer/class.phpmailer.php');
                    include_once 'captcha.class.php';
                    session_start();
                    header('Content-Type:text/xml; Charset:UTF-8;');
                    echo '<?xml version="1.0" encoding="UTF-8"?>';

                    $type = 'no';
                    
                    if( $_SESSION['use_session'] != 'yes' ){
                        
                        $type = 'session';
                        
                    }elseif( $_SESSION['contact'] && (time()-$_SESSION['contact'] < TIME_LIMIT) ){
                        
                        $type = 'time';
                        
                    }else{

                        if( $type == 'no' ){
			
                            if( !PhpCaptcha::Validate($_POST['capa'], true) ){
                            
                                $type = 'captcha';
                            
                            }else{




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

                                    
                                        
                                    
                                        // Envoi du mail avec gestion des erreurs
                                        if(!$mail->Send()) {
                                            echo 'Erreur : ' . $mail->ErrorInfo;
                                        } else {
                                            echo 'Message envoyé !';
                                        }

                                    
                                }
                ?>
<root>
<error><?php echo $type; ?></error>
<?php
if( $type == 'field' ){

echo '<fields>';
foreach($fields as $field){
echo '<field>'.$field.'</field>';
}
echo '</fields>';

}elseif( $type == 'envoi' ){

echo '<exception>'.$e.'</exception>';

}elseif( $type == 'time' ){

echo '<seconds>'.(TIME_LIMIT-time()+$_SESSION['contact']).'</seconds>';

}
?>
</root>