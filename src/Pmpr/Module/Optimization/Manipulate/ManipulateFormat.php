<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62ea46af9a44c             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Manipulate; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat as BaseClass; use Pmpr\Common\Foundation\Manipulate\ManipulateHook; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class ManipulateFormat extends BaseClass { public static function kcwgwosqkkkkmuks(string $eeamcawaiqocomwy) { $kocecsiyeigoycei = preg_replace_callback("\45\133\x5e\72\x2f\x40\x3f\x26\75\43\135\53\45\x75\163\104", static function ($meyiiwcswqmuggyg) { return rawurlencode($meyiiwcswqmuggyg[0]); }, $eeamcawaiqocomwy); $eeamcawaiqocomwy = self::gooqqcmsyseiaikc($kocecsiyeigoycei); $gwgucoaaqcwwciqq = strtolower(ManipulateArray::get("\x68\157\163\x74", '')); $mkomwsiykqigmqca = ManipulateArray::get($eeamcawaiqocomwy, "\160\141\164\150", ''); $gqgemcmoicmgaqie = ManipulateArray::get($eeamcawaiqocomwy, "\x71\165\145\162\x79", ''); $aaceqemaqqeckueq = ManipulateArray::get($eeamcawaiqocomwy, "\163\143\150\x65\x6d\x61", ''); $geqceacmoksoayem = ManipulateArray::get($eeamcawaiqocomwy, "\146\162\x61\147\x6d\x65\x6e\164", ''); $yiasugywggckywoa = (array) DecoratorHook::sscegwueamckwmcy(ManipulateHook::ygyygikyocoymgaw("\x6f\x70\x74\137\160\141\x72\163\x65\137\x75\x72\154"), ["\x68\157\x73\164" => $gwgucoaaqcwwciqq, "\160\141\x74\x68" => $mkomwsiykqigmqca, "\163\x63\150\x65\155\x65" => $aaceqemaqqeckueq, "\x71\165\145\x72\x79" => $gqgemcmoicmgaqie, "\x66\x72\141\x67\155\145\x6e\x74" => $geqceacmoksoayem]); return array_filter($yiasugywggckywoa, "\x75\x72\x6c\x64\x65\x63\157\x64\x65"); } }
