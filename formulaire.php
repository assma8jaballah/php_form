<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Page contact</title>
    <link href="style.css" rel="stylesheet" type="text/css" media="all"/>
</head>
<body>
<form action="thanks.php" method="post">
    <h1>Contactez-nous</h1>
    <div>
        <label for="lastname">Nom :</label>
        <input type="text" id="lastname" name="lastname"/>
    </div>
    <div>
        <label for="firstname">Prenom :</label>
        <input type="text" id="firstname" name="firstname"/>
    </div>
    <div>
        <label for="mail">e-mail :</label>
        <input type="email" id="mail" name="mail">
    </div>
    <div>
        <label for="phonenumber">Téléphone :</label>
        <input type="tel" id="phonenumber" name="phone">
    </div>
    <div>
        <label for="subject">Sujet de la demande:</label>
        <SELECT name="subject" id="subject" size="1">
            <OPTION value="">Sujet de la demande</OPTION>
            <OPTION>Facture</OPTION>
            <OPTION>Contrat</OPTION>
            <OPTION>Réclamation</OPTION>
            <OPTION>Autre</OPTION>
        </SELECT>
    </div>
    <div>
        <label for="msg">Votre message :</label>
        <textarea id="msg" name="message"></textarea>
    </div>
    <div class="button">
        <button type="submit">Envoyer</button>
    </div>
</form>
</body>
</html>