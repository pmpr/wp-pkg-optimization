<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6758115135c8b             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Asset; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Container; use Pmpr\Module\Optimization\Optimization; class Preload extends Container { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x77\160\x5f\150\145\x61\144", [$this, "\x73\147\157\157\x6f\x75\x61\x69\x67\x71\x77\x69\x61\161\157\161"]); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse(Optimization::kgswyesggeyekgmg . "\x63\x61\x63\x68\145\137\150\x65\141\144\145\162\x73\137\x6c\x69\163\x74", [$this, "\163\163\147\x79\x6b\165\x75\x75\143\x6b\141\153\x79\x67\167\x67"]); } public function auwoukwweaicagsq() { return $this->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\141\x73\163\145\x74\137\160\x72\x65\x6c\x6f\x61\x64\137\x6c\x69\x6e\x6b\163", []); } public function sgooouaigqwiaqoq() { if ($this->isgmmgcaqsguwias()->asgqmkcukouykiie()->ocysssyiuaueqiei()) { if (!headers_sent()) { header("\x31\x30\x33\x20\x45\141\x72\x6c\171\x20\x48\x69\x6e\x74\x73", false); header("\x4c\151\156\153\x3a\40" . $this->wecsewaimwquoqkk(), false); } else { echo $this->ukkcoiggmmycaeuw(); } } } public function wecsewaimwquoqkk() : string { $aiwcguiecocoyqqi = $this->auwoukwweaicagsq(); $aqykuigiuwmmcieu = ''; foreach ($aiwcguiecocoyqqi as $ogiyyuwciysokiuc) { $aqykuigiuwmmcieu .= $this->gqiiiaisiqmqomww($ogiyyuwciysokiuc) . "\54"; } return rtrim($aqykuigiuwmmcieu, "\54"); } public function ukkcoiggmmycaeuw() : string { $aiwcguiecocoyqqi = $this->auwoukwweaicagsq(); $aqykuigiuwmmcieu = ''; foreach ($aiwcguiecocoyqqi as $ogiyyuwciysokiuc) { if (isset($ogiyyuwciysokiuc["\x6e\x6f\x73\143\x72\x69\160\164"])) { $cuiaccicqeqwyyuo = $ogiyyuwciysokiuc["\156\x6f\163\x63\x72\x69\x70\164"]; unset($ogiyyuwciysokiuc["\156\157\163\143\162\x69\x70\x74"]); $aqykuigiuwmmcieu .= $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->yoamscgeuweiugse($cuiaccicqeqwyyuo); } $aqykuigiuwmmcieu .= $this->oqsucquusggqcoao($ogiyyuwciysokiuc); } return $aqykuigiuwmmcieu; } public function ssgykuuuckakygwg($uykgysuswksgmwqy) : array { $aiwcguiecocoyqqi = $this->wecsewaimwquoqkk(); if ($aiwcguiecocoyqqi) { $uykgysuswksgmwqy[] = "\x31\60\63\40\105\141\162\x6c\x79\x20\110\x69\156\164\163"; $uykgysuswksgmwqy["\114\151\x6e\x6b"] = $aiwcguiecocoyqqi; } return $uykgysuswksgmwqy; } private function gqiiiaisiqmqomww(array $siquossayskcwkea) : string { $sogksuscggsicmac = ''; $siquossayskcwkea = $this->iwwioqumuewcikoq($siquossayskcwkea); if ($siquossayskcwkea) { if (!isset($siquossayskcwkea["\162\145\x6c"])) { $siquossayskcwkea["\x72\145\x6c"] = Constants::iwksyuwwwkucsisq; } $qookweymeqawmcwo = ''; foreach ($siquossayskcwkea as $ymkomoccmymcoiea => $eqgoocgaqwqcimie) { if (!is_scalar($eqgoocgaqwqcimie) || !is_numeric($ymkomoccmymcoiea) && !in_array($ymkomoccmymcoiea, ["\x72\x65\x6c", "\141\163", "\x63\x72\157\163\x73\x6f\162\151\x67\x69\x6e", "\x74\x79\x70\145", "\x6e\157\x70\165\x73\150"], true)) { continue; } if (!is_string($eqgoocgaqwqcimie)) { $qookweymeqawmcwo .= "\40{$eqgoocgaqwqcimie}\73"; } else { $qookweymeqawmcwo .= "\40{$ymkomoccmymcoiea}\x3d\42{$eqgoocgaqwqcimie}\42\x3b"; } } $qookweymeqawmcwo = trim($qookweymeqawmcwo); $qookweymeqawmcwo = rtrim($qookweymeqawmcwo, "\73"); $sogksuscggsicmac = sprintf("\x3c\45\x73\x3e\x3b\40\45\163", esc_url_raw($siquossayskcwkea["\150\x72\x65\x66"]), $qookweymeqawmcwo); } return $sogksuscggsicmac; } public function oqsucquusggqcoao(array $siquossayskcwkea) : string { $sogksuscggsicmac = ''; $siquossayskcwkea = $this->iwwioqumuewcikoq($siquossayskcwkea); if ($siquossayskcwkea) { $wwgucssaecqekuek = []; foreach ($siquossayskcwkea as $ymkomoccmymcoiea => $eqgoocgaqwqcimie) { if (!is_scalar($eqgoocgaqwqcimie) || !is_numeric($ymkomoccmymcoiea) && !in_array($ymkomoccmymcoiea, ["\162\145\x6c", "\150\x72\x65\x66", "\141\x73", "\143\x72\x6f\163\163\x6f\x72\x69\x67\x69\x6e", "\x74\171\x70\145", "\157\156\154\x6f\141\x64"], true)) { continue; } $wwgucssaecqekuek[$ymkomoccmymcoiea] = $eqgoocgaqwqcimie; } $sogksuscggsicmac = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->qgsekwygcgawekeq("\154\x69\156\153", $wwgucssaecqekuek); } return $sogksuscggsicmac; } public function iwwioqumuewcikoq(array $siquossayskcwkea) : array { if (!isset($siquossayskcwkea["\x68\x72\145\x66"])) { return []; } if (isset($siquossayskcwkea[Constants::caoiqkqugiqqqimm])) { $siquossayskcwkea[Constants::caoiqkqugiqqqimm] = Constants::iwksyuwwwkucsisq; } return $siquossayskcwkea; } }
