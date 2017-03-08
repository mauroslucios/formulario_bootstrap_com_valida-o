<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- As 3 meta tags acima *devem* vir em primeiro lugar dentro do `head`; qualquer outro conteúdo deve vir *após* essas tags -->
    <title>javascriptforbootstrap</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
   
	<link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
    <!-- HTML5 shim e Respond.js para suporte no IE8 de elementos HTML5 e media queries -->
    <!-- ALERTA: Respond.js não funciona se você visualizar uma página file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
   	<div class="container">
    	<h1>Modal</h1>
        <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#myModal">Launch Modal</button>
        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
          <div class="modal-dialog">
        
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Modal Header</h4>
              </div>
              <div class="modal-body">
                <p>Some text in the modal.</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
        
          </div>
        </div>
        <br/>  <br/>
        <a href="#" rel="tooltip" title="first tooltip" class="btn btn-danger" id="element">hover over me</a>
         <br/>  <br/>
         <a class="close" data-dismiss="alert" href="#">&times;</a>
         <br/><br/>
         <div class="btn-group">
          <button class="btn btn-default">Left</button>
          <button class="btn btn-default">Center</button>
          <button class="btn btn-default">Right</button>
        </div>	
        <br/><br/>
         <div class="btn-group dropup">
          <button class="btn btn-default">Dropup</button>
          <button class="btn dropdown-toggle" data-toggle="dropdown">
          	<span class="caret"></span>
          </button>
          <ul class="dropdown-menu">
          	<li>Um</li>
             <li class="divider"></li>
            <li>Dois</li>
             <li class="divider"></li>
            <li>Três</li>
          </ul>
        </div>	
        <br/><br/>
        <ul class="breadcrumb">
          <li>
            <a href="#">Home</a> <span class="divider"></span>
          </li>
          <li>
            <a href="#">Library</a> <span class="divider"></span>
          </li>
          <li class="active">Data</li>
        </ul>
        <br/><br/>
        <div class="pagination">
          <ul>
            <li><a href="#">Prev</a></li>
            <li class="active">
              <a href="#">1</a>
            </li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">Next</a></li>
          </ul>
        </div>	
        <br/><br/>
        <div class="row">
        <div class="col-md-8">
          <h2>Exemplos de galeria</h2>
          <p>Explore all your options with the various grid classes available to you. You can also mix and match different sizes.</p>
          <ul class="thumbnails" style="list-style:none;">
            <li class="col-md-6">
              <a href="#" class="thumbnail">
                <img src="img/img1.PNG" alt="">
              </a>
            </li>
            <li class="col-md-3">
              <a href="#" class="thumbnail">
                 <img src="img/img2.PNG" alt="">
              </a>
            </li>
            <li class="col-md-3">
              <a href="#" class="thumbnail">
                 <img src="img/img10.PNG" alt="">
              </a>
            </li>
           
            <li class="col-md-3">
              <a href="#" class="thumbnail">
                 <img src="img/img5.PNG" alt="">
              </a>
            </li>
            <li class="col-md-3">
              <a href="#" class="thumbnail">
                 <img src="img/img6.PNG" alt="">
              </a>
            </li>
            <li class="col-md-3">
              <a href="#" class="thumbnail">
                 <img src="img/img7.PNG" alt="">
              </a>
            </li>
            <li class="col-md-3">
              <a href="#" class="thumbnail">
                 <img src="img/img8.PNG" alt="">
              </a>
            </li>
             <li class="col-md-3">
              <a href="#" class="thumbnail">
                 <img src="img/img4.PNG" alt="">
              </a>
            </li>
            <li class="col-md-3">
              <a href="#" class="thumbnail">
                 <img src="img/img11.PNG" alt="">
              </a>
            </li>
            
          </ul>
        </div>
        
        </div>
        
    </div>

    <!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	
    <!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
    <script src="js/bootstrap.js"></script>
	
    <script>
    	$('#element').popover('toggle');
		$(".alert").alert('close');
		
    </script>
  </body>
</html>