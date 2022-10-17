<?php
    // var_dump($_POST);
    $name = $_POST['name'];
    $address = $_POST['address'];
    $telpNumber = $_POST['telpNumber'];
    $email = $_POST['email'];
    $deliveryInstruction = $_POST['deliveryInstruction'];
    // $toppings = "";
    if(isset($_POST['toppings1']) && !empty($_POST['toppings1'])){
        $toppings1 = $_POST['toppings1'];
    }
    if(isset($_POST['toppings2']) && !empty($_POST['toppings2'])){
        $toppings2 = $_POST['toppings2'];
    }
    if(isset($_POST['toppings3']) && !empty($_POST['toppings3'])){
        $toppings3 = $_POST['toppings3'];
    }
    if(isset($_POST['toppings4']) && !empty($_POST['toppings4'])){
        $toppings4 = $_POST['toppings4'];
    }
    if(isset($_POST['toppings5']) && !empty($_POST['toppings5'])){
        $toppings5 = $_POST['toppings5'];
    }
    if(isset($_POST['toppings6']) && !empty($_POST['toppings6'])){
        $toppings6 = $_POST['toppings6'];
    }
    if(isset($_POST['toppings7']) && !empty($_POST['toppings7'])){
        $toppings7 = $_POST['toppings7'];
    }

    $crust = $_POST['crust'];
    $count = $_POST['count'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pemesanan Pizza</title>
</head>
<body>
    <h1 align="center">Thank You</h1>
    <hr>
    <p>Thank you ordering from Black Goose Bistro. We have received the following information about your order</p>
    <table>
        <thead>
            <tr>
                <td colspan="2"><b><font color="red">Your Information</font></b></td>
            </tr>
        </thead>
        <tbody>
             <tr>
                <td><label>Name</label></td>
                <td>: <?= $name ?></td>
             </tr>
             <tr>
                <td><label><Address></Address></label></td>
                <td>: <?= $address ?></td>
            </tr>
            <tr>
                <td><label>Telephone Number</label></td>
                <td>: <?= $telpNumber ?></td>
            </tr>
            <tr>
                <td><label>Email Adress</label></td>
                   <td>: <?= $email ?></td>
             </tr>
        </tbody>
    </table>
    <p>
        <b>Delivery Instructions</b> : <?= $deliveryInstruction ?>
    </p>
    <table>
        <thead>
            <tr>
                <td colspan="2"><b><font color="red">Your Pizza</font></b></td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><label for=""><b>Crust</b></label></td>
                <td>: <?= $crust ?></td>
            </tr>
            <tr>
                <td><label for=""><b>Toppings</b></label></td>
                <td>: 
                    <?php if(isset($toppings1)){echo $toppings1;} ?>
                    <?php if(isset($toppings2)){echo $toppings2;} if(isset($toppings1)){echo ",";} ?>
                    <?php if(isset($toppings3)){echo $toppings3;} if(isset($toppings1) || isset($toppings2)){echo ",";} ?>
                    

                </td>
            </tr>
            <tr>
                <td><label for=""><b>Number</b></label></td>
                <td>: <?= $count ?></td>
            </tr>
        </tbody>
    </table>
    <hr>
    <p>This site is for educational purposes only. No Pizzas will be delivered.</p>
</body>
</html>