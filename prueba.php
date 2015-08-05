<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.png">

    <title>SPOT - Free Bootstrap 3 Theme</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/main.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

     <?php 
   include"view/template/navbar.php";
   ?>

	<!-- INFO SECTION -->
    <a name="masinfo"></a>
    <div class="container w">
        <div class="row centered">
            <div class="page-header">
                <h2 style="COLOR: rgb(186, 10, 52)">RELATORES INVITADOS</h2>
                <p>Destacados relatores de diferentes origenes y disciplinas han desarrollado actividades y temas de conversación y reflexión para presentar en <b>Santiago Despierta</b>, Encuentro de Experiencias, motivados por encontrarse con un público estimulado a explorar y abrirse a nuevas posibilidades de autoconocimiento.</p>
            </div><!--page-header-->
         </div><!--row-->
         
         <div class="row centered"> 
                <br>
            <div class="col-sm-3">
                    <a  id="relator" href="#" data-toggle="modal" data-target="#relatorModal"><img class="img-circle" src="assets/img/relatores/carolina.png" width="110" height="110" alt="Carolina Ramírez"></a>
                <h4>Carolina Ramírez</h4>
                
            </div><!-- col-lg-3 -->
            
            <div class="col-sm-3">
                    <a href="#relatorModal" data-toggle="modal" data-target="#relatorModal"><img class="img-circle" src="assets/img/relatores/bruno.jpg" width="110" height="110" alt="otro"></a>
                <h4>bruno</h4>
                
            </div><!-- col-lg-3 -->

          
    </div><!-- info section -->
	
	
	<?php 
	include"view/template/footer.php";
	?>
    
    <!--Modal for Relatores-->
	<div class="modal fade" id="relatorModal" tabindex="-1" role="dialog" aria-labelledby="relatorModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="relatorModalLabel" align="center">Bruno Solari</h4>
          </div>
          <div class="modal-body">
          <img class="img-rounded center-block" src="assets/img/relatores/bruno.jpg" width="200" height="200" alt="otro"></a><br>
              <p align="justify">Director de Consultora Mindfulness, Miembro del Instituto del Bienestar y docente en Escuela de Psicología de la Universidad Adolfo Ibáñez. Catorce años de experiencia profesional en organizaciones, universidades y consultoras, introduciendo y fomentando la práctica de mindfulness. Dicta Talleres de Reducción de Estrés Basado en Atención Plena (REBAP/MBSR) desde 2012 y en paralelo se desempeña como psicoterapeuta en su consulta privada.Coorganizador del Primer Encuentro de Municipios por la Felicidad (Quillota, 2014).
    Magíster en Psicología PUC (2010), Postítulo Terapia Dialéctico Conductual Universidad de Chile (2005) y Psicólogo Universidad Central (2000). Instructor de Mindfulness (formado por Fernando de Torrijos, 2011) y practicante de meditación budista (desde 1995).
    Co-autor del capítulo Mindfulness y Bien-Estar del libro “La Felicidad: evidencias y experiencias para cambiar nuestro mundo”, 2013, Ediciones Sonepsyn. 
             </p>
                
          </div>
        </div>
      </div>
</div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
   
    <script src="assets/js/bootstrap-modal.js"></script>
    
    
    <script type="text/javascript">
  /*  $( document ).ready(function() {
  // Asociar un evento al botón que muestra la ventana modal
	  $('#relator').click(function() {
		$.ajax({
			// la URL para la petición
			url : '/recibe.php',
	 
			// la información a enviar
			data : { 'fac' : <?php echo $dato['factura']; ?> },
	 
			// especifica si será una petición POST o GET
			type : 'GET',
	 
			// el tipo de información que se espera de respuesta
			dataType : 'html',
	 
			// código a ejecutar si la petición es satisfactoria;
			success : function(respuesta) {
				$('#MyProducto').html(respuesta);
			},
	 
			// código a ejecutar si la petición falla;
			error : function(xhr, status) {
				alert('Disculpe, existió un problema');
			},
		});
	  });
});*/
  </script>
    
  </body>
</html>

	<!-- MODAL FOR CONTACT -->
	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	        <h4 class="modal-title" id="myModalLabel">contact us</h4>
	      </div>
	      <div class="modal-body">
		        <div class="row centered">
		        	<p>We are available 24/7, so don't hesitate to contact us.</p>
		        	<p>
		        		Somestreet Ave, 987<br/>
						London, UK.<br/>
						+44 8948-4343<br/>
						hi@blacktie.co
		        	</p>
		        	<div id="mapwrap">
		<iframe height="300" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.es/maps?t=m&amp;ie=UTF8&amp;ll=52.752693,22.791016&amp;spn=67.34552,156.972656&amp;z=2&amp;output=embed"></iframe>
					</div>	
		        </div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-danger" data-dismiss="modal">Save & Go</button>
	      </div>
	    </div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->