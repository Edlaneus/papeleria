<div id="ppal2" align="center" class="container">
    <img class ="img-responsive" src="images/Qinventiva/registro.png">
</div>
<div id="login" class="container"> 
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
		     <h3 class="text-center">Ingresa tus Datos</h3>
			<form action="index.php/welcome/newUsuario" method="POST" role="form">
			    Nombre:
			    <input type="text" name="nom" class="form-control" placeholder="Nombre completo del usuario" value="<?php echo set_value('nom'); ?>">
			    <span class="error"><?php echo form_error('nom'); ?></span>
				Correo electronico:
				<input type="text" name="correo" class="form-control" placeholder="usuario@dominio.com" value="<?php echo set_value('correo'); ?>">
			    <span class="error"><?php echo form_error('correo'); ?></span>
				Clave:
				<input type="password" name="clave" class="form-control" placeholder="Clave" value="<?php echo set_value('clave'); ?>">
			    <span class="error"><?php echo form_error('clave'); ?></span>				
				Confirmar clave:
				<input type="password" name="confclave" class="form-control" placeholder="Clave" value="<?php echo set_value('confclave'); ?>">	
				<span class="error"><?php echo form_error('confclave'); ?></span>	

				<button class="btn btn-default" type="submit" >Agregar cliente</button>
				<a href="index.php/welcome/cancelar" class="btn btn-default active" type="button">cancelar</a>

				
			</form>
			<br>

		</div>
		<div class="col-md-3"></div>
	</div>
</div>