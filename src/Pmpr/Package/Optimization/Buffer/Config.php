<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c707b39ae82             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Buffer; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Package\Optimization\Traits\MemoizeTrait; class Config { use MemoizeTrait; protected ?string $path = null; protected ?array $server = []; public function __construct($ywmkwiwkosakssii = []) { if ($this->amqagusacuuuaswg()) { goto miyqyeiwquwsacsm; } $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x70\141\164\x68" => '', "\x73\145\162\166\x65\162" => $_SERVER]); $this->path = trailingslashit($ywmkwiwkosakssii["\160\141\164\x68"]); if (!(is_array($ywmkwiwkosakssii["\x73\145\x72\x76\145\162"]) && $ywmkwiwkosakssii["\x73\x65\x72\x76\145\x72"])) { goto qkcyqocqqwmqgqww; } $this->server = $ywmkwiwkosakssii["\x73\145\x72\166\145\x72"]; qkcyqocqqwmqgqww: miyqyeiwquwsacsm: } public function amqagusacuuuaswg() : ?string { return $this->path; } public function giiecckwoyiawoyy() : ?array { return $this->server; } public function iuocyymeygwuweag($ymqmyyeuycgmigyo, $ggauoeuaesiymgee = null) { $ueiegogoeyqoiewa = $this->giiecckwoyiawoyy(); $aqykuigiuwmmcieu = $ggauoeuaesiymgee; if (!isset($ueiegogoeyqoiewa[$ymqmyyeuycgmigyo])) { goto eegqyykygiccaoeo; } $aqykuigiuwmmcieu = $ueiegogoeyqoiewa[$ymqmyyeuycgmigyo]; eegqyykygiccaoeo: return $aqykuigiuwmmcieu; } public function get($ymqmyyeuycgmigyo) { $uiewakwqscemywuo = false; $oyuikeusicgqgwak = $this->tkgawykgecmsaeis(); if (!isset($oyuikeusicgqgwak[$ymqmyyeuycgmigyo])) { goto ywqgcegomwaiuquc; } $uiewakwqscemywuo = $oyuikeusicgqgwak[$ymqmyyeuycgmigyo]; ywqgcegomwaiuquc: return $uiewakwqscemywuo; } public function tkgawykgecmsaeis() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto wmmggowmigekyoso; } return $this->eecucukcqkqysiau(__FUNCTION__); wmmggowmigekyoso: $oqwuasygwcckkios = $this->wcsoyaccaqessckk(); if (!(!isset($oqwuasygwcckkios["\x73\165\x63\x63\x65\163\163"]) || !$oqwuasygwcckkios["\x73\165\143\x63\x65\163\163"])) { goto soqqemyioggmoakg; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); soqqemyioggmoakg: if (!file_exists($oqwuasygwcckkios["\x70\141\x74\150"])) { goto acaqummmoyiemqss; } include $oqwuasygwcckkios["\160\x61\x74\150"]; acaqummmoyiemqss: $uiewakwqscemywuo = ["\x64\145\x62\165\147\x5f\x6d\157\x64\145" => 0, "\143\x61\x63\x68\145\x5f\x77\145\x62\x70" => 0, "\143\x6f\157\153\151\145\137\x68\141\163\150" => '', "\x63\141\143\150\x65\x5f\145\156\141\x62\154\x65" => 1, "\151\x67\156\x6f\x72\145\144\x5f\x75\x72\x6c\163" => [], "\x72\x65\x6a\145\x63\x74\x5f\x63\x6f\x6f\153\x69\x65\163" => '', "\163\145\143\x72\x65\164\137\x63\x61\x63\x68\145\137\153\x65\171" => '', "\x6c\x6f\147\x67\145\144\x5f\151\x6e\137\x63\x6f\x6f\153\151\145" => '', "\x63\157\x6d\x6d\157\156\137\143\x61\143\x68\145\137\154\157\147\x67\145\144\x5f\x75\163\145\162\163" => 0]; foreach ($uiewakwqscemywuo as $ymqmyyeuycgmigyo => $eqgoocgaqwqcimie) { if (!(isset(${$ymqmyyeuycgmigyo}) && ${$ymqmyyeuycgmigyo})) { goto oqugqwcyomiaaoqu; } $uiewakwqscemywuo[$ymqmyyeuycgmigyo] = ${$ymqmyyeuycgmigyo}; oqugqwcyomiaaoqu: eeqesooyqagwawae: } suswcqoyyqkkquuo: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $uiewakwqscemywuo); } public function mmqyysequeygeaii() : string { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto foeeqckqsyockkak; } return $this->eecucukcqkqysiau(__FUNCTION__); foeeqckqsyockkak: $gwgucoaaqcwwciqq = $this->iuocyymeygwuweag("\x48\124\x54\x50\137\110\117\123\124", (string) time()); $gwgucoaaqcwwciqq = preg_replace("\57\x3a\x5c\144\53\44\x2f", '', $gwgucoaaqcwwciqq); $gwgucoaaqcwwciqq = trim(strtolower($gwgucoaaqcwwciqq), "\56"); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], rawurlencode($gwgucoaaqcwwciqq)); } public function wcsoyaccaqessckk() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto iekumemscwieugqw; } return $this->eecucukcqkqysiau(__FUNCTION__); iekumemscwieugqw: $yckucuyiaykemqea = $this->amqagusacuuuaswg(); $yykkewcosaecgqyg = realpath($yckucuyiaykemqea) . DIRECTORY_SEPARATOR; $gwgucoaaqcwwciqq = $this->mmqyysequeygeaii(); $qogsmwakwacwqogk = "{$yckucuyiaykemqea}{$gwgucoaaqcwwciqq}\56\160\150\160"; if (realpath($qogsmwakwacwqogk) && 0 === stripos(realpath($qogsmwakwacwqogk), $yykkewcosaecgqyg)) { goto uqqaiagaeqgqgaiy; } $mkomwsiykqigmqca = str_replace("\134", "\57", strtok($this->iuocyymeygwuweag("\122\x45\x51\x55\105\x53\124\137\125\x52\x49", ''), "\77")); $mkomwsiykqigmqca = preg_replace("\x7c\50\x3f\x3c\x3d\x2e\x29\x2f\53\174", "\x2f", $mkomwsiykqigmqca); $mkomwsiykqigmqca = explode("\45\62\x46", preg_replace("\x2f\136\50\77\72\45\x32\106\51\x2a\50\56\52\77\51\50\77\x3a\x25\x32\x46\x29\52\44\x2f", "\x24\61", rawurlencode($mkomwsiykqigmqca))); foreach ($mkomwsiykqigmqca as $uwgioieamckgqics) { static $miawkwqioaeasiig; if (realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $uwgioieamckgqics . "\x2e\160\150\160") && 0 === stripos(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $uwgioieamckgqics . "\x2e\x70\150\x70"), $yykkewcosaecgqyg)) { goto qicwaskssogcokgm; } if (!(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $miawkwqioaeasiig . $uwgioieamckgqics . "\x2e\x70\x68\x70") && 0 === stripos(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $miawkwqioaeasiig . $uwgioieamckgqics . "\x2e\x70\150\160"), $yykkewcosaecgqyg))) { goto usquiuuyiyqaeyiu; } $oqwuasygwcckkios = $yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $miawkwqioaeasiig . $uwgioieamckgqics . "\56\160\x68\160"; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\x73\x75\x63\x63\x65\x73\163" => true, "\x70\141\x74\x68" => $oqwuasygwcckkios]); usquiuuyiyqaeyiu: goto uguigkcmukuouway; qicwaskssogcokgm: $oqwuasygwcckkios = $yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $uwgioieamckgqics . "\x2e\160\150\160"; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\x73\x75\143\143\x65\x73\x73" => true, "\160\141\x74\150" => $oqwuasygwcckkios]); uguigkcmukuouway: $miawkwqioaeasiig .= $uwgioieamckgqics . "\56"; kymkucucyeoeikim: } hoeeyiowekaeemko: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\x73\165\x63\143\145\163\x73" => false, "\x70\141\x74\x68" => $this->amqagusacuuuaswg() . $gwgucoaaqcwwciqq . implode("\57", $mkomwsiykqigmqca) . "\56\x70\x68\160"]); goto esuiysskoweawsue; uqqaiagaeqgqgaiy: $oqwuasygwcckkios = $qogsmwakwacwqogk; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\x73\x75\x63\x63\x65\163\163" => true, "\x70\141\164\150" => $oqwuasygwcckkios]); esuiysskoweawsue: } public function wymiuaugeeigmmuc() { $osqkgokmuiasuukg = $this->get("\162\145\152\145\x63\x74\x5f\143\x6f\157\153\x69\x65\x73"); if (!$osqkgokmuiasuukg) { goto gaomwagkcciesyqy; } $osqkgokmuiasuukg = "\x23{$osqkgokmuiasuukg}\43"; gaomwagkcciesyqy: return $osqkgokmuiasuukg; } public function goqwamweigigmuuu() { $osqkgokmuiasuukg = $this->get("\x69\147\156\x6f\x72\145\144\x5f\165\162\154\163"); if (!$osqkgokmuiasuukg) { goto aegysmeecgcgayyw; } $osqkgokmuiasuukg = "\43{$osqkgokmuiasuukg}\x23"; aegysmeecgcgayyw: return $osqkgokmuiasuukg; } public function mqoiyygukoqkmwie() : string { $osqkgokmuiasuukg = $this->get("\x63\x61\143\x68\x65\137\155\x61\156\144\x61\164\157\162\x79\137\x63\x6f\x6f\x6b\151\145\163"); if (!('' !== $osqkgokmuiasuukg)) { goto suqkuqygkkgwyaie; } $osqkgokmuiasuukg = "\43{$osqkgokmuiasuukg}\43"; suqkuqygkkgwyaie: return $osqkgokmuiasuukg; } public function kwauqaweosgcsimi() : bool { return $this->get("\144\145\142\165\147\x5f\155\157\x64\x65"); } }
