<!DOCTYPE html>
<html lang="en">

<head>
    <title>CMS News</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- @style -->
    <link rel="stylesheet" href="{{ url('/frontend/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ url('/frontend/assets/css/sport.css') }}">
    <link rel="stylesheet" href="{{ url('/frontend/assets/css/news-detail.css') }}">
    <link rel="stylesheet" href="{{ url('/frontend/assets/css/contact.css') }}">
    <link rel="stylesheet" href="{{ url('/frontend/assets/css/search.css') }}">
    <!-- @google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kantumruy&display=swap" rel="stylesheet">
    <!-- @google font -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- @slick slider -->
    <link rel="stylesheet" type="text/css"
        href="{{ url('cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css') }}" />
    <!-- @funcy box -->
    <link rel="stylesheet" href="{{ url('https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css') }}" />
</head>

<body>
    <header>
        <div class="container">
            <div class="logo">
                <a href="/">
                    <h3>JONGDENG NEWS</h3>
                </a>
            </div>
            <ul class="menu">
                <li><a href="/">HOME</a></li>
                <li class="menu-sport"><a href="javascript:viod(0)">SPORT</a>
                    <ul class="sub-menu sport">
                        <li>
                            <a href="sport-news-national.php">National</a>
                        </li>
                        <li>
                            <a href="">International</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-sport"><a href="javascript:viod(0)">SOCIAL</a>
                    <ul class="sub-menu sport">
                        <li>
                            <a href="">National</a>
                        </li>
                        <li>
                            <a href="">International</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-sport"><a href="javascript:viod(0)">ENTERTAINMENT</a>
                    <ul class="sub-menu sport">
                        <li>
                            <a href="">National</a>
                        </li>
                        <li>
                            <a href="">International</a>
                        </li>
                    </ul>
                </li>
                <li><a href="/contact">CONTACT</a></li>
            </ul>
            <div class="search">
                <form action="search.php" method="get">
                    <?php
                    $query = '';
                    if (isset($_GET['query'])) {
                        $query = $_GET['query'];
                    }
                    ?>
                    <input type="text" class="box" placeholder="Search Here" name="query" value="<?= $query ?>">
                    <button><i class="fas fa-search"></i></button>
                </form>
            </div>
        </div>
    </header>
    {{-- Contents --}}
    @yield('content')
    {{-- Contents --}}
    <footer>
        <div class="container">
            <div class="logo">
                <a href="">
                    <img src="https://dummyimage.com/120" alt="">
                </a>
            </div>
            <div class="about">
                <div class="description">
                    Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                    classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin
                    professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words,
                    consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical
                    literature, discovered the undoubtable source.
                </div>
            </div>
            <div class="connect">
                <ul>
                    <li>
                        <a href=""><img src="https://dummyimage.com/40/27306D" alt=""></a>
                    </li>
                    <li>
                        <a href=""><img src="https://dummyimage.com/40/27306D" alt=""></a>
                    </li>
                    <li>
                        <a href=""><img src="https://dummyimage.com/40/27306D" alt=""></a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
</body>
<!-- @slick slider -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<!-- @theme js -->
<script src="{{ url('/frontend/assets/script/theme.js') }}"></script>
<!-- @funcy box -->
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
