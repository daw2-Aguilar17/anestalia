<?php
class Repository{
    
    private $table;
    private $db; 

    public function __construct($table, $db) {    
		$this->table = $table;
		$this->db = $db;
    }

    public function findAll(){        
        $objCollection = array();        
        
        $stmt = $this->db->query("SELECT * FROM $this->table ORDER BY id DESC");
        $stmt->execute();
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        foreach($rows as $row){
            $obj = new $this->table($this->db);
            
            foreach($row as $key => $col){          
                eval("\$obj->set" . ucwords($key) . "('" . $col . "');");             
            }
            $objCollection[] = $obj; 
        }
        return $objCollection;        
    }
    
    public function find($id){        
    	
    
    	
    	$stmt = $this->db->prepare("SELECT * FROM $this->table WHERE id = :id");
        $stmt->bindValue(':id', $id);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        
        $obj = new $this->table($this->db);
        
        
        
        foreach($row as $key => $col){
            eval("\$obj->set" . ucwords($key) . "('" . $col . "');");            
        }
        return $obj;        
    }
 
    
}
?>
