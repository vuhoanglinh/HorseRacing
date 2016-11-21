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
							<td valign="top">
                               <table cellpadding="2" cellspacing="2" border="0">
                                    <tbody>
                                        <tr>
                                            <td>Race Date</td><td><span id="txtCountry" maxlength="20" style="display:inline-block;width:150px;">28/01/2015</span></td>                                 
                                            <td>Race No</td><td>
                                                <span id="lblRaceNo" maxlength="20" style="display:inline-block;width:150px;">01</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Title</td>
                                            <td><input name="txtHeader2" type="text" value="malaysia race" maxlength="200" id="txtHeader2" style="width:300px;">
                                            </td><td>Chinese</td>
                                            <td><input name="txtHeader2Man" type="text" maxlength="200" id="txtHeader2Man" style="width:300px;"></td>
                                        </tr>
                                        <tr>
                                            <td>Details</td>
                                            <td><input name="txtHeader3" type="text" maxlength="200" id="txtHeader3" style="width:300px;">
                                            </td><td>Chinese</td>
                                            <td><input name="txtHeader3Man" type="text" maxlength="200" id="txtHeader3Man" style="width:300px;"></td>
                                        </tr>
    						        </tbody>
                                </table>
						       <br>
						       <table border="0">
                               </table>
								<table>
									<tbody>
										<tr>
											<td>
												<table border="0" cellpadding="2" cellspacing="2">
													<tbody>
														<tr>
															<td>Early Ticket</td>
															<td>
																<input name="txtET" type="text" maxlength="20" id="txtET" style="width:100px;">
															</td>
															<td>Scatching</td>
															<td>
																<input name="txtSC" type="text" maxlength="20" id="txtSC" style="width:100px;">
															</td>
															<td>Master Choice</td>
															<td>
																<input name="txtMC" type="text" maxlength="20" id="txtMC" style="width:100px;">
															</td>
															<td>Tips</td>
															<td>
																<input name="txtTP" type="text" maxlength="20" id="txtTP" style="width:100px;">
															</td>
															<td><input type="submit" name="btnSave" value="Save" id="btnSave" style="width:74px;"></td>
															<td><input type="submit" name="btnClear" value="Clear" id="btnClear" style="width:78px;"></td>
															<td><input type="submit" name="btnCancel" value="Cancel" id="btnCancel" style="width:78px;"></td>
														</tr>
													</tbody>
												</table>
											</td>
										</tr>
										<tr>
											<td width="50%" valign="top">
												<div>
													<table cellspacing="0" cellpadding="2" rules="all" border="1" id="grdRaceCard" style="border-color:#CCCCCC;border-width:1px;border-style:None;font-size:Small;height:200px;width:100%;border-collapse:collapse;">
														<tbody>
															<tr style="color:White;background-color:#006699;font-size:Small;font-weight:normal;">
																<th scope="col">No</th>
																<th scope="col">HorseName</th>
																<th scope="col">Jockey</th>
																<th scope="col">Trainer</th>
																<th scope="col">Past 4/5</th>
																<th scope="col">Rtg</th>
																<th scope="col">Hcp</th>
																<th scope="col">Br</th>
																<th scope="col">Weight</th>
																<th scope="col">Handicap</th>
																<th scope="col">ÂíÃû</th>
																<th scope="col">ÆïÊ¦</th>
																<th scope="col">Á·ÂíÊ¦</th>
																<th scope="col">&nbsp;</th>
																<th scope="col">&nbsp;</th>
															</tr>
															<tr align="center" onmouseover="this.style.backgroundColor='yellow';this.style.cursor='hand'" onmouseout="this.style.backgroundColor='white';" style="color: rgb(0, 0, 102); background-color: white;">
																<td>01</td>
																<td>A SUBORICS</td>
																<td>133</td>
																<td>2</td>
																<td>GOOD THINKER</td>
																<td>Z PURTON</td>
																<td>C FOWNES</td>
																<td>MOBILE KING</td>
																<td>103</td><td>+1</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>
																	<a href="">Edit</a>
																</td>
																<td>
																	<a href="">Scratch</a>
																</td>
															</tr>
															<tr align="center" onmouseover="this.style.backgroundColor='yellow';this.style.cursor='hand'" onmouseout="this.style.backgroundColor='#CCCCFF';" style="color: rgb(0, 0, 102); background-color: rgb(204, 204, 255);">
																<td>02</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>236</td>
																<td>+00</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>
																	<a href="">Edit</a>
																</td>
																<td>
																	<a href="">Scratch</a>
																</td>
															</tr>
															<tr align="center" onmouseover="this.style.backgroundColor='yellow';this.style.cursor='hand'" onmouseout="this.style.backgroundColor='white';" style="color: rgb(0, 0, 102); background-color: white;">
																<td>03</td>
																<td>M GUYON</td>
																<td>131</td>
																<td>4</td>
																<td>ARCHER'S BOW</td>
																<td>K C NG</td>
																<td>W Y SO</td>
																<td>GOLDEN OSMANTHUS</td>
																<td>256</td>
																<td>-2</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>
																	<a href="">Edit</a>
																</td>
																<td>
																	<a href="">Scratch</a>
																</td>
															</tr>
															<tr align="center" onmouseover="this.style.backgroundColor='yellow';this.style.cursor='hand'" onmouseout="this.style.backgroundColor='#CCCCFF';" style="color: rgb(0, 0, 102); background-color: rgb(204, 204, 255);">
																<td>04</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>
																	<a href="">Edit</a>
																</td>
																<td>
																	<a href="">Scratch</a>
																</td>
															</tr>
															<tr align="center" onmouseover="this.style.backgroundColor='yellow';this.style.cursor='hand'" onmouseout="this.style.backgroundColor='white';" style="color: rgb(0, 0, 102); background-color: white;">
																<td>05</td>
																<td>M DEMURO</td>
																<td>130</td>
																<td>6</td>
																<td>ZACHARY</td>
																<td>J MOREIRA</td>
																<td>D E FERRARIS</td>
																<td>MR VANILLA</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>
																	<a href="">Edit</a>
																</td>
																<td>
																	<a href="">Scratch</a>
																</td>
															</tr>
															<tr align="center" onmouseover="this.style.backgroundColor='yellow';this.style.cursor='hand'" onmouseout="this.style.backgroundColor='#CCCCFF';" style="color: rgb(0, 0, 102); background-color: rgb(204, 204, 255);">
																<td>06</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>
																	<a href="">Edit</a>
																</td>
																<td>
																	<a href="">Scratch</a>
																</td>
															</tr>
															<tr align="center" onmouseover="this.style.backgroundColor='yellow';this.style.cursor='hand'" onmouseout="this.style.backgroundColor='white';" style="color: rgb(0, 0, 102); background-color: white;">
																<td>07</td>
																<td>U RISPOLI</td>
																<td>129</td>
																<td>8</td>
																<td>REAL GENERAL</td>
																<td>K TEETAN</td>
																<td>T K NG</td>
																<td>CASA JUNIOR</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>
																	<a href="">Edit</a>
																</td>
																<td>
																	<a href="">Scratch</a>
																</td>
															</tr>
															<tr align="center" onmouseover="this.style.backgroundColor='yellow';this.style.cursor='hand'" onmouseout="this.style.backgroundColor='#CCCCFF';" style="color: rgb(0, 0, 102); background-color: rgb(204, 204, 255);">
																<td>08</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>
																	<a href="">Edit</a>
																</td>
																<td>
																	<a href="">Scratch</a>
																</td>
															</tr>
															<tr align="center" onmouseover="this.style.backgroundColor='yellow';this.style.cursor='hand'" onmouseout="this.style.backgroundColor='white';" style="color: rgb(0, 0, 102); background-color: white;">
																<td>09</td>
																<td>Y T CHENG</td>
																<td>124</td>
																<td>10</td>
																<td>GOLDWEAVER</td>
																<td>H W LAI</td>
																<td>A LEE</td>
																<td>EVERSPRING</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>
																	<a href="">Edit</a>
																</td>
																<td>
																	<a href="">Scratch</a>
																</td>
															</tr>
															<tr align="center" onmouseover="this.style.backgroundColor='yellow';this.style.cursor='hand'" onmouseout="this.style.backgroundColor='#CCCCFF';" style="color: rgb(0, 0, 102); background-color: rgb(204, 204, 255);">
																<td>10</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>
																	<a href="">Edit</a>
																</td>
																<td>
																	<a href="">Scratch</a>
																</td>
															</tr>
															<tr align="center" onmouseover="this.style.backgroundColor='yellow';this.style.cursor='hand'" onmouseout="this.style.backgroundColor='white';" style="color: rgb(0, 0, 102); background-color: white;">
																<td>11</td>
																<td>M L YEUNG</td>
																<td>113</td>
																<td>12</td>
																<td>GLAMOROUS RYDER</td>
																<td>T H SO</td>
																<td>L HO</td>
																<td>VIVA GUY</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>
																	<a href="">Edit</a>
																</td>
																<td>
																	<a href="">Scratch</a>
																</td>
															</tr>
															<tr align="center" onmouseover="this.style.backgroundColor='yellow';this.style.cursor='hand'" onmouseout="this.style.backgroundColor='#CCCCFF';" style="color: rgb(0, 0, 102); background-color: rgb(204, 204, 255);">
																<td>12</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>
																	<a href="">Edit</a>
																</td>
																<td>
																	<a href="">Scratch</a>
																</td>
															</tr>
															<tr align="center" onmouseover="this.style.backgroundColor='yellow';this.style.cursor='hand'" onmouseout="this.style.backgroundColor='white';" style="color:#000066;">
																<td>13</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>
																	<a href="">Edit</a>
																</td>
																<td>
																	<a href="">Scratch</a>
																</td>
															</tr>
															<tr align="center" onmouseover="this.style.backgroundColor='yellow';this.style.cursor='hand'" onmouseout="this.style.backgroundColor='#CCCCFF';" style="color:#000066;background-color:#CCCCFF;">
																<td>14</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>
																	<a href="">Edit</a>
																</td>
																<td>
																	<a href="">Scratch</a>
																</td>
															</tr>
														</tbody>
													</table>
												</div>
											</td>
										</tr>
										<tr>
											<td valign="top">
												<table border="0" cellpadding="2" cellspacing="2">
													<tbody><tr>
														<td>
															HorseName</td>
														<td colspan="3">
															<input name="txtHorseName" type="text" maxlength="200" id="txtHorseName" style="width:200px;">
														</td>
														<td>
															Jockey</td>
														<td colspan="3">
															<input name="txtJockey" type="text" maxlength="200" id="txtJockey" style="width:200px;">
														</td>
														<td>
															Trainer</td>
														<td colspan="3">
															<input name="txtTrainer" type="text" maxlength="200" id="txtTrainer" style="width:200px;">
														</td>
													</tr>
													<tr>
														<td>ÂíÃû</td>
														<td colspan="3">
															<input name="txtHorseNameMan" type="text" maxlength="200" id="txtHorseNameMan" style="width:200px;">
														</td>
														<td>ÆïÊ¦</td>
														<td colspan="3">
															<input name="txtJockeyMan" type="text" maxlength="200" id="txtJockeyMan" style="width:200px;">
														</td>
														<td>Á·ÂíÊ¦</td>
														<td colspan="3">
															<input name="txtTrainerMan" type="text" maxlength="200" id="txtTrainerMan" style="width:200px;">
														</td>
													</tr>
													<tr>
														<td>
															Past 4/5</td>
														<td>
															<input name="txtA" type="text" maxlength="200" id="txtA" style="width:74px;">
														</td>
														<td>
															Rtg</td>
														<td>
															<input name="txtB" type="text" maxlength="200" id="txtB" style="width:50px;">
														</td>
														<td>
															Hcp</td>
														<td>
															<input name="txtC" type="text" maxlength="200" id="txtC" style="width:50px;">
														</td>
														<td>
															Br</td>
														<td>
															<input name="txtD" type="text" maxlength="200" id="txtD" style="width:50px;">
														</td>
														<td>
															&nbsp;</td>
														<td>
															
														</td>
														<td>
															Weight</td>
														<td>
															<input name="txtWeight" type="text" maxlength="200" id="txtWeight" style="width:50px;">
														</td>
														<td>
															Handicap</td>
														<td>
															<input name="txtHandicap" type="text" maxlength="200" id="txtHandicap" style="width:50px;">
														</td>
													</tr>
													<tr>
														<td>No</td>
														<td>
															<span id="lblHorseNo"></span>
														</td>
														<td>
															<input type="submit" name="btnSaveDetail" value="Save" id="btnSaveDetail" style="width:74px;">
														</td>
														<td>
															<input type="submit" name="btnClearDetail" value="Clear" id="btnClearDetail" style="width:78px;">
														</td>
													</tr>
													<tr>
														<td colspan="8">
															<textarea name="txtMessage" rows="2" cols="20" id="txtMessage" style="height:184px;width:100%;"></textarea>
														</td>
														<td>
                                                            <div style="margin-left: 5px;">
                                                                <input type="button" name="SinTurfConvert" value="Sin Turf Convert" id="SinTurfConvert">
    															<br /><br />
    															<input type="button" name="Winner21Convert" value="Winner21 Convert" id="Winner21Convert">
    															<br /><br />
    															<input type="button" name="HKTurfConvert" value="HK Turf Convert" id="HKTurfConvert">
    															<br /><br />
    															<input type="button" name="MacauTurfConvert" value="Macau TurfConvert" id="MacauTurfConvert">
    															<br /><br />
                                                                <input type="button" name="ChineseConvert" value="Chinese Convert" id="ChineseConvert">
    															<br /><br />
                                                            </div>
														</td>
													</tr>
												</tbody></table>
												</td>
										</tr>    
									</tbody>
								</table>
							</td>
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