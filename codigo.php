<?php

class Cliente{
  private $nome;
  private $idade;
  protected $ingresso;

  public function consultarCliente($id){

    $clientes = array("João","Hudson","Francisco");
    $idades = array(12,30,69);
    
    for ($i = 0; $i <= $id; $i++){
      
      if ($i == $clientes[$id]){
        
        echo "\nNome: $clientes[$id]\nIdade: $idades[$id]\n";
        
      }
    }
  }
  
}

class Filmes{
  public $filme;
  public $rating;

  public function consultarFilme($i){
    $filmes = array("Pânico","Senhor dos Anéis","Hobbit");
    $rating = array(18,12,14);

    echo "$filmes[$i] - Classificação: $rating[$i] anos | ";
  }
}

class Salas{
  protected $salaNum;
 
  public function salaFilmes($i){
    $salas = array(6,4,2);

    echo "Sala: $salas[$i]\n";
  }
  
}

class Ingressos{
  protected $ingresso;
  public $valor;

  public function consultarIngresso($id){
    $ingresso = array("Sim", "Não", "Não");
    echo "Tem ingresso?: $ingresso[$id]\n\n";
  }

  public function comprarIngresso($id){

    $ingresso = array("Sim", "Não", "Não");
    
    if ($ingresso[$id] == "Não"){
      
      $ingresso[$id] = "Sim";
      echo "Ingresso comprado com sucesso! Bom filme!\n\n";
      return $ingresso[$id];
      
    } else if ($ingresso[$id] == "Sim") {
      
      echo "O cliente já tem um ingresso!\n\n";
      
    }
  }
}

$filme = new Filmes();
$cliente = new Cliente("Jonas", 22, "Sim");
$sala = new Salas();
$ingresso = new Ingressos();

echo "Bem-vindo!\n\n";

while (true){
  echo "Por favor, escolha uma das alternativas abaixo:\n";
  echo "1 - Consultar o cliente\n";
  echo "2 - Consultar filmes\n";
  echo "3 - Comprar Ingresso\n\n";
  
  $opcao = readline();
    
  if ($opcao == 1){
    
    echo "Digite o ID do cliente: ";
    $id = readline();
    
    $cliente->consultarCliente($id);
    $ingresso->consultarIngresso($id, array($ingresso));
  }
  if ($opcao == 2){
    echo "**********************\n";
    echo "Filmes em cartaz: \n\n";
    
    for ($i=0; $i<3; $i++){
      
      $filme->consultarFilme($i);
      $sala->salaFilmes($i);
      
    }
    echo "**********************\n";
    echo "\n";
  }
  
  if ($opcao == 3){
    echo "Digite o ID do Usuário: ";
    $id = readline();
    $ingresso->comprarIngresso($id);
  }
} 
