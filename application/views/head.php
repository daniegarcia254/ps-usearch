<!DOCTYPE html>
<html>
  <head>
    <title>MicroSearch</title>
    <meta charset="utf-8">
    <?php
      echo link_tag(base_url() . $this->config->item('css'));
      echo "\n";
    ?>
  </head>
  <body>
    <!-- Cabecera página web con logos -->
	<div id="cabecera">
	    <a href="<?php echo base_url(); ?>">
            <img id="logoWeb" src="<?php echo base_url() . "/img/logoWeb.png"; ?>" alt="Logotipo">
            <div id="tituloWeb">
                <img src="<?php echo base_url() . "/img/usearch_logo.png"; ?>" alt="&mu;Search:  BUSCA. ENCUENTRA. COMPRA MICROS.">
            </div>
		</a>
	</div> 
	 
    <div id="contenido">
        <!-- Sub-cabecera -->
        <div id="menu_navegacion">
            
            <ul class="nav">
                 <!-- Item: carrito -->
                <li>
                    <div id="carrito">
                        <a href="<?php echo base_url() . "index.php/carrito"; ?>">
                            <img id="carrito_img" title="CARRITO" src="<?php echo base_url() . "/img/cart.svg"; ?>" alt="Carrito" title="Carrito de compra">
                        	<div id="icarrito_items"><?php echo $items; ?> items</div>
                        </a>
                    </div>
                </li>
                
                <!-- Item: Buscador -->
                <li>
					<?php echo "<form method='post' action='" . base_url() . "index.php/buscar" . "'>";?>
	                    <div id="buscador">
	                        <div id="buscador_selector">
	                            <select name="campo_busqueda">
	                				<option <?php echo ($campo_busqueda == 'arquitectura' ? 'selected="selected"' : ''); ?>
											value="arquitectura">Arquitectura</option>
	                				<option <?php echo ($campo_busqueda == 'frecuencia' ? 'selected="selected"' : ''); ?>
											value="frecuencia">Frecuencia (MHz)</option>
	                				<option <?php echo ($campo_busqueda == 'flash' ? 'selected="selected"' : ''); ?>
											value="flash">Flash (KB)</option>
	                				<option <?php echo ($campo_busqueda == 'ram' ? 'selected="selected"' : ''); ?>
											value="ram">RAM (KB)</option>
	                            </select>
	                        </div>
	                        <input id="buscador_texto" type="text" name="string_busqueda" value="<?php echo $string_busqueda;?>" placeholder="Introduzca su búsqueda..." autocomplete="off">
	                        <input id="buscador_boton" title="BUSCAR" type="image" src="<?php echo base_url() . "img/search.svg"; ?>">
	                    </div>
					</form>
                </li>
                
                <!-- Item: Listado -->
                <li id="botonListado">
                    <a href="<?php echo base_url() . "index.php/listar_todo" ?>">LISTADO COMPLETO</a>
                </li>
            </ul>
        </div> <!-- Menu navegacion -->
    <div id="contenido_ppal">