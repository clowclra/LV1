 +\\Faça um programa  em que o usuário digite o custo de uma determinada mercadoria, em seguida, adiciona-se ao custo o valor do frete e despesas eventuais (também solicitadas pelo teclado). Para concluir, o programa pergunta qual o valor de venda e indica a percentagem de lucro da mercadoria.
<?php
$valor_inicial = 3240.65;
$frete_valor =  450.00;
$despesas_eventuais = 75.00;
$valor_final = $frete_valor + $despesas_eventuais +$valor_inicial;
$lucro = $valor_final - $valor_inicial;
$porcentagem_lucro = $lucro / $valor_final * 100;
echo"\n".$valor_final;
echo"\n".$lucro;
echo"\n".$porcentagem_lucro;
?>