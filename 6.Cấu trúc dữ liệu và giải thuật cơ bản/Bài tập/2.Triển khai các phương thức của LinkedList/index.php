Learn more or give us feedback
<?php
include_once("LinkList.php");
$linkList = new LinkList();
$linkList->insertFirst(57);
$linkList->insertFirst(15);
$linkList->insertLast(11);
$linkList->insertLast(22);
$linkList->insertLast(20);
$linkList->insertLast(166);
$linkList->insertLast(15);
$linkList->insertLast(166);
echo $totalNode = $linkList->totalNodes();
echo "<br>";
$data = $linkList->readList();
echo implode("-", $data);
?>