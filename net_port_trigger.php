<?php
echo "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01//EN\" \"http://www.w3.org/TR/html4/strict.dtd\">\n"; 
echo "<html>\n"; 
echo "<head>\n"; 
echo "<title></title>\n"; 
echo "<link href=\"style.css\" rel=\"stylesheet\" type=\"text/css\">\n"; 
echo "<script type=\"text/javascript\" src=\"comm.js\"></script>\n"; 
echo "<script type=\"text/javascript\">\n"; 
echo "<!--\n"; 
echo "var pftData_Array,pftData_raw;\n"; 
echo "var pftData = new Array();\n"; 
echo "\n"; 
echo "Array.prototype.remove = function(from, to) {\n"; 
echo "	var rest = this.slice((to || from) + 1 || this.length);\n"; 
echo "	this.length = from < 0 ? this.length + from : from;\n"; 
echo "	return this.push.apply(this, rest);\n"; 
echo "};\n"; 
echo "\n"; 
echo "function pft_obj()\n"; 
echo "{\n"; 
echo "	this.value = pftData;\n"; 
echo "}\n"; 
echo "\n"; 
echo "var pft;\n"; 
echo "\n"; 
echo "function updateAllRow()\n"; 
echo "{\n"; 
echo "	for(var i=0;i<pft.length;i++)\n"; 
echo "	{\n"; 
echo "		pft[i].Enable = (GO(\"Enb_\"+i).checked)?\"Y\":\"N\";\n"; 
echo "		pft[i].Name = GO(\"Name_\"+i).value;\n"; 
echo "		pft[i].Protocol = GO(\"Type_\"+i).value;\n"; 
echo "		pft[i].TriPort_Begin = GO(\"TPtb_\"+i).value;\n"; 
echo "		pft[i].TriPort_End = GO(\"TPte_\"+i).value;\n"; 
echo "		pft[i].Protocol = GO(\"Type2_\"+i).value;\n"; 
echo "		pft[i].FwdPort_Begin = GO(\"FPtb_\"+i).value;\n"; 
echo "		pft[i].FwdPort_End = GO(\"FPte_\"+i).value;\n"; 
echo "	}\n"; 
echo "}\n"; 
echo "\n"; 
echo "function fp_insert()\n"; 
echo "{\n"; 
echo "	if (pft.length >= 30) return;\n"; 
echo "\n"; 
echo "	var newobj = {\"Enable\":\"\",\"Name\":\"\",\"Protocol\":\"\",\"TriPort_Begin\":\"\",\"TriPort_End\":\"\",\"Protocol2\":\"\",\"FwdPort_Begin\":\"\",\"FwdPort_End\":\"\",\"Enable\":0};\n"; 
echo "	updateAllRow();\n"; 
echo "	pft.push(newobj);\n"; 
echo "	removeAllRow();\n"; 
echo "	for(var i=0;i<pft.length;i++)\n"; 
echo "		addRowToTable(pft[i]);\n"; 
echo "}\n"; 
echo "\n"; 
echo "function addRowToTable(obj)\n"; 
echo "{\n"; 
echo "	var tbl = GO('pf');\n"; 
echo "	var lastRow = tbl.rows.length;\n"; 
echo "	var iteration = lastRow-2;\n"; 
echo "	var row = tbl.insertRow(lastRow);\n"; 
echo "\n"; 
echo "	//No\n"; 
echo "	var cellno = row.insertCell(0);\n"; 
echo "	var textNode = document.createTextNode(iteration+1);\n"; 
echo "	cellno.appendChild(textNode);\n"; 
echo "\n"; 
echo "	//Enable\n"; 
echo "	var cellenable = row.insertCell(1);\n"; 
echo "	var el = document.createElement('input');\n"; 
echo "	el.type = 'checkbox';\n"; 
echo "	el.id = 'Enb_' + iteration;\n"; 
echo "	el.name = 'Enb_' + iteration;\n"; 
echo "	el.defaultChecked = (obj.Enable == \"Y\")?true:false;\n"; 
echo "	el.value = (obj.Enable)?\"Y\":\"N\";\n"; 
echo "	el.onclick = function(){this.value = (this.checked)?\"Y\":\"N\"};\n"; 
echo "	el.disabled = (!pri_a(uitems[inner_url][\"NETFILTER_NAT_TRIGGER\"]))?true:false;\n"; 
echo "	cellenable.appendChild(el);\n"; 
echo "\n"; 
echo "	//Name\n"; 
echo "	var celllanip = row.insertCell(2);\n"; 
echo "	var el = document.createElement('input');\n"; 
echo "	el.type = 'text';\n"; 
echo "	el.id = 'Name_' + iteration;\n"; 
echo "	el.name = 'Name_' + iteration;\n"; 
echo "	el.size = 10;\n"; 
echo "	el.maxLength = 32;\n"; 
echo "	el.value = obj.Name;\n"; 
echo "	el.disabled = (!pri_a(uitems[inner_url][\"NETFILTER_NAT_TRIGGER\"]))?true:false;\n"; 
echo "	celllanip.appendChild(el);\n"; 
echo "\n"; 
echo "	//Protocol\n"; 
echo "	var cellprotocol = row.insertCell(3);\n"; 
echo "	var sel = document.createElement('select');\n"; 
echo "	sel.id = 'Type_' + iteration;\n"; 
echo "	sel.name = 'Type_' + iteration;\n"; 
echo "	sel.options[0] = new Option('TCP', '0');\n"; 
echo "	sel.options[1] = new Option('UDP', '1');\n"; 
echo "	sel.options[2] = new Option('TCP/UDP', '2');\n"; 
echo "	sel.value = obj.Protocol;\n"; 
echo "	sel.disabled = (!pri_a(uitems[inner_url][\"NETFILTER_NAT_TRIGGER\"]))?true:false;\n"; 
echo "	cellprotocol.appendChild(sel);\n"; 
echo "\n"; 
echo "	//Trigger Port Begin\n"; 
echo "	var cellwanpb = row.insertCell(4);\n"; 
echo "	var el = document.createElement('input');\n"; 
echo "	el.type = 'text';\n"; 
echo "	el.id = 'TPtb_' + iteration;\n"; 
echo "	el.name = 'TPtb_' + iteration;\n"; 
echo "	el.size = 4;\n"; 
echo "	el.maxLength = 5;\n"; 
echo "	el.value = obj.TriPort_Begin;\n"; 
echo "	//  el.onkeypress = keyPressTest;\n"; 
echo "	el.disabled = (!pri_a(uitems[inner_url][\"NETFILTER_NAT_TRIGGER\"]))?true:false;\n"; 
echo "	cellwanpb.appendChild(el);\n"; 
echo "\n"; 
echo "	//Trigger Port End\n"; 
echo "	var cellwanpe = row.insertCell(5);\n"; 
echo "	var el = document.createElement('input');\n"; 
echo "	el.type = 'text';\n"; 
echo "	el.id = 'TPte_' + iteration;\n"; 
echo "	el.name = 'TPte_' + iteration;\n"; 
echo "	el.size = 4;\n"; 
echo "	el.maxLength = 5;\n"; 
echo "	el.value = obj.TriPort_End;\n"; 
echo "	el.disabled = (!pri_a(uitems[inner_url][\"NETFILTER_NAT_TRIGGER\"]))?true:false;\n"; 
echo "	cellwanpe.appendChild(el);\n"; 
echo "\n"; 
echo "\n"; 
echo "	//Protocol\n"; 
echo "	var cellprotocol = row.insertCell(6);\n"; 
echo "	var sel = document.createElement('select');\n"; 
echo "	sel.id = 'Type2_' + iteration;\n"; 
echo "	sel.name = 'Type2_' + iteration;\n"; 
echo "	sel.options[0] = new Option('TCP', '0');\n"; 
echo "	sel.options[1] = new Option('UDP', '1');\n"; 
echo "	sel.options[2] = new Option('TCP/UDP', '2');\n"; 
echo "	sel.value = obj.Protocol2;\n"; 
echo "	sel.disabled = (!pri_a(uitems[inner_url][\"NETFILTER_NAT_TRIGGER\"]))?true:false;\n"; 
echo "	cellprotocol.appendChild(sel);\n"; 
echo "\n"; 
echo "	//Forwarding Port Begin\n"; 
echo "	var cellwanpb = row.insertCell(7);\n"; 
echo "	var el = document.createElement('input');\n"; 
echo "	el.type = 'text';\n"; 
echo "	el.id = 'FPtb_' + iteration;\n"; 
echo "	el.name = 'FPtb_' + iteration;\n"; 
echo "	el.size = 4;\n"; 
echo "	el.maxLength = 5;\n"; 
echo "	el.value = obj.FwdPort_Begin;\n"; 
echo "	el.disabled = (!pri_a(uitems[inner_url][\"NETFILTER_NAT_TRIGGER\"]))?true:false;\n"; 
echo "	cellwanpb.appendChild(el);\n"; 
echo "\n"; 
echo "	//Forwarding Port End\n"; 
echo "	var cellwanpe = row.insertCell(8);\n"; 
echo "	var el = document.createElement('input');\n"; 
echo "	el.type = 'text';\n"; 
echo "	el.id = 'FPte_' + iteration;\n"; 
echo "	el.name = 'FPte_' + iteration;\n"; 
echo "	el.size = 4;\n"; 
echo "	el.maxLength = 5;\n"; 
echo "	el.value = obj.FwdPort_End;\n"; 
echo "	el.disabled = (!pri_a(uitems[inner_url][\"NETFILTER_NAT_TRIGGER\"]))?true:false;\n"; 
echo "	cellwanpe.appendChild(el);\n"; 
echo "\n"; 
echo "	//Delete\n"; 
echo "	var cellenable = row.insertCell(9);\n"; 
echo "	var el = document.createElement('input');\n"; 
echo "	el.value = \"Delete\";\n"; 
echo "	el.type = 'button';\n"; 
echo "	eval(\"el.onclick = function(){removeRowFromTable(\"+ iteration +\")}\");\n"; 
echo "	el.disabled = (!pri_a(uitems[inner_url][\"NETFILTER_NAT_TRIGGER\"]))?true:false;\n"; 
echo "	cellenable.appendChild(el);\n"; 
echo "}\n"; 
echo "\n"; 
echo "function removeRowFromTable(index)\n"; 
echo "{\n"; 
echo "	updateAllRow();\n"; 
echo "	removeAllRow();\n"; 
echo "	pft.remove(index);\n"; 
echo "\n"; 
echo "	for(var i=0;i<pft.length;i++)\n"; 
echo "		addRowToTable(pft[i]);\n"; 
echo "}\n"; 
echo "\n"; 
echo "function removeAllRow()\n"; 
echo "{\n"; 
echo "	var tbl = GO('pf');\n"; 
echo "	var lastRow = tbl.rows.length;  \n"; 
echo "	for(var i=1;i<lastRow-1 ;i++)\n"; 
echo "		tbl.deleteRow(lastRow - i);\n"; 
echo "}\n"; 
echo "\n"; 
echo "\n"; 
echo "function InitDisplay(response)\n"; 
echo "{\n"; 
echo "\n"; 
echo "	pftData_raw = response;\n"; 
echo "	pftData_Array = pftData_raw.split(\"@\");\n"; 
echo "	pftData = new Array();\n"; 
echo "	var i;\n"; 
echo "	for(i=1;i<pftData_Array.length;i++)\n"; 
echo "	{\n"; 
echo "		var tmpArray = pftData_Array[i].split(\",\");\n"; 
echo "		var tmptriport= tmpArray[4].split(\"-\");\n"; 
echo "		var tmpfwdPort = tmpArray[6].split(\"-\");\n"; 
echo "		var newobj = {\"Enable\":tmpArray[1],\n"; 
echo "		\"Name\":tmpArray[2],\"Protocol\":tmpArray[3],\n"; 
echo "		\"TriPort_Begin\":tmptriport[0],\n"; 
echo "		\"TriPort_End\":tmptriport[1],\n"; 
echo "		\"Protocol2\":tmpArray[5],\n"; 
echo "		\"FwdPort_Begin\":tmpfwdPort[0],\"FwdPort_End\":tmpfwdPort[1]};\n"; 
echo "		pftData.push(newobj);\n"; 
echo "	}\n"; 
echo "\n"; 
echo "\n"; 
echo "	tr_display(\"NETFILTER_NAT_TRIGGER\");\n"; 
echo "	InitValue(document.forms[0]);\n"; 
echo "}\n"; 
echo "\n"; 
echo "function InitValue(passForm)\n"; 
echo "{\n"; 
echo "	removeAllRow();\n"; 
echo "	pft = new pft_obj().value;\n"; 
echo "\n"; 
echo "	for(var i=0;i<pft.length;i++)\n"; 
echo "		addRowToTable(pft[i]);\n"; 
echo "\n"; 
echo "	if(!pri_a(uitems[inner_url][\"NETFILTER_NAT_TRIGGER\"]))\n"; 
echo "	{\n"; 
echo "		passForm.Insert.disabled = true;\n"; 
echo "	}\n"; 
echo "\n"; 
echo "	top.loading = 0;\n"; 
echo "	setInterval('ajax_get_signals()',2000);\n"; 
echo "}\n"; 
echo "\n"; 
echo "function Validate(passForm)\n"; 
echo "{\n"; 
echo "	var tmpNETFILTER_NAT_TRIGGER=\"\";\n"; 
echo "	for(i=0; i<pft.length; i++) {\n"; 
echo "		var TPtb = GO(\"TPtb_\"+i);\n"; 
echo "		var TPte = GO(\"TPte_\"+i);\n"; 
echo "		if (!CheckValue(TPte, 1, 65535) || !CheckValue(TPtb, 1, 65535)) return;\n"; 
echo "		if (TPte.value > 0 && !CheckValue(TPte, TPtb.value, 65535)) return;\n"; 
echo "\n"; 
echo "		var FPtb = GO(\"FPtb_\"+i);\n"; 
echo "		var FPte = GO(\"FPte_\"+i);\n"; 
echo "		if (!CheckValue(FPte, 1, 65535) || !CheckValue(FPtb, 1, 65535)) return;\n"; 
echo "		if (FPte.value > 0 && !CheckValue(FPte, FPtb.value, 65535)) return;\n"; 
echo "\n"; 
echo "\n"; 
echo "		tmpNETFILTER_NAT_TRIGGER+= \"@\"+(i+1);\n"; 
echo "		tmpNETFILTER_NAT_TRIGGER+= \",\"+((GO(\"Enb_\"+i).checked)?\"Y\":\"N\");\n"; 
echo "		tmpNETFILTER_NAT_TRIGGER+= \",\"+GO(\"Name_\"+i).value;\n"; 
echo "		tmpNETFILTER_NAT_TRIGGER+= \",\"+GO(\"Type_\"+i).value;\n"; 
echo "		tmpNETFILTER_NAT_TRIGGER+= \",\"+GO(\"TPtb_\"+i).value + \"-\" + GO(\"TPte_\"+i).value;\n"; 
echo "		tmpNETFILTER_NAT_TRIGGER+= \",\"+GO(\"Type2_\"+i).value;\n"; 
echo "		tmpNETFILTER_NAT_TRIGGER+= \",\"+GO(\"FPtb_\"+i).value + \"-\" + GO(\"FPte_\"+i).value;\n"; 
echo "	}\n"; 
echo "\n"; 
echo "	passForm.NETFILTER_NAT_TRIGGER.value = tmpNETFILTER_NAT_TRIGGER;\n"; 
echo "\n"; 
echo "	passForm.sid.value = sid;\n"; 
echo "	passForm.btnSubmit.value = \"1\";\n"; 
echo "	passForm.submit();\n"; 
echo "}\n"; 
echo "//-->\n"; 
echo "</script>\n"; 
echo "</head>\n"; 
echo "\n"; 
echo "<body onload=\"init_obj();setTimeout('ajax_get_key()',500);\">\n"; 
echo "<div id=\"main_div\">\n"; 
echo "	<div id=\"container\">\n"; 
echo "		<form name=\"form1\" method=\"POST\" action=\"ajax.php?action=net_port_trigger\" style=\"text-align:center\">\n"; 
echo "			<input type=\"hidden\" name=\"sid\" id=\"sid\">\n"; 
echo "			<input type=\"hidden\" name=\"NETFILTER_NAT_TRIGGER\" id=\"NETFILTER_NAT_TRIGGER\">\n"; 
echo "			<table align=center>\n"; 
echo "			<tr id=\"TR_NETFILTER_NAT_TRIGGER\" style=\"display:none\"><td>\n"; 
echo "\n"; 
echo "			<table id=\"pf\" class=\"pf_tbl\" cellpadding=\"5\">\n"; 
echo "			<tr>\n"; 
echo "				<td rowspan=\"2\"><b>No.</b></td>\n"; 
echo "				<td rowspan=\"2\"><b>Enable</b></td>\n"; 
echo "				<td rowspan=\"2\"><b>Name</b></td>\n"; 
echo "				<td rowspan=\"2\"><b>Trigger Protocol</b></td>\n"; 
echo "				<td colspan=\"2\"><b>Trigger Port</b></td>\n"; 
echo "				<td rowspan=\"2\"><b>Open Protocol</b></td>\n"; 
echo "				<td colspan=\"2\"><b>Open Port</b></td>\n"; 
echo "				<td rowspan=\"2\"><b>Delete</b></td>\n"; 
echo "			</tr>\n"; 
echo "			<tr>\n"; 
echo "				<td>Begin</td>\n"; 
echo "				<td>End</td>\n"; 
echo "				<td>Begin</td>\n"; 
echo "				<td>End</td>\n"; 
echo "			</tr>\n"; 
echo "			</table>\n"; 
echo "			<input type=\"button\" id=\"Insert\" name=\"Insert\" value=\"Insert\" onclick=\"fp_insert()\">\n"; 
echo "\n"; 
echo "			</td></tr>\n"; 
echo "			</table>\n"; 
echo "			<input type=\"hidden\" name=\"btnSubmit\">\n"; 
echo "		</form>\n"; 
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