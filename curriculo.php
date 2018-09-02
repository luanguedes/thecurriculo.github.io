<!DOCTYPE html>
<html>
<head>
	<title>The Curriculo</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<center>
		<h1 class="titulo2">THE CURRICULO</h1>
		<h2>Preencha seus dados pessoais:</h2><br><br><br><br>
		<p>Nome: <input type="text" name="nome"></p>
		<p>Data de Nascimento: <input type="date" name="nome"></p>
		<p>Estado Civil: <select name="estado_civil">
			<option value="Solteiro (a)">Solteiro (a)</option>
      		<option value="Casado (a)">Casado (a)</option>
      		<option value="Viuvo (a)">Viuvo (a)</option>
      		<option value="Divorcidado (a)">Divorciado (a)</option>
    	</select></p><br><br><br>
    	<p>Endereço: <input type="text" name="endereco"></p>
    	<p>Nº: <input type="text" name="numero"></p>
    	<p>Bairro: <input type="text" name="bairro"></p><br><br><br>
    	<p>C.E.P: <input type="text" name="cep"> (Ex: 00000-000)</p>
    	<p>Cidade: <input type="text" name="cidade"></p>
    	<p>Estado: <input type="text" name="estado"> (Ex: PR, SP, SC)</p><br><br><br>
    	<p>Telefone: <input type="text" name="telefone"> (Ex: (00)0000-0000)</p>
    	<p>Celular: <input type="text" name="celular"> (Ex (00)00000-0000)</p><br><br><br><br>
    	<h2>Documentos:</h2><br><br><br><br>
    	<p>RG: <input type="text" name="rg"></p>
    	<p>CPF: <input type="text" name="cpf"></p>
    	<p>Carteira Profissional: <input type="text" name="cart_prof"></p><br><br><br>
    	<p>CNH: <input type="text" name="cnh"></p>
    	<p>E-mail: <input type="text" name="email"></p><br><br><br><br>
    	<h2>Escolaridade e Experiências Profissionais:</h2><br><br><br><br>
   		<p>Escolaridade: <select name="escolaridade">
      		<option value="Ensino Fundamental">Ensino Fundamental</option>
      		<option value="Ensino Medio">Ensino Medio</option>
      		<option value="Ensino Superior">Ensino Superior</option>
      		<option value="Ensino Fundamental Incompleto">Ensino Fundamental Incompleto</option>
      		<option value="Ensino Medio Incompleto">Ensino Medio Incompleto</option>
      		<option value="Ensino Superior Incompleto">Ensino Superior Incompleto</option>
   		</select></p><br><br><br>
   		<h4>Experiências Profissionais: </h4>
      <input class="botao" type="button" name="submit" value=" + " onclick="exp()"><br><br><br><br>
      <script type="text/javascript">
        function exp(){
          
        }
      </script>
	</center>
</body>
</html>