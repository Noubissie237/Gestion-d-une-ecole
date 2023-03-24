<?php
    include "db.php";

    if(isset($_POST["id"]) && !empty($_POST["id"])){

        $pff = $_POST['id'];

        $req1 = $connexion->query("DELETE FROM student WHERE Id = '$pff'");
        $req2 = $connexion->query("DELETE FROM score WHERE Id_student = '$pff'");

        header("location: students.php");
        exit();       

    } else{
        if(empty(trim($_GET["id"]))){
            header("location: S_error.php");
            exit();
        }
    }
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Delete Record</title>
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .wrapper{
            width: 700px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5 mb-3">Student's Delete</h2>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="alert alert-danger">
                            <input type="hidden" name="id" value="<?php echo trim($_GET["id"]); ?>"/>
                            <p>Are you sure you want to delete this student ?</p>
                            <p>
                                <input type="submit" value="YES" class="btn btn-danger">
                                <a href="students.php" class="btn btn-secondary">NO</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>