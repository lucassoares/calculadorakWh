<?php
	$dias = isset($_POST['dias'])  ? $_POST['dias'] : '';
	$horas = isset($_POST['horas']) ? $_POST['horas'] : '';
	$watts = isset($_POST['watts']) ? $_POST['watts'] : '';
	$total = ($watts * $horas * $dias) / 1000;
?>

<html>
    
    <head>
        <meta charset="utf-8">
        <title>
            Calculadora de consumo de energia
        </title>
        <style type="text/css">
        	/*  Style desenvolvido por Lucas Soares */
body,html{
	height: 100%;
	 min-height: 100%;
	 padding: 0;
	 margin:0;
}
body{
	background-color: #636363;
	color: white;
	font-family: Helvetica, arial, sans-serif;
}
h1{
	font-size: 60px;
	color: #323232;
	text-align: center;
}
input{
	padding: 12px 20px;
	font-size: 25px;
	border-radius: 5px;
	width: 100px;
	background-color: #767676;
	border: 1px solid #323232;
	color: white;
	margin-right: 20px;
}
.btn-calcular{
	padding: 15px;
	background-color: #323232;
	color: white;
	font-size: 20px;
	border: none;
	border-radius: 5px;
}
.primeira{
	height: 100%;
	min-height: 100%;
	display: -webkit-flex;
	display: flex;
	-webkit-align-items: center;
	align-items: center;
	-webkit-justify-content: center;
	justify-content: center;
}
#box{
	padding: 30px;
	border: 3px solid #323232;
	border-radius: 6px;
	background-color: #686868;
}
input[type=number]::-webkit-outer-spin-button,
input[type=number]::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
}
input[type=number] {
    -moz-appearance:textfield;
}
#resultado{
	display: -webkit-flex;
	display: flex;
	-webkit-align-items: center;
	align-items: center;
	-webkit-justify-content: center;
	justify-content: center;
	margin-top: -50px;
}
#conteudo{
	border: solid 3px white;
	padding: 30px;
	border-radius: 6px;
}
label{
	font-size: 20px;
	font-weight: bold;
}
footer{
	margin: 20px;
	font-size: 20px;
	font-weight: bold;
}
        </style>
    </head>
    
    <body>
        <div class="primeira">
            <div id="box">
                <h1>
                    Calculadora kWh
                </h1>
                <form  method="post" action="">
                    <label for="horas">
                       horas
                    </label>
                    <input type="number" name="horas" placeholder="10" min="0">
                    <label>
                        watts
                    </label>
                    <input type="number" name="watts" placeholder="10" min="0">
                    <label>
                       dias
                    </label>
                    <input type="number" name="dias" placeholder="10" min="0">

                   <button type="submit" class="btn-calcular">calcular</button>
                </form>      
            </div>
        </div>
        <div id="resultado">
        	<div id="conteudo">
        		<h1>Resultado</h1>
        		<h3> <?= $dias ?> dias</h3>
        		<h3> <?= $horas ?> horas</h3>
        		<h3> <?= $watts ?> watts</h3>
        		<h2><?= $total ?> kWh</h2>
        	</div>
        </div>
        <footer>
        	Desenvolvido por Lucas Soares
        </footer>
    </body>

</html>