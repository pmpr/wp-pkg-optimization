<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c1fcad85629             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Manipulate; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulatePlugin; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; class ManipulateI18N extends Manipulate { public static function umuecysoywoumgwo() { global $sitepress, $q_config, $polylang; if (!(!empty($sitepress) && is_object($sitepress) && method_exists($sitepress, "\x67\145\164\x5f\x61\143\164\151\x76\x65\137\x6c\x61\156\x67\x75\x61\147\145\163"))) { goto soaccwqimeksgwiw; } return "\x77\160\155\154"; soaccwqimeksgwiw: if (!(!empty($polylang) && function_exists("\160\x6c\x6c\x5f\154\x61\x6e\x67\x75\141\x67\x65\x73\x5f\154\x69\163\x74"))) { goto skkamseieeusycye; } $ymkomcgesksuuysk = pll_languages_list(); if (!empty($ymkomcgesksuuysk)) { goto wiysogeqqwgioyka; } return false; wiysogeqqwgioyka: return "\x70\x6f\154\171\154\x61\156\x67"; skkamseieeusycye: if (!(!empty($q_config) && is_array($q_config))) { goto giaacoqqqsekcayy; } if (!function_exists("\161\x74\x72\x61\x6e\x78\x66\x5f\143\157\x6e\166\x65\162\164\x55\x52\x4c")) { goto cgiscsqwwgqqaeqi; } return "\x71\164\162\x61\156\x73\154\141\164\145\55\170"; cgiscsqwwgqqaeqi: if (!function_exists("\x71\164\x72\x61\x6e\x73\137\x63\x6f\156\166\x65\x72\x74\125\122\114")) { goto syiqkaasoueowwui; } return "\161\x74\x72\141\156\x73\x6c\x61\164\145"; syiqkaasoueowwui: giaacoqqqsekcayy: return false; } public static function mceoyuqgagciommq() { $eokyomeiuimoaiac = self::umuecysoywoumgwo(); $auwuoyyagaiegwae = []; if ("\167\160\x6d\154" === $eokyomeiuimoaiac) { goto igooksugieceoege; } if ("\161\164\x72\x61\x6e\x73\154\141\164\x65" === $eokyomeiuimoaiac || "\161\164\162\141\156\x73\154\141\x74\145\x2d\170" === $eokyomeiuimoaiac) { goto omqiayeucoioqoao; } if ("\x70\x6f\x6c\x79\x6c\141\156\147" === $eokyomeiuimoaiac) { goto ugqaaewwmkocwwgy; } goto cewmoqyysgsmuiya; igooksugieceoege: foreach (self::iciiggecqkuyiyaa() as $swaukaagekiououo) { global $sitepress; $auwuoyyagaiegwae[] = $sitepress->language_url($swaukaagekiououo); cmegwsegsosyqcai: } ewymsmkkiksgwysk: goto cewmoqyysgsmuiya; omqiayeucoioqoao: foreach (self::iciiggecqkuyiyaa() as $swaukaagekiououo) { if ("\161\164\x72\141\x6e\x73\154\x61\164\x65" === $eokyomeiuimoaiac) { goto ooeausyowguqicuo; } $auwuoyyagaiegwae[] = qtranxf_convertURL(home_url(), $swaukaagekiououo, true); goto egyyiccaeeiooaua; ooeausyowguqicuo: $auwuoyyagaiegwae[] = qtrans_convertURL(home_url(), $swaukaagekiououo, true); egyyiccaeeiooaua: gkyawqqcmigqgaiq: } wmywuusgukmmaams: goto cewmoqyysgsmuiya; ugqaaewwmkocwwgy: global $polylang; $cycooskwyukkaimm = function_exists("\x50\114\114") ? PLL() : $polylang; if (!(!empty($cycooskwyukkaimm) && is_object($cycooskwyukkaimm))) { goto scisgsyemmsekgos; } $auwuoyyagaiegwae = wp_list_pluck($cycooskwyukkaimm->model->get_languages_list(), "\163\145\141\162\143\150\137\165\x72\154"); scisgsyemmsekgos: cewmoqyysgsmuiya: if (!empty($auwuoyyagaiegwae)) { goto wgewmqieuamsoayy; } $auwuoyyagaiegwae[] = ManipulateServer::gmigwwwmwemyaayy(); wgewmqieuamsoayy: return $auwuoyyagaiegwae; } public static function iciiggecqkuyiyaa() { $mmgwamioewukeoom = []; $eokyomeiuimoaiac = self::umuecysoywoumgwo(); if (!$eokyomeiuimoaiac) { goto wkeuuycukmuqiaom; } if (!("\167\160\x6d\x6c" === $eokyomeiuimoaiac)) { goto kqgcyoscsusgoaqi; } global $sitepress; $mmgwamioewukeoom = array_keys($sitepress->get_active_languages()); kqgcyoscsusgoaqi: if (!("\161\x74\162\x61\x6e\x73\154\141\x74\x65" === $eokyomeiuimoaiac || "\161\164\x72\141\x6e\163\154\141\x74\x65\x2d\170" === $eokyomeiuimoaiac)) { goto ueigkucgaucgeimc; } global $q_config; $mmgwamioewukeoom = !empty($q_config["\145\x6e\141\x62\x6c\x65\x64\137\x6c\141\x6e\147\x75\141\147\145\163"]) ? $q_config["\x65\156\x61\x62\154\x65\144\x5f\x6c\141\156\x67\165\x61\x67\145\163"] : []; ueigkucgaucgeimc: if (!("\160\x6f\154\x79\x6c\x61\156\147" === $eokyomeiuimoaiac)) { goto sggawugoykqcmsug; } $mmgwamioewukeoom = pll_languages_list(); sggawugoykqcmsug: wkeuuycukmuqiaom: return $mmgwamioewukeoom; } public static function yeaukamowmkwaowi() { $eokyomeiuimoaiac = self::umuecysoywoumgwo(); if ($eokyomeiuimoaiac) { goto wakmayaoqoskekqy; } return []; wakmayaoqoskekqy: global $q_config; switch ($eokyomeiuimoaiac) { case "\167\160\x6d\x6c": $omkysikckkcieckq = DecoratorOption::get("\x69\143\154\x5f\163\x69\164\145\x70\162\x65\x73\x73\x5f\x73\145\164\x74\x69\156\147\163"); if (!(2 === (int) $omkysikckkcieckq["\154\x61\x6e\147\x75\x61\x67\145\x5f\x6e\145\x67\157\164\x69\141\x74\x69\x6f\156\137\x74\x79\160\x65"])) { goto mwsmsguqqkcwiiuk; } return self::mceoyuqgagciommq(); mwsmsguqqkcwiiuk: goto qmuwoecuacmkwgem; case "\x71\164\162\141\x6e\163\154\x61\x74\145": if (!(3 === (int) $q_config["\x75\162\x6c\x5f\x6d\157\x64\145"])) { goto eeauyscekuckoues; } return self::mceoyuqgagciommq(); eeauyscekuckoues: goto qmuwoecuacmkwgem; case "\x71\164\x72\x61\x6e\x73\x6c\141\164\145\x2d\x78": if (!(3 === (int) $q_config["\165\x72\x6c\137\155\157\144\145"] || 4 === (int) $q_config["\x75\x72\154\x5f\155\x6f\x64\145"])) { goto eogwckcymuugikuy; } return self::mceoyuqgagciommq(); eogwckcymuugikuy: goto qmuwoecuacmkwgem; case "\x70\157\154\x79\154\141\x6e\147": global $polylang; $cycooskwyukkaimm = function_exists("\120\x4c\x4c") ? PLL() : $polylang; if (!(!empty($cycooskwyukkaimm) && is_object($cycooskwyukkaimm) && (2 === (int) $cycooskwyukkaimm->options["\x66\157\162\x63\x65\137\154\141\x6e\x67"] || 3 === (int) $cycooskwyukkaimm->options["\146\157\162\x63\145\x5f\154\141\x6e\x67"]))) { goto msemumccgceyugmg; } return self::mceoyuqgagciommq(); msemumccgceyugmg: } owmuceyswmgueasi: qmuwoecuacmkwgem: return []; } public static function emqmaiomewcmuacu($post = null) { $swaukaagekiououo = false; $eokyomeiuimoaiac = self::umuecysoywoumgwo(); if (!$post) { goto wcugqegqsuuuwqao; } if ("\167\x70\155\154" === $eokyomeiuimoaiac && !ManipulatePlugin::ggocakcisguuokai("\167\157\157\143\157\155\155\145\162\143\145\55\x6d\x75\x6c\x74\151\x6c\151\x6e\x67\165\x61\x6c\57\x77\160\x6d\154\55\167\x6f\x6f\x63\157\155\x6d\145\x72\x63\x65\56\x70\x68\x70")) { goto qoqskyuuwueqkquk; } if ("\x70\157\x6c\x79\154\x61\x6e\x67" === $eokyomeiuimoaiac && function_exists("\x70\x6c\x6c\137\147\x65\164\137\160\157\163\164\137\154\141\x6e\x67\165\x61\x67\x65")) { goto iwsuawwqomaowuii; } goto wagqgeqymeqoeuyi; qoqskyuuwueqkquk: global $sitepress; $swaukaagekiououo = $sitepress->get_language_for_element($post, "\160\x6f\x73\164\x5f" . ManipulatePost::gueasuouwqysmomu($post)); goto wagqgeqymeqoeuyi; iwsuawwqomaowuii: $swaukaagekiououo = pll_get_post_language($post); wagqgeqymeqoeuyi: wcugqegqsuuuwqao: return $swaukaagekiououo; } public static function auksikwsewaywikq($mkomwsiykqigmqca = '') { global $wpml_url_filters; static $uogwqioiiwqsyksu = []; static $sckcicueiusskgie; if (isset($uogwqioiiwqsyksu[$mkomwsiykqigmqca])) { goto qgeugwymkkiacwoc; } if (isset($sckcicueiusskgie)) { goto asiqwuoswmigcaki; } $sckcicueiusskgie = $wpml_url_filters && is_object($wpml_url_filters) && method_exists($wpml_url_filters, "\150\157\x6d\x65\137\x75\x72\154\137\x66\x69\154\x74\x65\162"); asiqwuoswmigcaki: if (!$sckcicueiusskgie) { goto ciykoyeioqgyaeqo; } DecoratorHook::ggmgmqswqkgecosg("\150\157\155\145\x5f\x75\162\154", [$wpml_url_filters, "\150\x6f\155\145\x5f\165\x72\154\x5f\x66\151\154\x74\x65\162"], -10); ciykoyeioqgyaeqo: $uogwqioiiwqsyksu[$mkomwsiykqigmqca] = ManipulateServer::gmigwwwmwemyaayy($mkomwsiykqigmqca); if (!$sckcicueiusskgie) { goto mqicocmqegwukkwg; } DecoratorHook::cecaguuoecmccuse("\150\157\155\145\x5f\165\x72\x6c", [$wpml_url_filters, "\150\x6f\155\145\x5f\x75\x72\x6c\x5f\x66\151\x6c\x74\x65\162"], -10, 4); mqicocmqegwukkwg: qgeugwymkkiacwoc: return $uogwqioiiwqsyksu[$mkomwsiykqigmqca]; } public static function csacaukgwwayassy($swaukaagekiououo = '') { $mkysicwccoeicumg = self::umuecysoywoumgwo(); $eeamcawaiqocomwy = home_url(); if (!$mkysicwccoeicumg) { goto acsqgiuageaasiyy; } switch ($mkysicwccoeicumg) { case "\167\x70\x6d\154": $eeamcawaiqocomwy = $GLOBALS["\x73\151\164\145\x70\x72\x65\163\x73"]->language_url($swaukaagekiououo); goto emmsycooskoqmgeg; case "\161\164\x72\x61\156\163\154\141\164\145": $eeamcawaiqocomwy = qtrans_convertURL($eeamcawaiqocomwy, $swaukaagekiououo, true); goto emmsycooskoqmgeg; case "\161\x74\x72\x61\156\x73\154\141\164\145\55\x78": $eeamcawaiqocomwy = qtranxf_convertURL($eeamcawaiqocomwy, $swaukaagekiououo, true); goto emmsycooskoqmgeg; case "\160\157\x6c\x79\x6c\141\x6e\147": global $polylang; $cycooskwyukkaimm = function_exists("\120\x4c\x4c") ? PLL() : $polylang; if (!(!empty($cycooskwyukkaimm->options["\146\x6f\x72\x63\145\x5f\x6c\141\156\x67"]) && isset($cycooskwyukkaimm->links))) { goto mugqyyeayeyggqqk; } $eeamcawaiqocomwy = pll_home_url($swaukaagekiououo); mugqyyeayeyggqqk: } ouamogymawucwswu: emmsycooskoqmgeg: acsqgiuageaasiyy: return $eeamcawaiqocomwy; } public static function augqukusksqwwuus($aakkemqaqeckisew = '', $skacuygeqykiwiwy = '') { $msyoeiaqaaseqiaw = []; if (!($aakkemqaqeckisew && is_string($aakkemqaqeckisew))) { goto miweggwqeiaeweia; } $mkysicwccoeicumg = self::umuecysoywoumgwo(); if (!$mkysicwccoeicumg) { goto kkumywowcoycymeo; } $ymkomcgesksuuysk = self::iciiggecqkuyiyaa(); if (!$ymkomcgesksuuysk) { goto guykyqecgswcsmws; } $ymkomcgesksuuysk = array_diff($ymkomcgesksuuysk, [$aakkemqaqeckisew]); if (!('' === $skacuygeqykiwiwy)) { goto oomguqikqokqwgku; } $skacuygeqykiwiwy = self::cmaecekuqkwmemms("\117\x50\124\x49\115\111\132\x41\x54\111\x4f\x4e\137\x43\x41\103\110\105\137\x50\101\124\x48"); oomguqikqokqwgku: $mwgaccygeckyuamg = []; foreach ($ymkomcgesksuuysk as $swaukaagekiououo) { $parse_url = ManipulateFormat::gooqqcmsyseiaikc(self::csacaukgwwayassy($swaukaagekiououo)); $mwgaccygeckyuamg[] = ManipulateFile::cgwcgscqeqauaagi("{$skacuygeqykiwiwy}{$parse_url["\x68\x6f\163\x74"]}\50\56\52\x29\57" . untrailingslashit($parse_url["\160\x61\164\x68"]), true); wyuemgggaqogsmsq: } samwkqgwouggsguc: return (array) DecoratorHook::sscegwueamckwmcy("\143\x61\x63\x68\x65\x5f\154\141\156\x67\163\137\x74\x6f\x5f\x70\x72\x65\163\145\x72\166\145", $mwgaccygeckyuamg); guykyqecgswcsmws: kkumywowcoycymeo: miweggwqeiaeweia: return $msyoeiaqaaseqiaw; } }
