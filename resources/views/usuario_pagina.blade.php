<x-app-layout>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script type="text/javascript" src="/js/test.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/js/adminlte.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css">
    <script src="https://kit.fontawesome.com/d6b5728526.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/js/bootstrap.min.js"></script>
    <!-- Datatables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/v/bs4-4.1.1/dt-1.10.18/datatables.min.css">
    <script src="https://cdn.datatables.net/v/bs4-4.1.1/dt-1.10.18/datatables.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Informacion') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <!-- DISEÑO  -->
                <!-- <button type="button" class="col-2 btn btn-block btn-outline-primary" onclick="ususario_individuales();">Ver citas proximas</button> -->

                <!-- <div class="card-body">
                    <div class="form-group">
                        <label>Mes de citas</label>
                        <select class="form-control" id="mes" onchange="citas_indivuales();">
                            <option>selecciona un mes</option>
                            <option value="01">Enero</option>
                            <option value="02">Febrero</option>
                            <option value="03">Marzo</option>
                            <option value="04">Abril</option>
                            <option value="05">Mayo</option>
                            <option value="06">Junio</option>
                            <option value="07">Julio</option>
                            <option value="08">Agosto</option>
                            <option value="09">Septiembre</option>
                            <option value="10">Octubre</option>
                            <option value="11">Noviembre</option>
                            <option value="12">Diciembre</option>
                        </select>
                    </div>
                </div> -->

                <div class="card-body">
                    <ul class="pagination pagination-month justify-content-center">
                        <li class="page-item"><a class="page-link" href="#">«</a></li>
                        <li class="page-item " >
                            <a class="page-link" id="zoom" onclick="g(1)">
                                <p class="page-month">Enero</p>
                                <p class="page-year">2022</p>
                            </a>
                        </li>
                        <li class="page-item ">
                            <a class="page-link" id="zoom" onclick="g(2)">
                                <p class="page-month">Febrero</p>
                                <p class="page-year">2022</p>
                            </a>
                        </li>
                        <li class="page-item">
                            <a class="page-link"id="zoom" onclick="g(3)">
                                <p class="page-month">Marzo</p>
                                <p class="page-year">2022</p>
                            </a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" id="zoom" onclick="g(4)">
                                <p class="page-month">Abril</p>
                                <p class="page-year">2022</p>
                            </a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" id="zoom" onclick="g(5)">
                                <p class="page-month">Mayo</p>
                                <p class="page-year">2022</p>
                            </a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" id="zoom" onclick="g(6)">
                                <p class="page-month">Junio</p>
                                <p class="page-year">2022</p>
                            </a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" id="zoom" onclick="g(7)">
                                <p class="page-month">Julio</p>
                                <p class="page-year">2022</p>
                            </a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" id="zoom" onclick="g(8)">
                                <p class="page-month">Agosto</p>
                                <p class="page-year">2022</p>
                            </a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" id="zoom" onclick="g(9)">
                                <p class="page-month">Septiembre</p>
                                <p class="page-year">2022</p>
                            </a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" id="zoom" onclick="g(10)">
                                <p class="page-month">Octubre</p>
                                <p class="page-year">2022</p>
                            </a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" id="zoom" onclick="g(11)">
                                <p class="page-month">Noviembre</p>
                                <p class="page-year">2022</p>
                            </a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" id="zoom" onclick="g(12)">
                                <p class="page-month">Diciembre</p>
                                <p class="page-year">2022</p>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">»</a></li>
                    </ul>
                </div>

                <div class="col-12 row" id="card_persona_acta"></div>

                <div class="modal fade bd-example-modal-lg" id="eva_persona" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="card card-secondary">
                                <div class="card-header row">
                                    <h3 class="card-title col-10">Evaluacion del paciente</h3>
                                    <button type="button" id="cerrar_evaluacion_paciente" class="close col-2" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6 callout callout-info">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <!-- evaluacion_1 -->
                                                    <label>Apariencia y conducta</label>
                                                    <select class="custom-select" id="Apariencia_y_conducta">
                                                        <option selected>selecciona una opción</option>
                                                        <option value="0">Muy malo</option>
                                                        <option value="1">Malo</option>
                                                        <option value="2">Regular</option>
                                                        <option value="3">Bueno</option>
                                                        <option value="4">Muy bueno</option>
                                                        <option value="5">Excelente</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 callout callout-info">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <!-- evaluacion_2 -->
                                                    <label>Conducta durante la estancia</label>
                                                    <select class="custom-select" id="Conductadurantelaestancia">
                                                        <option selected>selecciona una opción</option>
                                                        <option value="0">Muy malo</option>
                                                        <option value="1">Malo</option>
                                                        <option value="2">Regular</option>
                                                        <option value="3">Bueno</option>
                                                        <option value="4">Muy bueno</option>
                                                        <option value="5">Excelente</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 callout callout-info">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <!-- evaluacion_3 -->
                                                    <label>Relación con el entrevistador</label>
                                                    <select class="custom-select" id="Relacionconelentrevistador">
                                                        <option selected>selecciona una opción</option>
                                                        <option value="0">Muy malo</option>
                                                        <option value="1">Malo</option>
                                                        <option value="2">Regular</option>
                                                        <option value="3">Bueno</option>
                                                        <option value="4">Muy bueno</option>
                                                        <option value="5">Excelente</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 callout callout-info">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <!-- evaluacion_4 -->
                                                    <label>Lenguaje y comunicación</label>
                                                    <select class="custom-select" id="Lenguajeycomunicación">
                                                        <option selected>selecciona una opción</option>
                                                        <option value="0">Muy malo</option>
                                                        <option value="1">Malo</option>
                                                        <option value="2">Regular</option>
                                                        <option value="3">Bueno</option>
                                                        <option value="4">Muy bueno</option>
                                                        <option value="5">Excelente</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 callout callout-info">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <!-- evaluacion_5 -->
                                                    <label>Relación entre comunicaciones verbales y no verbales</label>
                                                    <select class="custom-select" id="Relacionentrecomunicaciones">
                                                        <option selected>selecciona una opción</option>
                                                        <option value="0">Muy malo</option>
                                                        <option value="1">Malo</option>
                                                        <option value="2">Regular</option>
                                                        <option value="3">Bueno</option>
                                                        <option value="4">Muy bueno</option>
                                                        <option value="5">Excelente</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 callout callout-info">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <!-- evaluacion_6 -->
                                                    <label>Contenido del pensamiento</label>
                                                    <select class="custom-select" id="Contenidodelpensamiento">
                                                        <option selected>selecciona una opción</option>
                                                        <option value="0">Muy malo</option>
                                                        <option value="1">Malo</option>
                                                        <option value="2">Regular</option>
                                                        <option value="3">Bueno</option>
                                                        <option value="4">Muy bueno</option>
                                                        <option value="5">Excelente</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="button" onclick="agregar_datos();" class="col-2 btn btn-block bg-gradient-success">Guardar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <input type="hidden" id="input_id">
    <input type="hidden" id="input_nombre">

    <style>
        #zoom {
            transition: transform .1s;
        }
        #zoom:hover {
            transform: scale(1.2);
            z-index: 1;
            background-color: #007bff;
            background: #007bff;
            color: white;
            border-radius: 15px;
        }
    </style>
</x-app-layout>