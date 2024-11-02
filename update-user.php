<h1>Editar Usuário</h1>
<?php
$sql = "SELECT * FROM users WHERE id=" . $_REQUEST["id"];
$res = $conn->query($sql);
$row = $res->fetch_object();
?>
<form action="?page=save" method="post">
    <input type="hidden" name="action" value="update">
    <input type="hidden" name="id" value="<?php echo "$row->id"; ?> ">
    <div class="mb-3">
        <div class="mb-3">
            <label>Nome</label>
            <input type="text" name="name" placeholder="Digite o nome do usuário" class="form-control" value="<?php echo "$row->name"; ?>">
        </div>
        <div class="mb-3">
            <label>E-mail</label>
            <input type="text" name="email" placeholder="email@exemplo.com" class="form-control" value="<?php echo "$row->email"; ?>">
        </div>
        <div class="mb-3">
            <label>Senha</label>
            <input type="password" name="password" placeholder="digite uma senha" class="form-control">
        </div>
        <div class="mb-3">
            <input type="date" name="birth_date" class="form-control" value="<?php echo "$row->birth_date"; ?>" value="" required>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary w-100">Enviar</button>
        </div>
    </div>
</form>