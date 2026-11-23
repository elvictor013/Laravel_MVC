<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuários</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: #f0f2f5;
            padding: 40px;
        }

        .container {
            max-width: 1000px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 3px 12px rgba(0,0,0,0.08);
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }

        h2 {
            color: #333;
        }

        .btn-cadastrar {
            background: #3a7bd5;
            color: white;
            padding: 12px 20px;
            border-radius: 6px;
            text-decoration: none;
            font-size: 14px;
        }

        .btn-cadastrar:hover {
            background: #2864b2;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #eee;
        }

        th {
            background: #f8f9fa;
            color: #555;
        }

        td {
            color: #666;
        }

        .status {
            background: #d4edda;
            color: #155724;
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 12px;
        }

        .acoes a {
            text-decoration: none;
            margin-right: 10px;
            font-size: 13px;
        }

        .editar {
            color: #3a7bd5;
        }

        .excluir {
            color: #dc3545;
        }

        @media (max-width: 600px) {
            body {
                padding: 15px;
            }

            .container {
                padding: 15px;
                overflow-x: auto;
            }

            .header {
                gap: 15px;
            }

            h2 {
                font-size: 18px;
            }

            table {
                min-width: 600px;
            }
        }
    </style>
</head>

<body>

    <div class="container">

        <div class="header">
            <h2>Usuários cadastrados</h2>

            <a href="cadastro.html" class="btn-cadastrar">
                + Cadastrar usuário
            </a>
        </div>

        <table>

            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Status</th>
                    <th>Ações</th>
                </tr>
            </thead>

            <tbody>

                <tr>
                    <td>1</td>
                    <td>João Silva</td>
                    <td>joao@email.com</td>
                    <td><span class="status">Ativo</span></td>
                    <td class="acoes">
                        <a href="#" class="editar">Editar</a>
                        <a href="#" class="excluir">Excluir</a>
                    </td>
                </tr>

                <tr>
                    <td>2</td>
                    <td>Maria Santos</td>
                    <td>maria@email.com</td>
                    <td><span class="status">Ativo</span></td>
                    <td class="acoes">
                        <a href="#" class="editar">Editar</a>
                        <a href="#" class="excluir">Excluir</a>
                    </td>
                </tr>

                <tr>
                    <td>3</td>
                    <td>Pedro Oliveira</td>
                    <td>pedro@email.com</td>
                    <td><span class="status">Ativo</span></td>
                    <td class="acoes">
                        <a href="#" class="editar">Editar</a>
                        <a href="#" class="excluir">Excluir</a>
                    </td>
                </tr>

                <tr>
                    <td>4</td>
                    <td>Ana Costa</td>
                    <td>ana@email.com</td>
                    <td><span class="status">Ativo</span></td>
                    <td class="acoes">
                        <a href="#" class="editar">Editar</a>
                        <a href="#" class="excluir">Excluir</a>
                    </td>
                </tr>

            </tbody>

        </table>

    </div>

</body>
</html>