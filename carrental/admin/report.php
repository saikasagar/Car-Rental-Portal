<?php 
session_start ();
if(!isset($_SESSION["uEmail"]))

	header("location:login.php"); 
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>report</title>
    <link rel="shortcut icon" href="../teachers/images/ams.ico" type="image/x-icon">
    <link rel="stylesheet" href="../dashboard/css/dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" integrity="sha256-46r060N2LrChLLb5zowXQ72/iKKNiw/lAmygmHExk/o=" crossorigin="anonymous" />
      <style>
        table {
                font-family: arial, sans-serif;
                border-collapse: collapse;
                width: 60%;
                margin-top: 1%;
                margin-left: 20%;
                
                }
                th{
                background-color: #34495e;
                color: white;

                }

                td, th {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;
                }
                .print button{
                    font-family: 'Lato', sans-serif;
                    font-family: 'Roboto', sans-serif;
                   border-radius: 5px;
                   color: white;
                    background-color: #34495e;
                    margin-left: 78%;
                    width: 9%;
                    height: 35px;
                    cursor: pointer;
                   
                }
                @page{
                  size: A4;
                  margin: 0;
                }
                @media print{
                  .container{
                    display: none;
                  }
                  .left{
                    display:none;
                  }
                  .right{
                    display: none;
                  }
                  .mainClass{
                    display: none;
                  }
                  .print{
                    display: none;
                  }
                }
      </style>
</head>
<body>
<div class="left">
     <h1 style="color:white;  font-family: Poppins , sans-serif; margin-left: 24%; margin-top:2%; font-size:17px; ">
            <?php
            // Set the new timezone
            date_default_timezone_set('Asia/Kathmandu');
            $date = date('d-m-y');
            echo "Date :&nbsp;" . $date . "<br>";
    
            ?>
        </h1>
     </div>


    <div class="right">
        <a href="logout.php"><button><i class="fa fa-power-off">&nbsp; LOGOUT</i></button></a>
    </div>
    <br>
    <div class="middle">
    <div style="text-align: center;" class="mainClass">
                <h3 style="color:white">DayWise Report</h3><br>

                <form method="post" action="">
                <input type="hidden" name="rollno">
                <label style="color: white;">Select Date</label>
                <input type="date" name="date" style="padding:05px; width:300px; margin:5px;"><br>
                <label style="color: white;">Select Subject</label>
                    <select name="course" style="padding:05px; width:300px; margin:5px;">
                    <option  value="">--Subjects--</option>
                    <option  value="np">Network Programming</option>
                    <option  value="ds">Distributed System</option>
                    <option  value="aj">Advance JAva</option>
                    <option  value="mp">Mobile Programming</option>
                    <option  value="ae">Applied Economics</option>
                  </select><br><br>
                  
                  <input type="submit" style="width: 80px; height:35px; background-color:green; color:white; border-radius:5px; margin-left:30%" name="sr_date" value="Search"  >
                </form>
    </div>
    <?php
    include('db.php');
        if(isset($_POST['sr_date'])){

            $course= $_POST['course'];
            $date = $_POST['date'];
            $all_query ="select a.*, s.std_name from attendances a, students s where std_id= student_id and date = '$date' and course = '$course' ";

            $massreport = mysqli_query($con,$all_query);
       
           }
           if(isset($_POST['sr_date'])){
       
             ?>
       
           <table style="margin-left: 28%; margin-top:5%;" class="table table-stripped">
             <thead>
               <tr>
                 <th scope="col">Rollno</th>
                 <th scope="col">Name</th>
                 <th scope="col">Status</th>
                 <th scope="col">Course</th>
                 <th scope="col">Date</th>
                 
               </tr>
            </thead>
       
       
           <?php
       
            while ($data = mysqli_fetch_assoc($massreport)) {
       
            ?>
               <tbody style="color: white;">
                  <tr>
                    <td><?php echo $data['student_id']; ?></td>
                    <td><?php echo $data['std_name']; ?></td>                    
                    <td><?php echo $data['status']; ?></td>
                    <td><?php echo $data['course']; ?></td>
                    <td><?php echo $data['date']; ?></td>
                  
                  </tr>
               </tbody>
       
            <?php 
          } 
          ?>

          <div class="print">
               <button onclick="window.print()">Print/Download</button>
           </div>
           <?php
         }
         ?>
            
           </table>




    <div class="container">
        <input type="checkbox" id="check">
        <!-- <label for="check" class="open"><i class="fas fa-bars"></i></label> -->
        <div class="sidebar-wrapper">
            <div class="sidebar">
                <div class="avatar-wrapper">
                    <!-- <label for="check" class="close"><i class="fas fa-times"></i></label> -->
                    <img class="avatar" src="../teachers/images/xx.png" alt="avatar">
                    <p class="userName">AMS</p>
                </div>
                <nav>
                    <ul class="menu">
                        <li><a href="dashboard.php"><i class="fa fa-home"></i> Dashboard</a></li>
                        <li><a href="students.php"><i class="fa fa-graduation-cap"></i> Students</a></li>
                        <li><a href="courses.php"><i class="fa fa-book"></i> Courses</a></li>
                        <li><a href="teachers.php"><i class="fa fa-users"></i> Teachers</a></li>
                        <!-- <li><a href="subject.php"><i class="fa fa-book"></i> Subjects</a></li> -->
                        <li><a href="attendance1.php"><i class="fa  fa-check"></i> Attendance</a></li>

                        <li><a href="treport.php"><i class="fa fa-file"></i>Individual Report</a></li>
                        <li><a href="dreport.php"><i class="fa fa-newspaper"></i>DayWise Report </a></li>
                        <li><a href="admin.php"><i class="fa fa-cog"></i>admin</a></li>

                    </ul>
                </nav>
            </div>
        </div>
    </div>






</body>

</html>