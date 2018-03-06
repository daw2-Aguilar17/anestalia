<!DOCTYPE HTML>
<html lang="es">
    <head>
    <?php include 'mod/head.mod.php' ?>
     	<title>Mutuas</title>
    </head>
    <body>
    	<?php $navbar = 'usuarios' ?>
    	<?php include 'mod/navbar.mod.php' ?>
           
        <div class="container">
            
         
           
            <div class="row">
                <div class="col-md-12">
                    
                    <p class="h1">Nuevo Usuario</p>
                    <hr/>
                 
                    <div class="col-md-12">
                        <form method="post" action="/usuarios/insert">
                        	<div class="form-row">
                                <div class="form-group col-md-4">
                                    <label>Nom</label>
                                    <input type="text" class="form-control" name="nombre"/>                            
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Cognom 1</label>
                                    <input type="text" class="form-control" name="apellido1"/>
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Cognom 2</label>
                                    <input type="text" class="form-control" name="apellido2"/>
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Username</label>
                                    <input type="text" class="form-control" name="username"/>
                                </div>
                                
                                <div class="form-group col-md-4">
    								<label>Empresa</label>
    								<select class="form-control" name="idEmpresa">
	    								<?php foreach($empresas as $empresa){ ?>
	    									<option value="<?= $empresa->getId() ?>"><?= $empresa->getNombre() ?></option>
										<?php } ?>
    								</select>
  								</div>
  								
  								<div class="form-group col-md-4">
    								<label>Rol</label>
    								<select class="form-control" name="idRol">
	    								<?php foreach($rolUsuarios as $rol){ ?>
	    									<option value="<?= $rol->getId() ?>"><?= $rol->getNombre() ?></option>
										<?php } ?>
    								</select>
  								</div>
                                
                                
                                
                                
                                <div class="form-group col-md-1">
                                    <a class="btn btn-primary" href="<?php echo $helper->url() ?>/usuarios">Enrere</a>
                                </div>
                                
                                <div class="form-group col-md-1">
                                    <button type="submit" class="btn btn-success">Afegir</button>
                                </div>

                                
                                
                            </div>
                        </form>
                    </div>                    
                  
                </div>                
            </div>           
            
        </div>        
    </body>
</html>