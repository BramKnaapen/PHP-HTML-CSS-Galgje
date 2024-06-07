<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kies je woord</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>Welkom bij ons game galgje. </h1>
    </header>

    <p>Wat voor woord ga je gebruiken?</p>

    <form method="POST">
        <div class="center">
            <input class="speelbutton" type="text" name="woord" />
        </div>
        <div class="center">
            <button class="speelbutton" type="submit" name="speel">Speel!</button>
            <button class="speelbutton" type="submit" name="random">Random woord</button>
        </div>
    </form>

    </div>
    <?php
    session_start();

    $randomwoord = [
        "baltazar", "blud", "balta", "html", "php", "css"
    ];

    if (isset($_POST["woord"]) && !is_numeric($_POST["woord"])) {
        if (isset($_POST["speel"])) {
            if (!empty($_POST["woord"])) {
                $_SESSION['woord'] = $_POST["woord"];
                header("Location: galgje.php");
                exit();
            } else {
                echo "Er is geen woord gekozen";
            }
        } elseif (isset($_POST["random"])) {
            $_SESSION['woord'] = $randomwoord[rand(0, count($randomwoord) - 1)];
            header("Location: galgje.php");
            exit();
        }
    } else {
        echo "<p>Dit is geen woord</p>";
    }
    
    ?>
</body>

</html>