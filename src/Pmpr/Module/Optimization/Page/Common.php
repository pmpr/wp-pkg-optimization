<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62e900b909935             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Page; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\Optimization\Container; use Pmpr\Module\Optimization\Page\Interfaces\CommonInterface; use WP_Post; use WP_Post_Type; class Common extends Container implements CommonInterface { public function okgswumokyoaosow($ccamueccusigaaio) { $yyimiwcuegayoskq = []; $migiiksoiymissge = ''; if ($ccamueccusigaaio instanceof WP_Post) { goto sckyiekoceuisqyq; } if (!$ccamueccusigaaio instanceof WP_Post_Type) { goto ooykyoowougqkaso; } $migiiksoiymissge = ManipulatePost::mqgeysameoesmuqw($ccamueccusigaaio); $yyimiwcuegayoskq = [self::squoamkioomemiyi => self::mswmgkkakuooukme, self::qescuiwgsyuikume => sprintf("\45\x73\40\x2d\x20\x25\163", $ccamueccusigaaio->label, __("\x53\x70\x65\x63\151\141\x6c\40\x50\141\x67\145\163", PR__MDL__OPTIMIZATION)), self::mgsccwumkcawaqcy => $ccamueccusigaaio->name, self::sauwwsocmukoaayu => $migiiksoiymissge, "\x70\x61\147\145\137\164\171\x70\145" => sprintf(__("\45\163\x20\x28\x41\162\x63\150\151\x76\145\51", PR__MDL__OPTIMIZATION), $ccamueccusigaaio->label)]; ooykyoowougqkaso: goto kusuakkwcuqkcqaw; sckyiekoceuisqyq: $migiiksoiymissge = ManipulatePost::ycqquoiyyuesegsy($ccamueccusigaaio); $yyimiwcuegayoskq = [self::squoamkioomemiyi => ManipulatePost::gueasuouwqysmomu($ccamueccusigaaio), "\160\141\x67\x65\x5f\164\x79\x70\x65" => ManipulatePost::gueasuouwqysmomu($ccamueccusigaaio, true)->labels->singular_name, self::qescuiwgsyuikume => ManipulatePost::qcgakseyaikigqco($ccamueccusigaaio), self::mgsccwumkcawaqcy => ManipulatePost::mwikyscisascoeea($ccamueccusigaaio), self::sauwwsocmukoaayu => $migiiksoiymissge]; kusuakkwcuqkcqaw: $meqocwsecsywiiqs = ManipulateArray::get($yyimiwcuegayoskq, self::qescuiwgsyuikume, ''); if (!$meqocwsecsywiiqs) { goto sikckcmeiwmyakeu; } $yyimiwcuegayoskq[self::qescuiwgsyuikume] = ManipulateHTML::ciuuiyckmsygceis(ManipulateHTML::uuccukgasskgimsq("\x61", ["\150\x72\x65\x66" => $migiiksoiymissge, "\x74\x61\162\x67\145\164" => "\137\142\154\141\156\x6b", "\163\x74\x79\154\145" => "\164\x65\170\x74\55\144\145\x63\x6f\x72\141\x74\151\x6f\x6e\x3a\x20\x6e\157\x6e\x65\x3b"], $meqocwsecsywiiqs)); sikckcmeiwmyakeu: if (untrailingslashit($migiiksoiymissge)) { goto qaycycmeqkqcumog; } $yyimiwcuegayoskq = false; qaycycmeqkqcumog: return $yyimiwcuegayoskq; } public function yoeoaweeseqiyesg(&$uamcoiueqaamsqma = '') : bool { $mkecsaoyggsmwmau = API::symcgieuakksimmu()->kwauokaoasomsimk($uamcoiueqaamsqma); $kigowwqauiumummw = false; if (!is_wp_error($mkecsaoyggsmwmau)) { goto sigukociqouigous; } $uamcoiueqaamsqma = $this->gcsweumukyckmgik($mkecsaoyggsmwmau); goto yagscaikmmuagqcu; sigukociqouigous: if (!($mkecsaoyggsmwmau && isset($mkecsaoyggsmwmau[self::qiyqwyiiwykeccmo], $mkecsaoyggsmwmau[self::uikygkewwaiowmwe]))) { goto ikuwigsmisimaqoc; } $kigowwqauiumummw = true; $uamcoiueqaamsqma = __("\102\x75\144\x67\x65\164\x20\x75\160\144\x61\164\145\x64\x20\x73\165\x63\143\x65\x73\163\146\x75\154\154\171", PR__MDL__OPTIMIZATION); DecoratorOption::update(self::kqgagmgieeucmuik, $mkecsaoyggsmwmau); ikuwigsmisimaqoc: yagscaikmmuagqcu: if ($kigowwqauiumummw) { goto iyawqekeeawqkymm; } DecoratorOption::delete(self::kqgagmgieeucmuik); iyawqekeeawqkymm: return $kigowwqauiumummw; } }
