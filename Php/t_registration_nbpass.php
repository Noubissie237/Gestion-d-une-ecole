<?php 
	$auth = 0;
	include "db.php"; 
	include "auth.php"; 
				
	function securedPass($pass)
    {
		if(strlen($pass) < 4){
			header('Location:t_registration_nbPass.php');
			die();
		}
		else{
			return $pass;
		}
	}
				
	function securedName($name)
    {
		$name = htmlspecialchars($name);
		$name = trim($name);
		$name = stripslashes($name);
		$name = strip_tags($name);
		return $name;
	}

	if(isset($_POST['pseudo']))
    {
		$password = sha1($_POST['confirm']);
		$pseudo = ($_POST['pseudo']);
		$pseu = securedName($pseudo);
		$name1 = ($_POST['last_name']);
		$lname = securedName($name1);
		$name2 = ($_POST['first_name']);
		$fname = securedName($name2);
	
		$gender = $_POST['gender'];
		$pass1 = $_POST['password'];
		$fpass = securedPass($pass1);
		$pass2 = $_POST['confirm'];
		$spass = securedPass($pass2);
        $hbd = $_POST['birthday'];
        $subjects = $_POST['subjects']; 

        $_SESSION['Pseudo'] = $pseu; 
        $_SESSION['Last_Name'] = $lname;
        $_SESSION['First_Name'] = $fname;
        $_SESSION['Gender'] = $gender;
        $_SESSION['Subjects'] = $subjects;
        $_SESSION['Birthday'] = $hbd;
        $_SESSION['Password'] = $fpass;
        $_SESSION['Confirm'] = $spass;
			
        if($fpass != $spass){
            header('Location:t_registration_equalpass.php');
        }
        else{
            $select = $connexion -> query("SELECT * FROM teacher WHERE Pseudo = '$pseu' ");
            if($select -> rowCount() > 0){
                header('Location:t_registration_Pseudo.php');
            }else{
                $select = $connexion -> prepare("INSERT INTO teacher(Id, Pseudo, Last_Name, First_Name, Gender, Subjects, Birthday, Pwd) VALUES(NULL, '$pseu', '$lname', '$fname', '$gender', '$subjects', '$hbd', SHA1('$spass')) ");
                $select -> execute();
                
                header('Location:t_acc.php');
            }
        }

}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Register Forms</title>

    <!-- Icons font CSS-->
    <link href="../bootstrap/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="../bootstrap//vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="../bootstrap/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../bootstrap/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../bootstrap/css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Teacher's Registration Form</h2>
                    <form method="POST">
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">pseudo</label>
                                    <input class="input--style-4" type="text" name="pseudo" required>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">last name</label>
                                    <input class="input--style-4" type="text" name="last_name" required>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">first name</label>
                                    <input class="input--style-4" type="text" name="first_name" required>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Gender</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Male
                                            <input type="radio" checked="checked" name="gender" value="Male">
                                            <span class="checkmark" name="gender" ></span>
                                        </label>
                                        <label class="radio-container">Female
                                            <input type="radio" name="gender" value="Female">
                                            <span class="checkmark" name="gender"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="input-group">
                                <label class="label">Subject</label>
                                <div class="rs-select2 js-select-simple select--no-search">
                                <select name="subjects">
                                        <option disabled="disabled" selected="selected">Choose option</option>
                                        <option>Mathematics</option>
                                        <option>English</option>
                                        <option>French</option>
                                        <option>History</option>
                                        <option>Literature</option>
                                        <option>Economics</option>
                                        <option>Geography</option>
                                        <option>Commerce</option>
                                        <option>Citizenship</option>
                                        <option>Biology</option>
                                    </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Date of Birth</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4 js-datepicker" type="text" name="birthday" required>
                                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                    </div>
                                </div>
                            </div>        
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">password</label>
                                    <input class="input--style-4" type="password" name="password" style="color:red" required placeholder="4 characters minimum">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">confirm</label>
                                    <input class="input--style-4" type="password" name="confirm">
                                </div>
                            </div>
                        </div>
                        <div class="p-t-15" align="center">
                            <button class="btn btn--radius-2 btn--blue" type="submit">Submit</button>
                        </div>

                        <div class="text-center p-t-136" align="center">
						<a class="txt2" href="t_login.php">
</br>
							Login
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <!-- Jquery JS-->
    <script src="../bootstrap/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="../bootstrap/vendor/select2/select2.min.js"></script>
    <script src="../bootstrap/vendor/datepicker/moment.min.js"></script>
    <script src="../bootstrap/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="../bootstrap/js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
