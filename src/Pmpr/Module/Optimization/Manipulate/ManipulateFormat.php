<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             624c0a8a4dc93             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Manipulate; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat as BaseClass; use Pmpr\Common\Foundation\Manipulate\ManipulateHook; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class ManipulateFormat extends BaseClass { public static function kcwgwosqkkkkmuks(string $eeamcawaiqocomwy) { $yiasugywggckywoa = []; if (!is_string($eeamcawaiqocomwy)) { goto ugqaaewwmkocwwgy; } $kocecsiyeigoycei = preg_replace_callback("\x25\x5b\x5e\x3a\57\100\77\x26\x3d\43\x5d\53\x25\x75\163\x44", function ($meyiiwcswqmuggyg) { return rawurlencode($meyiiwcswqmuggyg[0]); }, $eeamcawaiqocomwy); $eeamcawaiqocomwy = self::gooqqcmsyseiaikc($kocecsiyeigoycei); $gwgucoaaqcwwciqq = strtolower(ManipulateArray::get("\150\157\x73\164", '')); $mkomwsiykqigmqca = ManipulateArray::get($eeamcawaiqocomwy, "\160\141\164\x68", ''); $gqgemcmoicmgaqie = ManipulateArray::get($eeamcawaiqocomwy, "\161\165\x65\x72\171", ''); $aaceqemaqqeckueq = ManipulateArray::get($eeamcawaiqocomwy, "\x73\143\150\145\155\141", ''); $geqceacmoksoayem = ManipulateArray::get($eeamcawaiqocomwy, "\x66\x72\141\147\x6d\x65\x6e\x74", ''); $yiasugywggckywoa = (array) DecoratorHook::sscegwueamckwmcy(ManipulateHook::ygyygikyocoymgaw("\x6f\x70\164\x5f\160\x61\162\x73\145\137\165\162\154"), ["\x68\157\163\164" => $gwgucoaaqcwwciqq, "\x70\141\164\150" => $mkomwsiykqigmqca, "\163\x63\150\145\155\x65" => $aaceqemaqqeckueq, "\x71\x75\145\162\x79" => $gqgemcmoicmgaqie, "\x66\162\141\x67\155\145\x6e\x74" => $geqceacmoksoayem]); $yiasugywggckywoa = array_filter($yiasugywggckywoa, "\x75\x72\154\144\x65\143\157\144\x65"); ugqaaewwmkocwwgy: return $yiasugywggckywoa; } public static function cysksgacseyymyqs(string $qogsmwakwacwqogk) { if (!$qogsmwakwacwqogk) { goto wgewmqieuamsoayy; } return self::gooqqcmsyseiaikc($qogsmwakwacwqogk, PHP_URL_PATH); wgewmqieuamsoayy: return false; } public static function eyayuwiqsqsmkamc(?string $eeamcawaiqocomwy, ?string $wksoawcgagcgoask) { return _get_component_from_parsed_url_array(self::gooqqcmsyseiaikc($eeamcawaiqocomwy), $wksoawcgagcgoask); } }