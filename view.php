<?php
include("connection.php");
$sql="select * from customers";
$result=mysqli_query($con,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="star.png" type="image/x-icon">
    <title>Donation list</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    
    
    <link rel="stylesheet" href="payment.css">
</head>
<body>
    <nav class="navbar navbar-inverse nav">
        <div class="container">
            <div class="navbar-header font">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" href="#"><span class="slack"><i class="bi bi-slack"></i></span>&nbsp;<span class="hh">H</span><span class="hh"></span><span class="el">ELPING </span><span class="hh">H</span><span class="el">ANDS</span></a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">

                    <li><a href="index.html"><i class="bi bi-house-door-fill"></i>Home</a></li>
                    <li><a href="index.html#section5">Donate Now</a></li>
                    </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <h1 class="text-center">Donation For Helping Hands</h1>
                    <br>
                    <hr>
                    <br>
        </div>
    </div>
    <?php
    if(mysqli_num_rows($result)>0)?>
    <table class="table-hover">
        <tr>
            <th>ID</th>
            <th>First_Name</th>
            <th>Last_Name</th>
            <th>Email</th>
            <th>City</th>
            <th>Donation_Amount</th>
        <tr>
    

    <?php
    $i=0;
    while($row=mysqli_fetch_array($result))
    {
    ?>
    <tbody>
    <tr>
        <td><?php echo $row["ID"];?></td>
        <td><?php echo $row["First_name"];?></td>
        <td><?php echo $row["Last_name"];?></td>
        <td><?php echo $row["Email"];?></td>
        <td><?php echo $row["City"];?></td>
        <td><?php echo $row["Donation_Amount"];?></td>
        <br>
    </tr>
    </tbody>
    
    <?php
    $i++;
}

?>
</table>
<section id="section10">
        <header>
            <nav class="navbar navbar-inverse foot">
                <div class="container">
                    <a class="navbar-brand" href="#"><b>Created By Minal Patil For Ansrcoach Project | All Rights Reserved!&copy; 2022</b></a>

                </div>
            </nav>
        </header>
    </section>
</body>
</html>