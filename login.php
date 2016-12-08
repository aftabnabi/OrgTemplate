<?php include("header.php");?>
	<script type="text/javascript">
	$("div#Nav > ul li").removeClass('Active');
	var item =$("div#Nav > ul li a[href='login.php']");
	$(item).parent().addClass('Active');
	</script>
	<!--Detail-->
	<div id="Detail">
		<!--About n Statistics-->
		<div id="AnS">
			<!--About-->
			<div id="ABox">
				<div class="AnSHead">
					Login
				</div>
				<p>&nbsp;</p>
				<p>
				<div>
					Email Id:<input type="text"/><br/>
					Password:<input type="password"/><br/>
					<input type="button" value ="Cancel" />
					<input type="Submit" value="Submit"/>
				</div>
				</p>
		</div>
		 
		<div class="Clear">
		</div>
	</div>
	<?php include("footer.php");?>