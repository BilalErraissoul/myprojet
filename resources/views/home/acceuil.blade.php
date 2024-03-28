<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Slider</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <style>
    /* Add your custom styles here */
    .slider-container {
      margin-top: 20px;
    }
    .slider-item {
      background-color: #f0f0f0; /* Background color */
      border-radius: 10px;
      padding: 20px;
      margin-bottom: 20px; /* Add margin to separate items */
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Add shadow effect */
       /* Add your custom styles here */
    .slider-container {
      margin-top: 20px;
      border: 2px solid #007bff; /* Add border to the container */
      border-radius: 10px;
      padding: 20px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Add shadow effect */
    }
    .slider-item {
      background-color: #f0f0f0; /* Background color */
      border-radius: 10px;
      padding: 20px;
      margin-bottom: 20px; /* Add margin to separate items */
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Add shadow effect */
    }
    .slider-content {
      margin-top: 20px;
    }
  </style>
</head>
<body>

<!-- Header -->
<header>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="#">Accueil <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Formation</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Département</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Administration</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Recherche</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>

<!-- Slider -->
<div class="container" border=1 style="padding:90px;" >
  <div class="row slider-container">
    <div class="col-lg-12">
      <div class="slider-item">
      <h4><a href="home">Event</a> </h4>
        <!-- Additional content aligned to the right -->
        <div class="slider-content">
         
        </div>
      </div>
    </div>
    <div class="col-lg-12">
      <div class="slider-item">
      <h4><a href="Annonce">Annonces</a> </h4>
        <!-- Additional content aligned to the right -->
        <div class="slider-content">
          
        </div>
      </div>
    </div>
    <div class="col-lg-12">
      <div class="slider-item">
      <h4><a href="Article">Article</a> </h4>
        <!-- Additional content aligned to the right -->
        <div class="slider-content">
      
        </div>
      </div>
    </div>
    <div class="col-lg-12">
      <div class="slider-item">
        <h4><a href="Departement">Departement</a> </h4>
        <!-- Additional content aligned to the right -->
        <div class="slider-content">
       
        </div>
      </div>
    </div>
    <!-- Add more slider items as needed -->
  </div>
</div>

<!-- Bootstrap JS (jQuery required) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>


</body>
</html>
