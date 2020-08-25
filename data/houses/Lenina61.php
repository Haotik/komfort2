<?php	
///$this->flat = $_POST['flat']		
$this->ipAddres = "192.168.1.203";		
		
if ($this->flat>0 && $this->flat<21){$this->rsNum = "26";	} 	
elseif (($this->flat>20 && $this->flat<39)) {$this->rsNum = "27";	}	
elseif (($this->flat>38 && $this->flat<57)) {$this->rsNum = "28";	}	
elseif (($this->flat>56 && $this->flat<73)) {$this->rsNum = "29";	}	
		
switch ($this->flat) {	
case"1":$this->sensors = array("BTS2_VD0_1000093","Исправен","BTS2_VD1_1000093","Исправен","0","Исправен","0","Исправен","MRC2_5933167");	$this->chanals= array(0,2,1,2); break;
case"2":$this->sensors = array("BTS2_VD2_1000093","Исправен","BTS2_VD3_1000093","Исправен","BTS2_VD4_1000093","Исправен","BTS2_VD5_1000093","Исправен","MRC2_5933116");$this->chanals= array(2,2,3,2,4,2,5,2); break;
case"3":$this->sensors = array("BTS2_VD6_1000093","Исправен","BTS2_VD7_1000093","Исправен","0","Исправен","0","Исправен","MRC2_5933188");	$this->chanals= array(6,2,7,2);break;
case"4":$this->sensors = array("BTS2_VD0_1000111","Исправен","BTS2_VD1_1000111","Исправен","BTS2_VD2_1000111","Исправен","BTS2_VD3_1000111","Исправен","MRC2_5933183");$this->chanals= array(0,3,1,3,2,3,3,3); break;
case"5":$this->sensors = array("BTS2_VD4_1000111","Исправен","BTS2_VD5_1000111","Исправен","0","Исправен","0","Исправен","MRC2_36644676");	$this->chanals= array(4,3,5,3); break;
case"6":$this->sensors = array("BTS2_VD6_1000111","Исправен","BTS2_VD7_1000111","Исправен","0","Исправен","0","Исправен","MRC2_5933113");	$this->chanals= array(6,3,7,3); break;
case"7":$this->sensors = array("BTS2_VD0_1000066","Исправен","BTS2_VD1_1000066","Исправен","0","Исправен","0","Исправен","MRC2_5933056");	$this->chanals= array(0,4,1,4); break;
case"8":$this->sensors = array("BTS2_VD2_1000066","Исправен","BTS2_VD3_1000066","Исправен","0","Исправен","0","Исправен","MRC2_5933166");	$this->chanals= array(2,4,3,4);   break;
case"9":$this->sensors = array("BTS2_VD4_1000066","Исправен","BTS2_VD5_1000066","Исправен","0","Исправен","0","Исправен","MRC2_12427795");	$this->chanals= array(4,4,5,4); break; 
case"10":$this->sensors = array("BTS2_VD6_1000066","Исправен","BTS2_VD7_1000066","Исправен","BTS2_VD0_1000095","Исправен","BTS2_VD1_1000095","Исправен","MRC2_5933111");	$this->chanals= array(6,4,7,4,0,5,1,5); break; 
case"11":$this->sensors = array("BTS2_VD2_1000095","Исправен","BTS2_VD3_1000095","Исправен","0","Исправен","0","Исправен","MRC2_5933115");	$this->chanals= array(2,5,3,5); break; 
case"12":$this->sensors = array("BTS2_VD4_1000095","Исправен","BTS2_VD5_1000095","Исправен","0","Исправен","0","Исправен","MRC2_5933112");	$this->chanals= array(4,5,5,5); break; 
case"13":$this->sensors = array("BTS2_VD6_1000095","Исправен","BTS2_VD7_1000095","Исправен","0","Исправен","0","Исправен","MRC2_5933105");	$this->chanals= array(6,5,7,5); break; 
case"14":$this->sensors = array("BTS2_VD0_1000088","Исправен","BTS2_VD1_1000088","Исправен","0","Исправен","0","Исправен","MRC2_5933205");	$this->chanals= array(0,6,1,6); break; 
case"15":$this->sensors = array("BTS2_VD2_1000088","Исправен","BTS2_VD3_1000088","Исправен","0","Исправен","0","Исправен","MRC2_14986087");	$this->chanals= array(2,6,3,6); break; 
case"16":$this->sensors = array("BTS2_VD4_1000088","Исправен","BTS2_VD5_1000088","Исправен","BTS2_VD6_1000088","Исправен","BTS2_VD7_1000088","Исправен","MRC2_5933184");	$this->chanals= array(4,6,5,6,6,6,7,6); break; 
case"17":$this->sensors = array("BTS2_VD0_1000015","Исправен","BTS2_VD1_1000015","Исправен","0","Исправен","0","Исправен","MRC2_5933225");	$this->chanals= array(0,7,1,7); break; 
case"18":$this->sensors = array("BTS2_VD2_1000015","Исправен","BTS2_VD3_1000015","Исправен","0","Исправен","0","Исправен","MRC2_5933080");	$this->chanals= array(2,7,3,7); break; 
case"19":$this->sensors = array("BTS2_VD4_1000015","Исправен","BTS2_VD5_1000015","Исправен","0","Исправен","0","Исправен","MRC2_5933206");	$this->chanals= array(4,7,5,7); break; 
case"20":$this->sensors = array("BTS2_VD6_1000015","Исправен","BTS2_VD7_1000015","Исправен","0","Исправен","0","Исправен","MRC2_5933245");	$this->chanals= array(6,7,7,7); break; 
case"21":$this->sensors = array("BTS2_VD0_1000087","Исправен","BTS2_VD1_1000087","Исправен","0","Исправен","0","Исправен","MRC2_5933082");	$this->chanals= array(0,8,1,8); break; 
case"22":$this->sensors = array("BTS2_VD2_1000087","Исправен","BTS2_VD3_1000087","Исправен","BTS2_VD4_1000087","Исправен","BTS2_VD5_1000087","Исправен","MRC2_5933075");	$this->chanals= array(2,8,3,8,4,8,5,8); break; 
case"23":$this->sensors = array("BTS2_VD6_1000087","Исправен","BTS2_VD7_1000087","Исправен","0","Исправен","0","Исправен","MRC2_5933085");	$this->chanals= array(6,8,7,8); break; 
case"24":$this->sensors = array("BTS2_VD0_1000062","Исправен","BTS2_VD1_1000062","Исправен","0","Исправен","0","Исправен","MRC2_5933065");	$this->chanals= array(0,9,1,9); break; 
case"25":$this->sensors = array("BTS2_VD2_1000062","Исправен","BTS2_VD3_1000062","Саботаж","0","Исправен","0","Исправен","MRC2_5933141");	$this->chanals= array(2,9,3,9); break; 
case"26":$this->sensors = array("BTS2_VD4_1000062","Исправен","BTS2_VD5_1000062","Исправен","0","Исправен","0","Исправен","MRC2_5933066");	$this->chanals= array(4,9,5,9); break; 
case"27":$this->sensors = array("BTS2_VD6_1000062","Исправен","BTS2_VD7_1000062","Исправен","0","Исправен","0","Исправен","MRC2_5933067");	$this->chanals= array(6,9,7,9); break; 
case"28":$this->sensors = array("BTS2_VD0_1000089","Исправен","BTS2_VD1_1000089","Исправен","BTS2_VD2_1000089","Исправен","BTS2_VD3_1000089","Исправен","MRC2_5933165");	$this->chanals= array(0,10,1,10,2,10,3,10); break; 
case"29":$this->sensors = array("BTS2_VD4_1000089","Исправен","BTS2_VD5_1000089","Исправен","0","Исправен","0","Исправен","MRC2_5933126");	$this->chanals= array(4,10,5,10); break; 
case"30":$this->sensors = array("BTS2_VD6_1000089","Исправен","BTS2_VD7_1000089","Исправен","0","Исправен","0","Исправен","MRC2_5933156");	$this->chanals= array(6,10,7,10); break; 
case"31":$this->sensors = array("BTS2_VD0_1000090","Исправен","BTS2_VD1_1000090","Исправен","0","Исправен","0","Исправен","MRC2_11589656");	$this->chanals= array(0,11,1,11); break; 
case"32":$this->sensors = array("BTS2_VD2_1000090","Исправен","BTS2_VD3_1000090","Исправен","0","Исправен","0","Исправен","MRC2_5933175");	$this->chanals= array(2,11,3,11); break; 
case"33":$this->sensors = array("BTS2_VD4_1000090","Исправен","BTS2_VD5_1000090","Исправен","0","Исправен","0","Исправен","MRC2_5933055");	$this->chanals= array(4,11,5,11); break; 
case"34":$this->sensors = array("BTS2_VD6_1000090","Исправен","BTS2_VD7_1000090","Исправен","BTS2_VD0_1000094","Исправен","BTS2_VD1_1000094","Исправен","MRC2_5933058");	$this->chanals= array(6,11,7,11,0,12,1,12); break; 
case"35":$this->sensors = array("BTS2_VD2_1000094","Исправен","BTS2_VD3_1000094","Исправен","0","Исправен","0","Исправен","MRC2_5933078");	$this->chanals= array(2,12,3,12); break; 
case"36":$this->sensors = array("BTS2_VD4_1000094","Исправен","BTS2_VD5_1000094","Исправен","0","Исправен","0","Исправен","MRC2_5933057");	$this->chanals= array(4,12,5,12); break; 
case"37":$this->sensors = array("BTS2_VD6_1000094","Исправен","BTS2_VD7_1000094","Саботаж","0","Исправен","0","Исправен","MRC2_5933084");	$this->chanals= array(6,12,7,12); break; 
case"38":$this->sensors = array("BTS2_VD0_1000092","Исправен","BTS2_VD1_1000092","Исправен","0","Исправен","0","Исправен","MRC2_5933054");	$this->chanals= array(0,13,1,13); break; 
case"39":$this->sensors = array("BTS2_VD0_1000063","Исправен","BTS2_VD1_1000063","Исправен","0","Исправен","0","Исправен","MRC2_5933173");	$this->chanals= array(0,14,1,14); break; 
case"40":$this->sensors = array("BTS2_VD2_1000063","Исправен","BTS2_VD3_1000063","Исправен","BTS2_VD4_1000063","Исправен","BTS2_VD5_1000063","Исправен","MRC2_5933160");	$this->chanals= array(2,14,3,14,4,14,5,14); break; 
case"41":$this->sensors = array("BTS2_VD6_1000063","Исправен","BTS2_VD7_1000063","Исправен","0","Исправен","0","Исправен","MRC2_5933092");	$this->chanals= array(6,14,7,14); break; 
case"42":$this->sensors = array("BTS2_VD0_1000024","Исправен","BTS2_VD1_1000024","Исправен","0","Исправен","0","Исправен","MRC2_5933128");	$this->chanals= array(0,15,1,15); break; 
case"43":$this->sensors = array("BTS2_VD2_1000024","Исправен","BTS2_VD3_1000024","Исправен","0","Исправен","0","Исправен","MRC2_5933204");	$this->chanals= array(2,15,3,15); break; 
case"44":$this->sensors = array("BTS2_VD4_1000024","Исправен","BTS2_VD5_1000024","Исправен","0","Исправен","0","Исправен","MRC2_5933135");	$this->chanals= array(4,15,5,15); break; 
case"45":$this->sensors = array("BTS2_VD6_1000024","Исправен","BTS2_VD7_1000024","Исправен","0","Исправен","0","Исправен","MRC2_8272459");	$this->chanals= array(6,15,7,15); break; 
case"46":$this->sensors = array("BTS2_VD0_1000020","Исправен","BTS2_VD1_1000020","Исправен","BTS2_VD2_1000020","Исправен","BTS2_VD3_1000020","Исправен","MRC2_5933194");	$this->chanals= array(0,16,1,16,2,16,3,16); break; 
case"47":$this->sensors = array("BTS2_VD4_1000020","Исправен","BTS2_VD5_1000020","Исправен","0","Исправен","0","Исправен","MRC2_5933097");	$this->chanals= array(4,16,5,16); break; 
case"48":$this->sensors = array("BTS2_VD6_1000020","Исправен","BTS2_VD7_1000020","Исправен","0","Исправен","0","Исправен","MRC2_5933186");	$this->chanals= array(6,16,7,16); break; 
case"49":$this->sensors = array("BTS2_VD0_1000065","Исправен","BTS2_VD1_1000065","Саботаж","0","Исправен","0","Исправен","MRC2_5933061");	$this->chanals= array(0,17,1,17); break; 
case"50":$this->sensors = array("BTS2_VD2_1000065","Саботаж","BTS2_VD3_1000065","Саботаж","0","Исправен","0","Исправен","MRC2_5933069");	$this->chanals= array(2,17,3,17); break; 
case"51":$this->sensors = array("BTS2_VD4_1000065","Исправен","BTS2_VD5_1000065","Исправен","0","Исправен","0","Исправен","MRC2_5933083");	$this->chanals= array(4,17,5,17); break; 
case"52":$this->sensors = array("BTS2_VD6_1000065","Исправен","BTS2_VD7_1000065","Исправен","BTS2_VD0_9900031","Исправен","BTS2_VD1_9900031","Исправен","MRC2_5933187");	$this->chanals= array(6,17,7,17,0,18,1,18); break; 
case"53":$this->sensors = array("BTS2_VD2_9900031","Исправен","BTS2_VD3_9900031","Исправен","0","Исправен","0","Исправен","MRC2_5933070");	$this->chanals= array(2,18,3,18); break; 
case"54":$this->sensors = array("BTS2_VD4_9900031","Исправен","BTS2_VD5_9900031","Исправен","0","Исправен","0","Исправен","MRC2_5933091");	$this->chanals= array(4,18,5,18); break; 
case"55":$this->sensors = array("BTS2_VD6_9900031","Исправен","BTS2_VD7_9900031","Исправен","0","Исправен","0","Исправен","MRC2_5933059");	$this->chanals= array(6,18,7,18); break; 
case"56":$this->sensors = array("BTS2_VD0_1000091","Исправен","BTS2_VD1_1000091","Исправен","0","Исправен","0","Исправен","MRC2_5933076");	$this->chanals= array(0,19,1,19); break; 
case"57":$this->sensors = array("BTS2_VD0_1000064","Исправен","BTS2_VD1_1000064","Исправен","0","Исправен","0","Исправен","MRC2_5933192");	$this->chanals= array(0,20,1,20); break; 
case"58":$this->sensors = array("BTS2_VD2_1000064","Исправен","BTS2_VD3_1000064","Исправен","BTS2_VD4_1000064","Исправен","BTS2_VD5_1000064","Исправен","MRC2_5933132");	$this->chanals= array(2,20,3,20,4,20,5,20); break; 
case"59":$this->sensors = array("BTS2_VD6_1000064","Исправен","BTS2_VD7_1000064","Исправен","0","Исправен","0","Исправен","MRC2_5933154");	$this->chanals= array(6,20,7,20); break; 
case"60":$this->sensors = array("BTS2_VD0_1000021","Исправен","BTS2_VD1_1000021","Исправен","0","Исправен","0","Исправен","MRC2_5933149");	$this->chanals= array(0,21,1,21); break; 
case"61":$this->sensors = array("BTS2_VD2_1000021","Исправен","BTS2_VD3_1000021","Исправен","0","Исправен","0","Исправен","MRC2_5933062");	$this->chanals= array(2,21,3,21); break; 
case"62":$this->sensors = array("BTS2_VD4_1000021","Исправен","BTS2_VD5_1000021","Исправен","0","Исправен","0","Исправен","MRC2_9761147");	$this->chanals= array(4,21,5,21); break; 
case"63":$this->sensors = array("BTS2_VD6_1000021","Исправен","BTS2_VD7_1000021","Исправен","0","Исправен","0","Исправен","MRC2_5933163");	$this->chanals= array(6,21,7,21); break; 
case"64":$this->sensors = array("BTS2_VD0_1000016","Саботаж","BTS2_VD1_1000016","Саботаж","BTS2_VD2_1000016","Исправен","BTS2_VD3_1000016","Исправен","MRC2_5933189");	$this->chanals= array(0,22,1,22,2,22,3,22); break; 
case"65":$this->sensors = array("BTS2_VD4_1000016","Исправен","BTS2_VD5_1000016","Исправен","0","Исправен","0","Исправен","MRC2_5933159");	$this->chanals= array(4,22,5,22); break; 
case"66":$this->sensors = array("BTS2_VD6_1000016","Саботаж","BTS2_VD7_1000016","Саботаж","0","Исправен","0","Исправен","MRC2_5933114");	$this->chanals= array(6,22,7,22); break; 
case"67":$this->sensors = array("BTS2_VD0_1000012","Исправен","BTS2_VD1_1000012","Исправен","0","Исправен","0","Исправен","MRC2_5933178");	$this->chanals= array(0,23,1,23); break; 
case"68":$this->sensors = array("BTS2_VD0_1000086","Исправен","BTS2_VD1_1000086","Исправен","BTS2_VD2_1000086","Исправен","BTS2_VD3_1000086","Саботаж","MRC2_5933161");	$this->chanals= array(0,25,1,25,2,25,3,25); break; 
case"69":$this->sensors = array("BTS2_VD4_1000012","Исправен","BTS2_VD5_1000012","Саботаж","0","Исправен","0","Исправен","MRC2_5933137");	$this->chanals= array(4,23,5,23); break; 
case"70":$this->sensors = array("BTS2_VD6_1000012","Исправен","BTS2_VD7_1000012","Исправен","BTS2_VD0_1000005","Исправен","BTS2_VD1_1000005","Исправен","MRC2_5933138");	$this->chanals= array(6,23,7,23,0,24,1,24); break; 
case"71":$this->sensors = array("BTS2_VD2_1000005","Исправен","BTS2_VD3_1000005","Исправен","0","Исправен","0","Исправен","MRC2_5933157");	$this->chanals= array(2,24,3,24); break; 
case"72":$this->sensors = array("BTS2_VD4_1000005","Исправен","BTS2_VD5_1000005","Исправен","0","Исправен","0","Исправен","MRC2_5933071");	$this->chanals= array(4,24,5,24); break; 
case"73":$this->sensors = array("BTS2_VD6_1000005","Исправен","BTS2_VD7_1000005","Исправен","0","Исправен","0","Исправен","MRC2_5933143");	$this->chanals= array(6,24,7,24); break; 
case"Все": break;		
default: require 'alert_flat.js'; die;		
}