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
    $email=$_POST['email'];
    $sub=$_POST['sub'];
    $msg=$_POST['msg'];
  $sql="INSERT INTO feedback(name,email,subject,message) VALUES('$name','$email','$sub','$msg')";

if($obj->insert($sql))
{
  
    $_SESSION['done']="Thank You";
    
}
else
{
    $_SESSION['done']="Thank You";
}
    
    
}
?>
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

<section id="team" class="pb-5">
    <div class="container">
        <h5 class="section-title h1"><b></b></h5>

            

        </div>
    </div>
</section>



  <section class="w3l-contact-main">
    <div class="contact-infhny py-5">
      <div class="container py-lg-3">
        <div class="top-map">
          <div class="map-content-9">
            <form action="abt.php" method="post">
              <div class="form-top1">
                <h3 class="hny-title text-center mb-lg-5 mb-4" data-aos="fade-down">Leave us a Message</h3>
                <div class="form-top">

                  <div class="form-top-left" data-aos="fade-up">

                    <input type="text" name="name" id="w3lName" placeholder="Name" required="">

                    <input type="text" name="email" id="w3lSender" placeholder="Email" required="">

                    <input type="text" name="sub" id="w3lName" placeholder="Subject" required="">

                  </div>
                  <div class="form-top-righ" data-aos="fade-up">
                    <textarea name="msg" id="w3lMessage" placeholder="Message" required=""></textarea>
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit"  name="submit">SEND</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>






	<?php include('assets/res/footer.php');
    }
    else
    {header("location:Login.php");}
?>