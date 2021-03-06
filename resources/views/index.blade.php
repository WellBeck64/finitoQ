<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Finito Q</title>
    <link rel="icon" href="{{asset('/backoffice/images/digitalFactory.png')}}" type="image/png">
    <!-- Bootstrap Core CSS -->
    <link href="{{asset('/homePage/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{asset('/backoffice/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('/homePage/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <!-- Plugin CSS -->
    <link href="{{asset('/homePage/vendor/magnific-popup/magnific-popup.css')}}" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="{{asset('/homePage/css/creative.css')}}" rel="stylesheet">
    <link href="{{asset('/homePage/css/customStyle.css')}}" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        /*.firstHidden{
            display: none;
        }*/

        .card {
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            transition: 0.3s;
            width: 100%;
            border-radius: 5px;
            background-color:#fff;
        }

        #detalhe-publicidade-item-descricao, #detalhe-publicidade-item-dataPublicidade{
            box-shadow:none;
        }

        #detalhe-publicidade-item-descricao:hover, #detalhe-publicidade-item-dataPublicidade:hover{
            box-shadow:none;
        }

        #detalhe-publicidade-item-image{
            height:350px;
            width:100%;
        }

        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
        }

        .pub-items-body {
            padding: 2px 16px;
        }

        .pub-items{
            margin-bottom:4%;
        }

        .pub-item-img{
            height:250px;
            border-radius: 5px 5px 0 0;
        }

        .pub-item-btn{
            width:55%; 
            margin-bottom:10px; 
            position:relative; 
            left:45%;
        }
        #publicidades{
            background: url("{{url('homePage/img/bg.png')}}");
            background-size: cover;
        }

        #contact{
            padding-top: 30px;
            padding-bottom: 20px;
        }
    </style>
</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" style="font-size:23px" href="#page-top">Finito Q</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#about" id="a-about">Quem Somos?</a>
                    </li>
                    <li>
                        <a class="page-scroll" id="a-publicidade" href="#publicidades">Publicidade</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contactos</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="{{URL::to('admin')}}" id="iconLogin"><i class="fas fa-user-circle fa-2x"></i></a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1 id="homeHeading">Markeeting Digital <br> Aumente as Vendas do Seu Negócio</h1>
                <hr>
                <p>Solicitando os nossos serviços, levaremos o seu negócio até milhares de pessoas do mundo Digital!</p>
                <a id="a-soliciteJa" href="#about" class="btn btn-primary btn-xl page-scroll">Solicite Já!</a>
            </div>
        </div>
    </header>

    <section style="background-color:#fff;" id="publicidades">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading" style="text-transform:uppercase;">Nossas Publicidades</h2>
                    <hr class="primary">
                </div>
            </div>
            <div id="data-container"></div>
            <div id="pagination-container"></div>
        </div>
    </section>

    <section class="bg-primary firstHidden" id="about">
        <div class="container">
            <div class="row">
                <!--<div class="col-lg-4 text-center">
                    <h2 class="section-heading">Quem Somos?</h2>
                    <hr class="light">
                    <p class="text-faded">Somos uma Empresa  Especializada em Markeeting Digital, nomeadamente em Publicidade e Gerenciamento de mídias sociais.<br><br> A Finito Q. Markeeting Digital Soluction, surge no inicio de 2018, com o objectivo de reduzir os custos com publicidades dos nossos clientes.<br><br>A sua Visão é ser reconhecida como a melhor empresa de markeeting digital que oferece as melhores soluções a baixo custos para as empresas nos proximos 3 anos.</p>
                    <a href="#services" class="page-scroll btn btn-default btn-xl sr-button">Get Started!</a>
                </div>-->
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Quem Somos?</h2>
                    <hr class="light">
                    <p>Somos uma Empresa  Especializada em Markeeting Digital, nomeadamente em Publicidade e Gerenciamento de mídias sociais.<br><br> A Finito Q. Markeeting Digital Soluction, surge no inicio de 2018, com o objectivo de reduzir os custos com publicidades dos nossos clientes.<br><br>A sua Visão é ser reconhecida como a melhor empresa de markeeting digital que oferece as melhores soluções a baixo custos para as empresas nos proximos 3 anos.</p>
                    <a href="#services" id="btnAboutus" class="page-scroll btn btn-default btn-xl sr-button">O Que Fazemos</a>
                </div>
            </div>
        </div>
    </section>

    <section id="services" class="firstHidden">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading" style="text-transform:uppercase;">O Que Fazemos</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 text-center" >
                    <div class="service-box">
                        <i class="fa fa-4x fa-newspaper-o text-primary sr-icons" id="i-newspaper"></i>
                        <h3>Publicidade</h3>
                        <p class="text-muted">Engajar clientes ou colaboradores e aumentar o alcance das marcas, empresas, negocios pessoas individuais em 300 pessoas por dia.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 text-center" style="border-left:1px solid rgb(234,129,2)">
                    <div class="service-box">
                        <i class="far fa-gem fa-4x text-primary sr-icons animated infinite pulse delay-2s" id="i-fa-gem"></i>
                        <h3>Gerenciamento de Mídias Sociais</h3>
                        <p class="text-muted">Processo interactivo de relacionamento , gerenciamento da presença online, melhoria e afirmação da imagem que vai desde planejamento de postagens, produção de conteúdo e monitoramento dos resultados.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <aside class="bg-dark firstHidden">
        <div class="container text-center">
            <div class="call-to-action">
                <h2>Existem mais Produtos Interesantes para Você</h2>
                <a href="{{URL::to('publicidade')}}" class="btn btn-default btn-xl sr-button">Veja Mais!</a>
            </div>
        </div>
    </aside>

    <section id="contact" class="bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Vamos Entrar Em Contacto!</h2>
                    <hr class="primary">
                    <p>
                        Pronto para começar seu próximo projeto conosco? Isso é ótimo! Ligue para nós ou envie-nos um e-mail e entraremos em contato o mais breve possível!
                    </p>
                </div>
                <div class="col-lg-3 text-center div-sr-contact">
                    <i id="sr-contact-phone" class="fas fa-phone-square fa-3x sr-contact"></i>
                    <p>+244 998-980-780</p>
                    <p>+244 998-617-373</p>
                </div>
                <div class="col-lg-3 text-center div-sr-contact">
                    <i id="sr-contact-envelope" class="far fa-envelope fa-3x sr-contact div-sr-contact"></i>
                    <p><a href="mailto:finitoq@gmail.com">FinitoQ@gmail.com</a></p>
                </div>
                <div class="col-lg-3 text-center div-sr-contact">
                    <i id="sr-contact-facebook" class="fab fa-facebook-square fa-3x sr-contact"></i>
                    <p><a href="https://www.facebook.com/FinitoQ.marketing/">Finito Q</a></p>
                </div>
                <div class="col-lg-3 text-center div-sr-contact">
                    <i id="sr-contact-instagram" class="fab fa-instagram fa-3x sr-contact"></i>
                    <p>Finitoq._markeeting_digital</p>
                </div>
            </div>
        </div>
    </section>


    <!-- Modal -->
    <div id="modal-detalhe-pub" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title" id="modal-title" style="text-transform:uppercase;font-weight:bold">Modal Header</h3>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12" style="margin-bottom:5%">
                                <img class="img-fluid"src="" id="detalhe-publicidade-item-image" alt="" style="max-width: 100%;height: auto;">
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Descrição</label>
                                    <div class="card" id="detalhe-publicidade-item-descricao" style="text-align:justify">
                                        <div class="pub-items-body">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Data</label>
                                    <div class="card" id="detalhe-publicidade-item-dataPublicidade" style="text-align:justify">
                                        <div class="pub-items-body">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>
<!--End Modal-->

<!-- Modal -->

    <div class="modal fade" id="modal-responder-publicidade" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Solicitar Este Serviço</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="input-group" style="margin-bottom:1%">
                    <span class="input-group-addon"><i class="fas fa-user-tie"></i></i></span>
                    <input id="add-solicitar-nome" type="text" class="form-control" name="add-solicitar-nome" placeholder="Nome">
                </div>

                <div class="input-group" style="margin-bottom:1%">
                    <span class="input-group-addon"><i class="fas fa-envelope"></i></i></span>
                    <input id="add-solicitar-email" type="text" class="form-control" name="add-solicitar-email" placeholder="Email">
                </div>

                <div class="input-group" style="margin-bottom:1%">
                    <span class="input-group-addon"><i class="fas fa-phone"></i></i></span>
                    <input id="add-solicitar-telemovel" type="text" class="form-control" name="add-solicitar-telemovel" placeholder="Telemovel">
                </div>

                <div class="form-group">
                    <label for="comment">Descrição:</label>
                    <textarea class="form-control" rows="5" id="add-solicitar-descricao"></textarea>
                </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-dark" id="add-solicitar-btn">Solicitar</button>
            </div>

            </div>
        </div>
    </div>
<!-- Modal End -->

    <!-- jQuery -->
    <script src="{{asset('/homePage/vendor/jquery/jquery.min.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('/homePage/vendor/bootstrap/js/bootstrap.min.js')}}"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="{{asset('/homePage/vendor/scrollreveal/scrollreveal.min.js')}}"></script>
    <script src="{{asset('/homePage/vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>

    <!-- Theme JavaScript -->
    <script src="{{asset('/js/pagination.min.js')}}"></script>
    <script src="{{asset('/homePage/js/creative.min.js')}}"></script>
    <script src="{{asset('/backoffice/js/loadingoverlay.min.js')}}"></script>

    <script>

        $(document).ready(function(){
            $(document).ajaxStart(function(){
                $.LoadingOverlay("show");
            });
            $(document).ajaxStop(function(){
                $.LoadingOverlay("hide");
            });
            //SOLICITAR
            $('#add-solicitar-btn').click(function(){
                let userAvaliable = {
                    name:$('#add-solicitar-nome').val(),
                    email:$('#add-solicitar-email').val(),
                    telemovel:$('#add-solicitar-telemovel').val(),
                    descricao:$('#add-solicitar-descricao').val(),
                    //emailClient:$('#modal-responder-publicidade').attr('data-emailCliente')
                    emailClient:'daniel20150154@outlook.com'
                }
                console.log(userAvaliable);
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    method:'POST',
                    url: 'send/mail',
                    dataType:'json',
                    data:{'userAvaliable':userAvaliable},
                    success: function(response) {
                        $('#modal-responder-publicidade').modal('hide');
                    }
                });
            })

            //CAROUSEL
            $('.carousel[data-type="multi"] .item').each(function(){
                var next = $(this).next();
                if (!next.length) {
                    next = $(this).siblings(':first');
                }
                next.children(':first-child').clone().appendTo($(this));
                
                for (var i=0;i<2;i++) {
                    next=next.next();
                    if (!next.length) {
                        next = $(this).siblings(':first');
                    }
                    
                    next.children(':first-child').clone().appendTo($(this));
                }
            });
            //CAROUSEL END

            function simpleTemplating(data) {
                var html = '<div class="row publicidade-destaque">';
                
                $(data).each(function(){
                    html += "<div class=\"col-md-4 pub-items\">"+
                                "<div class=\"card\">"+
                                    "<img class=\"pub-item-img img-fluid\" src='"+document.location.origin+'/finitoQ/public/backoffice/images/filesPublicidade/'+this.foto +"' alt=\"Avatar\" style=\"max-width: 100%;width:100%\">"+
                                    "<div class=\"pub-items-body\">"+
                                        "<h4><b>"+this.titulo+"</b></h4>"+ 
                                        "<p>"+this.descricao.substring(0, 87)+"...</p>"+ 
                                        "<div class=\"pub-item-btn\">"+
                                            "<button class=\"btn btn-default pub-item-btn-detalhe\" data-idPublicidade=\""+this.id+"\">Ver Detalhes</button>"+
                                            "<button class=\"btn btn-default pub-item-btn-solicitar\" data-email=\""+this.email+"\" data-toggle=\"tooltip\" title=\"Solicitar Serviço\"> <i class=\"fa fa-paper-plane\" aria-hidden=\"true\"></i></button>"+
                                        "</div>"+ 
                                    "</div>"+
                                "</div>"+
                            "</div>";
                });
                html += '</div>';
                return html;
            }

            $('#pagination-container').pagination({
                dataSource: function(done) {
                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        method:'POST',
                        url: 'search/publicidade',
                        dataType:'json',
                        success: function(response) {
                            console.log(response);
                            done(response);
                        }
                    });
                },
                pageSize: 6,
                callback: function(data, pagination) {
                    var html = simpleTemplating(data);
                    $('#data-container').html(html);
                }
            })

            /*
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
                        
                    }else {
                        //result
                        $('.publicidade-destaque').empty();
                        console.log(result);
                        $(result).each(function(){
                        
                            $('.publicidade-destaque').append(
                                "<div class=\"col-md-4 pub-items\">"+
                                    "<div class=\"card\">"+
                                        "<img class=\"pub-item-img img-fluid\" src='"+document.location.origin+'/finitoQ/public/backoffice/images/filesPublicidade/'+this.foto +"' alt=\"Avatar\" style=\"max-width: 100%;width:100%\">"+
                                        "<div class=\"pub-items-body\">"+
                                            "<h4><b>"+this.titulo+"</b></h4>"+ 
                                            "<p>"+this.descricao.substring(0, 87)+"...</p>"+ 
                                            "<div class=\"pub-item-btn\">"+
                                                "<button class=\"btn btn-default pub-item-btn-detalhe\" data-idPublicidade=\""+this.id+"\">Ver Detalhes</button>"+
                                                "<button class=\"btn btn-default pub-item-btn-solicitar\" data-toggle=\"tooltip\" title=\"Solicitar Serviço\"> <i class=\"fa fa-paper-plane\" aria-hidden=\"true\"></i></button>"+
                                            "</div>"+ 
                                        "</div>"+
                                    "</div>"+
                                "</div>"
                            );
                        });
                    }
                }
            });
            */

            $(document).on('click', '.pub-item-btn-solicitar' , function() {
                $('#modal-responder-publicidade').modal('show');
                var idPublicidade = $(this).attr('data-idPublicidade');
                $('#modal-responder-publicidade').attr('data-publicidadeId',idPublicidade);
                $('#modal-responder-publicidade').attr('data-emailCliente',$(this).attr('data-email'));
                
            });
        

            $(document).on('click', '.pub-item-btn-detalhe' , function() {
                $('#modal-detalhe-pub').modal('show');
                var idPublicidade = $(this).attr('data-idPublicidade');
                $('#modal-detalhe-pub').attr('data-publicidadeId',idPublicidade);

                $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        method:'POST',
                        url:"searchById/publicidade",
                        data:{'idPublicidade':idPublicidade},
                        dataType:'json',
                        success: function (result) {
                            if(!result){
                               
                            }else {
                                $('#modal-title').text(result.titulo);
                                $('#detalhe-publicidade-item-descricao div').text(result.descricao);
                                $('#detalhe-publicidade-item-dataPublicidade div').text(result.created_at.split(' ')[0]);
                                $('#detalhe-publicidade-item-image').attr('src',document.location.origin+"/finitoQ/public/backoffice/images/filesPublicidade/"+result.foto);
                            }
                        }
                    });
            });

            $('#iconLogin').mouseover(function(){
                animateCSS('#iconLogin', 'bounce');
            })

            $('#a-soliciteJa').mouseover(function(){
                animateCSS('#a-soliciteJa', 'swing');
            })

            $('#sr-contact-phone').mouseover(function(){
                animateCSS('#sr-contact-phone', 'swing');
            })

            $('#sr-contact-envelope').mouseover(function(){
                animateCSS('#sr-contact-envelope', 'swing');
            })

            $('#sr-contact-facebook').mouseover(function(){
                animateCSS('#sr-contact-facebook', 'swing');
            })

            $('#sr-contact-instagram').mouseover(function(){
                animateCSS('#sr-contact-instagram', 'swing');
            })

            $('#a-about').click(function(){
                $('#publicidades').hide();
                $('#about,#services').show();
            });

            $('#a-publicidade').click(function(){
                $('#publicidades').show();
                $('#about,#services').hide();
            });

            function animateCSS(element, animationName, callback) {
                const node = document.querySelector(element)
                node.classList.add('animated', animationName)

                function handleAnimationEnd() {
                    node.classList.remove('animated', animationName)
                    node.removeEventListener('animationend', handleAnimationEnd)

                    if (typeof callback === 'function') callback()
                }

                node.addEventListener('animationend', handleAnimationEnd)
            }

            setInterval(function(){ 
                animateCSS('#i-newspaper', 'bounce');
                animateCSS('#btnAboutus', 'rubberBand');
                animateCSS('#a-soliciteJa', 'swing');
            }, 5000);

        })
    </script>

</body>

</html>
