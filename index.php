<!DOCTYPE html>
<html lang="en">
<head>
    <title>Photo Gallery</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categories
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Nature</a></li>
            <li><a class="dropdown-item" href="#">Architecture</a></li>
            <li><a class="dropdown-item" href="#">Travel</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>

    </div>
  </div>
</nav>

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/nature/n1.jpg" class="d-block w-100" alt="Nature">
      <div class="carousel-caption d-none d-md-block">
        <h3>Nature</h3>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/architecture/a1.jpg" class="d-block w-100" alt="Architecture">
      <div class="carousel-caption d-none d-md-block">
        <h3>Architecture</h3>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/travel/t1.jpg" class="d-block w-100" alt="Travel">
      <div class="carousel-caption d-none d-md-block">
        <h3>Travel</h3>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

  <section class="my-4">
    <div class="py-4"> 
      <h2 class="text-center">Nature</h2>  
    <div>
    <div class="container-fluid">
      <div class="row">
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/nature/n1.jpg" class="img-fluid pb-4"> </img>
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/nature/n2.jpg" class="img-fluid pb-4"> </img>
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/nature/n3.jpg" class="img-fluid pb-4"> </img>
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/nature/n4.jpg" class="img-fluid pb-4"> </img>
      </div>
</div>
</div>
      
    </div>
  </section>

  <section class="my-4">
    <div class="py-4"> 
      <h2 class="text-center">Architecture</h2>  
    <div>
    <div class="container-fluid">
      <div class="row">
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/architecture/a1.jpg" class="img-fluid pb-4"> </img>
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/architecture/a2.jpg" class="img-fluid pb-4"> </img>
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/architecture/a3.jpg" class="img-fluid pb-4"> </img>
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/architecture/a4.jpg" class="img-fluid pb-4"> </img>
      </div>
</div>
</div>
      
    </div>
  </section>
  

  <section class="my-4">
    <div class="py-4"> 
      <h2 class="text-center">Travel</h2>  
    <div class="container-fluid">
      <div class="row">
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/travel/t1.jpg" class="img-fluid pb-4"> </img>
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/travel/t2.jpg" class="img-fluid pb-4"> </img>
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/travel/t3.jpg" class="img-fluid pb-4"> </img>
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/travel/t4.jpg" class="img-fluid pb-4"> </img>
      </div>
    </div>
      
    </div>
  </section>

  <section class="my-4">
    <div class="py-4"> 
      <h2 class="text-center">Contact Us</h2>  
    </div>

    <div class="w-50 m-auto">
      <form action="about.php" method="post">
        <div class = "form-group">
          <label>Name</label>
          <input type="text" name="name" class="form-control">
        </div>
        <div class = "form-group">
          <label>Email</label>
          <input type="email" name="email" class="form-control">
        </div>
        <div class = "form-group">
          <label>Number</label>
          <input type="text" name="number" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
      </form>
    </div>
  </section>

  <section class="my-4">
    <div class="py-4"> 
      <h2 class="text-center">About Us</h2>  
    </div>
    <div class="container-fluid">
      <h3 class="text-center">Michael</h3>
      <p class="text-center"><b> I am a software engineer interested in building web applications </b> </p>
  </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
  </body>
</html>