<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Ingreso de Material</title>
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
    <h1>Ingreso de Material</h1>
        <form action="" method="post">
        <table>
            <tr>
                <td class="izq">Código:</td>
                <td class="der"><input type="text" name="login"></td>
            </tr>
            <tr>
                <td class="izq">Cantidad:</td>
                <td class="der"><input type="password" name="password"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="enviar" value="Registrar Ingreso"></td>
            </tr>
            <tr>
                <td class="izq">Código a Editar:</td>
                <td class="der"><input type="password" name="password"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="enviar" value="Editar"></td>
            </tr>
            <tr>
                <td class="izq">Nuevo Código:</td>
                <td class="der"><input type="text" name="login"></td>
            </tr>
            <tr>
                <td class="izq">Nueva Cantidad:</td>
                <td class="der"><input type="password" name="password"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="enviar" value="Modificar"></td>
            </tr>
        </table>
    </body>
</html>