<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62400e586ca94             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Buffer; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Module\Optimization\Traits\MemoizeTrait; class Config { use MemoizeTrait; protected ?string $path = null; protected ?array $server = []; public function __construct($ywmkwiwkosakssii = []) { if ($this->amqagusacuuuaswg()) { goto saycoceqywiekqsi; } $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x70\x61\164\150" => '', "\163\x65\162\166\x65\162" => $_SERVER]); $this->path = trailingslashit($ywmkwiwkosakssii["\x70\x61\x74\x68"]); if (!(is_array($ywmkwiwkosakssii["\163\x65\162\166\x65\162"]) && $ywmkwiwkosakssii["\x73\x65\x72\166\x65\x72"])) { goto uccuykggugcmiyam; } $this->server = $ywmkwiwkosakssii["\x73\x65\162\x76\145\x72"]; uccuykggugcmiyam: saycoceqywiekqsi: } public function amqagusacuuuaswg() : ?string { return $this->path; } public function giiecckwoyiawoyy() : ?array { return $this->server; } public function iuocyymeygwuweag($ymqmyyeuycgmigyo, $ggauoeuaesiymgee = null) { $ueiegogoeyqoiewa = $this->giiecckwoyiawoyy(); $aqykuigiuwmmcieu = $ggauoeuaesiymgee; if (!isset($ueiegogoeyqoiewa[$ymqmyyeuycgmigyo])) { goto sqaowueaequoigsa; } $aqykuigiuwmmcieu = $ueiegogoeyqoiewa[$ymqmyyeuycgmigyo]; sqaowueaequoigsa: return $aqykuigiuwmmcieu; } public function get($ymqmyyeuycgmigyo) { $uiewakwqscemywuo = false; $oyuikeusicgqgwak = $this->tkgawykgecmsaeis(); if (!isset($oyuikeusicgqgwak[$ymqmyyeuycgmigyo])) { goto eqmauwqqowsiwaue; } $uiewakwqscemywuo = $oyuikeusicgqgwak[$ymqmyyeuycgmigyo]; eqmauwqqowsiwaue: return $uiewakwqscemywuo; } public function tkgawykgecmsaeis() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto waycokyiesmqgqcg; } return $this->eecucukcqkqysiau(__FUNCTION__); waycokyiesmqgqcg: $oqwuasygwcckkios = $this->wcsoyaccaqessckk(); if (!(!isset($oqwuasygwcckkios["\x73\x75\x63\143\145\163\163"]) || !$oqwuasygwcckkios["\x73\165\143\x63\x65\163\x73"])) { goto yqkyoaiwcyqeaqwu; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); yqkyoaiwcyqeaqwu: if (!file_exists($oqwuasygwcckkios["\x70\x61\164\x68"])) { goto yuyiqaawwgaywgqo; } include $oqwuasygwcckkios["\x70\x61\164\x68"]; yuyiqaawwgaywgqo: $uiewakwqscemywuo = ["\144\145\142\165\147\x5f\x6d\157\144\x65" => 0, "\x63\141\x63\150\x65\x5f\167\x65\x62\160" => 0, "\x63\x6f\x6f\153\x69\x65\x5f\x68\141\163\150" => '', "\143\x61\143\150\x65\x5f\145\x6e\141\x62\x6c\x65" => 1, "\x69\147\156\157\162\x65\x64\137\x75\x72\x6c\x73" => [], "\162\145\152\x65\x63\x74\137\x63\157\157\x6b\151\x65\163" => '', "\163\145\x63\x72\145\164\137\x63\141\x63\x68\145\137\153\x65\x79" => '', "\154\157\147\147\x65\x64\x5f\x69\156\x5f\143\157\x6f\x6b\x69\x65" => '', "\x63\x6f\x6d\x6d\157\x6e\x5f\143\141\x63\x68\x65\137\154\157\147\x67\145\x64\137\x75\x73\x65\162\x73" => 0]; foreach ($uiewakwqscemywuo as $ymqmyyeuycgmigyo => $eqgoocgaqwqcimie) { if (!(isset(${$ymqmyyeuycgmigyo}) && ${$ymqmyyeuycgmigyo})) { goto ysaumykuimqigeqa; } $uiewakwqscemywuo[$ymqmyyeuycgmigyo] = ${$ymqmyyeuycgmigyo}; ysaumykuimqigeqa: qmiqicgscsuoyeqo: } kkogaccoqmsmmkmo: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $uiewakwqscemywuo); } public function mmqyysequeygeaii() : string { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto oegaywiwywuyksaq; } return $this->eecucukcqkqysiau(__FUNCTION__); oegaywiwywuyksaq: $gwgucoaaqcwwciqq = $this->iuocyymeygwuweag("\110\124\x54\x50\137\110\117\x53\x54", (string) time()); $gwgucoaaqcwwciqq = preg_replace("\57\x3a\134\144\x2b\44\x2f", '', $gwgucoaaqcwwciqq); $gwgucoaaqcwwciqq = trim(strtolower($gwgucoaaqcwwciqq), "\56"); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], rawurlencode($gwgucoaaqcwwciqq)); } public function wcsoyaccaqessckk() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto eyskqaccgeomqmyw; } return $this->eecucukcqkqysiau(__FUNCTION__); eyskqaccgeomqmyw: $yckucuyiaykemqea = $this->amqagusacuuuaswg(); $yykkewcosaecgqyg = realpath($yckucuyiaykemqea) . DIRECTORY_SEPARATOR; $gwgucoaaqcwwciqq = $this->mmqyysequeygeaii(); $qogsmwakwacwqogk = "{$yckucuyiaykemqea}{$gwgucoaaqcwwciqq}\56\x70\150\160"; if (realpath($qogsmwakwacwqogk) && 0 === stripos(realpath($qogsmwakwacwqogk), $yykkewcosaecgqyg)) { goto kmeekqukcecuscye; } $mkomwsiykqigmqca = str_replace("\x5c", "\x2f", strtok($this->iuocyymeygwuweag("\122\x45\121\x55\105\123\x54\137\125\122\x49", ''), "\x3f")); $mkomwsiykqigmqca = preg_replace("\x7c\x28\77\74\x3d\x2e\51\57\53\174", "\x2f", $mkomwsiykqigmqca); $mkomwsiykqigmqca = explode("\45\62\x46", preg_replace("\57\136\50\77\x3a\x25\x32\x46\x29\x2a\50\x2e\52\77\51\x28\x3f\72\x25\62\x46\x29\52\44\x2f", "\x24\x31", rawurlencode($mkomwsiykqigmqca))); foreach ($mkomwsiykqigmqca as $uwgioieamckgqics) { static $miawkwqioaeasiig; if (realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $uwgioieamckgqics . "\x2e\x70\x68\160") && 0 === stripos(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $uwgioieamckgqics . "\56\160\150\160"), $yykkewcosaecgqyg)) { goto imsgusweocmiyygi; } if (!(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $miawkwqioaeasiig . $uwgioieamckgqics . "\56\160\150\160") && 0 === stripos(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $miawkwqioaeasiig . $uwgioieamckgqics . "\x2e\x70\x68\160"), $yykkewcosaecgqyg))) { goto icawmkaswkmwicsa; } $oqwuasygwcckkios = $yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $miawkwqioaeasiig . $uwgioieamckgqics . "\56\x70\150\160"; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\163\x75\143\x63\145\163\163" => true, "\x70\x61\164\x68" => $oqwuasygwcckkios]); icawmkaswkmwicsa: goto qwueqigcisoogaec; imsgusweocmiyygi: $oqwuasygwcckkios = $yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $uwgioieamckgqics . "\x2e\160\150\x70"; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\163\x75\x63\143\x65\x73\163" => true, "\160\141\164\150" => $oqwuasygwcckkios]); qwueqigcisoogaec: $miawkwqioaeasiig .= $uwgioieamckgqics . "\56"; wscikmsmwmocsqeu: } uiowwckamqucksim: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\163\165\143\x63\145\x73\163" => false, "\160\141\164\x68" => $this->amqagusacuuuaswg() . $gwgucoaaqcwwciqq . implode("\57", $mkomwsiykqigmqca) . "\56\160\x68\x70"]); goto csoeisssoumqqeoa; kmeekqukcecuscye: $oqwuasygwcckkios = $qogsmwakwacwqogk; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\x73\x75\143\x63\145\163\163" => true, "\160\x61\x74\150" => $oqwuasygwcckkios]); csoeisssoumqqeoa: } public function wymiuaugeeigmmuc() { $osqkgokmuiasuukg = $this->get("\162\x65\152\145\x63\164\x5f\x63\157\x6f\x6b\151\145\163"); if (!$osqkgokmuiasuukg) { goto weuueokkumksgaeo; } $osqkgokmuiasuukg = "\43{$osqkgokmuiasuukg}\43"; weuueokkumksgaeo: return $osqkgokmuiasuukg; } public function goqwamweigigmuuu() { $osqkgokmuiasuukg = $this->get("\x69\x67\x6e\x6f\162\x65\x64\x5f\x75\162\x6c\x73"); if (!$osqkgokmuiasuukg) { goto igckskemqkqueukg; } $osqkgokmuiasuukg = "\43{$osqkgokmuiasuukg}\x23"; igckskemqkqueukg: return $osqkgokmuiasuukg; } public function mqoiyygukoqkmwie() : string { $osqkgokmuiasuukg = $this->get("\x63\x61\143\x68\x65\x5f\x6d\x61\156\x64\141\164\157\x72\171\x5f\x63\x6f\x6f\x6b\151\x65\163"); if (!('' !== $osqkgokmuiasuukg)) { goto wgmeyycmqioioaqc; } $osqkgokmuiasuukg = "\x23{$osqkgokmuiasuukg}\43"; wgmeyycmqioioaqc: return $osqkgokmuiasuukg; } public function kwauqaweosgcsimi() : bool { return $this->get("\x64\x65\142\x75\x67\x5f\155\157\x64\x65"); } }
