<?php
$age = $_POST['age'];

switch (true) {
    case ($age <= 0):
        echo "Il y a un problème avec l'âge renseigné.";
        break;
    case ($age >= 18):
        echo "Je suis majeur.";
        break;
    case ($age < 18):
        echo "Je suis mineur.";
        break;
    default:
        echo "Il y a un problème avec l'âge renseigné.";
}

?>

<form action="exo5.php" method="post">
        <label for="age">Quel est votre âge ?</label>
        <input type="number" name="age" id="age" required>
        <button type="submit">Envoyer</button>
</form>
