    <?php
                session_start();
        require_once("models/ClienteModel.php");
        require_once("controllers/clienteController.php");
        
        require_once("ConexaoBD.php");
        $bd = new ConexaoBD("localhost", "sistemaERP", "root", "");

        $pagClientes = new ClienteModel($bd);
        $controlador = new ClienteController($pagClientes);
        $controlador->listarClientes();


        if (isset($_POST['Adicionar'])) { // verifica se a ação foi enviada por POST

            $codigo = isset($_POST['codigo']) ? $_POST['codigo'] : null;
            $nome = isset($_POST['nome']) ? $_POST['nome'] : null;
            $telefone = isset($_POST['telefone']) ? $_POST['telefone'] : null;
            //chama addCliente do objeto controler
            $result = $controlador->addCliente($codigo, $nome, $telefone);
            
            echo "<script>window.location.href='index.php';</script>";
            return $result; // retorna true ou false , vai servir para tratamento de erros
            exit();
           
        }

        if(isset($_GET['acao']) && $_GET['acao'] == 'excluir'){
            $codigo = $_GET['codigo'];
            $excluir = $controlador->removCliente($codigo);
            //echo "<script>setTimeout(function(){window.location.href='index.php';}, 5000);</script>";
            echo "<script>window.location.href='index.php';</script>";
            exit();
        }


        
        
        

    ?>
