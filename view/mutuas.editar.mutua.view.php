<!DOCTYPE HTML>
<html lang="es">
    <head>
    <?php include 'mod/head.mod.php' ?>
     	<title>Mutuas</title>
    </head>
    <body>        
    
    	<?php $navbar = 'mutuas' ?>
    	<?php include 'mod/navbar.mod.php' ?>
		<div class="container">
			
			<div class="row">
            	<div class="col-md-12">
					<p class="h1">Mútua</p>
					<hr/>
				</div>
			</div>
			
			
			<form method="post" action="/mutuas/editar/mutua/<?php echo $mutua->getId();?>">
				<div class="row">
					<div class="col-md-12">
	                		<div class="form-row">
	                        	<div class="form-group col-md-4">
	                            	<label>Nom</label>
	                                <input type="text" class="form-control" name="nom" value="<?= $mutua->getNombre() ?>"/>                            
								</div>
								<div class="form-group col-md-4">
									<div class="custom-control custom-checkbox">
									  <input type="checkbox" class="custom-control-input" name="isActivo" id="customCheck1" <?php if($mutua->getIsActivo()){ echo "checked"; } ?>>
									  <label class="custom-control-label" for="customCheck1">Actiu</label>
									</div>
								</div>  
							</div>
					</div>
				</div> 
				
				<div class="row">
					<div class="col-md-12">
						
							<a class="btn btn-primary" href="<?php echo $helper->url() ?>/mutuas">Enrere</a>
					
						
	                    	<button type="submit" class="btn btn-success">Editar</button>
					
					</div>
				</div>
			</form>
			
		</div>
    </body>	
    	     
    </body>
</html>