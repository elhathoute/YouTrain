<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Résultats de votre recherche disponibiltés des Trains</title>
<body>
<nav class="navbar p-1 sticky-top" style="background-color:#152242;" id="navbarst">
        <div class="container-fluid">
            <div class="d-flex justify-content-between w-100 flex-wrap">
                <div class="d-flex justify-content-center">
                    <a class="navbar-brand text-white" id="logo" href="#" style="margin-left: 30px;"><span class="fw-bold fs-4">Your</span> <span class="fs-5">Train</span> <span class="fs-4">™</span></a>
                </div>

                <ul class="navbar-nav d-flex flex-row justify-content-evenly me-5 mt-2">
                    <?php 
                    if(isset($_SESSION['user'])){
                   echo ' <li class=" nav-item dropdown  pe-2">
                        <a class="nav-link dropdown-toggle d-flex align-items-center  p-0 mb-1 text-white" id="profiletoggler" onclick="showprofile()">
                        <div class="card-img-top rounded-circle  me-3" style="min-height: 40px;max-height: 40px;min-width: 40px;max-width: 40px;background-image:url(https://picsum.photos/200);background-position: center;background-repeat: no-repeat;background-size: cover;"></div>
                        </a>
                        <ul class="bg-white overflow-hidden position-absolute list-group profile" id="profile">
                        <form method="post" action="">
                            <li><button type="submit" name="profile" class="dropdown-item mt-2">Mon Profil</button></li>
                            <li><button type="submit" name="reservations" class="dropdown-item mt-2">Mes réservations</button></li>
                            <li><button type="submit" name="logout" class="dropdown-item mt-2">Se déconnecter</button></li>
                        </form>
                        </ul>
                    </li>';
                }else{
                echo '<button type="submit" class="btn btn-outline-primary shadow-none rounded-pill px-4" onclick="showsignin()">Signin</button>
                <div class="bg-white overflow-hidden position-absolute list-group signinform p-3" style="border-radius: 50px;" id="signinform">
                <form action="script.php" id="formbody" class="mb-2" method="post">
        <div class="form-outline mb-4">
            <input type="email" id="loginName" name="loginemail1" class="rounded-pill w-100" placeholder=" " required oninvalid="setCustomValidity("Please Entre A Valid Email");this.style.border = "red solid 2px";this.nextElementSibling.style.color = "red"" oninput="setCustomValidity("");this.style.border = "#009EFF solid 2px";this.nextElementSibling.style.color = "#0008C1""/>
            <label class="form-label" for="loginName" id="NameLabel">Email</label>
        </div>
        <div class="form-outline">
            <input type="password" id="loginPassword" name="loginpass1" class="rounded-pill w-100" placeholder=" " required onkeyup="counter()" oninvalid="setCustomValidity("Please Entre Password");this.style.border = "red solid 2px";this.nextElementSibling.style.color = "red"" oninput="setCustomValidity("");this.style.border = "#009EFF solid 2px";this.nextElementSibling.style.color = "#0008C1""/>
            <label class="form-label" for="loginPassword" id="PasswordLabel">Password</label>
            <span class="input-group-append" id="icon1">
                <i class="fa-regular fa-eye p-2" style="color: #009EFF;" onclick="displayPassword()"></i>
            </span>
            <span class="input-group-append" id="icon2">
                <i class="fa-regular fa-eye-slash p-2" style="color: #009EFF;" onclick="hidePassword()"></i>
            </span>
          </div>
              <!-- Checkbox -->
              <div class="my-3 d-flex justify-content-between">
                <div class="form-check form-switch ms-4">
                <input id="flexSwitchCheckDefault" class="form-check-input" type="checkbox" name="RMcheckbox1"/>
                <label class="form-check-label text-dark" for="loginCheck">Remember me</label>
                </div>
              </div>
        <button type="submit" id="signin" name="signin1" style="background-color: #009EFF;" class="btn w-100 rounded-pill text-white">Sign in</button>
        <div class="pt-3 d-flex align-items-center justify-content-center">
            <a href="signin.php" >not yet registred</a>
        </div>
        
      </form>
                </div>';
                
                }
                ?>
            </ul>
            </div>
    </nav>
    </body>
<!-- JavaScript Bundle with Popper -->

</html>