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
                                Student Table
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
$sql="SELECT * FROM signup WHERE status='done' ";
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
                                                    <a href="php/student_del.php?id=<?php echo $row['id']; ?>">
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
<?php 
include("php/footer.php");
}
else
{
    {header("location:Login.php");}
}
?>