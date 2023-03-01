<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63ffbdfd59a7a             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Asset\Critical\CSS; use DOMElement; use Pmpr\Common\Foundation\DOMCrawler; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\Optimization\Asset\Critical\CSS\Data\Rule; use Symfony\Component\CssSelector\CssSelectorConverter; use DOMDocument; use DOMXPath; use Exception; class Extractor extends Common { protected ?array $rules = []; protected CssSelectorConverter $converter; public function __construct() { $this->converter = new CssSelectorConverter(); parent::__construct(); } public function uosumyqkueiykgiu() : ?array { return $this->rules; } public function aimosgcaukumakge($uusmaiomayssaecw, ?Rule $ekuqiqmikiicgoss) : self { if ($uusmaiomayssaecw) { goto awwaiioyywmokwsm; } $this->rules[] = $ekuqiqmikiicgoss; goto ckwmkquuyyugigom; awwaiioyywmokwsm: $this->rules[$uusmaiomayssaecw] = $ekuqiqmikiicgoss; ckwmkquuyyugigom: return $this; } public function uacmswwoiqckokew() : ?CssSelectorConverter { return $this->converter; } protected function awgiawwcyyywqokg(string $nsmgceoqaqogqmuw) { $cmckowaakauyescq = new DOMDocument("\x31\56\60", "\x55\124\106\x2d\x38"); $eaockgywgswwksqo = libxml_use_internal_errors(true); if (!$nsmgceoqaqogqmuw) { goto cumeycwmuuqawwyu; } $cmckowaakauyescq->gseoscwkykeqiegc(mb_convert_encoding($nsmgceoqaqogqmuw, "\110\124\x4d\x4c\55\x45\116\x54\x49\x54\x49\x45\123", "\125\124\x46\x2d\70")); cumeycwmuuqawwyu: libxml_use_internal_errors($eaockgywgswwksqo); $cmckowaakauyescq->formatOutput = true; return $cmckowaakauyescq; } private function iuekyyeesukysksy(string $owqaeesoaygymmcy) { return trailingslashit(Manipulate::guugkagukymokgas()) . $owqaeesoaygymmcy . "\56\143\141\x63\x68\145"; } private function kumkwyksmeikauow(string $owqaeesoaygymmcy) { $acqqmqmcquukaqsc = []; $qogsmwakwacwqogk = $this->iuekyyeesukysksy($owqaeesoaygymmcy); if (!$this->kcciqwskewsuaemk()->exists($qogsmwakwacwqogk)) { goto goaowamiyyamueiw; } $ewgwqamkygiqaawc = $this->kcciqwskewsuaemk()->souwykwwmyygqyqi($qogsmwakwacwqogk); if (!$ewgwqamkygiqaawc) { goto gsqcoqqsioiyoykq; } $uomewyckeuqoqocu = unserialize($ewgwqamkygiqaawc); if (!(is_array($uomewyckeuqoqocu) && $uomewyckeuqoqocu)) { goto uaicwcqwauosmsqm; } $acqqmqmcquukaqsc = $uomewyckeuqoqocu; uaicwcqwauosmsqm: gsqcoqqsioiyoykq: goaowamiyyamueiw: return $acqqmqmcquukaqsc; } private function uiuwkseyqcyweacc(array $acqqmqmcquukaqsc = []) { $qgsciwocmkqyokws = []; foreach ($acqqmqmcquukaqsc as $ekuqiqmikiicgoss) { if (!$ekuqiqmikiicgoss instanceof Rule) { goto owisckseoogsugqq; } $qgsciwocmkqyokws[$ekuqiqmikiicgoss->mmmcswscsiecscwg()][$ekuqiqmikiicgoss->acskcgywyymegikq()][] = $ekuqiqmikiicgoss; owisckseoogsugqq: ysweqawmawicakeo: } iaomqomgiwiegoca: return $qgsciwocmkqyokws; } private function gawksoyiyssqgsgu(?string $yuumukkaswwoywya) { try { $wiokgkkuiumaumci = $this->uacmswwoiqckokew()->qmukceakycqioksa($yuumukkaswwoywya); } catch (Exception $umqmkkqcmcaswmwu) { if (!($umqmkkqcmcaswmwu->sagusgigmkeysock() !== "\120\163\145\165\x64\x6f\55\x65\154\x65\155\145\x6e\x74\163\x20\x61\x72\x65\x20\x6e\157\164\40\163\165\x70\160\157\x72\164\145\144\56")) { goto ookcgumoacskyymy; } return false; ookcgumoacskyymy: try { $wgqgsuoqkcgaugmc = explode("\72", $yuumukkaswwoywya); $wiokgkkuiumaumci = $this->uacmswwoiqckokew()->qmukceakycqioksa((string) reset($wgqgsuoqkcgaugmc)); } catch (Exception $iewosgggaueeyymg) { return false; } } return $wiokgkkuiumaumci; } public function gsgoaqaskggcakag(?string $migiiksoiymissge) { $kigowwqauiumummw = true; if (!($fkgqmwkusywysaus = Manipulate::uigyooscomiegggk($migiiksoiymissge))) { goto cuseccewekgcgkyg; } $sogksuscggsicmac = wp_remote_get($migiiksoiymissge); $kigowwqauiumummw = $this->extract(ManipulateArray::get($sogksuscggsicmac, "\x62\x6f\144\x79"), $fkgqmwkusywysaus); cuseccewekgcgkyg: return $kigowwqauiumummw; } public function extract(?string $nsmgceoqaqogqmuw, ?string $wkcwykowmmmwioqs, $ksaameoqigiaoigg = false) { $kigowwqauiumummw = false; $caokcyqaukiegscs = null; if (!$wkcwykowmmmwioqs) { goto acesyuieuuqwgkwm; } $icyaoosaykeskiuu = []; DOMCrawler::qaqiuweqoukkgqsk($nsmgceoqaqogqmuw, "\x6c\x69\x6e\153\x5b\162\145\x6c\x3d\163\x74\x79\154\x65\163\x68\x65\145\x74\135", function (DOMElement $ymyisaeksssueeik) use(&$icyaoosaykeskiuu) { $geecqyososceumsk = DOMCrawler::guaqqcyuaeucmgoy($ymyisaeksssueeik, "\150\x72\145\x66"); if ($geecqyososceumsk) { goto kgysyqkoqgwmoscq; } $geecqyososceumsk = DOMCrawler::guaqqcyuaeucmgoy($ymyisaeksssueeik, "\x64\141\164\141\55\x73\x6f\165\x72\x63\145"); kgysyqkoqgwmoscq: if (!($ewgwqamkygiqaawc = $this->miocmcoykayoyyau()->souwykwwmyygqyqi($geecqyososceumsk))) { goto makomwwyomweyamm; } $icyaoosaykeskiuu[$geecqyososceumsk] = $ewgwqamkygiqaawc; makomwwyomweyamm: return $ymyisaeksssueeik; }); if (!$icyaoosaykeskiuu) { goto oqwcmgwimeisusoe; } $caokcyqaukiegscs = $this->kcgmkaaqomwcaemk($nsmgceoqaqogqmuw, implode('', $icyaoosaykeskiuu), implode('', array_keys($icyaoosaykeskiuu))); $caokcyqaukiegscs = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\160\164\x5f\155\x69\156\x69\146\x79\137\x63\x73\x73"), $caokcyqaukiegscs); $caokcyqaukiegscs = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\160\164\137\x61\x64\166\x61\x6e\143\145\137\155\151\x6e\x69\146\171\x5f\x63\x73\x73"), $caokcyqaukiegscs); $caokcyqaukiegscs = preg_replace("\x2f\x28\x5b\77\x21\73\135\x29\x5c\x31\x2b\57", "\44\61", $caokcyqaukiegscs); $kigowwqauiumummw = $this->kcciqwskewsuaemk()->kwsmkgyoyaqecwuu($wkcwykowmmmwioqs, $caokcyqaukiegscs); oqwcmgwimeisusoe: acesyuieuuqwgkwm: if (!($ksaameoqigiaoigg && $caokcyqaukiegscs)) { goto asaowisseacciyia; } $kigowwqauiumummw = $caokcyqaukiegscs; asaowisseacciyia: return $kigowwqauiumummw; } private function eymeukaqaygeyoge(string $owqaeesoaygymmcy, array $acqqmqmcquukaqsc) { $mkomwsiykqigmqca = Manipulate::guugkagukymokgas(); if ($this->kcciqwskewsuaemk()->exists($mkomwsiykqigmqca)) { goto qiaaqkymeuuueoqk; } $this->kcciqwskewsuaemk()->mkdir($mkomwsiykqigmqca); qiaaqkymeuuueoqk: $qogsmwakwacwqogk = $this->iuekyyeesukysksy($owqaeesoaygymmcy); $this->kcciqwskewsuaemk()->touch($qogsmwakwacwqogk); $this->kcciqwskewsuaemk()->kwsmkgyoyaqecwuu($qogsmwakwacwqogk, serialize($acqqmqmcquukaqsc)); } public function kcgmkaaqomwcaemk(?string $nsmgceoqaqogqmuw, ?string $icyaoosaykeskiuu, string $sewwikwiigsgqiaq = "\x63\x61\143\x68\x65\137\153\x65\x79") { if ($this->uosumyqkueiykgiu()) { goto ugswokwmkumcmigc; } $this->cegmggqwiqwqcgsk($nsmgceoqaqogqmuw, $icyaoosaykeskiuu, $sewwikwiigsgqiaq); ugswokwmkumcmigc: return $this->miaqaycqaamiyemm($this->uosumyqkueiykgiu()); } private function ugcmmyocmiksweyq(string $qsmqqqccagyuaiso, array $acqqmqmcquukaqsc) { $ewgwqamkygiqaawc = join('', array_map(function (Rule $ekuqiqmikiicgoss) { return $this->wouggsawqayikygu($ekuqiqmikiicgoss->waoqwiosqiqkcocg(), $ekuqiqmikiicgoss->kikmasogcikysciu()); }, $acqqmqmcquukaqsc)); if (!($qsmqqqccagyuaiso != '')) { goto gwiaimosqoiquwkc; } $ewgwqamkygiqaawc = "{$qsmqqqccagyuaiso}\173{$ewgwqamkygiqaawc}\x7d"; gwiaimosqoiquwkc: return $ewgwqamkygiqaawc; } public function cegmggqwiqwqcgsk(?string $nsmgceoqaqogqmuw, ?string $icyaoosaykeskiuu, string $sewwikwiigsgqiaq) { $owqaeesoaygymmcy = md5($sewwikwiigsgqiaq); $ycoqoegmwiiwyeuo = $this->kumkwyksmeikauow($owqaeesoaygymmcy); if ($ycoqoegmwiiwyeuo) { goto owgakkqgckqcegoi; } $ycoqoegmwiiwyeuo = Manipulate::uosumyqkueiykgiu($icyaoosaykeskiuu); $this->eymeukaqaygeyoge($owqaeesoaygymmcy, $ycoqoegmwiiwyeuo); owgakkqgckqcegoi: $this->rules = []; $cmckowaakauyescq = $this->awgiawwcyyywqokg($nsmgceoqaqogqmuw); $wkusieosoaqkueyi = new DOMXPath($cmckowaakauyescq); array_map(function (Rule $ekuqiqmikiicgoss, $momcykaoccoymeig) use($wkusieosoaqkueyi) { $eisqsskqimiigkay = false; try { $yuumukkaswwoywya = preg_replace("\x2f\72\x3a\77\x5b\x5e\x20\x2c\72\x5d\53\57", '', $ekuqiqmikiicgoss->waoqwiosqiqkcocg()); if (!$yuumukkaswwoywya) { goto qumkwsqqocooyuoq; } $wiokgkkuiumaumci = $this->gawksoyiyssqgsgu($yuumukkaswwoywya); if (!$wiokgkkuiumaumci) { goto cigesysuauaiccms; } $uqyiiwmmueumsgkq = $wkusieosoaqkueyi->query($wiokgkkuiumaumci); $eisqsskqimiigkay = $uqyiiwmmueumsgkq->length > 0; cigesysuauaiccms: goto gcskyqewysqaceeg; qumkwsqqocooyuoq: $eisqsskqimiigkay = true; gcskyqewysqaceeg: } catch (Exception $wgaoewqkwgomoaai) { $eisqsskqimiigkay = true; } if (!$eisqsskqimiigkay) { goto kkewoqqowugagwoy; } $this->aimosgcaukumakge($momcykaoccoymeig, $ekuqiqmikiicgoss); kkewoqqowugagwoy: }, $ycoqoegmwiiwyeuo, array_keys($ycoqoegmwiiwyeuo)); } private function wouggsawqayikygu(string $yuumukkaswwoywya, array $gmawcgiwcmsukeiu) { $sociqikgoyemqaac = Manipulate::eeewcumgoiuaygow($gmawcgiwcmsukeiu); return "{$yuumukkaswwoywya}\173{$sociqikgoyemqaac}\x7d"; } public function miaqaycqaamiyemm(array $ckccwysmcauumcei = [], ?string $guuwoyaeoeeaauug = null) { $yuwymayicwwqiske = $guuwoyaeoeeaauug ? $guuwoyaeoeeaauug : ''; $ckccwysmcauumcei = $this->uiuwkseyqcyweacc($ckccwysmcauumcei); return $yuwymayicwwqiske . join('', array_map(function ($iwoiweauwekmisic) { $qsmqqqccagyuaiso = key($iwoiweauwekmisic); $acqqmqmcquukaqsc = reset($iwoiweauwekmisic); return $this->ugcmmyocmiksweyq($qsmqqqccagyuaiso, $acqqmqmcquukaqsc); }, $ckccwysmcauumcei)); } }
