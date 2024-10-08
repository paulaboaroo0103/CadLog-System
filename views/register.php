<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar-se</title>
    <style>
        /* Importando fontes divertidas e elegantes do Google Fonts */
        @import url('https://fonts.googleapis.com/css2?family=Fredoka:wght@400;600&family=Pacifico&display=swap');

        body {
            font-family: 'Fredoka', sans-serif;
            background-color: #e0f7fa; /* Cor verde água no fundo */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        main {
            text-align: left; /* Alinhamento à esquerda para o conteúdo */
            background-color: #d1c4e9; /* Cor lilás para o fundo da caixa */
            padding: 2em;
            border-radius: 20px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            animation: float 3s ease-in-out infinite; /* Animação suave */
            width: 350px; /* Largura fixa */
        }

        h2 {
            text-align: center; /* Centralizando o título */
            font-family: 'Pacifico', cursive; /* Fonte elegante e divertida */
            font-size: 2em;
            margin-bottom: 20px;
            color: #7b1fa2; /* Cor roxa */
        }

        form {
            display: grid;
            gap: 15px;
        }

        label {
            font-weight: bold;
            margin-bottom: 5px;
        }

        input, select {
            width: 100%;
            padding: 8px;
            border-radius: 8px;
            border: 2px solid #80deea;
            outline: none;
            font-size: 1em;
            transition: transform 0.3s ease-in-out;
        }

        input:focus, select:focus {
            transform: scale(1.05); /* Efeito ao focar nos inputs e select */
        }

        button {
            background-color: #80deea; /* Verde água no botão */
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 20px;
            font-size: 1.1em;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
            width: 100%; /* O botão vai ocupar toda a largura */
        }

        button:hover {
            background-color: #4dd0e1; /* Cor de hover no botão */
        }

        a {
            display: block;
            margin-top: 15px;
            color: #9575cd; /* Lilás para o link */
            text-decoration: none;
            font-weight: bold;
            text-align: center;
        }

        a:hover {
            text-decoration: underline;
        }

        @keyframes float {
            0% {
                transform: translateY(0px);
            }
            50% {
                transform: translateY(-10px);
            }
            100% {
                transform: translateY(0px);
            }
        }
    </style>
</head>
<body>
    <main>
        <h2>Cadastro de usuário</h2>
        <form action="index.php?action=register" method="post">
            <div>
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" required>
            </div>

            <div>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" required>
            </div>

            <div>
                <label for="senha">Senha</label>
                <input type="password" name="senha" id="senha" required>
            </div>

            <div>
                <label for="perfil">Perfil</label>
                <select name="perfil" id="perfil">
                    <option value="admin">Admin</option>
                    <option value="gestor">Gestor</option>
                    <option value="colaborador">Colaborador</option>
                </select>
            </div>

            <button type="submit">Cadastrar-se</button>
        </form>

        <a href="index.php?action=login">Voltar ao Login</a>
    </main>
</body>
</html>
