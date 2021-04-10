<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Home</title>
  </head>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/album/">
    
    <!-- Bootstrap core CSS -->
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

        <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        img {
            width: 3cm;
            height:3cm;
        }

        .card {
            width: 4cm;
            height:5cm;
            margin-right: 100px;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
            font-size: 3.5rem;
            }
        }

        .satu {
            background-color: #BECBED;
        }
        .fas {
            color: blue;
        }
        </style>
    </head>

    <main class="bg-light">
        <div class="container" style="margin-left: 10px;">
            <div class="row align-items-start" style="width: 120%;">
                <div class="col">
                    <div class="album py-3 bg-light" >
                        <div class="container">
                            <div class="row row-cols-1 row-cols-sm-4  g-3">
                                <div class="col">
                                    <div class="card shadow-sm">
                                        <div class="card-body">
                                            <img src="{{ asset('img/bihun.jpg') }}" alt="">
                                            <p class="card-text">Bihun Goreng</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="card shadow-sm">
                                        <div class="card-body">
                                            <img src="{{ asset('img/miegoreng.jpg') }}" alt="">
                                            <p class="card-text">Indomie Goreng</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="card shadow-sm">
                                        <div class="card-body">
                                            <img src="{{ asset('img/miekuah.jpg') }}" alt="">
                                            <p class="card-text">Indomie Kuah</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="card shadow-sm">
                                        <svg class="bd-placeholder-img card-img-top" style="font-size: 70px;" width="100%" height="133" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="105%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Mi</text></svg>
                                        <div class="card-body">
                                            <p class="card-text">Mie</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="card shadow-sm">
                                        <div class="card-body">
                                            <img src="{{ asset('img/nasi-goreng-seafood.jpg') }}" alt="" class="mr-3">
                                            <p class="card-text">Nasi Goreng Seafood</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="card shadow-sm">
                                        <div class="card-body">
                                            <img src="{{ asset('img/nasgorsimple.JPG') }}" alt="" class="mr-3">
                                            <p class="card-text">Nasi Goreng Seafood</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="card shadow-sm">
                                        <div class="card-body">
                                            <img src="{{ asset('img/nasgortelor.jpg') }}" alt="" class="mr-3">
                                            <p class="card-text">Nasi Goreng Seafood</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="card shadow-sm">
                                        <svg class="bd-placeholder-img card-img-top" style="font-size: 70px;" width="100%" height="133" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="105%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Na</text></svg>
                                        <div class="card-body">
                                            <p class="card-text"> Nasi</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="card shadow-sm">
                                        <div class="card-body">
                                            <img src="{{ asset('img/mandi.JPG') }}" alt="" class="mr-3">
                                            <p class="card-text">Teh Manis Dingin</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="card shadow-sm">
                                        <div class="card-body">
                                            <img src="{{ asset('img/kopi.jpg') }}" alt="" class="mr-3">
                                            <p class="card-text">Kopi Hitam</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="card shadow-sm">
                                        <div class="card-body">
                                            <img src="{{ asset('img/lemontea.jpg') }}" alt="" class="mr-3">
                                            <p class="card-text">Lemon Tea</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="card shadow-sm">
                                        <svg class="bd-placeholder-img card-img-top" style="font-size: 70px;" width="100%" height="133" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="105%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Min</text></svg>
                                        <div class="card-body">
                                            <p class="card-text center">Minuman</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col mt-2 mr-4">
                    <div class="container" >
                        <div class="row">
                            <div class="col satu" >
                                <div class="container mt-2">
                                    <i class="fas fa-user-circle fa-3x ml-4" style="color: #3B6EF3"></i>
                                </div>
                            </div>
                            <div class="col-6 fw-bold fs-1" style="background-color: #D0D9F0">
                                <p class="text-center">New Customer</p> 
                            </div>
                            <div class="col satu" style="">
                                <div class="container mt-2">
                                    <i class="fas fa-list-ul fa-3x ml-4" style="color: #3B6EF3"></i>
                                </div>
                            </div>
                        </div>
                    </div>
            
                    <div class="container">
                        <div class="row">
                            <div class="col border" style="background-color: white;">
                                <div class="container mt-2" >
                                    <p class="text-center fs-5">Dine in<span><i class="fas fa-chevron-down fa-sm ml-3 "></i></span></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container mt-1">
                        <div class="row">
                            <div class="col border" style="background-color: white; height: 350px;" >
                                <div class="container mt-2">
                                    <p class="fs-5 text-end">Dine in</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container mt-1">
                        <div class="row">
                            <div class="col border" style="background-color: white;">
                                <div class="container mt-2" >
                                    <p class="text-center fs-5">Clear Sale</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container mt-1">
                        <div class="row">
                            <div class="col" style="background-color: white;">
                                <div class="btn-group w-100" style="height: 50px;" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-secondary mr-1 fs-3">Save Bill</button>
                                    <button type="button" class="btn btn-secondary fs-3">Print Bill</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container mt-1">
                        <div class="row">
                            <div class="col" style="background-color: white;">
                                <div class="d-grid gap-2" style="height: 70px;">
                                    <button class="btn btn-primary" type="button">
                                        <label for="" class="fs-2">Charge</label>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </main>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>