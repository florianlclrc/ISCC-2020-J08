<!DOCTYPE html>
    <html>
        <body>
            
            <?php
                if (empty($_POST['name'])) {
                    echo "<p>Aucune donnée reçue.</p>";
                }
                else {
                    echo "<p>Nom et prénom : ".$_POST['name']. "</p>";
                }

                if (empty($_POST['mail'])) {
                    echo "<p>Aucun donnée reçue.</p>";
                }
                else {
                    echo "<p>E-mail : ".$_POST['mail']. "</p>";
                }

                if (empty($_POST['message'])) {
                    echo "<p>Aucune donnée reçue.</p>";
                }
                else {
                    echo "<p>Message : ".$_POST['message']. "</p>";
                }
            ?>
        </body>
    </html>