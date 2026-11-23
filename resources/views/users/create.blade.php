<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            background: white;
            width: 100%;
            max-width: 400px;
            padding: 35px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 10px;
            color: #333;
        }

        p {
            text-align: center;
            color: #777;
            margin-bottom: 25px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 6px;
            outline: none;
        }

        input:focus {
            border-color: #3a7bd5;
        }

        button {
            width: 100%;
            padding: 13px;
            background: #3a7bd5;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background: #2864b2;
        }
    </style>
</head>

<body>

    <div class="container">

        <h2>Criar conta</h2>
        <p>Preencha os dados para se cadastrar.</p>

        <form>

            <label for="nome">Nome completo</label>
            <input
                type="text"
                id="nome"
                name="nome"
                placeholder="Digite seu nome"
                required
            >

            <label for="email">E-mail</label>
            <input
                type="email"
                id="email"
                name="email"
                placeholder="Digite seu e-mail"
                required
            >

            <button type="submit">Cadastrar</button>

        </form>

    </div>

</body>
</html>