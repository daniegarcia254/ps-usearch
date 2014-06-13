			<!-- Sección de búsqueda -->
			<select id="selectPropiedades">
				<option value="arquitectura">Arquitectura</option>
				<option value="frecuencia">Frecuencia(MHz)</option>
				<option value="flash">Flash(KB)</option>
				<option value="ram">RAM(KB)</option>
			</select>
			<input type="text" id="textoBusq" placeholder="Búsqueda...">
			<a href="admin_busqueda.html"><input type="image" src="<?php echo base_url() . "/img/buscar.png"; ?>" alt="Buscar productos" id="logoBusqueda"></a>

			<!-- Sección de listado completo -->
			<a href="admin_listado.html"><button type="submit" value="LISTADO COMPLETO" id="botonListado">LISTADO COMPLETO</button></a>
		</div>
		<div id="titulo">
			<canvas id="canvasTitulo" width="1000" height="60"></canvas>
			<script>
				var canvas = document.getElementById('canvasTitulo');
				var context = canvas.getContext('2d');
				var x = canvas.width / 2;
				var y = canvas.height / 2;

				context.font = '18pt Calibri bold';
				// textAlign aligns text horizontally relative to placement
				context.textAlign = 'center';
				// textBaseline aligns text vertically relative to font style
				context.textBaseline = 'middle';
				context.fillStyle = 'blue';
				context.fillText('AÑADIR PRODUCTO', x, y);
			</script>
		</div>
		<div id="addModForm">
		<form name="add_producto"
			action=""
			method="post"		
		>
			<fieldset>
			<legend><b>Añadir microcontrolador al catálogo</b></legend>
			<div class="campoForm">
				<label for="Arq">Arquitectura</label>:
					<select>
						<option value="arquitectura">Arquitectura</option>
					</select><br>
			</div>
			<div class="campoForm">
				<label for="Freq">Frecuencia(MHz)</label>:<input type="text" name="freq" id="idFreq" maxlength="10"><br>
			</div>
			<div class="campoForm">
				<label for="Flash">Flash(KB)</label>:<input type="text" name="flash" id="idFreq" maxlength="10"><br>
			</div>
			<div class="campoForm">
				<label for="RAM">RAM(KB)</label>:<input type="text" name="RAM" id="idRAM" maxlength="10"><br>
			</div>
			<div class="campoForm">
				<label for="Precio">Precio(€)</label>:<input type="text" name="precio" id="idPrecio" maxlength="10"><br><br>
			</div>
			<div class="campoForm">
				<div id="buttonsForm">
					<input type="reset" value="RESET" name="Resetear valores" class="buttonForm">
					<input type="submit" value="A&Ntilde;ADIR PRODUCTO" name="Add product" class="buttonForm"><br>
				</div>
			</div>
		</form>
		</fieldset>
