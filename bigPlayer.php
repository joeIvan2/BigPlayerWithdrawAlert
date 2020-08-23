<?php
$add1="0x2a097805c9bca80925b840b5c42e482ebc8c985e"; //大玩家
$add2="0x67ffb615eaeb8aa88ff37cca6a32e322286a42bb"; //池子

echo "WETH___WETH___WETH___WETH___WETH</br>";
$content = file_get_contents("https://api.etherscan.io/api?module=account&action=tokentx&address=".$add1."&startblock=0&endblock=999999999&sort=asc&apikey=5UPMJS8W9JXVWYGBA4SUSAPVNHSATQXWZM");
//echo $content;
$result  = json_decode($content);
$result2 = $result->result;
foreach ($result2 as $key ) {
if ($key->from == $add1 && $key->to == $add2 && $key->tokenSymbol == "BPT")
{
echo date("Y-m-d H:i:s", $key->timeStamp);
echo "<a href = 'https://etherscan.io/tx/".$key->hash."'>BPT OUT</a></br>";
}

if ($key->from == $add2 && $key->to == $add1 && $key->tokenSymbol == "BPT")
{
echo date("Y-m-d H:i:s", $key->timeStamp);
echo "<a href = 'https://etherscan.io/tx/".$key->hash."'>ALERT ALERT BPT retrieved</a></br>";
}
 //    

}


$add1="0x20519479aecf40c6e048203a150f5aa914ad2a60"; //大玩家
$add2="0x67ffb615eaeb8aa88ff37cca6a32e322286a42bb"; //池子

echo "</br></br></br></br></br>WETH___WETH___WETH___WETH___WETH</br>";
$content = file_get_contents("https://api.etherscan.io/api?module=account&action=tokentx&address=".$add1."&startblock=0&endblock=999999999&sort=asc&apikey=5UPMJS8W9JXVWYGBA4SUSAPVNHSATQXWZM");
//echo $content;
$result  = json_decode($content);
$result2 = $result->result;
foreach ($result2 as $key ) {
if ($key->from == $add1 && $key->to == $add2 && $key->tokenSymbol == "BPT")
{
echo date("Y-m-d H:i:s", $key->timeStamp);
echo "<a href = 'https://etherscan.io/tx/".$key->hash."'>BPT OUT</a></br>";
}

if ($key->from == $add2 && $key->to == $add1 && $key->tokenSymbol == "BPT")
{
echo date("Y-m-d H:i:s", $key->timeStamp);
echo "<a href = 'https://etherscan.io/tx/".$key->hash."'>ALERT ALERT BPT retrieved</a></br>";
}
 //    

}
$add1="0x702851277acff6745d4c600ff38d3b0f517bc970"; //大玩家
$add2="0x67ffb615eaeb8aa88ff37cca6a32e322286a42bb"; //池子

echo "</br></br></br></br></br>WETH___WETH___WETH___WETH___WETH</br>";
$content = file_get_contents("https://api.etherscan.io/api?module=account&action=tokentx&address=".$add1."&startblock=0&endblock=999999999&sort=asc&apikey=5UPMJS8W9JXVWYGBA4SUSAPVNHSATQXWZM");
//echo $content;
$result  = json_decode($content);
$result2 = $result->result;
foreach ($result2 as $key ) {
if ($key->from == $add1 && $key->to == $add2 && $key->tokenSymbol == "BPT")
{
echo date("Y-m-d H:i:s", $key->timeStamp);
echo "<a href = 'https://etherscan.io/tx/".$key->hash."'>BPT OUT</a></br>";
}

if ($key->from == $add2 && $key->to == $add1 && $key->tokenSymbol == "BPT")
{
echo date("Y-m-d H:i:s", $key->timeStamp);
echo "<a href = 'https://etherscan.io/tx/".$key->hash."'>ALERT ALERT BPT retrieved</a></br>";
}
 //    

}





echo "</br></br></br></br></br>LINK___LINK___LINK___LINK___LINK___</br>";
$add1="0x316f99537b4bade5eea51073f1b7c38dfbf69a70"; //大玩家
$add2="0x196cf719251579cbc850ded0e47e972b3d7810cd"; //池子

$content = file_get_contents("https://api.etherscan.io/api?module=account&action=tokentx&address=".$add1."&startblock=0&endblock=999999999&sort=asc&apikey=5UPMJS8W9JXVWYGBA4SUSAPVNHSATQXWZM");
//echo $content;
$result  = json_decode($content);
$result2 = $result->result;

foreach ($result2 as $key ) {
if ($key->from == $add1 && $key->to == $add2 && $key->tokenSymbol == "BPT")
{
echo date("Y-m-d H:i:s", $key->timeStamp);
echo "<a href = 'https://etherscan.io/tx/".$key->hash."'>BPT OUT</a></br>";
}

if ($key->from == $add2 && $key->to == $add1 && $key->tokenSymbol == "BPT")
{
echo date("Y-m-d H:i:s", $key->timeStamp);
echo "<a href = 'https://etherscan.io/tx/".$key->hash."'>ALERT ALERT BPT retrieved</a></br>";
}
 //    

}
?>
