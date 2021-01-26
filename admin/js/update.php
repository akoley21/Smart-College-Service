<?php 
include("php/sidebar.php");
?>
  <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Cleaning Dashboard</h1>
                  
                        
                        
                        
                        
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Cleaning Table
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>University Roll</th>
                                                <th>Mobile Number</th>
                                                <th>Room No.</th>
                                                <th>Description</th>
                                                <th>Time</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
 <?php 
include("assets/php/curd.php");
  $status="01";                                      
 $obj=new Crud();
 $sql="SELECT * FROM clean WHERE req='".$status."'";
 $res=$obj->fetch($sql);
 
while($row=mysqli_fetch_array($res))
{
?>                                       
                                        <tbody>
                                            <tr>
                                                <td><?php echo $row['name']?></td>
                                                <td><?php echo $row['uniroll']?></td>
                                                <td><?php echo $row['contact']?></td>
                                                <td><?php echo $row['room']?></td>
                                                <td><?php echo $row['des']?></td>
                                                <td><?php echo $row['dtim']?></td>
                                                <td>Update</td>
                                            </tr>
                                            
                                        </tbody>
 <?php } ?>                                       
                                    </table>
                                </div>
                            </div>
                            
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>University Roll</th>
                                                <th>Mobile Number</th>
                                                <th>Room No.</th>
                                                <th>Description</th>
                                                <th>Time</th>
                                            </tr>
                                            </tr>
                                     </thead>
 <?php     
 $status="02";
 $obj=new Crud();
 $sql="SELECT * FROM clean WHERE req='".$status."'";
 $resr=$obj->fetch($sql);

while($rowr=mysqli_fetch_array($resr))
{
?>                                         
                                        <tbody>
                                            <tr>
                                                <td><?php echo $rowr['name']?></td>
                                                <td><?php echo $rowr['uniroll']?></td>
                                                <td><?php echo $rowr['contact']?></td>
                                                <td><?php echo $rowr['room']?></td>
                                                <td><?php echo $rowr['des']?></td>
                                                <td><?php echo $rowr['dtim']?></td>
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
?>