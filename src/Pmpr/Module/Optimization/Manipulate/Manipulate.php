<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62c85c689cc91             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Manipulate; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Common\Foundation\Decorator\DecoratorSanitize; use Pmpr\Common\Foundation\Manipulate\Manipulate as BaseClass; use Pmpr\Common\Foundation\Manipulate\ManipulateHook; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\ManipulateSetting; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePage; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTaxonomy; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\Optimization\Page\Model; class Manipulate extends BaseClass { public static function kcwoaesycwouwems() : bool { return ManipulateServer::get(self::imywcsggckkcywgk) === Model::symcgieuakksimmu()->miwqiiqeegeqcwis(); } public static function qkaowsuomuucgcck() : bool { $wymyeyweagqomiim = false; if (isset($_SERVER["\x48\124\x54\x50\x53"])) { goto awuwuuuagqysukku; } if (!(isset($_SERVER["\x53\105\122\126\x45\x52\137\120\117\x52\124"]) && "\x34\64\63" === (string) DecoratorSanitize::aoeoykwemwaqsikc(wp_unslash($_SERVER["\123\x45\122\x56\105\122\137\120\117\122\x54"])))) { goto kkmuuoscccmokkiw; } $wymyeyweagqomiim = true; kkmuuoscccmokkiw: goto miugmimciywcgswm; awuwuuuagqysukku: $ueicioocowkieeme = DecoratorSanitize::aoeoykwemwaqsikc(wp_unslash($_SERVER["\110\124\124\x50\x53"])); if (!("\x31" === (string) $ueicioocowkieeme || "\x6f\156" === strtolower($ueicioocowkieeme))) { goto oaqeoqsksuyyggmg; } $wymyeyweagqomiim = true; oaqeoqsksuyyggmg: miugmimciywcgswm: return $wymyeyweagqomiim; } public static function swuauuwqoauayowm() : bool { $ccikgcseeuuaaggm = [ "\145\154\145\x6d\x65\156\x74\157\x72\55\160\x72\145\166\x69\145\167", "\x66\154\x5f\142\x75\151\x6c\x64\145\x72", "\x63\164\x5f\x62\165\x69\x6c\x64\x65\x72", "\x65\164\137\x66\x62", "\x74\x76\145", ]; $ksaameoqigiaoigg = false; foreach ($ccikgcseeuuaaggm as $siykeiywomwwuoiw) { if (!isset($_GET[$siykeiywomwwuoiw])) { goto emeeocqaisksyioq; } $ksaameoqigiaoigg = true; goto aqekkeqmmewoyawu; emeeocqaisksyioq: mcqwuawosciucemq: } aqekkeqmmewoyawu: return $ksaameoqigiaoigg; } public static function yoqccqiiaagckoou($migiiksoiymissge) { $ywmkwiwkosakssii = []; if (!ManipulateSetting::esoowymaimwcuecq()) { goto maggecymmmesqmqs; } $ywmkwiwkosakssii["\143\157\157\x6b\151\x65\163"] = ["\130\104\x45\102\x55\x47\137\x53\105\x53\x53\x49\x4f\x4e" => "\130\x44\x45\102\125\x47\137\x45\x43\114\x49\120\123\105"]; maggecymmmesqmqs: return wp_remote_get($migiiksoiymissge, $ywmkwiwkosakssii); } public static function maykkqauyaoqmqeu($aqykuigiuwmmcieu = self::emgcgiseaoouacge) : ?array { return ManipulatePost::mwoyqeeigwqoamiw([self::aisguagukaewucii => $aqykuigiuwmmcieu, self::ccyeycyyykwuymsy => ["\x6a\x65\x74\x2d\x6d\145\156\165", "\x61\x74\164\141\143\x68\155\145\x6e\164", "\x77\x63\137\x70\162\x6f\x64\165\143\x74\x5f\x74\141\x62", "\152\x65\164\55\164\150\145\x6d\145\55\x63\x6f\x72\145", "\145\x6c\x65\155\145\156\164\x6f\x72\x5f\x6c\x69\x62\162\x61\x72\x79", "\x61\x73\164\x72\x61\x2d\141\144\x76\x61\156\x63\145\144\55\x68\157\x6f\x6b"]]); } public static function iikwikykskimciuc($aqykuigiuwmmcieu = self::emgcgiseaoouacge) : ?array { return ManipulateTaxonomy::ciugwooasaqcywas([self::aisguagukaewucii => $aqykuigiuwmmcieu]); } public static function imyuqaesowgauoam(array $ywmkwiwkosakssii = []) : array { $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, [self::ccyeycyyykwuymsy => [], self::kkekqeuyycwqggou => [], self::kcaoouwiygwwmiok => []]); $egeqeuwiswigogyk = $ywmkwiwkosakssii[self::kkekqeuyycwqggou]; $egeqeuwiswigogyk = ManipulateArray::aoecsisqoyuyecmy($egeqeuwiswigogyk, ManipulateServer::gmigwwwmwemyaayy("\x2f"), "\150\157\x6d\x65"); if (!ManipulatePage::eokiwumgqmymgyoa()) { goto csaksaisgawusswg; } $egeqeuwiswigogyk = ManipulateArray::aoecsisqoyuyecmy($egeqeuwiswigogyk, ManipulatePage::symuoymymumgwkaw(), "\x62\154\x6f\147"); csaksaisgawusswg: if (!($sciomagaqmgggsiu = self::maykkqauyaoqmqeu())) { goto mcagemacuqyskogs; } foreach ($sciomagaqmgggsiu as $useksmwkuswkwcqg) { $egeqeuwiswigogyk = ManipulateArray::aoecsisqoyuyecmy($egeqeuwiswigogyk, ManipulatePost::mqgeysameoesmuqw($useksmwkuswkwcqg), $useksmwkuswkwcqg); qkiyyywwuiuackao: } ecgwgamiseokmise: $wyoiwuqokyeeuguk = ManipulatePost::ciugwooasaqcywas($sciomagaqmgggsiu, [self::gikuasuikwemyqoq => self::wmmucsiyiyusmssm, self::kcaoouwiygwwmiok => $ywmkwiwkosakssii[self::kcaoouwiygwwmiok]]); foreach ($wyoiwuqokyeeuguk as $post) { $gcqseksiskwueksc = ManipulatePost::mwikyscisascoeea($post, true); $useksmwkuswkwcqg = ManipulatePost::gueasuouwqysmomu($post); $migiiksoiymissge = ManipulatePost::ycqquoiyyuesegsy($post, true); $egeqeuwiswigogyk = ManipulateArray::aoecsisqoyuyecmy($egeqeuwiswigogyk, $migiiksoiymissge, "{$useksmwkuswkwcqg}\137{$gcqseksiskwueksc}"); ossakckwskyqusmm: } gyskcwykkyakeims: mcagemacuqyskogs: if (!($seyqqsmuaiegkeeq = self::iikwikykskimciuc())) { goto kuuawiosmkgqsscy; } foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya) { $egeqeuwiswigogyk = ManipulateArray::aoecsisqoyuyecmy($egeqeuwiswigogyk, ManipulateTaxonomy::myagyqumwekameww($kesssewsiegssiya), $kesssewsiegssiya); cimascmiesomqgqs: } aamgqoqyyooimqkm: $uyuaosigqymaqsaa = ManipulateTerm::ciugwooasaqcywas($seyqqsmuaiegkeeq, [self::ccyeycyyykwuymsy => $ywmkwiwkosakssii[self::ccyeycyyykwuymsy]]); foreach ($uyuaosigqymaqsaa as $iwewcwusemqaiggk) { $ucicuwcaawugkseg = ManipulateTerm::mwikyscisascoeea($iwewcwusemqaiggk, true); $kesssewsiegssiya = ManipulateTerm::yyoeeseewqmmyaee($iwewcwusemqaiggk); $migiiksoiymissge = ManipulateTerm::qmgcisuuikgmqcsu($iwewcwusemqaiggk, $kesssewsiegssiya); $egeqeuwiswigogyk = ManipulateArray::aoecsisqoyuyecmy($egeqeuwiswigogyk, $migiiksoiymissge, "{$kesssewsiegssiya}\137{$ucicuwcaawugkseg}"); saiuoomgskwgyeya: } easuiqiooiwgswmm: kuuawiosmkgqsscy: return (array) DecoratorHook::sscegwueamckwmcy(ManipulateHook::ygyygikyocoymgaw("\157\160\x74\137\160\165\142\154\151\143\x5f\160\145\x72\x6d\141\154\151\156\153\x73"), $egeqeuwiswigogyk); } public static function asywsogcwameaaau(?string $omkysikckkcieckq) : bool { return ManipulatePost::igawqaomowicuayw("\x6f\x70\x74\137\x65\x78\x63\154\165\144\145\137{$omkysikckkcieckq}"); } public static function yygaymuiikwoakuc($aokagokqyuysuksm, $meqocwsecsywiiqs = null, $ymqmyyeuycgmigyo = null) : array { $migiiksoiymissge = ['', '']; $post = ManipulatePost::get($aokagokqyuysuksm); if (!$post) { goto aucwccaiqwsmyuaq; } $sqeykgyoooqysmca = ManipulatePost::gueasuouwqysmomu($post, true); $cqeiqmmwywksgiko = ManipulatePost::ucwmcwqmqwaymkkc($post); $imqwkwqqwcysuice = $post->post_date; $gqwoukkugawigkik = $post->post_name; if (!in_array($cqeiqmmwywksgiko, ["\x64\x72\x61\146\164", "\x70\145\x6e\144\151\156\147"], true)) { goto kwocaqggwcksesce; } $post->post_status = "\x70\x75\x62\154\x69\x73\x68"; $post->post_name = DecoratorSanitize::meqocwsecsywiiqs($post->post_name ? $post->post_name : $post->post_title, $post->ID); kwocaqggwcksesce: if (is_null($ymqmyyeuycgmigyo)) { goto momuweiasiwskekw; } $post->post_name = sanitize_title($ymqmyyeuycgmigyo ? $ymqmyyeuycgmigyo : $meqocwsecsywiiqs, $post->ID); momuweiasiwskekw: $post->post_name = wp_unique_post_slug($post->post_name, $post->ID, $post->post_status, $post->post_type, $post->post_parent); $post->filter = "\x73\x61\155\160\154\145"; $migiiksoiymissge = ManipulatePost::ycqquoiyyuesegsy($post); $migiiksoiymissge = str_replace("\x25{$sqeykgyoooqysmca->name}\45", "\45\x70\141\147\x65\x6e\141\155\145\x25", $migiiksoiymissge); if (!$sqeykgyoooqysmca->hierarchical) { goto bgakaasgwwygosyi; } $xeciwimgioieayek = get_page_uri($post); $xeciwimgioieayek = untrailingslashit($xeciwimgioieayek); $xeciwimgioieayek = strrev(strstr(strrev($xeciwimgioieayek), "\x2f")); $xeciwimgioieayek = untrailingslashit($xeciwimgioieayek); $xeciwimgioieayek = DecoratorHook::sscegwueamckwmcy("\x65\x64\x69\164\141\142\154\x65\x5f\163\154\165\x67", $xeciwimgioieayek, $post); if (empty($xeciwimgioieayek)) { goto qaewauyekqucciyc; } $xeciwimgioieayek .= "\x2f"; qaewauyekqucciyc: $migiiksoiymissge = str_replace("\x25\160\141\147\145\156\x61\x6d\x65\x25", "{$xeciwimgioieayek}\x25\160\141\x67\x65\156\141\x6d\x65\x25", $migiiksoiymissge); bgakaasgwwygosyi: $migiiksoiymissge = [$migiiksoiymissge, DecoratorHook::sscegwueamckwmcy("\x65\x64\x69\x74\x61\142\154\145\137\163\x6c\x75\147", $post->post_name, $post)]; $post->post_status = $cqeiqmmwywksgiko; $post->post_date = $imqwkwqqwcysuice; $post->post_name = $gqwoukkugawigkik; unset($post->filter); aucwccaiqwsmyuaq: return $migiiksoiymissge; } }
