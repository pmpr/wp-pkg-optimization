<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c62928722d7             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Asset\Critical\CSS; use Pmpr\Common\Foundation\Filesystem; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Package\Optimization\Asset\Critical\CSS\Data\Property; use Pmpr\Package\Optimization\Asset\Critical\CSS\Data\Rule; use Pmpr\Package\Optimization\Asset\Critical\Manipulate as BaseClass; class Manipulate extends BaseClass { public static function uigyooscomiegggk(?string $migiiksoiymissge = null) { $fkgqmwkusywysaus = Manipulate::csyeqcysyissgowm($migiiksoiymissge); if (!Filesystem::symcgieuakksimmu()->exists($fkgqmwkusywysaus)) { goto eykiuqsamowqykam; } $fkgqmwkusywysaus = false; eykiuqsamowqykam: return $fkgqmwkusywysaus; } public static function aaoqaaaoaewyokkw(?string $migiiksoiymissge = null) { $fkgqmwkusywysaus = Manipulate::csyeqcysyissgowm($migiiksoiymissge); if (Filesystem::symcgieuakksimmu()->exists($fkgqmwkusywysaus)) { goto ywqouwqomiqwoquu; } $fkgqmwkusywysaus = false; ywqouwqomiqwoquu: return $fkgqmwkusywysaus; } public static function guugkagukymokgas(?string $mkomwsiykqigmqca = null) : string { return parent::guugkagukymokgas("\57\x63\163\163"); } public static function csyeqcysyissgowm(?string $migiiksoiymissge = null, ?string $mkomwsiykqigmqca = null) : ?string { return parent::csyeqcysyissgowm($migiiksoiymissge, "\x2f\x63\163\163"); } public static function ogmguwgoqkqkkisa($iesegggmcccqyquo) { preg_match_all("\57\x40\x63\150\141\162\x73\145\164\x20\x22\133\x5e\x22\135\53\x2b\42\x3b\x2f", $iesegggmcccqyquo, $meyiiwcswqmuggyg); if (!($guuwoyaeoeeaauug = reset($meyiiwcswqmuggyg))) { goto qcwkymcgqacaaywc; } $guuwoyaeoeeaauug = reset($guuwoyaeoeeaauug); qcwkymcgqacaaywc: return $guuwoyaeoeeaauug; } private static function ieckauqqqiksqksc(string $iesegggmcccqyquo) : string { $iesegggmcccqyquo = preg_replace("\x2f\100\x63\x68\x61\x72\163\x65\x74\x20\42\x5b\x5e\x22\x5d\53\53\42\73\57", '', $iesegggmcccqyquo); return self::sqsemkikkiaaqeig($iesegggmcccqyquo); } private static function sqsemkikkiaaqeig(string $sociqikgoyemqaac) : string { $sociqikgoyemqaac = str_replace(["\15", "\12"], '', $sociqikgoyemqaac); $sociqikgoyemqaac = str_replace(["\11"], "\40", $sociqikgoyemqaac); $sociqikgoyemqaac = preg_replace("\174\x2f\x5c\x2a\56\52\77\x5c\52\57\x7c", '', $sociqikgoyemqaac); $sociqikgoyemqaac = preg_replace("\x2f\134\163\x5c\163\53\57", "\40", $sociqikgoyemqaac); $sociqikgoyemqaac = trim($sociqikgoyemqaac); return rtrim($sociqikgoyemqaac, "\x3b"); } public static function oowkueqscaoakmck(string $icyaoosaykeskiuu) : array { $ymkqyawksmqcgsei = []; $oqaacwamwqqwsmgc = []; $qiacwcmymioiqyia = "\57\x40\155\145\144\151\x61\56\52\x3f\x5b\x5e\x7b\x5d\x2b\x5c\x7b\50\133\134\x73\x5c\123\135\x2b\77\134\175\x29\x5c\x73\52\x5c\x7d\174\100\153\145\171\x66\162\x61\x6d\145\163\x2e\52\77\x5b\x5e\173\135\53\x5c\x7b\50\x5b\x5c\x73\134\x53\x5d\x2b\77\134\175\51\134\x73\52\134\x7d\x7c\x40\x73\165\160\x70\x6f\162\164\x73\56\52\77\133\x5e\173\x5d\x2b\134\173\x28\x5b\x5c\163\x5c\123\x5d\53\x3f\134\175\x29\134\163\x2a\x5c\175\174\100\x66\157\x6e\x74\55\x66\141\143\145\x2e\52\77\x5b\x5e\173\135\x2b\50\x5b\134\163\x5c\123\135\53\x3f\51\x5c\x73\52\134\x7d\57"; preg_match_all($qiacwcmymioiqyia, $icyaoosaykeskiuu, $oqaacwamwqqwsmgc); $oqaacwamwqqwsmgc = reset($oqaacwamwqqwsmgc); foreach ($oqaacwamwqqwsmgc as $momcykaoccoymeig => $mwcwkymkagwwoyow) { $skueimwaqauscmoc = explode($mwcwkymkagwwoyow, $icyaoosaykeskiuu); $uusmaiomayssaecw = array_key_first($skueimwaqauscmoc); $ymkqyawksmqcgsei[] = ManipulateArray::unset($skueimwaqauscmoc, $uusmaiomayssaecw); $ymkqyawksmqcgsei[] = $mwcwkymkagwwoyow; if ($skueimwaqauscmoc && is_array($skueimwaqauscmoc)) { goto yyyyawaqcowsgqcs; } $icyaoosaykeskiuu = ''; goto usmagcaocwiugqum; yyyyawaqcowsgqcs: $icyaoosaykeskiuu = join('', $skueimwaqauscmoc); usmagcaocwiugqum: qwsmiaegmcwuskwi: } wmcucyuieqgqisis: $ymkqyawksmqcgsei[] = $icyaoosaykeskiuu; $ymkqyawksmqcgsei = array_filter(array_filter($ymkqyawksmqcgsei, "\x74\162\x69\x6d")); $ycoqoegmwiiwyeuo = []; $umwmyskgiuekmemq = []; foreach ($ymkqyawksmqcgsei as $momcykaoccoymeig => $agywggmyywaimwuy) { $sogksuscggsicmac = []; if (!preg_match($qiacwcmymioiqyia, $agywggmyywaimwuy)) { goto iuooqassskiyeemo; } $kmmsieagmcwqiako = substr($agywggmyywaimwuy, 0, strpos($agywggmyywaimwuy, "\x7b")); if (!(trim($kmmsieagmcwqiako) !== "\x40\155\x65\x64\151\141\40\x70\162\151\156\164")) { goto wammkmaqucqagqww; } $mckgwmgmgigaiuwg = substr($agywggmyywaimwuy, strpos($agywggmyywaimwuy, "\x7b") + 1); $mckgwmgmgigaiuwg = substr($mckgwmgmgigaiuwg, 0, -1); $sogksuscggsicmac = (array) explode("\175", $mckgwmgmgigaiuwg); $umwmyskgiuekmemq[][$kmmsieagmcwqiako] = array_diff($sogksuscggsicmac, $ycoqoegmwiiwyeuo); wammkmaqucqagqww: goto cquyuwsisgqscemm; iuooqassskiyeemo: $sogksuscggsicmac = (array) explode("\175", $agywggmyywaimwuy); $umwmyskgiuekmemq[][''] = array_diff($sogksuscggsicmac, $ycoqoegmwiiwyeuo); cquyuwsisgqscemm: if (!$sogksuscggsicmac) { goto imykswegcuekqwio; } $ycoqoegmwiiwyeuo = array_merge($ycoqoegmwiiwyeuo, $sogksuscggsicmac); imykswegcuekqwio: wmycwscioqackeig: } sikmqkecsiyciaei: return $umwmyskgiuekmemq; } public static function musqiscwwwkyuosg(string $gmawcgiwcmsukeiu) : array { $gmawcgiwcmsukeiu = self::sqsemkikkiaaqeig($gmawcgiwcmsukeiu); $oammesyieqmwuwyi = (array) preg_split("\57\x3b\x28\77\x3d\x28\133\136\x5c\x28\x5d\x2a\134\x28\133\136\x5c\x28\x5d\52\x5c\x29\x29\52\133\136\x5c\x29\135\52\x24\x29\x28\77\x3d\50\x5b\136\x5c\x22\x5d\52\x5c\42\x5b\x5e\134\x22\x5d\52\134\x22\x29\x2a\133\136\134\42\x5d\52\x24\51\x28\77\x3d\50\x5b\136\134\x27\135\52\x5c\47\x5b\x5e\x5c\x27\135\x2a\134\x27\x29\x2a\133\x5e\134\x27\x5d\52\44\x29\57", $gmawcgiwcmsukeiu); return array_values($oammesyieqmwuwyi); } public static function eeewcumgoiuaygow(array $gmawcgiwcmsukeiu) : string { $ukgsssmgkskkuoow = []; foreach ($gmawcgiwcmsukeiu as $oaukocmsckciqaok) { if (!$oaukocmsckciqaok instanceof Property) { goto mqaamqyoywyekiko; } $ukgsssmgkskkuoow[] = trim($oaukocmsckciqaok->__toString(), "\x3b") . "\73"; mqaamqyoywyekiko: ykuqeyogsasokqis: } eokikuciuqkyauum: return trim(implode("\x20", $ukgsssmgkskkuoow), "\x3b"); } public static function mysegoauqwiccoeo(array $acqqmqmcquukaqsc) : array { $mguygkocuoaoqqkg = []; foreach ($acqqmqmcquukaqsc as $umwqusowiqmyseom => $ssaikkeuusoagacm) { foreach (reset($ssaikkeuusoagacm) as $ekuqiqmikiicgoss) { $ekuqiqmikiicgoss = self::wsokikoeayomqico(key($ssaikkeuusoagacm), $ekuqiqmikiicgoss, $umwqusowiqmyseom); $mguygkocuoaoqqkg = array_merge($mguygkocuoaoqqkg, $ekuqiqmikiicgoss); gcsosokicycukoyc: } yisoawmmammassqk: zggweikegkcgkmma: } smkakiyekkqoggao: return $mguygkocuoaoqqkg; } public static function uosumyqkueiykgiu(string $iesegggmcccqyquo) { $iesegggmcccqyquo = self::ieckauqqqiksqksc($iesegggmcccqyquo); $acqqmqmcquukaqsc = self::oowkueqscaoakmck($iesegggmcccqyquo); return self::mysegoauqwiccoeo($acqqmqmcquukaqsc); } public static function wsokikoeayomqico(string $qsmqqqccagyuaiso, string $ekuqiqmikiicgoss, int $umwqusowiqmyseom) : array { $ekuqiqmikiicgoss = self::sqsemkikkiaaqeig($ekuqiqmikiicgoss); $ukgsssmgkskkuoow = explode("\173", $ekuqiqmikiicgoss); $wcwugqcsqsmmiuqi = 0; $gkywegkkgiaaqqom = 1; $acqqmqmcquukaqsc = []; if (!isset($ukgsssmgkskkuoow[$gkywegkkgiaaqqom])) { goto umccwcqwkoiaakmu; } $sgksuwkwyimqgaii = (array) explode("\54", trim($ukgsssmgkskkuoow[$wcwugqcsqsmmiuqi])); $gmawcgiwcmsukeiu = self::musqiscwwwkyuosg($ukgsssmgkskkuoow[$gkywegkkgiaaqqom]); foreach ($sgksuwkwyimqgaii as $yuumukkaswwoywya) { $yuumukkaswwoywya = trim($yuumukkaswwoywya); $gmawcgiwcmsukeiu = self::gowgwikayqgeqgca($gmawcgiwcmsukeiu); $acqqmqmcquukaqsc[] = new Rule($qsmqqqccagyuaiso, $yuumukkaswwoywya, $gmawcgiwcmsukeiu, $umwqusowiqmyseom); coskmuqsawiaeyqg: } seqammocqkyswaim: umccwcqwkoiaakmu: return $acqqmqmcquukaqsc; } public static function gowgwikayqgeqgca(array $gmawcgiwcmsukeiu) : array { $mguygkocuoaoqqkg = []; foreach ($gmawcgiwcmsukeiu as $oaukocmsckciqaok) { $mksyucucyswaukig = self::gcamqqaucqewaucu($oaukocmsckciqaok); if (!$mksyucucyswaukig) { goto imquwacukaswoyka; } $mguygkocuoaoqqkg[] = $mksyucucyswaukig; imquwacukaswoyka: wyyowcsciaqkuiuq: } ekgkiioywougquka: return $mguygkocuoaoqqkg; } public static function gcamqqaucqewaucu(string $oaukocmsckciqaok) : ?Property { $mksyucucyswaukig = null; if (!(strpos($oaukocmsckciqaok, "\72") !== false)) { goto smksoismyouykeoa; } [$ymqmyyeuycgmigyo, $eqgoocgaqwqcimie] = array_map("\x74\x72\151\155", explode("\x3a", $oaukocmsckciqaok, 2)); $mksyucucyswaukig = new Property($ymqmyyeuycgmigyo, $eqgoocgaqwqcimie); smksoismyouykeoa: return $mksyucucyswaukig; } }
