<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             652e61ac134c6             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Asset\Media; use DOMElement; use Pmpr\Common\Foundation\DOMCrawler; use Pmpr\Common\Foundation\Manipulate\Post\ManipulateAttachment; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString; use Pmpr\Module\Optimization\Asset\Setting; class LazyLoad extends Common { const uoogwumawwsywcaq = ["\x73\x72\143" => "\144\141\x74\141\55\x73\x72\143", "\163\x69\x7a\145\x73" => "\x64\141\x74\x61\x2d\x73\x69\172\x65\163", "\163\162\143\163\x65\164" => "\x64\141\164\141\55\x73\162\143\163\x65\x74", "\x70\157\163\164\x65\162" => "\x64\141\x74\x61\55\160\157\163\164\145\162"]; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x69\156\x69\x74", [$this, "\145\156\161\x75\x65\x75\x65"]); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x77\x70\137\x6c\141\x7a\171\137\x6c\x6f\x61\144\x69\x6e\x67\x5f\x65\x6e\141\142\154\x65\x64", "\137\137\162\145\164\165\x72\x6e\x5f\146\x61\x6c\163\x65")->cecaguuoecmccuse($this->ygyygikyocoymgaw("\157\160\x74\x5f\142\x75\146\146\145\x72\137\160\162\157\143\145\x73\163"), [$this, "\141\x6d\153\x77\x67\x6b\x6d\x79\147\153\147\x6d\x61\161\x73\x67"], 15)->cecaguuoecmccuse("\167\160\137\x67\x65\x74\137\x61\164\x74\x61\143\150\x6d\145\156\164\x5f\x69\155\141\147\145\137\141\164\164\x72\x69\142\x75\x74\145\x73", [$this, "\157\167\171\x67\x71\145\x61\x77\x63\x75\x77\x61\147\x6b\x67\x67"], 999, 3); } public function owygqeawcuwagkgg($wwgucssaecqekuek, $aiooqyausygaasqm, $oiegiwogmwmawkeo) { if (!is_array($wwgucssaecqekuek)) { goto oomguqikqokqwgku; } ManipulateArray::unset($wwgucssaecqekuek, "\x6c\x6f\x61\x64\151\156\x67"); if (is_string($oiegiwogmwmawkeo)) { goto acsqgiuageaasiyy; } $oiegiwogmwmawkeo = implode("\x2d", (array) $oiegiwogmwmawkeo); acsqgiuageaasiyy: $cwgqkcumeaswoscu = ManipulateAttachment::mwikyscisascoeea($aiooqyausygaasqm); $wwgucssaecqekuek["\x64\x61\164\x61\x2d\165\156\x69\x71"] = "{$cwgqkcumeaswoscu}\55{$oiegiwogmwmawkeo}"; oomguqikqokqwgku: return $wwgucssaecqekuek; } public function enqueue() { if (!$this->gaogimymcgsiqois()) { goto samwkqgwouggsguc; } $eygsasmqycagyayw = $this->miocmcoykayoyyau(); $eygsasmqycagyayw->oeoquuwkoywiuesy($eygsasmqycagyayw->owygwqwawqoiusis("\x6d\145\x64\x69\x61\x2d\x6c\x61\x7a\171\154\x6f\x61\x64")->awagieqcmmwkgwgs($eygsasmqycagyayw->souwykwwmyygqyqi("\154\141\x7a\x79\x6c\157\x61\144\56\152\x73")))->oeoquuwkoywiuesy($eygsasmqycagyayw->awgyqswkqywwmkye("\x6d\x65\x64\151\141\x2d\x6c\141\x7a\171\154\157\141\x64")->awagieqcmmwkgwgs($eygsasmqycagyayw->souwykwwmyygqyqi("\x6c\141\x7a\x79\x6c\x6f\141\144\56\143\163\x73"))); samwkqgwouggsguc: } public function gaogimymcgsiqois() : bool { return (bool) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\160\164\x5f\154\x61\172\171\x5f\154\157\141\x64\137\x63\x61\156\137\160\162\x6f\143\x65\163\x73"), true); } public function amkwgkmygkgmaqsg($moooemyaqewumiay) { if (!($moooemyaqewumiay && $this->gaogimymcgsiqois() && $this->ocysssyiuaueqiei())) { goto kkumywowcoycymeo; } if (!$this->weysguygiseoukqw(Setting::uwgswmisuuigoucw)) { goto wyuemgggaqogsmsq; } $moooemyaqewumiay = $this->owqscsmucwgiqsim($moooemyaqewumiay); $moooemyaqewumiay = $this->mqqggimwoqogukwm($moooemyaqewumiay); wyuemgggaqogsmsq: if (!$this->weysguygiseoukqw(Setting::gowiqmkskqiqsgsc)) { goto guykyqecgswcsmws; } $moooemyaqewumiay = $this->iagoosqgoismuqwe($moooemyaqewumiay); guykyqecgswcsmws: kkumywowcoycymeo: return $moooemyaqewumiay; } public function owqscsmucwgiqsim($moooemyaqewumiay) : string { return $this->swgieuwskmoyukoq($moooemyaqewumiay, "\151\155\147\x2c\x20\160\x69\143\x74\x75\162\x65\x20\76\40\163\x6f\x75\x72\143\x65"); } public function omiaycacqkmkeeaw($moooemyaqewumiay) { $yuumukkaswwoywya = "\x5b\x73\164\171\x6c\x65\x5d"; if (!DOMCrawler::umuecysoywoumgwo($moooemyaqewumiay, $yuumukkaswwoywya)) { goto kqqiegkuqagcqsya; } $moooemyaqewumiay = DOMCrawler::qaqiuweqoukkgqsk($moooemyaqewumiay, $yuumukkaswwoywya, function (DOMElement $ymyisaeksssueeik) { $eqgoocgaqwqcimie = DOMCrawler::guaqqcyuaeucmgoy($ymyisaeksssueeik, "\x73\164\x79\154\145"); if (!$eqgoocgaqwqcimie) { goto miweggwqeiaeweia; } DOMCrawler::cqieekgkogamcsqk($ymyisaeksssueeik, "\x64\x61\x74\x61\x2d\x73\x74\171\154\145", $eqgoocgaqwqcimie); miweggwqeiaeweia: DOMCrawler::qeeokkmmskuyoecg($ymyisaeksssueeik, "\x73\x74\x79\154\145"); return $this->akqamsokouooqqgw($ymyisaeksssueeik); }); kqqiegkuqagcqsya: return $moooemyaqewumiay; } public function iagoosqgoismuqwe($moooemyaqewumiay) : string { return $this->swgieuwskmoyukoq($moooemyaqewumiay, "\151\x66\162\141\x6d\x65\x2c\40\x76\151\x64\145\157"); } public function mqqggimwoqogukwm($moooemyaqewumiay) { $yuumukkaswwoywya = "\x64\151\x76\x5b\x73\x74\171\154\x65\135\54\40\146\x69\147\x75\162\x65\x5b\163\x74\171\x6c\145\x5d\54\40\x73\x65\x63\x74\x69\x6f\156\x5b\x73\164\x79\154\x65\135\54\x20\x73\x70\x61\x6e\133\x73\164\171\154\145\x5d\54\40\x6c\x69\x5b\163\164\x79\154\145\x5d"; if (!DOMCrawler::umuecysoywoumgwo($moooemyaqewumiay, $yuumukkaswwoywya)) { goto ikqqskkqqwmwssoo; } $moooemyaqewumiay = DOMCrawler::qaqiuweqoukkgqsk($moooemyaqewumiay, $yuumukkaswwoywya, function (DOMElement $ymyisaeksssueeik) { $kswaimykcacqyaay = DOMCrawler::guaqqcyuaeucmgoy($ymyisaeksssueeik, "\x73\x74\x79\154\145"); if (!preg_match("\43\142\141\x63\x6b\147\162\157\165\156\144\x28\55\x69\x6d\141\x67\x65\51\x3f\x5c\163\x2a\x3a\x5c\x73\52\x28\x5c\x73\52\x75\162\x6c\x5c\x73\x2a\x5c\50\50\77\x3c\165\x72\x6c\76\133\136\51\x5d\x2b\51\x5c\51\51\134\x73\52\73\77\x23\151\163", $kswaimykcacqyaay, $meyiiwcswqmuggyg)) { goto iwekmyyccgiyuecc; } $eeamcawaiqocomwy = $meyiiwcswqmuggyg["\x75\162\154"]; DOMCrawler::cqieekgkogamcsqk($ymyisaeksssueeik, "\144\x61\x74\141\x2d\x62\x67", esc_attr(trim($eeamcawaiqocomwy, "\47\42\40"))); if ($iwiewowoqmoekyqi = $this->kkkaiqweiaqiaycg($eeamcawaiqocomwy)) { goto ousiuuwgwkiyikyq; } $kswaimykcacqyaay = ManipulateString::wiecmkiugmyyqiqc($meyiiwcswqmuggyg[0], '', $kswaimykcacqyaay); goto ogsaaqsaogcqiouy; ousiuuwgwkiyikyq: $kswaimykcacqyaay = ManipulateString::wiecmkiugmyyqiqc($eeamcawaiqocomwy, $iwiewowoqmoekyqi, $kswaimykcacqyaay); ogsaaqsaogcqiouy: DOMCrawler::cqieekgkogamcsqk($ymyisaeksssueeik, "\x73\164\171\154\145", $kswaimykcacqyaay); $ymyisaeksssueeik = $this->akqamsokouooqqgw($ymyisaeksssueeik); iwekmyyccgiyuecc: return $ymyisaeksssueeik; }); ikqqskkqqwmwssoo: return $moooemyaqewumiay; } public function akqamsokouooqqgw(DOMElement $ymyisaeksssueeik) : DOMElement { $egkyssmuqcwaciya = DOMCrawler::guaqqcyuaeucmgoy($ymyisaeksssueeik, "\x63\x6c\141\x73\x73"); $egkyssmuqcwaciya .= "\x20\x6c\x61\x7a\171\154\157\x61\x64"; DOMCrawler::cqieekgkogamcsqk($ymyisaeksssueeik, "\143\154\141\x73\163", rtrim($egkyssmuqcwaciya)); return $ymyisaeksssueeik; } public function swgieuwskmoyukoq($moooemyaqewumiay, $yuumukkaswwoywya) : string { if (!DOMCrawler::umuecysoywoumgwo($moooemyaqewumiay, $yuumukkaswwoywya)) { goto uiosisocuwokwkie; } $yemgmmgogcwccuky = ManipulateArray::get($this->cyoqmkeuiuaasqmo(), "\156\157\x2d\x6c\x61\x7a\x79\154\157\141\x64", []); $moooemyaqewumiay = DOMCrawler::qaqiuweqoukkgqsk($moooemyaqewumiay, $yuumukkaswwoywya, function (DOMElement $ymyisaeksssueeik) use($yemgmmgogcwccuky) { $ooqiacaskuuekygc = DOMCrawler::guaqqcyuaeucmgoy($ymyisaeksssueeik, "\x64\x61\164\141\x2d\165\156\x69\x71"); if (!(!$yemgmmgogcwccuky || !in_array($ooqiacaskuuekygc, $yemgmmgogcwccuky, true))) { goto iikiiioqiyegyaak; } foreach (self::uoogwumawwsywcaq as $msqkueqksqwmskak => $uwomkgseoiegeume) { if (!DOMCrawler::owgokkumqicyuyiy($ymyisaeksssueeik, $msqkueqksqwmskak)) { goto gicyayswqyuoekcq; } $eqgoocgaqwqcimie = DOMCrawler::guaqqcyuaeucmgoy($ymyisaeksssueeik, $msqkueqksqwmskak); if (!$eqgoocgaqwqcimie) { goto awoaooyoeoyeeqee; } DOMCrawler::cqieekgkogamcsqk($ymyisaeksssueeik, $uwomkgseoiegeume, $eqgoocgaqwqcimie); awoaooyoeoyeeqee: if ($msqkueqksqwmskak === "\x73\x72\143") { goto mqkmcysgoiaouiwm; } DOMCrawler::qeeokkmmskuyoecg($ymyisaeksssueeik, $msqkueqksqwmskak); goto kosaqwikueyksqmw; mqkmcysgoiaouiwm: $wwgucssaecqekuek = DOMCrawler::wuuawmeqqyyyemsw($ymyisaeksssueeik); $aiooqyausygaasqm = DOMCrawler::guaqqcyuaeucmgoy($ymyisaeksssueeik, "\x64\141\164\141\55\151\144"); $iwiewowoqmoekyqi = $this->kkkaiqweiaqiaycg($aiooqyausygaasqm, $wwgucssaecqekuek); if ($iwiewowoqmoekyqi) { goto ogqmesokykywseys; } DOMCrawler::qeeokkmmskuyoecg($ymyisaeksssueeik, $msqkueqksqwmskak); goto ykomgumacooyomsk; ogqmesokykywseys: DOMCrawler::cqieekgkogamcsqk($ymyisaeksssueeik, $msqkueqksqwmskak, $iwiewowoqmoekyqi); ykomgumacooyomsk: kosaqwikueyksqmw: gicyayswqyuoekcq: cwwmimggaaecmucw: } aomysykcgikegiau: $ymyisaeksssueeik = $this->akqamsokouooqqgw($ymyisaeksssueeik); iikiiioqiyegyaak: return $ymyisaeksssueeik; }, false, true); uiosisocuwokwkie: return $moooemyaqewumiay; } public function kkkaiqweiaqiaycg($aiooqyausygaasqm, array $wwgucssaecqekuek = []) { $iwiewowoqmoekyqi = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\160\x74\x5f\x6d\145\x64\x69\x61\137\x6c\x61\x7a\171\137\154\x6f\141\144\137\160\x6c\141\x63\145\150\x6f\x6c\x64\145\x72"), '', $aiooqyausygaasqm, $wwgucssaecqekuek); if ($iwiewowoqmoekyqi) { goto cuumeogeomowqisc; } $iwiewowoqmoekyqi = "\x64\141\x74\x61\x3a\x69\155\141\147\x65\x2f\x70\156\x67\x3b\x62\141\x73\x65\x36\64\x2c\x69\x56\x42\117\x52\167\60\x4b\x47\x67\x6f\101\101\101\101\x4e\x53\x55\x68\x45\125\147\x41\101\101\x41\105\101\101\101\101\x42\x43\101\x59\x41\101\x41\101\x66\106\x63\x53\112\x41\x41\101\101\104\x55\x6c\105\x51\x56\x52\64\62\x6d\116\153\131\x50\150\146\x44\167\x41\x43\x68\167\107\x41\66\60\x65\x36\x6b\x67\101\101\101\101\102\112\x52\x55\x35\105\162\153\112\147\147\147\x3d\x3d"; cuumeogeomowqisc: return $iwiewowoqmoekyqi; } }
