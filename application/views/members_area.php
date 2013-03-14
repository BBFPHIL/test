<h1>Welcome!</h1>

<p>Here is your user information!</p>

<?php foreach($rows as $r): ?>

<h3><?php echo $r->first_name; ?></h3>

<h3><?php echo $r->last_name; ?></h3>

<h3><?php echo $r->username; ?></h3>

<h3><?php echo $r->email_address; ?></h3>

<?php endforeach ?> 

