<?php 
session_start();
if(isset($_SESSION['name']))
{
include("php/sidebar.php");
?>
            <div id="layoutSidenav_content">
                <main>

                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Feedback from Students
                            </div>

                            <div class="card-body">
                              <div class="row">
<?php 
include('../assets/php/curd.php');
$obj=new Crud();
$sql="SELECT * FROM feedback ";
$res=$obj->fetch($sql);
while($row=mysqli_fetch_array($res))
{
    
?> 
                                    <div class="col-sm-4">
                                      <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                                        <div class="card-header"><?php echo $row['email']?>
                                        <a href="php/feedback_del.php?id=<?php echo $row['id']; ?>">
                                        <button class="btn btn-default"><i class="fa fa-times" aria-hidden="true"></i></button> </a>
                                        </div>
                                        <div class="card-body">
                                          <h5 class="card-title"><?php echo $row['name']?></h5>
                                          <h6 class="card-title"><?php echo $row['subject']?></h6>
                                          <p class="card-text"><h7 class="card-title"><?php echo $row['message']?></h7></p>
                                        </div>
                                      </div>
                                    </div>
<?php 
}
?>


                                  </div>
                                                                 
                            </div>
                          
                        </div>
                    
                </main>
                
            </div>
        </div>
<?php 
include("php/footer.php");
}
else
{
    {header("location:Login.php");}
}
?>