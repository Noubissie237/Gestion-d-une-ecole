<?php
/* confirmer */
if(isset($_POST["id"]) && !empty($_POST["id"])){
    /* Inclure le fichier config */
    require_once "config.php";
    
    $sql = "DELETE FROM teacher WHERE Id = ?";
    
    if($stmt = mysqli_prepare($link, $sql)){
        mysqli_stmt_bind_param($stmt, "i", $param_id);
        
        $param_id = trim($_POST["id"]);
        
        if(mysqli_stmt_execute($stmt)){
            /* supprimé, retourne */
            header("location: teachers.php");
            exit();
        } else{
            echo "Oops! getting error.";
        }
    }
     
    mysqli_stmt_close($stmt);
    
    mysqli_close($link);
} else{
    /* verifier si paramettre id exite */
    if(empty(trim($_GET["id"]))){
        header("location: error.php");
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
                    <h2 class="mt-5 mb-3">Teacher's Delete</h2>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="alert alert-danger">
                            <input type="hidden" name="id" value="<?php echo trim($_GET["id"]); ?>"/>
                            <p>Are you sure you want to delete this teacher ?</p>
                            <p>
                                <input type="submit" value="YES" class="btn btn-danger">
                                <a href="teachers.php" class="btn btn-secondary">NO</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>