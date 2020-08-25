<?php		
//$this->flat = $_POST['flat']		
$this->ipAddres="192.168.1.213";	

if ($this->flat>0 && $this->flat<25){$this->rsNum = "30";}
elseif (($this->flat>24 && $this->flat<43)) {$this->rsNum = "31";}
elseif (($this->flat>42 && $this->flat<61)) {$this->rsNum = "32";}
elseif (($this->flat>60 && $this->flat<78)) {$this->rsNum = "33";}
elseif (($this->flat=="73а")) {$this->rsNum = "33";}

switch ($this->flat) {		
case"1":$this->sensors = array("BTS2_VD0_1200014","ХВС","BTS2_VD1_1200014","ГВС","0","ХВС2","0","ГВС2","MRC2_9766573");	$this->chanals= array(0,1,1,1);	 break;
case"2":$this->sensors = array("BTS2_VD2_1200014","ХВС","BTS2_VD3_1200014","ГВС","0","ХВС2","0","ГВС2","MRC2_9766617");	$this->chanals= array(2,1,3,1);	 break;
case"3":$this->sensors = array("BTS2_VD4_1200014","ХВС","BTS2_VD5_1200014","ГВС","0","ХВС2","0","ГВС2","MRC2_9766463");	$this->chanals= array(4,1,5,1);	 break;
case"4":$this->sensors = array("BTS2_VD6_1200014","ХВС","BTS2_VD7_1200014","ГВС","0","ХВС2","0","ГВС2","MRC2_9766461");	$this->chanals= array(6,1,7,1);	 break;
case"5":$this->sensors = array("BTS2_VD0_1200022","ХВС","BTS2_VD1_1200022","ГВС","BTS2_VD2_1200022","ХВС2","BTS2_VD3_1200022","ГВС2","MRC2_9766500");	$this->chanals= array(0,2,1,2,2,2,3,2);	 break;
case"6":$this->sensors = array("BTS2_VD4_1200022","ХВС","BTS2_VD5_1200022","ГВС","0","ХВС2","0","ГВС2","MRC2_9766608");	$this->chanals= array(4,2,5,2);	 break;
case"7":$this->sensors = array("BTS2_VD6_1200022","ХВС","BTS2_VD7_1200022","ГВС","0","ХВС2","0","ГВС2","MRC2_9766481");	$this->chanals= array(6,2,7,2);	 break;
case"8":$this->sensors = array("BTS2_VD0_1200043","ХВС","BTS2_VD1_1200043","ГВС","0","ХВС2","0","ГВС2","MRC2_9766577");	$this->chanals= array(0,3,1,3);	 break;
case"9":$this->sensors = array("BTS2_VD2_1200043","ХВС","BTS2_VD3_1200043","ГВС","0","ХВС2","0","ГВС2","MRC2_9766489");	$this->chanals= array(2,3,3,3);	 break;
case"10":$this->sensors = array("BTS2_VD4_1200043","ХВС","BTS2_VD5_1200043","ГВС","0","ХВС2","0","ГВС2","MRC2_9766482");	$this->chanals= array(4,3,5,3);	 break;
case"11":$this->sensors = array("BTS2_VD6_1200043","ХВС","BTS2_VD7_1200043","ГВС","BTS2_VD0_1200175","ХВС2","BTS2_VD1_1200175","ГВС2","MRC2_9766462");	$this->chanals= array(6,3,7,3,0,4,1,4);	 break;
case"12":$this->sensors = array("BTS2_VD2_1200175","ХВС","BTS2_VD3_1200175","ГВС","0","ХВС2","0","ГВС2","MRC2_9766460");	$this->chanals= array(2,4,3,4);	 break;
case"13":$this->sensors = array("BTS2_VD4_1200175","ХВС","BTS2_VD5_1200175","ГВС","0","ХВС2","0","ГВС2","MRC2_9766486");	$this->chanals= array(4,4,5,4);	 break;
case"14":$this->sensors = array("BTS2_VD6_1200175","ХВС","BTS2_VD7_1200175","ГВС","0","ХВС2","0","ГВС2","MRC2_9766458");	$this->chanals= array(6,4,7,4);	 break;
case"15":$this->sensors = array("BTS2_VD0_1200068","ХВС","BTS2_VD1_1200068","ГВС","0","ХВС2","0","ГВС2","MRC2_9766397");	$this->chanals= array(0,5,1,5);	 break;
case"16":$this->sensors = array("BTS2_VD2_1200068","ХВС","BTS2_VD3_1200068","ГВС","0","ХВС2","0","ГВС2","MRC2_9766400");	$this->chanals= array(2,5,3,5);	 break;
case"17":$this->sensors = array("BTS2_VD4_1200068","ХВС","BTS2_VD5_1200068","ГВС","BTS2_VD6_1200068","ХВС2","BTS2_VD7_1200068","ГВС2","MRC2_9766395");	$this->chanals= array(4,5,5,5,6,5,7,5);	 break;
case"18":$this->sensors = array("BTS2_VD0_1200142","ХВС","BTS2_VD1_1200142","ГВС","0","ХВС2","0","ГВС2","MRC2_9766574");	$this->chanals= array(0,6,1,6);	 break;
case"19":$this->sensors = array("BTS2_VD2_1200142","ХВС","BTS2_VD3_1200142","ГВС","0","ХВС2","0","ГВС2","MRC2_9766451");	$this->chanals= array(2,6,3,6);	 break;
case"20":$this->sensors = array("BTS2_VD4_1200142","ХВС","BTS2_VD5_1200142","ГВС","0","ХВС2","0","ГВС2","MRC2_9766405");	$this->chanals= array(4,6,5,6);	 break;
case"21":$this->sensors = array("BTS2_VD6_1200142","ХВС","BTS2_VD7_1200142","ГВС","0","ХВС2","0","ГВС2","MRC2_9766326");	$this->chanals= array(6,6,7,6);	 break;
case"22":$this->sensors = array("BTS2_VD0_1200049","ХВС","BTS2_VD1_1200049","ГВС","0","ХВС2","0","ГВС2","MRC2_9766464");	$this->chanals= array(0,7,1,7);	 break;
case"23":$this->sensors = array("BTS2_VD2_1200049","ХВС","BTS2_VD3_1200049","ГВС","BTS2_VD4_1200049","ХВС2","BTS2_VD5_1200049","ГВС2","MRC2_9766614");	$this->chanals= array(2,7,3,7,4,7,5,7);	 break;
case"24":$this->sensors = array("BTS2_VD6_1200049","ХВС","BTS2_VD7_1200049","ГВС","0","ХВС2","0","ГВС2","MRC2_9766385");	$this->chanals= array(6,7,7,7);	 break;
case"25":$this->sensors = array("BTS2_VD0_1200037","ХВС","BTS2_VD1_1200037","ГВС","0","ХВС2","0","ГВС2","MRC2_9766454");	$this->chanals= array(0,8,1,8);	 break;
case"26":$this->sensors = array("BTS2_VD2_1200037","ХВС","BTS2_VD3_1200037","ГВС","0","ХВС2","0","ГВС2","MRC2_9766490");	$this->chanals= array(2,8,3,8);	 break;
case"27":$this->sensors = array("BTS2_VD4_1200037","ХВС","BTS2_VD5_1200037","ГВС","0","ХВС2","0","ГВС2","MRC2_9766610");	$this->chanals= array(4,8,5,8);	 break;
case"28":$this->sensors = array("BTS2_VD6_1200037","ХВС","BTS2_VD7_1200037","ГВС","0","ХВС2","0","ГВС2","MRC2_9766484");	$this->chanals= array(6,8,7,8);	 break;
case"29":$this->sensors = array("BTS2_VD0_1200070","ХВС","BTS2_VD1_1200070","ГВС","BTS2_VD2_1200070","ХВС2","BTS2_VD3_1200070","ГВС2","MRC2_9766604");	$this->chanals= array(0,9,1,9,2,9,3,9);	 break;
case"30":$this->sensors = array("BTS2_VD4_1200070","ХВС","BTS2_VD5_1200070","ГВС","0","ХВС2","0","ГВС2","MRC2_9766491");	$this->chanals= array(4,9,5,9);	 break;
case"31":$this->sensors = array("BTS2_VD6_1200070","ХВС","BTS2_VD7_1200070","ГВС","0","ХВС2","0","ГВС2","MRC2_9766576");	$this->chanals= array(6,9,7,9);	 break;
case"32":$this->sensors = array("BTS2_VD0_1200056","ХВС","BTS2_VD1_1200056","ГВС","0","ХВС2","0","ГВС2","MRC2_9766488");	$this->chanals= array(0,10,1,10);	 break;
case"33":$this->sensors = array("BTS2_VD2_1200056","ХВС","BTS2_VD3_1200056","ГВС","0","ХВС2","0","ГВС2","MRC2_9766457");	$this->chanals= array(2,10,3,10);	 break;
case"34":$this->sensors = array("BTS2_VD4_1200056","ХВС","BTS2_VD5_1200056","ГВС","0","ХВС2","0","ГВС2","MRC2_9766611");	$this->chanals= array(4,10,5,10);	 break;
case"35":$this->sensors = array("BTS2_VD6_1200056","ХВС","BTS2_VD7_1200056","ГВС","BTS2_VD0_1200067","ХВС2","BTS2_VD1_1200067","ГВС2","MRC2_9766401");	$this->chanals= array(6,10,7,10,0,11,1,11);	 break;
case"36":$this->sensors = array("BTS2_VD2_1200067","ХВС","BTS2_VD3_1200067","ГВС","0","ХВС2","0","ГВС2","MRC2_9766616");	$this->chanals= array(2,11,3,11);	 break;
case"37":$this->sensors = array("BTS2_VD4_1200067","ХВС","BTS2_VD5_1200067","ГВС","0","ХВС2","0","ГВС2","MRC2_9766443");	$this->chanals= array(4,11,5,11);	 break;
case"38":$this->sensors = array("BTS2_VD6_1200067","ХВС","BTS2_VD7_1200067","ГВС","0","ХВС2","0","ГВС2","MRC2_9766324");	$this->chanals= array(6,11,7,11);	 break;
case"39":$this->sensors = array("BTS2_VD0_1200040","ХВС","BTS2_VD1_1200040","ГВС","0","ХВС2","0","ГВС2","MRC2_9766325");	$this->chanals= array(0,12,1,12);	 break;
case"40":$this->sensors = array("BTS2_VD2_1200040","ХВС","BTS2_VD3_1200040","ГВС","0","ХВС2","0","ГВС2","MRC2_9766444");	$this->chanals= array(2,12,3,12);	 break;
case"41":$this->sensors = array("BTS2_VD4_1200040","ХВС","BTS2_VD5_1200040","ГВС","BTS2_VD6_1200040","ХВС2","BTS2_VD7_1200040","ГВС2","MRC2_9766378");	$this->chanals= array(4,12,5,12,6,12,7,12);	 break;
case"42":$this->sensors = array("BTS2_VD0_1200173","ХВС","BTS2_VD1_1200173","ГВС","0","ХВС2","0","ГВС2","MRC2_9766424");	$this->chanals= array(0,13,1,13);	 break;
case"43":$this->sensors = array("BTS2_VD0_1200077","ХВС","BTS2_VD1_1200077","ГВС","0","ХВС2","0","ГВС2","MRC2_9766358");	$this->chanals= array(0,14,1,14);	 break;
case"44":$this->sensors = array("BTS2_VD2_1200077","ХВС","BTS2_VD3_1200077","ГВС","0","ХВС2","0","ГВС2","MRC2_9766479");	$this->chanals= array(2,14,3,14);	 break;
case"45":$this->sensors = array("BTS2_VD4_1200077","ХВС","BTS2_VD5_1200077","ГВС","0","ХВС2","0","ГВС2","MRC2_9766594");	$this->chanals= array(4,14,5,14);	 break;
case"46":$this->sensors = array("BTS2_VD6_1200077","ХВС","BTS2_VD7_1200077","ГВС","0","ХВС2","0","ГВС2","MRC2_9766414");	$this->chanals= array(6,14,7,14);	 break;
case"47":$this->sensors = array("BTS2_VD0_1100032","ХВС","BTS2_VD1_1100032","ГВС","BTS2_VD2_1100032","ХВС2","BTS2_VD3_1100032","ГВС2","MRC2_9766413");	$this->chanals= array(0,15,1,15,2,15,3,15);	 break;
case"48":$this->sensors = array("BTS2_VD4_1100032","ХВС","BTS2_VD5_1100032","ГВС","0","ХВС2","0","ГВС2","MRC2_9766331");	$this->chanals= array(4,15,5,15);	 break;
case"49":$this->sensors = array("BTS2_VD6_1100032","ХВС","BTS2_VD7_1100032","ГВС","0","ХВС2","0","ГВС2","MRC2_9766494");	$this->chanals= array(6,15,7,15);	 break;
case"50":$this->sensors = array("BTS2_VD0_1100022","ХВС","BTS2_VD1_1100022","ГВС","0","ХВС2","0","ГВС2","MRC2_9766566");	$this->chanals= array(0,16,1,16);	 break;
case"51":$this->sensors = array("BTS2_VD2_1100022","ХВС","BTS2_VD3_1100022","ГВС","0","ХВС2","0","ГВС2","MRC2_9766557");	$this->chanals= array(2,16,3,16);	 break;
case"52":$this->sensors = array("BTS2_VD4_1100022","ХВС","BTS2_VD5_1100022","ГВС","0","ХВС2","0","ГВС2","MRC2_9766445");	$this->chanals= array(4,16,5,16);	 break;
case"53":$this->sensors = array("BTS2_VD6_1100022","ХВС","BTS2_VD7_1100022","ГВС","BTS2_VD0_1200036","ХВС2","BTS2_VD1_1200036","ГВС2","MRC2_9766560");	$this->chanals= array(6,16,7,16,0,17,1,17);	 break;
case"54":$this->sensors = array("BTS2_VD2_1200036","ХВС","BTS2_VD3_1200036","ГВС","0","ХВС2","0","ГВС2","MRC2_9766564");	$this->chanals= array(2,17,3,17);	 break;
case"55":$this->sensors = array("BTS2_VD4_1200036","ХВС","BTS2_VD5_1200036","ГВС","0","ХВС2","0","ГВС2","MRC2_9766622");	$this->chanals= array(4,17,5,17);	 break;
case"56":$this->sensors = array("BTS2_VD6_1200036","ХВС","BTS2_VD7_1200036","ГВС","0","ХВС2","0","ГВС2","MRC2_9766496");	$this->chanals= array(6,17,7,17);	 break;
case"57":$this->sensors = array("BTS2_VD0_1100049","ХВС","BTS2_VD1_1100049","ГВС","0","ХВС2","0","ГВС2","MRC2_9766456");	$this->chanals= array(0,18,1,18);	 break;
case"58":$this->sensors = array("BTS2_VD2_1100049","ХВС","BTS2_VD3_1100049","ГВС","0","ХВС2","0","ГВС2","MRC2_9766412");	$this->chanals= array(2,18,3,18);	 break;
case"59":$this->sensors = array("BTS2_VD4_1100049","ХВС","BTS2_VD5_1100049","ГВС","BTS2_VD6_1100049","ХВС2","BTS2_VD7_1100049","ГВС2","MRC2_9766511");	$this->chanals= array(4,18,5,18,6,18,7,18);	 break;
case"60":$this->sensors = array("BTS2_VD0_1100060","ХВС","BTS2_VD1_1100060","ГВС","0","ХВС2","0","ГВС2","MRC2_9766631");	$this->chanals= array(0,19,1,19);	 break;
case"61":$this->sensors = array("BTS2_VD0_1200041","ХВС","BTS2_VD1_1200041","ГВС","0","ХВС2","0","ГВС2","MRC2_9766337");	$this->chanals= array(0,20,1,20);	 break;
case"62":$this->sensors = array("BTS2_VD2_1200041","ХВС","BTS2_VD3_1200041","ГВС","0","ХВС2","0","ГВС2","MRC2_9766323");	$this->chanals= array(2,20,3,20);	 break;
case"63":$this->sensors = array("BTS2_VD4_1200041","ХВС","BTS2_VD5_1200041","ГВС","0","ХВС2","0","ГВС2","MRC2_9766388");	$this->chanals= array(4,20,5,20);	 break;
case"64":$this->sensors = array("BTS2_VD6_1200041","ХВС","BTS2_VD7_1200041","ГВС","0","ХВС2","0","ГВС2","MRC2_9766336");	$this->chanals= array(6,20,7,20);	 break;
case"65":$this->sensors = array("BTS2_VD0_1100024","ХВС","BTS2_VD1_1100024","ГВС","BTS2_VD2_1100024","ХВС2","BTS2_VD3_1100024","ГВС2","MRC2_9766314");	$this->chanals= array(0,21,1,21,2,21,3,21);	 break;
case"66":$this->sensors = array("BTS2_VD4_1100024","ХВС","BTS2_VD5_1100024","ГВС","0","ХВС2","0","ГВС2","MRC2_9766420");	$this->chanals= array(4,21,5,21);	 break;
case"67":$this->sensors = array("BTS2_VD6_1100024","ХВС","BTS2_VD7_1100024","ГВС","0","ХВС2","0","ГВС2","MRC2_9766408");	$this->chanals= array(6,21,7,21,0,22,1,22);	 break;
case"68":$this->sensors = array("BTS2_VD2_1200005","ХВС","BTS2_VD3_1200005","ГВС","0","ХВС2","0","ГВС2","MRC2_9766383");	$this->chanals= array(2,22,3,22);	 break;
case"69":$this->sensors = array("BTS2_VD4_1200005","ХВС","BTS2_VD5_1200005","ГВС","0","ХВС2","0","ГВС2","MRC2_9766449");	$this->chanals= array(4,22,5,22);	 break;
case"70":$this->sensors = array("BTS2_VD6_1200005","ХВС","BTS2_VD7_1200005","ГВС","0","ХВС2","0","ГВС2","MRC2_9766516");	$this->chanals= array(6,22,7,22);	 break;
case"71":$this->sensors = array("BTS2_VD0_1200162","ХВС","BTS2_VD1_1200162","ГВС","BTS2_VD2_1200162","ХВС2","BTS2_VD3_1200162","ГВС2","MRC2_9766437");	$this->chanals= array(0,23,1,23,2,23,3,23);	 break;
case"72":$this->sensors = array("BTS2_VD4_1200162","ХВС","BTS2_VD5_1200162","ГВС","0","ХВС2","0","ГВС2","MRC2_9766502");	$this->chanals= array(4,23,5,23);	 break;
case"73":$this->sensors = array("BTS2_VD6_1200162","ХВС","BTS2_VD7_1200162","ГВС","0","ХВС2","0","ГВС2","MRC2_9765663");	$this->chanals= array(6,23,7,23);	 break;
case"73А":$this->sensors = array("BTS2_VD0_1200005","ХВС","BTS2_VD1_1200005","ГВС","0","ХВС2","0","ГВС2","MRC2_5936684");	//$this->chanals= array("na","na","na","na");*/	 break;
case"73а":$this->sensors = array("BTS2_VD0_1200005","ХВС","BTS2_VD1_1200005","ГВС","0","ХВС2","0","ГВС2","MRC2_5936684");	//$this->chanals= array("na","na","na","na");*/	 break;
case"74":$this->sensors = array("BTS2_VD0_1100047","ХВС","BTS2_VD1_1100047","ГВС","0","ХВС2","0","ГВС2","MRC2_9765766");	$this->chanals= array(0,24,1,24);	 break;
case"75":$this->sensors = array("BTS2_VD2_1100047","ХВС","BTS2_VD3_1100047","ГВС","0","ХВС2","0","ГВС2","MRC2_9765788");	$this->chanals= array(2,24,3,24);	 break;
case"76":$this->sensors = array("BTS2_VD4_1100047","ХВС","BTS2_VD5_1100047","ГВС","BTS2_VD6_1100047","ХВС2","BTS2_VD7_1100047","ГВС2","MRC2_9765431");	$this->chanals= array(4,24,5,24,6,24,7,24);	 break;
case"77":$this->sensors = array("BTS2_VD0_1100034","ХВС","BTS2_VD1_1100034","ГВС","0","ХВС2","0","ГВС2","MRC2_9765330");	$this->chanals= array(0,25,1,25); 	 break;
		
case"Все": break;		
default: require 'alert_flat.js'; die;		
}		
?>		
