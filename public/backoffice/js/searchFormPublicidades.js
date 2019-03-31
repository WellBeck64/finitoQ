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
  console.log( "DATA FILTER ANUNCIOS : ", filterTitle );

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
          createAnuncioVoiew( result );
        }
      });

    });

  } else if (filterTitle === "porData") {
    $("#id-searchTitle").hide();
    $("#id-datepicker").show();
    $('#btn-searchSubmitToDate').removeAttr('disabled');


    $( "#btn-searchSubmitToDate" ).click(function( event ) {
      var searchDatapicker = $("#input-datepicker").val();
      console.log( "DATA FILTER ANUNCIOS : ", searchDatapicker );  
      
      $.ajax({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        method:'POST',
        url:"searchByData/data",
        data:{'data': searchDatapicker},
        dataType:'json',
        success: function (result) {
          createAnuncioVoiew( result );
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
function createAnuncioVoiew( result ) {

  $('.allItemAnuncio').empty();

  if(!result)
  {
    $('#error404Anuncio').css('display','block');
    $('#error404Anuncio h1').text("Adicione Anuncios!");
  }else {
    $(result).each(function () {
      $('.allItemAnuncio').append(
        "<div class=\"col-md-6 col-lg-3 itemAnuncio\">" +
        "<div class=\"card itemAnuncio-card\">" +
        "<a href=''>" +

        "<img class='card-img-top itemAnuncio-img img-fluid' src='"+ document.location.origin+'/AssetsAnuncios/images/filesAnuncios/'+this.foto + "'  alt='Card image' >"+

        "</a>" +
        "<div class=\"card-body\">" +
        "<h4 class=\"card-title itemAnuncio-titlte\">" + this.titulo + "</h4>" +

        "<div class='description-card'>"+
            "<p class=\"card-text itemAnuncio-description\" style=\"font-size: 12px; text-align: justify;\">" + this.descricao.trimToLength(87) + "</p>" +
        "</div>"+

        "<div class=\"table-data-feature itemOptions\">" +
        "<button class=\"item itemOptions-candidatos\" data-idAnuncio=\"" + this.id + "\" data-titleAnuncio=\"" + this.titulo + "\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Responder a Vaga\">" +
        "<i class=\"zmdi zmdi-mail-send\"></i>" +
        "</button>" +
        "<button class=\"item item itemOptions-more\" data-idAnuncio=\"" + this.id + "\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Detalhes\">" +
        "<i class=\"zmdi zmdi-more\"></i>" +
        "</button>" +
        "<button class=\"item item itemOptions-editar\" data-idAnuncio=\"" + this.id + "\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Partilhar no Facebook\">" +
        "<i class=\"fab fa-facebook-f\"></i>" +
        "</button>" +
        "</div>" +
        "</div>" +
        "</div>" +
        "</div>"
      );
    });
  }

  $(document).on('click', '.itemOptions-candidatos' , function() {
    $('#modal-responder-anuncio').modal('show');
    var idAnuncio = $(this).attr('data-idAnuncio');
    $('#exampleModalCenterTitle').attr('data-anuncioId',idAnuncio);
  });

  $(document).on('click', '.itemOptions-more' , function() {
    var idAnuncio = $(this).attr('data-idAnuncio');

    $('#exampleModalCenterTitle').attr('data-anuncioId',idAnuncio);

    $('#sectionAnuncios').hide('100');
    $('#userOnAnuncio').show('100');

    $.ajax({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      method:'POST',
      url:"searchById/idAnuncio",
      data:{'idAnuncio':idAnuncio},
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
          $('.title-anuncio-request').text(result.titulo);
          $('#detalhe-anuncio-item-descricao').text(result.descricao);
          $('#detalhe-anuncio-item-recomendacao').text(result.descricao);
          $('#detalhe-anuncio-item-competencias').text(result.descricao);
          $('#detalhe-anuncio-item-dataAnuncio').text(result.created_at.split(' ')[0]);
          $('#detalhe-anuncio-item-emailCandidatura').text(result.descricao);
          console.log(result);
        }
      }
    });
  });
  console.log(result);


}
      


String.prototype.trimToLength = function(m) {
  return (this.length > m) 
    ? jQuery.trim(this).substring(0, m).split(" ").slice(0, -1).join(" ") + "..."
    : this;
};