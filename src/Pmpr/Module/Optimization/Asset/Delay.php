<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             634ceeff4f14f             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Asset; use DOMElement; use Pmpr\Common\Foundation\DOMCrawler; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class Delay extends Common { protected array $priorities = []; public function uqaauswqgcmuosqe() : array { return $this->priorities; } public function yywskysiycwkwsgw($eueuqacmukymcyya) { return ManipulateArray::get($this->uqaauswqgcmuosqe(), $eueuqacmukymcyya); } public function kskcemmeowmwkoqa($eueuqacmukymcyya, $sqqewmoeaekuyyas) : self { $this->priorities[$eueuqacmukymcyya] = $sqqewmoeaekuyyas; return $this; } public function wigskegsqequoeks() { $qyqekswyqccmiyce = $this->weysguygiseoukqw(Setting::hoeamwwegymyeeeg); $xawimsyesokgqigw = $this->weysguygiseoukqw(Setting::komosgcgwesseeqo); if (!($xawimsyesokgqigw || $qyqekswyqccmiyce)) { goto syusgosewwkoagoq; } $this->qcsmikeggeemccuu("\167\x70", [$this, "\145\x6e\x71\165\x65\x75\145"])->cecaguuoecmccuse($this->ygyygikyocoymgaw("\157\x70\x74\137\142\165\x66\x66\145\x72\137\x70\162\x6f\143\x65\163\x73"), [$this, "\x75\x6d\153\143\151\x63\161\145\x73\x6b\x67\151\x67\151\x61\171"], 40); syusgosewwkoagoq: } public function enqueue() { if (!$this->ocysssyiuaueqiei()) { goto mcqucouuiuoagqwc; } $eygsasmqycagyayw = $this->miocmcoykayoyyau(); $eygsasmqycagyayw->oeoquuwkoywiuesy($eygsasmqycagyayw->owygwqwawqoiusis("\x61\163\171\x6e\x63\55\x6c\x6f\141\144\x2d\141\x73\x73\145\x74")->awagieqcmmwkgwgs($eygsasmqycagyayw->souwykwwmyygqyqi("\141\x73\171\156\x63\x6c\157\141\144\x2e\152\163"))); mcqucouuiuoagqwc: } public function umkcicqeskgigiay($moooemyaqewumiay) { if (!$this->ocysssyiuaueqiei()) { goto owgsameoayaogsma; } $sqqewmoeaekuyyas = 0; $yuumukkaswwoywya = "\163\143\x72\x69\160\x74\133\163\x72\143\135\x3a\156\x6f\164\50\x2e\x66\x6f\162\x63\145\55\x6c\157\x61\x64\x29"; if (!$this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\160\164\x5f\x61\154\154\157\167\x5f\x61\x73\171\x6e\143\x5f\x6c\157\x61\144\x5f\x73\164\x79\x6c\145\x73"), false, $moooemyaqewumiay)) { goto eweaaismksecwagy; } $yuumukkaswwoywya .= "\54\x20\154\151\156\x6b\x5b\x68\x72\x65\x66\x5d\x5b\x72\x65\154\x3d\x73\x74\171\154\x65\x73\x68\x65\145\x74\135\72\156\157\x74\50\56\x66\157\x72\143\145\x2d\x6c\x6f\141\144\x29"; eweaaismksecwagy: if (!DOMCrawler::umuecysoywoumgwo($moooemyaqewumiay, $yuumukkaswwoywya)) { goto oeamoqweiueaueay; } $moooemyaqewumiay = DOMCrawler::qaqiuweqoukkgqsk($moooemyaqewumiay, $yuumukkaswwoywya, function (DOMElement $ymyisaeksssueeik) use(&$sqqewmoeaekuyyas) { $wisgiwskwawciiee = $ymyisaeksssueeik->nodeName === "\x6c\151\156\153" ? "\x68\x72\x65\146" : "\x73\x72\143"; if (!DOMCrawler::owgokkumqicyuyiy($ymyisaeksssueeik, $wisgiwskwawciiee)) { goto icumkkykaoqycqqu; } $eqgoocgaqwqcimie = DOMCrawler::guaqqcyuaeucmgoy($ymyisaeksssueeik, $wisgiwskwawciiee); DOMCrawler::cqieekgkogamcsqk($ymyisaeksssueeik, "\144\141\x74\x61\55\x73\157\x75\x72\143\145", $this->ukacwyckseuqsqgc($eqgoocgaqwqcimie)); DOMCrawler::cqieekgkogamcsqk($ymyisaeksssueeik, "\144\141\164\x61\x2d\x70\162\x69\x6f\x72\151\x74\x79", $sqqewmoeaekuyyas); DOMCrawler::qeeokkmmskuyoecg($ymyisaeksssueeik, $wisgiwskwawciiee); $sqqewmoeaekuyyas++; icumkkykaoqycqqu: return $ymyisaeksssueeik; }, false, true); oeamoqweiueaueay: owgsameoayaogsma: return $moooemyaqewumiay; } }
