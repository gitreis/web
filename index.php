<?php

use src\lib\Main;

$sFooter = "©Todos Direitos Reservados";

$oMeta  = new Meta();
$oTitle = new Title();
$oLink  = new Link();
$oScript = new Script();
$sMetaContent = $oMeta->printMeta().$oTitle->printMain().$oLink->printLink().$oScript->printScript();
$oHead  = new Head($sMetaContent);
$sHeadContent = $oHead->printMain();

$oHeader= new Header();

$oConection = new Conection();
$aConection = $oConection->getSelect();

$sThead = new Trow([new Tdata($aConection)]);
$oThead = new Thead($sThead);
$oTbody = new Tbody($sTbody);
$oTfoot = new Tfoot($sTfoot);
$oTr    = new Trow($sTr);
$oTable = new Table($oThead,$oTbody,$oTfoot);

exit;
$oA = new Atag($sContent);

$sAContent = $oA->printMain();
$oLi = new Li($oA->printMain());
$sLi = $oLi->printLi(4);
$oUl = new Ul($sLi);
$sMenuContent = $oUl->printMain();
$oMenu   = new Menu($sMenuContent);
$sMenu = $oMenu->printMain();

$oFooter = new Footer($sFooter);
$sFooter = $oFooter->printMain();





$sBodyContent = $oHeader->printMain().$sMenu.$sFooter;
$oBody = new Body($sBodyContent);
$sHtmlContent = $sHeadContent.$oBody->printMain();

$oHtml         = new Html($sHtmlContent);
$sHtml = $oHtml->printMain();
echo $sHtml;

