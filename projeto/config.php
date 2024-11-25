<?php
  $dbHost ='database-2.cnw8wq9dfpdx.us-east-1.rds.amazonaws.com';
  $dbUsername = 'admin';
  $dbPassword = 'projetoaws';
  $dbName = 'projeto';

  $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

  //  if($conexao->connect_errno)
  //  {
  //    echo "erro";
  //  }
  //  else
  //  {
  //    echo "Conexão efetuada com sucesso";
  //  }

?>