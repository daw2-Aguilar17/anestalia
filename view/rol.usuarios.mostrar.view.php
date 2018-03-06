<!DOCTYPE HTML>
<html lang="es">
    <head>
        
        <?php include 'mod/head.mod.php' ?>
     	<title>Mutuas</title>
        
    </head>
    <body>     
    
    	<?php $navbar = 'rolesUsuario' ?>
    	<?php include 'mod/navbar.mod.php' ?>
    	   
       <div class="container">
           
          
            
            <div class="row">
                <div class="col-md-12">  

                    <p class="h1">Rols de Usuari</p>
                    <hr/>

                    <div class="table-responsive">                            
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Nom</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($rolesUsuario as $rol){ ?>
                                    <tr>
                                        <td><?php echo $rol->getNombre() ?></td>
                                        <td><a class="btn btn-sm btn-link" href="<?php echo $helper->url() ?>/rolUsuarios/editar/rol/<?php echo $rol->getId() ?>">Editar</a></td>
                                        <td><a class="btn btn-sm btn-danger" data-toggle="modal" data-target="#exampleModal">Eliminar</a></td>
                                    </tr> 
                                <?php } ?>
                            </tbody>
                        </table>
                    </div> 

                </div> 
            </div>         
           
            <div class="row">
                <div class="col-md-12">
                    <a class="btn btn-success" href="<?php echo $helper->url() ?>/rolUsuarios/insert">Afegir Rol</a>
                </div>    
            </div>
           
           
           


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar Rol?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            
                <div class="table-responsive">                            
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Nom</th>
								 
                            </tr>
                        </thead>
                        <tbody id="detalles">
                            
                        </tbody>
                    </table>
                </div>    
            
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <a class="btn btn-primary" href="<?php echo $helper->url() ?>/rolUsuarios/eliminar/rol/<?php echo $rol->getId() ?>" >Eliminar</a>
            </div>
        </div>
    </div>
</div>
           
               
        </div>              
    </body>
</html>