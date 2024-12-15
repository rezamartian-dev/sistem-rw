<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Icrypt {
		public function user_password($pass, $act, $salt) {

			$secret_key = 'MGZQxbj0tywcsk20ccGjN6qLDfuggFX2';
			$secret_iv = '88FEE88F5FDAE7E2533B4D5845212';
			$encrypt_method = "AES-256-CBC";
			$key = hash( 'sha256', $secret_key );
			$iv = substr( hash( 'sha256', $secret_iv ), 0, 16 );

			if( $act == true ) {
				$output = base64_encode( openssl_encrypt( $pass, $encrypt_method, $key, 0, $iv ) );
				$salt_key = md5(uniqid(time(), true) . $secret_key);
				$data = crypt($output, $salt_key);
			}
			else if( $act == false ){
				$output = base64_encode( openssl_encrypt( $pass, $encrypt_method, $key, 0, $iv ) );
				$salt_key = $salt;
				$data = crypt($output, $salt_key);
			}
			$arr = array(
				'hash' => $output,
				'salt' => $salt_key,
				'output' => $data
			);
			return $arr;
        }
	/* Image Name Encryption */
	public function imgEn($string) {
		$output = false;
		$encrypt_method = "AES-256-CBC";
		$secret_key = '`ZQU&FU(6NQ<yZv';
		$secret_iv = 'bWxDUja|zFifN"9';
		// hash
		$key = hash('sha256', $secret_key);
		// iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
		$iv = substr(hash('sha256', $secret_iv), 0, 16);
		$output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
		$output = base64_encode($output);
		//
		return substr($output, 0, 50);
	}
		
		
		
		
		//===========================
        public function iCrypts($string, $action, $salt) {
			$secret_key = 'MGZQxbj0tywcsk20ccGjN6qLDfuggFX2';
			$secret_iv = '88FEE88F5FDAE7E2533B4D5845212';
			
			//
			
			
			$output = false;
			$encrypt_method = "AES-256-CBC";
			$key = hash( 'sha256', $secret_key );
			$iv = substr( hash( 'sha256', $secret_iv ), 0, 16 );
		 
			if( $action == 'r' ) {
				$output = base64_encode( openssl_encrypt( $string, $encrypt_method, $key, 0, $iv ) );
				$salt_key = md5(uniqid(time(), true) . $secret_key);
				$data = crypt($output, $salt_key);
				
				
			}
			else if( $action == 'l' ){
				//$output = openssl_decrypt( base64_decode( $string ), $encrypt_method, $key, 0, $iv );
				$output = base64_encode( openssl_encrypt( $string, $encrypt_method, $key, 0, $iv ) );
				$salt_key = $salt;
				$data = crypt($output, $salt_key);
			}
			
			$arr = array(
				'hash' => $output,
				'salt' => $salt_key,
				'output' => $data
			);
			
			
		 
			return $arr;
        }
		
		public function randomKey($key) {
			return md5(uniqid(time(), true) . $key);
		}
		
		public function Mail_Body($url, $name) {
			$body = 
				'<table align="center" border="0" cellpadding="0" cellspacing="0" style="background-color:#f2f2f2;border-collapse:collapse!important;height:100%!important;margin:0;padding:0;width:100%!important">
					<tbody>
						<tr>
							<td align="center" style="height:100%!important;width:100%!important;margin:0;padding:20px" valign="top">
							<table border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse!important;width:600px">
								<tbody>
									<tr>
										<td align="center" valign="top">
										<table border="0" cellpadding="0" cellspacing="0" style="background-color:#ffffff;border-bottom:none;border-collapse:collapse!important;border-color:#e3e3e3;border-style:solid;border-width:1px;width:100%">
											<tbody>
												<tr>
													<td align="right" style="background-color: #30B570;color:#505050;font-family:Helvetica;height:94px;max-width:600px;font-size:20px;font-weight:bold;line-height:20px;text-align:center;vertical-align:middle;padding:0" valign="top">
													  <a href="" style="text-decoration:none" target="_blank">
														<img style="width: 200px;" src="https://tripisia.com/assets/img/logo-tripisia.png">
													  </a>
													</td>
												</tr>
											</tbody>
										</table>
										</td>
									</tr>
									<tr>
										<td align="center" valign="top">
										<table border="0" cellpadding="0" cellspacing="0" style="background-color:#ffffff;border-collapse:collapse!important;border-color:#e3e3e3;border-style:solid;border-top:none;border-width:1px;width:100%">
											<tbody>
												<tr>
													<td align="left" style="color:#505050;font-family:Helvetica;font-size:16px;line-height:24px;text-align:left;padding:20px" valign="top">
													  <span style="color:#222;display:block;font-family:arial,helvetica,sans-serif;font-size:20px;letter-spacing:normal;line-height:26px;margin:0;text-align:left">
														Account Activation
													  </span>
													  <p style="text-align: justify; color:#4d4d4d;font-family:Arial,Helvetica,sans-serif;font-size:14px;font-style:normal;line-height:21px">
														Hi, ' . $name . '
														<br>
														<br>
														Thanks for signing up. To activate your account, please verify your email address
														by clicking the button below.
													  </p>
													
													  <table border="0" style="height:29px;width:180px">
														<tbody>
															<tr>
																<td align="center" bgcolor="#30B570" height="29" valign="middle"><a href="' . $url . '" style="text-decoration:none" target="_blank"><strong style="text-decoration:none"><font color="#FFFFFF" style="text-decoration:none;color:rgb(255,255,255);font-size:13px;font-family:Arial,Helvetica,sans-serif">Click to activate your account.</font></strong></a></td>
															</tr>
														</tbody>
													  </table>
													  
													  <p style="color:#4d4d4d;font-family:Arial,Helvetica,sans-serif;font-size:14px;font-style:normal;line-height:21px">
														If you received this email by mistake or waren&apos;t expecting it, simply delete it or just ignore this email.
														<br>
														<br>
														Thanks, Anton Arifin
													  </p>
													  
													</td>
												</tr>
											</tbody>
										</table>
										</td>
									</tr>
									<tr style="background-color:#f2f2f2">
										<td align="center" style="background-color:#f2f2f2" valign="top">
										<table border="0" cellpadding="0" cellspacing="0" style="background-color:#f2f2f2;border-collapse:collapse!important;font-size:10px;width:100%">
											<tbody>
												<tr>
													<td align="center" style="padding-top:20px;width:68%" valign="top" width="67%">
													
													</td>
													<td align="right" style="padding-top:20px;width:32%" valign="top" width="214">
													<table border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse!important;width:100%">
														<tbody>
															<tr>
																<td align="left" style="color:rgb(77,77,77);font-family:Helvetica;background:rgb(242,242,242);font-size:10px;line-height:15px;text-align:left;padding-left:0px;padding-bottom:0px;padding-top:5px"><a href="http://go.esri.com/e/82202/esrioceans-/hgvp7b/468786379" target="_blank" data-saferedirecturl="https://www.google.com/url?hl=en&amp;q=http://go.esri.com/e/82202/esrioceans-/hgvp7b/468786379&amp;source=gmail&amp;ust=1505380627785000&amp;usg=AFQjCNEsuTIrXL_9JCArz9oM8MntotxSvA"><img alt="Facebook" src="https://ci5.googleusercontent.com/proxy/K13loTF4uhdI2YQam-IA4EPtEum2BBuAN03ORMNWZ2UctzqxE1bt7cKWcrjPl78H74eUsMYhbaGP6oIwOmT6zwWG1OEaTUBfXlEPTPFRENvlvg=s0-d-e1-ft#http://www.esri.com/~/media/B245703802084DFA910643E34CA4A76D" style="border:0;height:auto;max-width:30px;outline:none;padding-left:2px;padding-right:2px;text-decoration:none"></a> <a href="http://go.esri.com/e/82202/esrigram-/hgvntv/468786379" target="_blank" data-saferedirecturl="https://www.google.com/url?hl=en&amp;q=http://go.esri.com/e/82202/esrigram-/hgvntv/468786379&amp;source=gmail&amp;ust=1505380627785000&amp;usg=AFQjCNHxERznQ2O9jH9htdMkJ4AcVc3iEQ"><img alt="Instagram" src="https://ci3.googleusercontent.com/proxy/02RApiaRxhPb3__yL3_IADRJrzCnNqqpHQQOedd7_kUWs82mLoqp8CpxiYczv8GEE1zLz4lt--RYYeNRbVRXvcoULSDJsHzWF__PwmE20O0GmQ=s0-d-e1-ft#http://www.esri.com/~/media/AB0B988E36EC410A98269CA9008BC136" style="border:0;height:auto;max-width:30px;outline:none;padding-left:2px;padding-right:2px;text-decoration:none"></a> <a href="http://go.esri.com/e/82202/company-esri/hgvntx/468786379" target="_blank" data-saferedirecturl="https://www.google.com/url?hl=en&amp;q=http://go.esri.com/e/82202/company-esri/hgvntx/468786379&amp;source=gmail&amp;ust=1505380627785000&amp;usg=AFQjCNHUc8csSTrH-9YbyWHB1fGE-9_bAQ"><img alt="LinkedIn" src="https://ci4.googleusercontent.com/proxy/k6anaFz3Yv25D6j2h9NrJkgrUT_nc-kbLT2ln51ZrdWnrn9ul9zgV2KBCirh8XvZBaltjaSkEBXUjpsHeIHs1y2LpljFFSFxjOH2OBwRve6M6w=s0-d-e1-ft#http://www.esri.com/~/media/FDFBAAA2720045899B40B1B590998CB4" style="border:0;height:auto;max-width:30px;outline:none;padding-left:2px;padding-right:2px;text-decoration:none"></a> <a href="http://go.esri.com/e/82202/esrioceans/hgvp7d/468786379" target="_blank" data-saferedirecturl="https://www.google.com/url?hl=en&amp;q=http://go.esri.com/e/82202/esrioceans/hgvp7d/468786379&amp;source=gmail&amp;ust=1505380627785000&amp;usg=AFQjCNHGtyzoCLbf4aJziHF99L7f6FKDWg"><img alt="Twitter" src="https://ci3.googleusercontent.com/proxy/KhOeDcKH86bp0_yHVKeUr9JTftfeM5g5mCczjz5wB7vsqcJEvYJEPJOCGnMoyjSoxJRFAKrELVmIL4WGyOzZI_9pc1-kMAWcc9xy0bUnzJpz6w=s0-d-e1-ft#http://www.esri.com/~/media/C209FDACAB3643349F2FB29D970D3242" style="border:0;height:auto;max-width:30px;outline:none;padding-left:2px;padding-right:2px;text-decoration:none"></a> <a href="http://go.esri.com/e/82202/esri-posts/hgvnv2/468786379" target="_blank" data-saferedirecturl="https://www.google.com/url?hl=en&amp;q=http://go.esri.com/e/82202/esri-posts/hgvnv2/468786379&amp;source=gmail&amp;ust=1505380627785000&amp;usg=AFQjCNEvFzJIZmyzit1DielevNtpEYvnMQ"><img alt="Google+" src="https://ci5.googleusercontent.com/proxy/J5BhRmPSCxzKi45jl5gcQucdEu-M7ICK0sbFCsVPd_VW6y5sUNb7qlCumRdeR2DAFZyKIWOhCxT9ocQhmHECvlzlGpJrJH8X-BCAms4-qbNiPA=s0-d-e1-ft#http://www.esri.com/~/media/671246B9F22B4000805E7F5C75A70DB6" style="border:0;height:auto;max-width:30px;outline:none;padding-left:2px;padding-right:2px;text-decoration:none"></a></td>
															</tr>
														</tbody>
													</table>
													</td>
												</tr>
											</tbody>
										</table>
										</td>
									</tr>
									<tr>
										<td align="center" valign="top">&nbsp;</td>
									</tr>
								</tbody>
							</table>
							</td>
						</tr>
					</tbody>
				</table>';
			return $body;
		}
		
		public function Mail_Body_Reset($url, $name) {
			$body = 
				'<table align="center" border="0" cellpadding="0" cellspacing="0" style="background-color:#f2f2f2;border-collapse:collapse!important;height:100%!important;margin:0;padding:0;width:100%!important">
					<tbody>
						<tr>
							<td align="center" style="height:100%!important;width:100%!important;margin:0;padding:20px" valign="top">
							<table border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse!important;width:600px">
								<tbody>
									<tr>
										<td align="center" valign="top">
										<table border="0" cellpadding="0" cellspacing="0" style="background-color:#ffffff;border-bottom:none;border-collapse:collapse!important;border-color:#e3e3e3;border-style:solid;border-width:1px;width:100%">
											<tbody>
												<tr>
													<td align="right" style="background-color: #30B570;color:#505050;font-family:Helvetica;height:94px;max-width:600px;font-size:20px;font-weight:bold;line-height:20px;text-align:center;vertical-align:middle;padding:0" valign="top">
													  <a href="" style="text-decoration:none" target="_blank">
														<img style="width: 200px;" src="https://tripisia.com/assets/img/logo-tripisia.png">
													  </a>
													</td>
												</tr>
											</tbody>
										</table>
										</td>
									</tr>
									<tr>
										<td align="center" valign="top">
										<table border="0" cellpadding="0" cellspacing="0" style="background-color:#ffffff;border-collapse:collapse!important;border-color:#e3e3e3;border-style:solid;border-top:none;border-width:1px;width:100%">
											<tbody>
												<tr>
													<td align="left" style="color:#505050;font-family:Helvetica;font-size:16px;line-height:24px;text-align:left;padding:20px" valign="top">
													  <span style="color:#222;display:block;font-family:arial,helvetica,sans-serif;font-size:20px;letter-spacing:normal;line-height:26px;margin:0;text-align:left">
														Reset Password
													  </span>
													  <p style="text-align: justify; color:#4d4d4d;font-family:Arial,Helvetica,sans-serif;font-size:14px;font-style:normal;line-height:21px">
														Hi, ' . $name . '
														<br>
														<br>
														To reset your password please click button below.
													  </p>
													
													  <table border="0" style="height:29px;width:180px">
														<tbody>
															<tr>
																<td align="center" bgcolor="#30B570" height="29" valign="middle"><a href="' . $url . '" style="text-decoration:none" target="_blank"><strong style="text-decoration:none"><font color="#FFFFFF" style="text-decoration:none;color:rgb(255,255,255);font-size:13px;font-family:Arial,Helvetica,sans-serif">Reset my password.</font></strong></a></td>
															</tr>
														</tbody>
													  </table>
													  
													  <p style="color:#4d4d4d;font-family:Arial,Helvetica,sans-serif;font-size:14px;font-style:normal;line-height:21px">
														If you received this email by mistake or waren&apos;t expecting it, simply delete it or just ignore this email.
														<br>
														<br>
														Thanks, Anton Arifin
													  </p>
													  
													</td>
												</tr>
											</tbody>
										</table>
										</td>
									</tr>
									<tr style="background-color:#f2f2f2">
										<td align="center" style="background-color:#f2f2f2" valign="top">
										<table border="0" cellpadding="0" cellspacing="0" style="background-color:#f2f2f2;border-collapse:collapse!important;font-size:10px;width:100%">
											<tbody>
												<tr>
													<td align="center" style="padding-top:20px;width:68%" valign="top" width="67%">
													
													</td>
													<td align="right" style="padding-top:20px;width:32%" valign="top" width="214">
													<table border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse!important;width:100%">
														<tbody>
															<tr>
																<td align="left" style="color:rgb(77,77,77);font-family:Helvetica;background:rgb(242,242,242);font-size:10px;line-height:15px;text-align:left;padding-left:0px;padding-bottom:0px;padding-top:5px"><a href="http://go.esri.com/e/82202/esrioceans-/hgvp7b/468786379" target="_blank" data-saferedirecturl="https://www.google.com/url?hl=en&amp;q=http://go.esri.com/e/82202/esrioceans-/hgvp7b/468786379&amp;source=gmail&amp;ust=1505380627785000&amp;usg=AFQjCNEsuTIrXL_9JCArz9oM8MntotxSvA"><img alt="Facebook" src="https://ci5.googleusercontent.com/proxy/K13loTF4uhdI2YQam-IA4EPtEum2BBuAN03ORMNWZ2UctzqxE1bt7cKWcrjPl78H74eUsMYhbaGP6oIwOmT6zwWG1OEaTUBfXlEPTPFRENvlvg=s0-d-e1-ft#http://www.esri.com/~/media/B245703802084DFA910643E34CA4A76D" style="border:0;height:auto;max-width:30px;outline:none;padding-left:2px;padding-right:2px;text-decoration:none"></a> <a href="http://go.esri.com/e/82202/esrigram-/hgvntv/468786379" target="_blank" data-saferedirecturl="https://www.google.com/url?hl=en&amp;q=http://go.esri.com/e/82202/esrigram-/hgvntv/468786379&amp;source=gmail&amp;ust=1505380627785000&amp;usg=AFQjCNHxERznQ2O9jH9htdMkJ4AcVc3iEQ"><img alt="Instagram" src="https://ci3.googleusercontent.com/proxy/02RApiaRxhPb3__yL3_IADRJrzCnNqqpHQQOedd7_kUWs82mLoqp8CpxiYczv8GEE1zLz4lt--RYYeNRbVRXvcoULSDJsHzWF__PwmE20O0GmQ=s0-d-e1-ft#http://www.esri.com/~/media/AB0B988E36EC410A98269CA9008BC136" style="border:0;height:auto;max-width:30px;outline:none;padding-left:2px;padding-right:2px;text-decoration:none"></a> <a href="http://go.esri.com/e/82202/company-esri/hgvntx/468786379" target="_blank" data-saferedirecturl="https://www.google.com/url?hl=en&amp;q=http://go.esri.com/e/82202/company-esri/hgvntx/468786379&amp;source=gmail&amp;ust=1505380627785000&amp;usg=AFQjCNHUc8csSTrH-9YbyWHB1fGE-9_bAQ"><img alt="LinkedIn" src="https://ci4.googleusercontent.com/proxy/k6anaFz3Yv25D6j2h9NrJkgrUT_nc-kbLT2ln51ZrdWnrn9ul9zgV2KBCirh8XvZBaltjaSkEBXUjpsHeIHs1y2LpljFFSFxjOH2OBwRve6M6w=s0-d-e1-ft#http://www.esri.com/~/media/FDFBAAA2720045899B40B1B590998CB4" style="border:0;height:auto;max-width:30px;outline:none;padding-left:2px;padding-right:2px;text-decoration:none"></a> <a href="http://go.esri.com/e/82202/esrioceans/hgvp7d/468786379" target="_blank" data-saferedirecturl="https://www.google.com/url?hl=en&amp;q=http://go.esri.com/e/82202/esrioceans/hgvp7d/468786379&amp;source=gmail&amp;ust=1505380627785000&amp;usg=AFQjCNHGtyzoCLbf4aJziHF99L7f6FKDWg"><img alt="Twitter" src="https://ci3.googleusercontent.com/proxy/KhOeDcKH86bp0_yHVKeUr9JTftfeM5g5mCczjz5wB7vsqcJEvYJEPJOCGnMoyjSoxJRFAKrELVmIL4WGyOzZI_9pc1-kMAWcc9xy0bUnzJpz6w=s0-d-e1-ft#http://www.esri.com/~/media/C209FDACAB3643349F2FB29D970D3242" style="border:0;height:auto;max-width:30px;outline:none;padding-left:2px;padding-right:2px;text-decoration:none"></a> <a href="http://go.esri.com/e/82202/esri-posts/hgvnv2/468786379" target="_blank" data-saferedirecturl="https://www.google.com/url?hl=en&amp;q=http://go.esri.com/e/82202/esri-posts/hgvnv2/468786379&amp;source=gmail&amp;ust=1505380627785000&amp;usg=AFQjCNEvFzJIZmyzit1DielevNtpEYvnMQ"><img alt="Google+" src="https://ci5.googleusercontent.com/proxy/J5BhRmPSCxzKi45jl5gcQucdEu-M7ICK0sbFCsVPd_VW6y5sUNb7qlCumRdeR2DAFZyKIWOhCxT9ocQhmHECvlzlGpJrJH8X-BCAms4-qbNiPA=s0-d-e1-ft#http://www.esri.com/~/media/671246B9F22B4000805E7F5C75A70DB6" style="border:0;height:auto;max-width:30px;outline:none;padding-left:2px;padding-right:2px;text-decoration:none"></a></td>
															</tr>
														</tbody>
													</table>
													</td>
												</tr>
											</tbody>
										</table>
										</td>
									</tr>
									<tr>
										<td align="center" valign="top">&nbsp;</td>
									</tr>
								</tbody>
							</table>
							</td>
						</tr>
					</tbody>
				</table>';
			return $body;
		}
		
		
		public function MailTemplate($msg, $name) {
			$body = 
				'<table align="center" border="0" cellpadding="0" cellspacing="0" style="background-color:#f2f2f2;border-collapse:collapse!important;height:100%!important;margin:0;padding:0;width:100%!important">
					<tbody>
						<tr>
							<td align="center" style="height:100%!important;width:100%!important;margin:0;padding:20px" valign="top">
							<table border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse!important;width:600px">
								<tbody>
									<tr>
										<td align="center" valign="top">
										<table border="0" cellpadding="0" cellspacing="0" style="background-color:#ffffff;border-bottom:none;border-collapse:collapse!important;border-color:#e3e3e3;border-style:solid;border-width:1px;width:100%">
											<tbody>
												<tr>
													<td align="right" style="background-color: #30B570;color:#505050;font-family:Helvetica;height:94px;max-width:600px;font-size:20px;font-weight:bold;line-height:20px;text-align:center;vertical-align:middle;padding:0" valign="top">
													  <a href="" style="text-decoration:none" target="_blank">
														<img style="width: 200px;" src="https://tripisia.com/assets/img/logo-tripisia.png">
													  </a>
													</td>
												</tr>
											</tbody>
										</table>
										</td>
									</tr>
									<tr>
										<td align="center" valign="top">
										<table border="0" cellpadding="0" cellspacing="0" style="background-color:#ffffff;border-collapse:collapse!important;border-color:#e3e3e3;border-style:solid;border-top:none;border-width:1px;width:100%">
											<tbody>
												<tr>
													<td align="left" style="color:#505050;font-family:Helvetica;font-size:16px;line-height:24px;text-align:left;padding:20px" valign="top">
													  <span style="color:#222;display:block;font-family:arial,helvetica,sans-serif;font-size:20px;letter-spacing:normal;line-height:26px;margin:0;text-align:left">
														Account Activation
													  </span>
													  <p style="text-align: justify; color:#4d4d4d;font-family:Arial,Helvetica,sans-serif;font-size:14px;font-style:normal;line-height:21px">
														Hi, ' . $name . '
														<br>
														<br>
														' . $msg . '
													  </p>
													  <p style="color:#4d4d4d;font-family:Arial,Helvetica,sans-serif;font-size:14px;font-style:normal;line-height:21px">
														If you received this email by mistake or waren&apos;t expecting it, simply delete it or just ignore this email.
														<br>
														<br>
														Thanks, Anton Arifin
													  </p>
													  
													</td>
												</tr>
											</tbody>
										</table>
										</td>
									</tr>
									<tr style="background-color:#f2f2f2">
										<td align="center" style="background-color:#f2f2f2" valign="top">
										<table border="0" cellpadding="0" cellspacing="0" style="background-color:#f2f2f2;border-collapse:collapse!important;font-size:10px;width:100%">
											<tbody>
												<tr>
													<td align="center" style="padding-top:20px;width:68%" valign="top" width="67%">
													
													</td>
													<td align="right" style="padding-top:20px;width:32%" valign="top" width="214">
													<table border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse!important;width:100%">
														<tbody>
															<tr>
																<td align="left" style="color:rgb(77,77,77);font-family:Helvetica;background:rgb(242,242,242);font-size:10px;line-height:15px;text-align:left;padding-left:0px;padding-bottom:0px;padding-top:5px"><a href="http://go.esri.com/e/82202/esrioceans-/hgvp7b/468786379" target="_blank" data-saferedirecturl="https://www.google.com/url?hl=en&amp;q=http://go.esri.com/e/82202/esrioceans-/hgvp7b/468786379&amp;source=gmail&amp;ust=1505380627785000&amp;usg=AFQjCNEsuTIrXL_9JCArz9oM8MntotxSvA"><img alt="Facebook" src="https://ci5.googleusercontent.com/proxy/K13loTF4uhdI2YQam-IA4EPtEum2BBuAN03ORMNWZ2UctzqxE1bt7cKWcrjPl78H74eUsMYhbaGP6oIwOmT6zwWG1OEaTUBfXlEPTPFRENvlvg=s0-d-e1-ft#http://www.esri.com/~/media/B245703802084DFA910643E34CA4A76D" style="border:0;height:auto;max-width:30px;outline:none;padding-left:2px;padding-right:2px;text-decoration:none"></a> <a href="http://go.esri.com/e/82202/esrigram-/hgvntv/468786379" target="_blank" data-saferedirecturl="https://www.google.com/url?hl=en&amp;q=http://go.esri.com/e/82202/esrigram-/hgvntv/468786379&amp;source=gmail&amp;ust=1505380627785000&amp;usg=AFQjCNHxERznQ2O9jH9htdMkJ4AcVc3iEQ"><img alt="Instagram" src="https://ci3.googleusercontent.com/proxy/02RApiaRxhPb3__yL3_IADRJrzCnNqqpHQQOedd7_kUWs82mLoqp8CpxiYczv8GEE1zLz4lt--RYYeNRbVRXvcoULSDJsHzWF__PwmE20O0GmQ=s0-d-e1-ft#http://www.esri.com/~/media/AB0B988E36EC410A98269CA9008BC136" style="border:0;height:auto;max-width:30px;outline:none;padding-left:2px;padding-right:2px;text-decoration:none"></a> <a href="http://go.esri.com/e/82202/company-esri/hgvntx/468786379" target="_blank" data-saferedirecturl="https://www.google.com/url?hl=en&amp;q=http://go.esri.com/e/82202/company-esri/hgvntx/468786379&amp;source=gmail&amp;ust=1505380627785000&amp;usg=AFQjCNHUc8csSTrH-9YbyWHB1fGE-9_bAQ"><img alt="LinkedIn" src="https://ci4.googleusercontent.com/proxy/k6anaFz3Yv25D6j2h9NrJkgrUT_nc-kbLT2ln51ZrdWnrn9ul9zgV2KBCirh8XvZBaltjaSkEBXUjpsHeIHs1y2LpljFFSFxjOH2OBwRve6M6w=s0-d-e1-ft#http://www.esri.com/~/media/FDFBAAA2720045899B40B1B590998CB4" style="border:0;height:auto;max-width:30px;outline:none;padding-left:2px;padding-right:2px;text-decoration:none"></a> <a href="http://go.esri.com/e/82202/esrioceans/hgvp7d/468786379" target="_blank" data-saferedirecturl="https://www.google.com/url?hl=en&amp;q=http://go.esri.com/e/82202/esrioceans/hgvp7d/468786379&amp;source=gmail&amp;ust=1505380627785000&amp;usg=AFQjCNHGtyzoCLbf4aJziHF99L7f6FKDWg"><img alt="Twitter" src="https://ci3.googleusercontent.com/proxy/KhOeDcKH86bp0_yHVKeUr9JTftfeM5g5mCczjz5wB7vsqcJEvYJEPJOCGnMoyjSoxJRFAKrELVmIL4WGyOzZI_9pc1-kMAWcc9xy0bUnzJpz6w=s0-d-e1-ft#http://www.esri.com/~/media/C209FDACAB3643349F2FB29D970D3242" style="border:0;height:auto;max-width:30px;outline:none;padding-left:2px;padding-right:2px;text-decoration:none"></a> <a href="http://go.esri.com/e/82202/esri-posts/hgvnv2/468786379" target="_blank" data-saferedirecturl="https://www.google.com/url?hl=en&amp;q=http://go.esri.com/e/82202/esri-posts/hgvnv2/468786379&amp;source=gmail&amp;ust=1505380627785000&amp;usg=AFQjCNEvFzJIZmyzit1DielevNtpEYvnMQ"><img alt="Google+" src="https://ci5.googleusercontent.com/proxy/J5BhRmPSCxzKi45jl5gcQucdEu-M7ICK0sbFCsVPd_VW6y5sUNb7qlCumRdeR2DAFZyKIWOhCxT9ocQhmHECvlzlGpJrJH8X-BCAms4-qbNiPA=s0-d-e1-ft#http://www.esri.com/~/media/671246B9F22B4000805E7F5C75A70DB6" style="border:0;height:auto;max-width:30px;outline:none;padding-left:2px;padding-right:2px;text-decoration:none"></a></td>
															</tr>
														</tbody>
													</table>
													</td>
												</tr>
											</tbody>
										</table>
										</td>
									</tr>
									<tr>
										<td align="center" valign="top">&nbsp;</td>
									</tr>
								</tbody>
							</table>
							</td>
						</tr>
					</tbody>
				</table>';
			return $body;
		}
}