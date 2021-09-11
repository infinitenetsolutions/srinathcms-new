<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    //$_SESSION['id'] = $book['id'];
    //$_SESSION['id'] = $someID;
    $len = 10;   // total number of numbers
    $min = 1000;  // minimum
    $max = 9999;  // maximum
    $range = []; // initialize array
    foreach (range(0, $len - 1) as $i) {
        while (in_array($num = mt_rand($min, $max), $range));
        $range[] = $num;
    }

    ?>

    <form id="" style="" method="post" action="easebuzz.php?api_name=initiate_payment">
        <input type="hidden" name="paymode" value="9" />
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="">Transaction ID</label>
                <input id="txnid" class="form-control" name="txnid" placeholder="" value="">
            </div>
            <div class="form-group col-md-6">
                <label for="">Package Amount</label>
                <input class="form-control" id="amount" name="amount" value="6778.00">
                <small class="form-text color-orange">Please Pay this amount For submit this Form.</small>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="">Name</label>
                <input id="firstname" class="form-control" name="firstname" placeholder="" value="">
            </div>
            <div class="form-group col-md-6">
                <label for="">Email ID</label>
                <input id="email" class="form-control" name="email" placeholder="" value="">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="">Phone No</label>
                <input id="phone" class="form-control" name="phone" placeholder="" value="">
            </div>
            <div class="form-group col-md-6">
                <label for="">Package</label>
                <input id="productinfo" class="form-control" name="productinfo" value="">
            </div>
        </div>
        <div class="form-row">
            <input type="hidden" id="surl" class="surl" name="surl" value="<?php echo "http://localhost/";?>success" placeholder="">
            <input type="hidden" id="furl" class="furl" name="furl" value="<?php echo "http://localhost/";?>success" placeholder="">
            <div class="form-group col-md-4 mt-2">
                <button class="btn theme-orange border-0 btn-block" type="submit" name="button"><i class="fa fa-paper-plane"></i> Pay </button>
            </div>
        </div>
        <!-- Submit And Payment Section Ends -->
    </form>
</body>

</html>