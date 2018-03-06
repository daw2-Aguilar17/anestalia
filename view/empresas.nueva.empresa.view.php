<!DOCTYPE HTML>
<html lang="es">
    <head>
    <?php include 'mod/head.mod.php' ?>
     	<title>asdasd</title>
    </head>
	<body>
	<?php $navbar = 'empresas' ?>
	<?php include 'mod/navbar.mod.php' ?>
		<div class="container">
			
			<div class="row">
            	<div class="col-md-12">
					<p class="h1">Empresa</p>
					<hr/>
				</div>
			</div>
			
			
			<form method="post" action="/empresas/insert">
				<div class="row">
					<div class="col-md-12">
	                		<div class="form-row">
	                        	<div class="form-group col-md-4">
	                            	<label>Nom</label>
	                                <input type="text" class="form-control" name="nom"/>                            
								</div>
								<div class="form-group col-md-4">
									<label>CIF</label>
	                                <input type="text" class="form-control" name="cif"/>                            
								</div>
	                            <div class="form-group col-md-4">
	                            	<label>Telefon</label>
	                                <input type="text" class="form-control" name="telefon"/>                            
								</div>
	                            <div class="form-group col-md-4">
	                            	<label>Email</label>
	                                <input type="text" class="form-control" name="email"/>                            
								</div>                            
							</div>
					</div>
				</div> 
				
				<div class="row">
					<div class="col-md-12">
						
							<a class="btn btn-primary" href="<?php echo $helper->url() ?>/empresas">Enrere</a>
					
						
	                    	<button type="submit" class="btn btn-success">Afegir</button>
					
					</div>
				</div>
			</form>
			
		</div>
    </body>
</html>