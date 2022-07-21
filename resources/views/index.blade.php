<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    {{-- BOOTSTRAP ICON --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <style>
        footer {
            height: 300px;

        }

        footer a {
            color: white;
        }

        b {
            margin-bottom: 20px
        }
    </style>
</head>

<body>
    @extends('layout.nav')
    @section('konten')
        <div class="container">
            <div class="row">
                <div class="col-9">
                    <div class="main-article d-flex mt-5 pb-4 ms-4">
                        <img src="images/svt.jpg" alt="" width="570px" class="d-block">
                        <div class="card-article ms-5" style="width: 300px">
                            <h3 style="font-family: Atlas Grotesk Web; font-weight: 700;font-size:36px">Lorem ipsum, dolor
                                sit
                                consectetur.</h3>
                            <p class="slug text-black-50" style="font-family: adobe-caslon-pro; font-size:20px">Lorem ipsum
                                dolor
                                sit amet
                                consectetur adipisicing elit. Architecto, cum!</p>
                            <h4><em style="font-family: adobe-caslon-pro"> Joshua Hong</em></h4>
                        </div>
                    </div>
                    <div class=" border-bottom border-top border-1 pt-3 pb-3">
                        <article class="card-article d-inline-block position-relative mt-4 pb-4" style="width: 300px;">
                            <img class="ms-3" src="images/tanjiro.png" alt="" width="267px">
                            <h3 class="ms-3" style="font-family: Atlas Grotesk Web; font-weight: 700;font-size:18px">
                                Lorem
                                ipsum,
                                dolor sit
                                consectetur.</h3>
                            <p class="slug text-black-50 ms-3"
                                style="font-family: adobe-caslon-pro; font-size:20px; font-weight:400;">
                                Lorem
                                ipsum dolor
                                sit amet
                                consectetur adipisicing elit. Architecto, cum!</p>
                            <h4 class="ms-3"><em style="font-family: adobe-caslon-pro;font-size:18px"> Joshua Hong</em>
                            </h4>
                        </article>
                        <article
                            class="card-article d-inline-block position-relative mt-4 pb-4 border-start border-end border-1"
                            style="width: 300px;">
                            <img class="ms-3" src="images/tanjiro.png" alt="" width="267px">
                            <h3 class="ms-3" style="font-family: Atlas Grotesk Web; font-weight: 700;font-size:18px">Lorem
                                ipsum,
                                dolor sit
                                consectetur.</h3>
                            <p class="slug text-black-50 ms-3"
                                style="font-family: adobe-caslon-pro; font-size:20px; font-weight:400;">
                                Lorem
                                ipsum dolor
                                sit amet
                                consectetur adipisicing elit. Architecto, cum!</p>
                            <h4 class="ms-3"><em style="font-family: adobe-caslon-pro;font-size:18px"> Joshua Hong</em>
                            </h4>
                        </article>
                        <article class="card-article d-inline-block position-relative mt-4 pb-4" style="width: 300px;">
                            <img class="ms-3" src="images/tanjiro.png" alt="" width="267px">
                            <h3 class="ms-3" style="font-family: Atlas Grotesk Web; font-weight: 700;font-size:18px">Lorem
                                ipsum,
                                dolor sit
                                consectetur.</h3>
                            <p class="slug text-black-50 ms-3"
                                style="font-family: adobe-caslon-pro; font-size:20px; font-weight:400;">
                                Lorem
                                ipsum dolor
                                sit amet
                                consectetur adipisicing elit. Architecto, cum!</p>
                            <h4 class="ms-3"><em style="font-family: adobe-caslon-pro;font-size:18px"> Joshua Hong</em>
                            </h4>
                        </article>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="latest border-bottom border-5 mt-5 border-dark" style="width: 879px">
                <h2 style="font-family: Atlas Grotesk Web;font-weight: 800;font-size:24;">The Latest</h2>
            </div>
            <div class="row">
                <div class="col-md-8 d-flex mt-5 ms-3  border-bottom border-1 pb-5">
                    <img src="images/light.png" alt="" class="d-block" style="width:300px; height:200px;">
                    <div class="card-article ms-4" style="width: 435px">
                        <h4 class="ms-3" style="font-family: Atlas Grotesk Web; font-weight: 700; font-size: 22px;">Lorem
                            ipsum dolor sit
                            amet
                            consectetur
                            adipisicing elit. Qui.</h4>
                        <p class="slug text-black-50 ms-3"
                            style="font-family: adobe-caslon-pro; font-size:20px; font-weight:400;">Lorem ipsum dolor sit
                            amet consectetur, adipisicing elit. Quo, culpa.</p>
                        <h4 class="ms-3"><em style="font-family: adobe-caslon-pro;font-size:18px"> Joshua Hong</em></h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 d-flex mt-5 ms-3  border-bottom border-1 pb-5">
                    <img src="images/light.png" alt="" class="d-block" style="width:300px; height:200px;">
                    <div class="card-article ms-4" style="width: 435px">
                        <h4 class="ms-3" style="font-family: Atlas Grotesk Web; font-weight: 700; font-size: 22px;">Lorem
                            ipsum dolor sit
                            amet
                            consectetur
                            adipisicing elit. Qui.</h4>
                        <p class="slug text-black-50 ms-3"
                            style="font-family: adobe-caslon-pro; font-size:20px; font-weight:400;">Lorem ipsum dolor sit
                            amet consectetur, adipisicing elit. Quo, culpa.</p>
                        <h4 class="ms-3"><em style="font-family: adobe-caslon-pro;font-size:18px"> Joshua Hong</em></h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 d-flex mt-5 ms-3  border-bottom border-1 pb-5">
                    <img src="images/light.png" alt="" class="d-block" style="width:300px; height:200px;">
                    <div class="card-article ms-4" style="width: 435px">
                        <h4 class="ms-3" style="font-family: Atlas Grotesk Web; font-weight: 700; font-size: 22px;">
                            Lorem
                            ipsum dolor sit
                            amet
                            consectetur
                            adipisicing elit. Qui.</h4>
                        <p class="slug text-black-50 ms-3"
                            style="font-family: adobe-caslon-pro; font-size:20px; font-weight:400;">Lorem ipsum dolor sit
                            amet consectetur, adipisicing elit. Quo, culpa.</p>
                        <h4 class="ms-3"><em style="font-family: adobe-caslon-pro;font-size:18px"> Joshua Hong</em></h4>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-8 border-bottom border-top border-dark border-5 ms-3">
                    <strong class="d-block my-3 text-center"><a href="" class="text-decoration-none">VIEW ALL
                            ARTICLES <b><i class="bi bi-chevron-right"></i></b></a> </strong>

                </div>
            </div>
        </div>
    @endsection
    @section('footer')
        <div class="container-fluid text-light" style="background-color: #000; margin-top:100px">
            <div class="container ">
                <footer>
                    <div class="row">
                        <div class="col-md-3 mt-5 mb-5 text-center">
                            <b class="d-block fs-5  ">ABOUT</b>
                            <a href="" class="d-block text-decoration-none">About Us</a>
                            <a href="" class="d-block text-decoration-none">Staff</a>
                            <a href="" class="d-block text-decoration-none">Events</a>
                            <a href="" class="d-block text-decoration-none">Work at Foreign Affairs</a>
                        </div>
                        <div class="col-md-3 mt-5 mb-5 text-center border-start">
                            <b class="d-block fs-5  ">CONTACT</b>
                            <a href="" class="d-block text-decoration-none">Customer Service</a>
                            <a href="" class="d-block text-decoration-none">Contact Us</a>
                            <a href="" class="d-block text-decoration-none">Submissions</a>
                            <a href="" class="d-block text-decoration-none">Permissions</a>
                            <a href="" class="d-block text-decoration-none">Leave Us Feedback</a>

                        </div>
                        <div class="col-md-3 mt-5 mb-5 text-center border-start border-end">
                            <b class="d-block fs-5  ">SUBSCRIPTIONS</b>
                            <a href="" class="d-block text-decoration-none">Subscriptions</a>
                            <a href="" class="d-block text-decoration-none">Give a Gift</a>
                            <a href="" class="d-block text-decoration-none">Donate</a>
                            <a href="" class="d-block text-decoration-none">Download iOS App</a>
                            <a href="" class="d-block text-decoration-none">Download Android App</a>
                        </div>
                        <div class="col-md-3 mt-5 mb-5 text-center">
                            <b class="d-block fs-5  ">Follow</b>
                            <h3><a href="" class="d-block text-decoration-none"><i class="bi bi-facebook"></i></a>
                            </h3>
                            <h3><a href="" class="d-block text-decoration-none"><i class="bi bi-twitter"></i></a>
                            </h3>
                            <h3><a href="" class="d-block text-decoration-none"><i
                                        class="bi bi-instagram"></i></a></h3>
                            <h3><a href="" class="d-block text-decoration-none"><i class="bi bi-youtube"></i></a>
                            </h3>

                        </div>



                    </div>
                </footer>
            </div>
        </div>
    @endsection
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>
