<!DOCTYPE html>
<html lang="en">
    <head>
        <base href="./">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
        <link rel="apple-touch-icon" sizes="57x57" href="assets/favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="assets/favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="assets/favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="assets/favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="assets/favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="assets/favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="assets/favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="assets/favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192" href="assets/favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="assets/favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
        <link rel="manifest" href="assets/favicon/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="assets/favicon/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">

        <link href="css/style.css" rel="stylesheet">

    </head>
    <body>

        <!-- include("sidebar") -->

        <div class="wrapper d-flex flex-column min-vh-100 bg-light">

            @include("header")

            <div class="body flex-grow-1 px-3">
                <div class="container-lg">

                    <!-- /.row-->
                    <div class="card mb-4">
                        <div class="card-body">
                            <form>
                                <div class="row">
                                    <div class="col">
                                        <input type="number" id="length" class="form-control" placeholder="{{ trans('messages.length_aquarium_centimeters') }}">
                                    </div>
                                    <div class="col">
                                        <input type="number" id="height" class="form-control" placeholder="{{ trans('messages.height_aquarium_centimeters') }}">
                                    </div>
                                    <div class="col">
                                        <input type="number" id="width" class="form-control" placeholder="{{ trans('messages.width_aquarium_centimeters') }}">
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col">
                                        <button type="button" onclick="calculate()" class="btn btn-info float-right">Consultar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6 col-lg-3">
                            <div class="card mb-4 text-white bg-primary">
                                <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                                    <div>
                                        <div class="fs-4 fw-semibold"><b id="capacity">0</b>
                                            <span class="fs-6 fw-normal">
                                                Litros
                                            </span>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <button class="btn btn-transparent text-white p-0" type="button" data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            options
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a></div>
                                    </div>
                                </div>
                                <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
                                    <canvas class="chart" id="card-chart1" height="70"></canvas>
                                </div>
                            </div>
                        </div>
                        <!-- /.col-->
                        <div class="col-sm-6 col-lg-3">
                            <div class="card mb-4 text-white bg-info">
                                <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                                    <div>
                                        <div class="fs-4 fw-semibold"><b id="watts">0</b>
                                            <span class="fs-6 fw-normal">
                                                Watts
                                            </span>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <button class="btn btn-transparent text-white p-0" type="button" data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            options
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a></div>
                                    </div>
                                </div>
                                <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
                                    <canvas class="chart" id="card-chart2" height="70"></canvas>
                                </div>
                            </div>
                        </div>
                        <!-- /.col-->
                        <div class="col-sm-6 col-lg-3">
                            <div class="card mb-4 text-white bg-warning">
                                <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                                    <div>
                                        <div class="fs-4 fw-semibold"><b id="filtering">0</b>
                                            <span class="fs-6 fw-normal">
                                                por hora
                                            </span>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <button class="btn btn-transparent text-white p-0" type="button" data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            options
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a></div>
                                    </div>
                                </div>
                                <div class="c-chart-wrapper mt-3" style="height:70px;">
                                    <canvas class="chart" id="card-chart3" height="70"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="card mb-4 text-white bg-danger">
                                <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                                    <div>
                                        <div class="fs-4 fw-semibold">
                                            0
                                            <span class="fs-6 fw-normal">
                                                Volume
                                            </span>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <button class="btn btn-transparent text-white p-0" type="button" data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            options
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a></div>
                                    </div>
                                </div>
                                <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
                                    <canvas class="chart" id="card-chart4" height="70"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div><a href="https://coreui.io">Daniel Muniz</a> © 2023</div>
            </footer>
        </div>

        <script src="vendors/@coreui/coreui/js/coreui.bundle.min.js" type="98d50e59fafc92f3a0a54c27-text/javascript"></script>
        <script src="vendors/simplebar/js/simplebar.min.js" type="98d50e59fafc92f3a0a54c27-text/javascript"></script>

        <script src="vendors/chart.js/js/chart.min.js" type="98d50e59fafc92f3a0a54c27-text/javascript"></script>
        <script src="vendors/@coreui/chartjs/js/coreui-chartjs.js" type="98d50e59fafc92f3a0a54c27-text/javascript"></script>
        <script src="vendors/@coreui/utils/js/coreui-utils.js" type="98d50e59fafc92f3a0a54c27-text/javascript"></script>
        <script src="js/main.js" type="98d50e59fafc92f3a0a54c27-text/javascript"></script>
        <script type="98d50e59fafc92f3a0a54c27-text/javascript"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>