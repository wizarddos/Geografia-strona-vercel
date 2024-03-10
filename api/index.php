<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Design Thinking - 2c</title>

    <!-- css -->
    <?php require_once "elements/basic-stylesheets.php" ?>
</head>
<body>
    <?php require_once "elements/header.php"?>
    <section class = "whole-page-header">
        <h1 class = "enormous-text centered">Design Thinking</h1>
        <p class = "centered">Projekt klasy 2c</p>
    </section>
    <section class="about-dt">
        <section class = "about-dt-text">
            <h2>Co to <span class = "bold">Design thinking</span>?</h2>
            <p>Design Thinking to podejście do tworzenia nowych produktów i usług w oparciu o głębokie zrozumienie problemów i potrzeb użytkowników.</p>
            <p>Projektanci i zespoły projektowe tworzą nowe koncepcje takie jak nowe produkty bądź usługi</p>
            <a href="more.php">Dowiedz się więcej</a>
        </section>
        <section class="splitter">
        </section>
        <section class="about-dt-image">
            <img src="assets/img/graph.png" alt="graph icon" class = "image">
        </section>
    </section>
    <section class="ourProjects">
        <h2 class = "centered projects-header">A jak to wygląda u nas?</h2>
        <section class="project-excerpts">
            <?php

            require_once "elements/projects.php";
                for($i = 0; $i <= 5; $i++){
                    echo"
                        <div class='project-card'>
                            <h3 class = 'project-title'>$projects[$i]</h3>
                            <p class = 'excerpt'>$excerpts[$i]</p>
                            <a href='project.php?id=$i' class = 'project-readMore project-li'>Więcej o projektcie</a>
                        </div>
                    ";
                }

            ?>
        </section>
        <br/><br/>
        <a href="schedule.php" class = "schedule-link">Harmonogram naszej pracy</a>
    </section>
    <?php require_once "elements/footer.php" ?>
</body>
</html>