
<html>
    <head>
        <style>
            #animacion{
                    border: 2px solid #48ff00ff;
                    margin-top: 10px;
                    padding: 5px;
                    color: #48ff00ff;
                    background-color: #ff0000ff;
                }
        </style>
    </head>
    <body>

        <label for="texto">Escribe algo aqui: </label>
        <input type="text" id="texto">
        <label for="texto">Color de letra </label>
        <input type="color" id="colorTexto">
        <label for="backgroundcolor">Color de fondo</label>
        <input type="color" id="backgroundcolor">
        <div id="animacion"></div>

    <script>
        let cajadeTexto = document.getElementById("texto");
        let divAnimacion= document.getElementById("animacion");
        let colorTexto = document.getElementById("colorTexto");
        let backgroundcolor = document.getElementById("backgroundcolor");

        colorTexto.addEventListener("change", () =>{
            divAnimacion.style.color = colorTexto.value; })

        backgroundcolor.addEventListener("change", () =>{
            divAnimacion.style.backgroundColor = backgroundcolor.value; })
            
        cajadeTexto.addEventListener("input", function() {
        divAnimacion.innerHTML = cajadeTexto.value;
        });
    </script>

    </body>
</html>
   


