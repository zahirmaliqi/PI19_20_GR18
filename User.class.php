<?php 

class User { 
    private $dbHost     = DB_HOST; 
    private $dbUsername = DB_USERNAME; 
    private $dbPassword = DB_PASSWORD; 
    private $dbName     = DB_NAME; 
    private $userTbl    = DB_USER_TBL; 
     
    function __construct(){ 
        if(!isset($this->db)){ 
            
            $conn = new mysqli($this->dbHost, $this->dbUsername, $this->dbPassword, $this->dbName); 
            if($conn->connect_error){ 
                die("Failed to connect with MySQL: " . $conn->connect_error); 
            }else{ 
                $this->db = $conn; 
            } 
        } 
    } 
     
    function checkUser($data = array()){ 
        if(!empty($data)){ 
             
            $checkQuery = "SELECT * FROM ".$this->userTbl." WHERE oauth_provider = '".$data['oauth_provider']."' AND oauth_uid = '".$data['oauth_uid']."'"; 
            $checkResult = $this->db->query($checkQuery); 
              
            if(!array_key_exists('modified',$data)){ 
                $data['modified'] = date("Y-m-d H:i:s"); 
            } 
             
            if($checkResult->num_rows > 0){ 
           
                $colvalSet = ''; 
                $i = 0; 
                foreach($data as $key=>$val){ 
                    $pre = ($i > 0)?', ':''; 
                    $colvalSet .= $pre.$key."='".$this->db->real_escape_string($val)."'"; 
                    $i++; 
                } 
                $whereSql = " WHERE oauth_provider = '".$data['oauth_provider']."' AND oauth_uid = '".$data['oauth_uid']."'"; 
                 
                $query = "UPDATE ".$this->userTbl." SET ".$colvalSet.$whereSql; 
                $update = $this->db->query($query); 
            }else{ 
                
                if(!array_key_exists('created',$data)){ 
                    $data['created'] = date("Y-m-d H:i:s"); 
                } 
                 
                $columns = $values = ''; 
                $i = 0; 
                foreach($data as $key=>$val){ 
                    $pre = ($i > 0)?', ':''; 
                    $columns .= $pre.$key; 
                    $values  .= $pre."'".$this->db->real_escape_string($val)."'"; 
                    $i++; 
                } 
                $query = "INSERT INTO ".$this->userTbl." (".$columns.") VALUES (".$values.")"; 
                $insert = $this->db->query($query); 
            } 
             
            $result = $this->db->query($checkQuery); 
            $userData = $result->fetch_assoc(); 
        } 
         
        return !empty($userData)?$userData:false; 
    } 
}
