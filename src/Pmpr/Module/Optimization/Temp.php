<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63ffbf6dd4c36             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\Decorator\DecoratorUser; use Pmpr\Common\Foundation\Decorator\Post\DecoratorPost; use Pmpr\Common\Foundation\Decorator\Taxonomy\DecoratorTaxonomy; use Pmpr\Common\Foundation\Decorator\Taxonomy\DecoratorTerm; use Pmpr\Common\Foundation\Manipulate\ManipulateQuery; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulatePlugin; use Pmpr\Common\Foundation\Manipulate\Post\ManipulateComment; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTaxonomy; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Module\Optimization\Manipulate\Manipulate; use Pmpr\Module\Optimization\Manipulate\ManipulateFormat; use Pmpr\Module\Optimization\Manipulate\ManipulateI18N; use Pmpr\Module\Optimization\Manipulate\ManipulateFile; use Exception; use FilesystemIterator; use IteratorIterator; use RegexIterator; use WP_Post; use WP_Taxonomy; use WP_Term; use WP_Upgrader; abstract class Temp extends Container { protected ?string $id = null; protected $paths; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\163\167\151\x74\143\x68\137\x74\x68\145\155\x65", [$this, "\x77\x65\151\x6b\x6b\171\x69\x71\157\x6f\x67\153\x6f\171\x63\x65"])->qcsmikeggeemccuu("\x70\x72\145\x5f\x70\x6f\163\164\137\165\160\144\x61\x74\145", [$this, "\x61\165\167\161\171\x67\x6d\167\x77\151\x75\147\143\151\x65\145"], 2)->qcsmikeggeemccuu("\165\160\x67\x72\141\x64\145\162\x5f\x70\162\157\x63\x65\x73\x73\137\143\x6f\155\160\154\x65\x74\145", [$this, "\x6b\x6f\x6f\143\x75\x79\151\171\151\x69\x65\x75\141\153\x6d\155"], 2)->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\157\x70\164\x5f\160\165\x72\147\x65\137\x63\x61\143\150\x65\x5f\x66\x69\x6c\145\x73"), [$this, "\167\145\151\153\153\x79\151\161\157\x6f\147\153\157\171\x63\145"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\157\x70\x74\x5f\x61\x66\x74\x65\162\137\x63\x6c\145\141\156\137\x70\x6f\163\x74"), [$this, "\161\141\x67\x6d\167\x77\155\x71\151\x69\143\141\x79\x61\x71\x67"])->qcsmikeggeemccuu("\143\157\155\155\145\x6e\164\137\160\x6f\x73\164", [$this, "\155\x6d\x65\x69\x75\x79\165\x67\x65\145\x6b\x6f\161\x77\143\163"], 2, 99)->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\157\160\164\137{$this->mwikyscisascoeea()}\x5f\143\154\x65\141\x6e\x5f\x64\x6f\155\x61\x69\x6e"), [$this, "\167\x65\151\153\x6b\171\x69\161\x6f\157\147\x6b\157\x79\x63\x65"]); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x6f\x70\x74\x5f\x63\154\x65\141\x6e\137\x66\151\154\145\x73"), [$this, "\151\x6d\x6f\167\x61\155\151\x77\145\x65\x6b\171\147\157\x63\x6d"]); if (!ManipulateQuery::euqowsuwmgokuqqo()) { goto aqeyqwuywqcmuoce; } $seyqqsmuaiegkeeq = ManipulateTaxonomy::ciugwooasaqcywas(["\160\x75\142\x6c\151\143" => true, "\160\165\x62\154\151\143\x6c\x79\x5f\161\165\x65\x72\171\141\x62\x6c\145" => true, self::aisguagukaewucii => self::emgcgiseaoouacge]); foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya) { $this->cecaguuoecmccuse("{$kesssewsiegssiya}\x5f\x72\x6f\167\x5f\x61\143\164\151\157\156\163", [$this, "\167\163\161\x79\x73\171\141\167\x77\167\147\x67\147\x6f\x77\143"], 2); kikkkocywiyuyuqw: } kwcscewawgicomok: aqeyqwuywqcmuoce: parent::kgquecmsgcouyaya(); } public function mmeiuyugeekoqwcs($aqqmosqmsuueyaes, $swyywyqesisooayc) { $post = ManipulateComment::ayueggmoqeeukqmq($aqqmosqmsuueyaes); if (!$post) { goto aymoguycgmuggcik; } $this->ekcemquyyiqykmoo(ManipulatePost::mwikyscisascoeea($post)); aymoguycgmuggcik: } public function mwikyscisascoeea() : string { return $this->id; } public function iwqysmawycmsmces() : array { $oegoegssokkyiqam = $this->paths; if (!is_string($oegoegssokkyiqam)) { goto qayiqaykkywcyisq; } $oegoegssokkyiqam = [$oegoegssokkyiqam]; qayiqaykkywcyisq: return $oegoegssokkyiqam; } public function auwqygmwwiugciee($yekqqesogweecqyc, $icwicymcioeyeyek) { $post = ManipulatePost::get($yekqqesogweecqyc); if (!($post && "\x70\165\142\x6c\x69\x73\150" === ManipulatePost::ucwmcwqmqwaymkkc($post))) { goto akoweomooyuwamow; } $swaukaagekiououo = ManipulateI18N::emqmaiomewcmuacu($yekqqesogweecqyc); $owwcaiyoucwcwmmq = $this->skomiaywsggiyamc($yekqqesogweecqyc, $post); $owwcaiyoucwcwmmq = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\x70\x74\x5f\x70\157\163\164\137\x70\165\162\x67\145\137\165\x72\154\163"), $owwcaiyoucwcwmmq, $post); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\160\164\x5f\x62\x65\146\157\x72\x65\137\143\154\x65\x61\156\x5f\160\157\163\x74"), $post, $owwcaiyoucwcwmmq, $swaukaagekiououo); $this->wckuqskowgoaoqom($owwcaiyoucwcwmmq); $this->ciyymuaoqiqmucei($swaukaagekiououo); $this->uqigacqieikayuac(); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\160\x74\137\x61\146\x74\x65\x72\x5f\x63\x6c\145\141\156\137\160\x6f\x73\164"), $post, $owwcaiyoucwcwmmq, $swaukaagekiououo); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\x70\164\137{$this->mwikyscisascoeea()}\137\x61\x66\164\x65\x72\137\x63\154\145\141\156\x5f\x70\157\163\164"), $post, $owwcaiyoucwcwmmq, $swaukaagekiououo); akoweomooyuwamow: } public function imowamiweekygocm(array $auwuoyyagaiegwae = []) { $iaceaqwggsgmasqe = []; foreach ($auwuoyyagaiegwae as $eeamcawaiqocomwy) { $mgoiyiawsmmgasic = ManipulateFormat::kcwgwosqkkkkmuks($eeamcawaiqocomwy); $iaceaqwggsgmasqe[] = $mgoiyiawsmmgasic["\x73\143\150\145\155\x65"] . "\x3a\57\x2f" . $mgoiyiawsmmgasic["\150\157\163\x74"] . "\52" . $mgoiyiawsmmgasic["\160\x61\x74\150"]; cueuscqkicwwicei: } oaociaioauummsey: return $iaceaqwggsgmasqe; } public function koocuyiyiieuakmm($kkkswwyyaoeysaio, $iaakskwmyqceoscy) { if (!("\165\160\x64\x61\x74\145" === $iaakskwmyqceoscy["\141\x63\164\x69\157\x6e"])) { goto eysuawiooiswaseq; } if (!("\164\x68\145\x6d\145" === $iaakskwmyqceoscy["\164\x79\160\145"])) { goto kiewcwsykccgocuc; } if (!is_array($iaakskwmyqceoscy["\164\x68\x65\x6d\145\x73"])) { goto suscosoukqeyyqgs; } $current_theme = wp_get_theme(); $sgmuqamasucuikqa = [ $current_theme->get_template(), $current_theme->get_stylesheet(), ]; if (!array_intersect($iaakskwmyqceoscy["\x74\150\x65\155\x65\x73"], $sgmuqamasucuikqa)) { goto gcecamucuogcciig; } $this->weikkyiqoogkoyce(); gcecamucuogcciig: suscosoukqeyyqgs: kiewcwsykccgocuc: eysuawiooiswaseq: } public function eugcsqcwkqseakoe($mceokigoiqekskwe, $gywkakmagykqkiei, $kesssewsiegssiya) { if (!ManipulateTaxonomy::cekoogweeooasayu($kesssewsiegssiya)) { goto iecqkqoiqimmisyw; } $this->weikkyiqoogkoyce(); iecqkqoiqimmisyw: } private function wgokqcqsmcqsiiue($miawkwqioaeasiig) { if (!$this->kcciqwskewsuaemk()->asysewkmisimumay($miawkwqioaeasiig)) { goto eogomkswkaqwyycm; } ManipulateFile::cseoaieqoukqgcay($miawkwqioaeasiig); eogomkswkaqwyycm: } private function qeoaoiweucueeuqu(string $eeamcawaiqocomwy, $ymiyawysimukkoso = false) { global $wp_rewrite; $msimssikcguyqcac = ManipulateFormat::kcwgwosqkkkkmuks($eeamcawaiqocomwy); foreach ($this->gqguucgwsqasamke($msimssikcguyqcac["\150\157\163\164"]) as $miawkwqioaeasiig) { $mkomwsiykqigmqca = $miawkwqioaeasiig . $msimssikcguyqcac["\x70\x61\164\150"]; if (!$this->kcciqwskewsuaemk()->exists($mkomwsiykqigmqca)) { goto msiuqseowuumiwuo; } foreach (ManipulateFile::kiygcugekegoqauw($mkomwsiykqigmqca) as $igqsaukqcqscimok) { if (!ManipulateFile::mecmkmogggamegic($igqsaukqcqscimok)) { goto wyqueeskecameuks; } $this->kcciqwskewsuaemk()->remove(ManipulateFile::scikcaaaiwcsqowm($igqsaukqcqscimok)); wyqueeskecameuks: kikkkoqiumqoeiyy: } assoyoeukmqiucyq: if (!$ymiyawysimukkoso) { goto esokkakkumskkmiu; } $this->wgokqcqsmcqsiiue(trailingslashit($mkomwsiykqigmqca) . $wp_rewrite->pagination_base); esokkakkumskkmiu: msiuqseowuumiwuo: euuekiyqwkowiees: } egiauwuekseyeaeq: } public function gqguucgwsqasamke($qcqaayguacmuykwi, $mkomwsiykqigmqca = '', $iuomscuiswckwcoe = false) { if (!$mkomwsiykqigmqca) { goto iayguaeseyaemwkk; } if (!is_array($mkomwsiykqigmqca)) { goto gqycmyieayoegcsy; } $oegoegssokkyiqam = $mkomwsiykqigmqca; goto sqiyuasgusgawuoi; gqycmyieayoegcsy: $oegoegssokkyiqam = [$mkomwsiykqigmqca]; sqiyuasgusgawuoi: goto akyiiioycmgqyuok; iayguaeseyaemwkk: $oegoegssokkyiqam = $this->iwqysmawycmsmces(); akyiiioycmgqyuok: if (isset($eewgemuwouukmwgk[$qcqaayguacmuykwi])) { goto mcuoyseuwoueyaie; } $eewgemuwouukmwgk[$qcqaayguacmuykwi] = []; foreach ($oegoegssokkyiqam as $mkomwsiykqigmqca) { $mkomwsiykqigmqca = trailingslashit($mkomwsiykqigmqca); try { $mcowwqgmkuemoumu = new IteratorIterator(new FilesystemIterator($mkomwsiykqigmqca)); } catch (Exception $iewosgggaueeyymg) { return []; } $ucccueqywigcukcc = sprintf("\57\x25\x31\x24\163\x25\x32\x24\x73\x28\x2e\52\51\x2f\151", ManipulateFile::cgwcgscqeqauaagi($mkomwsiykqigmqca, true), $qcqaayguacmuykwi); try { $owouacqkcukeeomw = new RegexIterator($mcowwqgmkuemoumu, $ucccueqywigcukcc); foreach ($owouacqkcukeeomw as $uwsgakoiqomwikmy) { $eewgemuwouukmwgk[$qcqaayguacmuykwi][] = ManipulateFile::scikcaaaiwcsqowm($uwsgakoiqomwikmy); mqacqosyicuiqwia: } guummoewucyeuiek: } catch (Exception $iewosgggaueeyymg) { $eewgemuwouukmwgk[$qcqaayguacmuykwi] = []; } owiguescmqyqukui: } ycomeuqeessamows: mcuoyseuwoueyaie: return $eewgemuwouukmwgk[$qcqaayguacmuykwi]; } public function qagmwwmqiicayaqg(WP_Post $post) { foreach ($this->soycogqiiekoekgq($post) as $eeamcawaiqocomwy) { $this->qeoaoiweucueeuqu($eeamcawaiqocomwy); ieoeeyieoskuyiyw: } kwowggaooiyqawyq: } public function wsqysyawwwgggowc($ccowyogiqwikkkie, $iwewcwusemqaiggk) { if (!DecoratorUser::scmcyesmmikkucie()) { goto ciiyqsiswkcwsocm; } $eeamcawaiqocomwy = wp_nonce_url(ManipulateServer::oiucukewkckkwiqc("\x61\x64\x6d\x69\156\55\x70\157\163\x74\x2e\x70\x68\x70\77\x61\x63\x74\x69\x6f\156\75\x6f\x70\x74\151\155\x69\x7a\x61\x74\x69\157\156\x5f\160\x75\x72\147\x65\x5f{$this->mwikyscisascoeea()}\46\164\x79\x70\x65\75\x74\x65\162\155\x2d{$iwewcwusemqaiggk->term_id}\x26\164\x61\170\x6f\156\x6f\x6d\171\75{$iwewcwusemqaiggk->taxonomy}"), "\x6f\160\x74\x69\155\x69\172\141\x74\x69\157\156\x5f\x70\165\x72\x67\x65\x5f{$this->mwikyscisascoeea()}\137\164\145\x72\155\x2d{$iwewcwusemqaiggk->term_id}"); $ccowyogiqwikkkie["\x6f\x70\x74\151\155\x69\x7a\x61\x74\151\157\x6e\x5f\x70\165\x72\147\x65\x5f{$this->mwikyscisascoeea()}"] = ManipulateHTML::yuawgssgauywkiia(sprintf(__("\x43\x6c\x65\x61\x72\40\164\x68\151\x73\x20\x25\x73", PR__MDL__OPTIMIZATION), $this->mwikyscisascoeea()), $eeamcawaiqocomwy); ciiyqsiswkcwsocm: return $ccowyogiqwikkkie; } private function wgkqeyqiyacgqeso($post) { $cqgoimumaewouews = get_the_time("\x59\x2d\x6d\55\144", $post); $auwuoyyagaiegwae = []; if (!$cqgoimumaewouews) { goto ugyawwukegyoqmsq; } $ocogsiouoiuuguym = explode("\x2d", $cqgoimumaewouews); $auwuoyyagaiegwae = [get_year_link($ocogsiouoiuuguym[0]), get_month_link($ocogsiouoiuuguym[0], $ocogsiouoiuuguym[1]), get_day_link($ocogsiouoiuuguym[0], $ocogsiouoiuuguym[1], $ocogsiouoiuuguym[2])]; $auwuoyyagaiegwae = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\x70\164\137\160\x6f\163\x74\137\144\141\164\x65\163\x5f\x75\x72\154\x73"), $auwuoyyagaiegwae); ugyawwukegyoqmsq: return $auwuoyyagaiegwae; } public function yeimaqssyuewkcgm($post) { foreach ($this->wgkqeyqiyacgqeso($post) as $eeamcawaiqocomwy) { $this->qeoaoiweucueeuqu($eeamcawaiqocomwy, true); ukigmkeewuqomooc: } soqkewsayowwcmco: } private function soycogqiiekoekgq(WP_Post $post) { $auwuoyyagaiegwae = []; $seyqqsmuaiegkeeq = DecoratorTaxonomy::qgckgkwskmsomoqs($post, self::ckmqoekmugkggeym); foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya) { if (!($kesssewsiegssiya instanceof WP_Taxonomy && $kesssewsiegssiya->public && "\x70\x72\x6f\x64\x75\x63\x74\137\x73\150\x69\x70\x70\x69\x6e\x67\x5f\143\x6c\141\163\x73" === $kesssewsiegssiya->name)) { goto wicuauokauykwoeu; } $kesssewsiegssiya = ManipulateTaxonomy::aakmagwggmkoiiyu($kesssewsiegssiya); $uyuaosigqymaqsaa = ManipulatePost::weescwwgqgiyumyw($post, $kesssewsiegssiya); if (!$uyuaosigqymaqsaa) { goto kcwgiwimgqesukqu; } foreach ($uyuaosigqymaqsaa as $iwewcwusemqaiggk) { $migiiksoiymissge = ManipulateTerm::qmgcisuuikgmqcsu($iwewcwusemqaiggk, $kesssewsiegssiya); if (!$migiiksoiymissge) { goto qoaawmmcqyacokws; } $auwuoyyagaiegwae[] = $migiiksoiymissge; qoaawmmcqyacokws: if (!ManipulateTaxonomy::aewcsqigycuaekym($kesssewsiegssiya)) { goto ceosmkqgqgwsowwg; } $mogoquygwgkamaaw = (array) get_ancestors(ManipulateTerm::mwikyscisascoeea($iwewcwusemqaiggk), $kesssewsiegssiya); foreach ($mogoquygwgkamaaw as $aqguqemekkmogkee) { $uasmmsomeawcggee = ManipulateTerm::get($aqguqemekkmogkee, $kesssewsiegssiya); if (!$uasmmsomeawcggee) { goto ggsugekocmsukuci; } $yaycyieqogmsoamk = ManipulateTerm::qmgcisuuikgmqcsu($uasmmsomeawcggee, $kesssewsiegssiya); if (!$yaycyieqogmsoamk) { goto eiecgqokmuekaesc; } $auwuoyyagaiegwae[] = $yaycyieqogmsoamk; eiecgqokmuekaesc: ggsugekocmsukuci: cwmuqmoeauqcewoy: } uwyeycaywowwiquu: ceosmkqgqgwsowwg: ykcmomsiayaymysm: } uugiuqkesegaamqw: kcwgiwimgqesukqu: wicuauokauykwoeu: seyygcwcaogkmaqe: } wwgikwuigiiqsswq: return $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\x70\164\137\160\157\163\164\137\x74\x65\162\155\x73\137\x75\162\154\x73"), $auwuoyyagaiegwae); } public function weikkyiqoogkoyce($swaukaagekiououo = '') { $auwuoyyagaiegwae = !$swaukaagekiououo || is_object($swaukaagekiououo) || is_array($swaukaagekiououo) || is_int($swaukaagekiououo) ? (array) ManipulateI18N::kmmygsqekuksyeuy() : (array) ManipulateI18N::smickumaawgqkmco($swaukaagekiououo); $auwuoyyagaiegwae = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\160\164\137\143\154\145\141\x6e\x5f\144\x6f\x6d\141\x69\156\x5f\165\x72\154\163"), $auwuoyyagaiegwae, $swaukaagekiououo); $auwuoyyagaiegwae = array_filter($auwuoyyagaiegwae); $oegoegssokkyiqam = $this->iwqysmawycmsmces(); if (!($auwuoyyagaiegwae && $oegoegssokkyiqam)) { goto mieoguuqiwqioeqa; } foreach ($oegoegssokkyiqam as $mkomwsiykqigmqca) { $gwyacgiwokuuwouo = ManipulateI18N::augqukusksqwwuus($swaukaagekiououo, $mkomwsiykqigmqca); foreach ($auwuoyyagaiegwae as $eeamcawaiqocomwy) { $msimssikcguyqcac = ManipulateFormat::kcwgwosqkkkkmuks($eeamcawaiqocomwy); $couygeouymagssgw = $mkomwsiykqigmqca . $msimssikcguyqcac["\150\157\163\164"] . $msimssikcguyqcac["\160\141\x74\150"]; $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\x70\x74\x5f\x62\x65\x66\x6f\162\145\137\143\154\x65\141\156\137\x64\157\155\x61\x69\156"), $couygeouymagssgw, $swaukaagekiououo, $eeamcawaiqocomwy); foreach ($this->gqguucgwsqasamke($msimssikcguyqcac["\x68\157\x73\164"], $mkomwsiykqigmqca) as $miawkwqioaeasiig) { $uwsgakoiqomwikmy = $miawkwqioaeasiig . $msimssikcguyqcac["\160\141\x74\150"]; $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); if (!$iiaumsgauuyeqksw->exists($uwsgakoiqomwikmy)) { goto gscyiqmmegqmqcoe; } if ($iiaumsgauuyeqksw->asysewkmisimumay($uwsgakoiqomwikmy)) { goto cciakcwuweqmcose; } $iiaumsgauuyeqksw->remove($uwsgakoiqomwikmy); goto uckusgwkoycmkeam; cciakcwuweqmcose: ManipulateFile::cseoaieqoukqgcay($uwsgakoiqomwikmy, $gwyacgiwokuuwouo, $iiaumsgauuyeqksw); uckusgwkoycmkeam: gscyiqmmegqmqcoe: ikukqooiowqywyqo: } kkckyqmcyussauma: $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\x70\x74\137\141\146\x74\x65\162\x5f\x63\x6c\145\x61\x6e\137\144\x6f\x6d\x61\x69\x6e"), $couygeouymagssgw, $swaukaagekiououo, $eeamcawaiqocomwy); gqeoaceyoiicoaec: } oksqsucimimsswcg: msmmiaumiasmsiog: } gcecieuocqawmgci: mieoguuqiwqioeqa: } public function skomiaywsggiyamc($aokagokqyuysuksm, $post) { $auwuoyyagaiegwae = []; $mqqisesagsuooios = Manipulate::yygaymuiikwoakuc($aokagokqyuysuksm); $migiiksoiymissge = str_replace(["\45\160\x6f\163\x74\156\x61\155\x65\45", "\x25\x70\141\x67\x65\x6e\x61\x6d\x65\x25"], $mqqisesagsuooios[1], $mqqisesagsuooios[0]); if (!($this->eyayuwiqsqsmkamc($migiiksoiymissge, PHP_URL_PATH) !== "\57")) { goto qosswumywsaeyqus; } $auwuoyyagaiegwae[] = $migiiksoiymissge; qosswumywsaeyqus: $useksmwkuswkwcqg = ManipulatePost::gueasuouwqysmomu($post); $myyccyuumcscsagc = ManipulatePost::mqgeysameoesmuqw($useksmwkuswkwcqg); if (!$myyccyuumcscsagc) { goto swicauyqusmgeccu; } global $wp_rewrite; $auwuoyyagaiegwae[] = $myyccyuumcscsagc; $auwuoyyagaiegwae[] = $myyccyuumcscsagc . "{$wp_rewrite->pagination_base}"; swicauyqusmgeccu: $dokeeoamkysymmqw = []; if (!$dokeeoamkysymmqw) { goto eussqkkimciywios; } global $blog_id; $uogwqioiiwqsyksu = DecoratorOption::get("\150\x6f\x6d\x65"); if (!(!empty($blog_id) && ManipulateServer::gsaomcwyacqcumaa())) { goto maguoggkqamaiuag; } switch_to_blog($blog_id); $uogwqioiiwqsyksu = DecoratorOption::get("\x68\157\x6d\x65"); restore_current_blog(); maguoggkqamaiuag: $scyimseukcmieyuw = ManipulateFormat::kcwgwosqkkkkmuks($uogwqioiiwqsyksu); $uogwqioiiwqsyksu = "{$scyimseukcmieyuw["\x73\x63\x68\145\x6d\x65"]}\x3a\x2f\57{$scyimseukcmieyuw["\x68\x6f\163\164"]}"; $oegoegssokkyiqam = $this->iwqysmawycmsmces(); foreach ($oegoegssokkyiqam as $mkomwsiykqigmqca) { $mkomwsiykqigmqca .= $scyimseukcmieyuw["\x68\x6f\163\164"]; foreach ($dokeeoamkysymmqw as $suaemuyiacqyugsm) { if (!strstr($suaemuyiacqyugsm, "\52")) { goto iomwkkieqcswkkaw; } $meyiiwcswqmuggyg = ManipulateFile::qawkooaucwoseaia($mkomwsiykqigmqca, "\43" . $suaemuyiacqyugsm . "\43\151"); foreach ($meyiiwcswqmuggyg as $qogsmwakwacwqogk) { $auwuoyyagaiegwae[] = str_replace($mkomwsiykqigmqca, untrailingslashit($uogwqioiiwqsyksu), $qogsmwakwacwqogk->amqagusacuuuaswg()); igmawmwssyskqqag: } cuayqmasemsqsume: goto eekkcooqswqouoei; iomwkkieqcswkkaw: $auwuoyyagaiegwae[] = trailingslashit($uogwqioiiwqsyksu) . $suaemuyiacqyugsm; eekkcooqswqouoei: } gcqssckowmywoesw: kocaieyauyiqmyiy: } icoiqskygugkgmkm: eussqkkimciywios: $auwuoyyagaiegwae[] = ManipulatePost::ocigkomwiuwmmkks($post); $eyagosskwwmgwmog = DecoratorPost::iimmeiugygssweyc($aokagokqyuysuksm); if (!(bool) $eyagosskwwmgwmog) { goto gqaqamewqeaqwcia; } foreach ($eyagosskwwmgwmog as $omwmuycmeqcqokom) { $auwuoyyagaiegwae[] = ManipulatePost::ycqquoiyyuesegsy($omwmuycmeqcqokom); gaskcgoeywuyukke: } ewsigoeswimiueqe: gqaqamewqeaqwcia: return array_flip(array_flip($auwuoyyagaiegwae)); } public function ekcemquyyiqykmoo(?string $yekqqesogweecqyc) { static $gqiuywqwmiieqcww = []; if (isset($gqiuywqwmiieqcww[$yekqqesogweecqyc])) { goto qmqmskywcgiqgygm; } $gqiuywqwmiieqcww[$yekqqesogweecqyc] = 1; if (defined("\104\117\111\x4e\107\x5f\x41\125\124\x4f\x53\101\126\x45")) { goto cmsiuimsiycomyay; } $post = ManipulatePost::get($yekqqesogweecqyc); $useksmwkuswkwcqg = ManipulatePost::gueasuouwqysmomu($post); if (!($post && $useksmwkuswkwcqg && !in_array($useksmwkuswkwcqg, ["\x61\164\x74\x61\x63\x68\x6d\145\x6e\164", "\156\x61\166\x5f\155\x65\156\x75\x5f\x69\164\x65\x6d"]) && !in_array($post->post_status, ["\144\x72\x61\x66\x74", "\x61\165\164\x6f\55\x64\x72\141\x66\164"]))) { goto geyiosucqswaeasw; } if (!ManipulatePost::qeosassuekcieuuy($useksmwkuswkwcqg)) { goto omuemegmkesqgwys; } $eokyomeiuimoaiac = ManipulateI18N::umuecysoywoumgwo(); $swaukaagekiououo = false; if ("\x77\160\x6d\x6c" === $eokyomeiuimoaiac && !ManipulatePlugin::ggocakcisguuokai("\x77\157\157\143\157\155\x6d\x65\x72\143\x65\55\155\x75\x6c\x74\151\154\151\x6e\147\x75\x61\x6c\57\167\x70\x6d\154\55\x77\157\157\x63\157\x6d\155\145\162\x63\x65\56\160\x68\x70")) { goto ksiwgckusukisueg; } if (!("\160\x6f\154\171\154\141\156\x67" === $eokyomeiuimoaiac && function_exists("\160\x6c\154\x5f\147\145\164\137\160\x6f\x73\x74\x5f\154\x61\x6e\x67\165\x61\x67\x65"))) { goto okuqsqaiwwiigmyu; } $swaukaagekiououo = pll_get_post_language($yekqqesogweecqyc); okuqsqaiwwiigmyu: goto sgkqgucguyccaaki; ksiwgckusukisueg: global $sitepress; $swaukaagekiououo = $sitepress->get_language_for_element($yekqqesogweecqyc, "\x70\157\163\164\137" . $useksmwkuswkwcqg); sgkqgucguyccaaki: $owwcaiyoucwcwmmq = $this->skomiaywsggiyamc($yekqqesogweecqyc, $post); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\160\x74\x5f\142\x65\x66\x6f\x72\x65\x5f\143\154\145\x61\156\137\160\157\x73\x74"), $post, $owwcaiyoucwcwmmq, $swaukaagekiououo); $owwcaiyoucwcwmmq = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\x70\x74\137\x70\157\163\x74\137\160\165\162\x67\145\x5f\165\162\x6c\163"), $owwcaiyoucwcwmmq, $post); $this->wckuqskowgoaoqom($owwcaiyoucwcwmmq); $this->ciyymuaoqiqmucei($swaukaagekiououo); $this->uqigacqieikayuac(); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\160\164\x5f\x61\146\x74\x65\162\137\143\154\145\141\x6e\137\x70\x6f\163\x74"), $post, $owwcaiyoucwcwmmq, $swaukaagekiououo); omuemegmkesqgwys: geyiosucqswaeasw: cmsiuimsiycomyay: qmqmskywcgiqgygm: } public function wckuqskowgoaoqom($auwuoyyagaiegwae) { $auwuoyyagaiegwae = array_filter((array) $auwuoyyagaiegwae); if (!$auwuoyyagaiegwae) { goto igyesgemqesackws; } $oegoegssokkyiqam = $this->iwqysmawycmsmces(); $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\x70\x74\137\142\x65\146\157\162\x65\137\143\154\145\x61\156\x5f\146\x69\x6c\145\163"), $auwuoyyagaiegwae); foreach ($auwuoyyagaiegwae as $eeamcawaiqocomwy) { $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\160\x74\x5f\x62\145\146\157\162\145\x5f\143\x6c\145\141\x6e\x5f\x66\151\154\x65"), $eeamcawaiqocomwy); $msimssikcguyqcac = ManipulateFormat::kcwgwosqkkkkmuks($eeamcawaiqocomwy); foreach ($oegoegssokkyiqam as $mkomwsiykqigmqca) { foreach ($this->gqguucgwsqasamke($msimssikcguyqcac["\150\x6f\x73\164"], $mkomwsiykqigmqca) as $miawkwqioaeasiig) { $uwsgakoiqomwikmy = $miawkwqioaeasiig . $msimssikcguyqcac["\160\x61\x74\150"]; if (!$iiaumsgauuyeqksw->exists($uwsgakoiqomwikmy)) { goto omumkeywqqogwwue; } $iiaumsgauuyeqksw->remove($uwsgakoiqomwikmy); omumkeywqqogwwue: ceaamccscgcmqgka: } ycecaauekkiqacuu: qmguoqeawegcoeoa: } sayqggaieocmskko: $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\160\164\x5f\141\146\164\x65\x72\137\x63\x6c\145\141\x6e\137\x66\151\x6c\x65"), $eeamcawaiqocomwy); gmeiuoeewucukque: } ccgsycueagwegqeu: $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\x70\164\x5f\x61\146\x74\145\162\137\x63\x6c\x65\141\156\x5f\x66\151\x6c\x65\x73"), $auwuoyyagaiegwae); igyesgemqesackws: } public function ciyymuaoqiqmucei($swaukaagekiououo = '') { $mgoiyiawsmmgasic = ManipulateFormat::kcwgwosqkkkkmuks(ManipulateI18N::csacaukgwwayassy($swaukaagekiououo)); $oegoegssokkyiqam = $this->iwqysmawycmsmces(); foreach ($oegoegssokkyiqam as $mkomwsiykqigmqca) { $couygeouymagssgw = $mkomwsiykqigmqca . $mgoiyiawsmmgasic["\x68\157\x73\x74"] . "\52" . untrailingslashit($mgoiyiawsmmgasic["\x70\x61\x74\x68"]); $couygeouymagssgw = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\x70\164\x5f\x63\x6c\x65\141\x6e\137\x68\157\x6d\x65\137\162\157\x6f\x74"), $couygeouymagssgw, $mgoiyiawsmmgasic["\x68\x6f\163\164"], $mgoiyiawsmmgasic["\x70\141\164\x68"]); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\160\x74\137\x62\x65\x66\x6f\162\x65\137\143\154\145\x61\156\x5f\x68\x6f\155\145"), $couygeouymagssgw, $swaukaagekiououo); $ucasskoyoewwmmii = glob($couygeouymagssgw . "\x2f\x7b\151\x6e\x64\x65\x78\54\151\x6e\x64\145\x78\x2d\52\175\56\x7b\150\x74\155\154\x2c\x68\164\x6d\x6c\x5f\x67\x7a\151\x70\175", GLOB_BRACE | GLOB_NOSORT); if (!$ucasskoyoewwmmii) { goto gaouaiemokqqgssw; } foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk) { $this->kcciqwskewsuaemk()->remove($qogsmwakwacwqogk); qiikwossequwiuom: } ymucaguacemwsgsi: gaouaiemokqqgssw: global $wp_rewrite; $qmwoqyacswkwkiog = glob($couygeouymagssgw . "\x2a\x2f" . $wp_rewrite->pagination_base, GLOB_NOSORT); if (!$qmwoqyacswkwkiog) { goto qywkykqkeeuccoui; } foreach ($qmwoqyacswkwkiog as $miawkwqioaeasiig) { ManipulateFile::cseoaieqoukqgcay($miawkwqioaeasiig); oqgymyiwckkwueuw: } wqwmuuicoqigqwyc: qywkykqkeeuccoui: $lgqgmusqcgekwgui = glob($couygeouymagssgw . "\57\56\x6d\157\x62\x69\154\145\55\x61\143\x74\151\x76\x65", GLOB_BRACE | GLOB_NOSORT); if (!$lgqgmusqcgekwgui) { goto uoewiggumomegksg; } foreach ($lgqgmusqcgekwgui as $eagqciqqakiuokus) { $this->kcciqwskewsuaemk()->remove($eagqciqqakiuokus); ywokggauuiosegog: } yqqseqskcqeqkacm: uoewiggumomegksg: $okyqgikguumqkcas = glob($couygeouymagssgw . "\57\x2e\156\157\x2d\x77\x65\x62\x70", GLOB_BRACE | GLOB_NOSORT); if (!$okyqgikguumqkcas) { goto syisomgawcsqeemk; } foreach ($okyqgikguumqkcas as $kaggcuumyeuscqui) { $this->kcciqwskewsuaemk()->remove($kaggcuumyeuscqui); ugkwqaywmwqucoeo: } sockocsycmkaeosg: syisomgawcsqeemk: $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\160\164\137\x61\146\x74\145\x72\137\x63\154\145\x61\156\137\150\x6f\x6d\x65"), $couygeouymagssgw, $swaukaagekiououo); ociesuicgmkekcue: } wiaymoucakyaikii: } public function uqigacqieikayuac() { $auwuoyyagaiegwae = []; $auwuoyyagaiegwae[] = get_feed_link(); $auwuoyyagaiegwae[] = get_feed_link("\143\157\x6d\x6d\145\x6e\164\x73\x5f"); $auwuoyyagaiegwae = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\160\x74\137\x63\154\145\141\x6e\137\150\x6f\155\145\x5f\x66\145\145\x64\x73"), $auwuoyyagaiegwae); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\x70\164\137\x62\145\x66\157\x72\145\137\143\x6c\x65\141\x6e\x5f\x68\157\155\x65\x5f\x66\145\145\144\x73"), $auwuoyyagaiegwae); self::wckuqskowgoaoqom($auwuoyyagaiegwae); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\x70\164\137\141\x66\x74\145\x72\x5f\143\x6c\145\x61\x6e\137\x68\157\x6d\145\137\146\145\145\x64\x73"), $auwuoyyagaiegwae); } public function suiuswewcumcyqms($mceokigoiqekskwe, $uemuuqsgymiqyuuu) { $owwcaiyoucwcwmmq = []; $iwewcwusemqaiggk = DecoratorTerm::woimamkkeyoyauoa("\x69\x64", $mceokigoiqekskwe, $uemuuqsgymiqyuuu); $eokyomeiuimoaiac = ManipulateI18N::umuecysoywoumgwo(); if ("\167\x70\155\x6c" === $eokyomeiuimoaiac && !ManipulatePlugin::ggocakcisguuokai("\x77\x6f\157\143\x6f\x6d\155\145\162\143\145\x2d\155\165\x6c\x74\151\154\x69\x6e\x67\x75\141\x6c\57\x77\160\x6d\154\55\167\157\x6f\x63\x6f\155\155\145\162\143\145\56\x70\x68\x70")) { goto kiskwawumeiiieuk; } if ("\160\x6f\x6c\x79\x6c\141\156\x67" === $eokyomeiuimoaiac && function_exists("\160\154\x6c\x5f\x67\145\164\x5f\x74\145\x72\x6d\137\x6c\141\x6e\x67\165\141\x67\x65")) { goto asoecuscmsyusmkg; } $swaukaagekiououo = false; goto kwasqmcyiswoaiuu; asoecuscmsyusmkg: $swaukaagekiououo = pll_get_term_language($mceokigoiqekskwe); kwasqmcyiswoaiuu: goto oaqeoqsksuyyggmg; kiskwawumeiiieuk: global $sitepress; $swaukaagekiououo = $sitepress->get_language_for_element($mceokigoiqekskwe, "\164\x61\x78\x5f" . $uemuuqsgymiqyuuu); oaqeoqsksuyyggmg: $migiiksoiymissge = ManipulateTerm::qmgcisuuikgmqcsu($iwewcwusemqaiggk, $uemuuqsgymiqyuuu); if (!("\x2f" !== $this->eyayuwiqsqsmkamc($migiiksoiymissge, PHP_URL_PATH))) { goto kkmuuoscccmokkiw; } $owwcaiyoucwcwmmq[] = $migiiksoiymissge; kkmuuoscccmokkiw: $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\x70\x74\137\142\x65\x66\157\x72\145\x5f\143\x6c\x65\x61\156\137\x74\145\x72\x6d"), $iwewcwusemqaiggk, $owwcaiyoucwcwmmq, $swaukaagekiououo); $owwcaiyoucwcwmmq = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\x70\164\x5f\x74\145\x72\x6d\137\x70\165\x72\147\145\137\x75\x72\x6c\x73"), $owwcaiyoucwcwmmq, $iwewcwusemqaiggk); $this->wckuqskowgoaoqom($owwcaiyoucwcwmmq); $this->ciyymuaoqiqmucei($swaukaagekiououo); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\x70\164\137\141\146\164\145\162\137\143\154\x65\141\156\137\x74\x65\162\x6d"), $iwewcwusemqaiggk, $owwcaiyoucwcwmmq, $swaukaagekiououo); } public function eyayuwiqsqsmkamc(?string $eeamcawaiqocomwy, ?string $wksoawcgagcgoask) { return _get_component_from_parsed_url_array(ManipulateFormat::gooqqcmsyseiaikc($eeamcawaiqocomwy), $wksoawcgagcgoask); } }
