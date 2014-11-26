<?php /* Smarty version Smarty-3.1.14, created on 2014-11-26 02:37:38
         compiled from ".\templates\modal - copia.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1275854741a8f6d1392-91116437%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5932d66f72e591683ea299466f734ef92924d912' => 
    array (
      0 => '.\\templates\\modal - copia.tpl',
      1 => 1416961741,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1275854741a8f6d1392-91116437',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54741a8f980c37_94131140',
  'variables' => 
  array (
    'nac' => 0,
    'jugador' => 0,
    'jugadores' => 0,
    'videos' => 0,
    'arr_videos' => 0,
    'video' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54741a8f980c37_94131140')) {function content_54741a8f980c37_94131140($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>


    <section id="material">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                                
                    <h2>Jugadores <?php echo $_smarty_tpl->tpl_vars['nac']->value;?>
es</h2>
                    <!-- <h2>id jugador: <?php echo $_smarty_tpl->tpl_vars['jugadores']->value[$_smarty_tpl->tpl_vars['jugador']->value['id_jugador']];?>
</h2> -->

                    <p class="item-intro text-muted">Informacion general </p> 
                    <!-- <div class="btn-group btn-group-lg"> -->
                    <form name = "modificar" action="index.php?action=agregarJugador" method="POST">
                        <input name = "nac" type = "hidden" value = "<?php echo $_smarty_tpl->tpl_vars['nac']->value;?>
">
                        <button type = "submit" class="btn btn-default">Agregar</button>
                    </form> 

                    <div class="table-responsive">
                                 <table class="table table-bordered table-hover">
                                                <thead>
                                                    <tr class="warning">
                                                        <th>Id jugador</th>
                                                        <th>Nombre</th>
                                                        <th>Tipo jugador</th>
                                                        <th>Nacionalidad</th>
                                                        <th>Fecha nacimiento</th>
                                                        <th>Altura</th>
                                                        <th>Peso</th>
                                                        <th>Agarre</th>
                                                        <th>Equipamiento</th>
                                                        <th>Ranking</th>
                                                        <th>Inicios</th>
                                                        <th>Editar</th>
                                                        <th>Eliminar</th>
                                                    </tr>
                                                </thead>
                                        <?php  $_smarty_tpl->tpl_vars['jugador'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['jugador']->_loop = false;
 $_smarty_tpl->tpl_vars['id_jugador'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['jugadores']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['jugador']->key => $_smarty_tpl->tpl_vars['jugador']->value){
$_smarty_tpl->tpl_vars['jugador']->_loop = true;
 $_smarty_tpl->tpl_vars['id_jugador']->value = $_smarty_tpl->tpl_vars['jugador']->key;
?>
                                                <tbody>
                                                    <tr>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['jugador']->value['id_jugador'];?>
</td>
                                                        <td><?php echo utf8_encode($_smarty_tpl->tpl_vars['jugador']->value['nombre']);?>
</td>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['jugador']->value['tipo_jugador'];?>
</td>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['jugador']->value['nacionalidad'];?>
</td>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['jugador']->value['fecha_nacimiento'];?>
</td>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['jugador']->value['altura'];?>
</td>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['jugador']->value['peso'];?>
</td>
                                                        <td><?php echo utf8_encode($_smarty_tpl->tpl_vars['jugador']->value['agarre']);?>
</td>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['jugador']->value['equipamiento'];?>
</td>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['jugador']->value['ranking'];?>
</td>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['jugador']->value['inicios'];?>
</td>
                                                
                                                        <td> <form name = "modificar" action="index.php?action=editarJugador" method="POST">
                                                            <input name = "id_jug" type = "hidden" value = "<?php echo $_smarty_tpl->tpl_vars['jugador']->value['id_jugador'];?>
&amp;<?php echo $_smarty_tpl->tpl_vars['nac']->value;?>
">
                                                            <button type = "submit">Editar</button>
                                                            </form> 
                                                        </td>
                                                        <td> <form name = "modificar" action="index.php?action=eliminarJugador" method="POST">
                                                        <input name = "id_jug" type = "hidden" value = "<?php echo $_smarty_tpl->tpl_vars['jugador']->value['id_jugador'];?>
&amp;<?php echo $_smarty_tpl->tpl_vars['nac']->value;?>
">

                                                        <button type = "submit">Eliminar</button>
                                                        </form> 
                                                        </td>
                                                    </tr>
                                                </tbody>

                                            <?php } ?> 
                    </div>
                       <!-- <p class="item-intro text-muted">Videos </p> -->
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover">
                                                <thead>
                                                        <tr class="warning">
                                                            <th>Id jugador</th>
                                                            <th>Ruta imagen chica</th>
                                                            <th>Ruta imagen grande</th>
                                                        </tr>
                                                    </thead>
                                            <?php  $_smarty_tpl->tpl_vars['jugador'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['jugador']->_loop = false;
 $_smarty_tpl->tpl_vars['id_jugador'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['jugadores']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['jugador']->key => $_smarty_tpl->tpl_vars['jugador']->value){
$_smarty_tpl->tpl_vars['jugador']->_loop = true;
 $_smarty_tpl->tpl_vars['id_jugador']->value = $_smarty_tpl->tpl_vars['jugador']->key;
?>
                                                    <tbody>
                                                        <tr>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['jugador']->value['id_jugador'];?>
</td>
                                                            <td><?php echo utf8_encode($_smarty_tpl->tpl_vars['jugador']->value['ruta']);?>
</td>
                                                            <td><?php echo utf8_encode($_smarty_tpl->tpl_vars['jugador']->value['ruta_grande']);?>
</td>
                                                        </tr>
                                                    </tbody>           
                                            <?php } ?> 
                                        </table>
                                    </div>
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-hover">
                                                    <thead>
                                                            <tr class="warning">
                                                                <th>Id jugador</th>
                                                                <th>Id video</th>
                                                                <th>Rutas videos</th>
                                                            </tr>
                                                        </thead>
                                                <?php  $_smarty_tpl->tpl_vars['arr_videos'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['arr_videos']->_loop = false;
 $_smarty_tpl->tpl_vars['indice'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['videos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['arr_videos']->key => $_smarty_tpl->tpl_vars['arr_videos']->value){
$_smarty_tpl->tpl_vars['arr_videos']->_loop = true;
 $_smarty_tpl->tpl_vars['indice']->value = $_smarty_tpl->tpl_vars['arr_videos']->key;
?>
                                                    <?php  $_smarty_tpl->tpl_vars['video'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['video']->_loop = false;
 $_smarty_tpl->tpl_vars['indice2'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['arr_videos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['video']->key => $_smarty_tpl->tpl_vars['video']->value){
$_smarty_tpl->tpl_vars['video']->_loop = true;
 $_smarty_tpl->tpl_vars['indice2']->value = $_smarty_tpl->tpl_vars['video']->key;
?>
                                                        <tbody>
                                                            <tr>
                                                                <td><?php echo $_smarty_tpl->tpl_vars['video']->value['id_jugador'];?>
</td>
                                                                <td><?php echo $_smarty_tpl->tpl_vars['video']->value['id_video'];?>

                                                                </td>
                                                                <td><?php echo utf8_encode($_smarty_tpl->tpl_vars['video']->value['ruta']);?>
</td>
                                                            </tr>
                                                        </tbody>  
                                                      <?php } ?>          
                                                <?php } ?> 
                                            </table>
                                        </div>
                            <p>Fecha: Noviembre 2014</p>
               </div>  
          </div>
    </section>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>




    <?php }} ?>