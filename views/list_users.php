<?php
session_start();
 
if(isset($_SESSION['perfil'])):
?>
 
 
<!DOCTYPE html>
<html lang="pt-br">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>
    <link rel="stylesheet" type='text/css' media='screen' href="css/list.css"> <!-- Link para o arquivo CSS -->
    <style>
        /* Importando fontes elegantes do Google Fonts */
@import url('https://fonts.googleapis.com/css2?family=Fredoka:wght@400;600&family=Pacifico&display=swap');

body {
    font-family: 'Fredoka', sans-serif;
    background-color: #e0f7fa;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.container {
    background-color: #d1c4e9;
    padding: 2em;
    border-radius: 20px;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    animation: float 3s ease-in-out infinite;
    width: 80%;
    max-width: 1000px;
}

h2 {
    text-align: center;
    font-family: 'Pacifico', cursive;
    font-size: 2em;
    margin-bottom: 20px;
    color: #7b1fa2;
}

table {
    width: 100%;
    border-collapse: collapse;
}

th, td {
    padding: 12px;
    text-align: left;
    border-bottom: 2px solid #80deea;
}

th {
    color: #7b1fa2;
}

tr:hover {
    background-color: #e1bee7;
}

a {
    color: #9575cd;
    text-decoration: none;
    font-weight: bold;
}

a:hover {
    text-decoration: underline;
}

.btn {
    background-color: #80deea;
    color: white;
    padding: 10px 20px;
    border-radius: 20px;
    font-size: 1.1em;
    cursor: pointer;
    display: block;
    text-align: center;
    margin-top: 20px;
    transition: background-color 0.3s;
}

.btn:hover {
    background-color: #4dd0e1;
}

@keyframes float {
    0%, 100% {
        transform: translateY(0);
    }
    50% {
        transform: translateY(-10px);
    }
}
</style>
</head>
 
<body class="<?= $_SESSION['perfil'] ?> "> <!-- Define a classe com base no perfil do usuário -->
    <div class="container">
        <h2>Lista de Usuários</h2>
        <table class="styled-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Perfil</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($users as $user): ?>
                <tr>
                    <td><?= $user['id'] ?></td>
                    <td><?= $user['nome'] ?></td>
                    <td><?= $user['email'] ?></td>
                    <td><?= $user['perfil'] ?></td>
                    <td>
                        <?php if($_SESSION['perfil'] == 'admin' || $_SESSION['perfil'] == 'gestor'): ?>
                            <a href="">Editar</a>
                        <?php endif; ?>
 
                        <!-- Insere botão de exclusão apenas para perfil admin -->
                        <?php if($_SESSION['perfil'] == 'admin'): ?>
                            <a href="">Excluir</a>
                        <?php endif; ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
 
        <a href="index.php?action=dashboard" class="btn">Voltar ao Dashboard</a>
    </div>
</body>
 
</html>
 
<?php else: ?>
 
<p>Erro: Você não tem permissão para visualizar essa página</p>
 
<?php
endif;
?>
