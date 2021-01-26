<?php
session_start();
if(isset($_SESSION['name']))
{
    
include('assets/res/header.php');

?>

  <section class="w3l-inner-page-main">
    <div class="breadcrumb-infhny">
      <div class="container">
        <nav aria-label="breadcrumb">
          <h2 class="hny-title text-center">UPDATE</h2>
        </nav>
      </div>
    </div>
  </section>

<!-- table -->
  <section class="w3l-contact-main">
    <div class="contact-infhny py-5" >
      <div class="container py-lg-3">
        <div class="top-map">
          <div class="map-content-9">
            <form action="https://sendmail.w3layouts.com/submitForm" method="post">
              <div class="form-top1_rule">

                <div class="banner-button" data-aos="fade-down">
				<table >
  					<tr>
    			<th>DESCRIPTION</th>
    			<th width="150px">DOWNLOAD</th>
 				 </tr>
 <?php                                
include('assets/php/curd.php');        
 $obj=new Crud();
 $sql="SELECT * FROM up";
 $res=$obj->fetch($sql);
 
while($row=mysqli_fetch_array($res))
{
?> 				 <tr>
  				  
  					  <td><?php echo $row['date']?> || <?php echo $row['description']?></td>
  					  <td class="button1"><a href="assets/updates/<?php echo $row['img']?>" data-gallery>Files</a>
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