<!DOCTYPE html>
<html lang="pt-br">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" type='text/css' media='screen' href="">
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
    text-align: center;
    width: 350px;
}

h1 {
    font-family: 'Pacifico', cursive;
    font-size: 2.5em;
    color: #7b1fa2;
    margin-bottom: 20px;
}

p {
    font-size: 1.1em;
    color: #7b1fa2;
    margin-bottom: 20px;
}

.btn {
    background-color: #80deea;
    color: white;
    padding: 10px 20px;
    border-radius: 20px;
    font-size: 1.1em;
    cursor: pointer;
    text-decoration: none;
    margin-top: 10px;
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
 
<body class="<?= $_SESSION['perfil']  ?>"> <!-- Define a classe com base no perfil -->
    <div class="container">
        <h1>Bem-vindo, <?= $_SESSION['perfil']  ?>!</h1>
        <p>Esta é a visão do perfil <?= $_SESSION['perfil']  ?>.</p>

        <?php if($_SESSION['perfil'] == 'admin'):  ?>
            <!-- Admin pode gerenciar usuários (editar e excluir) -->
            <a href="index.php?action=list" class="btn">Gerenciar Usuários (Admin)</a>
        <?php elseif($_SESSION['perfil'] == 'gestor'):  ?>
            <!-- Gestor pode gerenciar usuários (apenas editar) -->
            <a href="index.php?action=list" class="btn">Gerenciar Usuários (Gestor)</a>
            <p>Área exclusiva do Gestor.</p>
 
        <?php else: ?>
            <p>Área exclusiva do Colaborador.</p>
        <?php endif; ?>

        <br><br><br><br>
        <!-- Link para logout -->
        <a href="index.php?action=logout" class="btn">Logout</a>
    </div>
</body>
 
</html>