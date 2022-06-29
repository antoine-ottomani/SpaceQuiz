<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if (isset($data['title'])) echo $data['title'] . " - "; ?>SpaceQuiz</title>
</head>
</title>
<link rel="icon" type="image/x-icon" href="./public/img/utils/logo.png">

<!-- CSS -->
<link rel="stylesheet" href="./public/css/style.css" type="text/css">

<!-- FONTAWESOME -->
<script src="https://kit.fontawesome.com/3ddd2945f4.js" crossorigin="anonymous"></script>
<script src="./public/js/main.js" defer></script>


</head>

<body>

    <!-- INCLUSION DU HEADER -->
    <?php require_once './views/partials/_header.php'; ?>


    <!-- INCLUSION DU CONTENU DES PAGES CHARGÉES -->
    <main>
        <?php require $templatePath; ?>
    </main>


    <!-- INCLUSION DU FOOTER -->
    <?php require_once './views/partials/_footer.php'; ?>


</body>

</html>