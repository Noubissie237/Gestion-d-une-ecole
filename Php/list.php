<?php 
	$auth = 0;
	include "db.php"; 
	include "auth.php"; 

    echo " <link rel = 'stylesheet' href = '..\bootstrap\css\bootstrap.min.css' />";

    $select = $connexion -> query("SELECT * FROM student");
    if($select->rowCount() > 0 )
    {
            $_SESSION['auth']=$select->fetch();
            $select->execute();
            $rep1 = $select->fetchAll();
            echo "<table class=\"table\">";
            echo "<tr>";
            echo "<th scope=\"row\">Last Name</th><th scope=\"row\">First Name</th><th scope=\"row\">Gender</th><th scope=\"row\">Level</th><th scope=\"row\">Birthday</th>";
            echo "</tr>";
            foreach($rep1 as $r)
            {
                echo "<tr>";
                echo "<td scope=\"row\">".$r['Last_Name']."</td>";
                echo "<td scope=\"row\">".$r['First_Name']."</td>";
                echo "<td scope=\"row\">".$r['Gender']."</td>";
                echo "<td scope=\"row\">".$r['Levels']."</td>";
                echo "<td scope=\"row\">".$r['Birthday']."</td>";
                echo "</tr>";

            }
            echo "</table>";
            
    }