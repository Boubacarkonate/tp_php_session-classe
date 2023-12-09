<?php
//démarrage de la session
session_start();

//variables $_POST les données du formulaire
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$adresse = $_POST['adresse'];
$code_postal = $_POST['code_postal'];

$btnRestart = @$_POST['restart'];
$btnModification = @$_POST['modification'];
$btnSave  = @$_POST['save'];

//les variables du formulaire mises en session
$_SESSION['nomLivraison'] = $nom;
$_SESSION['prenomLivraison'] = $prenom;
$_SESSION['adresseLivraison'] = $adresse;
$_SESSION['cpLivraison'] = $code_postal;


//si confirmation alors traitement des datas pour la BD 
if (isset($nom, $prenom, $adresse, $code_postal) && !empty($nom) && !empty($prenom) && !empty($adresse) && !empty($code_postal)) {


    if (isset($btnSave)) {
        $host = 'localhost';
        $dbname = 'ganesh';
        $username = 'root';
        $password = '';

        try {

            $PDO = new PDO("mysql:host=$host; dbname=$dbname", $username, $password);

            $stmt = $PDO->prepare("INSERT INTO tp_php_exo3 (name, firstname, address, zipCode) VALUES (:nom, :prenom, :adresse, :cp) ");
            $stmt->execute(array(
                ":nom" => $nom,
                ":prenom" => $prenom,
                ":adresse" => $adresse,
                ":cp" => $code_postal
            ));

            header("location: envoyer.php");
        } catch (PDOException $e) {

            echo "message d'erreur :" . $e->getMessage();
        }
    }
} else {
    echo "Vous n'avez pas renseigné toutes les informations";
}

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
    <h1>PAGE DE CONFIRMATION</h1>
    <form action="" method="post">
        <fieldset>
            <legend>Confirmation : </legend>
            <label for="nom">Nom:</label>
            <input type="text" name="nom" value="<?= $_SESSION['nomLivraison']; ?>" required>

            <label for="prenom">Prénom:</label>
            <input type="text" name="prenom" value="<?= $_SESSION['prenomLivraison']; ?>" required>

            <label for="adresse">Adresse:</label>
            <input type="text" name="adresse" value="<?= $_SESSION['adresseLivraison'] ?>" required>

            <label for="code_postal">Code Postal:</label>
            <input type="text" name="code_postal" value="<?= $_SESSION['cpLivraison'] ?>" required>
        </fieldset>
        <input type="submit" name="restart" value="recommencer">
        <input type="submit" name="modification" value="modifier"></button>
        <input type="submit" name="save" value="Envoyer">
    </form>

    <?php
    //si recommencer alors suppression des sessions et redirection vers fichier recommencer.php
    if (isset($btnRestart)) {
        unset($_SESSION['nomLivraison']);
        unset($_SESSION['prenomLivraison']);
        unset($_SESSION['adresseLivraison']);
        unset($_SESSION['cpLivraison']);

        header('Location: recommencer.php');
    }

    //si modifier alors redirection vers modification.php
    if (isset($btnModification)) {

        header('Location: modification.php');
    }

    ?>
</body>

</html>