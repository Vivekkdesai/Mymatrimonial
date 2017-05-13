<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns:v="urn:schemas-microsoft-com:vml" style="width: 100%;min-width: 100%;">
<?php
session_start(); 
include('connection.php');

?>
	<head>
		<!--[if mso]><![endif]-->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	
<style type="text/css">
	@font-face {font-family: 'Open Sans';  font-style: normal;  font-weight: 400;  src: local('Open Sans'), local('OpenSans'), url(http://fonts.gstatic.com/s/opensans/v13/cJZKeOuBrn4kERxqtaUH3VtXRa8TVwTICgirnJhmVJw.woff2) format('woff2');  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, egU+2000-206F, U+2074, U+20AC, U+2212, U+2215, U+E0FF, U+EFFD, U+F000;}
		[style*=Open Sans]{
			font-family:'Open Sans', Calibri, sans-serif !important;
		}
		.ReadMsgBody{
			width:100%;
			background-color:#ffffff;
		}
		.ExternalClass{
			width:100%;
			background-color:#ffffff;
		}
		.ExternalClass,.ExternalClass p,.ExternalClass span,.ExternalClass font,.ExternalClass td,.ExternalClass div{
			line-height:100%;
		}
		html{
			width:100%;
			min-width:100%;
		}
		table{
			border-spacing:0;
			table-layout:fixed;
			Margin:0 auto;
		}
		table table table{
			table-layout:auto;
		}
		img{
			display:block !important;
			overflow:hidden !important;
		}
		table td{
			border-collapse:collapse;
		}
		.yshortcuts a{
			border-bottom:none !important;
		}
		a{
			color:#3498db;
			text-decoration:none;
		}
		li{
			Margin-bottom:5px;
		}
		body{
			width:100%;
			min-width:100%;
			background-color:#ffffff;
			Margin:0;
			padding:0;
			mso-Margin-top-alt:0px;
			mso-Margin-bottom-alt:0px;
			mso-padding-alt:0px 0px 0px 0px;
			-webkit-text-size-adjust:none;
			-ms-text-size-adjust:none;
		}
		h1,h2,h3,h4{
			Margin-top:0;
			Margin-bottom:0;
			padding-top:0;
			padding-bottom:0;
		}
		p{
			Margin:0;
			padding:0;
			Margin-top:0;
			Margin-bottom:15px;
		}
		span.preheader{
			display:none;
			font-size:1px;
		}
	@media only screen and (max-device-width: 640px){
		.main-header{
			font-size:20px !important;
		}

}	@media only screen and (max-device-width: 640px){
		.main-section-header{
			font-size:28px !important;
		}

}	@media only screen and (max-device-width: 640px){
		.hide{
			display:none !important;
		}

}	@media only screen and (max-device-width: 640px){
		.align-center{
			text-align:center !important;
		}

}	@media only screen and (max-device-width: 640px){
		.container590{
			width:440px !important;
		}

}	@media only screen and (max-device-width: 640px){
		.container550{
			width:420px !important;
		}

}	@media only screen and (max-device-width: 640px){
		.deviceWidth{
			width:400px !important;
		}

}	@media only screen and (max-device-width: 414px){
		.container590{
			width:380px !important;
		}

}	@media only screen and (max-device-width: 414px){
		.container550{
			width:340px !important;
		}

}	@media only screen and (max-device-width: 414px){
		.deviceWidth{
			width:320px !important;
		}

}	@media only screen and (max-device-width: 375px){
		.container590{
			width:350px !important;
		}

}	@media only screen and (max-device-width: 375px){
		.container550{
			width:310px !important;
		}

}	@media only screen and (max-device-width: 375px){
		.deviceWidth{
			width:290px !important;
		}

}	@media only screen and (max-device-width: 320px){
		.main-header{
			font-size:20px !important;
		}

}	@media only screen and (max-device-width: 320px){
		.main-section-header{
			font-size:24px !important;
		}

}	@media only screen and (max-device-width: 320px){
		.align-center{
			text-align:center !important;
		}

}	@media only screen and (max-device-width: 320px){
		.container590{
			width:280px !important;
		}

}	@media only screen and (max-device-width: 320px){
		.container550{
			width:240px !important;
		}

}	@media only screen and (max-device-width: 320px){
		.deviceWidth{
			width:220px !important;
		}

}</style></head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" style="width: 100%;min-width: 100%;background-color: #ffffff;margin: 0;padding: 0;mso-margin-top-alt: 0px;mso-margin-bottom-alt: 0px;mso-padding-alt: 0px 0px 0px 0px;-webkit-text-size-adjust: none;-ms-text-size-adjust: none;">
	<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" style="width: 100%;min-width: 100%;border-spacing: 0;table-layout: fixed;margin: 0 auto;"> <!-- Start outer containter table -->
		<tr>
			<td width="100%" valign="top" bgcolor="#ffffff" align="center" style="border-collapse: collapse;">
				<!-- Start inner container-->
				<table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="container590" style="margin: 0 auto;max-width: 600px;border-spacing: 0;table-layout: fixed;">
					<tr>
						<td width="100%" bgcolor="#ffffff" style="border-collapse: collapse;">
							<!-- Start Header Table -->
							<table border="0" width="100%" cellpadding="0" cellspacing="0" bgcolor="#1f212d" style="border-bottom: 2px solid #7ac043;border-spacing: 0;table-layout: auto;margin: 0 auto;">
								<tr>
									<td style="background-color: #1f212d;border-collapse: collapse;" bgcolor="#1f212d">
										<table style="width: 100%;border-bottom: 1px solid #2d3039;border-spacing: 0;table-layout: auto;margin: 0 auto;">
											<tbody>
												<tr>
													<td align="center" style="border-collapse: collapse;">
														<center>
															<table border="0" align="center" width="100%" cellpadding="0" cellspacing="0" class="container590" style="margin: 0 auto;border-spacing: 0;table-layout: auto;">
																<tbody>
																	<tr>
																		<td style="border-collapse: collapse;">
																			<table border="0" align="left" cellpadding="0" cellspacing="0" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;border-spacing: 0;table-layout: auto;margin: 0 auto;" class="container590">
																				<tbody>
																				<tr>
																					<td align="center" style="border-collapse: collapse;">
																					<table border="0" cellpadding="0" cellspacing="0" align="center" style="border-spacing: 0;table-layout: auto;margin: 0 auto;">
																						<tbody>
																						<tr>
																							<!-- ======= logo ======= -->
																							<td align="center" style="border-collapse: collapse;">
																							<a href="http://emailonacid.us1.list-manage.com/track/click?u=b6418bd90c647b0ab5f294717&id=9fbb15eb01&e=d93e5d7623" style="display: block;border: 0px !important;color: #3498db;text-decoration: none;">
																								<img src="http://s19.postimg.org/eskjud1kv/logo.png" alt="Email on Acid" border="0" style="margin: 0;padding: 0;display: block;height: 73px;width: 174px;overflow: hidden !important;">
																							</a>
																							</td>
																						</tr>
																						</tbody>
																					</table>
																					</td>
																				</tr>
																				</tbody>
																			</table>
																		<table border="0" align="left" width="5" cellpadding="0" cellspacing="0" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;border-spacing: 0;table-layout: auto;margin: 0 auto;" class="hide">
																			<tbody>
																			<tr>
																				<td height="40" width="5" style="font-size: 40px;line-height: 40px;border-collapse: collapse;">&nbsp;
																											 
																				</td>
																			</tr>
																			</tbody>
																		</table>
																		<table border="0" align="right" cellpadding="0" width="320" cellspacing="0" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;border-spacing: 0;table-layout: auto;margin: 0 auto;" class="hide">
																			<tbody>
																			<tr>
																				<td height="20" width="100%" style="font-size: 20px;line-height: 20px;border-collapse: collapse;">&nbsp;
																								 
																				</td>
																			</tr>
																			<tr>
																				<td style="border-collapse: collapse;">
																					<table border="0" align="left" cellpadding="0" cellspacing="0" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;border-spacing: 0;table-layout: auto;margin: 0 auto;" class="hide">
																						<tbody>
																							<tr>
																								<td align="center" style="border-collapse: collapse;">
																									
																								</td>
																							</tr>
																						</tbody>
																					</table>
																					<table border="0" align="left" width="2" cellpadding="0" cellspacing="0" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;border-spacing: 0;table-layout: auto;margin: 0 auto;" class="hide">
																						<tbody>
																							<tr>
																								<td height="4" width="20" style="font-size: 4px;line-height: 4px;border-collapse: collapse;">&nbsp;
																									
																								</td>
																							</tr>
																						</tbody>
																					</table>
																					<table border="0" align="right" width="20" cellpadding="0" cellspacing="0" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;border-spacing: 0;table-layout: auto;margin: 0 auto;" class="hide">
																						<tbody>
																							<tr>
																								<td height="20" width="20" style="font-size: 20px;line-height: 20px;border-collapse: collapse;">&nbsp;
																									
																								</td>
																							</tr>
																						</tbody>
																					</table>
																					
																				</td>
																			</tr>
																			</tbody>
																		</table>
																		</td>
																	</tr>
																</tbody>
															</table>
														</center>
													</td>
												</tr>
											</tbody>
										</table>
									</td>
								</tr>
							</table>
		

								<table border="0" cellpadding="20" cellspacing="0" bgcolor="#ffffff" mc:repeatable="repeat_1" mc:hideable="hideable_repeat_1_1" mc:repeatindex="0" mchideable="hideable_repeat_1_1" style="border-spacing: 0;table-layout: auto;margin: 0 auto;">
									<tbody>
										<tr>
											<td align="center" width="600" style="background-color: #ffffff;border-collapse: collapse;" class="container550">
												<table border="0" align="center" cellpadding="0" cellspacing="0" width="100%" style="border-spacing: 0;table-layout: auto;margin: 0 auto;">
													<tbody>
														<tr>
															<td height="5" style="font-size: 5px;line-height: 5px;border-collapse: collapse;">&nbsp;
																
															</td>
														</tr>
														<tr>
															<td align="left" style="border-collapse: collapse;">
																<table border="0" align="center" cellpadding="0" cellspacing="0" style="border-spacing: 0;table-layout: auto;margin: 0 auto;">
																	<tbody>
																		<tr>
																			<td align="left" style="color: #222;font-size: 16px;font-family: Calibri, sans-serif, 'Open Sans';line-height: 18px;border-collapse: collapse;"><p style="margin: 0;padding: 0;margin-top: 0;margin-bottom: 15px;">Welcome to our Maheshwari Matrimonial website.</p>

<p style="margin: 0;padding: 0;margin-top: 0;margin-bottom: 15px;">thanks for registration
Your account <?php echo $_SESSION['userid']; ?> has been DEACTIVATED</p>
<table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-spacing: 0;table-layout: auto;margin: 0 auto;">
	<tbody>
		<tr>
			<td height="15" style="font-size: 15px;line-height: 15px;border-collapse: collapse;" width="100%">&nbsp;</td>
		</tr>
	</tbody>
</table>

Cheers,<br>
<br>
<em>Maheshwari Matrimonial</em></p>
<style type="text/css">#_eoa_div, #_eoa_img { display:none; } @media print{ #_eoa_div { background-image: url('https://eoapxl.com/VTaNzGK0g3/agarwalsunny68@gmail.com/P'); } } div.OutlookMessageHeader, table.moz-email-headers-table, blockquote #_eoa_div, #mailContainerBody #_eoa_div { background-image:url('https://eoapxl.com/VTaNzGK0g3/agarwalsunny68@gmail.com/F') }
</style>
<div id="_eoa_div" style="display: none;">&nbsp;</div>
<img alt="" border="0" height="1" id="_eoa_img" src="https://eoapxl.com/VTaNzGK0g3/agarwalsunny68@gmail.com" style="height: 1px !important;width: 1px !important;border-width: 0 !important;margin-top: 0 !important;margin-bottom: 0 !important;margin-right: 0 !important;margin-left: 0 !important;padding-top: 0 !important;padding-bottom: 0 !important;padding-right: 0 !important;padding-left: 0 !important;display: block;overflow: hidden !important;" title="" width="1"></td>
																		</tr>
																	</tbody>
																</table>
															</td>
														</tr>
													</tbody>
												</table>
											</td>
										</tr>
									</tbody>
								</table>

								

								<!-- Start footer -->
								<table border="0" cellpadding="20" cellspacing="0" bgcolor="#313743" style="border-spacing: 0;table-layout: auto;margin: 0 auto;"> 
									<tbody>
										<tr>
											<td align="center" style="border-collapse: collapse;">
												<table border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#313743" class="container550" style="border-spacing: 0;table-layout: auto;margin: 0 auto;">
													<tbody>
														<tr>
															<td width="600" class="container550" style="border-collapse: collapse;">
																<table border="0" width="300" align="left" cellpadding="0" cellspacing="0" bgcolor="#313743" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;border-spacing: 0;table-layout: auto;margin: 0 auto;" class="container550">
																	<tbody>
																		<tr>
																			<td align="left" style="color: #E8E8E8;font-size: 20px;font-family: Calibri, sans-serif, 'Open Sans';line-height: 22px;border-collapse: collapse;">
																				About Us
																			</td>
																		</tr>
																		<tr>
																			<td height="20" style="font-size: 20px;line-height: 20px;border-collapse: collapse;">&nbsp;
																				
																			</td>
																		</tr>
																		<tr>
																			<td align="left" style="color: #848484;font-size: 16px;font-family: Calibri, sans-serif, 'Open Sans';line-height: 20px;border-collapse: collapse;">
																				Email on Acid provides email testing, troubleshooting and tracking tools to help you simplify and improve your email marketing efforts. 
																			</td>
																		</tr>
																		<tr>
																			<td height="20" style="font-size: 20px;line-height: 20px;border-collapse: collapse;">&nbsp;
																				
																			</td>
																		</tr>
																		<tr>
																			<td align="left" style="border-collapse: collapse;">
																				<table border="0" align="left" cellpadding="0" cellspacing="0" style="border-spacing: 0;table-layout: auto;margin: 0 auto;">
																					<tbody>
																						<tr>
																							<td style="border-collapse: collapse;">
																								<a href="http://emailonacid.us1.list-manage.com/track/click?u=b6418bd90c647b0ab5f294717&id=e448eb33d8&e=d93e5d7623" style="display: block;width: 8px;height: 13px;color: #3498DB;border: 0px !important;text-decoration: none;">
																									<img width="8" height="13" border="0" style="display: block;width: 8px;height: 13px;overflow: hidden !important;" src="http://mobilerace.net/Mda/demo/images/img50.png" alt="facebook">
																								</a>
																							</td>
																							<td style="border-collapse: collapse;">
																								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
																							</td>
																							<td style="border-collapse: collapse;">
																								<a href="http://emailonacid.us1.list-manage.com/track/click?u=b6418bd90c647b0ab5f294717&id=3fc6003f13&e=d93e5d7623" style="display: block;width: 13px;height: 13px;color: #3498DB;border: 0px !important;text-decoration: none;">
																									<img width="13" height="13" border="0" style="display: block;width: 13px;height: 13px;overflow: hidden !important;" src="http://mobilerace.net/Mda/demo/images/img51.png" alt="google">
																								</a>
																							</td>
																							<td style="border-collapse: collapse;">
																								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
																							</td>
																							<td style="border-collapse: collapse;">
																								<a href="http://emailonacid.us1.list-manage2.com/track/click?u=b6418bd90c647b0ab5f294717&id=d33efd8d68&e=d93e5d7623" style="display: block;width: 13px;height: 10px;color: #3498DB;border: 0px !important;text-decoration: none;">
																									<img width="13" height="10" border="0" style="display: block;width: 13px;height: 10px;overflow: hidden !important;" src="http://mobilerace.net/Mda/demo/images/img52.png" alt="twitter">
																								</a>
																							</td>
																							<td style="border-collapse: collapse;">
																								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
																							</td>
																							<td style="border-collapse: collapse;">
																								<a href="http://emailonacid.us1.list-manage.com/track/click?u=b6418bd90c647b0ab5f294717&id=5bf0169933&e=d93e5d7623" style="display: block;width: 12px;height: 12px;color: #3498DB;border: 0px !important;text-decoration: none;">
																									<img width="12" height="12" border="0" style="display: block;width: 12px;height: 12px;overflow: hidden !important;" src="http://mobilerace.net/Mda/demo/images/img53.png" alt="linkden">
																								</a>
																							</td>
																							<td style="border-collapse: collapse;">
																								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
																							</td>
																							<td style="border-collapse: collapse;">
																								<a href="http://emailonacid.us1.list-manage1.com/track/click?u=b6418bd90c647b0ab5f294717&id=58cc63fcbf&e=d93e5d7623" style="display: block;width: 12px;height: 12px;color: #3498DB;border: 0px !important;text-decoration: none;">
																									<img width="12" height="12" border="0" style="display: block;width: 12px;height: 12px;overflow: hidden !important;" src="http://mobilerace.net/Mda/demo/images/img55.png" alt="pinterest">
																								</a>
																							</td>
																						</tr>
																					</tbody>
																				</table>
																			</td>
																		</tr>
																	</tbody>
																</table>
															<table border="0" width="2" align="left" cellpadding="0" cellspacing="0" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;border-spacing: 0;table-layout: auto;margin: 0 auto;" class="container550">
																<tbody>
																	<tr>
																		<td width="2" height="30" style="font-size: 30px;line-height: 30px;border-collapse: collapse;">&nbsp;
																			
																		</td>
																	</tr>
																</tbody>
															</table>
																<table border="0" width="200" align="right" cellpadding="0" cellspacing="0" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;border-spacing: 0;table-layout: auto;margin: 0 auto;" class="container550">
																	<tbody>
																		<tr>
																			<td align="left" style="color: #E8E8E8;font-size: 20px;font-family: Calibri, sans-serif, 'Open Sans';line-height: 22px;border-collapse: collapse;">
																				Contact Us
																			</td>
																		</tr>
																		<tr>
																			<td height="20" style="font-size: 20px;line-height: 20px;border-collapse: collapse;">&nbsp;
																				
																			</td>
																		</tr>
																		<tr>
																			<td align="left" style="color: #848484;font-size: 14px;font-family: Calibri, sans-serif, 'Open Sans';line-height: 18px;border-collapse: collapse;">
																				<span style="color: #D6D6D6;">
																					Address
																				</span>
																				<br>
																				<div class="appleFix">
																					<div class="vcard"><span class="org fn">Email on Acid</span><div class="adr"><div class="street-address">9378 E. Voltaire Ave</div><span class="locality">Scottsdale</span>, <span class="region">Arizona</span>  <span class="postal-code">85260</span></div><br><a href="http://emailonacid.us1.list-manage.com/vcard?u=b6418bd90c647b0ab5f294717&id=5bb8e770b5" class="hcard-download">Add us to your address book</a></div>
																				</div>
																			</td>
																		</tr>
																		<tr>
																			<td height="20" style="font-size: 20px;line-height: 20px;border-collapse: collapse;">&nbsp;
																				
																			</td>
																		</tr>
																		<tr>
																			<td align="left" style="color: #848484;font-size: 14px;font-family: Calibri, sans-serif, 'Open Sans';line-height: 18px;border-collapse: collapse;">
																				<span style="color: #D6D6D6;">
																				Phone
																				</span>
																				<br>
																				720-242-7633
																			</td>
																		</tr>
																	</tbody>
																</table>
															</td>
														</tr>
													</tbody>
												</table>
											</td>
										</tr>
									</tbody>
								</table>
								<div style="display:none; white-space:nowrap; font:15px courier; color:#ffffff;">
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
</div>
		
	<img src="http://emailonacid.us1.list-manage.com/track/open.php?u=b6418bd90c647b0ab5f294717&id=6adbbb12d3&e=d93e5d7623" height="1" width="1"></body>
</html>