<html>

<?php 
    require_once("Components/Layout.php"); 
?>

<body id="page-top" class="body-index">
    <?php 
        require_once("Components/Header.php");
    ?>
    <main>
        <div class="card-header py-3">
            <h1 class=" font-weight-bold text-white titulo-pagina ">Task appointment</h1>
        </div>
        <div class="card-header py-3 mb-5">
            <a href="?action=create">
                <button type="button" class="btn btn-outline-dark go-add-task float-end btn-lg">Add Task</button>
            </a>
        </div>
        <div id="wrapper">
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <div class="container-fluid">
                    <div class="card shadow mb-4">
                        
                        <div class="card-body">
                            <div class="table-responsive">

                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Date / time</th>
                                            <th>Coder name / Team </th>
                                            <th>Issue</th>
                                            <th>Id</th>
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
    <?php 
    require_once("Components/Footer.php");
    ?>
</body>

</html>