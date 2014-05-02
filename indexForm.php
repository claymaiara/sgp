<!doctype html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Home</title>
<link rel="stylesheet" href="css/bootstrap.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

	<!--  PESQUISA -->
	<div class="container-fluid">

		<nav class="navbar navbar-inverse  navbar-fixed-top" role="navigation">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse"
					data-target="#navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span> <span
						class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>

				<div class="btn-group">
					<button class="btn btn-default btn-lg">
						<span class="glyphicon glyphicon-th-large"></span> Ceadis
					</button>
					<button data-toggle="dropdown"
						class="btn btn-default btn-lg dropdown-toggle">
						<span class="glyphicon glyphicon-arrow-down"></span>
					</button>
					<ul class="dropdown-menu">
						<li><a href="#">Action</a></li>
						<li><a href="#">Another action</a></li>
						<li class="divider"></li>
						<li><a href="#"><span class="glyphicon glyphicon-user"></span>
								Alterar Senha</a></li>
					</ul>
				</div>

			</div>



			<div class="nav navbar-left collapse navbar-collapse">
				<p class="navbar-text">SGP - SISTEMA DE GESTAO PORTARIA</p>
			</div>
			<div class="nav navbar-right collapse navbar-collapse"
				id="navbar-collapse-1">
				<button class="btn btn-default btn-lg ">
					<span class="glyphicon glyphicon-off"></span> Sair
				</button>
			</div>
		</nav>

		<nav class="navbar navbar-default" role="navigation"></nav>

		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">Chamados</h3>
			</div>
			<div class="panel-body">

				<!-- Painel de a��es -->

				<ul class="nav nav-pills">
					<li>
						<button type="submit" class="btn btn-primary pull-right">
							<span class="glyphicon glyphicon-plus"></span> Novo
						</button>
					</li>
					<li>
						<button type="submit" class="btn btn-primary pull-right">
							<span class="glyphicon glyphicon-search"></span> Pesquisar
						</button>
					</li>
					<li class="dropdown">
						<div class="btn-group">
							<button type="button" class="btn btn-primary">
								<span class="glyphicon glyphicon-list-alt"></span> Relat�rio
							</button>
							<button type="button" class="btn btn-primary dropdown-toggle"
								data-toggle="dropdown">
								<span class="caret"></span> <span class="sr-only">Toggle
									Dropdown</span>
							</button>
							<ul class="dropdown-menu" role="menu">
								<li><a href="#"><span class="glyphicon glyphicon-list-alt"></span>
										Action</a></li>
								<li><a href="#"><span class="glyphicon glyphicon-list-alt"></span>
										Another action</a></li>
								<li><a href="#"><span class="glyphicon glyphicon-list-alt"></span>
										Something else here</a></li>
								<li class="divider"></li>
								<li><a href="#"><span class="glyphicon glyphicon-list-alt"></span>
										Separated link</a></li>
							</ul>
						</div>
					</li>
				</ul>

				<!-- Fim Painel de a��es -->

			</div>
		</div>



		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Novo</h3>
			</div>
			<div class="panel-body">
		
				<form class="form-horizontal" role="form">

				<div class="form-group">
				    <label for="inputEmail3" class="col-sm-1 control-label">Email</label>
				    <div class="col-sm-4">
				      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
				    </div>
				  </div>
				
				  <div class="form-group">
				    <label for="inputPassword3" class="col-sm-1 control-label">Password</label>
				    <div class="col-sm-4">
				      <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
				    </div>
				  </div>
				  
				  <div class="form-group">
				    <div class="col-sm-offset-1 col-sm-2">
				      <div class="checkbox">
				        <label>
				          <input type="checkbox"> Remember me
				        </label>
				      </div>
				    </div>
				  
				    <div class="col-sm-1">
				      <div class="checkbox">
				        <label>
				          <input type="checkbox"> Teste
				        </label>
				      </div>
				    </div>
				  </div>
				  
				  <div class="form-group">
			    	<label for="" class="col-sm-1 control-label">Descri��o</label>				        
				    <div class="col-sm-4">
				          <textarea class="form-control" rows="3"></textarea>
				    </div>
				  </div>
				  
				  <div class="form-group">
			    	<label for="" class="col-sm-1 control-label">Selecione</label>				        
				    <div class="col-sm-2">
						<select class="form-control">
						  <option></option>
						  <option>allsjh</option>
						  <option>2</option>
						  <option>3</option>
						  <option>4</option>
						  <option>5</option>
						</select>	
				    </div>
				  </div>
				  
				  
				  <div class="form-group">
				    <div class="col-sm-offset-1 col-sm-1">
				      <button type="submit" class="btn btn-primary">
				      	<span class="glyphicon glyphicon-floppy-saved"></span> Salvar
				      </button>
				    </div>
				  </div>
				  
				</form>
								
		
			</div>
		</div>

		<footer>
			<nav class="navbar navbar-default navbar-fixed-bottom"
				role="navigation">

				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse"
						data-target="#este">
						<span class="sr-only">Toggle navigation</span> <span
							class="icon-bar"></span> <span class="icon-bar"></span> <span
							class="icon-bar"></span>
					</button>


					<p class="navbar-text">..: SGP - Sistema De Gest�o Portaria
						[Tecnologia da Informa��o] :..</p>

				</div>
				<div class="nav navbar-right collapse navbar-collapse" id="este">
					<button class="btn btn-default btn-lg">
						<span class="glyphicon glyphicon-user"></span> Usu�rio
					</button>
				</div>


			</nav>
			<nav class="navbar navbar-default" role="navigation"></nav>

		</footer>

	</div>




	<script src=js/jquery.js></script>
	<script src="js/bootstrap.js"></script>
</body>
</html>
<?php
