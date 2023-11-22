<?php
    require_once('models/ClienteModel.php');
    
    class ClienteController {
        private $clienteModelo;
        function __construct(ClienteModel $clienteModelo){
            $this->clienteModelo = $clienteModelo;
        }

        public function listarClientes(){
            $clientes = $this->clienteModelo->obterClientes();
            include 'views/clientes.php';
        }


        public function addCliente($codigo, $nome, $telefone){

            $clientes = $this->clienteModelo->inserirCliente($codigo, $nome, $telefone);
            return $_SESSION['msg'] = "Cadastro Realizado";
        }
        
        
        public function obterClientePorID($codigo){
            $clientes = $this->clienteModelo->obterClientePorID($codigo);
            $cliente = $clientes[0];

            include 'views/editarCliente.php';
        }

        public function alterarCliente($codigo, $nome, $telefone){

            $clientes = $this->clienteModelo->alterarCliente($codigo, $nome, $telefone);
            return $_SESSION['msg'] = "Cadastro Atualizado";
        }



        public function removCliente($codigo){

            $clientes = $this->clienteModelo->excluirCliente($codigo);
            return $_SESSION['msg'] = "Cliente Excluido";

        }
}
        



?>