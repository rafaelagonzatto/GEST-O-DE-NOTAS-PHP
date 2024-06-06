<?php

require_once 'conexao.php';

//comando SQL
$sql = "INSERT INTO alunos (nome, email, ra, prova_1, aep_1, prova_integrada_1, prova_2, aep_2, prova_integrada_2) VALUES (:nome, :email, :ra, :prova_1, :aep_1, :prova_integrada_1, :prova_2, :aep_2, :prova_integrada_2)";

//não lembro que isso mas tem que fazer eu acho
$stmt = $db->prepare($sql);

//bind dos parâmetros
$stmt->bindParam(':nome', $aluno->nome);
$stmt->bindParam(':email', $aluno->email);
$stmt->bindParam(':ra', $aluno->ra);
$stmt->bindParam(':prova_1', $aluno->prova_1);
$stmt->bindParam(':aep_1', $aluno->aep_1);
$stmt->bindParam(':prova_integrada_1', $aluno->prova_integrada_1);
$stmt->bindParam(':prova_2', $aluno->prova_2);
$stmt->bindParam(':aep_2', $aluno->aep_2);
$stmt->bindParam(':prova_integrada_2', $aluno->prova_integrada_2);

//executando o insert
$stmt->execute();

$db = null;