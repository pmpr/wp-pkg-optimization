<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63ffbf6dd4c36             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Asset\Critical\CSS; use Pmpr\Common\Foundation\Filesystem; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\Optimization\Asset\Critical\CSS\Data\Property; use Pmpr\Module\Optimization\Asset\Critical\CSS\Data\Rule; use Pmpr\Module\Optimization\Asset\Critical\Manipulate as BaseClass; class Manipulate extends BaseClass { public static function uigyooscomiegggk(?string $migiiksoiymissge = null) { $fkgqmwkusywysaus = Manipulate::csyeqcysyissgowm($migiiksoiymissge); if (!Filesystem::symcgieuakksimmu()->exists($fkgqmwkusywysaus)) { goto wwswmaewcaisauei; } $fkgqmwkusywysaus = false; wwswmaewcaisauei: return $fkgqmwkusywysaus; } public static function aaoqaaaoaewyokkw(?string $migiiksoiymissge = null) { $fkgqmwkusywysaus = Manipulate::csyeqcysyissgowm($migiiksoiymissge); if (Filesystem::symcgieuakksimmu()->exists($fkgqmwkusywysaus)) { goto wsemeeocquawyauo; } $fkgqmwkusywysaus = false; wsemeeocquawyauo: return $fkgqmwkusywysaus; } public static function guugkagukymokgas(?string $mkomwsiykqigmqca = null) : string { return parent::guugkagukymokgas("\x2f\x63\163\x73"); } public static function csyeqcysyissgowm(?string $migiiksoiymissge = null, ?string $mkomwsiykqigmqca = null) : ?string { return parent::csyeqcysyissgowm($migiiksoiymissge, "\x2f\x63\163\x73"); } public static function ogmguwgoqkqkkisa($iesegggmcccqyquo) { preg_match_all("\x2f\x40\x63\150\x61\x72\163\x65\164\40\42\x5b\136\x22\x5d\53\x2b\42\x3b\57", $iesegggmcccqyquo, $meyiiwcswqmuggyg); if (!($guuwoyaeoeeaauug = reset($meyiiwcswqmuggyg))) { goto ocgkwqqmgasuoies; } $guuwoyaeoeeaauug = reset($guuwoyaeoeeaauug); ocgkwqqmgasuoies: return $guuwoyaeoeeaauug; } private static function ieckauqqqiksqksc(string $iesegggmcccqyquo) : string { $iesegggmcccqyquo = preg_replace("\x2f\100\x63\x68\x61\162\x73\145\164\x20\x22\x5b\x5e\42\135\x2b\x2b\x22\x3b\x2f", '', $iesegggmcccqyquo); return self::sqsemkikkiaaqeig($iesegggmcccqyquo); } private static function sqsemkikkiaaqeig(string $sociqikgoyemqaac) : string { $sociqikgoyemqaac = str_replace(["\xd", "\12"], '', $sociqikgoyemqaac); $sociqikgoyemqaac = str_replace(["\x9"], "\x20", $sociqikgoyemqaac); $sociqikgoyemqaac = preg_replace("\x7c\x2f\134\52\x2e\52\x3f\x5c\x2a\57\174", '', $sociqikgoyemqaac); $sociqikgoyemqaac = preg_replace("\x2f\134\x73\x5c\x73\x2b\x2f", "\40", $sociqikgoyemqaac); $sociqikgoyemqaac = trim($sociqikgoyemqaac); return rtrim($sociqikgoyemqaac, "\73"); } public static function oowkueqscaoakmck(string $icyaoosaykeskiuu) : array { $ymkqyawksmqcgsei = []; $oqaacwamwqqwsmgc = []; $qiacwcmymioiqyia = "\x2f\100\155\x65\x64\x69\x61\56\52\x3f\x5b\136\173\135\x2b\134\x7b\50\133\x5c\x73\x5c\123\x5d\53\x3f\134\x7d\51\x5c\x73\52\x5c\175\x7c\100\153\x65\171\x66\162\x61\x6d\x65\x73\x2e\x2a\x3f\x5b\x5e\x7b\x5d\x2b\134\173\50\x5b\134\163\x5c\123\x5d\53\77\134\175\51\134\x73\52\134\175\174\100\x73\x75\160\x70\x6f\162\164\x73\x2e\x2a\x3f\133\136\x7b\x5d\x2b\x5c\x7b\x28\133\134\x73\134\x53\135\x2b\x3f\x5c\175\51\134\x73\x2a\134\175\174\x40\x66\157\156\x74\x2d\146\x61\143\145\56\52\77\133\136\173\135\x2b\50\x5b\x5c\163\134\x53\135\x2b\x3f\x29\x5c\x73\x2a\x5c\x7d\x2f"; preg_match_all($qiacwcmymioiqyia, $icyaoosaykeskiuu, $oqaacwamwqqwsmgc); $oqaacwamwqqwsmgc = reset($oqaacwamwqqwsmgc); foreach ($oqaacwamwqqwsmgc as $momcykaoccoymeig => $mwcwkymkagwwoyow) { $skueimwaqauscmoc = explode($mwcwkymkagwwoyow, $icyaoosaykeskiuu); $uusmaiomayssaecw = array_key_first($skueimwaqauscmoc); $ymkqyawksmqcgsei[] = ManipulateArray::unset($skueimwaqauscmoc, $uusmaiomayssaecw); $ymkqyawksmqcgsei[] = $mwcwkymkagwwoyow; if ($skueimwaqauscmoc && is_array($skueimwaqauscmoc)) { goto kwoyiysciqumswcy; } $icyaoosaykeskiuu = ''; goto aaogeemgkogagkai; kwoyiysciqumswcy: $icyaoosaykeskiuu = join('', $skueimwaqauscmoc); aaogeemgkogagkai: ooysmgyeqoiesgqm: } wmaeicoyyciuaiuy: $ymkqyawksmqcgsei[] = $icyaoosaykeskiuu; $ymkqyawksmqcgsei = array_filter(array_filter($ymkqyawksmqcgsei, "\164\x72\x69\x6d")); $ycoqoegmwiiwyeuo = []; $umwmyskgiuekmemq = []; foreach ($ymkqyawksmqcgsei as $momcykaoccoymeig => $agywggmyywaimwuy) { $sogksuscggsicmac = []; if (!preg_match($qiacwcmymioiqyia, $agywggmyywaimwuy)) { goto magymcqykamwqigw; } $kmmsieagmcwqiako = substr($agywggmyywaimwuy, 0, strpos($agywggmyywaimwuy, "\x7b")); if (!(trim($kmmsieagmcwqiako) !== "\100\155\145\x64\151\141\40\160\162\x69\156\164")) { goto oiiqqgyqmggyiums; } $mckgwmgmgigaiuwg = substr($agywggmyywaimwuy, strpos($agywggmyywaimwuy, "\x7b") + 1); $mckgwmgmgigaiuwg = substr($mckgwmgmgigaiuwg, 0, -1); $sogksuscggsicmac = (array) explode("\175", $mckgwmgmgigaiuwg); $umwmyskgiuekmemq[][$kmmsieagmcwqiako] = array_diff($sogksuscggsicmac, $ycoqoegmwiiwyeuo); oiiqqgyqmggyiums: goto ukogwqiuuuakkawy; magymcqykamwqigw: $sogksuscggsicmac = (array) explode("\175", $agywggmyywaimwuy); $umwmyskgiuekmemq[][''] = array_diff($sogksuscggsicmac, $ycoqoegmwiiwyeuo); ukogwqiuuuakkawy: if (!$sogksuscggsicmac) { goto gicmaqmuscawegie; } $ycoqoegmwiiwyeuo = array_merge($ycoqoegmwiiwyeuo, $sogksuscggsicmac); gicmaqmuscawegie: isqwwmikecauwyuc: } qqmmycmsoqegcqqw: return $umwmyskgiuekmemq; } public static function musqiscwwwkyuosg(string $gmawcgiwcmsukeiu) : array { $gmawcgiwcmsukeiu = self::sqsemkikkiaaqeig($gmawcgiwcmsukeiu); $oammesyieqmwuwyi = (array) preg_split("\57\73\x28\77\75\50\x5b\x5e\x5c\x28\135\x2a\134\x28\x5b\x5e\x5c\x28\x5d\x2a\134\x29\x29\52\133\x5e\134\x29\x5d\52\44\51\50\77\75\x28\x5b\x5e\134\x22\135\52\x5c\x22\x5b\x5e\x5c\42\x5d\x2a\134\x22\51\52\x5b\136\x5c\42\135\x2a\x24\x29\50\x3f\x3d\x28\133\136\134\x27\135\52\x5c\47\x5b\x5e\x5c\x27\x5d\52\x5c\47\x29\52\133\136\x5c\47\x5d\x2a\x24\x29\x2f", $gmawcgiwcmsukeiu); return array_values($oammesyieqmwuwyi); } public static function eeewcumgoiuaygow(array $gmawcgiwcmsukeiu) : string { $ukgsssmgkskkuoow = []; foreach ($gmawcgiwcmsukeiu as $oaukocmsckciqaok) { if (!$oaukocmsckciqaok instanceof Property) { goto gygqgauaceiuawkq; } $ukgsssmgkskkuoow[] = trim($oaukocmsckciqaok->__toString(), "\73") . "\x3b"; gygqgauaceiuawkq: ayamomygygmgwgkg: } oymyqcoekqyuiguq: return trim(implode("\40", $ukgsssmgkskkuoow), "\x3b"); } public static function mysegoauqwiccoeo(array $acqqmqmcquukaqsc) : array { $mguygkocuoaoqqkg = []; foreach ($acqqmqmcquukaqsc as $umwqusowiqmyseom => $ssaikkeuusoagacm) { foreach (reset($ssaikkeuusoagacm) as $ekuqiqmikiicgoss) { $ekuqiqmikiicgoss = self::wsokikoeayomqico(key($ssaikkeuusoagacm), $ekuqiqmikiicgoss, $umwqusowiqmyseom); $mguygkocuoaoqqkg = array_merge($mguygkocuoaoqqkg, $ekuqiqmikiicgoss); jkgouewqysmscmqs: } asqqqqakiagymemk: iyeswoaqkaeggiiy: } ucksaiwquekagyqe: return $mguygkocuoaoqqkg; } public static function uosumyqkueiykgiu(string $iesegggmcccqyquo) { $iesegggmcccqyquo = self::ieckauqqqiksqksc($iesegggmcccqyquo); $acqqmqmcquukaqsc = self::oowkueqscaoakmck($iesegggmcccqyquo); return self::mysegoauqwiccoeo($acqqmqmcquukaqsc); } public static function wsokikoeayomqico(string $qsmqqqccagyuaiso, string $ekuqiqmikiicgoss, int $umwqusowiqmyseom) : array { $ekuqiqmikiicgoss = self::sqsemkikkiaaqeig($ekuqiqmikiicgoss); $ukgsssmgkskkuoow = explode("\x7b", $ekuqiqmikiicgoss); $wcwugqcsqsmmiuqi = 0; $gkywegkkgiaaqqom = 1; $acqqmqmcquukaqsc = []; if (!isset($ukgsssmgkskkuoow[$gkywegkkgiaaqqom])) { goto iquecygaakmiomeg; } $sgksuwkwyimqgaii = (array) explode("\x2c", trim($ukgsssmgkskkuoow[$wcwugqcsqsmmiuqi])); $gmawcgiwcmsukeiu = self::musqiscwwwkyuosg($ukgsssmgkskkuoow[$gkywegkkgiaaqqom]); foreach ($sgksuwkwyimqgaii as $yuumukkaswwoywya) { $yuumukkaswwoywya = trim($yuumukkaswwoywya); $gmawcgiwcmsukeiu = self::gowgwikayqgeqgca($gmawcgiwcmsukeiu); $acqqmqmcquukaqsc[] = new Rule($qsmqqqccagyuaiso, $yuumukkaswwoywya, $gmawcgiwcmsukeiu, $umwqusowiqmyseom); kceeuicccqscwgsu: } sgiuwkisugmewmcs: iquecygaakmiomeg: return $acqqmqmcquukaqsc; } public static function gowgwikayqgeqgca(array $gmawcgiwcmsukeiu) : array { $mguygkocuoaoqqkg = []; foreach ($gmawcgiwcmsukeiu as $oaukocmsckciqaok) { $mksyucucyswaukig = self::gcamqqaucqewaucu($oaukocmsckciqaok); if (!$mksyucucyswaukig) { goto yeemsgmumygmumqw; } $mguygkocuoaoqqkg[] = $mksyucucyswaukig; yeemsgmumygmumqw: yimeskeioamqmuwg: } eacysqsegwcqawsa: return $mguygkocuoaoqqkg; } public static function gcamqqaucqewaucu(string $oaukocmsckciqaok) : ?Property { $mksyucucyswaukig = null; if (!(strpos($oaukocmsckciqaok, "\72") !== false)) { goto wkaoyycsoeoyqcae; } [$ymqmyyeuycgmigyo, $eqgoocgaqwqcimie] = array_map("\x74\162\x69\x6d", explode("\x3a", $oaukocmsckciqaok, 2)); $mksyucucyswaukig = new Property($ymqmyyeuycgmigyo, $eqgoocgaqwqcimie); wkaoyycsoeoyqcae: return $mksyucucyswaukig; } }
