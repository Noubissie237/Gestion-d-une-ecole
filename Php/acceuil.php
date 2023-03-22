<?php
    session_start();
        echo " <link rel = 'stylesheet' href = '..\bootstrap\css\bootstrap.min.css' />";
        include "db.php";
        $auth = 0;
        $pseu = $_SESSION['pseudoConnexion'];
        $pass = $_SESSION['passConnexion'];
        $requette = $connexion->query("SELECT * FROM student WHERE Pseudo ='$pseu'");
        $requette->execute();

        $resultat = $requette->fetchAll();
?>

<p><h1 align="center" style="color:blue"> Academic Year 2022/2023</h1></p></br>
<table class="table">
  <thead>
    <tr>
      <th scope="col" colspan=5><h2>Date Of Birth : <?php foreach($resultat as $e){echo " <span style=\"color:green\">".$e['Birthday']."</span>";} ?> <h2> </th><br>
      <th scope="col" colspan=2><h2>Gender : <?php foreach($resultat as $e){echo " <span style=\"color:green\">".$e['Gender']."</span>";} ?> <h2> </th><br>
      <th scope="col" colspan=10><h2>Student's name : <?php foreach($resultat as $e){echo "  <span style=\"color:green\">".$e['Last_Name']." ".$e['First_Name']."</span>";} ?> </h2> </th>
    </tr>
  </thead>
  <tbody>
    <tr bgcolor="#B9B9B9">
      <th scope="row">SUBJECTS</th>
      <th scope="row">SEQ1</th>
      <th scope="row">SEQ2</th>
      <th scope="row">SEQ3</th>
      <th scope="row">SEQ4</th>
      <th scope="row">SEQ5</th>
      <th scope="row">SEQ6</th>
      <th scope="row">COEF</th>
      <th scope="row">TOTAL</th>
      <th scope="row">COMMENTS</th>
    </tr>
    <tr>
      <th scope="row">Mathematics</th>
      
        <?php
            $sql1 = $connexion->query("SELECT * FROM student WHERE Pseudo ='$pseu'");
            $sql1->execute();
            $result1 = $sql1->fetchAll();
            $tscore = 0;
            foreach($result1 as $f)
            {
                $vr = $f['Id'];
              $sql2=$connexion->query("SELECT *
                      FROM subjects INNER JOIN score ON subjects.Id=score.Id_subject
                      WHERE ((score.Id_student='$vr') AND (score.Id_subject='1'))
              ");
              $sql2->execute();
              $result2 = $sql2->fetchAll();

              $som = 0;

              foreach($result2 as $g)
              {
                $som += $g['Mark'];
                echo " <td scope=\"row\">".$g['Mark']." </td>";
              }
              $ss = $som/6;
              $res = $ss * $g['Coefficient'];
              $res1 = round($res,2); 
              $tscore += $res1;
              
              echo "<td scope=\"row\">".$g['Coefficient']."</td>";
              echo "<td scope=\"row\"><strong>".$res1."</strong></td>";
              echo "<td scope=\"row\">";
              if($ss >=0 AND $ss<5)
                echo "<span style=\"color:red\">Weak</span>";
              else if($ss>=5 AND $ss<9)
                echo "<span style=\"color:red\">Poor</span>";
              else if($ss>=9 AND $ss<13)
                echo "<span style=\"color:Green\">Average</span>";
              else if($ss>=13 AND $ss<17)
                echo "<span style=\"color:Green\">Very Good</span>";
              else if($ss>=17 AND $ss<20)
                echo "<span style=\"color:Green\">Excellent</span>";
              else
                echo "Perfect";
              echo "</td>";
            }
              ?>

    </tr>
    <tr>
      <th scope="row">English</th>
      <?php
            $sql1 = $connexion->query("SELECT * FROM student WHERE Pseudo ='$pseu'");
            $sql1->execute();
            $result1 = $sql1->fetchAll();

            foreach($result1 as $f)
            {
                $vr = $f['Id'];
              $sql2=$connexion->query("SELECT *
                      FROM subjects INNER JOIN score ON subjects.Id=score.Id_subject
                      WHERE ((score.Id_student='$vr') AND (score.Id_subject='2'))
              ");
              $sql2->execute();
              $result2 = $sql2->fetchAll();

              $som = 0;

              foreach($result2 as $g)
              {
                $som += $g['Mark'];
                echo " <td scope=\"row\">".$g['Mark']." </td>";
              }
              $ss = $som/6;
              $res = $ss * $g['Coefficient'];
              $res1 = round($res,2); 
              $tscore += $res1;
              
              echo "<td scope=\"row\">".$g['Coefficient']."</td>";
              echo "<td scope=\"row\"><strong>".$res1."</strong></td>";
              echo "<td scope=\"row\">";
              if($ss >=0 AND $ss<5)
                echo "<span style=\"color:red\">Weak</span>";
              else if($ss>=5 AND $ss<9)
                echo "<span style=\"color:red\">Poor</span>";
              else if($ss>=9 AND $ss<13)
                echo "<span style=\"color:Green\">Average</span>";
              else if($ss>=13 AND $ss<17)
                echo "<span style=\"color:Green\">Very Good</span>";
              else if($ss>=17 AND $ss<20)
                echo "<span style=\"color:Green\">Excellent</span>";
              else
                echo "Perfect";
              echo "</td>";
            }
              ?>
    </tr>
    <th scope="row">French</th>
    <?php
            $sql1 = $connexion->query("SELECT * FROM student WHERE Pseudo ='$pseu'");
            $sql1->execute();
            $result1 = $sql1->fetchAll();

            foreach($result1 as $f)
            {
                $vr = $f['Id'];
              $sql2=$connexion->query("SELECT *
                      FROM subjects INNER JOIN score ON subjects.Id=score.Id_subject
                      WHERE ((score.Id_student='$vr') AND (score.Id_subject='3'))
              ");
              $sql2->execute();
              $result2 = $sql2->fetchAll();

              $som = 0;

              foreach($result2 as $g)
              {
                $som += $g['Mark'];
                echo " <td scope=\"row\">".$g['Mark']." </td>";
              }
              $ss = $som/6;
              $res = $ss * $g['Coefficient'];
              $res1 = round($res,2); 
              $tscore += $res1;
              
              echo "<td scope=\"row\">".$g['Coefficient']."</td>";
              echo "<td scope=\"row\"><strong>".$res1."</strong></td>";
              echo "<td scope=\"row\">";
              if($ss >=0 AND $ss<5)
              echo "<span style=\"color:red\">Weak</span>";
            else if($ss>=5 AND $ss<9)
              echo "<span style=\"color:red\">Poor</span>";
            else if($ss>=9 AND $ss<13)
              echo "<span style=\"color:Green\">Average</span>";
            else if($ss>=13 AND $ss<17)
              echo "<span style=\"color:Green\">Very Good</span>";
            else if($ss>=17 AND $ss<20)
              echo "<span style=\"color:Green\">Excellent</span>";
              else
                echo "Perfect";
              echo "</td>";
            }
              ?>
    </tr>
    <th scope="row">History</th>
    <?php
            $sql1 = $connexion->query("SELECT * FROM student WHERE Pseudo ='$pseu'");
            $sql1->execute();
            $result1 = $sql1->fetchAll();

            foreach($result1 as $f)
            {
                $vr = $f['Id'];
              $sql2=$connexion->query("SELECT *
                      FROM subjects INNER JOIN score ON subjects.Id=score.Id_subject
                      WHERE ((score.Id_student='$vr') AND (score.Id_subject='4'))
              ");
              $sql2->execute();
              $result2 = $sql2->fetchAll();

              $som = 0;

              foreach($result2 as $g)
              {
                $som += $g['Mark'];
                echo " <td scope=\"row\">".$g['Mark']." </td>";
              }
              $ss = $som/6;
              $res = $ss * $g['Coefficient'];
              $res1 = round($res,2);
               $tscore += $res1; 
              
              echo "<td scope=\"row\">".$g['Coefficient']."</td>";
              echo "<td scope=\"row\"><strong>".$res1."</strong></td>";
              echo "<td scope=\"row\">";
              if($ss >=0 AND $ss<5)
                echo "<span style=\"color:red\">Weak</span>";
              else if($ss>=5 AND $ss<9)
                echo "<span style=\"color:red\">Poor</span>";
              else if($ss>=9 AND $ss<13)
                echo "<span style=\"color:Green\">Average</span>";
              else if($ss>=13 AND $ss<17)
                echo "<span style=\"color:Green\">Very Good</span>";
              else if($ss>=17 AND $ss<20)
                echo "<span style=\"color:Green\">Excellent</span>";
              else
                echo "Perfect";
              echo "</td>";
            }
              ?>
    </tr>
    <th scope="row">Literature</th>
    <?php
            $sql1 = $connexion->query("SELECT * FROM student WHERE Pseudo ='$pseu'");
            $sql1->execute();
            $result1 = $sql1->fetchAll();

            foreach($result1 as $f)
            {
                $vr = $f['Id'];
              $sql2=$connexion->query("SELECT *
                      FROM subjects INNER JOIN score ON subjects.Id=score.Id_subject
                      WHERE ((score.Id_student='$vr') AND (score.Id_subject='5'))
              ");
              $sql2->execute();
              $result2 = $sql2->fetchAll();

              $som = 0;

              foreach($result2 as $g)
              {
                $som += $g['Mark'];
                echo " <td scope=\"row\">".$g['Mark']." </td>";
              }
              $ss = $som/6;
              $res = $ss * $g['Coefficient'];
              $res1 = round($res,2); 
              $tscore += $res1; 
              
              echo "<td scope=\"row\">".$g['Coefficient']."</td>";
              echo "<td scope=\"row\"><strong>".$res1."</strong></td>";
              echo "<td scope=\"row\">";
              if($ss >=0 AND $ss<5)
                echo "<span style=\"color:red\">Weak</span>";
              else if($ss>=5 AND $ss<9)
                echo "<span style=\"color:red\">Poor</span>";
              else if($ss>=9 AND $ss<13)
                echo "<span style=\"color:Green\">Average</span>";
              else if($ss>=13 AND $ss<17)
                echo "<span style=\"color:Green\">Very Good</span>";
              else if($ss>=17 AND $ss<20)
                echo "<span style=\"color:Green\">Excellent</span>";
              else
                echo "Perfect";
              echo "</td>";
            }
              ?>
    </tr>
    <th scope="row">Economics</th>
    <?php
            $sql1 = $connexion->query("SELECT * FROM student WHERE Pseudo ='$pseu'");
            $sql1->execute();
            $result1 = $sql1->fetchAll();

            foreach($result1 as $f)
            {
                $vr = $f['Id'];
              $sql2=$connexion->query("SELECT *
                      FROM subjects INNER JOIN score ON subjects.Id=score.Id_subject
                      WHERE ((score.Id_student='$vr') AND (score.Id_subject='6'))
              ");
              $sql2->execute();
              $result2 = $sql2->fetchAll();

              $som = 0;

              foreach($result2 as $g)
              {
                $som += $g['Mark'];
                echo " <td scope=\"row\">".$g['Mark']." </td>";
              }
              $ss = $som/6;
              $res = $ss * $g['Coefficient'];
              $res1 = round($res,2); 
              $tscore += $res1;
              
              echo "<td scope=\"row\">".$g['Coefficient']."</td>";
              echo "<td scope=\"row\"><strong>".$res1."</strong></td>";
              echo "<td scope=\"row\">";
              if($ss >=0 AND $ss<5)
                echo "<span style=\"color:red\">Weak</span>";
              else if($ss>=5 AND $ss<9)
                echo "<span style=\"color:red\">Poor</span>";
              else if($ss>=9 AND $ss<13)
                echo "<span style=\"color:Green\">Average</span>";
              else if($ss>=13 AND $ss<17)
                echo "<span style=\"color:Green\">Very Good</span>";
              else if($ss>=17 AND $ss<20)
                echo "<span style=\"color:Green\">Excellent</span>";
              else
                echo "Perfect";
              echo "</td>";
            }
              ?>
    </tr>
    <th scope="row">Geography</th>
    <?php
            $sql1 = $connexion->query("SELECT * FROM student WHERE Pseudo ='$pseu'");
            $sql1->execute();
            $result1 = $sql1->fetchAll();

            foreach($result1 as $f)
            {
                $vr = $f['Id'];
              $sql2=$connexion->query("SELECT *
                      FROM subjects INNER JOIN score ON subjects.Id=score.Id_subject
                      WHERE ((score.Id_student='$vr') AND (score.Id_subject='7'))
              ");
              $sql2->execute();
              $result2 = $sql2->fetchAll();

              $som = 0;

              foreach($result2 as $g)
              {
                $som += $g['Mark'];
                echo " <td scope=\"row\">".$g['Mark']." </td>";
              }
              $ss = $som/6;
              $res = $ss * $g['Coefficient'];
              $res1 = round($res,2); 
              $tscore += $res1;
              
              echo "<td scope=\"row\">".$g['Coefficient']."</td>";
              echo "<td scope=\"row\"><strong>".$res1."</strong></td>";
              echo "<td scope=\"row\">";
              if($ss >=0 AND $ss<5)
                echo "<span style=\"color:red\">Weak</span>";
              else if($ss>=5 AND $ss<9)
                echo "<span style=\"color:red\">Poor</span>";
              else if($ss>=9 AND $ss<13)
                echo "<span style=\"color:Green\">Average</span>";
              else if($ss>=13 AND $ss<17)
                echo "<span style=\"color:Green\">Very Good</span>";
              else if($ss>=17 AND $ss<20)
                echo "<span style=\"color:Green\">Excellent</span>";
              else
                echo "Perfect";
              echo "</td>";
            }
              ?>
    </tr>
    <th scope="row">Commerce</th>
    <?php
            $sql1 = $connexion->query("SELECT * FROM student WHERE Pseudo ='$pseu'");
            $sql1->execute();
            $result1 = $sql1->fetchAll();

            foreach($result1 as $f)
            {
                $vr = $f['Id'];
              $sql2=$connexion->query("SELECT *
                      FROM subjects INNER JOIN score ON subjects.Id=score.Id_subject
                      WHERE ((score.Id_student='$vr') AND (score.Id_subject='8'))
              ");
              $sql2->execute();
              $result2 = $sql2->fetchAll();

              $som = 0;

              foreach($result2 as $g)
              {
                $som += $g['Mark'];
                echo " <td scope=\"row\">".$g['Mark']." </td>";
              }
              $ss = $som/6;
              $res = $ss * $g['Coefficient'];
              $res1 = round($res,2);
              $tscore += $res1;
              
              echo "<td scope=\"row\">".$g['Coefficient']."</td>";
              echo "<td scope=\"row\"><strong>".$res1."</strong></td>";
              echo "<td scope=\"row\">";
              if($ss >=0 AND $ss<5)
                echo "<span style=\"color:red\">Weak</span>";
              else if($ss>=5 AND $ss<9)
                echo "<span style=\"color:red\">Poor</span>";
              else if($ss>=9 AND $ss<13)
                echo "<span style=\"color:Green\">Average</span>";
              else if($ss>=13 AND $ss<17)
                echo "<span style=\"color:Green\">Very Good</span>";
              else if($ss>=17 AND $ss<20)
                echo "<span style=\"color:Green\">Excellent</span>";
              else
                echo "Perfect";
              echo "</td>";
            }
              ?>
    </tr>
    <th scope="row">Citizenship</th>
    <?php
            $sql1 = $connexion->query("SELECT * FROM student WHERE Pseudo ='$pseu'");
            $sql1->execute();
            $result1 = $sql1->fetchAll();

            foreach($result1 as $f)
            {
                $vr = $f['Id'];
              $sql2=$connexion->query("SELECT *
                      FROM subjects INNER JOIN score ON subjects.Id=score.Id_subject
                      WHERE ((score.Id_student='$vr') AND (score.Id_subject='9'))
              ");
              $sql2->execute();
              $result2 = $sql2->fetchAll();

              $som = 0;

              foreach($result2 as $g)
              {
                $som += $g['Mark'];
                echo " <td scope=\"row\">".$g['Mark']." </td>";
              }
              $ss = $som/6;
              $res = $ss * $g['Coefficient'];
              $res1 = round($res,2);
               $tscore += $res1;
              
              echo "<td scope=\"row\">".$g['Coefficient']."</td>";
              echo "<td scope=\"row\"><strong>".$res1."</strong></td>";
              echo "<td scope=\"row\">";
              if($ss >=0 AND $ss<5)
                echo "<span style=\"color:red\">Weak</span>";
              else if($ss>=5 AND $ss<9)
                echo "<span style=\"color:red\">Poor</span>";
              else if($ss>=9 AND $ss<13)
                echo "<span style=\"color:Green\">Average</span>";
              else if($ss>=13 AND $ss<17)
                echo "<span style=\"color:Green\">Very Good</span>";
              else if($ss>=17 AND $ss<20)
                echo "<span style=\"color:Green\">Excellent</span>";
              else
                echo "Perfect";
              echo "</td>";
            }
              ?>
    </tr>
    <th scope="row">Biology</th>
    <?php
            $sql1 = $connexion->query("SELECT * FROM student WHERE Pseudo ='$pseu'");
            $sql1->execute();
            $result1 = $sql1->fetchAll();

            foreach($result1 as $f)
            {
                $vr = $f['Id'];
              $sql2=$connexion->query("SELECT *
                      FROM subjects INNER JOIN score ON subjects.Id=score.Id_subject
                      WHERE ((score.Id_student='$vr') AND (score.Id_subject='10'))
              ");
              $sql2->execute();
              $result2 = $sql2->fetchAll();

              $som = 0;

              foreach($result2 as $g)
              {
                $som += $g['Mark'];
                echo " <td scope=\"row\">".$g['Mark']." </td>";
              }
              $ss = $som/6;
              $res = $ss * $g['Coefficient'];
              $res1 = round($res,2); 
              $tscore += $res1;
              
              echo "<td scope=\"row\">".$g['Coefficient']."</td>";
              echo "<td scope=\"row\"><strong>".$res1."</strong></td>";
              echo "<td scope=\"row\">";
              if($ss >=0 AND $ss<5)
                echo "<span style=\"color:red\">Weak</span>";
              else if($ss>=5 AND $ss<9)
                echo "<span style=\"color:red\">Poor</span>";
              else if($ss>=9 AND $ss<13)
                echo "<span style=\"color:Green\">Average</span>";
              else if($ss>=13 AND $ss<17)
                echo "<span style=\"color:Green\">Very Good</span>";
              else if($ss>=17 AND $ss<20)
                echo "<span style=\"color:Green\">Excellent</span>";
              else
                echo "Perfect";
              echo "</td>";
            }
              ?>
    </tr>
  </tbody>
</table>

</br><pre align="center">
   <strong> Moyenne : </strong>  <?php

                $req = $connexion->query("SELECT * FROM subjects");
                $req->execute();
                $resu = $req->fetchAll();
                $tcoef = 0;
                foreach($resu as $r)
                {
                  $tcoef += $r['Coefficient'];
                }

                $avg = $tscore / $tcoef;
                $avg = round($avg,2);
                echo "<strong>".$avg."</strong>";
               echo "            Decision : ";
               if($avg >= 10)
                  echo "<span style=\"color:green\">PASSED</span>";
                else
                echo "<span style=\"color:red\">FAILED</span>";
              ?> 
</pre>