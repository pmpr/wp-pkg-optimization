<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             624c0a8a4dc93             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Asset\Critical\CSS; use Pmpr\Common\Foundation\Filesystem; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\Optimization\Asset\Critical\CSS\Data\Property; use Pmpr\Module\Optimization\Asset\Critical\CSS\Data\Rule; use Pmpr\Module\Optimization\Asset\Critical\Manipulate as BaseClass; class Manipulate extends BaseClass { public static function uigyooscomiegggk(?string $migiiksoiymissge = null) { $fkgqmwkusywysaus = Manipulate::csyeqcysyissgowm($migiiksoiymissge); if (!Filesystem::symcgieuakksimmu()->exists($fkgqmwkusywysaus)) { goto syiyemqigyugagks; } $fkgqmwkusywysaus = false; syiyemqigyugagks: return $fkgqmwkusywysaus; } public static function aaoqaaaoaewyokkw(?string $migiiksoiymissge = null) { $fkgqmwkusywysaus = Manipulate::csyeqcysyissgowm($migiiksoiymissge); if (Filesystem::symcgieuakksimmu()->exists($fkgqmwkusywysaus)) { goto woqkgwmkmqsuceuy; } $fkgqmwkusywysaus = false; woqkgwmkmqsuceuy: return $fkgqmwkusywysaus; } public static function guugkagukymokgas(?string $mkomwsiykqigmqca = null) : string { return parent::guugkagukymokgas("\57\143\163\x73"); } public static function csyeqcysyissgowm(?string $migiiksoiymissge = null, ?string $mkomwsiykqigmqca = null) : ?string { return parent::csyeqcysyissgowm($migiiksoiymissge, "\57\x63\163\x73"); } public static function ogmguwgoqkqkkisa($iesegggmcccqyquo) { preg_match_all("\57\100\143\150\141\162\163\145\164\x20\42\133\136\42\135\53\53\x22\73\57", $iesegggmcccqyquo, $meyiiwcswqmuggyg); if (!($guuwoyaeoeeaauug = reset($meyiiwcswqmuggyg))) { goto imwiyqcekcykscui; } $guuwoyaeoeeaauug = reset($guuwoyaeoeeaauug); imwiyqcekcykscui: return $guuwoyaeoeeaauug; } private static function ieckauqqqiksqksc(string $iesegggmcccqyquo) : string { $iesegggmcccqyquo = preg_replace("\x2f\x40\x63\x68\x61\x72\163\145\x74\x20\42\x5b\136\x22\x5d\x2b\53\x22\x3b\57", '', $iesegggmcccqyquo); return self::sqsemkikkiaaqeig($iesegggmcccqyquo); } private static function sqsemkikkiaaqeig(string $sociqikgoyemqaac) : string { $sociqikgoyemqaac = str_replace(["\xd", "\xa"], '', $sociqikgoyemqaac); $sociqikgoyemqaac = str_replace(["\x9"], "\40", $sociqikgoyemqaac); $sociqikgoyemqaac = preg_replace("\174\57\x5c\52\x2e\52\77\x5c\x2a\57\x7c", '', $sociqikgoyemqaac); $sociqikgoyemqaac = preg_replace("\57\134\x73\134\163\53\x2f", "\x20", $sociqikgoyemqaac); $sociqikgoyemqaac = trim($sociqikgoyemqaac); return rtrim($sociqikgoyemqaac, "\x3b"); } public static function oowkueqscaoakmck(string $icyaoosaykeskiuu) : array { $ymkqyawksmqcgsei = []; $oqaacwamwqqwsmgc = []; $qiacwcmymioiqyia = "\57\100\155\145\x64\151\x61\x2e\x2a\77\x5b\136\173\x5d\53\134\x7b\x28\x5b\134\163\x5c\123\x5d\53\x3f\134\175\x29\134\163\52\x5c\x7d\174\100\153\x65\x79\x66\x72\x61\155\x65\163\56\52\x3f\x5b\x5e\173\135\53\134\x7b\50\133\x5c\x73\x5c\x53\135\x2b\77\134\x7d\x29\134\163\52\x5c\x7d\174\x40\x73\x75\160\160\157\162\x74\163\56\52\x3f\133\x5e\173\x5d\x2b\134\173\x28\133\x5c\x73\x5c\x53\x5d\53\x3f\x5c\175\51\x5c\x73\x2a\x5c\175\x7c\100\146\x6f\156\164\x2d\x66\x61\x63\145\56\52\x3f\x5b\x5e\173\135\53\50\133\134\x73\x5c\x53\135\x2b\77\51\x5c\x73\52\x5c\175\57"; preg_match_all($qiacwcmymioiqyia, $icyaoosaykeskiuu, $oqaacwamwqqwsmgc); $oqaacwamwqqwsmgc = reset($oqaacwamwqqwsmgc); foreach ($oqaacwamwqqwsmgc as $momcykaoccoymeig => $mwcwkymkagwwoyow) { $skueimwaqauscmoc = explode($mwcwkymkagwwoyow, $icyaoosaykeskiuu); $uusmaiomayssaecw = array_key_first($skueimwaqauscmoc); $ymkqyawksmqcgsei[] = ManipulateArray::unset($skueimwaqauscmoc, $uusmaiomayssaecw); $ymkqyawksmqcgsei[] = $mwcwkymkagwwoyow; if ($skueimwaqauscmoc && is_array($skueimwaqauscmoc)) { goto geasgywiogoeamek; } $icyaoosaykeskiuu = ''; goto qweyymyuuqwcmkqg; geasgywiogoeamek: $icyaoosaykeskiuu = join('', $skueimwaqauscmoc); qweyymyuuqwcmkqg: omsmaougqkqigogw: } umemmgiwimkymaya: $ymkqyawksmqcgsei[] = $icyaoosaykeskiuu; $ymkqyawksmqcgsei = array_filter(array_filter($ymkqyawksmqcgsei, "\x74\x72\x69\155")); $ycoqoegmwiiwyeuo = []; $umwmyskgiuekmemq = []; foreach ($ymkqyawksmqcgsei as $momcykaoccoymeig => $agywggmyywaimwuy) { $sogksuscggsicmac = []; if (!preg_match($qiacwcmymioiqyia, $agywggmyywaimwuy)) { goto iuyagqakcieasiua; } $kmmsieagmcwqiako = substr($agywggmyywaimwuy, 0, strpos($agywggmyywaimwuy, "\173")); if (!(trim($kmmsieagmcwqiako) !== "\x40\155\145\x64\151\141\x20\x70\x72\151\x6e\x74")) { goto ucaoyoamaycsiacq; } $mckgwmgmgigaiuwg = substr($agywggmyywaimwuy, strpos($agywggmyywaimwuy, "\x7b") + 1); $mckgwmgmgigaiuwg = substr($mckgwmgmgigaiuwg, 0, -1); $sogksuscggsicmac = (array) explode("\175", $mckgwmgmgigaiuwg); $umwmyskgiuekmemq[][$kmmsieagmcwqiako] = array_diff($sogksuscggsicmac, $ycoqoegmwiiwyeuo); ucaoyoamaycsiacq: goto oasisywuwssumsok; iuyagqakcieasiua: $sogksuscggsicmac = (array) explode("\175", $agywggmyywaimwuy); $umwmyskgiuekmemq[][''] = array_diff($sogksuscggsicmac, $ycoqoegmwiiwyeuo); oasisywuwssumsok: if (!$sogksuscggsicmac) { goto iaoyeugekskmewgs; } $ycoqoegmwiiwyeuo = array_merge($ycoqoegmwiiwyeuo, $sogksuscggsicmac); iaoyeugekskmewgs: mccimkgwkkamsime: } guqmgiqaaowaauyo: return $umwmyskgiuekmemq; } public static function musqiscwwwkyuosg(string $gmawcgiwcmsukeiu) : array { $gmawcgiwcmsukeiu = self::sqsemkikkiaaqeig($gmawcgiwcmsukeiu); $oammesyieqmwuwyi = (array) preg_split("\57\x3b\50\x3f\x3d\x28\x5b\x5e\x5c\50\x5d\52\134\50\x5b\136\x5c\50\135\x2a\134\x29\x29\52\x5b\x5e\134\x29\x5d\52\x24\x29\50\x3f\x3d\50\133\136\134\x22\x5d\x2a\134\x22\133\136\x5c\x22\135\52\134\42\51\x2a\133\136\x5c\42\x5d\x2a\x24\51\50\x3f\75\x28\133\x5e\134\x27\x5d\x2a\134\x27\133\x5e\134\47\135\x2a\134\x27\x29\52\x5b\136\134\47\135\52\x24\x29\57", $gmawcgiwcmsukeiu); return array_values($oammesyieqmwuwyi); } public static function eeewcumgoiuaygow(array $gmawcgiwcmsukeiu) : string { $ukgsssmgkskkuoow = []; foreach ($gmawcgiwcmsukeiu as $oaukocmsckciqaok) { if (!$oaukocmsckciqaok instanceof Property) { goto eciksmgaqikwegwq; } $ukgsssmgkskkuoow[] = trim($oaukocmsckciqaok->__toString(), "\x3b") . "\x3b"; eciksmgaqikwegwq: okagauksoqkoqygi: } iokemmkgmcaksiqu: return trim(implode("\40", $ukgsssmgkskkuoow), "\73"); } public static function mysegoauqwiccoeo(array $acqqmqmcquukaqsc) : array { $mguygkocuoaoqqkg = []; foreach ($acqqmqmcquukaqsc as $umwqusowiqmyseom => $ssaikkeuusoagacm) { foreach (reset($ssaikkeuusoagacm) as $ekuqiqmikiicgoss) { $ekuqiqmikiicgoss = self::wsokikoeayomqico(key($ssaikkeuusoagacm), $ekuqiqmikiicgoss, $umwqusowiqmyseom); $mguygkocuoaoqqkg = array_merge($mguygkocuoaoqqkg, $ekuqiqmikiicgoss); auaigccmwqwsqsku: } measoqewessauqma: qckouamqueqiykqi: } kieyoaoawqacqamy: return $mguygkocuoaoqqkg; } public static function uosumyqkueiykgiu(string $iesegggmcccqyquo) { $iesegggmcccqyquo = self::ieckauqqqiksqksc($iesegggmcccqyquo); $acqqmqmcquukaqsc = self::oowkueqscaoakmck($iesegggmcccqyquo); return self::mysegoauqwiccoeo($acqqmqmcquukaqsc); } public static function wsokikoeayomqico(string $qsmqqqccagyuaiso, string $ekuqiqmikiicgoss, int $umwqusowiqmyseom) : array { $ekuqiqmikiicgoss = self::sqsemkikkiaaqeig($ekuqiqmikiicgoss); $ukgsssmgkskkuoow = explode("\x7b", $ekuqiqmikiicgoss); $wcwugqcsqsmmiuqi = 0; $gkywegkkgiaaqqom = 1; $acqqmqmcquukaqsc = []; if (!isset($ukgsssmgkskkuoow[$gkywegkkgiaaqqom])) { goto gqaimiooakyykccy; } $sgksuwkwyimqgaii = (array) explode("\x2c", trim($ukgsssmgkskkuoow[$wcwugqcsqsmmiuqi])); $gmawcgiwcmsukeiu = self::musqiscwwwkyuosg($ukgsssmgkskkuoow[$gkywegkkgiaaqqom]); foreach ($sgksuwkwyimqgaii as $yuumukkaswwoywya) { $yuumukkaswwoywya = trim($yuumukkaswwoywya); $gmawcgiwcmsukeiu = self::gowgwikayqgeqgca($gmawcgiwcmsukeiu); $acqqmqmcquukaqsc[] = new Rule($qsmqqqccagyuaiso, $yuumukkaswwoywya, $gmawcgiwcmsukeiu, $umwqusowiqmyseom); mcucegiogmuyogki: } wiaesksmicgikqcm: gqaimiooakyykccy: return $acqqmqmcquukaqsc; } public static function gowgwikayqgeqgca(array $gmawcgiwcmsukeiu) : array { $mguygkocuoaoqqkg = []; foreach ($gmawcgiwcmsukeiu as $oaukocmsckciqaok) { $mksyucucyswaukig = self::gcamqqaucqewaucu($oaukocmsckciqaok); if (!$mksyucucyswaukig) { goto gykuaukukosiocoy; } $mguygkocuoaoqqkg[] = $mksyucucyswaukig; gykuaukukosiocoy: goswwiomuackymqi: } agemeseegiuuowgo: return $mguygkocuoaoqqkg; } public static function gcamqqaucqewaucu(string $oaukocmsckciqaok) : ?Property { $mksyucucyswaukig = null; if (!(strpos($oaukocmsckciqaok, "\72") !== false)) { goto camawumockccayaq; } [$ymqmyyeuycgmigyo, $eqgoocgaqwqcimie] = array_map("\164\x72\x69\155", explode("\x3a", $oaukocmsckciqaok, 2)); $mksyucucyswaukig = new Property($ymqmyyeuycgmigyo, $eqgoocgaqwqcimie); camawumockccayaq: return $mksyucucyswaukig; } }
