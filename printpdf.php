<?php


require_once 'vendor/autoload.php';

use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();
 
$html = '
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Résultats de votre recherche disponibiltés des Trains</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="./result.css" />
</head>
<div class="card rounded-4 ">
<div class="card-header bg-white d-flex justify-content-between mt-2 mx-3 ">
    <div class="text-center ">
        <p class="fw-semibold ">Départ</p>
        <p class="fw-normal ">00h00min</p>
        <p class="fst-italic ">Gare Départ</p>
    </div>
    <div class="text-center mt-3 ">
        <p class="fw-semibold ">Durée Oh0min</p>
        <hr style="color: rgb(228, 58, 25) " />
        <p class="fw-semibold ">Direct</p>
    </div>
    <div class="text-center ">
        <p class="fw-semibold ">Arrivée</p>
        <p>00h00min</p>
        <p class="fst-italic ">Gare Destination</p>
    </div>
</div>

<div class="card-body d-flex justify-content-between align-items-center ">
    <div class="d-flex align-items-center ">
        <div class="ps-2 ">
            <i class="bx bx-train fs-1 " style="color: rgb(228, 58, 25) "></i>
        </div>
        <div class="px-3 text-center ">
            <p class="mt-2 text-center pt-3 fs-5 ">Atlas</p>
            <p class="text-center fw-light ">Gare Départ</p>
        </div>
    </div>
    <div class="px-4 text-center ">
        <p class="px-2 fw-semibold ">1 passager</p>
        <p class="px-2 fw-semibold ">A partir de</p>
        <p class="px-2 fw-semibold ">115 MAD</p>
        <button id="btnReserv" type="submit" class="btn btn-dark px-3">Réserver</button>
    </div>
</div>
</div>';

$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A5', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the gener
?>