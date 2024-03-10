<header class = "header">
    <button class = "menu-open" id = "menu-open"><i class="fa-solid fa-bars icon"></i></button>
    <ul class = "header-projects-ul">

        <?php
        require_once "projects.php";
                for($i = 0; $i <= 5; $i++){
                    echo "<li><a href='project.php?id=$i' class = 'project-li'>$projects[$i]</a></li>";
                }
        ?>
    </ul>
    <br/>
</header>
<nav class="hidden navbar" id = "navbar">
    <h3 class = "centered nav-el" >Nasze projekty:</h3>
    <ul class = "nav-project-ul">
        <?php
            for($i = 0; $i <= 5; $i++){
                echo "<li><a href='project.php?id=$i' class = 'nav-el project-li'>$projects[$i]</a></li>";
            }
        ?>
        <li><a href="schedule.php" class = "nav-el project-li">Harmonogram</a></li>
        <li><a href="more.php" class = "nav-el project-li">Czym jest design thinking</a></li>
    </ul>
</nav>