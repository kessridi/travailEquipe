
    <?php
 
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Traitement du formulaire ici
        $nom = $_POST['nom'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        // Envoyer l'e-mail ici
        $to = 'votre@email.com';
        $subject = 'Nouveau message depuis le formulaire de contact';
        $headers = 'From: ' . $email . "\r\n" .
            'Reply-To: ' . $email . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

        $message_email = "Nom : " . $nom . "\r\n" .
            "Email : " . $email . "\r\n" .
            "Message : " . $message;

        mail($to, $subject, $message_email, $headers);

        // Afficher un message de confirmation
        echo '<h2>Votre message a été envoyé avec succès !</h2>';
    } else {
        // Afficher le formulaire de contact
        echo '<h1>Contactez-nous</h1>';
        echo '<form method="post" action="">';
        echo '<label for="nom">Nom :</label>';
        echo '<input type="text" id="nom" name="nom" placeholder="Entrez votre nom" required>';

        echo '<label for="email">Email :</label>';
        echo '<input type="email" id="email" name="email" placeholder="Entrez votre email" required>';

        echo '<label for="message">Message :</label>';
        echo '<textarea id="message" name="message" placeholder="Entrez votre message" required></textarea>';

        echo '<button type"submit">Envoyer</button>';
        echo '</form>';
    }
    ?>

