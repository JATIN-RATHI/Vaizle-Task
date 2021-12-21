<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MYwebsite</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">LUXURY RENTALS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="services.php">Services</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#1">About</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="contacts.php">Contacts</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="gallery.php">Gallery</a>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" style="margin-left:10px;" type="submit">Search</button>
            </form>
            </div>
        </div>
    </nav>
    <div id="demo" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
        <li data-target="#demo" data-slide-to="3"></li>
    </ul>
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="images/first.jpg" alt="Los Angeles" width="1100" height="500">
        <div class="carousel-caption">
            <h3>Vintage Cars</h3>
            <p>Feel the vintage!</p>
        </div>   
        </div>
        <div class="carousel-item">
        <img src="images/second.jpg" alt="Chicago" width="1100" height="500">
        <div class="carousel-caption">
            <h3>Mercedes Top class</h3>
            <p>I am gonna ride till I can't no more!</p>
        </div>   
        </div>
        <div class="carousel-item">
        <img src="images/third.jpg" alt="New York" width="1100" height="500">
        <div class="carousel-caption">
            <h3>Ford Mustang</h3>
            <p>I got hundreds of horses power!</p>
        </div>   
        </div>
        <div class="carousel-item">
        <img src="images/fourth.jpg" alt="New York" width="1100" height="500">
        <div class="carousel-caption">
            <h3>Porsche!</h3>
            <p>We love the Big Apple!</p>
        </div>   
        </div>
    </div>
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>
    </div>
    <section class="my-5" id="1">
        <div class="py-5">
            <h2 class="text-center">About Us</h2>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <img src="images/aboutimg.jpg" class="img-fluid">
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <h2 class="text-center">Rent us!</h2>
                    <p>Easy Travel is a car luxury hire agency in Delhi. We provide a wide range of vintage cars for rent in Delhi, Jaipur, Lucknow, Mussoorie, Dehradun, Gurgaon, Faridabad, Agra as well as nearby areas. Since, we are a customer driven company, as a result customer satisfaction is something we thrive on. Furthermore, hassle-free bookings are guaranteed, punctuality in service and flexibility as per customer needs. As a result, we offer the best car rental for weddings. Moreover, Easy Travel is a customer driven company. Hence, our team is committed to ensure that all our chauffeurs are experienced, professionally trained, bi-lingual, (English and Hindi) polite as well as disciplined. Furthermore, The support and love that we have received from our customers is equally important. After all, it has helped us become a pioneer in providing vintage car for hire especially for weddings. <br>Services offered include, but not limited to:<br>• Weddings<br>• Pre-wedding shoots<br>• Celebrity fleet<br>• Photo-shoot<br>• Special occasions</p>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <h3 class="p-3 bg-dark text-white text-center">Luxury Rentals</h3>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>