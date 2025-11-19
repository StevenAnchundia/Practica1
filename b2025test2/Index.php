<html>
    <head> </head>
    <body>
        <h1 style ="text-align:center; color: Red;";>Vamos a Programar con Java Script</h1>
        
        <form method= "get" action="index.php">
            <input id="nombre" name="nombre">
            <button id="saludar">    Saludar    </button>
        </form>


        <script>
            console.log("Pruebitaas");
            //var nombre = "Batman";
            let textNombre=document.getElementById("nombre");
            let boton=document.getElementById("saludar");

            boton.addEventListener("click", ()=>{
                alert("Hola " + textNombre.value);
                console.log(textNombre.value); 
            });
            console.log(boton, textNombre);
        </script>

    </body>
</html>