<?php

include_once "autoload.php";

$sFooter = "©Todos Direitos Reservados";

$oMeta  = new \src\lib\libhead\Meta();
$oTitle = new \src\lib\Title();
$oLink  = new \src\lib\libhead\Link();
$oScript = new \src\lib\libhead\Script();
$sMetaContent = $oMeta->printMeta().$oTitle->printMain().$oLink->printLink().$oScript->printScript();
$oHead  = new \src\lib\libhead\Head($sMetaContent);
$sHeadContent = $oHead->printMain();

$oHeader= new \src\lib\libbody\Header();

$oConection = new \src\lib\Conection();
$aConection = $oConection->getSelect();

$sThead = new \src\lib\libtable\Trow([new \src\lib\libtable\Tdata($aConection)]);
$oThead = new \src\lib\libtable\Thead($sThead);
$oTbody = new \src\lib\libtable\Tbody($sTbody);
$oTfoot = new \src\lib\libtable\Tfoot($sTfoot);
$oTr    = new \src\lib\libtable\Trow($sTr);
$oTable = new \src\lib\libtable\Table($oThead,$oTbody,$oTfoot);

exit;
$oA = new Atag($sContent);

$sAContent = $oA->printMain();
$oLi = new Li($oA->printMain());
$sLi = $oLi->printLi(4);
$oUl = new Ul($sLi);
$sMenuContent = $oUl->printMain();
$oMenu   = new Menu($sMenuContent);
$sMenu = $oMenu->printMain();

$oFooter = new \src\lib\libbody\Footer($sFooter);
$sFooter = $oFooter->printMain();





$sBodyContent = $oHeader->printMain().$sMenu.$sFooter;
$oBody = new Body($sBodyContent);
$sHtmlContent = $sHeadContent.$oBody->printMain();

$oHtml         = new Html($sHtmlContent);
$sHtml = $oHtml->printMain();
echo $sHtml;

