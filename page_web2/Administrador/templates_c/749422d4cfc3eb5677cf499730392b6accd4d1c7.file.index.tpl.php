<?php /* Smarty version Smarty-3.1.14, created on 2014-11-24 18:21:18
         compiled from ".\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4626546e2b3a3e4ff1-50479415%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '749422d4cfc3eb5677cf499730392b6accd4d1c7' => 
    array (
      0 => '.\\templates\\index.tpl',
      1 => 1416849490,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4626546e2b3a3e4ff1-50479415',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_546e2b3a6a4297_65270626',
  'variables' => 
  array (
    'usuario' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546e2b3a6a4297_65270626')) {function content_546e2b3a6a4297_65270626($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>


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
    

    
    <?php if (!isset($_smarty_tpl->tpl_vars['usuario']->value)){?>
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
                
        </div>
       
    </section>
    <?php }?>
    

    
   

    

    

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>





<?php }} ?>