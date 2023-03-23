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
                            <td> <input type="tel" name="seq1" value="Loading..." > </td>
                            <td> <input type="tel" name="seq2" value="Loading..." > </td>
                            <td> <input type="tel" name="seq3" value="Loading..." > </td>
                        </tr>
                        <tr>
                            <th> Sequence 4 </th>
                            <th> Sequence 5 </th>
                            <th> Sequence 6 </th>
                        </tr>
                        <tr>
                            <td> <input type="tel" name="seq4" value="Loading..." > </td>
                            <td> <input type="tel" name="seq5" value="Loading..." > </td>
                            <td> <input type="tel" name="seq6" value="Loading..." > </td>
                            
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
