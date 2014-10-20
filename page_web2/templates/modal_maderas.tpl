

        <h2>Maderas</h2>
        <p class="item-intro text-muted">Nombres y caracter&iacute;sticas </p>

            
          <div class="table-responsive">     
         <table class="table table-bordered table-hover">
            {foreach key=distribuidor item=arr_indices from=$materiales}
                        <thead>
                            <tr class="warning">
                                <th>{$distribuidor}</th>
                                <th>Mango</th>
                                <th>Peso(gr)</th>
                                <th>Tipo de juego</th>
                            </tr>
                        </thead>
                {foreach key=indice item=arr_caract from=$arr_indices}
                        <tbody>
                            <tr>
                                <td>{$arr_caract.nombre}</td>
                                <td>{$arr_caract.mango}</td>
                                <td>{$arr_caract.peso}</td>
                                <td>{$arr_caract.tipo_juego}</td>
                            </tr>
                        </tbody>


                    {/foreach}   
            {/foreach}
            </table>
            </div>
            
                            
        <p>Fecha: Octubre 2014</p>                 
       
        <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Cerrar Material</button>
                        
  

    