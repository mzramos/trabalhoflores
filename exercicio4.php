<?php

$valor_compra = 180;
$possui_cupom = true;

if ($valor_compra > 150 || $possui_cupom == true) {
    $desconto = 10;
} else {
    $desconto = 0;
}

$valor_final = $valor_compra - ($valor_compra * $desconto / 100);

echo "Valor da compra: R$ $valor_compra";
echo "Desconto: $desconto%";
echo "Valor final: R$ $valor_final";

?>
