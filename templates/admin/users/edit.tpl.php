<h3 class="mb-5">Edição de usuário</h3>

<form action="" method="POST">
    <div class="form-group">
        <label for="usersEmail">Email</label>
        <input type="email" name="email" id="usersEmail" required value="<?php echo $data['user']['email'] ?>"
            class="form-control" placeholder="Seu email...">
    </div>

    <div class="form-group">
        <label for="usersSenha">Senha</label>
        <input type="password" name="password" id="usersSenha"
            class="form-control" placeholder="Sua senha...">
    </div>

    <button type="submit" class="btn btn-primary">Salvar</button>
</form>

<hr>

<a href="/admin/users/<?php echo $data['user']['id'] ?>" class="btn btn-secondary">Voltar</a>