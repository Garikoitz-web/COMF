<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Select Dinámico || PHP - AJAX - jQuery</title>

    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-png">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/mai.css">
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center">
        <!-- LA CLASE CARD NOS SERVIRA PARA AGREGAR LA ANIMACION -->
        <div class="card">
            <div class="card-header text-center h4 font-weight-bolder text-warning">
              Select Dinámico PHP - AJAX - jQuery
            </div>
            <div class="card-body">

                <!-- select para el instrumento -->
                <div class="form-group">
                    <label for="instrumento" class="text-uppercase text-primary">instrumento</label>
                    <select class="custom-select form-control" id="instrumento">
                        <!-- cargar con js -->
                    </select>
                </div>

                <!-- select para la afinacion -->
                <div class="form-group">
                    <label for="afinacion" class="text-uppercase text-primary">AFINACION</label>
                    <div class="label-line"></div>
                    <select class="custom-select form-control" id="afinacion">
                        <!-- cargar con js dependiendo del instrumento -->
                    </select>
                </div>

                <!-- select para el tonalidad -->
                <div class="form-group">
                    <label for="tonalidad" class="text-uppercase text-primary">TONALIDAD</label>
                    <div class="label-line"></div>
                    <select class="custom-select form-control" id="tonalidad">
                        <!-- cargar con js dependiendo de la afinacion -->
                    </select>
                </div>

                <!-- select para el acorde 1 -->
                <div class="form-group">
                    <label for="acorde" class="text-uppercase text-primary">1 ACORDE</label>
                    <div class="label-line"></div>
                    <select class="custom-select form-control" id="acorde">
                        <!-- cargar con js dependiendo de la tonalidad -->
                    </select>
                </div>

                <!-- select para el acorde 2 -->
                <div class="form-group">
                    <label for="acorde2" class="text-uppercase text-primary">2 ACORDE</label>
                    <div class="label-line"></div>
                    <select class="custom-select form-control" id="acorde2">
                        <!-- cargar con js dependiendo de la tonalidad -->
                    </select>
                </div>

                <!-- select para el acorde 3 -->
                <div class="form-group">
                    <label for="acorde3" class="text-uppercase text-primary">3 ACORDE</label>
                    <div class="label-line"></div>
                    <select class="custom-select form-control" id="acorde3">
                        <!-- cargar con js dependiendo de la tonalidad -->
                    </select>
                </div>

                <!-- select para el acorde 4 -->
                <div class="form-group">
                    <label for="acorde4" class="text-uppercase text-primary">4 ACORDE</label>
                    <div class="label-line"></div>
                    <select class="custom-select form-control" id="acorde4">
                        <!-- cargar con js dependiendo de la tonalidad -->
                    </select>
                </div>

                <!-- select para el acorde 5 -->
                <div class="form-group">
                    <label for="acorde5" class="text-uppercase text-primary">5 ACORDE</label>
                    <div class="label-line"></div>
                    <select class="custom-select form-control" id="acorde5">
                        <!-- cargar con js dependiendo de la tonalidad -->
                    </select>
                </div>

                <!-- select para el acorde 6 -->
                <div class="form-group">
                    <label for="acorde6" class="text-uppercase text-primary">6 ACORDE</label>
                    <div class="label-line"></div>
                    <select class="custom-select form-control" id="acorde6">
                        <!-- cargar con js dependiendo de la tonalidad -->
                    </select>
                </div>

                <!-- select para el acorde 7 -->
                <div class="form-group">
                    <label for="acorde7" class="text-uppercase text-primary">7 ACORDE</label>
                    <div class="label-line"></div>
                    <select class="custom-select form-control" id="acorde7">
                        <!-- cargar con js dependiendo de la tonalidad -->
                    </select>
                </div>

                <!-- select para el acorde 8 -->
                <div class="form-group">
                    <label for="acorde8" class="text-uppercase text-primary">8 ACORDE</label>
                    <div class="label-line"></div>
                    <select class="custom-select form-control" id="acorde8">
                        <!-- cargar con js dependiendo de la tonalidad -->
                    </select>
                </div>

                <!-- select para el acorde 9 -->
                <div class="form-group">
                    <label for="acorde9" class="text-uppercase text-primary">9 ACORDE</label>
                    <div class="label-line"></div>
                    <select class="custom-select form-control" id="acorde9">
                        <!-- cargar con js dependiendo de la tonalidad -->
                    </select>
                </div>

                <!-- select para el acorde 10 -->
                <div class="form-group">
                    <label for="acorde10" class="text-uppercase text-primary">10 ACORDE</label>
                    <div class="label-line"></div>
                    <select class="custom-select form-control" id="acorde10">
                        <!-- cargar con js dependiendo de la tonalidad -->
                    </select>
                </div>

                <!-- select para el acorde 11 -->
                <div class="form-group">
                    <label for="acorde11" class="text-uppercase text-primary">11 ACORDE</label>
                    <div class="label-line"></div>
                    <select class="custom-select form-control" id="acorde11">
                        <!-- cargar con js dependiendo de la tonalidad -->
                    </select>
                </div>

                <!-- select para el acorde 12 -->
                <div class="form-group">
                    <label for="acorde12" class="text-uppercase text-primary">12 ACORDE</label>
                    <div class="label-line"></div>
                    <select class="custom-select form-control" id="acorde12">
                        <!-- cargar con js dependiendo de la tonalidad -->
                    </select>
                </div>

            </div>
        </div>          
    </div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="controlador/select.js"></script>
</body>
</html>