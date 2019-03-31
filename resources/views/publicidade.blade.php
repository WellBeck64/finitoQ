<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Title Page-->
    <title>Finito Q</title>
    <link rel="icon" href="{{asset('/backoffice/images/digitalFactory.png')}}" type="image/png">
    <!-- Fontfaces CSS-->
    <link href="{{asset('/backoffice/css/font-face.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('/backoffice/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('/backoffice/vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('/backoffice/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{asset('/backoffice/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{asset('/backoffice/vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('/backoffice/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('/backoffice/vendor/wow/animate.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('/backoffice/vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('/backoffice/vendor/slick/slick.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('/backoffice/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('/backoffice/vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">
    <link href="https://unpkg.com/gijgo@1.9.11/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <!-- Main CSS-->
    <link href="{{asset('/backoffice/css/theme.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('/backoffice/css/style.css')}}" rel="stylesheet" media="all">

</head>

<body class="animsition">
<div class="page-wrapper">
    <!-- HEADER DESKTOP-->
    <header class="header-desktop3 d-none d-lg-block">
        <div class="section__content section__content--p35">
            <div class="header3-wrap">
                <div class="header__logo">
                    <a href="#">
                        <img src="{{asset('/backoffice/images/digitalFactory.png')}}" width="100" alt="digitalFactory" />
                    </a>
                </div>
                <div class="header__tool">
                    <a class="js-acc-btn" id="a-header-login" href="{{URL::to('admin')}}"> <i class="fas fa-sign-in-alt"></i>&nbsp; Login</a>
                </div>
            </div>
        </div>
    </header>
    <!-- END HEADER DESKTOP-->

    <!-- HEADER MOBILE-->
    <header class="header-mobile header-mobile-2 d-block d-lg-none">
        <div class="header-mobile__bar">
            <div class="container-fluid">
                <div class="header-mobile-inner">
                    <a class="logo" href="index.html">
                        <img src="{{asset('/backoffice/images/digitalFactory.png')}}" width="100" alt="digitalFactory" />
                    </a>
                    <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                    </button>
                </div>
            </div>
        </div>
        <nav class="navbar-mobile">
            <div class="container-fluid">
                <ul class="navbar-mobile__list list-unstyled">
                    <li class="has-sub">
                        <a class="js-arrow" href="#">
                            <i class="fas fa-sign-in-alt"></i>&nbsp; login</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- END HEADER MOBILE -->

    <!-- PAGE CONTENT-->
    <div class="page-content--bgf7">

        <!-- STATISTIC-->
        <section class="statistic statistic2" id="sectionPublicidades">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <h3 class="title-5 m-b-35">Publicidades</h3>
                        <div class="table-data__tool">

                            <div class="table-data__tool-left">
                                <div class="row">
                                    <div class="col">
                                        <div class="rs-select2--light rs-select2--md">
                                            <select class="js-select2" name="filterTitle">
                                                <option selected="selected">Pesquisar por </option>
                                                <option value="porTitulo">Titulo</option>
                                                <option value="porData">Data</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                    </div>
                                    
                                    <!-- ------------------ filter by date ------------------ -->
                                    <div class="col" id="id-datepicker">
                                        <input name="searchDatapicker" class="df-datepicker" id="input-datepicker" width="210" />
                                    </div>

                                    <!-- ------------------ filter by title ------------------ -->
                                    <div class="col" id="id-searchTitle">
                                        <input name="searchTitle" class="df-datepicker" id="input-searchTitle" width="210" />
                                    </div>
                                    
                                    <div class="col">
                                        <button id="btn-searchSubmitToDate" class="au-btn-filter">
                                            <i class="fas fa-search"></i>filters</button>
                                        </div>
                                    </div>
                                
                                </div> 
                            </div>

                            <div class="table-data__tool-right">
                                <!--Reservado para input de pesquisa-->
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row" id="error404Publicidade" style="display: none">
                    <div class="col-12" style="text-align: center">
                        <h1 style="color:rgba(0,0,0,0.2);"></h1>
                    </div>
                </div>
                <div class="row allItemPublicidade p-4">

                </div>
            </div>
        </section>
        <!-- END STATISTIC-->

        <!--FORMULARIO DESCRIPTION-->
        <section class="p-t-20" id="userOnPublicidade" style="display:none">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card shadow p-3 mb-5 bg-white rounded publicidade-descricao">
                            <div class="card-body">
                                <div class="card-title">
                                    <h3 class="text-center title-2 title-publicidade-request" style="text-transform:uppercase; font-weight:bold"></h3>
                                </div>
                                <hr>
                                

                                <div class="row">
                                    <div class="col-md-6 col-lg-6 col-sm-12">
                                        <div class="card">
                                            <img class='card-img-top itemPublicidade-img img-fluid' id="detalhe-publicidade-item-image" src=""  alt='Card image' >
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-sm-12">
                                        <div class="col-md-12 col-lg-12 col-sm-12">
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1 detalhe-publicidade-desc">Descrição</label>
                                                <div class="card">
                                                    <div class="card-body detalhe-publicidade-item" id="detalhe-publicidade-item-descricao" style="text-align:justify">
                                                        <p style="text-align:justify"></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-lg-12 col-sm-12">
                                            <div class="form-group">
                                                <label for="cc-exp" class="control-label mb-1 detalhe-publicidade-desc">Data de Publicidade</label>
                                                <div class="card">
                                                    <div class="card-body dtalhe-publicidade-item" id="detalhe-publicidade-item-dataPublicidade">
                                                        <p></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>

                                <div >
                                    <button type="button" class="btn btn-dark" data-dismiss="modal" style="color:rgb(254,204,22)" id="btn-publicidadeBack"><i class="fas fa-angle-left"></i>Voltar</button>
                                    <!--<button class="btn btn-dark" style="color:rgb(254,204,22)" data-toggle="modal" data-target="#modal-responder-publicidade">
                                        Responder a Vaga
                                    </button>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--END FORM DESCRIPTION-->


        <!-- COPYRIGHT-->
        <section class="p-t-60 p-b-20">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="copyright">
                            <p>Copyright © 2019 Daniel Almeida - danielosvaldoal@outlook.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END COPYRIGHT-->
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modal-responder-publicidade" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <!-- Start Form Modal  -->

                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalCenterTitle">Responder a Anúncio de Vaga</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control input-margin-b" id="nomeCandidato" placeholder="Nome*">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <input type="email" class="form-control input-margin-b" id="emailCandidato" placeholder="Email*">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-xl-6">
                            <input type="text" class="form-control input-margin-b" id="telemovelCandidato" placeholder="Telemovel*">
                        </div>
                        <div class="col-sm-12 col-md-6 col-xl-6">
                            <label class="btn btn-outline-dark" for="cvCandidato">Carregar Cv*</label>
                            <input style="visibility: hidden" type="file" id="cvCandidato" name="cvCandidato" class="form-control-file input-margin-b" value="">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="text-area-description">Descrição</label>
                                <textarea class="form-control" id="text-area-description" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
                    <button id="btn-responder-vaga" class="btn btn-add-publicidade btn-answer-modal">Responder</button>
                </div>

            <!-- End Form Modal -->
        </div>
    </div>
</div>
<!-- Modal End -->

<!-- Jquery JS-->
<script src="{{asset('/backoffice/vendor/jquery-3.2.1.min.js')}}"></script>
<!-- Bootstrap JS-->
<script src="{{asset('/backoffice/vendor/bootstrap-4.1/popper.min.js')}}"></script>
<script src="{{asset('/backoffice/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
<!-- Vendor JS       -->
<script src="{{asset('/backoffice/vendor/slick/slick.min.js')}}">
</script>
<script src="{{asset('/backoffice/vendor/wow/wow.min.js')}}"></script>
<script src="{{asset('/backoffice/vendor/animsition/animsition.min.js')}}"></script>
<script src="{{asset('/backoffice/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}">
</script>
<script src="{{asset('/backoffice/vendor/counter-up/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('/backoffice/vendor/counter-up/jquery.counterup.min.js')}}">
</script>
<script src="{{asset('/backoffice/vendor/circle-progress/circle-progress.min.js')}}"></script>
<script src="{{asset('/backoffice/vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
<script src="{{asset('/backoffice/vendor/chartjs/Chart.bundle.min.js')}}"></script>
<script src="{{asset('/backoffice/vendor/select2/select2.min.js')}}"></script>
<script src="{{asset('/backoffice/js/loadingoverlay.min.js')}}"></script>
<script src="https://unpkg.com/gijgo@1.9.11/js/gijgo.min.js" type="text/javascript"></script>


<!-- Main JS-->
<script src="{{asset('/backoffice/js/main.js')}}"></script>

<script src="{{asset('/backoffice/js/customCandidato.js')}}"></script>
<script src="{{asset('/backoffice/js/searchFormPublicidades.js')}}"></script>

<script>
    $(document).ajaxStart(function(){
        $.LoadingOverlay("show");
    });
    $(document).ajaxStop(function(){
        $.LoadingOverlay("hide");
    });

    $(document).ready(function(){

        $('#cvCandidato').change(function(){
            if($('#cvCandidato').val()!=""){
                $('#cvCandidato').prev().text("Cv Carregado")
                                .attr('class','btn btn-dark')
                                .css('color','rgb(254,204,22)');
            }else{
                $('#cvCandidato').prev().text("Carregar CV")
                                .attr('class','btn btn-outline-dark')
                                .css('color','rgb(255)');
            }
        });

        //FALTA VALIDAÇÃO
        $('#btn-responder-vaga').click(function(){
            var candidato = {
                nome:$('#nomeCandidato').val(),
                email:$('#emailCandidato').val(),
                telemovel:$('#telemovelCandidato').val(),
                cv: $('#cvCandidato').val(),
            };

            const getCvInfo = document.getElementById('cvCandidato').files[0];


            var infoCv = {
                name: getCvInfo.name,
                imgPath: $('#cvCandidato').val(),
                cvExten: getCvInfo.name.split('.').pop(),
            };

            console.log("==================", infoCv, "==================");
            

            var idPublicidade = $('#exampleModalCenterTitle').attr('data-publicidadeId');//Receber id Publicidade

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                method:'POST',
                url:"searchByEmail/candidato",
                data:{'email':candidato.email},
                dataType:'json',
                complete:function () {
                    $('#modal-responder-publicidade').modal('hide');
                },
                success: function (result)
                {
                    console.log(result);

                    if(!result){

                        $.ajax({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            method:'POST',
                            url:"insert/candidato",
                            data:{'candidato': candidato, 'infoCv': infoCv },
                            dataType:'json',
                            complete:function () {

                            },
                            success: function (result)
                            {
                                if(result!=false){
                                    console.log(result);
                                    var candidatoPublicidade = {
                                        idCandidato : result.id,
                                        idPublicidade : idPublicidade
                                    };

                                    $.ajax({
                                        headers: {
                                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                        },
                                        method:'POST',
                                        url:"insert/candidatoPublicidade",
                                        data:{'candidatoPublicidade':candidatoPublicidade},
                                        dataType:'json',
                                        complete:function () {

                                        },
                                        success: function (result)
                                        {
                                            console.log(result);
                                        }
                                    });
                                }
                            }
                        });

                    }
                    else{
                        var idCandidato = result[0].id;

                        var candidatoPublicidade = {
                            idCandidato : idCandidato,
                            idPublicidade : idPublicidade
                        };

                        $.ajax({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            method:'POST',
                            url:"insert/candidatoPublicidade",
                            data:{'candidatoPublicidade':candidatoPublicidade},
                            dataType:'json',
                            complete:function () {
                                $('#modal-responder-publicidade').modal('hide');
                            },
                            success: function (result)
                            {
                                console.log(result);
                            }
                        });
                    }

                    if(result){
                        $('#cvCandidato').prev().text("Carregar CV")
                            .attr('class','btn btn-outline-dark')
                            .css('color','rgb(255)');
                    }

                }
            });

        });
        //FALTA VALIDAÇÃO END
        $('#btn-publicidadeBack').click(function(){
            $('#userOnPublicidade').hide('100');
            $('#sectionPublicidades').show('100');
        });

        $('.itemOptions-candidatos').click(function() {
            $('#modal-responder-publicidade').modal('show');
        });

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            method:'POST',
            url:"search/publicidade",
            dataType:'json',
            success: function (result) {
                $('.allItemPublicidade').empty();

                if(!result)
                {
                    $('#error404Publicidade').css('display','block');
                    $('#error404Publicidade h1').text("Sem Publicidades a Apresentar!");
                }else {
                    $(result).each(function () {

                        $('.allItemPublicidade').append(
                            "<div class=\"col-md-6 col-lg-3 itemPublicidade\">" +
                            "<div class=\"card itemPublicidade-card\">" +
                            "<a href=''>" +

                            "<img class='card-img-top itemPublicidade-img img-fluid' src='"+ document.location.origin+'/finitoQ/public/backoffice/images/filesPublicidade/'+this.foto + "'  alt='Card image' >"+

                            "</a>" +
                            "<div class=\"card-body\">" +
                            "<h4 class=\"card-title itemPublicidade-titlte\">" + this.titulo + "</h4>" +

                            "<div class='description-card'>"+
                                "<p class=\"card-text itemPublicidade-description\" style=\"font-size: 12px; text-align: justify;\">" + this.descricao.substring(0, 87) + "...</p>" +
                            "</div>"+
                            /*<button class="btn btn-dark" style="color:rgb(254,204,22)" data-toggle="modal" data-target="#modal-responder-publicidade">
                                Responder a Vaga
                            </button>*/
                            "<div class=\"table-data-feature itemOptions\">" +
                            /*"<button class=\"btn btn-dark itemOptions-candidatos\" data-idPublicidade=\"" + this.id + "\" data-titlePublicidade=\"" + this.titulo + "\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Responder a Vaga\">" +
                            "<i class=\"zmdi zmdi-mail-send\"></i>" +
                            "</button>" +*/
                            "<button class=\"item item itemOptions-more\" data-idPublicidade=\"" + this.id + "\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Detalhes\">" +
                            "<i class=\"zmdi zmdi-more\"></i>" +
                            "</button>" +
                            /*"<button class=\"item item itemOptions-editar\" data-idPublicidade=\"" + this.id + "\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Partilhar no Facebook\">" +
                            "<i class=\"fab fa-facebook-f\"></i>" +
                            "</button>" +*/
                            "</div>" +
                            "</div>" +
                            "</div>" +
                            "</div>"
                        );
                    });
                }

                $(document).on('click', '.itemOptions-candidatos' , function() {
                    $('#modal-responder-publicidade').modal('show');
                    var idPublicidade = $(this).attr('data-idPublicidade');
                    $('#exampleModalCenterTitle').attr('data-publicidadeId',idPublicidade);
                });

                $(document).on('click', '.itemOptions-more' , function() {
                    var idPublicidade = $(this).attr('data-idPublicidade');

                    $('#exampleModalCenterTitle').attr('data-publicidadeId',idPublicidade);

                    $('#sectionPublicidades').hide('100');
                    $('#userOnPublicidade').show('100');

                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        method:'POST',
                        url:"searchById/publicidade",
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
                                $('.title-publicidade-request').text(result.titulo);
                                $('#detalhe-publicidade-item-descricao').text(result.descricao);
                                $('#detalhe-publicidade-item-dataPublicidade').text(result.created_at.split(' ')[0]);
                                $('#detalhe-publicidade-item-image').attr('src',document.location.origin+"/finitoQ/public/backoffice/images/filesPublicidade/"+result.foto);
                                console.log(result);
                            }
                        }
                    });
                });
                console.log(result);
            }
        });


    });

</script>

</body>

</html>
<!-- end document-->
