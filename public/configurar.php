<h1>Configurar PC</h1>

<h2>Elige componente:</h2>
<form action="almacenar.php" method="post">
    <input type="hidden" name="tipo" value="">
    <select name="componente" id="">
        <option value="pb2">Gigabyte Z790</option>
    </select>
    <button type="submit">Agregar Componente</button>
</form>
<h2>Tu Equipo:</h2>
<ul>
    <li><a href="configurar.php?tipo=placa">Placa: </a></li>
    <li><a href="configurar.php?tipo=cpu">CPU: </a></li>
    <li><a href="configurar.php?tipo=ram">RAM: </a></li>
</ul>
<p>Es compatible: </p>
<p>Precio del equipo: €</p>
