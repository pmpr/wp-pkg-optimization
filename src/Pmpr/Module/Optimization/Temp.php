<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63ffbdfd59a7a             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\Decorator\DecoratorUser; use Pmpr\Common\Foundation\Decorator\Post\DecoratorPost; use Pmpr\Common\Foundation\Decorator\Taxonomy\DecoratorTaxonomy; use Pmpr\Common\Foundation\Decorator\Taxonomy\DecoratorTerm; use Pmpr\Common\Foundation\Manipulate\ManipulateQuery; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulatePlugin; use Pmpr\Common\Foundation\Manipulate\Post\ManipulateComment; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTaxonomy; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Module\Optimization\Manipulate\Manipulate; use Pmpr\Module\Optimization\Manipulate\ManipulateFormat; use Pmpr\Module\Optimization\Manipulate\ManipulateI18N; use Pmpr\Module\Optimization\Manipulate\ManipulateFile; use Exception; use FilesystemIterator; use IteratorIterator; use RegexIterator; use WP_Post; use WP_Taxonomy; use WP_Term; use WP_Upgrader; abstract class Temp extends Container { protected ?string $id = null; protected $paths; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\163\167\x69\x74\x63\150\137\164\x68\x65\155\145", [$this, "\x77\x65\151\153\x6b\x79\x69\x71\157\x6f\x67\153\157\x79\143\x65"])->qcsmikeggeemccuu("\x70\162\x65\137\160\157\163\x74\x5f\x75\160\x64\141\x74\x65", [$this, "\141\165\x77\161\x79\147\x6d\x77\x77\x69\x75\x67\x63\x69\145\x65"], 2)->qcsmikeggeemccuu("\165\x70\147\162\141\x64\x65\x72\137\x70\x72\157\x63\x65\163\163\137\x63\x6f\155\160\x6c\145\164\145", [$this, "\x6b\x6f\157\x63\165\x79\x69\171\151\151\x65\165\x61\153\155\155"], 2)->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\157\160\x74\137\x70\x75\162\147\145\x5f\x63\141\143\150\145\137\x66\151\x6c\145\x73"), [$this, "\x77\145\x69\153\153\x79\x69\x71\157\157\147\153\x6f\171\143\145"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\x6f\x70\164\x5f\141\x66\164\x65\x72\137\143\x6c\145\141\x6e\137\x70\157\x73\164"), [$this, "\161\x61\x67\155\167\167\155\x71\151\151\143\x61\171\141\161\147"])->qcsmikeggeemccuu("\143\157\155\x6d\x65\156\164\x5f\160\157\x73\x74", [$this, "\x6d\x6d\145\151\165\171\165\147\x65\x65\153\157\x71\167\143\x73"], 2, 99)->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\x6f\x70\164\137{$this->mwikyscisascoeea()}\x5f\143\154\145\141\x6e\137\144\157\x6d\141\x69\156"), [$this, "\167\x65\x69\153\x6b\171\x69\161\x6f\157\147\x6b\x6f\171\x63\145"]); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\157\160\x74\137\143\x6c\145\141\x6e\x5f\x66\151\154\145\x73"), [$this, "\151\x6d\x6f\167\x61\x6d\x69\x77\x65\145\x6b\x79\147\157\x63\155"]); if (!ManipulateQuery::euqowsuwmgokuqqo()) { goto aqeyqwuywqcmuoce; } $seyqqsmuaiegkeeq = ManipulateTaxonomy::ciugwooasaqcywas(["\x70\x75\142\x6c\151\143" => true, "\160\x75\x62\x6c\x69\x63\154\171\x5f\161\x75\x65\x72\171\x61\142\154\145" => true, self::aisguagukaewucii => self::emgcgiseaoouacge]); foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya) { $this->cecaguuoecmccuse("{$kesssewsiegssiya}\x5f\162\157\x77\x5f\x61\x63\164\x69\x6f\x6e\x73", [$this, "\167\163\x71\x79\x73\x79\x61\167\167\167\x67\x67\147\x6f\167\x63"], 2); kikkkocywiyuyuqw: } kwcscewawgicomok: aqeyqwuywqcmuoce: parent::kgquecmsgcouyaya(); } public function mmeiuyugeekoqwcs($aqqmosqmsuueyaes, $swyywyqesisooayc) { $post = ManipulateComment::ayueggmoqeeukqmq($aqqmosqmsuueyaes); if (!$post) { goto aymoguycgmuggcik; } $this->ekcemquyyiqykmoo(ManipulatePost::mwikyscisascoeea($post)); aymoguycgmuggcik: } public function mwikyscisascoeea() : string { return $this->id; } public function iwqysmawycmsmces() : array { $oegoegssokkyiqam = $this->paths; if (!is_string($oegoegssokkyiqam)) { goto qayiqaykkywcyisq; } $oegoegssokkyiqam = [$oegoegssokkyiqam]; qayiqaykkywcyisq: return $oegoegssokkyiqam; } public function auwqygmwwiugciee($yekqqesogweecqyc, $icwicymcioeyeyek) { $post = ManipulatePost::get($yekqqesogweecqyc); if (!($post && "\160\x75\142\x6c\x69\163\150" === ManipulatePost::ucwmcwqmqwaymkkc($post))) { goto akoweomooyuwamow; } $swaukaagekiououo = ManipulateI18N::emqmaiomewcmuacu($yekqqesogweecqyc); $owwcaiyoucwcwmmq = $this->skomiaywsggiyamc($yekqqesogweecqyc, $post); $owwcaiyoucwcwmmq = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\x70\164\137\160\x6f\163\164\137\x70\x75\x72\147\x65\137\165\162\x6c\163"), $owwcaiyoucwcwmmq, $post); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\x70\x74\137\x62\145\x66\157\162\x65\137\x63\x6c\x65\141\x6e\x5f\x70\x6f\x73\x74"), $post, $owwcaiyoucwcwmmq, $swaukaagekiououo); $this->wckuqskowgoaoqom($owwcaiyoucwcwmmq); $this->ciyymuaoqiqmucei($swaukaagekiououo); $this->uqigacqieikayuac(); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\x70\x74\x5f\141\146\x74\x65\162\x5f\x63\x6c\145\141\x6e\137\x70\157\x73\164"), $post, $owwcaiyoucwcwmmq, $swaukaagekiououo); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\160\164\137{$this->mwikyscisascoeea()}\137\x61\x66\x74\x65\162\137\143\154\145\x61\156\137\x70\x6f\163\164"), $post, $owwcaiyoucwcwmmq, $swaukaagekiououo); akoweomooyuwamow: } public function imowamiweekygocm(array $auwuoyyagaiegwae = []) { $iaceaqwggsgmasqe = []; foreach ($auwuoyyagaiegwae as $eeamcawaiqocomwy) { $mgoiyiawsmmgasic = ManipulateFormat::kcwgwosqkkkkmuks($eeamcawaiqocomwy); $iaceaqwggsgmasqe[] = $mgoiyiawsmmgasic["\x73\143\150\x65\155\145"] . "\72\57\57" . $mgoiyiawsmmgasic["\150\157\x73\164"] . "\x2a" . $mgoiyiawsmmgasic["\160\x61\x74\x68"]; cueuscqkicwwicei: } oaociaioauummsey: return $iaceaqwggsgmasqe; } public function koocuyiyiieuakmm($kkkswwyyaoeysaio, $iaakskwmyqceoscy) { if (!("\x75\160\144\141\164\x65" === $iaakskwmyqceoscy["\x61\x63\x74\151\x6f\x6e"])) { goto eysuawiooiswaseq; } if (!("\164\150\x65\155\x65" === $iaakskwmyqceoscy["\x74\171\x70\x65"])) { goto kiewcwsykccgocuc; } if (!is_array($iaakskwmyqceoscy["\x74\150\145\155\x65\163"])) { goto suscosoukqeyyqgs; } $current_theme = wp_get_theme(); $sgmuqamasucuikqa = [ $current_theme->get_template(), $current_theme->get_stylesheet(), ]; if (!array_intersect($iaakskwmyqceoscy["\x74\150\x65\x6d\x65\x73"], $sgmuqamasucuikqa)) { goto gcecamucuogcciig; } $this->weikkyiqoogkoyce(); gcecamucuogcciig: suscosoukqeyyqgs: kiewcwsykccgocuc: eysuawiooiswaseq: } public function eugcsqcwkqseakoe($mceokigoiqekskwe, $gywkakmagykqkiei, $kesssewsiegssiya) { if (!ManipulateTaxonomy::cekoogweeooasayu($kesssewsiegssiya)) { goto iecqkqoiqimmisyw; } $this->weikkyiqoogkoyce(); iecqkqoiqimmisyw: } private function wgokqcqsmcqsiiue($miawkwqioaeasiig) { if (!$this->kcciqwskewsuaemk()->asysewkmisimumay($miawkwqioaeasiig)) { goto eogomkswkaqwyycm; } ManipulateFile::cseoaieqoukqgcay($miawkwqioaeasiig); eogomkswkaqwyycm: } private function qeoaoiweucueeuqu(string $eeamcawaiqocomwy, $ymiyawysimukkoso = false) { global $wp_rewrite; $msimssikcguyqcac = ManipulateFormat::kcwgwosqkkkkmuks($eeamcawaiqocomwy); foreach ($this->gqguucgwsqasamke($msimssikcguyqcac["\x68\157\163\164"]) as $miawkwqioaeasiig) { $mkomwsiykqigmqca = $miawkwqioaeasiig . $msimssikcguyqcac["\160\141\164\x68"]; if (!$this->kcciqwskewsuaemk()->exists($mkomwsiykqigmqca)) { goto msiuqseowuumiwuo; } foreach (ManipulateFile::kiygcugekegoqauw($mkomwsiykqigmqca) as $igqsaukqcqscimok) { if (!ManipulateFile::mecmkmogggamegic($igqsaukqcqscimok)) { goto wyqueeskecameuks; } $this->kcciqwskewsuaemk()->remove(ManipulateFile::scikcaaaiwcsqowm($igqsaukqcqscimok)); wyqueeskecameuks: kikkkoqiumqoeiyy: } assoyoeukmqiucyq: if (!$ymiyawysimukkoso) { goto esokkakkumskkmiu; } $this->wgokqcqsmcqsiiue(trailingslashit($mkomwsiykqigmqca) . $wp_rewrite->pagination_base); esokkakkumskkmiu: msiuqseowuumiwuo: euuekiyqwkowiees: } egiauwuekseyeaeq: } public function gqguucgwsqasamke($qcqaayguacmuykwi, $mkomwsiykqigmqca = '', $iuomscuiswckwcoe = false) { if (!$mkomwsiykqigmqca) { goto iayguaeseyaemwkk; } if (!is_array($mkomwsiykqigmqca)) { goto gqycmyieayoegcsy; } $oegoegssokkyiqam = $mkomwsiykqigmqca; goto sqiyuasgusgawuoi; gqycmyieayoegcsy: $oegoegssokkyiqam = [$mkomwsiykqigmqca]; sqiyuasgusgawuoi: goto akyiiioycmgqyuok; iayguaeseyaemwkk: $oegoegssokkyiqam = $this->iwqysmawycmsmces(); akyiiioycmgqyuok: if (isset($eewgemuwouukmwgk[$qcqaayguacmuykwi])) { goto mcuoyseuwoueyaie; } $eewgemuwouukmwgk[$qcqaayguacmuykwi] = []; foreach ($oegoegssokkyiqam as $mkomwsiykqigmqca) { $mkomwsiykqigmqca = trailingslashit($mkomwsiykqigmqca); try { $mcowwqgmkuemoumu = new IteratorIterator(new FilesystemIterator($mkomwsiykqigmqca)); } catch (Exception $iewosgggaueeyymg) { return []; } $ucccueqywigcukcc = sprintf("\57\45\x31\x24\163\45\x32\44\163\x28\56\52\x29\57\151", ManipulateFile::cgwcgscqeqauaagi($mkomwsiykqigmqca, true), $qcqaayguacmuykwi); try { $owouacqkcukeeomw = new RegexIterator($mcowwqgmkuemoumu, $ucccueqywigcukcc); foreach ($owouacqkcukeeomw as $uwsgakoiqomwikmy) { $eewgemuwouukmwgk[$qcqaayguacmuykwi][] = ManipulateFile::scikcaaaiwcsqowm($uwsgakoiqomwikmy); mqacqosyicuiqwia: } guummoewucyeuiek: } catch (Exception $iewosgggaueeyymg) { $eewgemuwouukmwgk[$qcqaayguacmuykwi] = []; } owiguescmqyqukui: } ycomeuqeessamows: mcuoyseuwoueyaie: return $eewgemuwouukmwgk[$qcqaayguacmuykwi]; } public function qagmwwmqiicayaqg(WP_Post $post) { foreach ($this->soycogqiiekoekgq($post) as $eeamcawaiqocomwy) { $this->qeoaoiweucueeuqu($eeamcawaiqocomwy); ieoeeyieoskuyiyw: } kwowggaooiyqawyq: } public function wsqysyawwwgggowc($ccowyogiqwikkkie, $iwewcwusemqaiggk) { if (!DecoratorUser::scmcyesmmikkucie()) { goto ciiyqsiswkcwsocm; } $eeamcawaiqocomwy = wp_nonce_url(ManipulateServer::oiucukewkckkwiqc("\141\x64\x6d\x69\156\55\160\x6f\x73\164\56\x70\x68\160\x3f\x61\x63\x74\151\x6f\156\75\x6f\x70\x74\x69\x6d\x69\x7a\x61\x74\x69\x6f\156\137\160\x75\x72\147\145\137{$this->mwikyscisascoeea()}\46\x74\171\x70\145\75\x74\145\162\x6d\55{$iwewcwusemqaiggk->term_id}\x26\x74\x61\170\x6f\x6e\x6f\x6d\171\x3d{$iwewcwusemqaiggk->taxonomy}"), "\157\x70\x74\151\155\151\172\141\x74\x69\x6f\x6e\137\x70\x75\x72\147\x65\137{$this->mwikyscisascoeea()}\x5f\x74\x65\x72\x6d\55{$iwewcwusemqaiggk->term_id}"); $ccowyogiqwikkkie["\x6f\160\164\x69\155\151\x7a\x61\164\151\x6f\x6e\137\160\165\x72\x67\145\x5f{$this->mwikyscisascoeea()}"] = ManipulateHTML::yuawgssgauywkiia(sprintf(__("\x43\154\145\x61\x72\x20\164\150\151\163\40\45\163", PR__MDL__OPTIMIZATION), $this->mwikyscisascoeea()), $eeamcawaiqocomwy); ciiyqsiswkcwsocm: return $ccowyogiqwikkkie; } private function wgkqeyqiyacgqeso($post) { $cqgoimumaewouews = get_the_time("\131\x2d\x6d\x2d\144", $post); $auwuoyyagaiegwae = []; if (!$cqgoimumaewouews) { goto ugyawwukegyoqmsq; } $ocogsiouoiuuguym = explode("\x2d", $cqgoimumaewouews); $auwuoyyagaiegwae = [get_year_link($ocogsiouoiuuguym[0]), get_month_link($ocogsiouoiuuguym[0], $ocogsiouoiuuguym[1]), get_day_link($ocogsiouoiuuguym[0], $ocogsiouoiuuguym[1], $ocogsiouoiuuguym[2])]; $auwuoyyagaiegwae = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\160\164\137\160\x6f\x73\164\x5f\144\x61\x74\145\x73\x5f\x75\x72\x6c\163"), $auwuoyyagaiegwae); ugyawwukegyoqmsq: return $auwuoyyagaiegwae; } public function yeimaqssyuewkcgm($post) { foreach ($this->wgkqeyqiyacgqeso($post) as $eeamcawaiqocomwy) { $this->qeoaoiweucueeuqu($eeamcawaiqocomwy, true); ukigmkeewuqomooc: } soqkewsayowwcmco: } private function soycogqiiekoekgq(WP_Post $post) { $auwuoyyagaiegwae = []; $seyqqsmuaiegkeeq = DecoratorTaxonomy::qgckgkwskmsomoqs($post, self::ckmqoekmugkggeym); foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya) { if (!($kesssewsiegssiya instanceof WP_Taxonomy && $kesssewsiegssiya->public && "\160\x72\x6f\144\x75\143\x74\x5f\163\x68\151\x70\160\x69\156\147\x5f\143\x6c\x61\163\163" === $kesssewsiegssiya->name)) { goto wicuauokauykwoeu; } $kesssewsiegssiya = ManipulateTaxonomy::aakmagwggmkoiiyu($kesssewsiegssiya); $uyuaosigqymaqsaa = ManipulatePost::weescwwgqgiyumyw($post, $kesssewsiegssiya); if (!$uyuaosigqymaqsaa) { goto kcwgiwimgqesukqu; } foreach ($uyuaosigqymaqsaa as $iwewcwusemqaiggk) { $migiiksoiymissge = ManipulateTerm::qmgcisuuikgmqcsu($iwewcwusemqaiggk, $kesssewsiegssiya); if (!$migiiksoiymissge) { goto qoaawmmcqyacokws; } $auwuoyyagaiegwae[] = $migiiksoiymissge; qoaawmmcqyacokws: if (!ManipulateTaxonomy::aewcsqigycuaekym($kesssewsiegssiya)) { goto ceosmkqgqgwsowwg; } $mogoquygwgkamaaw = (array) get_ancestors(ManipulateTerm::mwikyscisascoeea($iwewcwusemqaiggk), $kesssewsiegssiya); foreach ($mogoquygwgkamaaw as $aqguqemekkmogkee) { $uasmmsomeawcggee = ManipulateTerm::get($aqguqemekkmogkee, $kesssewsiegssiya); if (!$uasmmsomeawcggee) { goto ggsugekocmsukuci; } $yaycyieqogmsoamk = ManipulateTerm::qmgcisuuikgmqcsu($uasmmsomeawcggee, $kesssewsiegssiya); if (!$yaycyieqogmsoamk) { goto eiecgqokmuekaesc; } $auwuoyyagaiegwae[] = $yaycyieqogmsoamk; eiecgqokmuekaesc: ggsugekocmsukuci: cwmuqmoeauqcewoy: } uwyeycaywowwiquu: ceosmkqgqgwsowwg: ykcmomsiayaymysm: } uugiuqkesegaamqw: kcwgiwimgqesukqu: wicuauokauykwoeu: seyygcwcaogkmaqe: } wwgikwuigiiqsswq: return $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\160\x74\137\160\157\x73\x74\x5f\x74\x65\x72\x6d\163\x5f\165\162\154\x73"), $auwuoyyagaiegwae); } public function weikkyiqoogkoyce($swaukaagekiououo = '') { $auwuoyyagaiegwae = !$swaukaagekiououo || is_object($swaukaagekiououo) || is_array($swaukaagekiououo) || is_int($swaukaagekiououo) ? (array) ManipulateI18N::kmmygsqekuksyeuy() : (array) ManipulateI18N::smickumaawgqkmco($swaukaagekiououo); $auwuoyyagaiegwae = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\x70\164\137\143\x6c\x65\141\x6e\x5f\144\x6f\155\x61\151\x6e\x5f\165\162\x6c\x73"), $auwuoyyagaiegwae, $swaukaagekiououo); $auwuoyyagaiegwae = array_filter($auwuoyyagaiegwae); $oegoegssokkyiqam = $this->iwqysmawycmsmces(); if (!($auwuoyyagaiegwae && $oegoegssokkyiqam)) { goto mieoguuqiwqioeqa; } foreach ($oegoegssokkyiqam as $mkomwsiykqigmqca) { $gwyacgiwokuuwouo = ManipulateI18N::augqukusksqwwuus($swaukaagekiououo, $mkomwsiykqigmqca); foreach ($auwuoyyagaiegwae as $eeamcawaiqocomwy) { $msimssikcguyqcac = ManipulateFormat::kcwgwosqkkkkmuks($eeamcawaiqocomwy); $couygeouymagssgw = $mkomwsiykqigmqca . $msimssikcguyqcac["\150\x6f\163\164"] . $msimssikcguyqcac["\160\x61\164\x68"]; $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\160\x74\137\142\145\146\x6f\x72\x65\137\143\x6c\145\141\156\137\144\157\155\x61\x69\156"), $couygeouymagssgw, $swaukaagekiououo, $eeamcawaiqocomwy); foreach ($this->gqguucgwsqasamke($msimssikcguyqcac["\150\x6f\x73\164"], $mkomwsiykqigmqca) as $miawkwqioaeasiig) { $uwsgakoiqomwikmy = $miawkwqioaeasiig . $msimssikcguyqcac["\160\x61\164\x68"]; $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); if (!$iiaumsgauuyeqksw->exists($uwsgakoiqomwikmy)) { goto gscyiqmmegqmqcoe; } if ($iiaumsgauuyeqksw->asysewkmisimumay($uwsgakoiqomwikmy)) { goto cciakcwuweqmcose; } $iiaumsgauuyeqksw->remove($uwsgakoiqomwikmy); goto uckusgwkoycmkeam; cciakcwuweqmcose: ManipulateFile::cseoaieqoukqgcay($uwsgakoiqomwikmy, $gwyacgiwokuuwouo, $iiaumsgauuyeqksw); uckusgwkoycmkeam: gscyiqmmegqmqcoe: ikukqooiowqywyqo: } kkckyqmcyussauma: $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\160\164\x5f\141\146\x74\x65\x72\137\143\154\x65\x61\x6e\x5f\x64\157\155\141\151\x6e"), $couygeouymagssgw, $swaukaagekiououo, $eeamcawaiqocomwy); gqeoaceyoiicoaec: } oksqsucimimsswcg: msmmiaumiasmsiog: } gcecieuocqawmgci: mieoguuqiwqioeqa: } public function skomiaywsggiyamc($aokagokqyuysuksm, $post) { $auwuoyyagaiegwae = []; $mqqisesagsuooios = Manipulate::yygaymuiikwoakuc($aokagokqyuysuksm); $migiiksoiymissge = str_replace(["\45\x70\157\163\164\x6e\x61\x6d\145\x25", "\x25\160\141\x67\145\156\141\155\145\45"], $mqqisesagsuooios[1], $mqqisesagsuooios[0]); if (!($this->eyayuwiqsqsmkamc($migiiksoiymissge, PHP_URL_PATH) !== "\x2f")) { goto qosswumywsaeyqus; } $auwuoyyagaiegwae[] = $migiiksoiymissge; qosswumywsaeyqus: $useksmwkuswkwcqg = ManipulatePost::gueasuouwqysmomu($post); $myyccyuumcscsagc = ManipulatePost::mqgeysameoesmuqw($useksmwkuswkwcqg); if (!$myyccyuumcscsagc) { goto swicauyqusmgeccu; } global $wp_rewrite; $auwuoyyagaiegwae[] = $myyccyuumcscsagc; $auwuoyyagaiegwae[] = $myyccyuumcscsagc . "{$wp_rewrite->pagination_base}"; swicauyqusmgeccu: $dokeeoamkysymmqw = []; if (!$dokeeoamkysymmqw) { goto eussqkkimciywios; } global $blog_id; $uogwqioiiwqsyksu = DecoratorOption::get("\x68\x6f\x6d\x65"); if (!(!empty($blog_id) && ManipulateServer::gsaomcwyacqcumaa())) { goto maguoggkqamaiuag; } switch_to_blog($blog_id); $uogwqioiiwqsyksu = DecoratorOption::get("\x68\157\x6d\145"); restore_current_blog(); maguoggkqamaiuag: $scyimseukcmieyuw = ManipulateFormat::kcwgwosqkkkkmuks($uogwqioiiwqsyksu); $uogwqioiiwqsyksu = "{$scyimseukcmieyuw["\163\143\x68\x65\155\145"]}\72\57\x2f{$scyimseukcmieyuw["\150\157\x73\164"]}"; $oegoegssokkyiqam = $this->iwqysmawycmsmces(); foreach ($oegoegssokkyiqam as $mkomwsiykqigmqca) { $mkomwsiykqigmqca .= $scyimseukcmieyuw["\150\157\163\x74"]; foreach ($dokeeoamkysymmqw as $suaemuyiacqyugsm) { if (!strstr($suaemuyiacqyugsm, "\x2a")) { goto iomwkkieqcswkkaw; } $meyiiwcswqmuggyg = ManipulateFile::qawkooaucwoseaia($mkomwsiykqigmqca, "\x23" . $suaemuyiacqyugsm . "\x23\151"); foreach ($meyiiwcswqmuggyg as $qogsmwakwacwqogk) { $auwuoyyagaiegwae[] = str_replace($mkomwsiykqigmqca, untrailingslashit($uogwqioiiwqsyksu), $qogsmwakwacwqogk->amqagusacuuuaswg()); igmawmwssyskqqag: } cuayqmasemsqsume: goto eekkcooqswqouoei; iomwkkieqcswkkaw: $auwuoyyagaiegwae[] = trailingslashit($uogwqioiiwqsyksu) . $suaemuyiacqyugsm; eekkcooqswqouoei: } gcqssckowmywoesw: kocaieyauyiqmyiy: } icoiqskygugkgmkm: eussqkkimciywios: $auwuoyyagaiegwae[] = ManipulatePost::ocigkomwiuwmmkks($post); $eyagosskwwmgwmog = DecoratorPost::iimmeiugygssweyc($aokagokqyuysuksm); if (!(bool) $eyagosskwwmgwmog) { goto gqaqamewqeaqwcia; } foreach ($eyagosskwwmgwmog as $omwmuycmeqcqokom) { $auwuoyyagaiegwae[] = ManipulatePost::ycqquoiyyuesegsy($omwmuycmeqcqokom); gaskcgoeywuyukke: } ewsigoeswimiueqe: gqaqamewqeaqwcia: return array_flip(array_flip($auwuoyyagaiegwae)); } public function ekcemquyyiqykmoo(?string $yekqqesogweecqyc) { static $gqiuywqwmiieqcww = []; if (isset($gqiuywqwmiieqcww[$yekqqesogweecqyc])) { goto qmqmskywcgiqgygm; } $gqiuywqwmiieqcww[$yekqqesogweecqyc] = 1; if (defined("\104\x4f\x49\116\x47\x5f\x41\x55\124\117\123\x41\x56\105")) { goto cmsiuimsiycomyay; } $post = ManipulatePost::get($yekqqesogweecqyc); $useksmwkuswkwcqg = ManipulatePost::gueasuouwqysmomu($post); if (!($post && $useksmwkuswkwcqg && !in_array($useksmwkuswkwcqg, ["\x61\164\164\141\x63\150\x6d\x65\156\x74", "\x6e\141\166\x5f\155\x65\x6e\x75\x5f\151\164\x65\155"]) && !in_array($post->post_status, ["\144\x72\141\x66\164", "\x61\x75\x74\x6f\55\x64\x72\x61\146\164"]))) { goto geyiosucqswaeasw; } if (!ManipulatePost::qeosassuekcieuuy($useksmwkuswkwcqg)) { goto omuemegmkesqgwys; } $eokyomeiuimoaiac = ManipulateI18N::umuecysoywoumgwo(); $swaukaagekiououo = false; if ("\x77\160\155\x6c" === $eokyomeiuimoaiac && !ManipulatePlugin::ggocakcisguuokai("\x77\x6f\x6f\x63\157\x6d\x6d\x65\x72\143\x65\x2d\x6d\165\154\x74\151\154\x69\x6e\x67\165\x61\x6c\x2f\x77\x70\155\x6c\x2d\167\x6f\x6f\x63\x6f\x6d\x6d\145\x72\143\x65\x2e\x70\150\x70")) { goto ksiwgckusukisueg; } if (!("\x70\x6f\154\x79\154\x61\x6e\147" === $eokyomeiuimoaiac && function_exists("\x70\x6c\x6c\x5f\147\x65\164\x5f\x70\x6f\163\164\137\154\141\156\x67\x75\x61\147\x65"))) { goto okuqsqaiwwiigmyu; } $swaukaagekiououo = pll_get_post_language($yekqqesogweecqyc); okuqsqaiwwiigmyu: goto sgkqgucguyccaaki; ksiwgckusukisueg: global $sitepress; $swaukaagekiououo = $sitepress->get_language_for_element($yekqqesogweecqyc, "\160\157\x73\164\137" . $useksmwkuswkwcqg); sgkqgucguyccaaki: $owwcaiyoucwcwmmq = $this->skomiaywsggiyamc($yekqqesogweecqyc, $post); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\x70\x74\x5f\x62\x65\x66\157\x72\x65\137\143\154\x65\x61\156\137\x70\157\163\x74"), $post, $owwcaiyoucwcwmmq, $swaukaagekiououo); $owwcaiyoucwcwmmq = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\160\164\137\x70\x6f\163\x74\x5f\160\x75\162\x67\x65\137\x75\x72\154\163"), $owwcaiyoucwcwmmq, $post); $this->wckuqskowgoaoqom($owwcaiyoucwcwmmq); $this->ciyymuaoqiqmucei($swaukaagekiououo); $this->uqigacqieikayuac(); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\x70\x74\x5f\141\146\164\145\x72\137\143\154\145\x61\x6e\x5f\160\x6f\163\x74"), $post, $owwcaiyoucwcwmmq, $swaukaagekiououo); omuemegmkesqgwys: geyiosucqswaeasw: cmsiuimsiycomyay: qmqmskywcgiqgygm: } public function wckuqskowgoaoqom($auwuoyyagaiegwae) { $auwuoyyagaiegwae = array_filter((array) $auwuoyyagaiegwae); if (!$auwuoyyagaiegwae) { goto igyesgemqesackws; } $oegoegssokkyiqam = $this->iwqysmawycmsmces(); $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\160\164\x5f\142\x65\146\x6f\x72\145\137\x63\154\x65\141\156\137\146\x69\x6c\x65\x73"), $auwuoyyagaiegwae); foreach ($auwuoyyagaiegwae as $eeamcawaiqocomwy) { $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\160\x74\137\x62\145\x66\x6f\x72\145\137\x63\154\x65\141\156\x5f\x66\x69\154\145"), $eeamcawaiqocomwy); $msimssikcguyqcac = ManipulateFormat::kcwgwosqkkkkmuks($eeamcawaiqocomwy); foreach ($oegoegssokkyiqam as $mkomwsiykqigmqca) { foreach ($this->gqguucgwsqasamke($msimssikcguyqcac["\150\157\x73\x74"], $mkomwsiykqigmqca) as $miawkwqioaeasiig) { $uwsgakoiqomwikmy = $miawkwqioaeasiig . $msimssikcguyqcac["\160\x61\164\x68"]; if (!$iiaumsgauuyeqksw->exists($uwsgakoiqomwikmy)) { goto omumkeywqqogwwue; } $iiaumsgauuyeqksw->remove($uwsgakoiqomwikmy); omumkeywqqogwwue: ceaamccscgcmqgka: } ycecaauekkiqacuu: qmguoqeawegcoeoa: } sayqggaieocmskko: $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\160\x74\137\141\146\164\x65\x72\x5f\143\154\145\141\156\137\146\x69\154\x65"), $eeamcawaiqocomwy); gmeiuoeewucukque: } ccgsycueagwegqeu: $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\160\x74\x5f\x61\x66\x74\145\162\x5f\143\154\145\x61\156\x5f\x66\151\x6c\x65\163"), $auwuoyyagaiegwae); igyesgemqesackws: } public function ciyymuaoqiqmucei($swaukaagekiououo = '') { $mgoiyiawsmmgasic = ManipulateFormat::kcwgwosqkkkkmuks(ManipulateI18N::csacaukgwwayassy($swaukaagekiououo)); $oegoegssokkyiqam = $this->iwqysmawycmsmces(); foreach ($oegoegssokkyiqam as $mkomwsiykqigmqca) { $couygeouymagssgw = $mkomwsiykqigmqca . $mgoiyiawsmmgasic["\150\157\x73\164"] . "\52" . untrailingslashit($mgoiyiawsmmgasic["\x70\x61\164\150"]); $couygeouymagssgw = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\160\164\137\x63\154\145\x61\156\137\x68\157\x6d\145\137\162\x6f\x6f\164"), $couygeouymagssgw, $mgoiyiawsmmgasic["\x68\157\x73\164"], $mgoiyiawsmmgasic["\x70\141\x74\x68"]); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\160\x74\x5f\x62\x65\146\x6f\x72\145\x5f\143\x6c\x65\x61\156\x5f\150\x6f\x6d\145"), $couygeouymagssgw, $swaukaagekiououo); $ucasskoyoewwmmii = glob($couygeouymagssgw . "\57\173\x69\x6e\x64\x65\170\x2c\151\156\x64\x65\x78\55\52\x7d\x2e\x7b\150\164\155\x6c\54\150\x74\155\154\x5f\147\x7a\x69\160\175", GLOB_BRACE | GLOB_NOSORT); if (!$ucasskoyoewwmmii) { goto gaouaiemokqqgssw; } foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk) { $this->kcciqwskewsuaemk()->remove($qogsmwakwacwqogk); qiikwossequwiuom: } ymucaguacemwsgsi: gaouaiemokqqgssw: global $wp_rewrite; $qmwoqyacswkwkiog = glob($couygeouymagssgw . "\x2a\57" . $wp_rewrite->pagination_base, GLOB_NOSORT); if (!$qmwoqyacswkwkiog) { goto qywkykqkeeuccoui; } foreach ($qmwoqyacswkwkiog as $miawkwqioaeasiig) { ManipulateFile::cseoaieqoukqgcay($miawkwqioaeasiig); oqgymyiwckkwueuw: } wqwmuuicoqigqwyc: qywkykqkeeuccoui: $lgqgmusqcgekwgui = glob($couygeouymagssgw . "\x2f\56\x6d\157\x62\151\154\145\55\141\143\x74\151\166\145", GLOB_BRACE | GLOB_NOSORT); if (!$lgqgmusqcgekwgui) { goto uoewiggumomegksg; } foreach ($lgqgmusqcgekwgui as $eagqciqqakiuokus) { $this->kcciqwskewsuaemk()->remove($eagqciqqakiuokus); ywokggauuiosegog: } yqqseqskcqeqkacm: uoewiggumomegksg: $okyqgikguumqkcas = glob($couygeouymagssgw . "\57\x2e\x6e\157\55\167\145\x62\160", GLOB_BRACE | GLOB_NOSORT); if (!$okyqgikguumqkcas) { goto syisomgawcsqeemk; } foreach ($okyqgikguumqkcas as $kaggcuumyeuscqui) { $this->kcciqwskewsuaemk()->remove($kaggcuumyeuscqui); ugkwqaywmwqucoeo: } sockocsycmkaeosg: syisomgawcsqeemk: $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\160\x74\137\x61\146\x74\x65\x72\137\143\x6c\x65\141\x6e\137\150\x6f\x6d\x65"), $couygeouymagssgw, $swaukaagekiououo); ociesuicgmkekcue: } wiaymoucakyaikii: } public function uqigacqieikayuac() { $auwuoyyagaiegwae = []; $auwuoyyagaiegwae[] = get_feed_link(); $auwuoyyagaiegwae[] = get_feed_link("\x63\x6f\x6d\155\x65\156\x74\x73\137"); $auwuoyyagaiegwae = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\160\x74\x5f\143\154\145\x61\x6e\x5f\150\x6f\155\145\137\146\x65\145\144\163"), $auwuoyyagaiegwae); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\160\x74\x5f\142\145\146\157\162\145\x5f\x63\x6c\x65\x61\x6e\137\150\157\x6d\x65\x5f\146\x65\145\x64\x73"), $auwuoyyagaiegwae); self::wckuqskowgoaoqom($auwuoyyagaiegwae); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\x70\164\x5f\141\x66\164\145\162\x5f\x63\154\145\x61\156\137\x68\157\155\145\x5f\x66\145\145\144\163"), $auwuoyyagaiegwae); } public function suiuswewcumcyqms($mceokigoiqekskwe, $uemuuqsgymiqyuuu) { $owwcaiyoucwcwmmq = []; $iwewcwusemqaiggk = DecoratorTerm::woimamkkeyoyauoa("\x69\144", $mceokigoiqekskwe, $uemuuqsgymiqyuuu); $eokyomeiuimoaiac = ManipulateI18N::umuecysoywoumgwo(); if ("\167\x70\155\x6c" === $eokyomeiuimoaiac && !ManipulatePlugin::ggocakcisguuokai("\167\x6f\x6f\x63\157\x6d\x6d\145\162\x63\145\55\x6d\165\154\164\x69\154\x69\156\x67\165\141\x6c\x2f\x77\x70\x6d\154\55\167\157\x6f\x63\157\155\x6d\145\x72\x63\x65\56\160\150\x70")) { goto kiskwawumeiiieuk; } if ("\x70\157\x6c\x79\x6c\x61\x6e\x67" === $eokyomeiuimoaiac && function_exists("\160\x6c\154\x5f\x67\x65\164\137\164\145\162\x6d\137\x6c\141\156\147\x75\141\x67\x65")) { goto asoecuscmsyusmkg; } $swaukaagekiououo = false; goto kwasqmcyiswoaiuu; asoecuscmsyusmkg: $swaukaagekiououo = pll_get_term_language($mceokigoiqekskwe); kwasqmcyiswoaiuu: goto oaqeoqsksuyyggmg; kiskwawumeiiieuk: global $sitepress; $swaukaagekiououo = $sitepress->get_language_for_element($mceokigoiqekskwe, "\164\141\x78\x5f" . $uemuuqsgymiqyuuu); oaqeoqsksuyyggmg: $migiiksoiymissge = ManipulateTerm::qmgcisuuikgmqcsu($iwewcwusemqaiggk, $uemuuqsgymiqyuuu); if (!("\x2f" !== $this->eyayuwiqsqsmkamc($migiiksoiymissge, PHP_URL_PATH))) { goto kkmuuoscccmokkiw; } $owwcaiyoucwcwmmq[] = $migiiksoiymissge; kkmuuoscccmokkiw: $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\160\x74\x5f\142\145\x66\157\x72\x65\x5f\143\x6c\x65\141\x6e\137\164\x65\x72\155"), $iwewcwusemqaiggk, $owwcaiyoucwcwmmq, $swaukaagekiououo); $owwcaiyoucwcwmmq = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\160\x74\x5f\x74\x65\x72\x6d\137\160\165\x72\147\x65\x5f\x75\x72\154\x73"), $owwcaiyoucwcwmmq, $iwewcwusemqaiggk); $this->wckuqskowgoaoqom($owwcaiyoucwcwmmq); $this->ciyymuaoqiqmucei($swaukaagekiououo); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\x70\164\x5f\141\146\164\x65\x72\137\143\154\x65\141\x6e\x5f\x74\x65\x72\155"), $iwewcwusemqaiggk, $owwcaiyoucwcwmmq, $swaukaagekiououo); } public function eyayuwiqsqsmkamc(?string $eeamcawaiqocomwy, ?string $wksoawcgagcgoask) { return _get_component_from_parsed_url_array(ManipulateFormat::gooqqcmsyseiaikc($eeamcawaiqocomwy), $wksoawcgagcgoask); } }
