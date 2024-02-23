<?php 
    class Livro{
        private $titulo;
        private $autor;

        public function __construct( $titulo, $autor ){
            $this->titulo = $titulo;
            $this->autor = $autor;
        }
        public function getTitulo() {
            return $this->titulo;
        }
    
        public function getAutor() {
            return $this->autor;
        }
        public function setTitulo($novoTitulo) {
            $this->titulo = $novoTitulo;
        }
    
        public function setAutor($novoAutor) {
            $this->autor = $novoAutor;
        }
    }
    
    $livro = new Livro('Atividade1', 'Aula do Giovanne');
    echo 'Título: ' . $livro->getTitulo() . '<br>';
    echo 'Autor: ' . $livro->getAutor();

    $livro->setTitulo('Atividade2 (edição atualizada)');
    $livro->setAutor('Aula do Giovanne (edição atualizada)');

    echo '<br><br> Título atualizado: ' . $livro->getTitulo() . '<br>';
    echo 'Autor atualizado: ' . $livro->getAutor();

    class Animal {
        private $nome;
        private $idade;
    
        public function __construct($nome, $idade) {
            $this->nome = $nome;
            $this->idade = $idade;
        }
    
        public function getNome() {
            return $this->nome;
        }
    
        public function setNome($nome) {
            $this->nome = $nome;
        }
    
        public function getIdade() {
            return $this->idade;
        }
    
        public function setIdade($idade) {
            if ($idade >= 0) {
                $this->idade = $idade;
            } else {
                throw new Exception("Idade inválida.");
            }
        }
    }
    
    class Cachorro extends Animal {
        public function getIdade() {
            return parent::getIdade() . " anos";
        }
    
        public function setIdade($idade) {
            if ($idade >= 0) {
                parent::setIdade($idade);
            } else {
                throw new Exception("Idade inválida.");
            }
        }
    }
    
    try {
        $cachorro = new Cachorro("Rex da atividade 3", 3);
        echo "<br><br> Nome: " . $cachorro->getNome() . "<br>";
        echo "Idade: " . $cachorro->getIdade() . "<br>";
        $cachorro->setNome("Max da atividade 3 ");
        echo "Nome atualizado: " . $cachorro->getNome() . "<br>";
        $cachorro->setIdade(3);
        echo "Idade atualizada: " . $cachorro->getIdade() . "<br>";
    } catch (Exception $e) {
        echo "Erro: " . $e->getMessage();
    }

    class AnimalProtegido {
        protected $nomeProtegido;
        protected $idadeProtegido;
     
        public function __construct($nomeProtegido, $idadeProtegido) {
            $this->nomeProtegido = $nomeProtegido;
            $this->idadeProtegido = $idadeProtegido;
        }
     
        public function getNomeProtegido() {
            return $this->nomeProtegido;
        }
     
        public function setNomeProtegido($nomeProtegido) {
            $this->nomeProtegido = $nomeProtegido;
        }
     
        public function getIdadeProtegido() {
            return $this->idadeProtegido;
        }
     
        public function setIdadeProtegido($idadeProtegido) {
            if ($idadeProtegido >= 0) {
                $this->idadeProtegido = $idadeProtegido;
            } else {
                throw new Exception("Idade inválida.");
            }
        }
     }
     
     class CachorroProtegido extends AnimalProtegido {
        public function getIdadeProtegido() {
            return parent::getIdadeProtegido() . " anos";
        }
     
        public function setIdadeProtegido($idadeProtegido) {
            if ($idadeProtegido >= 0) {
                parent::setIdadeProtegido($idadeProtegido);
            } else {
                throw new Exception("Idade inválida.");
            }
        }
     
        public function getNomeProtegido() {
            return parent::getNomeProtegido();
        }
     
        public function setNomeProtegido($nomeProtegido) {
            parent::setNomeProtegido($nomeProtegido);
        }
     }
     
     try {
        $cachorroProtegido = new CachorroProtegido("Rex Protegido da atividade 4", 4);
        echo "<br><br> Nome: " . $cachorroProtegido->getNomeProtegido() . "<br>";
        echo "Idade: " . $cachorroProtegido->getIdadeProtegido() . "<br>";
        $cachorroProtegido->setNomeProtegido("Max Protegido da atividade 4", 4);
        echo "Nome atualizado: " . $cachorroProtegido->getNomeProtegido() . "<br>";
        $cachorroProtegido->setIdadeProtegido(6);
        echo "Idade atualizada: " . $cachorroProtegido->getIdadeProtegido() . "<br>";
     } catch (Exception $e) {
        echo "Erro: " . $e->getMessage();
     }

     class Calculadora {
        public static function soma($num1, $num2) {
            return $num1 + $num2;
        }
     }
     
     echo "<br>Soma da atividade 5 de soma: " . Calculadora::soma(2, 3) . "<br>";
?>