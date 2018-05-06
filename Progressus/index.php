


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>Progressus - Free business bootstrap template by GetTemplate</title>

	<link rel="shortcut icon" href="assets/images/gt_favicon.png">
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	
	<!-- Custom styles for our template -->
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	
	<link rel="stylesheet" href="assets/css/main.css">
<link rel="stylesheet" href="assets/css/bootstrap-theme.css">
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body class="home">
	<!-- Header -->
	<div class="row" style="background-color: blue;">
	<div id="head" style="height: 100%;">
		<div class="container">
			<div class="row">
				<h1 class="lead" style="margin-top: 2%;">Vamos entender seu momento?</h1>
			    <div class="">
			    	<br>
			        <h4>Informe o seu CPF:</h4>
			        <div class="col-md-12">
			        	<div class="row">
			        		<center>
			        		<input type="email" id="email" placeholder="09831969154" class="form-control text-center" style="width:90%;"/> <br>
			        		<button type="button" class="btn btn-primary" id="btnBuscarDivida">Buscar</button>
			        		</center>
			    		</div>
			    	</div>
			    </div>
			</div>

		    <div id="vlrDivida" style="display: none;">
				<h2 id="" style="">O valor atual da sua dívida é de R$ 3.000,00</h2>						
							
				<div class="container">
						
				        <form class="form-horizontal form-pricing" role="form">
				            <h4 style="color: black;">Quanto você pode pagar por mês?</h4>
				            <div class="price-slider">
				                <div class="col-sm-12">
				                    <div id="slider"></div>
				                </div>
				            </div>

				            <h4 style="color: black;">Em Quantas vezes?</h4>
				            <div class="price-slider">
				                <div class="col-sm-12">
				                    <div id="slider2"></div>
				                </div>
				            </div>

				                <div class="form-group" style="display: none;">
				                    <label for="amount" class="col-sm-6 control-label" style="color: black">Valor da parcela (R$): </label>
				                    <div class="col-sm-6">
				                        <input type="hidden" id="amount" class="form-control">
				                        <input type="hidden" id="amount2" class="form-control">
				                        <p class="price lead" id="amount-label" style="color: black"></p>
				                        <p class="price lead" id="amount-label2" style="color: black"></p>
				                        <span class="price" style="color: black">.00</span>
				                    </div>
				                </div>
				        </form>
				</div>
				<br><br>
				<p> <a id="enviarProposta" class="btn btn-action btn-lg" role="button">Enviar Proposta</a></p>
			</div>
			<br><br><br><br><br><br><br><br><br><br><br><br>
				
			</div>
		</div>
	</div>
	<br><br><br>
	</div>

	<!-- /Header -->
	
	<!-- /social links -->
		




	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
<link rel="stylesheet" href="https://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.10.4/jquery-ui.min.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>
	<script type="text/javascript">
		$(document).ready(function () {


		$("#btnBuscarDivida").click(function(){
			$("#vlrDivida").toggle( "slow", function() {

			});
		});

        $("#slider").slider({
            range: "min",
            animate: true,
            value: 3000,
            min: 5,
            max: 3000,
            step: 5,
            slide: function (event, ui) {
                update(1, ui.value); //changed
            }
        });

        $("#slider2").slider({
            range: "min",
            animate: true,
            value: 1,
            min: 1,
            max: 18,
            step: 1,
            slide: function (event, ui) {
                update2(1, ui.value); //changed
            }
        });

        //Added, set initial value.
        $("#amount").val(3000);
        $("#amount-label").text(1);

        $("#amount2").val(1);
        $("#amount-label2").text(1);

        update();
        update2();
    });

	function update(slider, val) {
    
        //changed. Now, directly take value from ui.value. if not set (initial, will use current value.)
        var $amount = slider == 1 ? val : $("#amount").val();

        /* commented
         $amount = $( "#slider" ).slider( "value" );
         $duration = $( "#slider2" ).slider( "value" );
         */

        $("#amount").val($amount);
        $("#amount-label").text($amount);

        $('#slider a').html('<label>' + $amount + '</label><div class="ui-slider-label-inner"></div>');
    }

    //changed. now with parameter
    function update2(slider, val) {  
    	
        //changed. Now, directly take value from ui.value. if not set (initial, will use current value.)
        var $amount = slider == 1 ? val : $("#amount2").val();

        /* commented
         $amount = $( "#slider" ).slider( "value" );
         $duration = $( "#slider2" ).slider( "value" );
         */
        $('#slider2 a').html('<label >' + $amount + '</label><div class="ui-slider-label-inner"></div>');
    }
	</script>

</body>
</html>