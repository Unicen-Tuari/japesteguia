{include file="header.tpl" title=foo}

    <!-- Navigation -->
    


    <!-- Header -->
    <header>
        <div class="container">
           <!--  <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/1.png" alt="">
                            </div> -->
            <div class="intro-text">
                <!-- <div class="intro-lead-in">Welcome To Our Studio!</div> -->
                <!-- <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/1.jpg" alt="">
                            </div> -->
                <div class="intro-heading">the best</div>

                <a href="#inicio" class="page-scroll btn btn-xl">Inicio</a>

            </div>
        </div>
    </header>

    <!-- Portfolio Jugadores -->
   

    

    <!-- Portfolio Modals -->
    <!-- Use the modals below to showcase details about your portfolio projects! -->

    <!-- Portfolio Modal 1 -->
    

    
    {if !isset($usuario)}
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Ingresar</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="col-lg-6 text-left-center">
                        <h3>Login</h3>
                    </div>
                   <!--  <form name="sentMessage" id="contactForm" novalidate method="post" > -->
                    <form name="sentMessage2" id="contactForm2" method="post" action="index.php?action=login" >
                        <div class="row">
                            <div class="formu">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" name="user" class="form-control" placeholder="Su email *" id="name" required data-validation-required-message="Por favor ingrese su nombre.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="pass" class="form-control" placeholder="Su contraseña *" id="name" required data-validation-required-message="Please enter your pass.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    
                                </div>
                            </div>
                            
                            <div class="clearfix"></div>
                                <div class="col-lg-12 text-center">
                                    <div id="success"></div>
                                    <!-- <button type="submit" class="btn btn-xl"   
                                    <a href="#calendario" class="portfolio-link" data-toggle="modal"></a>loguearse</button> -->
                                    <button type="submit" class="btn btn-xl" >  
                                    loguearse</button>
                                </div>
                        </div>
                    </form>
                </div>
                
                    <!-- </form>
                </div>
                
                <!-- calendario -->
                <!-- <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/1.png" alt="">
                            </div> -->
            <!-- </div> -->
            <!-- <div class="row">
                <img class="img-responsive" src="images/estilo/calendario.png" alt="">
            </div> -->
        </div>
       
    </section>
    {/if}
    

    
   

    

    

{include file="footer.tpl"}




