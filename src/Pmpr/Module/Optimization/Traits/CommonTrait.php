<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62ea46af9a44c             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Traits; use Pmpr\Common\Foundation\Decorator\DecoratorQuery; use Pmpr\Common\Foundation\Decorator\DecoratorUser; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\ManipulateQuery; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; trait CommonTrait { public function iwiqycmucceckwcq(?string $ewgwqamkygiqaawc, $eqgoocgaqwqcimie, string $uusmaiomayssaecw = self::imywcsggckkcywgk) : string { $meqocwsecsywiiqs = __("\162\x65\117\x70\x74\x69\x6d\x69\172\x65", PR__MDL__OPTIMIZATION); return ManipulateHTML::yuawgssgauywkiia($ewgwqamkygiqaawc, "\43", ["\x63\154\141\163\x73" => "\157\x70\164\55\160\141\147\145\55\141\x63\164\x69\x6f\x6e\40\160\162\55\143\157\x6e\x66\151\x72\x6d\x61\x62\x6c\x65\x2d\141\143\164\x69\157\x6e", "\x61\x72\151\x61\55\154\x61\142\145\x6c" => $meqocwsecsywiiqs, "\x64\x61\x74\141\x2d\143\x6f\x6e\x66\x69\x67" => ManipulateHTML::uskieqmcqyecigmy([self::squoamkioomemiyi => self::wyaqwomqwwaoiwas, self::qescuiwgsyuikume => $meqocwsecsywiiqs, self::ssmskyqgcmeiayco => __("\101\162\x65\x20\x79\x6f\165\x20\163\165\x72\145\x20\141\x62\x6f\165\x74\40\162\x65\117\160\x74\151\155\151\x7a\145\40\x74\150\x69\163\40\x70\141\x67\145\77", PR__MDL__OPTIMIZATION), "\x62\x75\x74\164\x6f\x6e\163" => ["\143\x61\x6e\x63\145\x6c", ["\143\x6c\x61\163\x73" => "\x6f\160\164\55\x70\165\162\x67\145\x2d\160\157\163\164\x2d\143\141\x63\150\x65\x20\142\164\156\x20\142\x74\x6e\x2d\160\162\151\155\141\x72\x79", "\x74\x69\x74\154\x65" => $meqocwsecsywiiqs, "\144\x61\164\141\55{$uusmaiomayssaecw}" => $eqgoocgaqwqcimie, "\x64\x61\x74\141\x2d\155\151\x63\x72\157\x6d\157\x64\x61\x6c\55\143\154\x6f\163\x65"]]])]); } public function eiykqgmgyuowgeog() : int { return (int) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\x70\x74\137\147\x65\x74\137\142\x75\x64\x67\x65\164"), 0); } public function ggcikeumgqoockyo() : int { return (int) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\160\x74\137\x75\x73\145\144\x5f\142\165\144\147\x65\x74"), 0); } public function ewcikckouwmuqkms() : int { $megmggkiokqkcwou = $this->eiykqgmgyuowgeog(); $sqsyqsscqaauwyyy = $this->ggcikeumgqoockyo(); return max($megmggkiokqkcwou - $sqsyqsscqaauwyyy, 0); } public function ccmqswoueyeqkoeq($uusmaiomayssaecw) : bool { return ManipulateServer::get($uusmaiomayssaecw) || ManipulateServer::gmsemuiwicucmcok($uusmaiomayssaecw); } public function giuymssyesugquuu() : bool { return $this->ccmqswoueyeqkoeq("\x6f\x70\x74\x2d\160\162\x65\154\157\141\x64") || $this->ccmqswoueyeqkoeq("\160\x72\x65\154\x6f\x61\144"); } public function eeegakaauwcyugqy() : bool { return $this->ccmqswoueyeqkoeq("\144\157\x6e\164\x2d\x6f\x70\164"); } public function ocysssyiuaueqiei(string $iqaosyayeiuaisqi = self::yygyasgygkeqacou) : bool { return !ManipulateQuery::miccagckiqwseasi() && ManipulateQuery::eewqyocggsagyuis() && !DecoratorUser::ksgkoukcicwkkaum() && !$this->eeegakaauwcyugqy() && $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\160\164\x5f\141\154\154\x6f\x77\137\x74\x6f\137\x6f\x70\x74\151\x6d\x69\x7a\145"), false, $iqaosyayeiuaisqi); } public function eaoemakycwuywqsy($migiiksoiymissge, $suaemuyiacqyugsm = null) : string { static $oqseeekuqisekiwy; if (isset($oqseeekuqisekiwy[$migiiksoiymissge])) { goto wmwgeoequuwwwywa; } $iueymcwwscwqkiyq = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\160\164\137\160\141\x67\145\x5f\163\164\141\164\165\163"), '', $migiiksoiymissge, $suaemuyiacqyugsm); if ($iueymcwwscwqkiyq) { goto wickgagwgqqsomum; } $geyqgckicikewwke = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\160\164\x5f\x69\163\137\157\160\x74\x69\x6d\x69\x7a\145\x64"), [], $migiiksoiymissge, $suaemuyiacqyugsm); if (!$geyqgckicikewwke || !in_array(true, $geyqgckicikewwke, true)) { goto ksawwekgswywwuwm; } if (in_array(false, $geyqgckicikewwke, true)) { goto umcyeiusoakewyaa; } $iueymcwwscwqkiyq = self::amcogigwsaqssuai; umcyeiusoakewyaa: goto yuqisiwgqacgmsym; ksawwekgswywwuwm: $iueymcwwscwqkiyq = self::uasuowkaguiwoouw; yuqisiwgqacgmsym: $oqseeekuqisekiwy[$migiiksoiymissge] = $iueymcwwscwqkiyq; wickgagwgqqsomum: goto uqugcugeomqakcqo; wmwgeoequuwwwywa: $iueymcwwscwqkiyq = $oqseeekuqisekiwy[$migiiksoiymissge]; uqugcugeomqakcqo: return $iueymcwwscwqkiyq; } public function ccioymuswicowwkw($migiiksoiymissge, $suaemuyiacqyugsm = null) { $iueymcwwscwqkiyq = $this->eaoemakycwuywqsy($migiiksoiymissge, $suaemuyiacqyugsm); $iuikoekwkkmcimwq = false; switch ($iueymcwwscwqkiyq) { case self::uasuowkaguiwoouw: $wkaqekwwgqsqwcoi = IconFontawesomeInterface::mqwqioccoywwoysm; $sqeykgyoooqysmca = self::wyaqwomqwwaoiwas; $meqocwsecsywiiqs = __("\x4e\x6f\164\40\x4f\160\164\151\155\x69\x7a\145\144", PR__MDL__OPTIMIZATION); goto qmoisuweiskkekca; case self::kywgiyyageyqwuuc: $wkaqekwwgqsqwcoi = IconFontawesomeInterface::ikqmakqaocqyimwe; $sqeykgyoooqysmca = self::PRIMARY; $meqocwsecsywiiqs = __("\x4f\x70\164\151\155\x69\172\x61\x74\151\157\156\40\x52\x75\156\156\x69\156\147", PR__MDL__OPTIMIZATION); $iuikoekwkkmcimwq = true; goto qmoisuweiskkekca; case self::amcogigwsaqssuai: $wkaqekwwgqsqwcoi = IconFontawesomeInterface::umkismkaiusiugkg; $sqeykgyoooqysmca = self::ckcawaoawwioqecq; $meqocwsecsywiiqs = __("\117\160\x74\151\155\151\x7a\145\144", PR__MDL__OPTIMIZATION); goto qmoisuweiskkekca; default: $wkaqekwwgqsqwcoi = IconFontawesomeInterface::oigokooooayswskg; $sqeykgyoooqysmca = self::ecioqysekgaasegg; $meqocwsecsywiiqs = __("\x4e\157\164\x20\103\157\155\160\x6c\145\164\145\154\x79\40\117\160\x74\x69\155\151\x7a\x65\144", PR__MDL__OPTIMIZATION); goto qmoisuweiskkekca; } wywwieycqskuqcwc: qmoisuweiskkekca: return ManipulateHTML::cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi, ["\x63\x6c\x61\163\x73" => "\151\x63\x6f\156\55\154\147\x20\151\x63\x6f\156\55{$sqeykgyoooqysmca}" . ($iuikoekwkkmcimwq ? "\40\151\143\157\156\55\x73\160\141\x69\x6e" : ''), self::qescuiwgsyuikume => $meqocwsecsywiiqs, "\144\x61\x74\x61\x2d\x6c\x65\166\x65\154" => $suaemuyiacqyugsm ? self::cwoackywkgsameww : self::yygyasgygkeqacou, "\144\141\164\x61\x2d\163\164\141\164\165\x73" => $iueymcwwscwqkiyq, "\144\141\164\141\x2d\160\x65\x72\x6d\141\154\151\x6e\153" => $migiiksoiymissge], ["\155\141\162\x6b\165\x70" => true]); } public function yyauwmoecaeskcae($suaemuyiacqyugsm) : ?string { $sqeykgyoooqysmca = ManipulateArray::get($suaemuyiacqyugsm, self::squoamkioomemiyi); $ccamueccusigaaio = ManipulateArray::get($suaemuyiacqyugsm, self::mgsccwumkcawaqcy); return $sqeykgyoooqysmca === self::mswmgkkakuooukme ? ManipulatePost::mqgeysameoesmuqw($ccamueccusigaaio) : ManipulatePost::ycqquoiyyuesegsy($ccamueccusigaaio); } }
