<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c62928722d7             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Manipulate; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat as BaseClass; use Pmpr\Common\Foundation\Manipulate\ManipulateHook; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class ManipulateFormat extends BaseClass { public static function kcwgwosqkkkkmuks(string $eeamcawaiqocomwy) { $yiasugywggckywoa = []; if (!is_string($eeamcawaiqocomwy)) { goto kqqiegkuqagcqsya; } $kocecsiyeigoycei = preg_replace_callback("\45\x5b\136\72\57\100\x3f\x26\75\43\135\x2b\45\165\163\x44", function ($meyiiwcswqmuggyg) { return rawurlencode($meyiiwcswqmuggyg[0]); }, $eeamcawaiqocomwy); $eeamcawaiqocomwy = self::gooqqcmsyseiaikc($kocecsiyeigoycei); $gwgucoaaqcwwciqq = strtolower(ManipulateArray::get("\x68\157\x73\164", '')); $mkomwsiykqigmqca = ManipulateArray::get($eeamcawaiqocomwy, "\160\141\164\150", ''); $gqgemcmoicmgaqie = ManipulateArray::get($eeamcawaiqocomwy, "\x71\165\145\162\x79", ''); $aaceqemaqqeckueq = ManipulateArray::get($eeamcawaiqocomwy, "\x73\x63\150\145\155\141", ''); $geqceacmoksoayem = ManipulateArray::get($eeamcawaiqocomwy, "\146\x72\x61\x67\155\x65\x6e\164", ''); $yiasugywggckywoa = (array) DecoratorHook::sscegwueamckwmcy(ManipulateHook::ygyygikyocoymgaw("\x6f\x70\164\137\160\x61\162\163\145\x5f\165\162\154"), ["\150\x6f\163\x74" => $gwgucoaaqcwwciqq, "\x70\x61\x74\x68" => $mkomwsiykqigmqca, "\x73\143\x68\145\155\145" => $aaceqemaqqeckueq, "\x71\165\145\162\171" => $gqgemcmoicmgaqie, "\146\x72\141\147\155\145\156\x74" => $geqceacmoksoayem]); $yiasugywggckywoa = array_filter($yiasugywggckywoa, "\165\x72\154\144\x65\143\x6f\144\145"); kqqiegkuqagcqsya: return $yiasugywggckywoa; } public static function cysksgacseyymyqs(string $qogsmwakwacwqogk) { if (!$qogsmwakwacwqogk) { goto ousiuuwgwkiyikyq; } return self::gooqqcmsyseiaikc($qogsmwakwacwqogk, PHP_URL_PATH); ousiuuwgwkiyikyq: return false; } public static function eyayuwiqsqsmkamc(?string $eeamcawaiqocomwy, ?string $wksoawcgagcgoask) { return _get_component_from_parsed_url_array(self::gooqqcmsyseiaikc($eeamcawaiqocomwy), $wksoawcgagcgoask); } }
