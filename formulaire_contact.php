<!DOCTYPE html>
<html>

<head>
    <title>Contactez-nous</title>
    <style>
        /* Styles pour le formulaire */
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin-top: 50px;
            font-size: 18px;
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        input,
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
            border: none;
            box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.3);
            font-size: 18px;
        }

        textarea {
            height: 150px;
            resize: none;
        }

        button {
            padding: 10px;
            border-radius: 5px;
            border: none;
            background-color: #007bff;
            color: #fff;
            font-size: 18px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0062cc;
        }

        /* Styles pour la page */
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f8f8;
        }

        h1 {
            text-align: center;
            margin-top: 50px;
            margin-bottom: 30px;
            font-size: 36px;
        }
    </style>
</head>

<body>
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

</body>

</html>