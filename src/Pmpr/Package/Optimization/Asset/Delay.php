<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61eec5407a60a             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Asset; use DOMElement; use Pmpr\Common\Foundation\DOMCrawler; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class Delay extends Common { protected array $priorities = []; public function uqaauswqgcmuosqe() : array { return $this->priorities; } public function yywskysiycwkwsgw($eueuqacmukymcyya) { return ManipulateArray::get($this->uqaauswqgcmuosqe(), $eueuqacmukymcyya); } public function kskcemmeowmwkoqa($eueuqacmukymcyya, $sqqewmoeaekuyyas) : self { $this->priorities[$eueuqacmukymcyya] = $sqqewmoeaekuyyas; return $this; } public function wigskegsqequoeks() { $cwowmoyqeosugowu = $this->weysguygiseoukqw(Setting::cskegoigeecaayoi); $cyoauokciycesgqw = $this->weysguygiseoukqw(Setting::okycmqykyamqaauy); if (!($cyoauokciycesgqw || $cwowmoyqeosugowu)) { goto sukskmcwsoysiuqu; } $this->qcsmikeggeemccuu("\x69\x6e\151\x74", [$this, "\x65\156\161\165\145\x75\x65"])->cecaguuoecmccuse($this->ygyygikyocoymgaw("\157\160\164\137\x62\x75\146\146\x65\x72\137\x70\x72\x6f\143\x65\163\163"), [$this, "\167\151\x71\x67\153\x63\155\x71\153\167\157\165\151\167\x6d\x75"], 40); sukskmcwsoysiuqu: parent::wigskegsqequoeks(); } public function enqueue() { if (!$this->ocysssyiuaueqiei()) { goto igymseewwyiocoug; } $eygsasmqycagyayw = $this->miocmcoykayoyyau(); $eygsasmqycagyayw->oeoquuwkoywiuesy($eygsasmqycagyayw->owygwqwawqoiusis("\144\145\x6c\141\171\x2d\141\x73\x73\145\x74", $eygsasmqycagyayw->get("\144\145\154\x61\171\56\x6a\163"))->yiuoscqaekcgiyuy("\x63\x6c\x61\163\163", "\x66\x6f\x72\143\x65\x2d\154\x6f\x61\x64")); igymseewwyiocoug: } public function wiqgkcmqkwouiwmu($moooemyaqewumiay) { if (!($this->ocysssyiuaueqiei() && !$this->eeegakaauwcyugqy())) { goto kooskuwkuayiuose; } $sqqewmoeaekuyyas = 0; $yuumukkaswwoywya = "\163\x63\x72\151\160\x74\x5b\x73\162\x63\x5d\x3a\x6e\x6f\x74\50\56\146\157\162\x63\x65\55\x6c\x6f\141\144\x29"; if (!$this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\x70\164\x5f\141\x6c\x6c\157\x77\x5f\144\145\154\141\171\x5f\163\164\x79\154\145\163"), false, $moooemyaqewumiay)) { goto mqccmesakuemceqi; } $yuumukkaswwoywya .= "\x2c\40\x6c\151\156\153\133\150\162\x65\x66\135\x5b\162\145\154\75\x73\x74\x79\154\145\163\150\145\x65\x74\x5d\72\x6e\157\x74\x28\56\146\157\162\x63\x65\x2d\x6c\157\141\x64\51"; mqccmesakuemceqi: if (!DOMCrawler::umuecysoywoumgwo($moooemyaqewumiay, $yuumukkaswwoywya)) { goto twkmiuomimomscew; } $moooemyaqewumiay = DOMCrawler::qaqiuweqoukkgqsk($moooemyaqewumiay, $yuumukkaswwoywya, function (DOMElement $ymyisaeksssueeik) use(&$sqqewmoeaekuyyas) { $wisgiwskwawciiee = $ymyisaeksssueeik->nodeName == "\x6c\151\x6e\x6b" ? "\150\x72\x65\x66" : "\x73\x72\143"; if (!DOMCrawler::owgokkumqicyuyiy($ymyisaeksssueeik, $wisgiwskwawciiee)) { goto eyiamcekkgkiawqy; } $eqgoocgaqwqcimie = DOMCrawler::guaqqcyuaeucmgoy($ymyisaeksssueeik, $wisgiwskwawciiee); DOMCrawler::cqieekgkogamcsqk($ymyisaeksssueeik, "\144\141\x74\x61\x2d\163\157\165\162\143\145", $this->ukacwyckseuqsqgc($eqgoocgaqwqcimie)); DOMCrawler::cqieekgkogamcsqk($ymyisaeksssueeik, "\x64\x61\x74\141\55\160\162\151\157\x72\151\x74\171", $sqqewmoeaekuyyas); DOMCrawler::qeeokkmmskuyoecg($ymyisaeksssueeik, $wisgiwskwawciiee); $sqqewmoeaekuyyas++; eyiamcekkgkiawqy: return $ymyisaeksssueeik; }, false, true); twkmiuomimomscew: kooskuwkuayiuose: return $moooemyaqewumiay; } }
