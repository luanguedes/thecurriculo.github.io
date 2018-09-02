<!DOCTYPE html>
<html>
<head>
  <title>The Curriculo</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script type="text/javascript">
                    $(document).ready(function() {
              var max_fields = 10; //maximum input boxes allowed
              var wrapper = $(".input_fields_wrap"); //Fields wrapper
              var add_button = $(".add_field_button"); //Add button ID

              var x = 1; //initlal text box count
              $(add_button).click(function(e) { //on add input button click
                e.preventDefault();
                var length = wrapper.find("input:text.textAdded").length;

                if (x < max_fields) { //max input box allowed
                  x++; //text box increment
                  $(wrapper).append('<div><input type="text" class="textAdded" name="' + '" /><a href="#" class="remove_field">Excluir</a></div>'); //add input box
                }
                //Fazendo com que cada uma escreva seu name
                wrapper.find("input:text").each(function() {
                  $(this).val($(this).attr('name'))
                });
              });

              $(wrapper).on("click", ".remove_field", function(e) { //user click on remove text
                e.preventDefault();
                $(this).parent('div').remove();
                x--;
              })

            });
    </script>
</head>
<body>
  <center>
    <h1 class="titulo2">THE CURRÍCULO</h1>
    <h2>Preencha seus dados pessoais:</h2>
    <br>
    <br>
    <p>Nome:     <input type="text" name="nome"></p>
    <p>Data de Nascimento: <input type="date" name="nome"></p>
    <p>Estado Civil: <select name="estado_civil">
          <option value="Casado (a)">Casado (a)</option>
          <option value="Solteiro (a)">Solteiro (a)</option>
          <option value="Viuvo (a)">Viuvo (a)</option>
          <option value="Divorcidado (a)">Divorciado (a)</option>
      </select></p><br><br><br>
      <p>Endereço: <input type="text" name="endereco"></p>
      <p>Nº:       <input type="text" name="numero"></p>
      <p>Bairro:   <input type="text" name="bairro"></p><br><br><br>
      <p>C.E.P:    <input type="text" name="cep"></p>
      <p>Cidade:   <input type="text" name="cidade"></p>
      <p>Estado:   <input type="text" name="estado"></p>

      <div class="card-body" id="div-experiencias">
                    <h4 class="card-title">Experiência</h4>
                    <button class="btn btn-sm right" id="btn-adicionar-experiencia" title="Adicionar experiência">Adicionar experiência</button>
                </div>


                <div class="input_fields_wrap">
                     <h4 class="card-title">Experiência</h4>
                  <button class="add_field_button">Adicionar Experiência</button>
                  <div>
                    <input type="text">
                  </div>
                </div>


                <div class="card-body" id="div-experiencias">
                    <h4 class="card-title">Modelo de currículo</h4>
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="modelo" id="modelo1" value="modelo1" checked> Moderno preto
                                </label>
                            </div>
  </center>
</body>
</html>