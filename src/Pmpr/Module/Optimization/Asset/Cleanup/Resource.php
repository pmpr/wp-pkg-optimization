<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63ff95f0a006d             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Asset\Cleanup; use Exception; use Pmpr\Common\Foundation\Decorator\DecoratorAsset; use Pmpr\Common\Foundation\Decorator\Plugin\DecoratorWoocommerce; use Pmpr\Common\Foundation\DOMCrawler; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString; use Pmpr\Module\Optimization\Manipulate\Manipulate; use Pmpr\Module\Optimization\Asset\Setting; use Pmpr\Module\Optimization\Manipulate\ManipulateFormat; use function YoastSEO_Vendor\GuzzleHttp\Psr7\str; class Resource extends Common { const gucqkiywkqyomkye = "\57\74\x21\x2d\55\x5c\133\x69\x66\x5b\136\x5c\x5d\135\52\x3f\134\x5d\x3e\56\x2a\77\74\41\x5c\x5b\x65\156\x64\151\x66\x5c\135\x2d\55\x3e\57\151\163"; protected ?array $conditionals = []; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\151\x6e\x69\164", [$this, "\151\156\x69\x74"])->qcsmikeggeemccuu("\167\x70\x5f\x65\x6e\x71\x75\145\x75\x65\x5f\x73\x63\x72\151\160\x74\163", [$this, "\x6d\151\x77\157\x63\x63\165\x75\163\141\161\153\x79\147\163\x71"], 999); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\157\160\164\x5f\142\x75\x66\146\145\162\x5f\160\162\x6f\143\x65\163\x73"), [$this, "\157\147\171\x6b\x63\143\165\x61\x61\153\165\157\x61\x65\x73\x65"], 25)->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x6f\160\164\x5f\142\x75\x66\146\145\x72\x5f\x70\x72\157\143\145\x73\163"), [$this, "\x73\153\157\171\x73\165\161\167\x75\x77\x6d\x67\x71\x63\x6b\161"], 26); if (!($this->weysguygiseoukqw(Setting::qwcseoyssyaciyqk) && !Manipulate::swuauuwqoauayowm())) { goto wmumywgyyeagqoeq; } $this->cecaguuoecmccuse("\167\160\137\x65\x6e\x71\x75\x65\165\x65\x5f\163\143\162\151\x70\x74\x73", [$this, "\163\163\153\x71\161\x69\143\x6f\171\155\153\x67\157\x73\155\147"], 999); wmumywgyyeagqoeq: if (!$this->ygyygikyocoymgaw(Setting::aysyuueaueiamysu)) { goto smcguieygyqcaqgs; } $this->cecaguuoecmccuse("\167\160\x5f\143\141\x6c\x63\x75\x6c\x61\x74\145\137\151\x6d\141\x67\x65\137\163\162\143\163\145\x74", [$this, "\163\145\165\151\x67\167\x79\x79\x75\x6f\163\147\145\161\x63\157"], 21)->cecaguuoecmccuse($this->ygyygikyocoymgaw("\157\160\x74\x5f\x62\165\x66\x66\x65\162\x5f\160\162\x6f\143\145\x73\x73"), [$this, "\151\147\x71\151\x79\x79\x75\143\145\161\x67\143\151\x6f\x71\171"], 21); smcguieygyqcaqgs: $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\157\160\x74\137\x62\x75\146\146\145\x72\x5f\x70\162\157\x63\145\x73\x73"), [$this, "\151\x67\153\171\165\153\161\153\x79\167\x77\x77\171\x79\141\141"], 1)->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x6f\160\164\x5f\x62\x75\x66\146\145\x72\x5f\x70\x72\x6f\x63\x65\x73\x73"), [$this, "\151\x61\x71\x61\x6d\167\x77\x65\161\x79\x6b\153\165\x79\163\143"], 99999); parent::kgquecmsgcouyaya(); } public function init() { if (!$this->weysguygiseoukqw(Setting::oeiwkesueukkqggs)) { goto mgcuiguaomoqwwwm; } $this->yguckmcqkqsysmwu(); mgcuiguaomoqwwwm: if (!$this->weysguygiseoukqw(Setting::owgquqcyoseeeiqg)) { goto eoyiumycaigawmmc; } $this->yausywiikmmqckki(); eoyiumycaigawmmc: } public function yguckmcqkqsysmwu() { $this->cecaguuoecmccuse("\x65\x6d\157\152\x69\137\163\166\147\x5f\165\162\x6c", "\x5f\137\x72\x65\x74\165\x72\x6e\137\146\141\x6c\x73\x65")->kuieicsuscgmwigg("\x77\x70\x5f\160\x72\151\x6e\x74\x5f\x73\164\171\x6c\x65\163", "\x70\x72\x69\x6e\x74\x5f\x65\155\x6f\152\151\x5f\163\164\171\x6c\145\x73")->ggmgmqswqkgecosg("\143\x6f\x6d\155\x65\156\x74\x5f\x74\x65\x78\164\x5f\x72\163\163", "\167\160\x5f\x73\x74\141\164\151\143\x69\x7a\x65\137\x65\155\x6f\152\151")->ggmgmqswqkgecosg("\x74\150\x65\137\143\157\x6e\164\x65\x6e\164\137\x66\x65\x65\144", "\x77\160\x5f\163\x74\x61\164\x69\143\x69\x7a\145\x5f\x65\x6d\157\152\151")->ggmgmqswqkgecosg("\x77\160\x5f\x6d\141\151\x6c", "\x77\160\x5f\x73\164\141\x74\151\143\x69\172\145\x5f\x65\x6d\x6f\152\x69\x5f\146\x6f\162\137\x65\x6d\x61\x69\x6c")->kuieicsuscgmwigg("\167\160\x5f\150\145\x61\x64", "\160\162\151\x6e\164\x5f\x65\155\157\x6a\x69\137\144\145\x74\x65\x63\164\x69\157\156\x5f\163\143\162\x69\x70\x74", 7)->cecaguuoecmccuse("\167\x70\137\162\x65\163\157\x75\162\x63\x65\137\x68\x69\x6e\x74\163", [$this, "\155\141\171\x6b\143\x6d\171\x79\145\x71\x73\x6b\x67\155\x65\167"], 10, 2); } public function yausywiikmmqckki() { global $wp; $wp->public_query_vars = array_diff($wp->public_query_vars, ["\x65\155\x62\x65\x64"]); $this->kuieicsuscgmwigg("\167\x70\137\150\x65\x61\144", "\x77\160\x5f\157\145\155\x62\x65\144\137\x61\x64\144\x5f\150\x6f\163\164\137\152\163")->cecaguuoecmccuse("\145\x6d\x62\x65\x64\137\157\145\155\x62\145\x64\x5f\x64\151\x73\x63\157\166\145\x72", "\137\x5f\162\x65\x74\165\x72\156\137\146\x61\x6c\163\x65")->kuieicsuscgmwigg("\167\160\137\150\x65\141\x64", "\x77\x70\137\157\145\x6d\142\145\144\137\141\144\x64\137\144\151\x73\143\x6f\166\x65\x72\171\x5f\154\x69\x6e\x6b\x73")->kuieicsuscgmwigg("\x72\145\163\164\137\x61\160\151\137\151\156\x69\x74", "\x77\x70\137\157\145\x6d\142\145\144\137\162\x65\x67\151\x73\164\145\x72\137\162\157\165\x74\x65")->cecaguuoecmccuse("\162\145\167\162\x69\x74\145\x5f\x72\x75\154\x65\163\137\141\x72\162\141\x79", [$this, "\171\161\157\x79\141\x65\143\157\x67\167\163\x6b\155\x65\153\x6f"])->ggmgmqswqkgecosg("\x6f\145\155\142\x65\144\137\x64\141\164\141\x70\141\x72\x73\x65", "\x77\x70\x5f\x66\x69\154\x74\x65\x72\137\157\x65\x6d\x62\145\x64\137\162\x65\x73\x75\154\164")->ggmgmqswqkgecosg("\160\162\x65\137\157\x65\155\142\x65\x64\x5f\x72\145\163\165\154\x74", "\167\x70\137\146\151\154\164\145\x72\x5f\160\x72\145\137\x6f\145\x6d\142\x65\144\137\162\145\163\x75\x6c\x74"); } public function yqoyaecogwskmeko($acqqmqmcquukaqsc) { foreach ($acqqmqmcquukaqsc as $ekuqiqmikiicgoss => $squgkkgwywimowua) { if (!(false !== strpos($squgkkgwywimowua, "\145\x6d\x62\x65\144\x3d\164\162\165\145"))) { goto sckioayasmkcoeoo; } ManipulateArray::unset($acqqmqmcquukaqsc, $ekuqiqmikiicgoss); sckioayasmkcoeoo: eyiwqgqcsqakwqss: } yuoeumyiuqkuouey: return $acqqmqmcquukaqsc; } public function maykcmyyeqskgmew($auwuoyyagaiegwae, $ayegqaqygsqsmews) : array { if (!("\144\x6e\163\55\160\x72\145\x66\145\164\x63\x68" === $ayegqaqygsqsmews)) { goto ooqksueucyagyuoe; } $ycoyiwsmwwiqwogw = $this->sscegwueamckwmcy("\145\155\x6f\x6a\151\137\163\x76\x67\x5f\165\x72\x6c", "\x68\164\x74\160\163\72\57\57\x73\56\x77\x2e\x6f\x72\x67\x2f\x69\x6d\141\147\x65\163\57\x63\157\162\x65\x2f\x65\155\157\x6a\151\57\x32\x2e\x32\x2e\61\x2f\163\x76\147\x2f"); if (!$ycoyiwsmwwiqwogw) { goto yssqmyoaokkksukc; } $auwuoyyagaiegwae = array_diff($auwuoyyagaiegwae, [$ycoyiwsmwwiqwogw]); yssqmyoaokkksukc: ooqksueucyagyuoe: return $auwuoyyagaiegwae; } public function miwoccuusaqkygsq() { if (!$this->ocysssyiuaueqiei()) { goto aukucaieceiwesmm; } if (!$this->weysguygiseoukqw(Setting::uwcmcaucigmuiugg)) { goto osmmoyqkqoucsgow; } DecoratorAsset::qkyugogwegiuiime("\x64\141\163\150\x69\x63\x6f\x6e\x73"); osmmoyqkqoucsgow: if (!$this->weysguygiseoukqw(Setting::gukmqsiumkmukaoe)) { goto wgiygcmqaokywuqa; } DecoratorAsset::qkyugogwegiuiime("\x77\x63\55\x62\154\157\x63\153\x73\55\x73\164\x79\x6c\x65"); DecoratorAsset::qkyugogwegiuiime("\x77\160\55\142\154\157\x63\x6b\x2d\x6c\151\x62\x72\x61\x72\171"); DecoratorAsset::qkyugogwegiuiime("\x77\160\x2d\142\154\157\143\x6b\x2d\x6c\151\142\162\x61\x72\x79\55\164\x68\x65\155\x65"); DecoratorAsset::qkyugogwegiuiime("\167\143\x2d\x62\x6c\157\143\x6b\163\55\166\145\156\144\x6f\162\x73\55\163\x74\x79\x6c\x65"); wgiygcmqaokywuqa: if (!($this->weysguygiseoukqw(Setting::kcgocyessaswyike) && ManipulateWoocommerce::ayseokmqycoqaigc() && (DecoratorWoocommerce::ckeyeaouokcgeqeq() || DecoratorWoocommerce::gqoskmoekogyqwsc()))) { goto iauwuugggmegwisk; } DecoratorAsset::saisougiwmauksiy("\x7a\170\x63\166\x62\x6e\x2d\x61\163\x79\x6e\143"); DecoratorAsset::saisougiwmauksiy("\x70\x61\x73\x73\x77\157\x72\144\x2d\163\164\x72\x65\x6e\147\x74\x68\55\155\x65\164\x65\x72"); DecoratorAsset::saisougiwmauksiy("\x77\x63\x2d\x70\141\x73\x73\167\157\162\x64\55\163\x74\x72\x65\156\147\x74\x68\55\155\145\x74\x65\x72"); iauwuugggmegwisk: aukucaieceiwesmm: } private function smyqoiyugouyymcq() : bool { return !Manipulate::cmaecekuqkwmemms("\104\x4f\x4e\124\137\x50\105\122\x46\x4f\x52\x4d\101\x4e\x43\105\137\117\x50\124\111\115\x49\132\x45", false); } public function xwgeqeiyismgqqgc() { $couiucmsqaieciue = ["\x67\151\x73\x74\56\147\x69\164\150\165\142\56\x63\x6f\x6d", "\143\157\x6e\164\145\x6e\164\x2e\152\x77\160\x6c\x61\x74\146\157\x72\x6d\56\x63\157\155", "\152\163\x2e\x68\163\x66\x6f\x72\155\163\56\x6e\x65\x74", "\x77\x77\x77\x2e\x75\160\x6c\141\165\156\x63\150\x2e\x63\x6f\x6d", "\x67\x6f\157\x67\154\x65\56\143\157\x6d\57\x72\x65\143\x61\160\x74\143\x68\x61", "\x77\x69\x64\x67\145\164\56\x72\x65\x76\151\145\167\x73\x2e\143\x6f\x2e\x75\x6b", "\x76\x65\162\x69\x66\171\x2e\141\165\x74\x68\x6f\162\x69\x7a\x65\56\156\x65\x74\x2f\141\156\145\164\x73\x65\x61\x6c", "\154\151\x62\x2f\x61\x64\x6d\x69\x6e\x2f\x61\163\x73\145\164\x2f\x6c\x69\x62\57\x77\x65\142\146\157\x6e\164\x2f\167\145\142\x66\157\156\164\56\155\151\156\56\152\x73", "\141\160\160\x2e\155\141\x69\154\x65\162\x6c\151\164\145\56\143\157\155", "\167\x69\144\147\145\x74\56\162\x65\x76\x69\145\x77\163\x2e\151\157"]; $igqaiqowiaqywsyi = "\x63\x64\x6e\152\163\x2e\143\x6c\x6f\165\x64\x66\x6c\x61\x72\x65\56\143\x6f\x6d\x2f\x61\x6a\141\170\57\x6c\x69\142\163\57\152\161\x75\145\x72\171\57\50\77\x3a\x2e\53\x29\57\x6a\x71\165\145\x72\x79\50\x3f\72\x5c\x2e\x6d\151\x6e\x29\x3f\56\152\x73"; $aiecucumasmeiqug = site_url(wp_scripts()->registered["\x6a\x71\x75\145\162\171\55\143\157\x72\x65"]->src); $iumcyomuwmqgsoca = "\x63\x30\x2e\x77\x70\x2e\x63\157\155\x2f\x63\57\x28\x3f\72\x2e\x2b\51\x2f\x77\x70\55\151\x6e\143\x6c\165\x64\x65\163\57\x6a\x73\57\x6a\161\x75\x65\x72\x79\x2f\152\x71\165\x65\x72\171\x2e\x6a\x73"; $gkwsawwcyyswewmw = "\x61\152\x61\x78\x2e\x67\157\x6f\x67\x6c\145\x61\x70\151\x73\x2e\x63\x6f\x6d\57\x61\152\141\170\57\154\x69\x62\163\57\152\x71\165\x65\162\171\x2f\50\x3f\x3a\56\53\51\x2f\152\x71\x75\x65\162\171\x28\77\72\x5c\x2e\x6d\151\x6e\x29\x3f\56\152\x73"; $couiucmsqaieciue[] = $aiecucumasmeiqug ? ManipulateFormat::gooqqcmsyseiaikc($aiecucumasmeiqug, PHP_URL_PATH) : false; $couiucmsqaieciue[] = $iumcyomuwmqgsoca; $couiucmsqaieciue[] = $gkwsawwcyyswewmw; $couiucmsqaieciue[] = $igqaiqowiaqywsyi; $couiucmsqaieciue = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\160\x74\x5f\x70\x65\x72\x66\157\x72\155\141\156\143\x65\x5f\162\145\163\157\165\162\x63\145\x5f\x65\x78\143\x6c\165\144\145\137\144\x65\x66\x65\x72\137\152\x73"), $couiucmsqaieciue); foreach ($couiucmsqaieciue as $ciyackuwsqkoqese => $yemgmmgogcwccuky) { $couiucmsqaieciue[$ciyackuwsqkoqese] = str_replace("\x23", "\x5c\43", $yemgmmgogcwccuky); micceocwuwkyusic: } kqyoakickmseyyeq: return $couiucmsqaieciue; } public function ogykccuaakuoaese($moooemyaqewumiay) { if (!($moooemyaqewumiay && $this->smyqoiyugouyymcq() && !$this->weysguygiseoukqw(Setting::komosgcgwesseeqo))) { goto iwueukqcywkiyqge; } $moooemyaqewumiay = DOMCrawler::igmaewykumgwoaoy($moooemyaqewumiay, ["\163\143\162\x69\160\x74\x5b\x73\x72\143\x5d" => ["\x64\145\146\x65\x72" => "\x31"]]); iwueukqcywkiyqge: return $moooemyaqewumiay; } public function skoysuqwuwmgqckq($moooemyaqewumiay) { try { $moooemyaqewumiay = (string) preg_replace("\x2f\x74\171\x70\x65\75\x5b\47\x22\x5d\x74\x65\x78\x74\134\x2f\50\152\x61\166\x61\x73\143\x72\x69\160\x74\174\143\x73\x73\x29\133\x27\x22\135\x2f", '', $moooemyaqewumiay); } catch (Exception $wgaoewqkwgomoaai) { } return $moooemyaqewumiay; } public function sskqqicoymkgosmg() { global $wp_scripts; if (!(isset($wp_scripts->registered["\x6a\161\x75\x65\x72\171"]) && $wp_scripts->registered["\x6a\161\165\x65\x72\171"])) { goto ykwasaaoeeiuomim; } $ugmuiugkaygmsagq = $wp_scripts->registered["\152\x71\165\x65\x72\171"]->deps; $wp_scripts->registered["\x6a\161\165\x65\162\171"]->deps = array_diff($ugmuiugkaygmsagq, ["\x6a\x71\165\x65\x72\171\x2d\155\151\x67\x72\x61\x74\145"]); ykwasaaoeeiuomim: } private function qakkmcaacokcggca() : bool { return !empty($this->conditionals); } public function igkyukqkywwwyyaa(string $nsmgceoqaqogqmuw) : string { if (!preg_match_all(self::gucqkiywkqyomkye, $nsmgceoqaqogqmuw, $meyiiwcswqmuggyg)) { goto egaymskkosukqeao; } foreach ($meyiiwcswqmuggyg[0] as $oskqwiqyoigkqgys) { $this->conditionals[] = $oskqwiqyoigkqgys; cwikoaeqmmoimmso: } acggikioyeueeowg: $nsmgceoqaqogqmuw = preg_replace(self::gucqkiywkqyomkye, '', $nsmgceoqaqogqmuw); egaymskkosukqeao: return $nsmgceoqaqogqmuw; } public function iaqamwweqykkuysc(string $nsmgceoqaqogqmuw) : string { if (!$this->qakkmcaacokcggca()) { goto kgmeiwiakwicgkkk; } foreach ($this->conditionals as $oskqwiqyoigkqgys) { if (!preg_match("\100\136\50\x3f\74\157\160\145\156\x69\x6e\x67\76\x3c\x21\x2d\x2d\x5c\x5b\151\146\x5b\136\x5c\x5d\x5d\52\x3f\134\135\x3e\134\163\x2a\x3f\x28\x3f\72\x3c\x21\55\55\76\51\77\x5c\x73\52\x3c\x73\143\x72\151\x70\164\x28\77\72\x5c\x73\x5b\x5e\76\135\52\77\x3e\51\51\134\x73\52\50\77\74\143\x6f\x6e\x74\x65\156\164\x3e\56\x2a\x3f\x29\x5c\x73\52\50\x3f\74\143\154\x6f\163\151\156\x67\x3e\74\x2f\163\x63\162\151\160\x74\76\134\x73\52\x28\x3f\72\x3c\41\55\55\x29\x3f\134\x73\x2a\77\74\41\134\133\x65\156\x64\x69\146\134\135\55\x2d\76\x29\44\x40\x69\x73", $oskqwiqyoigkqgys, $meyiiwcswqmuggyg)) { goto cwswueuqoamqasya; } $oskqwiqyoigkqgys = $meyiiwcswqmuggyg["\157\160\x65\x6e\151\156\x67"] . preg_replace("\43\x28\x3f\x3c\x21\x5c\134\x29\x28\134\44\174\134\x5c\x29\43", "\134\x5c\x24\61", $meyiiwcswqmuggyg["\143\x6f\156\x74\x65\156\x74"]) . $meyiiwcswqmuggyg["\143\154\157\x73\151\x6e\147"]; cwswueuqoamqasya: $nsmgceoqaqogqmuw = ManipulateString::wiecmkiugmyyqiqc("\x3c\150\x74\155\x6c\76", "{$oskqwiqyoigkqgys}\x3c\150\x74\155\154\76", $nsmgceoqaqogqmuw); kicwiowcogmauwiy: } kaiesowkgwogqseg: kgmeiwiakwicgkkk: return $nsmgceoqaqogqmuw; } public function igqiyyuceqgcioqy(string $moooemyaqewumiay) : string { $kemceeaciueqwiaq = "\57\50\x3c\50\163\143\x72\x69\160\x74\174\x6c\x69\x6e\x6b\x7c\151\x6d\147\x7c\x66\x6f\x72\x6d\51\50\133\136\x3e\135\52\x29\50\x68\x72\145\x66\x7c\x73\162\x63\x7c\141\143\164\151\x6f\x6e\x29\x3d\x5b\x22\47\135\x29\150\x74\164\x70\163\77\72\x5c\57\x5c\57\x2f\x69"; $wegkgaogqceaicai = "\x24\61\x2f\57"; $ksaameoqigiaoigg = preg_replace($kemceeaciueqwiaq, $wegkgaogqceaicai, $moooemyaqewumiay); if (!$ksaameoqigiaoigg) { goto suuskagowwgsouqw; } $moooemyaqewumiay = $ksaameoqigiaoigg; suuskagowwgsouqw: return $moooemyaqewumiay; } public function seuigwyyuosgeqco(array $oseqkueswiwsceis) : array { if (!$oseqkueswiwsceis) { goto aquqkiggamaoegoo; } foreach ($oseqkueswiwsceis as $ciyackuwsqkoqese => $egsumesakcaaukem) { $oseqkueswiwsceis[$ciyackuwsqkoqese]["\x75\162\154"] = str_replace(["\150\164\x74\160\x3a", "\150\164\164\x70\x73\72"], '', $egsumesakcaaukem["\x75\x72\154"]); csieaismmmocyacu: } omykokikgocoikec: aquqkiggamaoegoo: return $oseqkueswiwsceis; } }
