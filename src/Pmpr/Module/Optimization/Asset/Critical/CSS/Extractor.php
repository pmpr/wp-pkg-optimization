<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             624c0a8a4dc93             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Asset\Critical\CSS; use DOMElement; use Pmpr\Common\Foundation\DOMCrawler; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\Optimization\Asset\Critical\CSS\Data\Rule; use Symfony\Component\CssSelector\CssSelectorConverter; use DOMDocument; use DOMXPath; use Exception; class Extractor extends Common { protected ?array $rules = []; protected CssSelectorConverter $converter; public function __construct() { $this->converter = new CssSelectorConverter(); parent::__construct(); } public function uosumyqkueiykgiu() : ?array { return $this->rules; } public function aimosgcaukumakge($uusmaiomayssaecw, ?Rule $ekuqiqmikiicgoss) : self { if ($uusmaiomayssaecw) { goto yyamycyesguwueuw; } $this->rules[] = $ekuqiqmikiicgoss; goto aymmymequcisekie; yyamycyesguwueuw: $this->rules[$uusmaiomayssaecw] = $ekuqiqmikiicgoss; aymmymequcisekie: return $this; } public function uacmswwoiqckokew() : ?CssSelectorConverter { return $this->converter; } protected function awgiawwcyyywqokg(string $nsmgceoqaqogqmuw) { $cmckowaakauyescq = new DOMDocument("\x31\x2e\x30", "\125\x54\106\55\70"); $eaockgywgswwksqo = libxml_use_internal_errors(true); if (!$nsmgceoqaqogqmuw) { goto gyeayeuuyiemuwuq; } $cmckowaakauyescq->gseoscwkykeqiegc(mb_convert_encoding($nsmgceoqaqogqmuw, "\x48\124\x4d\x4c\55\x45\x4e\x54\x49\124\111\105\x53", "\x55\124\x46\55\x38")); gyeayeuuyiemuwuq: libxml_use_internal_errors($eaockgywgswwksqo); $cmckowaakauyescq->formatOutput = true; return $cmckowaakauyescq; } private function iuekyyeesukysksy(string $owqaeesoaygymmcy) { return trailingslashit(Manipulate::guugkagukymokgas()) . $owqaeesoaygymmcy . "\x2e\143\141\x63\150\145"; } private function kumkwyksmeikauow(string $owqaeesoaygymmcy) { $acqqmqmcquukaqsc = []; $qogsmwakwacwqogk = $this->iuekyyeesukysksy($owqaeesoaygymmcy); if (!$this->kcciqwskewsuaemk()->exists($qogsmwakwacwqogk)) { goto imeaiksowuukikui; } $ewgwqamkygiqaawc = $this->kcciqwskewsuaemk()->souwykwwmyygqyqi($qogsmwakwacwqogk); if (!$ewgwqamkygiqaawc) { goto sugumgeqcwgekcqs; } $uomewyckeuqoqocu = unserialize($ewgwqamkygiqaawc); if (!(is_array($uomewyckeuqoqocu) && $uomewyckeuqoqocu)) { goto kyggwyywiycksgqq; } $acqqmqmcquukaqsc = $uomewyckeuqoqocu; kyggwyywiycksgqq: sugumgeqcwgekcqs: imeaiksowuukikui: return $acqqmqmcquukaqsc; } private function uiuwkseyqcyweacc(array $acqqmqmcquukaqsc = []) { $qgsciwocmkqyokws = []; foreach ($acqqmqmcquukaqsc as $ekuqiqmikiicgoss) { if (!$ekuqiqmikiicgoss instanceof Rule) { goto weggeeowykuqooyg; } $qgsciwocmkqyokws[$ekuqiqmikiicgoss->mmmcswscsiecscwg()][$ekuqiqmikiicgoss->acskcgywyymegikq()][] = $ekuqiqmikiicgoss; weggeeowykuqooyg: gaceikykesgywssm: } aqmiewawgseaqeqk: return $qgsciwocmkqyokws; } private function gawksoyiyssqgsgu(?string $yuumukkaswwoywya) { try { $wiokgkkuiumaumci = $this->uacmswwoiqckokew()->qmukceakycqioksa($yuumukkaswwoywya); } catch (Exception $umqmkkqcmcaswmwu) { if (!($umqmkkqcmcaswmwu->sagusgigmkeysock() !== "\x50\x73\145\x75\144\x6f\x2d\x65\154\145\155\x65\156\x74\x73\40\x61\x72\145\x20\x6e\157\164\x20\x73\165\x70\x70\x6f\162\164\145\x64\x2e")) { goto cqkuuyouqoqyguus; } return false; cqkuuyouqoqyguus: try { $wgqgsuoqkcgaugmc = explode("\72", $yuumukkaswwoywya); $wiokgkkuiumaumci = $this->uacmswwoiqckokew()->qmukceakycqioksa((string) reset($wgqgsuoqkcgaugmc)); } catch (Exception $iewosgggaueeyymg) { return false; } } return $wiokgkkuiumaumci; } public function gsgoaqaskggcakag(?string $migiiksoiymissge) { $kigowwqauiumummw = true; if (!($fkgqmwkusywysaus = Manipulate::uigyooscomiegggk($migiiksoiymissge))) { goto ssmgmiuqoeiuacsa; } $sogksuscggsicmac = wp_remote_get($migiiksoiymissge); $kigowwqauiumummw = $this->extract(ManipulateArray::get($sogksuscggsicmac, "\x62\x6f\144\171"), $fkgqmwkusywysaus); ssmgmiuqoeiuacsa: return $kigowwqauiumummw; } public function extract(?string $nsmgceoqaqogqmuw, ?string $wkcwykowmmmwioqs, $ksaameoqigiaoigg = false) { $kigowwqauiumummw = false; $caokcyqaukiegscs = null; if (!$wkcwykowmmmwioqs) { goto ueaiskyiqcquiika; } $icyaoosaykeskiuu = []; DOMCrawler::qaqiuweqoukkgqsk($nsmgceoqaqogqmuw, "\x6c\151\x6e\153\x5b\x72\x65\x6c\75\x73\x74\x79\x6c\x65\163\150\x65\145\164\x5d", function (DOMElement $ymyisaeksssueeik) use(&$icyaoosaykeskiuu) { $geecqyososceumsk = DOMCrawler::guaqqcyuaeucmgoy($ymyisaeksssueeik, "\x68\162\x65\146"); if ($geecqyososceumsk) { goto wiqigqgiegmacgsw; } $geecqyososceumsk = DOMCrawler::guaqqcyuaeucmgoy($ymyisaeksssueeik, "\144\141\164\x61\55\163\x6f\165\162\x63\x65"); wiqigqgiegmacgsw: if (!($ewgwqamkygiqaawc = $this->miocmcoykayoyyau()->souwykwwmyygqyqi($geecqyososceumsk))) { goto gwoacimkeyymqccq; } $icyaoosaykeskiuu[$geecqyososceumsk] = $ewgwqamkygiqaawc; gwoacimkeyymqccq: return $ymyisaeksssueeik; }); if (!$icyaoosaykeskiuu) { goto koggssokukoukkay; } $caokcyqaukiegscs = $this->kcgmkaaqomwcaemk($nsmgceoqaqogqmuw, implode('', $icyaoosaykeskiuu), implode('', array_keys($icyaoosaykeskiuu))); $caokcyqaukiegscs = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\160\x74\x5f\155\x69\x6e\151\146\171\x5f\x63\x73\x73"), $caokcyqaukiegscs); $caokcyqaukiegscs = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\x70\164\137\x61\144\x76\141\156\x63\x65\137\x6d\151\x6e\x69\x66\171\x5f\x63\x73\x73"), $caokcyqaukiegscs); $caokcyqaukiegscs = preg_replace("\57\50\x5b\x3f\41\x3b\135\51\x5c\61\53\57", "\44\61", $caokcyqaukiegscs); $kigowwqauiumummw = $this->kcciqwskewsuaemk()->kwsmkgyoyaqecwuu($wkcwykowmmmwioqs, $caokcyqaukiegscs); koggssokukoukkay: ueaiskyiqcquiika: if (!($ksaameoqigiaoigg && $caokcyqaukiegscs)) { goto eqemcocqsyasqycq; } $kigowwqauiumummw = $caokcyqaukiegscs; eqemcocqsyasqycq: return $kigowwqauiumummw; } private function eymeukaqaygeyoge(string $owqaeesoaygymmcy, array $acqqmqmcquukaqsc) { $mkomwsiykqigmqca = Manipulate::guugkagukymokgas(); if ($this->kcciqwskewsuaemk()->exists($mkomwsiykqigmqca)) { goto ucecweoaoyeoyuue; } $this->kcciqwskewsuaemk()->mkdir($mkomwsiykqigmqca); ucecweoaoyeoyuue: $qogsmwakwacwqogk = $this->iuekyyeesukysksy($owqaeesoaygymmcy); $this->kcciqwskewsuaemk()->touch($qogsmwakwacwqogk); $this->kcciqwskewsuaemk()->kwsmkgyoyaqecwuu($qogsmwakwacwqogk, serialize($acqqmqmcquukaqsc)); } public function kcgmkaaqomwcaemk(?string $nsmgceoqaqogqmuw, ?string $icyaoosaykeskiuu, string $sewwikwiigsgqiaq = "\143\141\143\150\145\x5f\x6b\x65\171") { if ($this->uosumyqkueiykgiu()) { goto cqugssuesycomqwa; } $this->cegmggqwiqwqcgsk($nsmgceoqaqogqmuw, $icyaoosaykeskiuu, $sewwikwiigsgqiaq); cqugssuesycomqwa: return $this->miaqaycqaamiyemm($this->uosumyqkueiykgiu()); } private function ugcmmyocmiksweyq(string $qsmqqqccagyuaiso, array $acqqmqmcquukaqsc) { $ewgwqamkygiqaawc = join('', array_map(function (Rule $ekuqiqmikiicgoss) { return $this->wouggsawqayikygu($ekuqiqmikiicgoss->waoqwiosqiqkcocg(), $ekuqiqmikiicgoss->kikmasogcikysciu()); }, $acqqmqmcquukaqsc)); if (!($qsmqqqccagyuaiso != '')) { goto kaiqsuaywyuckuoo; } $ewgwqamkygiqaawc = "{$qsmqqqccagyuaiso}\x7b{$ewgwqamkygiqaawc}\x7d"; kaiqsuaywyuckuoo: return $ewgwqamkygiqaawc; } public function cegmggqwiqwqcgsk(?string $nsmgceoqaqogqmuw, ?string $icyaoosaykeskiuu, string $sewwikwiigsgqiaq) { $owqaeesoaygymmcy = md5($sewwikwiigsgqiaq); $ycoqoegmwiiwyeuo = $this->kumkwyksmeikauow($owqaeesoaygymmcy); if ($ycoqoegmwiiwyeuo) { goto yuoamgkigcwaooqu; } $ycoqoegmwiiwyeuo = Manipulate::uosumyqkueiykgiu($icyaoosaykeskiuu); $this->eymeukaqaygeyoge($owqaeesoaygymmcy, $ycoqoegmwiiwyeuo); yuoamgkigcwaooqu: $this->rules = []; $cmckowaakauyescq = $this->awgiawwcyyywqokg($nsmgceoqaqogqmuw); $wkusieosoaqkueyi = new DOMXPath($cmckowaakauyescq); array_map(function (Rule $ekuqiqmikiicgoss, $momcykaoccoymeig) use($wkusieosoaqkueyi) { $eisqsskqimiigkay = false; try { $yuumukkaswwoywya = preg_replace("\57\72\x3a\77\x5b\136\x20\x2c\72\135\53\x2f", '', $ekuqiqmikiicgoss->waoqwiosqiqkcocg()); if (!$yuumukkaswwoywya) { goto qaiuogoowcoimwee; } $wiokgkkuiumaumci = $this->gawksoyiyssqgsgu($yuumukkaswwoywya); if (!$wiokgkkuiumaumci) { goto ymwyooosikgokiaa; } $uqyiiwmmueumsgkq = $wkusieosoaqkueyi->query($wiokgkkuiumaumci); $eisqsskqimiigkay = $uqyiiwmmueumsgkq->length > 0; ymwyooosikgokiaa: goto osqgywagokmsicqe; qaiuogoowcoimwee: $eisqsskqimiigkay = true; osqgywagokmsicqe: } catch (Exception $wgaoewqkwgomoaai) { $eisqsskqimiigkay = true; } if (!$eisqsskqimiigkay) { goto qccmuwiwykuegoga; } $this->aimosgcaukumakge($momcykaoccoymeig, $ekuqiqmikiicgoss); qccmuwiwykuegoga: }, $ycoqoegmwiiwyeuo, array_keys($ycoqoegmwiiwyeuo)); } private function wouggsawqayikygu(string $yuumukkaswwoywya, array $gmawcgiwcmsukeiu) { $sociqikgoyemqaac = Manipulate::eeewcumgoiuaygow($gmawcgiwcmsukeiu); return "{$yuumukkaswwoywya}\173{$sociqikgoyemqaac}\x7d"; } public function miaqaycqaamiyemm(array $ckccwysmcauumcei = [], ?string $guuwoyaeoeeaauug = null) { $yuwymayicwwqiske = $guuwoyaeoeeaauug ? $guuwoyaeoeeaauug : ''; $ckccwysmcauumcei = $this->uiuwkseyqcyweacc($ckccwysmcauumcei); return $yuwymayicwwqiske . join('', array_map(function ($iwoiweauwekmisic) { $qsmqqqccagyuaiso = key($iwoiweauwekmisic); $acqqmqmcquukaqsc = reset($iwoiweauwekmisic); return $this->ugcmmyocmiksweyq($qsmqqqccagyuaiso, $acqqmqmcquukaqsc); }, $ckccwysmcauumcei)); } }
