<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto ingrado 4 Atividade 2 </title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;1,700&display=swap');

            :root {
                --primary-color: rgb(13,106,134);
                --primary-color-darker: rgb(9,48,56);
            }

            *{
                box-sizing: border-box;
                outline: 0;
            }

            body{
                margin: 0;
                padding: 0;
                background: var(--primary-color);
                font-family: 'Roboto', roboto;
                font-size: 1.3em;
                line-height: 1.5em;
            }

            .container{
                max-width: 640px;
                margin: 50px auto;
                background: #fff;
                padding: 20px;
                border-radius: 10px;
            }

            form input, form label, form button {
                display: block;
                width: 100%;
                margin-bottom: 10px;

            }

            form input {
                font-size: 24px;
                height: 50px;
                padding: 0 20px; 
            }

            form input:focus {
                outline: 1px solid var(--primary-color)
            }

            form button {
                border: none;
                background: var(--primary-color);
                color: #fff;
                font-size: 18px;
                font-weight: 700;
                height: 50px;
                cursor: pointer; 
                margin-top: 10px;
            }

            form button:hover {
                background: var(--primary-color-darker);
            }


    </style>
</head>

<body>
    <section class="container">
        <h1>Proejto Integrado 4</h1>
        <p>
           Atividade envolvendo o uso do Framework Laravel para PHP
           Clique no nome e você será redirecionado para a página: 
        </p>

        <form action="">
            <label for="input-teste-1">Plataforma Ead</label>
            <a href="https://www.colaboraread.com.br/login/auth" target="_blank" style="text-decoration:none";>
                Colaborar Ead
            </a>

            <p></p>
            <label for="input-teste-2">Faculdade Unopar</label>
            <a href="https://unopar.com.br/" target="_blank" style="text-decoration:none";>
                Unopar 
            </a>

            <p></p>
            <label for="input-teste-3">Bibliote virtual</label>
            <a href="https://www.biblioteca-virtual.com/" target="_blank" style="text-decoration:none";>
                Link
            </a>

            <p></p>
            <label for="input-teste-4">Repositório de dados</label>
            <a href="https://www.github.com/" target="_blank" style="text-decoration:none";>
                GitHub
            </a>
        </form>

    </section>

    
</body>

</html>
