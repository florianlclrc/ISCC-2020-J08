<!DOCTYPE html>
<html>
    <head>
        <link href="style/vitrine.css" rel="stylesheet">
        <meta charset="utf-8"/>
        <title>Contact</title>
    </head>
  
    <body>
        <h2>CONTACT</h2>
        <form method="post" action="traitement.php">
        <fieldset id="Contact">
            <label>Nom et Prénom</label>
            <input type="text" name="Nom et Prénom" size="30" /><br />

            <label>Adresse e-mail</label>
            <input type="text" name="Adresse e-mail" size="30" /><br />

            <p class="Message">Message</p>
            <textarea name="comments" row="5" cols="40"></textarea>
            </fieldset>

            <p id="buttons">
                <input type="submit" value="Envoyer" />
            </p>
        </form>
    </body>

</html>