 <title>Dashboard</title>
<div class="jumbotron">
	<div class="container">
		<h1>Welcome  <?php echo ucfirst($this->session->userdata('staff_type'));?></h1>
		<p>Staff Is Logged in now </p>

		<a href="<?php echo base_url('login/staff_logout')?>" class="btn btn-primary">Click me to Logout staff only</a>
		<?php if($this->session->userdata('admin_type')==''){?>
		<a href="<?php echo base_url('login')?>" class="btn btn-primary" target="_blank">Click me to login Admin</a>
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

