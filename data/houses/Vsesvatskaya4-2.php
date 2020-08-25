<?php		
//$this->flat = $_POST['flat']		
$this->ipAddres ="192.168.1.214";

if ($this->flat>0 && $this->flat<23){$this->rsNum = "40";}
elseif (($this->flat>22 && $this->flat<44)) {$this->rsNum = "41";}
elseif (($this->flat>43 && $this->flat<65)) {$this->rsNum = "42";}
elseif (($this->flat>64 && $this->flat<85)) {$this->rsNum = "43";}
elseif (($this->flat>84 && $this->flat<104)) {$this->rsNum = "44";}
elseif (($this->flat>103 && $this->flat<125)) {$this->rsNum = "45";}
		
switch ($this->flat) {		
case"1":$this->sensors = array("BTS2_VD0_1200026","ХВС","BTS2_VD1_1200026","ГВС","BTS2_VD2_1200026","ХВС2","BTS2_VD3_1200026","ГВС2","MRC2_10732141");	$this->chanals= array(0,1,1,1,2,1,3,1);	 break;
case"2":$this->sensors = array("BTS2_VD4_1200026","ХВС","BTS2_VD5_1200026","ГВС","0","ХВС2","0","ГВС2","MRC2_10731996");	$this->chanals= array(4,1,5,1);	 break;
case"3":$this->sensors = array("BTS2_VD6_1200026","ХВС","BTS2_VD7_1200026","ГВС","0","ХВС2","0","ГВС2","MRC2_10732138");	$this->chanals= array(6,1,7,1);	 break;
case"4":$this->sensors = array("BTS2_VD0_1200019","ХВС","BTS2_VD1_1200019","ГВС","0","ХВС2","0","ГВС2","MRC2_10732105");	$this->chanals= array(0,2,1,2);	 break;
case"5":$this->sensors = array("BTS2_VD2_1200019","ХВС","BTS2_VD3_1200019","ГВС","BTS2_VD4_1200019","ХВС2","BTS2_VD5_1200019","ГВС2","MRC2_10731972");	$this->chanals= array(2,2,3,2,4,2,5,2);	 break;
case"6":$this->sensors = array("BTS2_VD6_1200019","ХВС","BTS2_VD7_1200019","ГВС","BTS2_VD0_1200110","ХВС2","BTS2_VD1_1200110","ГВС2","MRC2_10732008");	$this->chanals= array(6,2,7,2,0,3,1,3);	 break;
case"7":$this->sensors = array("BTS2_VD2_1200110","ХВС","BTS2_VD3_1200110","ГВС","0","ХВС2","0","ГВС2","MRC2_10732134");	$this->chanals= array(2,3,3,3);	 break;
case"8":$this->sensors = array("BTS2_VD4_1200110","ХВС","BTS2_VD5_1200110","ГВС","0","ХВС2","0","ГВС2","MRC2_10732009");	$this->chanals= array(4,3,5,3);	 break;
case"9":$this->sensors = array("BTS2_VD6_1200110","ХВС","BTS2_VD7_1200110","ГВС","0","ХВС2","0","ГВС2","MRC2_10731854");	$this->chanals= array(6,3,7,3);	 break;
case"10":$this->sensors = array("BTS2_VD0_1200016","ХВС","BTS2_VD1_1200016","ГВС","BTS2_VD2_1200016","ХВС2","BTS2_VD3_1200016","ГВС2","MRC2_10732103");	$this->chanals= array(0,4,1,4,2,4,3,4);	 break;
case"11":$this->sensors = array("BTS2_VD4_1200016","ХВС","BTS2_VD5_1200016","ГВС","BTS2_VD6_1200016","ХВС2","BTS2_VD7_1200016","ГВС2","MRC2_10721481");	$this->chanals= array(4,4,5,4,6,4,7,4);	 break;
case"12":$this->sensors = array("BTS2_VD0_1200059","ХВС","BTS2_VD1_1200059","ГВС","0","ХВС2","0","ГВС2","MRC2_10732089");	$this->chanals= array(0,5,1,5);	 break;
case"13":$this->sensors = array("BTS2_VD2_1200059","ХВС","BTS2_VD3_1200059","ГВС","0","ХВС2","0","ГВС2","MRC2_10722313");	$this->chanals= array(2,5,3,5);	 break;
case"14":$this->sensors = array("BTS2_VD4_1200059","ХВС","BTS2_VD5_1200059","ГВС","0","ХВС2","0","ГВС2","MRC2_10722203");	$this->chanals= array(4,5,5,5);	 break;
case"15":$this->sensors = array("BTS2_VD6_1200059","ХВС","BTS2_VD7_1200059","ГВС","BTS2_VD0_1200074","ХВС2","BTS2_VD1_1200074","ГВС2","MRC2_10722278");	$this->chanals= array(6,5,7,5,0,6,1,6);	 break;
case"16":$this->sensors = array("BTS2_VD2_1200074","ХВС","BTS2_VD3_1200074","ГВС","0","ХВС2","0","ГВС2","MRC2_10721592");	$this->chanals= array(2,6,3,6);	 break;
case"17":$this->sensors = array("BTS2_VD4_1200074","ХВС","BTS2_VD5_1200074","ГВС","0","ХВС2","0","ГВС2","MRC2_10732094");	$this->chanals= array(4,6,5,6);	 break;
case"18":$this->sensors = array("BTS2_VD6_1200074","ХВС","BTS2_VD7_1200074","ГВС","0","ХВС2","0","ГВС2","MRC2_10722310");	$this->chanals= array(6,6,7,6);	 break;
case"19":$this->sensors = array("BTS2_VD0_1200109","ХВС","BTS2_VD1_1200109","ГВС","0","ХВС2","0","ГВС2","MRC2_10722298");	$this->chanals= array(0,7,1,7);	 break;
case"20":$this->sensors = array("BTS2_VD2_1200109","ХВС","BTS2_VD3_1200109","ГВС","0","ХВС2","0","ГВС2","MRC2_10722306");	$this->chanals= array(2,7,3,7);	 break;
case"21":$this->sensors = array("BTS2_VD4_1200109","ХВС","BTS2_VD5_1200109","ГВС","0","ХВС2","0","ГВС2","MRC2_10731852");	$this->chanals= array(4,7,5,7);	 break;
case"22":$this->sensors = array("BTS2_VD6_1200109","ХВС","BTS2_VD7_1200109","ГВС","0","ХВС2","0","ГВС2","MRC2_10721696");	$this->chanals= array(6,7,7,7);	 break;
case"23":$this->sensors = array("BTS2_VD0_1200004","ХВС","BTS2_VD1_1200004","ГВС","0","ХВС2","0","ГВС2","MRC2_10722305");	$this->chanals= array(0,8,1,8);	 break;
case"24":$this->sensors = array("BTS2_VD2_1200004","ХВС","BTS2_VD3_1200004","ГВС","0","ХВС2","0","ГВС2","MRC2_10722253");	$this->chanals= array(2,8,3,8);	 break;
case"25":$this->sensors = array("BTS2_VD4_1200004","ХВС","BTS2_VD5_1200004","ГВС","0","ХВС2","0","ГВС2","MRC2_10732016");	$this->chanals= array(4,8,5,8);	 break;
case"26":$this->sensors = array("BTS2_VD6_1200004","ХВС","BTS2_VD7_1200004","ГВС","0","ХВС2","0","ГВС2","MRC2_10722319");	$this->chanals= array(6,8,7,8);	 break;
case"27":$this->sensors = array("BTS2_VD0_1200017","ХВС","BTS2_VD1_1200017","ГВС","0","ХВС2","0","ГВС2","MRC2_10732143");	$this->chanals= array(0,9,1,9);	 break;
case"28":$this->sensors = array("BTS2_VD2_1200017","ХВС","BTS2_VD3_1200017","ГВС","0","ХВС2","0","ГВС2","MRC2_10722201");	$this->chanals= array(2,9,3,9);	 break;
case"29":$this->sensors = array("BTS2_VD4_1200017","ХВС","BTS2_VD5_1200017","ГВС","0","ХВС2","0","ГВС2","MRC2_10722147");	$this->chanals= array(4,9,5,9);	 break;
case"30":$this->sensors = array("BTS2_VD6_1200017","ХВС","BTS2_VD7_1200017","ГВС","0","ХВС2","0","ГВС2","MRC2_10722316");	$this->chanals= array(6,9,7,9);	 break;
case"31":$this->sensors = array("BTS2_VD0_1200015","ХВС","BTS2_VD1_1200015","ГВС","0","ХВС2","0","ГВС2","MRC2_10732113");	$this->chanals= array(0,10,1,10);	 break;
case"32":$this->sensors = array("BTS2_VD2_1200015","ХВС","BTS2_VD3_1200015","ГВС","0","ХВС2","0","ГВС2","MRC2_10732109");	$this->chanals= array(2,10,3,10);	 break;
case"33":$this->sensors = array("BTS2_VD4_1200015","ХВС","BTS2_VD5_1200015","ГВС","0","ХВС2","0","ГВС2","MRC2_10722291");	$this->chanals= array(4,10,5,10);	 break;
case"34":$this->sensors = array("BTS2_VD6_1200015","ХВС","BTS2_VD7_1200015","ГВС","0","ХВС2","0","ГВС2","MRC2_10721659");	$this->chanals= array(6,10,7,10);	 break;
case"35":$this->sensors = array("BTS2_VD0_1200035","ХВС","BTS2_VD1_1200035","ГВС","0","ХВС2","0","ГВС2","MRC2_10722284");	$this->chanals= array(0,11,1,11);	 break;
case"36":$this->sensors = array("BTS2_VD2_1200035","ХВС","BTS2_VD3_1200035","ГВС","0","ХВС2","0","ГВС2","MRC2_10721502");	$this->chanals= array(2,11,3,11);	 break;
case"37":$this->sensors = array("BTS2_VD4_1200035","ХВС","BTS2_VD5_1200035","ГВС","0","ХВС2","0","ГВС2","MRC2_10721747");	$this->chanals= array(4,11,5,11);	 break;
case"38":$this->sensors = array("BTS2_VD6_1200035","ХВС","BTS2_VD7_1200035","ГВС","0","ХВС2","0","ГВС2","MRC2_10722281");	$this->chanals= array(6,11,7,11);	 break;
case"39":$this->sensors = array("BTS2_VD0_1200079","ХВС","BTS2_VD1_1200079","ГВС","0","ХВС2","0","ГВС2","MRC2_10721793");	$this->chanals= array(0,12,1,12);	 break;
case"40":$this->sensors = array("BTS2_VD2_1200079","ХВС","BTS2_VD3_1200079","ГВС","0","ХВС2","0","ГВС2","MRC2_10721751");	$this->chanals= array(2,12,3,12);	 break;
case"41":$this->sensors = array("BTS2_VD4_1200079","ХВС","BTS2_VD5_1200079","ГВС","0","ХВС2","0","ГВС2","MRC2_10722279");	$this->chanals= array(4,12,5,12);	 break;
case"42":$this->sensors = array("BTS2_VD6_1200079","ХВС","BTS2_VD7_1200079","ГВС","0","ХВС2","0","ГВС2","MRC2_10721840");	$this->chanals= array(6,12,7,12);	 break;
case"43":$this->sensors = array("BTS2_VD0_1200053","ХВС","BTS2_VD1_1200053","ГВС","0","ХВС2","0","ГВС2","MRC2_10722208");	$this->chanals= array(0,13,1,13);	 break;
case"44":$this->sensors = array("BTS2_VD0_1000470","ХВС","BTS2_VD1_1000470","ГВС","0","ХВС2","0","ГВС2","MRC2_10722254");	$this->chanals= array(0,14,1,14);	 break;
case"45":$this->sensors = array("BTS2_VD2_1000470","ХВС","BTS2_VD3_1000470","ГВС","0","ХВС2","0","ГВС2","MRC2_10722188");	$this->chanals= array(2,14,3,14);	 break;
case"46":$this->sensors = array("BTS2_VD4_1000470","ХВС","BTS2_VD5_1000470","ГВС","0","ХВС2","0","ГВС2","MRC2_10722280");	$this->chanals= array(4,14,5,14);	 break;
case"47":$this->sensors = array("BTS2_VD6_1000470","ХВС","BTS2_VD7_1000470","ГВС","0","ХВС2","0","ГВС2","MRC2_10721783");	$this->chanals= array(6,14,7,14);	 break;
case"48":$this->sensors = array("BTS2_VD0_1200010","ХВС","BTS2_VD1_1200010","ГВС","0","ХВС2","0","ГВС2","MRC2_10721837");	$this->chanals= array(0,15,1,15);	 break;
case"49":$this->sensors = array("BTS2_VD2_1200010","ХВС","BTS2_VD3_1200010","ГВС","0","ХВС2","0","ГВС2","MRC2_10732133");	$this->chanals= array(2,15,3,15);	 break;
case"50":$this->sensors = array("BTS2_VD4_1200010","ХВС","BTS2_VD5_1200010","ГВС","0","ХВС2","0","ГВС2","MRC2_10722295");	$this->chanals= array(4,15,5,15);	 break;
case"51":$this->sensors = array("BTS2_VD6_1200010","ХВС","BTS2_VD7_1200010","ГВС","0","ХВС2","0","ГВС2","MRC2_10732095");	$this->chanals= array(6,15,7,15);	 break;
case"52":$this->sensors = array("BTS2_VD0_1100036","ХВС","BTS2_VD1_1100036","ГВС","0","ХВС2","0","ГВС2","MRC2_10732000");	$this->chanals= array(0,16,1,16);	 break;
case"53":$this->sensors = array("BTS2_VD2_1100036","ХВС","BTS2_VD3_1100036","ГВС","0","ХВС2","0","ГВС2","MRC2_10732088");	$this->chanals= array(2,16,3,16);	 break;
case"54":$this->sensors = array("BTS2_VD4_1100036","ХВС","BTS2_VD5_1100036","ГВС","0","ХВС2","0","ГВС2","MRC2_10732117");	$this->chanals= array(4,16,5,16);	 break;
case"55":$this->sensors = array("BTS2_VD6_1100036","ХВС","BTS2_VD7_1100036","ГВС","0","ХВС2","0","ГВС2","MRC2_10732116");	$this->chanals= array(6,16,7,16);	 break;
case"56":$this->sensors = array("BTS2_VD0_1200119","ХВС","BTS2_VD1_1200119","ГВС","0","ХВС2","0","ГВС2","MRC2_10732104");	$this->chanals= array(0,17,1,17);	 break;
case"57":$this->sensors = array("BTS2_VD2_1200119","ХВС","BTS2_VD3_1200119","ГВС","0","ХВС2","0","ГВС2","MRC2_10732135");	$this->chanals= array(2,17,3,17);	 break;
case"58":$this->sensors = array("BTS2_VD4_1200119","ХВС","BTS2_VD5_1200119","ГВС","0","ХВС2","0","ГВС2","MRC2_10731999");	$this->chanals= array(4,17,5,17);	 break;
case"59":$this->sensors = array("BTS2_VD6_1200119","ХВС","BTS2_VD7_1200119","ГВС","0","ХВС2","0","ГВС2","MRC2_10732005");	$this->chanals= array(6,17,7,17);	 break;
case"60":$this->sensors = array("BTS2_VD0_1100027","ХВС","BTS2_VD1_1100027","ГВС","0","ХВС2","0","ГВС2","MRC2_10732121");	$this->chanals= array(0,18,1,18);	 break;
case"61":$this->sensors = array("BTS2_VD2_1100027","ХВС","BTS2_VD3_1100027","ГВС","0","ХВС2","0","ГВС2","MRC2_10732084");	$this->chanals= array(2,18,3,18);	 break;
case"62":$this->sensors = array("BTS2_VD4_1100027","ХВС","BTS2_VD5_1100027","ГВС","0","ХВС2","0","ГВС2","MRC2_10732093");	$this->chanals= array(4,18,5,18);	 break;
case"63":$this->sensors = array("BTS2_VD6_1100027","ХВС","BTS2_VD7_1100027","ГВС","0","ХВС2","0","ГВС2","MRC2_10732120");	$this->chanals= array(6,18,7,18);	 break;
case"64":$this->sensors = array("BTS2_VD0_1200058","ХВС","BTS2_VD1_1200058","ГВС","0","ХВС2","0","ГВС2","MRC2_10732092");	$this->chanals= array(0,19,1,19);	 break;
case"65":$this->sensors = array("BTS2_VD0_1200104","ХВС","BTS2_VD1_1200104","ГВС","BTS2_VD2_1200104","ХВС2","BTS2_VD3_1200104","ГВС2","MRC2_10732087");	$this->chanals= array(0,20,1,20,2,20,3,20);	 break;
case"66":$this->sensors = array("BTS2_VD4_1200104","ХВС","BTS2_VD5_1200104","ГВС","0","ХВС2","0","ГВС2","MRC2_10731868");	$this->chanals= array(4,20,5,20);	 break;
case"67":$this->sensors = array("BTS2_VD6_1200104","ХВС","BTS2_VD7_1200104","ГВС","0","ХВС2","0","ГВС2","MRC2_10722290");	$this->chanals= array(6,20,7,20);	 break;
case"68":$this->sensors = array("BTS2_VD0_1100064","ХВС","BTS2_VD1_1100064","ГВС","0","ХВС2","0","ГВС2","MRC2_10722293");	$this->chanals= array(0,21,1,21);	 break;
case"69":$this->sensors = array("BTS2_VD2_1100064","ХВС","BTS2_VD3_1100064","ГВС","BTS2_VD4_1100064","ХВС2","BTS2_VD5_1100064","ГВС2","MRC2_10722309");	$this->chanals= array(2,21,3,21,4,21,5,21);	 break;
case"70":$this->sensors = array("BTS2_VD6_1100064","ХВС","BTS2_VD7_1100064","ГВС","BTS2_VD0_1200054","ХВС2","BTS2_VD1_1200054","ГВС2","MRC2_10722200");	$this->chanals= array(6,21,7,21,0,22,1,22);	 break;
case"71":$this->sensors = array("BTS2_VD2_1200054","ХВС","BTS2_VD3_1200054","ГВС","0","ХВС2","0","ГВС2","MRC2_10732011");	$this->chanals= array(2,22,3,22);	 break;
case"72":$this->sensors = array("BTS2_VD4_1200054","ХВС","BTS2_VD5_1200054","ГВС","0","ХВС2","0","ГВС2","MRC2_10731976");	$this->chanals= array(4,22,5,22);	 break;
case"73":$this->sensors = array("BTS2_VD6_1200054","ХВС","BTS2_VD7_1200054","ГВС","0","ХВС2","0","ГВС2","MRC2_10732144");	$this->chanals= array(6,22,7,22);	 break;
case"74":$this->sensors = array("BTS2_VD0_1100035","ХВС","BTS2_VD1_1100035","ГВС","BTS2_VD2_1100035","ХВС2","BTS2_VD3_1100035","ГВС2","MRC2_10732015");	$this->chanals= array(0,23,1,23,2,23,3,23);	 break;
case"75":$this->sensors = array("BTS2_VD4_1100035","ХВС","BTS2_VD5_1100035","ГВС","BTS2_VD6_1100035","ХВС2","BTS2_VD7_1100035","ГВС2","MRC2_10721516");	$this->chanals= array(4,23,5,23,6,23,7,23);	 break;
case"76":$this->sensors = array("BTS2_VD0_1200064","ХВС","BTS2_VD1_1200064","ГВС","0","ХВС2","0","ГВС2","MRC2_10732118");	$this->chanals= array(0,24,1,24);	 break;
case"77":$this->sensors = array("BTS2_VD2_1200064","ХВС","BTS2_VD3_1200064","ГВС","0","ХВС2","0","ГВС2","MRC2_10731865");	$this->chanals= array(2,24,3,24);	 break;
case"78":$this->sensors = array("BTS2_VD4_1200064","ХВС","BTS2_VD5_1200064","ГВС","0","ХВС2","0","ГВС2","MRC2_10731871");	$this->chanals= array(4,24,5,24);	 break;
case"79":$this->sensors = array("BTS2_VD6_1200064","ХВС","BTS2_VD7_1200064","ГВС","BTS2_VD0_1100040","ХВС2","BTS2_VD1_1100040","ГВС2","MRC2_10722299");	$this->chanals= array(6,24,7,24,0,25,1,25);	 break;
case"80":$this->sensors = array("BTS2_VD2_1100040","ХВС","BTS2_VD3_1100040","ГВС","BTS2_VD4_1100040","ХВС2","BTS2_VD5_1100040","ГВС2","MRC2_10731863");	$this->chanals= array(2,25,3,25,4,25,5,25);	 break;
case"81":$this->sensors = array("BTS2_VD6_1100040","ХВС","BTS2_VD7_1100040","ГВС","0","ХВС2","0","ГВС2","MRC2_10732140");	$this->chanals= array(6,25,7,25);	 break;
case"82":$this->sensors = array("BTS2_VD0_1100033","ХВС","BTS2_VD1_1100033","ГВС","0","ХВС2","0","ГВС2","MRC2_10732085");	$this->chanals= array(0,26,1,26);	 break;
case"83":$this->sensors = array("BTS2_VD2_1100033","ХВС","BTS2_VD3_1100033","ГВС","0","ХВС2","0","ГВС2","MRC2_10721466");	$this->chanals= array(2,26,3,26);	 break;
case"84":$this->sensors = array("BTS2_VD4_1100033","ХВС","BTS2_VD5_1100033","ГВС","BTS2_VD6_1100033","ХВС2","BTS2_VD7_1100033","ГВС2","MRC2_10732101");	$this->chanals= array(4,26,5,26,6,26,7,26);	 break;
case"85":$this->sensors = array("BTS2_VD0_1100062","ХВС","BTS2_VD1_1100062","ГВС","BTS2_VD2_1100062","ХВС2","BTS2_VD3_1100062","ГВС2","MRC2_10732122");	$this->chanals= array(0,27,1,27,2,27,3,27);	 break;
case"86":$this->sensors = array("BTS2_VD4_1100062","ХВС","BTS2_VD5_1100062","ГВС","0","ХВС2","0","ГВС2","MRC2_10731998");	$this->chanals= array(4,27,5,27);	 break;
case"87":$this->sensors = array("BTS2_VD6_1100062","ХВС","BTS2_VD7_1100062","ГВС","0","ХВС2","0","ГВС2","MRC2_10731859");	$this->chanals= array(6,27,7,27);	 break;
case"88":$this->sensors = array("BTS2_VD0_1100059","ХВС","BTS2_VD1_1100059","ГВС","0","ХВС2","0","ГВС2","MRC2_10722228");	$this->chanals= array(0,28,1,28);	 break;
case"89":$this->sensors = array("BTS2_VD2_1100059","ХВС","BTS2_VD3_1100059","ГВС","BTS2_VD4_1100059","ХВС2","BTS2_VD5_1100059","ГВС2","MRC2_10732114");	$this->chanals= array(2,28,3,28,4,28,5,28);	 break;
case"90":$this->sensors = array("BTS2_VD6_1100059","ХВС","BTS2_VD7_1100059","ГВС","0","ХВС2","0","ГВС2","MRC2_10731858");	$this->chanals= array(6,28,7,28);	 break;
case"91":$this->sensors = array("BTS2_VD0_1200174","ХВС","BTS2_VD1_1200174","ГВС","0","ХВС2","0","ГВС2","MRC2_10732124");	$this->chanals= array(0,29,1,29);	 break;
case"92":$this->sensors = array("BTS2_VD2_1200174","ХВС","BTS2_VD3_1200174","ГВС","0","ХВС2","0","ГВС2","MRC2_10732130");	$this->chanals= array(2,29,3,29);	 break;
case"93":$this->sensors = array("BTS2_VD4_1200174","ХВС","BTS2_VD5_1200174","ГВС","0","ХВС2","0","ГВС2","MRC2_10722185");	$this->chanals= array(4,29,5,29);	 break;
case"94":$this->sensors = array("BTS2_VD6_1200174","ХВС","BTS2_VD7_1200174","ГВС","0","ХВС2","0","ГВС2","MRC2_10722209");	$this->chanals= array(6,29,7,29);	 break;
case"95":$this->sensors = array("BTS2_VD0_1100052","ХВС","BTS2_VD1_1100052","ГВС","0","ХВС2","0","ГВС2","MRC2_10731857");	$this->chanals= array(0,30,1,30);	 break;
case"96":$this->sensors = array("BTS2_VD2_1100052","ХВС","BTS2_VD3_1100052","ГВС","0","ХВС2","0","ГВС2","MRC2_10722187");	$this->chanals= array(2,30,3,30);	 break;
case"97":$this->sensors = array("BTS2_VD4_1100052","ХВС","BTS2_VD5_1100052","ГВС","0","ХВС2","0","ГВС2","MRC2_9765517");	$this->chanals= array(4,30,5,30);	 break;
case"98":$this->sensors = array("BTS2_VD6_1100052","ХВС","BTS2_VD7_1100052","ГВС","0","ХВС2","0","ГВС2","MRC2_9765658");	$this->chanals= array(6,30,7,30);	 break;
case"99":$this->sensors = array("BTS2_VD0_1100065","ХВС","BTS2_VD1_1100065","ГВС","0","ХВС2","0","ГВС2","MRC2_9765677");	$this->chanals= array(0,31,1,31);	 break;
case"100":$this->sensors = array("BTS2_VD2_1100065","ХВС","BTS2_VD3_1100065","ГВС","0","ХВС2","0","ГВС2","MRC2_9765681");	$this->chanals= array(2,31,3,31);	 break;
case"101":$this->sensors = array("BTS2_VD4_1100065","ХВС","BTS2_VD5_1100065","ГВС","0","ХВС2","0","ГВС2","MRC2_16281003");	$this->chanals= array(4,31,5,31);	 break;
case"102":$this->sensors = array("BTS2_VD6_1100065","ХВС","BTS2_VD7_1100065","ГВС","0","ХВС2","0","ГВС2","MRC2_9765464");	$this->chanals= array(6,31,7,31);	 break;
case"103":$this->sensors = array("BTS2_VD0_1200154","ХВС","BTS2_VD1_1200154","ГВС","0","ХВС2","0","ГВС2","MRC2_9765454");	$this->chanals= array(0,32,1,32);	 break;
case"104":$this->sensors = array("BTS2_VD0_1200151","ХВС","BTS2_VD1_1200151","ГВС","0","ХВС2","0","ГВС2","MRC2_9765682");	$this->chanals= array(0,33,1,33);	 break;
case"105":$this->sensors = array("BTS2_VD2_1200151","ХВС","BTS2_VD3_1200151","ГВС","0","ХВС2","0","ГВС2","MRC2_9765679");	$this->chanals= array(2,33,3,33);	 break;
case"106":$this->sensors = array("BTS2_VD4_1200151","ХВС","BTS2_VD5_1200151","ГВС","0","ХВС2","0","ГВС2","MRC2_9765505");	$this->chanals= array(4,33,5,33);	 break;
case"107":$this->sensors = array("BTS2_VD6_1200151","ХВС","BTS2_VD7_1200151","ГВС","0","ХВС2","0","ГВС2","MRC2_9765581");	$this->chanals= array(6,33,7,33);	 break;
case"108":$this->sensors = array("BTS2_VD0_1200052","ХВС","BTS2_VD1_1200052","ГВС","0","ХВС2","0","ГВС2","MRC2_9765674");	$this->chanals= array(0,34,1,34);	 break;
case"109":$this->sensors = array("BTS2_VD2_1200052","ХВС","BTS2_VD3_1200052","ГВС","0","ХВС2","0","ГВС2","MRC2_10732111");	$this->chanals= array(2,34,3,34);	 break;
case"110":$this->sensors = array("BTS2_VD4_1200052","ХВС","BTS2_VD5_1200052","ГВС","0","ХВС2","0","ГВС2","MRC2_10732012");	$this->chanals= array(4,34,5,34);	 break;
case"111":$this->sensors = array("BTS2_VD6_1200052","ХВС","BTS2_VD7_1200052","ГВС","0","ХВС2","0","ГВС2","MRC2_10732006");	$this->chanals= array(6,34,7,34);	 break;
case"112":$this->sensors = array("BTS2_VD0_1200057","ХВС","BTS2_VD1_1200057","ГВС","0","ХВС2","0","ГВС2","MRC2_10732126");	$this->chanals= array(0,35,1,35);	 break;
case"113":$this->sensors = array("BTS2_VD2_1200057","ХВС","BTS2_VD3_1200057","ГВС","0","ХВС2","0","ГВС2","MRC2_10732098");	$this->chanals= array(2,35,3,35);	 break;
case"114":$this->sensors = array("BTS2_VD4_1200057","ХВС","BTS2_VD5_1200057","ГВС","0","ХВС2","0","ГВС2","MRC2_10722198");	$this->chanals= array(4,35,5,35);	 break;
case"115":$this->sensors = array("BTS2_VD6_1200057","ХВС","BTS2_VD7_1200057","ГВС","0","ХВС2","0","ГВС2","MRC2_10732102");	$this->chanals= array(6,35,7,35);	 break;
case"116":$this->sensors = array("BTS2_VD0_1200050","ХВС","BTS2_VD1_1200050","ГВС","0","ХВС2","0","ГВС2","MRC2_10721462");	$this->chanals= array(0,36,1,36);	 break;
case"117":$this->sensors = array("BTS2_VD2_1200050","ХВС","BTS2_VD3_1200050","ГВС","0","ХВС2","0","ГВС2","MRC2_10731997");	$this->chanals= array(2,36,3,36);	 break;
case"118":$this->sensors = array("BTS2_VD4_1200050","ХВС","BTS2_VD5_1200050","ГВС","0","ХВС2","0","ГВС2","MRC2_10722314");	$this->chanals= array(4,36,5,36);	 break;
case"119":$this->sensors = array("BTS2_VD6_1200050","ХВС","BTS2_VD7_1200050","ГВС","0","ХВС2","0","ГВС2","MRC2_10732004");	$this->chanals= array(6,36,7,36);	 break;
case"120":$this->sensors = array("BTS2_VD0_1200100","ХВС","BTS2_VD1_1200100","ГВС","0","ХВС2","0","ГВС2","MRC2_10732096");	$this->chanals= array(0,37,1,37);	 break;
case"121":$this->sensors = array("BTS2_VD2_1200100","ХВС","BTS2_VD3_1200100","ГВС","0","ХВС2","0","ГВС2","MRC2_9766341");	$this->chanals= array(2,37,3,37);	 break;
case"122":$this->sensors = array("BTS2_VD4_1200100","ХВС","BTS2_VD5_1200100","ГВС","0","ХВС2","0","ГВС2","MRC2_9765582");	$this->chanals= array(4,37,5,37);	 break;
case"123":$this->sensors = array("BTS2_VD6_1200100","ХВС","BTS2_VD7_1200100","ГВС","0","ХВС2","0","ГВС2","MRC2_10180099");	$this->chanals= array(6,37,7,37);	 break;
case"124":$this->sensors = array("BTS2_VD0_1200025","ХВС","BTS2_VD1_1200025","ГВС","0","ХВС2","0","ГВС2","MRC2_8272774");	$this->chanals= array(0,38,1,38); 	 break;
		
case"Все": break;		
default: require 'alert_flat.js'; die;		
}		
?>		