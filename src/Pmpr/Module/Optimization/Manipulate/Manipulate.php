<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63217f9c731b7             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Manipulate; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Common\Foundation\Decorator\DecoratorSanitize; use Pmpr\Common\Foundation\Manipulate\Manipulate as BaseClass; use Pmpr\Common\Foundation\Manipulate\ManipulateHook; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\ManipulateSetting; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePage; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTaxonomy; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\Optimization\Page\Model; class Manipulate extends BaseClass { public static function kcwoaesycwouwems() : bool { return ManipulateServer::get(self::imywcsggckkcywgk) === Model::symcgieuakksimmu()->miwqiiqeegeqcwis(); } public static function qkaowsuomuucgcck() : bool { $wymyeyweagqomiim = false; if (isset($_SERVER["\x48\124\x54\120\123"])) { goto sykuuisikqcwuaqu; } if (!(isset($_SERVER["\123\x45\122\126\x45\122\x5f\x50\x4f\x52\124"]) && "\64\x34\63" === (string) DecoratorSanitize::aoeoykwemwaqsikc(wp_unslash($_SERVER["\x53\105\x52\126\105\122\x5f\120\117\x52\x54"])))) { goto gqyyccceswkqcmaa; } $wymyeyweagqomiim = true; gqyyccceswkqcmaa: goto mquyemuqcqeassqc; sykuuisikqcwuaqu: $ueicioocowkieeme = DecoratorSanitize::aoeoykwemwaqsikc(wp_unslash($_SERVER["\110\x54\124\120\x53"])); if (!("\61" === (string) $ueicioocowkieeme || "\157\x6e" === strtolower($ueicioocowkieeme))) { goto kqkymieyyqaoeymw; } $wymyeyweagqomiim = true; kqkymieyyqaoeymw: mquyemuqcqeassqc: return $wymyeyweagqomiim; } public static function swuauuwqoauayowm() : bool { $ccikgcseeuuaaggm = [ "\x65\x6c\x65\155\x65\156\x74\x6f\162\55\160\x72\x65\x76\151\x65\x77", "\x66\154\x5f\x62\x75\151\x6c\144\145\x72", "\x63\x74\137\x62\x75\x69\x6c\x64\x65\162", "\145\x74\x5f\x66\x62", "\164\x76\145", ]; $ksaameoqigiaoigg = false; foreach ($ccikgcseeuuaaggm as $siykeiywomwwuoiw) { if (!isset($_GET[$siykeiywomwwuoiw])) { goto mgieeyuyuoeccaog; } $ksaameoqigiaoigg = true; goto weiaigyyigkusucy; mgieeyuyuoeccaog: bagkewioewygysea: } weiaigyyigkusucy: return $ksaameoqigiaoigg; } public static function yoqccqiiaagckoou($migiiksoiymissge) { $ywmkwiwkosakssii = []; if (!ManipulateSetting::esoowymaimwcuecq()) { goto amgsicqmemeuuaem; } $ywmkwiwkosakssii["\143\157\157\x6b\151\x65\x73"] = ["\130\104\105\102\x55\107\x5f\x53\x45\x53\123\x49\117\x4e" => "\130\x44\105\x42\125\x47\x5f\105\103\114\111\120\123\x45"]; amgsicqmemeuuaem: return wp_remote_get($migiiksoiymissge, $ywmkwiwkosakssii); } public static function maykkqauyaoqmqeu($aqykuigiuwmmcieu = self::emgcgiseaoouacge) : ?array { return ManipulatePost::mwoyqeeigwqoamiw([self::aisguagukaewucii => $aqykuigiuwmmcieu, self::ccyeycyyykwuymsy => ["\152\145\164\x2d\x6d\x65\x6e\x75", "\x61\164\x74\x61\x63\x68\x6d\x65\x6e\x74", "\x77\143\137\x70\x72\x6f\x64\x75\143\x74\137\164\141\142", "\152\x65\164\x2d\x74\150\145\x6d\x65\55\143\x6f\162\145", "\x65\154\x65\155\145\x6e\x74\157\162\137\x6c\x69\x62\162\x61\x72\171", "\141\163\164\x72\x61\x2d\141\x64\x76\x61\x6e\x63\145\x64\x2d\150\x6f\157\153"]]); } public static function iikwikykskimciuc($aqykuigiuwmmcieu = self::emgcgiseaoouacge) : ?array { return ManipulateTaxonomy::ciugwooasaqcywas([self::aisguagukaewucii => $aqykuigiuwmmcieu]); } public static function imyuqaesowgauoam(array $ywmkwiwkosakssii = []) : array { $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, [self::ccyeycyyykwuymsy => [], self::kkekqeuyycwqggou => [], self::kcaoouwiygwwmiok => []]); $egeqeuwiswigogyk = $ywmkwiwkosakssii[self::kkekqeuyycwqggou]; $egeqeuwiswigogyk = ManipulateArray::aoecsisqoyuyecmy($egeqeuwiswigogyk, ManipulateServer::gmigwwwmwemyaayy("\x2f"), "\x68\157\155\x65"); if (!ManipulatePage::eokiwumgqmymgyoa()) { goto gwksywaoeowkesei; } $egeqeuwiswigogyk = ManipulateArray::aoecsisqoyuyecmy($egeqeuwiswigogyk, ManipulatePage::symuoymymumgwkaw(), "\x62\x6c\157\147"); gwksywaoeowkesei: if (!($sciomagaqmgggsiu = self::maykkqauyaoqmqeu())) { goto uugwoygiyecgymgw; } foreach ($sciomagaqmgggsiu as $useksmwkuswkwcqg) { $egeqeuwiswigogyk = ManipulateArray::aoecsisqoyuyecmy($egeqeuwiswigogyk, ManipulatePost::mqgeysameoesmuqw($useksmwkuswkwcqg), $useksmwkuswkwcqg); emagssesowicacoa: } sgkwaiuukkaqyqki: $wyoiwuqokyeeuguk = ManipulatePost::ciugwooasaqcywas($sciomagaqmgggsiu, [self::gikuasuikwemyqoq => self::wmmucsiyiyusmssm, self::kcaoouwiygwwmiok => $ywmkwiwkosakssii[self::kcaoouwiygwwmiok]]); foreach ($wyoiwuqokyeeuguk as $post) { $gcqseksiskwueksc = ManipulatePost::mwikyscisascoeea($post, true); $useksmwkuswkwcqg = ManipulatePost::gueasuouwqysmomu($post); $migiiksoiymissge = ManipulatePost::ycqquoiyyuesegsy($post, true); $egeqeuwiswigogyk = ManipulateArray::aoecsisqoyuyecmy($egeqeuwiswigogyk, $migiiksoiymissge, "{$useksmwkuswkwcqg}\x5f{$gcqseksiskwueksc}"); gusgywuaimwooawc: } cauqmacqkssciwyq: uugwoygiyecgymgw: if (!($seyqqsmuaiegkeeq = self::iikwikykskimciuc())) { goto skaayekywasksoug; } foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya) { $egeqeuwiswigogyk = ManipulateArray::aoecsisqoyuyecmy($egeqeuwiswigogyk, ManipulateTaxonomy::myagyqumwekameww($kesssewsiegssiya), $kesssewsiegssiya); awaaowoqskgokwiy: } acmgueaoaaweiqqu: $uyuaosigqymaqsaa = ManipulateTerm::ciugwooasaqcywas($seyqqsmuaiegkeeq, [self::ccyeycyyykwuymsy => $ywmkwiwkosakssii[self::ccyeycyyykwuymsy]]); foreach ($uyuaosigqymaqsaa as $iwewcwusemqaiggk) { $ucicuwcaawugkseg = ManipulateTerm::mwikyscisascoeea($iwewcwusemqaiggk, true); $kesssewsiegssiya = ManipulateTerm::yyoeeseewqmmyaee($iwewcwusemqaiggk); $migiiksoiymissge = ManipulateTerm::qmgcisuuikgmqcsu($iwewcwusemqaiggk, $kesssewsiegssiya); $egeqeuwiswigogyk = ManipulateArray::aoecsisqoyuyecmy($egeqeuwiswigogyk, $migiiksoiymissge, "{$kesssewsiegssiya}\x5f{$ucicuwcaawugkseg}"); kgikoagqwkuocesg: } uqiekawkwcegsumy: skaayekywasksoug: return (array) DecoratorHook::sscegwueamckwmcy(ManipulateHook::ygyygikyocoymgaw("\x6f\160\x74\x5f\x70\x75\x62\154\151\x63\x5f\x70\145\162\x6d\x61\x6c\x69\156\153\x73"), $egeqeuwiswigogyk); } public static function asywsogcwameaaau(?string $omkysikckkcieckq) : bool { return ManipulatePost::igawqaomowicuayw("\x6f\x70\164\137\145\x78\x63\154\165\144\145\137{$omkysikckkcieckq}"); } public static function yygaymuiikwoakuc($aokagokqyuysuksm, $meqocwsecsywiiqs = null, $ymqmyyeuycgmigyo = null) : array { $migiiksoiymissge = ['', '']; $post = ManipulatePost::get($aokagokqyuysuksm); if (!$post) { goto cyqokqcacysioeyc; } $sqeykgyoooqysmca = ManipulatePost::gueasuouwqysmomu($post, true); $cqeiqmmwywksgiko = ManipulatePost::ucwmcwqmqwaymkkc($post); $imqwkwqqwcysuice = $post->post_date; $gqwoukkugawigkik = $post->post_name; if (!in_array($cqeiqmmwywksgiko, ["\144\x72\x61\x66\x74", "\160\145\156\144\151\156\147"], true)) { goto gkoyqgogsukuowqi; } $post->post_status = "\x70\x75\142\154\x69\163\x68"; $post->post_name = DecoratorSanitize::meqocwsecsywiiqs($post->post_name ? $post->post_name : $post->post_title, $post->ID); gkoyqgogsukuowqi: if (is_null($ymqmyyeuycgmigyo)) { goto sgikkoswwyesqomo; } $post->post_name = sanitize_title($ymqmyyeuycgmigyo ? $ymqmyyeuycgmigyo : $meqocwsecsywiiqs, $post->ID); sgikkoswwyesqomo: $post->post_name = wp_unique_post_slug($post->post_name, $post->ID, $post->post_status, $post->post_type, $post->post_parent); $post->filter = "\163\x61\155\x70\154\145"; $migiiksoiymissge = ManipulatePost::ycqquoiyyuesegsy($post); $migiiksoiymissge = str_replace("\45{$sqeykgyoooqysmca->name}\x25", "\45\x70\x61\147\145\156\x61\x6d\x65\45", $migiiksoiymissge); if (!$sqeykgyoooqysmca->hierarchical) { goto cksoeiwawiygyiyg; } $xeciwimgioieayek = get_page_uri($post); $xeciwimgioieayek = untrailingslashit($xeciwimgioieayek); $xeciwimgioieayek = strrev(strstr(strrev($xeciwimgioieayek), "\x2f")); $xeciwimgioieayek = untrailingslashit($xeciwimgioieayek); $xeciwimgioieayek = DecoratorHook::sscegwueamckwmcy("\145\144\151\164\141\x62\154\145\x5f\x73\154\165\147", $xeciwimgioieayek, $post); if (empty($xeciwimgioieayek)) { goto aayysiegiyweiyuu; } $xeciwimgioieayek .= "\x2f"; aayysiegiyweiyuu: $migiiksoiymissge = str_replace("\x25\x70\141\x67\x65\156\141\155\145\45", "{$xeciwimgioieayek}\45\160\141\147\145\x6e\141\155\145\x25", $migiiksoiymissge); cksoeiwawiygyiyg: $migiiksoiymissge = [$migiiksoiymissge, DecoratorHook::sscegwueamckwmcy("\x65\x64\151\164\x61\x62\x6c\145\x5f\x73\154\165\x67", $post->post_name, $post)]; $post->post_status = $cqeiqmmwywksgiko; $post->post_date = $imqwkwqqwcysuice; $post->post_name = $gqwoukkugawigkik; unset($post->filter); cyqokqcacysioeyc: return $migiiksoiymissge; } }
