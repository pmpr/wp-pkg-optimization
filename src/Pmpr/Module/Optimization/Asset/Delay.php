<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             631ce1ad2f186             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Asset; use DOMElement; use Pmpr\Common\Foundation\DOMCrawler; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class Delay extends Common { protected array $priorities = []; public function uqaauswqgcmuosqe() : array { return $this->priorities; } public function yywskysiycwkwsgw($eueuqacmukymcyya) { return ManipulateArray::get($this->uqaauswqgcmuosqe(), $eueuqacmukymcyya); } public function kskcemmeowmwkoqa($eueuqacmukymcyya, $sqqewmoeaekuyyas) : self { $this->priorities[$eueuqacmukymcyya] = $sqqewmoeaekuyyas; return $this; } public function wigskegsqequoeks() { $qyqekswyqccmiyce = $this->weysguygiseoukqw(Setting::hoeamwwegymyeeeg); $xawimsyesokgqigw = $this->weysguygiseoukqw(Setting::komosgcgwesseeqo); if (!($xawimsyesokgqigw || $qyqekswyqccmiyce)) { goto isqwwmikecauwyuc; } $this->qcsmikeggeemccuu("\167\160", [$this, "\145\x6e\161\x75\x65\165\x65"])->cecaguuoecmccuse($this->ygyygikyocoymgaw("\157\160\164\x5f\142\x75\x66\146\x65\x72\137\x70\162\157\x63\x65\x73\x73"), [$this, "\x75\155\153\143\x69\143\161\x65\163\153\147\151\147\151\141\x79"], 40); isqwwmikecauwyuc: } public function enqueue() { if (!$this->ocysssyiuaueqiei()) { goto oiiqqgyqmggyiums; } $eygsasmqycagyayw = $this->miocmcoykayoyyau(); $eygsasmqycagyayw->oeoquuwkoywiuesy($eygsasmqycagyayw->owygwqwawqoiusis("\141\x73\171\x6e\x63\x2d\x6c\157\141\x64\x2d\x61\x73\163\145\164")->awagieqcmmwkgwgs($eygsasmqycagyayw->souwykwwmyygqyqi("\x61\163\171\156\x63\154\x6f\141\x64\56\x6a\x73"))); oiiqqgyqmggyiums: } public function umkcicqeskgigiay($moooemyaqewumiay) { if (!$this->ocysssyiuaueqiei()) { goto oymyqcoekqyuiguq; } $sqqewmoeaekuyyas = 0; $yuumukkaswwoywya = "\x73\x63\162\x69\x70\164\133\x73\x72\x63\135\72\156\157\164\50\x2e\x66\x6f\162\143\145\55\x6c\x6f\141\x64\x29"; if (!$this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\x70\164\137\x61\154\154\157\167\x5f\141\163\171\156\x63\137\154\157\141\144\137\163\164\171\154\145\x73"), false, $moooemyaqewumiay)) { goto magymcqykamwqigw; } $yuumukkaswwoywya .= "\x2c\x20\154\x69\x6e\x6b\x5b\x68\162\x65\x66\135\133\162\145\154\75\163\164\x79\154\x65\x73\150\145\145\164\x5d\x3a\x6e\x6f\x74\x28\x2e\x66\x6f\x72\x63\x65\55\154\x6f\x61\x64\x29"; magymcqykamwqigw: if (!DOMCrawler::umuecysoywoumgwo($moooemyaqewumiay, $yuumukkaswwoywya)) { goto gicmaqmuscawegie; } $moooemyaqewumiay = DOMCrawler::qaqiuweqoukkgqsk($moooemyaqewumiay, $yuumukkaswwoywya, function (DOMElement $ymyisaeksssueeik) use(&$sqqewmoeaekuyyas) { $wisgiwskwawciiee = $ymyisaeksssueeik->nodeName === "\x6c\x69\x6e\x6b" ? "\x68\162\x65\x66" : "\163\162\x63"; if (!DOMCrawler::owgokkumqicyuyiy($ymyisaeksssueeik, $wisgiwskwawciiee)) { goto ukogwqiuuuakkawy; } $eqgoocgaqwqcimie = DOMCrawler::guaqqcyuaeucmgoy($ymyisaeksssueeik, $wisgiwskwawciiee); DOMCrawler::cqieekgkogamcsqk($ymyisaeksssueeik, "\x64\141\164\x61\x2d\x73\x6f\165\x72\143\x65", $this->ukacwyckseuqsqgc($eqgoocgaqwqcimie)); DOMCrawler::cqieekgkogamcsqk($ymyisaeksssueeik, "\x64\x61\x74\141\55\160\162\x69\157\x72\x69\x74\x79", $sqqewmoeaekuyyas); DOMCrawler::qeeokkmmskuyoecg($ymyisaeksssueeik, $wisgiwskwawciiee); $sqqewmoeaekuyyas++; ukogwqiuuuakkawy: return $ymyisaeksssueeik; }, false, true); gicmaqmuscawegie: oymyqcoekqyuiguq: return $moooemyaqewumiay; } }
