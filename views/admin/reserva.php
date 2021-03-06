<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Bootstrap Metro Dashboard by Dennis Ji for ARM demo</title>
	<meta name="description" content="Bootstrap Metro Dashboard">
	<meta name="author" content="Dennis Ji">
	<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: CSS -->
	<link id="bootstrap-style" href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
	<link id="base-style" href="css/style.css" rel="stylesheet">
	<link id="base-style-responsive" href="css/style-responsive.css" rel="stylesheet">
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
						<li><a href="index.html"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Inicio</span></a></li>	
						<li>
						<a class="dropmenu" href="#"><i class="icon-calendar"></i><span class="hidden-tablet"> Prestamo</span></a>
						<ul>
							<li><a class="submenu" href="prestamo.html"><i class="icon-file-alt"></i><span class="hidden-tablet"> Registrar</span></a></li>
							<li><a class="submenu" href="submenu2.html"><i class="icon-file-alt"></i><span class="hidden-tablet"> Consultar</span></a></li>
							<li><a class="submenu" href="submenu3.html"><i class="icon-file-alt"></i><span class="hidden-tablet">Modificar</span></a></li>
						</ul>	
						</li>
						<li>
						<a class="dropmenu" href="#"><i class="icon-list-alt"></i><span class="hidden-tablet"> Equipos Fisicos</span></a>
						<ul>
							<li><a class="submenu" href="equipo.html"><i class="icon-file-alt"></i><span class="hidden-tablet"> Registrar</span></a></li>
							<li><a class="submenu" href="submenu2.html"><i class="icon-file-alt"></i><span class="hidden-tablet"> Consultar</span></a></li>
							<li><a class="submenu" href="submenu3.html"><i class="icon-file-alt"></i><span class="hidden-tablet">Modificar</span></a></li>
						</ul>	
						</li>
						<li>
						<a class="dropmenu" href="#"><i class="icon-align-justify"></i><span class="hidden-tablet"> Usuarios</span></a>
						<ul>
							<li><a class="submenu" href="usuario.html"><i class="icon-file-alt"></i><span class="hidden-tablet"> Registrar</span></a></li>
							<li><a class="submenu" href="submenu2.html"><i class="icon-file-alt"></i><span class="hidden-tablet"> Consultar</span></a></li>
							<li><a class="submenu" href="submenu3.html"><i class="icon-file-alt"></i><span class="hidden-tablet">Modificar</span></a></li>
						</ul>	
						</li>
						<li>
						<a class="dropmenu" href="#"><i class="icon-edit"></i><span class="hidden-tablet"> Reservas</span></a>
						<ul>
							<li><a class="submenu" href="reserva.html"><i class="icon-file-alt"></i><span class="hidden-tablet"> Registrar</span></a></li>
							<li><a class="submenu" href="submenu2.html"><i class="icon-file-alt"></i><span class="hidden-tablet"> Consultar</span></a></li>
							<li><a class="submenu" href="submenu3.html"><i class="icon-file-alt"></i><span class="hidden-tablet">Modificar</span></a></li>
						</ul>	
						</li>
						<li><a href="contacto.html"><i class="icon-envelope"></i><span class="hidden-tablet"> Contacto</span></a></li>
						<li><a href="login.html"><i class="icon-lock"></i><span class="hidden-tablet"> Cerrar Sesión</span></a></li>	
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
				<li>
					<i class="icon-edit"></i>
					<a href="#">Reservas</a>
				</li>
			</ul>
			

			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white edit"></i><span class="break"></span>Reservar</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal">
							<fieldset>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Codigo Docente</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" placeholder="1076367123">
								</div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="date01">Fecha Inicio</label>
							  <div class="controls">
								<input type="text" class="input-xlarge datepicker" id="date01" placeholder="02/16/17">
							   </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="date01">Fecha Fin</label>
							  <div class="controls">
								<input type="text" class="input-xlarge datepicker" id="date01" placeholder="02/16/17">
							  </div>
							</div>
							<div class="control-group">
								<label class="control-label" for="selectError">Hora Inicio</label>
								<div class="controls">
								  <select id="selectInicio" data-rel="chosen">
									<option>6</option>
									<option>7</option>
									<option>8</option>
									<option>9</option>
									<option>10</option>
									<option>11</option>
									<option>12</option>
									<option>13</option>
									<option>14</option>
									<option>15</option>
									<option>16</option>
									<option>17</option>
									<option>18</option>
									<option>19</option>
									<option>20</option>
									<option>21</option>
									<option>22</option>
									<option>23</option>
								  </select>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="selectError">Hora Fin</label>
								<div class="controls">
								  <select id="selectFin" data-rel="chosen">
									<option>6</option>
									<option>7</option>
									<option>8</option>
									<option>9</option>
									<option>10</option>
									<option>11</option>
									<option>12</option>
									<option>13</option>
									<option>14</option>
									<option>15</option>
									<option>16</option>
									<option>17</option>
									<option>18</option>
									<option>19</option>
									<option>20</option>
									<option>21</option>
									<option>22</option>
									<option>23</option>
								  </select>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="selectError">Aula</label>
								<div class="controls">
								  <select id="selectError" data-rel="chosen">
									<option>201K</option>
									<option>303D</option>
									<option>323K</option>
									<option>203K</option>
									<option>309D</option>
								  </select>
								</div>
							</div>
							  <div class="form-actions">
								<button type="submit" class="btn btn-primary">Reservar</button>
							  </div>
							</fieldset>
						  </form>
					
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
			<div class="row-fluid sortable " >
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white edit"></i><span class="break"></span>Consultar Reservas</h2>
					</div>
					<div class="box-content">
						<form class="form-horizontal">
						  <fieldset>
						    <div class="control-group">
								<label class="control-label" for="focusedInput">Codigo Docente</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" placeholder="1076367123">
								</div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="date01">Fecha Reserva</label>
							  <div class="controls">
								<input type="text" class="input-xlarge datepicker" id="date01" placeholder="02/16/17">
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

			<div class="row-fluid sortable">	
				<div class="box span12">
					<div class="box-header">
						<h2><i class="halflings-icon white align-justify"></i><span class="break"></span>Reservas</h2>
					</div>
					<div class="box-content">
						<table class="table table-bordered table-striped table-condensed">
							  <thead>
								  <tr>
									  <th>Reserva</th>
									  <th>Usuario</th>
									  <th>Fecha Inicio</th>
									  <th>Fecha Fin</th>
									  <th>Aula</th>
									  <th>Opciones</th>                                            
								  </tr>
							  </thead>   
							  <tbody>
								<tr>
									<td>Especializacion</td>
									<td class="center">Jhoana Gomez</td>
									<td class="center">2017/02/27 7:00 am</td>
									<td class="center">2017/02/28 9:00 am</td>   
									<td class="center">Aula DAB213</td>     
									<td class="center">
										<a class="btn btn-info" href="#">
											<i class="halflings-icon white edit"></i>                                            
										</a>
										<a class="btn btn-danger" href="#">
											<i class="halflings-icon white trash"></i> 
										</a>
									</td>                                  
								</tr>
								<tr>
									<td>Especializacion</td>
									<td class="center">Jhoana Gomez</td>
									<td class="center">2017/02/27 7:00 am</td>
									<td class="center">2017/02/28 9:00 am</td>   
									<td class="center">Aula DAB213</td>   
									<td class="center">
										<a class="btn btn-info" href="#">
											<i class="halflings-icon white edit"></i>                                            
										</a>
										<a class="btn btn-danger" href="#">
											<i class="halflings-icon white trash"></i> 
										</a>
									</td>                                    
								</tr>
								<tr>
									<td>Especializacion</td>
									<td class="center">Jhoana Gomez</td>
									<td class="center">2017/02/27 7:00 am</td>
									<td class="center">2017/02/28 9:00 am</td>   
									<td class="center">Aula DAB213</td>     
									<td class="center">
										<a class="btn btn-info" href="#">
											<i class="halflings-icon white edit"></i>                                            
										</a>
										<a class="btn btn-danger" href="#">
											<i class="halflings-icon white trash"></i> 
										</a>
									</td>                                  
								</tr>
								<tr>
									<td>Especializacion</td>
									<td class="center">Jhoana Gomez</td>
									<td class="center">2017/02/27 7:00 am</td>
									<td class="center">2017/02/28 9:00 am</td>   
									<td class="center">Aula DAB213</td>	
									<td class="center">
										<a class="btn btn-info" href="#">
											<i class="halflings-icon white edit"></i>                                            
										</a>
										<a class="btn btn-danger" href="#">
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
	
	<div class="clearfix"></div>
	
	<footer>

		<p>
			<span style="text-align:left;float:left">&copy; 2013 <a href="http://themifycloud.com/downloads/janux-free-responsive-admin-dashboard-template/" alt="Bootstrap_Metro_Dashboard">JANUX Responsive Dashboard</a></span>
			
		</p>

	</footer>
	
	<!-- start: JavaScript-->

		<script src="js/jquery-1.9.1.min.js"></script>
	<script src="js/jquery-migrate-1.0.0.min.js"></script>
	
		<script src="js/jquery-ui-1.10.0.custom.min.js"></script>
	
		<script src="js/jquery.ui.touch-punch.js"></script>
	
		<script src="js/modernizr.js"></script>
	
		<script src="js/bootstrap.min.js"></script>
	
		<script src="js/jquery.cookie.js"></script>
	
		<script src='js/fullcalendar.min.js'></script>
	
		<script src='js/jquery.dataTables.min.js'></script>

		<script src="js/excanvas.js"></script>
	<script src="js/jquery.flot.js"></script>
	<script src="js/jquery.flot.pie.js"></script>
	<script src="js/jquery.flot.stack.js"></script>
	<script src="js/jquery.flot.resize.min.js"></script>
	
		<script src="js/jquery.chosen.min.js"></script>
	
		<script src="js/jquery.uniform.min.js"></script>
		
		<script src="js/jquery.cleditor.min.js"></script>
	
		<script src="js/jquery.noty.js"></script>
	
		<script src="js/jquery.elfinder.min.js"></script>
	
		<script src="js/jquery.raty.min.js"></script>
	
		<script src="js/jquery.iphone.toggle.js"></script>
	
		<script src="js/jquery.uploadify-3.1.min.js"></script>
	
		<script src="js/jquery.gritter.min.js"></script>
	
		<script src="js/jquery.imagesloaded.js"></script>
	
		<script src="js/jquery.masonry.min.js"></script>
	
		<script src="js/jquery.knob.modified.js"></script>
	
		<script src="js/jquery.sparkline.min.js"></script>
	
		<script src="js/counter.js"></script>
	
		<script src="js/retina.js"></script>

		<script src="js/custom.js"></script>
	<!-- end: JavaScript-->
	
</body>
</html>
