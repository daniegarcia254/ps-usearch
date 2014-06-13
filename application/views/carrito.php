<form method="post" action="<?php echo base_url() . "index.php/carrito"?>">
<table style="border-spacing:10px;width:80%;border:1px;">

<tr>
  <th>Cantidad</th>
  <th>Referencia</th>
  <th style="text-align:right">Precio</th>
  <th style="text-align:right">Subtotal</th>
</tr>
<?php $i = 1; ?>
<?php foreach ($this->cart->contents() as $items): ?>
  <?php echo form_hidden($i.'rowid', $items['rowid']); ?>
  <tr>
    <td><?php echo form_input(array('name' => $i.'qty', 'value' => $items['qty'], 'maxlength' => '3', 'size' => '5')); ?></td>
    <td><?php echo $items['name']; ?></td>
    <td class="right"><?php echo $this->cart->format_number($items['price']); ?></td>
    <td class="right"><?php echo $this->cart->format_number($items['subtotal']); ?>€</td>
  </tr>
  <?php $i++; ?>
<?php endforeach; ?>
<tr>
  <td colspan="2"> </td>
  <td class="right"><strong>Total</strong></td>
  <td class="right"><?php echo $this->cart->format_number($this->cart->total()); ?>€</td>
</tr>

</table>
  <div id="botones_carro">
	<input type="hidden" name="submit">
	<input type="image" title="ACTUALIZAR" name="submit" src="<?php echo base_url() . 'img/update.svg'; ?>" class="updateButton" style="float:right; margin-top: 10px;">
</div>
  </form>

  
<form method="post" action="<?php echo base_url() . "index.php/carrito"?>" style="float:right; margin-right: 20px; margin-top: 10px;">
	<input type="hidden" name="vaciar">
	<input type="image" title="VACIAR" src="<?php echo base_url() . 'img/trash.svg'; ?>" class="emptyButton">
</form>

<br>
<div id="formulario">
  <div id="formulario_2">
  <form method="post" action="<?php echo base_url() . "index.php/carrito"?>">
    <label for="nombre">Nombre: </label>
    <input id="nombre" type="text" name="nombre" value="<?php if(isset($_POST['nombre'])) echo $_POST['nombre'] ?>" ><br>
    <label for="apellidos">Apellidos: </label>
    <input id="apellidos" type="text" name="apellidos" value="<?php if(isset($_POST['apellidos'])) echo $_POST['apellidos'] ?>"><br>
    <label for="direccion">Dirección: </label>
    <input id="direccion" type="text" name="direccion" value="<?php if(isset($_POST['direccion'])) echo $_POST['direccion'] ?>"><br>
    <label for="ciudad">Ciudad: </label>
    <input id="ciudad" type="text" name="ciudad" value="<?php if(isset($_POST['ciudad'])) echo $_POST['ciudad'] ?>"><br>
    <label for="provincia">Provincia: </label>
    <input id="provincia" type="text" name="provincia" value="<?php if(isset($_POST['provincia'])) echo $_POST['provincia'] ?>"><br>
    <label for="cp">Código postal: </label>
    <input id="cp" type="text" name="cp" value="<?php if(isset($_POST['cp'])) echo $_POST['cp'] ?>"><br>
    <label for="tfn">Teléfono: </label>
    <input id="tfn" type="text" name="tfn" value="<?php if(isset($_POST['tfn'])) echo $_POST['tfn'] ?>"><br>
    <label for="email">e-mail: </label>
    <input id="email" type="text" name="email" value="<?php if(isset($_POST['email'])) echo $_POST['email'] ?>"><br>
    <label for="empresa">Empresa: </label>
    <input id="empresa" type="text" name="empresa" value="<?php if(isset($_POST['empresa'])) echo $_POST['empresa'] ?>"><br>
    <label for="cif">CIF: </label>
    <input id="cif" type="text" name="cif" value="<?php if(isset($_POST['cif'])) echo $_POST['cif'] ?>"><br>
	<br>
    <input id="realizar_pedido" type="submit" name="pedir" value="Realizar pedido"> 
  </form>
  <?php if(isset($error)){echo "Todos los campos son obligatorios";} ?>
  </div>
</div>
</div>
