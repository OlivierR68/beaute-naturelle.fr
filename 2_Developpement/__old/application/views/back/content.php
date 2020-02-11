<?php

include_once ('templates/header.php');

?>
<div class="container-fluid">
	<h1 class="mt-4"><?php echo $TITLE ?></h1>
	<ol class="breadcrumb mb-4">
		<li class="breadcrumb-item active"></li>
		<li><?php  echo 'var_dump de <b>$this->uri->rsegments</b></b> <br>'.var_dump($this->uri->rsegments) ?></li>
	</ol>

	<?php if(!empty($ERROR)) { ?>
		<div class="alert alert-danger" role="alert">
			<?php echo $ERROR ?>
		</div>
	<?php } ?>

	<?php if(!empty($this->session->flashdata('error'))) { ?>
		<div class="alert alert-danger" role="alert">
			<?php echo $this->session->flashdata('error') ?>
		</div>
	<?php } ?>

	<?php if(!empty($SUCCESS)) { ?>
		<div class="alert alert-success" role="alert">
			<?php echo $SUCCESS ?>
		</div>
	<?php } ?>

	<?php if(!empty($this->session->flashdata('success'))) { ?>
		<div class="alert alert-success" role="alert">
			<?php echo $this->session->flashdata('success') ?>
		</div>
	<?php } ?>


<?php echo $CONTENT;	?>

</div>

<?php

include_once ('templates/footer.php');
