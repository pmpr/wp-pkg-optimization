<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66eb16dc16c38             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Asset; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Optimization; class Preload extends Common { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x77\160\137\150\145\x61\x64", [$this, "\163\x67\157\x6f\x6f\x75\x61\x69\147\x71\x77\x69\x61\x71\x6f\x71"]); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse(Optimization::kgswyesggeyekgmg . "\143\141\143\150\145\137\x68\145\x61\x64\145\162\163\x5f\154\x69\x73\x74", [$this, "\x73\x73\147\171\x6b\x75\165\165\x63\x6b\141\x6b\171\x67\167\x67"]); } public function auwoukwweaicagsq() { return $this->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\141\x73\163\145\164\x5f\160\162\x65\154\157\141\144\x5f\x6c\x69\156\x6b\x73", []); } public function sgooouaigqwiaqoq() { if (!$this->isgmmgcaqsguwias()->asgqmkcukouykiie()->ocysssyiuaueqiei()) { goto asueqykmkoaimguq; } if (!headers_sent()) { goto meegaqaesckqmyec; } echo $this->ukkcoiggmmycaeuw(); goto scccyaiaggeasgqg; meegaqaesckqmyec: header("\x31\x30\x33\40\105\x61\162\x6c\171\x20\x48\151\x6e\164\163", false); header("\x4c\151\156\153\x3a\40" . $this->wecsewaimwquoqkk(), false); scccyaiaggeasgqg: asueqykmkoaimguq: } public function wecsewaimwquoqkk() : string { $aiwcguiecocoyqqi = $this->auwoukwweaicagsq(); $aqykuigiuwmmcieu = ''; foreach ($aiwcguiecocoyqqi as $ogiyyuwciysokiuc) { $aqykuigiuwmmcieu .= $this->gqiiiaisiqmqomww($ogiyyuwciysokiuc) . "\x2c"; isaouwiaamimceeg: } iyocimuyeemkaaso: return rtrim($aqykuigiuwmmcieu, "\54"); } public function ukkcoiggmmycaeuw() : string { $aiwcguiecocoyqqi = $this->auwoukwweaicagsq(); $aqykuigiuwmmcieu = ''; foreach ($aiwcguiecocoyqqi as $ogiyyuwciysokiuc) { if (!isset($ogiyyuwciysokiuc["\156\x6f\x73\143\162\x69\x70\164"])) { goto mwgaaiaswusakkaq; } $cuiaccicqeqwyyuo = $ogiyyuwciysokiuc["\x6e\x6f\x73\x63\162\x69\160\164"]; unset($ogiyyuwciysokiuc["\x6e\157\163\143\162\151\160\x74"]); $aqykuigiuwmmcieu .= $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->yoamscgeuweiugse($cuiaccicqeqwyyuo); mwgaaiaswusakkaq: $aqykuigiuwmmcieu .= $this->oqsucquusggqcoao($ogiyyuwciysokiuc); wamgcqkaieummksu: } kcwyeqmysgqkoqcm: return $aqykuigiuwmmcieu; } public function ssgykuuuckakygwg($uykgysuswksgmwqy) : array { $aiwcguiecocoyqqi = $this->wecsewaimwquoqkk(); if (!$aiwcguiecocoyqqi) { goto ugowqoisymsioeye; } $uykgysuswksgmwqy[] = "\x31\x30\63\40\x45\141\162\154\x79\40\x48\151\156\164\163"; $uykgysuswksgmwqy["\114\x69\x6e\153"] = $aiwcguiecocoyqqi; ugowqoisymsioeye: return $uykgysuswksgmwqy; } private function gqiiiaisiqmqomww(array $siquossayskcwkea) : string { $sogksuscggsicmac = ''; $siquossayskcwkea = $this->iwwioqumuewcikoq($siquossayskcwkea); if (!$siquossayskcwkea) { goto csskguekqcwcmocu; } if (isset($siquossayskcwkea["\x72\x65\154"])) { goto gooqkmwgsmseuiwq; } $siquossayskcwkea["\162\x65\154"] = Constants::iwksyuwwwkucsisq; gooqkmwgsmseuiwq: $qookweymeqawmcwo = ''; foreach ($siquossayskcwkea as $ymkomoccmymcoiea => $eqgoocgaqwqcimie) { if (!(!is_scalar($eqgoocgaqwqcimie) || !is_numeric($ymkomoccmymcoiea) && !in_array($ymkomoccmymcoiea, ["\162\145\x6c", "\141\x73", "\143\x72\157\163\x73\157\x72\151\147\x69\x6e", "\164\171\160\145", "\156\157\160\165\x73\x68"], true))) { goto ysusaysykymegguk; } goto emgssiqceagusgyg; ysusaysykymegguk: if (!is_string($eqgoocgaqwqcimie)) { goto yskswskmsgoouyco; } $qookweymeqawmcwo .= "\40{$ymkomoccmymcoiea}\75\42{$eqgoocgaqwqcimie}\x22\x3b"; goto oaciskoioaecgwee; yskswskmsgoouyco: $qookweymeqawmcwo .= "\40{$eqgoocgaqwqcimie}\73"; oaciskoioaecgwee: emgssiqceagusgyg: } oeosugomyqyekmuq: $qookweymeqawmcwo = trim($qookweymeqawmcwo); $qookweymeqawmcwo = rtrim($qookweymeqawmcwo, "\73"); $sogksuscggsicmac = sprintf("\x3c\x25\163\76\73\40\45\x73", esc_url_raw($siquossayskcwkea["\150\162\x65\x66"]), $qookweymeqawmcwo); csskguekqcwcmocu: return $sogksuscggsicmac; } public function oqsucquusggqcoao(array $siquossayskcwkea) : string { $sogksuscggsicmac = ''; $siquossayskcwkea = $this->iwwioqumuewcikoq($siquossayskcwkea); if (!$siquossayskcwkea) { goto yuoyeeuqqaockyqw; } $wwgucssaecqekuek = []; foreach ($siquossayskcwkea as $ymkomoccmymcoiea => $eqgoocgaqwqcimie) { if (!(!is_scalar($eqgoocgaqwqcimie) || !is_numeric($ymkomoccmymcoiea) && !in_array($ymkomoccmymcoiea, ["\x72\x65\154", "\150\162\145\x66", "\141\x73", "\x63\x72\x6f\x73\x73\157\x72\151\x67\151\x6e", "\164\x79\160\145", "\157\x6e\x6c\x6f\141\x64"], true))) { goto ugcyukgoaiiysymc; } goto wkwkeicwosmkcygc; ugcyukgoaiiysymc: $wwgucssaecqekuek[$ymkomoccmymcoiea] = $eqgoocgaqwqcimie; wkwkeicwosmkcygc: } mmusoowesqcmuqew: $sogksuscggsicmac = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->qgsekwygcgawekeq("\x6c\x69\x6e\153", $wwgucssaecqekuek); yuoyeeuqqaockyqw: return $sogksuscggsicmac; } public function iwwioqumuewcikoq(array $siquossayskcwkea) : array { if (isset($siquossayskcwkea["\x68\162\145\x66"])) { goto kygcymkakucoeock; } return []; kygcymkakucoeock: if (!isset($siquossayskcwkea[Constants::caoiqkqugiqqqimm])) { goto qkiqquymecyoouki; } $siquossayskcwkea[Constants::caoiqkqugiqqqimm] = Constants::iwksyuwwwkucsisq; qkiqquymecyoouki: return $siquossayskcwkea; } }
