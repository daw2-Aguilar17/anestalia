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
			
			
			<form method="post" action="/mutuas/insert">
				<div class="row">
					<div class="col-md-12">
	                		<div class="form-row">
	                        	<div class="form-group col-md-4">
	                            	<label>Nom</label>
	                                <input type="text" class="form-control" name="nom"/>                            
								</div>
								                            
							</div>
					</div>
				</div> 
				
				<div class="row">
					<div class="col-md-12">
						
							<a class="btn btn-primary" href="<?php echo $helper->url() ?>/mutuas">Enrere</a>
					
						
	                    	<button type="submit" class="btn btn-success">Afegir</button>
					
					</div>
				</div>
			</form>
			
		</div>
    </body>
</html>