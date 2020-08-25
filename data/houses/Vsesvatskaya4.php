<?php		
//$this->flat = $_POST['flat']		
$this->ipAddres ="192.168.1.20";

if ($this->flat>0 && $this->flat<16){$this->rsNum = "41";}
elseif (($this->flat>15 && $this->flat<31)) {$this->rsNum = "42";}
elseif (($this->flat>30 && $this->flat<51)) {$this->rsNum = "43";}
elseif (($this->flat>50 && $this->flat<66)) {$this->rsNum = "44";}
elseif (($this->flat>65 && $this->flat<81)) {$this->rsNum = "45";}
elseif (($this->flat>80 && $this->flat<101)) {$this->rsNum = "46";}
elseif (($this->flat>100 && $this->flat<116)) {$this->rsNum = "47";}
elseif (($this->flat>115 && $this->flat<131)) {$this->rsNum = "48";}
elseif (($this->flat>130 && $this->flat<151)) {$this->rsNum = "49";}

switch ($this->flat) {		
case"1":$this->sensors = array("BTS2_VD0_1300629","ХВС","BTS2_VD1_1300629","ГВС","0","ХВС2","0","ГВС2","MRC2_14988627");	$this->chanals= array(0,1,1,1);	 break;
case"2":$this->sensors = array("BTS2_VD2_1300629","ХВС","BTS2_VD3_1300629","ГВС","0","ХВС2","0","ГВС2","MRC2_14988775");	$this->chanals= array(2,1,3,1);	 break;
case"3":$this->sensors = array("BTS2_VD4_1300629","ХВС","BTS2_VD5_1300629","ГВС","0","ХВС2","0","ГВС2","MRC2_14988948");	$this->chanals= array(4,1,5,1);	 break;
case"4":$this->sensors = array("BTS2_VD6_1300629","ХВС","BTS2_VD7_1300629","ГВС","0","ХВС2","0","ГВС2","MRC2_14988637");	$this->chanals= array(6,1,7,1);	 break;
case"5":$this->sensors = array("BTS2_VD0_1300167","ХВС","BTS2_VD1_1300167","ГВС","0","ХВС2","0","ГВС2","MRC2_14988623");	$this->chanals= array(0,2,1,2);	 break;
case"6":$this->sensors = array("BTS2_VD2_1300167","ХВС","BTS2_VD3_1300167","ГВС","0","ХВС2","0","ГВС2","MRC2_14988779");	$this->chanals= array(2,2,3,2);	 break;
case"7":$this->sensors = array("BTS2_VD4_1300167","ХВС","BTS2_VD5_1300167","ГВС","0","ХВС2","0","ГВС2","MRC2_14988960");	$this->chanals= array(4,2,5,2);	 break;
case"8":$this->sensors = array("BTS2_VD6_1300167","ХВС","BTS2_VD7_1300167","ГВС","0","ХВС2","0","ГВС2","MRC2_14988675");	$this->chanals= array(6,2,7,2);	 break;
case"9":$this->sensors = array("BTS2_VD0_1300039","ХВС","BTS2_VD1_1300039","ГВС","0","ХВС2","0","ГВС2","MRC2_14988930");	$this->chanals= array(0,3,1,3);	 break;
case"10":$this->sensors = array("BTS2_VD2_1300039","ХВС","BTS2_VD3_1300039","ГВС","0","ХВС2","0","ГВС2","MRC2_14990339");	$this->chanals= array(2,3,3,3);	 break;
case"11":$this->sensors = array("BTS2_VD4_1300039","ХВС","BTS2_VD5_1300039","ГВС","0","ХВС2","0","ГВС2","MRC2_14988959");	$this->chanals= array(4,3,5,3);	 break;
case"12":$this->sensors = array("BTS2_VD6_1300039","ХВС","BTS2_VD7_1300039","ГВС","0","ХВС2","0","ГВС2","MRC2_14988964");	$this->chanals= array(6,3,7,3);	 break;
case"13":$this->sensors = array("BTS2_VD0_1300041","ХВС","BTS2_VD1_1300041","ГВС","0","ХВС2","0","ГВС2","MRC2_14990365");	$this->chanals= array(0,4,1,4);	 break;
case"14":$this->sensors = array("BTS2_VD2_1300041","ХВС","BTS2_VD3_1300041","ГВС","0","ХВС2","0","ГВС2","MRC2_14988666");	$this->chanals= array(2,4,3,4);	 break;
case"15":$this->sensors = array("BTS2_VD4_1300041","ХВС","BTS2_VD5_1300041","ГВС","0","ХВС2","0","ГВС2","MRC2_14988664");	$this->chanals= array(4,4,5,4);	 break;
case"16":$this->sensors = array("BTS2_VD0_1300026","ХВС","BTS2_VD1_1300026","ГВС","0","ХВС2","0","ГВС2","MRC2_14988947");	$this->chanals= array(0,5,1,5);	 break;
case"17":$this->sensors = array("BTS2_VD2_1300026","ХВС","BTS2_VD3_1300026","ГВС","0","ХВС2","0","ГВС2","MRC2_14988652");	$this->chanals= array(2,5,3,5);	 break;
case"18":$this->sensors = array("BTS2_VD4_1300026","ХВС","BTS2_VD5_1300026","ГВС","0","ХВС2","0","ГВС2","MRC2_14988918");	$this->chanals= array(4,5,5,5);	 break;
case"19":$this->sensors = array("BTS2_VD6_1300026","ХВС","BTS2_VD7_1300026","ГВС","0","ХВС2","0","ГВС2","MRC2_14990392");	$this->chanals= array(6,5,7,5);	 break;
case"20":$this->sensors = array("BTS2_VD0_1300049","ХВС","BTS2_VD1_1300049","ГВС","0","ХВС2","0","ГВС2","MRC2_14988762");	$this->chanals= array(0,6,1,6);	 break;
case"21":$this->sensors = array("BTS2_VD2_1300049","ХВС","BTS2_VD3_1300049","ГВС","0","ХВС2","0","ГВС2","MRC2_14988667");	$this->chanals= array(2,6,3,6);	 break;
case"22":$this->sensors = array("BTS2_VD4_1300049","ХВС","BTS2_VD5_1300049","ГВС","0","ХВС2","0","ГВС2","MRC2_14988647");	$this->chanals= array(4,6,5,6);	 break;
case"23":$this->sensors = array("BTS2_VD6_1300049","ХВС","BTS2_VD7_1300049","ГВС","0","ХВС2","0","ГВС2","MRC2_14988661");	$this->chanals= array(6,6,7,6);	 break;
case"24":$this->sensors = array("BTS2_VD0_1300037","ХВС","BTS2_VD1_1300037","ГВС","0","ХВС2","0","ГВС2","MRC2_16281109");	$this->chanals= array(0,7,1,7);	 break;
case"25":$this->sensors = array("BTS2_VD2_1300037","ХВС","BTS2_VD3_1300037","ГВС","0","ХВС2","0","ГВС2","MRC2_14988645");	$this->chanals= array(2,7,3,7);	 break;
case"26":$this->sensors = array("BTS2_VD4_1300037","ХВС","BTS2_VD5_1300037","ГВС","0","ХВС2","0","ГВС2","MRC2_16281190");	$this->chanals= array(4,7,5,7);	 break;
case"27":$this->sensors = array("BTS2_VD6_1300037","ХВС","BTS2_VD7_1300037","ГВС","0","ХВС2","0","ГВС2","MRC2_16281139");	$this->chanals= array(6,7,7,7);	 break;
case"28":$this->sensors = array("BTS2_VD0_1300511","ХВС","BTS2_VD1_1300511","ГВС","0","ХВС2","0","ГВС2","MRC2_16281108");	$this->chanals= array(0,8,1,8);	 break;
case"29":$this->sensors = array("BTS2_VD2_1300511","ХВС","BTS2_VD3_1300511","ГВС","0","ХВС2","0","ГВС2","MRC2_16281191");	$this->chanals= array(2,8,3,8);	 break;
case"30":$this->sensors = array("BTS2_VD4_1300511","ХВС","BTS2_VD5_1300511","ГВС","0","ХВС2","0","ГВС2","MRC2_16281064");	$this->chanals= array(4,8,5,8);	 break;
case"31":$this->sensors = array("BTS2_VD0_1300058","ХВС","BTS2_VD1_1300058","ГВС","0","ХВС2","0","ГВС2","MRC2_16281112");	$this->chanals= array(0,9,1,9);	 break;
case"32":$this->sensors = array("BTS2_VD2_1300058","ХВС","BTS2_VD3_1300058","ГВС","0","ХВС2","0","ГВС2","MRC2_16281135");	$this->chanals= array(2,9,3,9);	 break;
case"33":$this->sensors = array("BTS2_VD4_1300058","ХВС","BTS2_VD5_1300058","ГВС","0","ХВС2","0","ГВС2","MRC2_16281065");	$this->chanals= array(4,9,5,9);	 break;
case"34":$this->sensors = array("BTS2_VD6_1300058","ХВС","BTS2_VD7_1300058","ГВС","0","ХВС2","0","ГВС2","MRC2_16281063");	$this->chanals= array(6,9,7,9);	 break;
case"35":$this->sensors = array("BTS2_VD0_1300023","ХВС","BTS2_VD1_1300023","ГВС","0","ХВС2","0","ГВС2","MRC2_16281132");	$this->chanals= array(0,10,1,10);	 break;
case"36":$this->sensors = array("BTS2_VD2_1300023","ХВС","BTS2_VD3_1300023","ГВС","0","ХВС2","0","ГВС2","MRC2_16281136");	$this->chanals= array(2,10,3,10);	 break;
case"37":$this->sensors = array("BTS2_VD4_1300023","ХВС","BTS2_VD5_1300023","ГВС","0","ХВС2","0","ГВС2","MRC2_16281110");	$this->chanals= array(4,10,5,10);	 break;
case"38":$this->sensors = array("BTS2_VD6_1300023","ХВС","BTS2_VD7_1300023","ГВС","0","ХВС2","0","ГВС2","MRC2_16281104");	$this->chanals= array(6,10,7,10);	 break;
case"39":$this->sensors = array("BTS2_VD0_1300027","ХВС","BTS2_VD1_1300027","ГВС","0","ХВС2","0","ГВС2","MRC2_16281058");	$this->chanals= array(0,11,1,11);	 break;
case"40":$this->sensors = array("BTS2_VD2_1300027","ХВС","BTS2_VD3_1300027","ГВС","0","ХВС2","0","ГВС2","MRC2_16281098");	$this->chanals= array(2,11,3,11);	 break;
case"41":$this->sensors = array("BTS2_VD4_1300027","ХВС","BTS2_VD5_1300027","ГВС","0","ХВС2","0","ГВС2","MRC2_15195224");	$this->chanals= array(4,11,5,11);	 break;
case"42":$this->sensors = array("BTS2_VD6_1300027","ХВС","BTS2_VD7_1300027","ГВС","0","ХВС2","0","ГВС2","MRC2_16281062");	$this->chanals= array(6,11,7,11);	 break;
case"43":$this->sensors = array("BTS2_VD0_1300099","ХВС","BTS2_VD1_1300099","ГВС","0","ХВС2","0","ГВС2","MRC2_16281055");	$this->chanals= array(0,12,1,12);	 break;
case"44":$this->sensors = array("BTS2_VD2_1300099","ХВС","BTS2_VD3_1300099","ГВС","0","ХВС2","0","ГВС2","MRC2_16281121");	$this->chanals= array(2,12,3,12);	 break;
case"45":$this->sensors = array("BTS2_VD4_1300099","ХВС","BTS2_VD5_1300099","ГВС","0","ХВС2","0","ГВС2","MRC2_16281052");	$this->chanals= array(4,12,5,12);	 break;
case"46":$this->sensors = array("BTS2_VD6_1300099","ХВС","BTS2_VD7_1300099","ГВС","0","ХВС2","0","ГВС2","MRC2_16281059");	$this->chanals= array(6,12,7,12);	 break;
case"47":$this->sensors = array("BTS2_VD0_1300093","ХВС","BTS2_VD1_1300093","ГВС","0","ХВС2","0","ГВС2","MRC2_16281054");	$this->chanals= array(0,13,1,13);	 break;
case"48":$this->sensors = array("BTS2_VD2_1300093","ХВС","BTS2_VD3_1300093","ГВС","0","ХВС2","0","ГВС2","MRC2_16281166");	$this->chanals= array(2,13,3,13);	 break;
case"49":$this->sensors = array("BTS2_VD4_1300093","ХВС","BTS2_VD5_1300093","ГВС","0","ХВС2","0","ГВС2","MRC2_16281107");	$this->chanals= array(4,13,5,13);	 break;
case"50":$this->sensors = array("BTS2_VD6_1300093","ХВС","BTS2_VD7_1300093","ГВС","0","ХВС2","0","ГВС2","MRC2_16281088");	$this->chanals= array(6,13,7,13);	 break;
case"51":$this->sensors = array("BTS2_VD0_1300278","ХВС","BTS2_VD1_1300278","ГВС","0","ХВС2","0","ГВС2","MRC2_16281092");	$this->chanals= array(0,14,1,14);	 break;
case"52":$this->sensors = array("BTS2_VD2_1300278","ХВС","BTS2_VD3_1300278","ГВС","0","ХВС2","0","ГВС2","MRC2_16281068");	$this->chanals= array(2,14,3,14);	 break;
case"53":$this->sensors = array("BTS2_VD4_1300278","ХВС","BTS2_VD5_1300278","ГВС","0","ХВС2","0","ГВС2","MRC2_16281162");	$this->chanals= array(4,14,5,14);	 break;
case"54":$this->sensors = array("BTS2_VD6_1300278","ХВС","BTS2_VD7_1300278","ГВС","0","ХВС2","0","ГВС2","MRC2_16281213");	$this->chanals= array(6,14,7,14);	 break;
case"55":$this->sensors = array("BTS2_VD0_1300275","ХВС","BTS2_VD1_1300275","ГВС","0","ХВС2","0","ГВС2","MRC2_10178470");	$this->chanals= array(0,15,1,15);	 break;
case"56":$this->sensors = array("BTS2_VD2_1300275","ХВС","BTS2_VD3_1300275","ГВС","0","ХВС2","0","ГВС2","MRC2_16281140");	$this->chanals= array(2,15,3,15);	 break;
case"57":$this->sensors = array("BTS2_VD4_1300275","ХВС","BTS2_VD5_1300275","ГВС","0","ХВС2","0","ГВС2","MRC2_16281118");	$this->chanals= array(4,15,5,15);	 break;
case"58":$this->sensors = array("BTS2_VD6_1300275","ХВС","BTS2_VD7_1300275","ГВС","0","ХВС2","0","ГВС2","MRC2_31369346");	$this->chanals= array(6,15,7,15);	 break;
case"59":$this->sensors = array("BTS2_VD0_1300280","ХВС","BTS2_VD1_1300280","ГВС","0","ХВС2","0","ГВС2","MRC2_16281120");	$this->chanals= array(0,16,1,16);	 break;
case"60":$this->sensors = array("BTS2_VD2_1300280","ХВС","BTS2_VD3_1300280","ГВС","0","ХВС2","0","ГВС2","MRC2_16281119");	$this->chanals= array(2,16,3,16);	 break;
case"61":$this->sensors = array("BTS2_VD4_1300280","ХВС","BTS2_VD5_1300280","ГВС","0","ХВС2","0","ГВС2","MRC2_16281117");	$this->chanals= array(4,16,5,16);	 break;
case"62":$this->sensors = array("BTS2_VD6_1300280","ХВС","BTS2_VD7_1300280","ГВС","0","ХВС2","0","ГВС2","MRC2_16280996");	$this->chanals= array(6,16,7,16);	 break;
case"63":$this->sensors = array("BTS2_VD0_1300281","ХВС","BTS2_VD1_1300281","ГВС","0","ХВС2","0","ГВС2","MRC2_21943961");	$this->chanals= array(0,17,1,17);	 break;
case"64":$this->sensors = array("BTS2_VD2_1300281","ХВС","BTS2_VD3_1300281","ГВС","0","ХВС2","0","ГВС2","MRC2_16281002");	$this->chanals= array(2,17,3,17);	 break;
case"65":$this->sensors = array("BTS2_VD4_1300281","ХВС","BTS2_VD5_1300281","ГВС","0","ХВС2","0","ГВС2","MRC2_10178464");	$this->chanals= array(4,17,5,17);	 break;
case"66":$this->sensors = array("BTS2_VD0_1300091","ХВС","BTS2_VD1_1300091","ГВС","0","ХВС2","0","ГВС2","MRC2_16280811");	$this->chanals= array(0,18,1,18);	 break;
case"67":$this->sensors = array("BTS2_VD2_1300091","ХВС","BTS2_VD3_1300091","ГВС","0","ХВС2","0","ГВС2","MRC2_16280998");	$this->chanals= array(2,18,3,18);	 break;
case"68":$this->sensors = array("BTS2_VD4_1300091","ХВС","BTS2_VD5_1300091","ГВС","0","ХВС2","0","ГВС2","MRC2_16281073");	$this->chanals= array(4,18,5,18);	 break;
case"69":$this->sensors = array("BTS2_VD6_1300091","ХВС","BTS2_VD7_1300091","ГВС","0","ХВС2","0","ГВС2","MRC2_16281009");	$this->chanals= array(6,18,7,18);	 break;
case"70":$this->sensors = array("BTS2_VD0_1300272","ХВС","BTS2_VD1_1300272","ГВС","0","ХВС2","0","ГВС2","MRC2_16280994");	$this->chanals= array(0,19,1,19);	 break;
case"71":$this->sensors = array("BTS2_VD2_1300272","ХВС","BTS2_VD3_1300272","ГВС","0","ХВС2","0","ГВС2","MRC2_16281005");	$this->chanals= array(2,19,3,19);	 break;
case"72":$this->sensors = array("BTS2_VD4_1300272","ХВС","BTS2_VD5_1300272","ГВС","0","ХВС2","0","ГВС2","MRC2_16281007");	$this->chanals= array(4,19,5,19);	 break;
case"73":$this->sensors = array("BTS2_VD6_1300272","ХВС","BTS2_VD7_1300272","ГВС","0","ХВС2","0","ГВС2","MRC2_16281185");	$this->chanals= array(6,19,7,19);	 break;
case"74":$this->sensors = array("BTS2_VD0_1300098","ХВС","BTS2_VD1_1300098","ГВС","0","ХВС2","0","ГВС2","MRC2_16281061");	$this->chanals= array(0,20,1,20);	 break;
case"75":$this->sensors = array("BTS2_VD2_1300098","ХВС","BTS2_VD3_1300098","ГВС","0","ХВС2","0","ГВС2","MRC2_16281124");	$this->chanals= array(2,20,3,20);	 break;
case"76":$this->sensors = array("BTS2_VD4_1300098","ХВС","BTS2_VD5_1300098","ГВС","0","ХВС2","0","ГВС2","MRC2_16281083");	$this->chanals= array(4,20,5,20);	 break;
case"77":$this->sensors = array("BTS2_VD6_1300098","ХВС","BTS2_VD7_1300098","ГВС","0","ХВС2","0","ГВС2","MRC2_16281195");	$this->chanals= array(6,20,7,20);	 break;
case"78":$this->sensors = array("BTS2_VD0_9900032","ХВС","BTS2_VD1_9900032","ГВС","0","ХВС2","0","ГВС2","MRC2_16281076");	$this->chanals= array(0,21,1,21);	 break;
case"79":$this->sensors = array("BTS2_VD2_9900032","ХВС","BTS2_VD3_9900032","ГВС","0","ХВС2","0","ГВС2","MRC2_16281053");	$this->chanals= array(2,21,3,21);	 break;
case"80":$this->sensors = array("BTS2_VD4_9900032","ХВС","BTS2_VD5_9900032","ГВС","0","ХВС2","0","ГВС2","MRC2_16281087");	$this->chanals= array(4,21,5,21);	 break;
case"81":$this->sensors = array("BTS2_VD0_9900033","ХВС","BTS2_VD1_9900033","ГВС","0","ХВС2","0","ГВС2","MRC2_16281085");	$this->chanals= array(0,22,1,22);	 break;
case"82":$this->sensors = array("BTS2_VD2_9900033","ХВС","BTS2_VD3_9900033","ГВС","0","ХВС2","0","ГВС2","MRC2_16281089");	$this->chanals= array(2,22,3,22);	 break;
case"83":$this->sensors = array("BTS2_VD4_9900033","ХВС","BTS2_VD5_9900033","ГВС","0","ХВС2","0","ГВС2","MRC2_16281137");	$this->chanals= array(4,22,5,22);	 break;
case"84":$this->sensors = array("BTS2_VD6_9900033","ХВС","BTS2_VD7_9900033","ГВС","0","ХВС2","0","ГВС2","MRC2_16281115");	$this->chanals= array(6,22,7,22);	 break;
case"85":$this->sensors = array("BTS2_VD0_1300291","ХВС","BTS2_VD1_1300291","ГВС","0","ХВС2","0","ГВС2","MRC2_14989487");	$this->chanals= array(0,23,1,23);	 break;
case"86":$this->sensors = array("BTS2_VD2_1300291","ХВС","BTS2_VD3_1300291","ГВС","0","ХВС2","0","ГВС2","MRC2_14989491");	$this->chanals= array(2,23,3,23);	 break;
case"87":$this->sensors = array("BTS2_VD4_1300291","ХВС","BTS2_VD5_1300291","ГВС","0","ХВС2","0","ГВС2","MRC2_14994098");	$this->chanals= array(4,23,5,23);	 break;
case"88":$this->sensors = array("BTS2_VD6_1300291","ХВС","BTS2_VD7_1300291","ГВС","0","ХВС2","0","ГВС2","MRC2_14989474");	$this->chanals= array(6,23,7,23);	 break;
case"89":$this->sensors = array("BTS2_VD0_1300265","ХВС","BTS2_VD1_1300265","ГВС","0","ХВС2","0","ГВС2","MRC2_14988848");	$this->chanals= array(0,24,1,24);	 break;
case"90":$this->sensors = array("BTS2_VD2_1300265","ХВС","BTS2_VD3_1300265","ГВС","0","ХВС2","0","ГВС2","MRC2_14989458");	$this->chanals= array(2,24,3,24);	 break;
case"91":$this->sensors = array("BTS2_VD4_1300265","ХВС","BTS2_VD5_1300265","ГВС","0","ХВС2","0","ГВС2","MRC2_14994095");	$this->chanals= array(4,24,5,24);	 break;
case"92":$this->sensors = array("BTS2_VD6_1300265","ХВС","BTS2_VD7_1300265","ГВС","0","ХВС2","0","ГВС2","MRC2_14989463");	$this->chanals= array(6,24,7,24);	 break;
case"93":$this->sensors = array("BTS2_VD0_9900034","ХВС","BTS2_VD1_9900034","ГВС","0","ХВС2","0","ГВС2","MRC2_14988888");	$this->chanals= array(0,25,1,25);	 break;
case"94":$this->sensors = array("BTS2_VD2_9900034","ХВС","BTS2_VD3_9900034","ГВС","0","ХВС2","0","ГВС2","MRC2_14994116");	$this->chanals= array(2,25,3,25);	 break;
case"95":$this->sensors = array("BTS2_VD4_9900034","ХВС","BTS2_VD5_9900034","ГВС","0","ХВС2","0","ГВС2","MRC2_14989501");	$this->chanals= array(4,25,5,25);	 break;
case"96":$this->sensors = array("BTS2_VD6_9900034","ХВС","BTS2_VD7_9900034","ГВС","0","ХВС2","0","ГВС2","MRC2_14994115");	$this->chanals= array(6,25,7,25);	 break;
case"97":$this->sensors = array("BTS2_VD0_1300229","ХВС","BTS2_VD1_1300229","ГВС","0","ХВС2","0","ГВС2","MRC2_14994127");	$this->chanals= array(0,26,1,26);	 break;
case"98":$this->sensors = array("BTS2_VD2_1300229","ХВС","BTS2_VD3_1300229","ГВС","0","ХВС2","0","ГВС2","MRC2_14988871");	$this->chanals= array(2,26,3,26);	 break;
case"99":$this->sensors = array("BTS2_VD4_1300229","ХВС","BTS2_VD5_1300229","ГВС","0","ХВС2","0","ГВС2","MRC2_14994048");	$this->chanals= array(4,26,5,26);	 break;
case"100":$this->sensors = array("BTS2_VD6_1300229","ХВС","BTS2_VD7_1300229","ГВС","0","ХВС2","0","ГВС2","MRC2_14988863");	$this->chanals= array(6,26,7,26);	 break;
case"101":$this->sensors = array("BTS2_VD0_1300042","ХВС","BTS2_VD1_1300042","ГВС","0","ХВС2","0","ГВС2","MRC2_14988901");	$this->chanals= array(0,27,1,27);	 break;
case"102":$this->sensors = array("BTS2_VD2_1300042","ХВС","BTS2_VD3_1300042","ГВС","0","ХВС2","0","ГВС2","MRC2_14989483");	$this->chanals= array(2,27,3,27);	 break;
case"103":$this->sensors = array("BTS2_VD4_1300042","ХВС","BTS2_VD5_1300042","ГВС","0","ХВС2","0","ГВС2","MRC2_14994109");	$this->chanals= array(4,27,5,27);	 break;
case"104":$this->sensors = array("BTS2_VD6_1300042","ХВС","BTS2_VD7_1300042","ГВС","0","ХВС2","0","ГВС2","MRC2_14988893");	$this->chanals= array(6,27,7,27);	 break;
case"105":$this->sensors = array("BTS2_VD0_1300012","ХВС","BTS2_VD1_1300012","ГВС","0","ХВС2","0","ГВС2","MRC2_14989499");	$this->chanals= array(0,28,1,28);	 break;
case"106":$this->sensors = array("BTS2_VD2_1300012","ХВС","BTS2_VD3_1300012","ГВС","0","ХВС2","0","ГВС2","MRC2_14988880");	$this->chanals= array(2,28,3,28);	 break;
case"107":$this->sensors = array("BTS2_VD4_1300012","ХВС","BTS2_VD5_1300012","ГВС","0","ХВС2","0","ГВС2","MRC2_10178479");	$this->chanals= array(4,28,5,28);	 break;
case"108":$this->sensors = array("BTS2_VD6_1300012","ХВС","BTS2_VD7_1300012","ГВС","0","ХВС2","0","ГВС2","MRC2_14989480");	$this->chanals= array(6,28,7,28);	 break;
case"109":$this->sensors = array("BTS2_VD0_1300035","ХВС","BTS2_VD1_1300035","ГВС","0","ХВС2","0","ГВС2","MRC2_14989472");	$this->chanals= array(0,29,1,29);	 break;
case"110":$this->sensors = array("BTS2_VD2_1300035","ХВС","BTS2_VD3_1300035","ГВС","0","ХВС2","0","ГВС2","MRC2_14989466");	$this->chanals= array(2,29,3,29);	 break;
case"111":$this->sensors = array("BTS2_VD4_1300035","ХВС","BTS2_VD5_1300035","ГВС","0","ХВС2","0","ГВС2","MRC2_14989482");	$this->chanals= array(4,29,5,29);	 break;
case"112":$this->sensors = array("BTS2_VD6_1300035","ХВС","BTS2_VD7_1300035","ГВС","0","ХВС2","0","ГВС2","MRC2_14988895");	$this->chanals= array(6,29,7,29);	 break;
case"113":$this->sensors = array("BTS2_VD0_1300013","ХВС","BTS2_VD1_1300013","ГВС","0","ХВС2","0","ГВС2","MRC2_14994119");	$this->chanals= array(0,30,1,30);	 break;
case"114":$this->sensors = array("BTS2_VD2_1300013","ХВС","BTS2_VD3_1300013","ГВС","0","ХВС2","0","ГВС2","MRC2_14993701");	$this->chanals= array(2,30,3,30);	 break;
case"115":$this->sensors = array("BTS2_VD4_1300013","ХВС","BTS2_VD5_1300013","ГВС","0","ХВС2","0","ГВС2","MRC2_14994112");	$this->chanals= array(4,30,5,30);	 break;
case"116":$this->sensors = array("BTS2_VD0_1300274","ХВС","BTS2_VD1_1300274","ГВС","0","ХВС2","0","ГВС2","MRC2_14994074");	$this->chanals= array(0,31,1,31);	 break;
case"117":$this->sensors = array("BTS2_VD2_1300274","ХВС","BTS2_VD3_1300274","ГВС","0","ХВС2","0","ГВС2","MRC2_14993699");	$this->chanals= array(2,31,3,31);	 break;
case"118":$this->sensors = array("BTS2_VD4_1300274","ХВС","BTS2_VD5_1300274","ГВС","0","ХВС2","0","ГВС2","MRC2_14994141");	$this->chanals= array(4,31,5,31);	 break;
case"119":$this->sensors = array("BTS2_VD6_1300274","ХВС","BTS2_VD7_1300274","ГВС","0","ХВС2","0","ГВС2","MRC2_14989464");	$this->chanals= array(6,31,7,31);	 break;
case"120":$this->sensors = array("BTS2_VD0_1300242","ХВС","BTS2_VD1_1300242","ГВС","0","ХВС2","0","ГВС2","MRC2_14993677");	$this->chanals= array(0,32,1,32);	 break;
case"121":$this->sensors = array("BTS2_VD2_1300242","ХВС","BTS2_VD3_1300242","ГВС","0","ХВС2","0","ГВС2","MRC2_14993704");	$this->chanals= array(2,32,3,32);	 break;
case"122":$this->sensors = array("BTS2_VD4_1300242","ХВС","BTS2_VD5_1300242","ГВС","0","ХВС2","0","ГВС2","MRC2_14993678");	$this->chanals= array(4,32,5,32);	 break;
case"123":$this->sensors = array("BTS2_VD6_1300242","ХВС","BTS2_VD7_1300242","ГВС","0","ХВС2","0","ГВС2","MRC2_14989460");	$this->chanals= array(6,32,7,32);	 break;
case"124":$this->sensors = array("BTS2_VD0_9900035","ХВС","BTS2_VD1_9900035","ГВС","0","ХВС2","0","ГВС2","MRC2_14993679");	$this->chanals= array(0,33,1,33);	 break;
case"125":$this->sensors = array("BTS2_VD2_9900035","ХВС","BTS2_VD3_9900035","ГВС","0","ХВС2","0","ГВС2","MRC2_14993700");	$this->chanals= array(2,33,3,33);	 break;
case"126":$this->sensors = array("BTS2_VD4_9900035","ХВС","BTS2_VD5_9900035","ГВС","0","ХВС2","0","ГВС2","MRC2_14993694");	$this->chanals= array(4,33,5,33);	 break;
case"127":$this->sensors = array("BTS2_VD6_9900035","ХВС","BTS2_VD7_9900035","ГВС","0","ХВС2","0","ГВС2","MRC2_14993673");	$this->chanals= array(6,33,7,33);	 break;
case"128":$this->sensors = array("BTS2_VD0_1300279","ХВС","BTS2_VD1_1300279","ГВС","0","ХВС2","0","ГВС2","MRC2_14993736");	$this->chanals= array(0,34,1,34);	 break;
case"129":$this->sensors = array("BTS2_VD2_1300279","ХВС","BTS2_VD3_1300279","ГВС","0","ХВС2","0","ГВС2","MRC2_14993730");	$this->chanals= array(2,34,3,34);	 break;
case"130":$this->sensors = array("BTS2_VD4_1300279","ХВС","BTS2_VD5_1300279","ГВС","0","ХВС2","0","ГВС2","MRC2_14993686");	$this->chanals= array(4,34,5,34);	 break;
case"131":$this->sensors = array("BTS2_VD0_1300066","ХВС","BTS2_VD1_1300066","ГВС","0","ХВС2","0","ГВС2","MRC2_14993734");	$this->chanals= array(0,35,1,35);	 break;
case"132":$this->sensors = array("BTS2_VD2_1300066","ХВС","BTS2_VD3_1300066","ГВС","0","ХВС2","0","ГВС2","MRC2_14993735");	$this->chanals= array(2,35,3,35);	 break;
case"133":$this->sensors = array("BTS2_VD4_1300066","ХВС","BTS2_VD5_1300066","ГВС","0","ХВС2","0","ГВС2","MRC2_14993723");	$this->chanals= array(4,35,5,35);	 break;
case"134":$this->sensors = array("BTS2_VD6_1300066","ХВС","BTS2_VD7_1300066","ГВС","0","ХВС2","0","ГВС2","MRC2_14993727");	$this->chanals= array(6,35,7,35);	 break;
case"135":$this->sensors = array("BTS2_VD0_1300276","ХВС","BTS2_VD1_1300276","ГВС","0","ХВС2","0","ГВС2","MRC2_14993713");	$this->chanals= array(0,36,1,36);	 break;
case"136":$this->sensors = array("BTS2_VD2_1300276","ХВС","BTS2_VD3_1300276","ГВС","0","ХВС2","0","ГВС2","MRC2_14993669");	$this->chanals= array(2,36,3,36);	 break;
case"137":$this->sensors = array("BTS2_VD4_1300276","ХВС","BTS2_VD5_1300276","ГВС","0","ХВС2","0","ГВС2","MRC2_14988882");	$this->chanals= array(4,36,5,36);	 break;
case"138":$this->sensors = array("BTS2_VD6_1300276","ХВС","BTS2_VD7_1300276","ГВС","0","ХВС2","0","ГВС2","MRC2_14988902");	$this->chanals= array(6,36,7,36);	 break;
case"139":$this->sensors = array("BTS2_VD0_1300273","ХВС","BTS2_VD1_1300273","ГВС","0","ХВС2","0","ГВС2","MRC2_14989473");	$this->chanals= array(0,37,1,37);	 break;
case"140":$this->sensors = array("BTS2_VD2_1300273","ХВС","BTS2_VD3_1300273","ГВС","0","ХВС2","0","ГВС2","MRC2_14994092");	$this->chanals= array(2,37,3,37);	 break;
case"141":$this->sensors = array("BTS2_VD4_1300273","ХВС","BTS2_VD5_1300273","ГВС","0","ХВС2","0","ГВС2","MRC2_14987445");	$this->chanals= array(4,37,5,37);	 break;
case"142":$this->sensors = array("BTS2_VD6_1300273","ХВС","BTS2_VD7_1300273","ГВС","0","ХВС2","0","ГВС2","MRC2_14989475");	$this->chanals= array(6,37,7,37);	 break;
case"143":$this->sensors = array("BTS2_VD0_1300097","ХВС","BTS2_VD1_1300097","ГВС","0","ХВС2","0","ГВС2","MRC2_14989468");	$this->chanals= array(0,38,1,38);	 break;
case"144":$this->sensors = array("BTS2_VD2_1300097","ХВС","BTS2_VD3_1300097","ГВС","0","ХВС2","0","ГВС2","MRC2_14989385");	$this->chanals= array(2,38,3,38);	 break;
case"145":$this->sensors = array("BTS2_VD4_1300097","ХВС","BTS2_VD5_1300097","ГВС","0","ХВС2","0","ГВС2","MRC2_14994113");	$this->chanals= array(4,38,5,38);	 break;
case"146":$this->sensors = array("BTS2_VD6_1300097","ХВС","BTS2_VD7_1300097","ГВС","0","ХВС2","0","ГВС2","MRC2_14987223");	$this->chanals= array(6,38,7,38);	 break;
case"147":$this->sensors = array("BTS2_VD0_1300063","ХВС","BTS2_VD1_1300063","ГВС","0","ХВС2","0","ГВС2","MRC2_14994090");	$this->chanals= array(0,39,1,39);	 break;
case"148":$this->sensors = array("BTS2_VD2_1300063","ХВС","BTS2_VD3_1300063","ГВС","0","ХВС2","0","ГВС2","MRC2_14989476");	$this->chanals= array(2,39,3,39);	 break;
case"149":$this->sensors = array("BTS2_VD4_1300063","ХВС","BTS2_VD5_1300063","ГВС","0","ХВС2","0","ГВС2","MRC2_14994131");	$this->chanals= array(4,39,5,39);	 break;
case"150":$this->sensors = array("BTS2_VD6_1300063","ХВС","BTS2_VD7_1300063","ГВС","0","ХВС2","0","ГВС2","MRC2_14994135");	$this->chanals= array(6,39,7,39); 	 break;
		
case"Все": break;		
default: require 'alert_flat.js'; die;		
}		
?>		
