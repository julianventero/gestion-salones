<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Gestion de Prestamo de Llaves y Recursos Fisicos</title>
	<meta name="description" content="Bootstrap Metro Dashboard">
	<meta name="author" content="Dennis Ji">
	<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: CSS -->
	<link id="bootstrap-style" href="<?php echo base_url(); ?>public/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>public/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link id="base-style" href="<?php echo base_url(); ?>public/css/style.css" rel="stylesheet">
	<link id="base-style-responsive" href="<?php echo base_url(); ?>public/css/style-responsive.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<!-- end: CSS -->
	

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link id="ie-style" href="css/ie.css" rel="stylesheet">
	<![endif]-->
	
	<!--[if IE 9]>
		<link id="ie9style" href="css/ie9.css" rel="stylesheet">
	<![endif]-->
		
	<!-- start: Favicon -->
	<link rel="shortcut icon" href="img/favicon.ico">
	<!-- end: Favicon -->
	<style>
		#usu>ul{
			display: block;
		}
		#usu{
			background: #578EBE;
		}
	</style>
		
		
		
</head>

<body>
		<!-- start: Header -->
	<div class="navbar">
		<div class="navbar-inner">
		<div class="container-fluid">
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			<a class="brand logo" href="index.html"><img src="http://www.ucp.edu.co/portal/wp-content/themes/UCatolica/images/logo.png"></img></a>
			<a class="brand titulo" href="index.html"><span>GESTION DE SALONES</span></a>
			
		    <div class="nav-no-collapse header-nav">
			</div>
			<!-- end: Header Menu -->
					
			</div>
		</div>
	</div>
	<!-- start: Header -->
	
		<div class="container-fluid-full">
		<div class="row-fluid">
				
			<!-- start: Main Menu -->
			<div id="sidebar-left" class="span2">
				<div class="nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li><a href="inicio"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Inicio</span></a></li>	
						<li>
						<a  href="prestamo"><i class="icon-calendar"></i><span class="hidden-tablet"> Prestamo</span></a>	
						</li>
						<li>
						<a  href="equiposFisicos"><i class="icon-list-alt"></i><span class="hidden-tablet"> Equipos Fisicos</span></a>	
						</li>
						<li id="usu">
						<a class="dropmenu" href="#"><i class="icon-align-justify"></i><span class="hidden-tablet"> Usuarios</span></a>
						<ul>
							<li id="registroUs"><a class="submenu" href="#"><i class="icon-file-alt"></i><span class="hidden-tablet"> Registrar</span></a></li>
							<li id="consultaUs"><a class="submenu" href="#"><i class="icon-search"></i><span class="hidden-tablet"> Consultar</span></a></li>
						</ul>	
						</li>
						<li>
						<a  href="reparacion"><i class="icon-wrench"></i><span class="hidden-tablet"> Reparación</span></a>	
						</li>
						<li>
						<a  href="aulas"><i class="icon-th"></i><span class="hidden-tablet"> Aulas</span></a>
						</li>
						<li>
						<a  href="roles"><i class="icon-group"></i><span class="hidden-tablet"> Roles</span></a>
						</li>
						<li><a href="ayuda"><i class="icon-book"></i><span class="hidden-tablet"> Ayuda</span></a></li>
						<li><a href="contacto"><i class="icon-envelope"></i><span class="hidden-tablet"> Contacto</span></a></li>
						<li><a href="<?php echo base_url(); ?>"><i class="icon-lock"></i><span class="hidden-tablet"> Cerrar Sesión</span></a></li>	
					</ul>
				</div>
			</div>
			<!-- end: Main Menu -->
			
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			
			<!-- start: Content -->
			<div id="content" class="span10">
			
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Inicio</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Usuarios</a><i class="icon-angle-right"></i></li>
				<li class="texto"><a href="#">Registrar</a></li>
			</ul>
			<div class="row-fluid sortable" id="registroU">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white edit"></i><span class="break"></span>Registro Usuario</h2>
					</div>
					<div class="box-content">
						<form class="form-horizontal" method="post" action="registrar_usuario">
							<fieldset>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Codigo</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" name="codigo" type="text" placeholder="1076367123">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Nombre</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" name="nombre" type="text" placeholder="Juan Carlos">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput" >Apellido</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="apellido" id="focusedInput" type="text" placeholder="Blando">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Nombre Usuario</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="usuario" id="focusedInput" type="text" placeholder="Jblandon">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Correo</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="correo" id="focusedInput" type="text" placeholder="j@gmail.com">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Telefono</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="telefono" id="focusedInput" type="text" placeholder="3145672345">
								</div>
							  </div>
							  <div class="control-group">
							  	<label class="control-label" for="focusedInput">Contraseña</label>
							  	<div class="controls">
									<input class="input-xlarge focused" name="contrasena" name="password" id="password" type="password" placeholder="Conraseña"/>
								</div>
							   </div>
							   <div class="control-group">
									<label class="control-label" for="selectRol">Rol</label>
									<div class="controls">
									  <select id="selectRol" name="selectRol" data-rel="chosen">
									  	<?php
									  		foreach ($listRoles as $valores) {
									  			?><option value="<?php echo $valores['id_rol']; ?>"><?php echo     $valores['nombre']; ?></option><?php
									  		}
									  	?>
									  </select>
									</div>
								</div> 
							  <div class="form-actions">
								<button type="submit" class="btn btn-primary">Guardar</button>
							  </div>
							</fieldset>
						  </form>
					
					</div>
				</div><!--/span-->
			</div><!--/row-->

			<div class="row-fluid sortable visible" id="consultaU">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white search"></i><span class="break"></span>Consultar Usuarios</h2>
					</div>
					<div class="box-content">
						<form class="form-horizontal">
						  <fieldset>
						    <div class="control-group">
								<label class="control-label" for="focusedInput">Codigo</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" placeholder="1076367123">
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="selectRolConsulta">Rol</label>
								<div class="controls">
								  <select id="selectRolConsulta" data-rel="chosen">
										<?php
									  		foreach ($listRoles as $valores) {
									  			?><option value="<?php echo $valores['id_rol']; ?>"><?php echo     $valores['nombre']; ?></option><?php
									  		}
									  	?>
								  </select>
								</div>
							</div>   
							<div class="control-group">
								<label class="control-label" for="selectError">Estado</label>
								<div class="controls">
								  <select id="selectEstado" data-rel="chosen">
									<option>Activo</option>
									<option>Inactivo</option>
								  </select>
								</div>
							</div>       
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Consultar</button>
							  <button type="submit" class="btn btn-primary">Consulta General</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->

			<div class="row-fluid sortable visible" id="tablaU">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white user"></i><span class="break"></span>Usuarios</h2>
					</div>
					<div class="box-content">
						<table class="table table-bordered table-striped table-condensed">
						  <thead>
							  <tr>
								  <th>Nombre</th>
								  <th>Usuario</th>
								  <th>Correo</th>
								  <th>Telefono</th>
								  <th>Rol</th>
								  <th>Estado</th>
								  <th>Opciones</th>
							  </tr>
						  </thead>   
						  <tbody>
							<tr>
								<td>Victor Orozco</td>
								<td class="center">VictorO</td>
								<td class="center">victor.orozco@ucp.edu.co</td>
								<td class="center">3147095160</td>
								<td class="center">Administrador</td>
								<td class="center">
									<span class="label label-success">Activo</span>
								</td>
								<td class="center">
									<a class="editarUsuario btn btn-info" href="#">
										<i class="halflings-icon white edit"></i>  
									</a>
									<a class="borrarUsuario btn btn-danger" href="#">
										<i class="halflings-icon white trash"></i> 
									</a>
								</td>
							</tr>
							<tr>
								<td>Victor Orozco</td>
								<td class="center">VictorO</td>
								<td class="center">victor.orozco@ucp.edu.co</td>
								<td class="center">3147095160</td>
								<td class="center">Administrador</td>
								<td class="center">
									<span class="label label-success">Activo</span>
								</td>
								<td class="center">
									<a class="editarUsuario btn btn-info" href="#">
										<i class="halflings-icon white edit"></i>  
									</a>
									<a class="borrarUsuario btn btn-danger" href="#">
										<i class="halflings-icon white trash"></i> 
									</a>
								</td>
							</tr>
							<tr>
								<td>Victor Orozco</td>
								<td class="center">VictorO</td>
								<td class="center">victor.orozco@ucp.edu.co</td>
								<td class="center">3147095160</td>
								<td class="center">Administrador</td>
								<td class="center">
									<span class="label label-success">Activo</span>
								</td>
								<td class="center">
									<a class="editarUsuario btn btn-info" href="#">
										<i class="halflings-icon white edit"></i>  
									</a>
									<a class="borrarUsuario btn btn-danger" href="#">
										<i class="halflings-icon white trash"></i> 
									</a>
								</td>
							</tr>
							<tr>
								<td>Victor Orozco</td>
								<td class="center">VictorO</td>
								<td class="center">victor.orozco@ucp.edu.co</td>
								<td class="center">3147095160</td>
								<td class="center">Administrador</td>
								<td class="center">
									<span class="label label-success">Activo</span>
								</td>
								<td class="center">
									<a class="editarUsuario btn btn-info" href="#">
										<i class="halflings-icon white edit"></i>  
									</a>
									<a class="borrarUsuario btn btn-danger" href="#">
										<i class="halflings-icon white trash"></i> 
									</a>
								</td>
							</tr>
							<tr>
								<td>Victor Orozco</td>
								<td class="center">VictorO</td>
								<td class="center">victor.orozco@ucp.edu.co</td>
								<td class="center">3147095160</td>
								<td class="center">Administrador</td>
								<td class="center">
									<span class="label label-success">Activo</span>
								</td>
								<td class="center">
									<a class="editarUsuario btn btn-info" href="#">
										<i class="halflings-icon white edit"></i>  
									</a>
									<a class="borrarUsuario btn btn-danger" href="#">
										<i class="halflings-icon white trash"></i> 
									</a>
								</td>
							</tr>
							<tr>
								<td>Ana Cardona</td>
								<td class="center">AnaC</td>
								<td class="center">ana@gmail.com</td>
								<td class="center">3127895160</td>
								<td class="center">Secretaria</td>
								<td class="center">
									<span class="label label-important">Inactivo</span>
								</td>
								<td class="center">
									<a class="editarUsuario btn btn-info" href="#">
										<i class="halflings-icon white edit"></i></a>
									<a class="borrarUsuario btn btn-danger" href="#">
										<i class="halflings-icon white trash"></i> 
									</a>
								</td>
							</tr>
						  </tbody>
					  </table>     
					  <div class="pagination pagination-centered">
						  <ul>
							<li><a href="#">Anterior</a></li>
							<li class="active">
							  <a href="#">1</a>
							</li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">Siguiente</a></li>
						  </ul>
						</div>         
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
		</div><!--/.fluid-container-->
	
			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->
		<!--Modificar Usuario-->	
		<div class="modal hide fade" id="myModalEditarUsuario">
			<div class="modal-body">
				<div class="row-fluid sortable">
				<div class="box span12">
				<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white edit"></i><span class="break"></span>Modificar Usuario</h2>
					</div>
					<div class="box-content">
						<form class="form-horizontal">
						  <fieldset>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Nombre</label>
								<div class="controls">
								  <input class="input-xlarge disabled" id="disabledInput" type="text" placeholder="Juan Blandon" disabled="">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Correo</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" value="j@gmail.com">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Telefono</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" value="3145672345">
								</div>
							  </div>
							  <div class="control-group">
							  	<label class="control-label" for="focusedInput">Contraseña</label>
							  	<div class="controls">
									<input class="input-xlarge focused" name="password" id="password" type="password" value="Conraseña"/>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="selectError">Rol</label>
								<div class="controls">
								  <select id="selectRolModal" data-rel="chosen">
										<?php
									  		foreach ($listRoles as $valores) {
									  			?><option value="<?php echo $valores['id_rol']; ?>"><?php echo     $valores['nombre']; ?></option><?php
									  		}
									  	?>
								  </select>
								</div>
							</div>      
							</fieldset>
						</form> 
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
			
			</div>
			<div class="modal-footer">
				<a href="#" class="btn" data-dismiss="modal">Cancelar</a>
				<a href="#" class="btn btn-warning">Editar</a>
			</div>
		</div>	
		<!--Eliminar Usuario-->	
		<div class="modal hide fade" id="myModalEliminarUsuario">
			<div class="modal-body">
				<div class="row-fluid sortable">
				<div class="box span12">
				<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white edit"></i><span class="break"></span>Cambio estado a inactivo</h2>
					</div>
					<div class="box-content">
						<form class="form-horizontal">
						  <fieldset>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Nombre</label>
								<div class="controls">
								  <input class="input-xlarge disabled" id="disabledInput" type="text" placeholder="Juan Blandon" disabled="">
								</div>
							  </div>
							<div class="control-group">
								<label class="control-label" for="selectError">Rol</label>
								<div class="controls">
								  <input class="input-xlarge disabled" id="disabledInput" type="text" placeholder="Secretaria" disabled="">
								</div>
							</div>   
							<div class="control-group">
								<label class="control-label" for="selectError">Estado</label>
								<div class="controls">
								  <input class="input-xlarge disabled" id="disabledInput" type="text" placeholder="Activo" disabled="">
								</div>
							</div>   
							</fieldset>
						</form> 
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
			
			</div>
			<div class="modal-footer">
				<a href="#" class="btn" data-dismiss="modal">Cancelar</a>
				<a href="#" class="btn btn-danger">Aceptar</a>
			</div>
		</div>	
	<div class="modal hide fade" id="myModal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">×</button>
			<h3>Settings</h3>
		</div>
		<div class="modal-body">
			<p>Here settings can be configured...</p>
		</div>
		<div class="modal-footer">
			<a href="#" class="btn" data-dismiss="modal">Close</a>
			<a href="#" class="btn btn-primary">Save changes</a>
		</div>
	</div>
	<div class="common-modal modal fade" id="common-Modal1" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-content">
			<ul class="list-inline item-details">
				<li><a href="http://themifycloud.com">Admin templates</a></li>
				<li><a href="http://themescloud.org">Bootstrap themes</a></li>
			</ul>
		</div>
	</div>
	<div class="clearfix"></div>
	
	<footer>

		<p>
			<span style="text-align:left;float:left">&copy; 2017</span>
		</p>

	</footer>
	
	<!-- start: JavaScript-->

		<script src="<?php echo base_url(); ?>public/js/jquery-1.9.1.min.js"></script>
	<script src="<?php echo base_url(); ?>public/js/jquery-migrate-1.0.0.min.js"></script>
	
		<script src="<?php echo base_url(); ?>public/js/jquery-ui-1.10.0.custom.min.js"></script>
	
		<script src="<?php echo base_url(); ?>public/js/jquery.ui.touch-punch.js"></script>
	
		<script src="<?php echo base_url(); ?>public/js/modernizr.js"></script>
	
		<script src="<?php echo base_url(); ?>public/js/bootstrap.min.js"></script>
	
		<script src="<?php echo base_url(); ?>public/js/jquery.cookie.js"></script>
	
		<script src='<?php echo base_url(); ?>public/js/fullcalendar.min.js'></script>
	
		<script src='<?php echo base_url(); ?>public/js/jquery.dataTables.min.js'></script>

		<script src="<?php echo base_url(); ?>public/js/excanvas.js"></script>
	<script src="<?php echo base_url(); ?>public/js/jquery.flot.js"></script>
	<script src="<?php echo base_url(); ?>public/js/jquery.flot.pie.js"></script>
	<script src="<?php echo base_url(); ?>public/js/jquery.flot.stack.js"></script>
	<script src="<?php echo base_url(); ?>public/js/jquery.flot.resize.min.js"></script>
	
		<script src="<?php echo base_url(); ?>public/js/jquery.chosen.min.js"></script>
	
		<script src="<?php echo base_url(); ?>public/js/jquery.uniform.min.js"></script>
		
		<script src="<?php echo base_url(); ?>public/js/jquery.cleditor.min.js"></script>
	
		<script src="<?php echo base_url(); ?>public/js/jquery.noty.js"></script>
	
		<script src="<?php echo base_url(); ?>public/js/jquery.elfinder.min.js"></script>
	
		<script src="<?php echo base_url(); ?>public/js/jquery.raty.min.js"></script>
	
		<script src="<?php echo base_url(); ?>public/js/jquery.iphone.toggle.js"></script>
	
		<script src="<?php echo base_url(); ?>public/js/jquery.uploadify-3.1.min.js"></script>
	
		<script src="<?php echo base_url(); ?>public/js/jquery.gritter.min.js"></script>
	
		<script src="<?php echo base_url(); ?>public/js/jquery.imagesloaded.js"></script>
	
		<script src="<?php echo base_url(); ?>public/js/jquery.masonry.min.js"></script>
	
		<script src="<?php echo base_url(); ?>public/js/jquery.knob.modified.js"></script>
	
		<script src="<?php echo base_url(); ?>public/js/jquery.sparkline.min.js"></script>
	
		<script src="<?php echo base_url(); ?>public/js/counter.js"></script>
	
		<script src="<?php echo base_url(); ?>public/js/retina.js"></script>

		<script src="<?php echo base_url(); ?>public/js/custom.js"></script>
	<!-- end: JavaScript-->
	
</body>
</html>