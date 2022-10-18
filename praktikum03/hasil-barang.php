
<?php
    if(isset($_POST['title'])){
        $titleAndAmount1 = $_POST['title'];
        $titleAndAmount2=explode("-",$titleAndAmount1);
        // var_dump(count($titleAndAmount2));
        // die;
        // $count= count($titleAndAmount2);
        // foreach($titleAndAmount2 as $key => $value){
            
        // }
        if(isset($titleAndAmount2[0])){

            $title = $titleAndAmount2[0];
        }else{
            $title = "Title Is Not Found";
        }
        if(isset($titleAndAmount2[1])){

            $amount = $titleAndAmount2[1];
        }else{
            $amount = "Amount Is Not Found";
        }
        
    }else{
        $title = "-";
        $amount = "-";
    }

    if(isset($_POST['description']) && !empty($_POST['description'])){
        $description = $_POST['description'];
    }else{
        $description = "-";
    }

    if(isset($_POST['bank']) && !empty($_POST['bank'])){
        $bank = $_POST['bank'];
    }else{
        $bank = "-";
    }
    if(isset($_POST['account_number']) && !empty($_POST['account_number'])){
        $account_number = $_POST['account_number'];
    }else{
        $account_number = "-";
    }

    if(isset($_POST['account_holder']) && !empty($_POST['account_holder'])){
        $account_holder = $_POST['account_holder'];
    }else{
        $account_holder = "-";
    }

    if(isset($_POST['check1']) && !empty($_POST['check1'])){
        $check1 = "check";
    }else{
        $check1 = "no";
    }

    if(isset($_POST['check2']) && !empty($_POST['check2'])){
        $check2 = "check";
    }else{
        $check2 = "no";
    }


    if(isset($_POST['mobile_phone']) && !empty($_POST['mobile_phone'])){
        $mobile_phone = $_POST['mobile_phone'];
    }else{
        $mobile_phone = "-";
    }

    if(isset($_POST['email']) && !empty($_POST['email'])){
        $email = $_POST['email'];
    }else{
        $email = "-";
    }

    if(isset($_FILES['image']) && !empty($_FILES['image']['name'])){
        $image = $_FILES['image'];
        $dirUpload = "public/files/";
        $nameFile = time()."_".$image['name'];
        move_uploaded_file($image['tmp_name'], $dirUpload.$nameFile);
    }else{
        $nameFile = "-";
    }
    // var_dump($image['tmp_name']);
    // die;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pemesanan Barang</title>
</head>
<style>
    body{
        margin:0px;
    }
    
     header {
        width : 80%;
        position: relative;
        margin-left:10%;
        margin-right: 10%;
        margin-top:2%;
        align-content: center;
        height: 50px;
        border: 1px solid black;
        /* margim:auto; */
    }
     header nav ul {
        /* margin: auto; */
        margin-left: 20%;
    }
     header nav ul li{
        margin: auto;
        list-style-type: none;
        float:left;
        padding-left: 65px;
    }

    .container{
        margin:5%;
        width: 90%;
    }
    .image{
        width: 300px;
        height: 300px
        overflow:hidden;
        /* border: 1px solid black; */
    }
    table{
        width: 100%;
    }
    table tr td{
        padding:5px;
    }
</style>
<body>
        <!-- header -->
        <header>
            <nav>
                <ul>
                    <li>
                        <a href="">Home</a>
                    </li>
                    <li> | </li>
                    <li>
                        <a href="">Register</a>
                    </li>
                    <li> | </li>
                    <li>
                        <a href="">Policy</a>
                    </li>
                    <li> | </li>
                    <li>
                        <a href="">Logout</a>
                    </li>
                </ul>
            </nav>
        </header>

        <!-- content -->
        <main>
            <div class="container">
                <form action="" method="post">
                    <table>
                        <tr>
                            <td rowspan="4" style="width: 220px;">
                                <div class="image">
                                    <img src="<?php if($nameFile == '-'){echo 'public/assets/upload.png';}else{echo 'public/files/'.$nameFile;}?>" alt="upload" height="300px" width="300px">
                                </div>
                            </td>
                            <td><label for="title">Title Here</label></td>
                            <td>:</td>
                            <td><?= $title;  ?></td>
                        </tr>
                        <tr>
                            <td><label for="description">Description</label></td>
                            <td>:</td>
                            <td><?= $description; ?></td>
                        </tr>
                        <tr>
                            <td><label for="account_number">Total Amount</label></td>
                            <td>:</td>
                            <td><?= $amount ?></td>
                        </tr>
                        <tr>
                            <td><label for="account_number">Pay To</label></td>
                            <td>:</td>
                            <td>1873-12938124-123132</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><label for="">Payment Type</label></td>
                            <td>:</td>
                            <td>
                                <select name="payment_type" id="bank" required>
                                    <option value="Visa Debit">Visa Debit</option>
                                    <option value="Go Pay">Go Pay</option>
                                    <option value="Shoope Pay">Shoope Pay</option>
                                    <option value="GPN">GPN</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td rowspan="7"></td>
                            <td><label for="account_holder">Account holder</label></td>
                            <td>:</td>
                            <td><input type="text" name="account_holder" value = "<?= $account_holder; ?>" id="account_holder"></td>
                        </tr>
                        <tr>
                            <td>Account No.</td>
                            <td>:</td>
                            <td>
                                <input type="number" value="<?= $account_number ?>" id="" style="width: 30px;">
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td><label for="">* if the Transaction is for 3 person, choose 3 from the drop-down list</label></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td><input type="checkbox" name="check1" id="check1" value="check_send_to_mobile" <?php if($check1 == 'check'){echo "checked";} ?>>
                                <label for="">Send to Mobile Phone</label> 
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td><input type="checkbox" name="check2" id="check2" value="check_send_to_email" <?php if($check2 == 'check'){echo "checked";}?>>
                                <label for="">Send to email</label> 
                            </td>
                        </tr>
                        <tr>
                            <td><label for="mobile_phone"> Send to mobile Phone</label></td>
                            <td>:</td>
                            <td><input type="number" name="mobile_phone" id="" value="<?= $mobile_phone;  ?>" ></td>
                        </tr>
                        <tr>
                            <td><label for="email"> Send to Email</label></td>
                            <td>:</td>
                            <td><input type="email" name="email" id="email" value="<?= $email;  ?>"></td>
                        </tr>
                        <tr>
                           <td></td>
                           <td></td>
                           <td></td>
                           <td><button type="submit" style="background-color: rgb(5, 255, 5); margin-top:50px;">Genereate Nabr Link</button></td>
                        </tr>
                    </table>
                </form>
            </div>
        </main>
</body>
</html> 