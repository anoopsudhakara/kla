<?php 
/**
	@File Name : auto_session_combo.php
	@Date : 22/02/2011 Thursday
	@Author : Noufal K T
	@Description : 
**/
	
	include_once('sanitize.php');
	if(empty($_GET) && !empty($_POST)) 
	{
		if($_POST['FlagPost'] != 1 || empty($_POST['FlagPost'])) 
		{
			header("location: index.php?pg=asm-com_adv_search");
			exit;
		}
		include_once('connection.php');
		include_once("classes/asm_com_adv_search.cls.php");
		
		$ClsAdSearch = new ClsAsmComSearch($conn, $include_path);
		ob_end_clean();
		
		echo $ClsAdSearch->GetExOfficioMembers($_POST['sub_com_id'], $_POST['report_type'], $_POST['ex_officio_id'], $_POST['lang']);
	}
	else
	{
		header("location: index.php?pg=asm_com_adv_search");
		exit;
	}
?>