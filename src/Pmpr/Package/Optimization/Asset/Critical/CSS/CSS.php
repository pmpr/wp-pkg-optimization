<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c6df5c89942             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Asset\Critical\CSS; use Exception; use Pmpr\Common\Foundation\DOMCrawler; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class CSS extends Common { const qmmkckgoqyucomiy = "\x6f\x70\164\x73\x74\171\x6c\145\163"; const qmyicsgiomwgeswc = "\157\160\x74\x69\x6d\151\172\141\164\x69\157\x6e\137\143\162\151\164\x69\x63\x61\154\137\x63\x73\x73\137\150\x61\156\x64\154\145"; const eauaaousugoecaui = "\x6f\x70\x74\x69\x6d\151\172\x61\x74\x69\157\x6e\137\x63\162\x69\164\151\x63\141\154\x5f\x63\163\x73\137\x67\145\156\145\162\141\164\x69\157\156\x5f"; const yagyiemiycosowge = self::eauaaousugoecaui . "\x70\x72\157\143\x65\x73\x73\137\x72\165\156\x6e\x69\156\x67"; const eukyiewmgskwgiiu = self::eauaaousugoecaui . "\x64\157\156\145"; protected bool $optimized = false; public function __construct() { parent::__construct(); $this->iemaakgqgqosiecm(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x6f\160\164\137\x62\165\146\146\145\162\x5f\x70\x72\x6f\x63\145\x73\x73"), [$this, "\145\x78\x74\x72\x61\143\164"], 20)->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x6f\160\x74\x5f\141\154\x6c\x6f\167\x5f\144\145\154\141\171\x5f\163\164\171\x6c\x65\163"), [$this, "\x71\x63\x63\155\x77\151\x69\157\153\161\153\165\151\x65\153\x6f"]); parent::kgquecmsgcouyaya(); } public function iemaakgqgqosiecm() { } public function qccmwiiokqkuieko($cuakwceieagskoaa) { if (!$this->qgmkawgcegiogqwy()) { goto ysiwoiqiaosqoikm; } $cuakwceieagskoaa = true; ysiwoiqiaosqoikm: return $cuakwceieagskoaa; } public function extract($moooemyaqewumiay) { if ($this->ocysssyiuaueqiei("\154\145\166\x65\x6c\55\62")) { goto saycoceqywiekqsi; } $this->uiagwusgwcassqua("\x63\x61\x6e\40\x6e\157\164\40\x65\x78\164\x72\141\143\x74\x20\x63\162\151\164\151\143\x61\154\40\143\163\163"); goto sqaowueaequoigsa; saycoceqywiekqsi: $yqimccamkgmmuuyg = API::symcgieuakksimmu(); $migiiksoiymissge = ManipulateServer::ekcymmyqoceukosc(); try { $ogiyyuwciysokiuc = ManipulateServer::get("\160\x72\x65\154\x6f\x61\144", 0); if ($aokagokqyuysuksm = $yqimccamkgmmuuyg->extract($migiiksoiymissge, $ogiyyuwciysokiuc, $iswcokucwmiosiaq)) { goto gskaqcgccswmuqsy; } $this->yqkwsouguwgoywcw($iswcokucwmiosiaq); goto uccuykggugcmiyam; gskaqcgccswmuqsy: $oyiokksswogocuwm = 20; sleep(2); gokwmwmaumiwscua: if (!($oyiokksswogocuwm > 0)) { goto eieiwacwqkgsewai; } $sogksuscggsicmac = $yqimccamkgmmuuyg->gioggcykgoikcwiy($aokagokqyuysuksm, $iswcokucwmiosiaq); if ($iswcokucwmiosiaq) { goto ykuycowuguumseuu; } $iwskiosiswyoiesg = ManipulateArray::get($sogksuscggsicmac, "\163\x74\141\x74\145"); switch ($iwskiosiswyoiesg) { case "\x77\x61\151\x74": case "\x61\143\164\x69\166\x65": sleep(2); goto eauiumeeyckucuyc; case "\146\141\x69\x6c\x65\144": $aggamyqqskiqkcea = ManipulateArray::get($sogksuscggsicmac, "\162\145\141\163\157\156", ''); $this->yqkwsouguwgoywcw(sprintf("\x63\x72\151\x74\151\x63\141\x6c\40\x63\x73\163\x20\x65\x78\164\x72\141\143\x74\151\156\x67\x20\146\141\151\154\x65\144\72\40\x25\x73", $aggamyqqskiqkcea)); goto eauiumeeyckucuyc; case "\143\157\x6d\x70\x6c\x65\x74\x65\x64": $caokcyqaukiegscs = ManipulateArray::qamwegcyimgcqksw($sogksuscggsicmac, self::uiwqcumqkgikqyue); if (!$caokcyqaukiegscs) { goto esuuweysgwuwcuue; } $caokcyqaukiegscs = ManipulateHTML::uuccukgasskgimsq("\163\x74\x79\x6c\145", ["\151\144" => self::qmmkckgoqyucomiy], $caokcyqaukiegscs); $kqywgoqsmuswammk = DOMCrawler::qqimkcgcmeewwwei($moooemyaqewumiay, "\x68\145\141\144\40\76\x20\163\164\171\x6c\145\54\x20\x68\x65\x61\x64\40\76\x20\x6c\x69\x6e\153"); $moooemyaqewumiay = str_replace($kqywgoqsmuswammk, "{$caokcyqaukiegscs}{$kqywgoqsmuswammk}", $moooemyaqewumiay); esuuweysgwuwcuue: $oyiokksswogocuwm = 0; goto eauiumeeyckucuyc; } gigiwwouakeekoim: eauiumeeyckucuyc: goto qugsgsscqyikugyc; ykuycowuguumseuu: $this->yqkwsouguwgoywcw($iswcokucwmiosiaq); qugsgsscqyikugyc: $oyiokksswogocuwm--; goto gokwmwmaumiwscua; eieiwacwqkgsewai: $this->optimized = true; uccuykggugcmiyam: } catch (Exception $wgaoewqkwgomoaai) { $this->saqqeqmcyyoeqici($this->kyacickkomkioeyu($wgaoewqkwgomoaai)); Manipulate::wwckmeoskuagomki("\117\x50\124\x49\115\x49\x5a\x41\x54\111\117\116\x5f\104\117\x4e\x54\x5f\103\x41\x43\110\x45\137\x50\x41\x47\x45", 1); } sqaowueaequoigsa: return $moooemyaqewumiay; } public function qgmkawgcegiogqwy($kaogqwcskswkymgo = true) : bool { return $kaogqwcskswkymgo && $this->optimized; } }
