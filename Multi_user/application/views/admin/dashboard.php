<title>Dashboard</title>

<div class="jumbotron">
	<div class="container">
		<h1>Welcome  <?php echo ucfirst($this->session->userdata('admin_type'));?></h1>
		<p>Admin Is Logged in now </p>

		<a href="<?php echo base_url('login/admin_logout')?>" class="btn btn-primary">Click me to Logout Admin only</a>
		<?php if($this->session->userdata('staff_type')==''){?>
		<a href="<?php echo base_url('login')?>" class="btn btn-primary" target="_blank">Click me to login Staff</a>
		<?php }		?>
	</div>
</div>
<hr>

<pre>
	Currnet Session datas Are as follows !
	<?php 

	echo "<pre>";
	print_r($this->session->userdata());

	?>!
</pre>


</div> 





