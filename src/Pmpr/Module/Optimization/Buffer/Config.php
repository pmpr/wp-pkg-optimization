<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62e6b0646cf09             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Buffer; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Module\Optimization\Traits\MemoizeTrait; class Config { use MemoizeTrait; protected ?string $path = null; protected ?array $server = []; public function __construct($ywmkwiwkosakssii = []) { if ($this->amqagusacuuuaswg()) { goto yamyagayiooyeekg; } $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\160\x61\x74\x68" => '', "\163\145\x72\166\145\162" => $_SERVER]); $this->path = trailingslashit($ywmkwiwkosakssii["\160\x61\x74\150"]); if (!(is_array($ywmkwiwkosakssii["\x73\145\x72\166\145\162"]) && $ywmkwiwkosakssii["\x73\145\162\166\x65\x72"])) { goto iksewmsaugayqaqq; } $this->server = $ywmkwiwkosakssii["\163\145\x72\x76\145\162"]; iksewmsaugayqaqq: yamyagayiooyeekg: } public function amqagusacuuuaswg() : ?string { return $this->path; } public function giiecckwoyiawoyy() : ?array { return $this->server; } public function iuocyymeygwuweag($ymqmyyeuycgmigyo, $ggauoeuaesiymgee = null) { $ueiegogoeyqoiewa = $this->giiecckwoyiawoyy(); $aqykuigiuwmmcieu = $ggauoeuaesiymgee; if (!isset($ueiegogoeyqoiewa[$ymqmyyeuycgmigyo])) { goto yoagcooekomeokwg; } $aqykuigiuwmmcieu = $ueiegogoeyqoiewa[$ymqmyyeuycgmigyo]; yoagcooekomeokwg: return $aqykuigiuwmmcieu; } public function get($ymqmyyeuycgmigyo) { $uiewakwqscemywuo = false; $oyuikeusicgqgwak = $this->tkgawykgecmsaeis(); if (!isset($oyuikeusicgqgwak[$ymqmyyeuycgmigyo])) { goto eckcqesiokgwkkiw; } $uiewakwqscemywuo = $oyuikeusicgqgwak[$ymqmyyeuycgmigyo]; eckcqesiokgwkkiw: return $uiewakwqscemywuo; } public function tkgawykgecmsaeis() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto ecouwqosmoyyqmkw; } return $this->eecucukcqkqysiau(__FUNCTION__); ecouwqosmoyyqmkw: $oqwuasygwcckkios = $this->wcsoyaccaqessckk(); if (!(!isset($oqwuasygwcckkios["\x73\x75\143\x63\145\x73\x73"]) || !$oqwuasygwcckkios["\163\165\x63\143\145\163\163"])) { goto mqiiqkuaoekeuswo; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); mqiiqkuaoekeuswo: if (!file_exists($oqwuasygwcckkios["\160\141\164\x68"])) { goto qmoocweoekqueuyy; } include $oqwuasygwcckkios["\160\x61\164\150"]; qmoocweoekqueuyy: $uiewakwqscemywuo = ["\x64\145\142\x75\147\137\155\x6f\144\x65" => 0, "\x63\141\x63\x68\145\x5f\x77\145\x62\x70" => 0, "\x63\x6f\157\x6b\x69\145\137\x68\141\163\x68" => '', "\143\x61\143\150\x65\137\145\156\141\142\x6c\x65" => 1, "\x69\147\x6e\x6f\x72\145\144\137\165\x72\154\x73" => [], "\x72\145\152\145\x63\x74\137\x63\x6f\157\153\151\x65\163" => '', "\163\145\143\x72\145\x74\137\143\141\143\x68\x65\137\153\145\x79" => '', "\x6c\x6f\147\x67\145\x64\137\x69\x6e\x5f\x63\157\x6f\153\x69\x65" => '', "\143\157\x6d\x6d\x6f\156\137\x63\x61\143\x68\145\137\x6c\157\x67\x67\145\144\137\165\163\145\162\x73" => 0]; foreach ($uiewakwqscemywuo as $ymqmyyeuycgmigyo => $eqgoocgaqwqcimie) { if (!(isset(${$ymqmyyeuycgmigyo}) && ${$ymqmyyeuycgmigyo})) { goto quyogmwugsyoaaiu; } $uiewakwqscemywuo[$ymqmyyeuycgmigyo] = ${$ymqmyyeuycgmigyo}; quyogmwugsyoaaiu: skuqigsokaguscas: } sgiwoiscywusgmmm: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $uiewakwqscemywuo); } public function mmqyysequeygeaii() : string { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto mmgmqogugasaqkgg; } return $this->eecucukcqkqysiau(__FUNCTION__); mmgmqogugasaqkgg: $gwgucoaaqcwwciqq = $this->iuocyymeygwuweag("\110\124\x54\x50\137\x48\x4f\x53\124", (string) time()); $gwgucoaaqcwwciqq = preg_replace("\57\x3a\134\x64\x2b\44\57", '', $gwgucoaaqcwwciqq); $gwgucoaaqcwwciqq = trim(strtolower($gwgucoaaqcwwciqq), "\x2e"); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], rawurlencode($gwgucoaaqcwwciqq)); } public function wcsoyaccaqessckk() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto wmumywgyyeagqoeq; } return $this->eecucukcqkqysiau(__FUNCTION__); wmumywgyyeagqoeq: $yckucuyiaykemqea = $this->amqagusacuuuaswg(); $yykkewcosaecgqyg = realpath($yckucuyiaykemqea) . DIRECTORY_SEPARATOR; $gwgucoaaqcwwciqq = $this->mmqyysequeygeaii(); $qogsmwakwacwqogk = "{$yckucuyiaykemqea}{$gwgucoaaqcwwciqq}\56\x70\x68\160"; if (realpath($qogsmwakwacwqogk) && 0 === stripos(realpath($qogsmwakwacwqogk), $yykkewcosaecgqyg)) { goto sckioayasmkcoeoo; } $mkomwsiykqigmqca = str_replace("\x5c", "\57", strtok($this->iuocyymeygwuweag("\x52\105\x51\125\105\123\x54\137\x55\x52\111", ''), "\x3f")); $mkomwsiykqigmqca = preg_replace("\x7c\x28\77\74\x3d\56\x29\x2f\53\174", "\x2f", $mkomwsiykqigmqca); $mkomwsiykqigmqca = explode("\x25\62\106", preg_replace("\57\136\x28\77\x3a\x25\x32\x46\51\x2a\50\56\52\77\51\x28\x3f\72\x25\62\x46\x29\52\44\x2f", "\44\61", rawurlencode($mkomwsiykqigmqca))); foreach ($mkomwsiykqigmqca as $uwgioieamckgqics) { static $miawkwqioaeasiig; if (realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $uwgioieamckgqics . "\56\x70\150\x70") && 0 === stripos(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $uwgioieamckgqics . "\56\x70\150\x70"), $yykkewcosaecgqyg)) { goto yuoeumyiuqkuouey; } if (!(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $miawkwqioaeasiig . $uwgioieamckgqics . "\56\x70\x68\160") && 0 === stripos(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $miawkwqioaeasiig . $uwgioieamckgqics . "\x2e\160\150\x70"), $yykkewcosaecgqyg))) { goto eoyiumycaigawmmc; } $oqwuasygwcckkios = $yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $miawkwqioaeasiig . $uwgioieamckgqics . "\x2e\x70\x68\160"; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\x73\x75\x63\143\145\163\163" => true, "\x70\141\x74\150" => $oqwuasygwcckkios]); eoyiumycaigawmmc: goto eyiwqgqcsqakwqss; yuoeumyiuqkuouey: $oqwuasygwcckkios = $yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $uwgioieamckgqics . "\56\x70\x68\x70"; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\163\x75\x63\x63\145\x73\x73" => true, "\x70\141\164\150" => $oqwuasygwcckkios]); eyiwqgqcsqakwqss: $miawkwqioaeasiig .= $uwgioieamckgqics . "\x2e"; mgcuiguaomoqwwwm: } smcguieygyqcaqgs: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\x73\x75\143\x63\145\x73\x73" => false, "\x70\141\x74\x68" => $this->amqagusacuuuaswg() . $gwgucoaaqcwwciqq . implode("\57", $mkomwsiykqigmqca) . "\56\160\x68\160"]); goto yssqmyoaokkksukc; sckioayasmkcoeoo: $oqwuasygwcckkios = $qogsmwakwacwqogk; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\163\165\143\x63\145\x73\x73" => true, "\160\x61\164\150" => $oqwuasygwcckkios]); yssqmyoaokkksukc: } public function wymiuaugeeigmmuc() { $osqkgokmuiasuukg = $this->get("\162\145\x6a\x65\143\164\137\143\157\x6f\x6b\x69\145\x73"); if (!$osqkgokmuiasuukg) { goto ooqksueucyagyuoe; } $osqkgokmuiasuukg = "\43{$osqkgokmuiasuukg}\43"; ooqksueucyagyuoe: return $osqkgokmuiasuukg; } public function goqwamweigigmuuu() { $osqkgokmuiasuukg = $this->get("\x69\x67\156\157\162\x65\144\137\165\x72\154\x73"); if (!$osqkgokmuiasuukg) { goto osmmoyqkqoucsgow; } $osqkgokmuiasuukg = "\x23{$osqkgokmuiasuukg}\43"; osmmoyqkqoucsgow: return $osqkgokmuiasuukg; } public function mqoiyygukoqkmwie() : string { $osqkgokmuiasuukg = $this->get("\x63\x61\x63\150\x65\137\155\141\x6e\x64\x61\x74\x6f\162\171\x5f\x63\x6f\157\x6b\x69\145\x73"); if (!('' !== $osqkgokmuiasuukg)) { goto wgiygcmqaokywuqa; } $osqkgokmuiasuukg = "\43{$osqkgokmuiasuukg}\x23"; wgiygcmqaokywuqa: return $osqkgokmuiasuukg; } public function kwauqaweosgcsimi() : bool { return $this->get("\144\145\x62\x75\x67\x5f\x6d\157\144\145"); } }
