<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c702ef003ac             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Page; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Package\Optimization\Container; use Pmpr\Package\Optimization\Page\Interfaces\CommonInterface; use WP_Post; use WP_Post_Type; class Common extends Container implements CommonInterface { public function okgswumokyoaosow($ccamueccusigaaio) { $yyimiwcuegayoskq = []; $migiiksoiymissge = ''; if ($ccamueccusigaaio instanceof WP_Post) { goto mqacqosyicuiqwia; } if (!$ccamueccusigaaio instanceof WP_Post_Type) { goto guummoewucyeuiek; } $migiiksoiymissge = ManipulatePost::mqgeysameoesmuqw($ccamueccusigaaio); $yyimiwcuegayoskq = [self::squoamkioomemiyi => self::mswmgkkakuooukme, self::qescuiwgsyuikume => sprintf("\x25\x73\x20\55\40\45\x73", $ccamueccusigaaio->label, __("\x53\160\x65\x63\x69\x61\154\40\x50\141\x67\145\163", PR__PKG__OPTIMIZATION)), self::mgsccwumkcawaqcy => $ccamueccusigaaio->name, self::sauwwsocmukoaayu => $migiiksoiymissge, "\160\141\147\145\x5f\x74\x79\160\145" => sprintf(__("\45\x73\x20\50\101\162\x63\150\x69\166\145\51", PR__PKG__OPTIMIZATION), $ccamueccusigaaio->label)]; guummoewucyeuiek: goto mcuoyseuwoueyaie; mqacqosyicuiqwia: $migiiksoiymissge = ManipulatePost::ycqquoiyyuesegsy($ccamueccusigaaio); $yyimiwcuegayoskq = [self::squoamkioomemiyi => ManipulatePost::gueasuouwqysmomu($ccamueccusigaaio), "\x70\141\147\145\x5f\164\x79\x70\145" => ManipulatePost::gueasuouwqysmomu($ccamueccusigaaio, true)->labels->singular_name, self::qescuiwgsyuikume => ManipulatePost::qcgakseyaikigqco($ccamueccusigaaio), self::mgsccwumkcawaqcy => ManipulatePost::mwikyscisascoeea($ccamueccusigaaio), self::sauwwsocmukoaayu => $migiiksoiymissge]; mcuoyseuwoueyaie: $meqocwsecsywiiqs = ManipulateArray::get($yyimiwcuegayoskq, self::qescuiwgsyuikume, ''); if (!$meqocwsecsywiiqs) { goto kwowggaooiyqawyq; } $yyimiwcuegayoskq[self::qescuiwgsyuikume] = ManipulateHTML::ciuuiyckmsygceis(ManipulateHTML::uuccukgasskgimsq("\141", ["\150\162\145\x66" => $migiiksoiymissge, "\164\x61\x72\x67\x65\164" => "\137\142\154\141\x6e\153", "\x73\x74\x79\x6c\145" => "\164\x65\170\164\x2d\144\x65\143\157\x72\x61\164\x69\157\156\x3a\x20\x6e\157\x6e\x65\73"], $meqocwsecsywiiqs)); kwowggaooiyqawyq: if (untrailingslashit($migiiksoiymissge)) { goto ieoeeyieoskuyiyw; } $yyimiwcuegayoskq = false; ieoeeyieoskuyiyw: return $yyimiwcuegayoskq; } public function yoeoaweeseqiyesg(&$uamcoiueqaamsqma = '') : bool { $mkecsaoyggsmwmau = API::symcgieuakksimmu()->kwauokaoasomsimk($uamcoiueqaamsqma); $kigowwqauiumummw = false; if (!is_wp_error($mkecsaoyggsmwmau)) { goto ugyawwukegyoqmsq; } $uamcoiueqaamsqma = $this->gcsweumukyckmgik($mkecsaoyggsmwmau); goto soqkewsayowwcmco; ugyawwukegyoqmsq: if (!($mkecsaoyggsmwmau && isset($mkecsaoyggsmwmau[self::qiyqwyiiwykeccmo], $mkecsaoyggsmwmau[self::uikygkewwaiowmwe]))) { goto ciiyqsiswkcwsocm; } $kigowwqauiumummw = true; $uamcoiueqaamsqma = __("\102\165\x64\x67\x65\x74\40\x75\x70\x64\x61\164\145\144\40\163\x75\143\143\x65\163\163\146\165\154\x6c\171", PR__PKG__OPTIMIZATION); DecoratorOption::update(self::kqgagmgieeucmuik, $mkecsaoyggsmwmau); ciiyqsiswkcwsocm: soqkewsayowwcmco: if ($kigowwqauiumummw) { goto ukigmkeewuqomooc; } DecoratorOption::delete(self::kqgagmgieeucmuik); ukigmkeewuqomooc: return $kigowwqauiumummw; } }
