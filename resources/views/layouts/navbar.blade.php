<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style-landing.css">
    <link rel="stylesheet" href="css/style-detail.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href='https://fonts.googleapis.com/css?family=Noto Sans' rel='stylesheet'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Document</title>
</head>

<style>

</style>

<body style="background-color: #bcbab6">

    <div
        class="relative sm:flex sm:items-center min-h-screen bg-dots-darker bg-center dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">

        <nav class="navbar-container" id="navbar">
            <div class="navbar-title" id="loc-wrapper">
                <div class="loc-wrapper">
                    <a href="">
                        <i class="fa-solid fa-location-dot" style="color: #ffffff; font-size:26px"></i>
                        <div class="inf-loc">
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

            <div class="navbar">
                <form class="d-flex" style="width: 100%; border-radius: 20px; justify-content:center;">
                    <input class="form-control me-2" type="search" placeholder="Cari Sesuatu..." aria-label="Search"
                        name="search" id="search-Bar" onclick="redirectToSearchPage()"
                        style="border-radius: 20px; height: 30px; font-size: 12px;">
                </form>
            </div>


        </nav>

        @yield('content')

        <nav class="bg-gray-100"
            style="position: fixed; bottom: 0; min-width: 500px; max-width: 500px; z-index: 1000; box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.3); background-color: #ffffff;">
            <div class="navbar-bottom">

                <a href=""
                    style="flex: 1; display: flex; flex-direction: column; align-items: center; text-decoration: none; color: rgb(121, 121, 121); margin: 10px;">
                    <img src="img/logo/home.png" alt="" style="width: 26px; margin-bottom: 4px;">
                    <p style="text-align: center; margin: 0; font-size: 12px;">Home</p>
                </a>

                <a href=""
                    style="flex: 1; display: flex; flex-direction: column; align-items: center; text-decoration: none; color: rgb(121, 121, 121); margin: 10px;">
                    <img src="img/logo/kategori.png" alt="" style="width: 26px; margin-bottom: 4px;">
                    <p style="text-align: center; margin: 0; font-size: 12px;">Kategori</p>
                </a>

                <a href=""
                    style="flex: 1; display: flex; flex-direction: column; align-items: center; text-decoration: none; color: rgb(121, 121, 121); margin: 10px;">
                    <img src="img/logo/mangkok.png" alt="" style="width: 26px; margin-bottom: 4px;">
                    <p style="text-align: center; margin: 0; font-size: 12px;">Resep</p>
                </a>

                <a href=""
                    style="flex: 1; display: flex; flex-direction: column; align-items: center; text-decoration: none; color: rgb(121, 121, 121); margin: 10px;">
                    <img src="img/logo/cart.png" alt="" style="width: 26px; margin-bottom: 4px;">
                    <p style="text-align: center; margin: 0; font-size: 12px;">Keranjang</p>
                </a>

                <a href=""
                    style="flex: 1; display: flex; flex-direction: column; align-items: center; text-decoration: none; color: rgb(121, 121, 121); margin: 10px;">
                    <img src="img/logo/user.png" alt="" style="width: 26px; margin-bottom: 4px;">
                    <p style="text-align: center; margin: 0; font-size: 12px;">Akun</p>
                </a>
            </div>
        </nav>

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.≥min.js"></script>
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

        function redirectToSearchPage() {
            // Gantilah URL berikut dengan URL halaman pencarian yang diinginkan
            window.location.href = '/searchbar'; // Contoh URL halaman pencarian
        }

        function checkWindowSize() {
            if ($(window).height() >= $(document).height()) {
                // Fetch records
                fetchData();
            }
        }

        // Fetch records
        function fetchData() {
            var start = Number($('#start').val());
            var allcount = Number($('#totalrecords').val());
            var rowperpage = Number($('#rowperpage').val());
            start = start + rowperpage;

            if (start <= allcount) {
                $('#start').val(start);

                $.ajax({
                    url: "{{ route('home.getProducts') }}",
                    data: {
                        start: start
                    },
                    dataType: 'json',
                    success: function(response) {
                        // Add new data
                        $("#product-list:last").after(response.html).show().fadeIn("slow");

                        // Check if the page has enough content or not. If not, then fetch more records
                        checkWindowSize();
                    }
                });
            }
        }

        $(document).on('touchmove', onScroll); // for mobile

        function onScroll() {
            if ($(window).scrollTop() > $(document).height() - $(window).height() - 100) {
                fetchData();
            }
        }

        $(window).scroll(function() {
            var position = $(window).scrollTop();
            var bottom = $(document).height() - $(window).height();

            if (position == bottom) {
                fetchData();
            }
        });
    </script>


</body>

</html>
