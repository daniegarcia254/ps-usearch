<?php echo "<form method='post' action='" . base_url() . "index.php/agregar" . "'>";?>
 <table>
 <tr>
 <td>
 <label for="ref">Referencia</label>
 </td><td>
 <input id="ref" name="ref" type="text" value="<?php if(isset($_POST['ref']))echo $_POST['ref']; ?>" autofocus>
 <td id="agregar_boton" rowspan="6">
 	 <input type="image" title="AÑADIR" src="<?php echo base_url() . '/img/add.svg'; ?>" class="insertButton">
 </td>
 </td>
 </tr>
 <tr>
 <td>
 <label for="arch">Arquitectura</label>
 </td><td>
 <input id="arch" name="arch" type="text" value="<?php if(isset($_POST['arch']))echo $_POST['arch']; ?>">
 </td>
 </tr>
 <tr>
 <td>
 <label for="freq">Frecuencia (MHz)</label>
 </td><td>
 <input id="freq" name="freq" type="text" value="<?php if(isset($_POST['freq']))echo $_POST['freq']; ?>" >
 </td>
 </tr>
 <tr>
 <td>
 <label for="flash">Flash (kb)</label>
 </td><td>
 <input id="flash" name="flash" type="text" value="<?php if(isset($_POST['flash']))echo $_POST['flash']; ?>" >
 </td>
 </tr>
 <tr>
 <td>
 <label for="ram">Ram (kb)</label>
 </td><td>
 <input id="ram" name="ram" type="text" value="<?php if(isset($_POST['ram']))echo $_POST['ram']; ?>" >
 </td>
 </tr>
 <tr>
 <td>
 <label for="precio">Precio (€)</label>
 </td><td>
 <input id="precio" name="precio" type="text" value="<?php if(isset($_POST['precio']))echo $_POST['precio']; ?>" >
 </td>
 </tr>
 </table>
 <br>
<?php
if(isset($_POST['ref'])  || isset($_POST['arch'])   ||
    isset($_POST['freq']) || isset($_POST['flash'])  ||
    isset($_POST['ram'])  || isset($_POST['precio']) 
){
?>
<div>
Todos los campos son obligatorios
</div>
<br>
<?php
}
?>
</form>
</div>
