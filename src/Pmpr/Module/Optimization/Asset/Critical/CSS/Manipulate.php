<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63217f9c731b7             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Asset\Critical\CSS; use Pmpr\Common\Foundation\Filesystem; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\Optimization\Asset\Critical\CSS\Data\Property; use Pmpr\Module\Optimization\Asset\Critical\CSS\Data\Rule; use Pmpr\Module\Optimization\Asset\Critical\Manipulate as BaseClass; class Manipulate extends BaseClass { public static function uigyooscomiegggk(?string $migiiksoiymissge = null) { $fkgqmwkusywysaus = Manipulate::csyeqcysyissgowm($migiiksoiymissge); if (!Filesystem::symcgieuakksimmu()->exists($fkgqmwkusywysaus)) { goto kskqquqsegiiogek; } $fkgqmwkusywysaus = false; kskqquqsegiiogek: return $fkgqmwkusywysaus; } public static function aaoqaaaoaewyokkw(?string $migiiksoiymissge = null) { $fkgqmwkusywysaus = Manipulate::csyeqcysyissgowm($migiiksoiymissge); if (Filesystem::symcgieuakksimmu()->exists($fkgqmwkusywysaus)) { goto mocaoayiouggauiy; } $fkgqmwkusywysaus = false; mocaoayiouggauiy: return $fkgqmwkusywysaus; } public static function guugkagukymokgas(?string $mkomwsiykqigmqca = null) : string { return parent::guugkagukymokgas("\57\143\x73\163"); } public static function csyeqcysyissgowm(?string $migiiksoiymissge = null, ?string $mkomwsiykqigmqca = null) : ?string { return parent::csyeqcysyissgowm($migiiksoiymissge, "\57\143\x73\163"); } public static function ogmguwgoqkqkkisa($iesegggmcccqyquo) { preg_match_all("\57\100\143\x68\141\x72\163\145\x74\40\x22\133\x5e\x22\x5d\x2b\x2b\x22\73\x2f", $iesegggmcccqyquo, $meyiiwcswqmuggyg); if (!($guuwoyaeoeeaauug = reset($meyiiwcswqmuggyg))) { goto ygskksomysgaokek; } $guuwoyaeoeeaauug = reset($guuwoyaeoeeaauug); ygskksomysgaokek: return $guuwoyaeoeeaauug; } private static function ieckauqqqiksqksc(string $iesegggmcccqyquo) : string { $iesegggmcccqyquo = preg_replace("\x2f\x40\143\x68\141\x72\163\x65\x74\x20\42\133\136\42\135\53\x2b\42\x3b\x2f", '', $iesegggmcccqyquo); return self::sqsemkikkiaaqeig($iesegggmcccqyquo); } private static function sqsemkikkiaaqeig(string $sociqikgoyemqaac) : string { $sociqikgoyemqaac = str_replace(["\xd", "\12"], '', $sociqikgoyemqaac); $sociqikgoyemqaac = str_replace(["\x9"], "\40", $sociqikgoyemqaac); $sociqikgoyemqaac = preg_replace("\174\x2f\134\52\56\x2a\77\134\52\x2f\x7c", '', $sociqikgoyemqaac); $sociqikgoyemqaac = preg_replace("\x2f\x5c\163\x5c\x73\x2b\x2f", "\40", $sociqikgoyemqaac); $sociqikgoyemqaac = trim($sociqikgoyemqaac); return rtrim($sociqikgoyemqaac, "\73"); } public static function oowkueqscaoakmck(string $icyaoosaykeskiuu) : array { $ymkqyawksmqcgsei = []; $oqaacwamwqqwsmgc = []; $qiacwcmymioiqyia = "\x2f\x40\x6d\145\x64\x69\x61\x2e\52\x3f\x5b\136\x7b\x5d\53\x5c\x7b\x28\133\x5c\x73\134\x53\x5d\x2b\77\134\x7d\51\x5c\x73\x2a\134\x7d\x7c\x40\x6b\x65\171\146\x72\141\155\145\x73\56\52\77\x5b\x5e\x7b\135\x2b\134\173\50\133\134\x73\134\123\135\x2b\77\x5c\175\x29\x5c\x73\x2a\134\175\x7c\x40\x73\165\x70\x70\157\x72\x74\163\56\52\77\x5b\x5e\173\135\53\x5c\173\50\x5b\134\x73\134\123\135\x2b\x3f\x5c\175\x29\x5c\163\52\x5c\175\x7c\x40\x66\157\x6e\164\x2d\146\x61\143\145\x2e\x2a\77\x5b\136\173\x5d\53\x28\133\134\x73\x5c\123\135\x2b\77\x29\134\x73\52\x5c\175\x2f"; preg_match_all($qiacwcmymioiqyia, $icyaoosaykeskiuu, $oqaacwamwqqwsmgc); $oqaacwamwqqwsmgc = reset($oqaacwamwqqwsmgc); foreach ($oqaacwamwqqwsmgc as $momcykaoccoymeig => $mwcwkymkagwwoyow) { $skueimwaqauscmoc = explode($mwcwkymkagwwoyow, $icyaoosaykeskiuu); $uusmaiomayssaecw = array_key_first($skueimwaqauscmoc); $ymkqyawksmqcgsei[] = ManipulateArray::unset($skueimwaqauscmoc, $uusmaiomayssaecw); $ymkqyawksmqcgsei[] = $mwcwkymkagwwoyow; if ($skueimwaqauscmoc && is_array($skueimwaqauscmoc)) { goto becceuuwokgoaewy; } $icyaoosaykeskiuu = ''; goto wyugqoowakyicyic; becceuuwokgoaewy: $icyaoosaykeskiuu = join('', $skueimwaqauscmoc); wyugqoowakyicyic: qgkiguggkyiycwow: } wwcwmkowgooocaem: $ymkqyawksmqcgsei[] = $icyaoosaykeskiuu; $ymkqyawksmqcgsei = array_filter(array_filter($ymkqyawksmqcgsei, "\164\162\x69\x6d")); $ycoqoegmwiiwyeuo = []; $umwmyskgiuekmemq = []; foreach ($ymkqyawksmqcgsei as $momcykaoccoymeig => $agywggmyywaimwuy) { $sogksuscggsicmac = []; if (!preg_match($qiacwcmymioiqyia, $agywggmyywaimwuy)) { goto weouocwmwicayyiy; } $kmmsieagmcwqiako = substr($agywggmyywaimwuy, 0, strpos($agywggmyywaimwuy, "\173")); if (!(trim($kmmsieagmcwqiako) !== "\100\155\x65\x64\151\x61\40\160\x72\x69\x6e\164")) { goto iuysqgmmgqiywssm; } $mckgwmgmgigaiuwg = substr($agywggmyywaimwuy, strpos($agywggmyywaimwuy, "\173") + 1); $mckgwmgmgigaiuwg = substr($mckgwmgmgigaiuwg, 0, -1); $sogksuscggsicmac = (array) explode("\x7d", $mckgwmgmgigaiuwg); $umwmyskgiuekmemq[][$kmmsieagmcwqiako] = array_diff($sogksuscggsicmac, $ycoqoegmwiiwyeuo); iuysqgmmgqiywssm: goto ggyoywwggggekycs; weouocwmwicayyiy: $sogksuscggsicmac = (array) explode("\x7d", $agywggmyywaimwuy); $umwmyskgiuekmemq[][''] = array_diff($sogksuscggsicmac, $ycoqoegmwiiwyeuo); ggyoywwggggekycs: if (!$sogksuscggsicmac) { goto gkkwmqoacciwomqs; } $ycoqoegmwiiwyeuo = array_merge($ycoqoegmwiiwyeuo, $sogksuscggsicmac); gkkwmqoacciwomqs: ugiqiewymimqecsu: } aeaciamekuqyieys: return $umwmyskgiuekmemq; } public static function musqiscwwwkyuosg(string $gmawcgiwcmsukeiu) : array { $gmawcgiwcmsukeiu = self::sqsemkikkiaaqeig($gmawcgiwcmsukeiu); $oammesyieqmwuwyi = (array) preg_split("\57\73\50\77\x3d\x28\133\x5e\134\50\x5d\x2a\x5c\x28\x5b\136\x5c\x28\135\52\134\51\x29\x2a\x5b\136\x5c\51\135\x2a\x24\51\50\77\x3d\50\133\x5e\x5c\42\135\52\x5c\42\133\136\x5c\x22\135\52\134\42\51\52\x5b\x5e\134\x22\x5d\x2a\44\x29\50\x3f\x3d\x28\133\136\x5c\x27\135\x2a\x5c\x27\133\x5e\134\47\x5d\52\x5c\x27\51\52\x5b\136\x5c\x27\x5d\x2a\44\51\x2f", $gmawcgiwcmsukeiu); return array_values($oammesyieqmwuwyi); } public static function eeewcumgoiuaygow(array $gmawcgiwcmsukeiu) : string { $ukgsssmgkskkuoow = []; foreach ($gmawcgiwcmsukeiu as $oaukocmsckciqaok) { if (!$oaukocmsckciqaok instanceof Property) { goto ocmagamuyawyiyka; } $ukgsssmgkskkuoow[] = trim($oaukocmsckciqaok->__toString(), "\x3b") . "\x3b"; ocmagamuyawyiyka: oycuaqewsskgkqci: } kucqcgeesiccuuia: return trim(implode("\x20", $ukgsssmgkskkuoow), "\73"); } public static function mysegoauqwiccoeo(array $acqqmqmcquukaqsc) : array { $mguygkocuoaoqqkg = []; foreach ($acqqmqmcquukaqsc as $umwqusowiqmyseom => $ssaikkeuusoagacm) { foreach (reset($ssaikkeuusoagacm) as $ekuqiqmikiicgoss) { $ekuqiqmikiicgoss = self::wsokikoeayomqico(key($ssaikkeuusoagacm), $ekuqiqmikiicgoss, $umwqusowiqmyseom); $mguygkocuoaoqqkg = array_merge($mguygkocuoaoqqkg, $ekuqiqmikiicgoss); sgiouaqukyycswqm: } syoeqaqkseguwmgy: iwgmywqocewwgoeo: } amqgiisymksuuuss: return $mguygkocuoaoqqkg; } public static function uosumyqkueiykgiu(string $iesegggmcccqyquo) { $iesegggmcccqyquo = self::ieckauqqqiksqksc($iesegggmcccqyquo); $acqqmqmcquukaqsc = self::oowkueqscaoakmck($iesegggmcccqyquo); return self::mysegoauqwiccoeo($acqqmqmcquukaqsc); } public static function wsokikoeayomqico(string $qsmqqqccagyuaiso, string $ekuqiqmikiicgoss, int $umwqusowiqmyseom) : array { $ekuqiqmikiicgoss = self::sqsemkikkiaaqeig($ekuqiqmikiicgoss); $ukgsssmgkskkuoow = explode("\x7b", $ekuqiqmikiicgoss); $wcwugqcsqsmmiuqi = 0; $gkywegkkgiaaqqom = 1; $acqqmqmcquukaqsc = []; if (!isset($ukgsssmgkskkuoow[$gkywegkkgiaaqqom])) { goto uugwmywmaqomeksa; } $sgksuwkwyimqgaii = (array) explode("\54", trim($ukgsssmgkskkuoow[$wcwugqcsqsmmiuqi])); $gmawcgiwcmsukeiu = self::musqiscwwwkyuosg($ukgsssmgkskkuoow[$gkywegkkgiaaqqom]); foreach ($sgksuwkwyimqgaii as $yuumukkaswwoywya) { $yuumukkaswwoywya = trim($yuumukkaswwoywya); $gmawcgiwcmsukeiu = self::gowgwikayqgeqgca($gmawcgiwcmsukeiu); $acqqmqmcquukaqsc[] = new Rule($qsmqqqccagyuaiso, $yuumukkaswwoywya, $gmawcgiwcmsukeiu, $umwqusowiqmyseom); ucasigqmoiwaimkk: } gwkawguwsamuomuo: uugwmywmaqomeksa: return $acqqmqmcquukaqsc; } public static function gowgwikayqgeqgca(array $gmawcgiwcmsukeiu) : array { $mguygkocuoaoqqkg = []; foreach ($gmawcgiwcmsukeiu as $oaukocmsckciqaok) { $mksyucucyswaukig = self::gcamqqaucqewaucu($oaukocmsckciqaok); if (!$mksyucucyswaukig) { goto iquugwoswgkoiieg; } $mguygkocuoaoqqkg[] = $mksyucucyswaukig; iquugwoswgkoiieg: mmmqqoemusicwgqg: } wowmysuygugawmmu: return $mguygkocuoaoqqkg; } public static function gcamqqaucqewaucu(string $oaukocmsckciqaok) : ?Property { $mksyucucyswaukig = null; if (!(strpos($oaukocmsckciqaok, "\x3a") !== false)) { goto xogaycsaesgqeqig; } [$ymqmyyeuycgmigyo, $eqgoocgaqwqcimie] = array_map("\x74\x72\151\155", explode("\72", $oaukocmsckciqaok, 2)); $mksyucucyswaukig = new Property($ymqmyyeuycgmigyo, $eqgoocgaqwqcimie); xogaycsaesgqeqig: return $mksyucucyswaukig; } }
