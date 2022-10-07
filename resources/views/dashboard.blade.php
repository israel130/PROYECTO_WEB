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
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jq-3.6.0/dt-1.12.1/datatables.min.css" />
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/jq-3.6.0/dt-1.12.1/datatables.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.12.1/b-2.2.3/b-colvis-2.2.3/b-html5-2.2.3/b-print-2.2.3/datatables.min.css"/>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.12.1/b-2.2.3/b-colvis-2.2.3/b-html5-2.2.3/b-print-2.2.3/datatables.min.js"></script>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Administrador') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="col-12 row">
                    <button type="button" class="col-2 btn btn-block btn-outline-info" onclick="TABLA();">Tabla de citas</button>
                    <div class="col-1"></div>
                    <button type="button" class="col-2 btn btn-block btn-outline-info" onclick="GRAFICA();">Grafica de citas</button>
                </div>
                <div class="card-body table-responsive p-0">
                    <h4 id="oculto_tabla" style="font-size: 43px;font-weight: bolder;">Registros de citas </h4>
                    <table id="tabla_citas" class="table text-nowrap table-bordered " style="width: 100%;">
                    </table>
                </div>
                <div class="card-body p-0" style="display: block;">
                    <h4 id="oculto" style="font-size: 43px;font-weight: bolder;">Registros por programas</h4>
                    <div id="div_grafica_de_meses_derecha" class="col-12"></div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>