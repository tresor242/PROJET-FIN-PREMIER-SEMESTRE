<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>accueil</title>
    
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ROYAL CARS - Car Rental HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap5/css/bootstrap.css">

    <!-- Favicons -->
    <link href="images/logo.png" rel="icon">
    <link href="images/logo.png" rel="logo">

    <style>
      body {
        font-family: Arial, sans-serif;
        background: url(../images/clientbg.jpg);
        background-repeat: no-repeat;
        background-size: 55%;
        background-position: center right;
      }
      h1 {
        font-size: 36px;
        font-weight: bold;
        text-align: center;
      }
      p {
        font-size: 18px;
        text-align: center;
      }
      label {
        font-size: 16px;
        font-weight: bold;
        display: block;
        margin-bottom: 10px;
      }
      input[type="text"] {
        width: 100%;
        padding: 10px;
        border: 2px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        margin-bottom: 20px;
      }
      button {
        background-color: #e8ce07;
        border: 2px solid #e8ce07;
        color: white;
        padding: 12px 24px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        border-radius: 4px;
        cursor: pointer;
      }
      #map {
        height: 400px;
        width: 100%;
        margin-bottom: 20px;
      }
      a{color:#e8ce07;}
      .button-detail {
        background-color: #007bff; /* Couleur de fond du bouton */
        border: none; /* Supprimer la bordure */
        color: white; /* Couleur du texte */
        padding: 10px 20px; /* Ajouter de la marge intérieure */
        font-size: 22px; /* Taille de la police */
        border-radius: 5px; /* Ajouter des coins arrondis */
        display: inline-flex; /* Afficher le bouton en tant que bloc flex */
        align-items: center; /* Aligner les éléments sur l'axe vertical */
      }

      .button-icon {
        width: 20px; /* Largeur de l'icône */
        height: 20px; /* Hauteur de l'icône */
        margin-right: 10px; /* Ajouter de la marge à droite */
      }
      .link-bottom{
        position: fixed; /* Positionner le lien de manière fixe */
        bottom: 20px; /* Placer le lien à 20 pixels du bas de la page */
        right: 20px; /* Placer le lien à 20 pixels de la droite */
        font-size: 16px; /* Taille de la police */
        text-decoration: none; /* Supprimer la décoration de lien par défaut */
        cursor: pointer; /* Changer le curseur en pointeur au survol */

      }
    </style>
</head>

<body>

    
    <!-- Topbar Start -->
    <div class="container-fluid bg-dark py-3 px-lg-5 d-none d-lg-block">
        <div class="row">
            <div class="col-md-6 text-center text-lg-left mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    <a class="text-body pr-3" href=""><i class="fa fa-phone-alt mr-2"></i>+012 345 6789</a>
                    <span class="text-body">|</span>
                    <a class="text-body px-3" href=""><i class="fa fa-envelope mr-2"></i>info@example.com</a>
                </div>
            </div>
            <div class="col-md-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-body px-3" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-body px-3" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-body px-3" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-body px-3" href="">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-body pl-3" href="">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="position-relative px-lg-5" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-secondary navbar-dark py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="" class="navbar-brand">
                    <h1 class="text-uppercase text-primary mb-1">Royal Cars</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="index.html" class="nav-item nav-link active">Home</a>
                        <a href="about.html" class="nav-item nav-link">About</a>
                        <a href="service.html" class="nav-item nav-link">Service</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="team.html" class="dropdown-item">The Team</a>
                                <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">S'inscrire</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="car.html" class="dropdown-item">En tant que Chauffeur</a>
                                <a href="/register" class="dropdown-item">En tant que Client</a>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->
    <div class="card col-md-5">
        <div class="card-body">
            <h1>Bienvenue sur <a href="/welcome">Taxibokko</a> </h1>
            <p>Utilisez la géolocalisation pour trouver les chauffeurs disponibles près de vous :</p>
            <button onclick="getLocation()">Trouver ma position</button><br><br>
            <div id="map"></div>
            <form action="/new_trajet/traitement" method="POST">
            @csrf   
                <div class="form-group">
                  <label for="depart">Départ</label>
                  <select class="form-control" id="mySelect" name="departure">
                      <option selected>Ajouter une autre adresse de départ</option>
                      @foreach(DB::table('destinations')->pluck('depart')->unique() as $departement)
                      <option value="{{ $departement }}">{{ $departement }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="arrivee">Arrivée</label>
                  <select class="form-control" id="depart" name="arrival">
                    <option selected>Ajouter votre adresse d'arrivée</option>
                    @foreach(DB::table('destinations')->pluck('arrivee')->unique() as $departement)
                      <option value="{{ $departement }}">{{ $departement }}</option>
                    @endforeach
                  </select>
                  <br>
                </div>

            </form>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                    <div class="offcanvas-header">
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close">Reservez</button>
                    </div>
                    <div class="offcanvas-body">
                        <br>
                        <div class="dropdown mt-3">
                            <div class="md col-9">
                                <!--faire une boucle foreach pour lister les details-->
                                <form action="" method="POST">
                                    @csrf
                                    <button type="submit" class="link-bottom btn btn-danger">Se deconnecter</button>
                                </form>
                            </div>
                        </div>
                    </div>

            <script>
              function getLocation() {
                  if (navigator.geolocation) {
                  navigator.geolocation.getCurrentPosition(showPosition);
                  } else {
                  alert("La géolocalisation n'est pas prise en charge par ce navigateur.");
                  }
              }

              function showPosition(position) {
                  const lat = position.coords.latitude;
                  const lng = position.coords.longitude;

                  const map = new google.maps.Map(document.getElementById("map"), {
                  center: { lat: lat, lng: lng },
                  zoom: 15,
                  });

                  const marker = new google.maps.Marker({
                  position: { lat: lat, lng: lng },
                  map: map,
                  title: "Votre position",
                  });
              }
            </script>

            <script
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAyyjAmNe-mfygOKajqPEINw1gTpR-uwNQ&callback=showPosition"
            async
            defer
            ></script>
        </div>
        <div class="offcanvas-body">
            <br>
            <div class="dropdown mt-3">
                <div class="md col-9">
                    <!--faire une boucle foreach pour lister les details-->
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="link-bottom btn btn-danger">Déconnexion</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<script src="css/bootstrap5/js/bootstrap.js"></script>

<script>
  // Obtenez la géolocalisation de l'utilisateur
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
      var latitude = position.coords.latitude;
      var longitude = position.coords.longitude;

      // Utilisez l'API de géocodage de Google Maps pour obtenir l'adresse correspondant aux coordonnées géographiques
      var geocoder = new google.maps.Geocoder();
      var latlng = new google.maps.LatLng(latitude, longitude);
      geocoder.geocode({'latLng': latlng}, function(results, status) {
        if (status == google.maps.GeocoderStatus.OK) {
          if (results[0]) {
            // Créez un élément d'option pour l'adresse et ajoutez-le à l'élément de sélection
            var address = results[0].formatted_address;
            var option = document.createElement("option");
            option.text = address;
            var select = document.getElementById("mySelect");
            //select.add(option);
            select.insertBefore(option, select.firstChild);
          } else {
            alert("Aucun résultat trouvé");
          }
        } else {
          alert("Erreur: " + status);
        }
      });
    }, function() {
      alert("La géolocalisation n'est pas prise en charge par votre navigateur");
    });
  } else {
    alert("La géolocalisation n'est pas prise en charge par votre navigateur");
  }
</script>

