<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel-rooms</title>
    <?php include('inc/link.php'); ?>
    <style>
        .filter-section {
            background-color: #f8f9fa; 
            padding: 1rem;
            border-radius: 0.5rem;
            margin-bottom: 1rem;
        }
        .filter-section h5 {
            font-size: 20px; 
        }
        .filter-section .form-check-label {
            margin-left: 0.5rem;
        }
        .card {
            width: 100%;
        }
    </style>
</head>
<body class="bg-white">
    <?php require('inc/header.php'); ?>

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">OUR ROOMS</h2>
        <div class="h-line bg-dark"></div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
                    <div class="container-fluid flex-lg-column align-items-stretch">
                        <h4 class="mt-2">FILTER</h4>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#filterdropdown" aria-controls="filterdropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse flex-column mt-2" id="filterdropdown">
                            <div class="filter-section">
                                <h5 class="mb-3">CHECK AVAILABILITY</h5>
                                <label class="form-label">Check-in</label>
                                <input type="date" class="form-control shadow-none mb-3">
                                <label class="form-label">Check-out</label>
                                <input type="date" class="form-control shadow-none">
                            </div>
                            <div class="filter-section">
                                <h5 class="mb-3">GUEST</h5>
                                <div class="d-flex">
                                    <div class="me-3">
                                        <label class="form-label">Adult</label>
                                        <input type="number" class="form-control shadow-none">
                                    </div>
                                    <div>
                                        <label class="form-label">Children</label>
                                        <input type="number" class="form-control shadow-none">
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </nav>
            </div>
            <div class="col-lg-9">
                <div class="card mb-4">
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-5">
                            <img src="image\carosel\1.jpg" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-5">
                        <h5 clas="mb-1">simple room</h5>
                        <div class="feature mb-4">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                2 rooms
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                1 bathroom
                             </span>
                             <span class="badge rounded-pill bg-light text-dark text-wrap">
                                1 Balcony
                             </span>
                             <span class="badge rounded-pill bg-light text-dark text-wrap">
                               3 sofa 
                             </span>
    
                    </div>
                    <div class="facilities mb-4">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Televison
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Wifi
                             </span>
                             <span class="badge rounded-pill bg-light text-dark text-wrap">
                                AC
                             </span>
                             <span class="badge rounded-pill bg-light text-dark text-wrap">
                               Room hetaer
                             </span>
                    </div>
                    <div class="Guest mb-4">
                            <h6 class="mb-1">People</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                2 adult 
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                1 childeren
                             </span>
    
                    </div>
                        </div>
                        <div class="col-md-2">
                            <h6 class="mb-4">$200 per night</h6>
                            <a class="btn btn-primary" href="#" role="button">Book now</a>
                        </div>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-5">
                            <img src="image\carosel\1.jpg" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-5">
                        <h5 clas="mb-1">simple room</h5>
                        <div class="feature mb-4">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                2 rooms
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                1 bathroom
                             </span>
                             <span class="badge rounded-pill bg-light text-dark text-wrap">
                                1 Balcony
                             </span>
                             <span class="badge rounded-pill bg-light text-dark text-wrap">
                               3 sofa 
                             </span>
    
                    </div>
                    <div class="facilities mb-4">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Televison
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Wifi
                             </span>
                             <span class="badge rounded-pill bg-light text-dark text-wrap">
                                AC
                             </span>
                             <span class="badge rounded-pill bg-light text-dark text-wrap">
                               Room hetaer
                             </span>
                    </div>
                    <div class="Guest mb-4">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                2 adult 
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                1 childeren
                             </span>
    
                    </div>
                        </div>
                        <div class="col-md-2">
                            <h6 class="mb-4">$200 per night</h6>
                            <a class="btn btn-primary" href="#" role="button">Book now</a>
                        </div>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-5">
                            <img src="image\carosel\1.jpg" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-5">
                        <h5 clas="mb-1">simple room</h5>
                        <div class="feature mb-4">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                2 rooms
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                1 bathroom
                             </span>
                             <span class="badge rounded-pill bg-light text-dark text-wrap">
                                1 Balcony
                             </span>
                             <span class="badge rounded-pill bg-light text-dark text-wrap">
                               3 sofa 
                             </span>
    
                    </div>
                    <div class="facilities mb-4">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Televison
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Wifi
                             </span>
                             <span class="badge rounded-pill bg-light text-dark text-wrap">
                                AC
                             </span>
                             <span class="badge rounded-pill bg-light text-dark text-wrap">
                               Room hetaer
                             </span>
                    </div>
                    <div class="Guest mb-4">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                2 adult 
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                1 childeren
                             </span>
    
                    </div>
                        </div>
                        <div class="col-md-2">
                            <h6 class="mb-4">$200 per night</h6>
                            <a class="btn btn-primary" href="#" role="button">Book now</a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

    <?php require('inc/footer1.php'); ?>
</body>
</html>