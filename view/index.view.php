<!DOCTYPE HTML>
<html lang="es">
    <head>
    	<?php include 'mod/head.mod.php' ?>
     	<title>Index</title>
    </head>
    <body>        
	
	<?php include 'mod/navbar.mod.php' ?>
    
    
    
    
    
    
        <div class="container">
            
            <div class="row">   
                <div class="col-md-12"> 
                    <div class="jumbotron jumbotron-fluid">                    
                        <h1 class="display-3">Empresa</h1>
                        <p class="lead">Servicio $servicio Centro Medico $centro</p>                    
                    </div>             
                </div>   
            </div>
            
            <div class="row">                
                <div class="col-md-12">
                
                <?php 
                
                if($_SESSION['userSession']){
                	echo "EN SESION";
                }else{
                	echo "SIN SESION";
                }
                
                ?>
                
            <form method="post" action="/usuarios/logIn">
				<div class="row">
					<div class="col-md-12">
	                		<div class="form-row">
	                        	<div class="form-group col-md-4">
	                            	<label>Id</label>
	                                <input type="text" class="form-control" name="id"/>                            
								</div>
								                            
							</div>
					</div>
				</div> 
				
				<div class="row">
					<div class="col-md-12">
						
						
					
						
	                    	<button type="submit" class="btn btn-success">Iniciar sesio</button>
					
					</div>
				</div>
			</form> 
                 
                </div>                
            </div> 
            
        </div>
    </body>
</html>