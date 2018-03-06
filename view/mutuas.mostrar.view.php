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

                    <p class="h1">Mútues</p>
                    <hr/>

                    <div class="table-responsive">                            
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Nom</th>
                                    <th scope="col">Actiu</th>
                                    <th></th>
                                    <th></th> 
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($mutuas as $mutua){ ?>
                                    <tr>
                                        <td><?php echo $mutua->getNombre() ?></td>
                                        <td><?php if($mutua->getIsActivo()){ echo "Si"; }else{ echo "No"; } ?></td>
                                        <td><a class="btn btn-sm btn-link" href="<?php echo $helper->url() ?>/mutuas/editar/mutua/<?php echo $mutua->getId() ?>">Editar</a></td>
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
                    <a class="btn btn-success" href="<?php echo $helper->url() ?>/mutuas/insert">Afegir Mútua</a>
                </div>    
            </div>
           
           
           


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar Mútua?</h5>
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
                                <th scope="col">Actiu</th> 
                            </tr>
                        </thead>
                        <tbody id="detalles">
                            
                        </tbody>
                    </table>
                </div>    
            
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <a class="btn btn-primary" href="<?php echo $helper->url() ?>/mutuas/eliminar/mutua/<?php echo $mutua->getId() ?>" >Eliminar</a>
            </div>
        </div>
    </div>
</div>
           
               
        </div>              
    </body>
</html>