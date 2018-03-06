<!DOCTYPE HTML>
<html lang="es">
    <head>
     	<?php include 'mod/head.mod.php' ?>
     	<title>Editar Empresa</title>
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
			
			
			<form method="post" action="/empresas/editar/empresa/<?php echo $empresa->getId();?>">
				<div class="row">
					<div class="col-md-12">
	                		<div class="form-row">
	                        	<div class="form-group col-md-4">
	                            	<label>Nom</label>
	                                <input type="text" class="form-control" name="nom" value="<?= $empresa->getNombre() ?>"/>                            
								</div>
								<div class="form-group col-md-4">
									<label>CIF</label>
	                                <input type="text" class="form-control" name="cif" value="<?= $empresa->getCif() ?>"/>                            
								</div>
	                            <div class="form-group col-md-4">
	                            	<label>Telefon</label>
	                                <input type="text" class="form-control" name="telefon" value="<?= $empresa->getTelefono() ?>"/>
								</div>
	                            <div class="form-group col-md-4">
	                            	<label>Email</label>
	                                <input type="text" class="form-control" name="email" value="<?= $empresa->getEmail() ?>"/>
								</div> 
								<div class="form-group col-md-4">
									<div class="custom-control custom-checkbox">
									  <input type="checkbox" class="custom-control-input" name="isActivo" id="customCheck1" <?php if($empresa->getIsActivo()){ echo "checked"; } ?>>
									  <label class="custom-control-label" for="customCheck1">Check this custom checkbox</label>
									</div>
								</div>  
							</div>
					</div>
				</div> 
				
				<div class="row">
					<div class="col-md-12">
						
							<a class="btn btn-primary" href="<?php echo $helper->url() ?>/empresas">Enrere</a>
					
						
	                    	<button type="submit" class="btn btn-success">Editar</button>
					
					</div>
				</div>
			</form>
			
		</div>
    </body>	
    	     
    </body>
</html>