
    
    <section id="content" class="shortcode-item">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-7">
                    <h2>Personalizacion</h2>
                    <h4>Elige como quieres tu libreta</h4>
                    <div class="tab-wrap">
                        <div class="media">
                            <div class="parrent pull-left">
                                <ul class="nav nav-tabs nav-stacked">
                                    <li class="active"><a href="#tab1" data-toggle="tab" class="analistic-01">Material Tapas</a></li>
                                    <li class=""><a href="#tab2" data-toggle="tab" class="analistic-02">Diseño tapa</a></li>
                                    <li class=""><a href="#tab3" data-toggle="tab" class="tehnical">Cosido</a></li>
                                    <li class=""><a href="#tab4" data-toggle="tab" class="tehnical">Tipo de Papel</a></li>
                                    <li class=""><a href="#tab5" data-toggle="tab" class="tehnical">Comentarios</a></li>
                                </ul>
                            </div>

                            <div class="parrent media-body">
                                <div class="tab-content">
                                    <div class="tab-pane active in" id="tab1">
                                        <div class="media">
                                           <div class="pull-right">
                                                <img class="img-responsive" src="images/tapa.png">
                                            </div>
                                            <div class="media-body">
                                                 <h4>Material Tapas</h4>
                                                 <form>
                                                      <input type="radio" name="tapa" id="tapa-carton" onclick="tipo_carton()">Carton<br>
                                                      <input type="radio" name="tapa" id="tapa-papel" onclick="tipo_papel()">Papel<br>
                                                        <input type="radio" name="tapa" id="tapa-tela" onclick="tipo_tela()">Tela<br>
                                                        <input type="radio" name="tapa" id="tapa-piel" onclick="tipo_piel()">Piel<br>
                                                    </form>
                                                <script>
                                                function tipo_carton() {
    document.getElementById("tapa-carton").checked = true;
   document.getElementById('res-tapa').value="Carton";
}
function tipo_papel() {
    document.getElementById("tapa-papel").checked = true;
   document.getElementById('res-tapa').value="Papel";
}
function tipo_tela() {
    document.getElementById("tapa-tela").checked = true;
   document.getElementById('res-tapa').value="Tela";
}
function tipo_piel() {
    document.getElementById("tapa-piel").checked = true;
   document.getElementById('res-tapa').value="Piel";
}
                                                </script>
                                            </div>                                            
                                        </div>
                                    </div>

                                     <div class="tab-pane" id="tab2">
                                        <div class="media">
        <section>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>"
                  method="POST"
                  enctype="multipart/form-data">
                <fieldset>
                    <legend>Seleccionar una imagen</legend>
                    <div><input type="file" name="foto" /></div>
                    <div style="margin-top: 10px;"><input type="submit" name="Subir imagen" />
                    </div>
                </fieldset>
            </form>        
        </section>
                                        </div>
                                     </div>

                                     <div class="tab-pane" id="tab3">
                                        <div class="media">
                                           <div class="pull-right">
                                                <img class="img-responsive" src="images/cosido.jpg">
                                            </div>
                                            <div class="media-body">
                                                 <h4>Tipo de cosido</h4>
                                                 <form>
                                                    <input type="radio" name="cosido" id="cosido-perro" onclick="cost_perro()">Diente de Perro<br>
                                                    <input type="radio" name="cosido" id="cosido-japones" onclick="cost_japones()">Japones<br>
                                                    <input type="radio" name="cosido" id="cosido-francesa" onclick="cost_francesa()">Francesa Expuesta<br>
                                                    <input type="radio" name="cosido" id="cosido-conservacion" onclick="cost_conservacion()">Conservacion<br>
                                                    <input type="radio" name="cosido" id="cosido-alterno" onclick="cost_alterno()">Alterno<br>
                                                    <input type="radio" name="cosido" id="cosido-continuo" onclick="cost_continuo()">Continuo<br>
                                                </form>
                                            <script>
                                            function cost_perro() {
                                                document.getElementById("cosido-perro").checked = true;
                                               document.getElementById('res-cosido').value="Diente de perro";
                                            }
                                            function cost_japones() {
                                                document.getElementById("cosido-japones").checked = true;
                                               document.getElementById('res-cosido').value="Japones";
                                            }
                                            function cost_francesa() {
                                                document.getElementById("cosido-francesa").checked = true;
                                               document.getElementById('res-cosido').value="Frances";
                                            }
                                            function cost_conservacion() {
                                                document.getElementById("cosido-conservacion").checked = true;
                                               document.getElementById('res-cosido').value="Conservacion";
                                            }
                                            function cost_alterno() {
                                                document.getElementById("cosido-alterno").checked = true;
                                               document.getElementById('res-cosido').value="Alterno";
                                            }
                                            function cost_continuo() {
                                                document.getElementById("cosido-continuo").checked = true;
                                               document.getElementById('res-cosido').value="Continuo";
                                            }
                                                </script>
                                            </div>
                                        </div>
                                     </div>
                                     
                                     <div class="tab-pane" id="tab4">
                                                                                    <div class="pull-right">
                                                <img class="img-responsive" src="images/papel.jpg">
                                            </div>
                                         <h4>Tipo de Papel</h4>
                                            <form>
                                              <input type="radio" name="cosido" id="papel-reciclado" onclick="pap_reciclado()">Reciclado<br>
                                              <input type="radio" name="cosido" id="pepel-verjurado" onclick="pap_verjurado()">Verjurado<br>
                                              <input type="radio" name="cosido" id="papel-estucado" onclick="pap_estucado()">Estucado<br>
                                              <input type="radio" name="cosido" id="papel-piedra" onclick="pap_piedra()">Piedra<br>
                                              <input type="radio" name="cosido" id="papel-offset" onclick="pap_offset()">Offset <br>
                                            </form>
                                         <script>
                                         function pap_reciclado() {
    document.getElementById("papel-reciclado").checked = true;
   document.getElementById('res-papel').value="Reciclado";
}
function pap_verjurado() {
    document.getElementById("pepel-verjurado").checked = true;
   document.getElementById('res-papel').value="Verjurado";
}
function pap_estucado() {
    document.getElementById("papel-estucado").checked = true;
   document.getElementById('res-papel').value="Estucado";
}
function pap_piedra() {
    document.getElementById("papel-piedra").checked = true;
   document.getElementById('res-papel').value="Piedra";
}
function pap_offset() {
    document.getElementById("papel-offset").checked = true;
   document.getElementById('res-papel').value="Offset";
}
                                         </script>
                                     </div>

                                     <div class="tab-pane" id="tab5">
<form>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Mensaje o Comentarios</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="8"></textarea>
  </div>
</form>
                                     </div>
                                </div> <!--/.tab-content-->  
                            </div> <!--/.media-body--> 
                        </div> <!--/.media-->     
                    </div><!--/.tab-wrap-->               
                </div><!--/.col-sm-6-->

                <!-------------mitad y mitad---------------->
                <div class="col-xs-12 col-sm-5">
                    <h2>Resumen de tu pedido</h2>
                    <div class="accordion">
                        <form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Correo Electronico</label>
      <input type="email" class="form-control" id="res-email" placeholder="Email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Telefono</label>
      <input type="tel" class="form-control" id="res-telefono" placeholder="(Lada) Telefono">
    </div>
  </div>
  <div class="form-group col-md-12">
    <label for="inputAddress">Nombre Completo</label>
    <input type="text" class="form-control" id="res-nombre" placeholder="Juan Perez">
  </div>

  <div class="form-row">
    <div class="form-group col-md-3">
      <label for="inputCity">Tapa</label>
      <input type="text" class="form-control" id="res-tapa">
    </div>
    <div class="form-group col-md-5">
      <label for="inputState">Cosido</label>
          <input type="text" class="form-control" id="res-cosido">
    </div>
    <div class="form-group col-md-4">
      <label for="inputZip">Papel</label>
      <input type="text" class="form-control" id="res-papel">
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox"> Hojas de agenda
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
                    </div>
                </div>
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#content-->
<br><br><br><br>


    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
