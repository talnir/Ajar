<?php
echo "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01//EN\" \"http://www.w3.org/TR/html4/strict.dtd\">\n"; 
echo "<html>\n"; 
echo "<head>\n"; 
echo "<title></title>\n"; 
echo "<link href=\"style.css\" rel=\"stylesheet\" type=\"text/css\">\n"; 
echo "<script type=\"text/javascript\" src=\"comm.js\"></script>\n"; 
echo "<script type=\"text/javascript\">\n"; 
echo "<!--\n"; 
echo "function backupOnClick()\n"; 
echo "{\n"; 
echo "	top.$.ajax(\n"; 
echo "                {\n"; 
echo "                        url:\"ajax.php\",\n"; 
echo "                        data:{\n"; 
echo "                                action:\"tag_Backup\",\n"; 
echo "                                cache:false,\n"; 
echo "                                time:(new Date()).getTime()\n"; 
echo "                        },\n"; 
echo "                        success:function(response){\n"; 
echo "				//setTimeout(\"show()\",5000);\n"; 
echo "                        },\n"; 
echo "                        error:function(xhr)\n"; 
echo "                        {\n"; 
echo "                                location.reload();\n"; 
echo "                        }\n"; 
echo "                }\n"; 
echo "        );	\n"; 
echo "}\n"; 
echo "\n"; 
echo "function factoryOnClick()\n"; 
echo "{\n"; 
echo "	dialog(\"Reset to factory firmware?\", \"ajax_factoryreset()\");\n"; 
echo "}\n"; 
echo "\n"; 
echo "function InitDisplay()\n"; 
echo "{\n"; 
echo "	tr_display(\"FactoryDefault\");\n"; 
echo "	//tr_display(\"TD_Backup\");\n"; 
echo "	//tr_display(\"BackupSetting\");\n"; 
echo "	InitValue(document.forms[0]);\n"; 
echo "}\n"; 
echo "\n"; 
echo "function InitValue(passForm) {\n"; 
echo "	if(!pri_a(uitems[inner_url][\"FactoryDefault\"]))\n"; 
echo "	{\n"; 
echo "		passForm.btnDefault.disabled =  true;\n"; 
echo "	}\n"; 
echo "	GO(\"version\").innerHTML = top.firmwareVersion;\n"; 
echo "	top.loading = 0;\n"; 
echo "	setInterval('ajax_get_signals()',2000);\n"; 
echo "}\n"; 
echo "\n"; 
echo "-->\n"; 
echo "</script>\n"; 
echo "</head>\n"; 
echo "\n"; 
echo "<body onload=\"init_obj();InitDisplay();\">\n"; 
echo "<div id=\"main_div\">\n"; 
echo "	<div id=\"container\">\n"; 
echo "		<form>\n"; 
echo "		<FIELDSET id=\"TR_TD_Roolback\" style=\"display:\">\n"; 
echo "		<legend>Firmware Rollback</legend>\n"; 
echo "			<table>\n"; 
echo "				<tr><td>Current firmware version:</td><td id=\"version\" style=\"color:red\"></td></tr>\n"; 
echo "			</table>\n"; 
echo "		</FIELDSET>\n"; 
echo "		<FIELDSET id=\"TR_FactoryDefault\" style=\"display:none\">\n"; 
echo "		<legend>Factory Default Settings</legend>\n"; 
echo "			<table>\n"; 
echo "				<tr><td>Reset to factory default settings</td><td><input type=\"button\" name=\"btnDefault\" id=\"btnDefault\" value=\"Factory Default\" onclick='factoryOnClick()'></td></tr>\n"; 
echo "			</table>\n"; 
echo "		</FIELDSET>\n"; 
echo "                <FIELDSET id=\"TR_TD_Backup\" style=\"display:none\">\n"; 
echo "                <legend>Backup Configuration</legend>\n"; 
echo "                        <table>\n"; 
echo "                                <tr id=\"TR_BackupSetting\" style=\"display:none\"><td>Download Current Configuration File</td><td><input type=\"button\" name=\"btnBackup\" id=\"btnBackup\" value=\"Backup File\" onclick=\"backupOnClick();location.href='./Conf.bak'\"></td></tr>\n"; 
echo "                        </table>\n"; 
echo "                </FIELDSET>\n"; 
echo "		</form>\n"; 
echo "\n"; 
echo "		<form method=\"POST\" enctype=\"multipart/form-data\" action=\"ajax.php?action=manage_backup\">\n"; 
echo "		<table>\n"; 
echo "		<tr><td id=\"TR_TD_Restore\" style=\"display:none\">\n"; 
echo "			<FIELDSET>\n"; 
echo "                                <legend>Web Upgrade</legend>\n"; 
echo "                                <input type=\"hidden\" name=\"web_upgrade\" value=\"1\">\n"; 
echo "                                <table>\n"; 
echo "                                        <tr id=\"TR_WebUpgrade\" style=\"display:none;\"><td>Firmware image file</td><td>\n"; 
echo "                                                <span><input type=\"file\" name=\"file\" size=\"30\" onChange=\"this.form.vfile.value=this.value;\" style=\"position:relative; top:11px; left:7px; opacity:0; filter:alpha(opacity=0); -moz-opacity:0; z-index: 90;\"></span><br/>\n"; 
echo "                                                <input type=\"text\" name=\"vfile\" size=\"30\" readOnly=\"true\" style=\"position:relative; top:-12px; z-index:91;\">\n"; 
echo "                                                <input type=\"button\" name=\"Browse\" value=\"Browse...\" style=\"position:relative; top:-12px; width:60px;\" onClick=\"this.form.upgrade_file_name.click();\">\n"; 
echo "                                                <input type=\"submit\" value=\"Upload\" name=\"Web_Upgrade_button\" onClick=\"return (this.form.file.value!='');\" style=\"position:relative; top:-12px; width:60px;\">\n"; 
echo "                                        </td></tr>\n"; 
echo "                                </table>\n"; 
echo "                        </FIELDSET>\n"; 
echo "		</td></tr>\n"; 
echo "		</table>\n"; 
echo "		</form>\n"; 
echo "	</div>\n"; 
echo "</div>\n"; 
echo "</body>\n"; 
echo "</html>\n"; 
echo "\n";
?>