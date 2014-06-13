<table cellpadding="2" cellspacing="1" style="width:80%" border="1">
<tr>
  <th>Cantidad</th>
  <th>Referencia</th>
  <th style="text-align:right">Precio</th>
  <th style="text-align:right">Subtotal</th>
</tr>
<?php $i = 1; ?>
<?php foreach ($this->cart->contents() as $items): ?>
  <tr>
    <td><?php echo $items['qty']; ?></td>
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
<div id="formulario">
<div id="formulario_3">
    <?php
      echo "<strong>Nombre:</strong> " . $_POST['nombre'] . "<br>";
      echo "<strong>Apellidos:</strong> " . $_POST['apellidos'] . "<br>";
      echo "<strong>Dirección:</strong> " . $_POST['direccion'] . "<br>";
      echo "<strong>Ciudad:</strong> " . $_POST['ciudad'] . "<br>";
      echo "<strong>Provincia:</strong> " . $_POST['provincia'] . "<br>";
      echo "<strong>Código postal:</strong> " . $_POST['cp'] . "<br>";
      echo "<strong>Teléfono:</strong> " . $_POST['tfn'] . "<br>";
      echo "<strong>E-mail:</strong> " . $_POST['email'] . "<br>";
      if ($_POST['cif']!="" and $_POST['empresa']!=""){
        echo "<strong>Empresa:</strong> " . $_POST['empresa'] . "<br>";
        echo "<strong>CIF:</strong> " . $_POST['cif'] . "<br>";
      }
    ?>
</div>
</div>
<script>
  window.print();
  window.onmouseover=function() {
  document.getElementById('contenido_ppal').innerHTML='Gracias por su pedido!';
  }
</script>





