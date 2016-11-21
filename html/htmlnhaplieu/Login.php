<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Login HorseRacing</title>
	</head>
	<body>
		<form name="Login" method="post" action="./Login_files/Login.html" id="Login" autocomplete="off">
			<table height="70%" cellspacing="0" cellpadding="5" width="100%">
				<tbody>
					<tr>
						<td valign="middle" align="center">
							<table cellspacing="0" cellpadding="5" width="300">
								<tbody>
									<tr>
										<td align="center"><!--<IMG src="image/9911.jpg">-->
										</td>
									</tr>
								</tbody>
							</table>
							<br>
							<table style="BORDER-RIGHT: black 1pt solid; BORDER-TOP: black 1pt solid; BORDER-LEFT: black 1pt solid; BORDER-BOTTOM: black 1pt solid" cellspacing="0" cellpadding="3" width="300">
								<tbody>
									<tr>
										<td bgcolor="#336699"><font color="white"><b>Please Login</b></font>
										</td>
									</tr>
									<tr>
										<td bgcolor="#eeeeee">
											<table cellspacing="0" cellpadding="5" width="300">
												<tbody>
													<tr>
														<td width="100"><b>User ID:</b>
														</td>
														<td><input name="TxtUserID" type="text" maxlength="20" id="TxtUserID" class="tbox" style="width:176px;"></td>
													</tr>
													<tr>
														<td><b>Password:</b>
														</td>
														<td><input name="TxtPassword" type="password" maxlength="20" id="TxtPassword" class="tbox" style="width:176px;"></td>
													</tr>
												</tbody>
											</table>
											<br>
											<table cellspacing="0" cellpadding="3" width="295">
												<tbody>
													<tr>
														<td align="right"><input type="submit" name="BtnLogin" value="Login" id="BtnLogin"></td>
													</tr>
												</tbody>
											</table>
										</td>
									</tr>
								</tbody>
							</table>
							<br>
							<table cellspacing="0" cellpadding="5" width="300">
								<tbody>
									<tr>
										<td><span id="LblMessage" class="warningText"></span></td>
									</tr>
								</tbody>
							</table>
						</td>
					</tr>
				</tbody>
			</table>
		</form>
	</body>
</html>