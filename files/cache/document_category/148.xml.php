<?php define('__XE__', true); require_once('/jhwon11/www/config/config.inc.php'); $oContext = &Context::getInstance(); $oContext->init(); header("Content-Type: text/xml; charset=UTF-8"); header("Expires: Mon, 26 Jul 1997 05:00:00 GMT"); header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT"); header("Cache-Control: no-store, no-cache, must-revalidate"); header("Cache-Control: post-check=0, pre-check=0", false); header("Pragma: no-cache"); $lang_type = Context::getLangType(); $is_logged = Context::get('is_logged'); $logged_info = Context::get('logged_info'); if($is_logged) {if($logged_info->is_admin=="Y") $is_admin = true; else $is_admin = false; $group_srls = array_keys($logged_info->group_list); } else { $is_admin = false; $group_srsl = array(); } 
$_titles[236]["ko"] = 'Pandas'; $_descriptions[236]["ko"] = '|@|,,,,,|@|'; $_titles[237]["ko"] = 'Numy'; $_descriptions[237]["ko"] = '|@|,,,,,|@|'; $_titles[238]["ko"] = 'General'; $_descriptions[238]["ko"] = '|@|,,,,,|@|';  $oContext->close();?><root><node mid="python_tools" module_srl="0" node_srl="236" parent_srl="0" category_srl="236" text="<?php echo (true?($_titles[236][$lang_type]):"")?>" url='/index.php?mid=python_tools&amp;category=236' expand='N' color='' description="<?php echo (true?($_descriptions[236][$lang_type]):"")?>" document_count="0"  /><node mid="python_tools" module_srl="0" node_srl="237" parent_srl="0" category_srl="237" text="<?php echo (true?($_titles[237][$lang_type]):"")?>" url='/index.php?mid=python_tools&amp;category=237' expand='N' color='' description="<?php echo (true?($_descriptions[237][$lang_type]):"")?>" document_count="0"  /><node mid="python_tools" module_srl="0" node_srl="238" parent_srl="0" category_srl="238" text="<?php echo (true?($_titles[238][$lang_type]):"")?>" url='/index.php?mid=python_tools&amp;category=238' expand='N' color='' description="<?php echo (true?($_descriptions[238][$lang_type]):"")?>" document_count="0"  /></root>