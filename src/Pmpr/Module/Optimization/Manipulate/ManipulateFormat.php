<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             653524d4a234f             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Manipulate; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat as BaseClass; use Pmpr\Common\Foundation\Manipulate\ManipulateHook; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class ManipulateFormat extends BaseClass { public static function ocyiomiukusoicuc(?string $migiiksoiymissge) : ?string { $migiiksoiymissge = self::gokuyqsimauyacke($migiiksoiymissge); if (self::cmaecekuqkwmemms("\120\x52\137\117\x50\x54\137\x43\101\x43\x48\x45\x5f\x44\x4f\x4e\x54\137\x45\x4e\x43\x4f\104\105\137\x46\111\114\x45\x4e\101\115\105\x53")) { goto gsusqquicmukegcs; } $ymkqyawksmqcgsei = array_filter(explode("\x2f", $migiiksoiymissge)); foreach ($ymkqyawksmqcgsei as $uusmaiomayssaecw => $agywggmyywaimwuy) { $ymkqyawksmqcgsei[$uusmaiomayssaecw] = substr(sha1(rawurldecode($agywggmyywaimwuy)), 0, 10); iikgiaocummweiga: } ueqsiwuwumoqgsck: $migiiksoiymissge = implode("\57", $ymkqyawksmqcgsei); gsusqquicmukegcs: return untrailingslashit($migiiksoiymissge) . "\x2f\151\156\144\x65\170"; } public static function kcwgwosqkkkkmuks(string $eeamcawaiqocomwy) { $kocecsiyeigoycei = preg_replace_callback("\45\133\x5e\x3a\57\x40\77\46\x3d\43\135\x2b\45\165\x73\x44", static function ($meyiiwcswqmuggyg) { return rawurlencode($meyiiwcswqmuggyg[0]); }, $eeamcawaiqocomwy); $eeamcawaiqocomwy = self::gooqqcmsyseiaikc($kocecsiyeigoycei); $gwgucoaaqcwwciqq = strtolower(ManipulateArray::get("\x68\x6f\163\x74", '')); $mkomwsiykqigmqca = ManipulateArray::get($eeamcawaiqocomwy, "\160\x61\164\x68", ''); $gqgemcmoicmgaqie = ManipulateArray::get($eeamcawaiqocomwy, "\161\x75\145\162\171", ''); $aaceqemaqqeckueq = ManipulateArray::get($eeamcawaiqocomwy, "\x73\143\x68\145\x6d\x61", ''); $geqceacmoksoayem = ManipulateArray::get($eeamcawaiqocomwy, "\x66\162\x61\x67\155\145\156\164", ''); $yiasugywggckywoa = (array) DecoratorHook::sscegwueamckwmcy(ManipulateHook::ygyygikyocoymgaw("\157\160\164\137\160\x61\x72\x73\145\137\x75\162\154"), ["\150\x6f\x73\x74" => $gwgucoaaqcwwciqq, "\160\141\x74\x68" => $mkomwsiykqigmqca, "\x73\143\150\145\x6d\145" => $aaceqemaqqeckueq, "\x71\165\x65\x72\x79" => $gqgemcmoicmgaqie, "\146\162\141\147\x6d\145\156\x74" => $geqceacmoksoayem]); return array_filter($yiasugywggckywoa, "\165\x72\154\144\145\x63\157\144\145"); } }
