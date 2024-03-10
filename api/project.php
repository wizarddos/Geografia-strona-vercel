<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
        require_once "elements/projects.php";
        $projectID = htmlentities($_GET['id'], ENT_QUOTES, "UTF-8"); 
        if(!is_numeric($projectID)){
            echo "BŁĄD:  Niewłaściwy identyfikator projektu!";
            die();
        }   
    ?>
    <title> <?php echo $projects[$projectID] ?> - Projekt</title>

    <?php require_once "elements/basic-stylesheets.php" ?>
    <link rel="stylesheet" href="assets/styles/projects.css">
</head>
<body>
    <?php require_once "elements/header.php" ?>
    <?php
        
        if(file_exists( "projects/".$projectID.".php")){
            include_once "projects/".$projectID.".php";
        }else{
            require_once "projects/default.php";
        }

    ?>

    <?php require_once "elements/footer.php" ?>
</body>
</html>