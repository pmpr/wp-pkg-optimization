<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             624c1ef6c8776             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Asset\Cleanup; use Pmpr\Common\Foundation\Decorator\DecoratorAsset; use Pmpr\Common\Foundation\Decorator\Plugin\DecoratorWoocommerce; use Pmpr\Common\Foundation\DOMCrawler; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString; use Pmpr\Module\Optimization\Manipulate\Manipulate; use Pmpr\Module\Optimization\Asset\Setting; use Pmpr\Module\Optimization\Manipulate\ManipulateFormat; class Resource extends Common { const gucqkiywkqyomkye = "\57\74\41\55\55\x5c\133\151\146\x5b\x5e\134\135\x5d\52\77\x5c\135\76\x2e\x2a\x3f\x3c\x21\x5c\x5b\145\x6e\x64\151\x66\134\135\x2d\55\x3e\57\x69\163"; protected ?array $conditionals = []; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\151\x6e\151\164", [$this, "\x69\156\151\x74"])->qcsmikeggeemccuu("\x77\160\x5f\x65\156\x71\x75\145\x75\x65\x5f\x73\143\162\x69\x70\x74\163", [$this, "\155\151\167\157\x63\143\165\x75\x73\x61\161\153\171\x67\x73\161"], 999); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x6f\x70\164\x5f\142\165\x66\x66\x65\162\137\160\162\157\143\x65\163\x73"), [$this, "\157\147\171\x6b\x63\x63\x75\141\141\x6b\165\157\x61\x65\x73\x65"], 25)->cecaguuoecmccuse($this->ygyygikyocoymgaw("\157\160\164\137\142\x75\x66\146\145\x72\x5f\160\x72\x6f\x63\x65\x73\163"), [$this, "\163\153\157\x79\x73\165\161\x77\x75\x77\155\147\x71\x63\x6b\x71"], 25); if (!($this->weysguygiseoukqw(Setting::qwcseoyssyaciyqk) && !Manipulate::swuauuwqoauayowm())) { goto mwieyyqamgwicgco; } $this->cecaguuoecmccuse("\167\160\137\x65\156\161\x75\145\165\145\137\x73\x63\162\151\x70\164\163", [$this, "\163\x73\x6b\161\161\x69\143\157\171\155\153\147\x6f\163\x6d\147"], 999); mwieyyqamgwicgco: if (!$this->ygyygikyocoymgaw(Setting::aysyuueaueiamysu)) { goto wkiymcoqqiigqaaw; } $this->cecaguuoecmccuse("\x77\x70\137\143\x61\x6c\143\165\154\141\x74\x65\x5f\151\155\x61\x67\145\137\x73\x72\x63\163\145\164", [$this, "\x73\x65\x75\151\147\167\171\x79\x75\157\x73\147\145\161\143\157"], 21)->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x6f\x70\x74\137\x62\165\x66\x66\145\162\x5f\160\x72\x6f\x63\x65\x73\163"), [$this, "\x69\147\x71\151\x79\x79\x75\143\145\x71\x67\x63\x69\157\161\x79"], 21); wkiymcoqqiigqaaw: $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x6f\160\164\137\x62\x75\x66\x66\145\162\x5f\160\162\157\143\145\x73\163"), [$this, "\x69\x67\x6b\x79\x75\x6b\x71\153\171\167\x77\167\171\x79\141\x61"], 1)->cecaguuoecmccuse($this->ygyygikyocoymgaw("\157\x70\x74\137\142\165\x66\x66\145\x72\x5f\x70\162\x6f\x63\x65\x73\163"), [$this, "\x69\x61\161\141\x6d\x77\167\145\161\x79\153\153\165\171\163\x63"], 99999); parent::kgquecmsgcouyaya(); } public function init() { if (!$this->weysguygiseoukqw(Setting::oeiwkesueukkqggs)) { goto esqwswmoegiqcckg; } $this->yguckmcqkqsysmwu(); esqwswmoegiqcckg: if (!$this->weysguygiseoukqw(Setting::owgquqcyoseeeiqg)) { goto qmokwkocmcyeyesc; } $this->yausywiikmmqckki(); qmokwkocmcyeyesc: } public function yguckmcqkqsysmwu() { $this->cecaguuoecmccuse("\x65\x6d\x6f\152\x69\x5f\x73\x76\147\137\x75\x72\154", "\137\137\162\x65\164\165\162\x6e\x5f\146\141\154\x73\x65")->kuieicsuscgmwigg("\167\x70\137\160\162\x69\x6e\164\137\x73\164\x79\154\145\x73", "\x70\x72\x69\156\164\x5f\145\155\157\152\151\x5f\163\x74\171\154\x65\x73")->ggmgmqswqkgecosg("\143\x6f\x6d\155\x65\x6e\164\137\x74\x65\x78\164\x5f\x72\x73\163", "\x77\x70\x5f\x73\x74\141\x74\151\143\151\x7a\145\x5f\x65\x6d\157\x6a\151")->ggmgmqswqkgecosg("\x74\150\145\137\x63\x6f\156\x74\x65\x6e\164\x5f\x66\145\x65\144", "\x77\x70\x5f\x73\x74\x61\164\x69\x63\151\x7a\145\137\145\155\x6f\x6a\151")->ggmgmqswqkgecosg("\x77\x70\137\155\x61\151\154", "\x77\160\137\x73\x74\141\164\151\x63\151\x7a\x65\137\145\155\x6f\152\x69\137\x66\x6f\162\137\145\x6d\141\151\154")->kuieicsuscgmwigg("\167\x70\x5f\x68\145\141\144", "\x70\162\x69\x6e\164\137\145\155\x6f\x6a\x69\137\144\x65\x74\145\x63\164\151\x6f\x6e\137\x73\x63\162\151\x70\164", 7)->cecaguuoecmccuse("\x77\160\137\x72\x65\163\x6f\x75\162\x63\145\137\x68\151\x6e\x74\163", [$this, "\x6d\x61\171\x6b\143\x6d\x79\x79\x65\161\163\x6b\147\x6d\x65\167"], 10, 2); } public function yausywiikmmqckki() { global $wp; $wp->public_query_vars = array_diff($wp->public_query_vars, ["\x65\155\x62\x65\x64"]); $this->kuieicsuscgmwigg("\167\x70\x5f\x68\145\x61\144", "\x77\x70\137\157\x65\155\142\145\144\137\141\144\x64\137\150\x6f\163\164\x5f\152\163")->cecaguuoecmccuse("\x65\155\x62\x65\x64\x5f\x6f\145\155\x62\x65\144\137\x64\151\x73\x63\x6f\x76\145\162", "\137\137\162\145\164\x75\162\156\x5f\146\x61\x6c\163\x65")->kuieicsuscgmwigg("\167\160\137\x68\x65\x61\144", "\x77\x70\137\157\145\155\x62\145\x64\137\x61\144\x64\137\x64\x69\163\143\x6f\x76\x65\x72\171\x5f\x6c\151\x6e\153\163")->kuieicsuscgmwigg("\x72\145\163\164\137\141\x70\x69\137\151\x6e\151\164", "\x77\x70\137\x6f\x65\x6d\142\145\x64\137\162\x65\147\151\163\x74\145\162\137\162\157\165\x74\x65")->cecaguuoecmccuse("\x72\145\x77\x72\151\x74\x65\x5f\x72\165\x6c\x65\x73\137\141\x72\162\x61\x79", [$this, "\171\161\x6f\171\141\x65\x63\157\x67\x77\x73\x6b\x6d\x65\x6b\157"])->ggmgmqswqkgecosg("\157\145\x6d\x62\x65\x64\x5f\144\141\x74\141\160\x61\x72\163\x65", "\x77\160\x5f\x66\x69\154\164\x65\x72\137\x6f\x65\155\142\145\x64\137\x72\145\x73\165\x6c\x74")->ggmgmqswqkgecosg("\x70\162\x65\x5f\x6f\145\x6d\142\145\144\137\162\145\x73\165\154\x74", "\167\x70\137\146\x69\154\164\x65\162\x5f\160\x72\145\x5f\x6f\x65\x6d\x62\x65\x64\137\x72\145\163\x75\154\x74"); } public function yqoyaecogwskmeko($acqqmqmcquukaqsc) { foreach ($acqqmqmcquukaqsc as $ekuqiqmikiicgoss => $squgkkgwywimowua) { if (!(false !== strpos($squgkkgwywimowua, "\x65\x6d\142\x65\144\x3d\x74\162\x75\x65"))) { goto kmooekeyemqgucci; } ManipulateArray::unset($acqqmqmcquukaqsc, $ekuqiqmikiicgoss); kmooekeyemqgucci: qksckewucmosemuo: } mosuacsuaasssciu: return $acqqmqmcquukaqsc; } public function maykcmyyeqskgmew($auwuoyyagaiegwae, $ayegqaqygsqsmews) : array { if (!("\x64\x6e\x73\55\160\x72\x65\146\145\164\143\150" == $ayegqaqygsqsmews)) { goto cmmusgkieoqyymgs; } $ycoyiwsmwwiqwogw = $this->sscegwueamckwmcy("\145\155\x6f\152\x69\x5f\163\166\147\137\x75\x72\154", "\x68\164\x74\160\163\72\x2f\x2f\163\x2e\167\56\157\x72\147\x2f\x69\x6d\x61\147\145\x73\x2f\143\157\162\145\x2f\145\155\x6f\x6a\151\57\x32\56\62\x2e\61\x2f\163\166\x67\57"); if (!$ycoyiwsmwwiqwogw) { goto skuuyysooocugyww; } $auwuoyyagaiegwae = array_diff($auwuoyyagaiegwae, [$ycoyiwsmwwiqwogw]); skuuyysooocugyww: cmmusgkieoqyymgs: return $auwuoyyagaiegwae; } public function miwoccuusaqkygsq() { if (!$this->ocysssyiuaueqiei()) { goto gicuuwuuuwumyooa; } if (!$this->weysguygiseoukqw(Setting::uwcmcaucigmuiugg)) { goto mkgmaguyswskyioa; } DecoratorAsset::qkyugogwegiuiime("\x64\141\163\150\151\x63\x6f\x6e\x73"); mkgmaguyswskyioa: if (!$this->weysguygiseoukqw(Setting::gukmqsiumkmukaoe)) { goto skwusmoyomgqkimm; } DecoratorAsset::qkyugogwegiuiime("\x77\143\55\x62\x6c\157\x63\153\x73\x2d\163\x74\x79\x6c\x65"); DecoratorAsset::qkyugogwegiuiime("\x77\x70\x2d\142\x6c\157\143\153\55\154\x69\x62\x72\x61\x72\171"); DecoratorAsset::qkyugogwegiuiime("\x77\x70\x2d\142\154\157\143\153\x2d\x6c\x69\142\x72\x61\162\x79\55\164\x68\x65\x6d\145"); DecoratorAsset::qkyugogwegiuiime("\x77\143\x2d\142\154\157\143\153\x73\55\166\x65\156\x64\x6f\162\x73\x2d\x73\164\x79\x6c\145"); skwusmoyomgqkimm: if (!($this->weysguygiseoukqw(Setting::kcgocyessaswyike) && ManipulateWoocommerce::ayseokmqycoqaigc() && (DecoratorWoocommerce::ckeyeaouokcgeqeq() || DecoratorWoocommerce::gqoskmoekogyqwsc()))) { goto usyckeewsgwaysam; } DecoratorAsset::saisougiwmauksiy("\172\x78\x63\166\x62\156\55\x61\163\x79\x6e\x63"); DecoratorAsset::saisougiwmauksiy("\x70\141\163\163\x77\x6f\x72\x64\x2d\163\x74\162\145\x6e\147\x74\x68\x2d\x6d\x65\164\x65\x72"); DecoratorAsset::saisougiwmauksiy("\167\x63\x2d\x70\141\163\x73\x77\157\x72\x64\x2d\163\164\x72\x65\156\x67\x74\x68\55\x6d\145\164\x65\162"); usyckeewsgwaysam: gicuuwuuuwumyooa: } private function smyqoiyugouyymcq() : bool { return !Manipulate::cmaecekuqkwmemms("\x44\117\x4e\124\x5f\120\105\122\x46\x4f\122\115\101\116\103\105\137\117\x50\x54\x49\115\x49\132\x45", false); } public function xwgeqeiyismgqqgc() { $couiucmsqaieciue = ["\147\151\163\x74\56\147\x69\x74\150\x75\x62\x2e\143\157\x6d", "\x63\x6f\x6e\x74\145\156\164\x2e\x6a\x77\x70\154\141\x74\x66\157\x72\x6d\56\x63\x6f\x6d", "\152\163\x2e\x68\163\146\x6f\x72\x6d\x73\x2e\x6e\145\x74", "\167\x77\167\56\165\x70\x6c\x61\165\156\x63\x68\56\x63\157\x6d", "\147\157\x6f\x67\154\x65\x2e\x63\x6f\155\57\162\145\x63\x61\160\164\143\x68\x61", "\x77\x69\x64\x67\145\x74\x2e\x72\145\166\x69\x65\x77\163\x2e\143\157\56\165\153", "\166\x65\162\x69\146\171\x2e\x61\x75\164\150\157\162\x69\x7a\x65\x2e\x6e\x65\164\57\141\x6e\x65\164\x73\x65\x61\x6c", "\x6c\x69\x62\x2f\x61\x64\155\151\156\57\141\163\163\145\164\x2f\154\x69\142\57\x77\x65\x62\x66\x6f\156\164\x2f\x77\x65\x62\x66\157\156\x74\x2e\155\151\x6e\56\152\x73", "\x61\160\x70\x2e\155\141\151\x6c\x65\x72\154\151\164\x65\x2e\143\x6f\155", "\167\x69\144\147\x65\164\x2e\x72\145\x76\151\x65\x77\163\x2e\151\x6f"]; $igqaiqowiaqywsyi = "\143\144\x6e\152\x73\x2e\x63\154\x6f\x75\144\x66\154\141\162\x65\x2e\143\x6f\155\57\141\x6a\x61\x78\x2f\x6c\151\x62\x73\57\152\x71\x75\145\162\171\x2f\x28\x3f\72\x2e\x2b\x29\x2f\x6a\x71\x75\145\x72\171\x28\x3f\x3a\x5c\56\x6d\x69\x6e\x29\x3f\x2e\152\x73"; $aiecucumasmeiqug = site_url(wp_scripts()->registered["\x6a\161\165\145\162\x79\55\143\157\x72\x65"]->src); $iumcyomuwmqgsoca = "\143\x30\x2e\167\160\56\143\157\x6d\x2f\x63\57\x28\x3f\72\56\53\51\57\167\x70\x2d\151\156\x63\154\165\144\145\163\57\152\x73\57\x6a\161\x75\145\x72\x79\x2f\x6a\x71\x75\145\162\171\56\152\x73"; $gkwsawwcyyswewmw = "\141\x6a\x61\170\x2e\x67\x6f\x6f\x67\x6c\x65\x61\160\x69\163\56\x63\157\x6d\x2f\x61\152\141\x78\x2f\154\151\x62\163\57\152\x71\x75\145\x72\x79\57\x28\x3f\x3a\x2e\53\51\57\x6a\161\165\145\x72\171\x28\77\x3a\x5c\x2e\155\151\x6e\51\77\x2e\x6a\x73"; $couiucmsqaieciue[] = ManipulateFormat::cysksgacseyymyqs($aiecucumasmeiqug); $couiucmsqaieciue[] = $iumcyomuwmqgsoca; $couiucmsqaieciue[] = $gkwsawwcyyswewmw; $couiucmsqaieciue[] = $igqaiqowiaqywsyi; $couiucmsqaieciue = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\160\x74\137\x70\145\x72\x66\x6f\x72\x6d\141\156\143\x65\x5f\x72\x65\x73\x6f\165\x72\143\x65\x5f\145\x78\143\154\165\x64\x65\x5f\144\x65\146\145\162\137\152\163"), $couiucmsqaieciue); foreach ($couiucmsqaieciue as $ciyackuwsqkoqese => $yemgmmgogcwccuky) { $couiucmsqaieciue[$ciyackuwsqkoqese] = str_replace("\x23", "\134\43", $yemgmmgogcwccuky); cysgqimowcqoqqsc: } kakkuyeccaacewyo: return $couiucmsqaieciue; } public function ogykccuaakuoaese($moooemyaqewumiay) { if (!($moooemyaqewumiay && $this->smyqoiyugouyymcq())) { goto ismeikacqqyqcmqe; } $moooemyaqewumiay = DOMCrawler::igmaewykumgwoaoy($moooemyaqewumiay, ["\163\143\x72\x69\160\x74\133\163\162\x63\135" => ["\144\x65\x66\x65\162" => "\x31"]]); ismeikacqqyqcmqe: return $moooemyaqewumiay; } public function skoysuqwuwmgqckq($scwiymciagumsuiw) { return preg_replace("\x2f\x74\171\x70\x65\75\133\47\42\135\x74\145\x78\x74\x5c\57\50\152\141\x76\x61\163\143\162\x69\x70\x74\174\143\163\x73\x29\133\47\42\135\x2f", '', $scwiymciagumsuiw); } public function sskqqicoymkgosmg() { global $wp_scripts; if (!(isset($wp_scripts->registered["\152\161\x75\145\162\171"]) && $wp_scripts->registered["\x6a\161\x75\145\162\x79"])) { goto qsokkkyoackoycie; } $ugmuiugkaygmsagq = $wp_scripts->registered["\152\x71\x75\x65\x72\x79"]->deps; $wp_scripts->registered["\152\161\x75\145\162\171"]->deps = array_diff($ugmuiugkaygmsagq, ["\x6a\161\x75\x65\x72\x79\55\155\151\x67\162\x61\x74\145"]); qsokkkyoackoycie: } private function qakkmcaacokcggca() : bool { return !empty($this->conditionals); } public function igkyukqkywwwyyaa(string $nsmgceoqaqogqmuw) : string { if (!preg_match_all(self::gucqkiywkqyomkye, $nsmgceoqaqogqmuw, $meyiiwcswqmuggyg)) { goto qcgyggiaowuqswuw; } foreach ($meyiiwcswqmuggyg[0] as $oskqwiqyoigkqgys) { $this->conditionals[] = $oskqwiqyoigkqgys; yseyyukqaowwouua: } casgoamcqkekgeeo: $nsmgceoqaqogqmuw = preg_replace(self::gucqkiywkqyomkye, '', $nsmgceoqaqogqmuw); qcgyggiaowuqswuw: return $nsmgceoqaqogqmuw; } public function iaqamwweqykkuysc(string $nsmgceoqaqogqmuw) : string { if (!$this->qakkmcaacokcggca()) { goto emauuoieewwoeyqq; } foreach ($this->conditionals as $oskqwiqyoigkqgys) { if (!preg_match("\100\136\50\x3f\74\x6f\160\x65\x6e\x69\156\147\76\74\41\55\x2d\x5c\x5b\x69\x66\x5b\136\134\135\135\x2a\77\134\x5d\x3e\x5c\x73\x2a\77\x28\x3f\72\x3c\x21\55\x2d\x3e\51\x3f\134\163\x2a\74\x73\x63\162\151\160\x74\x28\x3f\72\134\x73\x5b\x5e\76\x5d\x2a\77\x3e\51\x29\x5c\x73\x2a\50\x3f\74\143\157\156\164\x65\156\164\x3e\x2e\52\x3f\x29\x5c\163\52\x28\77\74\x63\154\157\x73\x69\x6e\x67\76\x3c\x2f\x73\143\x72\x69\160\164\76\x5c\x73\x2a\50\x3f\72\x3c\41\55\x2d\51\77\134\x73\52\x3f\74\41\134\x5b\x65\x6e\x64\151\146\134\x5d\55\x2d\76\51\x24\100\151\x73", $oskqwiqyoigkqgys, $meyiiwcswqmuggyg)) { goto kwsqgqmwyyeykgum; } $oskqwiqyoigkqgys = $meyiiwcswqmuggyg["\x6f\x70\x65\x6e\151\x6e\x67"] . preg_replace("\x23\50\x3f\x3c\x21\x5c\134\51\50\134\x24\x7c\134\x5c\x29\43", "\x5c\x5c\x24\61", $meyiiwcswqmuggyg["\143\157\156\x74\x65\156\x74"]) . $meyiiwcswqmuggyg["\143\154\157\163\x69\156\147"]; kwsqgqmwyyeykgum: $nsmgceoqaqogqmuw = ManipulateString::wiecmkiugmyyqiqc("\x3c\x68\164\155\x6c\x3e", "{$oskqwiqyoigkqgys}\74\x68\x74\155\x6c\x3e", $nsmgceoqaqogqmuw); ywqakqkmmcoceqka: } sooecucuakgkuyis: emauuoieewwoeyqq: return $nsmgceoqaqogqmuw; } public function igqiyyuceqgcioqy(string $moooemyaqewumiay) : string { $kemceeaciueqwiaq = "\57\50\x3c\50\x73\143\x72\151\x70\164\174\154\151\156\x6b\174\x69\155\147\x7c\x66\157\x72\x6d\x29\50\x5b\x5e\76\135\52\x29\x28\150\162\145\146\x7c\163\162\x63\174\141\x63\164\x69\157\156\51\75\133\42\x27\x5d\51\x68\x74\164\160\163\x3f\72\134\x2f\x5c\57\57\151"; $wegkgaogqceaicai = "\44\61\x2f\x2f"; $ksaameoqigiaoigg = preg_replace($kemceeaciueqwiaq, $wegkgaogqceaicai, $moooemyaqewumiay); if (!$ksaameoqigiaoigg) { goto koukiyqaccegmquc; } $moooemyaqewumiay = $ksaameoqigiaoigg; koukiyqaccegmquc: return $moooemyaqewumiay; } public function seuigwyyuosgeqco(array $oseqkueswiwsceis) : array { if (!$oseqkueswiwsceis) { goto egkeqqgakieyimuq; } foreach ($oseqkueswiwsceis as $ciyackuwsqkoqese => $egsumesakcaaukem) { $oseqkueswiwsceis[$ciyackuwsqkoqese]["\165\x72\x6c"] = str_replace(["\150\164\x74\x70\72", "\150\164\x74\x70\163\x3a"], '', $egsumesakcaaukem["\165\x72\x6c"]); oqwwacmigasucsoc: } ekakkiuuquqkccse: egkeqqgakieyimuq: return $oseqkueswiwsceis; } }
