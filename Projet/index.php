<!DOCTYPE html>
<html lang="en">
<?php include 'include/header.php'; ?>
<?php include ('include/database.php'); ?>
<body>
    <?php
        // $testObj = new Test("hammani", "32", "77", "238", "1");
        $testObj = new Test();
        // $testObj->getUsers();
        // echo $testObj->getUsers();
        // $testObj = new Statistics();
        // echo $testObj->countTables("trains", "etat","where ete = 1");
        // echo $testObj->totalPrice();
        $testObj->addData();

        // $testObj = new Test();
        // $testObj->deleteData("trains", "13");

    ?>
    <h1>hello</h1>
</body>
</html>