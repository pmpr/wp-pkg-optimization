<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             616ae7005588d             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Manipulate; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat as BaseClass; use Pmpr\Common\Foundation\Manipulate\ManipulateHook; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class ManipulateFormat extends BaseClass { public static function kcwgwosqkkkkmuks(string $eeamcawaiqocomwy) { goto gsemmoqumiwkagqs; misccmyeikioaiou: $mkomwsiykqigmqca = ManipulateArray::get($eeamcawaiqocomwy, "\160\x61\164\x68", ''); goto isisosauuckokqss; yamwymgiamccscgy: if (!is_string($eeamcawaiqocomwy)) { goto myammocygmwwikke; } goto qossqgoqyewwuwiq; iwkscimekaggogea: $yiasugywggckywoa = (array) DecoratorHook::sscegwueamckwmcy(ManipulateHook::ygyygikyocoymgaw("\157\x70\164\137\x70\x61\x72\163\x65\x5f\165\x72\154"), ["\150\x6f\163\x74" => $gwgucoaaqcwwciqq, "\160\x61\164\x68" => $mkomwsiykqigmqca, "\x73\x63\x68\x65\155\x65" => $aaceqemaqqeckueq, "\x71\165\x65\162\x79" => $gqgemcmoicmgaqie, "\146\162\141\x67\155\145\156\164" => $geqceacmoksoayem]); goto uqekacqgsswywaqm; ocgemgqyoaesmugu: $aaceqemaqqeckueq = ManipulateArray::get($eeamcawaiqocomwy, "\x73\x63\x68\x65\x6d\x61", ''); goto kwoasqeqkuoqiaaq; gsemmoqumiwkagqs: $yiasugywggckywoa = []; goto yamwymgiamccscgy; qossqgoqyewwuwiq: $kocecsiyeigoycei = preg_replace_callback("\x25\133\136\72\57\x40\77\46\75\43\135\53\x25\x75\x73\x44", function ($meyiiwcswqmuggyg) { return rawurlencode($meyiiwcswqmuggyg[0]); }, $eeamcawaiqocomwy); goto iqcuysumigguiquo; quawmacqusmagccu: myammocygmwwikke: goto seymqccqwicwoqgs; isisosauuckokqss: $gqgemcmoicmgaqie = ManipulateArray::get($eeamcawaiqocomwy, "\161\x75\x65\162\171", ''); goto ocgemgqyoaesmugu; seymqccqwicwoqgs: return $yiasugywggckywoa; goto kciomoomeuueoasm; kwoasqeqkuoqiaaq: $geqceacmoksoayem = ManipulateArray::get($eeamcawaiqocomwy, "\146\x72\141\x67\155\145\156\164", ''); goto iwkscimekaggogea; eaewcssugmemceos: $gwgucoaaqcwwciqq = strtolower(ManipulateArray::get("\x68\x6f\x73\x74", '')); goto misccmyeikioaiou; uqekacqgsswywaqm: $yiasugywggckywoa = array_filter($yiasugywggckywoa, "\x75\162\x6c\144\x65\x63\x6f\144\x65"); goto quawmacqusmagccu; iqcuysumigguiquo: $eeamcawaiqocomwy = self::gooqqcmsyseiaikc($kocecsiyeigoycei); goto eaewcssugmemceos; kciomoomeuueoasm: } public static function cysksgacseyymyqs(string $qogsmwakwacwqogk) { goto mycgmksqcgqkagqe; igumsqkaccogcgoi: return false; goto ieaoiwcqywakayai; mycgmksqcgqkagqe: if (!$qogsmwakwacwqogk) { goto yaasmygiqueskqoe; } goto mguqeqqmaqksyaei; mguqeqqmaqksyaei: return self::gooqqcmsyseiaikc($qogsmwakwacwqogk, PHP_URL_PATH); goto recmgqwkmewwkocw; recmgqwkmewwkocw: yaasmygiqueskqoe: goto igumsqkaccogcgoi; ieaoiwcqywakayai: } public static function eyayuwiqsqsmkamc(?string $eeamcawaiqocomwy, ?string $wksoawcgagcgoask) { return _get_component_from_parsed_url_array(self::gooqqcmsyseiaikc($eeamcawaiqocomwy), $wksoawcgagcgoask); } }
