<!DOCTYPE html>
<html>
<head>
  <title>The Curriculo</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script type="text/javascript">
              $(document).ready(function(){
              var max_fields = 10;
              var wrapper = $(".adicionar"); 
              var wrapper2 = $(".adicionar2");
              var wrapper3 = $(".adicionar3");
              var add_button = $(".botao1");
              var add_button2 = $(".botao2");
              var add_button3 = $(".botao3")

              var x = 1; 
              $(add_button).click(function(e) { 
                e.preventDefault();
                var length = wrapper.find("input:text.textAdded").length;

                if (x < max_fields) { 
                  x++; 
                  $(wrapper).append('<div><p>Empresa type="text" name="empresa"></p><p>Função: <input type="text" class="textAdded" name="funcao" /></p><br><br><p>Período: <input type="date" name="exp_inicial"> à <input type="date" name="exp_final"></p><br><br><br><a href="#" class="excluir">Excluir</a></div><br><br>');
                }
              });

              $(wrapper).on("click", ".excluir", function(e) { 
                e.preventDefault();
                $(this).parent('div').remove();
                x--;
                })

               var y = 1; 
              $(add_button2).click(function(e) { 
                e.preventDefault();
                var length = wrapper2.find("input:text.textAdded").length;

                if (y < max_fields) { 
                  y++; 
                  $(wrapper2).append('<div><p>Curso/Tema: <input type="text" name="curso_tema"></p><p>Instituição: <input type="text" name="instituicao"></p><br><br><p>Período: <input type="date" name="cur_inicial"> à <input type="date" name="cur_final"></p><br><br><br><a href="#" class="excluir2">Excluir</a></div><br><br>');
                }
              });

              $(wrapper2).on("click", ".excluir2", function(e) { 
                e.preventDefault();
                $(this).parent('div').remove();
                y--;
              })

              var z = 1; 
              $(add_button3).click(function(e) { 
                e.preventDefault();
                var length = wrapper3.find("input:text.textAdded").length;

                if (z < max_fields) { 
                  z++; 
                  $(wrapper3).append('<div><p>Nome: <input type="text" name="nome"></p><p>Telefone / Celular: <input type="text" name="telefone"></p><br><br><br<a href="#" class="excluir3">Excluir</a></div><br><br>');
                }
              });

              $(wrapper3).on("click", ".excluir3", function(e) { 
                e.preventDefault();
                $(this).parent('div').remove();
                y--;
              })
            });
    </script>
</head>
<body>
  <center>
    <form method="post" action="enviar.php">
    <h1 class="titulo2">THE CURRÍCULO</h1>
    <h2>Preencha seus dados pessoais:</h2>
    <br>
    <br>
    <br>
    <p>Nome: <input type="text" name="nome"></p>
    <p>Data de Nascimento: <input type="date" name="data_nascimento"></p>
    <p>Estado Civil: <select name="estado_civil">
          <option value="Solteiro (a)">Solteiro (a)</option>
          <option value="Casado (a)">Casado (a)</option>
          <option value="Viuvo (a)">Viuvo (a)</option>
          <option value="Divorcidado (a)">Divorciado (a)</option>
    </select></p><br><br><br>
    <p>Endereço: <input type="text" name="endereco"></p>
    <p>Nº: <input type="text" name="numero"></p>
    <p>Bairro: <input type="text" name="bairro"></p><br><br><br>
    <p>C.E.P: <input type="text" name="cep"></p>
    <p>Cidade: <input type="text" name="cidade"></p>
    <p>Estado: <input type="text" name="estado"></p><br><br><br>
    <p>Celular: <input type="text" name="celular"> (Ex: (00)00000-0000)</p>
    <p>Telefone: <input type="text" name="telefone"> (Ex: (00)0000-0000)</p><br><br><br>
    <p>Escolaridade: <select name="escolaridade">
      <option value="Ensino Fundamental">Ensino Fundamental</option>
        <option value="Ensino Medio">Ensino Medio</option>
        <option value="Ensino Superior">Ensino Superior</option>
        <option value="Ensino Fundamental Incompleto">Ensino Fundamental Incompleto</option>
        <option value="Ensino Medio Incompleto">Ensino Medio Incompleto</option>
        <option value="Ensino Superior Incompleto">Ensino Superior Incompleto</option>
    </select></p><br><br><br><br>
    <div class="adicionar">
        <h2>Experiências Profissionais:</h2>
        <button class="botao1">Adicionar Experiência</button><br><br><br>
        <div>
            <p>Empresa: <input type="text" name="empresa"></p>
            <p>Função: <input type="text" name="funcao"></p><br><br>
            <p>Período: <input type="date" name="exp_inicial"> à <input type="date" name="date"></p><br><br><br>
        </div>
    </div>
    <div class="adicionar2">
        <h2>Cursos e Eventos:</h2>
        <button class="botao2">Adicionar Curso/Evento</button><br><br><br>
        <div>
            <p>Curso/Tema: <input type="text" name="curso"></p>
            <p>Instituição: <input type="text" name="instituicao"></p><br><br>
            <p>Período: <input type="date" name="cur_inicial"> à <input type="date" name="cur_final"></p><br><br><br>
        </div>
    </div>
    <div class="adicionar3">
        <h2>Referências Pessoais:</h2>
        <button class="botao3">Adicionar Referência</button><br><br><br>
        <div>
            <p>Nome: <input type="text" name="ref_nome"></p>
            <p>Telefone / Celular: <input type="text" name="ref_telefone"></p><br><br><br>
        </div>
    </div>
    <h2>Habilidades e Competências:</h2><br><br><br>
    <p>Descreva Suas Habilidades:</p><br><br>
    <textarea name="habilidades"></textarea><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <p>Data: <input type="date" name="datadoc"></p><br><br>
    <input type="submit" class="botao" value="Gerar Currículo">
    </form>
  </center>
</body>
</html>