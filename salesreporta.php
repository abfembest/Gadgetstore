<?php include 'hint.php'; ?>
<html>
<head>
  <title>UNCLE JOE COMPANY</title>
  <link rel="stylesheet" type="text/css" href="hidden_print.css">
<style type="text/css">
  th{
    font-size: 12px;
    text-transform: uppercase;
    text-align: top;

  }
</style>
</head>

<body class="hold-transition sidebar-mini" style="background: url('images/background.jpg'); background-size: cover;">
  <?php include 'datatableheader.php';
  include 'db_connect.php';?>
<center>
      <div>
        
  <form action="" method="POST">
    <span class="btn btn-info">
        <label class="hidden-print" style="color: white">Start date:</label> <input type="Date" required="required" class="hidden-print" id="date01" name="date1" placeholder="Enter Date to Search" >
        <label class="hidden-print"style="color: white">End Date:</label><input type="Date" required="required" id="date02" name="date2" class="hidden-print" placeholder="Enter Date to Search">
        <input type="hidden" name="username" value="<?php echo $_SESSION["name"]; ?>">
        <button name="search" value="Generate" id="submit1" class="hidden-print btn-info" onclick="show()"><i class="fa fa-search"></i></button>
    </span>          
  </form>
</div>
        <div style="max-width: 1000px;margin-top: 3px;">
          <div class="card">
            <div class="card-header">

              <h2 class="card-title"><a href="makesalesa.php"><button class="btn btn-info">Back</button></a> <b>Product reports for today  <span id="span1"><script type="text/javascript">
                var dat = new Date();
                var dat1 = dat.toLocaleDateString();
                document.write(dat1);
              </script></span> </b></h2>
            </div>
            <!-- /.card-header -->
            <div class="card-body" id="card1" style="">
              <input type="button" name="sales" value="Print." style="float:right;"class="hidden-print" id="btnPrint">
              <table id="example1" class="table table-bordered table-striped" style="background-color: white;">
                <thead>
                <tr>
                  <th>Products</th>
                  <th>Models</th>
                  <th>Quantity Sold</th>
                  <th>Unit price</th>
                  <th>Sales value</th>
                  <!--<th>Total daily expenses</th>
                  <th>Cash in hand</th>-->
                  <th>Date</th>

                </tr>
                </thead>
                <tbody>
                <?php
  if(isset($_POST['search'])){
    $dat1 = $_POST['date1'];
    $dat2 = $_POST['date2'];
    $username= $_POST['username'];
      $date = new DateTime($dat1);
      $dat1=$date->format('Y-m-d');
      $date = new DateTime($dat2);
      $date2 = $date->format('Y-m-d');     
          $sql ="SELECT product, specie,sum(quantity) as qsold, username, unit_price, transaction_date, Sum(quantity*unit_price) as value
            FROM joe.sales WHERE username ='$username' AND  transaction_date  BETWEEN '$dat1' AND '$dat2' GROUP BY transaction_date, specie";
        $result = $connect->query($sql);
        if ($result-> num_rows >0) {
          while ($row = $result-> fetch_assoc()) {
            echo ("<tr><td><a href='#'>".$row["product"]."</a>"."</td>
                  <td>".$row["specie"]."</td>
                 <td>".$row["qsold"]."</td>
                  <td>".$row["unit_price"]."</td>
                  <td>".$row["value"]."</td>                              
                  <td>".$row["transaction_date"]."</td>
                  </tr>");
           
  }
       
    # code...
   
  $sql ="SELECT product, specie,count(specie) as typeno  , sum(quantity) as qsold,
            (quantity*unit_price) AS value
            FROM joe.sales WHERE username ='$username' AND  transaction_date  BETWEEN '$dat1' AND '$dat2'";
            $result = $connect->query($sql);
            if ($result-> num_rows >0) {
              while ($row = $result-> fetch_assoc()) {
               $qinstock= $row["qsold"];
               $total_sales = $row["value"];
               $items = $row["typeno"];
           
            
  }
       
  echo "</table>";
  echo "<table style= 'margin-top: 2px;' class='table table-responsive'>";
   echo "<hr>";
  echo "<tr><h3>The sales analysis are detailed below: <h3></tr>";
  echo "<tr>";
  echo "<th>TOTAL ITEMS SOLD IN THE PERIOD </th><td><b>".($qinstock)."</b></td></td>
  <th>TOTAL SALES VALUE IN THE PERIOD</th>
          <td><b>₦".($total_sales)."</b></td>";
  
  echo "</tr>";
  echo "<tr>";
  #echo "<th>EGGS BALANCE C/D IN THE WEEK</th><td> <b>".($eggbal)."</b></td><th>TOTAL BALANCE C/D IN THE WEEK</th>
          #".($balancecd)."</b></td>";
       echo "</tr>";    
  echo "<tr><th></th><td></td><th><b>Remarks</b></th>
          <td> <b>---------------</b></td></tr>";
 

 
  echo "</table>";
  echo "</div>";
  echo "<hr style='backgroud-color:red;'>";
}

  else {
    echo "No sales yet.";
 
}
}
}
//}

  

//}
    $connect->Close();
  //}
  ?>
                </tbody>
                <tfoot>
                <!--<tr>
                  <th>EGGS IN STOCK B/F</th>
                  <th>Eggs produced</th>
                  <th>Eggs sold</th>
                  <th>Eggs Bal B/F</th>
                  <th>Cash in hand</th>
                  <th>Total daily sales</th>
                  <th>Total daily expenses</th>
                  <th>Balance C/F</th>
                  <th>Remarks</th>
                </tr>-->
                </tfoot>
                
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          
          <!-- /.card -->
    </div>
    </center>
        <!-- /.col -->
      <!-- /.row -->
    </section>
    <!-- /.content -->
  <!-- /.content-wrapper -->
  <!--<footer class="main-footer">-->
    <!--<div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.4
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
    reserved.
  </footer>-->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
<!-- ./wrapper -->

<!-- jQuery -->
<?php include 'datatablefooter.php';?>
<script type="text/javascript">
     function show() {
      document.getElementById("card1").style.display="block";
    }
      
  </script>
  <script type="text/javascript" src="print.js"></script>
</body>




</html>
