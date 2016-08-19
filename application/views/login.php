<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<?php $this->load->view('header'); ?>

<div class="container">

	<form class="form-container card center-block" method="post" action="<?php echo base_url('LoginScreen/login'); ?>">
		<span><i class="fa fa-user" aria-hidden="true"></i></span>
	  	<div class="error-message">
		  	<?php if( isset($msg) ): ?>
		  		<?php echo $msg; ?>
		  	<?php endif;?>
		</div>
	   	<input type="email" name="email" class="signup-form form-control" placeholder="Email address" required autofocus>
	   	<input type="password" name="password" class="signup-form form-control" placeholder="Password" required>


	  
	    <input type="submit" value="Login" class="login-btn">

	    <span class="register-btn"><a href="<?php echo base_url('LoginScreen/registration'); ?>">Need to register?</a></span>
  	</form>
  	
</div>

<?php $this->load->view('footer'); ?>