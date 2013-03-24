<?php

Class User extends CI_Model
{
 function login($username, $password)
 {
     
   $this -> db -> select('id, usuario, contraseña');
   $this -> db -> from('cuentas');
   $this -> db -> where('usuario', $username);
   $this -> db -> where('contraseña', MD5($password));
   $this -> db -> limit(1);
   
   $query = $this -> db -> get(); 
   
   if($query -> num_rows() == 1)
   {
       
       
     return $query->result();
   }
   else
   {
     return false;
   }
 }
 
 function saveToken($accesstoken, $refreshtoken, $user)
 {
     $SQL = "UPDATE cuentas SET access_token = '$accesstoken', refresh_token = '$refreshtoken' WHERE usuario = '$user'";
     
     $this->db->query($SQL);
 }
}
?>
