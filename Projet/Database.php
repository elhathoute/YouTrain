<?php
class dbcon{
    static public function conn() {
        try{
            $db = new PDO('mysql:host=localhost;dbname=management_traines','root','');
            $db ->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE , PDO::FETCH_ASSOC);
            return $db;
        }
        catch (PDOException $e){
            print "err". $e ->getMessage();
            die();
        }
    }
    static public function searchbyid($table,$id){
        $sql = "SELECT * FROM $table WHERE `id` = $id";
            $exe = self::conn() -> query($sql);
            $res = $exe->fetch();
            return $res;

    }
}
