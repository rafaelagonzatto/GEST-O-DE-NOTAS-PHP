<?php

require_once __DIR__ . '/conexao.php';

public function save()
{ 
    //comando SQL
    $sql = "INSERT INTO alunos (nome, email, ra, prova_1, aep_1, prova_integrada_1, prova_2, aep_2, prova_integrada_2) VALUES (:nome, :email, :ra, :prova_1, :aep_1, :prova_integrada_1, :prova_2, :aep_2, :prova_integrada_2)";
    $stmt = $db->prepare($sql);

    $nome = $this->aluno->getnome();
    $email = $this->aluno->getemail();
    $ra = $this->aluno->getra();
    $prova_1 = $this->aluno->getprova_1();
    $aep_1 = $this->aluno->getaep_1();
    $prova_integrada_1 = $this->aluno->getprova_integrada_1();
    $prova_2 = $this->aluno->getprova_2();
    $aep_2 = $this->aluno->getaep_2();
    $prova_integrada_2 = $this->aluno->getprova_integrada_2();

    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':ra', $ra);
    $stmt->bindParam(':prova_1', $prova_1);
    $stmt->bindParam(':aep_1', $aep_1);
    $stmt->bindParam(':prova_integrada_1', $prova_integrada_1);
    $stmt->bindParam(':prova_2', $prova_2);
    $stmt->bindParam(':aep_2', $aep_2);
    $stmt->bindParam(':prova_integrada_2', $prova_integrada_2);

return $stmt->execute();
}

//bind dos parÃ¢metros
$stmt->bindParam(':nome', $aluno->nome);
$stmt->bindParam(':email', $aluno->email);
$stmt->bindParam(':ra', $aluno->ra);
$stmt->bindParam(':prova_1', $aluno->prova_1);
$stmt->bindParam(':aep_1', $aluno->aep_1);
$stmt->bindParam(':prova_integrada_1', $aluno->prova_integrada_1);
$stmt->bindParam(':prova_2', $aluno->prova_2);
$stmt->bindParam(':aep_2', $aluno->aep_2);
$stmt->bindParam(':prova_integrada_2', $aluno->prova_integrada_2)
