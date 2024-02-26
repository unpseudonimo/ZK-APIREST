<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET");
header("Access-Control-Allow-Headers: Content-Type");

include('zklib/ZKLib.php');

$enableGetDeviceInfo = true;
$enableGetUsers = true;
$enableGetData = true;

$zk = new ZKLib('192.168.1.75');
$ret = $zk->connect();

function crearUsuario($zk) {
    try {
        global $ultimoUID, $ultimoUserID;

        $uid = $ultimoUID + 1;
        $userid = $ultimoUserID + 1;

        $json_data = file_get_contents('php://input');
        $data = json_decode($json_data, true);

        $name = $data['name'];
        $password = $data['password'];
        $role = $data['role'];
        $cardno = $data['cardno'];

        $respuesta = $zk->setUser($uid, $userid, $name, $password, $role, $cardno);

        echo json_encode(array("message" => "Usuario insertado correctamente."));
    } catch (Exception $e) {
        http_response_code(500);
        echo json_encode(array("message" => "Error al insertar el usuario: " . $e->getMessage()));
    }
}

function eliminarUsuario($zk) {
    try {
        $json_data = file_get_contents('php://input');
        $data = json_decode($json_data, true);

        $uidToDelete = $data['uid'];
        $zk->removeUser($uidToDelete);

        echo json_encode(array("message" => "Usuario eliminado correctamente."));
    } catch (Exception $e) {
        http_response_code(500);
        echo json_encode(array("message" => "Error al eliminar el usuario: " . $e->getMessage()));
    }
}

function getUsers() {
    global $zk;
    try {
        $usuarios = $zk->getUser();
        echo json_encode($usuarios);
    } catch (Exception $e) {
        http_response_code(500);
        echo json_encode(array("message" => "Error al obtener usuarios: " . $e->getMessage()));
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_GET['action'])) {
    if ($_GET['action'] == 'crearUsuario') {
        crearUsuario($zk);
    } elseif ($_GET['action'] == 'eliminarUsuario') {
        eliminarUsuario($zk);
    }
} elseif ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['action'])) {
    if ($_GET['action'] == 'getUsers') {
        getUsers();
    }
} else {
    http_response_code(405);
    echo json_encode(array("message" => "Método no permitido"));
}

$usuarios = $zk->getUser();
$ultimoUsuario = end($usuarios);
$ultimoUID = $ultimoUsuario['uid'];
$ultimoUserID = $ultimoUsuario['userid'];
?>


<html>
<head>
    <title>API Test</title>
</head>
<body>

<?php if ($enableGetUsers === true) { ?>
    <!-- Tu tabla y formulario de eliminación aquí -->
    <table border="1" cellpadding="5" cellspacing="2" style="float: left; margin-right: 10px;">
        <tr>
            <th colspan="7">Data User</th>
        </tr>
        <tr>
            <th>UID</th>
            <th>ID</th>
            <th>Name</th>
            <th>Card #</th>
            <th>Role</th>
            <th>Password</th>
            <th>Actions</th>
        </tr>
        <?php
        try {
            $users = $zk->getUser();
            sleep(1);
            foreach ($users as $uItem) {
                ?>
                <tr>
                    <td><?php echo($uItem['uid']); ?></td>
                    <td><?php echo($uItem['userid']); ?></td>
                    <td><?php echo($uItem['name']); ?></td>
                    <td><?php echo($uItem['cardno']); ?></td>
                    <td><?php echo(ZK\Util::getUserRole($uItem['role'])); ?></td>
                    <td><?php echo($uItem['password']); ?>&nbsp;</td>
                    <td>
                        <form method="post">
                            <input type="hidden" name="uid" value="<?php echo $uItem['uid']; ?>">
                            <button type="submit" name="deleteUser">Eliminar</button>
                        </form>
                    </td>
                </tr>
                <?php
            }
        } catch (Exception $e) {
            header("HTTP/1.0 404 Not Found");
            header('HTTP', true, 500);
        }
        ?>
    </table>
<?php } ?>

</body>
</html>