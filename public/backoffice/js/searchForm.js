$(document).ready(function(){

  $("#id-datepicker").hide();
  $("#id-searchTitle").hide();

  $('#input-datepicker').datepicker({
    uiLibrary: 'bootstrap',
    format: 'yyyy-mm-dd' 
  });

// ==============================================================
$('select[name=filterTitle]').change(function( event ) {
    
  var filterTitle = $(this).val();
  console.log( "DATA FILTER PublicidadeS : ", filterTitle );

  if (filterTitle === "porTitulo") {
    $("#id-datepicker").hide();
    $("#id-searchTitle").show();
    $('#btn-searchSubmitToDate').removeAttr('disabled');

    $( "#btn-searchSubmitToDate" ).click(function( event ) {
      var searchTitle = $("#input-searchTitle").val();
      console.log( "VALOR DO TEXT : ", searchTitle );  
      
      $.ajax({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        method:'POST',
        url:"searchByTittle/titulo",
        data:{'titulo': searchTitle},
        dataType:'json',
        success: function (result) {
          createPublicidadeVoiew( result );
        }
      });

    });

  } else if (filterTitle === "porData") {
    $("#id-searchTitle").hide();
    $("#id-datepicker").show();
    $('#btn-searchSubmitToDate').removeAttr('disabled');


    $( "#btn-searchSubmitToDate" ).click(function( event ) {
      var searchDatapicker = $("#input-datepicker").val();
      console.log( "DATA FILTER PublicidadeS : ", searchDatapicker );  
      
      $.ajax({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        method:'POST',
        url:"searchByData/data",
        data:{'data': searchDatapicker},
        dataType:'json',
        success: function (result) {
          createPublicidadeVoiew( result );
        }
      });
    });
  } else {
    $("#id-datepicker").hide();
    $("#id-searchTitle").hide();
    $('#btn-searchSubmitToDate').attr('disabled','disabled');
  }

});

});


/*
===================================================================
========================= CREATE VIEW LIST ========================
-------------------------------------------------------------------
*/
function createPublicidadeVoiew( result ) {
  $('.allItemPublicidade').empty();

  if(!result)
  {
    $('#error404Publicidade').css('display','block');
    $('#error404Publicidade h1').text("Adicione Publicidades!");
  }else {
    $(result).each(function () {
        $('.allItemPublicidade').append(
          "<div class=\"col-md-6 col-lg-3 itemPublicidade\">" +
          "<div class=\"card itemPublicidade-card shadow\">" +
          "<a href=\"\">" +

          "<img class='card-img-top itemPublicidade-img img-fluid' src='"+ document.location.origin+"/finitoQ/public/backoffice/images/filesPublicidade/"+this.foto+"' alt='Card image' style='max-width: 100%; height: auto;'>"+

          "</a>" +
          "<div class=\"card-body\">" +
          "<h4 class=\"card-title itemPublicidade-titlte\">" + this.titulo + "</h4>" +
          "<p class=\"card-text itemPublicidade-description\">" + this.descricao.trimToLength(87) + "</p>" +
          "<div class=\"table-data-feature itemOptions\">" +
          "<button class=\"item itemOptions-candidatos\" data-idPublicidade=\"" + this.id + "\" data-titlePublicidade=\"" + this.titulo + "\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Ver Candidatos\">" +
          "<i class=\"fas fa-users\"></i>" +
          "</button>" +
          "<button class=\"item item itemOptions-editar\" data-idPublicidade=\"" + this.id + "\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editar\">" +
          "<i class=\"zmdi zmdi-edit\"></i>" +
          "</button>" +
          "<button class=\"item item itemOptions-eliminar\" data-idPublicidade=\"" + this.id + "\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Eliminar\">" +
          "<i class=\"zmdi zmdi-delete\"></i>" +
          "</button>" +
          "</div>" +
          "</div>" +
          "</div>" +
          "</div>"
        );
    });
  }

  $(document).on('click', '.itemOptions-candidatos' , function() {
    var idPublicidade = $(this).attr('data-idPublicidade');
    $('#sectionPublicidades').hide('100');
    $('#userOnPublicidade').show('100');

    console.log($('.title-publicidade-request').text($(this).attr('data-titlePublicidade')));

    $.ajax({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      method:'POST',
      url:"searchCadidatosInPublicidade/candidatoPublicidade",
      data:{'idPublicidade':idPublicidade},
      dataType:'json',
      success: function (result) {
        console.log(result);
        $('.table-candidato-request thead').empty();
        $('.table-candidato-request tbody').empty();
        if(!result){
          $('#error404').css('display','block');
          $('#error404 h1').text("Nenhum Candidato Respondeu a essa Vaga!");
        }else {
          $('#error404').css('display','none');
          $('.table-candidato-request thead').append(
              "<tr>" +
              "<th>#</th>" +
              "<th>name</th>" +
              "<th>email</th>" +
              "<th>telemovel</th>" +
              "<th>description</th>" +
              "<th>date</th>" +
              "</tr>"
          );
          var i=1;
          $(result).each(function () {
            $('.table-candidato-request tbody').append(
              "<tr class=\"tr-shadow\">" +
              "<td>"+i+"</td>" +
              "<td>" + this.nome + "</td>" +
              "<td>" +
              "<span class=\"block-email\">" + this.email + "</span>" +
              "</td>" +
              "<td>" + this.telemovel + "</td>" +
              "<td class=\"desc\">Samsung S8 Black</td>" +
              "<td>"+this.created_at.split(' ')[0]+"</td>" +
              "</tr>" +
              "<tr class=\"spacer\"></tr>"
            );
            i++;
          });
        }
      }
    });
  });

  console.log(result);
  $(document).on('click', '.itemOptions-eliminar' , function() {
    var idPublicidade = $(this).attr('data-idPublicidade');
    console.log(idPublicidade);
    $.ajax({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      method:'POST',
      url:"delete/publicidade",
      data:{'idPublicidade':idPublicidade},
      dataType:'json',
      success: function (result) {
        console.log(result);
        location.reload();
      }
    });
  });
}
      


String.prototype.trimToLength = function(m) {
  return (this.length > m) 
    ? jQuery.trim(this).substring(0, m).split(" ").slice(0, -1).join(" ") + "..."
    : this;
};