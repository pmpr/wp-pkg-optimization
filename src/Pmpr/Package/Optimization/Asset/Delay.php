<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c623ad3a21f             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Asset; use DOMElement; use Pmpr\Common\Foundation\DOMCrawler; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class Delay extends Common { protected array $priorities = []; public function uqaauswqgcmuosqe() : array { return $this->priorities; } public function yywskysiycwkwsgw($eueuqacmukymcyya) { return ManipulateArray::get($this->uqaauswqgcmuosqe(), $eueuqacmukymcyya); } public function kskcemmeowmwkoqa($eueuqacmukymcyya, $sqqewmoeaekuyyas) : self { $this->priorities[$eueuqacmukymcyya] = $sqqewmoeaekuyyas; return $this; } public function wigskegsqequoeks() { $cwowmoyqeosugowu = $this->weysguygiseoukqw(Setting::cskegoigeecaayoi); $cyoauokciycesgqw = $this->weysguygiseoukqw(Setting::okycmqykyamqaauy); if (!($cyoauokciycesgqw || $cwowmoyqeosugowu)) { goto ysiwoiqiaosqoikm; } $this->qcsmikeggeemccuu("\x69\156\151\164", [$this, "\x65\x6e\161\165\145\165\145"])->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x6f\x70\x74\x5f\142\165\x66\x66\x65\x72\137\x70\x72\x6f\143\x65\x73\x73"), [$this, "\167\151\x71\147\153\143\x6d\x71\153\x77\157\x75\151\x77\x6d\165"], 40); ysiwoiqiaosqoikm: parent::wigskegsqequoeks(); } public function enqueue() { if (!$this->ocysssyiuaueqiei()) { goto eieiwacwqkgsewai; } $eygsasmqycagyayw = $this->miocmcoykayoyyau(); $eygsasmqycagyayw->oeoquuwkoywiuesy($eygsasmqycagyayw->owygwqwawqoiusis("\x64\x65\154\141\x79\55\141\x73\x73\145\164", $eygsasmqycagyayw->get("\144\x65\154\x61\x79\x2e\152\x73"))->yiuoscqaekcgiyuy("\143\154\x61\163\x73", "\x66\157\x72\143\x65\55\x6c\157\x61\144")); eieiwacwqkgsewai: } public function wiqgkcmqkwouiwmu($moooemyaqewumiay) { if (!($this->ocysssyiuaueqiei() && !$this->eeegakaauwcyugqy())) { goto esuuweysgwuwcuue; } $sqqewmoeaekuyyas = 0; $yuumukkaswwoywya = "\163\143\162\x69\160\164\x5b\163\162\143\135\x3a\156\x6f\164\50\x2e\146\x6f\x72\x63\145\x2d\154\157\141\x64\51"; if (!$this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\x70\164\x5f\x61\x6c\x6c\x6f\167\137\x64\x65\154\141\171\x5f\163\164\x79\x6c\145\163"), false, $moooemyaqewumiay)) { goto gokwmwmaumiwscua; } $yuumukkaswwoywya .= "\54\40\x6c\151\x6e\x6b\133\150\162\x65\x66\x5d\x5b\x72\145\x6c\x3d\163\x74\x79\x6c\145\x73\150\145\x65\x74\135\72\x6e\157\164\x28\x2e\146\157\162\x63\145\55\x6c\157\x61\144\51"; gokwmwmaumiwscua: if (!DOMCrawler::umuecysoywoumgwo($moooemyaqewumiay, $yuumukkaswwoywya)) { goto gigiwwouakeekoim; } $moooemyaqewumiay = DOMCrawler::qaqiuweqoukkgqsk($moooemyaqewumiay, $yuumukkaswwoywya, function (DOMElement $ymyisaeksssueeik) use(&$sqqewmoeaekuyyas) { $wisgiwskwawciiee = $ymyisaeksssueeik->nodeName == "\x6c\151\x6e\x6b" ? "\150\x72\x65\x66" : "\x73\162\x63"; if (!DOMCrawler::owgokkumqicyuyiy($ymyisaeksssueeik, $wisgiwskwawciiee)) { goto eauiumeeyckucuyc; } $eqgoocgaqwqcimie = DOMCrawler::guaqqcyuaeucmgoy($ymyisaeksssueeik, $wisgiwskwawciiee); DOMCrawler::cqieekgkogamcsqk($ymyisaeksssueeik, "\144\x61\164\141\55\x73\157\165\162\143\145", $this->ukacwyckseuqsqgc($eqgoocgaqwqcimie)); DOMCrawler::cqieekgkogamcsqk($ymyisaeksssueeik, "\144\x61\x74\141\x2d\x70\x72\x69\157\x72\151\x74\x79", $sqqewmoeaekuyyas); DOMCrawler::qeeokkmmskuyoecg($ymyisaeksssueeik, $wisgiwskwawciiee); $sqqewmoeaekuyyas++; eauiumeeyckucuyc: return $ymyisaeksssueeik; }, false, true); gigiwwouakeekoim: esuuweysgwuwcuue: return $moooemyaqewumiay; } }
