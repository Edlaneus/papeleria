 <section id="contact-info">
        <div class="center">                
            <h2>Como encontrarnos?</h2>
        </div>
        <div class="gmap-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5 text-center">
                        <div class="gmap">
                            <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com.mx/maps/place/L%C3%B3pez+Mateos+136,+Pablo+Silva,+28970+Villa+de+%C3%81lvarez,+Col./@19.2626316,-103.7406329,19z/data=!3m1!4b1!4m5!3m4!1s0x842545377b42819b:0x237af545191d7cf5!8m2!3d19.2626316!4d-103.7400844"></iframe>
                        </div>

                    </div>

                    <div class="col-sm-7 map-content">
                        <ul class="row">
                            <li class="col-sm-6 text-center">
                                <address>
                                    <h4>Qinventiva</h4>
                                    <p>López Mateos 132<br>
                                    Centro de Villa de Álvarez</p>
                                    <p>Telefono: 312-593-24-237 </p>
                                    <p>Correo Electronico: qinventiva@gmail.com</p>
                                </address>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>  <!--/gmap_area -->

    <section id="contact-page">
        <div class="container">
            <div class="center">        
                <h2>Dejanos tu mensaje</h2>
            </div> 
            <div class="row"> 
                <div class="status alert alert-success" style="display: none"></div>
                <form class="form" role="form"  method="POST" action="index.php/Welcome/addcomentario">
                    <div class="col-sm-5 col-sm-offset-1">
                        <div class="form-group">
                            <label>Nombre *</label>
                            <input type="text" name="name" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Correo Electronico *</label>
                            <input type="email" name="email" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Telefono</label>
                            <input type="number" class="form-control">
                        </div>                      
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label>Mensaje *</label>
                            <textarea name="message" id="message" required="required" class="form-control" rows="8"></textarea>
                        </div>                        
                       
                            <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Enviar mensaje</button>
                        
                    </div>
                </form> 
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->