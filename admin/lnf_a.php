<?php 
session_start();
if(isset($_SESSION['name']))
{
include("php/sidebar.php");
?>
  <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Lost & Found Dashboard</h1>
                  
                        
                        
                        
                        
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Lost Table
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Mobile Number</th>
                                                <th>Description</th>
                                                <th>Image</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
 <?php 
include("assets/php/curd.php");                                   
 $obj=new Crud();
 $sql="SELECT * FROM lnf";
 $res=$obj->fetch($sql);
 
while($row=mysqli_fetch_array($res))
{
?>                                       
                                        <tbody>
                                            <tr>
                                                <td><?php echo $row['name']?></td>
                                                <td><?php echo $row['phone']?></td>
                                                <td><?php echo $row['description']?></td>
                                                <td><img src=../assets/images/lnf/<?php echo $row['img']?> height="50px" width="50px"></td>
                                                <td>
                                                  <a href="php/lnf_del.php?id=<?php echo $row['id']; ?>">
                                                    <button type="submit" name="reject" class="btn btn-danger"><i class="fa fa-times" aria-hidden="true"></i></button></a>   
                                                </td>
                                            </tr>
                                            
                                        </tbody>
 <?php } ?>                                       
                                    </table>
                                </div>
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