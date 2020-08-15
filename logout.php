<script>

	var r = confirm( "Do You Really You Want To log Out ?");
	if (r==true)
		
	</script>
	{
		<?php
		session_start();
		session_destroy();
		header("location:index.php");
		?>
	}
 