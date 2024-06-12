<?php

require_once __DIR__ . '/conexao.php';

class Aluno_com_notas {
    private $id;
    private $nome;
    private $email;
    private $ra;
    public $prova_1;
    public $aep_1;
    public $prova_integrada_1;
    public $prova_2;
    public $aep_2;
    public $prova_integrada_2;


    //inicializando as propriedades
    public function __construct($nome, $email, $ra, $prova_1, $aep_1, $prova_integrada_1, $prova_2, $aep_2, $prova_integrada_2) {
        $this->nome = $nome;
        $this->email = $email;
        $this->ra = $ra;
        $this->prova_1 = $prova_1;
        $this->aep_1 = $aep_1;
        $this->prova_integrada_1 = $prova_integrada_1;
        $this->prova_2 = $prova_2;
        $this->aep_2 = $aep_2;
        $this->prova_integrada_2 = $prova_integrada_2;

    }


    public function getNome() :string {
        return $this->nome;
    }

    public function getEmail() :string {
        return $this->email;
    }

    public function getRa() :int {
        return $this->ra;
    }
    public function getprova_1() :float{
      return $this->prova_1;
  }

  public function getaep_1() :float{
      return $this->aep_1;
  }

  public function getprova_integrada_1() :float{
      return $this->prova_integrada_1;
  }

  public function getprova_2() :float{
      return $this->prova_2;
  }

  public function getaep_2() :float{
      return $this->aep_2;
  }

  public function getprova_integrada_2() :float{
      return $this->prova_integrada_2;
  }
}


    //criando novo aluno
     $aluno = new Aluno_com_notas ( 
                    nome: $_POST['nome']
                    email: $_POST['email']
                    ra: $_POST['ra'], 
                    prova_1: $_POST['prova_1'], 
                    aep_1: $_POST['aep_1']
                    prova_integrada_1: $_POST['prova_integrada_1'];
                    prova_2: $_POST['prova_2'], 
                    aep_2: $_POST['aep_2']
                    prova_integrada_2: $_POST['prova_integrada_2'])


    // echo "Nome: " . $aluno->getNome() . "<br>";
    // echo "Email: " . $aluno->getEmail() . "<br>";
    // echo "RA: " . $aluno->getRa() . "<br>";

?>
