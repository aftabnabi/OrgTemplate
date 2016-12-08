<?php include("header.php");?>
	<script type="text/javascript">
	$("div#Nav > ul li").removeClass('Active');
	var item =$("div#Nav > ul li a[href='sitemap.php']");
	$(item).parent().addClass('Active');
	</script>
	<!--Detail-->
	<div id="Detail">
		<!--About n Statistics-->
		<div id="AnS">
			<!--About-->
			<div id="ABox">
				<div class="AnSHead">
					 Sitemap of WFCL website
				</div>
				<p>&nbsp;</p>
				<p><ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="staff.php">Staff</a></li>
					<li><a href="events.php">Events</a></li>
					<li><a href="contacts.php">Contacts</a></li>
					<li><a href="downloads.php">Downlaods</a></li>
					<li><a href="login.php">Login</a></li>
					<li><a href="jhang.php">Jhang</a></li>
					<li><a href="jhelum.php">Jhelum</a></li>
					<li><a href="chakwal.php">Chakwal</a></li>
					<li><a href="layyah.php">Layyah</a></li>
					<li><a href="careers.php">Careers</a></li>
					<li><a href="faq.php">FAQs</a></li>
				</ul>
				</p>
		</div>
		 
		<div class="Clear">
		</div>
	</div>
	<?php include("footer.php");?>