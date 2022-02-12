<?php include "../includes/header.php"; ?>



<?php

    use Twilio\Rest\Client;

    if(isset($_POST['submit'])){

        if(isset($_POST['number']) && isset($_POST['message'])){

            try {
                $client = new Client($config['account_id'], $config['auth_token']);
                $client->messages->create(
                    $_POST['number'],
                    array(
                        'from'=> $config['twilio_number'],
                        'body'=> $_POST['message'
                        ]));

                echo "<h3 class='text-center bg-success'>Message has been Sent</h3>";

            } catch (Exception $exception){
                die($exception->getMessage());
            }
        }
    }



?>


<form action="" method="post">
    <div class="form-group">
        <label for="email">Phone Number</label>
        <input name="number" type="text" class="form-control" id="email">
    </div>
    <div class="form-group">
        <textarea class="form-control" name="message" id="" cols="30" rows="10"></textarea>
    </div>
    <input type="submit" name="submit" class="btn btn-primary btn-block" value="Send Message">
</form>



<?php include "../includes/footer.php"; ?>
