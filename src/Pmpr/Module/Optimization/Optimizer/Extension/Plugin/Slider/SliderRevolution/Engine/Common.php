<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f16a5cc8402             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Extension\Plugin\Slider\SliderRevolution\Engine; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Optimizer\Extension\Plugin\Slider\Common as BaseClass; use RevSliderFunctions; use RevSliderSlide; use RevSliderSlider; abstract class Common extends BaseClass { const gwcwicqkomiaaqwm = "\123\122\x37"; const csiimaowugwesqke = "\123\122\66"; protected $useMultiple = []; protected array $multiple = []; protected string $type = ''; protected $sliderID = 0; protected array $breakpoints = []; protected ?RevSliderSlider $slider = null; public function maqaiymckiuukses($wwqymgsmqsouaoos, string $goqqimcssiyagkwy) { $emkaqwyswammaako = [Constants::mcaucuyeeiwsmmuy => [self::csiimaowugwesqke => "\144", self::gwcwicqkomiaaqwm => 1, Constants::iccwcygaeqmomooo => true, Constants::wikgqsqysyuoykse => 1240], Constants::ssgmqmkaaguimasg => [self::csiimaowugwesqke => "\156", self::gwcwicqkomiaaqwm => 2, Constants::iccwcygaeqmomooo => true, Constants::wikgqsqysyuoykse => 1024], Constants::oceskmgmuoseisoq => [self::csiimaowugwesqke => "\x74", self::gwcwicqkomiaaqwm => 3, Constants::iccwcygaeqmomooo => true, Constants::wikgqsqysyuoykse => 778], Constants::skogicecygyyskkq => [self::csiimaowugwesqke => "\155", self::gwcwicqkomiaaqwm => 4, Constants::iccwcygaeqmomooo => true, Constants::wikgqsqysyuoykse => 480]]; $cucuuiomouyeowaa = new RevSliderFunctions(); $kkyamqaagismicwk = $cucuuiomouyeowaa->get_global_settings(); if (self::gwcwicqkomiaaqwm === $goqqimcssiyagkwy && !empty($wwqymgsmqsouaoos->slider_v7)) { goto eguukwmoyaaieuww; } if (!(self::csiimaowugwesqke === $goqqimcssiyagkwy)) { goto cwomucmeuqqucyge; } $this->slider = $wwqymgsmqsouaoos->slider; cwomucmeuqqucyge: goto kqkeomoaociyuoye; eguukwmoyaaieuww: $this->slider = $wwqymgsmqsouaoos->slider_v7; kqkeomoaociyuoye: foreach ($emkaqwyswammaako as $ymqmyyeuycgmigyo => $gcgsqcoqciockquc) { $eqgoocgaqwqcimie = (int) $cucuuiomouyeowaa->get_val($kkyamqaagismicwk, [Constants::waguuiqqgsysuukq, $ymqmyyeuycgmigyo], $gcgsqcoqciockquc[Constants::wikgqsqysyuoykse]); $this->breakpoints[$gcgsqcoqciockquc[$goqqimcssiyagkwy]] = $eqgoocgaqwqcimie; emomkqccysciiqya: } kswkouussqmqsssy: } public function suceocykemwuyiyg($wwqymgsmqsouaoos) { $nsmgceoqaqogqmuw = $kswaimykcacqyaay = ''; if (!($aimmgaceygcsoowq = $this->slider)) { goto yuccckoykmccwyce; } $this->sliderID = $wwqymgsmqsouaoos->get_html_id(); $qiqeekyyamqqwgyy = null; foreach ($aimmgaceygcsoowq->slides as $ocouqoqqcgauwkuq) { if (!$ocouqoqqcgauwkuq instanceof RevSliderSlide) { goto oikomikqcwikimkw; } if (!("\x75\156\x70\x75\142\x6c\x69\163\x68\x65\x64" !== $ocouqoqqcgauwkuq->get_param(["\160\x75\142\x6c\151\x73\x68", "\x73\x74\x61\x74\x65"]))) { goto ismoiisskiwmmmiu; } $qiqeekyyamqqwgyy = $ocouqoqqcgauwkuq; goto ywykuacciwwkwmmy; ismoiisskiwmmmiu: oikomikqcwikimkw: qgcgucmskokqquwk: } ywykuacciwwkwmmy: if (!$qiqeekyyamqqwgyy) { goto gsiagogeoqwqekei; } $wyumyomqwssswwyk = $ykwokoiuukogqgqs = ''; $this->qiccuiwooiquycsg(); $gkgeoauskcqaemye = $qiqeekyyamqqwgyy->emwyamaoaommokai(); foreach ($gkgeoauskcqaemye as $weyumiemecumqwiy) { if ($this->ywogaocmueoimkuq($weyumiemecumqwiy)) { goto ygqqeqgiaasoimgs; } [$cmwgmqgicwcmsuec, $geaaqoqwaskmcycg] = $this->aaqmykiemciywigu($weyumiemecumqwiy); $wyumyomqwssswwyk .= $cmwgmqgicwcmsuec; $ykwokoiuukogqgqs .= $geaaqoqwaskmcycg; ygqqeqgiaasoimgs: cecamogauimuwoow: } uwmgacqaowuguiow: $maiscoecwcomqack = $this->gqkyomsuwooussyk($qiqeekyyamqqwgyy); $umegawicsoqusacm = $this->aaqmykiemciywigu($maiscoecwcomqack); [$nsmgceoqaqogqmuw, $kswaimykcacqyaay] = $this->cugysyiguwuyagco($wyumyomqwssswwyk, $ykwokoiuukogqgqs, $umegawicsoqusacm); gsiagogeoqwqekei: yuccckoykmccwyce: return [$nsmgceoqaqogqmuw, $kswaimykcacqyaay]; } public function cugysyiguwuyagco($wyumyomqwssswwyk, $ykwokoiuukogqgqs, $maiscoecwcomqack = null) : array { $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $kswaimykcacqyaay = $ykwokoiuukogqgqs; $ykkwecqcmogeaqwc = $swqimwqeweekeusq->uuccukgasskgimsq("\160\x72\x2d\163\x63", [], $wyumyomqwssswwyk); if (!$maiscoecwcomqack) { goto goqkegseiummeiak; } $kswaimykcacqyaay .= $maiscoecwcomqack[1]; $ykkwecqcmogeaqwc .= $maiscoecwcomqack[0]; goqkegseiummeiak: $eyagkkkqkwcuygso = $this->slider->get_params(); foreach ($this->breakpoints as $yqyousioqsoaouig => $ycuyiqagsmgikago) { if (!$this->ammywaiaowqmcssa($yqyousioqsoaouig)) { goto wcqyakkqcgmeqaag; } $uoomaookgsyciacm = $this->yawwsmagaweysggs($yqyousioqsoaouig); [$eygasqqkgouqiuqk, $gyquugwkmmgwmkki] = $this->gkyiccimoqwmoack($eyagkkkqkwcuygso, $yqyousioqsoaouig); $eygasqqkgouqiuqk = $this->iumqmcessgoqomqu($eygasqqkgouqiuqk); $gyquugwkmmgwmkki = $this->iumqmcessgoqomqu($gyquugwkmmgwmkki); $okisissiiqkmgmca = $eygasqqkgouqiuqk; $okisissiiqkmgmca["\160\157\163\151\x74\x69\157\156"] = "\162\x65\154\141\x74\x69\166\x65"; $kswaimykcacqyaay .= $this->yqacumgcswgcesyq($uoomaookgsyciacm, $this->ycgswoucgcsukwaq($eygasqqkgouqiuqk, "\160\x72\55\163") . $this->ycgswoucgcsukwaq($gyquugwkmmgwmkki, "\x70\x72\x2d\163\x63") . $this->ycgswoucgcsukwaq($okisissiiqkmgmca)); wcqyakkqcgmeqaag: mcoyaaiggymgcsgq: } wgeskeagymiuoigi: $kswaimykcacqyaay .= $this->ycgswoucgcsukwaq(["\x66\157\x6e\164" => "\x6e\157\x72\155\x61\x6c\40\156\157\162\155\141\x6c\40\156\157\x72\x6d\141\154\x20\x31\64\x70\170\x2f\61\x20\106\157\x6e\x74\x41\x77\x65\163\x6f\155\x65"], "\151\x5b\x63\154\x61\163\163\136\x3d\42\146\x61\55\42\135"); $nsmgceoqaqogqmuw = $swqimwqeweekeusq->uuccukgasskgimsq("\x70\162\55\163", ["\144\x61\164\x61\55\x69\144" => $this->slider->get_id(), "\144\x61\164\141\55\x74\171\160\145" => $this->type, Constants::gouqcwikiiygyasc => $this->sliderID], $ykkwecqcmogeaqwc); return [$nsmgceoqaqogqmuw, $kswaimykcacqyaay]; } protected function aaqmykiemciywigu(array $weyumiemecumqwiy) : array { $kswaimykcacqyaay = $nsmgceoqaqogqmuw = ''; if (!isset($weyumiemecumqwiy[Constants::squoamkioomemiyi])) { goto iqyqgqwwaaigmuou; } $sqeykgyoooqysmca = $weyumiemecumqwiy[Constants::squoamkioomemiyi]; $aokagokqyuysuksm = $sqeykgyoooqysmca . $this->tsioiooeoyeieqye($weyumiemecumqwiy); $wwgucssaecqekuek = []; $kqywgoqsmuswammk = "\160\162\x2d{$sqeykgyoooqysmca}"; $yuumukkaswwoywya = "{$kqywgoqsmuswammk}\43{$aokagokqyuysuksm}"; $ewgwqamkygiqaawc = $this->yiiekkiwayooaqiy($weyumiemecumqwiy); foreach ($this->breakpoints as $yqyousioqsoaouig => $ycuyiqagsmgikago) { if (!$this->ammywaiaowqmcssa($yqyousioqsoaouig)) { goto uaiqqcsoksgukasg; } $uoomaookgsyciacm = $this->yawwsmagaweysggs($yqyousioqsoaouig); $egkakcquemweqoum = $this->ecsmecuykayuiqas($weyumiemecumqwiy, $yqyousioqsoaouig); $egkakcquemweqoum = $this->iumqmcessgoqomqu($egkakcquemweqoum); $kswaimykcacqyaay .= $this->yqacumgcswgcesyq($uoomaookgsyciacm, $this->ycgswoucgcsukwaq($egkakcquemweqoum, $yuumukkaswwoywya)); uaiqqcsoksgukasg: ckmkeuakisiukage: } coygueuwyguuciww: $wwgucssaecqekuek[Constants::gouqcwikiiygyasc] = $aokagokqyuysuksm; $nsmgceoqaqogqmuw = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->uuccukgasskgimsq($kqywgoqsmuswammk, $wwgucssaecqekuek, $ewgwqamkygiqaawc); iqyqgqwwaaigmuou: return [$nsmgceoqaqogqmuw, $kswaimykcacqyaay]; } protected function yawwsmagaweysggs($momcykaoccoymeig) { $uoomaookgsyciacm = []; $ycuyiqagsmgikago = $this->breakpoints[$momcykaoccoymeig]; switch ($momcykaoccoymeig) { case "\x64": case 1: $uoomaookgsyciacm["\155\151\x6e\55\167\151\144\164\x68"] = $this->uaskqakcsowgmccg($momcykaoccoymeig); goto sqmgqacueqiiekay; case "\156": case "\164": case 2: case 3: $uoomaookgsyciacm["\x6d\x61\170\55\167\x69\144\x74\x68"] = $ycuyiqagsmgikago - 1; $uoomaookgsyciacm["\x6d\x69\156\55\x77\151\144\x74\150"] = $this->uaskqakcsowgmccg($momcykaoccoymeig); goto sqmgqacueqiiekay; case "\x6d": case 4: $uoomaookgsyciacm["\155\141\170\55\x77\151\x64\x74\x68"] = $ycuyiqagsmgikago; goto sqmgqacueqiiekay; } iuoqiecqaoosioey: sqmgqacueqiiekay: return $uoomaookgsyciacm; } protected function yqacumgcswgcesyq(array $uoomaookgsyciacm, string $ekuqiqmikiicgoss) : string { $wocwawaaemuoqmig = ''; $geqcesmqwkeayoiu = "\x20\141\156\144\x20"; foreach ($uoomaookgsyciacm as $oaukocmsckciqaok => $eqgoocgaqwqcimie) { $wocwawaaemuoqmig .= "\50{$oaukocmsckciqaok}\72\x20{$eqgoocgaqwqcimie}\x70\x78\51{$geqcesmqwkeayoiu}"; ukyoyoqcyywgaywg: } woqsaqwocioumoeu: $wocwawaaemuoqmig = rtrim($wocwawaaemuoqmig, $geqcesmqwkeayoiu); return PHP_EOL . "\x40\x6d\145\144\x69\x61\x20{$wocwawaaemuoqmig}\40\x7b{$ekuqiqmikiicgoss}\x7d"; } protected function ycgswoucgcsukwaq(array $egkakcquemweqoum = [], string $yuumukkaswwoywya = '') : string { return $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->sawckkwcugsmokmi("\160\162\55\x73\167\x23\x70\x72\137{$this->sliderID}\40{$yuumukkaswwoywya}", $egkakcquemweqoum); } protected function iumqmcessgoqomqu(array $egkakcquemweqoum) : array { foreach ($egkakcquemweqoum as $oaukocmsckciqaok => $eqgoocgaqwqcimie) { $egkakcquemweqoum[$oaukocmsckciqaok] = $this->awkcisaoyasicqwq($oaukocmsckciqaok, $eqgoocgaqwqcimie); qmqumgawyyqqamoa: } ugowokkqeoeugkqe: return array_filter($egkakcquemweqoum); } protected function awkcisaoyasicqwq($oaukocmsckciqaok, $eqgoocgaqwqcimie) { if (!in_array($eqgoocgaqwqcimie, ["\156\x6f\156\145", "\x23\141"])) { goto ewcyigsymwuuogci; } return ''; ewcyigsymwuuogci: switch ($oaukocmsckciqaok) { case "\142\x61\x63\x6b\x67\162\x6f\165\x6e\x64\55\162\x65\x70\x65\x61\x74": if ($eqgoocgaqwqcimie) { goto mogomwoquuesmcec; } $eqgoocgaqwqcimie = "\156\x6f\55\x72\x65\x70\x65\141\164"; mogomwoquuesmcec: goto auauyoooouqkickk; case "\x74\157\x70": case "\x6c\145\x66\164": case "\162\151\147\150\164": case "\x77\151\x64\164\x68": case "\x68\x65\x69\x67\x68\164": case "\x66\157\x6e\x74\x2d\163\151\172\x65": case "\x6d\x69\156\55\167\151\144\164\150": case "\x6d\x69\156\55\150\145\151\147\150\164": case "\155\141\170\55\x68\145\151\147\150\x74": case "\x74\162\141\156\163\x6c\x61\x74\145\130": case "\164\162\141\x6e\x73\x6c\x61\x74\x65\x59": case "\154\x69\x6e\x65\55\x68\145\151\x67\150\164": case "\x6c\x65\164\164\145\x72\55\163\x70\141\143\x69\x6e\x67": if (!is_numeric($eqgoocgaqwqcimie)) { goto akiuyguwqaukuugs; } $eqgoocgaqwqcimie .= "\160\x78"; akiuyguwqaukuugs: goto auauyoooouqkickk; case "\x62\141\143\153\147\162\x6f\x75\156\x64": case "\x62\x61\143\x6b\x67\x72\157\165\156\144\55\x69\x6d\x61\147\145": if (!$this->caokeucsksukesyo()->gyecsegqciqykomu()->wmcwegoisyeeosqu($eqgoocgaqwqcimie)) { goto emiyocoiuwcucuwu; } $eqgoocgaqwqcimie = "\x75\x72\x6c\50\47{$eqgoocgaqwqcimie}\47\51"; emiyocoiuwcucuwu: goto auauyoooouqkickk; } egcsskmsysqiiikm: auauyoooouqkickk: return $eqgoocgaqwqcimie; } protected function syckcsgsmwciwyyw($amakmumgguksgmum, $mkomwsiykqigmqca, $yqyousioqsoaouig = null, $ggauoeuaesiymgee = null, bool $eswoackiciccgasc = true) { $ymkqyawksmqcgsei = explode("\x2e", $mkomwsiykqigmqca); $eqgoocgaqwqcimie = $amakmumgguksgmum; foreach ($ymkqyawksmqcgsei as $agywggmyywaimwuy) { $eqgoocgaqwqcimie = $eqgoocgaqwqcimie[$agywggmyywaimwuy] ?? null; if ($eqgoocgaqwqcimie) { goto ummsowuaoeyusgoq; } goto cyikoqssoemgwyyk; ummsowuaoeyusgoq: uceksuykgsckwwsu: } cyikoqssoemgwyyk: $ekiuyucoiagmscgy = null; if ($eswoackiciccgasc && isset($this->useMultiple[$mkomwsiykqigmqca])) { goto aegiwggkecgaiocs; } $eswoackiciccgasc = false; goto gamuuauwykwgaegc; aegiwggkecgaiocs: $ekiuyucoiagmscgy = $this->useMultiple[$mkomwsiykqigmqca]; $eswoackiciccgasc = true; gamuuauwykwgaegc: if (null !== $eqgoocgaqwqcimie) { goto amcqceoiqgmwisce; } $eqgoocgaqwqcimie = $ggauoeuaesiymgee; goto csmmiwegweusuimi; amcqceoiqgmwisce: $eqgoocgaqwqcimie = $this->usywmiiwiggsyium($mkomwsiykqigmqca, $eqgoocgaqwqcimie, $yqyousioqsoaouig); $uwoyyuqywiwueaso = (float) $eqgoocgaqwqcimie; if (!($uwoyyuqywiwueaso && !is_array($eqgoocgaqwqcimie) && $eswoackiciccgasc)) { goto eemgoyuiauwuomcw; } if (!($this->qgwuyeagygomiiks(0) !== $yqyousioqsoaouig)) { goto smeeigiqmommceye; } $uooewkwiswcwggao = $this->breakpoints[$yqyousioqsoaouig] ?? 1; $eqgoocgaqwqcimie = "\x63\x61\154\x63\50\x28\x31\60\60\166\x77\x20\57\x20{$uooewkwiswcwggao}\x29\x20\x2a\40{$uwoyyuqywiwueaso}\51"; smeeigiqmommceye: eemgoyuiauwuomcw: if (!(null === $eqgoocgaqwqcimie)) { goto ikgwcgcgcaaaskig; } $eqgoocgaqwqcimie = $ggauoeuaesiymgee; ikgwcgcgcaaaskig: csmmiwegweusuimi: return $eqgoocgaqwqcimie; } public function kegiemoekkccwkoa($egkakcquemweqoum, $iegmsyuiekaayqqy, $ymsweociooeskgwg, $ywcogicgakiqmesa, $uyyeawaokwsoigkk) { $egwaeiwuwuakeugo = in_array($ywcogicgakiqmesa, ["\x6d\151\144\144\154\x65", "\143\x65\156\x74\x65\162"], true); $auiemywmioieumqi = in_array($uyyeawaokwsoigkk, ["\x6d\x69\x64\x64\x6c\x65", "\x63\x65\x6e\x74\x65\x72"], true); if (!($iegmsyuiekaayqqy && $ymsweociooeskgwg)) { goto awwwoikmmaisyisy; } $rqeoqqgeggasimwi = $egkakcquemweqoum["\x74\x72\x61\156\x73\146\x6f\162\x6d"] ?? ''; if ($iegmsyuiekaayqqy === "\x61\x75\x74\x6f" && $ymsweociooeskgwg === "\x61\165\x74\x6f") { goto iqicwseckoykqowm; } $mcmaiqckgiuqayau = ''; $kweggiqywassoewa = "\x30\160\x78"; $lwqumgsaiiooowqw = "\x30\x70\x78"; if ($egwaeiwuwuakeugo && $auiemywmioieumqi) { goto cwkouaeieiyiykim; } if (!$egwaeiwuwuakeugo) { goto uqsoseuiwgukywas; } $kweggiqywassoewa = "\x35\60\45"; $mcmaiqckgiuqayau = "\164\x72\x61\x6e\163\154\x61\x74\145\131\x28\55\x35\60\45\51"; uqsoseuiwgukywas: if (!$auiemywmioieumqi) { goto wgaggmmmgeumiouk; } $lwqumgsaiiooowqw = "\65\x30\45"; $mcmaiqckgiuqayau = "\x74\162\x61\156\x73\x6c\x61\x74\x65\x58\50\x2d\x35\x30\x25\x29"; wgaggmmmgeumiouk: goto uawcmuiummigeqea; cwkouaeieiyiykim: $mcmaiqckgiuqayau = "\164\162\x61\x6e\163\154\x61\164\x65\x28\55\65\x30\45\54\40\x2d\65\x30\45\51"; $kweggiqywassoewa = "\x35\60\x25"; $lwqumgsaiiooowqw = "\65\60\45"; uawcmuiummigeqea: if (!$egwaeiwuwuakeugo) { goto qmmieiquoegeaqok; } $ywcogicgakiqmesa = "\x74\x6f\160"; qmmieiquoegeaqok: if (!$auiemywmioieumqi) { goto smmgkqeacswimyas; } $uyyeawaokwsoigkk = "\x6c\145\x66\164"; smmgkqeacswimyas: if (!($ywcogicgakiqmesa === "\x62\x6f\164\164\157\x6d")) { goto kmwwamokwgagomye; } $ymsweociooeskgwg = (int) $ymsweociooeskgwg * -1 . "\160\170"; kmwwamokwgagomye: if (!($uyyeawaokwsoigkk === "\x72\x69\x67\x68\x74")) { goto qquugwwesqswouyc; } $iegmsyuiekaayqqy = (int) $iegmsyuiekaayqqy * -1 . "\160\170"; qquugwwesqswouyc: $egkakcquemweqoum[$ywcogicgakiqmesa] = $kweggiqywassoewa; $egkakcquemweqoum[$uyyeawaokwsoigkk] = $lwqumgsaiiooowqw; if (!($iegmsyuiekaayqqy === "\141\x75\164\x6f")) { goto ewugkyumwuomukie; } $iegmsyuiekaayqqy = "\x30"; ewugkyumwuomukie: if (!($ymsweociooeskgwg === "\x61\165\x74\x6f")) { goto wwigiswokyqkamsu; } $ymsweociooeskgwg = "\60"; wwigiswokyqkamsu: $iegmsyuiekaayqqy = $this->awkcisaoyasicqwq("\164\162\141\156\163\154\141\164\145\x58", $iegmsyuiekaayqqy); $ymsweociooeskgwg = $this->awkcisaoyasicqwq("\164\162\141\x6e\163\154\x61\164\145\131", $ymsweociooeskgwg); $rqeoqqgeggasimwi = "{$mcmaiqckgiuqayau}\40\164\x72\141\x6e\163\x6c\141\164\145\130\50{$iegmsyuiekaayqqy}\x29\x20\x74\x72\141\x6e\163\x6c\x61\164\145\131\x28{$ymsweociooeskgwg}\x29\40{$rqeoqqgeggasimwi}"; goto yisooseceggsgyqw; iqicwseckoykqowm: if ($egwaeiwuwuakeugo && $auiemywmioieumqi) { goto auqmeqswuuioemge; } if ($egwaeiwuwuakeugo) { goto imsougccawciqsuw; } $egkakcquemweqoum[$ywcogicgakiqmesa] = "\60\x70\x78"; goto syaegaiuaioeaocq; imsougccawciqsuw: $egkakcquemweqoum["\x74\x6f\x70"] = "\x35\60\x25"; $rqeoqqgeggasimwi = "\164\162\141\156\x73\154\141\164\x65\131\50\55\65\60\x25\x29\x20{$rqeoqqgeggasimwi}"; syaegaiuaioeaocq: if ($auiemywmioieumqi) { goto ckkecwwioeywccwa; } $egkakcquemweqoum[$uyyeawaokwsoigkk] = "\x30\x70\170"; goto koceayskwssiisyi; ckkecwwioeywccwa: $egkakcquemweqoum["\x6c\145\x66\164"] = "\65\60\45"; $rqeoqqgeggasimwi = "\x74\x72\141\156\163\x6c\x61\x74\x65\x58\50\x2d\65\x30\x25\51\x20{$rqeoqqgeggasimwi}"; koceayskwssiisyi: goto iiwcuqeosmwgogus; auqmeqswuuioemge: $egkakcquemweqoum["\x74\x6f\160"] = "\x35\x30\x25"; $egkakcquemweqoum["\x6c\145\146\x74"] = "\x35\x30\45"; $rqeoqqgeggasimwi = "\x74\x72\x61\x6e\163\154\141\164\145\x28\55\65\x30\x25\54\40\55\65\60\x25\x29\40{$rqeoqqgeggasimwi}"; iiwcuqeosmwgogus: yisooseceggsgyqw: $egkakcquemweqoum["\164\x72\141\x6e\163\x66\x6f\x72\x6d"] = $rqeoqqgeggasimwi; awwwoikmmaisyisy: return $egkakcquemweqoum; } private function sywoiecuewkusuei($yqyousioqsoaouig) : float { if (!(null === $yqyousioqsoaouig)) { goto cuamsmyiamaicwou; } return 1; cuamsmyiamaicwou: if (isset($this->multiple[$yqyousioqsoaouig])) { goto aqoyesawuayoeuag; } $kkikuskasemkcygg = 1; if (!($oaesoigqgysugcsw = $this->wemcakmkkqkoyeow($yqyousioqsoaouig))) { goto essokuoguqegyeua; } $kkikuskasemkcygg = min(1, $oaesoigqgysugcsw / $this->breakpoints[$yqyousioqsoaouig] ?? 1); essokuoguqegyeua: $this->multiple[$yqyousioqsoaouig] = $kkikuskasemkcygg; aqoyesawuayoeuag: return $this->multiple[$yqyousioqsoaouig]; } protected function wemcakmkkqkoyeow($yqyousioqsoaouig, int $ggauoeuaesiymgee = 0) : int { $uoegiucegiomamuy = $this->contentSize["\167\151\x64\x74\150"][$yqyousioqsoaouig] ?? $ggauoeuaesiymgee; $migimkookwymayqu = $this->contentSize["\x77\151\144\x74\150"][$this->qgwuyeagygomiiks(0)] ?? $ggauoeuaesiymgee; return (int) min($migimkookwymayqu, $uoegiucegiomamuy); } protected function gauiuwiicosisakg($yqyousioqsoaouig, $ggauoeuaesiymgee = 0) : int { $aiyckuicisckwges = $this->contentSize["\150\145\x69\x67\150\x74"][$yqyousioqsoaouig] ?? $ggauoeuaesiymgee; $uumegessqcyuayoy = $this->contentSize["\150\145\151\x67\150\x74"][$this->qgwuyeagygomiiks(0)] ?? $ggauoeuaesiymgee; return (int) min($uumegessqcyuayoy, $aiyckuicisckwges); } protected function cogayqawswyasksk($eqgoocgaqwqcimie) : string { $iyqygqimawuycsyq = ''; if (!is_string($eqgoocgaqwqcimie)) { goto uyisqeuweamsqwgg; } if (!preg_match("\57\x28\x70\170\x7c\162\x65\x6d\x7c\x65\x6d\174\45\174\166\x68\x7c\166\x77\174\x76\155\151\x6e\x7c\166\155\141\170\x7c\x61\x75\164\157\51\44\x2f", $eqgoocgaqwqcimie, $meyiiwcswqmuggyg)) { goto agoikageaeouqaqi; } $iyqygqimawuycsyq = $meyiiwcswqmuggyg[0]; agoikageaeouqaqi: if (!($iyqygqimawuycsyq === $eqgoocgaqwqcimie)) { goto ssoooeigmwugyycm; } $iyqygqimawuycsyq = ''; ssoooeigmwugyycm: uyisqeuweamsqwgg: return $iyqygqimawuycsyq; } protected function ooeaouwceyecskck($equckmqsamsmgcwy, $eqgoocgaqwqcimie, $eusockqasqqmoess, $ekiuyucoiagmscgy = null) { if (!$eqgoocgaqwqcimie) { goto mawsaauyquacosus; } $iyqygqimawuycsyq = $this->cogayqawswyasksk($equckmqsamsmgcwy); if (!($eusockqasqqmoess !== 1 && $iyqygqimawuycsyq !== "\45")) { goto icasgckmuawkaksg; } $eqgoocgaqwqcimie *= $eusockqasqqmoess; icasgckmuawkaksg: if (!is_callable($ekiuyucoiagmscgy)) { goto aeywmsqkisycgqce; } $eqgoocgaqwqcimie = $ekiuyucoiagmscgy($eqgoocgaqwqcimie); aeywmsqkisycgqce: $eqgoocgaqwqcimie = (float) $eqgoocgaqwqcimie . $iyqygqimawuycsyq; mawsaauyquacosus: return $eqgoocgaqwqcimie; } protected function qgwuyeagygomiiks($momcykaoccoymeig, string $kuuiuigeacouwmaa = '') { $yygmoeguaqyumuui = array_keys($this->breakpoints); $eqgoocgaqwqcimie = $yygmoeguaqyumuui[$momcykaoccoymeig] ?? null; if (!($eqgoocgaqwqcimie === null)) { goto cwkwkgkqasguwscg; } $eqgoocgaqwqcimie = $momcykaoccoymeig; cwkwkgkqasguwscg: $mcmggciwccagmumi = array_search($eqgoocgaqwqcimie, $yygmoeguaqyumuui, true); $acuayeeoiwokyomo = 0; switch ($kuuiuigeacouwmaa) { case "\160\162\145\166": $acuayeeoiwokyomo = -1; goto makqqsaegsesgquq; case "\x6e\145\170\164": $acuayeeoiwokyomo = 1; goto makqqsaegsesgquq; } symwoekuwqcmowwo: makqqsaegsesgquq: return $yygmoeguaqyumuui[$mcmggciwccagmumi + $acuayeeoiwokyomo] ?? null; } protected function ammywaiaowqmcssa($yqyousioqsoaouig) : bool { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); if ($eiicaiwgqkgsekce->amkiaqeamgywsygm() && in_array($yqyousioqsoaouig, [4, "\x34", "\x6d"], true)) { goto koaeayomowaiywam; } if ($eiicaiwgqkgsekce->amkiaqeamgywsygm()) { goto emsuycioaeoeeeqo; } return true; emsuycioaeoeeeqo: goto ikwamukqumiokwkk; koaeayomowaiywam: return true; ikwamukqumiokwkk: return false; } protected abstract function tsioiooeoyeieqye(array $weyumiemecumqwiy) : string; protected abstract function yqooukeogwwoqeau($weyumiemecumqwiy, $mkomwsiykqigmqca, $yqyousioqsoaouig = null) : string; protected abstract function uaskqakcsowgmccg($momcykaoccoymeig); protected abstract function wgogsacggwigyuee($momcykaoccoymeig); protected abstract function yiiekkiwayooaqiy($weyumiemecumqwiy) : string; protected abstract function gqkyomsuwooussyk($ocouqoqqcgauwkuq) : array; protected abstract function ywogaocmueoimkuq($weyumiemecumqwiy) : bool; protected abstract function qooeaookuemoqecm($eqgoocgaqwqcimie, ?string $uusmaiomayssaecw = null); protected abstract function euisqgeeigoksqui($eqgoocgaqwqcimie, $yqyousioqsoaouig) : bool; protected abstract function usywmiiwiggsyium(string $mkomwsiykqigmqca, $eqgoocgaqwqcimie, $yqyousioqsoaouig); protected abstract function ecsmecuykayuiqas($weyumiemecumqwiy, $yqyousioqsoaouig) : array; protected abstract function gkyiccimoqwmoack($eyagkkkqkwcuygso, $yqyousioqsoaouig) : array; }
