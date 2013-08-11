<?php
include_once('header.php');
?>
    <script type="text/javascript">
        var RecaptchaOptions = {
            theme: 'clean'
        };
    </script>

    <div class="container">
        <h2><?php print_r($_SERVER['HTTP_HOST']); ?> is for sale!</h2>

        <p>Contact us today to make an offer!</p>

        <form action="mail.php" method="POST" class="form-horizontal">
            <fieldset>
                <label for="name">Name</label>
                <input type="text" name="name" placeholder="name">

                <p>Email</p> <input type="text" name="email" placeholder="youremail@domain.com">

                <p>Phone</p> <input type="text" name="phone" placeholder="234-555-1212">
                <br/>

                <p>Message</p>
                <textarea name="message" rows="6" cols="25">
                </textarea><br/>

                <br>
                <?php
                require_once('recaptchalib.php');
                $publickey = "6LfH9OUSAAAAAF4v7_s39f9EA8s4xwILPOog2jAx"; // you got this from the signup page
                echo recaptcha_get_html($publickey);
                ?>
                <input type="submit" value="Send" class="btn btn-primary">
                <input type="reset" value="Clear" class="btn btn-danger">
            </fieldset>
        </form>
    </div>



<?php
include_once('footer.php');
?>