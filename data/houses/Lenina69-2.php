<?php		
//$this->flat = $_POST['flat']		
$this->ipAddres="192.168.1.216";		
		
if ($this->flat>0 && $this->flat<21){$this->rsNum = "20";}
elseif (($this->flat>20 && $this->flat<41)) {$this->rsNum = "21";}
elseif (($this->flat>40 && $this->flat<60)) {$this->rsNum = "22";}
elseif (($this->flat>59 && $this->flat<76)) {$this->rsNum = "23";}

switch ($this->flat) {		
case"1":$this->sensors = array("BTS2_VD0_1200006","ХВС","BTS2_VD1_1200006","ГВС","0","ХВС2","0","ГВС2","MRC2_9765372");	$this->chanals= array(0,1,1,1);	 break;
case"2":$this->sensors = array("BTS2_VD2_1200006","ХВС","BTS2_VD3_1200006","ГВС","0","ХВС2","0","ГВС2","MRC2_9765476");	$this->chanals= array(2,1,3,1);	 break;
case"3":$this->sensors = array("BTS2_VD4_1200006","ХВС","BTS2_VD5_1200006","ГВС","0","ХВС2","0","ГВС2","MRC2_9765503");	$this->chanals= array(4,1,5,1);	 break;
case"4":$this->sensors = array("BTS2_VD6_1200006","ХВС","BTS2_VD7_1200006","ГВС","0","ХВС2","0","ГВС2","MRC2_9765490");	$this->chanals= array(6,1,7,1);	 break;
case"5":$this->sensors = array("BTS2_VD0_1200176","ХВС","BTS2_VD1_1200176","ГВС","0","ХВС2","0","ГВС2","MRC2_9765467");	$this->chanals= array(0,2,1,2);	 break;
case"6":$this->sensors = array("BTS2_VD2_1200176","ХВС","BTS2_VD3_1200176","ГВС","0","ХВС2","0","ГВС2","MRC2_9765388");	$this->chanals= array(2,2,3,2);	 break;
case"7":$this->sensors = array("BTS2_VD4_1200176","ХВС","BTS2_VD5_1200176","ГВС","0","ХВС2","0","ГВС2","MRC2_9765465");	$this->chanals= array(4,2,5,2);	 break;
case"8":$this->sensors = array("BTS2_VD6_1200176","ХВС","BTS2_VD7_1200176","ГВС","0","ХВС2","0","ГВС2","MRC2_9765455");	$this->chanals= array(6,2,7,2);	 break;
case"9":$this->sensors = array("BTS2_VD0_1200177","ХВС","BTS2_VD1_1200177","ГВС","0","ХВС2","0","ГВС2","MRC2_9765501");	$this->chanals= array(0,3,1,3);	 break;
case"10":$this->sensors = array("BTS2_VD2_1200177","ХВС","BTS2_VD3_1200177","ГВС","0","ХВС2","0","ГВС2","MRC2_9765396");	$this->chanals= array(2,3,3,3);	 break;
case"11":$this->sensors = array("BTS2_VD4_1200177","ХВС","BTS2_VD5_1200177","ГВС","0","ХВС2","0","ГВС2","MRC2_9765514");	$this->chanals= array(4,3,5,3);	 break;
case"12":$this->sensors = array("BTS2_VD6_1200177","ХВС","BTS2_VD7_1200177","ГВС","0","ХВС2","0","ГВС2","MRC2_9765475");	$this->chanals= array(6,3,7,3);	 break;
case"13":$this->sensors = array("BTS2_VD0_1200080","ХВС","BTS2_VD1_1200080","ГВС","0","ХВС2","0","ГВС2","MRC2_9766407");	$this->chanals= array(0,4,1,4);	 break;
case"14":$this->sensors = array("BTS2_VD2_1200080","ХВС","BTS2_VD3_1200080","ГВС","0","ХВС2","0","ГВС2","MRC2_9766391");	$this->chanals= array(2,4,3,4);	 break;
case"15":$this->sensors = array("BTS2_VD4_1200080","ХВС","BTS2_VD5_1200080","ГВС","0","ХВС2","0","ГВС2","MRC2_9766263");	$this->chanals= array(4,4,5,4);	 break;
case"16":$this->sensors = array("BTS2_VD6_1200080","ХВС","BTS2_VD7_1200080","ГВС","0","ХВС2","0","ГВС2","MRC2_9766389");	$this->chanals= array(6,4,7,4);	 break;
case"17":$this->sensors = array("BTS2_VD0_1200039","ХВС","BTS2_VD1_1200039","ГВС","0","ХВС2","0","ГВС2","MRC2_9766509");	$this->chanals= array(0,5,1,5);	 break;
case"18":$this->sensors = array("BTS2_VD2_1200039","ХВС","BTS2_VD3_1200039","ГВС","0","ХВС2","0","ГВС2","MRC2_9766416");	$this->chanals= array(2,5,3,5);	 break;
case"19":$this->sensors = array("BTS2_VD4_1200039","ХВС","BTS2_VD5_1200039","ГВС","0","ХВС2","0","ГВС2","MRC2_9766289");	$this->chanals= array(4,5,5,5);	 break;
case"20":$this->sensors = array("BTS2_VD6_1200039","ХВС","BTS2_VD7_1200039","ГВС","0","ХВС2","0","ГВС2","MRC2_9766431");	$this->chanals= array(6,5,7,5);	 break;
case"21":$this->sensors = array("BTS2_VD0_1200013","ХВС","BTS2_VD1_1200013","ГВС","0","ХВС2","0","ГВС2","MRC2_9766282");	$this->chanals= array(0,6,1,6);	 break;
case"22":$this->sensors = array("BTS2_VD2_1200013","ХВС","BTS2_VD3_1200013","ГВС","0","ХВС2","0","ГВС2","MRC2_9766434");	$this->chanals= array(2,6,3,6);	 break;
case"23":$this->sensors = array("BTS2_VD4_1200013","ХВС","BTS2_VD5_1200013","ГВС","0","ХВС2","0","ГВС2","MRC2_9766377");	$this->chanals= array(4,6,5,6);	 break;
case"24":$this->sensors = array("BTS2_VD6_1200013","ХВС","BTS2_VD7_1200013","ГВС","0","ХВС2","0","ГВС2","MRC2_9766404");	$this->chanals= array(6,6,7,6);	 break;
case"25":$this->sensors = array("BTS2_VD0_1200034","ХВС","BTS2_VD1_1200034","ГВС","0","ХВС2","0","ГВС2","MRC2_10722318");	$this->chanals= array(0,7,1,7);	 break;
case"26":$this->sensors = array("BTS2_VD2_1200034","ХВС","BTS2_VD3_1200034","ГВС","0","ХВС2","0","ГВС2","MRC2_10731861");	$this->chanals= array(2,7,3,7);	 break;
case"27":$this->sensors = array("BTS2_VD4_1200034","ХВС","BTS2_VD5_1200034","ГВС","0","ХВС2","0","ГВС2","MRC2_10732115");	$this->chanals= array(4,7,5,7);	 break;
case"28":$this->sensors = array("BTS2_VD6_1200034","ХВС","BTS2_VD7_1200034","ГВС","0","ХВС2","0","ГВС2","MRC2_10732007");	$this->chanals= array(6,7,7,7);	 break;
case"29":$this->sensors = array("BTS2_VD0_1200007","ХВС","BTS2_VD1_1200007","ГВС","0","ХВС2","0","ГВС2","MRC2_10722307");	$this->chanals= array(0,8,1,8);	 break;
case"30":$this->sensors = array("BTS2_VD2_1200007","ХВС","BTS2_VD3_1200007","ГВС","0","ХВС2","0","ГВС2","MRC2_10722322");	$this->chanals= array(2,8,3,8);	 break;
case"31":$this->sensors = array("BTS2_VD4_1200007","ХВС","BTS2_VD5_1200007","ГВС","0","ХВС2","0","ГВС2","MRC2_10731864");	$this->chanals= array(4,8,5,8);	 break;
case"32":$this->sensors = array("BTS2_VD6_1200007","ХВС","BTS2_VD7_1200007","ГВС","0","ХВС2","0","ГВС2","MRC2_10731869");	$this->chanals= array(6,8,7,8);	 break;
case"33":$this->sensors = array("BTS2_VD0_1200066","ХВС","BTS2_VD1_1200066","ГВС","0","ХВС2","0","ГВС2","MRC2_10731866");	$this->chanals= array(0,9,1,9);	 break;
case"34":$this->sensors = array("BTS2_VD2_1200066","ХВС","BTS2_VD3_1200066","ГВС","0","ХВС2","0","ГВС2","MRC2_10721476");	$this->chanals= array(2,9,3,9);	 break;
case"35":$this->sensors = array("BTS2_VD4_1200066","ХВС","BTS2_VD5_1200066","ГВС","0","ХВС2","0","ГВС2","MRC2_10731853");	$this->chanals= array(4,9,5,9);	 break;
case"36":$this->sensors = array("BTS2_VD6_1200066","ХВС","BTS2_VD7_1200066","ГВС","0","ХВС2","0","ГВС2","MRC2_10722297");	$this->chanals= array(6,9,7,9);	 break;
case"37":$this->sensors = array("BTS2_VD0_1200023","ХВС","BTS2_VD1_1200023","ГВС","0","ХВС2","0","ГВС2","MRC2_9766410");	$this->chanals= array(0,10,1,10);	 break;
case"38":$this->sensors = array("BTS2_VD2_1200023","ХВС","BTS2_VD3_1200023","ГВС","0","ХВС2","0","ГВС2","MRC2_9766403");	$this->chanals= array(2,10,3,10);	 break;
case"39":$this->sensors = array("BTS2_VD4_1200023","ХВС","BTS2_VD5_1200023","ГВС","0","ХВС2","0","ГВС2","MRC2_9766374");	$this->chanals= array(4,10,5,10);	 break;
case"40":$this->sensors = array("BTS2_VD6_1200023","ХВС","BTS2_VD7_1200023","ГВС","0","ХВС2","0","ГВС2","MRC2_9766390");	$this->chanals= array(6,10,7,10);	 break;
case"41":$this->sensors = array("BTS2_VD0_1200051","ХВС","BTS2_VD1_1200051","ГВС","0","ХВС2","0","ГВС2","MRC2_9766265");	$this->chanals= array(0,11,1,11);	 break;
case"42":$this->sensors = array("BTS2_VD2_1200051","ХВС","BTS2_VD3_1200051","ГВС","0","ХВС2","0","ГВС2","MRC2_9766375");	$this->chanals= array(2,11,3,11);	 break;
case"43":$this->sensors = array("BTS2_VD4_1200051","ХВС","BTS2_VD5_1200051","ГВС","0","ХВС2","0","ГВС2","MRC2_9766296");	$this->chanals= array(4,11,5,11);	 break;
case"44":$this->sensors = array("BTS2_VD6_1200051","ХВС","BTS2_VD7_1200051","ГВС","0","ХВС2","0","ГВС2","MRC2_9766433");	$this->chanals= array(6,11,7,11);	 break;
case"45":$this->sensors = array("BTS2_VD0_1200044","ХВС","BTS2_VD1_1200044","ГВС","0","ХВС2","0","ГВС2","MRC2_9766427");	$this->chanals= array(0,12,1,12);	 break;
case"46":$this->sensors = array("BTS2_VD2_1200044","ХВС","BTS2_VD3_1200044","ГВС","0","ХВС2","0","ГВС2","MRC2_9766262");	$this->chanals= array(2,12,3,12);	 break;
case"47":$this->sensors = array("BTS2_VD4_1200044","ХВС","BTS2_VD5_1200044","ГВС","0","ХВС2","0","ГВС2","MRC2_9766267");	$this->chanals= array(4,12,5,12);	 break;
case"48":$this->sensors = array("BTS2_VD6_1200044","ХВС","BTS2_VD7_1200044","ГВС","0","ХВС2","0","ГВС2","MRC2_9766633");	$this->chanals= array(6,12,7,12);	 break;
case"49":$this->sensors = array("BTS2_VD0_1200002","ХВС","BTS2_VD1_1200002","ГВС","0","ХВС2","0","ГВС2","MRC2_9765364");	$this->chanals= array(0,13,1,13);	 break;
case"50":$this->sensors = array("BTS2_VD2_1200002","ХВС","BTS2_VD3_1200002","ГВС","0","ХВС2","0","ГВС2","MRC2_9765439");	$this->chanals= array(2,13,3,13);	 break;
case"51":$this->sensors = array("BTS2_VD4_1200002","ХВС","BTS2_VD5_1200002","ГВС","0","ХВС2","0","ГВС2","MRC2_9765483");	$this->chanals= array(4,13,5,13);	 break;
case"52":$this->sensors = array("BTS2_VD6_1200002","ХВС","BTS2_VD7_1200002","ГВС","0","ХВС2","0","ГВС2","MRC2_9765359");	$this->chanals= array(6,13,7,13);	 break;
case"53":$this->sensors = array("BTS2_VD0_1200160","ХВС","BTS2_VD1_1200160","ГВС","0","ХВС2","0","ГВС2","MRC2_9765349");	$this->chanals= array(0,14,1,14);	 break;
case"54":$this->sensors = array("BTS2_VD2_1200160","ХВС","BTS2_VD3_1200160","ГВС","0","ХВС2","0","ГВС2","MRC2_9765504");	$this->chanals= array(2,14,3,14);	 break;
case"55":$this->sensors = array("BTS2_VD4_1200160","ХВС","BTS2_VD5_1200160","ГВС","0","ХВС2","0","ГВС2","MRC2_9765659");	$this->chanals= array(4,14,5,14);	 break;
case"56":$this->sensors = array("BTS2_VD0_1200069","ХВС","BTS2_VD1_1200069","ГВС","0","ХВС2","0","ГВС2","MRC2_9765362");	$this->chanals= array(0,15,1,15);	 break;
case"57":$this->sensors = array("BTS2_VD2_1200069","ХВС","BTS2_VD3_1200069","ГВС","0","ХВС2","0","ГВС2","MRC2_9765440");	$this->chanals= array(2,15,3,15);	 break;
case"58":$this->sensors = array("BTS2_VD4_1200069","ХВС","BTS2_VD5_1200069","ГВС","0","ХВС2","0","ГВС2","MRC2_9765429");	$this->chanals= array(4,15,5,15);	 break;
case"59":$this->sensors = array("BTS2_VD6_1200069","ХВС","BTS2_VD7_1200069","ГВС","0","ХВС2","0","ГВС2","MRC2_9765355");	$this->chanals= array(6,15,7,15);	 break;
case"60":$this->sensors = array("BTS2_VD0_1200030","ХВС","BTS2_VD1_1200030","ГВС","0","ХВС2","0","ГВС2","MRC2_9765502");	$this->chanals= array(0,16,1,16);	 break;
case"61":$this->sensors = array("BTS2_VD2_1200030","ХВС","BTS2_VD3_1200030","ГВС","0","ХВС2","0","ГВС2","MRC2_9765449");	$this->chanals= array(2,16,3,16);	 break;
case"62":$this->sensors = array("BTS2_VD4_1200030","ХВС","BTS2_VD5_1200030","ГВС","0","ХВС2","0","ГВС2","MRC2_9765407");	$this->chanals= array(4,16,5,16);	 break;
case"63":$this->sensors = array("BTS2_VD6_1200030","ХВС","BTS2_VD7_1200030","ГВС","0","ХВС2","0","ГВС2","MRC2_9765650");	$this->chanals= array(6,16,7,16);	 break;
case"64":$this->sensors = array("BTS2_VD0_1200012","ХВС","BTS2_VD1_1200012","ГВС","0","ХВС2","0","ГВС2","MRC2_9765421");	$this->chanals= array(0,17,1,17);	 break;
case"65":$this->sensors = array("BTS2_VD2_1200012","ХВС","BTS2_VD3_1200012","ГВС","0","ХВС2","0","ГВС2","MRC2_9765381");	$this->chanals= array(2,17,3,17);	 break;
case"66":$this->sensors = array("BTS2_VD4_1200012","ХВС","BTS2_VD5_1200012","ГВС","0","ХВС2","0","ГВС2","MRC2_9765377");	$this->chanals= array(4,17,5,17);	 break;
case"67":$this->sensors = array("BTS2_VD6_1200012","ХВС","BTS2_VD7_1200012","ГВС","0","ХВС2","0","ГВС2","MRC2_9765420");	$this->chanals= array(6,17,7,17);	 break;
case"68":$this->sensors = array("BTS2_VD0_1200138","ХВС","BTS2_VD1_1200138","ГВС","0","ХВС2","0","ГВС2","MRC2_9765486");	$this->chanals= array(0,18,1,18);	 break;
case"69":$this->sensors = array("BTS2_VD2_1200138","ХВС","BTS2_VD3_1200138","ГВС","0","ХВС2","0","ГВС2","MRC2_9765567");	$this->chanals= array(2,18,3,18);	 break;
case"70":$this->sensors = array("BTS2_VD4_1200138","ХВС","BTS2_VD5_1200138","ГВС","0","ХВС2","0","ГВС2","MRC2_9765491");	$this->chanals= array(4,18,5,18);	 break;
case"71":$this->sensors = array("BTS2_VD6_1200138","ХВС","BTS2_VD7_1200138","ГВС","0","ХВС2","0","ГВС2","MRC2_9765466");	$this->chanals= array(6,18,7,18);	 break;
case"72":$this->sensors = array("BTS2_VD0_1200076","ХВС","BTS2_VD1_1200076","ГВС","0","ХВС2","0","ГВС2","MRC2_10732002");	$this->chanals= array(0,19,1,19);	 break;
case"73":$this->sensors = array("BTS2_VD2_1200076","ХВС","BTS2_VD3_1200076","ГВС","0","ХВС2","0","ГВС2","MRC2_10731994");	$this->chanals= array(2,19,3,19);	 break;
case"74":$this->sensors = array("BTS2_VD4_1200076","ХВС","BTS2_VD5_1200076","ГВС","0","ХВС2","0","ГВС2","MRC2_10721546");	$this->chanals= array(4,19,5,19);	 break;
case"75":$this->sensors = array("BTS2_VD6_1200076","ХВС","BTS2_VD7_1200076","ГВС","0","ХВС2","0","ГВС2","MRC2_10721595");	$this->chanals= array(6,19,7,19); 	 break;
		
case"Все": break;		
default: require 'alert_flat.js'; die;		
}		