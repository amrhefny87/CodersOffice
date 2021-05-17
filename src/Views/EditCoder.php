<?php require_once("Components/Layout.php"); ?>

<body>
    <?php require_once("Components/Header.php"); ?>

    <main class="container text-center">

        <h2 class="text-center">Editar Consulta</h2>

        <form action='?action=update&id=<?php echo $data["coder"]->getId() ?>' method="post">
            <!--<input type="text" name="name" required value='<?php /*echo $data["student"]->getName()*/ ?>'>-->
            <input type="text" name="coder" required value='<?php echo $data["coder"]->getCoder() ?>'>
            <br>
            <input type="text" name="issue" required value='<?php echo $data["coder"]->getIssue() ?>'>
            <br>
            <br>
            <input type="submit" value="Edit">
            <input type="reset" value="Reset">
        </form>
    </main>

</body>