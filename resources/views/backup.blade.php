<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style-landing.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href='https://fonts.googleapis.com/css?family=Noto Sans' rel='stylesheet'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>

<body style="background-color: #f3f4f4 ">

    <div class="relative sm:flex sm:items-center min-h-screen bg-dots-darker bg-center dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">

        <nav class="navbar-container"
            style="position: fixed; top: 0; width: 100%; z-index: 1000; backdrop-filter: blur(0px); box-shadow: none;"
            id="navbar">
            <div class="navbar-title" style="padding: 0 15px;" id="loc-wrapper">
                <div class="loc-wrapper" style="display:flex; align-items:center; justify-content:space-between;">
                    <a href="" style="display:flex; align-items:center; justify-content:center; gap:10px;">
                        <i class="fa-solid fa-location-dot" style="color: #ffffff; font-size:26px"></i>
                        <div class="inf-loc" style="margin-top: 15px;">
                            <p style="font-size:10px; color:rgb(255, 255, 255); margin-bottom:3px">Alamat belum dipilih
                            </p>
                            <p style="font-size:10px; color:rgb(255, 255, 255);">Mulai Atur Alamat Pengiriman</p>
                        </div>
                        <i class="fa-solid fa-chevron-down" style="color: #ffffff; font-size:26px"d></i>
                    </a>

                    <a href="">
                        <i class="fa-regular fa-heart" style="color: #ff6251; font-size:26px"></i>
                    </a>
                </div>
            </div>
            <div class="navbar" style="display: flex; align-items:center; width:100%; margin:auto;">
                <form class="d-flex" style="width: 100%; border-radius: 20px; justify-content:center;">
                    <input class="form-control me-2" type="search" placeholder="Cari Sesuatu..." aria-label="Search"
                        style="border-radius: 20px; height: 30px; font-size: 12px;" id="search-Bar">
                </form>
            </div>

        </nav>



        <div class="container-all">
            <div class="carrousel-container">
                <div class="carrousel">
                    <div class="carrousel-content">
                        <div id="carouselExample" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="img/cr2.webp" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/cr3.webp" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/cr4.webp" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>



            <div class="layer-container">
                <div class="layer">
                    {{-- <div class="layer-title">
                        <h1>Jenis</h1>
                    </div>

                    <div class="line">
                        <h4>&nbsp</h4>
                    </div> --}}

                    <div class="layer-content">
                        <a class="wrapper-product" href="#">
                            <div class="product">
                                <div class="img-size">
                                    <div class="image">
                                        <img src="img/sayuran.jpg">
                                    </div>
                                </div>


                            </div>

                            <p>
                                Sayuran</p>
                        </a>

                        <a class="wrapper-product" href="#">
                            <div class="product">
                                <div class="img-size">
                                    <div class="image">
                                        <img src="img/apel.webp">
                                    </div>
                                </div>
                            </div>
                            <p>
                                Buah
                            </p>
                        </a>

                        <a class="wrapper-product" href="#">
                            <div class="product">
                                <div class="img-size">
                                    <div class="image">
                                        <img src="img/daging.jpeg">
                                    </div>
                                </div>


                            </div>

                            <p>
                                Daging
                            </p>
                        </a>

                        <a class="wrapper-product" href="#">
                            <div class="product">
                                <div class="img-size">
                                    <div class="image">
                                        <img src="img/ikan.jpg">
                                    </div>
                                </div>


                            </div>

                            <p>
                                Ikan
                            </p>
                        </a>

                        <a class="wrapper-product" href="#">
                            <div class="product">
                                <div class="img-size">
                                    <div class="image">
                                        <img src="img/raja.webp">
                                    </div>
                                </div>


                            </div>

                            <p>
                                Beras
                            </p>
                        </a>

                        <a class="wrapper-product" href="#">
                            <div class="product">
                                <div class="img-size">
                                    <div class="image">
                                        <img src="img/cocob.webp">
                                    </div>
                                </div>


                            </div>

                            <p>
                                Susu
                            </p>
                        </a>


                    </div>

                    <div class="layer-content1">

                        <a class="wrapper-product" href="#">
                            <div class="product">
                                <div class="img-size">
                                    <div class="image">
                                        <img src="img/telur.webp">
                                    </div>
                                </div>


                            </div>

                            <p>
                                Telur
                            </p>
                        </a>

                        <a class="wrapper-product" href="#">
                            <div class="product">
                                <div class="img-size">
                                    <div class="image">
                                        <img src="img/bahan-makanan.jpeg">
                                    </div>
                                </div>


                            </div>

                            <p>
                                Bahan
                            </p>
                        </a>

                        <a class="wrapper-product" href="#">
                            <div class="product">
                                <div class="img-size">
                                    <div class="image">
                                        <img src="img/instan2.jpg">
                                    </div>
                                </div>


                            </div>

                            <p>
                                Instant</p>
                        </a>

                        <a class="wrapper-product" href="#">
                            <div class="product">
                                <div class="img-size">
                                    <div class="image">
                                        <img src="img/snack.jpg">
                                    </div>
                                </div>


                            </div>

                            <p>
                                Snack
                            </p>
                        </a>

                        <a class="wrapper-product" href="#">
                            <div class="product">
                                <div class="img-size">
                                    <div class="image">
                                        <img src="img/protein.webp">
                                    </div>
                                </div>


                            </div>

                            <p>
                                Protein</p>
                        </a>

                        <a class="wrapper-product" href="#">
                            <div class="product">
                                <div class="img-size">
                                    <div class="image">
                                        <img src="img/tepung.webp">
                                    </div>
                                </div>
                            </div>
                            <p>
                                Tepung
                            </p>
                        </a>
                    </div>



                    <div class="layer-content2">
                        <a class="wrapper-product" href="#">
                            <div class="product">
                                <div class="img-size">
                                    <div class="">
                                        <img src="img/promo3.webp">
                                    </div>
                                </div>


                            </div>
                        </a>

                        <a class="wrapper-product" href="#">
                            <div class="product">
                                <div class="img-size">
                                    <div class="">
                                        <img src="img/promo1.webp">
                                    </div>
                                </div>


                            </div>
                        </a>

                        <a class="wrapper-product" href="#">
                            <div class="product">
                                <div class="img-size">
                                    <div class="">
                                        <img src="img/promo2.webp">
                                    </div>
                                </div>


                            </div>
                        </a>

                        <a class="wrapper-product" href="#">
                            <div class="product">
                                <div class="img-size">
                                    <div class="">
                                        <img src="img/cr1.webp">
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="layer-content3">
                        <a class="wrapper-product" href="#">
                            <div class="product">
                                <div class="img-size">
                                    <div class="">
                                        <img src="img/promo3.webp">
                                    </div>
                                </div>


                            </div>
                        </a>

                        <a class="wrapper-product" href="#">
                            <div class="product">
                                <div class="img-size">
                                    <div class="">
                                        <img src="img/promo1.webp">
                                    </div>
                                </div>


                            </div>
                        </a>

                        <a class="wrapper-product" href="#">
                            <div class="product">
                                <div class="img-size">
                                    <div class="">
                                        <img src="img/promo2.webp">
                                    </div>
                                </div>


                            </div>
                        </a>

                        <a class="wrapper-product" href="#">
                            <div class="product">
                                <div class="img-size">
                                    <div class="">
                                        <img src="img/cr1.webp">
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>



                </div>

            </div>

            <div class="layer-4-container">
                <div class="layer-4">
                    <div class="layer4-title">
                        <h1>Produk Pilihan</h1>
                    </div>

                    <div class="line">
                        <h4>&nbsp</h4>
                    </div>

                    <div class="layer4-content">


                        <div class="product">
                            <a href="#" style="text-decoration: none">
                                <div class="img-size">
                                    <div class="image">
                                        <img src="img/telur.webp">
                                    </div>
                                </div>
                                <div class="name-price">
                                    <h3>Telur Ayam Negeri</h3>
                                    <p>10 butir / pack</p>
                                    <h4>Rp. 12.000,-</h4>
                                    <p style="color:rgb(160, 159, 159); text-decoration:line-through; font-size:8px;">
                                        Rp.15.000,-</p>
                                </div>
                            </a>
                            <div class="buy">
                                <a class="btn-produk" href="#">+</a>
                            </div>
                        </div>

                        <div class="product">
                            <a href="#" style="text-decoration: none">
                                <div class="img-size">
                                    <div class="image">
                                        <img src="img/apel.webp">
                                    </div>
                                </div>
                                <div class="name-price">
                                    <h3>Apel Fuji</h3>
                                    <p>1.1 Kg / pack</p>
                                    <h4>Rp. 40.000,-</h4>
                                    <p style="color:rgb(160, 158, 158); text-decoration:line-through; font-size:8px;">
                                        Rp.47.000,-</p>
                                </div>
                            </a>
                            <div class="buy">
                                <a class="btn-produk" href="#">+</a>
                            </div>
                        </div>


                        <div class="product">
                            <div class="img-size">
                                <div class="image">
                                    <img src="img/pear.webp">
                                </div>
                            </div>
                            <div class="name-price">
                                <h3>Pear Century</h3>
                                <p>1.1kg / pack</p>
                                <h4>Rp. 30.900,-</h4>
                                <p style="margin-top: 1; color:rgb(160, 158, 158); text-decoration:line-through; font-size:8px;">
                                    Rp.35.000,-</p>
                            </div>
                            <div class="year">
                                <h5 style="font-size: 12px;"></h5>
                            </div>
                            <div class="buy">
                                <a href="" class="btn-produk">+</a>
                            </div>

                        </div>

                        <div class="product">
                            <div class="img-size">
                                <div class="image">
                                    <img src="img/matoa.webp">
                                </div>
                            </div>
                            <div class="name-price">
                                <h3>Matoa</h3>
                                <p>500gram / pack</p>
                                <h4>Rp. 42.500,-</h4>
                                <p style="margin-top: 1; color:rgb(160, 158, 158); text-decoration:line-through; font-size:8px;">
                                    Rp.50.000,-</p>
                            </div>
                            <div class="year">
                                <h5 style="font-size: 12px;"></h5>
                            </div>
                            <div class="buy">
                                <a href="" class="btn-produk">+</a>
                            </div>

                        </div>

                        <div class="product">
                            <div class="img-size">
                                <div class="image">
                                    <img src="img/kiwi.webp">
                                </div>
                            </div>
                            <div class="name-price">
                                <h3>Kiwi Gold</h3>
                                <p>2 butir / pack</p>
                                <h4>Rp. 35.400,-</h4>
                                <p style="margin-top: 1; color:rgb(160, 158, 158); text-decoration:line-through; font-size:8px;">
                                    Rp.50.000,-</p>
                            </div>
                            <div class="year">
                                <h5 style="font-size: 12px;"></h5>
                            </div>
                            <div class="buy">
                                <a href="" class="btn-produk">+</a>
                            </div>

                        </div>

                        <div class="product">
                            <div class="img-size">
                                <div class="image">
                                    <img src="img/raja.webp">
                                </div>
                            </div>
                            <div class="name-price">
                                <h3>Beras Raja</h3>
                                <p>5Kg / pack</p>
                                <h4>Rp. 64.400,-</h4>
                                <p style="margin-top: 1; color:rgb(160, 158, 158); text-decoration:line-through; font-size:8px;">
                                    Rp.71.200,-</p>
                            </div>
                            <div class="year">
                                <h5 style="font-size: 12px;"></h5>
                            </div>
                            <div class="buy">
                                <a href="" class="btn-produk">+</a>
                            </div>

                        </div>

                        <div class="product">
                            <div class="img-size">
                                <div class="image">
                                    <img src="img/ramos.webp">
                                </div>
                            </div>
                            <div class="name-price">
                                <h3>Beras Setra Ramos Top Koki</h3>
                                <p>5Kg / pack</p>
                                <h4>Rp. 61.250,-</h4>
                                <p style="margin-top: 1; color:rgb(160, 158, 158); text-decoration:line-through; font-size:8px;">
                                    Rp.69.500,-</p>
                            </div>
                            <div class="year">
                                <h5 style="font-size: 12px;"></h5>
                            </div>
                            <div class="buy">
                                <a href="" class="btn-produk">+</a>
                            </div>

                        </div>

                        <div class="product">
                            <div class="img-size">
                                <div class="image">
                                    <img src="img/wang.webp">
                                </div>
                            </div>
                            <div class="name-price">
                                <h3>Apel Fuji Wang Shan</h3>
                                <p>5Kg / pack</p>
                                <h4>Rp. 82.500,-</h4>
                                <p style="margin-top: 1; color:rgb(160, 158, 158); text-decoration:line-through; font-size:8px;">
                                    Rp.92.500,-</p>
                            </div>
                            <div class="year">
                                <h5 style="font-size: 12px;"></h5>
                            </div>
                            <div class="buy">
                                <a href="" class="btn-produk">+</a>
                            </div>

                        </div>

                        <div class="product">
                            <div class="img-size">
                                <div class="image">
                                    <img src="img/anggur.webp">
                                </div>
                            </div>
                            <div class="name-price">
                                <h3>Anggur Merah Red Globe</h3>
                                <p>5Kg / pack</p>
                                <h4>Rp. 32.400,-</h4>
                                <p style="margin-top: 1; color:rgb(160, 158, 158); text-decoration:line-through; font-size:8px;">
                                    Rp.40.500,-</p>
                            </div>
                            <div class="year">
                                <h5 style="font-size: 12px;"></h5>
                            </div>
                            <div class="buy">
                                <a href="" class="btn-produk">+</a>
                            </div>

                        </div>

                        <div class="product">
                            <div class="img-size">
                                <div class="image">
                                    <img src="img/bakso.webp">
                                </div>
                            </div>
                            <div class="name-price">
                                <h3>Bakso Ikan Cedea 500gr</h3>
                                <p>500gram / pack</p>
                                <h4>Rp. 32.400,-</h4>
                                <p style="margin-top: 1; color:rgb(160, 158, 158); text-decoration:line-through; font-size:8px;">
                                    Rp.40.500,-</p>
                            </div>
                            <div class="year">
                                <h5 style="font-size: 12px;"></h5>
                            </div>
                            <div class="buy">
                                <a href="" class="btn-produk">+</a>
                            </div>

                        </div>

                        <div class="product">
                            <div class="img-size">
                                <div class="image">
                                    <img src="img/bawang.jpg">
                                </div>
                            </div>
                            <div class="name-price">
                                <h3>Bawang Putih</h3>
                                <p>500gram / pack</p>
                                <h4>Rp. 12.300,-</h4>
                                {{-- <p style="margin-top: 1; color:rgb(160, 158, 158); text-decoration:line-through; font-size:8px;">Rp.40.500,-</p> --}}
                            </div>
                            <div class="year">
                                <h5 style="font-size: 12px;"></h5>
                            </div>
                            <div class="buy">
                                <a href="" class="btn-produk">+</a>
                            </div>

                        </div>

                        <div class="product">
                            <div class="img-size">
                                <div class="image">
                                    <img src="img/daging-sapi.webp">
                                </div>
                            </div>
                            <div class="name-price">
                                <h3>Daging Sapi Bone-in Karubi US</h3>
                                <p>250gram / pack</p>
                                <h4>Rp. 207.900,-</h4>
                                {{-- <p style="margin-top: 1; color:rgb(160, 158, 158); text-decoration:line-through; font-size:8px;">Rp.40.500,-</p> --}}
                            </div>
                            <div class="year">
                                <h5 style="font-size: 12px;"></h5>
                            </div>
                            <div class="buy">
                                <a href="" class="btn-produk">+</a>
                            </div>

                        </div>


                        <div class="product">
                            <div class="img-size">
                                <div class="image">
                                    <img src="img/ayam-pejantan.webp">
                                </div>
                            </div>
                            <div class="name-price">
                                <h3>Ayam Pejantan Utuh</h3>
                                <p>250gram / pack</p>
                                <h4>Rp. 207.900,-</h4>
                                {{-- <p style="margin-top: 1; color:rgb(160, 158, 158); text-decoration:line-through; font-size:8px;">Rp.40.500,-</p> --}}
                            </div>
                            <div class="year">
                                <h5 style="font-size: 12px;"></h5>
                            </div>
                            <div class="buy">
                                <a href="" class="btn-produk">+</a>
                            </div>

                        </div>

                        <div class="product">
                            <div class="img-size">
                                <div class="image">
                                    <img src="img/ikan-kembung.webp">
                                </div>
                            </div>
                            <div class="name-price">
                                <h3>Ikan Kembung</h3>
                                <p>250gram / pack</p>
                                <h4>Rp. 207.900,-</h4>
                                {{-- <p style="margin-top: 1; color:rgb(160, 158, 158); text-decoration:line-through; font-size:8px;">Rp.40.500,-</p> --}}
                            </div>
                            <div class="year">
                                <h5 style="font-size: 12px;"></h5>
                            </div>
                            <div class="buy">
                                <a href="" class="btn-produk">+</a>
                            </div>

                        </div>



                    </div>

                </div>

            </div>

        </div>

        <nav class="bg-gray-100"
            style="position: fixed; bottom: 0; width: 100%; z-index: 1000; box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.3); background-color: #ffffff;">
            <div class="navbar" style="display: flex; align-items:center; width:100%; margin:auto; padding:10px">
                <a href=""
                    style="flex: 1; display: flex; flex-direction: column; align-items: center; text-decoration: none; color: rgb(121, 121, 121);">
                    <img src="img/logo/home.png" alt="" style="width: 26px; margin-bottom: 4px;">
                    <p style="text-align: center; margin: 0; font-size:12px;">Home</p>
                </a>

                <a href=""
                    style="flex: 1; display: flex; flex-direction: column; align-items: center; text-decoration: none; color: rgb(121, 121, 121);">
                    <img src="img/logo/kategori.png" alt="" style="width: 26px; margin-bottom: 4px;">
                    <p style="text-align: center; margin: 0; font-size:12px;">Kategori</p>
                </a>

                <a href=""
                    style="flex: 1; display: flex; flex-direction: column; align-items: center; text-decoration: none; color: rgb(121, 121, 121);">
                    <img src="img/logo/mangkok.png" alt="" style="width: 26px; margin-bottom: 4px;">
                    <p style="text-align: center; margin: 0; font-size:12px;">Resep</p>
                </a>
                <a href=""
                    style="flex: 1; display: flex; flex-direction: column; align-items: center; text-decoration: none; color: rgb(121, 121, 121);">
                    <img src="img/logo/cart.png" alt="" style="width: 26px; margin-bottom: 4px;">
                    <p style="text-align: center; margin: 0; font-size:12px;">Keranjang</p>
                </a>

                <a href=""
                    style="flex: 1; display: flex; flex-direction: column; align-items: center; text-decoration: none; color: rgb(121, 121, 121);">
                    <img src="img/logo/user.png" alt="" style="width: 26px; margin-bottom: 4px;">
                    <p style="text-align: center; margin: 0; font-size:12px;">Akun</p>
                </a>
            </div>


        </nav>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script>
        const navbar = document.getElementById('navbar');
        const loc = document.getElementById('loc-wrapper');
        const searchBar = document.getElementById('search-Bar');
        const scrollThreshold = 50; // Ubah nilai ini sesuai kebutuhan

        window.addEventListener('scroll', () => {
            if (window.scrollY > scrollThreshold) {
                navbar.classList.add('scrolled');
                loc.classList.add('loc')
                searchBar.classList.add('search-bar')
            } else {
                navbar.classList.remove('scrolled');
                loc.classList.remove('loc')
                searchBar.classList.remove('search-bar')
            }
        });
    </script>
</body>

</html>
