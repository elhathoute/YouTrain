<?php

// if(isset($_SESSION['error'])){
//     echo $_SESSION['error'];
//     echo 'eej';

// }else{
//     echo 'eeetee';
// }


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
}

class user extends dbcon{
    public $nom;
    public $email;	
    public $password;
    public $repetpassword;	
    public $errormsg;

    public function __construct($nom,$email,$password,$repetpassword)
    {
        $this->email = $email;
        $this->nom = $nom;
        $this->password = $password;
        $this->repetpassword = $repetpassword;
    }


    public function checkdata(){
            $sql = "SELECT * FROM `users` WHERE `email` = ?";
            $exe = $this ->conn() -> prepare($sql);
            $exe ->execute([$this -> email]);
            if($exe ->rowCount() > 0){
                $this -> errormsg = 'email already token';
                return false;  
            }
            if (!preg_match("/^[a-zA-Z ]*$/",$this->nom)) {
              $this -> errormsg = 'only letters and white space are allowed in username';
                return false;
           }
            if(empty($this->nom) || empty($this->email) || empty($this->password) || empty($this->repetpassword)){
                $this -> errormsg = 'all inputs required';
                return false;
            }
            if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
                $this -> errormsg = 'enter valid email';
                return false;
            }
            if($this->password != $this->repetpassword){
                $this -> errormsg = 'passwords are not identical';
                return false;
            }
            return true;


    }
    public function insertuser(){
        $sql = "INSERT INTO `users`(`nom`, `email`, `password`, `image`, `id_role`) VALUES (?,?,?,?,1)";
        $exe = $this ->conn() -> prepare($sql);
        $exe ->execute([$this->nom,$this->email, password_hash($this->password, PASSWORD_DEFAULT),'']);
    }
   static public function signin($email,$pass){
       
        $sql = "SELECT * FROM `users` WHERE `email` = ?";
        $exe = self::conn() -> prepare($sql);
        $exe ->execute([$email]);
        $res = $exe -> fetch();
        if(password_verify($pass,$res['password'])){
            return true;
        }else{
        return false;}   
    }
    public function getusers(){
        $sql = "SELECT * FROM `users`";
        $exe = $this -> conn() -> query($sql);
        $res = $exe -> fetchAll();
        return $res;
        
    }
}

$jamal = new user('test','test@afhjil.fr','eeee','eeee');
if($jamal->checkdata()){
    $jamal->insertuser();
}else{
    $_SESSION['error'] = '$jamal->errormsg';
    echo $jamal->errormsg;
}

if(user::signin("test@gail.fr","eeee")){
    echo 'gg';
}else{
    echo 'tf';
}





?>