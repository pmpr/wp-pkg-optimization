<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61afe111519f2             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Asset; use DOMElement; use Pmpr\Common\Foundation\DOMCrawler; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class Delay extends Common { protected array $priorities = []; public function uqaauswqgcmuosqe() : array { return $this->priorities; } public function yywskysiycwkwsgw($eueuqacmukymcyya) { return ManipulateArray::get($this->uqaauswqgcmuosqe(), $eueuqacmukymcyya); } public function kskcemmeowmwkoqa($eueuqacmukymcyya, $sqqewmoeaekuyyas) : self { $this->priorities[$eueuqacmukymcyya] = $sqqewmoeaekuyyas; return $this; } public function wigskegsqequoeks() { goto gyeayeuuyiemuwuq; imeaiksowuukikui: $this->qcsmikeggeemccuu("\x69\156\151\x74", [$this, "\145\156\x71\x75\145\165\145"])->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x6f\x70\x74\x5f\x62\165\x66\146\145\x72\137\160\162\157\x63\x65\x73\x73"), [$this, "\167\151\x71\147\153\143\x6d\x71\x6b\x77\x6f\165\151\167\x6d\x75"], 40); goto aqmiewawgseaqeqk; aqmiewawgseaqeqk: aymmymequcisekie: goto gaceikykesgywssm; kyggwyywiycksgqq: $cyoauokciycesgqw = $this->weysguygiseoukqw(Setting::DELAY_LOAD_JAVASCRIPT); goto sugumgeqcwgekcqs; gyeayeuuyiemuwuq: $cwowmoyqeosugowu = $this->weysguygiseoukqw(Setting::DELAY_LOAD_STYLE); goto kyggwyywiycksgqq; sugumgeqcwgekcqs: if (!($cyoauokciycesgqw || $cwowmoyqeosugowu)) { goto aymmymequcisekie; } goto imeaiksowuukikui; gaceikykesgywssm: parent::wigskegsqequoeks(); goto weggeeowykuqooyg; weggeeowykuqooyg: } public function enqueue() { goto ssmgmiuqoeiuacsa; ssmgmiuqoeiuacsa: if (!$this->ocysssyiuaueqiei()) { goto cqkuuyouqoqyguus; } goto wiqigqgiegmacgsw; gwoacimkeyymqccq: $eygsasmqycagyayw->oeoquuwkoywiuesy($eygsasmqycagyayw->owygwqwawqoiusis("\144\x65\154\141\171\55\141\x73\x73\x65\x74", $eygsasmqycagyayw->get("\x64\145\x6c\x61\171\56\152\163"))->yiuoscqaekcgiyuy("\143\154\x61\x73\x73", "\146\157\162\x63\145\x2d\x6c\157\141\x64")); goto koggssokukoukkay; koggssokukoukkay: cqkuuyouqoqyguus: goto ueaiskyiqcquiika; wiqigqgiegmacgsw: $eygsasmqycagyayw = $this->miocmcoykayoyyau(); goto gwoacimkeyymqccq; ueaiskyiqcquiika: } public function wiqgkcmqkwouiwmu($moooemyaqewumiay) { goto kuyqusuycscumuek; eimouyomcoqkmaae: ooqmaweuqmcmwsuk: goto kkwqmoeeqygoimwg; qioswooukgoowsuc: eqemcocqsyasqycq: goto ggoimgeeuugseiwk; koemwyegoqwiikom: if (!$this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\160\164\x5f\141\x6c\154\x6f\167\x5f\x64\145\154\x61\x79\137\163\x74\171\x6c\x65\x73"), false, $moooemyaqewumiay)) { goto eqemcocqsyasqycq; } goto qycsooiomiugimqc; siuyaemoiiqyoggo: $yuumukkaswwoywya = "\x73\143\x72\151\x70\x74\x5b\x73\162\x63\x5d\x3a\156\157\164\50\x2e\146\157\x72\143\x65\x2d\154\157\141\x64\51"; goto koemwyegoqwiikom; ggoimgeeuugseiwk: if (!DOMCrawler::umuecysoywoumgwo($moooemyaqewumiay, $yuumukkaswwoywya)) { goto ooqmaweuqmcmwsuk; } goto gimquiiwucueoqkw; kuyqusuycscumuek: if (!($this->ocysssyiuaueqiei() && !$this->eeegakaauwcyugqy())) { goto uscissuaiyuiukea; } goto cycwgukowsksmkyc; qycsooiomiugimqc: $yuumukkaswwoywya .= "\x2c\x20\x6c\x69\156\x6b\133\x68\162\145\146\135\133\162\x65\154\x3d\x73\164\171\154\145\x73\150\x65\x65\x74\135\x3a\156\157\x74\x28\x2e\x66\x6f\162\143\x65\x2d\154\x6f\x61\144\x29"; goto qioswooukgoowsuc; mwqcykaeywsmoumm: return $moooemyaqewumiay; goto awgmyaycugswmwae; kkwqmoeeqygoimwg: uscissuaiyuiukea: goto mwqcykaeywsmoumm; cycwgukowsksmkyc: $sqqewmoeaekuyyas = 0; goto siuyaemoiiqyoggo; gimquiiwucueoqkw: $moooemyaqewumiay = DOMCrawler::qaqiuweqoukkgqsk($moooemyaqewumiay, $yuumukkaswwoywya, function (DOMElement $ymyisaeksssueeik) use(&$sqqewmoeaekuyyas) { goto cqugssuesycomqwa; qaiuogoowcoimwee: $ymyisaeksssueeik->cmgoqeksagmigwmg("\x64\141\164\x61\x2d\160\x72\151\x6f\x72\151\x74\171", $sqqewmoeaekuyyas); goto osqgywagokmsicqe; kaiqsuaywyuckuoo: if (!$ymyisaeksssueeik->seeegkogcamaigga($wisgiwskwawciiee)) { goto ucecweoaoyeoyuue; } goto yuoamgkigcwaooqu; iiuuwuwcwamqegey: return $ymyisaeksssueeik; goto qmgueimkwqmsakis; ymwyooosikgokiaa: $ymyisaeksssueeik->cmgoqeksagmigwmg("\x64\x61\x74\141\x2d\x73\157\x75\x72\x63\x65", $this->ukacwyckseuqsqgc($eqgoocgaqwqcimie)); goto qaiuogoowcoimwee; qccmuwiwykuegoga: $sqqewmoeaekuyyas++; goto csucwwqcsaymyiuk; yuoamgkigcwaooqu: $eqgoocgaqwqcimie = $ymyisaeksssueeik->waecsyqmwascmqoa($wisgiwskwawciiee); goto ymwyooosikgokiaa; osqgywagokmsicqe: $ymyisaeksssueeik->ogaeogwycyqqckeu($wisgiwskwawciiee); goto qccmuwiwykuegoga; cqugssuesycomqwa: $wisgiwskwawciiee = $ymyisaeksssueeik->nodeName == "\154\x69\x6e\x6b" ? "\x68\x72\145\x66" : "\x73\x72\x63"; goto kaiqsuaywyuckuoo; csucwwqcsaymyiuk: ucecweoaoyeoyuue: goto iiuuwuwcwamqegey; qmgueimkwqmsakis: }, false, true); goto eimouyomcoqkmaae; awgmyaycugswmwae: } }
