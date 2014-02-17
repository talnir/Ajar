/***********************************************************************/
/***********************************************************************/
/******************GLOBAL VARIABLE INITIALIZE******************/
/***********************************************************************/
/***********************************************************************/
var top_url = top.top_url;
var sid = top.sid;
top.child = this.window;
var ie6flag = top.ie6flag;
var page_refresh = top.page_refresh;
var inner_url;
with(location.href)
	inner_url = substr(lastIndexOf('/')+1,length);
with(inner_url)
{
	if(lastIndexOf('?') > 0 && inner_url != "ajax.php?action=login")
		inner_url = substring(0,lastIndexOf('?'));
}
var uitems = top.uitems;
var get_statusTime = top.get_statusTime;

/***********************************************************************/
/***********************************************************************/
/*********protect each page from access directly***************/
/***********************************************************************/
/***********************************************************************/

if( typeof(top_url) == "undefined" && inner_url != "ajax.php?action=login")
	window.location.replace("login.php");

function trim(str) {
	return str.replace(/^\s+|\s+$/g, "");
}

function SetCookie(name, value) {
	if(name)
		document.cookie = name+ "=" + trim(value) + ";path=/";
	
	return;
}
function GetCookie(name) {
	var cookie, temp;
	var value = "";

	if(!name)
		return value;

	if(document.cookie){
		cookie = document.cookie.split(";");
		for(i=0; i<cookie.length; i++) {
			temp = cookie[i].split("=");
			if(trim(temp[0]) == name && temp[1]) {
				value = trim(temp[1]);
				break;
			}
		}
	}
	return value;
}

function DelCookie(name) {
	var expire;

	if(name) {
		expire = new Date();
		expire.setTime(expire.getTime() - 1);
		top.document.cookie = name + "=;expires=" + expire.toGMTString() + ";path=/";

	}
	return;
}

function fFOB(o)
{
	o.style.fontStyle = 'oblique';
	o.style.fontWeight = 'bolder';
}

function fFNN(o)
{
	o.style.fontStyle = 'normal';
	o.style.fontWeight = 'normal';
}

function fFNB(o)
{
	o.style.fontStyle = 'normal';
	o.style.fontWeight = 'bolder';
}

function fFCP(o)
{
	o.style.cursor = 'pointer';
}

function fFCD(o)
{
	o.style.cursor = 'default';
}

function init_obj()
{
	top.loading = 1;

	highlight_sub_menu();

	var btn_go = GO("submit_btn");
	var btn_undo = GO("clear_btn");

	if (btn_undo != null) {
		btn_undo.onmouseover = function(){fFOB(btn_undo)};
		btn_undo.onmouseout = function(){fFNB(btn_undo)};
	}
	if (btn_go != null) {
		btn_go.onmouseover = function(){fFOB(btn_go)};
		btn_go.onmouseout = function(){fFNB(btn_go)};
	}
}

function highlight_sub_menu()
{
	var page_url = inner_url;
	SetCookie("page", page_url);

	var subMenu_div = top.GO("subMenu_div");
	if (page_url == "manage_upgrade_2.php")
		page_url = "manage_upgrade.php";

	if (page_url == "net_wifi_bssid.php")
		page_url = "net_wifi_setting.php";

	for (var i=subMenu_div.childNodes.length; i>0; i--) {
		
		var oDiv = subMenu_div.childNodes[i-1];
		if (oDiv.className == "s_menu") {
			var img_name = "sub_menu.png";
			var x_size = "110";
			var y_size = "24";

			if ("div_sMenu_img_"+page_url == oDiv.id) {
				img_name = "sub_menu2.png";
				x_size = "110";
				y_size = "24";
				oDiv.style.zIndex = 600;
			}
			//img
			if (ie6flag)
				oDiv.innerHTML="<img src='blank.gif' id='img_text_"+i+"' width='"+ x_size +"' height='"+ y_size +"' style=\"FILTER:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='"+ img_name +"',sizingMethod='scale')\">";
			else
				oDiv.innerHTML="<img id='img_text_"+i+"' src='"+ img_name +"'>";
		} else if (oDiv.id == "div_sMenu_text_"+page_url) {
			with (oDiv.childNodes[0].style) {
				color = "#000000";
				cursor = "default";
			}
		} else {
			with (oDiv.childNodes[0].style) {
				color = "#FFFFFF";
				cursor = "pointer";
			}
		}

	}

}


function hideAllSelect()
{
	top.hideAllSelect();
}

function showAllSelect()
{
	top.showAllSelect();
}

function pri_d(val)
{
	return (val >> 1);
}
function pri_a(val)
{
	return (val & 1);
}
function tr_display(val,pwd)
{
	GO("TR_"+val).style.display = (pri_d(uitems[inner_url][val])?"":"none");

	if(pwd)
		GO("TR_C"+val).style.display = (pri_d(uitems[inner_url][val])?"":"none");

}
function obj_readonly(val,type)
{
	if(type == "ip")
	{
		GO(val+"_01").disabled = GO(val+"_02").disabled = GO(val+"_03").disabled = GO(val+"_04").disabled = (pri_a(uitems[inner_url][val])?false:true);

	}
	else if(type == "pass")
	{
		GO(val).disabled = (pri_a(uitems[inner_url][val])?false:true);
		GO("C"+val).disabled = (pri_a(uitems[inner_url][val])?false:true);
	}
	else
	{
		GO(val).disabled = (pri_a(uitems[inner_url][val])?false:true);
	}
}

function GO(key)
{
	return document.getElementById(key);
}
function dialog(question, yesOnClick, noOnClick)
{
	top.dialog(question, yesOnClick, noOnClick);
}
/******************************************************************************/
/******************************************************************************/
/**********************VALIDATION SECTION START**********************/
/******************************************************************************/
/******************************************************************************/
function isFieldEmpty(obj)
{
	if(obj.value == "")
	{
		alert("Empty String is not allowed");
		obj.select();
		return true;
	}
	return false;

}

function getkey(e) {
        if (window.event)
                return window.event.keyCode;
        else if (e)
                return e.which;
        else
                return null;
}

function goodchars(e, goods) {
        var key, keychar;
        key = getkey(e);
        if (key == null) return true;
        keychar = String.fromCharCode(key);
        keychar = keychar.toLowerCase();
        goods = goods.toLowerCase();
        if (goods.indexOf(keychar) != -1)
                return true;
        if ( key==null || key==0 || key==8 || key==9 || key==13 || key==27 )
                return true;
        return false;
}

function nogoodchars(e, goods) {
        var key, keychar;
        key = getkey(e);
        if (key == null) return true;
        keychar = String.fromCharCode(key);
        keychar = keychar.toLowerCase();
        goods = goods.toLowerCase();
        if (goods.indexOf(keychar) == -1)
                return true;
        if ( key==null || key==0 || key==8 || key==9 || key==13 || key==27 )
                return true;
        return false;
}

function v_CIDR (s) {
    var errMsg = '';
    
    var ipArray = s.match(/^(\d{1,3})\.(\d{1,3})\.(\d{1,3})\.(\d{1,3})\/(\d{1,2})$/);
    
    if (ipArray == null)
    {
        errMsg = 'CIDR Address : ' + s + ' is not a valid CIDR address(ex, 192.168.0.8/24).'; 
	alert(errMsg);
	return 0;   
    }else{
        var ipAddr = s.split('/');

	if(!v_IP(ipAddr[0]))
	{
		return 0;
	}
        
        if (errMsg == '')
        {
            var v = ipAddr[1] * 1;
            if (!check_range(v,0,32))
		{
                errMsg = 'CIDR Address : ' + s + ' is not a valid CIDR address(ex, 192.168.0.8/24).';              
		alert(errMsg);
		return 0;
		}
		else
			return 1;
        }
	else
	{
		alert(errMsg);
		return 0;
	}
    }
}

function v_IP (s) {
    var errMsg = '';
    var ipArray = s.match(/^(\d{1,3})\.(\d{1,3})\.(\d{1,3})\.(\d{1,3})$/);

    if (ipArray == null) // don't match ip pattern
     {
        errMsg = 'IP Address : ' + s + ' is not a valid IP address.';
	alert(errMsg);
	return 0;
     }
    else {
        for (var i = 1; i < 5; i++)
        {
            if (!isFF(ipArray[i])){
                errMsg = 'IP Address : ' + s + ' is not a valid IP address.';
		  {
        		errMsg = 'IP Address : ' + s + ' is not a valid IP address.';
			alert(errMsg);
			return 0;
		  }
            }
        }
    } 
    return 1;
}

function isFF(v)
{
    return check_range(v,0,255);
}

function check_range(v,min,max)
{
    return (!isNaN(v) && v >= min && v <= max);
}



function CheckNum(str)
{
	var expr1 = new RegExp("^[1-9]+\\d*$|^-[1-9]+\\d*$|^0$");

	if (!str || str.match(expr1)==null)
		return false;

	return true;
}

function GetIPSegment(IPString, SegmentNum)
{
	var str;

	str = IPString.split(".");
	return str[SegmentNum - 1];
}

function CheckIPAddr(seg, value)
{
	var d = 0, ret = false;

	if (!CheckNum(value)) return ret;
	d = parseInt(value, 10);
	switch(seg) {
		case 1:
			if ((d >= 1) && (d <= 233)) ret = true;
			break;
		case 2:
		case 3:
			if ((d >= 0) && (d <= 255)) ret = true;
			break;
		case 4:
			if ((d >= 1) && (d <= 254)) ret = true;
			break;
		default:
			break;
	}
	return ret;
}

function isFF(x)
{
	return (!isNaN(x) && x >= 0 && x <= 255);
}

function SplitIPAddress(IPString, ObjName, passForm)
{
	var form;
	if (passForm == null)
		form = document.forms[0];
	else
		form = passForm;

	if (IPString != "") {
		eval("form ."+ ObjName +"_01.value = GetIPSegment ( IPString , 1 )");
		eval("form ."+ ObjName +"_02.value = GetIPSegment ( IPString , 2 )");
		eval("form ."+ ObjName +"_03.value = GetIPSegment ( IPString , 3 )");
		eval("form ."+ ObjName +"_04.value = GetIPSegment ( IPString , 4 )");
	} else {
		eval("form ."+ ObjName +"_01.value = ''");
		eval("form ."+ ObjName +"_02.value = ''");
		eval("form ."+ ObjName +"_03.value = ''");
		eval("form ."+ ObjName +"_04.value = ''");
	}
	return true;
}

function isDottedNetmask(s)
{
	s = String(s).replace(/^\s+|\s+$/g,"");//remove space 
	var result = s.match(/^(\d{1,3})\.(\d{1,3})\.(\d{1,3})\.(\d{1,3})$/);
	if (result && result.length == 5 &&  isFF(result[1]) && isFF(result[2]) && isFF(result[3]) && isFF(result[4])) {
		var last_bit = 1; // accept 255.255.255.255
		var cnt = 0;
		for (var i=1; i <= 4; i++) {
			var mask = parseInt(result[i], 10);
			for (var j=7; j >= 0; j--) {
				var n = Math.pow(2, j);
				var bit_on = (mask & n) ? 1 : 0;
				if (last_bit != bit_on) {
					last_bit = bit_on;
					cnt++;    //no change or Just change once,from 1 to 0  : subnet mask
				}
			}
		}
		if (cnt > 1 || result[4] == "255" || result[4] == "254") {
			alert("Invalid NetMask");
			//document.device_config_02.Netmask_ipaddr4.select();
			return false;
		} else {
			return true;
		}
	}
	alert("Invalid NetMask");
	//document.device_config_02.Netmask_ipaddr4.select();
	return false;
}

function AssembleNetmaskAddress(ip1, ip2, ip3, ip4, element)
{
	element.value = ip1.value + '.' + ip2.value + '.' + ip3.value + '.' + ip4.value;
	return isDottedNetmask(element.value);
}

function AssembleIPAddress(passForm, ObjName)
{
	eval("var ip1 = passForm."+ObjName+"_01");
	eval("var ip2 = passForm."+ObjName+"_02");
	eval("var ip3 = passForm."+ObjName+"_03");
	eval("var ip4 = passForm."+ObjName+"_04");

	if (ip1.value || ip2.value || ip3.value || ip4.value) {
		if (!CheckIPAddr(1, ip1.value)) {
			alert("Invalid value of field, the range is 1 - 223");
			ip1.select();
			return false;
		}

		if (!CheckIPAddr(2, ip2.value)) {
			alert("Invalid value of field, the range is 0 - 255");
			ip2.select();
			return false;
		}

		if (!CheckIPAddr(3, ip3.value)) {
			alert("Invalid value of field, the range is 0 - 255");
			ip3.select();
			return false;
		}

		if (!CheckIPAddr(4, ip4.value)) {
			alert("Invalid value of field, the range is 1 - 254");
			ip4.select();
			return false;
		}
		ip = ip1.value + '.' + ip2.value + '.' +ip3.value + '.' + ip4.value;

		eval("passForm."+ ObjName +".value = ip");
	}
        return true;
}

function CheckValue(obj, min, max)
{
	if (!CheckNum(obj.value) || parseInt(obj.value) > parseInt(max) || parseInt(obj.value) < parseInt(min)) {
		alert("The value " + obj.value + " is out of range: " + min + " ~ " + max);
		obj.select();
		return false;
	} else {
		return true;
	}
}

function CheckMacAddress(MACstring)
{
	var MACarray = MACstring.replace(/:/g, "-").split("-");

	if (MACarray.length != 6) return false;

	for (var i=0; i<6; i++) {
		if (MACarray[i].length!=2 || !isFF(parseInt(MACarray[i],16))) return false;
	}

	return true;
}


/******************************************************************************/
/******************************************************************************/
/**********************VALIDATION SECTION START**********************/
/******************************************************************************/
/******************************************************************************/



/***********************************************************************/
/***********************************************************************/
/**********************AJAX SECTION START**********************/
/***********************************************************************/
/***********************************************************************/
function ajax_get_signals()
{
	top.ajax_get_signals();
}

function ajax_get_key(action) {
	top.ajax_get_key(action);
}

function ajax_get_ether_signals() {
        top.ajax_get_ether_signals();
}

/***********************************************************************/
/***********************************************************************/
/**********************AJAX SECTION END**********************/
/***********************************************************************/
/***********************************************************************/

