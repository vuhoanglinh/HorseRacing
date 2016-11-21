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
							Result: 
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
															
														</td>
													</tr>
												</tbody>
											</table>
										</td>
										<td width="100%" valign="top">
											<form id="frmRaceResult" name="frmRaceResult">
                                                <table width="100%" border="0" cellspacing="1" cellpadding="1">
                                                  <tr bgcolor="#CCCCCC">
                                                    <td>MY 25/01/2015</td>
                                                  </tr>
                                                  <tr>
                                                    <td><table width="100%" border="1" cellspacing="1" cellpadding="1">
                                                      <tr style="color:#FFF">
                                                        <td width="12%" align="center" bgcolor="#006600"><strong>No</strong></td>
                                                        <td width="20%" align="center" bgcolor="#006600"><strong>Length</strong></td>
                                                        <td width="17%" align="center" bgcolor="#006600"><strong>Win</strong></td>
                                                        <td width="17%" align="center" bgcolor="#006600"><strong>Place</strong></td>
                                                        <td width="17%" align="center" bgcolor="#006600"><strong>Win</strong></td>
                                                        <td width="17%" align="center" bgcolor="#006600"><strong>Place</strong></td>
                                                      </tr>
                                                      <tr>
                                                        <td>
                                                          <input type="text" name="textfield" id="textfield" width="55"/>
                                                        </td>
                                                        <td><input type="text" name="textfield5" id="textfield5" /></td>
                                                        <td><input type="text" name="textfield9" id="textfield9" /></td>
                                                        <td><input type="text" name="textfield10" id="textfield10" /></td>
                                                        <td bgcolor="#33CC00"><input type="text" name="textfield11" id="textfield11" /></td>
                                                        <td bgcolor="#33CC00"><input type="text" name="textfield15" id="textfield15" /></td>
                                                      </tr>
                                                      <tr>
                                                        <td><input type="text" name="textfield2" id="textfield2" width="55"/></td>
                                                        <td><input type="text" name="textfield6" id="textfield6" /></td>
                                                        <td bgcolor="#666666">&nbsp;</td>
                                                        <td><input type="text" name="textfield12" id="textfield12" /></td>
                                                        <td bgcolor="#006600">&nbsp;</td>
                                                        <td bgcolor="#33CC00"><input type="text" name="textfield16" id="textfield16" /></td>
                                                      </tr>
                                                      <tr>
                                                        <td><input type="text" name="textfield3" id="textfield3" width="55"/></td>
                                                        <td><input type="text" name="textfield7" id="textfield7" /></td>
                                                        <td bgcolor="#666666">&nbsp;</td>
                                                        <td><input type="text" name="textfield13" id="textfield13" /></td>
                                                        <td bgcolor="#006600">&nbsp;</td>
                                                        <td bgcolor="#33CC00"><input type="text" name="textfield17" id="textfield17" /></td>
                                                      </tr>
                                                      <tr>
                                                        <td><input type="text" name="textfield4" id="textfield4" width="55"/></td>
                                                        <td><input type="text" name="textfield8" id="textfield8" /></td>
                                                        <td bgcolor="#666666">&nbsp;</td>
                                                        <td><input type="text" name="textfield14" id="textfield14" /></td>
                                                        <td bgcolor="#006600">&nbsp;</td>
                                                        <td bgcolor="#33CC00"><input type="text" name="textfield18" id="textfield18" /></td>
                                                      </tr>
                                                    </table></td>
                                                  </tr>
                                                  <tr>
                                                    <td><table width="100%" border="1" cellspacing="1" cellpadding="1">
                                                      <tr>
                                                        <td width="25%">Timing</td>
                                                        <td colspan="3"><input type="text" name="textfield19" id="textfield19" style="width:100%"/></td>
                                                        </tr>
                                                      <tr>
                                                        <td>Forecast</td>
                                                        <td width="37%"><input type="text" name="textfield32" id="textfield32" width="65"/></td>
                                                        <td align="right" width="38%"><input type="text" name="textfield26" id="textfield26" /></td>
                                                        <td align="right" bgcolor="#33CC00" width="50%"><input type="text" name="textfield20" id="textfield20" /></td>
                                                        </tr>
                                                      <tr>
                                                        <td>QPS/Place Forecast</td>
                                                        <td><input type="text" name="textfield33" id="textfield33" width="65"/></td>
                                                        <td align="right"><input type="text" name="textfield27" id="textfield27" /></td>
                                                        <td align="right" bgcolor="#33CC00"><input type="text" name="textfield21" id="textfield21" /></td>
                                                        </tr>
                                                      <tr>
                                                        <td>Tierce</td>
                                                        <td><input type="text" name="textfield34" id="textfield34" width="65"/></td>
                                                        <td align="right"><input type="text" name="textfield28" id="textfield28" /></td>
                                                        <td align="right" bgcolor="#33CC00"><input type="text" name="textfield22" id="textfield22" /></td>
                                                        </tr>
                                                      <tr>
                                                        <td>Trio</td>
                                                        <td><input type="text" name="textfield35" id="textfield35" width="65"/></td>
                                                        <td align="right"><input type="text" name="textfield29" id="textfield29" /></td>
                                                        <td align="right" bgcolor="#33CC00"><input type="text" name="textfield23" id="textfield23" /></td>
                                                        </tr>
                                                      <tr>
                                                        <td>Quartet</td>
                                                        <td><input type="text" name="textfield36" id="textfield36" width="65"/></td>
                                                        <td align="right"><input type="text" name="textfield30" id="textfield30" /></td>
                                                        <td align="right" bgcolor="#33CC00"><input type="text" name="textfield24" id="textfield24" /></td>
                                                        </tr>
                                                      <tr>
                                                        <td>Quadro</td>
                                                        <td><input type="text" name="textfield37" id="textfield37" width="65"/></td>
                                                        <td align="right"><input type="text" name="textfield31" id="textfield31" /></td>
                                                        <td align="right" bgcolor="#33CC00"><input type="text" name="textfield25" id="textfield25" /></td>
                                                        </tr>
                                                    </table></td>
                                                  </tr>
                                                  <tr>
                                                    <td>
                                                        <input type="button" name="button" id="button" value="Save" />
                                                        <input type="reset" name="button" id="button" value="Clear" />
                                                        <input type="button" name="button" id="button" value="Cancel" />
                                                    </td>
                                                  </tr>
                                                </table>
                                            </form>
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