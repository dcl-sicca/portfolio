<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
<div id="section8">
    <form method="post" action="contact.php">
        <div class="contact">
            <div id="titreContact"><h1>CONTACT <br></h1></div>
            <fieldset><legend>Vos coordonnées</legend>
                <input type='text' name='nom' id='nom' maxlength='20' placeholder="NOM *" required>
                <input type='text' name='prenom' id='prenom' maxlength='20' placeholder="PRÉNOM *" required>   
                <input type='email' name='email' id='email' maxlength='20' placeholder="EMAIL *" required>
                <input type='telephone' name='telephone' id='telephone' maxlength='10' placeholder="TELEPHONE *" required>
                <input type='postal' name='postal' id='postal' maxlength='5' placeholder="CODE POSTAL *" required>
                <input type='town' name='ville' id='ville' maxlength='5' placeholder="VILLE *" required>
            </fieldset>
            <input type='objet' name='objet' id='objet' maxlength='30' placeholder="OBJET *" required>
            <textarea placeholder="Message *"></textarea>
            <input type="submit" value="Envoyer"><input type="reset">
        </div>
    </form>
</div>
        <script src="js/contact.js"></script>
</body>
</html>