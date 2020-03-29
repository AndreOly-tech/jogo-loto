<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">


<title>Apostar</title>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">


<!--<style type="text/css">

.cor{

color: gray;
border: 1px solid blue;

}-->

</style>
</head>
<body align="center">
<?php

echo '<h3 align="center"><font color="blue">LOTOSORTE - SENA</font></h3>';
$codigo = uniqid();
echo '<br />';
echo $_cambista = ('Andre Oliveira');
echo '<br />';
//echo '<b>Data : </b>';
echo $_data = date("d/m/Y H:i");
echo '<br />';
echo '<b>Acumolo : </b>';
echo '<i>39,536</i>';
echo '<br />';
echo '<b>Valor :</b>';
echo '<br />';
echo '<p>5,00</p>';
echo '<br />';
echo '<b>Usuário : </b>';
echo $_POST['nome'];
echo '<br />';
echo '<b>Cidade : </b>';
echo $_POST['cidade'];
echo '<br />';
echo '<br />';
echo '<b><font color="green">Numeros escolhidos pelo usuario</font></b>';
echo '<br />';
echo '<br />';
echo $_POST['numeros'];
echo '<br />';
echo '<br />';
echo '<br />';
echo '<b>Codigo : </b>';
//echo uniqid();
echo ($codigo);
$spaco = "\n\n";
$usuario = $_POST["nome"] . " ";
$cidade = $_POST["cidade"] . " ";
$numero = $_POST["numeros"] . " ";

$arquivo = fopen("sena.txt","a");
$gravar = fwrite($arquivo, $spaco);
$grava = fwrite($arquivo, $usuario);
$grava2 = fwrite($arquivo, $cidade);
$grava3 = fwrite($arquivo, $numero);
$grava4 = fwrite($arquivo, $codigo);

fclose($arquivo);
?>
<br />
<br />

 <div class="col-sm-6">
  <buttom type="submit" class="btn btn-info"><a href="index.html">Salvar</button>
</div>
 <br />
  <div class="col-sm-6">

  	 <div class="col-sm-6">
  	<form>
  	
  	  <input type="button" value="Imprimir" onclick="window.print()" />
  		
  	</form>
  	</div>
  	 <br />	
  
 <br />
<i color='blue'>Voce pode conferir os numeros sorteados com o cambista.</i>


</body>
</html>
