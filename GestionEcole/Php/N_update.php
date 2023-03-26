<?php
    session_start();
    include "db.php";

    $idStud = $_GET['id'];
    $idTeach = $_SESSION['idTeach'];
    $req1 = $connexion->query("SELECT * FROM student WHERE Id='$idStud'");
    foreach($req1 as $listreq)
    {
        $Lastname = $listreq['Last_Name'];
        $Firstname = $listreq['First_Name'];
    }
    
    $req2 = $connexion->query("SELECT * FROM teacher WHERE Id='$idTeach'");
    foreach($req2 as $listreq2)
    {
        $subject = $listreq2['Subjects'];
    }

    $tmp = "Name";
    $req3 = $connexion->query("SELECT * FROM subjects WHERE $tmp='$subject'");
    foreach($req3 as $listreq3)
    {
        $idSub = $listreq3['Id'];
    }

    $req4 = $connexion->query("SELECT * FROM score WHERE (Id_student='$idStud') AND (Id_subject='$idSub') AND (Sequences='1')");
    foreach($req4 as $listreq4)
    {
        $seq1 = $listreq4['Mark'];
    }

    $req5 = $connexion->query("SELECT * FROM score WHERE (Id_student='$idStud') AND (Id_subject='$idSub') AND (Sequences='2')");
    foreach($req5 as $listreq5)
    {
        $seq2 = $listreq5['Mark'];
    }

    $req6 = $connexion->query("SELECT * FROM score WHERE (Id_student='$idStud') AND (Id_subject='$idSub') AND (Sequences='3')");
    foreach($req6 as $listreq6)
    {
        $seq3 = $listreq6['Mark'];
    }

    $req7 = $connexion->query("SELECT * FROM score WHERE (Id_student='$idStud') AND (Id_subject='$idSub') AND (Sequences='4')");
    foreach($req7 as $listreq7)
    {
        $seq4 = $listreq7['Mark'];
    }

    $req8 = $connexion->query("SELECT * FROM score WHERE (Id_student='$idStud') AND (Id_subject='$idSub') AND (Sequences='5')");
    foreach($req8 as $listreq8)
    {
        $seq5 = $listreq8['Mark'];
    }

    $req9 = $connexion->query("SELECT * FROM score WHERE (Id_student='$idStud') AND (Id_subject='$idSub') AND (Sequences='6')");
    foreach($req9 as $listreq9)
    {
        $seq6 = $listreq9['Mark'];
    }
    
    if(isset($_POST["seq1"]))
    {
        $s1 = $_POST['seq1'];
        $s2 = $_POST['seq2'];
        $s3 = $_POST['seq3'];
        $s4 = $_POST['seq4'];
        $s5 = $_POST['seq5'];
        $s6 = $_POST['seq6'];


        $up1 = $connexion -> prepare("UPDATE score SET Mark='$s1' WHERE (Id_student='$idStud') AND (Id_subject='$idSub') AND (Sequences='1')");
        $up2 = $connexion -> prepare("UPDATE score SET Mark='$s2' WHERE (Id_student='$idStud') AND (Id_subject='$idSub') AND (Sequences='2')");
        $up3 = $connexion -> prepare("UPDATE score SET Mark='$s3' WHERE (Id_student='$idStud') AND (Id_subject='$idSub') AND (Sequences='3')");
        $up4 = $connexion -> prepare("UPDATE score SET Mark='$s4' WHERE (Id_student='$idStud') AND (Id_subject='$idSub') AND (Sequences='4')");
        $up5 = $connexion -> prepare("UPDATE score SET Mark='$s5' WHERE (Id_student='$idStud') AND (Id_subject='$idSub') AND (Sequences='5')");
        $up6 = $connexion -> prepare("UPDATE score SET Mark='$s6' WHERE (Id_student='$idStud') AND (Id_subject='$idSub') AND (Sequences='6')");

        $up1 -> execute();
        $up2 -> execute();
        $up3 -> execute();
        $up4 -> execute();
        $up5 -> execute();
        $up6 -> execute();


        header("location: HomeTeachers.php");
        exit();
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
<body style="background-color:RGBa(45, 96, 221, 0.2)">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row" >
                <div class="col-md-12">
                    <h2 class="mt-5" style="font-size:30px">Edit marks of <?php echo $subject; ?></h2>
                    <p style="font-size:20px">Student's name : <?php echo "<mark style='background-color:#BADA55'>".$Lastname." ".$Firstname."</mark>"; ?></p>
                    <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post" >
                    <table class="table table-bordered table-striped" >
                        <tr>
                            <th> Sequence 1 </th>
                            <th> Sequence 2 </th>
                            <th> Sequence 3 </th>
                        </tr>
                        <tr>
                            <td> <input type="tel" name="seq1" value="<?= $seq1; ?>" required> </td>
                            <td> <input type="tel" name="seq2" value="<?= $seq2; ?>" required> </td>
                            <td> <input type="tel" name="seq3" value="<?= $seq3; ?>" required> </td>
                        </tr>
                        <tr>
                            <th> Sequence 4 </th>
                            <th> Sequence 5 </th>
                            <th> Sequence 6 </th>
                        </tr>
                        <tr>
                            <td> <input type="tel" name="seq4" value="<?= $seq4; ?>" required > </td>
                            <td> <input type="tel" name="seq5" value="<?= $seq5; ?>" required > </td>
                            <td> <input type="tel" name="seq6" value="<?= $seq6; ?>" required > </td>
                            
                        </tr>
                    </table>

                        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                        <input type="submit" class="btn btn-primary" value="Save">
                        <a href="HomeTeachers.php" class="btn btn-secondary ml-2">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>
