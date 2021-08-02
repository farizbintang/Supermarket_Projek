<?php
class koneksi {
    var $host = "localhost";
    var $username = "root";
    var $password = "";
    var $db = "bpwl_supermarket";

    function __construct(){
        $this->con= mysqli_connect($this->host,$this->username,$this->password,$this->db);
        mysqli_select_db($this->con,$this->db);
    }

    function insert_user($name, $username, $password, $level){
        mysqli_query($this->con, "insert into user values ('','$name','$username','$password','$level')");
    }

	function viewuser(){
        $query = mysqli_query($this->con,"SELECT * FROM user");
        while($row = mysqli_fetch_array($query)){
            $see[] = $row;

        }
        return $see;
    }
}
?>