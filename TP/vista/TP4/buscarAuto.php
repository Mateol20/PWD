<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Buscar Auto por Patente</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }

        .container {
            max-width: 500px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        h1 {
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"] {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            display: block;
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
    <script>
        function validarFormulario() {
            var patente = document.getElementById("patente").value;
            if (patente == "") {
                alert("Por favor, ingrese el número de patente.");
                return false;
            }
            return true;
        }
    </script>
</head>

<body>

    <div class="container">
        <h1>Buscar Auto</h1>
        <form action="./accion/accionBuscarAuto.php" method="POST" onsubmit="return validarFormulario();">
            <label for="patente">Número de Patente:</label>
            <input type="text" id="patente" name="patente" required>
            <br>
            <input type="submit" value="Buscar">
        </form>
    </div>

</body>

</html>