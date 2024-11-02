<h1>Novo Usuário</h1>
<form action="?page=save" method="post">
    <input type="hidden" name="action" value="create">
    <div class="mb-3">
        <div class="mb-3">
            <label>Nome</label>
            <input type="text" name="name" placeholder="Digite o nome do usuário" class="form-control">
        </div>
        <div class="mb-3">
            <label>E-mail</label>
            <input type="text" name="email" placeholder="email@exemplo.com" class="form-control">
        </div>
        <div class="mb-3">
            <label>Senha</label>
            <input type="password" name="password" placeholder="digite uma senha" class="form-control">
        </div>
        <div class="mb-3">
            <input type="date" name="birth_date" class="form-control">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary w-100">Enviar</button>
        </div>
    </div>
</form>