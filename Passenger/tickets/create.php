<?php 

 # Logic 
 require  "../../helpers/dbConnection.php";
 require '../../helpers/function.php';
 require '../../helpers/checkLoginPassenger.php';

  
 $sql_dest = "select * from destination order by id desc";
 $op_dest  = mysqli_query($con,$sql_dest);

 ////

 $sql_flight = "select * from flights order by id desc";
 $op_flight  = mysqli_query($con,$sql_flight);





  if($_SERVER['REQUEST_METHOD'] == "POST"){

    $zone = Clean($_POST['zone']);
    $time        = Clean($_POST['time']);
    $gate = Clean($_POST['no_gate']);
    $class = Clean($_POST['no_class']);
    $destination = Clean($_POST['des_id']);
    $flight = Clean($_POST['flight_id']);

    $errors = [];
//  zone validate
    if(!validate($zone,1)){
        $errors['Zone'] = "Field Required";
   
    }elseif(!validate($zone,4)){
        $errors['Zone'] = "Length Must >= 6 CH";
      }

      // time validate
      if(!validate($time,1)){
        $errors['Time'] = "Field Required";
       }elseif(!validate($time,12)){
         $errors['Time'] = "Invalid  Time Format";
      }
    
      //class_number validate

      if(!validate($class,1)){
        $errors['Class'] = "Field Required";
       }elseif(!validate($class,5)){
         $errors['Class'] = "Invalid Class";
      }
     //gate number validate

     if(!validate($gate,1)){
        $errors['Gate'] = "Field Required";
       }elseif(!validate($gate,5)){
         $errors['Gate'] = "Invalid Gate";
      }
     //destination id validate

     if(!validate($destination,1)){
        $errors['Destination'] = "Field Required";
       }elseif(!validate($destination,5)){
         $errors['Destination'] = "Invalid Airline";
      }
    
       //flight id validate

       if(!validate($flight,1)){
        $errors['Flight'] = "Field Required";
       }elseif(!validate($flight,5)){
         $errors['Flight'] = "Invalid Airline";
      }
    






    if(count($errors) > 0){
        $_SESSION['Message'] = $errors;
    }else{

       # Db Operation ..... 
$id=$_SESSION['id'];

       $sql = "insert into tickets (zone,time,no_gate,no_class,des_id,flight_id,traveller_id) values ('$zone','$time',$gate,$class,
       $destination,$flight,$id)";
       $op  = mysqli_query($con,$sql);

       if($op){
           $message = ['Data Inserted'];
       }else{
           $message = ['Error Try Again'];
       }
       $_SESSION['Message'] = $message;
       
     header("Location: http://localhost/week2/AdminLTE-3.0.5/Passenger/tickets/index.php");

       echo mysqli_error($con);
       exit();

      

    }

  }  // end form Logic ..... 

 require '../layouts/header.php';
?>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

<?php

 require '../layouts/navbar.php';


 require '../layouts/sidebar.php'; 

?>


<div class="content-wrapper">
<section class="content">


        <div class="container-fluid">
            <h1 class="mt-4">Dashboard</h1>
            <ol class="breadcrumb mb-4">


                <li class="breadcrumb-item active">
                    <?php
                $text = "Reserve Ticket";
               printMessage($text);
                ?>
                </li>

            </ol>




            <div class="container">

                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">


                    <div class="form-group">
                        <label for="exampleInputName">Zone</label>
                        <input type="text" class="form-control" name="zone" id="exampleInputName" >
                    </div>


                    <div class="form-group">
                        <label for="exampleInputName">Time</label>
                        <input type="text" class="form-control" name="time" id="exampleInputName" >
                    </div>

                    <div class="form-group">
                        <label for="exampleInputName">Number_Gate</label>
                        <input type="text" class="form-control" name="no_gate" id="exampleInputName" >
                    </div>

                    <div class="form-group">
                        <label for="exampleInputName">Number_Class</label>
                        <input type="text" class="form-control" name="no_class" id="exampleInputName" >
                    </div>


                    <div class="form-group">
                        <label for="exampleInputName">Choose ur Destination</label>
                        <select class="form-control" name="des_id">

<?php 
while($data = mysqli_fetch_assoc($op_dest)){
?>
<option value="<?php echo $data['id'];?>"> <?php echo $data['first_destination'];?>_<?php echo $data['last_destination'];?></option>
<?php } ?>
</select>
                    </div>

                    
                    <div class="form-group">
                        <label for="exampleInputName">Name_Flight</label>
                        <select class="form-control" name="flight_id">

<?php 
while($data = mysqli_fetch_assoc($op_flight)){
?>
<option value="<?php echo $data['id'];?>"> <?php echo $data['number'];?></option>
<?php } ?>
</select>
                    </div>






                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>

</div>


</section>

</div>


    <?php 

 require '../layouts/footer.php';

?>



<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="localhost/week2/AdminLTE-3.0.5/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="localhost/week2/AdminLTE-3.0.5/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="http://localhost/week2/AdminLTE-3.0.5/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="http://localhost/week2/AdminLTE-3.0.5/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="http://localhost/week2/AdminLTE-3.0.5/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="http://localhost/week2/AdminLTE-3.0.5/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="http://localhost/week2/AdminLTE-3.0.5/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="http://localhost/week2/AdminLTE-3.0.5/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="http://localhost/week2/AdminLTE-3.0.5/plugins/moment/moment.min.js"></script>
<script src="http://localhost/week2/AdminLTE-3.0.5/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="http://localhost/week2/AdminLTE-3.0.5/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="http://localhost/week2/AdminLTE-3.0.5/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="http://localhost/week2/AdminLTE-3.0.5/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="http://localhost/week2/AdminLTE-3.0.5/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="http://localhost/week2/AdminLTE-3.0.5/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="http://localhost/week2/AdminLTE-3.0.5/dist/js/demo.js"></script>
</body>
</html>