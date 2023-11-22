    <?php
        session_start();
        require_once("models/ComputadorModel.php");
        require_once("controllers/ComputadorController.php");
        
        require_once("ConexaoBD.php");
        $bd = new ConexaoBD("localhost", "exercicio_mvc", "root", "");

        $pagComputadores = new ComputadorModel($bd);
        $controlador = new ComputadorController($pagComputadores);
        

     



        if (isset($_POST['Adicionar'])) { // verifica se a ação foi enviada por POST

            $com_descricao = isset($_POST['com_descricao']) ? $_POST['com_descricao'] : null;
            $com_fabricante = isset($_POST['com_fabricante']) ? $_POST['com_fabricante'] : null;
            $com_numeroserie = isset($_POST['com_numeroserie']) ? $_POST['com_numeroserie'] : null;
            $com_acessorios = isset($_POST['com_acessorios']) ? $_POST['com_acessorios'] : null;
            //chama addCliente do objeto controler
            $result = $controlador->addComputador($com_descricao, $com_fabricante, $com_numeroserie, $com_acessorios);
            
            echo "<script>window.location.href='index.php';</script>";
            return $result; // retorna true ou false , vai servir para tratamento de erros
            exit();
        }
        
        if(isset($_GET['acao']) && $_GET['acao'] == 'alterar'){
            $com_cod = $_GET['com_cod'];
            $result = $controlador->obterComputadorPorID($com_cod);
            
            return $result; // retorna true ou false , vai servir para tratamento de erros
            exit();
        }

        if (isset($_POST['Atualizar'])) { // verifica se a ação foi enviada por POST

            $com_cod = isset($_POST['com_cod']) ? $_POST['com_cod'] : null;
            $com_descricao = isset($_POST['com_descricao']) ? $_POST['com_descricao'] : null;
            $com_fabricante = isset($_POST['com_fabricante']) ? $_POST['com_fabricante'] : null;
            $com_numeroserie = isset($_POST['com_numeroserie']) ? $_POST['com_numeroserie'] : null;
            $com_acessorios = isset($_POST['com_acessorios']) ? $_POST['com_acessorios'] : null;
            //chama addCliente do objeto controler
            $result = $controlador->alterarComputador($com_cod, $com_descricao, $com_fabricante, $com_numeroserie, $com_acessorios);
            
            echo "<script>window.location.href='index.php';</script>";
            return $result;
            exit();
        }else{
            $controlador->listarComputadores();
        }





        if(isset($_GET['acao']) && $_GET['acao'] == 'excluir'){
            $com_cod = $_GET['com_cod'];
            $excluir = $controlador->removerComputador($com_cod);
            echo "<script>window.location.href='index.php';</script>";
            exit();
        }


        
        
        

    ?>
