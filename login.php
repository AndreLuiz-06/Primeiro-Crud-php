<div class="login-container">
    <?php if (isset($erroLogin)): ?>
        <div class="erro-login">Dados inválidos!</div>
    <?php endif; ?>

    <h2>Login</h2>
    <form method="post">
        <input type="text" name="login" placeholder="Usuário" required>
        <input type="password" name="senha" placeholder="Senha" required>
        <input type="submit" name="acao" value="Entrar">
    </form>
</div>