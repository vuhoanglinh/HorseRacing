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
							Country Name:
							<select name="cmbRace" id="cmbRace" style="width:67px;">
								<option selected="selected" value="MY">MY</option>
								<option value="SG">SG</option>
								<option value="HK">HK</option>
							</select>
							<input name="txtCountry" type="text" value="MALAYSIA" maxlength="200" id="txtCountry" style="width:146px;" />
							Race Card ID:(CN-YY-MM-DD-RC)
							<select name="cmbRaceCardID" id="cmbRaceCardID" style="width:110px;">
								<option value="MY">MY</option>
								<option selected="selected" value="MY15012801">MY15012801</option>
								<option value="MY15012802">MY15012802</option>
								<option value="MY15012803">MY15012803</option>
								<option value="MY15012804">MY15012804</option>
							</select> 
							&nbsp;<input type="submit" name="btnLink" value="Goto RaceCard" id="btnLink">
							&nbsp;<input type="submit" name="btnLink1" value="Goto HorseWeigth" id="btnLink1">
                        
							<div id="UpdatePanel1">
								<<table width="100%" border="0" cellspacing="1" cellpadding="1">
                                  <tr>
                                    <td colspan="2" valign="top">
                                    	<table width="100%" border="0" cellpadding="2" cellspacing="2">
                                            <tbody>
                                            	<tr>
                                                	<td>Header1</td>
                                            		<td><input name="txtHeader1" type="text" value="Winner No: 1" maxlength="200" id="txtHeader1" style="background-color:#FFFF99;width:100%;">
                                            		</td>
                                                </tr>
                                                <tr>
                                                	<td>Header2</td>
                                                	<td><input name="txtHeader2" type="text" value="Net Tic 3-7-9-5-10 Et3-5" maxlength="200" id="txtHeader2" style="background-color:#99FF66;width:100%;">
                                                	</td>
                                                </tr>
                                                <tr>
                                                	<td>Header3</td>
                                                	<td><input name="txtHeader3" type="text" value="Net RM (3)4.20 42/12 (4)4.60 45/12" maxlength="200" id="txtHeader3" style="background-color:#FF99FF;width:100%;">
                                                	</td>
                                                </tr>
                                                <tr>
                                                	<td>Header4</td>
                                                	<td><input name="txtHeader4" type="text" id="txtHeader4" style="background-color:#99CCFF;width:100%;" value="Net RM (7)4.20 38/12 (2)4.30 39/11" maxlength="200">
                                                	</td>
                                                </tr>
                                                <tr>
                                                	<td>Chinese1</td>
                                                	<td><input name="txtHeader1Man" type="text" value="Winner No: 1" maxlength="200" id="txtHeader1Man" style="width:100%;"></td>
                                                </tr>
                                                <tr>
                                                	<td>Chinese2</td>
                                                	<td><input name="txtHeader2Man" type="text" value="RM 45-5" maxlength="200" id="txtHeader2Man" style="width:100%;"></td>
                                                </tr>
                                                <tr>
                                                	<td>Chinese3</td>
                                                	<td><input name="txtHeader3Man" type="text" value="???? RM3=4.20 42/12 (4)4.60 45/12" maxlength="200" id="txtHeader3Man" style="width:100%;"></td>
                                                </tr>
                                                <tr>
                                                	<td>Chinese4</td>
                                                	<td><input name="txtHeader4Man" type="text" value="???? RM (7)4.20 38/12 (2)4.30 39/11" maxlength="200" id="txtHeader4Man" style="width:100%;"></td>
                                                </tr>
                                        	</tbody>
                                        </table><br />
                                    	<table width="100%" border="0" cellspacing="1" cellpadding="1">
                                    	  <tr>
                                    	    <td><table width="100%" border="0" cellpadding="2" cellspacing="2">
                                    	      <tbody>
                                    	        <tr>
                                    	          <td colspan="4">Internet Ticket Price:</td>
                                  	          </tr>
                                    	        <tr>
                                    	          <td colspan="2">Header2:
                                    	            <input name="txtIT" type="text" value="3-7-9-5-10" maxlength="20" id="txtIT" style="width:100px;" /></td>
                                    	          <td>EarlyTic</td>
                                    	          <td><input name="txtET" type="text" value="3-5" maxlength="20" id="txtET" style="width:100px;" /></td>
                                  	          </tr>
                                    	        <tr>
                                    	          <td align="right">Header3:
                                    	            <input name="txtIT1" type="text" value="3" maxlength="2" id="txtIT1" style="width:35px;" /></td>
                                    	          <td align="left"><input name="txtITP1" type="text" value="4.20 42/12" maxlength="10" id="txtITP1" style="width:100px;" /></td>
                                    	          <td align="right"><input name="txtIT2" type="text" value="4" maxlength="2" id="txtIT2" style="width:35px;" /></td>
                                    	          <td align="left"><input name="txtITP2" type="text" value="4.60 45/12" maxlength="10" id="txtITP2" style="width:100px;" /></td>
                                  	          </tr>
                                    	        <tr>
                                    	          <td align="right">Header4:
                                    	            <input name="txtIT3" type="text" value="7" maxlength="2" id="txtIT3" style="width:35px;" /></td>
                                    	          <td align="left"><input name="txtITP3" type="text" value="4.20 38/12" maxlength="10" id="txtITP3" style="width:100px;" /></td>
                                    	          <td align="right"><input name="txtIT4" type="text" value="2" maxlength="2" id="txtIT4" style="width:35px;" /></td>
                                    	          <td align="left"><input name="txtITP4" type="text" value="4.30 39/11" maxlength="10" id="txtITP4" style="width:100px;" /></td>
                                  	          </tr>
                                    	        <tr>
                                    	          <td align="right"></td>
                                    	          <td align="left"></td>
                                    	          <td>&nbsp;</td>
                                    	          <td><input type="submit" name="btnUpdateHeader4" value="Update" id="btnUpdateHeader4" style="width:74px;" /></td>
                                  	          </tr>
                                  	        </tbody>
                                  	      </table></td>
                                    	    <td valign="top"><table width="100%" border="2" cellpadding="2" cellspacing="2">
                                    	      <tbody>
                                    	        <tr>
                                    	          <td>Min To Race</td>
                                    	          <td><input name="txtMin" type="text" value="30" id="txtMin" /></td>
                                  	          </tr>
                                    	        <tr>
                                    	          <td>Start Time</td>
                                    	          <td><span id="lblStartTime">1/28/2015 7:11:36 PM</span></td>
                                  	          </tr>
                                    	        <tr>
                                    	          <td align="left"><input type="submit" name="cmdStart" value="Start" id="cmdStart" style="width:74px;" /></td>
                                    	          <td align="right"><input type="submit" name="cmdStop" value="Stop" id="cmdStop" style="width:74px;" /></td>
                                  	          </tr>
                                  	        </tbody>
                                  	      </table></td>
                                  	    </tr>
                               	    </table></td>
                                    <td width="32%" valign="top">
                                        <table width="100%" border="1" cellspacing="1" cellpadding="1">
                                          <tr>
                                            <td bgcolor="#FFCC33">ALL SET</td>
                                            <td bgcolor="#FFCC33">RACING</td>
                                            <td bgcolor="#FFCC33">PHOTO</td>
                                            <td bgcolor="#FFCC33">DIS JOCKEY</td>
                                          </tr>
                                        </table>
                                      <table width="100%" border="1" cellspacing="1" cellpadding="1" style="color:#FFF">
                                          <tr>
                                            <td bgcolor="#339933">2400</td>
                                            <td bgcolor="#339933">2200</td>
                                            <td bgcolor="#339933">2000</td>
                                            <td bgcolor="#339933">1800</td>
                                            <td bgcolor="#339933">1600</td>
                                        </tr>
                                          <tr>
                                            <td bgcolor="#339933">1400</td>
                                            <td bgcolor="#339933">1200</td>
                                            <td bgcolor="#339933">1000</td>
                                            <td bgcolor="#339933">800</td>
                                            <td bgcolor="#339933">600</td>
                                        </tr>
                                          <tr>
                                            <td bgcolor="#339933">400</td>
                                            <td bgcolor="#339933">200</td>
                                            <td bgcolor="#339933">100</td>
                                            <td bgcolor="#339933">50</td>
                                            <td bgcolor="#339933">&nbsp;</td>
                                        </tr>
                                    </table>
                                      <table width="100%" border="1" cellspacing="1" cellpadding="1" style="font-size:12px; color:#FFF;">
                                        <tr>
                                          <td align="center" bgcolor="#663366">WIN 1</td>
                                          <td align="center" bgcolor="#663366">WIN 2</td>
                                          <td align="center" bgcolor="#663366">WIN 3</td>
                                          <td align="center" bgcolor="#663366">WIN 4</td>
                                          <td align="center" bgcolor="#663366">WIN 5</td>
                                        </tr>
                                        <tr>
                                          <td align="center"><img src="Image/User.png" width="20px" height="20" /></td>
                                          <td align="center"><img src="Image/User.png" width="20px" height="20" /></td>
                                          <td align="center"><img src="Image/User.png" width="20px" height="20" /></td>
                                          <td align="center"><img src="Image/User.png" width="20px" height="20" /></td>
                                          <td align="center"><img src="Image/User.png" width="20px" height="20" /></td>
                                        </tr>
                                        <tr>
                                          <td align="center" bgcolor="#663366">WIN 6</td>
                                          <td align="center" bgcolor="#663366">WIN 7</td>
                                          <td align="center" bgcolor="#663366">WIN 8</td>
                                          <td align="center" bgcolor="#663366">WIN 9</td>
                                          <td align="center" bgcolor="#663366">WIN 10</td>
                                        </tr>
                                        <tr>
                                          <td align="center"><img src="Image/User.png" width="20px" height="20" /></td>
                                          <td align="center"><img src="Image/User.png" width="20px" height="20" /></td>
                                          <td align="center">&nbsp;</td>
                                          <td align="center">&nbsp;</td>
                                          <td align="center">&nbsp;</td>
                                        </tr>
                                        <tr>
                                          <td align="center" bgcolor="#663366">WIN 11</td>
                                          <td align="center" bgcolor="#663366">WIN 12</td>
                                          <td align="center" bgcolor="#663366">WIN 13</td>
                                          <td align="center" bgcolor="#663366">WIN 14</td>
                                          <td align="center" bgcolor="#663366">WIN 15</td>
                                        </tr>
                                        <tr>
                                          <td align="center">&nbsp;</td>
                                          <td align="center">&nbsp;</td>
                                          <td align="center">&nbsp;</td>
                                          <td align="center">&nbsp;</td>
                                          <td align="center">&nbsp;</td>
                                        </tr>
                                        <tr>
                                          <td align="center" bgcolor="#663366">WIN 16</td>
                                          <td align="center" bgcolor="#663366">WIN 17</td>
                                          <td align="center" bgcolor="#663366">WIN 18</td>
                                          <td align="center" bgcolor="#663366">WIN 19</td>
                                          <td align="center" bgcolor="#663366">WIN 20</td>
                                        </tr>
                                        <tr>
                                          <td align="center">&nbsp;</td>
                                          <td align="center">&nbsp;</td>
                                          <td align="center">&nbsp;</td>
                                          <td align="center">&nbsp;</td>
                                          <td align="center">&nbsp;</td>
                                        </tr>
                                    </table>
                                    <div id="Panel2">
                                            <table width="100%" border="2" cellpadding="2" cellspacing="2">
                                                <tbody>
                                                	<tr>
                                                        <td colspan="4">
                                                            <input type="submit" name="cmdRacingSave" value="Save" id="cmdRacingSave" style="width:23%;">
                                                            <input type="submit" name="cmdRacingClear" value="Clear" id="cmdRacingClear" style="width:26%;">
                                                            <input type="submit" name="cmdCOnfirmResult" value="Confirm Result" id="cmdCOnfirmResult" style="width:45%;">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Win No 1:</td>
                                                        <td align="center">
                                                            <input name="txtWinNo" type="text" maxlength="2" id="txtWinNo" style="width:25px;">    			
                                                        </td>
                                                        <td align="center">
                                                            <input name="txtWinBy1" type="text" maxlength="3" id="txtWinBy1" style="width:35px;">    			
                                                        </td>
                                                        <td align="center">
                                                            <select name="cmbUnit1" id="cmbUnit1" style="width:100px;">
                                                                <option selected="selected" value=""></option>
                                                                <option value="LEN">LEN</option>
                                                                <option value="NOSE">NOSE</option>
                                                                <option value="NECK">NECK</option>
                                                                <option value="S HEAD">S HEAD</option>
                                                                <option value="HEAD">HEAD</option>
                                                                <option value="DISTANCE">DISTANCE</option>
                                                                <option value="CONFIRM">CONFIRM</option>
                                                                <option value="PHOTO">PHOTO</option>
                                                                <option value="1st D HEAT">1st D HEAT</option>
                                                                <option value="2nd D HEAT">2nd D HEAT</option>
                                                                <option value="3rd D HEAT">3rd D HEAT</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Win No 2:</td>
                                                        <td align="center">
                                                            <input name="txtWinNo2" type="text" maxlength="2" id="txtWinNo2" style="width:25px;">    			
                                                        </td>
                                                        <td align="center">
                                                            <input name="txtWinBy2" type="text" maxlength="3" id="txtWinBy2" style="width:35px;">    			
                                                        </td>
                                                        <td align="center">
                                                            <select name="cmbUnit2" id="cmbUnit2" style="width:100px;">
                                                                <option selected="selected" value=""></option>
                                                                <option value="LEN">LEN</option>
                                                                <option value="NOSE">NOSE</option>
                                                                <option value="NECK">NECK</option>
                                                                <option value="S HEAD">S HEAD</option>
                                                                <option value="HEAD">HEAD</option>
                                                                <option value="DISTANCE">DISTANCE</option>
                                                                <option value="CONFIRM">CONFIRM</option>
                                                                <option value="PHOTO">PHOTO</option>
                                                                <option value="1st D HEAT">1st D HEAT</option>
                                                                <option value="2nd D HEAT">2nd D HEAT</option>
                                                                <option value="3rd D HEAT">3rd D HEAT</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Win No 3:</td>
                                                        <td align="center">
                                                            <input name="txtWinNo3" type="text" maxlength="2" id="txtWinNo3" style="width:25px;">    			
                                                        </td>
                                                        <td align="center">
                                                            <input name="txtWinBy3" type="text" maxlength="3" id="txtWinBy3" style="width:35px;">    			
                                                        </td>
                                                        <td align="center">
                                                            <select name="cmbUnit3" id="cmbUnit3" style="width:100px;">
                                                            <option selected="selected" value=""></option>
                                                            <option value="LEN">LEN</option>
                                                            <option value="NOSE">NOSE</option>
                                                            <option value="NECK">NECK</option>
                                                            <option value="S HEAD">S HEAD</option>
                                                            <option value="HEAD">HEAD</option>
                                                            <option value="DISTANCE">DISTANCE</option>
                                                            <option value="CONFIRM">CONFIRM</option>
                                                            <option value="PHOTO">PHOTO</option>
                                                            <option value="1st D HEAT">1st D HEAT</option>
                                                            <option value="2nd D HEAT">2nd D HEAT</option>
                                                            <option value="3rd D HEAT">3rd D HEAT</option>
                                                        </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Win No 4:</td>
                                                        <td align="center">
                                                            <input name="txtWinNo4" type="text" maxlength="2" id="txtWinNo4" style="width:25px;">    			
                                                        </td>
                                                        <td align="center">
                                                            <input name="txtWinBy4" type="text" maxlength="3" id="txtWinBy4" style="width:35px;">    			
                                                        </td>
                                                        <td align="center">
                                                            <select name="cmbUnit4" id="cmbUnit4" style="width:100px;">
                                                                <option selected="selected" value=""></option>
                                                                <option value="LEN">LEN</option>
                                                                <option value="NOSE">NOSE</option>
                                                                <option value="NECK">NECK</option>
                                                                <option value="S HEAD">S HEAD</option>
                                                                <option value="HEAD">HEAD</option>
                                                                <option value="DISTANCE">DISTANCE</option>
                                                                <option value="CONFIRM">CONFIRM</option>
                                                                <option value="PHOTO">PHOTO</option>
                                                                <option value="1st D HEAT">1st D HEAT</option>
                                                                <option value="2nd D HEAT">2nd D HEAT</option>
                                                                <option value="3rd D HEAT">3rd D HEAT</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                      </div>
                                      </td>
                                    <td width="13%">
                                    	<table cellpadding="2" cellspacing="2" border="0">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <select name="cmbCat1" id="cmbCat1" style="background-color:#FFFF99;width:170px;">
                                                            <option selected="selected" value="All GOING">All GOING</option>
                                                            <option value="INTERNET TICKET">INTERNET TICKET</option>
                                                            <option value="WHERE TO RACE &amp; GOING">WHERE TO RACE &amp; GOING</option>
                                                            <option value="TIME 00">TIME 00</option>
                                                            <option value="INFO">INFO</option>
                                                            <option value="testin">testin</option>
                                                            <option value="chg jocky">chg jocky</option>
                                                            <option value="horse">horse</option>
                                                            <option value="my horse">my horse</option>
                                                            <option value="10">10</option>
                                                            <option value="11">11</option>
                                                            <option value="12">12</option>
                                                            <option value="13">13</option>
                                                            <option value="14">14</option>
                                                            <option value="15">15</option>
                                                            <option value="16">16</option>
                                                            <option value="17">17</option>
                                                            <option value="18">18</option>
                                                            <option value="19">19</option>
                                                            <option value="20">20</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                    <select size="4" name="ItemName" style="background-color:#FFFF99;height:200px;width:170px;">
                                                        <option selected="selected" value="???">Going Firm       </option>
                                                        <option value="???">Going Good</option>
                                                        <option value="???">Going Heavy</option>
                                                        <option value="???">Going Soft</option>
                                                        <option value="????">Going Very Heavy</option>
                                                        <option value="????">Going Yeilding</option>
                                                    </select>
                                                    </td>
                                                </tr>
                                            </tbody>
                                      </table>
                                        <table cellpadding="2" cellspacing="2" border="0">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <select name="cmbCat3" id="cmbCat3" style="background-color:#FF99FF;width:170px;">
                                                            <option value="All GOING">All GOING</option>
                                                            <option value="INTERNET TICKET">INTERNET TICKET</option>
                                                            <option selected="selected" value="WHERE TO RACE &amp; GOING">WHERE TO RACE &amp; GOING</option>
                                                            <option value="TIME 00">TIME 00</option>
                                                            <option value="INFO">INFO</option>
                                                            <option value="testin">testin</option>
                                                            <option value="chg jocky">chg jocky</option>
                                                            <option value="horse">horse</option>
                                                            <option value="my horse">my horse</option>
                                                            <option value="10">10</option>
                                                            <option value="11">11</option>
                                                            <option value="12">12</option>
                                                            <option value="13">13</option>
                                                            <option value="14">14</option>
                                                            <option value="15">15</option>
                                                            <option value="16">16</option>
                                                            <option value="17">17</option>
                                                            <option value="18">18</option>
                                                            <option value="19">19</option>
                                                            <option value="20">20</option>
                                                            <option value="All GOING">All GOING</option>
                                                            <option value="INTERNET TICKET">INTERNET TICKET</option>
                                                            <option value="WHERE TO RACE &amp; GOING">WHERE TO RACE &amp; GOING</option>
                                                            <option value="TIME 00">TIME 00</option>
                                                            <option value="INFO">INFO</option>
                                                            <option value="testin">testin</option>
                                                            <option value="chg jocky">chg jocky</option>
                                                            <option value="horse">horse</option>
                                                            <option value="my horse">my horse</option>
                                                            <option value="10">10</option>
                                                            <option value="11">11</option>
                                                            <option value="12">12</option>
                                                            <option value="13">13</option>
                                                            <option value="14">14</option>
                                                            <option value="15">15</option>
                                                            <option value="16">16</option>
                                                            <option value="17">17</option>
                                                            <option value="18">18</option>
                                                            <option value="19">19</option>
                                                            <option value="20">20</option>
                                                            <option value="All GOING">All GOING</option>
                                                            <option value="INTERNET TICKET">INTERNET TICKET</option>
                                                            <option value="WHERE TO RACE &amp; GOING">WHERE TO RACE &amp; GOING</option>
                                                            <option value="TIME 00">TIME 00</option>
                                                            <option value="INFO">INFO</option>
                                                            <option value="testin">testin</option>
                                                            <option value="chg jocky">chg jocky</option>
                                                            <option value="horse">horse</option>
                                                            <option value="my horse">my horse</option>
                                                            <option value="10">10</option>
                                                            <option value="11">11</option>
                                                            <option value="12">12</option>
                                                            <option value="13">13</option>
                                                            <option value="14">14</option>
                                                            <option value="15">15</option>
                                                            <option value="16">16</option>
                                                            <option value="17">17</option>
                                                            <option value="18">18</option>
                                                            <option value="19">19</option>
                                                            <option value="20">20</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <select size="4" name="lstItem3" id="lstItem3" style="background-color:#FF99FF;height:200px;width:170px;">
                                                            <option selected="selected" value="???0??12:30 1200m">Hk Race:0 12:30 1200m</option>
                                                            <option value="???0??12:30 1200m ???">Hk Race:0 12:30 1200m Going Firm    </option>
                                                            <option value="???0??12:30 1200m????">Hk Race:0 12:30 1200m Going Good</option>
                                                            <option value="???0??12:30 1200m???">Hk Race:0 12:30 1200m Going Heavy</option>
                                                            <option value="???0??12:30 1200m???">Hk Race:0 12:30 1200m Going Soft</option>
                                                            <option value="???0??12:30 1200m????">Hk Race:0 12:30 1200m Going Very Heavy     </option>
                                                            <option value="???0??12:30 1200m????">Hk Race:0 12:30 1200m Going Yeilding</option>
                                                            <option value="???0??12:30 1200m">Ipoh Race:0 12:30 1200m</option>
                                                            <option value="????0??12:30 1200m">Sel Race:0 12:30 1200m</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                    <td width="13%">
                                    	<table cellpadding="2" cellspacing="2" border="0">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <select name="cmbCat2" onchange="javascript:setTimeout(&#39;__doPostBack(\&#39;cmbCat2\&#39;,\&#39;\&#39;)&#39;, 0)" id="cmbCat2" style="background-color:#99FF66;width:170px;">
                                                            <option value="All GOING">All GOING</option>
                                                            <option selected="selected" value="INTERNET TICKET">INTERNET TICKET</option>
                                                            <option value="WHERE TO RACE &amp; GOING">WHERE TO RACE &amp; GOING</option>
                                                            <option value="TIME 00">TIME 00</option>
                                                            <option value="INFO">INFO</option>
                                                            <option value="testin">testin</option>
                                                            <option value="chg jocky">chg jocky</option>
                                                            <option value="horse">horse</option>
                                                            <option value="my horse">my horse</option>
                                                            <option value="10">10</option>
                                                            <option value="11">11</option>
                                                            <option value="12">12</option>
                                                            <option value="13">13</option>
                                                            <option value="14">14</option>
                                                            <option value="15">15</option>
                                                            <option value="16">16</option>
                                                            <option value="17">17</option>
                                                            <option value="18">18</option>
                                                            <option value="19">19</option>
                                                            <option value="20">20</option>
                                                            <option value="All GOING">All GOING</option>
                                                            <option value="INTERNET TICKET">INTERNET TICKET</option>
                                                            <option value="WHERE TO RACE &amp; GOING">WHERE TO RACE &amp; GOING</option>
                                                            <option value="TIME 00">TIME 00</option>
                                                            <option value="INFO">INFO</option>
                                                            <option value="testin">testin</option>
                                                            <option value="chg jocky">chg jocky</option>
                                                            <option value="horse">horse</option>
                                                            <option value="my horse">my horse</option>
                                                            <option value="10">10</option>
                                                            <option value="11">11</option>
                                                            <option value="12">12</option>
                                                            <option value="13">13</option>
                                                            <option value="14">14</option>
                                                            <option value="15">15</option>
                                                            <option value="16">16</option>
                                                            <option value="17">17</option>
                                                            <option value="18">18</option>
                                                            <option value="19">19</option>
                                                            <option value="20">20</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <select size="4" name="lstItem2" id="lstItem2" style="background-color:#99FF66;height:200px;width:170px;">
                                                            <option selected="selected" value="??0??">Delay 0 Mins</option>
                                                            <option value="?? 10=4.20">Net Price 10=4.20</option>
                                                            <option value="?? 10=4.20 11=4.30">Net Price 10=4.20 11=4.30</option>
                                                            <option value="?? 10=4.20 11=4.30 13=4.40">Net Price 10=4.20 11=4.30 13=4.40</option>
                                                            <option value="??? 10=4.20 11=4.30 13=4.40">Net Ticket 3-7-9-5-10</option>
                                                            <option value="??????">Today Race Cancel</option>
                                
                                                        </select>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <table cellpadding="2" cellspacing="2" border="0">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <select name="cmbCat4" id="cmbCat4" style="background-color:#99CCFF;width:170px;">
                                                            <option value="All GOING">All GOING</option>
                                                            <option value="INTERNET TICKET">INTERNET TICKET</option>
                                                            <option value="WHERE TO RACE &amp; GOING">WHERE TO RACE &amp; GOING</option>
                                                            <option selected="selected" value="TIME 00">TIME 00</option>
                                                            <option value="INFO">INFO</option>
                                                            <option value="testin">testin</option>
                                                            <option value="chg jocky">chg jocky</option>
                                                            <option value="horse">horse</option>
                                                            <option value="my horse">my horse</option>
                                                            <option value="10">10</option>
                                                            <option value="11">11</option>
                                                            <option value="12">12</option>
                                                            <option value="13">13</option>
                                                            <option value="14">14</option>
                                                            <option value="15">15</option>
                                                            <option value="16">16</option>
                                                            <option value="17">17</option>
                                                            <option value="18">18</option>
                                                            <option value="19">19</option>
                                                            <option value="20">20</option>
                                                            <option value="All GOING">All GOING</option>
                                                            <option value="INTERNET TICKET">INTERNET TICKET</option>
                                                            <option value="WHERE TO RACE &amp; GOING">WHERE TO RACE &amp; GOING</option>
                                                            <option value="TIME 00">TIME 00</option>
                                                            <option value="INFO">INFO</option>
                                                            <option value="testin">testin</option>
                                                            <option value="chg jocky">chg jocky</option>
                                                            <option value="horse">horse</option>
                                                            <option value="my horse">my horse</option>
                                                            <option value="10">10</option>
                                                            <option value="11">11</option>
                                                            <option value="12">12</option>
                                                            <option value="13">13</option>
                                                            <option value="14">14</option>
                                                            <option value="15">15</option>
                                                            <option value="16">16</option>
                                                            <option value="17">17</option>
                                                            <option value="18">18</option>
                                                            <option value="19">19</option>
                                                            <option value="20">20</option>
                                                            <option value="All GOING">All GOING</option>
                                                            <option value="INTERNET TICKET">INTERNET TICKET</option>
                                                            <option value="WHERE TO RACE &amp; GOING">WHERE TO RACE &amp; GOING</option>
                                                            <option value="TIME 00">TIME 00</option>
                                                            <option value="INFO">INFO</option>
                                                            <option value="testin">testin</option>
                                                            <option value="chg jocky">chg jocky</option>
                                                            <option value="horse">horse</option>
                                                            <option value="my horse">my horse</option>
                                                            <option value="10">10</option>
                                                            <option value="11">11</option>
                                                            <option value="12">12</option>
                                                            <option value="13">13</option>
                                                            <option value="14">14</option>
                                                            <option value="15">15</option>
                                                            <option value="16">16</option>
                                                            <option value="17">17</option>
                                                            <option value="18">18</option>
                                                            <option value="19">19</option>
                                                            <option value="20">20</option>
                                                            <option value="All GOING">All GOING</option>
                                                            <option value="INTERNET TICKET">INTERNET TICKET</option>
                                                            <option value="WHERE TO RACE &amp; GOING">WHERE TO RACE &amp; GOING</option>
                                                            <option value="TIME 00">TIME 00</option>
                                                            <option value="INFO">INFO</option>
                                                            <option value="testin">testin</option>
                                                            <option value="chg jocky">chg jocky</option>
                                                            <option value="horse">horse</option>
                                                            <option value="my horse">my horse</option>
                                                            <option value="10">10</option>
                                                            <option value="11">11</option>
                                                            <option value="12">12</option>
                                                            <option value="13">13</option>
                                                            <option value="14">14</option>
                                                            <option value="15">15</option>
                                                            <option value="16">16</option>
                                                            <option value="17">17</option>
                                                            <option value="18">18</option>
                                                            <option value="19">19</option>
                                                            <option value="20">20</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <select size="4" name="lstItem4" id="lstItem4" style="background-color:#99CCFF;height:200px;width:170px;">
                                                            <option selected="selected" value=" ??1??">LEFT 1 HORSE</option>
                                                            <option value=" ??1?0??">LEFT 1 HORSE NO 0</option>
                                                            <option value=" ??10??">LEFT 10 HORSE</option>
                                                            <option value=" ??2??">LEFT 2  HORSE</option>
                                                            <option value=" ??2?0-0??">LEFT 2 HORSE NO 0-0</option>
                                                            <option value=" ??2?0-0??">LEFT 2 HORSE NO:0-0</option>
                                                            <option value=" ??4??">LEFT 4  HORSE</option>
                                                            <option value=" ??6??">LEFT 6  HORSE</option>
                                                            <option value=" ??8??">LEFT 8  HORSE</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td width="23%" valign="top">&nbsp;</td>
                                    <td width="19%" valign="top">&nbsp;</td>
                                    <td>
                                    	
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                  </tr>
                                </table>
							</div>
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