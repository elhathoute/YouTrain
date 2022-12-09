<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paramètres du Profil</title>
</head>
<body>
    <?php
    include("./navbar.php");
    ?>
    <section>
    <div class="container pt-5">
        <div class="d-flex justify-content-between pt-3">
            <div>
               <h3 class="fw-semibold" style="">Mon profil</h3> 
            </div>
            <div>
                <button type="button" class="btn btn-outline-danger rounded-4"> <span class="fw-bold" style=" font-size: 14px;">Se déconnecter</span> </button>
            </div>
        </div>
        <hr class="my-4">
        <div class="d-flex justify-content-between align-items-center pt-3">
            <div class="d-flex align-items-center">
                <img class="me-2" src="../images/pic.png" alt="" style="width: 10% ;">
                <div>
                    <p class="fw-semibold ms-3 pt-3" style=" font-size: 20px;"> M. NOM Prènom</p>
                </div>
            </div>
            <div class="">
                <button type="button" class="btn btn-outline-dark rounded-4"><span class="fw-normal" style=" font-size: 14px;">Modifier mon profil</span></button>
            </div>
        </div>
        <hr class="my-4">
    <div class="row ">
        <div class="col-md-6">
            <div class="text-center my-4">
                <h4>Mes informations personnelles</h4>
            </div>
            
            <form action="" method="post" class="bg-white mx-1 px-3 py-3" style="border-radius: 10px 50px;">
                <div class="mt-2">
                    <p class="fw-normal text-dark fw-semibold">Ma civilité</p>
                </div>
                <div class="form-check form-check-inline">   
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                    <label class="form-check-label" for="inlineRadio1">Monsieur</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                    <label class="form-check-label" for="inlineRadio2">Madame</label>
                </div>
                <div class="row g-3">
                    <div class="col-md-6 mt-5">
                        <label for="nom" class="form-label fw-semibold">Mon Nom</label>
                        <input type="text" class="form-control" id="nom">
                    </div>
                    <div class="col-md-6 mt-5">
                        <label for="prenom" class="form-label fw-semibold">Mon Prènom</label>
                        <input type="text" class="form-control" id="prenom">
                    </div>
                    <div class="col-md-6 mt-5">
                        <label for="date" class="form-label fw-semibold">Date de naissance</label>
                        <input type="date" class="form-control" id="date">
                    </div>
                    <div class="col-md-6 mt-5">
                        <label for="telephone" class="form-label fw-semibold">Mon téléphone</label>
                        <input type="text" class="form-control" id="telephone">
                    </div>
                    <div class="col-md-12 mt-5">
                        <label for="Address" class="form-label fw-semibold">Mon adresse</label>
                        <input type="text" class="form-control" id="Address">
                    </div>
                    <div class="col-md-12 mt-5">
                        <label for="inputAddress2" class="form-label fw-semibold">Ma ville</label>
                        <input type="text" class="form-control" id="inputAddress2" pl>
                    </div>
                    <div class="col-md-12 mt-5">
                        <label for="inputCity" class="form-label fw-semibold">Mon pays</label>
                        <input type="text" class="form-control" id="inputCity">
                    </div>
                    <div class="col-md-12 mt-5 mb-4">
                        <label for="inputCity" class="form-label fw-semibold">Ma Profession</label>
                        <input type="text" class="form-control" id="inputCity">
                    </div>
            </form>
        </div>        
    </div>
        <div class="col-md-6">
            <div class="text-center my-4">
                <h4>Mes informations de connexion</h4>
            </div>
            <form action="" method="post" class="bg-white mx-1 px-3 py-3" style="border-radius: 10px 50px;">
                <div class="col-md-12 mt-2">
                    <label for="identifiant" class="form-label fw-semibold">Mon Identifiant Client</label>
                    <input type="text" class="form-control" id="identifiant">
                </div>
                <div class="col-md-12 mt-5">
                    <label for="email" class="form-label fw-semibold">Mon e-mail</label>
                    <input type="email" class="form-control" id="email">
                </div>
                <div class="col-md-12 mt-5">
                    <label for="email" class="form-label fw-semibold">Ancien Mot de passe</label>
                    <input type="email" class="form-control" id="email">
                </div>
                <div class="col-md-12 mt-5">
                    <label for="email" class="form-label fw-semibold">Nouveau mot de passe</label>
                    <input type="email" class="form-control" id="email">
                </div>
                <div class="col-md-12 mt-5">
                    <label for="email" class="form-label fw-semibold">Confirmer le mot de passe</label>
                    <input type="email" class="form-control" id="email">
                </div>
                <div class="col-md-12 mt-5 text-center">
                    <button type="button" class="btn btn-outline-dark px-4">Je change mon Mot de passe</button>
                </div>
                <div class="col-md-12 mt-3 text-center">
                    <button type="button" class="btn btn-outline-secondary px-5 mb-2 border-0">J'annule</button>
                </div>
            </form>
        </div>
        <hr class="my-4">
        <div class="text-end py-3">
            <button type="button" class="btn btn-outline-success w-15 ">Enregistrer</button>
        </div>
    </div>
    </section>
    <?php
    include("./footer.php");
    ?>
</body>
</html>