<?php
include "conn.php";
?>
<html lang="en">
<head>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <link rel="shortcut icon" href="LOGOhead.png" />
  <title>NSS-KEC BLOOD DETAILS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
h1 {
    font-family: "Raleway";
  }

  img {
    border-radius: 8px;
    height: 100px;
    width: 100px;
  }
  </style>
</head>

<body>

  <div class="jumbotron text">

    <h1><img src="LOGOhead.png">NSS-KEC BLOOD DETAILS</h1>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-sm-4">
        <form action="" method="POST">
          <div class="form-group">
            <label for="text">Slect Blood Group</label>
            <input type="Text" class="form-control" placeholder="Enter the Blood Group" name="bg">
          </div>
          <div class="form-group">
            <label for="text">Enter Area</label>
            <input type="Text" class="form-control" placeholder="Enter the Area" name="area" >
          </div>
          <button type="submit" class="btn btn-primary" name="submit">Search</button>
      </div>
      <div class="col-sm-4">
        <label for="Department">Select Department:</label>
        <select name="dept">
          <option value="all">Select Department</option>
          <option value="AUTOMOBILE">AutoMobile Engineering</option>
          <option value="CIVIL">Civil Engineering</option>
          <option value="CSE">Computer Science And Engineering</option>
          <option value="CHE">Chemical Engineering</option>
          <option value="ECE"> Electronics and Communications Engineering</option>
          <option value="EEE">Electrical and Electronics Engineering</option>
          <option value="E&I">Electrical and Instrumentation Engineering</option>
          <option value="FT">Food Tecnology Engineering</option>
          <option value="IT">Information Technology Engineering</option>
          <option value="MECH">Mechanical Engineering</option>
          <option value="MTS">Mechatronics Engineering</option>
          <option value="B.sc">B.sc</option>

        </select><br><br>
        <label for="willing">Wiliing</label><br>
        &nbsp;&nbsp;&nbsp;<input type="radio" id="male" name="WILLING" value="yes" required>
        <label for="male">YES</label><br>
        &nbsp;&nbsp;&nbsp;<input type="radio" id="NO" name="WILLING" value="no" required>
        <label for="female">NO</label><br>
        &nbsp;&nbsp;&nbsp;<input type="radio" id="both" name="WILLING" value="both" required>
        <label for="other">Both</label>
      </div>
      <div class="col-sm-4">
        <?php

        if (isset($_POST['submit'])) 
        {
          $bg = $_POST['bg'];
          $area = $_POST['area'];
          $dept = $_POST['dept'];
          $wil = $_POST['WILLING'];
          $yes = "YES";
          $no = "NO";
        ?>

          <table class="table">
            <tr>
              <th class="th1">Blood Group</th>
              <th class="th1"><?php echo $bg; ?></th>
            </tr>
            <tr>
              <th class="th1">Area</th>
              <th class="th1"><?php echo $area; ?></th>
            </tr>
            <tr>
              <th class="th1">Department</th>
              <th class="th1"><?php echo $dept; ?></th>
            </tr>
            <tr>
              <th class="th1">Willing</th>
              <th class="th1"><?php echo $wil; ?></th>
            </tr>
          </table>
      </div>
    </div>
  </div>

  <table class="table">
    <tr>
      <th>Name</th>
      <th>Roll No</th>
      <th>DEPARTMENT</th>
      <th>YEAR</th>   
      <th>SECTION</th>
      <th>Blood Group</th>
      <th>Home Town</th>
      <th>STAYING IN</th>
      <th>WILLING</th>
      <th>Phone 1</th>
      <th>Phone 2</th>
    </tr><br>

    <?php

          if ($dept == "all") 
          {
            if ($wil == "yes") 
            {
              $qurey = "SELECT * FROM blood WHERE BLOOD LIKE '%$bg%' AND HOME LIKE '%$area%' AND 	WILLING='$yes';";
              $result = mysqli_query($conn, $qurey);
              while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) 
              {?>
          <tr>
            <th><?php echo $row['NAME']; ?></th>
            <th><?php echo $row['ROLL']; ?></th>
            <th><?php echo $row['DEPARTMENT']; ?></th>
            <th><?php echo $row['YEAR']; ?></th>
            <th><?php echo $row['SECTION']; ?></th>
            <th><?php echo $row['BLOOD']; ?></th>
            <th><?php echo $row['HOME']; ?></th>
            <th><?php echo $row['STAYING']; ?></th>
            <th><?php echo $row['WILLING']; ?></th>
            <th><?php echo $row['PHONE']; ?></th>
            <th><?php echo $row['PHONE2']; ?></th>
          </tr>
      <?php
              }
            }
            elseif ($wil == "no") 
            {
              $qurey1 = "SELECT * FROM blood WHERE BLOOD LIKE '%$bg%' AND HOME LIKE '%$area%' AND 	WILLING='$no';";
              $result1 = mysqli_query($conn, $qurey1);
              while ($row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC)) 
              { ?>
          <tr>
            <th><?php echo $row1['NAME']; ?></th>
            <th><?php echo $row1['ROLL']; ?></th>
            <th><?php echo $row1['DEPARTMENT']; ?></th>
            <th><?php echo $row1['YEAR']; ?></th>
            <th><?php echo $row1['SECTION']; ?></th>
            <th><?php echo $row1['BLOOD']; ?></th>
            <th><?php echo $row1['HOME']; ?></th>
            <th><?php echo $row1['STAYING']; ?></th>
            <th><?php echo $row1['WILLING']; ?></th>
            <th><?php echo $row1['PHONE']; ?></th>
            <th><?php echo $row1['PHONE2']; ?></th>
          </tr>
      <?php
              }
            } 
            else 
            {
              $qurey2 = "SELECT * FROM blood WHERE BLOOD LIKE '%$bg%' AND HOME LIKE '%$area%';";
              $result2 = mysqli_query($conn, $qurey2);
              while ($row2 = mysqli_fetch_array($result2, MYSQLI_ASSOC)) 
              { ?>
          <tr>
            <th><?php echo $row2['NAME']; ?></th>
            <th><?php echo $row2['ROLL']; ?></th>
            <th><?php echo $row2['DEPARTMENT']; ?></th>
            <th><?php echo $row2['YEAR']; ?></th>
            <th><?php echo $row2['SECTION']; ?></th>
            <th><?php echo $row2['BLOOD']; ?></th>
            <th><?php echo $row2['HOME']; ?></th>
            <th><?php echo $row2['STAYING']; ?></th>
            <th><?php echo $row2['WILLING']; ?></th>
            <th><?php echo $row2['PHONE']; ?></th>
            <th><?php echo $row2['PHONE2']; ?></th>
          </tr>
      <?php
              }
            }
          } 
          else 
          {
            if ($wil == "yes") 
            {
              $qurey3 = "SELECT * FROM blood WHERE BLOOD LIKE '%$bg%' AND HOME LIKE '%$area%' AND 	DEPARTMENT='$dept' AND 	WILLING='$yes' ;";
              $result3 = mysqli_query($conn, $qurey3);
              while ($row3 = mysqli_fetch_array($result3, MYSQLI_ASSOC)) 
              { ?>
          <tr>
            <th><?php echo $row3['NAME']; ?></th>
            <th><?php echo $row3['ROLL']; ?></th>
            <th><?php echo $row3['DEPARTMENT']; ?></th>
            <th><?php echo $row3['YEAR']; ?></th>
            <th><?php echo $row3['SECTION']; ?></th>
            <th><?php echo $row3['BLOOD']; ?></th>
            <th><?php echo $row3['HOME']; ?></th>
            <th><?php echo $row3['STAYING']; ?></th>
            <th><?php echo $row3['WILLING']; ?></th>
            <th><?php echo $row3['PHONE']; ?></th>
            <th><?php echo $row3['PHONE2']; ?></th>
          </tr>
      <?php
              }
            } 
            elseif ($wil == "no") 
            {
              $qurey4 = "SELECT * FROM blood WHERE BLOOD LIKE '%$bg%' AND HOME LIKE '%$area%' AND 	DEPARTMENT='$dept' AND 	WILLING='$no';";
              $result4 = mysqli_query($conn, $qurey4);
              while ($row4 = mysqli_fetch_array($result4, MYSQLI_ASSOC)) 
              { ?>
          <tr>
            <th><?php echo $row4['NAME']; ?></th>
            <th><?php echo $row4['ROLL']; ?></th>
            <th><?php echo $row4['DEPARTMENT']; ?></th>
            <th><?php echo $row4['YEAR']; ?></th>
            <th><?php echo $row4['SECTION']; ?></th>
            <th><?php echo $row4['BLOOD']; ?></th>
            <th><?php echo $row4['HOME']; ?></th>
            <th><?php echo $row4['STAYING']; ?></th>
            <th><?php echo $row4['WILLING']; ?></th>
            <th><?php echo $row4['PHONE']; ?></th>
            <th><?php echo $row4['PHONE2']; ?></th>
            </tr4>
      <?php
              }
            } 
            else 
            {
              $qurey5 = "SELECT * FROM blood WHERE BLOOD LIKE '%$bg%' AND HOME LIKE '%$area%' AND 	DEPARTMENT='$dept';";
              $result5 = mysqli_query($conn, $qurey5);
              while ($row5 = mysqli_fetch_array($result5, MYSQLI_ASSOC)) 
              { ?>
          <tr>
            <th><?php echo $row5['NAME']; ?></th>
            <th><?php echo $row5['ROLL']; ?></th>
            <th><?php echo $row5['DEPARTMENT']; ?></th>
            <th><?php echo $row5['YEAR']; ?></th>
            <th><?php echo $row5['SECTION']; ?></th>
            <th><?php echo $row5['BLOOD']; ?></th>
            <th><?php echo $row5['HOME']; ?></th>
            <th><?php echo $row5['STAYING']; ?></th>
            <th><?php echo $row5['WILLING']; ?></th>
            <th><?php echo $row5['PHONE']; ?></th>
            <th><?php echo $row5['PHONE2']; ?></th>
          </tr>
      <?php
              }
            }
          }
        }
  ?>
</table>
</body>

</html>