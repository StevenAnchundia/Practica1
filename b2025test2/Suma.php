<html>
    <head> </head>
    <body>
        <h1 style ="text-align:center; color: Red;";>Vamos a Programar con Java Script</h1>
        
        <form id="formSuma" action="Suma.php" method="get">
            <p>
                <input id="num1" name="num1" type="number" > +
                <input id="num2" name="num2" type="number" > +
                <input id="num3" name="num3" type="number" > 
                <button id="Sumar" type="button">Sumar</button>
            </p>
        </form>

        <script>
            let num1 = document.getElementById("num1");
            let num2 = document.getElementById("num2");
            let num3 = document.getElementById("num3");
            let boton = document.getElementById("Sumar");

            boton.addEventListener("click", ()=>{
                let suma = Number(num1.value) + Number(num2.value) + Number(num3.value);
                alert("La suma es: " + suma);
            });
            console.log(boton, textNombre);
        </script>

    </body>
</html>