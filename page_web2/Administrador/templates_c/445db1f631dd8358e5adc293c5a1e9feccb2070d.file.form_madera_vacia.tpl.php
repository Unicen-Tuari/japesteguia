<?php /* Smarty version Smarty-3.1.14, created on 2014-11-24 23:53:08
         compiled from ".\templates\form_madera_vacia.tpl" */ ?>
<?php /*%%SmartyHeaderCode:260255473ab28d30722-15669820%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '445db1f631dd8358e5adc293c5a1e9feccb2070d' => 
    array (
      0 => '.\\templates\\form_madera_vacia.tpl',
      1 => 1416869434,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '260255473ab28d30722-15669820',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5473ab28f14da1_97292898',
  'variables' => 
  array (
    'goma' => 0,
    'id_mat' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5473ab28f14da1_97292898')) {function content_5473ab28f14da1_97292898($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>

        
<!-- form dani -->
    <div class="container">        

        <div class="row">
            <div class="box">
                <!-- <div class="col-lg-3 "></div>
                .col-md-3 .col-md-offset-3 -->
                <div class="col-lg-6 col-lg-offset-3 ">
                    <hr>
                    <h2 class="intro-text text-center"><strong>Agregar Madera</strong></h2>
                    <hr>  
                   <!--  <h2 class="intro-text text-center"><strong><?php echo $_smarty_tpl->tpl_vars['goma']->value['nombre'];?>
</strong></h2>  --> 

                 <!--    <h2 ><?php echo $_smarty_tpl->tpl_vars['id_mat']->value;?>
</h2> -->

                    <form role="form" action="index.php?action=agregarMaterialForm" method="POST">
                        <div class="row">
                            
                            <div class="form-group col-lg-12">
                                <label> Id distribuidor: </label>
                                <input name="distribuidor" type="number" class="form-control" >
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Nombre: </label>
                                <input name="nombre" type="text" class="form-control" >
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Mango: </label>
                                <input name="mango" type="number" class="form-control" >
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Peso: </label>
                                <input name="peso" type="number" class="form-control" >
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Tipo de juego: </label>
                                <input name="tipo_juego" type="text" class="form-control" >
                            </div>
                           
                            <div class="form-group col-lg-12">
                                                                
                                 <input name = "id_mat" type = "hidden" value = "<?php echo $_smarty_tpl->tpl_vars['id_mat']->value;?>
">
                                <button type="submit" class="btn btn-default">Agregar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
            
                        
  

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>