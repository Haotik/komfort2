<?php		
//$this->flat = $_POST['flat']		
$this->ipAddres = "192.168.1.27";

if ($this->flat>0 && $this->flat<21){$this->rsNum = "20";}
elseif (($this->flat>20 && $this->flat<36)) {$this->rsNum = "21";}
elseif (($this->flat>35 && $this->flat<51)) {$this->rsNum = "22";}


switch ($this->flat) {		
case"1":$this->sensors = array("BTS2_VD0_1200291","ХВС","BTS2_VD1_1200291","ГВС","BTS2_VD2_1200291","ХВС2","BTS2_VD3_1200291","ГВС2","MRC2_21944607");	$this->chanals= array(0,1,1,1,2,1,3,1);	 break;
case"2":$this->sensors = array("BTS2_VD4_1200291","ХВС","BTS2_VD5_1200291","ГВС","0","ХВС2","0","ГВС2","MRC2_21944016");	$this->chanals= array(4,1,5,1);	 break;
case"3":$this->sensors = array("BTS2_VD6_1200291","ХВС","BTS2_VD7_1200291","ГВС","0","ХВС2","0","ГВС2","MRC2_21945918");	$this->chanals= array(6,1,7,1);	 break;
case"4":$this->sensors = array("BTS2_VD0_1400112","ХВС","BTS2_VD1_1400112","ГВС","0","ХВС2","0","ГВС2","MRC2_21944665");	$this->chanals= array(0,2,1,2);	 break;
case"5":$this->sensors = array("BTS2_VD2_1400112","ХВС","BTS2_VD3_1400112","ГВС","BTS2_VD4_1400112","ХВС2","BTS2_VD5_1400112","ГВС2","MRC2_21944601");	$this->chanals= array(2,2,3,2,4,2,5,2);	 break;
case"6":$this->sensors = array("BTS2_VD6_1400112","ХВС","BTS2_VD7_1400112","ГВС","BTS2_VD0_1400117","ХВС2","BTS2_VD1_1400117","ГВС2","MRC2_21944606");	$this->chanals= array(6,2,7,2,0,3,1,3);	 break;
case"7":$this->sensors = array("BTS2_VD2_1400117","ХВС","BTS2_VD3_1400117","ГВС","0","ХВС2","0","ГВС2","MRC2_21944625");	$this->chanals= array(2,3,3,3);	 break;
case"8":$this->sensors = array("BTS2_VD4_1400117","ХВС","BTS2_VD5_1400117","ГВС","0","ХВС2","0","ГВС2","MRC2_21944650");	$this->chanals= array(4,3,5,3);	 break;
case"9":$this->sensors = array("BTS2_VD6_1400117","ХВС","BTS2_VD7_1400117","ГВС","0","ХВС2","0","ГВС2","MRC2_21944670");	$this->chanals= array(6,3,7,3);	 break;
case"10":$this->sensors = array("BTS2_VD0_1200164","ХВС","BTS2_VD1_1200164","ГВС","BTS2_VD2_1200164","ХВС2","BTS2_VD3_1200164","ГВС2","MRC2_21944671");	$this->chanals= array(0,4,1,4,2,4,3,4);	 break;
case"11":$this->sensors = array("BTS2_VD4_1200164","ХВС","BTS2_VD5_1200164","ГВС","BTS2_VD6_1200164","ХВС2","BTS2_VD7_1200164","ГВС2","MRC2_21944649");	$this->chanals= array(4,4,5,4,6,4,7,4);	 break;
case"12":$this->sensors = array("BTS2_VD0_1400108","ХВС","BTS2_VD1_1400108","ГВС","0","ХВС2","0","ГВС2","MRC2_21944651");	$this->chanals= array(0,5,1,5);	 break;
case"13":$this->sensors = array("BTS2_VD2_1400108","ХВС","BTS2_VD3_1400108","ГВС","0","ХВС2","0","ГВС2","MRC2_21944818");	$this->chanals= array(2,5,3,5);	 break;
case"14":$this->sensors = array("BTS2_VD4_1400108","ХВС","BTS2_VD5_1400108","ГВС","0","ХВС2","0","ГВС2","MRC2_21944824");	$this->chanals= array(4,5,5,5);	 break;
case"15":$this->sensors = array("BTS2_VD6_1400108","ХВС","BTS2_VD7_1400108","ГВС","BTS2_VD0_1400109","ХВС2","BTS2_VD1_1400109","ГВС2","MRC2_21944897");	$this->chanals= array(6,5,7,5,0,6,1,6);	 break;
case"16":$this->sensors = array("BTS2_VD2_1400109","ХВС","BTS2_VD3_1400109","ГВС","BTS2_VD4_1400109","ХВС2","BTS2_VD5_1400109","ГВС2","MRC2_21944900");	$this->chanals= array(2,6,3,6,4,6,5,6);	 break;
case"17":$this->sensors = array("BTS2_VD6_1400109","ХВС","BTS2_VD7_1400109","ГВС","0","ХВС2","0","ГВС2","MRC2_21944838");	$this->chanals= array(6,6,7,6);	 break;
case"18":$this->sensors = array("BTS2_VD0_1400119","ХВС","BTS2_VD1_1400119","ГВС","0","ХВС2","0","ГВС2","MRC2_21944851");	$this->chanals= array(0,7,1,7);	 break;
case"19":$this->sensors = array("BTS2_VD2_1400119","ХВС","BTS2_VD3_1400119","ГВС","0","ХВС2","0","ГВС2","MRC2_21944809");	$this->chanals= array(2,7,3,7);	 break;
case"20":$this->sensors = array("BTS2_VD4_1400119","ХВС","BTS2_VD5_1400119","ГВС","BTS2_VD6_1400119","ХВС2","BTS2_VD7_1400119","ГВС2","MRC2_21944808");	$this->chanals= array(4,7,5,7,6,7,7,7);	 break;
case"21":$this->sensors = array("BTS2_VD0_1400115","ХВС","BTS2_VD1_1400115","ГВС","BTS2_VD2_1400115","ХВС2","BTS2_VD3_1400115","ГВС2","MRC2_21944823");	$this->chanals= array(0,8,1,8,2,8,3,8);	 break;
case"22":$this->sensors = array("BTS2_VD4_1400115","ХВС","BTS2_VD5_1400115","ГВС","0","ХВС2","0","ГВС2","MRC2_21944840");	$this->chanals= array(4,8,5,8);	 break;
case"23":$this->sensors = array("BTS2_VD6_1400115","ХВС","BTS2_VD7_1400115","ГВС","0","ХВС2","0","ГВС2","MRC2_21944826");	$this->chanals= array(6,8,7,8);	 break;
case"24":$this->sensors = array("BTS2_VD0_1400106","ХВС","BTS2_VD1_1400106","ГВС","0","ХВС2","0","ГВС2","MRC2_21944807");	$this->chanals= array(0,9,1,9);	 break;
case"25":$this->sensors = array("BTS2_VD2_1400106","ХВС","BTS2_VD3_1400106","ГВС","BTS2_VD4_1400106","ХВС2","BTS2_VD5_1400106","ГВС2","MRC2_21944948");	$this->chanals= array(2,9,3,9,4,9,5,9);	 break;
case"26":$this->sensors = array("BTS2_VD6_1400106","ХВС","BTS2_VD7_1400106","ГВС","BTS2_VD0_1400120","ХВС2","BTS2_VD1_1400120","ГВС2","MRC2_21944946");	$this->chanals= array(6,9,7,9,0,10,1,10);	 break;
case"27":$this->sensors = array("BTS2_VD2_1400120","ХВС","BTS2_VD3_1400120","ГВС","0","ХВС2","0","ГВС2","MRC2_21944945");	$this->chanals= array(2,10,3,10);	 break;
case"28":$this->sensors = array("BTS2_VD4_1400120","ХВС","BTS2_VD5_1400120","ГВС","0","ХВС2","0","ГВС2","MRC2_21944963");	$this->chanals= array(4,10,5,10);	 break;
case"29":$this->sensors = array("BTS2_VD6_1400120","ХВС","BTS2_VD7_1400120","ГВС","0","ХВС2","0","ГВС2","MRC2_21944955");	$this->chanals= array(6,10,7,10);	 break;
case"30":$this->sensors = array("BTS2_VD0_1200021","ХВС","BTS2_VD1_1200021","ГВС","BTS2_VD2_1200021","ХВС2","BTS2_VD3_1200021","ГВС2","MRC2_21944961");	$this->chanals= array(0,11,1,11,2,11,3,11);	 break;
case"31":$this->sensors = array("BTS2_VD4_1200021","ХВС","BTS2_VD5_1200021","ГВС","BTS2_VD6_1200021","ХВС2","BTS2_VD7_1200021","ГВС2","MRC2_21944962");	$this->chanals= array(4,11,5,11,6,11,7,11);	 break;
case"32":$this->sensors = array("BTS2_VD0_1400104","ХВС","BTS2_VD1_1400104","ГВС","0","ХВС2","0","ГВС2","MRC2_21944912");	$this->chanals= array(0,12,1,12);	 break;
case"33":$this->sensors = array("BTS2_VD2_1400104","ХВС","BTS2_VD3_1400104","ГВС","0","ХВС2","0","ГВС2","MRC2_21944936");	$this->chanals= array(2,12,3,12);	 break;
case"34":$this->sensors = array("BTS2_VD4_1400104","ХВС","BTS2_VD5_1400104","ГВС","0","ХВС2","0","ГВС2","MRC2_21944936");	$this->chanals= array(4,12,5,12);	 break;
case"35":$this->sensors = array("BTS2_VD0_1400110","ХВС","BTS2_VD1_1400110","ГВС","BTS2_VD2_1400110","ХВС2","BTS2_VD3_1400110","ГВС2","MRC2_21944933");	$this->chanals= array(0,13,1,13,2,13,3,13);	 break;
case"36":$this->sensors = array("BTS2_VD0_1400105","ХВС","BTS2_VD1_1400105","ГВС","BTS2_VD2_1400105","ХВС2","BTS2_VD3_1400105","ГВС2","MRC2_21944924");	$this->chanals= array(0,14,1,14,2,14,3,14);	 break;
case"37":$this->sensors = array("BTS2_VD4_1400105","ХВС","BTS2_VD5_1400105","ГВС","0","ХВС2","0","ГВС2","MRC2_21944653");	$this->chanals= array(4,14,5,14);	 break;
case"38":$this->sensors = array("BTS2_VD6_1400105","ХВС","BTS2_VD7_1400105","ГВС","0","ХВС2","0","ГВС2","MRC2_21944663");	$this->chanals= array(6,14,7,14);	 break;
case"39":$this->sensors = array("BTS2_VD0_1400118","ХВС","BTS2_VD1_1400118","ГВС","0","ХВС2","0","ГВС2","MRC2_21944604");	$this->chanals= array(0,15,1,15);	 break;
case"40":$this->sensors = array("BTS2_VD2_1400118","ХВС","BTS2_VD3_1400118","ГВС","BTS2_VD4_1400118","ХВС2","BTS2_VD5_1400118","ГВС2","MRC2_21944666");	$this->chanals= array(2,15,3,15,4,15,5,15);	 break;
case"41":$this->sensors = array("BTS2_VD6_1400118","ХВС","BTS2_VD7_1400118","ГВС","BTS2_VD0_1400111","ХВС2","BTS2_VD1_1400111","ГВС2","MRC2_21944669");	$this->chanals= array(6,15,7,15,0,16,1,16);	 break;
case"42":$this->sensors = array("BTS2_VD2_1400111","ХВС","BTS2_VD3_1400111","ГВС","0","ХВС2","0","ГВС2","MRC2_21944620");	$this->chanals= array(2,16,3,16);	 break;
case"43":$this->sensors = array("BTS2_VD4_1400111","ХВС","BTS2_VD5_1400111","ГВС","0","ХВС2","0","ГВС2","MRC2_21944596");	$this->chanals= array(4,16,5,16);	 break;
case"44":$this->sensors = array("BTS2_VD6_1400111","ХВС","BTS2_VD7_1400111","ГВС","0","ХВС2","0","ГВС2","MRC2_21944673");	$this->chanals= array(6,16,7,16);	 break;
case"45":$this->sensors = array("BTS2_VD0_1400107","ХВС","BTS2_VD1_1400107","ГВС","BTS2_VD2_1400107","ХВС2","BTS2_VD3_1400107","ГВС2","MRC2_21944676");	$this->chanals= array(0,17,1,17,2,17,3,17);	 break;
case"46":$this->sensors = array("BTS2_VD4_1400107","ХВС","BTS2_VD5_1400107","ГВС","BTS2_VD6_1400107","ХВС2","BTS2_VD7_1400107","ГВС2","MRC2_21944654");	$this->chanals= array(4,17,5,17,6,17,7,17);	 break;
case"47":$this->sensors = array("BTS2_VD0_1400113","ХВС","BTS2_VD1_1400113","ГВС","0","ХВС2","0","ГВС2","MRC2_21944668");	$this->chanals= array(0,18,1,18);	 break;
case"48":$this->sensors = array("BTS2_VD2_1400113","ХВС","BTS2_VD3_1400113","ГВС","0","ХВС2","0","ГВС2","MRC2_21944611");	$this->chanals= array(2,18,3,18);	 break;
case"49":$this->sensors = array("BTS2_VD4_1400113","ХВС","BTS2_VD5_1400113","ГВС","0","ХВС2","0","ГВС2","MRC2_21944652");	$this->chanals= array(4,18,5,18);	 break;
case"50":$this->sensors = array("BTS2_VD0_1400114","ХВС","BTS2_VD1_1400114","ГВС","BTS2_VD2_1400114","ХВС2","BTS2_VD3_1400114","ГВС2","MRC2_21944667");	$this->chanals= array(0,19,1,19,2,19,3,19); 	 break;
		
case"Все": break;		
default: require 'alert_flat.js'; die;		
}		