<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6261aa1543cbb             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Asset\Critical\CSS; use Pmpr\Common\Foundation\Filesystem; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\Optimization\Asset\Critical\CSS\Data\Property; use Pmpr\Module\Optimization\Asset\Critical\CSS\Data\Rule; use Pmpr\Module\Optimization\Asset\Critical\Manipulate as BaseClass; class Manipulate extends BaseClass { public static function uigyooscomiegggk(?string $migiiksoiymissge = null) { $fkgqmwkusywysaus = Manipulate::csyeqcysyissgowm($migiiksoiymissge); if (!Filesystem::symcgieuakksimmu()->exists($fkgqmwkusywysaus)) { goto sgiuwkisugmewmcs; } $fkgqmwkusywysaus = false; sgiuwkisugmewmcs: return $fkgqmwkusywysaus; } public static function aaoqaaaoaewyokkw(?string $migiiksoiymissge = null) { $fkgqmwkusywysaus = Manipulate::csyeqcysyissgowm($migiiksoiymissge); if (Filesystem::symcgieuakksimmu()->exists($fkgqmwkusywysaus)) { goto kceeuicccqscwgsu; } $fkgqmwkusywysaus = false; kceeuicccqscwgsu: return $fkgqmwkusywysaus; } public static function guugkagukymokgas(?string $mkomwsiykqigmqca = null) : string { return parent::guugkagukymokgas("\57\x63\x73\x73"); } public static function csyeqcysyissgowm(?string $migiiksoiymissge = null, ?string $mkomwsiykqigmqca = null) : ?string { return parent::csyeqcysyissgowm($migiiksoiymissge, "\57\143\x73\x73"); } public static function ogmguwgoqkqkkisa($iesegggmcccqyquo) { preg_match_all("\57\100\x63\x68\x61\162\163\x65\164\40\x22\133\x5e\42\135\53\x2b\x22\x3b\x2f", $iesegggmcccqyquo, $meyiiwcswqmuggyg); if (!($guuwoyaeoeeaauug = reset($meyiiwcswqmuggyg))) { goto iquecygaakmiomeg; } $guuwoyaeoeeaauug = reset($guuwoyaeoeeaauug); iquecygaakmiomeg: return $guuwoyaeoeeaauug; } private static function ieckauqqqiksqksc(string $iesegggmcccqyquo) : string { $iesegggmcccqyquo = preg_replace("\x2f\100\143\x68\141\x72\x73\x65\164\40\42\x5b\136\42\x5d\53\53\42\x3b\57", '', $iesegggmcccqyquo); return self::sqsemkikkiaaqeig($iesegggmcccqyquo); } private static function sqsemkikkiaaqeig(string $sociqikgoyemqaac) : string { $sociqikgoyemqaac = str_replace(["\15", "\xa"], '', $sociqikgoyemqaac); $sociqikgoyemqaac = str_replace(["\11"], "\x20", $sociqikgoyemqaac); $sociqikgoyemqaac = preg_replace("\x7c\57\x5c\52\x2e\52\77\134\52\x2f\x7c", '', $sociqikgoyemqaac); $sociqikgoyemqaac = preg_replace("\x2f\134\x73\134\x73\53\57", "\x20", $sociqikgoyemqaac); $sociqikgoyemqaac = trim($sociqikgoyemqaac); return rtrim($sociqikgoyemqaac, "\73"); } public static function oowkueqscaoakmck(string $icyaoosaykeskiuu) : array { $ymkqyawksmqcgsei = []; $oqaacwamwqqwsmgc = []; $qiacwcmymioiqyia = "\x2f\100\x6d\x65\x64\151\x61\56\x2a\77\x5b\136\x7b\135\53\x5c\173\50\133\x5c\x73\134\x53\135\x2b\x3f\134\x7d\51\x5c\x73\x2a\x5c\175\x7c\x40\x6b\x65\x79\x66\162\x61\155\145\163\x2e\x2a\x3f\x5b\136\173\x5d\x2b\x5c\173\x28\133\x5c\163\134\x53\135\53\77\134\175\x29\x5c\163\52\x5c\x7d\x7c\x40\163\165\x70\160\x6f\x72\164\x73\x2e\x2a\77\x5b\136\x7b\x5d\x2b\x5c\x7b\x28\133\134\163\134\x53\135\53\77\x5c\x7d\51\x5c\163\52\x5c\x7d\x7c\100\x66\x6f\x6e\x74\55\146\x61\x63\x65\x2e\52\77\x5b\136\x7b\x5d\53\50\x5b\x5c\163\134\123\x5d\53\x3f\x29\x5c\x73\x2a\x5c\175\x2f"; preg_match_all($qiacwcmymioiqyia, $icyaoosaykeskiuu, $oqaacwamwqqwsmgc); $oqaacwamwqqwsmgc = reset($oqaacwamwqqwsmgc); foreach ($oqaacwamwqqwsmgc as $momcykaoccoymeig => $mwcwkymkagwwoyow) { $skueimwaqauscmoc = explode($mwcwkymkagwwoyow, $icyaoosaykeskiuu); $uusmaiomayssaecw = array_key_first($skueimwaqauscmoc); $ymkqyawksmqcgsei[] = ManipulateArray::unset($skueimwaqauscmoc, $uusmaiomayssaecw); $ymkqyawksmqcgsei[] = $mwcwkymkagwwoyow; if ($skueimwaqauscmoc && is_array($skueimwaqauscmoc)) { goto yeemsgmumygmumqw; } $icyaoosaykeskiuu = ''; goto wkaoyycsoeoyqcae; yeemsgmumygmumqw: $icyaoosaykeskiuu = join('', $skueimwaqauscmoc); wkaoyycsoeoyqcae: yimeskeioamqmuwg: } eacysqsegwcqawsa: $ymkqyawksmqcgsei[] = $icyaoosaykeskiuu; $ymkqyawksmqcgsei = array_filter(array_filter($ymkqyawksmqcgsei, "\x74\162\151\155")); $ycoqoegmwiiwyeuo = []; $umwmyskgiuekmemq = []; foreach ($ymkqyawksmqcgsei as $momcykaoccoymeig => $agywggmyywaimwuy) { $sogksuscggsicmac = []; if (!preg_match($qiacwcmymioiqyia, $agywggmyywaimwuy)) { goto yksamaucqkqsawkk; } $kmmsieagmcwqiako = substr($agywggmyywaimwuy, 0, strpos($agywggmyywaimwuy, "\173")); if (!(trim($kmmsieagmcwqiako) !== "\100\x6d\145\144\151\x61\40\x70\x72\151\x6e\164")) { goto ekoegocuqoycoeyq; } $mckgwmgmgigaiuwg = substr($agywggmyywaimwuy, strpos($agywggmyywaimwuy, "\x7b") + 1); $mckgwmgmgigaiuwg = substr($mckgwmgmgigaiuwg, 0, -1); $sogksuscggsicmac = (array) explode("\x7d", $mckgwmgmgigaiuwg); $umwmyskgiuekmemq[][$kmmsieagmcwqiako] = array_diff($sogksuscggsicmac, $ycoqoegmwiiwyeuo); ekoegocuqoycoeyq: goto akeoaicoieaiekcw; yksamaucqkqsawkk: $sogksuscggsicmac = (array) explode("\175", $agywggmyywaimwuy); $umwmyskgiuekmemq[][''] = array_diff($sogksuscggsicmac, $ycoqoegmwiiwyeuo); akeoaicoieaiekcw: if (!$sogksuscggsicmac) { goto kskqquqsegiiogek; } $ycoqoegmwiiwyeuo = array_merge($ycoqoegmwiiwyeuo, $sogksuscggsicmac); kskqquqsegiiogek: uuuceqkseqkqawko: } cwugokqsmiomgmqg: return $umwmyskgiuekmemq; } public static function musqiscwwwkyuosg(string $gmawcgiwcmsukeiu) : array { $gmawcgiwcmsukeiu = self::sqsemkikkiaaqeig($gmawcgiwcmsukeiu); $oammesyieqmwuwyi = (array) preg_split("\x2f\73\50\x3f\75\50\133\x5e\x5c\50\135\52\134\x28\x5b\x5e\x5c\50\x5d\x2a\134\51\x29\52\133\x5e\x5c\51\135\52\x24\x29\50\77\75\x28\133\136\x5c\x22\135\52\134\x22\133\136\x5c\42\x5d\52\134\x22\51\52\133\x5e\x5c\42\135\x2a\x24\51\x28\77\x3d\x28\x5b\x5e\134\x27\135\52\134\x27\x5b\x5e\134\x27\x5d\52\x5c\47\51\52\x5b\136\134\x27\135\x2a\x24\x29\x2f", $gmawcgiwcmsukeiu); return array_values($oammesyieqmwuwyi); } public static function eeewcumgoiuaygow(array $gmawcgiwcmsukeiu) : string { $ukgsssmgkskkuoow = []; foreach ($gmawcgiwcmsukeiu as $oaukocmsckciqaok) { if (!$oaukocmsckciqaok instanceof Property) { goto wwcwmkowgooocaem; } $ukgsssmgkskkuoow[] = trim($oaukocmsckciqaok->__toString(), "\73") . "\x3b"; wwcwmkowgooocaem: ygskksomysgaokek: } mocaoayiouggauiy: return trim(implode("\x20", $ukgsssmgkskkuoow), "\73"); } public static function mysegoauqwiccoeo(array $acqqmqmcquukaqsc) : array { $mguygkocuoaoqqkg = []; foreach ($acqqmqmcquukaqsc as $umwqusowiqmyseom => $ssaikkeuusoagacm) { foreach (reset($ssaikkeuusoagacm) as $ekuqiqmikiicgoss) { $ekuqiqmikiicgoss = self::wsokikoeayomqico(key($ssaikkeuusoagacm), $ekuqiqmikiicgoss, $umwqusowiqmyseom); $mguygkocuoaoqqkg = array_merge($mguygkocuoaoqqkg, $ekuqiqmikiicgoss); aeaciamekuqyieys: } wyugqoowakyicyic: becceuuwokgoaewy: } qgkiguggkyiycwow: return $mguygkocuoaoqqkg; } public static function uosumyqkueiykgiu(string $iesegggmcccqyquo) { $iesegggmcccqyquo = self::ieckauqqqiksqksc($iesegggmcccqyquo); $acqqmqmcquukaqsc = self::oowkueqscaoakmck($iesegggmcccqyquo); return self::mysegoauqwiccoeo($acqqmqmcquukaqsc); } public static function wsokikoeayomqico(string $qsmqqqccagyuaiso, string $ekuqiqmikiicgoss, int $umwqusowiqmyseom) : array { $ekuqiqmikiicgoss = self::sqsemkikkiaaqeig($ekuqiqmikiicgoss); $ukgsssmgkskkuoow = explode("\173", $ekuqiqmikiicgoss); $wcwugqcsqsmmiuqi = 0; $gkywegkkgiaaqqom = 1; $acqqmqmcquukaqsc = []; if (!isset($ukgsssmgkskkuoow[$gkywegkkgiaaqqom])) { goto weouocwmwicayyiy; } $sgksuwkwyimqgaii = (array) explode("\54", trim($ukgsssmgkskkuoow[$wcwugqcsqsmmiuqi])); $gmawcgiwcmsukeiu = self::musqiscwwwkyuosg($ukgsssmgkskkuoow[$gkywegkkgiaaqqom]); foreach ($sgksuwkwyimqgaii as $yuumukkaswwoywya) { $yuumukkaswwoywya = trim($yuumukkaswwoywya); $gmawcgiwcmsukeiu = self::gowgwikayqgeqgca($gmawcgiwcmsukeiu); $acqqmqmcquukaqsc[] = new Rule($qsmqqqccagyuaiso, $yuumukkaswwoywya, $gmawcgiwcmsukeiu, $umwqusowiqmyseom); iuysqgmmgqiywssm: } ugiqiewymimqecsu: weouocwmwicayyiy: return $acqqmqmcquukaqsc; } public static function gowgwikayqgeqgca(array $gmawcgiwcmsukeiu) : array { $mguygkocuoaoqqkg = []; foreach ($gmawcgiwcmsukeiu as $oaukocmsckciqaok) { $mksyucucyswaukig = self::gcamqqaucqewaucu($oaukocmsckciqaok); if (!$mksyucucyswaukig) { goto kucqcgeesiccuuia; } $mguygkocuoaoqqkg[] = $mksyucucyswaukig; kucqcgeesiccuuia: gkkwmqoacciwomqs: } ggyoywwggggekycs: return $mguygkocuoaoqqkg; } public static function gcamqqaucqewaucu(string $oaukocmsckciqaok) : ?Property { $mksyucucyswaukig = null; if (!(strpos($oaukocmsckciqaok, "\72") !== false)) { goto oycuaqewsskgkqci; } [$ymqmyyeuycgmigyo, $eqgoocgaqwqcimie] = array_map("\x74\162\x69\x6d", explode("\72", $oaukocmsckciqaok, 2)); $mksyucucyswaukig = new Property($ymqmyyeuycgmigyo, $eqgoocgaqwqcimie); oycuaqewsskgkqci: return $mksyucucyswaukig; } }
