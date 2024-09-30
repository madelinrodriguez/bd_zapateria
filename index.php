<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zapatería la Sangileña</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f4f8;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        h1 {
            color: #2c3e50;
            text-align: center;
            margin-bottom: 20px;
            font-size: 2.5em;
        }
        #div_inicio_secion {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            max-width: 450px;
            width: 100%;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin-bottom: 8px;
            color: #34495e;
            font-weight: bold;
        }
        input {
            margin-bottom: 20px;
            padding: 12px;
            border: 1px solid #bdc3c7;
            border-radius: 8px;
            font-size: 16px;
            transition: border 0.3s;
        }
        input:focus {
            border: 1px solid #3498db;
            outline: none;
        }
        button {
            padding: 12px;
            background-color: #3498db;
            color: #ffffff;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <div id="div_inicio_secion">
        <h1>Zapatería la Sangileña</h1>
        <form action="modelo/loguear.php" method="post">
            <label for="usuario">Usuario:</label>
            <input type="text" name="usuario" id="usuario" placeholder="Introduce tu usuario" required>
            <label for="clave">Contraseña:</label>
            <input type="password" name="clave" id="clave" placeholder="Introduce tu contraseña" required>
            <button type="submit">Ingresar</button>
        </form>
    </div>
</body>
</html>