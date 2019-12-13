<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Registro Proveedor</title>
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
        </style>
    </head>
    <body>
    <h1>Registro Proveedor</h1>
        <form action="" method="post">
        <table>
            <tr>
                <td class="izq">Nombre:</td>
                <td class="der"><input type="text" name="login"></td>
            </tr>
            <tr>
                <td class="izq">Identificación Personal:</td>
                <td class="der"><input type="password" name="password"></td>
            </tr>
            <tr>
                <td class="izq">Nombre de Empresa:</td>
                <td class="der"><input type="password" name="password"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="enviar" value="Crear Registro"></td>
            </tr>
            <tr>
                <td class="izq">ID Personal a Editar:</td>
                <td class="der"><input type="password" name="password"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="enviar" value="Editar"></td>
            </tr>
            <tr>
                <td class="izq">Nombre:</td>
                <td class="der"><input type="text" name="login"></td>
            </tr>
            <tr>
                <td class="izq">Identificación Personal:</td>
                <td class="der"><input type="password" name="password"></td>
            </tr>
            <tr>
                <td class="izq">Nombre de Empresa:</td>
                <td class="der"><input type="password" name="password"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="enviar" value="Modificar"></td>
            </tr>
        </table>
    </body>
</html>