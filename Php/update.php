<?php
/* Inclure le fichier */
require_once "config.php";
 
/* Definir les variables */
$Lname = $Fname = $Gender = "";
$name_err = $Fname_err = $Gender_err = "";
 
/* verifier la valeur id dans le post pour la mise à jour */
if(isset($_POST["id"]) && !empty($_POST["id"])){
    /* recuperation du champ caché */
    $id = $_POST["id"];
    
    /* Validate name */
    $input_name = trim($_POST["Lname"]);
    if(empty($input_name)){
        $name_err = "Please enter your last name.";
    } else{
        $Lname = $input_name;
    }
    
    /* Validate Fname */
    $input_Fname = trim($_POST["Fname"]);
    if(empty($input_Fname)){
        $Fname_err = "Please enter your first name.";     
    } else{
        $Fname = $input_Fname;
    }
    
    /* Validate Gender */
    $input_Gender = trim($_POST["Gender"]);
    if(empty($input_Gender)){
        $Gender_err = "Please enter the Gender";     
    }
    elseif(($input_Gender != 'Male') && ($input_Gender != 'Female')){
        $Gender_err = "Please enter either 'Male' or 'Female'";
    }
     else{
        $Gender = $input_Gender;
    }
    
    /* verifier les erreurs avant modification */
    if(empty($name_err) && empty($Fname_err) && empty($Gender_err)){
        
        $sql = "UPDATE teacher SET Last_Name=?, First_name=?, Gender=? WHERE Id=?";
         
        if($stmt = mysqli_prepare($link, $sql)){
            
            mysqli_stmt_bind_param($stmt, "sssi", $param_Lname, $param_Fname, $param_Gender, $param_id);
            
           
            $param_Lname = $Lname;
            $param_Fname = $Fname;
            $param_Gender = $Gender;
            $param_id = $id;
            
            
            if(mysqli_stmt_execute($stmt)){
                /* enregistremnt modifié, retourne */
                header("location: teachers.php");
                exit();
            } else{
                echo "Oops! An error has occurred.";
            }
        }
         
        
        mysqli_stmt_close($stmt);
    }
    
    
    mysqli_close($link);
} else{
    /* si il existe un paramettre id */
    if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
        
        $id =  trim($_GET["id"]);
        
       
        $sql = "SELECT * FROM teacher WHERE Id = ?";


        if($stmt = mysqli_prepare($link, $sql)){
            
            mysqli_stmt_bind_param($stmt, "i", $param_id);
            
            
            $param_id = $id;
            
            
            if(mysqli_stmt_execute($stmt)){
                $result = mysqli_stmt_get_result($stmt);
    
                if(mysqli_num_rows($result) == 1){
                    /* recupere l'enregistremnt */
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    
                    /* recupere les champs */
                    $Lname = $row["Lname"];
                    $Fname = $row["Fname"];
                    $Gender = $row["Gender"];
                } else{
                    
                    header("location: error.php");
                    exit();
                }
                
            } else{
                echo "Oops! une erreur est survenue.";
            }
        }
        
        /* Close statement */
        mysqli_stmt_close($stmt);
        
        /* Close connection */
        mysqli_close($link);
    }  else{
        /* pas de id parametter valid, retourne erreur */
        header("location: error.php");
        exit();
    }
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Data</title>
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
                    <h2 class="mt-5">Edit record</h2>
                    <p>Edit the fields and save</p>
                    <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
                        <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" name="Lname" class="form-control <?php echo (!empty($name_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $Lname; ?>">
                            <span class="invalid-feedback"><?php echo $name_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>First Name</label>
                            <input type="text" name="Fname" class="form-control <?php echo (!empty($Fname_err)) ? 'is-invalid' : ''; ?>"><?php echo $Fname; ?>
                            <span class="invalid-feedback"><?php echo $Fname_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Gender</label>
                            <input type="text" name="Gender" class="form-control <?php echo (!empty($Gender_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $Gender; ?>">
                            <span class="invalid-feedback"><?php echo $Gender_err;?></span>
                        </div>
                        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                        <input type="submit" class="btn btn-primary" value="Save">
                        <a href="teachers.php" class="btn btn-secondary ml-2">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>
