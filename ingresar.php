<html>
        <head>
		       <title></title>
		</head>
		<body >
            <?php
			        $nombre = $_GET['usuario'];
			        $password = $_GET['password'];
                    
                    $data = array("usuario"=>$nombre, "password"=>$password); 
                    $data = json_encode($data); 
                    $ch = curl_init();
                    curl_setopt($ch, CURLOPT_URL, "http://localhost/Json.php"); 
                    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
                    curl_setopt($ch, CURLOPT_POSTFIELDS, $data); 
                    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json','Content-Length: ' . strlen($data))); 
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
                    $respond = curl_exec($ch); 
                    curl_close($ch); print_r($respond); 
                    //if ($password == '123' && $nombre == 'user'){
                      //  include_once 'menuPrincipal.php';
                    //}else {
                       // include_once 'inicio.php';
                        //echo "Ingrese correctamente los datos de sesion";
                    //}
			?>
		</body>
</html>