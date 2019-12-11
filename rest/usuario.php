<?php
header('Content-Type: application/json');

// curl -X GET http://localhost/rest/usuario?nombre=Ross

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $respuesta['nombre'] = $_GET['nombre'];
    echo json_encode($respuesta);
    exit;
}

// curl -X POST http://localhost/rest/usuario -d '{"nombre":"Ross","apellido":"Bell"}'

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $parametros = json_decode(file_get_contents('php://input'), true);

    $respuesta['apellido'] = $parametros['apellido'];

    echo json_encode($respuesta);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'PUT') {
    //echo json_encode($respuesta);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
    //echo json_encode($respuesta);
    exit;
}
