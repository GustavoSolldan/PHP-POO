<?php
namespace Loja;
class Veiculo {
    public $marca;
    public $modelo;

    public function __construct($marca, $modelo) {
        $this->marca = $marca;
        $this->modelo = $modelo;
    }

    public function exibirInformacoes() {
        return "Marca: {$this->marca}, Modelo: {$this->modelo}";
    }
}

class Carro extends Veiculo {
    public function acelerar() {
        return "O carro está acelerando.";
    }
}

class Moto extends Veiculo {
    public function empinar() {
        return "A moto está empinando.";
    }
}


$carro = new Carro("Toyota", "Corolla");
$moto = new Moto("Honda", "CBR600RR");

echo $carro->exibirInformacoes() . "\n";
echo $carro->acelerar() . "\n";

echo $moto->exibirInformacoes() . "\n";
echo $moto->empinar() . "\n";


trait Mensagens {
    public function enviarMensagem($mensagem) {
        return "Enviando mensagem: $mensagem";
    }
}

class EmailSender {
    use Mensagens;
}

class SMSSender {
    use Mensagens;
}


$emailSender = new EmailSender();
echo $emailSender->enviarMensagem("Olá, este é um e-mail.") . "\n";

$smsSender = new SMSSender();
echo $smsSender->enviarMensagem("Olá, este é uma mensagem de texto.") . "\n";





class Cliente {
    public $nome;

    public function __construct($nome) {
        $this->nome = $nome;
    }
}

class Pedido {
    public $id;

    public function __construct($id) {
        $this->id = $id;
    }
}

namespace Financeiro;

class Pagamento {
    public $valor;

    public function __construct($valor) {
        $this->valor = $valor;
    }
}


class Animal {
    public function emitirSom() {
        return "Som genérico do animal";
    }
}

class Cachorro extends Animal {
    public function emitirSom() {
        return "Au Au";
    }
}

class Gato extends Animal {
    public function emitirSom() {
        return "Miau";
    }
}


$cachorro = new Cachorro();
$gato = new Gato();

echo $cachorro->emitirSom() . "\n";
echo $gato->emitirSom() . "\n";



trait LogErro {
    public function registrarLog($mensagem) {
        return "Log de erro: $mensagem";
    }
}

trait LogInfo {
    public function registrarLog($mensagem) {
        return "Log de informação: $mensagem";
    }
}

class Registro {
    use LogErro, LogInfo {
        LogErro::registrarLog insteadof LogInfo;
        LogInfo::registrarLog as registrarLogInfo;
    }
}


$registro = new Registro();

echo $registro->registrarLog("Erro encontrado!") . "\n";
echo $registro->registrarLogInfo("Informação importante!") . "\n";









?>
