<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63217f9c731b7             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Manipulate; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulatePlugin; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; class ManipulateI18N extends Manipulate { public static function umuecysoywoumgwo() { global $sitepress, $q_config, $polylang; if (!(!empty($sitepress) && is_object($sitepress) && method_exists($sitepress, "\x67\x65\x74\137\141\143\x74\151\166\145\x5f\154\141\x6e\147\x75\x61\x67\x65\163"))) { goto uiowwckamqucksim; } return "\x77\160\155\154"; uiowwckamqucksim: if (!(!empty($polylang) && function_exists("\x70\x6c\154\137\x6c\x61\156\147\x75\x61\x67\145\163\137\154\x69\163\x74"))) { goto icawmkaswkmwicsa; } $ymkomcgesksuuysk = pll_languages_list(); if (!empty($ymkomcgesksuuysk)) { goto wscikmsmwmocsqeu; } return false; wscikmsmwmocsqeu: return "\x70\x6f\x6c\171\154\x61\156\147"; icawmkaswkmwicsa: if (!(!empty($q_config) && is_array($q_config))) { goto kmeekqukcecuscye; } if (!function_exists("\x71\164\162\141\x6e\170\x66\137\x63\x6f\156\166\145\162\x74\x55\x52\114")) { goto imsgusweocmiyygi; } return "\161\x74\x72\x61\x6e\x73\x6c\141\x74\x65\55\170"; imsgusweocmiyygi: if (!function_exists("\x71\x74\x72\141\156\163\137\143\x6f\x6e\166\x65\162\164\125\122\x4c")) { goto qwueqigcisoogaec; } return "\161\164\x72\141\156\163\154\x61\164\x65"; qwueqigcisoogaec: kmeekqukcecuscye: return false; } public static function mceoyuqgagciommq() { $eokyomeiuimoaiac = self::umuecysoywoumgwo(); $auwuoyyagaiegwae = []; if ("\167\160\x6d\x6c" === $eokyomeiuimoaiac) { goto qmuikumqukcyaeqa; } if ("\161\164\x72\141\156\x73\x6c\141\164\145" === $eokyomeiuimoaiac || "\161\x74\162\x61\156\x73\154\x61\164\x65\x2d\x78" === $eokyomeiuimoaiac) { goto keyiswqkmqqquosw; } if ("\160\157\x6c\171\x6c\141\156\147" === $eokyomeiuimoaiac) { goto imaiuooqwwokwemw; } goto momgmqemgcasyuqq; qmuikumqukcyaeqa: foreach (self::iciiggecqkuyiyaa() as $swaukaagekiououo) { global $sitepress; $auwuoyyagaiegwae[] = $sitepress->language_url($swaukaagekiououo); weuueokkumksgaeo: } csoeisssoumqqeoa: goto momgmqemgcasyuqq; keyiswqkmqqquosw: foreach (self::iciiggecqkuyiyaa() as $swaukaagekiououo) { if ("\x71\164\162\x61\x6e\163\154\x61\164\145" === $eokyomeiuimoaiac) { goto ykiyuciecskusaae; } $auwuoyyagaiegwae[] = qtranxf_convertURL(home_url(), $swaukaagekiououo, true); goto pssquaaiioygwqoq; ykiyuciecskusaae: $auwuoyyagaiegwae[] = qtrans_convertURL(home_url(), $swaukaagekiououo, true); pssquaaiioygwqoq: wgmeyycmqioioaqc: } igckskemqkqueukg: goto momgmqemgcasyuqq; imaiuooqwwokwemw: global $polylang; $cycooskwyukkaimm = function_exists("\x50\114\114") ? PLL() : $polylang; if (!(!empty($cycooskwyukkaimm) && is_object($cycooskwyukkaimm))) { goto ucugeysomcyceyos; } $auwuoyyagaiegwae = wp_list_pluck($cycooskwyukkaimm->model->get_languages_list(), "\x73\145\x61\162\x63\x68\137\x75\x72\154"); ucugeysomcyceyos: momgmqemgcasyuqq: if (!empty($auwuoyyagaiegwae)) { goto mioqycmmeucswoms; } $auwuoyyagaiegwae[] = ManipulateServer::gmigwwwmwemyaayy(); mioqycmmeucswoms: return $auwuoyyagaiegwae; } public static function iciiggecqkuyiyaa() { $mmgwamioewukeoom = []; $eokyomeiuimoaiac = self::umuecysoywoumgwo(); if (!$eokyomeiuimoaiac) { goto gimsiyauegmikyka; } if (!("\167\x70\x6d\154" === $eokyomeiuimoaiac)) { goto mioaoacqueiyueak; } global $sitepress; $mmgwamioewukeoom = array_keys($sitepress->get_active_languages()); mioaoacqueiyueak: if (!("\x71\164\162\x61\x6e\x73\x6c\141\164\x65" === $eokyomeiuimoaiac || "\x71\x74\162\141\156\163\154\141\x74\x65\x2d\x78" === $eokyomeiuimoaiac)) { goto oaseseemoaqcgqeu; } global $q_config; $mmgwamioewukeoom = !empty($q_config["\145\156\x61\142\154\145\144\137\154\141\x6e\x67\x75\141\147\x65\x73"]) ? $q_config["\x65\x6e\x61\x62\154\x65\144\x5f\x6c\x61\156\x67\x75\x61\147\x65\163"] : []; oaseseemoaqcgqeu: if (!("\x70\157\154\x79\154\141\156\147" === $eokyomeiuimoaiac)) { goto kuymgsewmeoimeuq; } $mmgwamioewukeoom = pll_languages_list(); kuymgsewmeoimeuq: gimsiyauegmikyka: return $mmgwamioewukeoom; } public static function yeaukamowmkwaowi() { $eokyomeiuimoaiac = self::umuecysoywoumgwo(); if ($eokyomeiuimoaiac) { goto kisuswmyqsocukgk; } return []; kisuswmyqsocukgk: global $q_config; switch ($eokyomeiuimoaiac) { case "\x77\160\155\x6c": $omkysikckkcieckq = DecoratorOption::get("\151\143\154\137\x73\x69\164\145\x70\162\x65\163\x73\137\x73\145\x74\x74\151\156\x67\163"); if (!(2 === (int) $omkysikckkcieckq["\154\x61\x6e\x67\x75\141\147\x65\x5f\x6e\145\x67\x6f\x74\151\141\164\151\x6f\x6e\137\x74\x79\x70\x65"])) { goto emqmqkeygumaasam; } return self::mceoyuqgagciommq(); emqmqkeygumaasam: goto wisaekiyyweeemuy; case "\161\x74\x72\141\x6e\163\154\141\x74\x65": if (!(3 === (int) $q_config["\165\x72\154\x5f\x6d\x6f\x64\145"])) { goto meegaqaesckqmyec; } return self::mceoyuqgagciommq(); meegaqaesckqmyec: goto wisaekiyyweeemuy; case "\x71\164\162\141\x6e\163\154\141\x74\x65\55\170": if (!(3 === (int) $q_config["\165\162\x6c\137\155\x6f\144\145"] || 4 === (int) $q_config["\x75\x72\154\137\155\x6f\x64\x65"])) { goto scccyaiaggeasgqg; } return self::mceoyuqgagciommq(); scccyaiaggeasgqg: goto wisaekiyyweeemuy; case "\x70\157\154\171\154\x61\156\147": global $polylang; $cycooskwyukkaimm = function_exists("\x50\x4c\x4c") ? PLL() : $polylang; if (!(!empty($cycooskwyukkaimm) && is_object($cycooskwyukkaimm) && (2 === (int) $cycooskwyukkaimm->options["\x66\157\162\x63\145\x5f\154\141\x6e\147"] || 3 === (int) $cycooskwyukkaimm->options["\146\x6f\162\143\x65\137\154\x61\x6e\x67"]))) { goto asueqykmkoaimguq; } return self::mceoyuqgagciommq(); asueqykmkoaimguq: } aosasoogesueygak: wisaekiyyweeemuy: return []; } public static function emqmaiomewcmuacu($post = null) { $swaukaagekiououo = false; $eokyomeiuimoaiac = self::umuecysoywoumgwo(); if (!$post) { goto wamgcqkaieummksu; } if ("\x77\160\x6d\154" === $eokyomeiuimoaiac && !ManipulatePlugin::ggocakcisguuokai("\x77\x6f\x6f\143\157\x6d\155\x65\162\143\x65\55\x6d\x75\x6c\x74\151\x6c\151\156\147\165\x61\x6c\57\x77\160\155\x6c\55\167\x6f\157\143\157\x6d\x6d\x65\x72\143\x65\x2e\160\150\x70")) { goto isaouwiaamimceeg; } if ("\x70\x6f\x6c\x79\x6c\141\156\147" === $eokyomeiuimoaiac && function_exists("\x70\154\x6c\137\147\x65\x74\137\160\157\x73\164\x5f\154\x61\x6e\x67\x75\x61\147\145")) { goto kcwyeqmysgqkoqcm; } goto iyocimuyeemkaaso; isaouwiaamimceeg: global $sitepress; $swaukaagekiououo = $sitepress->get_language_for_element($post, "\x70\x6f\163\164\x5f" . ManipulatePost::gueasuouwqysmomu($post)); goto iyocimuyeemkaaso; kcwyeqmysgqkoqcm: $swaukaagekiououo = pll_get_post_language($post); iyocimuyeemkaaso: wamgcqkaieummksu: return $swaukaagekiououo; } public static function auksikwsewaywikq($mkomwsiykqigmqca = '') { global $wpml_url_filters; static $uogwqioiiwqsyksu = []; static $sckcicueiusskgie; if (isset($uogwqioiiwqsyksu[$mkomwsiykqigmqca])) { goto oeosugomyqyekmuq; } if (isset($sckcicueiusskgie)) { goto mwgaaiaswusakkaq; } $sckcicueiusskgie = $wpml_url_filters && is_object($wpml_url_filters) && method_exists($wpml_url_filters, "\x68\x6f\x6d\145\x5f\165\x72\x6c\137\x66\x69\154\164\x65\162"); mwgaaiaswusakkaq: if (!$sckcicueiusskgie) { goto ugowqoisymsioeye; } DecoratorHook::ggmgmqswqkgecosg("\x68\157\155\x65\137\165\x72\x6c", [$wpml_url_filters, "\x68\157\x6d\x65\x5f\165\162\x6c\137\146\151\x6c\164\x65\162"], -10); ugowqoisymsioeye: $uogwqioiiwqsyksu[$mkomwsiykqigmqca] = ManipulateServer::gmigwwwmwemyaayy($mkomwsiykqigmqca); if (!$sckcicueiusskgie) { goto gooqkmwgsmseuiwq; } DecoratorHook::cecaguuoecmccuse("\x68\x6f\x6d\x65\x5f\165\x72\154", [$wpml_url_filters, "\x68\x6f\155\x65\137\x75\x72\154\x5f\146\151\154\164\145\162"], -10, 4); gooqkmwgsmseuiwq: oeosugomyqyekmuq: return $uogwqioiiwqsyksu[$mkomwsiykqigmqca]; } public static function csacaukgwwayassy($swaukaagekiououo = '') { $mkysicwccoeicumg = self::umuecysoywoumgwo(); $eeamcawaiqocomwy = home_url(); if (!$mkysicwccoeicumg) { goto oaciskoioaecgwee; } switch ($mkysicwccoeicumg) { case "\167\x70\x6d\x6c": $eeamcawaiqocomwy = $GLOBALS["\x73\151\x74\x65\160\x72\x65\x73\163"]->language_url($swaukaagekiououo); goto emgssiqceagusgyg; case "\x71\x74\x72\x61\x6e\x73\154\141\164\x65": $eeamcawaiqocomwy = qtrans_convertURL($eeamcawaiqocomwy, $swaukaagekiououo, true); goto emgssiqceagusgyg; case "\161\164\162\x61\x6e\163\154\x61\x74\x65\55\x78": $eeamcawaiqocomwy = qtranxf_convertURL($eeamcawaiqocomwy, $swaukaagekiououo, true); goto emgssiqceagusgyg; case "\160\x6f\x6c\x79\x6c\x61\156\147": global $polylang; $cycooskwyukkaimm = function_exists("\120\114\114") ? PLL() : $polylang; if (!(!empty($cycooskwyukkaimm->options["\146\157\162\143\145\x5f\x6c\x61\x6e\x67"]) && isset($cycooskwyukkaimm->links))) { goto yskswskmsgoouyco; } $eeamcawaiqocomwy = pll_home_url($swaukaagekiououo); yskswskmsgoouyco: } ysusaysykymegguk: emgssiqceagusgyg: oaciskoioaecgwee: return $eeamcawaiqocomwy; } public static function augqukusksqwwuus($aakkemqaqeckisew = '', $skacuygeqykiwiwy = '') { $msyoeiaqaaseqiaw = []; if (!($aakkemqaqeckisew && is_string($aakkemqaqeckisew))) { goto kygcymkakucoeock; } $mkysicwccoeicumg = self::umuecysoywoumgwo(); if (!$mkysicwccoeicumg) { goto yuoyeeuqqaockyqw; } $ymkomcgesksuuysk = self::iciiggecqkuyiyaa(); if (!$ymkomcgesksuuysk) { goto ugcyukgoaiiysymc; } $ymkomcgesksuuysk = array_diff($ymkomcgesksuuysk, [$aakkemqaqeckisew]); if (!('' === $skacuygeqykiwiwy)) { goto csskguekqcwcmocu; } $skacuygeqykiwiwy = self::cmaecekuqkwmemms("\117\120\x54\111\x4d\111\x5a\x41\x54\111\117\x4e\137\x43\101\x43\110\105\137\120\x41\124\x48"); csskguekqcwcmocu: $mwgaccygeckyuamg = []; foreach ($ymkomcgesksuuysk as $swaukaagekiououo) { $parse_url = ManipulateFormat::gooqqcmsyseiaikc(self::csacaukgwwayassy($swaukaagekiououo)); $mwgaccygeckyuamg[] = ManipulateFile::cgwcgscqeqauaagi("{$skacuygeqykiwiwy}{$parse_url["\x68\157\163\164"]}\x28\56\52\x29\x2f" . untrailingslashit($parse_url["\160\x61\x74\x68"]), true); wkwkeicwosmkcygc: } mmusoowesqcmuqew: return (array) DecoratorHook::sscegwueamckwmcy("\143\x61\x63\x68\145\137\x6c\x61\156\147\x73\137\164\157\x5f\x70\x72\x65\x73\145\162\166\x65", $mwgaccygeckyuamg); ugcyukgoaiiysymc: yuoyeeuqqaockyqw: kygcymkakucoeock: return $msyoeiaqaaseqiaw; } }
