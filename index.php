<?php
require('data/database.php');

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <title>Consulta</title>
</head>

<body>
    <div class="container">
        <h1>Consulta de Clientes</h1>
        <hr>
        <form method="POST">
            <div class="col-6">
                <button type="button" class="btn btn-primary btn-block" id="btnConsultar">Consultar</button>
            </div>
        </form>
        
           
                <table class="table">
                    <thead>
                        <th>id</th>
                        <th>Razón Social</th>
                        <th>Tipo Doc.</th>
                        <th>Nº Documento</th>
                        <th>Dirección</th>
                    </thead>
                    <tbody id="tblData">
                        
                    </tbody>
                </table>
         
    </div>

    <script src="assets/js/cliente.js"></script>

    </body>

</html>