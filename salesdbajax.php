<?php session_start(); 
$q = $_GET['q'];

include 'db_connect.php';
$query = "SELECT * FROM joe.products WHERE category = '$q'";
$result = mysqli_query($connect, $query);    

while($row = mysqli_fetch_array($result)) {
?>
 <div class="card card-info">
                  <div class="card-header">
                <h3 class="card-title">Sell your products here</h3>

              </div>

              </div>
              <form class="form-horizontal" action="actions/action_salesa.php" method="POST">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label">Products </label>
                    <div class="col-sm-8">
                      <div>
                      <input type="text" class="form-control" id="inputEmail3" placeholder="Email" id="Brand" name="product" class="wide" min="0" required="required" readonly value="<?php echo $row['category'];?>" >
                    </div>
                  </div> 
                </div>
                <div class="form-group row">
                  <!--<input type="text" name="total_instock" value="<?php #echo $row['total'];  ?> ">-->
                    <label for="inputEmail3" class="col-sm-4 col-form-label">Items:</label>
                    <div class="col-sm-8">
                      <div>
                         <SELECT class="form-control select2" name ="specie" required >
                          <option selected></option>
                           <?php
                  

                     $query = "SELECT category, type FROM joe.products  where category='$q'";
                    $result = mysqli_query($connect, $query);
                    while ($row = mysqli_fetch_array($result)) {
                            echo "<option value='" .$row['type']."'>" . $row['type'] . "</option>";
                             }
                           
                          ?>
                          </SELECT>
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
                      <input type="number" class="form-control" id="inputEmail3" placeholder="Price per Kilo" id="Brand" name="unit_price" class="wide" min="0" required="required" >
                    </div>
                  </div> 
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label">Payment Method:</label>
                    <div class="col-sm-8">
                      <div>
                         <SELECT class="form-control select2" name ="payment_method" required>
                          <option selected></option>
                          <option value="cash">Cash</option>
                          <option value="transfer">Transfer</option>
                          <option value="both">Cash and Transfer</option>
                          <option value="cheque">Cheque</option>
                          </SELECT>
                    </div>
                  </div> 
                </div>
                </div>       
  
                    <?php 
                      $rowSQL = mysqli_query($connect, "SELECT MAX(invoice_id) AS maxid FROM invoice_table"); 
                    $row = mysqli_fetch_assoc($rowSQL);

                    $largestUID = $row['maxid']; 
                      
                      ?>
                      
                      <input type="hidden" class = "form-control" readonly="readonly"  width="10" name="invoice_id" value="<?php echo 'inv0'.$largestUID?>">
                    <input type="hidden" name="username" value="<?php echo $_SESSION["name"];?>">
                  <div class="card-footer">
                         
                          <button type="submit" name="submit" class="btn btn-info" style="width: 100%;">Click to sell</button>
                </div>
                            
  </form>
  </div>
</div>
  <?php
}
mysqli_close($connect);
?>
