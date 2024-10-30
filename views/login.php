<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        /* Importando fontes do Google Fonts */
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
            text-align: center;
            background-color: #d1c4e9; /* Cor lilás para o fundo da caixa */
            padding: 1.5em;
            border-radius: 20px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            animation: float 3s ease-in-out infinite; /* Animação suave */
            width: 300px; /* Caixa menor */
        }

        h2 {
            font-family: 'Pacifico', cursive; /* Fonte divertida */
            font-size: 2em;
            color: #7b1fa2; /* Cor roxa */
            margin-bottom: 20px;
        }

        form {
            display: grid;
            gap: 15px; /* Espaçamento entre os campos */
            text-align: left; /* Alinha os rótulos à esquerda */
        }

        label {
            font-weight: bold;
            font-size: 1.1em;
            color: #7b1fa2; /* Cor roxa */
        }

        input {
            width: 100%;
            padding: 8px;
            border-radius: 8px;
            border: 2px solid #80deea;
            outline: none;
            font-size: 1em;
            transition: transform 0.3s ease-in-out;
        }

        input:focus {
            transform: scale(1.05); /* Efeito ao focar no input */
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
            width: 100%;
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
        <h2>Entrar</h2> <!-- Título adicionado -->
        <form method="post" action="index.php?action=login">
            <label for="email">E-mail</label> <!-- Rótulo para e-mail -->
            <input type="email" id="email" name="email" required>

            <label for="senha">Senha</label> <!-- Rótulo para senha -->
            <input type="password" id="senha" name="senha" required>

            <button type="submit">Login</button>
        </form>
        <a href="index.php?action=register">Cadastrar-se</a>
    </main>
</body>
</html>

