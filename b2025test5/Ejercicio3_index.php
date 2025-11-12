<html>
<head>
    <title>Número Factorial</title>
</head>
<body>
    <form method="get" action="index.php">
        <label>Ingrese un número:</label>
        <input type="text" name="n" required>
        <input type="submit" name="Enviar" value="Calcular">
    </form>

    <?php
    if (isset($_GET["Enviar"])) {
        $n = (int) $_GET["n"];
        $factorial = 1;
        $i = $n;

        if ($n > 0) {
            do {
                $factorial *= $i;
                $i--;
            } while ($i > 0);
        }

        echo "El factorial de $n es: $factorial";
    }
    ?>
</body>
</html>