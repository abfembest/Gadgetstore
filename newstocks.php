<?php include 'sidemenu.php';
include 'topmenu.php'; 
INCLUDE 'db_connect.php';

    ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background: url('images/background.jpg'); background-size: cover;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 style="color: white;">Select product and search</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#" style ="color:white;">Home</a></li>
              <li class="breadcrumb-item"><a href="expenses.php" style ="color:white;">Expenses</a></li>
              <li class="breadcrumb-item active" style ="color:white;">Fixed Layout</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <!--<form action="" method="POST">  

                      <span class="form-inline"><label>Products:&nbsp&nbsp&nbsp</label>
                        <select  id="product" name="product" required="required" class="form-inline">
                        <option style=""></option>
                        
                            #$query = "SELECT mainbrand FROM mainbrand ";
                            $#result = mysqli_query($connect, $query);    
                            #while ($row = mysqli_fetch_array($result)){
                            #echo "<option value='" .$row['mainbrand']."'>" . $row['mainbrand'] . "</option>";
                             #} 
                        
                        </option>
                      </select>
                      <button name = "Search"><i class="fa fa-search"></i></button>
                    </span>
                    
                  </form> -->
                 
                </h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">

            <div class="row">
               <div class="col-sm-6">
           
              <!--<?php
                 //if(isset($_POST['Search'])){
                   // $product = $_POST['product'];

                     //$query = "SELECT product, specie FROM brand  where product='$product'";
                    //$result = mysqli_query($connect, $query);
                    //while ($row = mysqli_fetch_array($result)) {
                    ?>
                  <div class="card card-info">
                  <div class="card-header">
                <h3 class="card-title">Register new Stocks</h3>

              </div>-->
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" action="actions/action_newstock.php" enctype='multipart/form-data' method="POST">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label">Category</label>
                    <div class="col-sm-8">
                      <div>
                      <input type="text" class="form-control" id="inputEmail3" placeholder="Item category" id="Brand" name="category" class="wide" min="0" required="required"  >
                    </div>
                  </div> 
                </div>

                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label">Item Type:</label>
                    <div class="col-sm-8">
                      <div>
                        <input type="text" class="form-control" id="inputEmail3" placeholder="Item type" id="Brand" name="type" class="wide" min="0" required="required"  >
                         <!--<SELECT class="form-control" name ="specie" required>
                          <option selected></option>
                        <?php
                            #$query = "SELECT product, specie FROM brand WHERE product ='$product'";
                            #$result = mysqli_query($connect, $query);    
                            #while ($row = mysqli_fetch_array($result)){
                            #echo "<option value='" .$row['specie']."'>" . $row['specie'] . "</option>";
                             #} 
                          #?>
                          </SELECT>-->
                    </div>
                  </div> 
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label">Quantity</label>
                    <div class="col-sm-8">
                      <div>
                      <input type="number" class="form-control" id="inputEmail3" placeholder="How many units?" id="Brand" name="quantity" class="wide" min="0" required="required" step=".02" >
                    </div>
                  </div> 
                </div>
                
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label">Price</label>
                    <div class="col-sm-8">
                      <div>
                      <input type="number" class="form-control" id="inputEmail3" placeholder="Price per Kilo" id="Brand" name="price" class="wide" min="0" required="required" >
                    </div>
                  </div> 
                </div>
                <!--<div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label">Description:</label>
                    <div class="col-sm-8">
                      <div>
                         <textarea class="form-control" id="exampleInputPassword1" placeholder="Briefly describe the produce.." name="description" required></textarea>
                    </div>
                  </div> 
                </div>
                </div>-->   
                
                    
                    <input type="hidden" name="username" value=" <?php echo $_SESSION["name"];?>">
                  <div class="card-footer">
                         
                          <button type="submit" name="submit" class="btn btn-info" style="width: 100%;">Click to save</button>
                </div>
                            
  </form>
  </div>
</div>

  <div class="col-md-6">
                
             
            <div class="card card-warning">
              <div class="card-header">
                
                <h3 class="card-title">Preview</h3>
              </div>
             
              <div class="card-body">
                  <div class="row">
                    <div class="col-sm-6">
                      <!--text input-->
                      <img src="images/desktop.png" style="max-width: 400px; max-height: 400px;"> 
                      
                        
                     
                    </div>
                  </div>
         
         </div>   
      </div>
    </div>

  <!--<?php
//}

  //}                
  //$connect->Close();
 // ?>
  

                  
                
            </div>

              </div>-->
              <!-- /.card-body -->
              <div class="card-footer">
                Sales module...
              </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper-->
