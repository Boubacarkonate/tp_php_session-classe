<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1 {
            text-align: center; padding: 5%;}
    </style>
</head>
<body>
    <h1>PAGE DE LIVRAISON</h1>
    <form action="confirmation.php" method="post">
        <fieldset>
            <legend>Livraison : </legend>
            <label for="nom">Nom:</label>
            <input type="text" name="nom" placeholder="Votre nom" required>

            <label for="prenom">Prénom:</label>
            <input type="text" name="prenom" placeholder="Votre prénom" required>

            <label for="adresse">Adresse:</label>
            <input type="text" name="adresse" placeholder="Votre adresse" required>

            <label for="code_postal">Code Postal:</label>
            <input type="text" name="code_postal" placeholder="Votre code postal" required>
        </fieldset>
        <input type="submit" value="suite de la commande">
    </form>
</body>

</html>