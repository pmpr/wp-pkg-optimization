<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c70dffa5ed1             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Asset\Critical\CSS; use Exception; use Pmpr\Common\Foundation\DOMCrawler; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class CSS extends Common { const qmmkckgoqyucomiy = "\x6f\x70\164\163\x74\x79\x6c\145\163"; const qmyicsgiomwgeswc = "\157\x70\x74\151\155\151\172\141\x74\x69\x6f\x6e\137\x63\x72\x69\164\151\x63\141\154\137\143\x73\x73\x5f\150\141\156\x64\x6c\x65"; const eauaaousugoecaui = "\x6f\x70\164\x69\155\x69\172\141\x74\151\x6f\x6e\137\143\x72\x69\x74\151\x63\141\x6c\137\143\163\x73\x5f\x67\x65\x6e\x65\x72\141\x74\x69\157\x6e\x5f"; const yagyiemiycosowge = self::eauaaousugoecaui . "\x70\162\x6f\x63\145\163\x73\137\162\x75\156\x6e\151\x6e\147"; const eukyiewmgskwgiiu = self::eauaaousugoecaui . "\x64\x6f\x6e\x65"; protected bool $optimized = false; public function __construct() { parent::__construct(); $this->iemaakgqgqosiecm(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x6f\160\164\x5f\x62\165\x66\146\145\162\x5f\160\x72\x6f\x63\x65\163\163"), [$this, "\x65\170\164\x72\141\143\164"], 20)->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x6f\x70\164\x5f\141\154\154\157\x77\x5f\x64\x65\154\x61\x79\137\x73\x74\x79\x6c\145\163"), [$this, "\x71\x63\x63\x6d\x77\151\151\157\153\161\x6b\x75\x69\x65\153\x6f"]); parent::kgquecmsgcouyaya(); } public function iemaakgqgqosiecm() { } public function qccmwiiokqkuieko($cuakwceieagskoaa) { if (!$this->qgmkawgcegiogqwy()) { goto eauiumeeyckucuyc; } $cuakwceieagskoaa = true; eauiumeeyckucuyc: return $cuakwceieagskoaa; } public function extract($moooemyaqewumiay) { if (!$this->ocysssyiuaueqiei("\154\145\x76\145\154\55\x32")) { goto waycokyiesmqgqcg; } $yqimccamkgmmuuyg = API::symcgieuakksimmu(); $migiiksoiymissge = ManipulateServer::ekcymmyqoceukosc(); try { $ogiyyuwciysokiuc = ManipulateServer::get("\x70\162\145\154\x6f\x61\x64", 0); if ($aokagokqyuysuksm = $yqimccamkgmmuuyg->extract($migiiksoiymissge, $ogiyyuwciysokiuc, $iswcokucwmiosiaq)) { goto sqaowueaequoigsa; } $this->yqkwsouguwgoywcw($iswcokucwmiosiaq); goto eqmauwqqowsiwaue; sqaowueaequoigsa: $oyiokksswogocuwm = 20; sleep(2); esuuweysgwuwcuue: if (!($oyiokksswogocuwm > 0)) { goto gigiwwouakeekoim; } $sogksuscggsicmac = $yqimccamkgmmuuyg->gioggcykgoikcwiy($aokagokqyuysuksm, $iswcokucwmiosiaq); if ($iswcokucwmiosiaq) { goto uccuykggugcmiyam; } $iwskiosiswyoiesg = ManipulateArray::get($sogksuscggsicmac, "\x73\164\141\164\145"); switch ($iwskiosiswyoiesg) { case "\167\x61\151\164": case "\141\x63\164\151\166\x65": sleep(2); goto ykuycowuguumseuu; case "\146\x61\x69\x6c\x65\144": $aggamyqqskiqkcea = ManipulateArray::get($sogksuscggsicmac, "\162\x65\x61\163\x6f\156", ''); $this->yqkwsouguwgoywcw(sprintf("\143\x72\x69\x74\x69\143\x61\x6c\x20\x63\x73\163\x20\145\x78\164\x72\x61\143\164\x69\x6e\x67\x20\x66\x61\x69\x6c\x65\144\x3a\x20\45\x73", $aggamyqqskiqkcea)); goto ykuycowuguumseuu; case "\143\x6f\x6d\x70\x6c\x65\164\145\x64": $caokcyqaukiegscs = ManipulateArray::qamwegcyimgcqksw($sogksuscggsicmac, self::uiwqcumqkgikqyue); if (!$caokcyqaukiegscs) { goto gskaqcgccswmuqsy; } $caokcyqaukiegscs = ManipulateHTML::uuccukgasskgimsq("\x73\x74\x79\154\145", ["\x69\144" => self::qmmkckgoqyucomiy], $caokcyqaukiegscs); $kqywgoqsmuswammk = DOMCrawler::qqimkcgcmeewwwei($moooemyaqewumiay, "\x68\145\141\x64\40\76\x20\163\164\171\154\x65\54\40\x68\x65\x61\144\x20\x3e\x20\x6c\x69\x6e\153"); $moooemyaqewumiay = str_replace($kqywgoqsmuswammk, "{$caokcyqaukiegscs}{$kqywgoqsmuswammk}", $moooemyaqewumiay); gskaqcgccswmuqsy: $oyiokksswogocuwm = 0; goto ykuycowuguumseuu; } qugsgsscqyikugyc: ykuycowuguumseuu: goto saycoceqywiekqsi; uccuykggugcmiyam: $this->yqkwsouguwgoywcw($iswcokucwmiosiaq); saycoceqywiekqsi: $oyiokksswogocuwm--; goto esuuweysgwuwcuue; gigiwwouakeekoim: $this->optimized = true; eqmauwqqowsiwaue: } catch (Exception $wgaoewqkwgomoaai) { $this->saqqeqmcyyoeqici($this->kyacickkomkioeyu($wgaoewqkwgomoaai)); Manipulate::wwckmeoskuagomki("\117\x50\x54\111\115\x49\132\x41\x54\111\117\x4e\137\x44\x4f\x4e\x54\x5f\103\101\x43\110\105\137\x50\x41\x47\x45", 1); } waycokyiesmqgqcg: return $moooemyaqewumiay; } public function qgmkawgcegiogqwy($kaogqwcskswkymgo = true) : bool { return $kaogqwcskswkymgo && $this->optimized; } }
