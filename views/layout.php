<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if (isset($data['title'])) echo $data['title'] . " - "; ?>SpaceQuiz</title>
</head>
</title>
<link rel="icon" type="image/x-icon" href="./public/img/logo-saturne.png">

<!-- CSS -->
<link rel="stylesheet" href="./public/css/reset.css" type="text/css">
<link rel="stylesheet" href="./public/css/mobile.css" type="text/css">
<link rel="stylesheet" href="./public/css/desktop.css" type="text/css">
<!-- FONTS -->
<link href="https://fonts.googleapis.com/css2?family=Exo:ital,wght@0,100;0,300;0,400;0,500;1,300&display=swap"
    rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
<!-- FONTAWESOME -->
<script src="https://kit.fontawesome.com/3ddd2945f4.js" crossorigin="anonymous"></script>


</head>

<body>

    <!-- INCLUSION DU HEADER -->
    <?php require_once './views/partials/_header.php'; ?>


    <!-- INCLUSION DU CONTENU DES PAGES CHARGÉES -->
    <main>
        <?php require $templatePath; ?>
    </main>


    <!-- INCLUSION DU FOOTER -->

    <script src="./public/js/main.js"></script>
</body>

</html>