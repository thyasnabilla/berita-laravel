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
</head>

<body style="height: 2000px">
    <div class="container-fluid border-bottom border-3 shadow-sm">
        <div class="container-fluid  border-bottom border-1">
            <div class="container">
                <nav class="navbar-expand-md navbar-light">
                    <div class="row my-2">
                        <div class="col-md-6 offset-md-3">
                            <div class="navbar-brand ">
                                <img src="images/logo-cut-removebg.png" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="row">
                                <div class="col-8 mt-4">
                                    <a href="" style="font-family: Founders Grotesk Regular"
                                        class="fs-6 text-decoration-none text-black float-end">Newsletters</a>
                                </div>
                                <div class="col-4 mt-4">
                                    <i class="bi bi-search float-end"></i>
                                </div>
                            </div>
                            {{-- <div class="row">
                                <div class="col-12">
                                    <form action="" class="d-flex">
                                        <input type="text" class="form-control">
                                        <button class="btn btn-light"><i class="bi bi-search"></i></button>
                                    </form>
                                </div>
                            </div> --}}
                        </div>
                </nav>
            </div>
        </div>
        <div class="container">
            <nav class="navbar-expand-md navbar-light my-3">
                <div class="row">
                    <div class="col-md-12 d-flex justify-content-between">
                        <a class="nav-link active fw-bold" aria-current="page" href="#">National</a>

                        <a class="nav-link fw-bold" aria-current="page" href="#">Fashion & Beauty</a>

                        <a class="nav-link fw-bold" aria-current="page" href="#">Entertainment</a>

                        <a class="nav-link fw-bold" aria-current="page" href="#">Sport</a>

                        <a class="nav-link fw-bold" aria-current="page" href="#">Technology</a>

                        <a class="nav-link fw-bold" aria-current="page" href="#">Bussines</a>

                        <a class="nav-link fw-bold" aria-current="page" href="#">Self Development</a>
                    </div>

                </div>
            </nav>
        </div>
    </div>

    @yield('konten')
    @yield('footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>
