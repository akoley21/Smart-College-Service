<?php
session_start();
if(isset($_SESSION['name']))
{
include('assets/php/curd.php');    
include('assets/res/header.php');
if(isset($_REQUEST['submit']))
{
    $obj=new Crud();
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $uniroll=$_POST['uni'];
    $room=$_POST['room'];
    $des=$_POST['des'];
    $req=$_POST['req'];
    $dtime=$_POST['dtime'];
$sql="INSERT INTO clean(name,uniroll,contact,room,des,dtim,req) VALUES('$name','$uniroll','$phone','$room','$des','$dtime','$req')";

if($obj->insert($sql))
{
    $_SESSION['done']="Request Added";
    
}
else
{
    $_SESSION['ndone']="Request not Added";
}
    
    
}
?>

  <section class="w3l-inner-page-main">
    <div class="breadcrumb1-infhny">
      <div class="container">
        <nav aria-label="breadcrumb">
          <h2 class="hny-title text-center">CLEAN</h2>
        </nav>
      </div>
    </div>
  </section>



  <!-- /rules -->
  <section class="w3l-contact-main">
    <div class="contact-infhny py-5" >
      <div class="container py-lg-3">
        <div class="top-map">
          <div class="map-content-9">
            <form >
              <div class="form-top1_rule">
                <h3 class="hny-title text-center mb-lg-5 mb-4" data-aos="fade-down">GUIDELINES</h3>
                <h4 class="hny-title text-center mb-lc-5 mb-4" data-aos="fade-down">1.REQUEST MUST BE RELEVENT.</h4>
                <h4 class="hny-title text-center mb-lc-5 mb-4" data-aos="fade-down">2.CLEANING DONE WITHIN 15 MIN.</h4>
                <h4 class="hny-title text-center mb-lc-5 mb-4" data-aos="fade-down">3.FAKE REQUEST NOT BE TOLERATED. </h4>
                <h4 class="hny-title text-center mb-lc-5 mb-4" data-aos="fade-down">4.NO RE-REQUEST WITHIN 20 MINUTE.</h4>
                <h4 class="hny-title text-center mb-lc-5 mb-4" data-aos="fade-down">5.UNIVERSITY ROLL & ROOM NO. IS MANDETORY.</h4>
                
               
              </div>
            </form>
          </div>
 

  </section>


<!-- /contact-form -->
  <section class="w3l-contact-main" >
    <div class="contact-infhny py-5">
      <div class="container py-lg-3">
        <div class="top-map">
          <div class="map-content-9">
            <form action="cl.php" method="post">
              <div class="form-top1">
                <h3 class="hny-title text-center mb-lg-5 mb-4" data-aos="fade-down">CLEANING REQUEST</h3>
                <div class="form-top">


                	<div class="form-top-righ" data-aos="fade-up">

                  		 <input type="text" name="name" value="<?php echo $_SESSION['name']; ?>"id="w3lName" placeholder="Name" required="">
               		 </div>

                  <div class="form-top-left" data-aos="fade-up">

                    

                    <input type="text" name="uni" value="<?php echo $_SESSION['uniroll']; ?>" id="w3lSender" placeholder="University Roll" required="" min ="11" max="11">

                    <input type="text" name="phone" value="<?php echo $_SESSION['phone']; ?>" id="w3lName" placeholder="Contact Number" required="">
                    
                    <input type="text" name="req" value="pending" id="w3lName" placeholder="Contact Number" hidden required="">

                    <input type="text" name="room" id="w3lroom" placeholder="Room Number/Room Name" required="">
                    <input type="text" name="dtime" id="w3lroom" value="<?php
                            date_default_timezone_set('Asia/Kolkata');
                            echo date('d-m-Y H:i');
                            ?>" required="" hidden>

                  </div>
                  
                <div class="form-top-righ" data-aos="fade-up">

                    <textarea name="des" id="w3lMessage" placeholder="Describe The Problem" required=""></textarea>
                  </div>
                </div>

                <div class="text-center">
                  <button type="submit" name="submit">Submit Now</button>
                </div>
              </div>
            </form>
          </div>
 

  </section>
  <!-- //contact-form -->


	<?php include('assets/res/footer.php');
    }
    else
    {header("location:Login.php");}
?>
          
