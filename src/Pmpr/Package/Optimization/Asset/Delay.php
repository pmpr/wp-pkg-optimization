<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c6e9e36d31a             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Asset; use DOMElement; use Pmpr\Common\Foundation\DOMCrawler; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class Delay extends Common { protected array $priorities = []; public function uqaauswqgcmuosqe() : array { return $this->priorities; } public function yywskysiycwkwsgw($eueuqacmukymcyya) { return ManipulateArray::get($this->uqaauswqgcmuosqe(), $eueuqacmukymcyya); } public function kskcemmeowmwkoqa($eueuqacmukymcyya, $sqqewmoeaekuyyas) : self { $this->priorities[$eueuqacmukymcyya] = $sqqewmoeaekuyyas; return $this; } public function wigskegsqequoeks() { $cwowmoyqeosugowu = $this->weysguygiseoukqw(Setting::cskegoigeecaayoi); $cyoauokciycesgqw = $this->weysguygiseoukqw(Setting::okycmqykyamqaauy); if (!($cyoauokciycesgqw || $cwowmoyqeosugowu)) { goto icawmkaswkmwicsa; } $this->qcsmikeggeemccuu("\151\156\151\x74", [$this, "\x65\156\161\165\145\165\145"])->cecaguuoecmccuse($this->ygyygikyocoymgaw("\157\160\164\x5f\142\x75\x66\x66\x65\x72\x5f\x70\162\x6f\x63\145\x73\163"), [$this, "\x77\x69\x71\147\x6b\143\155\x71\x6b\167\157\165\x69\167\x6d\165"], 40); icawmkaswkmwicsa: parent::wigskegsqequoeks(); } public function enqueue() { if (!$this->ocysssyiuaueqiei()) { goto imsgusweocmiyygi; } $eygsasmqycagyayw = $this->miocmcoykayoyyau(); $eygsasmqycagyayw->oeoquuwkoywiuesy($eygsasmqycagyayw->owygwqwawqoiusis("\x64\x65\x6c\141\x79\55\x61\163\163\145\164", $eygsasmqycagyayw->get("\x64\x65\x6c\x61\x79\x2e\152\x73"))->yiuoscqaekcgiyuy("\143\x6c\x61\163\x73", "\146\x6f\162\x63\145\x2d\x6c\x6f\141\x64")); imsgusweocmiyygi: } public function wiqgkcmqkwouiwmu($moooemyaqewumiay) { if (!($this->ocysssyiuaueqiei() && !$this->eeegakaauwcyugqy())) { goto weuueokkumksgaeo; } $sqqewmoeaekuyyas = 0; $yuumukkaswwoywya = "\x73\143\162\x69\x70\x74\x5b\163\x72\x63\x5d\x3a\x6e\x6f\164\50\56\146\x6f\162\143\x65\55\x6c\x6f\x61\x64\51"; if (!$this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\160\x74\x5f\x61\154\154\x6f\x77\137\144\x65\154\141\171\137\x73\x74\x79\154\145\x73"), false, $moooemyaqewumiay)) { goto qwueqigcisoogaec; } $yuumukkaswwoywya .= "\54\x20\x6c\151\156\153\133\x68\162\145\x66\135\x5b\x72\145\154\75\x73\164\171\154\145\163\x68\145\x65\164\x5d\72\x6e\157\x74\x28\x2e\x66\157\162\143\x65\55\154\x6f\x61\x64\51"; qwueqigcisoogaec: if (!DOMCrawler::umuecysoywoumgwo($moooemyaqewumiay, $yuumukkaswwoywya)) { goto csoeisssoumqqeoa; } $moooemyaqewumiay = DOMCrawler::qaqiuweqoukkgqsk($moooemyaqewumiay, $yuumukkaswwoywya, function (DOMElement $ymyisaeksssueeik) use(&$sqqewmoeaekuyyas) { $wisgiwskwawciiee = $ymyisaeksssueeik->nodeName == "\154\151\x6e\153" ? "\150\162\x65\x66" : "\x73\162\143"; if (!DOMCrawler::owgokkumqicyuyiy($ymyisaeksssueeik, $wisgiwskwawciiee)) { goto kmeekqukcecuscye; } $eqgoocgaqwqcimie = DOMCrawler::guaqqcyuaeucmgoy($ymyisaeksssueeik, $wisgiwskwawciiee); DOMCrawler::cqieekgkogamcsqk($ymyisaeksssueeik, "\x64\141\x74\141\x2d\x73\x6f\165\x72\143\x65", $this->ukacwyckseuqsqgc($eqgoocgaqwqcimie)); DOMCrawler::cqieekgkogamcsqk($ymyisaeksssueeik, "\x64\141\164\141\x2d\160\162\151\x6f\x72\x69\x74\171", $sqqewmoeaekuyyas); DOMCrawler::qeeokkmmskuyoecg($ymyisaeksssueeik, $wisgiwskwawciiee); $sqqewmoeaekuyyas++; kmeekqukcecuscye: return $ymyisaeksssueeik; }, false, true); csoeisssoumqqeoa: weuueokkumksgaeo: return $moooemyaqewumiay; } }
