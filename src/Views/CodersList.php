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
</body>

</html>