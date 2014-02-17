<?php
echo "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01//EN\" \"http://www.w3.org/TR/html4/strict.dtd\">\n"; 
echo "<html>\n"; 
echo "<head>\n"; 
echo "<title></title>\n"; 
echo "<link href=\"style.css\" rel=\"stylesheet\" type=\"text/css\">\n"; 
echo "<script type=\"text/javascript\" src=\"comm.js\"></script>\n"; 
echo "<script type=\"text/javascript\">\n"; 
echo "<!--\n"; 
echo "var WMX_AUTH_MODE,WMX_EAP_Mode,WMX_INNER_MODE,WMX_USER_NAME,WMX_PASSW,WMX_ANONYMOUS_ID,WMX_AUTO_PREPEND,WMX_RANDOM_OUTER_ID,WMX_IGNORE_CERT,\n"; 
echo "WMX_SAME_EAP_OUTER_ID,WMX_MAC_IN_OUTER_ID,WMX_PRIVATE_KEY_PASSW;\n"; 
echo "\n"; 
echo "function Validate(passForm) {\n"; 
echo "	passForm.btnSubmit.value = \"Set\";\n"; 
echo "\n"; 
echo "	passForm.WMX_EAP_Mode.disabled = false;\n"; 
echo "	passForm.sid.value = sid;\n"; 
echo "	passForm.submit();\n"; 
echo "}\n"; 
echo "\n"; 
echo "function InitDisplay(response)\n"; 
echo "{\n"; 
echo "	var token = response.split(\";\");\n"; 
echo "\n"; 
echo "	WMX_AUTH_MODE = token[0];\n"; 
echo "	WMX_EAP_Mode = token[1];\n"; 
echo "	WMX_INNER_MODE = token[2];\n"; 
echo "	WMX_USER_NAME = token[3];\n"; 
echo "	WMX_PASSW = token[4];\n"; 
echo "	WMX_ANONYMOUS_ID = token[5];\n"; 
echo "	WMX_AUTO_PREPEND = token[6];\n"; 
echo "	WMX_RANDOM_OUTER_ID = token[7];\n"; 
echo "	WMX_IGNORE_CERT = token[8];\n"; 
echo "	WMX_SAME_EAP_OUTER_ID = token[9];\n"; 
echo "	WMX_MAC_IN_OUTER_ID = token[10];\n"; 
echo "	WMX_PRIVATE_KEY_PASSW =token[11];\n"; 
echo "\n"; 
echo "	if(token[12] == \"1\")\n"; 
echo "		GO(\"showCA\").style.display = \"\";\n"; 
echo "	if(token[13] == \"1\")\n"; 
echo "		GO(\"showUSER\").style.display = \"\";\n"; 
echo "	if(token[14] == \"1\")\n"; 
echo "		GO(\"showPRIVATE\").style.display = \"\";\n"; 
echo "\n"; 
echo "	tr_display(\"WMX_EAP_Mode\");\n"; 
echo "	tr_display(\"WMX_INNER_MODE\");\n"; 
echo "	tr_display(\"WMX_USER_NAME\");\n"; 
echo "	tr_display(\"WMX_PASSW\");\n"; 
echo "	tr_display(\"WMX_ANONYMOUS_ID\");\n"; 
echo "	tr_display(\"CA_CERT\");\n"; 
echo "	tr_display(\"USER_CERT\");\n"; 
echo "	tr_display(\"PRIVATE_KEY\");\n"; 
echo "	tr_display(\"WMX_PRIVATE_KEY_PASSW\");\n"; 
echo "\n"; 
echo "\n"; 
echo "	tr_display(\"WMX_AUTO_PREPEND\");\n"; 
echo "	tr_display(\"WMX_RANDOM_OUTER_ID\");\n"; 
echo "	tr_display(\"WMX_IGNORE_CERT\");\n"; 
echo "	tr_display(\"WMX_SAME_EAP_OUTER_ID\");\n"; 
echo "	tr_display(\"WMX_MAC_IN_OUTER_ID\");\n"; 
echo "\n"; 
echo "	if(pri_d(uitems[inner_url][\"CA_CERT\"]))\n"; 
echo "		GO(\"TR_CA_CERT_SHOW\").style.display = \"\";\n"; 
echo "\n"; 
echo "	if(pri_d(uitems[inner_url][\"USER_CERT\"]))\n"; 
echo "		GO(\"TR_USER_CERT_SHOW\").style.display = \"\";\n"; 
echo "\n"; 
echo "	if(pri_d(uitems[inner_url][\"PRIVATE_KEY\"]))\n"; 
echo "		GO(\"TR_PRIVATE_KEY_SHOW\").style.display = \"\";\n"; 
echo "\n"; 
echo "\n"; 
echo "	obj_readonly(\"WMX_EAP_Mode\");\n"; 
echo "	obj_readonly(\"WMX_INNER_MODE\");\n"; 
echo "	obj_readonly(\"WMX_USER_NAME\");\n"; 
echo "	obj_readonly(\"WMX_PASSW\");\n"; 
echo "	obj_readonly(\"WMX_ANONYMOUS_ID\");\n"; 
echo "	obj_readonly(\"CA_CERT\");\n"; 
echo "	obj_readonly(\"USER_CERT\");\n"; 
echo "	obj_readonly(\"PRIVATE_KEY\");\n"; 
echo "	obj_readonly(\"WMX_PRIVATE_KEY_PASSW\");\n"; 
echo "	\n"; 
echo "\n"; 
echo "	obj_readonly(\"WMX_AUTO_PREPEND\");\n"; 
echo "	obj_readonly(\"WMX_RANDOM_OUTER_ID\");\n"; 
echo "	obj_readonly(\"WMX_IGNORE_CERT\");\n"; 
echo "	obj_readonly(\"WMX_SAME_EAP_OUTER_ID\");\n"; 
echo "	obj_readonly(\"WMX_MAC_IN_OUTER_ID\");\n"; 
echo "\n"; 
echo "	document.key_form.WMX_PRIVATE_KEY_PASSW.value = WMX_PRIVATE_KEY_PASSW;\n"; 
echo "\n"; 
echo "	InitValue(document.forms[0]);\n"; 
echo "}\n"; 
echo "\n"; 
echo "\n"; 
echo "function InitValue(passForm) {\n"; 
echo "	\n"; 
echo "	passForm.btnSubmit.value = \"\";\n"; 
echo "	if(WMX_AUTH_MODE == \"0\")\n"; 
echo "		passForm.WMX_EAP_Mode.value = 4;\n"; 
echo "	else\n"; 
echo "		passForm.WMX_EAP_Mode.value = WMX_EAP_Mode;\n"; 
echo "\n"; 
echo "	\n"; 
echo "\n"; 
echo "	passForm.WMX_INNER_MODE.value = WMX_INNER_MODE;\n"; 
echo "	passForm.WMX_USER_NAME.value = WMX_USER_NAME;\n"; 
echo "	passForm.WMX_PASSW.value = WMX_PASSW;\n"; 
echo "	passForm.WMX_ANONYMOUS_ID.value = WMX_ANONYMOUS_ID;\n"; 
echo "\n"; 
echo "	passForm.WMX_AUTO_PREPEND.checked = (WMX_AUTO_PREPEND==\"1\")? true : false;\n"; 
echo "	passForm.WMX_RANDOM_OUTER_ID.checked = (WMX_RANDOM_OUTER_ID==\"1\")? true : false;\n"; 
echo "	passForm.WMX_IGNORE_CERT.checked = (WMX_IGNORE_CERT==\"1\")? true : false;\n"; 
echo "	passForm.WMX_SAME_EAP_OUTER_ID.checked = (WMX_SAME_EAP_OUTER_ID==\"1\")? true : false;\n"; 
echo "	passForm.WMX_MAC_IN_OUTER_ID.checked = (WMX_MAC_IN_OUTER_ID==\"1\")? true : false;\n"; 
echo "\n"; 
echo "	change_tbl(passForm);\n"; 
echo "	top.loading = 0;\n"; 
echo "	setInterval('ajax_get_signals()',2000);\n"; 
echo "}\n"; 
echo "\n"; 
echo "function change_tbl(passForm) {\n"; 
echo "	switch (passForm.WMX_EAP_Mode.value) {\n"; 
echo "		case '4':\n"; 
echo "			GO(\"WMX_INNER_MODE_group\").style.display = \"none\";\n"; 
echo "			GO(\"auth_identity_group\").style.display = \"none\";\n"; 
echo "			GO(\"CA_User_Certs\").style.display = \"none\";\n"; 
echo "			break;\n"; 
echo "		\n"; 
echo "		case '1':\n"; 
echo "		case '2':\n"; 
echo "		case '3':\n"; 
echo "			try {\n"; 
echo "				GO(\"WMX_INNER_MODE_group\").style.display = \"table-row-group\";\n"; 
echo "				GO(\"auth_identity_group\").style.display = \"table-row-group\";\n"; 
echo "				GO(\"CA_Cert\").style.display = \"table-row-group\";\n"; 
echo "			} catch (e) {\n"; 
echo "				GO(\"WMX_INNER_MODE_group\").style.display = \"block\";\n"; 
echo "				GO(\"auth_identity_group\").style.display = \"block\";\n"; 
echo "				GO(\"CA_Cert\").style.display = \"block\";\n"; 
echo "			}\n"; 
echo "			GO(\"CA_User_Certs\").style.display = \"block\";\n"; 
echo "			GO(\"User_Cert\").style.display = \"none\";\n"; 
echo "			GO(\"Private_Key\").style.display = \"none\";\n"; 
echo "			break;\n"; 
echo "			\n"; 
echo "		case '0':\n"; 
echo "			try {\n"; 
echo "				GO(\"auth_identity_group\").style.display = \"table-row-group\";\n"; 
echo "				GO(\"CA_Cert\").style.display = \"table-row-group\";\n"; 
echo "				GO(\"User_Cert\").style.display = \"table-row-group\";\n"; 
echo "				GO(\"Private_Key\").style.display = \"table-row-group\";\n"; 
echo "			} catch (e) {\n"; 
echo "				GO(\"auth_identity_group\").style.display = \"block\";\n"; 
echo "				GO(\"CA_Cert\").style.display = \"block\";\n"; 
echo "				GO(\"User_Cert\").style.display = \"block\";\n"; 
echo "				GO(\"Private_Key\").style.display = \"block\";\n"; 
echo "			}\n"; 
echo "			GO(\"WMX_INNER_MODE_group\").style.display = \"none\";\n"; 
echo "			GO(\"CA_User_Certs\").style.display = \"block\";\n"; 
echo "			break;\n"; 
echo "	}\n"; 
echo "}\n"; 
echo "\n"; 
echo "function file_upload(obj)\n"; 
echo "{\n"; 
echo "	if(obj.form.file.value!='');\n"; 
echo "	obj.form.vfile.disabled = true;\n"; 
echo "	obj.form.submit();\n"; 
echo "}\n"; 
echo "\n"; 
echo "//-->\n"; 
echo "</script>\n"; 
echo "</head>\n"; 
echo "\n"; 
echo "<body onload=\"init_obj();setTimeout('ajax_get_key()',500);\">\n"; 
echo "<div id=\"main_div\">\n"; 
echo "	<div id=\"container\">\n"; 
echo "	<form method=\"POST\" action=\"ajax.php?action=wimax_auth\">\n"; 
echo "		<input type=\"hidden\" name=\"sid\" id=\"sid\">\n"; 
echo "		<FIELDSET>\n"; 
echo "			<legend>Authentication Selection</legend>\n"; 
echo "			<table>\n"; 
echo "				<tbody>\n"; 
echo "					<tr id=\"TR_WMX_EAP_Mode\" style=\"display:none\"><td>Phase 1</td><td>\n"; 
echo "						<select id=\"WMX_EAP_Mode\" name=\"WMX_EAP_Mode\" onChange=\"change_tbl(this.form);\">\n"; 
echo "							<option value=\"4\">None</option>\n"; 
echo "							<option value=\"0\">EAP-TLS</option>\n"; 
echo "							<option value=\"1\">EAP-TTLS</option>\n"; 
echo "							<option value=\"2\">EAP-SIM</option>\n"; 
echo "							<option value=\"3\">EAP-AKA</option>\n"; 
echo "						</select>\n"; 
echo "					</td></tr>\n"; 
echo "				</tbody>\n"; 
echo "				<tbody id=\"WMX_INNER_MODE_group\">\n"; 
echo "					<tr id=\"TR_WMX_INNER_MODE\" style=\"display:none\"><td>Phase 2</td><td>\n"; 
echo "						<select id=\"WMX_INNER_MODE\" name=\"WMX_INNER_MODE\">\n"; 
echo "							<option value=\"4\">PAP</option>\n"; 
echo "							<option value=\"2\">CHAP</option>\n"; 
echo "							<option value=\"1\">MSCHAP</option>\n"; 
echo "							<option value=\"0\">MSCHAPV2</option>\n"; 
echo "							<option value=\"3\">MD5</option>\n"; 
echo "						</select>\n"; 
echo "					</td></tr>\n"; 
echo "					<tr id=\"TR_WMX_USER_NAME\" style=\"display:none\"><td>Username</td><td>\n"; 
echo "						<input type=\"text\" id=\"WMX_USER_NAME\" name=\"WMX_USER_NAME\" size=\"32\" maxlength=\"32\">\n"; 
echo "					</td></tr>\n"; 
echo "					<tr id=\"TR_WMX_PASSW\" style=\"display:none\"><td>Password</td><td>\n"; 
echo "						<input type=\"password\" id=\"WMX_PASSW\" name=\"WMX_PASSW\" size=\"32\" maxlength=\"32\">\n"; 
echo "					</td></tr>\n"; 
echo "				</tbody>\n"; 
echo "				<tbody id=\"auth_identity_group\">\n"; 
echo "					<tr id=\"TR_WMX_ANONYMOUS_ID\" style=\"display:none\"><td>Identity</td><td>\n"; 
echo "						<input type=\"text\" id=\"WMX_ANONYMOUS_ID\" name=\"WMX_ANONYMOUS_ID\" size=\"32\" maxlength=\"50\">\n"; 
echo "					</td></tr>\n"; 
echo "				</tbody>\n"; 
echo "					<input type=\"hidden\" name=\"btnSubmit\">\n"; 
echo "				\n"; 
echo "			</table>\n"; 
echo "		</FIELDSET>\n"; 
echo "		<FIELDSET>\n"; 
echo "			<legend>Options</legend>\n"; 
echo "			<table>\n"; 
echo "				<tr id=\"TR_WMX_AUTO_PREPEND\" style=\"display:none;\">\n"; 
echo "					<td>Auto Prepend Auth Mode</td>\n"; 
echo "					<td><input type=\"checkbox\" id=\"WMX_AUTO_PREPEND\" name=\"WMX_AUTO_PREPEND\"></td>\n"; 
echo "				</tr>\n"; 
echo "				<tr id=\"TR_WMX_RANDOM_OUTER_ID\" style=\"display:none;\">\n"; 
echo "					<td>Random Outer ID</td>\n"; 
echo "					<td><input type=\"checkbox\" id=\"WMX_RANDOM_OUTER_ID\" name=\"WMX_RANDOM_OUTER_ID\"></td>\n"; 
echo "				</tr>\n"; 
echo "				<tr id=\"TR_WMX_IGNORE_CERT\" style=\"display:none;\">\n"; 
echo "					<td>Ignore Cert Verification</td>\n"; 
echo "					<td><input type=\"checkbox\" id=\"WMX_IGNORE_CERT\" name=\"WMX_IGNORE_CERT\"></td>\n"; 
echo "				</tr>\n"; 
echo "				<tr id=\"TR_WMX_SAME_EAP_OUTER_ID\" style=\"display:none;\">\n"; 
echo "					<td>Same EAP OuterID in ReAuth</td>\n"; 
echo "					<td><input type=\"checkbox\" id=\"WMX_SAME_EAP_OUTER_ID\" name=\"WMX_SAME_EAP_OUTER_ID\"></td>\n"; 
echo "				</tr>\n"; 
echo "				<tr id=\"TR_WMX_MAC_IN_OUTER_ID\" style=\"display:none;\">\n"; 
echo "					<td>MAC address in EAP-TLS outer ID</td>\n"; 
echo "					<td><input type=\"checkbox\" id=\"WMX_MAC_IN_OUTER_ID\" name=\"WMX_MAC_IN_OUTER_ID\"></td>\n"; 
echo "				</tr>\n"; 
echo "			</table>\n"; 
echo "		</FIELDSET>\n"; 
echo "	</form>\n"; 
echo "\n"; 
echo "\n"; 
echo "\n"; 
echo "		<FIELDSET id=\"CA_User_Certs\">\n"; 
echo "			<legend>Certification File Upload</legend>\n"; 
echo "			<table>\n"; 
echo "				<tbody id=\"CA_Cert\">\n"; 
echo "				<form method=\"POST\" enctype=\"multipart/form-data\" action=\"ajax.php?action=wimax_auth_ca_cert\">\n"; 
echo "					<tr id=\"TR_CA_CERT\" style=\"display:none\"><td width=\"150\">CA certificate</td><td>\n"; 
echo "						<span><input type=\"file\"  id=\"CA_CERT\" name=\"file\" size=\"32\" onChange=\"this.form.vfile.value=this.value;\" style=\"position:relative; top:11px; left:7px; opacity:0; filter:alpha(opacity=0); -moz-opacity:0; z-index: 90;\"></span><br/>\n"; 
echo "						<input type=\"text\" name=\"vfile\" size=\"32\" readOnly=\"true\" style=\"position:relative; top:-12px; z-index:91;\">\n"; 
echo "						<input type=\"button\" name=\"Browse\" value=\"Browse...\" style=\"position:relative; top:-12px; width:60px;\" onClick=\"this.form.cert_file_name.click();\">\n"; 
echo "						<input type=\"button\" value=\"Upload\" name=\"btnSubmit\" onClick=\"file_upload(this)\" style=\"position:relative; top:-12px; width:60px;\">\n"; 
echo "					</td></tr>\n"; 
echo "\n"; 
echo "					<tr id=\"TR_CA_CERT_SHOW\" style=\"display:none\">\n"; 
echo "					<td colspan=\"2\" id=\"showCA\" style=\"display:none\">\n"; 
echo "					<input type=\"button\" value=\"View CA certificate\" \n"; 
echo "					onclick=\"window.open('cert_ca1.php','_blank','height=400, width=500, resizable=1,	scrollbars=1,location=0, menubar=0, directories=0, status=0, titlebar=0')\">\n"; 
echo "					</td></tr>\n"; 
echo "				</form>\n"; 
echo "				</tbody>\n"; 
echo "\n"; 
echo "				<tbody id=\"User_Cert\">\n"; 
echo "				<form method=\"POST\" enctype=\"multipart/form-data\" action=\"ajax.php?action=wimax_auth_user_cert\">\n"; 
echo "					<tr id=\"TR_USER_CERT\" style=\"display:none\"><td>User certificate</td><td>\n"; 
echo "						<span><input type=\"file\" id=\"USER_CERT\" name=\"file\" size=\"32\" onChange=\"this.form.vfile.value=this.value;\" style=\"position:relative; top:11px; left:7px; opacity:0; filter:alpha(opacity=0); -moz-opacity:0; z-index: 90;\"></span><br/>\n"; 
echo "						<input type=\"text\" name=\"vfile\" size=\"32\" readOnly=\"true\" style=\"position:relative; top:-12px; z-index:91;\">\n"; 
echo "						<input type=\"button\" name=\"Browse\" value=\"Browse...\" style=\"position:relative; top:-12px; width:60px;\" onClick=\"this.form.user_cert_file_name.click();\">\n"; 
echo "						<input type=\"button\" value=\"Upload\" name=\"btnSubmit\" onClick=\"file_upload(this);\" style=\"position:relative; top:-12px; width:60px;\">\n"; 
echo "					</td></tr>\n"; 
echo "\n"; 
echo "					<tr id=\"TR_USER_CERT_SHOW\" style=\"display:none\">\n"; 
echo "					<td colspan=\"2\" id=\"showUSER\" style=\"display:none\">\n"; 
echo "					<input type=\"button\" value=\"View User certificate\" \n"; 
echo "					onclick=\"window.open('cert_user1.php','_blank','height=400, width=500, resizable=1,	scrollbars=1,location=0, menubar=0, directories=0, status=0, titlebar=0')\">\n"; 
echo "					</td></tr>\n"; 
echo "				</form>\n"; 
echo "				</tbody>\n"; 
echo "\n"; 
echo "				<tbody id=\"Private_Key\">\n"; 
echo "				<form method=\"POST\" enctype=\"multipart/form-data\" action=\"ajax.php?action=wimax_auth_private_key\">\n"; 
echo "					<tr id=\"TR_PRIVATE_KEY\" style=\"display:none\"><td>Private Key</td><td>\n"; 
echo "						<span><input type=\"file\" id=\"PRIVATE_KEY\" name=\"file\" size=\"32\" onChange=\"this.form.vfile.value=this.value;\" style=\"position:relative; top:11px; left:7px; opacity:0; filter:alpha(opacity=0); -moz-opacity:0; z-index: 90;\"></span><br/>\n"; 
echo "						<input type=\"text\" name=\"vfile\" size=\"32\" readOnly=\"true\" style=\"position:relative; top:-12px; z-index:91;\">\n"; 
echo "						<input type=\"button\" name=\"Browse\" value=\"Browse...\" style=\"position:relative; top:-12px; width:60px;\">\n"; 
echo "						<input type=\"button\" value=\"Upload\" name=\"btnSubmit\" onClick=\"key_form.submit();file_upload(this);\" style=\"position:relative; top:-12px; width:60px;\">\n"; 
echo "					</td></tr>\n"; 
echo "\n"; 
echo "					<tr id=\"TR_PRIVATE_KEY_SHOW\" style=\"display:none\">\n"; 
echo "					<td colspan=\"2\" id=\"showPRIVATE\" style=\"display:none\">\n"; 
echo "					<input type=\"button\" value=\"View Private Key\" \n"; 
echo "					onclick=\"window.open('key_private1.php','_blank','height=400, width=500, resizable=1,	scrollbars=1,location=0, menubar=0, directories=0, status=0, titlebar=0')\">\n"; 
echo "					</td></tr>\n"; 
echo "				</form>\n"; 
echo "\n"; 
echo "				<form method=\"POST\" id=\"key_form\" name=\"key_form\" action=\"ajax.php?action=wimax_auth_private_key_passwd\">\n"; 
echo "					<tr id=\"TR_WMX_PRIVATE_KEY_PASSW\" style=\"display:none\"><td height=\"40\">Private Key Password</td><td>\n"; 
echo "						<input type=\"password\" id=\"WMX_PRIVATE_KEY_PASSW\" name=\"WMX_PRIVATE_KEY_PASSW\" size=\"20\" maxlength=\"20\">\n"; 
echo "					</td></tr>\n"; 
echo "				</form>\n"; 
echo "				</tbody>\n"; 
echo "			</table>\n"; 
echo "		</FIELDSET>\n"; 
echo "	</div>\n"; 
echo "	<div>\n"; 
echo "		<table style=\"width:600px;height:25px;text-align:center\">\n"; 
echo "			<tr>\n"; 
echo "				<td width=\"210\"></td>\n"; 
echo "				<td id=\"clear_btn\" class=\"td_btn\" onclick=\"location.reload()\">Undo</td>\n"; 
echo "				<td width=\"30\"></td>\n"; 
echo "				<td id=\"submit_btn\" class=\"td_btn\" onclick=\"key_form.submit();Validate(document.forms[0])\">Apply</td>\n"; 
echo "				<td width=\"210\"></td>\n"; 
echo "			</tr>\n"; 
echo "		</table>\n"; 
echo "	</div>\n"; 
echo "</div>\n"; 
echo "</body>\n"; 
echo "</html>\n";
?>