<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- As 3 meta tags acima *devem* vir em primeiro lugar dentro do `head`; qualquer outro conteúdo deve vir *após* essas tags -->
    <title>Formulário</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/mdb.css">
	<link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
    <script src="js/validator.min.js"></script>
    <!-- HTML5 shim e Respond.js para suporte no IE8 de elementos HTML5 e media queries -->
    <!-- ALERTA: Respond.js não funciona se você visualizar uma página file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
   	<div class="container">
            <div class="row">
        	<div class="col-md-12">
            	<br/><br/>
                <form class="form-horizontal contact_form" action="" data-toggle="validator" role="form" method="post">
                    <fieldset>
                        <legend>Formulário de contato</legend>
                            <div class="col-md-5">
                            	<div class="form-group has-feedback">
                                <label for="nome">Nome:</label>
                                <div class="input-group">
                                	<span class="input-group-addon"><i class="fa fa-user"></i></span>
                                	<input type="text" class="form-control input-class" id="nome" minlength="6" aria-describedby="nome" placeholder=" name" required/>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email">E-mail:</label>
                                <div class="input-group">
                                    <span class="input-group-addon">@</span>
                                    <input type="email" class="form-control input-class" id="email" minlength="3" aria-describedby="email" placeholder=" e-mail..." required/>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="tel">Telefone:</label>
                                <div class="input-group">
                                	<span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                    <input type="tel" class="form-control input-class" id="tel" minlength="10" aria-describedby="tel" placeholder=" phone..." required/>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="nasc">Nascimento:</label>
                                <div class="input-group">
                                	<span class="input-group-addon"><i class="fa fa-calendar-o"></i></span>
                                    <input type="date" class="form-control input-class" id="nasc" minlength="10" aria-describedby="nasc" placeholder=" nasc..." required/>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            </div>
                            <div class="col-md-2">
                            	<!--divider colunas-->
                            </div>
                            <div class="col-md-5">
                            <div class="form-group">
                                <label for="celular">Celular:</label>
                                <div class="input-group">
                                	<span class="input-group-addon"><i class="fa fa-mobile-phone"></i></span>
                                	<input type="text" class="form-control input-class" id="cel" minlength="11" aria-describedby="cel" placeholder=" cellphone..." required/>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="cpf">Cpf:</label>
                                <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-address-card"></i></span>
                                	<input type="text" class="form-control input-class" id="cpf" minlength="11" aria-describedby="cpf" placeholder=" cpf..."/ required>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="rg">Rg:</label>
                                <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-address-card-o"></i></span>
                                <input type="text" class="form-control input-class" id="rg" minlength="9" aria-describedby="rg" placeholder=" rg..." required/>
                                <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="tel">Cnpj:</label>
                                <div class="input-group">
                                	<span class="input-group-addon"><i class="fa fa-address-book-o"></i></span>
                                    <input type="text" class="form-control input-class" id="cnpj" minlength="14" aria-describedby="cnpj" placeholder="cnpj..." required/>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            </div>
                            <div class="col-md-12 text-center">
                            <button type="submit" class="btn example hoverable">Enviar formulário</button>
                            <button type="reset" class="btn example hoverable">Limpar formulário</button>
                            </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>

    <!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="js/validacpf.js"></script>
	<script src="js/jquery.maskedinput.js"></script>
    <!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
    <script src="js/bootstrap.js"></script>
   
	<script src="js/mdb.min.js"></script>
    <script>
    	$('#element').popover('toggle');
		$(".alert").alert('close');
		$("#cpf").mask("999.999.999-99");
		$("#tel").mask("(99) 9999-9999");
		$("#cel").mask("(99) 9-9999-9999");
		$("#rg").mask("99999999-9");
		$("#cnpj").mask("99.999.999/9999-99");
		
		
		/*$(".contact_form").validate({
			rules: {
				nome: {
					minlength: 6,
					maxlength: 30,
					required: true
				},
				email: {
					minlength: 3,
					maxlength: 30,
					required: true
				},
				tel: {
					minlength: 10,
					maxlength: 10,
					required: true
				},
				cel: {
					minlength: 11,
					maxlength: 11,
					required: true
				},
				nasc: {
					minlength: 10,
					maxlength: 10,
					required: true
				},
				cpf: {
					minlength: 11,
					maxlength: 11,
					required: true
				},
				rg: {
					minlength: 9,
					maxlength: 9,
					required: true
				},
				cnpj: {
					minlength: 14,
					maxlength: 14,
					required: true
				}
			},
			highlight: function(element) {
				$(element).closest('.form-group').addClass('has-error');
			},
			unhighlight: function(element) {
				$(element).closest('.form-group').removeClass('has-error');
			},
			errorElement: 'span',
			errorClass: 'help-block',
			errorPlacement: function(error, element) {
				if(element.parent('.input-group').length) {
					error.insertAfter(element.parent());
				} else {
					error.insertAfter(element);
				}
			}
		});*/
    </script>
  </body>
</html>