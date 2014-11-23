
    
   
    <h2>{utf8_encode($ipj[0]['nombre'])}</h2>
    <img class="img-responsive" src="{$img[0]['ruta_grande']}" alt="">
    <div id=portfolio_j>
        <p><strong>Nacionalidad:  </strong>{utf8_encode($ipj[0]['nacionalidad'])} </p>
        <p><strong>Fecha de nacimiento:  </strong>{$ipj[0]['fecha_nacimiento']} </p>
        <p><strong>Altura(cm):  </strong>{$ipj[0]['altura']} </p>
        <p><strong>Peso(kg):  </strong>{$ipj[0]['peso']} </p>
        <p><strong>Agarre:  </strong>{utf8_encode($ipj[0]['agarre'])} </p>
        <p><strong>Equipamiento:  </strong>{utf8_encode($ipj[0]['equipamiento'])} </p>
        <p><strong>Actual r&aacutenking:  </strong>{$ipj[0]['ranking']} </p>
        <p><strong>Profesional desde:  </strong>{$ipj[0]['inicios']} </p>
        <p class="item-intro text-muted">Descripcion</p>
     </div>
    <h3>Videos</h3>
    <div id="videos_j">
      {foreach key=indice item=video from=$videos}
            
            <video width="330" height="250" controls>
                <source src="{$video['ruta']}"> 
            </video>

      {/foreach}
    </div>
    <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Cerrar Jugador</button>

  

    