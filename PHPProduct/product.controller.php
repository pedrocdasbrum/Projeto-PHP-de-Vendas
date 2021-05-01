<?php
  include "product.class.php";

  $p = new Product;

  $p->setName("Mamão");
  $p->setValue(2.35);
  $p->setAmount(3);

  echo "<br>Produto: ".$p->getName().'.';
  echo "<br>Preço: R$ ".$p->getValue().'.';
  echo "<br>Quantidade: ".$p->getAmount().'.';
  echo "<br>Preço total: R$ ".$p->finalValue().'.';
  echo "<br>Preço total com desconto: R$ ".$p->discount().'.';
  echo "<br>Preço total com juros: R$ ".$p->interest().'.';
 ?>
