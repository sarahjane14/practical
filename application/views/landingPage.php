<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<?php $this->load->view('header'); ?>

<div class="container">
	<div class="success-container">
		<p>Congratulations!</p>
		<p><?php echo $this->session->userdata('username'); ?>, you have successfully logged in.</p>
		<p>Thank You!</p>

		<span><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></span>

		<div class="sample-works">
			<p>Here are some of my works!</p>
			<ul>
				<li><a href="http://cart.onesupershop.com/index.php?user=nadinetengco#/store">Nadine Tengco's E-commerce Website</a></li>
				<li><a href="http://cart.onesupershop.com/index.php?user=nikkamanika#/store">Nikka's E-commerce Website</a></li>
				<li><a href="http://cart.onesupershop.com/index.php?user=jennymillerofficial#/store">Jenny Miller's E-commerce Website</a></li>
				<li><a href="http://cart.onesupershop.com/index.php?user=martindelrosario#/store">Martin Del Rosario's E-commerce Website</a></li>
			</ul>
		</div>
	</div>
</div>


<?php $this->load->view('footer'); ?>