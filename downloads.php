<?php include("header.php");?>
	<script type="text/javascript">
	$("div#Nav > ul li").removeClass('Active');
	var item =$("div#Nav > ul li a[href='downloads.php']");
	$(item).parent().addClass('Active');
	</script>
	<!--Detail-->
	<div id="Detail">
		<!--About n Statistics-->
		<div id="AnS">
			<!--About-->
			<div id="ABox">
				<div class="AnSHead">
					 Documents and Forms Downloads
				</div>
				<p>&nbsp;</p>
				<p><ul>
					<li><a href="test1.pdf">Test 1</a></li>
					<li><a href="test1.pdf">Test 14</a></li>
					<li><a href="test1.pdf">Test 13</a></li>
				</ul>
				</p>
		</div>
		 
		<div class="Clear">
		</div>
	</div>
	<?php include("footer.php");?>