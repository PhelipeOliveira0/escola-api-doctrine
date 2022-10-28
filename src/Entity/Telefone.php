<?php

    namespace php\Doctrine\Entity;

    require_once __DIR__ . "/../../vendor/autoload.php";

    use php\Doctrine\Entity\Aluno;

    /**
     * @Entity
     */
    class Telefone{

        /**
         * @id
         * @GeneratedValue
         * @Column(type="integer")
         */

         private ?int $id;
         
        /**
         * @Column(type="string")
         */

         private string $numero;

        /**
         * @ManyToOne(targetEntity="Aluno")
         */

        private Aluno $aluno;


        public function id(){
            return $this->id;
        }

        public function numero(){
            return $this->numero;
        }

        public function aluno(){
            return $this->aluno;
        }


        public function setAluno(Aluno $aluno){
            $this->aluno = $aluno;
            return $this;
        }

        public function setNumero($valor){
            $this->numero = $valor;
            return $this;
        }



    }




?>