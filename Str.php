<?php
header('Content-Type: text/html; charset=utf-8');

function contains($haystack, $needle, $caseSensitive = false) {

//Print "haystack".$haystack."haystack";
//Print "needle".$needle."needle";

    return $caseSensitive ? 
            (strpos($haystack, $needle) === FALSE ? FALSE : TRUE):
            (stripos($haystack, $needle) === FALSE ? FALSE : TRUE);
}

//print "Test = ".contains('ชื่ออะไร','กินข้าว',false);

function MatStr($FullStr,$searchStr,$ReturnText)
{
	$ReturnMsg = '';
	
	if (contains($FullStr,$searchStr,false))
	{
		$ReturnMsg = $ReturnText;
	}
	//else 
	//{
   //   $ReturnMsg = 'ถามคำถามอื่นนะ';
	// }


	   return $ReturnMsg;
}


//echo MatStr('กินข้าวหรือยัง','กินข้าว','กินแล้วจ้า ตัวเองละ');   

//echo MatStr('ทำอะไรอยู่หรอ','ทำอะไร','ไม่ได้ทำไร ง่วงๆ');




//$xml = simplexml_load_file("DataMsg.xml");
//foreach ($xml->children() as $children) {
//    echo $children->FullMsg;
//}



function BotChat($MsgRec)
{

$returnMsg = '?';

$xml = simplexml_load_file("DataMsg.xml");
foreach ($xml->children() as $children) {

    $SearchStr = $children->SearchStr;
	$ReturnMsg = $children->ReturnMsg;

	echo $SearchStr;
	echo $ReturnMsg;

	if ($returnMsg == '?')
	{
		$returnMsg = MatStr((string) $MsgRec, (string) $SearchStr,(string) $ReturnMsg); 
		
	}
}
	return $returnMsg; 
}



print "Nat = ".BotChat("ชื่ออะไร");

?>