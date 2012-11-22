<?php
if (!defined ('TYPO3_MODE')) {
 	die ('Access denied.');
}

t3lib_extMgm::addTypoScriptSetup('

memolistitemspage = PAGE
memolistitemspage {
	typeNum = 520
	config.disableAllHeaderCode = 1
	config.admPanel = 0
	10 = USER_INT
	10.userFunc = tx_memolist->getAjaxMemoListItems
	10.includeLibs = EXT:memolist/Classes/Memolist.php
}

memolistaddpage < memolistitemspage
memolistaddpage {
	typeNum = 521
	10.userFunc = tx_memolist->addAjaxItemToMemoList
}

memolistremovepage < memolistitemspage
memolistremovepage {
	typeNum = 522
	10.userFunc = tx_memolist->removeAjaxItemToMemoList
}

');

?>