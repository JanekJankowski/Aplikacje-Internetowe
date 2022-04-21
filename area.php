<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Figury geometryczne</title>
</head>
<body>
    <form method="post">
        <input type="radio" name="geometricFigure" value="cube" checked>Sześcian<br>
        <input type="radio" name="geometricFigure" value="rectangle">Prostokąt<br>
        <input type="submit" value="Zatwierdź">
    </form>
    <?php
        if(isset($_POST['geometricFigure'])){
            echo '<form action="./scripts/calculate.php" method="post">';
                switch ($_POST['geometricFigure']) {
                    case 'cube':
                        echo '<input id="range1" type="range" name="a" min="0" max="999999999"><p id="p1"></p>';
                        echo '<input type="submit" value="Oblicz">';
                        echo '<input type="hidden" name="geometricFigure" value="cube">';
                        break;
                    case 'rectangle':
                        echo '<input type="number" name="a" placeholder="Podaj bok a">';
                        echo '<input type="number" name="b" placeholder="Podaj bok b">';
                        echo '<input type="submit" value="Oblicz">';
                        echo '<input type="hidden" name="geometricFigure" value="rectangle">';
                        break;
                }
            echo '</form>';
        }
    ?>
<script>
    function slider(){
    p1.innerHTML=range1.value;0
    }
    setInterval(slider, 1);
</script>
</body>
</html>