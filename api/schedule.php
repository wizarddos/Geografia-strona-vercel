<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once "elements/basic-stylesheets.php" ?>
    <link rel="stylesheet" href="assets/styles/schedule.css">
    <title>Harmonogram</title>
</head>
<body>
    <?php require_once "elements/header.php" ?>
    <h1 class = "centered">Harmonogram pracy</h1>
    <section class="schedule">
        <table class = "schedule-table">
            <thead class = "table-header">
                <td>Termin:</td>
                <td>Zadanie</td>
            </thead>
            <tbody>
                <tr>
                    <td> 10 lutego</td>
                    <td>Etapy przed projektem</td>
                </tr>
                <tr>
                    <td>końca lutego</td>
                    <td>Definiowanie wyzwań</td>
                </tr>
                <tr>
                    <td>15 marca</td>
                    <td>Tworzenie rozwiązań</td>
                </tr>
                <tr>
                    <td>10 kwietnia</td>
                    <td>Prototypowanie, testowanie</td>
                </tr>
                <tr>
                    <td>28 kwietnia</td>
                    <td>Całość - koniec projektu</td>
                </tr>
            </tbody>
        </table>
    </section>
    <p class = "link-more">Co znaczą te słowa? Zerknij <a href="more.php">tutaj</a></p>
    <?php require_once "elements/footer.php" ?>
</body>
</html>