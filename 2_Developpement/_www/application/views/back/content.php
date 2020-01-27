<?php

include_once ('templates/header.php');

?>
<div class="container-fluid">
	<h1 class="mt-4"><?php echo $TITLE ?></h1>
	<ol class="breadcrumb mb-4">
		<li class="breadcrumb-item active"></li>
		<li><?php  echo 'var_dump de <b>$this->uri->rsegments</b></b> <br>'.var_dump($this->uri->rsegments) ?></li>
	</ol>


<?php echo $CONTENT;	?>

</div>

<?php

include_once ('templates/footer.php');
