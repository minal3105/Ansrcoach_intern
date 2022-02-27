<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="star.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>


    <title>Payment Window</title>
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

                    <li><a href="index.html"><i class="bi bi-house-fill"></i>HOME</a></li>

                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <h1 class="text-center">Payment Window</h1>
            <br>
            <hr>
            <br>
        </div>
        <div class="jumbotron">
            
            <ol>
                <p>You agree that you will not accept payments in connection with Helping Hands, including but limited to the following:</p>
                <li>Illegal goods which include materials, products, or information promoting illegal goods or enabling illegal acts;</li>
                <li>Miracle cures which include unsubstantiated cures, remedies or other items marketed as quick health fixes;</li>
                <li>Any other activities prohibited by applicable law.</li>
                <li>If you want to Give some help For poor children</li>
                <li>please avoid if you are not donating by the mind</li>
                <li>if you want to feed a poor child's stomach.</li>

            </ol>
        </div>
        <form action="payment1.php" method="post">
            <input type="checkbox" id="check" name="main" value="main" required>If You Have Agree These All terms And Condition Then Please Click On checkbutton and Proceed For Payment.
            
        </form>
        
        
        <h6><a href="index.html"><button><script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_IlcchFjUgSxdZg" async></script></h6>
        </button></a>


    </div>
    <section id="section1">
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