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
 $description=$_POST['description'];
 $img=$_FILES["image"]['name'];

 $sql="INSERT INTO lnf(name,phone,description,img) VALUES('$name','$phone','$description','$img')";
 
 if($obj->insert($sql))
 {
   move_uploaded_file($_FILES["image"]['tmp_name'], "assets/images/lnf/".$_FILES["image"]["name"]); 
       header("location:lnf.php");

 }
 else
 {
     
     $_SESSION['done']="Request NOT Added";
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

<!-- /contact-form -->
  <section class="w3l-contact-main">
    <div class="contact-infhny py-5"  style="margin-top: 50px;">
      <div class="container py-lg-3">
        <div class="top-map">
          <div class="map-content-9">
            <form action="lnf.php" method="post" enctype="multipart/form-data">
              <div class="form-top1" style="padding-bottom: 20px;">
                <h3 class="hny-title text-center mb-lg-5 mb-4" data-aos="fade-down">LOST REQUEST</h3>
                <h6 class="hny-title text-center mb-lg-5 mb-4" data-aos="fade-down">* Collect from  Lost and found Department</h6>  
                <div class="form-top">
                <div class="form-top">


                  <div class="form-top-righ" data-aos="fade-up">

                       <input type="text" name="name" value="<?php echo $_SESSION['name']; ?>" id="w3lName" placeholder="Name" required="">

                        <input type="text" name="phone" value="<?php echo $_SESSION['phone']; ?>" id="w3lName" placeholder="Contact Number" required="">

                  </div>

                  
                <div class="form-top-righ" data-aos="fade-up">

                    <textarea name="description" id="w3lMessage" placeholder="Describe The Item" required=""></textarea>

                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="image" multiple id="file-simple" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                </div>

                <div class="text-center">
                  <button type="submit" style="margin-top: 20px;" name="submit">Submit Now</button>
                </div>
              </div>
            </form>
          </div>
 

  </section>
  <!-- //contact-form -->

  <section class="w3l-contact-main">
    <div class="contact-infhny py-5" style="margin-top: 0px;">
      <div class="container py-lg-3">
        <div class="top-map">
          <div class="map-content-9">
            <form action="https://sendmail.w3layouts.com/submitForm" method="post">
              <div class="form-top1_rule" style="margin-top: 2px;">
    <div class="banner-button" data-aos="fade-down">
        <table >
            <tr>
          <th>DESCRIPTION</th>
          <th width="150px">DOWNLOAD</th>
         </tr>
<?php                                
 $obj=new Crud();
 $sql="SELECT * FROM lnf";
 $res=$obj->fetch($sql);
 
while($row=mysqli_fetch_array($res))
{
?>                  
            <tr>
            
              <td><?php echo $row['name']?> || <?php echo $row['description']?></td>
              <td class="button1"><a href="assets/images/lnf/<?php echo $row['img']?>" data-gallery>IMAGE</a>
            </td>
         </tr> 
<?php } ?>
        </table> 
               </div>
              </div>
            </form>
          </div>
 

  </section>






	<?php include('assets/res/footer.php');
    }
    else
    {header("location:Login.php");}
?>