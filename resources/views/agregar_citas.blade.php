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
            {{ __('Citas') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <!-- DISEÑO  -->
                <div style="margin-bottom: 30px;margin-top: 30px">
                    <h2 class="titulo">Registrar una cita</h2>
                    <div class="card card-danger col-11" style="left: 79px;">
                        <div class="card-header">
                            <h3 class="card-title">Datos</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Nombre</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa-solid fa-address-card"></i></span>
                                    </div>
                                    <input type="text" id="Nombre" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Apellidos</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa-solid fa-id-card-clip"></i></span>
                                    </div>
                                    <input type="text" id="Apellidos" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Fecha</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                    </div>
                                    <input type="date" id="Fecha" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask="" inputmode="numeric" placeholder="dd/mm/yyyy">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Telefono</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                    </div>
                                    <input type="text" id="Telefono" class="form-control" data-inputmask="&quot;mask&quot;: &quot;(999) 999-9999&quot;" data-mask="" inputmode="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Mail</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-laptop"></i></span>
                                    </div>
                                    <input type="text" id="Mail" class="form-control" data-inputmask="'alias': 'ip'" data-mask="" inputmode="decimal">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Tipo de Programa Grupal</label>
                                <select class="custom-select" id="Programa">
                                    <option selected>Seleciona una opcion</option>
                                    <option>Habilidades de vida y bienestar </option>
                                    <option>Competenc Regulación Emocional</option>
                                    <option>Conciencia Emocional</option>
                                    <option>Autonomia Emocional</option>
                                    <option>Regulación Emocional</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Comentarios</label>
                                <textarea class="form-control" id="Comentarios" rows="5" placeholder="Description..."></textarea>
                            </div>
                            <button type="button" onclick="citas();" class=" col-2 btn btn-block btn-outline-success">Agendar cita</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>