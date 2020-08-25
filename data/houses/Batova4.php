<?php		
//$this->flat = $_POST['flat']		
$this->ipAddres="192.168.1.38";

if ($this->flat>0 && $this->flat<21){$this->rsNum = "41";}
//if ($this->flat>0 && $this->flat<21){$this->rsNum = "77";}	
elseif (($this->flat>20 && $this->flat<36)) {$this->rsNum = "42";}
elseif (($this->flat>35 && $this->flat<51)) {$this->rsNum = "43";}
elseif (($this->flat>50 && $this->flat<71)) {$this->rsNum = "44";}
elseif (($this->flat>70 && $this->flat<86)) {$this->rsNum = "45";}
elseif (($this->flat>85 && $this->flat<101)) {$this->rsNum = "46";}

switch ($this->flat) {		
case"1":$this->sensors = array("BTS2_VD0_1300252","ХВС","BTS2_VD1_1300252","ГВС","BTS2_VD2_1300252","ХВС2","BTS2_VD3_1300252","ГВС2","MRC2_26216451");	$this->chanals= array(0,1,1,1,2,1,3,1);	 break;
case"2":$this->sensors = array("BTS2_VD4_1300252","ХВС","BTS2_VD5_1300252","ГВС","0","ХВС2","0","ГВС2","MRC2_26216504");	$this->chanals= array(4,1,5,1);	 break;
case"3":$this->sensors = array("BTS2_VD6_1300252","ХВС","BTS2_VD7_1300252","ГВС","0","ХВС2","0","ГВС2","MRC2_26216452");	$this->chanals= array(6,1,7,1);	 break;
case"4":$this->sensors = array("BTS2_VD0_1400031","ХВС","BTS2_VD1_1400031","ГВС","0","ХВС2","0","ГВС2","MRC2_26216712");	$this->chanals= array(0,2,1,2);	 break;
case"5":$this->sensors = array("BTS2_VD2_1400031","ХВС","BTS2_VD3_1400031","ГВС","BTS2_VD4_1400031","ХВС2","BTS2_VD5_1400031","ГВС2","MRC2_26216501");	$this->chanals= array(2,2,3,2,4,2,5,2);	 break;
case"6":$this->sensors = array("BTS2_VD6_1400031","ХВС","BTS2_VD7_1400031","ГВС","BTS2_VD0_1400035","ХВС2","BTS2_VD1_1400035","ГВС2","MRC2_26216488");	$this->chanals= array(6,2,7,2,0,3,1,3);	 break;
case"7":$this->sensors = array("BTS2_VD2_1400035","ХВС","BTS2_VD3_1400035","ГВС","0","ХВС2","0","ГВС2","MRC2_26216719");	$this->chanals= array(2,3,3,3);	 break;
case"8":$this->sensors = array("BTS2_VD4_1400035","ХВС","BTS2_VD5_1400035","ГВС","0","ХВС2","0","ГВС2","MRC2_26216464");	$this->chanals= array(4,3,5,3);	 break;
case"9":$this->sensors = array("BTS2_VD6_1400035","ХВС","BTS2_VD7_1400035","ГВС","0","ХВС2","0","ГВС2","MRC2_26216717");	$this->chanals= array(6,3,7,3);	 break;
case"10":$this->sensors = array("BTS2_VD0_1300257","ХВС","BTS2_VD1_1300257","ГВС","BTS2_VD2_1300257","ХВС2","BTS2_VD3_1300257","ГВС2","MRC2_26216718");	$this->chanals= array(0,4,1,4,2,4,3,4);	 break;
case"11":$this->sensors = array("BTS2_VD4_1300257","ХВС","BTS2_VD5_1300257","ГВС","BTS2_VD6_1300257","ХВС2","BTS2_VD7_1300257","ГВС2","MRC2_26216469");	$this->chanals= array(4,4,5,4,6,4,7,4);	 break;
case"12":$this->sensors = array("BTS2_VD0_1200312","ХВС","BTS2_VD1_1200312","ГВС","0","ХВС2","0","ГВС2","MRC2_26216494");	$this->chanals= array(0,5,1,5);	 break;
case"13":$this->sensors = array("BTS2_VD2_1200312","ХВС","BTS2_VD3_1200312","ГВС","0","ХВС2","0","ГВС2","MRC2_26216843");	$this->chanals= array(2,5,3,5);	 break;
case"14":$this->sensors = array("BTS2_VD4_1200312","ХВС","BTS2_VD5_1200312","ГВС","0","ХВС2","0","ГВС2","MRC2_26216757");	$this->chanals= array(4,5,5,5);	 break;
case"15":$this->sensors = array("BTS2_VD6_1200312","ХВС","BTS2_VD7_1200312","ГВС","BTS2_VD0_1400091","ХВС2","BTS2_VD1_1400091","ГВС2","MRC2_26216763");	$this->chanals= array(6,5,7,5,0,6,1,6);	 break;
case"16":$this->sensors = array("BTS2_VD2_1400091","ХВС","BTS2_VD3_1400091","ГВС","BTS2_VD4_1400091","ХВС2","BTS2_VD5_1400091","ГВС2","MRC2_26216836");	$this->chanals= array(2,6,3,6,4,6,5,6);	 break;
case"17":$this->sensors = array("BTS2_VD6_1400091","ХВС","BTS2_VD7_1400091","ГВС","0","ХВС2","0","ГВС2","MRC2_26216765");	$this->chanals= array(6,6,7,6);	 break;
case"18":$this->sensors = array("BTS2_VD0_1200028","ХВС","BTS2_VD1_1200028","ГВС","0","ХВС2","0","ГВС2","MRC2_26216799");	$this->chanals= array(0,7,1,7);	 break;
case"19":$this->sensors = array("BTS2_VD2_1200028","ХВС","BTS2_VD3_1200028","ГВС","0","ХВС2","0","ГВС2","MRC2_26216926");	$this->chanals= array(2,7,3,7);	 break;
case"20":$this->sensors = array("BTS2_VD4_1200028","ХВС","BTS2_VD5_1200028","ГВС","BTS2_VD6_1200028","ХВС2","BTS2_VD7_1200028","ГВС2","MRC2_26216837");	$this->chanals= array(4,7,5,7,6,7,7,7);	 break;
case"21":$this->sensors = array("BTS2_VD0_1400003","ХВС","BTS2_VD1_1400003","ГВС","BTS2_VD2_1400003","ХВС2","BTS2_VD3_1400003","ГВС2","MRC2_26216811");	$this->chanals= array(0,8,1,8,2,8,3,8);	 break;
case"22":$this->sensors = array("BTS2_VD4_1400003","ХВС","BTS2_VD5_1400003","ГВС","0","ХВС2","0","ГВС2","MRC2_26216862");	$this->chanals= array(4,8,5,8);	 break;
case"23":$this->sensors = array("BTS2_VD6_1400003","ХВС","BTS2_VD7_1400003","ГВС","0","ХВС2","0","ГВС2","MRC2_26216803");	$this->chanals= array(6,8,7,8);	 break;
case"24":$this->sensors = array("BTS2_VD0_1300502","ХВС","BTS2_VD1_1300502","ГВС","0","ХВС2","0","ГВС2","MRC2_26216814");	$this->chanals= array(0,9,1,9);	 break;
case"25":$this->sensors = array("BTS2_VD2_1300502","ХВС","BTS2_VD3_1300502","ГВС","BTS2_VD4_1300502","ХВС2","BTS2_VD5_1300502","ГВС2","MRC2_26216938");	$this->chanals= array(2,9,3,9,4,9,5,9);	 break;
case"26":$this->sensors = array("BTS2_VD6_1300502","ХВС","BTS2_VD7_1300502","ГВС","BTS2_VD0_1400116","ХВС2","BTS2_VD1_1400116","ГВС2","MRC2_26216937");	$this->chanals= array(6,9,7,9,0,10,1,10);	 break;
case"27":$this->sensors = array("BTS2_VD2_1400116","ХВС","BTS2_VD3_1400116","ГВС","0","ХВС2","0","ГВС2","MRC2_26216913");	$this->chanals= array(2,10,3,10);	 break;
case"28":$this->sensors = array("BTS2_VD4_1400116","ХВС","BTS2_VD5_1400116","ГВС","0","ХВС2","0","ГВС2","MRC2_26216912");	$this->chanals= array(4,10,5,10);	 break;
case"29":$this->sensors = array("BTS2_VD6_1400116","ХВС","BTS2_VD7_1400116","ГВС","0","ХВС2","0","ГВС2","MRC2_26216850");	$this->chanals= array(6,10,7,10);	 break;
case"30":$this->sensors = array("BTS2_VD0_1400037","ХВС","BTS2_VD1_1400037","ГВС","BTS2_VD2_1400037","ХВС2","BTS2_VD3_1400037","ГВС2","MRC2_26216690");	$this->chanals= array(0,11,1,11,2,11,3,11);	 break;
case"31":$this->sensors = array("BTS2_VD4_1400037","ХВС","BTS2_VD5_1400037","ГВС","BTS2_VD6_1400037","ХВС2","BTS2_VD7_1400037","ГВС2","MRC2_26216689");	$this->chanals= array(4,11,5,11,6,11,7,11);	 break;
case"32":$this->sensors = array("BTS2_VD0_1300616","ХВС","BTS2_VD1_1300616","ГВС","0","ХВС2","0","ГВС2","MRC2_26216918");	$this->chanals= array(0,12,1,12);	 break;
case"33":$this->sensors = array("BTS2_VD2_1300616","ХВС","BTS2_VD3_1300616","ГВС","0","ХВС2","0","ГВС2","MRC2_26216671");	$this->chanals= array(2,12,3,12);	 break;
case"34":$this->sensors = array("BTS2_VD4_1300616","ХВС","BTS2_VD5_1300616","ГВС","0","ХВС2","0","ГВС2","MRC2_26216672");	$this->chanals= array(4,12,5,12);	 break;
case"35":$this->sensors = array("BTS2_VD0_1400094","ХВС","BTS2_VD1_1400094","ГВС","BTS2_VD2_1400094","ХВС2","BTS2_VD3_1400094","ГВС2","MRC2_26216659");	$this->chanals= array(0,13,1,13,2,13,3,13);	 break;
case"36":$this->sensors = array("BTS2_VD0_1200027","ХВС","BTS2_VD1_1200027","ГВС","BTS2_VD2_1200027","ХВС2","BTS2_VD3_1200027","ГВС2","MRC2_26216828");	$this->chanals= array(0,14,1,14,2,14,3,14);	 break;
case"37":$this->sensors = array("BTS2_VD4_1200027","ХВС","BTS2_VD5_1200027","ГВС","0","ХВС2","0","ГВС2","MRC2_26216739");	$this->chanals= array(4,14,5,14);	 break;
case"38":$this->sensors = array("BTS2_VD6_1200027","ХВС","BTS2_VD7_1200027","ГВС","0","ХВС2","0","ГВС2","MRC2_26216779");	$this->chanals= array(6,14,7,14);	 break;
case"39":$this->sensors = array("BTS2_VD0_1300377","ХВС","BTS2_VD1_1300377","ГВС","0","ХВС2","0","ГВС2","MRC2_26216748");	$this->chanals= array(0,15,1,15);	 break;
case"40":$this->sensors = array("BTS2_VD2_1300377","ХВС","BTS2_VD3_1300377","ГВС","BTS2_VD4_1300377","ХВС2","BTS2_VD5_1300377","ГВС2","MRC2_26216764");	$this->chanals= array(2,15,3,15,4,15,5,15);	 break;
case"41":$this->sensors = array("BTS2_VD6_1300377","ХВС","BTS2_VD7_1300377","ГВС","BTS2_VD0_1300249","ХВС2","BTS2_VD1_1300249","ГВС2","MRC2_26216507");	$this->chanals= array(6,15,7,15,0,16,1,16);	 break;
case"42":$this->sensors = array("BTS2_VD2_1300249","ХВС","BTS2_VD3_1300249","ГВС","0","ХВС2","0","ГВС2","MRC2_26216777");	$this->chanals= array(2,16,3,16);	 break;
case"43":$this->sensors = array("BTS2_VD4_1300249","ХВС","BTS2_VD5_1300249","ГВС","0","ХВС2","0","ГВС2","MRC2_26216749");	$this->chanals= array(4,16,5,16);	 break;
case"44":$this->sensors = array("BTS2_VD6_1300249","ХВС","BTS2_VD7_1300249","ГВС","0","ХВС2","0","ГВС2","MRC2_26216742");	$this->chanals= array(6,16,7,16);	 break;
case"45":$this->sensors = array("BTS2_VD0_1500092","ХВС","BTS2_VD1_1500092","ГВС","BTS2_VD2_1500092","ХВС2","BTS2_VD3_1500092","ГВС2","MRC2_26216738");	$this->chanals= array(0,17,1,17,2,17,3,17);	 break;
case"46":$this->sensors = array("BTS2_VD4_1500092","ХВС","BTS2_VD5_1500092","ГВС","BTS2_VD6_1500092","ХВС2","BTS2_VD7_1500092","ГВС2","MRC2_26216509");	$this->chanals= array(4,17,5,17,6,17,7,17);	 break;
case"47":$this->sensors = array("BTS2_VD0_1300225","ХВС","BTS2_VD1_1300225","ГВС","0","ХВС2","0","ГВС2","MRC2_26216746");	$this->chanals= array(0,18,1,18);	 break;
case"48":$this->sensors = array("BTS2_VD2_1300225","ХВС","BTS2_VD3_1300225","ГВС","0","ХВС2","0","ГВС2","MRC2_26216793");	$this->chanals= array(2,18,3,18);	 break;
case"49":$this->sensors = array("BTS2_VD4_1300225","ХВС","BTS2_VD5_1300225","ГВС","0","ХВС2","0","ГВС2","MRC2_26216725");	$this->chanals= array(4,18,5,18);	 break;
case"50":$this->sensors = array("BTS2_VD0_9900050","ХВС","BTS2_VD1_9900050","ГВС","BTS2_VD2_9900050","ХВС2","BTS2_VD3_9900050","ГВС2","MRC2_26216714");	$this->chanals= array(0,19,1,19,2,19,3,19);	 break;
case"51":$this->sensors = array("BTS2_VD0_1400087","ХВС","BTS2_VD1_1400087","ГВС","BTS2_VD2_1400087","ХВС2","BTS2_VD3_1400087","ГВС2","MRC2_26216711");	$this->chanals= array(0,20,1,20,2,20,3,20);	 break;
case"52":$this->sensors = array("BTS2_VD4_1400087","ХВС","BTS2_VD5_1400087","ГВС","0","ХВС2","0","ГВС2","MRC2_26216729");	$this->chanals= array(4,20,5,20);	 break;
case"53":$this->sensors = array("BTS2_VD6_1400087","ХВС","BTS2_VD7_1400087","ГВС","0","ХВС2","0","ГВС2","MRC2_26216708");	$this->chanals= array(6,20,7,20);	 break;
case"54":$this->sensors = array("BTS2_VD0_1200225","ХВС","BTS2_VD1_1200225","ГВС","0","ХВС2","0","ГВС2","MRC2_26216453");	$this->chanals= array(0,21,1,21);	 break;
case"55":$this->sensors = array("BTS2_VD2_1200225","ХВС","BTS2_VD3_1200225","ГВС","BTS2_VD4_1200225","ХВС2","BTS2_VD5_1200225","ГВС2","MRC2_26216454");	$this->chanals= array(2,21,3,21,4,21,5,21);	 break;
case"56":$this->sensors = array("BTS2_VD6_1200225","ХВС","BTS2_VD7_1200225","ГВС","BTS2_VD0_1300220","ХВС2","BTS2_VD1_1300220","ГВС2","MRC2_26216734");	$this->chanals= array(6,21,7,21,0,22,1,22);	 break;
case"57":$this->sensors = array("BTS2_VD2_1300220","ХВС","BTS2_VD3_1300220","ГВС","0","ХВС2","0","ГВС2","MRC2_26216548");	$this->chanals= array(2,22,3,22);	 break;
case"58":$this->sensors = array("BTS2_VD4_1300220","ХВС","BTS2_VD5_1300220","ГВС","0","ХВС2","0","ГВС2","MRC2_26216728");	$this->chanals= array(4,22,5,22);	 break;
case"59":$this->sensors = array("BTS2_VD6_1300220","ХВС","BTS2_VD7_1300220","ГВС","0","ХВС2","0","ГВС2","MRC2_26216468");	$this->chanals= array(6,22,7,22);	 break;
case"60":$this->sensors = array("BTS2_VD0_1500094","ХВС","BTS2_VD1_1500094","ГВС","BTS2_VD2_1500094","ХВС2","BTS2_VD3_1500094","ГВС2","MRC2_26216459");	$this->chanals= array(0,23,1,23,2,23,3,23);	 break;
case"61":$this->sensors = array("BTS2_VD4_1500094","ХВС","BTS2_VD5_1500094","ГВС","BTS2_VD6_1500094","ХВС2","BTS2_VD7_1500094","ГВС2","MRC2_26216461");	$this->chanals= array(4,23,5,23,6,23,7,23);	 break;
case"62":$this->sensors = array("BTS2_VD0_1300251","ХВС","BTS2_VD1_1300251","ГВС","0","ХВС2","0","ГВС2","MRC2_26216466");	$this->chanals= array(0,24,1,24);	 break;
case"63":$this->sensors = array("BTS2_VD2_1300251","ХВС","BTS2_VD3_1300251","ГВС","0","ХВС2","0","ГВС2","MRC2_26216470");	$this->chanals= array(2,24,3,24);	 break;
case"64":$this->sensors = array("BTS2_VD4_1300251","ХВС","BTS2_VD5_1300251","ГВС","0","ХВС2","0","ГВС2","MRC2_26216723");	$this->chanals= array(4,24,5,24);	 break;
case"65":$this->sensors = array("BTS2_VD6_1300251","ХВС","BTS2_VD7_1300251","ГВС","BTS2_VD0_1300253","ХВС2","BTS2_VD1_1300253","ГВС2","MRC2_26216472");	$this->chanals= array(6,24,7,24,0,25,1,25);	 break;
case"66":$this->sensors = array("BTS2_VD2_1300253","ХВС","BTS2_VD3_1300253","ГВС","BTS2_VD4_1300253","ХВС2","BTS2_VD5_1300253","ГВС2","MRC2_26216463");	$this->chanals= array(2,25,3,25,4,25,5,25);	 break;
case"67":$this->sensors = array("BTS2_VD6_1300253","ХВС","BTS2_VD7_1300253","ГВС","0","ХВС2","0","ГВС2","MRC2_26216467");	$this->chanals= array(6,25,7,25);	 break;
case"68":$this->sensors = array("BTS2_VD0_1300250","ХВС","BTS2_VD1_1300250","ГВС","0","ХВС2","0","ГВС2","MRC2_26216721");	$this->chanals= array(0,26,1,26);	 break;
case"69":$this->sensors = array("BTS2_VD2_1300250","ХВС","BTS2_VD3_1300250","ГВС","0","ХВС2","0","ГВС2","MRC2_26216474");	$this->chanals= array(2,26,3,26);	 break;
case"70":$this->sensors = array("BTS2_VD4_1300250","ХВС","BTS2_VD5_1300250","ГВС","BTS2_VD6_1300250","ХВС2","BTS2_VD7_1300250","ГВС2","MRC2_26216465");	$this->chanals= array(4,26,5,26,6,26,7,26);	 break;
case"71":$this->sensors = array("BTS2_VD0_1300632","ХВС","BTS2_VD1_1300632","ГВС","BTS2_VD2_1300632","ХВС2","BTS2_VD3_1300632","ГВС2","MRC2_26216473");	$this->chanals= array(0,27,1,27,2,27,3,27);	 break;
case"72":$this->sensors = array("BTS2_VD4_1300632","ХВС","BTS2_VD5_1300632","ГВС","0","ХВС2","0","ГВС2","MRC2_26216479");	$this->chanals= array(4,27,5,27);	 break;
case"73":$this->sensors = array("BTS2_VD6_1300632","ХВС","BTS2_VD7_1300632","ГВС","0","ХВС2","0","ГВС2","MRC2_26216807");	$this->chanals= array(6,27,7,27);	 break;
case"74":$this->sensors = array("BTS2_VD0_1300259","ХВС","BTS2_VD1_1300259","ГВС","0","ХВС2","0","ГВС2","MRC2_26216657");	$this->chanals= array(0,28,1,28);	 break;
case"75":$this->sensors = array("BTS2_VD2_1300259","ХВС","BTS2_VD3_1300259","ГВС","BTS2_VD4_1300259","ХВС2","BTS2_VD5_1300259","ГВС2","MRC2_26216477");	$this->chanals= array(2,28,3,28,4,28,5,28);	 break;
case"76":$this->sensors = array("BTS2_VD6_1300259","ХВС","BTS2_VD7_1300259","ГВС","BTS2_VD0_1300254","ХВС2","BTS2_VD1_1300254","ГВС2","MRC2_26216487");	$this->chanals= array(6,28,7,28,0,29,1,29);	 break;
case"77":$this->sensors = array("BTS2_VD2_1300254","ХВС","BTS2_VD3_1300254","ГВС","0","ХВС2","0","ГВС2","MRC2_26216658");	$this->chanals= array(2,29,3,29);	 break;
case"78":$this->sensors = array("BTS2_VD4_1300254","ХВС","BTS2_VD5_1300254","ГВС","0","ХВС2","0","ГВС2","MRC2_26216812");	$this->chanals= array(4,29,5,29);	 break;
case"79":$this->sensors = array("BTS2_VD6_1300254","ХВС","BTS2_VD7_1300254","ГВС","0","ХВС2","0","ГВС2","MRC2_26216817");	$this->chanals= array(6,29,7,29);	 break;
case"80":$this->sensors = array("BTS2_VD0_9900051","ХВС","BTS2_VD1_9900051","ГВС","BTS2_VD2_9900051","ХВС2","BTS2_VD3_9900051","ГВС2","MRC2_26216810");	$this->chanals= array(0,30,1,30,2,30,3,30);	 break;
case"81":$this->sensors = array("BTS2_VD4_9900051","ХВС","BTS2_VD5_9900051","ГВС","BTS2_VD6_9900051","ХВС2","BTS2_VD7_9900051","ГВС2","MRC2_26216520");	$this->chanals= array(4,30,5,30,6,30,7,30);	 break;
case"82":$this->sensors = array("BTS2_VD0_1300269","ХВС","BTS2_VD1_1300269","ГВС","0","ХВС2","0","ГВС2","MRC2_26216667");	$this->chanals= array(0,31,1,31);	 break;
case"83":$this->sensors = array("BTS2_VD2_1300269","ХВС","BTS2_VD3_1300269","ГВС","0","ХВС2","0","ГВС2","MRC2_26216664");	$this->chanals= array(2,31,3,31);	 break;
case"84":$this->sensors = array("BTS2_VD4_1300269","ХВС","BTS2_VD5_1300269","ГВС","0","ХВС2","0","ГВС2","MRC2_26216661");	$this->chanals= array(4,31,5,31);	 break;
case"85":$this->sensors = array("BTS2_VD0_1300256","ХВС","BTS2_VD1_1300256","ГВС","BTS2_VD2_1300256","ХВС2","BTS2_VD3_1300256","ГВС2","MRC2_26216666");	$this->chanals= array(0,32,1,32,2,32,3,32);	 break;
case"86":$this->sensors = array("BTS2_VD0_1300255","ХВС","BTS2_VD1_1300255","ГВС","BTS2_VD2_1300255","ХВС2","BTS2_VD3_1300255","ГВС2","MRC2_26216663");	$this->chanals= array(0,33,1,33,2,33,3,33);	 break;
case"87":$this->sensors = array("BTS2_VD4_1300255","ХВС","BTS2_VD5_1300255","ГВС","0","ХВС2","0","ГВС2","MRC2_26216675");	$this->chanals= array(4,33,5,33);	 break;
case"88":$this->sensors = array("BTS2_VD6_1300255","ХВС","BTS2_VD7_1300255","ГВС","0","ХВС2","0","ГВС2","MRC2_26216693");	$this->chanals= array(6,33,7,33);	 break;
case"89":$this->sensors = array("BTS2_VD0_9900052","ХВС","BTS2_VD1_9900052","ГВС","0","ХВС2","0","ГВС2","MRC2_26216695");	$this->chanals= array(0,34,1,34);	 break;
case"90":$this->sensors = array("BTS2_VD2_9900052","ХВС","BTS2_VD3_9900052","ГВС","BTS2_VD4_9900052","ХВС2","BTS2_VD5_9900052","ГВС2","MRC2_26216676");	$this->chanals= array(2,34,3,34,4,34,5,34);	 break;
case"91":$this->sensors = array("BTS2_VD6_9900052","ХВС","BTS2_VD7_9900052","ГВС","BTS2_VD0_1300646","ХВС2","BTS2_VD1_1300646","ГВС2","MRC2_26216674");	$this->chanals= array(6,34,7,34,0,35,1,35);	 break;
case"92":$this->sensors = array("BTS2_VD2_1300646","ХВС","BTS2_VD3_1300646","ГВС","0","ХВС2","0","ГВС2","MRC2_26216699");	$this->chanals= array(2,35,3,35);	 break;
case"93":$this->sensors = array("BTS2_VD4_1300646","ХВС","BTS2_VD5_1300646","ГВС","0","ХВС2","0","ГВС2","MRC2_26216698");	$this->chanals= array(4,35,5,35);	 break;
case"94":$this->sensors = array("BTS2_VD6_1300646","ХВС","BTS2_VD7_1300646","ГВС","0","ХВС2","0","ГВС2","MRC2_26216678");	$this->chanals= array(6,35,7,35);	 break;
case"95":$this->sensors = array("BTS2_VD0_1300245","ХВС","BTS2_VD1_1300245","ГВС","BTS2_VD2_1300245","ХВС2","BTS2_VD3_1300245","ГВС2","MRC2_26216677");	$this->chanals= array(0,36,1,36,2,36,3,36);	 break;
case"96":$this->sensors = array("BTS2_VD4_1300245","ХВС","BTS2_VD5_1300245","ГВС","BTS2_VD6_1300245","ХВС2","BTS2_VD7_1300245","ГВС2","MRC2_26216530");	$this->chanals= array(4,36,5,36,6,36,7,36);	 break;
case"97":$this->sensors = array("BTS2_VD0_9900053","ХВС","BTS2_VD1_9900053","ГВС","0","ХВС2","0","ГВС2","MRC2_26216896");	$this->chanals= array(0,37,1,37);	 break;
case"98":$this->sensors = array("BTS2_VD2_9900053","ХВС","BTS2_VD3_9900053","ГВС","0","ХВС2","0","ГВС2","MRC2_26216873");	$this->chanals= array(2,37,3,37);	 break;
case"99":$this->sensors = array("BTS2_VD4_9900053","ХВС","BTS2_VD5_9900053","ГВС","0","ХВС2","0","ГВС2","MRC2_26216856");	$this->chanals= array(4,37,5,37);	 break;
case"100":$this->sensors = array("BTS2_VD0_9900054","ХВС","BTS2_VD1_9900054","ГВС","BTS2_VD2_9900054","ХВС2","BTS2_VD3_9900054","ГВС2","MRC2_26216883");	$this->chanals= array(0,38,1,38,2,38,3,38); 	 break;
case"Все": break;		
default: require 'alert_flat.js'; die;		
}	
?>		
