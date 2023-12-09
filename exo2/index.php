<?php

require "classes/maison.classe.php";


$m1 = new maison(1950, 5, 200);
echo $m1->getId();

//echo"<br>";

$m2 = new maison(200, 3, 100);
//echo $m2->getId();

echo "<br>";

$m3 = new maison(2022, 6, 400);
//echo $m3->getId();

$maisons = [$m1, $m2, $m3];

var_dump($maisons);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

<!-- METHODE 1 POUR AFFICHER -->

    <!-- <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Date de création</th>
      <th scope="col">Nombre de chambre</th>
      <th scope="col">Surface</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><?= $m1->getId() ?></th>
      <td><?= $m1->getDate_creation() ?></td>
      <td><?= $m1->getNbr_room() ?></td>
      <td><?= $m1->getArea() ?></td>
    </tr>
    <tr>
      <th scope="row"><?= $m2->getId() ?></th>
      <td><?= $m2->getDate_creation() ?></td>
      <td><?= $m2->getNbr_room() ?></td>
      <td><?= $m2->getArea() ?></td>
    </tr>
    <tr>
      <th scope="row"><?= $m3->getId() ?></th>
      <td><?= $m3->getDate_creation() ?></td>
      <td><?= $m3->getNbr_room() ?></td>
      <td><?= $m3->getArea() ?></td>
    </tr>
  </tbody>
</table> -->


<!-- METHODE 2 POUR AFFICHER -->
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Date de création</th>
                <th scope="col">Nombre de chambres</th>
                <th scope="col">Surface</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php foreach ($maisons as $value) : ?>

                    <th scope="row"><?= $value->getId() ?></th>
                    <td><?= $value->getDate_creation() ?></td>
                    <td><?= $value->getNbr_room() ?></td>
                    <td><?= $value->getArea()." m²" ?></td>
            </tr>
        <?php endforeach ?>
        </tbody>
    </table>
</body>
</html>