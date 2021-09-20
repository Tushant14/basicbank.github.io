<?php
include 'data.php';

if (isset($_POST['submit'])) {
    $form = $_GET['id'];
    $to = $_POST['to'];
    $amount = $_POST['amount'];

    $selectQueryFrom = "SELECT * from customers where id=$form";
    $query = mysqli_query($conn, $selectQueryFrom);
    $result1 = mysqli_fetch_array($query);

    $selectQueryTo = "SELECT * from customers where id=$to";
    $query = mysqli_query($conn, $selectQueryTo);
    $result2 = mysqli_fetch_array($query);

    // Checking if the amount is negative
    if (($amount) < 0) {
        echo '<script type="text/javascript">';
        echo ' alert("Oops! Negative values cannot be transferred")';  // showing an alert box.
        echo '</script>';
    }

    // constraint to check insufficient balance.
    else if ($amount > $result1['curr_balance']) {

        echo '<script type="text/javascript">';
        echo ' alert("Bad Luck! Insufficient Balance")';  // showing an alert box.
        echo '</script>';
    }

    // constraint to check zero values
    else if ($amount == 0) {

        echo "<script type='text/javascript'>";
        echo "alert('Oops! Zero value cannot be transferred')";
        echo "</script>";
    } else {
        $newbalance = $result1['curr_balance'] - $amount;
        $updateSenderQuery = "UPDATE customers set curr_balance=$newbalance where id=$form";
        mysqli_query($conn, $updateSenderQuery);

        $newbalance = $result2['curr_balance'] + $amount; 
        $updateReceiverQuery = "UPDATE customers set curr_balance=$newbalance where id=$to";
        mysqli_query($conn, $updateReceiverQuery);

        // Insert in transaction history table
        $sender = $result1['name'];
        $receiver = $result2['name'];
        $insertQuery = "INSERT INTO `transfers`(`sender`, `receiver`, `amount`) VALUES ('$sender','$receiver','$amount')";
        $query = mysqli_query($conn, $insertQuery);

        if ($query) {

            echo '<script>';
            echo 'alert("Payment successfull");window.location="transactionhistory.php";';

            echo '</script>';
        } else {

            echo '<script>';
            echo 'alert("Something went wrong")';
            echo '</script>';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction</title>
    <link rel="stylesheet"  href="spark/css/style.css">
    <link rel="stylesheet" href="./css/info.css">
    <!-- Sweet alert -->
    <style>
        .user-info,
        .receiver-info h1 {
    color: black;
        }
    </style>

</head>

<body style="background-color: black;">
    <?php include "navbar.php" ?>
    <form action="" method="post">

        <div style="color:black" class="sender-info">
            <?php
            include 'data.php';
            $senderId = $_GET['id'];
            $selectSenderQuery = "SELECT * FROM  customers where id=$senderId";
            $result = mysqli_query($conn, $selectSenderQuery);
            $rows = mysqli_fetch_assoc($result);

            ?>
            <div class="user-info">
                <h1 class="heading-user" style=   "color: #17a2b8;font-family: fantasy;
    font-size: 40px;
    letter-spacing: 5px; text-shadow:1px 1px grey" ;
    >Sender Information</h1>
                
                <div class="info" style="background-color:beige">
                    <div>
                        <p style="color:black">Name</p>
                    </div>
                    <div>
                        <p><?php echo $rows['name'] ?></p>
                    </div>
                </div>
                <div class="info" style="background-color:beige">
                    <div>
                        <p style="color:black">Email</p>
                    </div>
                    <div>
                        <p><?php echo $rows['email'] ?></p>
                    </div>
                </div>
                <div class="info" style="background-color:beige">
                    <div>
                        <p style="color:black">Amount</p>
                    </div>
                    <div>
                        <p><?php echo $rows['curr_balance'] ?></p>
                    </div>
                </div>


            </div>
        </div>
        <div class="receiver-info" style="color:black;">
            <?php
            $selectRemainingUser = "SELECT * FROM customers where id!=$senderId";
            $result = mysqli_query($conn, $selectRemainingUser);
            ?>
            <div class="receiver">

                <h1 class="trans-heading" style=   "color: yellow;font-family: fantasy;
    font-size: 30px;
    letter-spacing: 3px;">Transfer To</h1>
                <div class="selectInput-section">
                    <select name="to" class="select-sender" required>
                        <option value="" disabled selected>---     Choose    ---</option>
                        <?php
                        while ($rows = mysqli_fetch_array($result)) {
                        ?>
                            <option value="<?php echo $rows['id'] ?>">
                                <?php echo $rows['name']; ?> (Balance:
                                <?php echo $rows['curr_balance']; ?> )
                            </option>
                        <?php
                        }

                        ?>
                    </select>

                </div>

            </div>
            <div class="amount">
                <h1 class="trans-heading" style=   "color: yellow;font-family: fantasy;
    font-size: 30px;
    letter-spacing: 3px;">Amount</h1>
                <div class="amountInput-section">
                    <input type="number" name="amount" id="" required>
                </div>
            </div>
            <div class="submit">
                <input class="submit-btn" type="submit" value="Transfer" name="submit" style=" background:limegreen;font-family: 'Amatic SC',cursive;">
            </div>
        </div>
    </form>





</body>

</html>