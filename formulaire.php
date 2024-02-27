<?php  
$nom = filter_input(INPUT_POST, "nom");
$telephone = filter_input(INPUT_POST, "telephone");
$email = filter_input(INPUT_POST, "email");
$afficherCarte = true;

if($nom && $telephone && $email) {
    $afficherCarte = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/formulaire/formulaire.css">
    <title>Formulaire</title>
</head>
<body>
<?php if($afficherCarte):?>
    <h1>Formulaire PHP</h1>
    <form method="POST" class="formulaire">
            <label for="nom">Nom</label>
            <input id="nom" name="nom" type="text" required>
            
            <label for="telephone">téléphone</label>
            <input id="telephone" name="telephone" type="text">
            
            <label for="email">Email</label>
            <input id="email" name="email" type="email">
            
            <input id="submit" type="submit" value="envoyez les infos">
    </form>
    <div class="carte">
        <div class="contain">
            <p><?= $nom ?></p>
            <p><?= $telephone ?></p>
            <p><?= $email ?></p>
        </div>
    </div>
    <?php endif; ?>    
</body>
</html>