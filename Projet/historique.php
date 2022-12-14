<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Historique</title>
</head>
<body>
    <?php
    include "./navbar.php";
    ?>
    <section>
        <div class="container mt-5 mb-2 ">
            <div class="row">
            <h4 class="fw-bold fs-3 mb-4"> Mes Réservations</h4>
            <hr class="mb-5">
            <div class="text-center mb-5 ">
                    <button type="button " class="btn btn-outline-dark text-center " style="width: 300px ">
                        <span class="text-center ">Retour à la page d'acceuil</span>
                    </button>
                </div>
            </div>
        </div>
        <div class="container col-sm-11 col-md-8 col-lg-6 ">
            
            <div class="row ">
                <div class="card rounded-4 shadow">
                    <div class="card-header bg-white d-flex justify-content-between mt-2 mx-3 ">
                        <div class="text-center mt-4">
                            <p class="fw-bold"> Mercredi 07 décembre 2022</p>
                            <p class="fw-semibold ">00h00min</p>       
                        </div>
                        
                        <div class="text-center mt-5 me-4">
                            <p class="fw-bold ">M. Nom Prènom</p>
                        </div>
                    </div>

                    <div class="card-body d-flex justify-content-between align-items-center ">
                        <div class="d-flex align-items-center ">
                            <div class="ps-2 ">
                                <i class="bx bx-train fs-1 " style="color: rgb(228, 58, 25);"></i>
                            </div>
                            <div class="px-3 text-center ">
                                <p class="mt-2 text-center pt-3 fs-5">Atlas</p>
                                <p class="text-center fw-light ">Capacité</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="px-4 text-center ">
                                <form method="post" name="reservation" action="">
                                <button id="btnReserv" type="submit" class="btn btn-dark px-3">Imprimer</button>
                                </form>
                            </div>
                            <div>
                              <a href="#"> <i class='bx bx-left-arrow-alt fs-1' style="color: rgb(228, 58, 25);"></i></a> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
    include "./footer.php";
    ?>
</body>
</html>