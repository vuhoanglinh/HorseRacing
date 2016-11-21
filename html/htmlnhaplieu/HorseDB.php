<?php 
	include_once("header.php");
?>
<body class="master">
    <script src="js/HorseDB.js" type="text/javascript"></script>
    <form name="form1" method="post" action="" id="form1">
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
							<br>
							<b>Category</b>
							<div id="UpdatePanel1">
								<table cellpadding="0" cellspacing="0" border="0">
									<tbody>
										<tr>
											<td>
												<select size="4" name="lstCategory" id="lstCategory" style="background-color:#FFFF99;height:150px;width:200px;">
													<option selected="selected" value="testin">testin</option>
													<option value="chg jocky">chg jocky</option>
													<option value="horse">horse</option>
													<option value="my horse">my horse</option>
													<option value="10">10</option>
													<option value="11">11</option>
													<option value="12">12</option>
													<option value="13">13</option>
												</select>    
											</td>
											<td valign="top">
												<b>Category :</b>
												<input name="txtCategory" type="text" value="testin" id="txtCategory" style="width:210px;">
												<br><br>
												<input type="button" name="btnEditCat" value="Save Name" id="btnEditCat" style="width:20%;">
											</td>
										</tr>
										<tr>
											<td>
												<b>Items</b>
											</td>
										</tr>
										<tr>
											<td>
												<select size="4" name="lstItems" id="lstItems" style="background-color:#FFFF99;height:500px;width:300px;">
													<option value="">goal</option>
													<option value="网出 10=4.20">Net Price 10=4.20</option>
												</select>
											</td>
											<td valign="top">
												<input type="button" name="btnDeleteItem" value="Delete Item" id="btnDeleteItem" style="color:White;background-color:#FF3300;width:100px;">
												<br><br>
												<b>English :</b>
												<input name="txtItem" type="text" value="Net Price 10=4.20" id="txtItem" style="width:650px;">
												<br><br>
												<b>Chinese :</b>
												<input name="txtItemMan" type="text" value="网出 10=4.20" id="txtItemMan" style="width:650px;">
												<br><br>
												<input type="button" name="btnAddItem" value="Add Item" id="btnAddItem" style="color:White;background-color:#003300;width:100px;">
												&nbsp;
												<input type="button" name="btnEditItem" value="Save Name" id="btnEditItem" style="width:100px;">
											</td>
										 </tr>
									</tbody>
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