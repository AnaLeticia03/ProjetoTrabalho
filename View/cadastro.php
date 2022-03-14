<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Styles/geral.css">
    <link rel="stylesheet" href="../Styles/cadastro.css">
    <title>CADASTRO</title>
</head>

<body>
    <header>
        <h1 class="logo">
            Logo Site
        </h1>
        <nav>
            <ul>
                <li>
                    <a href="../Index.php">Início</a>
                </li>
                <li>
                    <a href="#">Explorar</a>
                </li>
                <li>
                    <a href="#">Sobre nós</a>
                </li>
            </ul>
        </nav>
        <a class="btn" href="./cadastro.php"> Cadastre-se</a>

    </header>
    <main>
        <div class="coluna" id="esquerda">
            <h2 class="main-color">
                Cadastro
            </h2>
            <form action="../Controller/cadastroController.php" method="POST">

                <div class="inputGroup">
                    <label for="nome">Nome completo</label>
                    <input type="text" name="nome" required minlength="8">

                    <label for="dataNascimento">Data de nascimento</label>
                    <input type="data" name="dataNascimento" required >

                    <label for="cpf"> CPF </label>
                    <input type="text" required name="cpf" placeholder="xxx.xxx.xxx-xx" minlength="14">

                    <label for="cidade">cidade</label>
                    <input type="text" name="cidade" required >

                    <label for="e-mail">E-mail</label>
                    <input type="text" name="e-mail" required placeholder="nome@gmail.com" minlength="10"> 

                    <label for="telefone"> Telefone Celular</label>
                    <input type="text" name="telefone" required  placeholder="(xx)xxxxx-xxxx" >


                </div>
                    



            </form>

        </div>
        <div class="coluna" id="direita">
            <h2 class="main-color">
                Login
            </h2>

        </div>
    </main>

</body>

</html>