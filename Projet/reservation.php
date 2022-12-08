<?php
include ("Database.php");
class Reservation extends dbcon {
    public $userid;
    public $voyageid;
    public $dateReservation;

    public function __construct($userid,$void,$date){
        $this->userid = $userid;
        $this->voyageid = $void;
        $this->dateReservation = $date;
    }

    public function insertreservation(){
        $sql = 'INSERT INTO `reservations`(`date_reserve`, `id_user`, `id_voyage`, `id_classe`) VALUES (?,?,?,1)';
        $exe = $this ->conn() -> prepare($sql);
        $exe ->execute([$this->dateReservation,$this->userid,$this->voyageid]);
    }

    static public function searchreservation($id){
        $sql = 'SELECT * FROM `reservations` WHERE `id_user` = ?';
        $exe = self::conn() -> prepare($sql);
        $exe ->execute([$id]);
        $res = $exe->fetchAll();
        return $res;
    }

}

// $vo = new Reservation(1, 10, '2002-12-12');
// var_dump($vo);
// $vo->insertreservation();

var_dump(Reservation::searchreservation(1));