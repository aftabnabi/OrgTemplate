<?php include("header.php");?>
	<!--Detail-->
	<div id="Detail">
		<!--About n Statistics-->
		<div id="AnS">
			<!--About-->
			<div id="DisttBox" style="width:1000px">
				<div class="AnSHead">
					 WFCL Project - District Chakwal
				</div>
				<p>&nbsp;</p>
				 
				<table width="1000px" style="margin-top:20px" border="1">
					<tr>
						<td><strong>District Coordination Officer</strong></td>
						<td> Dr. Yawar Hussain</td>
					</tr>
					<tr>
						<td><strong>District Labour Officer</strong></td>
						<td> Dr. Yawar Hussain</td>
					</tr>
					
					<tr>
						<td><strong>District's Total Area</strong></td>
						<td>6,524 km<sup>2</sup></td>
					</tr>
					<tr>
						<td><strong>Total Population</strong></td>
						<td>1,083,725</td>
					</tr>
					<tr>
						<td><strong>Tehsils</strong></td>
						<td>Chakwal, Choa Saidan Shah, Kalarkahar, Tala Gang </td>
					</tr>
				</table>
					<table width="1000px" style="margin-top:20px" border="1">
					<tr>
						<td><strong>Agriculture</strong></td>
						<td> <strong>Industrial</strong></td>
					
						<td><strong>Cottage  industries</strong></td>
						<td><strong>Commercial</strong></td>
					</tr>
					<tr>
						<td>Corn</td>
						<td>Floor Mills</td>
					
						<td>&nbsp;</td>
						<td>Auto Workshop
</td>
					</tr>
					<tr>
						<td>Patato</td>
						<td>cigarette  Factory</td>
					
						<td>&nbsp;</td>
						<td>Hotels</td>
					</tr>
					<tr>
						<td>Wheat</td>
						<td>Brick Kilns</td>
					
						<td>&nbsp;</td>
						<td>Rag picking
</td>
					</tr>
					<tr>
						<td>Vegetable</td>
						<td>Marble Factory</td>
					
						<td>&nbsp;</td>
						<td>Naswar Packing
</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td>Coal Mines</td>
					
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td>Cement Factory</td>
					
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>
					
				</table>
					<table width="1000px" style="margin-top:20px" border="1">
					<tr>
						<td><strong>Children involved in Main Occupation</strong></td>
						<td> <strong>Approx. No. of Children 5-14</strong></td>
					
						<td><strong>Approx. No. of Children 15-18</strong></td>
						
					</tr>
					<tr>
						<td>Auto workshop</td>
						<td>310</td>
					
						<td>270</td>
						
					</tr>
					<tr>
						<td>Rag Picking and fruit mandi</td>
						<td>200</td>
					
						<td>50</td>
					</tr>
					<tr>
						<td>Hoteling</td>
						<td>45</td>
					
						<td>35</td>
					</tr>
					<tr>
						<td>Brick Kilns</td>
						<td>1339</td>
					
						<td>721</td>
					</tr>
					<tr>
						<td>Niswar Packing</td>
						<td>63</td>
					
						<td>25</td>
					</tr>
					<tr>
						<td>Grand  Total</td>
					
						<td>1957</td>
						<td>1101</td>
					</tr>
					
				</table>
  </p>

				
			</div>
			<!--Statistics-->
			<ul style="margin-left:60px">
			<li style="display:inline-block">
			<!--Statistics-->
			<div id="SBox" >
				<div class="Stat_head">Statistics Of  Child Labour (Age Group:5-14) in District Chakwal</div>
                <div id="graph">Loading Graph...</div>
                <script type="text/javascript">
					var myData = new Array(['Chakwal', 10, 80, 126,0,0], ['Choa Saiden Shah', 20, 70, 140,0,0], ['Kalarkahar', 550, 200, 10,110,0], ['Talagang', 155, 70, 130,12,0]);
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
					var myData = new Array(['Chakwal', 10, 34, 60,0,40], ['Choa Saiden Shah', 20, 45, 65,0,30], ['Kalarkahar', 500, 100,10,100,40], ['Talagang', 126, 60, 50,49,50]);
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
		<!--Districts Chakwal, Talagang, Choa Saidan Shah, Lawa and Kallar Kahar-->
		<div id="Districts">
			<a href="#" title="WFCL at Chakwal">
			<div id="TBoxChakwal">
				<div class="DBoxHead">
					 WFCL at Chakwal
				</div>
			</div>
			</a>
			<a href="#" title="WFCL at Talagang">
			<div id="TBoxTala">
				<div class="DBoxHead">
					 WFCL at Talagang
				</div>
			</div>
			</a>
			<a href="#" title="WFCL at Choa Saidan Shah">
			<div id="TBoxChoa">
				<div class="DBoxHead">
					 WFCL at Choa Saidan Shah
				</div>
			</div>
			</a>

			<a href="#" title="WFCL at  Kallar Kahar">
			<div id="TBoxKalarkahar">
				<div class="DBoxHead">
					 WFCL at  Kallar Kahar
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