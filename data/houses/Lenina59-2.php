<?php		
//$this->flat = $_POST['flat']
$this->ipAddres="192.168.1.204";
if ($this->flat<21){$this->rsNum = "9";} else {$this->rsNum = "18";}

switch ($this->flat) {
case "1": $this->sensors = array("BTS2_VD0_900043","Исправен","BTS2_VD1_900043","Исправен","0","Исправен","0","Исправен","MRC2_9760372");	$this->chanals= array(0,1,1,1);	 break;
case "2": $this->sensors = array("BTS2_VD3_900043","Исправен","BTS2_VD4_900043","Исправен","0","Исправен","0","Исправен","MRC2_9761118");	$this->chanals= array(3,1,4,1);	 break;
case "3": $this->sensors = array("BTS2_VD6_900043","Исправен","BTS2_VD7_900043","Исправен","0","Исправен","0","Исправен","MRC2_9761138");	$this->chanals= array(6,1,7,1);	 break;
case "4": $this->sensors = array("BTS2_VD1_900044","Исправен","BTS2_VD2_900044","Исправен","0","Исправен","0","Исправен","MRC2_9761154");	$this->chanals= array(1,2,2,2);	 break;
case "5": $this->sensors = array("BTS2_VD4_900044","Исправен","BTS2_VD5_900044","Исправен","0","Исправен","0","Исправен","MRC2_9761109");	$this->chanals= array(4,2,5,2);	 break;
case "6": $this->sensors = array("BTS2_VD7_900044","Исправен","BTS2_VD0_800051","Исправен","0","Исправен","0","Исправен","MRC2_8277421");	$this->chanals= array(7,2,0,3);	 break;
case "7": $this->sensors = array("BTS2_VD2_800051","Исправен","BTS2_VD3_800051","Исправен","0","Исправен","0","Исправен","MRC2_9761162");	$this->chanals= array(2,3,3,3);	 break;
case "8": $this->sensors = array("BTS2_VD5_800051","Исправен","BTS2_VD6_800051","Исправен","0","Исправен","0","Исправен","MRC2_9760143");	$this->chanals= array(5,3,6,3);	 break;
case "9": $this->sensors = array("BTS2_VD0_800056","Исправен","BTS2_VD1_800056","Исправен","0","Исправен","0","Исправен","MRC2_9760371");	$this->chanals= array(0,4,1,4);	 break;
case "10": $this->sensors = array("BTS2_VD3_800056","Исправен","BTS2_VD4_800056","Исправен","0","Исправен","0","Исправен","MRC2_9761108");	$this->chanals= array(3,4,4,4);	 break;
case "11": $this->sensors = array("BTS2_VD6_800056","Исправен","BTS2_VD7_800056","Исправен","0","Исправен","0","Исправен","MRC2_9760989");	$this->chanals= array(6,4,7,4);	 break;
case "12": $this->sensors = array("BTS2_VD1_900038","Исправен","BTS2_VD2_900038","Исправен","0","Исправен","0","Исправен","MRC2_9761085");	$this->chanals= array(1,5,2,5);	 break;
case "13": $this->sensors = array("BTS2_VD4_900038","Исправен","BTS2_VD5_900038","Исправен","0","Исправен","0","Исправен","MRC2_8277386");	$this->chanals= array(4,5,5,5);	 break;
case "14": $this->sensors = array("BTS2_VD7_900038","Саботаж","BTS2_VD0_800139","Саботаж","0","Исправен","0","Исправен","MRC2_9761178");	$this->chanals= array(7,5,0,6);	 break;
case "15": $this->sensors = array("BTS2_VD2_800139","Исправен","BTS2_VD3_800139","Исправен","0","Исправен","0","Исправен","MRC2_9761100");	$this->chanals= array(2,6,3,6);	 break;
case "16": $this->sensors = array("BTS2_VD5_800139","Исправен","BTS2_VD6_800139","Исправен","0","Исправен","0","Исправен","MRC2_9760179");	$this->chanals= array(5,6,6,6);	 break;
case "17": $this->sensors = array("BTS2_VD0_800091","Исправен","BTS2_VD1_800091","Исправен","0","Исправен","0","Исправен","MRC2_9761001");	$this->chanals= array(0,7,1,7);	 break;
case "18": $this->sensors = array("BTS2_VD3_800091","Исправен","BTS2_VD4_800091","Исправен","0","Исправен","0","Исправен","MRC2_9760370");	$this->chanals= array(3,7,4,7);	 break;
case "19": $this->sensors = array("BTS2_VD6_800091","Исправен","BTS2_VD7_800091","Исправен","0","Исправен","0","Исправен","MRC2_9761158");	$this->chanals= array(6,7,7,7);	 break;
case "20": $this->sensors = array("BTS2_VD1_810565","Исправен","BTS2_VD2_810565","Исправен","0","Исправен","0","Исправен","MRC2_9761144");	$this->chanals= array(1,8,2,8);	 break;
case "21": $this->sensors = array("BTS2_VD0_900041","Исправен","BTS2_VD1_900041","Саботаж","0","Исправен","0","Исправен","MRC2_9760063");	$this->chanals= array(0,10,1,10);	 break;
case "22": $this->sensors = array("BTS2_VD3_900041","Исправен","BTS2_VD4_900041","Исправен","0","Исправен","0","Исправен","MRC2_8277411");	$this->chanals= array(3,10,4,10);	 break;
case "23": $this->sensors = array("BTS2_VD6_900041","Исправен","BTS2_VD7_900041","Исправен","0","Исправен","0","Исправен","MRC2_9761173");	$this->chanals= array(6,10,7,10);	 break;
case "24": $this->sensors = array("BTS2_VD1_800024","Исправен","BTS2_VD2_800024","Исправен","0","Исправен","0","Исправен","MRC2_8277630");	$this->chanals= array(1,11,2,11);	 break;
case "25": $this->sensors = array("BTS2_VD4_800024","Исправен","BTS2_VD5_800024","Исправен","0","Исправен","0","Исправен","MRC2_9761084");	$this->chanals= array(4,11,5,11);	 break;
case "26": $this->sensors = array("BTS2_VD7_800024","Исправен","BTS2_VD0_800089","Исправен","0","Исправен","0","Исправен","MRC2_9761097");	$this->chanals= array(7,11,0,12);	 break;
case "27": $this->sensors = array("BTS2_VD2_800089","Исправен","BTS2_VD3_800089","Исправен","0","Исправен","0","Исправен","MRC2_9761151");	$this->chanals= array(2,12,3,12);	 break;
case "28": $this->sensors = array("BTS2_VD5_800089","Исправен","BTS2_VD6_800089","Исправен","0","Исправен","0","Исправен","MRC2_8277456");	$this->chanals= array(5,12,6,12);	 break;
case "29": $this->sensors = array("BTS2_VD0_900040","Исправен","BTS2_VD1_900040","Исправен","0","Исправен","0","Исправен","MRC2_8277419");	$this->chanals= array(0,13,1,13);	 break;
case "30": $this->sensors = array("BTS2_VD3_900040","Исправен","BTS2_VD4_900040","Исправен","0","Исправен","0","Исправен","MRC2_9761102");	$this->chanals= array(3,13,4,13);	 break;
case "31": $this->sensors = array("BTS2_VD6_900040","Саботаж","BTS2_VD7_900040","Саботаж","0","Исправен","0","Исправен","MRC2_5933174");	$this->chanals= array(6,13,7,13);	 break;
case "32": $this->sensors = array("BTS2_VD1_800016","Саботаж","BTS2_VD2_800016","Саботаж","0","Исправен","0","Исправен","MRC2_10178460");	$this->chanals= array(1,14,2,14);	 break;
case "33": $this->sensors = array("BTS2_VD4_800016","Исправен","BTS2_VD5_800016","Исправен","0","Исправен","0","Исправен","MRC2_8277398");	$this->chanals= array(4,14,5,14);	 break;
case "34": $this->sensors = array("BTS2_VD7_800016","Исправен","BTS2_VD0_800080","Исправен","0","Исправен","0","Исправен","MRC2_9760122");	$this->chanals= array(7,14,0,15);	 break;
case "35": $this->sensors = array("BTS2_VD2_800080","Исправен","BTS2_VD3_800080","Исправен","0","Исправен","0","Исправен","MRC2_8277627");	$this->chanals= array(2,15,3,15);	 break;
case "36": $this->sensors = array("BTS2_VD5_800080","Исправен","BTS2_VD6_800080","Исправен","0","Исправен","0","Исправен","MRC2_8277628");	$this->chanals= array(5,15,6,15);	 break;
case "37": $this->sensors = array("BTS2_VD0_800055","Исправен","BTS2_VD1_800055","Исправен","0","Исправен","0","Исправен","MRC2_9761152");	$this->chanals= array(0,16,1,16);	 break;
case "38": $this->sensors = array("BTS2_VD3_800055","Исправен","BTS2_VD4_800055","Исправен","0","Исправен","0","Исправен","MRC2_8277470");	$this->chanals= array(3,16,4,16);	 break;
case "39": $this->sensors = array("BTS2_VD6_800055","Исправен","BTS2_VD7_800055","Исправен","0","Исправен","0","Исправен","MRC2_8277408");	$this->chanals= array(6,16,7,16);	 break;
case "40": $this->sensors = array("BTS2_VD1_800052","Исправен","BTS2_VD2_800052","Исправен","0","Исправен","0","Исправен","MRC2_9761107");	$this->chanals= array(1,17,2,17);	 break;
case"Все": break;		
default: require 'alert_flat.js'; die;		
}				