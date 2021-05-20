<?php require_once("Components/Layout.php");
    //require_once("Components/Header.php"); ?>
<body>
    <div class="edit">
        <main class="card" style="width: 40rem; height:27rem; display:flex; justify-content:center; ">

        <h2 class="text-center" style="margin-bottom: 3rem; margin-top: 1rem;">Edit appointment</h2>
        <a href="./index.php"><button type="button" id="button-cancel" class="btn btn-outline-danger button-cancel">Cancel</button></a>


        <form action='?action=update&id=<?php echo $data["coder"]->getId() ?>' method="post">
            <div class="input-group" style="width: 36rem; margin-left: 2rem; margin-bottom: 2rem;">
                <span class="input-group-text">Coder / Team</span>
                <!--<input type="text" name="name" required value='<?php /*echo $data["student"]->getName()*/ ?>'>-->
                <input class="form-control" type="text" name="coder" required value='<?php echo $data["coder"]->getCoder() ?>'>
            </div>
            <div class="input-group" style="width: 36rem; margin-left: 2rem;">
                <span class="input-group-text">Issue description</span>
                <input class="form-control" area-label="With textarea" type="text" name="issue" required value='<?php echo $data["coder"]->getIssue() ?>'>
            </div>
            <div class="botones" style="margin-bottom: 2rem;">
                <input class="btn-lg btn-outline-success go-add-task float"type="submit" value="Edit">
                <input class="btn-lg btn-outline-warning go-add-task float"type="reset" value="Reset">
            </div>
               
        </form>
    </main>
</div>

</body>