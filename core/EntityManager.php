<?php
class EntityManager{

    private $db; 

    public function __construct($db) {
    	require_once 'Repository.php';
    	$this->db = $db;
    }
    
    public function getRepository($table){
    	$repository = new Repository($table, $this->db); 
    	return $repository;
    }

    public function save($obj){
    	
    	// Recuperamos el nombre del objeto
    	$table = get_class($obj);
    	
    	// Recuperamos los atributos del objeto
    	$reflect = new ReflectionClass($obj);
    	$attrsObj = $reflect->getProperties(ReflectionProperty::IS_PRIVATE);
    	
    	// Construimos la consulta insert a partir del nombre y los atributos del objeto
    	$query = "INSERT INTO " . $table . " (";
    	
    	foreach ($attrsObj as $attr) {
			$query .= $attr->getName() . ", ";
		}
    	
		$query = substr($query, 0, (strlen($str) - 2)) . ") VALUES (";

		foreach ($attrsObj as $attr) {
			$query .= ":" . $attr->getName() . ", ";
		}
		
		$query = substr($query, 0, (strlen($str) - 2)) . ")";
		
		// Preparamos la consulta insert previamente construida
		$stmt = $this->db->prepare($query);
    	
		// Reemplazamos los marcadores de la consulta preparada por los valores a insertar
		foreach ($attrsObj as $attr) {
			eval("\$stmt->bindValue(':" . $attr->getName() . "', \$obj->get" . ucwords($attr->getName()) . "());");
    	}
    	
    	$stmt->execute();
	}
    
    
    
    
    public function refresh($obj){
        
        $table = get_class($obj);
        
        $reflect = new ReflectionClass($obj);
        $attrsObj = $reflect->getProperties(ReflectionProperty::IS_PRIVATE);
        
        $query = "UPDATE " . $table . " SET ";
               
        foreach ($attrsObj as $attr) {            
            $query .= $attr->getName() . " = " . ":" . $attr->getName() . ", ";          
        }
        
        $query = substr($query, 0, (strlen($str) - 2));
        
        $query .= " WHERE id = :id";       
        
        $stmt = $this->db->prepare($query);
        
        

        
        
        
        
        foreach ($attrsObj as $attr) {            
            $query .= $attr->getName() . " = " . ":" . $attr->getName() . ", ";           
            
            eval("\$stmt->bindValue(':" . $attr->getName() . "', \$obj->get" . ucwords($attr->getName()) . "());");
            
            
            
            
            
            // si viene un attr de idLibro por ejemplo
            // eval("\$stmt->bindValue(':" . $attr->getName() . "', \$obj->getIdLibro->getIdPagina()->getId()" . ucwords($attr->getName()) . "()->getId());");
            
            
            
            
        }

        $stmt->execute();         
    }
    

    
    public function remove($obj){
    	$table = get_class($obj);
    	$stmt = $this->db->prepare("DELETE FROM $table WHERE id = :id");
    	$stmt->bindValue(":id", $obj->getId());
    	$stmt->execute();
    }
    
    
    
}
?>
