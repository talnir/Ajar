/***********************************************************************/
/***********************************************************************/
/******************GLOBAL VARIABLE INITIALIZE******************/
/***********************************************************************/
/***********************************************************************/
var top_url,sid;
with(top.location.href)
	top_url = substr(lastIndexOf('/')+1,length);
with(top_url)
	sid = substr(lastIndexOf('sid=')+4,length);
var ie6flag = false;
var page_refresh = 1;
var child;
var firmwareVersion = "";
var hardwareModel = "";
var xitem = new Array();
var xitemlist = new Array();
var uitems;
var loading = 0;




function trim(str) {
	return str.replace(/^\s+|\s+$/g, "");
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

function fFCP(o)
{
	o.style.cursor = 'pointer';
}

function fFCD(o)
{
	o.style.cursor = 'default';
}

// KonamiCode_track
var KCTrack = 0;
function KonamiCode(e)
{
	e.cancelBubble = true;
	if (	KCTrack==0 && e.keyCode==38 ||
		KCTrack==1 && e.keyCode==38 ||
		KCTrack==2 && e.keyCode==40 ||
		KCTrack==3 && e.keyCode==40 ||
		KCTrack==4 && e.keyCode==37 ||
		KCTrack==5 && e.keyCode==39 ||
		KCTrack==6 && e.keyCode==37 ||
		KCTrack==7 && e.keyCode==39 ||
		KCTrack==8 && e.keyCode==66 ||
		KCTrack==9 && e.keyCode==65	) {
		KCTrack++;
	} else
		KCTrack = 0;

	if (KCTrack==10) {
		GO("DIV_LOGOUT").style.marginLeft = "540px";
		GO("DIV_REBOOT").style.marginLeft = "595px";
		GO("main_menu_Engineering").style.visibility="visible";
	}
}

function hidden_menu_trigger(state)
{
	KCTrack = 0;
	if (state) {
		if (document.addEventListener)
			document.addEventListener('keydown', KonamiCode, true);
		else if (document.attachEvent)
			document.attachEvent('onkeydown', KonamiCode);
		if (window.event) {
			window.event.cancelBubble = true;
			window.event.returnValue = false;
		}
	} else {
		if (document.removeEventListener)
			document.removeEventListener('keydown', KonamiCode, true);
		else if (document.detachEvent)
			document.detachEvent('onkeydown', KonamiCode);
		if (window.event) {
			window.event.cancelBubble = false;
			window.event.returnValue = true;
		}
	}
}

function init_top_obj(menu)
{
	var oDiv;
	var top_div = GO("top_div");

	//Init Version Start
	with (oDiv=document.createElement("DIV")) {
		id="version";
		className="version";
		align="right";
	}
	top_div.appendChild(oDiv);

	//Init SP image Start
	with (oDiv=document.createElement("DIV")) {
		className = "sp";
		oDiv.onmousedown = function(){hidden_menu_trigger(true)};
		oDiv.onmouseup = function(){hidden_menu_trigger(false)};
		if (ie6flag)
			innerHTML="<img src='blank.gif' onload=\"var realImg=new Image(); realImg.src='Logo2.png'; this.width=realImg.width; this.height=realImg.height;\" style=\"FILTER:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='Logo2.png',sizingMethod='crop')\">";
		else
			innerHTML="<img src='Logo2.png'>";
	}
	top_div.appendChild(oDiv);

	//Init CPE image Start
	with (oDiv=document.createElement("DIV")) {
		className="cpe";
		var model = hardwareModel.split("-")[1];
		var cpeImg;
		cpeImg = (model >= 167 || model == 155)? "cpe_ODU.png" : "cpe_IDU.png";
		if (ie6flag)
			innerHTML="<img src='blank.gif' onload=\"var realImg=new Image(); realImg.src='"+cpeImg+"'; this.width=realImg.width; this.height=realImg.height;\" style=\"FILTER:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='"+cpeImg+"',sizingMethod='image')\">";
		else
			innerHTML="<img src='"+cpeImg+"'>";
	}
	top_div.appendChild(oDiv);

	//Init SIGNAL image Start
	with (oDiv=document.createElement("DIV")) {
		id="DIV_SIGNAL";
		className="signals";
		if (ie6flag)
			innerHTML="<img src='blank.gif' width='46' height='31' style=\"FILTER:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='signal.png',sizingMethod='image')\">";
		else
			innerHTML="<img src='signal.png'>";
	}
	top_div.appendChild(oDiv);

	//Init CHECK image Start
	with (oDiv=document.createElement("DIV")) {
		id="DIV_CHECK";
		className="check";
		style.zIndex=-1;
		if (ie6flag)
			innerHTML="<img src='blank.gif' width='32' height='31' style=\"FILTER:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='check.png',sizingMethod='image')\">";
		else
			innerHTML="<img src='check.png'>";
	}
	top_div.appendChild(oDiv);

	//Init UNCHECK image Start
	with (oDiv=document.createElement("DIV")) {
		id="DIV_UNCHECK";
		className="check";
		style.zIndex=-1;
		if (ie6flag)
			innerHTML="<img src='blank.gif' width='32' height='31' style=\"FILTER:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='uncheck.png',sizingMethod='image')\">";
		else
			innerHTML="<img src='uncheck.png'>";
	}
	top_div.appendChild(oDiv);

        //Init ETHERCHECK image Start
        with (oDiv=document.createElement("DIV")) {
                id="DIV_EtherCHECK";
                className="ethercheck";
                style.zIndex=-1;
                if (ie6flag)
                        innerHTML="<img src='blank.gif' width='32' height='31' style=\"FILTER:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='ether_check.png',sizingMethod='image')\">";
                else
                        innerHTML="<img src='ether_check.png'>";
        }
        top_div.appendChild(oDiv);

        //Init ETHERSIGNAL image Start
        with (oDiv=document.createElement("DIV")) {
                id="DIV_EtherSIGNAL";
                className="ethersignal";
                style.zIndex=-1;
                if (ie6flag)
                        innerHTML="<img src='blank.gif' width='32' height='31' style=\"FILTER:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='ether_signal.png',sizingMethod='image')\">";
                else
                        innerHTML="<img src='ether_signal.png'>";
        }
        top_div.appendChild(oDiv);

	// logout icon
	var oDiv1 = document.createElement("DIV");
	with (oDiv1) {
		id="DIV_LOGOUT";
		with (style) {
			position = "absolute";
			marginLeft = "661px";
			top = "42px";
		}
		if (ie6flag)
			innerHTML="<img src='blank.gif' width='48' height='48' title='Logout' onclick='top.window.location.replace(\"login.php\")' onmouseover=\"fFCP(this);this.style.filter='progid:DXImageTransform.Microsoft.AlphaImageLoader(src=logout2.png,sizingMethod=crop)'\" onmouseout=\"fFCD(this);this.style.filter='progid:DXImageTransform.Microsoft.AlphaImageLoader(src=logout.png,sizingMethod=crop)'\" style=\"FILTER:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='logout.png',sizingMethod='crop')\">";
		else
			innerHTML="<img src='logout.png' title='Logout' onclick='top.window.location.replace(\"login.php\")' onmouseover=\"fFCP(this);this.src='logout2.png'\" onmouseout=\"fFCD(this);this.src='logout.png'\">";
	}
	top_div.appendChild(oDiv1);

	// reboot icon
	with (oDiv=document.createElement("DIV")) {
		id="DIV_REBOOT";
		with (style) {
			position = "absolute";
			marginLeft = "710px";
			top = "42px";
		}
		if (ie6flag)
			innerHTML="<img src='blank.gif' width='48' height='48' title='Reboot' onclick='dialog(\"Reboot?\", \"Reboot()\")' onmouseover=\"fFCP(this);this.style.filter='progid:DXImageTransform.Microsoft.AlphaImageLoader(src=reboot2.png,sizingMethod=crop)'\" onmouseout=\"fFCD(this);this.style.filter='progid:DXImageTransform.Microsoft.AlphaImageLoader(src=reboot.png,sizingMethod=crop)'\" style=\"FILTER:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='reboot.png',sizingMethod='crop')\">";
		else
			innerHTML="<img src='reboot.png' title='Reboot' onclick='dialog(\"Reboot?\", \"Reboot()\")' onmouseover=\"fFCP(this);this.src='reboot2.png'\" onmouseout=\"fFCD(this);this.src='reboot.png'\">";
	}
	top_div.appendChild(oDiv);
}

function highlight_main_menu(url)
{
	var menu = url.split("_");
	menu = menu[0];

	for (var i=0;i<xitemlist.length-1;i++) {
		//var obj = GO("main_menu_"+xitemlist[i].id);
		var obj = GO("main_menu_"+i);
		with (obj) {
			obj.innerHTML = xitemlist[i].id;
			if (menu == xitemlist[i].pre) {
				menu = xitemlist[i].id;
				with (style) {
					if (ie6flag) {
						backgroundImage = "url('blank.gif')";
						filter="progid:DXImageTransform.Microsoft.AlphaImageLoader(src='main_menu2.png',sizingMethod='crop')";
						paddingBottom = "10px";
					} else
						backgroundImage="url('main_menu2.png')";
					cursor = "default";
					fontWeight = "bold";
					fontStyle = "oblique";
				}
				onmouseover = onmouseout = onclick = null;
			} else {

				with (style) {
					if (ie6flag) {
						backgroundImage = "url('blank.gif')";
						filter = "progid:DXImageTransform.Microsoft.AlphaImageLoader(src='main_menu.png',sizingMethod='crop')";
						paddingBottom = "10px";
					} else
						backgroundImage = "url('main_menu.png')";
					cursor = "pointer";
					fontWeight = "normal";
					fontStyle = "normal";
				}

				eval("obj.onclick = function(){if(loading == 1) {return;};page_refresh=0;highlight_main_menu('"+xitemlist[i].pre+"')}");
				obj.onmouseover = function(){style.fontWeight='bold'};
				obj.onmouseout = function(){style.fontWeight=''};

			}
		}
	}

	var oDiv;
	var top_div = GO("top_div");
	var i=xitemlist.length-1;
	//Init BUTTONBACKGROUND image Start
	with (oDiv=document.createElement("DIV")) {
		id="DIV_BUTTONBG";
		className="buttonbg";
		if (ie6flag)
			innerHTML = "<img src='blank.gif' width='46' height='31' style='FILTER:progid:DXImageTransform.Microsoft.AlphaImageLoader(src=\"buttonbackground_"+i+".png\",sizingMethod='scale')'>";
			//innerHTML="<img src='blank.gif' width='46' height='31' style=\"FILTER:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='buttonbackground.png',sizingMethod='scale')\">";
		else
			innerHTML=eval("\"<img src='buttonbackground_"+i+".png'>\"");
			//innerHTML="<img src='buttonbackground.png'>";
	}
	top_div.appendChild(oDiv);

	// Init sub_menu
	get_sub_menu(menu);
}
function get_sub_menu(menu)
{
	for(var i=0;i<xitemlist.length;i++)
	{
		if(xitemlist[i].id == menu)
		{
			xitem = xitemlist[i].menu;
			create_sub_menu();
			break;
		}
	}	
}

function create_sub_menu()
{
	var subMenu_div = GO("subMenu_div");
	var oDiv;
	var shift_value = 34;

	for (var i=subMenu_div.childNodes.length; i>0; i--) {
		subMenu_div.removeChild(subMenu_div.childNodes[i-1]);
	}

	//reset to blank page
	if(xitem.length == 0)
		child.location.replace("blank.php");

	for (var i=1; i<xitem.length; i++) {
		var img_name = "sub_menu.png";
		var x_size = "110";
		var y_size = "24";

		//img
		with (oDiv=document.createElement("DIV")) {
			id = "div_sMenu_img_"+xitem[i-1].URL;
			className="s_menu";
			if (ie6flag)
				innerHTML="<img src='blank.gif' id='img_text_"+i+"' width='"+ x_size +"' height='"+ y_size +"' style=\"FILTER:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='"+ img_name +"',sizingMethod='scale')\">";
			else
				innerHTML="<img id='img_text_"+i+"' src='"+ img_name +"'>";

			with (style) {
				top = 70 + (i-1)*shift_value + "px";
				zIndex = 500 - i;
			}
		}
		subMenu_div.appendChild(oDiv);

		//text
		with (oDiv=document.createElement("DIV")) {
			id="div_sMenu_text_"+xitem[i-1].URL;
			className="s_text";
			innerHTML="<table onclick='if(loading == 1) return;change_page(\""+xitem[i-1].URL+"\")' onmouseover='change_focus_over(\""+"div_sMenu_img_"+xitem[i-1].URL+"\")' onmouseout='change_focus_out()' width='120px' height='30px'><tr><td>"+xitem[i-1].name+"</td></tr></table>";
			with (style) {
				top = 67 + (i-1)*shift_value + "px";
			}
		}
		subMenu_div.appendChild(oDiv);
	}
	var timestamp=(new Date()).getTime();
	if(page_refresh == 1)
	{
		var page = GetCookie('page');
		window.frames[0].location.replace((page != null && page != "")?page+"?time="+timestamp:"status_wimax.php?time="+timestamp);
	}
	else
	{
		page_refresh = 0;
		window.frames[0].location.replace(xitem[0].URL+"?time="+timestamp);
	}
}

function change_focus_over(ID)
{
	GO(ID).style.zIndex = 1001;
}

function change_focus_out()
{
	var currentURL;
	with(child.location.href) {
		currentURL = substr(lastIndexOf('/')+1,length);
	}

	var subMenu_div = GO("subMenu_div");

	for (var i=0; i<subMenu_div.childNodes.length; i++) {
		with (subMenu_div.childNodes[i]) {
		if ("div_sMenu_img_"+currentURL == id)
			style.zIndex = 600;
		else if (className == "s_menu")
			style.zIndex = 500 - i/2 - 1;
		}
	}
}

function change_page(pageURL)
{
	var currentURL = child.inner_url;

	if (currentURL != pageURL) {
		child.location.replace(pageURL+"?time="+(new Date()).getTime());
	}
}


function change_signal(strength)
{
	GO("DIV_CHECK").style.zIndex = (strength > 0)? 1000 : -1;
	GO("DIV_UNCHECK").style.zIndex = (strength > 0)? -1 : 1000;
	if (strength < 0) strength *= -1;
	GO("DIV_SIGNAL").style.width = (strength==0)? "0px" : (strength*10)+"px";
	//GO("DIV_SIGNAL").style.width = (strength==0)? "0px" : (strength*8-2)+"px";
}



function isEmptyObject(o)
{
	for (var p in o) return false;
	return true;
}

function dialog(question, yesOnClick, noOnClick)
{
	var oDiv = GO("mask");
	var top_div = GO("top_div");
	var contentHtml="<table style='height:150px'><tr><td style='height:100px' align=center colspan='4'><div style='height:100px;width:340px;overflow:auto;'><table style='height:100px'><tr><td align=center>"+question+"</td></tr></table></div></td></tr><tr><td style='width:75px'></td><td id=\"btnYes\" style='height:40px;width:120px' class='btn_dialog' onmouseover=\"fFOB(this)\" onmouseout=\"fFNN(this)\" onclick=\"GO('btnYes').style.display='none';GO('btnNo').style.display='none';"+yesOnClick+"\">Yes</td><td id=\"btnNo\" style='height:40px;width:120px' class='btn_dialog' onmouseover=\"fFOB(this)\" onmouseout=\"fFNN(this)\" onclick=\"GO('dialog').style.visibility=GO('mask').style.visibility='hidden';showAllSelect();"+noOnClick+"\">No</td><td style='width:75px'></td></tr></table>";

	if (isEmptyObject(oDiv)) {
		with (oDiv=document.createElement("DIV")) {
			id="mask";
			className="mask";
		}
		top_div.appendChild(oDiv);
	} else
		oDiv.style.visibility="visible";

	oDiv = GO("dialog");
	if (isEmptyObject(oDiv)) {
		with (oDiv=document.createElement("DIV")) {
			id="dialog";
			className="alert";
			if (ie6flag) hideAllSelect();
			innerHTML=contentHtml;
		}
		top_div.appendChild(oDiv);
	} else {
		if (ie6flag) hideAllSelect();
		oDiv.innerHTML=contentHtml;
		oDiv.style.visibility="visible";
	}
}

function hideAllSelect()
{
	var allSelectTags = child.document.getElementsByTagName("select");
	for (i=0; i<allSelectTags.length; i++)
		allSelectTags[i].style.visibility="hidden";
}

function showAllSelect()
{
	var allSelectTags = child.document.getElementsByTagName("select");
	for (i=0; i<allSelectTags.length; i++)
		allSelectTags[i].style.visibility="visible";
}

function GO(key)
{
	return document.getElementById(key);
}

function Reboot()
{
	location.href = "reboot.php";
}


/***********************************************************************/
/***********************************************************************/
/**********************AJAX SECTION START**********************/
/***********************************************************************/
/***********************************************************************/

var errCnt=0,sub_errTime=2500,key_errTime=2500;
var get_statusTime=2500;
//var get_keyTime=3000;

function ajax_get_sub_menu_list(menu)
{
	if(errCnt > 5)
	{
                alert("error1");
		location.href = "timeout.php";                
	}
	else
	{
		$.ajax(
			{
				url:"ajax.php",
					data:{
					action:"submenulist",
					sid:sid,
					cache:false,
					time:(new Date()).getTime()
				},
				success:function(response){
					var token = response.split(";");
					eval("xitemlist = "+token[0]);
					firmwareVersion = token[1];
					if(token[2]  == "TimeOut")
						location.href = "timeout.php";
					else
					{
						eval("uitems = "+token[2]);
						GO("version").innerHTML="Firmware version:<br/>"+firmwareVersion;
						highlight_main_menu(menu);
					}
					errCnt=0;
					/*if (sub_errTime > 2000)
					{
						sub_errTime=sub_errTime-500;
						alert(sub_errTime);
					}*/
				},
				timeout:sub_errTime,
				error:function(xhr)
				{
					//alert(errCnt);
					//alert(sub_errTime);
					errCnt++;
					sub_errTime= sub_errTime + 500;
					//sub_errTime= 2500 + (errCnt * 500);
					ajax_get_sub_menu_list(menu);
					//location.reload();
				}
			}
		);
	}
}

function ajax_get_ether_signals()
{
        if (GO("DIV_UNCHECK").style.zIndex == 1000)
        {
                GO("DIV_EtherCHECK").style.zIndex = -1;
                GO("DIV_EtherSIGNAL").style.zIndex = -1;
        }
        else 
        {
        	$.ajax(
                	{
                        	url:"ajax.php",
                        	data:{
                                	action:"ether_signal",
                                	cache:false,
             	                   	time:(new Date()).getTime()
                	        },
                        	success:function(response){
          	                    	GO("DIV_EtherSIGNAL").style.zIndex = (response > 0)? 1000 : -1;
                	                GO("DIV_EtherCHECK").style.zIndex = (response > 0)? 1000 : -1;
                        	},
   	                	timeout:2000,
        	                error:function(xhr)
                	        {}
           		}
        	);
        }
}

function ajax_get_signals()
{
	if (typeof ajax_get_signals.errCounter == 'undefined')
		ajax_get_signals.errCounter = 0;

	$.ajax(
		{
			url:"ajax.php",
			data:{
				action:"signal",
				cache:false,
				time:(new Date()).getTime()
			},
			success:function(response){
				if (response == "")
				{
					if (ajax_get_signals.errCounter >= 7)
						location.href = "timeout.php";
					ajax_get_signals.errCounter++;
					//alert(ajax_get_signals.errCounter);
				} else {
					change_signal(response);
					ajax_get_signals.errCounter = 0;
				}
			},
			timeout:2000,
			error:function(xhr)
			{}
		}
	);
}

function ajax_get_key() 
{
	if(errCnt > 5)
	{
		location.href = "timeout.php";
	}
	else
	{
		$.ajax(
			{
				url:"ajax.php",
				data:{
					action:"tag_init_" + child.inner_url,
					cache:false,
					time:(new Date()).getTime()
				},
				success:function(response){
					child.InitDisplay(response);
					errCnt=0;
					if (key_errTime > 2000)
					{
						key_errTime=key_errTime-500;
					}
				},
				timeout:key_errTime,
				error:function(xhr)
				{
					//alert(errCnt);
					//alert(key_errTime);
					//alert(get_keyTime);
					errCnt++;
					key_errTime= key_errTime + 500;
					//get_keyTime= 3000 + (errCnt * 500);
					//key_errTime= 3000 + (errCnt * 500);
					ajax_get_key();
					//location.reload();
				}
			}
		);
	}
}	


function ajax_factoryreset()
{
	$.ajax(
		{
			url:"ajax.php",
			data:{
				action:"tag_factory_default",
				cache:false,
				time:(new Date()).getTime()
			},
			success:function(response){
				if(response != "")
					location.href = "reboot.php?ip=" + response;
				else
					location.href = "reboot.php";
			},
			timeout:20000,
			error:function(xhr)
			{
				location.href = "reboot.php";
			}
		}
	);
}



/***********************************************************************/
/***********************************************************************/
/**********************AJAX SECTION END**********************/
/***********************************************************************/
/***********************************************************************/

