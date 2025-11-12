<?php  
    $enfermedades = [
    "Gripe" => ["Evitar el frío directo", 2],
    "Dolor_de_barriga" => ["Evitar lácteos y comida que produzca gases", 1],
    "Fiebre" => ["Descanso", 4],
    "Irritacion_de_piel" => ["evitar cremas y químicos con pH alto que afecten la piel", 3]
    ];
?>

<html>
    <head>  
        <title>Enfermero</title>
    </head>
    <body>
        <br>
        <form id= "form" method="get" action="index.php">
            <label for="enfermedad">Enfermedad </label>
            <input name="enfermedad" id="enfermedad"/>
            <input type="submit" name="Enviar" value = "Procesar"/>
        </form>

        <?php  if(isset($_GET["enfermedad"])){
                $enfermedad = $_GET["enfermedad"] ;    
        echo "<p>Las recomendaciones para <b>$enfermedad</b> son:</p>";
         if (array_key_exists($enfermedad, $enfermedades)) {
            echo "<p><b>Recomendacion:</b> " . $enfermedades[$enfermedad][0] . "<br>";
            echo "<b>Prioridad:</b> " . $enfermedades[$enfermedad][1] . "</p>";
            }
        }
        ?>
    </body>
</html>