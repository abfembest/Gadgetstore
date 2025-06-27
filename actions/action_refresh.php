<?php session_start();
include 'db_connect.php';
$name = $_SESSION['name'];

if(isset($_POST['refresh'])){
   

}
$sql = "INSERT INTO sales (invoice_id, product,specie, quantity_instock, quantity_sold, quantity, unit_price, username, payment_method, transaction_date) SELECT invoice_id, product, specie, quantity_instock, quantity_sold, quantity, unit_price, username, payment_method, transaction_date FROM temp_sale;INSERT INTO invoice_table (username,transaction_date) VALUES ('$name',current_timestamp);DELETE FROM temp_sale";

if (mysqli_multi_query($connect, $sql)) {
    header('Location:../makesales.php');
} else {
    echo "Error completing sales: " . $connect->error;
}

$connect->close();
?>