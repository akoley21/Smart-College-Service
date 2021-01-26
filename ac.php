<?php
session_start();
if(isset($_SESSION['name']))
{
include('assets/php/curd.php');     
include('assets/res/header.php');
if(isset($_REQUEST['submit']))
{
         $obj=new Crud();
        $id=$_POST['id'];
        $phone=$_POST['phone'];
        $email=$_POST['email'];
        $pass=$_POST['pass'];
        $sql="UPDATE signup SET email='$email',phone='$phone',pass='$pass' WHERE id=$id";

        if($obj->update($sql))
        {   
            
             header('location:ac.php');
            
           
        }
        else
        {
            $_SESSION['done']="Details Not Updated"; 
            
           
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
            <form action="ac.php" method="post">
              <div class="form-top1">
                <h3 class="hny-title text-center mb-lg-5 mb-4" data-aos="fade-down">Profile</h3>
                <div class="form-top">
<?php                                
 $obj=new Crud();
 $id=$_SESSION['id'];
 $sql="SELECT * FROM signup WHERE id=$id";
 $res=$obj->fetch($sql);
 
while($row=mysqli_fetch_array($res))
{
?>  
                  <div class="form-top-left" data-aos="fade-up">
                    
                    <input type="text" name="name" id="w3lName" placeholder="Name" value="<?php echo $row['name']?>"required="" readonly>

                    <input type="text" name="email" id="w3lSender" placeholder="Email" value="<?php echo $row['email']?>"  required="">

                    <input type="text" name="phone" id="w3lName" placeholder="Mobile NO." value="<?php echo $row['phone']?>"  required="">

                  </div>

                  <div class="form-top-righ" data-aos="fade-up">
                     <h6>University Roll</h6>
                     <input type="text" name="uniroll" id="w3lName" placeholder="University Roll" value="<?php echo $row['uniroll']?>"  readonly required="">
                    <h6>Password</h6>
                    <input type="text" name="pass" id="w3lName" placeholder="Password" value="<?php echo $row['pass']?>"  required="">
                    <input type="hidden" name="id" value="<?php echo $row['id']?>">
                  </div>

                  </div>
<?php } ?>
                <div class="text-center">
                  <button type="submit"  name="submit">Update</button>
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