<?php
class Select extends Database {

    private $tabname;
    function __construct($tablename) {
         $this -> connectToDb();
        $this -> tabname = $tablename;
    }

    function getRecordById($id, $cont) {
        //$cont = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
        // $query = "SELECT * from $this->tabname where id = '$id' ";
        // var_dump($cont);
        if ($sql = mysqli_query($cont, "SELECT * from users")) {
            $data = mysqli_fetch_array($sql);
        }
        return $data;
    }
    function getAllData() {

    }
}
?>
