<?php 
   $action = $_GET['action'];
   
   if ($action == "submenulist")
   {       
       echo "[{id:'Status',pre:'status',url:'status_wimax.php',menu:[{name:'WiMAX Status',URL:'status_wimax.php'},{name:'Network Status',URL:'status_networking.php'},{name:'Device Status',URL:'status_device.php'},{name:'VoIP',URL:'status_voip.php'},{}]},{id:'Personalization',pre:'personal',url:'personal_account.php',menu:[{name:'Account',URL:'personal_account.php'},{name:'Date',URL:'personal_date.php'},{}]},{id:'WiMAX',pre:'wimax',url:'wimax_scanner.php',menu:[{name:'Scanner',URL:'wimax_scanner.php'},{name:'Authentication',URL:'wimax_auth.php'},{}]},{id:'Networking',pre:'net',url:'net_voip.php',menu:[{name:'VoIP',URL:'net_voip.php'},{name:'WIFI',URL:'net_wifi_setting.php'},{name:'NAT Mode',URL:'net_bridge_nat_mode.php'},{name:'Firewall',URL:'net_firewall.php'},{name:'DHCP Server',URL:'net_dhcp.php'},{name:'NAT ALG',URL:'net_alg.php'},{name:'Forwarding',URL:'net_port_forwarding.php'},{name:'Trigger',URL:'net_port_trigger.php'},{name:'DDNS',URL:'net_ddns.php'},{name:'UPNP',URL:'net_upnp.php'},{}]},{id:'Management',pre:'manage',url:'manage_tr069.php',menu:[{name:'TR-069',URL:'manage_tr069.php'},{name:'OMA-DM',URL:'manage_omadm.php'},{name:'SNMP',URL:'manage_snmp.php'},{name:'Log',URL:'manage_log.php'},{name:'Upgrade',URL:'manage_upgrade.php'},{name:'Recovery',URL:'manage_recovery.php'},{name:'Ping',URL:'manage_dping.php'},{}]},{}];v2.8.8.1-g1.4.2-gp;{\"status_wimax.php\":{\"field_system\":\"2\",\"field_phy\":\"2\",\"field_uplink\":\"2\",\"field_downlink\":\"2\",\"ssBSID\":\"2\",\"ssFreq\":\"2\",\"RSSI\":\"2\",\"CINR\":\"2\",\"TxPower\":\"2\",\"rft\":\"2\",\"ulBytes\":\"2\",\"dlBytes\":\"2\",\"uptime\":\"2\",\"ssBandwidth\":\"2\",\"devState\":\"2\",\"macState\":\"2\",\"ul_mcs\":\"2\",\"dl_mcs\":\"2\",\"tx_rate\":\"2\",\"rx_rate\":\"2\",\"sf\":\"2\",\"SIGNAL_METER\":\"0\"},\"status_networking.php\":{\"field_lan\":\"2\",\"field_wan\":\"2\",\"LanIP\":\"2\",\"LanMask\":\"2\",\"LanMac\":\"2\",\"WanType\":\"2\",\"WanIP\":\"2\",\"WanMask\":\"2\",\"WanGateway\":\"2\",\"WanMac\":\"2\",\"IspDns\":\"2\"},\"status_device.php\":{\"SYS_MODEL\":\"2\",\"FW_VER\":\"2\",\"FW_BUILT\":\"2\",\"FREQ_RANGE\":\"2\",\"SERIAL\":\"2\"},\"status_voip.php\":{\"Register_Status_1\":\"2\",\"Call_Status_1\":\"2\",\"Sub_Num_1\":\"2\",\"Register_Status_2\":\"2\",\"Call_Status_2\":\"2\",\"Sub_Num_2\":\"2\"},\"net_voip.php\":{\"TD_Register\":\"3\",\"TD_Proxy\":\"3\",\"TD_Outbound\":\"3\",\"TD_Nat\":\"3\",\"TD_Basic\":\"3\",\"TD_Advance\":\"3\",\"TD_Codec\":\"3\",\"TD_Caller\":\"3\",\"TD_FXS\":\"3\",\"TD_Provision\":\"3\",\"VOIP_SERVER_REGISTRAR_ADDR\":\"3\",\"VOIP_SERVER_REGISTRAR_PORT\":\"3\",\"VOIP_SERVER_REGISTRAR_EXPIRY\":\"3\",\"VOIP_SERVER_PROXY_ADDR\":\"3\",\"VOIP_SERVER_PROXY_PORT\":\"3\",\"VOIP_SERVER_OUTBOUND_ADDR\":\"3\",\"VOIP_SERVER_OUTBOUND_PORT\":\"3\",\"VOIP_SERVER_STUN_ADDR\":\"3\",\"VOIP_SERVER_STUN_PORT\":\"3\",\"VOIP_COMM_SIP_DOMAIN\":\"3\",\"VOIP_FXS_1_USERNAME\":\"3\",\"VOIP_FXS_1_DISPLAYNAME\":\"3\",\"VOIP_FXS_1_AUTHNAME\":\"3\",\"VOIP_FXS_1_PASSWORD\":\"3\",\"VOIP_FXS_1_AUTO_DECLINE\":\"3\",\"VOIP_FXS_1_DND\":\"3\",\"VOIP_FXS_1_HIDE_USER_ID\":\"3\",\"VOIP_FXS_1_DTMF\":\"3\",\"VOIP_FXS_1_PREFER_1ST_CODEC\":\"3\",\"VOIP_FXS_1_PREFER_2ND_CODEC\":\"3\",\"VOIP_FXS_1_PREFER_3RD_CODEC\":\"3\",\"VOIP_FXS_1_PREFER_4TH_CODEC\":\"3\",\"VOIP_FXS_1_PREFER_5TH_CODEC\":\"3\",\"VOIP_FXS_1_PREFER_6TH_CODEC\":\"3\",\"VOIP_FXS_1_PREFER_7TH_CODEC\":\"3\",\"VOIP_FXS_1_PREFER_8TH_CODEC\":\"3\",\"VOIP_FXS_1_PREFER_9TH_CODEC\":\"3\",\"VOIP_PROF1_LINE1_ENABLE\":\"3\",\"VOIP_FXS_1_VAD\":\"3\",\"VOIP_FXS_1_CALLERID_TYPE\":\"3\",\"VOIP_FXS_1_CALLERID_DISP\":\"3\",\"VOIP_FXS_1_CALLERID_POWER\":\"3\",\"VOIP_AUTO_PROVISION_ENABLE\":\"3\",\"VOIP_AUTO_PROVISION_FTP_ADDRESS\":\"3\",\"VOIP_AUTO_PROVISION_FTP_TIMEOUT\":\"3\",\"VOIP_AUTO_PROVISION_FTP_RETRY\":\"3\",\"VOIP_AUTO_PROVISION_FTP_FILE_NAME\":\"3\",\"VOIP_AUTO_PROVISION_FTP_USER_NAME\":\"3\",\"VOIP_AUTO_PROVISION_FTP_USER_PASSWORD\":\"3\",\"VOIP_FXS_1_FLASH_DET_UPLV\":\"3\",\"VOIP_FXS_1_FLASH_DET_LOWLV\":\"3\",\"VOIP_FXS_1_VOGAIN_TX_LV\":\"3\",\"VOIP_FXS_1_VOGAIN_RX_LV\":\"3\",\"VOIP_FXS_1_TONE_TYPE\":\"3\",\"VOIP_FXS_1_RING_IMPEDENCE\":\"3\",\"VOIP_FXS_2_USERNAME\":\"3\",\"VOIP_FXS_2_DISPLAYNAME\":\"3\",\"VOIP_FXS_2_AUTHNAME\":\"3\",\"VOIP_FXS_2_PASSWORD\":\"3\",\"VOIP_FXS_2_AUTO_DECLINE\":\"3\",\"VOIP_FXS_2_DND\":\"3\",\"VOIP_FXS_2_HIDE_USER_ID\":\"3\",\"VOIP_FXS_2_DTMF\":\"3\",\"VOIP_FXS_2_PREFER_1ST_CODEC\":\"3\",\"VOIP_FXS_2_PREFER_2ND_CODEC\":\"3\",\"VOIP_FXS_2_PREFER_3RD_CODEC\":\"3\",\"VOIP_FXS_2_PREFER_4TH_CODEC\":\"3\",\"VOIP_FXS_2_PREFER_5TH_CODEC\":\"3\",\"VOIP_FXS_2_PREFER_6TH_CODEC\":\"3\",\"VOIP_FXS_2_PREFER_7TH_CODEC\":\"3\",\"VOIP_FXS_2_PREFER_8TH_CODEC\":\"3\",\"VOIP_FXS_2_PREFER_9TH_CODEC\":\"3\",\"VOIP_PROF1_LINE2_ENABLE\":\"3\",\"VOIP_FXS_2_VAD\":\"3\",\"VOIP_FXS_2_CALLERID_TYPE\":\"3\",\"VOIP_FXS_2_CALLERID_DISP\":\"3\",\"VOIP_FXS_2_CALLERID_POWER\":\"3\",\"VOIP_FXS_2_FLASH_DET_UPLV\":\"3\",\"VOIP_FXS_2_FLASH_DET_LOWLV\":\"3\",\"VOIP_FXS_2_VOGAIN_TX_LV\":\"3\",\"VOIP_FXS_2_VOGAIN_RX_LV\":\"3\",\"VOIP_FXS_2_TONE_TYPE\":\"3\",\"VOIP_FXS_2_RING_IMPEDENCE\":\"3\"},\"net_bridge_nat_mode.php\":{\"WAN_OP_MODE\":\"3\",\"WAN_TYPE\":\"3\",\"WAN_IP\":\"3\",\"WAN_MASK\":\"3\",\"WAN_GATEWAY\":\"3\",\"LAN_IP\":\"3\",\"LAN_MASK\":\"3\",\"LAN_MTU\":\"3\",\"WAN_MTU\":\"3\",\"WAN_DNS\":\"3\"},\"net_lan.php\":{\"LAN_IP\":\"0\",\"LAN_MASK\":\"0\"},\"net_firewall.php\":{\"cpe_access_control\":\"2\",\"NETFILTER_DMZ_HOST\":\"3\",\"NETFILTER_FW_IPFILTER\":\"3\",\"MGMT_WEB_WAN\":\"3\",\"MGMT_TELNET_WAN\":\"3\"},\"net_port_forwarding.php\":{\"NETFILTER_NAT_FORWARD\":\"3\"},\"net_port_trigger.php\":{\"NETFILTER_NAT_TRIGGER\":\"3\"},\"net_dhcp.php\":{\"DHCPD_ENABLE\":\"3\",\"DHCPD_START_IP\":\"3\",\"DHCPD_END_IP\":\"3\",\"DHCPD_LEASE_TIME\":\"3\",\"DHCPD_DNS\":\"3\",\"DHCPD_STATIC_LEASE\":\"3\"},\"net_alg.php\":{\"NETFILTER_ALG_FTP\":\"3\",\"NETFILTER_ALG_H323\":\"3\",\"NETFILTER_ALG_PPTP\":\"3\",\"NETFILTER_ALG_SIP_SET_BSID\":\"3\"},\"net_ddns.php\":{\"DDNS_ENABLE\":\"3\",\"DDNS_PROVIDER\":\"3\",\"DDNS_TYPE\":\"3\",\"DDNS_HOST\":\"3\",\"DDNS_DOMAIN\":\"3\",\"DDNS_USERNAME\":\"3\",\"DDNS_PASSWORD\":\"3\"},\"net_upnp.php\":{\"UPNP_ENABLE_UPNP\":\"3\",\"UPNP_ENABLE_NATPMP\":\"3\"},\"manage_tr069.php\":{\"TR_ENABLE\":\"3\",\"TR_ACS_URL\":\"3\",\"TR_ACS_USER\":\"3\",\"TR_ACS_PASS\":\"3\",\"TR_INFORM_ENABLE\":\"3\",\"TR_INFORM_INTERVAL\":\"3\",\"TR_CR_USER\":\"3\",\"TR_CR_PASS\":\"3\",\"TR_CA_CERT\":\"3\",\"TR_CLI_CERT\":\"3\"},\"manage_omadm.php\":{\"DM_ENABLE\":\"3\",\"DM_SERVER_URL\":\"3\",\"DM_SERVER_PORT\":\"3\",\"DM_SERVER_AUTH\":\"3\",\"DM_SERVER_ID\":\"3\",\"DM_SERVER_PW\":\"3\",\"DM_CLIENT_AUTH\":\"3\",\"DM_CLIENT_ID\":\"3\",\"DM_CLIENT_PW\":\"3\",\"DM_INTERVAL_ENABLE\":\"3\",\"DM_INTERVAL\":\"3\"},\"manage_upgrade.php\":{\"WebUpgrade\":\"3\"},\"manage_recovery.php\":{\"FactoryDefault\":\"3\",\"TD_Backup\":\"3\",\"BackupSetting\":\"0\"},\"manage_log.php\":{\"Log\":\"3\"},\"wimax_scanner.php\":{\"START_STOP_WIMAX\":\"3\",\"CHANNEL_TABLE\":\"3\",\"editScanner\":\"3\"},\"wimax_auth.php\":{\"WMX_EAP_Mode\":\"3\",\"WMX_INNER_MODE\":\"3\",\"WMX_USER_NAME\":\"3\",\"WMX_PASSW\":\"3\",\"WMX_ANONYMOUS_ID\":\"3\",\"CA_CERT\":\"3\",\"USER_CERT\":\"3\",\"PRIVATE_KEY\":\"3\",\"WMX_AUTO_PREPEND\":\"3\",\"WMX_RANDOM_OUTER_ID\":\"3\",\"WMX_IGNORE_CERT\":\"3\",\"WMX_SAME_EAP_OUTER_ID\":\"3\",\"WMX_MAC_IN_OUTER_ID\":\"3\",\"WMX_PRIVATE_KEY_PASSW\":\"3\"},\"personal_date.php\":{\"SYNCWITHPC\":\"3\",\"NTP_ENABLE\":\"3\",\"NTP_SERVER\":\"3\",\"TimeZone\":\"3\",\"TZ_DST_ENABLE\":\"3\"},\"net_wifi_setting.php\":{\"START_STOP_WIFI\":\"3\",\"WirelessMode\":\"3\",\"Channel\":\"3\",\"TxPower\":\"3\",\"TxBurst\":\"3\",\"BeaconPeriod\":\"3\",\"BssidNum\":\"3\",\"NoForwardingBTNBSSID\":\"3\"},\"manage_snmp.php\":{\"SNMPD_ENABLE\":\"3\",\"SYSLOCATION\":\"3\",\"SYSCONTACT\":\"3\",\"ROCOMMUNITY\":\"3\",\"RWCOMMUNITY\":\"3\"},\"manage_dping.php\":{}}\n";
   }
   else
   if ($action == "tag_get_wimax_scanner")
   {
       echo "[{\"Freq\":\"2685000\",\"BW\":\"5000\"},{\"Freq\":\"2685000\",\"BW\":\"7000\"},{\"Freq\":\"2685000\",\"BW\":\"10000\"},{\"Freq\":\"2630000\",\"BW\":\"5000\"},{\"Freq\":\"2630000\",\"BW\":\"7000\"},{\"Freq\":\"2630000\",\"BW\":\"10000\"},{\"Freq\":\"2650000\",\"BW\":\"5000\"},{\"Freq\":\"2650000\",\"BW\":\"7000\"},{\"Freq\":\"2650000\",\"BW\":\"10000\"}];[];0\n";
   }
   else
   if ($action == "tag_init_net_wifi_setting.php")
   {
       echo "9#9#75#1#343#1#0#0#1#16#1#WIXFMR-111#1\n";
   }
   else
   if ($action == "net_wifi_setting")
   {
       echo "<script language='javascript'>location.href='net_wifi_bssid.php';</script>\n";
   }   
   else
   if ($action == "action=tag_init_net_wifi_bssid.php")
   {
       echo "3600#0000000000#B04CF35DE8#B04CF35DE8#B04CF35DE8#B04CF35DE8#192.168.0.1#1812#00000#0C45E6#0#0#343#1#0000000000#6A46CB8C62#6A46CB8C62#6A46CB8C62#6A46CB8C62#0C45E7#0#OPEN;OPEN#WEP;WEP#0;0#1;1#0;0####0#1#0C45E6,B04CF35DE8\n";
   }
   else
   if ($action == "net_wifi_bssid")
   {
      echo "<script language='javascript'>location.href='net_wifi_setting.php';</script>\n";
   }
   else
   if ($action == "tag_init_net_bridge_nat_mode.php")
   {
      echo "2;2;0.0.0.0;0.0.0.0;0.0.0.0;10.1.1.254;255.255.255.0;1500;1400;1,0.0.0.0 1,0.0.0.0 1,0.0.0.0\n";
   }
   else
   if ($action == "tag_init_net_firewall.php")
   {
      echo "0.0.0.0;@1,Y,100.0.0.0/8,22456,10.1.1.0/24,22555,2,1;1;1\n";
   }
   else
   if ($action == "tag_init_net_dhcp.php")
   {
      echo "1;10.1.1.100;10.1.1.199;1440;1,0.0.0.0 1,0.0.0.0 1,0.0.0.0;\n";
   }
   else
   if ($action == "tag_init_net_alg.php")
   {
      echo "1;1;1;0\n";
   }
   else
   if ($action == "tag_init_net_port_forwarding.php")
   {
      echo "@1,N,t1,0,200-201,300-301,10.1.1.50\n";
   }
   else
   if ($action == "tag_init_net_port_trigger.php")
   {
      echo "@1,Y,IRC,0,6667-7000,0,113-113\n";
   }
   else
   if ($action == "tag_init_net_ddns.php")
   {
      echo "0;0;0;;;;\n";
   }
   else
   if ($action == "tag_init_net_upnp.php")
   {
      echo "0;0\n";
   }   
   else
   if ($action == "tag_init_manage_tr069.php")
   {
      echo "1;http://10.1.1.69:8080/ftacs-basic/ACS;tr069;tr069;1;86400;dps;dps;1;1\n";
   }
   else
   if ($action == "tag_init_manage_omadm.php")
   {
      echo "0;;;NONE;;;NONE;;;1;3600\n";
   }
   else
   if ($action == "tag_init_manage_snmp.php")
   {
      echo "0;;;public;private\n";
   }
   else
   if ($action == "tag_LogMsg")
   {
      echo "Feb  6 00:41:23 mt71x9 daemon.info [WMXD]: WiMAX device state transition from READY to SCANNING\n"; 
      echo "Feb  6 00:41:24 mt71x9 daemon.info [WMXD]: WiMAX device state transition from SCANNING to READY\n"; 
      echo "Feb  6 00:41:54 mt71x9 daemon.info [WMXD]: WiMAX device state transition from READY to SCANNING\n"; 
   }
   else
   if ($action == "tag_ipPing")
   {
      echo "PING 10.1.1.3 (10.1.1.3) 56(84) bytes of data.\n"; 
      echo "From 10.1.1.254 icmp_seq=2 Destination Host Unreachable\n"; 
      echo "From 10.1.1.254 icmp_seq=3 Destination Host Unreachable\n"; 
      echo "From 10.1.1.254 icmp_seq=4 Destination Host Unreachable\n"; 
      echo "\n"; 
      echo "--- 10.1.1.3 ping statistics ---\n"; 
      echo "4 packets transmitted, 0 received, +3 errors, 100% packet loss, time 3000ms\n"; 
      echo ", pipe 3\n"; 
      echo "\n";
   }
   
   else
   {
       echo "0;\n";
   }   
 ?> 