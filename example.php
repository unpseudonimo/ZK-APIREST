<html>
<head>
    <title>ZK Test</title>
</head>

<body>
<?php
    $enableGetDeviceInfo = true;
    $enableGetUsers = true;
    $enableGetData = true;

    include('zklib/ZKLib.php');

    $zk = new ZKLib(
        '192.168.1.75' //your device IP
    );

    $ret = $zk->connect();

    // Función para procesar el formulario y obtener los datos de la huella digital
    function obtenerDatosHuella($zk)
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
            try {
                $uid = $_POST['uid'];

                // Obtener los datos de la huella digital por UID
                $fingerprintData = $zk->getFingerprint($uid);

                // Mostrar los datos de la huella digital
                echo "<h3>Datos de Huella Digital para UID: $uid</h3>";
                echo "<pre>";
                print_r($fingerprintData);
                echo "</pre>";
            } catch (Exception $e) {
                echo "Error al obtener los datos de la huella digital: " . $e->getMessage();
            }
        }
    }

    // Función para procesar el formulario y agregar un usuario
   // Obtener el último UID y UserID y aumentarlos
    $usuarios = $zk->getUser();
    $ultimoUsuario = end($usuarios);
    $ultimoUID = $ultimoUsuario['uid'];
    $ultimoUserID = $ultimoUsuario['userid'];
    function procesarFormulario($zk)
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            try {
                global $ultimoUID, $ultimoUserID;

                // Imprimir los datos de entrada del formulario en la consola
                echo "Datos de entrada del formulario:\n";
                var_dump($_POST);

                $uid = $ultimoUID + 1;
                $userid = $ultimoUserID + 1;

                $name = $_POST['name'];
                $password = $_POST['password'];
                $role = $_POST['role'];
                $cardno = $_POST['cardno'];

                // Llamar a la función setUser y guardar la respuesta
                $respuesta = $zk->setUser($uid, $userid, $name, $password, $role, $cardno);

                // Imprimir los datos de respuesta en la consola
                echo "Datos de respuesta de setUser:\n";
                var_dump($respuesta);

                echo "Usuario insertado correctamente.";
            } catch (Exception $e) {
                echo "Error al insertar el usuario: " . $e->getMessage();
            }
        }
    }

    if ($ret) {
        $zk->disableDevice();
        $zk->setTime(date('Y-m-d H:i:s')); // Synchronize time
        // Procesar el formulario si se ha enviado
        procesarFormulario($zk);
        // Procesar el formulario para obtener los datos de la huella digital si se ha enviado
        obtenerDatosHuella($zk);
        ?>
        <!-- Mostrar el formulario -->
        <h2>Insertar Usuario</h2>
        <form method="post">
            <label for="uid">UID:</label>
            <input type="number" name="uid" value="<?php echo $ultimoUID + 1; ?>" readonly><br>

            <label for="userid">ID en DB:</label>
            <input type="text" name="userid" value="<?php echo $ultimoUserID + 1; ?>" readonly><br>

            <label for="name">Nombre:</label>
            <input type="text" name="name" required><br>

            <label for="password">Contraseña:</label>
            <input type="text" name="password"><br>

            <label for="role">Rol:</label>
            <select name="role">
                <option value="<?php echo ZK\Util::LEVEL_USER; ?>">Usuario</option>
                <option value="<?php echo ZK\Util::LEVEL_ADMIN; ?>">Admin</option>
            </select><br>

            <label for="cardno">Número de tarjeta:</label>
            <input type="number" name="cardno"><br>

            <input type="submit" value="Insertar Usuario">
        </form>
        
        <?php if($enableGetDeviceInfo === true) { ?>
        <table border="1" cellpadding="5" cellspacing="2">
            <tr>
                <td><b>Status</b></td>
                <td>Connected</td>
                <td><b>Version</b></td>
                <td><?php echo($zk->version()); ?></td>
                <td><b>OS Version</b></td>
                <td><?php echo($zk->osVersion()); ?></td>
                <td><b>Platform</b></td>
                <td><?php echo($zk->platform()); ?></td>
            </tr>
            <tr>
                <td><b>Firmware Version</b></td>
                <td><?php echo($zk->fmVersion()); ?></td>
                <td><b>WorkCode</b></td>
                <td><?php echo($zk->workCode()); ?></td>
                <td><b>SSR</b></td>
                <td><?php echo($zk->ssr()); ?></td>
                <td><b>Pin Width</b></td>
                <td><?php echo($zk->pinWidth()); ?></td>
            </tr>
            <tr>
                <td><b>Face Function On</b></td>
                <td><?php echo($zk->faceFunctionOn()); ?></td>
                <td><b>Serial Number</b></td>
                <td><?php echo($zk->serialNumber()); ?></td>
                <td><b>Device Name</b></td>
                <td><?php echo($zk->deviceName()); ?></td>
                <td><b>Get Time</b></td>
                <td><?php echo($zk->getTime()); ?></td>
            </tr>
        </table>
        <?php } ?>

        <hr/>

        <?php
        // Agregar la lógica para eliminar usuarios antes de cualquier salida
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['deleteUser'])) {
            $uidToDelete = $_POST['uid'];
            try {
                $zk->removeUser($uidToDelete);
                // Redirigir al usuario después de eliminar el usuario
                header("Location: " . $_SERVER['PHP_SELF']);
                exit(); // Finalizar el script después de redirigir
            } catch (Exception $e) {
                // Manejar errores si es necesario
                echo "Error al eliminar el usuario: " . $e->getMessage();
            }
        }
        ?>

        <?php if($enableGetUsers === true) { ?>
            <table border="1" cellpadding="5" cellspacing="2" style="float: left; margin-right: 10px;">
                <tr>
                    <th colspan="7">Data User</th> <!-- Aumenté colspan para agregar la columna de botones -->
                </tr>
                <tr>
                    <th>UID</th>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Card #</th>
                    <th>Role</th>
                    <th>Password</th>
                    <th>Actions</th> <!-- Nueva columna para el botón de eliminar -->
                </tr>
                <?php
                try {
                    //$zk->setUser(5, '5', 'Admin', '1234', ZK\Util::LEVEL_ADMIN);
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
                    header('HTTP', true, 500); // 500 internal server error
                }
                ?>
            </table>
        <?php } ?>


        <?php if ($enableGetData === true) { ?>
            <table border="1" cellpadding="5" cellspacing="2">
                <tr>
                    <th colspan="7">Data Attendance</th>
                </tr>
                <tr>
                    <th>UID</th>
                    <th>ID</th>
                    <th>Name</th>
                    <th>State</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Type</th>
                </tr>
                <?php
                    $attendance = $zk->getAttendance();
                    if (count($attendance) > 0) {
                        $attendance = array_reverse($attendance, true);
                        sleep(1);
                        foreach ($attendance as $attItem) {
                            ?>
                            <tr>
                                <td><?php echo($attItem['uid']); ?></td>
                                <td><?php echo($attItem['id']); ?></td>
                                <td><?php echo(isset($users[$attItem['id']]) ? $users[$attItem['id']]['name'] : $attItem['id']); ?></td>
                                <td><?php echo(ZK\Util::getAttState($attItem['state'])); ?></td>
                                <td><?php echo(date("d-m-Y", strtotime($attItem['timestamp']))); ?></td>
                                <td><?php echo(date("H:i:s", strtotime($attItem['timestamp']))); ?></td>
                                <td><?php echo(ZK\Util::getAttType($attItem['type'])); ?></td>
                            </tr>
                            <?php
                        }
                    }
                ?>
            </table>
            <?php
                if (count($attendance) > 0) {
                    //$zk->clearAttendance(); // Remove attendance log only if not empty
                }
            ?>
        <?php } ?>
        <?php
        $zk->enableDevice();
        $zk->disconnect();
    }
    
?>
</body>
</html>
