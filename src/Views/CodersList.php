<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="../../vendorJs/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="../../css/sb-admin-2.min.css" rel="stylesheet">
    <link href="../../vendorJs/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <title>SB Admin 2 - Dashboard</title>
</head>

<?php require_once("Components/Layout.php"); ?>

<body>

    <?php require_once("Components/Header.php") ?>
    <main class="container">
        <a href="?action=create">
            <button class="btn btn-primary btn-circle btn-lg">
                <i class="fas fa-plus"></i>
            </button>
        </a>
        <table class="table table-light">

            <thead class="thead-light">
                <tr>
                    <th>Date/Time</th>
                    <th>Coder</th>
                    <th>Issue</th>
                    <th>#</th>
                    <th>Action</th> 
                </tr>
            </thead>

            <tbody>
                <?php
                foreach ($data["coder"] as $coder) {
                    echo "
                    <tr>
                        <td>{$coder->getDate_Time()}</td>
                        <td>{$coder->getCoder()}</td>
                        <td>{$coder->getissue()}</td>
                        <td>{$coder->getId()}</td>
                        <td>               
                        <a href='?action=edit&id={$coder->getId()}'><i class='lnr lnr-pencil'></i></a>
                            <a href='?action=delete&id={$coder->getId()}'><i class='lnr lnr-trash'></i></a>
                        </td>
                    </tr>
                    ";
                } ?>

            </tbody>
        </table>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>