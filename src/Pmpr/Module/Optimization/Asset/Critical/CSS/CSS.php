<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6240a41b79ab5             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Asset\Critical\CSS; use Exception; use Pmpr\Common\Foundation\DOMCrawler; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class CSS extends Common { const qmmkckgoqyucomiy = "\157\x70\164\x73\x74\x79\x6c\x65\163"; const qmyicsgiomwgeswc = "\x6f\x70\164\151\x6d\x69\172\141\164\151\x6f\156\x5f\x63\162\151\x74\151\x63\x61\154\137\143\x73\163\137\x68\141\156\x64\154\x65"; const eauaaousugoecaui = "\157\x70\x74\x69\x6d\151\x7a\x61\164\151\157\156\137\143\162\x69\x74\x69\x63\x61\154\x5f\143\x73\x73\x5f\147\x65\156\145\x72\141\164\151\157\156\137"; const yagyiemiycosowge = self::eauaaousugoecaui . "\160\x72\x6f\x63\145\x73\x73\x5f\162\x75\156\x6e\x69\x6e\147"; const eukyiewmgskwgiiu = self::eauaaousugoecaui . "\144\x6f\x6e\145"; protected bool $optimized = false; public function __construct() { parent::__construct(); $this->iemaakgqgqosiecm(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\157\x70\x74\137\142\x75\x66\x66\145\x72\x5f\160\162\x6f\x63\145\x73\163"), [$this, "\145\x78\164\x72\141\x63\x74"], 20)->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x6f\160\164\x5f\x61\x6c\154\157\x77\137\x64\145\x6c\x61\x79\137\x73\164\x79\x6c\145\x73"), [$this, "\161\x63\x63\155\x77\151\151\157\x6b\x71\x6b\x75\x69\x65\x6b\157"]); parent::kgquecmsgcouyaya(); } public function iemaakgqgqosiecm() { } public function qccmwiiokqkuieko($cuakwceieagskoaa) { if (!$this->qgmkawgcegiogqwy()) { goto eyiamcekkgkiawqy; } $cuakwceieagskoaa = true; eyiamcekkgkiawqy: return $cuakwceieagskoaa; } public function extract($moooemyaqewumiay) { if (!$this->ocysssyiuaueqiei("\154\x65\x76\145\x6c\x2d\62")) { goto oouoqimaaqcmccay; } $yqimccamkgmmuuyg = API::symcgieuakksimmu(); $migiiksoiymissge = ManipulateServer::ekcymmyqoceukosc(); try { $ogiyyuwciysokiuc = ManipulateServer::get("\160\162\x65\154\x6f\x61\144", 0); if ($aokagokqyuysuksm = $yqimccamkgmmuuyg->extract($migiiksoiymissge, $ogiyyuwciysokiuc, $iswcokucwmiosiaq)) { goto siqagquguiemuoku; } $this->yqkwsouguwgoywcw($iswcokucwmiosiaq); goto ycakugokkqkuqyiu; siqagquguiemuoku: $oyiokksswogocuwm = 20; sleep(2); kooskuwkuayiuose: if (!($oyiokksswogocuwm > 0)) { goto twkmiuomimomscew; } $sogksuscggsicmac = $yqimccamkgmmuuyg->gioggcykgoikcwiy($aokagokqyuysuksm, $iswcokucwmiosiaq); if ($iswcokucwmiosiaq) { goto ieumumsgyguceusy; } $iwskiosiswyoiesg = ManipulateArray::get($sogksuscggsicmac, "\163\x74\x61\164\145"); switch ($iwskiosiswyoiesg) { case "\x77\x61\x69\x74": case "\x61\143\164\151\x76\145": sleep(2); goto qwcegcuowwgiccos; case "\x66\141\151\154\145\144": $aggamyqqskiqkcea = ManipulateArray::get($sogksuscggsicmac, "\162\145\141\x73\x6f\156", ''); $this->yqkwsouguwgoywcw(sprintf("\x63\x72\x69\164\x69\x63\x61\154\40\143\163\x73\40\145\x78\164\x72\x61\x63\x74\x69\156\x67\40\146\x61\151\154\145\x64\x3a\40\45\x73", $aggamyqqskiqkcea)); goto qwcegcuowwgiccos; case "\143\x6f\x6d\160\154\x65\x74\x65\x64": $caokcyqaukiegscs = ManipulateArray::qamwegcyimgcqksw($sogksuscggsicmac, self::uiwqcumqkgikqyue); if (!$caokcyqaukiegscs) { goto yssscwioiyygssec; } $caokcyqaukiegscs = ManipulateHTML::uuccukgasskgimsq("\x73\164\x79\x6c\145", ["\151\x64" => self::qmmkckgoqyucomiy], $caokcyqaukiegscs); $kqywgoqsmuswammk = DOMCrawler::qqimkcgcmeewwwei($moooemyaqewumiay, "\150\x65\x61\x64\x20\x3e\40\x73\164\171\x6c\x65\54\40\150\x65\141\x64\40\x3e\x20\154\151\x6e\x6b"); $moooemyaqewumiay = str_replace($kqywgoqsmuswammk, "{$caokcyqaukiegscs}{$kqywgoqsmuswammk}", $moooemyaqewumiay); yssscwioiyygssec: $oyiokksswogocuwm = 0; goto qwcegcuowwgiccos; } qcessicwuikwqsis: qwcegcuowwgiccos: goto coywmiyqgsweuiic; ieumumsgyguceusy: $this->yqkwsouguwgoywcw($iswcokucwmiosiaq); coywmiyqgsweuiic: $oyiokksswogocuwm--; goto kooskuwkuayiuose; twkmiuomimomscew: $this->optimized = true; ycakugokkqkuqyiu: } catch (Exception $wgaoewqkwgomoaai) { $this->saqqeqmcyyoeqici($this->kyacickkomkioeyu($wgaoewqkwgomoaai)); Manipulate::wwckmeoskuagomki("\x4f\x50\124\111\x4d\111\x5a\101\x54\111\x4f\116\137\104\117\116\x54\137\103\x41\x43\110\x45\137\120\x41\107\105", 1); } oouoqimaaqcmccay: return $moooemyaqewumiay; } public function qgmkawgcegiogqwy($kaogqwcskswkymgo = true) : bool { return $kaogqwcskswkymgo && $this->optimized; } }
