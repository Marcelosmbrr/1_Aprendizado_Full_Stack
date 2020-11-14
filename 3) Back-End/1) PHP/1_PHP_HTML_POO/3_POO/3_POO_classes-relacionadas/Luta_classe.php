<?php

/* Incluímos a classe Lutador na classe Luta */
require_once 'Lutador_classe.php';
class Luta_classe {
     
   private $desafiado;
   private $desafiante;
   private $rounds;
   private $aprovada;
   
   function marcar_luta($lut1, $lut2){
       if($lut1->getCategoria() === $lut2->getCategoria() && ($lut1 != $lut2)){
           $this->aprovada = true;
           $this->desafiado = $lut1;
           $this->desafiante = $lut2;
           echo "<h2> Luta Marcada!! </h2>";
       }
       else{
           $this->aprovada = false;
           $this->desafiado = null;
           $this->desafiante = null;
       }
       
   }
   
   function lutar(){
       if($this->aprovada){
           echo "<h2> Desafiado: </h2>";
           $this->desafiado->apresentar();
           echo "<h2> Desafiante: </h2>";
           $this->desafiante->apresentar();
           $vencedor = rand(0,2); /* função randômica */
           echo "<b>O Resultado foi: </b>";
           switch ($vencedor){
               case 0:
                   $this->desafiado->setEmpates(1);
                   $this->desafiante->setEmpates(1);
                   echo "<h3>Empate! </h3>";
                   break;
               case 1:
                   $this->desafiado->setVitorias(1);
                   $this->desafiante->setDerrotas(1);
                   echo "<h3>Batimá venceu Jóquer</h3>";
                   break;
               case 2:
                   $this->desafiado->setDerrotas(1);
                   $this->desafiante->setVitorias(1);
                   echo "<h3>Jóquer venceu Batimá </h3>";
                   break;
                }
            }           
       }    
    }
