<?php
    class Aluno {
        private $nome;
        private $nota1;
        private $nota2;
        
        public function __construct($nome, $nota1, $nota2) {
            $this->Nome = $nome;
            $this->nota1 = $nota1;
            $this->nota2 = $nota2;
        }
        
        public function getNome() {
            return $this->Nome;
        }
        
        public function getNota1() {
            return $this->nota1;
        }

        public function getNota2() {
            return $this->nota2;
        }

        public function Media($nota1, $nota2 ) {
            $media = ($nota1 + $nota2)/2;
            return $media;
        }
        
        public function verificarSituacao($media) {
            if ($media >=7){
                return "<b style='color: green'Aprovado";
            }else{
                return "<b style='color: green'Reprovado";

            }
            
        }
    }



?>