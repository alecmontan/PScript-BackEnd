<!DOCTYPE html>
<html lang="en" ng-app="comentApp" >
  <head>

    <meta charset="utf-8">
    <!--<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>LFA-Contact</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" src="js/jquery-2.2.2.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/angular.js"></script>
    <script src="controller.js"></script>
    <style>
		input.ng-dirty.ng-invalid {
		    border-color: red;
		}
	</style>
  </head>
  <body ng-controller="ComentList">
	    <div class="container-fluid">
			<div class="row" style="background-color: black">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-12" >
							<center>
								<img alt="Bootstrap Image Preview" src="img/logo.png" width="10%">
								<br>
								<img alt="Bootstrap Image Preview" src="img/logo_nome.png" width="40%">
							</center>
						</div>
					</div>
					<br><br><br><br>
					<div class="row">
						<div class="col-md-3" >
							<center>
							 	<a href="#"><img src="img/botao_home.png" width="110" height="70"></img></a>
							 </center>
						</div>
						<div class="col-md-3">
							 <center>
							 	<a href="#"><img src="img/botao_galeria.png" width="110" height="70"></img></a>
							 </center>
						</div>
						<div class="col-md-3">
							<center>
							 	<a href="#"><img src="img/botao_novidades.png" width="110" height="70"></img></a>
							 </center>
						</div>
						<div class="col-md-3">
							 <center>
							 	<a href="contato.php"><img src="img/botao_contato.png" width="110" height="70"></img></a>
							 </center>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-md-12">
							<div class="row">
								<h2 align="center" style="color: white">Contato</h2>
										<form name="add_coment" novalidate>
											<input type="hidden" name="id" ng-model="id">
											<input type="text" name="nome" ng-model="nome" size="50" placeholder="Digite o seu nome" required>
											<span style="color:red" ng-show="add_coment.nome.$dirty && add_coment.nome.$invalid"><span ng-show="add_coment.nome.$error.required">Por favor escreva o seu nome de identificação.</span></span><br>
											<input type="text" name="coment" ng-model="coment" placeholder="Digite o seu comentário" size="50" maxlength="255" required>
											<span style="color:red" ng-show="add_coment.coment.$dirty && add_coment.coment.$invalid"><span ng-show="add_coment.coment.$error.required">Por favor escreva um comentário.</span></span><br>
											<input type="button" name="submit_coment" ng-show='add_cmt' value="Submit" ng-click="coment_submit()" ng-disabled="add_coment.nome.$invalid ||  add_coment.coment.$invalid">
											<input type="button" name="update_coment" ng-show='update_cmt'  value="Update" ng-click="update_coment()" ng-disabled="add_coment.nome.$invalid ||  add_coment.coment.$invalid">
										</form>
										<br/>
										<table border=1  class="table table-condensed table-hover" style="background-color: white">
									      	<thead>
									      		<th>ID</th>
									      		<th>Nome</th>
									      		<th>Comentário</th>						      		
									      		<th>Action</th>     		
									      	</thead>	      	
								            <tbody ng-init="get_coment()">
								            	<tr ng-repeat="coment in coments">
											      	<td>{{ coment.id }}</td>
													<td>{{ coment.nome }}</td>
													<td>{{ coment.coment }}</td>
													<td><a href="" ng-click="coment_edit(coment.id)">Edit</a> | <a href="" ng-click="coment_delete(coment.id)">Delete</a></td>
												</tr>    
								            </tbody>
								        </table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
    </body>
</html>
