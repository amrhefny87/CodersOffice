<?php require_once("Components/Layout.php");


// require_once("Components/Header.php"); ?>

    <body>
    <div class="create">
    <main class="card" style="width: 40rem; height:25rem; display:flex; justify-content:center; ">
    <h2 class="text-center" style="margin-bottom: 3rem;">Nueva Consulta</h2>
        <form action='?action=store' method="post">
            <div class="input-group" style="width: 36rem; margin-left: 2rem; margin-bottom: 2rem;">
                <span class="input-group-text">Coder / Team</span>
                <input class="form-control" type="text" name="coder" required placeholder="Coder">
            </div>
            <div class="input-group" style="width: 36rem; margin-left: 2rem;">
                <span class="input-group-text">Issue description</span>
                <textarea class="form-control" area-label="With textarea" type="text" name="issue" required placeholder="Issue"></textarea>
            </div>
            
            <div class="botones">
                <input class="btn-lg btn-outline-success go-add-task float" type="submit" value="Crear">
                <input class="btn-lg btn-outline-warning go-add-task float" type="reset" value="Reset">
            </div>
        </form>
    </main>
</div>
</body>