<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c623ad3a21f             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Asset\Critical\CSS; use DOMElement; use Pmpr\Common\Foundation\DOMCrawler; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Package\Optimization\Asset\Critical\CSS\Data\Rule; use Symfony\Component\CssSelector\CssSelectorConverter; use DOMDocument; use DOMXPath; use Exception; class Extractor extends Common { protected ?array $rules = []; protected CssSelectorConverter $converter; public function __construct() { $this->converter = new CssSelectorConverter(); parent::__construct(); } public function uosumyqkueiykgiu() : ?array { return $this->rules; } public function aimosgcaukumakge($uusmaiomayssaecw, ?Rule $ekuqiqmikiicgoss) : self { if ($uusmaiomayssaecw) { goto wmycwscioqackeig; } $this->rules[] = $ekuqiqmikiicgoss; goto wammkmaqucqagqww; wmycwscioqackeig: $this->rules[$uusmaiomayssaecw] = $ekuqiqmikiicgoss; wammkmaqucqagqww: return $this; } public function uacmswwoiqckokew() : ?CssSelectorConverter { return $this->converter; } protected function awgiawwcyyywqokg(string $nsmgceoqaqogqmuw) { $cmckowaakauyescq = new DOMDocument("\x31\56\x30", "\125\124\106\55\x38"); $eaockgywgswwksqo = libxml_use_internal_errors(true); if (!$nsmgceoqaqogqmuw) { goto iuooqassskiyeemo; } $cmckowaakauyescq->gseoscwkykeqiegc(mb_convert_encoding($nsmgceoqaqogqmuw, "\110\x54\x4d\114\x2d\x45\x4e\124\x49\x54\x49\105\123", "\125\x54\x46\55\x38")); iuooqassskiyeemo: libxml_use_internal_errors($eaockgywgswwksqo); $cmckowaakauyescq->formatOutput = true; return $cmckowaakauyescq; } private function iuekyyeesukysksy(string $owqaeesoaygymmcy) { return trailingslashit(Manipulate::guugkagukymokgas()) . $owqaeesoaygymmcy . "\x2e\x63\x61\x63\x68\x65"; } private function kumkwyksmeikauow(string $owqaeesoaygymmcy) { $acqqmqmcquukaqsc = []; $qogsmwakwacwqogk = $this->iuekyyeesukysksy($owqaeesoaygymmcy); if (!$this->kcciqwskewsuaemk()->exists($qogsmwakwacwqogk)) { goto eokikuciuqkyauum; } $ewgwqamkygiqaawc = $this->kcciqwskewsuaemk()->souwykwwmyygqyqi($qogsmwakwacwqogk); if (!$ewgwqamkygiqaawc) { goto imykswegcuekqwio; } $uomewyckeuqoqocu = unserialize($ewgwqamkygiqaawc); if (!(is_array($uomewyckeuqoqocu) && $uomewyckeuqoqocu)) { goto cquyuwsisgqscemm; } $acqqmqmcquukaqsc = $uomewyckeuqoqocu; cquyuwsisgqscemm: imykswegcuekqwio: eokikuciuqkyauum: return $acqqmqmcquukaqsc; } private function uiuwkseyqcyweacc(array $acqqmqmcquukaqsc = []) { $qgsciwocmkqyokws = []; foreach ($acqqmqmcquukaqsc as $ekuqiqmikiicgoss) { if (!$ekuqiqmikiicgoss instanceof Rule) { goto smkakiyekkqoggao; } $qgsciwocmkqyokws[$ekuqiqmikiicgoss->mmmcswscsiecscwg()][$ekuqiqmikiicgoss->acskcgywyymegikq()][] = $ekuqiqmikiicgoss; smkakiyekkqoggao: mqaamqyoywyekiko: } ykuqeyogsasokqis: return $qgsciwocmkqyokws; } private function gawksoyiyssqgsgu(?string $yuumukkaswwoywya) { try { $wiokgkkuiumaumci = $this->uacmswwoiqckokew()->qmukceakycqioksa($yuumukkaswwoywya); } catch (Exception $umqmkkqcmcaswmwu) { if (!($umqmkkqcmcaswmwu->sagusgigmkeysock() !== "\x50\x73\x65\x75\144\157\55\145\154\x65\x6d\145\156\164\x73\x20\141\162\x65\x20\156\x6f\x74\x20\x73\x75\160\160\x6f\162\x74\145\144\x2e")) { goto zggweikegkcgkmma; } return false; zggweikegkcgkmma: try { $wgqgsuoqkcgaugmc = explode("\x3a", $yuumukkaswwoywya); $wiokgkkuiumaumci = $this->uacmswwoiqckokew()->qmukceakycqioksa((string) reset($wgqgsuoqkcgaugmc)); } catch (Exception $iewosgggaueeyymg) { return false; } } return $wiokgkkuiumaumci; } public function gsgoaqaskggcakag(?string $migiiksoiymissge) { $kigowwqauiumummw = true; if (!($fkgqmwkusywysaus = Manipulate::uigyooscomiegggk($migiiksoiymissge))) { goto yisoawmmammassqk; } $sogksuscggsicmac = wp_remote_get($migiiksoiymissge); $kigowwqauiumummw = $this->extract(ManipulateArray::get($sogksuscggsicmac, "\142\x6f\144\x79"), $fkgqmwkusywysaus); yisoawmmammassqk: return $kigowwqauiumummw; } public function extract(?string $nsmgceoqaqogqmuw, ?string $wkcwykowmmmwioqs, $ksaameoqigiaoigg = false) { $kigowwqauiumummw = false; $caokcyqaukiegscs = null; if (!$wkcwykowmmmwioqs) { goto umccwcqwkoiaakmu; } $icyaoosaykeskiuu = []; DOMCrawler::qaqiuweqoukkgqsk($nsmgceoqaqogqmuw, "\x6c\151\156\x6b\x5b\x72\145\154\75\x73\x74\171\154\145\x73\150\145\145\x74\x5d", function (DOMElement $ymyisaeksssueeik) use(&$icyaoosaykeskiuu) { $geecqyososceumsk = DOMCrawler::guaqqcyuaeucmgoy($ymyisaeksssueeik, "\x68\x72\145\146"); if ($geecqyososceumsk) { goto gcsosokicycukoyc; } $geecqyososceumsk = DOMCrawler::guaqqcyuaeucmgoy($ymyisaeksssueeik, "\x64\141\x74\141\55\x73\x6f\165\162\x63\145"); gcsosokicycukoyc: if (!($ewgwqamkygiqaawc = $this->miocmcoykayoyyau()->souwykwwmyygqyqi($geecqyososceumsk))) { goto seqammocqkyswaim; } $icyaoosaykeskiuu[$geecqyososceumsk] = $ewgwqamkygiqaawc; seqammocqkyswaim: return $ymyisaeksssueeik; }); if (!$icyaoosaykeskiuu) { goto coskmuqsawiaeyqg; } $caokcyqaukiegscs = $this->kcgmkaaqomwcaemk($nsmgceoqaqogqmuw, implode('', $icyaoosaykeskiuu), implode('', array_keys($icyaoosaykeskiuu))); $caokcyqaukiegscs = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\160\x74\x5f\x6d\151\156\151\x66\171\137\x63\x73\163"), $caokcyqaukiegscs); $caokcyqaukiegscs = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\x70\x74\x5f\141\x64\x76\x61\156\143\145\137\x6d\151\156\x69\146\x79\x5f\143\163\x73"), $caokcyqaukiegscs); $caokcyqaukiegscs = preg_replace("\x2f\50\133\77\x21\73\x5d\x29\x5c\61\x2b\x2f", "\x24\x31", $caokcyqaukiegscs); $kigowwqauiumummw = $this->kcciqwskewsuaemk()->kwsmkgyoyaqecwuu($wkcwykowmmmwioqs, $caokcyqaukiegscs); coskmuqsawiaeyqg: umccwcqwkoiaakmu: if (!($ksaameoqigiaoigg && $caokcyqaukiegscs)) { goto ekgkiioywougquka; } $kigowwqauiumummw = $caokcyqaukiegscs; ekgkiioywougquka: return $kigowwqauiumummw; } private function eymeukaqaygeyoge(string $owqaeesoaygymmcy, array $acqqmqmcquukaqsc) { $mkomwsiykqigmqca = Manipulate::guugkagukymokgas(); if ($this->kcciqwskewsuaemk()->exists($mkomwsiykqigmqca)) { goto wyyowcsciaqkuiuq; } $this->kcciqwskewsuaemk()->mkdir($mkomwsiykqigmqca); wyyowcsciaqkuiuq: $qogsmwakwacwqogk = $this->iuekyyeesukysksy($owqaeesoaygymmcy); $this->kcciqwskewsuaemk()->touch($qogsmwakwacwqogk); $this->kcciqwskewsuaemk()->kwsmkgyoyaqecwuu($qogsmwakwacwqogk, serialize($acqqmqmcquukaqsc)); } public function kcgmkaaqomwcaemk(?string $nsmgceoqaqogqmuw, ?string $icyaoosaykeskiuu, string $sewwikwiigsgqiaq = "\143\141\143\x68\x65\x5f\153\x65\171") { if ($this->uosumyqkueiykgiu()) { goto imquwacukaswoyka; } $this->cegmggqwiqwqcgsk($nsmgceoqaqogqmuw, $icyaoosaykeskiuu, $sewwikwiigsgqiaq); imquwacukaswoyka: return $this->miaqaycqaamiyemm($this->uosumyqkueiykgiu()); } private function ugcmmyocmiksweyq(string $qsmqqqccagyuaiso, array $acqqmqmcquukaqsc) { $ewgwqamkygiqaawc = join('', array_map(function (Rule $ekuqiqmikiicgoss) { return $this->wouggsawqayikygu($ekuqiqmikiicgoss->waoqwiosqiqkcocg(), $ekuqiqmikiicgoss->kikmasogcikysciu()); }, $acqqmqmcquukaqsc)); if (!($qsmqqqccagyuaiso != '')) { goto smksoismyouykeoa; } $ewgwqamkygiqaawc = "{$qsmqqqccagyuaiso}\x7b{$ewgwqamkygiqaawc}\x7d"; smksoismyouykeoa: return $ewgwqamkygiqaawc; } public function cegmggqwiqwqcgsk(?string $nsmgceoqaqogqmuw, ?string $icyaoosaykeskiuu, string $sewwikwiigsgqiaq) { $owqaeesoaygymmcy = md5($sewwikwiigsgqiaq); $ycoqoegmwiiwyeuo = $this->kumkwyksmeikauow($owqaeesoaygymmcy); if ($ycoqoegmwiiwyeuo) { goto qwgkwokcyocqiyee; } $ycoqoegmwiiwyeuo = Manipulate::uosumyqkueiykgiu($icyaoosaykeskiuu); $this->eymeukaqaygeyoge($owqaeesoaygymmcy, $ycoqoegmwiiwyeuo); qwgkwokcyocqiyee: $this->rules = []; $cmckowaakauyescq = $this->awgiawwcyyywqokg($nsmgceoqaqogqmuw); $wkusieosoaqkueyi = new DOMXPath($cmckowaakauyescq); array_map(function (Rule $ekuqiqmikiicgoss, $momcykaoccoymeig) use($wkusieosoaqkueyi) { $eisqsskqimiigkay = false; try { $yuumukkaswwoywya = preg_replace("\x2f\72\72\77\133\x5e\x20\54\x3a\x5d\x2b\57", '', $ekuqiqmikiicgoss->waoqwiosqiqkcocg()); if (!$yuumukkaswwoywya) { goto gcoeaokkagaaeuse; } $wiokgkkuiumaumci = $this->gawksoyiyssqgsgu($yuumukkaswwoywya); if (!$wiokgkkuiumaumci) { goto maeccckgcsaaumkw; } $uqyiiwmmueumsgkq = $wkusieosoaqkueyi->query($wiokgkkuiumaumci); $eisqsskqimiigkay = $uqyiiwmmueumsgkq->length > 0; maeccckgcsaaumkw: goto kcqueaewmayywqeq; gcoeaokkagaaeuse: $eisqsskqimiigkay = true; kcqueaewmayywqeq: } catch (Exception $wgaoewqkwgomoaai) { $eisqsskqimiigkay = true; } if (!$eisqsskqimiigkay) { goto uagsgicwwcakecwq; } $this->aimosgcaukumakge($momcykaoccoymeig, $ekuqiqmikiicgoss); uagsgicwwcakecwq: }, $ycoqoegmwiiwyeuo, array_keys($ycoqoegmwiiwyeuo)); } private function wouggsawqayikygu(string $yuumukkaswwoywya, array $gmawcgiwcmsukeiu) { $sociqikgoyemqaac = Manipulate::eeewcumgoiuaygow($gmawcgiwcmsukeiu); return "{$yuumukkaswwoywya}\173{$sociqikgoyemqaac}\175"; } public function miaqaycqaamiyemm(array $ckccwysmcauumcei = [], ?string $guuwoyaeoeeaauug = null) { $yuwymayicwwqiske = $guuwoyaeoeeaauug ? $guuwoyaeoeeaauug : ''; $ckccwysmcauumcei = $this->uiuwkseyqcyweacc($ckccwysmcauumcei); return $yuwymayicwwqiske . join('', array_map(function ($iwoiweauwekmisic) { $qsmqqqccagyuaiso = key($iwoiweauwekmisic); $acqqmqmcquukaqsc = reset($iwoiweauwekmisic); return $this->ugcmmyocmiksweyq($qsmqqqccagyuaiso, $acqqmqmcquukaqsc); }, $ckccwysmcauumcei)); } }
