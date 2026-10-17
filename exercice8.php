<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Fiche étudiant</title>
</head>
<body>
    <h1>Fiche étudiant</h1>

    <?php
    $nom = "Mobaligh";
    $prenom = "Tarik";
    $filiere = "IAP_S3";
    $annee = "2ème année";
    $age = 19;
    ?>

    <ul>
        <li>Nom : <?php echo $nom; ?></li>
        <li>Prénom : <?php echo $prenom; ?></li>
        <li>Filière : <?php echo $filiere; ?></li>
        <li>Année : <?php echo $annee; ?></li>
    </ul>

    <p>
        <?php
        echo "Je m'appelle $prenom $nom, j'ai $age ans et je suis actuellement en $annee en $filiere.";
        ?>
    </p>
</body>
</html>