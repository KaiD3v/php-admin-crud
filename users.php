<h1>Usuários</h1>
<?php
$sql = "SELECT * FROM users";

$res = $conn->query($sql);

$qtd = $res->num_rows;

if ($qtd > 0) {
    echo "<table class='table table-hover'>";
    echo
    "
        <thead>
        <tr>
            <th scope='col'>#</th>
            <th scope='col'>name</th>
            <th scope='col'>email</th>
            <th scope='col'>birth date</th>
            <th scope='col'>actions</th>
        </tr>
        </thead>
        ";
    echo "<tbody>";
    while ($row = $res->fetch_object()) {
        echo "<tr>";
        echo "<td>$row->id</td>";
        echo "<td>$row->name</td>";
        echo "<td>$row->email</td>";
        echo "<td>$row->birth_date</td>";
        echo "<td>";
        echo  "<button onclick=\" location.href='?page=update&id=" . $row->id . "';\" class='btn btn-success m-1'>Edit</button>";
        echo  "<button onclick=\" location.href='?page=save&action=delete&id=" . $row->id . "';\" class='btn btn-danger m-1'>Delete</button>";
        echo "</td>";
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
} else {
    echo "<p class='alert alert-danger'>Ainda não há nenhum usuário cadastrado.</P>";
    echo "<a href='?page=new' class='nav-link'>Seja o primeiro!</a>";
}
?>