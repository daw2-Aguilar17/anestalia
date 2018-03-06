<!DOCTYPE HTML>
<html lang="en">
    <head>
		<title>Empreses</title>         
        <?php include 'mod/head.mod.php' ?>
        
        <script type="text/javascript">

    	//Give events on tags
        $(document).ready(function(){
        	$(".delete_btn").bind("click", SelectDelete);
        });

    	//Functionsssss
    	function SelectDelete(event){

			var idEmpresa = event.target.id;       	


    		   $.ajax({	type: 'POST',
	    			    data:  { "empresa" : idEmpresa },
    	    		    url:   '/empresas/selectDelete/empresa/'+idEmpresa,						
						
    			   	  	beforeSend: function () {
	                      	alert('beforeSend');
               		  	},
    			      	success: function(data) {

    			      	
    			            
    			         	alert('success');

							console.log(data);
    			         	
    			         	alert(data);
    			      	}
    		});

    	}

    	
        
        </script>
        
    </head>
    <body>     
    	<?php $navbar = 'empresas' ?>
    	<?php include 'mod/navbar.mod.php' ?>
    	   
       <div class="container">
           
          
            
            <div class="row">
                <div class="col-md-12">  

                    <p class="h1">Empreses</p>
                    <hr/>

                    <div class="table-responsive">                            
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Nom</th>
                                    <th scope="col">CIF</th>
                                    <th scope="col">Telefon</th>                                    
                                    <th scope="col">Email</th> 
                                    <th scope="col">Actiu</th>
                                    <th></th>
                                    <th></th> 
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($empresas as $empresa){ ?>
                                    <tr>
                                        <td><?php echo $empresa->getNombre() ?></td>
                                        <td><?php echo $empresa->getCif() ?></td>
                                        <td><?php echo $empresa->getTelefono() ?></td>
                                        <td><?php echo $empresa->getEmail() ?></td>
                                        <td><?php if($empresa->getIsActivo()){ echo "Si"; }else{ echo "No"; } ?></td>
                                        <td><a class="btn btn-sm btn-link" href="<?= $helper->url() ?>/empresas/editar/empresa/<?php echo $empresa->getId() ?>">Editar</a></td>
                                        <td><a class="btn btn-sm btn-danger delete_btn" id="<?= $empresa->getId() ?>">Eliminar</a></td>
                                        <!-- data-toggle="modal" data-target="#exampleModal" -->
                                    </tr> 
                                <?php } ?>
                            </tbody>
                        </table>
                    </div> 

                </div> 
            </div>         
           
            <div class="row">
                <div class="col-md-12">
                    <a class="btn btn-success" href="<?php echo $helper->url() ?>/empresas/insert">Afegir Empresa</a>
                </div>    
            </div>
           
           
           


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar Empresa?</h5>
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
								<th scope="col">CIF</th>
                                <th scope="col">Telefon</th>                                    
                                <th scope="col">Email</th> 
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
                <a class="btn btn-primary" href="<?php echo $helper->url() ?>/empresas/eliminar/empresa/<?php echo $empresa->getId() ?>" >Eliminar</a>
            </div>
        </div>
    </div>
</div>
           
               
        </div>              
    </body>
</html>
