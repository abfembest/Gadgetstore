<?php include 'sidemenua.php';
INCLUDE 'db_connect.php';

    ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background-color:#302b63;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 style="color: white;">Select product and search</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="reprinta.php" style ="color:white;">Reprint</a></li>
              <li class="breadcrumb-item"><a href="#" style ="color:white;">Expenses</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        <div class="row">
          <div class="col-10">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <form action="" method="GET">  

                      <span class="form-inline"><label>Products:&nbsp&nbsp&nbsp</label>
                        <select  id="product" name="product" onchange = "show(this.value)" required="required" class="form-inline select2">
                        <option style=""></option>
                        <?php

                            $query = "SELECT DISTINCT category FROM products";
                            $result = mysqli_query($connect, $query);    
                            while ($row = mysqli_fetch_array($result)){
                            echo "<option value='" .$row['category']."'>" . $row['category'] . "</option>";
                             } 
                          ?>
                        </option>
                      </select>
                      <!--<button name = "Search"><i class="fa fa-search"></i></button>-->
                    </span>
                    
                  </form> 
                 
                </h3>
                  <label style="margin-left: 20px;">
                    Your current cash sales: 
                        <?php
                        $username= $_SESSION["name"];
                       
                            $query = "SELECT unit_price, quantity,transaction_date, username, sum(unit_price*quantity) AS tsales FROM joe.sales WHERE transaction_date= current_date() AND username='$username'";
                            $result = mysqli_query($connect, $query);    
                            while ($row = mysqli_fetch_array($result)){
                              $sales = $row["tsales"];
                              echo '₦'.($sales); 
                             } 
                          ?>
                  </label>
                  <span class="btn btn-info">
                      <?php 
                      if (isset($_SESSION["status"])) {
                        echo $_SESSION["status"]; 
                        unset($_SESSION["status"]);
                      # code...
                    }
                    ?></span> 
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">

            <div class="row">
               <div class="col-sm-12">
           
                  
              <!-- /.card-header -->
              <!-- form start -->
          <div id="type">

          </div>

  

  <?php



                  
  //$connect->Close();
  ?>
  

                  
                
            </div>

              </div>
              <!-- /.card-body
              <div class="card-footer">
                Sales module...
              </div>-->
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
    <div class="col-md-10">
                
            <!-- general form elements disabled -->
            <div class="card card-warning">
              <div class="card-header">
                <a href="actions/action_refresha.php" style="float: right;"> <input type="button" name="refresh" value="Complete sales" class="btn btn-danger"> 
                  </a>
                <h3 class="card-title">Sales List</h3> <span>
                  <?php if (isset($_SESSION["status"])) {
                    echo $_SESSION["status"]; 
                    unset($_SESSION["status"]);
                    # code...
                  } ?>
                </span>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                  <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      
                        <?php INCLUDE 'printpos/postable2a.php'; 
                        include 'select.php';
                        ?>
                     
                    </div>
                  </div>
         
         </div>   
      </div>
    </div>
  </div>
  <!-- /.content-wrapper-->
  <script>
function show(str) {
  if (str == "") {
    document.getElementById("type").innerHTML = "This service is not available.";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("type").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET","salesdbajax.php?q="+str,true);
    xmlhttp.send();
  }
}
</script>