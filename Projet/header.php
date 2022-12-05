<?php





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="headerstyle.css">
    <title>Document</title>
</head>
<body style="background-color:#152242;">
<nav class="navbar navbar-expand-lg navbar-light bg-light d-flex align-items-center">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">YouTrain</a>
    <button class="navbar-toggler" type="button" style="color: #0008C1;" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Reviews</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Search</a>
        </li>
      </ul>
      <span class="navbar-text p-0">
        <a class="btn btn-primary text-white rounded-pill px-3" href="signin.php">login or signin</a>
      </span>
    </div>
  </div>
</nav>

<!-- hero section   -->

<div class="d-flex flex-column align-items-center" >
<div class="mt-5 mb-5">
<h1 class="text-white " style="font-size: 45px;">Voyager En Toute</h1>
<div class="anima">Sécurité</div>
<div class="anima">Rapidité</div>
<div class="anima">Confort</div>
</div>

<!-- reviews -->

<div class="position-relative w-100 mt-5" >
<div class="container overflow-hidden" >
  <div id="translate" class="d-flex justify-content-start" style="transition-duration: 3s;">
  <div class="col-lg-4 col-md-6 col-12 p-2">
<div class="card">
    <div class="card-body">
      <div class="w-100 d-flex justify-content-center">
    <div class="card-img-top rounded-circle mb-3" style="min-height: 80px;max-height: 80px;min-width: 80px;max-width: 80px;background-image:url(https://picsum.photos/200);background-position: center;background-repeat: no-repeat;background-size: cover;"></div></div>
      <h4 class="card-title d-flex justify-content-center">John Doe</h4>
      <div class="d-flex justify-content-center">
      <svg style="display:none;">
        <defs>
          <symbol id="fivestars" >
            <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279-7.416-3.967-7.417 3.967 1.481-8.279-6.064-5.828 8.332-1.151z M0 0 h24 v24 h-24 v-24" fill="white" fill-rule="evenodd"/>
            <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279-7.416-3.967-7.417 3.967 1.481-8.279-6.064-5.828 8.332-1.151z M0 0 h24 v24 h-24 v-24" fill="white" fill-rule="evenodd" transform="translate(24)"/>
            <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279-7.416-3.967-7.417 3.967 1.481-8.279-6.064-5.828 8.332-1.151z M0 0 h24 v24 h-24 v-24" fill="white" fill-rule="evenodd" transform="translate(48)"/>
            <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279-7.416-3.967-7.417 3.967 1.481-8.279-6.064-5.828 8.332-1.151z M0 0 h24 v24 h-24 v-24" fill="white" fill-rule="evenodd" transform="translate(72)"/>
            <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279-7.416-3.967-7.417 3.967 1.481-8.279-6.064-5.828 8.332-1.151z M0 0 h24 v24 h-24 v-24" fill="white" fill-rule="evenodd"  transform="translate(96)"/>
          </symbol>
        </defs>
      </svg>
      <div class="rating">
        <progress class="rating-bg" value="3" max="5"></progress>
        <svg><use xlink:href="#fivestars"/></svg>
      </div>
    </div>
      <p class="card-text d-flex justify-content-center">Some example text some example text. John Doe is an archexample text. John Dogineeexample text. John Doe is an architect and engineeitect and engineer</p>
    </div>
  </div>
    </div>
    <div class="col-lg-4 col-md-6 col-12 p-2">
<div class="card">
    <div class="card-body">
      <div class="w-100 d-flex justify-content-center">
    <div class="card-img-top rounded-circle mb-3" style="min-height: 80px;max-height: 80px;min-width: 80px;max-width: 80px;background-image:url(https://picsum.photos/200);background-position: center;background-repeat: no-repeat;background-size: cover;"></div></div>
      <h4 class="card-title d-flex justify-content-center">John Doe</h4>
      <div class="d-flex justify-content-center">
      <svg style="display:none;">
        <defs>
          <symbol id="fivestars" >
            <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279-7.416-3.967-7.417 3.967 1.481-8.279-6.064-5.828 8.332-1.151z M0 0 h24 v24 h-24 v-24" fill="white" fill-rule="evenodd"/>
            <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279-7.416-3.967-7.417 3.967 1.481-8.279-6.064-5.828 8.332-1.151z M0 0 h24 v24 h-24 v-24" fill="white" fill-rule="evenodd" transform="translate(24)"/>
            <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279-7.416-3.967-7.417 3.967 1.481-8.279-6.064-5.828 8.332-1.151z M0 0 h24 v24 h-24 v-24" fill="white" fill-rule="evenodd" transform="translate(48)"/>
            <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279-7.416-3.967-7.417 3.967 1.481-8.279-6.064-5.828 8.332-1.151z M0 0 h24 v24 h-24 v-24" fill="white" fill-rule="evenodd" transform="translate(72)"/>
            <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279-7.416-3.967-7.417 3.967 1.481-8.279-6.064-5.828 8.332-1.151z M0 0 h24 v24 h-24 v-24" fill="white" fill-rule="evenodd"  transform="translate(96)"/>
          </symbol>
        </defs>
      </svg>
      <div class="rating">
        <progress class="rating-bg" value="3" max="5"></progress>
        <svg><use xlink:href="#fivestars"/></svg>
      </div>
    </div>
      <p class="card-text d-flex justify-content-center">Some example text some example text. John Doe is an archexample text. John Dogineeexample text. John Doe is an architect and engineeitect and engineer</p>
    </div>
  </div>
    </div>
    <div class="col-lg-4 col-md-6 col-12 p-2">
<div class="card">
    <div class="card-body">
      <div class="w-100 d-flex justify-content-center">
    <div class="card-img-top rounded-circle mb-3" style="min-height: 80px;max-height: 80px;min-width: 80px;max-width: 80px;background-image:url(https://picsum.photos/200);background-position: center;background-repeat: no-repeat;background-size: cover;"></div></div>
      <h4 class="card-title d-flex justify-content-center">John Doe</h4>
      <div class="d-flex justify-content-center">
      <svg style="display:none;">
        <defs>
          <symbol id="fivestars" >
            <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279-7.416-3.967-7.417 3.967 1.481-8.279-6.064-5.828 8.332-1.151z M0 0 h24 v24 h-24 v-24" fill="white" fill-rule="evenodd"/>
            <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279-7.416-3.967-7.417 3.967 1.481-8.279-6.064-5.828 8.332-1.151z M0 0 h24 v24 h-24 v-24" fill="white" fill-rule="evenodd" transform="translate(24)"/>
            <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279-7.416-3.967-7.417 3.967 1.481-8.279-6.064-5.828 8.332-1.151z M0 0 h24 v24 h-24 v-24" fill="white" fill-rule="evenodd" transform="translate(48)"/>
            <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279-7.416-3.967-7.417 3.967 1.481-8.279-6.064-5.828 8.332-1.151z M0 0 h24 v24 h-24 v-24" fill="white" fill-rule="evenodd" transform="translate(72)"/>
            <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279-7.416-3.967-7.417 3.967 1.481-8.279-6.064-5.828 8.332-1.151z M0 0 h24 v24 h-24 v-24" fill="white" fill-rule="evenodd"  transform="translate(96)"/>
          </symbol>
        </defs>
      </svg>
      <div class="rating">
        <progress class="rating-bg" value="3" max="5"></progress>
        <svg><use xlink:href="#fivestars"/></svg>
      </div>
    </div>
      <p class="card-text d-flex justify-content-center">Some example text some example text. John Doe is an archexample text. John Dogineeexample text. John Doe is an architect and engineeitect and engineer</p>
    </div>
  </div>
    </div>
    <div class="col-lg-4 col-md-6 col-12 p-2">
<div class="card">
    <div class="card-body">
      <div class="w-100 d-flex justify-content-center">
    <div class="card-img-top rounded-circle mb-3" style="min-height: 80px;max-height: 80px;min-width: 80px;max-width: 80px;background-image:url(https://picsum.photos/200);background-position: center;background-repeat: no-repeat;background-size: cover;"></div></div>
      <h4 class="card-title d-flex justify-content-center">John Doe</h4>
      <div class="d-flex justify-content-center">
      <svg style="display:none;">
        <defs>
          <symbol id="fivestars" >
            <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279-7.416-3.967-7.417 3.967 1.481-8.279-6.064-5.828 8.332-1.151z M0 0 h24 v24 h-24 v-24" fill="white" fill-rule="evenodd"/>
            <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279-7.416-3.967-7.417 3.967 1.481-8.279-6.064-5.828 8.332-1.151z M0 0 h24 v24 h-24 v-24" fill="white" fill-rule="evenodd" transform="translate(24)"/>
            <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279-7.416-3.967-7.417 3.967 1.481-8.279-6.064-5.828 8.332-1.151z M0 0 h24 v24 h-24 v-24" fill="white" fill-rule="evenodd" transform="translate(48)"/>
            <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279-7.416-3.967-7.417 3.967 1.481-8.279-6.064-5.828 8.332-1.151z M0 0 h24 v24 h-24 v-24" fill="white" fill-rule="evenodd" transform="translate(72)"/>
            <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279-7.416-3.967-7.417 3.967 1.481-8.279-6.064-5.828 8.332-1.151z M0 0 h24 v24 h-24 v-24" fill="white" fill-rule="evenodd"  transform="translate(96)"/>
          </symbol>
        </defs>
      </svg>
      <div class="rating">
        <progress class="rating-bg" value="3" max="5"></progress>
        <svg><use xlink:href="#fivestars"/></svg>
      </div>
    </div>
      <p class="card-text d-flex justify-content-center">Some example text some example text. John Doe is an archexample text. John Dogineeexample text. John Doe is an architect and engineeitect and engineer</p>
    </div>
  </div>
    </div>
  </div>
  
  </div>
    <button class="btn fs-1" id="pre" onclick="translatepre()">
    <i class="fa-solid fa-angle-left"></i>
    </button>
    <button class="btn fs-1" id="next" onclick="translatenext()">
    <i class="fa-solid fa-angle-right"></i>
    </button>
    
    </div>
  
    <form action="" method="post" class="w-100 row">
    <div class="mb-3 p-2 col-6 d-flex flex-column align-items-center">
  <label for="exampleFormControlInput1" class="form-label text-white">Gare De Départ</label>
  <input type="text" class="form-control w-75 rounded-pill" id="gared">
</div>
<div class="mb-3 p-2 col-6 d-flex flex-column align-items-center">
  <label for="" class="form-label text-white">Date De Départ</label>
  <input type="datetime-local" class="form-control w-75 rounded-pill" id="tempsd">
</div>
<div class="col-6 d-flex flex-column align-items-center">
<button class="btn shadow-none bg-transparent" type="button" onclick="switchgare()">
  <img src="asset/arrow.svg" style="height: 50px;width:auto">
</button>
</div>
<div class="col-6 d-flex flex-column align-items-center">
<button class="btn shadow-none bg-transparent" type="button" onclick="switchtime()">
  <img src="asset/arrow.svg" style="height: 50px;width:auto">
</button></div>
<div class="mb-3 p-2 col-6 d-flex flex-column align-items-center">
  <label for="" class="form-label text-white">Date d'arrivé</label>
  <input type="text" class="form-control w-75 rounded-pill" id="garea">
</div>
<div class="mb-3 p-2 col-6 d-flex flex-column align-items-center">
  <label for="" class="form-label text-white ">Temps d'arrivé</label>
  <input type="datetime-local" class="form-control w-75 rounded-pill" id="tempsa">
</div>
<div class="mb-3  d-flex flex-column align-items-center">
<button type="submit" class="w-75 rounded-pill btn btn-primary">Search</button>
</div>
    </form>
</div>
</body>
</html>
<script src="https://kit.fontawesome.com/16f6b89e3c.js" crossorigin="anonymous"></script>
<Script>
    anima(0);
    function anima($j){
        if($j==3){
            $j=0;
        }
        var elements = document.getElementsByClassName("anima");
        for(let i=0;i<elements.length;i++){
            elements[i].classList.remove("active");
        }
        elements[$j].classList.add("active");
        $j++;
        setTimeout(() => {
            anima($j);
                }, 4000); 

    }
    var minise = 3;
var percent = 34;
window.onresize = function(){
  let size = window.innerWidth;
  var minise = 3;
var percent = 34;
  if(size >= 766 && size < 990){
    minise = 2;
    percent = 50;
  }
  else if(size < 766){
    minise = 1;
    percent = 100;
  }
console.log(size);
console.log(minise,percent);
}
window.onload = function(){
  let size = window.innerWidth;
  
  if(size >= 766 && size < 990){
    minise = 2;
    percent = 50;
  }
  else if(size < 766){
    minise = 1;
    percent = 100;
  }
console.log(size);
console.log(minise,percent);
}
    var ratings = document.getElementsByClassName('rating-bg').length;
    console.log(ratings); 
    var translatecount = 0;
    function translatepre(){
      if(translatecount > 0){
      translatecount --;}
      console.log(minise,percent);
      document.getElementById('translate').style.transform = "translate(calc(-"+percent+"% * "+Math.abs(translatecount)+"),0px)";
      
    }
    function translatenext(){
      if(translatecount < (ratings - minise)){
      translatecount++;}
      document.getElementById('translate').style.transform = "translate(calc(-"+percent+"% * "+Math.abs(translatecount)+"),0px)";
      
    }
    function switchgare(){
      let text = document.getElementById('gared').value;
      document.getElementById('gared').value = document.getElementById('garea').value;
      document.getElementById('garea').value = text;

    }
    function switchtime(){
      let time = document.getElementById('tempsd').value;
      document.getElementById('tempsd').value = document.getElementById('tempsa').value;
      document.getElementById('tempsa').value = time;
    }
</Script>