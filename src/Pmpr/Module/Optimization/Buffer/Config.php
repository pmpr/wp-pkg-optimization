<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6240a41b79ab5             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Buffer; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Module\Optimization\Traits\MemoizeTrait; class Config { use MemoizeTrait; protected ?string $path = null; protected ?array $server = []; public function __construct($ywmkwiwkosakssii = []) { if ($this->amqagusacuuuaswg()) { goto saycoceqywiekqsi; } $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\160\141\x74\150" => '', "\163\145\x72\x76\145\x72" => $_SERVER]); $this->path = trailingslashit($ywmkwiwkosakssii["\160\x61\x74\x68"]); if (!(is_array($ywmkwiwkosakssii["\163\145\162\166\x65\x72"]) && $ywmkwiwkosakssii["\x73\145\162\166\145\162"])) { goto uccuykggugcmiyam; } $this->server = $ywmkwiwkosakssii["\163\145\x72\x76\x65\162"]; uccuykggugcmiyam: saycoceqywiekqsi: } public function amqagusacuuuaswg() : ?string { return $this->path; } public function giiecckwoyiawoyy() : ?array { return $this->server; } public function iuocyymeygwuweag($ymqmyyeuycgmigyo, $ggauoeuaesiymgee = null) { $ueiegogoeyqoiewa = $this->giiecckwoyiawoyy(); $aqykuigiuwmmcieu = $ggauoeuaesiymgee; if (!isset($ueiegogoeyqoiewa[$ymqmyyeuycgmigyo])) { goto sqaowueaequoigsa; } $aqykuigiuwmmcieu = $ueiegogoeyqoiewa[$ymqmyyeuycgmigyo]; sqaowueaequoigsa: return $aqykuigiuwmmcieu; } public function get($ymqmyyeuycgmigyo) { $uiewakwqscemywuo = false; $oyuikeusicgqgwak = $this->tkgawykgecmsaeis(); if (!isset($oyuikeusicgqgwak[$ymqmyyeuycgmigyo])) { goto eqmauwqqowsiwaue; } $uiewakwqscemywuo = $oyuikeusicgqgwak[$ymqmyyeuycgmigyo]; eqmauwqqowsiwaue: return $uiewakwqscemywuo; } public function tkgawykgecmsaeis() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto waycokyiesmqgqcg; } return $this->eecucukcqkqysiau(__FUNCTION__); waycokyiesmqgqcg: $oqwuasygwcckkios = $this->wcsoyaccaqessckk(); if (!(!isset($oqwuasygwcckkios["\163\x75\x63\143\145\x73\x73"]) || !$oqwuasygwcckkios["\163\x75\143\x63\145\x73\x73"])) { goto yqkyoaiwcyqeaqwu; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); yqkyoaiwcyqeaqwu: if (!file_exists($oqwuasygwcckkios["\160\141\164\150"])) { goto yuyiqaawwgaywgqo; } include $oqwuasygwcckkios["\160\x61\164\150"]; yuyiqaawwgaywgqo: $uiewakwqscemywuo = ["\x64\x65\x62\x75\147\137\x6d\157\x64\145" => 0, "\x63\141\143\x68\x65\x5f\167\x65\x62\x70" => 0, "\143\157\157\x6b\151\145\x5f\x68\x61\x73\150" => '', "\143\x61\143\150\145\x5f\145\156\141\x62\154\x65" => 1, "\x69\x67\x6e\x6f\162\145\144\x5f\x75\162\154\163" => [], "\162\x65\152\145\x63\x74\x5f\143\x6f\157\x6b\151\145\163" => '', "\x73\x65\143\x72\x65\164\x5f\143\141\x63\150\x65\x5f\153\145\x79" => '', "\154\x6f\x67\147\x65\x64\x5f\x69\x6e\x5f\143\157\157\x6b\x69\145" => '', "\143\x6f\155\155\x6f\156\137\143\x61\143\150\x65\x5f\154\x6f\x67\147\x65\144\137\165\x73\145\162\163" => 0]; foreach ($uiewakwqscemywuo as $ymqmyyeuycgmigyo => $eqgoocgaqwqcimie) { if (!(isset(${$ymqmyyeuycgmigyo}) && ${$ymqmyyeuycgmigyo})) { goto ysaumykuimqigeqa; } $uiewakwqscemywuo[$ymqmyyeuycgmigyo] = ${$ymqmyyeuycgmigyo}; ysaumykuimqigeqa: qmiqicgscsuoyeqo: } kkogaccoqmsmmkmo: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $uiewakwqscemywuo); } public function mmqyysequeygeaii() : string { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto oegaywiwywuyksaq; } return $this->eecucukcqkqysiau(__FUNCTION__); oegaywiwywuyksaq: $gwgucoaaqcwwciqq = $this->iuocyymeygwuweag("\x48\124\124\120\x5f\x48\x4f\x53\x54", (string) time()); $gwgucoaaqcwwciqq = preg_replace("\57\x3a\x5c\x64\53\x24\57", '', $gwgucoaaqcwwciqq); $gwgucoaaqcwwciqq = trim(strtolower($gwgucoaaqcwwciqq), "\x2e"); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], rawurlencode($gwgucoaaqcwwciqq)); } public function wcsoyaccaqessckk() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto eyskqaccgeomqmyw; } return $this->eecucukcqkqysiau(__FUNCTION__); eyskqaccgeomqmyw: $yckucuyiaykemqea = $this->amqagusacuuuaswg(); $yykkewcosaecgqyg = realpath($yckucuyiaykemqea) . DIRECTORY_SEPARATOR; $gwgucoaaqcwwciqq = $this->mmqyysequeygeaii(); $qogsmwakwacwqogk = "{$yckucuyiaykemqea}{$gwgucoaaqcwwciqq}\x2e\x70\150\160"; if (realpath($qogsmwakwacwqogk) && 0 === stripos(realpath($qogsmwakwacwqogk), $yykkewcosaecgqyg)) { goto kmeekqukcecuscye; } $mkomwsiykqigmqca = str_replace("\x5c", "\57", strtok($this->iuocyymeygwuweag("\122\105\121\125\105\123\x54\137\x55\x52\111", ''), "\77")); $mkomwsiykqigmqca = preg_replace("\x7c\x28\77\x3c\x3d\56\51\x2f\53\x7c", "\x2f", $mkomwsiykqigmqca); $mkomwsiykqigmqca = explode("\45\62\x46", preg_replace("\57\x5e\x28\x3f\x3a\x25\62\106\51\x2a\50\x2e\x2a\77\x29\50\77\x3a\x25\x32\106\51\x2a\44\x2f", "\44\x31", rawurlencode($mkomwsiykqigmqca))); foreach ($mkomwsiykqigmqca as $uwgioieamckgqics) { static $miawkwqioaeasiig; if (realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $uwgioieamckgqics . "\x2e\x70\150\160") && 0 === stripos(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $uwgioieamckgqics . "\x2e\x70\x68\160"), $yykkewcosaecgqyg)) { goto imsgusweocmiyygi; } if (!(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $miawkwqioaeasiig . $uwgioieamckgqics . "\56\160\150\x70") && 0 === stripos(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $miawkwqioaeasiig . $uwgioieamckgqics . "\56\160\150\x70"), $yykkewcosaecgqyg))) { goto icawmkaswkmwicsa; } $oqwuasygwcckkios = $yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $miawkwqioaeasiig . $uwgioieamckgqics . "\x2e\x70\x68\x70"; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\x73\165\143\143\x65\163\163" => true, "\x70\141\x74\x68" => $oqwuasygwcckkios]); icawmkaswkmwicsa: goto qwueqigcisoogaec; imsgusweocmiyygi: $oqwuasygwcckkios = $yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $uwgioieamckgqics . "\x2e\160\150\160"; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\x73\x75\x63\x63\145\163\163" => true, "\x70\141\x74\x68" => $oqwuasygwcckkios]); qwueqigcisoogaec: $miawkwqioaeasiig .= $uwgioieamckgqics . "\x2e"; wscikmsmwmocsqeu: } uiowwckamqucksim: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\x73\x75\x63\143\145\163\163" => false, "\160\141\x74\150" => $this->amqagusacuuuaswg() . $gwgucoaaqcwwciqq . implode("\x2f", $mkomwsiykqigmqca) . "\56\160\150\x70"]); goto csoeisssoumqqeoa; kmeekqukcecuscye: $oqwuasygwcckkios = $qogsmwakwacwqogk; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\x73\x75\143\x63\x65\x73\x73" => true, "\160\141\164\150" => $oqwuasygwcckkios]); csoeisssoumqqeoa: } public function wymiuaugeeigmmuc() { $osqkgokmuiasuukg = $this->get("\162\145\x6a\x65\143\164\137\x63\157\157\153\x69\x65\163"); if (!$osqkgokmuiasuukg) { goto weuueokkumksgaeo; } $osqkgokmuiasuukg = "\43{$osqkgokmuiasuukg}\43"; weuueokkumksgaeo: return $osqkgokmuiasuukg; } public function goqwamweigigmuuu() { $osqkgokmuiasuukg = $this->get("\151\x67\156\157\162\145\x64\x5f\165\162\x6c\x73"); if (!$osqkgokmuiasuukg) { goto igckskemqkqueukg; } $osqkgokmuiasuukg = "\43{$osqkgokmuiasuukg}\x23"; igckskemqkqueukg: return $osqkgokmuiasuukg; } public function mqoiyygukoqkmwie() : string { $osqkgokmuiasuukg = $this->get("\143\141\x63\x68\145\137\x6d\141\x6e\x64\x61\x74\x6f\x72\171\x5f\x63\157\x6f\153\151\x65\x73"); if (!('' !== $osqkgokmuiasuukg)) { goto wgmeyycmqioioaqc; } $osqkgokmuiasuukg = "\x23{$osqkgokmuiasuukg}\43"; wgmeyycmqioioaqc: return $osqkgokmuiasuukg; } public function kwauqaweosgcsimi() : bool { return $this->get("\144\x65\x62\165\x67\x5f\x6d\157\144\145"); } }
