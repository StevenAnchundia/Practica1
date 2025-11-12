<html>
    <head>
        <title>Contador de letras</title>
    </head>

    <body>
        <form id="form" method="get" activon= "index.php">
            <br>
            <label for="palabra">Palabra</label>
            <input name="palabra" id="palabra"/>
            <input type="submit" name="Enviar" value = "Procesar"/>
        </form>

        <?php
            if(isset($_GET["palabra"])){
                $palabra=$_GET["palabra"];
                $repes_a = substr_count($palabra, "a");
                echo "<b>La palabra tiene:</b> " .$repes_a  ."<b> letras a</b>". "</p>";
            }
            ?>
    </body>
</html>