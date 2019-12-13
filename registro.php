<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Registro</title>
        <style>
            h1 {
                text-align: center;
            }
            table {
                width: 25%;
                background-color: #FFC;
                border: 2px dotted #F00;
                margin: auto;
            }
            .izq {
                text-align: right;
            }
            .der {
                text-align: left;
            }
            td {
                text-align: center;
                padding: 10px;
            }
            ul {
                margin: 0px;
                padding: 0px;
                list-style: none;
            }
            ul li {
                float: left;
                width: 200px;
                height: 40px;
                background-color: #F00;
                opacity: 0.8;
                line-height: 40px;
                text-align: center;
                font-size: 20px;
            }
            ul li a {
                text-decoration: none;
                color: green;
                display: block;
            }
            ul li a:hover {
                background-color: orange;
            }
            ul li ul li {
                display: none;
            }
            ul li:hover ul li {
                display: block;
            }
        </style>
    </head>
    <body>
        <h1>Registro</h1>
        <form action="" method="post">
        <table>
            <tr>
                <td class="izq">Usuario:</td>
                <td class="der"><input type="text" name="login"></td>
            </tr>
            <tr>
                <td class="izq">Contraseña:</td>
                <td class="der"><input type="password" name="password"></td>
            </tr>
            <tr>
                <td class="izq">Confirmar contraseña:</td>
                <td class="der"><input type="password" name="password"></td>
            </tr>
            <tr>
                <td>                    
                    <ul>
                        <li><a>Roles</a>
                            <ul>
                                <li><a>Maestro</a></li>
                                <li><a>Administrador</a></li>
                                <li><a>Almacenes</a></li>
                                <li><a>Contabilidad</a></li>
                            </ul>                    
                        </li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="enviar" value="Crear Cuenta"></td>
            </tr>
        </table>
    </body>
</html>