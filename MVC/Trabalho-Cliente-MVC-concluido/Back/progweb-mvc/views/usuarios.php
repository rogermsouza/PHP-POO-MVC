<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD de Usuarios</title>
</head>
<body>
    <h1>CRUD de Usuários</h1>
    <ul>
        <?php
            foreach ($usuarios as $usuario){?>
                <li> 
                    <?php echo $usuario['nome'] ?> - <?= $usuario['cpf'] ?>
                    - <a href="editarUsuario.php?id=<?= $usuario['id']?>" >[alterar] </a> - 
                    - <a href="excluirUsuario.php?id=<?= $usuario['id']?>" >[excluir] </a>
                </li>
            <?php }?>
    </ul>

    <h2>Adicionar Novo Usuario</h2>

    <form action="adicionaUsuario.php" method="POST">
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" required>
        <label for="cpf">CPF</label>
        <input type="text" name="cpf" id="cpf" required>
        <label for="senha">Senha</label>
        <input type="text" name="senha" id="senha" required>
        <input type="submit" value="Adicionar" name="adicionar">
    </form>

</body>
</html>