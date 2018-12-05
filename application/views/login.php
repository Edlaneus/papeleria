<div id="ppal2" align="center" class="container">
    <img class ="img-responsive" src="images/Qinventiva/registro.png">
</div>
<div id="login" class="container"> 

		<div class="col-md-3"></div>
		<div class="col-md-6">
		     <h3 class="text-center">Iniciar Sesión</h3>
			<form action="index.php/Welcome/valida" method="POST" role="form">
				Correo electronico:
				<input type="text" name="correo" class="form-control" placeholder="usuario@dominio.com">
				<span class="error"><?php echo form_error('correo'); ?></span>
				
				Clave:
				<input type="password" name="clave" class="form-control" placeholder="Clave">
				<span class="error"><?php echo form_error('clave'); ?></span>

				<button class="btn btn-default" type="submit" >Validar</button>
				<a href="index.php/welcome/nvoUsuario" class="btn btn-default active" type="button">Registarse</a>
			</form>
			<br>
			<?php
			if(isSet($mensaje)){
                 echo $mensaje;
			}
			?>			
		</div>
		<div class="col-md-3"></div>
</div>
