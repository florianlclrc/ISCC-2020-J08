<!DOCTYPE html>
    <html>
        <head>
            <title>Vitrine</title>
            <meta charset="utf-8">
            <link href="style/vitrine.css">
        </head>

        <?php
            include "header.php";

            if($_GET["page"]== "accueil") {
                include "vitrine-accueil.php";
            }

            elseif ($_GET["page"]== "programme") {
                include "vitrine-programme.php";
            }

            elseif ($_GET["page"]== "contacts") {
                include "vitrine-contact.php";
            }

            elseif ($_GET["page"]== "contacts") {
                include "contact-form.php";
            }

            else {
                include "404.php";
            }
        
            include "footer.php";
        ?>
    </html>