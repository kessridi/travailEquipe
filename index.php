<!DOCTYPE html>
<html>

<head>


    <title>Contactez-nous</title>

    <link rel="stylesheet" href="contact.css">

</head>



<body>
    <h1>Contactez-nous</h1>
     <?php include 'contact.php'; ?>
    <form method="post" action="" style="display: flex; flex-direction: column; align-items: center; justify-content: center; margin-top: 50px; font-size: 18px;">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" placeholder="Entrez votre nom" required>

        <label for="email">Email :</label>
        <input type="email" id="email" name="email" placeholder="Entrez votre email" required>

        <label for="message">Message :</label>
        <textarea id="message" name="message" placeholder="Entrez votre message" required></textarea>

        <button type="submit" style="padding: 10px; border-radius: 5px; border: none; background-color: #007bff; color: #fff; font-size: 18px; cursor: pointer;">Envoyer</button>
    </form>
</body>


</html>