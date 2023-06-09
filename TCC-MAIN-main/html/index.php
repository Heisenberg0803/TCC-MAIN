<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <script src="js/script.js"></script>
    <div id="login-container">
        <h1>Login</h1>
        <form action="" id="register-form">
            <label for="name">Nome do serviço</label>
            <input type="text" id="nome" placeholder="Digite o nome do seu serviço" autocomplete="off" class="input required">
            <label for="number">CPF</label>
            <input type="text" id="campo_cpf" placeholder="Apenas Números"/ required>
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" placeholder="Digite seu e-mail" autocomplete="off" class="input required">
            <label for="passoword">Senha</label>
            <input type="password" name="password" id="senha" placeholder="Digite sua senha" class="input required">
            <a href="#" id="forgot-pass">Esqueceu a senha?</a>
            <input type="submit" value="Login">
        </form>
        <div id="socal-container">
            <footer>
                <a href="https://pt-br.facebook.com/" target="_blank" rel="nooper noreferrer">
                    <img src="../img/iconF.png" alt="icone">
                </a>
                <a href="https://www.google.com/intl/pt-BR/account/about/">
                    <img src="../img/iconG.png" alt="icone">
                </a>
                <a href="https://br.linkedin.com/">
                    <img src="../img/iconL.png" alt="icone">
                </a>
            </footer>
            <div id="register-container">
                <p>Ainda não tem uma conta?</p>
                <a href="#">Registrar</a>
            </div>  
        </div>
    </div>
</body>
</html>