<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c1fcad85629             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Asset\Critical\CSS; use Exception; use Pmpr\Common\Foundation\DOMCrawler; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class CSS extends Common { const STYLE_TAG_ID = "\157\x70\x74\x73\164\x79\154\145\163"; const CRITICAL_CSS_HANDLE = "\157\x70\x74\x69\x6d\151\172\x61\x74\x69\157\x6e\x5f\143\162\x69\x74\151\x63\141\154\x5f\x63\163\x73\x5f\150\141\x6e\x64\154\x65"; const CRITICAL_CSS_GENERATION_ = "\x6f\x70\x74\x69\155\x69\172\141\x74\x69\x6f\156\x5f\143\162\x69\164\151\143\141\x6c\x5f\143\163\x73\x5f\x67\145\156\x65\x72\141\164\x69\x6f\156\137"; const RUNNING_PROCESS_TRANSITION = self::CRITICAL_CSS_GENERATION_ . "\160\162\x6f\x63\x65\x73\163\137\x72\165\x6e\156\151\x6e\147"; const CRITICAL_CSS_GENERATION_DONE = self::CRITICAL_CSS_GENERATION_ . "\x64\x6f\156\145"; protected bool $optimized = false; public function __construct() { parent::__construct(); $this->iemaakgqgqosiecm(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x6f\160\164\137\142\165\x66\x66\145\x72\x5f\160\162\x6f\x63\x65\163\x73"), [$this, "\x65\x78\164\x72\141\143\x74"], 20)->cecaguuoecmccuse($this->ygyygikyocoymgaw("\157\160\x74\137\141\x6c\154\x6f\167\x5f\x64\x65\154\x61\x79\x5f\x73\164\x79\154\x65\163"), [$this, "\161\x63\143\155\x77\151\x69\157\x6b\161\x6b\x75\151\145\153\x6f"]); parent::kgquecmsgcouyaya(); } public function iemaakgqgqosiecm() { } public function qccmwiiokqkuieko($cuakwceieagskoaa) { if (!$this->qgmkawgcegiogqwy()) { goto cycasoiysmksuwqk; } $cuakwceieagskoaa = true; cycasoiysmksuwqk: return $cuakwceieagskoaa; } public function extract($moooemyaqewumiay) { if ($this->ocysssyiuaueqiei("\154\x65\166\145\x6c\55\x32")) { goto kmwwqgiacsoksgcy; } $this->uiagwusgwcassqua("\143\141\156\40\156\x6f\x74\x20\x65\x78\x74\162\x61\143\164\x20\x63\x72\x69\x74\x69\x63\x61\154\40\143\x73\x73"); goto akieeaeqiwugimie; kmwwqgiacsoksgcy: $yqimccamkgmmuuyg = API::symcgieuakksimmu(); $migiiksoiymissge = ManipulateServer::ekcymmyqoceukosc(); try { $ogiyyuwciysokiuc = ManipulateServer::get("\160\162\145\154\157\x61\x64", 0); if ($aokagokqyuysuksm = $yqimccamkgmmuuyg->extract($migiiksoiymissge, $ogiyyuwciysokiuc, $iswcokucwmiosiaq)) { goto seaiwkkgyyegiyug; } $this->yqkwsouguwgoywcw($iswcokucwmiosiaq); goto uauuoyigkmqoasaq; seaiwkkgyyegiyug: $oyiokksswogocuwm = 20; sleep(2); yicaqocukqoauqgc: if (!($oyiokksswogocuwm > 0)) { goto muimagegskoisckc; } $sogksuscggsicmac = $yqimccamkgmmuuyg->gioggcykgoikcwiy($aokagokqyuysuksm, $iswcokucwmiosiaq); if ($iswcokucwmiosiaq) { goto mmesoisgqucowwms; } $iwskiosiswyoiesg = ManipulateArray::get($sogksuscggsicmac, "\163\164\141\164\x65"); switch ($iwskiosiswyoiesg) { case "\167\141\151\164": case "\141\143\x74\x69\x76\x65": sleep(2); goto kmcygqkmwcgwamkw; case "\146\x61\151\154\x65\144": $aggamyqqskiqkcea = ManipulateArray::get($sogksuscggsicmac, "\162\x65\x61\x73\x6f\x6e", ''); $this->yqkwsouguwgoywcw(sprintf("\143\162\151\164\x69\143\141\x6c\x20\143\163\163\40\x65\170\164\x72\x61\143\x74\151\x6e\147\40\x66\141\x69\x6c\x65\144\72\x20\x25\163", $aggamyqqskiqkcea)); goto kmcygqkmwcgwamkw; case "\143\157\155\160\154\x65\164\x65\144": $caokcyqaukiegscs = ManipulateArray::qamwegcyimgcqksw($sogksuscggsicmac, self::uiwqcumqkgikqyue); if (!$caokcyqaukiegscs) { goto sueeqeioeiwkscao; } $caokcyqaukiegscs = ManipulateHTML::uuccukgasskgimsq("\x73\x74\171\x6c\x65", ["\151\144" => self::STYLE_TAG_ID], $caokcyqaukiegscs); $kqywgoqsmuswammk = DOMCrawler::qqimkcgcmeewwwei($moooemyaqewumiay, "\150\x65\141\x64\x20\x3e\40\163\x74\171\154\x65\54\40\x68\145\x61\144\x20\76\x20\154\151\156\x6b"); $moooemyaqewumiay = str_replace($kqywgoqsmuswammk, "{$caokcyqaukiegscs}{$kqywgoqsmuswammk}", $moooemyaqewumiay); sueeqeioeiwkscao: $oyiokksswogocuwm = 0; goto kmcygqkmwcgwamkw; } gysmigyakgaakeoy: kmcygqkmwcgwamkw: goto uieuouugckwokske; mmesoisgqucowwms: $this->yqkwsouguwgoywcw($iswcokucwmiosiaq); uieuouugckwokske: $oyiokksswogocuwm--; goto yicaqocukqoauqgc; muimagegskoisckc: $this->optimized = true; uauuoyigkmqoasaq: } catch (Exception $wgaoewqkwgomoaai) { $this->saqqeqmcyyoeqici($this->kyacickkomkioeyu($wgaoewqkwgomoaai)); Manipulate::wwckmeoskuagomki("\x4f\x50\x54\111\x4d\x49\132\x41\x54\111\117\x4e\x5f\x44\117\x4e\124\x5f\103\x41\103\x48\x45\137\120\101\x47\x45", 1); } akieeaeqiwugimie: return $moooemyaqewumiay; } public function qgmkawgcegiogqwy($kaogqwcskswkymgo = true) : bool { return $kaogqwcskswkymgo && $this->optimized; } }
