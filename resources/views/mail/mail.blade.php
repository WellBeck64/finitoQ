<!DOCTYPE html>  
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Digital Factory</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="A liderar o movimento digital em Angola" />
    <meta name="keywords" content="Digital, Factory, Fábrica, Digital" />
    <meta name="author" content="Digital Factory" />
</head>
<body style="background: #fff;">
    <div class="fh5co-loader"></div>
    <div id="loading"></div>
    <div id="page-contact">
        
        <hr style="clear: both; border: 1px solid white;">
        <div class="container">
            <h1 class="text-left" style="margin-top: -40px; width: 80%; margin-left: 14px; color: gray; font-size: 50px; border-bottom: 16px solid #FFCE00;"><b>FINITO Q</b></h1><br>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <h5 style="font-size:16px">Ola, Somos a <b>Finito Q - Marketing Digital</b><br/> Recebeu uma Solicitação dos seus Serviços.</h5>
                </div>
                <div class="form-group col-md-12">
                    <h5 style="font-size:16px">Nome: {{$contacto->name}}</h5>
                </div>
                <div class="form-group col-md-12">
                    <h5 style="font-size:16px">Email: {{$contacto->email}}</h5>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <h5 style="font-size:16px">Telefone : {{$contacto->telemovel}}</h5>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <h5 style="font-size:16px">Descrição:</h5>
                    <h5 style="font-size:16px">{{$contacto->descricao}}</h5>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

