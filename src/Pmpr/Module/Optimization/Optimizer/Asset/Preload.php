<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66fa800b89726             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Asset; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Optimization; class Preload extends Common { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\167\160\x5f\150\145\141\144", [$this, "\163\147\157\x6f\x6f\165\141\x69\x67\161\x77\x69\141\x71\157\161"]); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse(Optimization::kgswyesggeyekgmg . "\143\x61\143\x68\145\137\150\145\x61\x64\145\x72\x73\137\x6c\151\163\164", [$this, "\163\163\147\171\153\x75\165\x75\x63\x6b\141\x6b\171\x67\167\x67"]); } public function auwoukwweaicagsq() { return $this->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\141\x73\163\x65\x74\x5f\160\x72\x65\x6c\x6f\141\144\137\x6c\151\x6e\x6b\163", []); } public function sgooouaigqwiaqoq() { if (!$this->isgmmgcaqsguwias()->asgqmkcukouykiie()->ocysssyiuaueqiei()) { goto qqiwcikkcgmmakow; } if (!headers_sent()) { goto assyuumuuuocycyy; } echo $this->ukkcoiggmmycaeuw(); goto oiueawimuggcqgky; assyuumuuuocycyy: header("\x31\x30\63\x20\105\x61\x72\154\x79\40\110\151\x6e\164\163", false); header("\x4c\151\156\x6b\x3a\x20" . $this->wecsewaimwquoqkk(), false); oiueawimuggcqgky: qqiwcikkcgmmakow: } public function wecsewaimwquoqkk() : string { $aiwcguiecocoyqqi = $this->auwoukwweaicagsq(); $aqykuigiuwmmcieu = ''; foreach ($aiwcguiecocoyqqi as $ogiyyuwciysokiuc) { $aqykuigiuwmmcieu .= $this->gqiiiaisiqmqomww($ogiyyuwciysokiuc) . "\x2c"; wksssmewgogkacei: } wgcuewwyieoqaoek: return rtrim($aqykuigiuwmmcieu, "\x2c"); } public function ukkcoiggmmycaeuw() : string { $aiwcguiecocoyqqi = $this->auwoukwweaicagsq(); $aqykuigiuwmmcieu = ''; foreach ($aiwcguiecocoyqqi as $ogiyyuwciysokiuc) { if (!isset($ogiyyuwciysokiuc["\156\157\x73\143\x72\151\x70\164"])) { goto akycayowsciesmug; } $cuiaccicqeqwyyuo = $ogiyyuwciysokiuc["\x6e\x6f\x73\x63\162\151\160\164"]; unset($ogiyyuwciysokiuc["\156\x6f\163\x63\x72\151\x70\164"]); $aqykuigiuwmmcieu .= $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->yoamscgeuweiugse($cuiaccicqeqwyyuo); akycayowsciesmug: $aqykuigiuwmmcieu .= $this->oqsucquusggqcoao($ogiyyuwciysokiuc); akcqguucucewaqws: } ykcymsoikgqeaukw: return $aqykuigiuwmmcieu; } public function ssgykuuuckakygwg($uykgysuswksgmwqy) : array { $aiwcguiecocoyqqi = $this->wecsewaimwquoqkk(); if (!$aiwcguiecocoyqqi) { goto ogqaueuweieisowc; } $uykgysuswksgmwqy[] = "\61\60\63\x20\x45\141\162\x6c\x79\40\110\x69\x6e\x74\x73"; $uykgysuswksgmwqy["\x4c\x69\x6e\x6b"] = $aiwcguiecocoyqqi; ogqaueuweieisowc: return $uykgysuswksgmwqy; } private function gqiiiaisiqmqomww(array $siquossayskcwkea) : string { $sogksuscggsicmac = ''; $siquossayskcwkea = $this->iwwioqumuewcikoq($siquossayskcwkea); if (!$siquossayskcwkea) { goto muaigwwqgsgowgkk; } if (isset($siquossayskcwkea["\162\x65\x6c"])) { goto yaokowamwsaggege; } $siquossayskcwkea["\162\x65\x6c"] = Constants::iwksyuwwwkucsisq; yaokowamwsaggege: $qookweymeqawmcwo = ''; foreach ($siquossayskcwkea as $ymkomoccmymcoiea => $eqgoocgaqwqcimie) { if (!(!is_scalar($eqgoocgaqwqcimie) || !is_numeric($ymkomoccmymcoiea) && !in_array($ymkomoccmymcoiea, ["\x72\x65\x6c", "\141\x73", "\143\162\x6f\x73\163\157\x72\151\147\151\156", "\164\171\160\145", "\156\x6f\160\165\163\x68"], true))) { goto ggcayqaayysyqmia; } goto waiqmywasoeggkce; ggcayqaayysyqmia: if (!is_string($eqgoocgaqwqcimie)) { goto miiegqgiuamasook; } $qookweymeqawmcwo .= "\40{$ymkomoccmymcoiea}\75\x22{$eqgoocgaqwqcimie}\x22\x3b"; goto eskmkooukwwieuke; miiegqgiuamasook: $qookweymeqawmcwo .= "\x20{$eqgoocgaqwqcimie}\x3b"; eskmkooukwwieuke: waiqmywasoeggkce: } qwqwwywiiuqayaca: $qookweymeqawmcwo = trim($qookweymeqawmcwo); $qookweymeqawmcwo = rtrim($qookweymeqawmcwo, "\73"); $sogksuscggsicmac = sprintf("\x3c\45\x73\x3e\x3b\x20\x25\163", esc_url_raw($siquossayskcwkea["\150\x72\145\x66"]), $qookweymeqawmcwo); muaigwwqgsgowgkk: return $sogksuscggsicmac; } public function oqsucquusggqcoao(array $siquossayskcwkea) : string { $sogksuscggsicmac = ''; $siquossayskcwkea = $this->iwwioqumuewcikoq($siquossayskcwkea); if (!$siquossayskcwkea) { goto ueeowyociayoygsa; } $wwgucssaecqekuek = []; foreach ($siquossayskcwkea as $ymkomoccmymcoiea => $eqgoocgaqwqcimie) { if (!(!is_scalar($eqgoocgaqwqcimie) || !is_numeric($ymkomoccmymcoiea) && !in_array($ymkomoccmymcoiea, ["\x72\x65\154", "\x68\162\145\x66", "\141\163", "\143\162\157\x73\163\157\x72\151\147\x69\x6e", "\164\x79\x70\x65", "\x6f\x6e\154\157\141\x64"], true))) { goto oiguycsiaweycioe; } goto isssemmuiiaewiwi; oiguycsiaweycioe: $wwgucssaecqekuek[$ymkomoccmymcoiea] = $eqgoocgaqwqcimie; isssemmuiiaewiwi: } imgyqyeaoawqscae: $sogksuscggsicmac = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->qgsekwygcgawekeq("\154\151\x6e\x6b", $wwgucssaecqekuek); ueeowyociayoygsa: return $sogksuscggsicmac; } public function iwwioqumuewcikoq(array $siquossayskcwkea) : array { if (isset($siquossayskcwkea["\x68\x72\x65\x66"])) { goto isumwussqyqawwmy; } return []; isumwussqyqawwmy: if (!isset($siquossayskcwkea[Constants::caoiqkqugiqqqimm])) { goto ksaimkacqesiguyg; } $siquossayskcwkea[Constants::caoiqkqugiqqqimm] = Constants::iwksyuwwwkucsisq; ksaimkacqesiguyg: return $siquossayskcwkea; } }
