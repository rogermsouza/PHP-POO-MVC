<?php
    require_once('../models/ClienteModel.php');
    class ClienteController {
        private $clienteModelo;
        function __construct(ClienteModel $clienteModelo){
            $this->clienteModelo = $clienteModelo;
        }

        public function listarClientes(){
            $clientes = $this->clienteModelo->obterClientes();
            include '../views/clientes.php';
        }
    }

?>