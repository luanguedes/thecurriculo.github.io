<?php
		require_once("Bibliotecas/fpdf181/fpdf.php");
		
		$nome  = @$_POST['nome']; 
   		$data_nascimento = @$_POST['data_nascimento'];
   		$estado_civil  = @$_POST['estado_civil'];
   		$endereco  = @$_POST['endereco'];
   		$numero  = @$_POST['numero'];
   		$bairro  = @$_POST['bairro'];
   		$cep  = @$_POST['cep'];
   		$cidade  = @$_POST['cidade'];
   		$estado  = @$_POST['estado'];
   		$celular  = @$_POST['celular'];
   		$telefone  = @$_POST['telefone'];
   		$escolaridade  = @$_POST['escolaridade'];
   		$empresa  = @$_POST['empresa'];
   		$funcao  = @$_POST['funcao'];
   		$exp_inicial  = @$_POST['exp_inicial'];
   		$exp_final  = @$_POST['exp_final'];
   		$curso  = @$_POST['curso'];
   		$instituicao  = @$_POST['instituicao'];
   		$cur_inicial  = @$_POST['cur_inicial'];
   		$cur_final  = @$_POST['cur_final'];
   		$ref_nome  = @$_POST['ref_nome'];
   		$ref_telefone  = @$_POST['ref_telefone'];
   		$datadoc = @$_POST['datadoc'];

   		$pdf = new FPDF ('P', 'mm', 'A4');

  		$pdf->AddPage();
  		$pdf = new FPDF("P", "mm", "A4");
		$pdf->SetMargins(30, 20, 30);
		$pdf->SetFont('arial', '', 12);
		$pdf->SetTitle("The Curriculo");
		$pdf->SetY("-1");

		$titulo = "THE CURRICULO";
		$texto = "DADOS PESSOAIS:\n";
		$texto .= "Nome: $nome - Nascimento: $data_nascimento - Estado Civil: $estado_civil\n";
		$texto .= "Endereço: $endereco, $numero - $bairro - CEP: $cep\n";
		$texto .= "Cidade: $cidade - $estado\n";
		$texto .= "Celular: $celular - Telefone: $telefone\n";
		$texto .= "Escolaridade: $escolaridade\n";
		$texto .= "_____________________________________________________________\n";
		$texto .= "EXPERIÊNCIAS PROFISSIONAIS\n";
		$texto .= "Empresa: $empresa - Função: $funcao\n";
		$texto .= "De: $exp_inicial até $exp_final\n";
		$texto .= "_____________________________________________________________\n";
		$texto .= "CURSOS E EVENTOS:\n";
		$texto .= "Curso/Tema: $curso - Instituição: $instituicao\n";
		$texto .= "De: $cur_inicial até $cur_final\n";
		$texto .= "_____________________________________________________________\n";
		$texto .= "	REFERÊNCIAS PESSOAIS:\n";
		$texto .= "Nome: $ref_nome - Telefone: $ref_telefone\n";

		$pdf->Cell(0, 10, utf8_decode($titulo), 0, 1, "C");
		$pdf->Ln(10);
		$pdf->MultiCell(0, 10, utf8_decode($texto), 0 , 1);
		$pdf->Ln(40);
		$textoData = "Em {$datadoc}.";
		$pdf->Cell(94, 10, $textoData, 0, 0, 'C');

		$pdf->Output("TheCurriculo", "I");
?>