<?php		
//$this->flat = $_POST['flat']		
$this->ipAddres = "192.168.1.37";

if ($this->flat>0 && $this->flat<16){$this->rsNum = "101";}
elseif (($this->flat>15 && $this->flat<31)) {$this->rsNum = "104";}
elseif (($this->flat>30 && $this->flat<51)) {$this->rsNum = "107";}

switch ($this->flat) {		
case"1":$this->sensors = array("BTS2_VD0_1500210","ХВС","BTS2_VD1_1500210","ГВС","BTS2_VD2_1500210","ХВС2","BTS2_VD3_1500210","ГВС2","MRC2_21944560");	$this->chanals= array(0,1,1,1,2,1,3,1);	 break;
case"2":$this->sensors = array("BTS2_VD4_1500210","ХВС","BTS2_VD5_1500210","ГВС","0","ХВС2","0","ГВС2","MRC2_23813040");	$this->chanals= array(4,1,5,1);	 break;
case"3":$this->sensors = array("BTS2_VD6_1500210","ХВС","BTS2_VD7_1500210","ГВС","0","ХВС2","0","ГВС2","MRC2_21944035");	$this->chanals= array(6,1,7,1);	 break;
case"4":$this->sensors = array("BTS2_VD0_1500232","ХВС","BTS2_VD1_1500232","ГВС","0","ХВС2","0","ГВС2","MRC2_21946137");	$this->chanals= array(0,2,1,2);	 break;
case"5":$this->sensors = array("BTS2_VD2_1500232","ХВС","BTS2_VD3_1500232","ГВС","BTS2_VD4_1500232","ХВС2","BTS2_VD5_1500232","ГВС2","MRC2_21944581");	$this->chanals= array(2,2,3,2,4,2,5,2);	 break;
case"6":$this->sensors = array("BTS2_VD6_1500232","ХВС","BTS2_VD7_1500232","ГВС","BTS2_VD0_1500209","ХВС2","BTS2_VD1_1500209","ГВС2","MRC2_23812802");	$this->chanals= array(6,2,7,2,0,3,1,3);	 break;
case"7":$this->sensors = array("BTS2_VD2_1500209","ХВС","BTS2_VD3_1500209","ГВС","0","ХВС2","0","ГВС2","MRC2_23812611");	$this->chanals= array(2,3,3,3);	 break;
case"8":$this->sensors = array("BTS2_VD4_1500209","ХВС","BTS2_VD5_1500209","ГВС","0","ХВС2","0","ГВС2","MRC2_23812616");	$this->chanals= array(4,3,5,3);	 break;
case"9":$this->sensors = array("BTS2_VD6_1500209","ХВС","BTS2_VD7_1500209","ГВС","0","ХВС2","0","ГВС2","MRC2_23812531");	$this->chanals= array(6,3,7,3);	 break;
case"10":$this->sensors = array("BTS2_VD0_1500219","ХВС","BTS2_VD1_1500219","ГВС","BTS2_VD2_1500219","ХВС2","BTS2_VD3_1500219","ГВС2","MRC2_23812580");	$this->chanals= array(0,4,1,4,2,4,3,4);	 break;
case"11":$this->sensors = array("BTS2_VD4_1500219","ХВС","BTS2_VD5_1500219","ГВС","BTS2_VD6_1500219","ХВС2","BTS2_VD7_1500219","ГВС2","MRC2_23812581");	$this->chanals= array(4,4,5,4,6,4,7,4);	 break;
case"12":$this->sensors = array("BTS2_VD0_1500230","ХВС","BTS2_VD1_1500230","ГВС","0","ХВС2","0","ГВС2","MRC2_23812558");	$this->chanals= array(0,5,1,5);	 break;
case"13":$this->sensors = array("BTS2_VD2_1500230","ХВС","BTS2_VD3_1500230","ГВС","0","ХВС2","0","ГВС2","MRC2_21943752");	$this->chanals= array(2,5,3,5);	 break;
case"14":$this->sensors = array("BTS2_VD4_1500230","ХВС","BTS2_VD5_1500230","ГВС","0","ХВС2","0","ГВС2","MRC2_21943732");	$this->chanals= array(4,5,5,5);	 break;
case"15":$this->sensors = array("BTS2_VD6_1500230","ХВС","BTS2_VD7_1500230","ГВС","BTS2_VD0_1500208","ХВС2","BTS2_VD1_1500208","ГВС2","MRC2_21946239");	$this->chanals= array(6,5,7,5,0,6,1,6);	 break;
case"16":$this->sensors = array("BTS2_VD0_1500221","ХВС","BTS2_VD1_1500221","ГВС","BTS2_VD2_1500221","ХВС2","BTS2_VD3_1500221","ГВС2","MRC2_21943946");	$this->chanals= array(0,7,1,7,2,7,3,7);	 break;
case"17":$this->sensors = array("BTS2_VD4_1500221","ХВС","BTS2_VD5_1500221","ГВС","0","ХВС2","0","ГВС2","MRC2_21943724");	$this->chanals= array(4,7,5,7);	 break;
case"18":$this->sensors = array("BTS2_VD6_1500221","ХВС","BTS2_VD7_1500221","ГВС","0","ХВС2","0","ГВС2","MRC2_23812587");	$this->chanals= array(6,7,7,7);	 break;
case"19":$this->sensors = array("BTS2_VD0_1500204","ХВС","BTS2_VD1_1500204","ГВС","0","ХВС2","0","ГВС2","MRC2_23812586");	$this->chanals= array(0,8,1,8);	 break;
case"20":$this->sensors = array("BTS2_VD2_1500204","ХВС","BTS2_VD3_1500204","ГВС","BTS2_VD4_1500204","ХВС2","BTS2_VD5_1500204","ГВС2","MRC2_23812553");	$this->chanals= array(2,8,3,8,4,8,5,8);	 break;
case"21":$this->sensors = array("BTS2_VD6_1500204","ХВС","BTS2_VD7_1500204","ГВС","BTS2_VD0_1500229","ХВС2","BTS2_VD1_1500229","ГВС2","MRC2_23812557");	$this->chanals= array(6,8,7,8,0,9,1,9);	 break;
case"22":$this->sensors = array("BTS2_VD2_1500229","ХВС","BTS2_VD3_1500229","ГВС","0","ХВС2","0","ГВС2","MRC2_23812589");	$this->chanals= array(2,9,3,9);	 break;
case"23":$this->sensors = array("BTS2_VD4_1500229","ХВС","BTS2_VD5_1500229","ГВС","0","ХВС2","0","ГВС2","MRC2_23812552");	$this->chanals= array(4,9,5,9);	 break;
case"24":$this->sensors = array("BTS2_VD6_1500229","ХВС","BTS2_VD7_1500229","ГВС","0","ХВС2","0","ГВС2","MRC2_23812554");	$this->chanals= array(6,9,7,9);	 break;
case"25":$this->sensors = array("BTS2_VD0_1500207","ХВС","BTS2_VD1_1500207","ГВС","BTS2_VD2_1500207","ХВС2","BTS2_VD3_1500207","ГВС2","MRC2_23812556");	$this->chanals= array(0,10,1,10,2,10,3,10);	 break;
case"26":$this->sensors = array("BTS2_VD4_1500207","ХВС","BTS2_VD5_1500207","ГВС","BTS2_VD6_1500207","ХВС2","BTS2_VD7_1500207","ГВС2","MRC2_23812588");	$this->chanals= array(4,10,5,10,6,10,7,10);	 break;
case"27":$this->sensors = array("BTS2_VD0_1500231","ХВС","BTS2_VD1_1500231","ГВС","0","ХВС2","0","ГВС2","MRC2_23813224");	$this->chanals= array(0,11,1,11);	 break;
case"28":$this->sensors = array("BTS2_VD2_1500231","ХВС","BTS2_VD3_1500231","ГВС","0","ХВС2","0","ГВС2","MRC2_23813245");	$this->chanals= array(2,11,3,11);	 break;
case"29":$this->sensors = array("BTS2_VD4_1500231","ХВС","BTS2_VD5_1500231","ГВС","0","ХВС2","0","ГВС2","MRC2_23813212");	$this->chanals= array(4,11,5,11);	 break;
case"30":$this->sensors = array("BTS2_VD6_1500231","ХВС","BTS2_VD7_1500231","ГВС","BTS2_VD0_1500218","ХВС2","BTS2_VD1_1500218","ГВС2","MRC2_23813263");	$this->chanals= array(6,11,7,11,0,12,1,12);	 break;
case"31":$this->sensors = array("BTS2_VD0_1500205","ХВС","BTS2_VD1_1500205","ГВС","BTS2_VD2_1500205","ХВС2","BTS2_VD3_1500205","ГВС2","MRC2_23813246");	$this->chanals= array(0,13,1,13,2,13,3,13);	 break;
case"32":$this->sensors = array("BTS2_VD4_1500205","ХВС","BTS2_VD5_1500205","ГВС","0","ХВС2","0","ГВС2","MRC2_23813046");	$this->chanals= array(4,13,5,13);	 break;
case"33":$this->sensors = array("BTS2_VD6_1500205","ХВС","BTS2_VD7_1500205","ГВС","0","ХВС2","0","ГВС2","MRC2_23813264");	$this->chanals= array(6,13,7,13);	 break;
case"34":$this->sensors = array("BTS2_VD0_1500203","ХВС","BTS2_VD1_1500203","ГВС","0","ХВС2","0","ГВС2","MRC2_23813208");	$this->chanals= array(0,14,1,14);	 break;
case"35":$this->sensors = array("BTS2_VD2_1500203","ХВС","BTS2_VD3_1500203","ГВС","BTS2_VD4_1500203","ХВС2","BTS2_VD5_1500203","ГВС2","MRC2_23813026");	$this->chanals= array(2,14,3,14,4,14,5,14);	 break;
case"36":$this->sensors = array("BTS2_VD6_1500203","ХВС","BTS2_VD7_1500203","ГВС","BTS2_VD0_1500215","ХВС2","BTS2_VD1_1500215","ГВС2","MRC2_23813258");	$this->chanals= array(6,14,7,14,0,15,1,15);	 break;
case"37":$this->sensors = array("BTS2_VD2_1500215","ХВС","BTS2_VD3_1500215","ГВС","0","ХВС2","0","ГВС2","MRC2_23813257");	$this->chanals= array(2,15,3,15);	 break;
case"38":$this->sensors = array("BTS2_VD4_1500215","ХВС","BTS2_VD5_1500215","ГВС","0","ХВС2","0","ГВС2","MRC2_23813223");	$this->chanals= array(4,15,5,15);	 break;
case"39":$this->sensors = array("BTS2_VD6_1500215","ХВС","BTS2_VD7_1500215","ГВС","0","ХВС2","0","ГВС2","MRC2_23813207");	$this->chanals= array(6,15,7,15);	 break;
case"40":$this->sensors = array("BTS2_VD0_1500228","ХВС","BTS2_VD1_1500228","ГВС","BTS2_VD2_1500228","ХВС2","BTS2_VD3_1500228","ГВС2","MRC2_23813241");	$this->chanals= array(0,16,1,16,2,16,3,16);	 break;
case"41":$this->sensors = array("BTS2_VD4_1500228","ХВС","BTS2_VD5_1500228","ГВС","BTS2_VD6_1500228","ХВС2","BTS2_VD7_1500228","ГВС2","MRC2_23813047");	$this->chanals= array(4,16,5,16,6,16,7,16);	 break;
case"42":$this->sensors = array("BTS2_VD0_1500206","ХВС","BTS2_VD1_1500206","ГВС","0","ХВС2","0","ГВС2","MRC2_23813027");	$this->chanals= array(0,17,1,17);	 break;
case"43":$this->sensors = array("BTS2_VD2_1500206","ХВС","BTS2_VD3_1500206","ГВС","0","ХВС2","0","ГВС2","MRC2_23813037");	$this->chanals= array(2,17,3,17);	 break;
case"44":$this->sensors = array("BTS2_VD4_1500206","ХВС","BTS2_VD5_1500206","ГВС","0","ХВС2","0","ГВС2","MRC2_23813262");	$this->chanals= array(4,17,5,17);	 break;
case"45":$this->sensors = array("BTS2_VD6_1500206","ХВС","BTS2_VD7_1500206","ГВС","BTS2_VD0_1500217","ХВС2","BTS2_VD1_1500217","ГВС2","MRC2_23813242");	$this->chanals= array(6,17,7,17,0,18,1,18);	 break;
case"46":$this->sensors = array("BTS2_VD2_1500217","ХВС","BTS2_VD3_1500217","ГВС","BTS2_VD4_1500217","ХВС2","BTS2_VD5_1500217","ГВС2","MRC2_23812885");	$this->chanals= array(2,18,3,18,4,18,5,18);	 break;
case"47":$this->sensors = array("BTS2_VD6_1500217","ХВС","BTS2_VD7_1500217","ГВС","0","ХВС2","0","ГВС2","MRC2_23812884");	$this->chanals= array(6,18,7,18);	 break;
case"48":$this->sensors = array("BTS2_VD0_1500220","ХВС","BTS2_VD1_1500220","ГВС","0","ХВС2","0","ГВС2","MRC2_23813261");	$this->chanals= array(0,19,1,19);	 break;
case"49":$this->sensors = array("BTS2_VD2_1500220","ХВС","BTS2_VD3_1500220","ГВС","0","ХВС2","0","ГВС2","MRC2_23813188");	$this->chanals= array(2,19,3,19);	 break;
case"50":$this->sensors = array("BTS2_VD4_1500220","ХВС","BTS2_VD5_1500220","ГВС","BTS2_VD6_1500220","ХВС2","BTS2_VD7_1500220","ГВС2","MRC2_23813255");	$this->chanals= array(4,19,5,19,6,19,7,19); 	 break;
case"Все": break;		
default: require 'alert_flat.js'; die;
}
?>		
