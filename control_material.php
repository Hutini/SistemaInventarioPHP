<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Control de Materiales</title>
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
    <h1>Control de Materiales</h1>
        <form action="" method="post">
        <table>    
            <tr>
                <td>                    
                    <ul>
                        <li><a>Seleccione un Lugar:</a>
                            <ul>
                                <li><a>OF - 33434</a></li>
                                <li><a>OF - 98756</a></li>
                            </ul>
                    </ul>
                </td>
            </tr>         
            <tr>
                <td colspan="2"><input type="submit" name="enviar" value="Generar Lista"></td>
            </tr>
            <tr>
                <td class="izq">Observaciones:</td>
                <td class="der"><input type="text" name="login"></td>
            </tr>
            <tr>
                <td class="izq">Ingresar Código Sobrante:</td>
                <td class="der"><input type="password" name="password"></td>
            </tr>
            <tr>
                <td class="izq">Ingresar Cantidad Sobrante:</td>
                <td class="der"><input type="password" name="password"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="enviar" value="Agregar Sobrante"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="enviar" value="Enviar Control"></td>
            </tr>
        </table>
    </body>
</html>