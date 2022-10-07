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

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Evaluacion') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <!-- DISEÑO  -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Projects</h3>
                        <div class="card-tools row">
                            <button type="button" class="col-12 btn btn-block btn-outline-primary btn-sm" onclick="evaluacion_porcentaje();">Ver evaluaciones</button>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <table class="table table-striped projects">
                            <thead>
                                <tr>
                                    <th style="width: 1%">ID</th>
                                    <th style="width: 20%">Nombre</th>
                                    <th style="width: 17%">Foto</th>
                                    <th>Progreso</th>
                                    <th style="width: 8%" class="text-center">Estatus</th>
                                    <th style="width: 20%"></th>
                                </tr>
                            </thead>
                            <tbody id="tabla_evaluacion">

                            </tbody>
                        </table>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <div class="modal fade modal_evaluacion" tabindex="-1" role="dialog" aria-labelledby="modal_evaluacion" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content" id="resultados_personales">
            </div>
        </div>
    </div>
    
    <!-- <div class="modal fade show" id="modal-xl"  aria-modal="true" role="dialog" style="padding-right: 16px; display: block;" hidden>
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Extra Large Modal</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>One fine body…</p>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>

        </div>

    </div> -->
</x-app-layout>