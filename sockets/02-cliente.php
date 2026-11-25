<?php
$conexion = stream_socket_client('tcp://127.0.0.1:9000', $codigo, $error, 5);

echo "El servidor dice :". fgets($conexion);

while (($linea = fgets(STDIN)) !== false) {
    fwrite($conexion, $linea . "\n");
    echo "El servidor dice :". fgets($conexion);
}


fclose($conexion);
?>


