<?php

class Database {
    private $host   = "localhost";
    private $user   = "root";
    private $pwd    = "";
    private $dbName = "management_traines";

    protected function connect() {
        $dsn = "mysql:host=$this->host;dbname=$this->dbName";

        try {
            $pdo = new PDO($dsn, $this->user, $this->pwd);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $pdo;
        } catch(PDOException $e) {
            die("ERROR: Could not connect. " . $e->getMessage());
        }
    }
}

class Test extends Database {

    // public function getUsers()
    // {
    //     $sql  = "SELECT * FROM trains";

    //     try {
    //         $stmt = $this->connect()->query($sql);

    //         while ($row = $stmt->fetch())
    //         {
    //             echo $row['nom'].'<br>';
    //         }
    //     } catch (Exception $e) {
    //         die("ERROR: Could not able to execute $sql. " . $e->getMessage());
    //     }
    // }

    // public function getUsersStmt($emails, $pssd) {
    //     $sql  = "SELECT * FROM trains WHERE nom = ?";
    //     $stmt = $this->connect->prepare($sql);
    //     $stmt->execute([$emails, $pssd]);
    //     $rows = $stmt->fetchAll();

    //     foreach ($rows as $row)
    //     {
    //         echo $row['email'].'<br>';
    //     }
    // }

    // public function __construct($name, $cpct_frst, $cpct_scnd, $vtss, $etat)
    // {
    //     $sql  = "INSERT INTO `trains` (`nom`, `capacite_first`, `capacite_second`, `vitesse`, `etat`) VALUES (?, ?, ?, ?, ?)";
        
    //     try {
    //         $stmt = $this->connect()->prepare($sql);
    //         $stmt->execute([$name, $cpct_frst, $cpct_scnd, $vtss, $etat]);
    //     } catch (Exception $e) {
    //         die("ERROR: Could not able to execute $sql. " . $e->getMessage());
    //         // echo json_encode(["error"=>"Query is empty"]);
    //     }
    // }

    public function addData()
    {
        $sql = "SELECT trains.nom AS name_train, gares.nom AS station_name, villes.nom AS city_name, voyages.* FROM voyages CROSS JOIN trains, gares, villes WHERE (voyages.id_train = trains.id AND voyages.id_gare_dep = gares.id AND villes.id = gares.id_ville)";
        
        try {
            $stmt = $this->connect()->query($sql);
            $rows = $stmt->fetchAll();
            
            foreach($rows as $row)
            {
                echo $row['date_dep'].'<br>'; 
                echo $row['date_arr'].'<br>'; 
                echo $row['name_train'].'<br>';
                echo $row['station_name'].'<br>'; 
                echo $row['city_name'].'<br>';
                echo '<br>';
            }
            
        } catch (PDOException $e) {
            die("ERROR: Could not able to execute . " . $e->getMessage());
        }
    }
    
    public function deleteData($table, $id)
    {
        $sql = "DELETE FROM $table WHERE id = $id";

        try {
            $stmt = $this->connect()->query($sql);
            return $stmt;
        } catch (PDOException $e) {
            die("ERROR: Could not able to execute $sql. " . $e->getMessage());
        }
    }

}
    class  Statistics extends Database {
        
    public function countTables($table, $column, $condition="")
    {
        $sql = "SELECT COUNT($column) FROM $table $condition";

        try {
            $stmt = $this->connect()->query($sql);
            $rows = $stmt->fetch();
            return $rows["COUNT($column)"];
        } catch (PDOException $e) {
            die("ERROR: Could not able to execute $sql. " . $e->getMessage());
        }
    }

    public function totalPrice()
    {
        $sql = "SELECT SUM(prix) FROM classes INNER JOIN reservations ON classes.id = reservations.id_classe WHERE id_classe = 1";

        try {
            $stmt = $this->connect()->query($sql);
            $rows = $stmt->fetch();
            return $rows["SUM(prix)"];
        } catch (PDOException $e) {
            die("ERROR: Could not able to execute $sql. " . $e->getMessage());
        }
    } 
}
