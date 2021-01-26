<?php 
session_start();
if(isset($_SESSION['name']))
{
    include("php/sidebar.php");


?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">RELDOR</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Smart College System</li>
                        </ol>
                        <div class="row">
                            
                            <div class=" col-md-8">
                              <div class="card bg-primary text-white mb-4">
                                    <div class="card-body"><h2>Registered Students Details</h2></div>
                                    


                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="records.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>  
                            </div>
                            <div class=" col-md-4">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body"><h2 id="currentTime"></h2></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        
                                        <div class="small text-white"><h7><?php echo $today = date("F j, Y"); ?></h7></i></div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Student Request Table
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Email id</th>
                                                <th>Mobile No.</th>
                                                <th>University Roll</th>
                                                <th>Password</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

<?php 
include('../assets/php/curd.php');
$obj=new Crud();
$sql="SELECT * FROM signup WHERE status='' ";
$res=$obj->fetch($sql);
while($row=mysqli_fetch_array($res))
{
    
?>    
                                            <tr>
                                                <td><?php echo $row['name']?></td>
                                                <td><?php echo $row['email']?></td>
                                                <td><?php echo $row['phone']?></td>
                                                <td><?php echo $row['uniroll']?></td>
                                                <td><?php echo $row['pass']?></td>
                                                <td>
                                                    <a href="php/approve.php?id=<?php echo $row['id']; ?>">
                                                    <button class="btn btn-success"><i class="fa fa-check" aria-hidden="true" ></i></button></a>
                                                     <a href="php/remove.php?id=<?php echo $row['id']; ?>">
                                                    <button type="submit" name="reject" class="btn btn-danger"><i class="fa fa-times" aria-hidden="true"></i></button></a>
                                                </td> 
                                            </tr>
<?php 
}
?>   
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                
            </div>
        </div>

<script>
window.onload = function() {
  clock();  
    function clock() {
    var now = new Date();
    var TwentyFourHour = now.getHours();
    var hour = now.getHours();
    var min = now.getMinutes();
    var sec = now.getSeconds();
    var mid = 'PM';
    if (sec < 10) {
      sec = "0" + sec;
    }
    if (min < 10) {
      min = "0" + min;
    }
    if (hour > 12) {
      hour = hour - 12;
    }    
    if(hour==0){ 
      hour=12;
    }
    if(TwentyFourHour < 12) {
       mid = 'AM';
    }     
  document.getElementById('currentTime').innerHTML =     hour+':'+min+':'+sec +' '+mid ;
    setTimeout(clock, 1000);
    }
}

</script>
<?php 
include("php/footer.php");
}

 else
    {header("location:Login.php");}
?>?>