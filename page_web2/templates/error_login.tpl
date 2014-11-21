{include file="header.tpl" title=foo}


<!-- <div class="container">
	<div class="col-lg-12"> 
		<div class="alert alert-danger">


  			<a  class="alert-link">{$error_login}</a>



		</div>
		 <a href="index.php?action=index">Inicio</a>
	</div>
</div> -->
 <header>
        <div class="container">
        	
             <h3>{$error_login}</h3>
     	   <div class="intro-text"> 
            	<!-- <div class="intro-heading">{$error_login}</div> -->
                <a href="index.php?action=index#contact" class="page-scroll btn btn-xl">Volver</a>
            </div>
             
        </div>
    </header>



{include file="footer.tpl"}
