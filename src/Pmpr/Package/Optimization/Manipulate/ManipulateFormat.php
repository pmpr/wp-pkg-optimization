<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             623bbb7c4a174             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Manipulate; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat as BaseClass; use Pmpr\Common\Foundation\Manipulate\ManipulateHook; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class ManipulateFormat extends BaseClass { public static function kcwgwosqkkkkmuks(string $eeamcawaiqocomwy) { $yiasugywggckywoa = []; if (!is_string($eeamcawaiqocomwy)) { goto wycuyiukyceccaow; } $kocecsiyeigoycei = preg_replace_callback("\x25\x5b\136\x3a\x2f\x40\x3f\46\x3d\x23\x5d\x2b\x25\x75\163\x44", function ($meyiiwcswqmuggyg) { return rawurlencode($meyiiwcswqmuggyg[0]); }, $eeamcawaiqocomwy); $eeamcawaiqocomwy = self::gooqqcmsyseiaikc($kocecsiyeigoycei); $gwgucoaaqcwwciqq = strtolower(ManipulateArray::get("\150\157\163\164", '')); $mkomwsiykqigmqca = ManipulateArray::get($eeamcawaiqocomwy, "\x70\x61\164\x68", ''); $gqgemcmoicmgaqie = ManipulateArray::get($eeamcawaiqocomwy, "\161\x75\145\x72\x79", ''); $aaceqemaqqeckueq = ManipulateArray::get($eeamcawaiqocomwy, "\x73\143\150\x65\155\x61", ''); $geqceacmoksoayem = ManipulateArray::get($eeamcawaiqocomwy, "\x66\162\x61\147\155\145\x6e\x74", ''); $yiasugywggckywoa = (array) DecoratorHook::sscegwueamckwmcy(ManipulateHook::ygyygikyocoymgaw("\x6f\x70\x74\x5f\160\x61\x72\x73\145\x5f\165\162\154"), ["\x68\x6f\x73\x74" => $gwgucoaaqcwwciqq, "\x70\141\164\150" => $mkomwsiykqigmqca, "\x73\x63\x68\x65\x6d\x65" => $aaceqemaqqeckueq, "\x71\x75\x65\x72\171" => $gqgemcmoicmgaqie, "\146\162\141\147\x6d\x65\x6e\x74" => $geqceacmoksoayem]); $yiasugywggckywoa = array_filter($yiasugywggckywoa, "\x75\x72\154\144\x65\143\157\x64\x65"); wycuyiukyceccaow: return $yiasugywggckywoa; } public static function cysksgacseyymyqs(string $qogsmwakwacwqogk) { if (!$qogsmwakwacwqogk) { goto meseuuacmkuowqau; } return self::gooqqcmsyseiaikc($qogsmwakwacwqogk, PHP_URL_PATH); meseuuacmkuowqau: return false; } public static function eyayuwiqsqsmkamc(?string $eeamcawaiqocomwy, ?string $wksoawcgagcgoask) { return _get_component_from_parsed_url_array(self::gooqqcmsyseiaikc($eeamcawaiqocomwy), $wksoawcgagcgoask); } }
