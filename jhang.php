<?php include("header.php");?>
	<!--Detail-->
	<div id="Detail">
		<!--About n Statistics-->
		<div id="AnS">
			<!--About-->
			<div id="ABox">
				 
				<div class="AnSHead">
					 WFCL Project - District Jhang
				</div>
				<p>&nbsp;</p>
				<p> <table width="1000px" style="margin-top:20px" border="1">
					<tr> <td><strong>District Coordination Officer</strong></td>
						<td>  Maqbool Ahmad Dawla</td></tr>
					<tr><td><strong>District  Labour Officer</strong></td>
						<td>Munawwar Ahmad Awan </td></tr>
					<tr><td><strong>District's Total Area</strong></td>
						<td>8809km<sup>2</sup></td></tr>
					<tr><td><strong>Total Population</strong></td>
						<td>28,34,545</td></tr>
					<tr><td><strong>Tehsils</strong></td>
						<td>Ahmad Pur Sial, Athara Hazari,Jhang, Shorkot</td></tr>
				</table>
				<table width="1000px" style="margin-top:20px" border="1">
					<tr> <td><strong>Agriculture</strong></td>
						<td> <strong>Industrial</strong></td>
						<td><strong>Cottage  industries</strong></td>
						<td><strong>Commercial</strong></td>
					</tr>
					<tr><td>Sugar Cane</td><td>Sugar Mills</td>
						<td>Power Looms</td><td>Auto Workshop</td></tr>
					<tr>
						<td>Rice</td><td>Rice Mill</td>
						<td>Wool Industries</td><td>Hotels</td></tr>
					<tr>
						<td>Wheat</td><td>Floor Mills</td>
						<td>&nbsp;</td><td>&nbsp;</td></tr>
					<tr>
						<td>Vegetable</td><td>Marble Factory</td>
						<td>&nbsp;</td><td>&nbsp;</td></tr>
				</table>
				<table width="1000px" style="margin-top:20px" border="1">
					<tr>
						<td><strong>Children involved in Main Occupation</strong></td>
						<td> <strong>Approx. No. of Children 5-14</strong></td>
						<td><strong>Approx. No. of Children 15-18</strong></td></tr>
					<tr><td>Power Loom</td><td>735</td><td>656</td></tr>
					<tr><td>Auto workshop</td><td>423</td><td>235</td></tr>
					<tr><td>Brick Kilns</td><td>415</td><td>185</td></tr>
					<tr><td>Wool Industries</td><td>122</td><td>49</td></tr>
					<tr><td>Agriculture</td><td>0</td><td>160</td></tr>
					<tr><td>Grand  Total</td><td>1695</td><td>1285</td></tr>
				</table>
		</p>
			</div>
			<ul style="margin-left:60px">
			<li style="display:inline-block">
			<!--Statistics-->
			<div id="SBox" >
				<div class="Stat_head">Statistics Of  Child Labour (Age Group:5-14) in District Jhang</div>
                <div id="graph">Loading Graph...</div>
                <script type="text/javascript">
					var myData = new Array(['AhmadPur Sial', 10, 80, 126,0,0], ['Athara Hazari', 20, 70, 140,0,0], ['Jhang', 550, 200, 10,110,0], ['Shorkot', 155, 70, 130,12,0]);
					var myChart = new JSChart('graph', 'bar');myChart.setDataArray(myData);myChart.setAxisNameX('');myChart.setAxisNameY('');myChart.setAxisNameFontSize(8);
					myChart.setAxisNameColor('#000');myChart.setAxisValuesAngle(0);myChart.setAxisValuesColor('#000');myChart.setAxisColor('#000');myChart.setAxisWidth(1);
					myChart.setBarValuesColor('#000');myChart.setAxisPaddingTop(15);myChart.setAxisPaddingBottom(70);myChart.setAxisPaddingLeft(25);myChart.setBarColor('#d80003', 1);
					myChart.setBarColor('#086ea2', 2);myChart.setBarColor('#1a9e2d', 3);myChart.setBarColor('#5a9ead', 4);myChart.setBarColor('#6a1e1d', 5);myChart.setBarBorderWidth(0);
					myChart.setBarSpacingRatio(25);myChart.setBarOpacity(0.9);myChart.setFlagRadius(6);myChart.setTooltipPosition('nw');myChart.setTooltipOffset(3);myChart.setLegendShow(true);
					myChart.setLegendPosition('bottom center');myChart.setLegendPadding(1);myChart.setLegendForBar(1, 'Power Looms');myChart.setLegendForBar(2, 'Auto workshop');
					myChart.setLegendForBar(3, 'Brick Kilns');myChart.setLegendForBar(4, 'Wool Industries');myChart.setLegendForBar(5, 'Agriculture');
					//myChart.setSize(475, 375);
					myChart.setGridColor('#CCC');
					myChart.draw();
				</script>
			</div>
			 
		</li>
		<li style="display:inline-block">
		<!--Statistics--> 
			<div id="SBox"  style="width:390px" >
				<div class="Stat_head">
					  Statistics Of  Child Labour (Age Group:14-18) in District Jhang
				</div>
                <div id="graph3">Loading Graph...</div>
                <script type="text/javascript">
					var myData = new Array(['AhmadPur Sial', 10, 34, 60,0,40], ['Athara Hazari', 20, 45, 65,0,30], ['Jhang', 500, 100,10,100,40], ['Shorkot', 126, 60, 50,49,50]);
					var myChart = new JSChart('graph3', 'bar');
					myChart.setDataArray(myData);myChart.setAxisNameX('');myChart.setAxisNameY('');myChart.setAxisNameFontSize(8);myChart.setAxisNameColor('#000');myChart.setAxisValuesAngle(0);
					myChart.setAxisValuesColor('#000');myChart.setAxisColor('#000');myChart.setAxisWidth(1);myChart.setBarValuesColor('#000');myChart.setAxisPaddingTop(15);
					myChart.setAxisPaddingBottom(70);myChart.setAxisPaddingLeft(25);myChart.setBarColor('#d80003', 1);myChart.setBarColor('#086ea2', 2);myChart.setBarColor('#1a9e2d', 3);
					myChart.setBarColor('#5a9ead', 4);myChart.setBarColor('#6a1e1d', 5);myChart.setBarBorderWidth(0);myChart.setBarSpacingRatio(25);myChart.setBarOpacity(0.9);myChart.setFlagRadius(6);
					myChart.setTooltipPosition('nw');myChart.setTooltipOffset(3);myChart.setLegendShow(true);myChart.setLegendPosition('bottom center');myChart.setLegendPadding(1);
					myChart.setLegendForBar(1, 'Power Looms');myChart.setLegendForBar(2, 'Auto workshop');myChart.setLegendForBar(3, 'Brick Kilns');myChart.setLegendForBar(4, 'Wool Industries');
					myChart.setLegendForBar(5, 'Agriculture');
					 
					//myChart.setSize(475, 375);
					myChart.setGridColor('#CCC');
					myChart.draw();
				</script>
			</div>
		 
	
		</li>
		<!--Statistics--> 
			<li style="display:inline-block">
			<div id="SBox"  >
				<div class="Stat_head">
					 Districts Statistics
				</div>
                <div id="graph2">Loading Graph...</div>
                <script type="text/javascript">
					var myData = new Array(['Power Looms', 735], ['Auto workshop', 423], ['Brick Kilns', 415], ['Agriculture', 0],['Wool Industries',122]);
					var colors = ['#FACC00', '#00FF11',  '#FB4800', '#CB0A0A', '#F8F933'];
					var myChartPie = new JSChart('graph2', 'pie');myChartPie.setDataArray(myData);myChartPie.colorizePie(colors);
				//myChartPie.setSize(475, 375);
					myChartPie.setGridColor('#CCC');myChartPie.draw();
				</script>
			</div>
			 
		 
		</li>
		<!--Districts-->
		<!--Statistics--> 
		<li style="display:inline-block">	<div id="SBox"  >
				<div class="Stat_head">
					 Districts Statistics
				</div>
                <div id="graph4">Loading Graph...</div>
                <script type="text/javascript">
					var myData = new Array(['Power Looms', 656], ['Auto workshop', 235], ['Brick Kilns', 185], ['Agriculture', 160],['Wool Industries',49]);
					var colors = ['#FACC00', '#00FF11',  '#FB4800', '#CB0A0A', '#F8F933'];
					var myChartPie = new JSChart('graph4', 'pie');
					myChartPie.setDataArray(myData);
					myChartPie.colorizePie(colors);
				
					//myChartPie.setSize(475, 375);
					myChartPie.setGridColor('#CCC');
					myChartPie.draw();
				</script>
			</div>
		 
	 
		</li>
		</ul>
		<!--Districts--> 
		<div id="Districts">
			<a href="#" title="WFCL at Jhang">
			<div id="TBoxJh">
				<div class="DBoxHead">
					 WFCL at Jhang
				</div>
			</div>
			</a>
			<a href="#" title="WFCL at Athara Hazari">
			<div id="TBoxAtharahazari">
				<div class="DBoxHead">
					 WFCL at Athara Hazari
				</div>
			</div>
			</a>
			<a href="#" title="WFCL at Shorkot">
			<div id="TBoxShorkot">
				<div class="DBoxHead">
					 WFCL at Shorkot
				</div>
			</div>
			</a>
			<a href="#" title="WFCL at Ahmad Pur Sial">
			<div id="TBoxAhmadpur">
				<div class="DBoxHead">
					 WFCL at Ahmad Pur Sial
				</div>
			</div>
			</a>
			<div class="Clear">
			</div>
		</div>
		<div class="Clear">
		</div>
	</div>
<?php include("footer.php");?>