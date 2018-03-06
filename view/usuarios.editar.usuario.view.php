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
                    
                    <p class="h1">Editar Usuari</p>
                    <hr/>
                 
                    <div class="col-md-12">
                        <form method="post" action="/usuarios/editar/usuario/<?= $usuario->getId() ?>">
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label>Nom</label>
                                    <input type="text" class="form-control" name="nombre" value="<?= $usuario->getNombre() ?>"/>                            
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Cognom 1</label>
                                    <input type="text" class="form-control" name="apellido1" value="<?= $usuario->getApellido1() ?>"/>
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Cognom 2</label>
                                    <input type="text" class="form-control" name="apellido2" value="<?= $usuario->getApellido2() ?>"/>
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Username</label>
                                    <input type="text" class="form-control" name="username" value="<?= $usuario->getUsername() ?>"/>
                                </div>
                                
                                <div class="form-group col-md-4">
    								<label>Empresa</label>
    								<select class="form-control" name="idEmpresa">
	    								<?php foreach($empresas as $empresa){ ?>
	    									<option <?php if($empresa->getId() == $usuario->getIdEmpresa()){ ?>selected <?php } ?>value="<?= $empresa->getId() ?>"><?= $empresa->getNombre() ?></option>
										<?php } ?>
    								</select>
  								</div>
  								
  								<div class="form-group col-md-4">
    								<label>Rol</label>
    								<select class="form-control" name="idRol">
	    								<?php foreach($rolUsuarios as $rol){ ?>
	    									<option <?php if($rol->getId() == $usuario->getIdRol()){ echo "selected"; } ?> value="<?= $rol->getId() ?>"><?= $rol->getNombre() ?></option>
										<?php } ?>
    								</select>
  								</div>
  								
  								<div class="form-group col-md-4">
									<div class="custom-control custom-checkbox">
									  <input type="checkbox" class="custom-control-input" name="isActivo" id="customCheck1" <?php if($usuario->getIsActivo()){ echo "checked"; } ?>>
									  <label class="custom-control-label" for="customCheck1">Check this custom checkbox</label>
									</div>
								</div> 
                                
                                
                                
                                <div class="form-group col-md-1">
                                    <a class="btn btn-primary" href="<?php echo $helper->url() ?>/usuarios">Tornar</a>
                                </div>
                                
                                <div class="form-group col-md-1">
                                    <button type="submit" class="btn btn-success">Editar</button>
                                </div>

                                
                                
                            </div>
                        </form>
                    </div>                    
                  
                </div>                
            </div>         
            
        </div>        
    </body>
</html>