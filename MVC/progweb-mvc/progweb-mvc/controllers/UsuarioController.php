<?php
    require_once('../models/UsuarioModel.php');
    class UsuarioController {
        private $usuarioModelo;
        function __construct(UsuarioModel $usuarioModelo){
            $this->usuarioModelo = $usuarioModelo;
            //$this->usuarioModelo = new $usuarioModelo($banco);
        }

        public function listarUsuarios(){
            $usuarios = $this->usuarioModelo->obterUsuarios();
            include '../views/usuarios.php';
        }
    }

?>