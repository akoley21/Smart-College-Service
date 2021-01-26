<?php 
session_start();
if(isset($_SESSION['name']))
{
include("php/sidebar.php");
include('assets/php/curd.php');        
if(isset($_REQUEST['submit']))
{
 $obj=new Crud();
 $des=$_POST['des'];
 $dtim=$_POST['dtime'];
 $img=$_FILES["image"]['name'];

 $sql="INSERT INTO up(description,img,date) VALUES('$des','$img','$dtim')";
 
 if($obj->insert($sql))
 {
   move_uploaded_file($_FILES["image"]['tmp_name'], "../assets/updates/".$_FILES["image"]["name"]); 


 }
 else
 {
     
     $_SESSION['done']="Request NOT Added";
 }

}




?>
  <div id="layoutSidenav_content">
                <main>
                    
                    <div class="container-fluid">
                        <h1 class="mt-4">Update Dashboard</h1>
                  
                     <div class="card mb-4"> 
                     <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Update Input
                     </div>
            <form action="update.php" method="post" enctype="multipart/form-data">
            <div class="card-body">
                    <div class="input-group">
                    <input type="text" name="des" class="form-control py-4" placeholder="Description" required="" >
                    <input type="text" name="dtime" id="w3lroom" value="<?php
                            date_default_timezone_set('Asia/Kolkata');
                            echo date('d-m-Y' );
                            ?>" required="" hidden>
                    </div> 
                <br>   
                    <div class="input-group">
                         <div class="custom-file">
                        <input type="file" name="image" multiple id="file-simple" class="custom-file-input" id="exampleInputFile">
                             
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>  
                 <br>
                    <div class="text-center">
                            <button type="submit" class="btn btn-primary" name="submit">Submit Now</button>
                    </div>
             </div> 
            </form>
                        </div>    
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Update Log
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Description</th>
                                                <th>Date</th>
                                                <th>Files</th>
                                                <th>Action</th>
                                                
                                            </tr>
                                        </thead>
 <?php 

                                     
 $obj=new Crud();
 $sql="SELECT * FROM up";
 $res=$obj->fetch($sql);
 
while($row=mysqli_fetch_array($res))
{
?>                                       
                                        <tbody>
                                            <tr>
                                                <td><?php echo $row['description']?></td>
                                                <td><?php echo $row['date']?></td>
                                                <td><?php echo $row['img']?></td>
                                                <td>
                                                 <a href="php/update.php?id=<?php echo $row['id']; ?>">
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