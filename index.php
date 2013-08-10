<h2><?php print_r($_SERVER['HTTP_HOST']); ?> is for sale!</h2>
<p>Contact us today to make an offer!</p>

<form action="mail.php" method="POST">
<p>Name</p> <input type="text" name="name">
<p>Email</p> <input type="text" name="email">
<p>Message</p><textarea name="message" rows="6" cols="25"></textarea><br />
<input type="submit" value="Send"><input type="reset" value="Clear">
</form>

<?php print_r($_SERVER) ?>