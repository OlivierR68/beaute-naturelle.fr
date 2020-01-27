<?php

include_once ('templates/header.php');

?>
<div class="container-fluid">
	<h1 class="mt-4"><?php echo $TITLE ?></h1>
	<ol class="breadcrumb mb-4">
		<li class="breadcrumb-item active">Dashboard</li>
	</ol>


<?php echo $CONTENT;	?>

</div>

<?php

include_once ('templates/footer.php');
