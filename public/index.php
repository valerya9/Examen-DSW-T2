<h1>Bienvenido</h1>
<?php
if (isset($error)) {
    echo "<p style='color:red;'>$error</p>";
}
?>
<form action="index.php" method="post">
    <p>
        Nombre: 
        <input type="text" name="nombre" id="">
    </p>
    <p>
        Modo:
        <input type="radio" name="modo" id="claro" value="claro" checked>
        <label for="claro">Claro</label>
        <input type="radio" name="modo" id="oscuro" value="oscuro" >
        <label for="oscuro">Oscuro</label>
    </p>
    <p>
        <button type="submit">Enviar</button>
    </p>
</form>
