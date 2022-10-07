$( document ).ready(function() {
  $("#oculto").hide();
  $("#oculto_tabla").hide();
  if(document.getElementById('name_user').value != 'israel'){
    $("#segunda_pag").hide();
  }
  
});

function citas(){
 

    var Nombre = document.getElementById('Nombre').value;
    var Apellidos= document.getElementById('Apellidos').value;
    var Fecha= document.getElementById('Fecha').value;
    var Telefono= document.getElementById('Telefono').value;
    var Mail= document.getElementById('Mail').value;
    var Programa = document.getElementById('Programa').value;
    var Comentarios = document.getElementById('Comentarios').value;
 
    Swal.fire({
      title: 'Deseas guardar la cita',
      showDenyButton: true,
      confirmButtonText: 'Guardar',
      denyButtonText: `Cancelar`,
    }).then((result) => {
      if (result.isConfirmed) {
        $.ajax({
          url: 'eviar_dato',
          method: 'GET',
          data: {
            Nombre,
            Apellidos,
            Fecha,
            Telefono,
            Mail,
            Programa,
            Comentarios
          },
          success: function (response) {
             document.getElementById('Nombre').value="";
             document.getElementById('Apellidos').value="";
             document.getElementById('Fecha').value="";
             document.getElementById('Telefono').value="";
             document.getElementById('Mail').value="";
             document.getElementById('Programa').value="";
             document.getElementById('Comentarios').value="";
          },
      })
      Swal.fire({
        position: 'top-end',
        icon: 'success',
        title: 'Se guardo la cita',
        showConfirmButton: false,
        timer: 2000
      })
      } else if (result.isDenied) {
        Swal.fire({
          position: 'top-end',
          icon: 'error',
          title: 'Cancelado',
          showConfirmButton: false,
          timer: 2000
        })
      }
    })
   
}

function TABLA(){
  $("#oculto_tabla").show();
  var tabla = $("#tabla_citas").DataTable({
      destroy: true,
      ordering: false,
      data: [],
      columns: [
      { title: "id"},
      { title: "nombre"},
      { title: "apellidos"},
      { title: "fecha"},
      { title: "telefono"},
      { title: "mail"},
      { title: "programa"},
      { title: "comentarios"},
      ],
      dom: 'Bfrtip',
      buttons: [
          'copy', 'csv', 'excel', 'pdf', 'print'
      ]
  });

 $.ajax({
   type: "GET",
   url: "tabla_citas",
   method: "GET",
   data: {
   },
   beforSend: function () {},
   success: function (response) {
     var response = JSON.parse(response);
     console.log(response);

     response.forEach(function (datos, i) {
       tabla.row
         .add([
           datos["id"],
           datos["nombre"],
           datos["apellidos"],
           datos["fecha"],
           datos["telefono"],
           datos["mail"],
           datos["programa"],
           datos["comentarios"],
         ])
        .draw(false);
     });
   },
 });
}

function GRAFICA(){
  $("#oculto").show();
  document.getElementById('div_grafica_de_meses_derecha').innerHTML='';
  document.getElementById('div_grafica_de_meses_derecha').innerHTML='<canvas id="grafica_de_meses_derecha">';
  var ctx_derecha = document.getElementById('grafica_de_meses_derecha').getContext('2d');
  var labels=[];
  var info=[];

  $.ajax({
    url: 'GRAFICA',
    method: 'GET',
    data: {
    
    },
    success: function (response) {
      var response = JSON.parse(response)
      console.log(response)
      $.each(response, function (i, json) {
        labels.push(json.programa);
        info.push(json.numero);
      });
      var myChart = new Chart(ctx_derecha, {
        type: 'line',
          data: {
            labels:labels,
            datasets: [ 
                {
                type:'bar',
                label: 'Registros',
                  data: info,
                  backgroundColor: [
                      'rgba(255, 99, 132, 0.2)',
                  ],
                  borderColor: [
                      'rgba(255, 99, 132, 1)',
                  ],
                  borderWidth: 1
               },
              ] 
          },
          options:{
              scales: {
                  y: {
                      beginAtZero: true
                  }
              }   
          }
      });
    },
  })
}


function id_candidato(id,nombre){
  $("#eva_persona").draggable();
  document.getElementById('input_id').value=id;
}

function agregar_datos() {
  

  var id = document.getElementById('input_id').value;
  var Apariencia_y_conducta = document.getElementById('Apariencia_y_conducta').value; 
  var Conductadurantelaestancia= document.getElementById('Conductadurantelaestancia').value; 
  var Relacionconelentrevistador= document.getElementById('Relacionconelentrevistador').value; 
  var Lenguajeycomunicación= document.getElementById('Lenguajeycomunicación').value; 
  var Relacionentrecomunicaciones= document.getElementById('Relacionentrecomunicaciones').value; 
  var Contenidodelpensamiento= document.getElementById('Contenidodelpensamiento').value; 

  $.ajax({
    url: 'obtener_nombre_persona',
    method: 'GET',
    data: {
      id
    },
    success: function (response) {
      var response = JSON.parse(response);
      console.log(response)
      document.getElementById('input_nombre').value=response.nombre;
      var nombre = document.getElementById('input_nombre').value;
      var apellido_name = response.apellidos
      Swal.fire({
        title: 'Deseas guardar la evaluación',
        showDenyButton: true,
        confirmButtonText: 'Guardar',
        denyButtonText: `Cancelar`,
      }).then((result) => {
        if (result.isConfirmed) {
          $.ajax({
            url: 'agregar_evaluacion',
            method: 'GET',
            data: {
              id,
              nombre,
              Apariencia_y_conducta,
              Conductadurantelaestancia,
              Relacionconelentrevistador,
              Lenguajeycomunicación,
              Relacionentrecomunicaciones,
              Contenidodelpensamiento,
              apellido_name
            },
            success: function (response) {
              console.log(nombre)
              console.log(apellido_name)
              $( "#cerrar_evaluacion_paciente" ).click();
            },
        })
        Swal.fire({
          position: 'top-end',
          icon: 'success',
          title: 'Se guardo la evaluación',
          showConfirmButton: false,
          timer: 2000
        })
        } else if (result.isDenied) {
          Swal.fire({
            position: 'top-end',
            icon: 'error',
            title: 'Cancelado',
            showConfirmButton: false,
            timer: 2000
          })
        }
      })
    },
  })
  
}

function evaluacion_porcentaje() {
  
  document.getElementById('tabla_evaluacion').innerHTML="";
  $.ajax({
    url: 'tabla_evaluacion_personal',
    method: 'GET',
    data: {
    },
    success: function (response) {
      var response = JSON.parse(response)
      console.log(response)
       
      $.each(response, function (i, json) {
        var suma=parseInt(json.evaluacion_1)+parseInt(json.evaluacion_2)+parseInt(json.evaluacion_3)+parseInt(json.evaluacion_4)+parseInt(json.evaluacion_5)+parseInt(json.evaluacion_6);
        var promedio = suma/6;
        var porcentaje=(promedio/5)*100;
        $('#tabla_evaluacion').append(
          "<tr>"+
              "<td>"+json.id_paciente+"</td>"+
              "<td>"+
                  "<a>"+json.nombre_paciente+"</a>"+
                  "<br />"+
                  "<small>Fecha :"+json.fecha_realizada+"</small>"+
              "</td>"+
              "<td>"+
                  "<ul class='list-inline'>"+
                     " <li class='list-inline-item'>"+
                          "<img alt='Avatar' class='table-avatar' src='../img/user.jpeg' />"+
                      "</li>"+
                  "</ul>"+
              "</td>"+
              "<td class='project_progress'>"+
                  "<div class='progress progress-sm'>"+
                      "<div class='progress-bar bg-green' role='progressbar' aria-valuenow='57' aria-valuemin='0' aria-valuemax='100' style='width: "+Math.round(porcentaje)+"%'></div>"+
                  "</div>"+
                  "<small> <span>"+Math.round(porcentaje)+"</span>% Evaluación </small>"+
              "</td>"+
              "<td class='project-state'>"+
                  "<span class='badge badge-success'>Estable</span>"+
             " </td>"+
              "<td class='project-actions d-flex justify-content-center text-left'>"+
                 " <a class='btn btn-primary btn-sm' onclick='resultado("+json.id_paciente+")' data-toggle='modal' data-target='.modal_evaluacion' style='margin-right: 10px;' href='#'><i class='fas fa-folder'> </i>Evaluacion</a>"+
                  "<a class='btn btn-info btn-sm' onclick='ejemplo("+json.id_paciente+")' style='margin-right: 10px;' href='#'><i class='fas fa-pencil-alt'> </i>Editar</a>"+
                  "<a class='btn btn-danger btn-sm' onclick='eliminar_evaluacion("+json.id_paciente+")' style='margin-right: 10px;' href='#'><i class='fas fa-trash'> </i>Eliminar</a>"+
              "</td>"+
          "</tr>"
        )
      }) 
    },
  })
}

function resultado(id_cliente) {

  document.getElementById('resultados_personales').innerHTML="";

  var id_clietne = id_cliente
  console.log(id_clietne)
  
  $.ajax({
    url: "evaluacion_pasada_individual",
    data: {
      id_clietne
    },
    success: function (response) {
        var response = JSON.parse(response);
        console.log(response)
        $.each(response, function (i, json) {
    
          $('#resultados_personales').append(
             "<div class='col-12'>"+
             "<div class='card card-widget widget-user-2'>"+
               "<div class='widget-user-header bg-warning'>"+
                 "<div class='widget-user-image'>"+
                   "<img class='img-circle elevation-2' src='../img/user.jpeg' alt='User Avatar'/>"+
                 "</div>"+
                 "<h3 class='widget-user-username'>"+json.nombre_paciente+"</h3>"+
                 "<h5 class='widget-user-desc'>"+json.apellido+"</h5>"+
               "</div>"+
               "<div class='card-footer p-0'>"+
                 "<ul class='nav flex-column'>"+
                   "<li class='nav-item'>"+
                     "<a class='nav-link'>Apariencia y conducta<span class='float-right badge bg-success'>"+json.evaluacion_1+"</span></a>"+
                   "</li>"+
                   "<li class='nav-item'>"+
                     "<a class='nav-link'>Conducta durante la estancia<span class='float-right badge bg-success'>"+json.evaluacion_2+"</span></a>"+
                   "</li>"+
                   "<li class='nav-item'>"+
                     "<a class='nav-link'>Relación con el entrevistador<span class='float-right badge bg-success'>"+json.evaluacion_3+"</span></a>"+
                   "</li>"+
                   "<li class='nav-item'>"+
                     "<a class='nav-link'>Lenguaje y comunicación<span class='float-right badge bg-success'>"+json.evaluacion_4+"</span></a>"+
                   "</li>"+
                   "<li class='nav-item'>"+
                     "<a class='nav-link'>Relación entre comunicaciones verbales y no verbales<span class='float-right badge bg-success'>"+json.evaluacion_5+"</span></a>"+
                   "</li>"+
                   "<li class='nav-item'>"+
                     "<a class='nav-link'>Contenido del pensamiento<span class='float-right badge bg-success'>"+json.evaluacion_6+"</span></a>"+
                   "</li>"+
                 "</ul>"+
               "</div>"+
             "</div>"+
           "</div>"
          )
         }) 
    }
  })
}

function g(params) {
  
  document.getElementById('card_persona_acta').innerHTML="";
  var mes = params;
  $.ajax({
      url: "tabla_citas_indicvidual",
      data: {
        mes
      },
      success: function (response) {
          var response = JSON.parse(response);
          console.log(response)
          if(response == ""){
            Swal.fire({
              position: 'top-end',
              icon: 'error',
              title: 'No hay registros para el mes seleccionado',
              showConfirmButton: false,
              timer: 2000
            })
          }else{
            response.forEach(function (response, location) {
              $("#card_persona_acta").append(
                "<div class='col-6 card card-widget widget-user shadow'>"+
                    "<div class='widget-user-header bg-info'>"+
                        "<h3 class='widget-user-username'>"+response.nombre+"</h3>"+
                        "<h5 class='widget-user-desc'>"+response.programa+"</h5>"+
                    "</div>"+
                    "<div class='widget-user-image'>"+
                        "<img class='img-circle elevation-2' src='../img/user.jpeg' alt='User Avatar'>"+
                    "</div>"+
                    "<div class='card-footer'>"+
                        "<div class='row'>"+
                            "<div class='col-sm-4 border-right'>"+
                                "<div class='description-block'>"+
                                    "<h5 class='description-header'>Fecha</h5>"+
                                    "<b class='description-text'>"+response.fecha+"</b>"+
                                "</div>"+
                            "</div>"+
                            "<div class='col-sm-4 border-right'>"+
                                "<div class='description-block'>"+
                                    "<h5 class='description-header'>Telefono</h5>"+
                                    "<span class='description-text'>"+response.telefono+"</span>"+
                                "</div>"+
                            "</div>"+
                            "<div class='col-sm-4'>"+
                                "<div class='description-block'>"+
                                    "<h5 class='description-header'>Mail</h5>"+
                                  " <span class='description-text'>"+response.mail+"</span>"+
                                "</div>"+
                            "</div>"+
                        "</div>"+
                      "<button type='button' onclick='id_candidato("+response.id+")' data-toggle='modal' data-target='.bd-example-modal-lg' class='btn btn-outline-info btn-block btn-flat'><i class='fa fa-book' style='margin-right: 21px;'></i>Registrar datos</button>"+
                        "</div>"+
                "</div>"
              )
            })
          }
      }
  })
  
}

function eliminar_evaluacion(id_para_eliminar) {

  var id_para_eliminar = id_para_eliminar;

  Swal.fire({
    title: 'Estás seguro de eliminar la evaluación',
    showDenyButton: true,
    confirmButtonText: 'Eliminar',
    denyButtonText: `Cancelar`,
  }).then((result) => {
    if (result.isConfirmed) {
      $.ajax({
        url:'eliminar_evaluacion_inf',
        data:{ 
          id_para_eliminar
        },
        type: 'GET',
        dataType: 'json',
        success: function(json) {
        },
      });
      Swal.fire({
        position: 'top-end',
        icon: 'success',
        title: 'Se eliminó',
        showConfirmButton: false,
        timer: 1500
      })
      evaluacion_porcentaje();
    } else if (result.isDenied) {
      Swal.fire({
        position: 'top-end',
        icon: 'success',
        title: 'Cancelado',
        showConfirmButton: false,
        timer: 1500
      })
    }
  })
  
}