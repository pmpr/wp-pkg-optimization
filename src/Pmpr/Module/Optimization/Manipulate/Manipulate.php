<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             624c0a8a4dc93             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Manipulate; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Common\Foundation\Decorator\DecoratorSanitize; use Pmpr\Common\Foundation\Manipulate\Manipulate as BaseClass; use Pmpr\Common\Foundation\Manipulate\ManipulateHook; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\ManipulateSetting; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePage; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use Pmpr\Module\Optimization\Page\Model; class Manipulate extends BaseClass { public static function kcwoaesycwouwems() : bool { return ManipulateServer::get("\160\141\147\x65") === Model::symcgieuakksimmu()->miwqiiqeegeqcwis(); } public static function qkaowsuomuucgcck() : bool { $wymyeyweagqomiim = false; if (isset($_SERVER["\x48\x54\124\120\123"])) { goto sggawugoykqcmsug; } if (!(isset($_SERVER["\x53\105\122\126\x45\x52\137\x50\117\x52\x54"]) && "\64\x34\x33" === (string) DecoratorSanitize::aoeoykwemwaqsikc(wp_unslash($_SERVER["\x53\x45\x52\x56\105\x52\x5f\x50\117\x52\124"])))) { goto ueigkucgaucgeimc; } $wymyeyweagqomiim = true; ueigkucgaucgeimc: goto wkeuuycukmuqiaom; sggawugoykqcmsug: $ueicioocowkieeme = DecoratorSanitize::aoeoykwemwaqsikc(wp_unslash($_SERVER["\110\124\x54\120\123"])); if (!("\157\156" === strtolower($ueicioocowkieeme) || "\61" === (string) $ueicioocowkieeme)) { goto kqgcyoscsusgoaqi; } $wymyeyweagqomiim = true; kqgcyoscsusgoaqi: wkeuuycukmuqiaom: return $wymyeyweagqomiim; } public static function swuauuwqoauayowm() : bool { $ccikgcseeuuaaggm = [ "\x65\154\x65\155\145\x6e\164\x6f\x72\x2d\x70\162\145\x76\x69\145\167", "\146\154\x5f\142\165\x69\154\x64\x65\162", "\143\x74\x5f\142\165\151\x6c\x64\145\x72", "\145\164\x5f\146\142", "\164\166\x65", ]; $ksaameoqigiaoigg = false; foreach ($ccikgcseeuuaaggm as $siykeiywomwwuoiw) { if (!isset($_GET[$siykeiywomwwuoiw])) { goto owmuceyswmgueasi; } $ksaameoqigiaoigg = true; goto wakmayaoqoskekqy; owmuceyswmgueasi: qmuwoecuacmkwgem: } wakmayaoqoskekqy: return $ksaameoqigiaoigg; } public static function eaiyegoagkgeowae() : bool { $weksiguqgqscsoee = false; if (!function_exists("\147\x65\x74\x5f\143\x75\x72\x72\145\x6e\x74\137\163\143\x72\145\x65\x6e")) { goto mwsmsguqqkcwiiuk; } mwsmsguqqkcwiiuk: return $weksiguqgqscsoee; } public static function yoqccqiiaagckoou($migiiksoiymissge) { $ywmkwiwkosakssii = []; if (!ManipulateSetting::esoowymaimwcuecq()) { goto eeauyscekuckoues; } $ywmkwiwkosakssii["\x63\157\157\x6b\151\145\163"] = ["\130\104\105\102\125\107\x5f\x53\x45\x53\x53\x49\x4f\116" => "\x58\104\105\x42\125\x47\137\105\103\114\x49\x50\123\105"]; eeauyscekuckoues: return wp_remote_get($migiiksoiymissge, $ywmkwiwkosakssii); } public static function maykkqauyaoqmqeu($aqykuigiuwmmcieu = self::emgcgiseaoouacge) : ?array { return ManipulatePost::mwoyqeeigwqoamiw(["\x6f\165\x74\x70\x75\164" => $aqykuigiuwmmcieu, "\x65\170\143\x6c\165\x64\145" => ["\x6a\x65\x74\x2d\155\x65\156\x75", "\141\x74\164\141\143\150\x6d\145\156\x74", "\167\x63\137\x70\162\157\x64\x75\x63\164\x5f\x74\141\142", "\152\145\x74\x2d\x74\150\145\x6d\145\55\x63\157\162\145", "\x65\x6c\x65\155\x65\x6e\164\157\162\137\154\x69\142\162\x61\x72\x79", "\141\163\164\162\x61\55\x61\x64\166\141\156\143\x65\x64\x2d\x68\x6f\157\153"]]); } public static function imyuqaesowgauoam($sciomagaqmgggsiu = []) : array { $egeqeuwiswigogyk = ["\150\157\x6d\x65" => ManipulateServer::gmigwwwmwemyaayy("\57")]; if (!ManipulatePage::eokiwumgqmymgyoa()) { goto eogwckcymuugikuy; } $egeqeuwiswigogyk["\x62\154\x6f\x67"] = ManipulatePage::symuoymymumgwkaw(); eogwckcymuugikuy: if ($sciomagaqmgggsiu) { goto msemumccgceyugmg; } $sciomagaqmgggsiu = ManipulatePost::mwoyqeeigwqoamiw(); msemumccgceyugmg: foreach ($sciomagaqmgggsiu as $useksmwkuswkwcqg) { $migiiksoiymissge = ManipulatePost::mqgeysameoesmuqw($useksmwkuswkwcqg); if (!($migiiksoiymissge && !in_array($migiiksoiymissge, $egeqeuwiswigogyk))) { goto iwsuawwqomaowuii; } $egeqeuwiswigogyk[] = $migiiksoiymissge; iwsuawwqomaowuii: qoqskyuuwueqkquk: } wagqgeqymeqoeuyi: $wyoiwuqokyeeuguk = ManipulatePost::emcckouwaoassquc($sciomagaqmgggsiu); foreach ($wyoiwuqokyeeuguk as $post) { $migiiksoiymissge = ManipulatePost::ycqquoiyyuesegsy($post); $egeqeuwiswigogyk[] = $migiiksoiymissge; asiqwuoswmigcaki: } wcugqegqsuuuwqao: return (array) DecoratorHook::sscegwueamckwmcy(ManipulateHook::ygyygikyocoymgaw("\147\x65\164\x5f\x70\x75\x62\x6c\x69\x63\x5f\160\x65\x72\155\141\154\151\x6e\x6b\163"), $egeqeuwiswigogyk); } public static function asywsogcwameaaau(?string $omkysikckkcieckq) : bool { return ManipulatePost::igawqaomowicuayw("\x6f\160\x74\151\155\x69\172\x61\164\x69\157\156\137\x65\x78\x63\x6c\x75\144\x65\137{$omkysikckkcieckq}"); } public static function yygaymuiikwoakuc($aokagokqyuysuksm, $meqocwsecsywiiqs = null, $ymqmyyeuycgmigyo = null) : array { $migiiksoiymissge = ['', '']; $post = ManipulatePost::get($aokagokqyuysuksm); if (!$post) { goto ouamogymawucwswu; } $sqeykgyoooqysmca = ManipulatePost::gueasuouwqysmomu($post, true); $cqeiqmmwywksgiko = ManipulatePost::ucwmcwqmqwaymkkc($post); $imqwkwqqwcysuice = $post->post_date; $gqwoukkugawigkik = $post->post_name; if (!in_array($cqeiqmmwywksgiko, ["\x64\162\x61\x66\164", "\x70\x65\156\x64\151\x6e\147"], true)) { goto ciykoyeioqgyaeqo; } $post->post_status = "\x70\x75\142\154\x69\163\x68"; $post->post_name = DecoratorSanitize::meqocwsecsywiiqs($post->post_name ? $post->post_name : $post->post_title, $post->ID); ciykoyeioqgyaeqo: if (is_null($ymqmyyeuycgmigyo)) { goto mqicocmqegwukkwg; } $post->post_name = sanitize_title($ymqmyyeuycgmigyo ? $ymqmyyeuycgmigyo : $meqocwsecsywiiqs, $post->ID); mqicocmqegwukkwg: $post->post_name = wp_unique_post_slug($post->post_name, $post->ID, $post->post_status, $post->post_type, $post->post_parent); $post->filter = "\163\x61\155\x70\x6c\x65"; $migiiksoiymissge = ManipulatePost::ycqquoiyyuesegsy($post); $migiiksoiymissge = str_replace("\45{$sqeykgyoooqysmca->name}\45", "\x25\160\141\147\x65\156\141\x6d\x65\45", $migiiksoiymissge); if (!$sqeykgyoooqysmca->hierarchical) { goto emmsycooskoqmgeg; } $xeciwimgioieayek = get_page_uri($post); $xeciwimgioieayek = untrailingslashit($xeciwimgioieayek); $xeciwimgioieayek = strrev(stristr(strrev($xeciwimgioieayek), "\57")); $xeciwimgioieayek = untrailingslashit($xeciwimgioieayek); $xeciwimgioieayek = DecoratorHook::sscegwueamckwmcy("\145\144\151\164\x61\x62\x6c\x65\137\x73\x6c\165\x67", $xeciwimgioieayek, $post); if (empty($xeciwimgioieayek)) { goto qgeugwymkkiacwoc; } $xeciwimgioieayek .= "\x2f"; qgeugwymkkiacwoc: $migiiksoiymissge = str_replace("\x25\x70\x61\x67\x65\x6e\x61\155\145\x25", "{$xeciwimgioieayek}\x25\x70\x61\147\145\156\141\x6d\145\45", $migiiksoiymissge); emmsycooskoqmgeg: $migiiksoiymissge = [$migiiksoiymissge, DecoratorHook::sscegwueamckwmcy("\x65\x64\x69\x74\x61\142\154\145\137\163\154\165\x67", $post->post_name, $post)]; $post->post_status = $cqeiqmmwywksgiko; $post->post_date = $imqwkwqqwcysuice; $post->post_name = $gqwoukkugawigkik; unset($post->filter); ouamogymawucwswu: return $migiiksoiymissge; } public static function acwukecimosckkic($migiiksoiymissge, $suaemuyiacqyugsm = null) : ?string { $geyqgckicikewwke = DecoratorHook::sscegwueamckwmcy(ManipulateHook::ygyygikyocoymgaw("\x6f\x70\x74\137\x69\163\137\157\x70\164\x69\x6d\151\172\145\x64"), [], $migiiksoiymissge, $suaemuyiacqyugsm); $iueymcwwscwqkiyq = ''; if (!$geyqgckicikewwke || !in_array(true, $geyqgckicikewwke, true)) { goto acsqgiuageaasiyy; } if (in_array(false, $geyqgckicikewwke, true)) { goto mugqyyeayeyggqqk; } $iueymcwwscwqkiyq = self::amcogigwsaqssuai; mugqyyeayeyggqqk: goto oomguqikqokqwgku; acsqgiuageaasiyy: $iueymcwwscwqkiyq = self::uasuowkaguiwoouw; oomguqikqokqwgku: return $iueymcwwscwqkiyq; } public static function oeqqgiayuaouaeuc($migiiksoiymissge, $suaemuyiacqyugsm = null) { $iueymcwwscwqkiyq = self::acwukecimosckkic($migiiksoiymissge, $suaemuyiacqyugsm); switch ($iueymcwwscwqkiyq) { case self::uasuowkaguiwoouw: $wkaqekwwgqsqwcoi = IconFontawesomeInterface::mqwqioccoywwoysm; $sqeykgyoooqysmca = self::wyaqwomqwwaoiwas; $meqocwsecsywiiqs = __("\116\x6f\164\x20\117\160\x74\151\x6d\x69\x7a\145\x64", PR__MDL__OPTIMIZATION); goto samwkqgwouggsguc; case self::amcogigwsaqssuai: $wkaqekwwgqsqwcoi = IconFontawesomeInterface::umkismkaiusiugkg; $sqeykgyoooqysmca = self::ckcawaoawwioqecq; $meqocwsecsywiiqs = __("\x4f\160\x74\x69\155\x69\x7a\145\144", PR__MDL__OPTIMIZATION); goto samwkqgwouggsguc; default: $wkaqekwwgqsqwcoi = IconFontawesomeInterface::oigokooooayswskg; $sqeykgyoooqysmca = self::ecioqysekgaasegg; $meqocwsecsywiiqs = __("\116\x6f\x74\40\103\x6f\x6d\160\x6c\x65\164\x65\154\171\x20\117\160\x74\x69\155\151\x7a\x65\144", PR__MDL__OPTIMIZATION); goto samwkqgwouggsguc; } wyuemgggaqogsmsq: samwkqgwouggsguc: return ManipulateHTML::cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi, ["\x63\x6c\141\163\163" => "\x69\x63\x6f\156\55\x6c\147\40\x69\x63\x6f\156\55{$sqeykgyoooqysmca}", "\164\151\164\154\x65" => $meqocwsecsywiiqs]); } }
