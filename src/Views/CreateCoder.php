<?php require_once("Components/Layout.php"); ?>

<!--
<body class="bg-gradient-primary">


    <div class="container">
    
    
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0 input-add-task">
                    <a href="./index.php"><button type="button" id="button-cancel" class="btn btn-outline-success button-cancel">Cancel</button></a>
                        <div class="row card-add-task">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Coder name / Team</span>
                                <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                            </div>

                            <div class="input-group ">
                                <span class="input-group-text ">Issue description</span>
                                <textarea class="form-control" aria-label="With textarea"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="buttons-add-task">
                        <a href="#" class="btn btn-outline-primary" id="button-add-task">Add Task</a>
                        <a href="#" class="btn btn-outline-danger">Restart</a>
                    </div>



                </div>
            </div>

        </div>
        
    </div>
    </form>
    </div>

 
    <script src="../../vendorJs/jquery/jquery.min.js"></script>
    <script src="../../vendorJs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../vendorJs/jquery-easing/jquery.easing.min.js"></script>
    <script src="../../js/sb-admin-2.min.js"></script>

</body>-->



<body>
    <?php require_once("Components/Header.php"); ?>

    <main class="container text-center">

        <h2 class="text-center">Nueva Consulta</h2>

        <form action='?action=store' method="post">
            <input type="text" name="coder" required placeholder="Coder">
            <br>
            <input type="text" name="issue" required placeholder="Issue">
            <br>
            <br>
            <input type="submit" value="Crear">
            <input type="reset" value="Reset">
        </form>
    </main>

</body>