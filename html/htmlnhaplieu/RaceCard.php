<?php 
	include_once("header.php");
?>
<body class="master">
    <form name="form1" method="post" action="LiveTote.html" id="form1">
		<?php 
			include_once("headermaster.php");
		?>
        <div id="Panel1">
            <table cellpadding="0" cellspacing="0" border="0" width="100%">
				<tbody>
					<tr valign="top">
						<?php 
							include_once("menuleft.php");
						?>
						<td id="maincontent"> <!--content-->
							Race Card: 
							<select name="cmbRace" id="cmbRace" style="width:92px;">
								<option selected="selected" value="MY">MY</option>
								<option value="SG">SG</option>
								<option value="HK">HK</option>
							</select>
							<table cellpadding="2" cellspacing="2" border="0">
								<tbody>
									<tr>
										<td valign="top">
											<table border="0">
												<tbody>
													<tr>
														<td valign="top">
															<table id="Calendar1" cellspacing="0" cellpadding="2" title="Calendar" border="0" style="border-width:1px;border-style:solid;height:192px;width:240px;border-collapse:collapse;">
																<tbody>
																	<tr>
																		<td colspan="7" style="background-color:#3366FF;">
																			<table cellspacing="0" border="0" style="color:White;font-weight:bold;width:100%;border-collapse:collapse;">
																				<tbody>
																					<tr>
																						<td style="width:15%;"><a" style="color:Black" title="Go to the previous month">&lt;</a></td>
																						<td align="center" style="width:70%;">January 2015</td>
																						<td align="right" style="width:15%;"><a style="color:Black" title="Go to the next month">&gt;</a></td>
																					</tr>
																				</tbody>
																			</table>
																		</td>
																	</tr>
																	<tr>
																		<th align="center" abbr="Sunday" scope="col" style="font-weight:bold;">Sun</th>
																		<th align="center" abbr="Monday" scope="col" style="font-weight:bold;">Mon</th>
																		<th align="center" abbr="Tuesday" scope="col" style="font-weight:bold;">Tue</th>
																		<th align="center" abbr="Wednesday" scope="col" style="font-weight:bold;">Wed</th>
																		<th align="center" abbr="Thursday" scope="col" style="font-weight:bold;">Thu</th>
																		<th align="center" abbr="Friday" scope="col" style="font-weight:bold;">Fri</th>
																		<th align="center" abbr="Saturday" scope="col" style="font-weight:bold;">Sat</th>
																	</tr>
																	<tr>
																		<td align="center" style="color:Gray;width:14%;"></td>
																		<td align="center" style="color:Gray;width:14%;"></td>
																		<td align="center" style="color:Gray;width:14%;"></td>
																		<td align="center" style="color:Gray;width:14%;"></td>
																		<td align="center" style="width:14%;">1</td>
																		<td align="center" style="width:14%;">2</td>
																		<td align="center" style="color:Red;width:14%;">3</td>
																	</tr>
																	<tr>
																		<td align="center" style="color:Red;width:14%;">4</td>
																		<td align="center" style="width:14%;">5</td>
																		<td align="center" style="width:14%;">6</td>
																		<td align="center" style="width:14%;">7</td>
																		<td align="center" style="width:14%;">8</td>
																		<td align="center" style="width:14%;">9</td>
																	</tr>
																</tbody>
															</table>
														</td>
													</tr>
													<tr>
														<td align="center">
															<input type="submit" name="cmdAdd" value="Add New" id="cmdAdd" style="height:32px;width:128px;">
														</td>
													</tr>
												</tbody>
											</table>
										</td>
										<td width="100%" valign="top">
											<table width="100%">
												<tbody>
													<tr>
														<td align="left"></td>
														<td style="WIDTH: 500px">&nbsp;</td>
														<td align="Right"></td>
													</tr>
													<tr>
														<td style="width: 30%;">Title:</td>							
														<td colspan="2" style="width: 70%;"><input name="txtHeader1" type="text" id="txtHeader1" style="width:100%;"></td>
													</tr>
													<tr>
														<td>Chinese:</td>							
														<td colspan="2"><input name="txtHeader1Man" type="text" id="txtHeader1Man" style="width:100%;"></td>
													</tr>
													<tr>
														<td>Status:</td>							
														<td colspan="2">
															<select name="cmbStatus" id="cmbStatus" style="width:92px;">
																<option value="OPEN">OPEN</option>
																<option value="CLOSE">CLOSE</option>
															</select>
														</td>
													</tr>
													<tr>
														<td>&nbsp;</td>							
														<td colspan="2"><input type="submit" name="cmdUpdate" value="Update" id="cmdUpdate">&nbsp;<input type="submit" name="btnLink" value="Goto Early Ticket" id="btnLink">
															</td>
													</tr>
													<tr>
														<td colspan="3">
														</td>
													</tr>
												</tbody>
											</table><br /><br />
                                            <table width="100%" border="0" cellspacing="1" cellpadding="1">
            								  <tr>
            								    <td align="center" bgcolor="#3333CC" style="color:#FFF">ID</td>
            								    <td align="center" bgcolor="#3333CC" style="color:#FFF">RaceNo</td>
            								  </tr>
            								  <tr>
            								    <td align="center">MY15012805</td>
            								    <td align="center">01</td>
            								  </tr>
            								  <tr>
            								    <td align="center" bgcolor="#9999FF">MY15012805</td>
            								    <td align="center" bgcolor="#9999FF">02</td>
            								  </tr>
            								  <tr>
            								    <td align="center">MY15012805</td>
            								    <td align="center">03</td>
             								 </tr>
            								  <tr>
            								    <td align="center" bgcolor="#9999FF">MY15012805</td>
            								    <td align="center" bgcolor="#9999FF">04</td>
             								 </tr>
            								</table>
										</td>                
									</tr>
								</tbody>
							</table>
							
							<table>
								<tbody>
									<tr>
										<td valign="top">
											<table cellpadding="2" cellspacing="2" border="0">
												<tbody>
													<tr>
													<td></td>
													</tr>
												</tbody>
											</table>
										</td>
									</tr>    
								</tbody>
							</table>
						</td> <!--end content-->
					</tr>
				</tbody>
			</table>
		</div>
	</form>
</body>
<?php 
	include_once("footer.php");
?>