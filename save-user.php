<?php

switch ($_REQUEST['action']) {
    case 'create':
        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $birthDate = $_POST["birth_date"];

        $hash = password_hash($password,  PASSWORD_DEFAULT);

        $sql = "INSERT INTO users (name, email, password, birth_date) VALUES (
        '{$name}', '{$email}', '{$hash}', '{$birthDate}')";
        $res = $conn->query($sql);

        if ($res == true)
            echo
            "
        <script>
            alert('Usuário Cadastrado com sucesso.') 
        </script>
        ";
        echo
        "
        <script>
            location.href='?page=list'
        </script>
        ";
        if ($res == false) echo "<script>alert('Houve um erro ao cadastrar o usuário.')</script>";
        break;
    case 'update':
        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $birthDate = $_POST["birth_date"];

        $hash = password_hash($password, PASSWORD_DEFAULT);

        $sql = "UPDATE users SET name='{$name}', email='{$email}', password='{$hash}', birth_date='{$birthDate}' WHERE id=" . $_REQUEST["id"];
        $res = $conn->query($sql);

        if ($res == true) {
            echo "<script>alert('Usuário atualizado com sucesso.')</script>";
            echo "<script>location.href='?page=list'</script>";
        } else {
            echo "<script>alert('Houve um erro ao atualizar o usuário.')</script>";
        }
        break;

    case 'delete':
        $sql = "DELETE FROM users WHERE id=" . $_REQUEST["id"];
        $res = $conn->query($sql);

        
        if ($res == true) {
            echo "<script>alert('Usuário deletado com sucesso.')</script>";
            echo "<script>location.href='?page=list'</script>";
        } else {
            echo "<script>alert('Houve um erro ao deletar o usuário.')</script>";
        }
        break;
    default:

        break;
}
