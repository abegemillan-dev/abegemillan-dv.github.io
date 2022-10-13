<?php
function createRandomPassword(){
	$chars = "003232303232023232023456789";
	srand((double)microtime()*1000000);
	$i = 0;
	$pass = '' ;
	while ($i <= 7) {

		$num = rand() % 33;

		$tmp = substr($chars, $num, 1);

		$pass = $pass . $tmp;

		$i++;

	}
	return $pass;
}
$finalcode='RS-'.createRandomPassword();
?>
<!DOCTYPE html>
<html lang="en-US"> 
    
 <head>
    <title>CTSEP DASHBOARDNAV</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="img/png" href="image/casalogo.png">
	  <link rel="stylesheet"  href="bootstrap/bootstrap.css">
		<link rel="stylesheet" href="bootstrap/bootstrap-theme.css">
    <link rel="stylesheet" href="bootstrap/bootstrap-theme.min.css">
		<link rel="stylesheet"  href="bootstrap/bootstrap.css.map">
		<link rel="stylesheet"  href="bootstrap/bootstrap.min.css">
		<link rel="stylesheet"  href="bootstrap/bootstrap.min.css.map">
		<link rel="stylesheet"  href="bootstrap/bootstrap-grid.css">
		<link rel="stylesheet"  href="bootstrap/bootstrap-grid.css.map">
		<link rel="stylesheet"  href="bootstrap/bootstrap-grid.min.css.">
		<link rel="stylesheet"  href="bootstrap/bootstrap-grid.min.css.map">
		<link rel="stylesheet"  href="bootstrap/bootstrap-reboot.css">
		<link rel="stylesheet"  href="bootstrap/bootstrap-reboot.css.map">
		<link rel="stylesheet"  href="bootstrap/bootstrap-reboot.min.css">
		<link rel="stylesheet"  href="bootstrap/bootstrap-reboot.min.css.map">
		
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     
<style>
  
.body{
  font-family: Arial, Helvetica, sans-serif;
   /*background-color: gainsboro;*/
}

.navbar { 
    /*#337ab7; */
    background-color: #69388F;
    width: 99.90%;
    height: 5%;
    position: fixed;
    margin: 1px;
    margin-top: 0;
    float: top;
    
}

.navbar a{
  float: center;
  font-size: 16px;
  color: #1e9acc;
  text-align: right;
  padding: 14px 16px;
  text-decoration: none;
  float: right;

}

.dropdown {
  float: left;
  color: #FFB505;
  height: 2px;
  list-style: none;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: skyblue;
  padding: 14px 16px;
  background-color: inherit;
 /* background-color: black; */
  font-family: inherit;
  margin: 0;

}

.navbar a:hover, .dropdown:hover .dropbtn {
    /* background-color: #1d5a8e;*/
    /*background-color: grey; */
 background-color: #FFB505; 
  color: #69388F;

  }

.dropdown-content {
  color: white;
  display: none;
  position: absolute;
  /*background-color: #337ab7;*/
  background-color: #1A46E8;
  min-width: 160px;
  box-shadow: 0px 9px 10px 0px rgba(0,0,0,0.2);
  z-index: 1;
  color: #1A46E8;
}

.dropdown-content a {
  float: none;
  color: whitesmoke;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
  
}

.dropdown-content a:hover {
  /*background-color: #1d5a8e;*/
    background-color: #196d6d;


  }

.dropdown:hover .dropdown-content {
  display: block; 
}

/*.selector-for-some-widget {
  box-sizing: content-box;
} */
</style> 
</head>
<body>
    
<!-- <nav class="navbar navbar-inverse navbar-fixed-top" > -->
<nav class="navbar navbar-expand-sm lg-big navbar-fixed-top" > 
    <div class="container-fluid" style="text-align: right;"> 
      <div class="navbar-header" >
       <button type="button" class="navbar-toggle" .data-toggle="collapse" .data-target="#myNavbar" style="text-align: right;">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
       </button>
      <div class="dropdown">
        <a href="#" TITLE="CASA TEODORA SPECIALEVENT PLACE LOGO"><img src="image/casalogo.png" width="80px" height="25px" class="logo"></a>
         </div>
         </div>
   
   
        <div class="dropdown">
          <a href="adminpage.php"><i class="glyphicon glyphicon-home"></i>&nbsp;HOME</a>
           </div> 

        			  
		  <div class="dropdown">
           <button class="dropbtn"><i class="glyphicon glyphicon-tasks"></i>&nbsp;MAINTENANCE
             <i class="fa fa-caret-down"></i>
              </button>
              <div class="dropdown-content">
               <a href="viewall_customer.php">Customer Information for Reservation</a>
				<a href="viewall_hall.php">Function Hall</a>
                  <a href="SetPassword.php">Hired Workers</a>
            <!--  <a href="SetPassword.php">Update Employee</a>-->
			<!--  <a href="view_onlinereservation.php">Update Reservation (from Web)</a>
				   <a href="edit_walkin.php">Update Walk-in</a>	-->
                    <a href="approved_customer.php">Reservation for Booking</a>
				    <!--  <a href="booking_transactions.php">Update Booking</a> -->
				       </div>
                        </div>
     
       <div class="dropdown">
           <button class="dropbtn">TRANSACTION
             <i class="fa fa-caret-down"></i>
              </button>
              <div class="dropdown-content"> 
           <!-- <a href="create_customer.php">Booking</a> -->
               <!--<a href="update_booked.php">Direct Booking</a>-->
				<a href="booking_transactions.php"><i class="glyphicon glyphicon-book"></i>&nbsp;Booking</a>
				 </div> 
                   </div> 
     
        <div class="dropdown">
              <button class="dropbtn">MONITORING
                <i class="fa fa-caret-down"></i>
                 </button>
                 <div class="dropdown-content"> 
                  <a href="all_customer.php">View Customer Information</a>
                  <!-- <a href="viewing_hall.php">View Function Hall</a>  -->
                    <a href="viewing_booking.php">View Booking</a>
                      <a href="viewing_reservation.php">View Aprroved Reservation</a>
                      <a href="event_history.php">View Event History</a>
                      <!-- <a href="notif.php">View Inquiries</a> -->
                        <!-- <a href="view_walkin.php">View Walk-in</a>	
                         <a href="all_employee.php">View Hired Workers Information</a>
                           <a href="viewing_disapproved.php">View Archived</a> -->
                            </div>
                             </div> 
        
     <div class="dropdown" >
         <a href="reports.php"><i class="glyphicon glyphicon-list-alt"></i>&nbsp;  R E P O R T S</a>
           </div>
     
          <div class="dropdown">
           <button class="dropbtn "><i class="glyphicon glyphicon-wrench"></i> UTILITY
            <i class="fa fa-caret-down"></i>
             
              </button>
              <div class="dropdown-content"> 
                <!--<a href="disapproved_customer.php">Restore Customer Details</a> -->
                <a href="disapproved_customer.php" class="glyphicon glyphicon-trash">&nbsp;Archive</a>
				 <!-- <a href="viewing_disapproved.php">View Archive</a>-->
                    </div> 
                      </div> 
     
		           
     <!--    <li class="">
                    //*!-- Menu Toggle Button*/ 
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<a href="logout.php" class="dropdown-toggle">L O G  O U T &nbsp;&nbsp;|&nbsp;&nbsp;<?php echo $_SESSION['username'];?>
                     <i class="glyphicon glyphicon-log-out"></i> 
                         </a></li>    -->             
                    
    </div>
 </nav >  
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script> 
</body>
</html>
