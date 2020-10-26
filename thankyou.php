<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,
        initial-scale=1.0">
        <title>Thank you</title>
</head>
<body>
    <h1 style="text-align:center;color:black;font-family:cursive;margin-top:5px">Thank you for Donating!</h1>
    <?php
    
     include 'instamojo/Instamojo.php';
    $api = new Instamojo\Instamojo('test_9385c7a5d7353cf0c6415bd10e5','test_eff7999f5a6d708d3a29794015f', 'https://test.instamojo.com/api/1.1/');
    
     $payid=$_GET['payment_request_id'];
    try {
    $response = $api->paymentRequestStatus($payid);
    echo "<h4>Payment ID:".$response['payments'][0]['payment_id']."</h4>" ;
}
catch (Exception $e) {
    print(" Error: " .$e->getMessage());
}
?>
</body>
</html>