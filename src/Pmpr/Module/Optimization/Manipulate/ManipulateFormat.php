<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63ff95f0a006d             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Manipulate; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat as BaseClass; use Pmpr\Common\Foundation\Manipulate\ManipulateHook; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class ManipulateFormat extends BaseClass { public static function ocyiomiukusoicuc(?string $migiiksoiymissge) : ?string { $migiiksoiymissge = self::gokuyqsimauyacke($migiiksoiymissge); if (self::cmaecekuqkwmemms("\117\x50\x54\137\x43\101\x43\110\x45\x5f\104\117\x4e\124\x5f\105\x4e\x43\117\104\x45\x5f\106\111\114\x45\x4e\x41\115\105\123")) { goto euoscysqgugsqewc; } $ymkqyawksmqcgsei = array_filter(explode("\x2f", $migiiksoiymissge)); foreach ($ymkqyawksmqcgsei as $uusmaiomayssaecw => $agywggmyywaimwuy) { $ymkqyawksmqcgsei[$uusmaiomayssaecw] = substr(sha1(rawurldecode($agywggmyywaimwuy)), 0, 10); kisccmsaieigisiu: } ugmukcwgcioqgywy: $migiiksoiymissge = implode("\57", $ymkqyawksmqcgsei); euoscysqgugsqewc: return untrailingslashit($migiiksoiymissge) . "\57\151\x6e\144\x65\x78"; } public static function kcwgwosqkkkkmuks(string $eeamcawaiqocomwy) { $kocecsiyeigoycei = preg_replace_callback("\45\133\x5e\x3a\57\x40\77\46\75\x23\x5d\53\x25\x75\163\x44", static function ($meyiiwcswqmuggyg) { return rawurlencode($meyiiwcswqmuggyg[0]); }, $eeamcawaiqocomwy); $eeamcawaiqocomwy = self::gooqqcmsyseiaikc($kocecsiyeigoycei); $gwgucoaaqcwwciqq = strtolower(ManipulateArray::get("\150\157\163\x74", '')); $mkomwsiykqigmqca = ManipulateArray::get($eeamcawaiqocomwy, "\160\x61\164\x68", ''); $gqgemcmoicmgaqie = ManipulateArray::get($eeamcawaiqocomwy, "\161\x75\145\162\x79", ''); $aaceqemaqqeckueq = ManipulateArray::get($eeamcawaiqocomwy, "\163\x63\x68\145\x6d\x61", ''); $geqceacmoksoayem = ManipulateArray::get($eeamcawaiqocomwy, "\146\162\141\147\x6d\x65\x6e\x74", ''); $yiasugywggckywoa = (array) DecoratorHook::sscegwueamckwmcy(ManipulateHook::ygyygikyocoymgaw("\x6f\x70\x74\137\x70\141\x72\163\145\x5f\x75\162\x6c"), ["\x68\x6f\163\x74" => $gwgucoaaqcwwciqq, "\160\141\164\x68" => $mkomwsiykqigmqca, "\x73\143\150\x65\x6d\145" => $aaceqemaqqeckueq, "\161\x75\x65\162\x79" => $gqgemcmoicmgaqie, "\x66\x72\x61\x67\155\145\156\x74" => $geqceacmoksoayem]); return array_filter($yiasugywggckywoa, "\165\162\x6c\144\x65\x63\x6f\x64\x65"); } }
