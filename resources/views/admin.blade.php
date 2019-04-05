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

    <!-- Main CSS-->
    <link href="{{asset('/backoffice/css/theme.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('/backoffice/css/style.css')}}" rel="stylesheet" media="all">
    <style>
        .header__navbar ul li a:hover {
            color:rgb(234,129,2);
        }
        .list-menu:hover{
            color:rgb(234,129,2);
        }
    </style>
</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER DESKTOP-->
        <header class="header-desktop3 d-none d-lg-block">
            <div class="section__content section__content--p35">
                <div class="header3-wrap">
                    <div class="header__logo">
                        <a href="">
                            <img src="{{asset('/backoffice/images/digitalFactory.png')}}" width="100" alt="digitalFactory" />
                        </a>
                    </div>
                    <div class="header__navbar">
                        <ul class="list-unstyled">
                            <li class="list-menu">
                                <a href="#" id="all-publicities">
                                    <i class="far fa-newspaper"></i>
                                    <span class="bot-line"></span>Publicidades
                                </a>
                            </li class="list-menu">
                            <li>
                                <a href="#" id="all-clientes">
                                    <i class="fas fa-users"></i>
                                    <span class="bot-line"></span>Clientes</a>
                            </li>
                            
                            <li class="has-sub">
                                <a href="#">
                                    <i class="fas fa-trash-alt"></i>
                                    <span class="bot-line"></span>Reciclagem
                                </a>
                            </li>
                            <!--
                                <li class="has-sub">
                                    <a href="#">
                                        <i class="fas fa-desktop"></i>
                                        <span class="bot-line"></span>UI Elements</a>
                                    <ul class="header3-sub-list list-unstyled">
                                        <li>
                                            <a href="button.html">Button</a>
                                        </li>
                                        <li>
                                            <a href="badge.html">Badges</a>
                                        </li>
                                        <li>
                                            <a href="tab.html">Tabs</a>
                                        </li>
                                        <li>
                                            <a href="card.html">Cards</a>
                                        </li>
                                        <li>
                                            <a href="alert.html">Alerts</a>
                                        </li>
                                        <li>
                                            <a href="progress-bar.html">Progress Bars</a>
                                        </li>
                                        <li>
                                            <a href="modal.html">Modals</a>
                                        </li>
                                        <li>
                                            <a href="switch.html">Switchs</a>
                                        </li>
                                        <li>
                                            <a href="grid.html">Grids</a>
                                        </li>
                                        <li>
                                            <a href="fontawesome.html">FontAwesome</a>
                                        </li>
                                        <li>
                                            <a href="typo.html">Typography</a>
                                        </li>
                                    </ul>
                                </li>
                            -->
                        </ul>
                    </div>
                    
                    <div class="header__tool">
                    <!--
                        <div class="header-button-item has-noti js-item-menu">
                            <i class="zmdi zmdi-notifications"></i>
                            <div class="notifi-dropdown notifi-dropdown--no-bor js-dropdown">
                                <div class="notifi__title">
                                    <p>You have 3 Notifications</p>
                                </div>
                                <div class="notifi__item">
                                    <div class="bg-c1 img-cir img-40">
                                        <i class="zmdi zmdi-email-open"></i>
                                    </div>
                                    <div class="content">
                                        <p>You got a email notification</p>
                                        <span class="date">April 12, 2018 06:50</span>
                                    </div>
                                </div>
                                <div class="notifi__item">
                                    <div class="bg-c2 img-cir img-40">
                                        <i class="zmdi zmdi-account-box"></i>
                                    </div>
                                    <div class="content">
                                        <p>Your account has been blocked</p>
                                        <span class="date">April 12, 2018 06:50</span>
                                    </div>
                                </div>
                                <div class="notifi__item">
                                    <div class="bg-c3 img-cir img-40">
                                        <i class="zmdi zmdi-file-text"></i>
                                    </div>
                                    <div class="content">
                                        <p>You got a new file</p>
                                        <span class="date">April 12, 2018 06:50</span>
                                    </div>
                                </div>
                                <div class="notifi__footer">
                                    <a href="#">All notifications</a>
                                </div>
                            </div>
                        </div>
                    -->
                        <div class="account-wrap">
                            <div class="account-item account-item--style2 clearfix js-item-menu">
                                <div class="content">
                                    <a class="js-acc-btn" href="#"> <i class="fas fa-unlock-alt"></i>&nbsp Administrador</a>
                                </div>
                                <div class="account-dropdown js-dropdown">
                                    <div class="account-dropdown__footer">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <i class="zmdi zmdi-power"></i>
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
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
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                <i class="zmdi zmdi-power"></i>
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE -->

        <!-- PAGE CONTENT-->
        <div class="page-content--bgf7">
            <!-- BREADCRUMB-->

            <!-- END BREADCRUMB-->

            <!-- WELCOME-->

            <!-- END WELCOME-->

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

                            <div class="table-data__tool-right">
                                <button class="au-btn au-btn-icon au-btn--green au-btn--small" style="background-color:rgba(0,0,0,0.8)" data-toggle="modal" data-target="#modal-add-publicidades">
                                    <i class="zmdi zmdi-plus" style="color:rgb(254,204,22)"></i>add publicidade
                                </button>
                            </div>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="modal-add-publicidades" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">

                                <!-- Start Form Modal  -->

                                <form id="publicidadeForm" method="post" action="{{ URL::to('insert/publicidade') }}" enctype="multipart/form-data" >
                                  @method('POST')
                                  @csrf

                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalCenterTitle">Adicionar Publicidade</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>

                                  <div class="modal-body">
                                    <div class="row">
                                      <div class="col">
                                        <input type="text" class="form-control input-margin-b" id="publicidadeTitulo" name="publicidadeTitulo" placeholder="Titulo">
                                      </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="publicidadeClient">Selecione o Cliente</label>
                                                <select class="form-control input-margin-b" id="publicidadeClient" name="publicidadeClient">
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                      <div class="col">
                                        <div class="form-group">
                                          <label for="publicidadeDescription">Descrição</label>
                                          <textarea class="form-control" id="publicidadeDescription" name="publicidadeDescription" rows="3"></textarea>
                                        </div>
                                      </div>
                                    </div>

                                    <div class="row">
                                      <div class="col">
                                        <label for="publicidadeFoto" class="btn btn-dark btn-default-df input-margin-b">Carregar Imagem</label>
                                        <input type="file" id="publicidadeFoto" name="publicidadeFoto" class="hidden" >
                                      </div>

                                      <div class="col">
                                        <div class="response-preview-image">
                                          <img id="blah" src="#" class="img-fluid" alt="Preview Imagem do Publicidade" />
                                        </div>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
                                    <button type="submit" class="btn btn-add-publicidade" id="publicidadeSubmit" disabled="disabled" >Adicionar</button>
                                  </div>

                                </form>
                                <!-- End Form Modal -->

                            </div>
                          </div>
                        </div>
                        <!-- Modal End -->

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
            <!-- STATISTIC CHART-->

            <!-- END STATISTIC CHART-->

            <!-- DATA TABLE-->
            <section class="p-t-20" id="userOnPublicidade" style="display:none">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <button class="btn btn-default" style="margin-bottom:2%" id="btn-publicidadeBack">
                                <i class="fas fa-arrow-left fa-2x" style="color:rgba(0,0,0,0.5)"></i>
                            </button>
                            <div class="table-data__tool">
                                <div class="table-data__tool-left" >
                                    <h3 class="title-5 m-b-35 title-publicidade-request">Clientes</h3>
                                </div>
                                <div class="table-data__tool-left">
                                    <div class="rs-select2--light rs-select2--md">
                                        <select class="js-select2" name="property">
                                            <option selected="selected">Opção</option>
                                            <option value="">Option 1</option>
                                            <option value="">Option 2</option>
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                    <div class="rs-select2--light rs-select2--sm">
                                        <select class="js-select2" name="time">
                                            <option selected="selected">Today</option>
                                            <option value="">3 Days</option>
                                            <option value="">1 Week</option>
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                    <button class="au-btn-filter">
                                        <i class="zmdi zmdi-filter-list"></i>filters
                                    </button>
                                </div>
                                <div class="table-data__tool-right">
                                    <button class="au-btn au-btn-icon au-btn--green au-btn--small" style="background-color:rgba(0,0,0,0.8)" data-toggle="modal" data-target="#modal-add-clientes">
                                        <i class="zmdi zmdi-plus" style="color:rgb(254,204,22)"></i>add Clientes
                                    </button>
                                </div>
                            </div>
                            <div class="table-responsive table-responsive-data2 div-table-cliente-request">
                                    <div class="row" id="error404" style="display: none">
                                        <div class="col-12" style="text-align: center">
                                            <h1 style="color:rgba(0,0,0,0.2);"></h1>
                                        </div>
                                    </div>

                                    <table class="table table-data2 table-cliente-request">
                                        <thead>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END DATA TABLE-->

            <!-- COPYRIGHT-->
            <section class="p-t-60 p-b-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright">
                                <p>Copyright © 2019 Daniel Almeida. All rights reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END COPYRIGHT-->
        </div>

    </div>


    <!-------------------------------------------------------------------------------------------------------------------------------------->
    
    <div class="modal fade" id="modal-add-clientes" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Add Cliente</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" ><i class="fas fa-user"></i></span>
                    </div>
                    <input type="text" id="add-cliente-nome" class="form-control" placeholder="Nome" aria-label="Username" aria-describedby="basic-addon1">
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                    </div>
                    <input type="text" class="form-control" id="add-cliente-email" placeholder="Email" aria-label="Username" aria-describedby="basic-addon1">
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" ><i class="fas fa-mobile-alt"></i></span>
                    </div>
                    <input type="text" class="form-control" id="add-cliente-telemovel" placeholder="Telemovel" aria-label="Username" aria-describedby="basic-addon1">
                </div>

                <div class="mb-3">
                    <label for="publicidadeDescription">Descrição</label>
                    <textarea class="form-control" id="add-cliente-desc" name="publicidadeDescription" rows="3"></textarea>
                </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-dark" id="add-cliente-btn">Adicionar</button>
            </div>

            </div>
        </div>
    </div>
    
    <!-------------------------------------------------------------------------------------------------------------------------------------->



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
    <!-- Main JS-->
    <script src="{{asset('/backoffice/js/main.js')}}"></script>

    <script src="{{asset('/backoffice/js/searchForm.js')}}"></script>
    <script src="{{asset('/backoffice/js/updatePublicidade.js')}}"></script>

    <script>
        $(document).ajaxStart(function(){
            $.LoadingOverlay("show");
        });
        $(document).ajaxStop(function(){
            $.LoadingOverlay("hide");
        });


        $(document).ready(function(){
            
           //GET CLIENTS 
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                method:'POST',
                url:"searchAllCliente/clientePublicidade",
                dataType:'json',
                success: function (result) {
                    $('#publicidadeClient').empty();
                    
                    if(!result){
                        console.log(result);
                    }else {
                        
                        /*$('#publicidadeClient').append(
                            '<option value="">Selecione o Cliente</option>'
                        );*/
                        
                        $(result).each(function () {
                            $('#publicidadeClient').append(
                                '<option value="'+this.id+'">'+this.nome+'</option>'
                            );
                        });
                        
                    }
                }
            });

            //END GET CLIENTS

            $('.itemOptions').click(function(){
                $('#sectionPublicidades').hide('100');
                $('#userOnPublicidade').show('100');
            });

            $('#btn-publicidadeBack').click(function(){
                $('#userOnPublicidade').hide('100');
                $('#sectionPublicidades').show('100');
            });
            
            //ADD CLIENTE
            $('#add-cliente-btn').click(function(){
                var cliente = {
                    nome:$('#add-cliente-nome').val(),
                    email:$('#add-cliente-email').val(),
                    telemovel:$('#add-cliente-telemovel').val(),
                    desc:$('#add-cliente-desc').val(),
                };

                console.log(cliente);

                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    method:'POST',
                    url:"insert/cliente",
                    data:{'cliente':cliente},
                    dataType:'json',
                    complete: function(){
                        $('#modal-add-clientes').modal('hide')
                    } ,
                    success: function (result) {
                        console.log(result);
                        if(!result){
                            
                        }else {
                            $.ajax({
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                },
                                method:'POST',
                                url:"searchAllCliente/clientePublicidade",
                                dataType:'json',
                                success: function (result) {
                                    $('.table-cliente-request thead').empty();
                                    $('.table-cliente-request tbody').empty();
                                    console.log(result);
                                    if(!result){
                                        $('#error404').css('display','block');
                                        $('#error404 h1').text("Nenhum cliente Respondeu a essa Vaga!");
                                    }else {
                                        $('#error404').css('display','none');
                                        $('.table-cliente-request thead').append(
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
                                            $('.table-cliente-request tbody').append(
                                                "<tr class=\"tr-shadow\">" +
                                                "<td>"+i+"</td>" +
                                                "<td>" + this.nome + "</td>" +
                                                "<td>" +
                                                "<span class=\"block-email\">" + this.email + "</span>" +
                                                "</td>" +
                                                "<td>" + this.telemovel + "</td>" +
                                                "<td class=\"desc\">Samsung S8 Black</td>" +
                                                "<td>"+this.created_at+"</td>" +
                                                "</tr>" +
                                                "<tr class=\"spacer\"></tr>"
                                            );
                                            i++;
                                        });
                                    }
                                }
                            });
                        }
                    }
                });
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

            $("#publicidadeFoto").change(function() {
                $('.response-preview-image').css('display','block');
                readURL(this);
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
                    $('#error404Publicidade h1').text("Adicione Publicidades!");
                    }else {

                        $( "body" ).append( "<div id='createModalUpdate'></div>" );

                        $(result).each(function () {
                            console.log(this.foto)
                            //var srcfoto = '{{asset('/backoffice/images/filesPublicidade/this.foto')}}';
                            if(this.foto==""){
                                var srcfoto = document.location.origin+'/finitoQ/public/backoffice/images/filesPublicidade/'+this.foto;
                            }else{
                                var srcfoto = document.location.origin+'/finitoQ/public/backoffice/images/filesPublicidade/'+this.foto;
                            }
                            
                            $('.allItemPublicidade').append(

                                "<div class=\"col-md-6 col-lg-3 itemPublicidade\">" +
                                "<div class=\"card itemPublicidade-card shadow\">" +

                                "<a href=\"\">" +
                                
                                "<img class='card-img-top itemPublicidade-img img-fluid' src=\""+srcfoto+"\"  alt='Card image' style='max-width: 100%; height: auto;'>"+

                                "</a>" +
                                "<div class=\"card-body\">" +
                                "<h4 class=\"card-title itemPublicidade-titlte\">" + this.titulo + "</h4>" +
                                "<div class='description-card'>"+
                                    "<p class=\"card-text itemPublicidade-description\">" +  this.descricao.trimToLength(87) + "</p>" +
                                "</div>"+
                                "<div class=\"table-data-feature itemOptions\">" +
                                "<button class=\"item itemOptions-clientes\" data-idPublicidade=\"" + this.id + "\" data-id='"+this.id+"' data-titlePublicidade=\"" + this.titulo + "\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Ver Clientes\">" +
                                "<i class=\"fas fa-users\"></i>" +
                                "</button>" +

                                // ======================== INCLUDE UPDATE Publicidade ==========================
                                // updatePublicidade(this);
                                // ==========================================================================

                                "<button onclick='openModalUpdate(this)' data-toggle=\"modal\" data-target=\"#update-"+this.id+"-modal\" data-fotoName=\""+this.foto+"\" data-titulo=\""+this.titulo+"\" data-descricao=\""+this.descricao+"\" data-responsabilidades=\""+this.responsabilidades+"\" data-competencias=\""+this.competencias+"\" data-foto=\""+ document.location.origin+'/backoffice/images/filesPublicidades/'+this.foto +"\" class=\"item item itemOptions-editar\" data-idPublicidade=\"" + this.id + "\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editar\">" +
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
            });

            $('#all-publicities').click(function(){
                location.reload();
            });

            $('#all-clientes').click(function() {

                $('#sectionPublicidades').hide('100');
                $('#userOnPublicidade').show('100');
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    method:'POST',
                    url:"searchAllCliente/clientePublicidade",
                    dataType:'json',
                    success: function (result) {
                        $('.table-cliente-request thead').empty();
                        $('.table-cliente-request tbody').empty();
                        console.log(result);
                        if(!result){
                            $('#error404').css('display','block');
                            $('#error404 h1').text("Nenhum cliente Respondeu a essa Vaga!");
                        }else {
                            $('#error404').css('display','none');
                            $('.table-cliente-request thead').append(
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
                                $('.table-cliente-request tbody').append(
                                    "<tr class=\"tr-shadow\">" +
                                    "<td>"+i+"</td>" +
                                    "<td>" + this.nome + "</td>" +
                                    "<td>" +
                                    "<span class=\"block-email\">" + this.email + "</span>" +
                                    "</td>" +
                                    "<td>" + this.telemovel + "</td>" +
                                    "<td class=\"desc\">Samsung S8 Black</td>" +
                                    "<td>"+this.created_at+"</td>" +
                                    "</tr>" +
                                    "<tr class=\"spacer\"></tr>"
                                );
                                i++;
                            });
                        }
                    }
                });
            });
        });

        /*
        ===================================================================
        ==================== VALDATE FORM ADD PublicidadeS ====================
        -------------------------------------------------------------------
        */

        var toValidate = jQuery('#publicidadeTitulo, #publicidadeDescription'),

        valid = false;

        toValidate.keyup(function () {

            if (jQuery(this).val().length > 0) {
                jQuery(this).data('valid', true);
            } else {
                jQuery(this).data('valid', false);
            }

            toValidate.each(function () {
                if (jQuery(this).data('valid') == true) {
                    valid = true;
                } else {
                    valid = false;
                }
            });

            if (valid === true) {
                jQuery("#publicidadeSubmit").prop('disabled', false);
            } else {
                jQuery("#publicidadeSubmit").prop('disabled', true);
            }

        });

        /*
        ===================================================================
        ================== END VALDATE FORM ADD publicidadeS ==================
        -------------------------------------------------------------------
        */
    </script>

</body>

</html>
<!-- end document-->
