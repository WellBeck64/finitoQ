
$(document).ready(function(){


    $('.itemOptions').click(function(){
        $('#sectionAnuncios').hide('100');
        $('#userOnAnuncio').show('100');
    });

    $('#btn-anuncioBack').click(function(){
        $('#userOnAnuncio').hide('100');
        $('#sectionAnuncios').show('100');
    });


    //CABANGA START
        function readURL(input) {

            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#blah').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }

        }

        $("#imgInp").change(function() {
            readURL(this);
        });
    //CABANGA END

    //TESTING ANUNCIO_CONTROLLER
    /*var anuncio = {
        idAnuncio:1,
        titulo:'Vaga de Web Designer',
        descricao:'Teste de Anuncios on DB updated',
        foto:'Foto Teste updated',
        estado:'activo',
    }

    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        method:'POST',
        url:"insert/anuncio",
        data:{'anuncio':anuncio},
        dataType:'json',
        success: function (result) {
            console.log(result);
        }
    });

    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        method:'POST',
        url:"update/anuncio",
        data:{'anuncio':anuncio},
        dataType:'json',
        success: function (result) {
            console.log(result);
        }
    });*/

    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        method:'POST',
        url:"search/anuncio",
        dataType:'json',
        success: function (result) {
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
                        "<a href=\"\">" +
                        "<img class=\"card-img-top itemAnuncio-img img-fluid\" src=\"{{asset('/AssetsAnuncios/images/Anuncio_Web_Designer_Senior.png')}}\" alt=\"Card image\">" +
                        "</a>" +
                        "<div class=\"card-body\">" +
                        "<h4 class=\"card-title itemAnuncio-titlte\">" + this.titulo + "</h4>" +
                        "<p class=\"card-text itemAnuncio-description\">" + this.descricao + "</p>" +
                        "<div class=\"table-data-feature itemOptions\">" +
                        "<button class=\"item itemOptions-candidatos\" data-idAnuncio=\"" + this.id + "\" data-titleAnuncio=\"" + this.titulo + "\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Ver Candidatos\">" +
                        "<i class=\"fas fa-users\"></i>" +
                        "</button>" +
                        "<button class=\"item item itemOptions-editar\" data-idAnuncio=\"" + this.id + "\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editar\">" +
                        "<i class=\"zmdi zmdi-edit\"></i>" +
                        "</button>" +
                        "<button class=\"item item itemOptions-eliminar\" data-idAnuncio=\"" + this.id + "\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Eliminar\">" +
                        "<i class=\"zmdi zmdi-delete\"></i>" +
                        "</button>" +
                        "<button class=\"item item itemOptions-more\" data-idAnuncio=\"" + this.id + "\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"More\">" +
                        "<i class=\"zmdi zmdi-more\"></i>" +
                        "</button>" +
                        "</div>" +
                        "</div>" +
                        "</div>" +
                        "</div>"
                    );
                });
            }
            //ALTERATIONS
            $(document).on('click', '.itemOptions-candidatos' , function() {
                var idAnuncio = $(this).attr('data-idAnuncio');
                $('#sectionAnuncios').hide('100');
                $('#userOnAnuncio').show('100');

                console.log($('.title-anuncio-request').text($(this).attr('data-titleAnuncio')));

                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    method:'POST',
                    url:"searchCadidatosInAnuncio/candidatoAnuncio",
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
                            $('.table-candidato-request thead').append(
                                "<tr>" +
                                "<th>#</th>" +
                                "<th>name</th>" +
                                "<th>email</th>" +
                                "<th>telemovel</th>" +
                                "<th>description</th>" +
                                "<th>date</th>" +
                                //"<th>status</th>" +
                                //"<th></th>" +
                                "</tr>"
                            );
                            var i=1;
                            $(result).each(function () {
                                $('.table-candidato-request tbody').append(
                                    "<tr class=\"tr-shadow\">" +
                                    "<td>" +i+"</td>" +
                                    "<td>" + this.nome + "</td>" +
                                    "<td>" +
                                    "<span class=\"block-email\">" + this.email + "</span>" +
                                    "</td>" +
                                    "<td>" + this.telemovel + "</td>" +
                                    "<td class=\"desc\">Samsung S8 Black</td>" +
                                    "<td>"+this.created_at+"</td>" +
                                    /*"<td>" +
                                    "<span class=\"status--process\">Processed</span>" +
                                    "</td>" +*/
                                    /*"<td>" +
                                    "<div class=\"table-data-feature\">" +
                                    "<button class=\"item\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Send\">" +
                                    "<i class=\"zmdi zmdi-mail-send\"></i>" +
                                    "</button>" +
                                    "<button class=\"item\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Edit\">" +
                                    "<i class=\"zmdi zmdi-edit\"></i>" +
                                    "</button>" +
                                    "<button class=\"item\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Delete\">" +
                                    "<i class=\"zmdi zmdi-delete\"></i>" +
                                    "</button>" +
                                    "<button class=\"item\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"More\">" +
                                    "<i class=\"zmdi zmdi-more\"></i>" +
                                    "</button>" +
                                    "</div>" +
                                    "</td>" +*/
                                    "</tr>" +
                                    "<tr class=\"spacer\"></tr>"
                                );
                                i++;
                            });
                        }
                    }
                });
            });
            //ALTERATINS END
            console.log(result);
//DELECT ANUNCIO
            $(document).on('click', '.itemOptions-eliminar' , function() {
                var idAnuncio = $(this).attr('data-idAnuncio');
                console.log(idAnuncio);
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    method:'POST',
                    url:"delete/anuncio",
                    data:{'idAnuncio':idAnuncio},
                    dataType:'json',
                    success: function (result) {
                        console.log(result);
                        location.reload();
                    }
                });
            });
        }
    });
//DELECT ANUNCIO END
    /*
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        method:'POST',
        url:"searchByTittle/anuncio",
        data:{'titulo':'Teste'},
        dataType:'json',
        success: function (result) {
            console.log(result);
        }
    });

    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        method:'POST',
        url:"delete/anuncio",
        data:{'idAnuncio':1},
        dataType:'json',
        success: function (result) {
            console.log(result);
        }
    });*/
    //END TEST ANUNCIO_CONTROLLER

    //TESTING CANDIDATO_CONTROLLER
    /*var candidato = {
        idCandidato:1,
        nome:'kifen',
        email:'kifen@df.com',
        telemovel:9999999,
        cv:'cv_1',
    }

    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        method:'POST',
        url:"insert/candidato",
        data:{'candidato':candidato},
        dataType:'json',
        success: function (result) {
            console.log(result);
        }
    });

    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        method:'POST',
        url:"update/candidato",
        data:{'candidato':candidato},
        dataType:'json',
        success: function (result) {
            console.log(result);
        }
    });


    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        method:'POST',
        url:"search/candidato",
        dataType:'json',
        success: function (result) {
            console.log(result);
        }
    });

    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        method:'POST',
        url:"searchByNome/candidato",
        data:{'nome':'Testing'},
        dataType:'json',
        success: function (result) {
            console.log(result);
        }
    });

    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        method:'POST',
        url:"searchByEmail/candidato",
        data:{'email':'teste@teste.com'},
        dataType:'json',
        success: function (result) {
            console.log(result);
        }
    });

    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        method:'POST',
        url:"delete/candidato",
        data:{'idCandidato':15},
        dataType:'json',
        success: function (result) {
            console.log(result);
        }
    });*/
    //END TEST CANDIDATO_CONTROLLER

    //TESTING CANDIDATO_ANUNCIO_CONTROLLER
    /*var candidatoAnuncio = {
        idcandidatoAnuncio:1,
        idAnuncio:4,
        idCandidato:8
    }

    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        method:'POST',
        url:"insert/candidatoAnuncio",
        data:{'candidatoAnuncio':candidatoAnuncio},
        dataType:'json',
        success: function (result) {
            console.log(result);
        }
    });

    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        method:'POST',
        url:"searchCadidatosInAnuncio/candidatoAnuncio",
        data:{'idAnuncio':4},
        dataType:'json',
        success: function (result) {
            console.log(result);
        }
    });

    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        method:'POST',
        url:"searchAnuncioOfCadidatos/candidatoAnuncio",
        data:{'idCandidato':3},
        dataType:'json',
        success: function (result) {
            console.log(result);
        }
    });*/

    /*$.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        method:'POST',
        url:"delete/candidatoAnuncio",
        data:{'idCandidato':1},
        dataType:'json',
        success: function (result) {
            console.log(result);
        }
    });*/
    /*$.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        method:'POST',
        url:"isCandidatoOnVaga/candidatoAnuncio",
        data:{'email':'Daniel@gmail.com','idAnuncio':3},
        dataType:'json',
        success: function (result) {
            console.log(result);
        }
    });*/
    //END TEST ANUNCIO_CANDIDATO_CONTROLLER
});
