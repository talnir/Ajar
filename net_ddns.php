<?php
echo "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01//EN\" \"http://www.w3.org/TR/html4/strict.dtd\">\n"; 
echo "<html>\n"; 
echo "<head>\n"; 
echo "<title></title>\n"; 
echo "<link href=\"style.css\" rel=\"stylesheet\" type=\"text/css\">\n"; 
echo "<script type=\"text/javascript\" src=\"comm.js\"></script>\n"; 
echo "<script type=\"text/javascript\">\n"; 
echo "<!--\n"; 
echo "var DDNS_ENABLE,DDNS_PROVIDER,DDNS_TYPE,DDNS_HOST,DDNS_DOMAIN,DDNS_USERNAME,DDNS_PASSWORD;\n"; 
echo "\n"; 
echo "\n"; 
echo "function InitDisplay(response)\n"; 
echo "{\n"; 
echo "	var token = response.split(\";\");\n"; 
echo "\n"; 
echo "	DDNS_ENABLE = token[0];\n"; 
echo "	DDNS_PROVIDER = token[1];\n"; 
echo "	DDNS_TYPE = token[2];\n"; 
echo "	DDNS_HOST = token[3];\n"; 
echo "	DDNS_DOMAIN = token[4];\n"; 
echo "	DDNS_USERNAME = token[5];\n"; 
echo "	DDNS_PASSWORD = token[6];\n"; 
echo "\n"; 
echo "	tr_display(\"DDNS_ENABLE\");\n"; 
echo "	tr_display(\"DDNS_PROVIDER\");\n"; 
echo "	tr_display(\"DDNS_TYPE\");\n"; 
echo "	tr_display(\"DDNS_HOST\");\n"; 
echo "	tr_display(\"DDNS_DOMAIN\");\n"; 
echo "	tr_display(\"DDNS_USERNAME\");\n"; 
echo "	tr_display(\"DDNS_PASSWORD\");\n"; 
echo "\n"; 
echo "	obj_readonly(\"DDNS_ENABLE\");\n"; 
echo "	obj_readonly(\"DDNS_PROVIDER\");\n"; 
echo "	obj_readonly(\"DDNS_TYPE\");\n"; 
echo "	obj_readonly(\"DDNS_HOST\");\n"; 
echo "	obj_readonly(\"DDNS_DOMAIN\");\n"; 
echo "	obj_readonly(\"DDNS_USERNAME\");\n"; 
echo "	obj_readonly(\"DDNS_PASSWORD\");\n"; 
echo "\n"; 
echo "	InitValue(document.forms[0]);\n"; 
echo "}\n"; 
echo "\n"; 
echo "function InitValue(passForm) {\n"; 
echo "	bodyOnLoad(passForm);\n"; 
echo "	change_tbl(passForm);\n"; 
echo "\n"; 
echo "	top.loading = 0;\n"; 
echo "	setInterval('ajax_get_signals()',2000);\n"; 
echo "}\n"; 
echo "\n"; 
echo "function bodyOnLoad(passForm) {\n"; 
echo "	passForm.DDNS_ENABLE.checked = (DDNS_ENABLE == \"1\")?true:false;\n"; 
echo "	passForm.DDNS_PROVIDER.value = DDNS_PROVIDER;\n"; 
echo "	passForm.DDNS_TYPE.value = DDNS_TYPE;\n"; 
echo "	passForm.DDNS_HOST.value = DDNS_HOST;\n"; 
echo "	passForm.DDNS_DOMAIN.value = DDNS_DOMAIN;\n"; 
echo "	passForm.DDNS_USERNAME.value = DDNS_USERNAME;\n"; 
echo "	passForm.DDNS_PASSWORD.value = DDNS_PASSWORD;\n"; 
echo "\n"; 
echo "}\n"; 
echo "\n"; 
echo "function signUp(passForm) {\n"; 
echo "\n"; 
echo "	var urlArray = new Array( \"http://www.dyndns.org\",\n"; 
echo "				  \"http://www.tzo.com\");\n"; 
echo "\n"; 
echo "	if (passForm.DDNS_PROVIDER.selectedIndex >= 0)\n"; 
echo "		GO(\"signUp_URL\").href = urlArray[passForm.DDNS_PROVIDER.selectedIndex];\n"; 
echo "\n"; 
echo "	return true;\n"; 
echo "}\n"; 
echo "\n"; 
echo "function Validate(passForm) {\n"; 
echo "	passForm.DDNS_ENABLE.disabled = false;\n"; 
echo "\n"; 
echo "	passForm.sid.value = sid;\n"; 
echo "	passForm.btnSubmit.value = \"1\";\n"; 
echo "	passForm.submit();\n"; 
echo "}\n"; 
echo "\n"; 
echo "function change_tbl(passForm) {\n"; 
echo "	if (passForm.DDNS_ENABLE.checked) {\n"; 
echo "		try {\n"; 
echo "			GO(\"DDNSsettingGroup\").style.display = \"table-row-group\";\n"; 
echo "		} catch (e) {\n"; 
echo "			GO(\"DDNSsettingGroup\").style.display = \"block\";\n"; 
echo "		}\n"; 
echo "	} else {\n"; 
echo "		GO(\"DDNSsettingGroup\").style.display = \"none\";\n"; 
echo "	}\n"; 
echo "}\n"; 
echo "//-->\n"; 
echo "</script>\n"; 
echo "</head>\n"; 
echo "\n"; 
echo "<body onload=\"init_obj();setTimeout('ajax_get_key()',500);\">\n"; 
echo "<div id=\"main_div\">\n"; 
echo "	<div id=\"container\">\n"; 
echo "		<FIELDSET>\n"; 
echo "		<legend>DDNS Configuration</legend>\n"; 
echo "		<form name=\"form1\" method=\"POST\" action=\"ajax.php?action=net_ddns\">\n"; 
echo "			<input type=\"hidden\" name=\"sid\" id=\"sid\">\n"; 
echo "			<table>\n"; 
echo "				<tr id=\"TR_DDNS_ENABLE\" style=\"display:none\"><td>Enable DDNS</td><td>\n"; 
echo "					<input type=\"checkbox\" id=\"DDNS_ENABLE\" name=\"DDNS_ENABLE\" onClick=\"change_tbl(this.form)\">\n"; 
echo "				</td></tr>\n"; 
echo "				<tbody id=\"DDNSsettingGroup\" style=\"display:none;\">\n"; 
echo "				<tr id=\"TR_DDNS_PROVIDER\" style=\"display:none\"><td>Service Provider</td><td>\n"; 
echo "				<select id=\"DDNS_PROVIDER\" name=\"DDNS_PROVIDER\" size=\"1\" onChange=\"signUp(this.form)\">\n"; 
echo "					<option value=\"0\">dyndns.org(www.dyndns.org)</option>\n"; 
echo "					<option value=\"1\">tzo.com(www.tzo.com)</option>\n"; 
echo "				</select>\n"; 
echo "				<a id=\"signUp_URL\" name=\"signUp_URL\" href=\"\" target=\"_blank\" onClick=\"return signUp(document.forms[0])\"> Sign Up </a>\n"; 
echo "				</td></tr>\n"; 
echo "				<tr id=\"TR_DDNS_TYPE\" style=\"display:none\"><td>Service Type</td><td>\n"; 
echo "				<select id=\"DDNS_TYPE\" name=\"DDNS_TYPE\">\n"; 
echo "					<option value=\"0\">Dynamic</option>\n"; 
echo "					<option value=\"1\">Static</option>\n"; 
echo "					<option value=\"2\">Customer</option>\n"; 
echo "				</select>\n"; 
echo "				</td></tr>\n"; 
echo "				<tr id=\"TR_DDNS_HOST\" style=\"display:none\"><td>Host Name</td><td>\n"; 
echo "					<input id=\"DDNS_HOST\" name=\"DDNS_HOST\" size=\"24\" maxlength=\"32\">\n"; 
echo "				</td></tr>\n"; 
echo "				<tr id=\"TR_DDNS_DOMAIN\" style=\"display:none\"><td>Domain Name</td><td>\n"; 
echo "					<input id=\"DDNS_DOMAIN\" name=\"DDNS_DOMAIN\" size=\"5\" maxlength=\"10\"\n"; 
echo "				</td></tr>\n"; 
echo "				<tr id=\"TR_DDNS_USERNAME\" style=\"display:none\"><td>Username</td><td>\n"; 
echo "					<input id=\"DDNS_USERNAME\" name=\"DDNS_USERNAME\" size=\"24\" maxlength=\"32\">\n"; 
echo "				</td></tr>\n"; 
echo "				<tr id=\"TR_DDNS_PASSWORD\" style=\"display:none\"><td>Password</td><td>\n"; 
echo "					<input id=\"DDNS_PASSWORD\" name=\"DDNS_PASSWORD\" type=\"password\" size=\"24\" maxlength=\"32\">\n"; 
echo "				</td></tr>\n"; 
echo "				</tbody>\n"; 
echo "			</table>\n"; 
echo "			<input type=\"hidden\" name=\"btnSubmit\">\n"; 
echo "		</form>\n"; 
echo "		</FIELDSET>\n"; 
echo "	</div>\n"; 
echo "	<div>\n"; 
echo "		<table style=\"width:600px;height:25px;text-align:center\">\n"; 
echo "			<tr>\n"; 
echo "				<td width=\"210\"></td>\n"; 
echo "				<td id=\"clear_btn\" class=\"td_btn\" onclick=\"location.reload()\">Undo</td>\n"; 
echo "				<td width=\"30\"></td>\n"; 
echo "				<td id=\"submit_btn\" class=\"td_btn\" onclick=\"Validate(document.forms[0])\">Apply</td>\n"; 
echo "				<td width=\"210\"></td>\n"; 
echo "			</tr>\n"; 
echo "		</table>\n"; 
echo "	</div>\n"; 
echo "</div>\n"; 
echo "</body>\n"; 
echo "</html>\n"; 
echo "\n";
?>