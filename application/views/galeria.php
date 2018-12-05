
<div id="galeria" class="container">
	<div class="center">
    <br>
        <h2>Articulos</h2>
    </div>
            <ul class="portfolio text-center">
                <li><a class="btn btn-default" href="index.php/welcome/todospro">Productos</a></li>
                <li><a class="btn btn-default" href="index.php/Welcome/getArticulos/1">Arte</a></li>
                <li><a class="btn btn-default" href="index.php/Welcome/getArticulos/2">Arquitectura</a></li>
                <li><a class="btn btn-default" href="index.php/Welcome/getArticulos/3">Ilustraccion</a></li>
                <li><a class="btn btn-default" href="index.php/Welcome/getArticulos/4">Diseño</a></li>
                <li><a class="btn btn-default" href="index.php/Welcome/getArticulos/5">Basico</a></li>
            </ul>
  <?php
     for($i=0;$i<count($articulos);$i++){
           ?>
		<div class="col-xs-6 col-sm-6 col-md-3">
		<div class="thumbnail" align="center">
		 <img class ="img-responsive img-thumbnail" src="<?php echo 'images/'.$articulos[$i]['imagen']?>">
			      <div class="caption">
			        <h3><?php echo $articulos[$i]['Nombre']  ?></h3>
			        <p id="descripcion"><?php echo $articulos[$i]['Descripción']?></p>
			        <?php
                       $pre = $articulos[$i]['Precio'];
                       $pre = number_format($pre,2,'.',',');
                       $idArt =$articulos[$i]['idArticulo']; 
			        ?>
			        <p id="precio"><?php echo '$'.$pre ?></p>

			        <p class="der"><a class="btn btn-primary" role="button" onClick="agregarArticulo(<?php echo $idArt; ?>);" >Comprar</a></p>
			      </div>
			    </div>
			  </div>
			<!-- /div -->
         <?php
     }  
  ?>
</div>