<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Cursito</title>
</head>
<body>
    <header>
        <h1>Taller de FrontEnd</h1>
    </header>

    <div>
        <h3>El FrontEnd es la parte de un sitio web que interactúa con los usuarios, por eso decimos que está del lado del cliente</h3>
    </div>

    <div>
        <h2>Con las hojas de estilo podemos:</h2>
        <ul>
            <li>Modificar Colores</li>
            <li>Cambiar fuentes y tamaños</li>
            <li>Agregar Sombreados, subrayados, etc.</li>
            <li>Cambiar tamaños de contenedores</li>
        </ul>
    </div>

    <div>
        <form action="index.php" method="get">
            <label for="username">User</label>
            <input type="text" name="username">
            <select name="level" id="level">
                <option value="1">Level 1</option>
                <option value="2">Level 2</option>
                <option value="3">Level 3</option>
            </select>
            <input type="submit">
        </form>

        <h1>Bienvenido <?php isset($_GET['username']) ? print $_GET['username'] :  ""; ?></h1>
        <br>
        <h2>Tu nivel es <?php isset($_GET['level']) ? print $_GET['level'] :  ""; ?></h2>
    </div>


</body>
</html>