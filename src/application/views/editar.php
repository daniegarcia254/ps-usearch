<?php echo "<form method='post' action='" . base_url() . "index.php/editar" . "'>";?>
 <table>
 <tr>
 <td>
 <label for="ref">Referencia</label>
 </td><td>
 <input id="ref" name="ref" type="text" value="<?php echo $def->ref; ?>" readonly>
 </td>
 <td id="agregar_boton" rowspan="6">
 	 <input type="image" title="MODIFICAR" src="<?php echo base_url() . '/img/ok.svg'; ?>" class="modifyButton">
 </tr>
 <tr>
 <td>
 <label for="arch">Arquitectura</label>
 </td><td>
 <input id="arch" name="arch" type="text" value="<?php echo $def->arch; ?>" required autofocus >
 </td>
 </tr>
 <tr>
 <td>
 <label for="freq">Frecuencia (MHz)</label>
 </td><td>
 <input id="freq" name="freq" type="text" value="<?php echo $def->freq; ?>" >
 </td>
 </tr>
 <tr>
 <td>
 <label for="flash">Flash (kb)</label>
 </td><td>
 <input id="flash" name="flash" type="text" value="<?php echo $def->flash; ?>" >
 </td>
 </tr>
 <tr>
 <td>
 <label for="ram">Ram (kb)</label>
 </td><td>
 <input id="ram" name="ram" type="text" value="<?php echo $def->ram; ?>" >
 </td>
 </tr>
 <tr>
 <td>
 <label for="precio">Precio (€)</label>
 </td><td>
 <input id="precio" name="precio" type="text" value="<?php echo $def->precio; ?>" >
 </td>
 </tr>
 </table>
 <br>
<?php
if(isset($_POST['ref'])  || isset($_POST['arch'])   ||  
    isset($_POST['freq']) || isset($_POST['flash'])  ||  
    isset($_POST['ram'])  || isset($_POST['precio']) 
){
if (isset($error)){
?>
<div>
Todos los campos son obligatorios
</div>
<br>
<?php
}}
?>
</form>
