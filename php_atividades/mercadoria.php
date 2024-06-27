\\Faça um programa  em que o usuário digite o custo de uma determinada mercadoria, em seguida, adiciona-se ao custo o valor do frete e despesas eventuais (também solicitadas pelo teclado). Para concluir, o programa pergunta qual o valor de venda e indica a percentagem de lucro da mercadoria.
<?php
$cooktop_inducao = 3240.65;
$frete_valor =  450.00;
$despesas_eventuais = 75.00;
$valor_venda = $cooktop_inducao + $frete_valor + $despesas_eventuais;
$percentagem_lucro = $valor_venda * (15 / 100);
echo"\n".$valor_venda;
echo"\n".$percentagem_lucro;
?>