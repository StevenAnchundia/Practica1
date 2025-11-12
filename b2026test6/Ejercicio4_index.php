<html>
    <head>
        <title>Mayor Número</title>
    </head>
    <body>
        <form method="get" action="index.php">
            <label>Ingrese números separados por comas:</label>
            <input type="text" name="nums" required>
            <input type="submit" name="Enviar" value="Mostrar mayor">
        </form>

        <?php
        if (isset($_GET["Enviar"])) {
            $nums = $_GET["nums"];

            // Convertir la cadena a un arreglo de números
            $numeros = explode(",", $nums);

            // Quitar espacios y convertir a enteros
            $numeros = array_map('trim', $numeros);
            $numeros = array_map('intval', $numeros);

            $i = 0;
            $mayor = $numeros[0];

            // Bucle do...while para encontrar el mayor
            do {
                if ($numeros[$i] > $mayor) {
                    $mayor = $numeros[$i];
                }
                $i++;
            } while ($i < count($numeros));

            echo "<p>El número mayor es: <strong>$mayor</strong></p>";
        }
        ?>
    </body>
</html>