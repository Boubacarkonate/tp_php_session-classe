<?php
//démarrage de la session pour récupérer les clés existantes
session_start();
// var_dump($_SESSION);
?>

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
    <h1>PAGE DE MODIFICATION</h1>
    <form action="confirmation.php" method="post">
        <fieldset>
            <legend>Livraison : </legend>
            <label for="nom">Nom:</label>
            <input type="text" name="nom" value="<?= $_SESSION['nomLivraison']; ?>" required>

            <label for="prenom">Prénom:</label>
            <input type="text" name="prenom" value="<?= $_SESSION['prenomLivraison']; ?>" required>

            <label for="adresse">Adresse:</label>
            <input type="text" name="adresse" value="<?= $_SESSION['adresseLivraison'] ?>" required>

            <label for="code_postal">Code Postal:</label>
            <input type="text" name="code_postal" value="<?= $_SESSION['cpLivraison'] ?>" required>
        </fieldset>
        <input type="submit" value="Envoyer">
    </form>
</body>

</html>