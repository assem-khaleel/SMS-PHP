<?php include "../includes/header.php"; ?>
<?php
use Twilio\Rest\Client;
$_SESSION['code'] = $code = uniqid();
try {
    $con->query("INSERT INTO verifications(code) VALUES('$code')");
    $client = new Client($config['account_sid'], $config['auth_token']);
    $client->messages->create(
        '+15397771210',
        array(
            'from'=> $config['twilio_number'],
            'body'=> "Your Online code is {$code}"
            ));

    echo "<h3 class='text-center bg-success'>Message has been Sent</h3>";
} catch (Exception $exception){
    die($exception->getMessage());
}
?>
<?php include "../includes/footer.php"; ?>
