<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62ea46af9a44c             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\Decorator\DecoratorUser; use Pmpr\Common\Foundation\Decorator\Post\DecoratorPost; use Pmpr\Common\Foundation\Decorator\Taxonomy\DecoratorTaxonomy; use Pmpr\Common\Foundation\Decorator\Taxonomy\DecoratorTerm; use Pmpr\Common\Foundation\Manipulate\ManipulateQuery; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulatePlugin; use Pmpr\Common\Foundation\Manipulate\Post\ManipulateComment; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTaxonomy; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Module\Optimization\Manipulate\Manipulate; use Pmpr\Module\Optimization\Manipulate\ManipulateFormat; use Pmpr\Module\Optimization\Manipulate\ManipulateI18N; use Pmpr\Module\Optimization\Manipulate\ManipulateFile; use Exception; use FilesystemIterator; use IteratorIterator; use RegexIterator; use WP_Post; use WP_Taxonomy; use WP_Term; use WP_Upgrader; abstract class Temp extends Container { protected ?string $id = null; protected $paths; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x73\167\151\164\x63\x68\137\164\x68\x65\155\x65", [$this, "\167\x65\151\153\x6b\171\151\x71\x6f\157\147\153\x6f\171\143\x65"])->qcsmikeggeemccuu("\x70\x72\x65\x5f\x70\157\163\164\137\x75\160\x64\141\x74\x65", [$this, "\x61\x75\x77\x71\171\147\155\x77\167\x69\165\147\x63\x69\x65\x65"], 2)->qcsmikeggeemccuu("\x75\x70\x67\162\141\x64\x65\x72\x5f\160\162\x6f\143\x65\x73\163\137\143\157\155\160\154\145\x74\x65", [$this, "\153\x6f\157\x63\x75\171\151\171\151\x69\x65\x75\141\x6b\155\x6d"], 2)->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\157\x70\x74\137\160\165\x72\x67\x65\x5f\143\x61\x63\150\145\137\x66\151\154\x65\x73"), [$this, "\167\x65\x69\x6b\153\171\x69\161\x6f\157\x67\x6b\157\171\x63\x65"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\157\160\164\x5f\141\146\x74\x65\x72\137\x63\x6c\145\141\x6e\137\160\x6f\x73\164"), [$this, "\x71\x61\x67\155\x77\167\x6d\x71\x69\151\143\x61\171\141\x71\x67"])->qcsmikeggeemccuu("\x63\x6f\155\x6d\x65\x6e\164\x5f\160\157\x73\x74", [$this, "\x6d\155\x65\151\165\x79\165\147\145\x65\x6b\157\x71\167\143\x73"], 2, 99)->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\x6f\160\164\137{$this->mwikyscisascoeea()}\x5f\143\154\145\141\156\x5f\x64\x6f\155\x61\x69\x6e"), [$this, "\x77\x65\151\x6b\153\x79\x69\x71\157\157\147\153\157\171\x63\x65"]); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\157\x70\164\x5f\x63\154\145\141\156\137\146\151\x6c\x65\x73"), [$this, "\151\155\157\167\141\155\x69\x77\145\x65\153\x79\x67\x6f\x63\x6d"]); if (!ManipulateQuery::euqowsuwmgokuqqo()) { goto kmqusaiaiogecyiy; } $seyqqsmuaiegkeeq = ManipulateTaxonomy::ciugwooasaqcywas(["\x70\165\x62\154\151\x63" => true, "\x70\165\142\154\x69\143\154\x79\137\161\x75\x65\162\x79\x61\142\x6c\145" => true, self::aisguagukaewucii => self::emgcgiseaoouacge]); foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya) { $this->cecaguuoecmccuse("{$kesssewsiegssiya}\137\162\157\167\x5f\141\143\164\x69\x6f\x6e\163", [$this, "\167\163\161\171\x73\x79\x61\167\167\x77\x67\x67\147\157\167\x63"], 2); ocmwuquguuqigose: } icouowaoycuuisqe: kmqusaiaiogecyiy: parent::kgquecmsgcouyaya(); } public function mmeiuyugeekoqwcs($aqqmosqmsuueyaes, $swyywyqesisooayc) { $post = ManipulateComment::ayueggmoqeeukqmq($aqqmosqmsuueyaes); if (!$post) { goto swckikycciugciqq; } $this->ekcemquyyiqykmoo(ManipulatePost::mwikyscisascoeea($post)); swckikycciugciqq: } public function mwikyscisascoeea() : string { return $this->id; } public function iwqysmawycmsmces() : array { $oegoegssokkyiqam = $this->paths; if (!is_string($oegoegssokkyiqam)) { goto coogyackikgmecic; } $oegoegssokkyiqam = [$oegoegssokkyiqam]; coogyackikgmecic: return $oegoegssokkyiqam; } public function auwqygmwwiugciee($yekqqesogweecqyc, $icwicymcioeyeyek) { $post = ManipulatePost::get($yekqqesogweecqyc); if (!($post && "\x70\165\142\154\x69\x73\x68" === ManipulatePost::ucwmcwqmqwaymkkc($post))) { goto iqwsqykoueqyyomy; } $swaukaagekiououo = ManipulateI18N::emqmaiomewcmuacu($yekqqesogweecqyc); $owwcaiyoucwcwmmq = $this->skomiaywsggiyamc($yekqqesogweecqyc, $post); $owwcaiyoucwcwmmq = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\160\164\x5f\x70\x6f\163\x74\x5f\160\x75\x72\x67\145\137\x75\x72\154\163"), $owwcaiyoucwcwmmq, $post); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\160\164\x5f\x62\145\x66\157\162\145\137\x63\x6c\x65\141\156\137\x70\x6f\163\x74"), $post, $owwcaiyoucwcwmmq, $swaukaagekiououo); $this->wckuqskowgoaoqom($owwcaiyoucwcwmmq); $this->ciyymuaoqiqmucei($swaukaagekiououo); $this->uqigacqieikayuac(); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\160\x74\x5f\x61\x66\x74\145\162\137\x63\154\145\x61\x6e\137\160\x6f\x73\164"), $post, $owwcaiyoucwcwmmq, $swaukaagekiououo); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\x70\164\x5f{$this->mwikyscisascoeea()}\x5f\141\146\164\x65\162\137\143\x6c\x65\x61\x6e\x5f\x70\x6f\x73\x74"), $post, $owwcaiyoucwcwmmq, $swaukaagekiououo); iqwsqykoueqyyomy: } public function imowamiweekygocm(array $auwuoyyagaiegwae = []) { $iaceaqwggsgmasqe = []; foreach ($auwuoyyagaiegwae as $eeamcawaiqocomwy) { $mgoiyiawsmmgasic = ManipulateFormat::kcwgwosqkkkkmuks($eeamcawaiqocomwy); $iaceaqwggsgmasqe[] = $mgoiyiawsmmgasic["\x73\143\x68\145\155\x65"] . "\x3a\x2f\x2f" . $mgoiyiawsmmgasic["\x68\157\x73\x74"] . "\52" . $mgoiyiawsmmgasic["\160\x61\x74\150"]; egikqoaqqegawugu: } ggaucuaykyuiikem: return $iaceaqwggsgmasqe; } public function koocuyiyiieuakmm($kkkswwyyaoeysaio, $iaakskwmyqceoscy) { if (!("\165\x70\144\x61\x74\145" === $iaakskwmyqceoscy["\x61\143\164\x69\x6f\x6e"])) { goto aakoeuuosouyeemc; } if (!("\164\x68\x65\x6d\145" === $iaakskwmyqceoscy["\x74\171\x70\x65"])) { goto wmcmqmmcweecqmsw; } if (!is_array($iaakskwmyqceoscy["\x74\150\145\x6d\145\x73"])) { goto yoaewquyogiimyic; } $current_theme = wp_get_theme(); $sgmuqamasucuikqa = [ $current_theme->get_template(), $current_theme->get_stylesheet(), ]; if (!array_intersect($iaakskwmyqceoscy["\164\150\145\155\x65\163"], $sgmuqamasucuikqa)) { goto caaygouikgagsssc; } $this->weikkyiqoogkoyce(); caaygouikgagsssc: yoaewquyogiimyic: wmcmqmmcweecqmsw: aakoeuuosouyeemc: } public function eugcsqcwkqseakoe($mceokigoiqekskwe, $gywkakmagykqkiei, $kesssewsiegssiya) { if (!ManipulateTaxonomy::cekoogweeooasayu($kesssewsiegssiya)) { goto qsmoiwqcuamyuwyu; } $this->weikkyiqoogkoyce(); qsmoiwqcuamyuwyu: } private function wgokqcqsmcqsiiue($miawkwqioaeasiig) { if (!$this->kcciqwskewsuaemk()->asysewkmisimumay($miawkwqioaeasiig)) { goto cicegcoqyuoggiwy; } ManipulateFile::cseoaieqoukqgcay($miawkwqioaeasiig); cicegcoqyuoggiwy: } private function qeoaoiweucueeuqu(string $eeamcawaiqocomwy, $ymiyawysimukkoso = false) { global $wp_rewrite; $msimssikcguyqcac = ManipulateFormat::kcwgwosqkkkkmuks($eeamcawaiqocomwy); foreach ($this->gqguucgwsqasamke($msimssikcguyqcac["\x68\157\163\x74"]) as $miawkwqioaeasiig) { $mkomwsiykqigmqca = $miawkwqioaeasiig . $msimssikcguyqcac["\160\141\x74\150"]; if (!$this->kcciqwskewsuaemk()->exists($mkomwsiykqigmqca)) { goto esqiocgueosoksyq; } foreach (ManipulateFile::kiygcugekegoqauw($mkomwsiykqigmqca) as $igqsaukqcqscimok) { if (!ManipulateFile::mecmkmogggamegic($igqsaukqcqscimok)) { goto sqmiymiemeegegic; } $this->kcciqwskewsuaemk()->remove(ManipulateFile::scikcaaaiwcsqowm($igqsaukqcqscimok)); sqmiymiemeegegic: meseuuacmkuowqau: } wycuyiukyceccaow: if (!$ymiyawysimukkoso) { goto csqakuuiyywassgw; } $this->wgokqcqsmcqsiiue(trailingslashit($mkomwsiykqigmqca) . $wp_rewrite->pagination_base); csqakuuiyywassgw: esqiocgueosoksyq: saekesoeysauokkq: } ugcwqacogqoswyse: } public function gqguucgwsqasamke($qcqaayguacmuykwi, $mkomwsiykqigmqca = '', $iuomscuiswckwcoe = false) { if (!$mkomwsiykqigmqca) { goto wwwggoemicgwwasy; } if (!is_array($mkomwsiykqigmqca)) { goto csggsqueaqmwgwkk; } $oegoegssokkyiqam = $mkomwsiykqigmqca; goto sescaagayikiggyq; csggsqueaqmwgwkk: $oegoegssokkyiqam = [$mkomwsiykqigmqca]; sescaagayikiggyq: goto egmocemomockemia; wwwggoemicgwwasy: $oegoegssokkyiqam = $this->iwqysmawycmsmces(); egmocemomockemia: if (isset($eewgemuwouukmwgk[$qcqaayguacmuykwi])) { goto kucqcqeesaiacekm; } $eewgemuwouukmwgk[$qcqaayguacmuykwi] = []; foreach ($oegoegssokkyiqam as $mkomwsiykqigmqca) { $mkomwsiykqigmqca = trailingslashit($mkomwsiykqigmqca); try { $mcowwqgmkuemoumu = new IteratorIterator(new FilesystemIterator($mkomwsiykqigmqca)); } catch (Exception $iewosgggaueeyymg) { return []; } $ucccueqywigcukcc = sprintf("\57\45\x31\x24\x73\45\x32\44\163\50\56\52\51\x2f\151", ManipulateFile::cgwcgscqeqauaagi($mkomwsiykqigmqca, true), $qcqaayguacmuykwi); try { $owouacqkcukeeomw = new RegexIterator($mcowwqgmkuemoumu, $ucccueqywigcukcc); foreach ($owouacqkcukeeomw as $uwsgakoiqomwikmy) { $eewgemuwouukmwgk[$qcqaayguacmuykwi][] = ManipulateFile::scikcaaaiwcsqowm($uwsgakoiqomwikmy); aaiymmkqmocgakei: } acisycocoswkekik: } catch (Exception $iewosgggaueeyymg) { $eewgemuwouukmwgk[$qcqaayguacmuykwi] = []; } cqaeiesyciakcagu: } gemwkqocygssmequ: kucqcqeesaiacekm: return $eewgemuwouukmwgk[$qcqaayguacmuykwi]; } public function qagmwwmqiicayaqg(WP_Post $post) { foreach ($this->soycogqiiekoekgq($post) as $eeamcawaiqocomwy) { $this->qeoaoiweucueeuqu($eeamcawaiqocomwy); scyqmcegwikkoesw: } cewyaqiqmmwmauce: } public function wsqysyawwwgggowc($ccowyogiqwikkkie, $iwewcwusemqaiggk) { if (!DecoratorUser::scmcyesmmikkucie()) { goto ycweseaccsomkioa; } $eeamcawaiqocomwy = wp_nonce_url(ManipulateServer::oiucukewkckkwiqc("\141\x64\x6d\151\x6e\x2d\160\157\x73\x74\56\160\150\x70\x3f\141\143\164\x69\x6f\156\75\157\160\x74\x69\x6d\x69\x7a\x61\x74\x69\157\x6e\137\160\165\162\147\x65\x5f{$this->mwikyscisascoeea()}\x26\x74\x79\160\x65\75\x74\x65\x72\x6d\55{$iwewcwusemqaiggk->term_id}\x26\164\141\x78\x6f\156\157\155\x79\x3d{$iwewcwusemqaiggk->taxonomy}"), "\x6f\x70\x74\151\x6d\151\x7a\x61\x74\x69\157\x6e\x5f\160\165\x72\x67\x65\x5f{$this->mwikyscisascoeea()}\137\164\x65\x72\155\55{$iwewcwusemqaiggk->term_id}"); $ccowyogiqwikkkie["\x6f\160\x74\151\155\x69\x7a\141\164\151\157\x6e\137\x70\165\x72\147\145\137{$this->mwikyscisascoeea()}"] = ManipulateHTML::yuawgssgauywkiia(sprintf(__("\103\154\x65\141\x72\40\x74\x68\x69\163\40\45\x73", PR__MDL__OPTIMIZATION), $this->mwikyscisascoeea()), $eeamcawaiqocomwy); ycweseaccsomkioa: return $ccowyogiqwikkkie; } private function wgkqeyqiyacgqeso($post) { $cqgoimumaewouews = get_the_time("\x59\x2d\155\x2d\x64", $post); $auwuoyyagaiegwae = []; if (!$cqgoimumaewouews) { goto ciwggusyecgskagy; } $ocogsiouoiuuguym = explode("\x2d", $cqgoimumaewouews); $auwuoyyagaiegwae = [get_year_link($ocogsiouoiuuguym[0]), get_month_link($ocogsiouoiuuguym[0], $ocogsiouoiuuguym[1]), get_day_link($ocogsiouoiuuguym[0], $ocogsiouoiuuguym[1], $ocogsiouoiuuguym[2])]; $auwuoyyagaiegwae = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\x70\164\137\x70\x6f\x73\164\x5f\144\141\x74\x65\163\x5f\165\162\154\x73"), $auwuoyyagaiegwae); ciwggusyecgskagy: return $auwuoyyagaiegwae; } public function yeimaqssyuewkcgm($post) { foreach ($this->wgkqeyqiyacgqeso($post) as $eeamcawaiqocomwy) { $this->qeoaoiweucueeuqu($eeamcawaiqocomwy, true); eokcuuwqaomkooag: } sccqekuwywiisami: } private function soycogqiiekoekgq(WP_Post $post) { $auwuoyyagaiegwae = []; $seyqqsmuaiegkeeq = DecoratorTaxonomy::qgckgkwskmsomoqs($post, self::ckmqoekmugkggeym); foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya) { if (!($kesssewsiegssiya instanceof WP_Taxonomy && $kesssewsiegssiya->public && "\160\162\x6f\144\165\143\x74\x5f\163\150\x69\160\x70\151\156\147\x5f\143\154\x61\x73\163" === $kesssewsiegssiya->name)) { goto ecqeqquikuomwgsu; } $kesssewsiegssiya = ManipulateTaxonomy::aakmagwggmkoiiyu($kesssewsiegssiya); $uyuaosigqymaqsaa = ManipulatePost::weescwwgqgiyumyw($post, $kesssewsiegssiya); if (!$uyuaosigqymaqsaa) { goto uekkkmwciocmosgg; } foreach ($uyuaosigqymaqsaa as $iwewcwusemqaiggk) { $migiiksoiymissge = ManipulateTerm::qmgcisuuikgmqcsu($iwewcwusemqaiggk, $kesssewsiegssiya); if (!$migiiksoiymissge) { goto ysssquieawyysiyc; } $auwuoyyagaiegwae[] = $migiiksoiymissge; ysssquieawyysiyc: if (!ManipulateTaxonomy::aewcsqigycuaekym($kesssewsiegssiya)) { goto wsqoskqgyooqeyga; } $mogoquygwgkamaaw = (array) get_ancestors(ManipulateTerm::mwikyscisascoeea($iwewcwusemqaiggk), $kesssewsiegssiya); foreach ($mogoquygwgkamaaw as $aqguqemekkmogkee) { $uasmmsomeawcggee = ManipulateTerm::get($aqguqemekkmogkee, $kesssewsiegssiya); if (!$uasmmsomeawcggee) { goto suaymckwwgmugsaa; } $yaycyieqogmsoamk = ManipulateTerm::qmgcisuuikgmqcsu($uasmmsomeawcggee, $kesssewsiegssiya); if (!$yaycyieqogmsoamk) { goto uwsmcsiiisuocgwg; } $auwuoyyagaiegwae[] = $yaycyieqogmsoamk; uwsmcsiiisuocgwg: suaymckwwgmugsaa: swmgucaogosuueug: } yomoeykcqyukscmi: wsqoskqgyooqeyga: gkoiyaagwgycysim: } ksqgwiceoomkuuiy: uekkkmwciocmosgg: ecqeqquikuomwgsu: qscqkykqskqmisgw: } qgqasacusgwmoegy: return $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\x70\164\137\x70\157\x73\164\137\x74\x65\x72\155\x73\x5f\165\162\x6c\x73"), $auwuoyyagaiegwae); } public function weikkyiqoogkoyce($swaukaagekiououo = '') { $auwuoyyagaiegwae = !$swaukaagekiououo || is_object($swaukaagekiououo) || is_array($swaukaagekiououo) || is_int($swaukaagekiououo) ? (array) ManipulateI18N::kmmygsqekuksyeuy() : (array) ManipulateI18N::smickumaawgqkmco($swaukaagekiououo); $auwuoyyagaiegwae = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\160\x74\x5f\143\154\x65\x61\156\137\144\157\x6d\x61\x69\156\x5f\165\162\154\x73"), $auwuoyyagaiegwae, $swaukaagekiououo); $auwuoyyagaiegwae = array_filter($auwuoyyagaiegwae); $oegoegssokkyiqam = $this->iwqysmawycmsmces(); if (!($auwuoyyagaiegwae && $oegoegssokkyiqam)) { goto amoygaweoeymiuiy; } foreach ($oegoegssokkyiqam as $mkomwsiykqigmqca) { $gwyacgiwokuuwouo = ManipulateI18N::augqukusksqwwuus($swaukaagekiououo, $mkomwsiykqigmqca); foreach ($auwuoyyagaiegwae as $eeamcawaiqocomwy) { $msimssikcguyqcac = ManipulateFormat::kcwgwosqkkkkmuks($eeamcawaiqocomwy); $couygeouymagssgw = $mkomwsiykqigmqca . $msimssikcguyqcac["\x68\x6f\163\x74"] . $msimssikcguyqcac["\x70\141\164\x68"]; $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\x70\164\137\x62\145\x66\157\162\x65\x5f\x63\154\x65\141\156\137\x64\157\155\x61\151\156"), $couygeouymagssgw, $swaukaagekiououo, $eeamcawaiqocomwy); foreach ($this->gqguucgwsqasamke($msimssikcguyqcac["\150\x6f\x73\164"], $mkomwsiykqigmqca) as $miawkwqioaeasiig) { $uwsgakoiqomwikmy = $miawkwqioaeasiig . $msimssikcguyqcac["\160\141\164\150"]; $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); if (!$iiaumsgauuyeqksw->exists($uwsgakoiqomwikmy)) { goto moimkkmkooeiyisc; } if ($iiaumsgauuyeqksw->asysewkmisimumay($uwsgakoiqomwikmy)) { goto gwayeyymscmgwqkg; } $iiaumsgauuyeqksw->remove($uwsgakoiqomwikmy); goto caoikoqmyeqsqqqe; gwayeyymscmgwqkg: ManipulateFile::cseoaieqoukqgcay($uwsgakoiqomwikmy, $gwyacgiwokuuwouo, $iiaumsgauuyeqksw); caoikoqmyeqsqqqe: moimkkmkooeiyisc: isiqkeyciyqgkayu: } iuieskocqoqkkwus: $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\x70\x74\x5f\x61\x66\164\x65\162\x5f\x63\154\145\141\x6e\137\144\157\x6d\x61\x69\156"), $couygeouymagssgw, $swaukaagekiououo, $eeamcawaiqocomwy); syeeegeygawwqiuu: } ycskuioouwwemgke: wmcaecgwmmwuuqsq: } igscwycsqsckmcuq: amoygaweoeymiuiy: } public function skomiaywsggiyamc($aokagokqyuysuksm, $post) { $auwuoyyagaiegwae = []; $mqqisesagsuooios = Manipulate::yygaymuiikwoakuc($aokagokqyuysuksm); $migiiksoiymissge = str_replace(["\45\160\157\163\x74\156\141\x6d\x65\x25", "\x25\x70\141\x67\145\x6e\x61\x6d\x65\45"], $mqqisesagsuooios[1], $mqqisesagsuooios[0]); if (!($this->eyayuwiqsqsmkamc($migiiksoiymissge, PHP_URL_PATH) !== "\57")) { goto kcomueysiyyqagus; } $auwuoyyagaiegwae[] = $migiiksoiymissge; kcomueysiyyqagus: $useksmwkuswkwcqg = ManipulatePost::gueasuouwqysmomu($post); $myyccyuumcscsagc = ManipulatePost::mqgeysameoesmuqw($useksmwkuswkwcqg); if (!$myyccyuumcscsagc) { goto ckuagmyqkyoeeaeu; } global $wp_rewrite; $auwuoyyagaiegwae[] = $myyccyuumcscsagc; $auwuoyyagaiegwae[] = $myyccyuumcscsagc . "{$wp_rewrite->pagination_base}"; ckuagmyqkyoeeaeu: $dokeeoamkysymmqw = []; if (!$dokeeoamkysymmqw) { goto egosmwkuuikwqeak; } global $blog_id; $uogwqioiiwqsyksu = DecoratorOption::get("\150\157\155\x65"); if (!(!empty($blog_id) && ManipulateServer::gsaomcwyacqcumaa())) { goto cqwgmwqiakmgyuee; } switch_to_blog($blog_id); $uogwqioiiwqsyksu = DecoratorOption::get("\150\157\155\145"); restore_current_blog(); cqwgmwqiakmgyuee: $scyimseukcmieyuw = ManipulateFormat::kcwgwosqkkkkmuks($uogwqioiiwqsyksu); $uogwqioiiwqsyksu = "{$scyimseukcmieyuw["\x73\143\150\145\x6d\145"]}\x3a\57\x2f{$scyimseukcmieyuw["\x68\157\x73\164"]}"; $oegoegssokkyiqam = $this->iwqysmawycmsmces(); foreach ($oegoegssokkyiqam as $mkomwsiykqigmqca) { $mkomwsiykqigmqca .= $scyimseukcmieyuw["\150\157\163\x74"]; foreach ($dokeeoamkysymmqw as $suaemuyiacqyugsm) { if (!strstr($suaemuyiacqyugsm, "\52")) { goto ggkoiouwecyiosym; } $meyiiwcswqmuggyg = ManipulateFile::qawkooaucwoseaia($mkomwsiykqigmqca, "\x23" . $suaemuyiacqyugsm . "\43\x69"); foreach ($meyiiwcswqmuggyg as $qogsmwakwacwqogk) { $auwuoyyagaiegwae[] = str_replace($mkomwsiykqigmqca, untrailingslashit($uogwqioiiwqsyksu), $qogsmwakwacwqogk->amqagusacuuuaswg()); ossyqogewmggmaoc: } okemsmmeceoeaswi: goto eekeksysqeuoskoo; ggkoiouwecyiosym: $auwuoyyagaiegwae[] = trailingslashit($uogwqioiiwqsyksu) . $suaemuyiacqyugsm; eekeksysqeuoskoo: } cmagycousakeeaei: kiwiesucugwoiuum: } ksgwgcguemcescqg: egosmwkuuikwqeak: $auwuoyyagaiegwae[] = ManipulatePost::ocigkomwiuwmmkks($post); $eyagosskwwmgwmog = DecoratorPost::iimmeiugygssweyc($aokagokqyuysuksm); if (!(bool) $eyagosskwwmgwmog) { goto keqagmaiqqsgkmso; } foreach ($eyagosskwwmgwmog as $omwmuycmeqcqokom) { $auwuoyyagaiegwae[] = ManipulatePost::ycqquoiyyuesegsy($omwmuycmeqcqokom); eymiqwsygoowowuu: } eosmwawqaocwgccq: keqagmaiqqsgkmso: return array_flip(array_flip($auwuoyyagaiegwae)); } public function ekcemquyyiqykmoo(?string $yekqqesogweecqyc) { static $gqiuywqwmiieqcww = []; if (isset($gqiuywqwmiieqcww[$yekqqesogweecqyc])) { goto ekgcquiosyesyism; } $gqiuywqwmiieqcww[$yekqqesogweecqyc] = 1; if (defined("\x44\x4f\111\116\x47\137\101\125\x54\x4f\x53\x41\x56\105")) { goto qggiogeyowcoaiqy; } $post = ManipulatePost::get($yekqqesogweecqyc); $useksmwkuswkwcqg = ManipulatePost::gueasuouwqysmomu($post); if (!($post && $useksmwkuswkwcqg && !in_array($useksmwkuswkwcqg, ["\x61\164\x74\141\x63\150\x6d\145\156\x74", "\156\x61\x76\137\x6d\x65\156\165\137\151\164\145\155"]) && !in_array($post->post_status, ["\x64\x72\141\146\164", "\141\x75\x74\157\x2d\x64\162\x61\x66\164"]))) { goto usgmimcwygsmcioa; } if (!ManipulatePost::qeosassuekcieuuy($useksmwkuswkwcqg)) { goto wkcwuemioaiyouek; } $eokyomeiuimoaiac = ManipulateI18N::umuecysoywoumgwo(); $swaukaagekiououo = false; if ("\167\x70\155\x6c" === $eokyomeiuimoaiac && !ManipulatePlugin::ggocakcisguuokai("\x77\x6f\x6f\x63\x6f\x6d\x6d\x65\x72\143\145\55\155\x75\154\x74\x69\154\151\156\x67\165\141\154\57\x77\160\x6d\154\x2d\x77\157\157\143\157\x6d\x6d\x65\162\x63\x65\56\160\150\x70")) { goto uiwswesymogiwsgg; } if (!("\160\157\154\x79\x6c\x61\156\147" === $eokyomeiuimoaiac && function_exists("\x70\x6c\154\137\x67\x65\164\137\x70\x6f\x73\x74\x5f\154\x61\x6e\x67\x75\141\147\145"))) { goto ekgsawcuswowmosm; } $swaukaagekiououo = pll_get_post_language($yekqqesogweecqyc); ekgsawcuswowmosm: goto euogcyyayioyyiyg; uiwswesymogiwsgg: global $sitepress; $swaukaagekiououo = $sitepress->get_language_for_element($yekqqesogweecqyc, "\x70\x6f\x73\x74\x5f" . $useksmwkuswkwcqg); euogcyyayioyyiyg: $owwcaiyoucwcwmmq = $this->skomiaywsggiyamc($yekqqesogweecqyc, $post); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\160\x74\137\x62\145\x66\157\x72\x65\137\x63\154\x65\141\156\x5f\160\157\x73\164"), $post, $owwcaiyoucwcwmmq, $swaukaagekiououo); $owwcaiyoucwcwmmq = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\x70\x74\137\x70\157\163\164\137\x70\x75\x72\147\145\137\165\x72\x6c\163"), $owwcaiyoucwcwmmq, $post); $this->wckuqskowgoaoqom($owwcaiyoucwcwmmq); $this->ciyymuaoqiqmucei($swaukaagekiououo); $this->uqigacqieikayuac(); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\x70\x74\x5f\x61\x66\x74\x65\162\137\143\154\x65\141\156\137\160\x6f\163\x74"), $post, $owwcaiyoucwcwmmq, $swaukaagekiououo); wkcwuemioaiyouek: usgmimcwygsmcioa: qggiogeyowcoaiqy: ekgcquiosyesyism: } public function wckuqskowgoaoqom($auwuoyyagaiegwae) { $auwuoyyagaiegwae = array_filter((array) $auwuoyyagaiegwae); if (!$auwuoyyagaiegwae) { goto cokacyaayuueyuuu; } $oegoegssokkyiqam = $this->iwqysmawycmsmces(); $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\x70\x74\x5f\x62\x65\x66\157\162\x65\137\143\x6c\x65\141\156\x5f\146\151\154\145\x73"), $auwuoyyagaiegwae); foreach ($auwuoyyagaiegwae as $eeamcawaiqocomwy) { $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\x70\164\137\x62\145\x66\x6f\162\145\x5f\x63\154\x65\x61\x6e\x5f\146\151\154\x65"), $eeamcawaiqocomwy); $msimssikcguyqcac = ManipulateFormat::kcwgwosqkkkkmuks($eeamcawaiqocomwy); foreach ($oegoegssokkyiqam as $mkomwsiykqigmqca) { foreach ($this->gqguucgwsqasamke($msimssikcguyqcac["\150\x6f\163\x74"], $mkomwsiykqigmqca) as $miawkwqioaeasiig) { $uwsgakoiqomwikmy = $miawkwqioaeasiig . $msimssikcguyqcac["\160\141\x74\x68"]; if (!$iiaumsgauuyeqksw->exists($uwsgakoiqomwikmy)) { goto koawwmccgquqqmwa; } $iiaumsgauuyeqksw->remove($uwsgakoiqomwikmy); koawwmccgquqqmwa: wogokmgkgkumqcws: } gmymycwymqkuiisi: qimieogaimwmukmu: } kgeggsckmgcgwcqm: $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\160\164\137\141\x66\x74\x65\162\137\143\x6c\x65\x61\x6e\x5f\x66\x69\x6c\145"), $eeamcawaiqocomwy); gmcqkoqwkiawaikw: } qosckaqceoumcasm: $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\160\164\x5f\141\146\164\145\162\137\x63\154\145\141\156\x5f\146\151\x6c\x65\163"), $auwuoyyagaiegwae); cokacyaayuueyuuu: } public function ciyymuaoqiqmucei($swaukaagekiououo = '') { $mgoiyiawsmmgasic = ManipulateFormat::kcwgwosqkkkkmuks(ManipulateI18N::csacaukgwwayassy($swaukaagekiououo)); $oegoegssokkyiqam = $this->iwqysmawycmsmces(); foreach ($oegoegssokkyiqam as $mkomwsiykqigmqca) { $couygeouymagssgw = $mkomwsiykqigmqca . $mgoiyiawsmmgasic["\x68\157\x73\x74"] . "\52" . untrailingslashit($mgoiyiawsmmgasic["\160\141\x74\150"]); $couygeouymagssgw = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\160\164\x5f\x63\154\x65\141\156\137\150\157\x6d\145\x5f\x72\x6f\157\x74"), $couygeouymagssgw, $mgoiyiawsmmgasic["\x68\x6f\163\164"], $mgoiyiawsmmgasic["\160\x61\164\x68"]); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\x70\164\137\142\x65\x66\157\x72\x65\137\x63\x6c\145\141\156\137\x68\157\x6d\145"), $couygeouymagssgw, $swaukaagekiououo); $ucasskoyoewwmmii = glob($couygeouymagssgw . "\x2f\x7b\x69\156\x64\x65\170\54\x69\156\x64\x65\x78\x2d\x2a\175\x2e\x7b\x68\164\155\154\54\x68\164\155\154\x5f\147\172\x69\160\x7d", GLOB_BRACE | GLOB_NOSORT); if (!$ucasskoyoewwmmii) { goto iuaommmyqoecmuss; } foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk) { $this->kcciqwskewsuaemk()->remove($qogsmwakwacwqogk); ygywkqgioiscmuie: } eqieeecackceeweg: iuaommmyqoecmuss: global $wp_rewrite; $qmwoqyacswkwkiog = glob($couygeouymagssgw . "\52\57" . $wp_rewrite->pagination_base, GLOB_NOSORT); if (!$qmwoqyacswkwkiog) { goto cuwkqgemkmuuegkc; } foreach ($qmwoqyacswkwkiog as $miawkwqioaeasiig) { ManipulateFile::cseoaieqoukqgcay($miawkwqioaeasiig); eecgougegqassgyq: } ikeyoyoigsuouokm: cuwkqgemkmuuegkc: $lgqgmusqcgekwgui = glob($couygeouymagssgw . "\57\56\155\x6f\x62\151\x6c\x65\x2d\141\143\164\151\166\x65", GLOB_BRACE | GLOB_NOSORT); if (!$lgqgmusqcgekwgui) { goto cceakqgoysacqwmc; } foreach ($lgqgmusqcgekwgui as $eagqciqqakiuokus) { $this->kcciqwskewsuaemk()->remove($eagqciqqakiuokus); wemmseueskwkcwou: } oyicskieeaewgwce: cceakqgoysacqwmc: $okyqgikguumqkcas = glob($couygeouymagssgw . "\x2f\56\x6e\x6f\55\167\x65\x62\160", GLOB_BRACE | GLOB_NOSORT); if (!$okyqgikguumqkcas) { goto ekmqouqsgsaukeiq; } foreach ($okyqgikguumqkcas as $kaggcuumyeuscqui) { $this->kcciqwskewsuaemk()->remove($kaggcuumyeuscqui); ceeqguaoysyaasey: } scaimkkukmgoeaya: ekmqouqsgsaukeiq: $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\x70\164\137\141\x66\x74\145\x72\137\x63\x6c\x65\141\x6e\137\x68\x6f\155\145"), $couygeouymagssgw, $swaukaagekiououo); ckowiuagwmsqmiqc: } cycyaqqawmwiywwe: } public function uqigacqieikayuac() { $auwuoyyagaiegwae = []; $auwuoyyagaiegwae[] = get_feed_link(); $auwuoyyagaiegwae[] = get_feed_link("\143\157\x6d\155\x65\156\164\x73\x5f"); $auwuoyyagaiegwae = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\160\x74\137\143\154\145\141\x6e\x5f\150\157\155\x65\x5f\x66\x65\145\x64\163"), $auwuoyyagaiegwae); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\x70\x74\x5f\x62\145\146\x6f\162\x65\137\143\x6c\x65\x61\x6e\137\150\x6f\x6d\145\137\146\145\145\144\163"), $auwuoyyagaiegwae); self::wckuqskowgoaoqom($auwuoyyagaiegwae); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\160\164\x5f\x61\x66\x74\x65\x72\x5f\143\x6c\x65\x61\156\x5f\x68\157\155\145\137\146\x65\x65\144\163"), $auwuoyyagaiegwae); } public function suiuswewcumcyqms($mceokigoiqekskwe, $uemuuqsgymiqyuuu) { $owwcaiyoucwcwmmq = []; $iwewcwusemqaiggk = DecoratorTerm::woimamkkeyoyauoa("\x69\144", $mceokigoiqekskwe, $uemuuqsgymiqyuuu); $eokyomeiuimoaiac = ManipulateI18N::umuecysoywoumgwo(); if ("\x77\x70\x6d\x6c" === $eokyomeiuimoaiac && !ManipulatePlugin::ggocakcisguuokai("\167\157\157\x63\157\x6d\x6d\x65\162\x63\x65\55\x6d\x75\x6c\x74\x69\154\151\x6e\147\165\141\154\57\x77\160\155\x6c\55\x77\157\x6f\143\157\x6d\x6d\145\162\x63\145\56\160\150\160")) { goto wceiuqaeywmgscww; } if ("\x70\x6f\x6c\x79\x6c\141\x6e\147" === $eokyomeiuimoaiac && function_exists("\160\x6c\x6c\137\147\x65\x74\x5f\164\145\162\x6d\137\x6c\x61\156\x67\x75\141\147\x65")) { goto cugkqmkuyuwwqcec; } $swaukaagekiououo = false; goto ewooakeuigcyuemu; cugkqmkuyuwwqcec: $swaukaagekiououo = pll_get_term_language($mceokigoiqekskwe); ewooakeuigcyuemu: goto kacgiqwewyeeyyam; wceiuqaeywmgscww: global $sitepress; $swaukaagekiououo = $sitepress->get_language_for_element($mceokigoiqekskwe, "\x74\141\170\x5f" . $uemuuqsgymiqyuuu); kacgiqwewyeeyyam: $migiiksoiymissge = ManipulateTerm::qmgcisuuikgmqcsu($iwewcwusemqaiggk, $uemuuqsgymiqyuuu); if (!("\57" !== $this->eyayuwiqsqsmkamc($migiiksoiymissge, PHP_URL_PATH))) { goto qwogeocemuaaasiw; } $owwcaiyoucwcwmmq[] = $migiiksoiymissge; qwogeocemuaaasiw: $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\x70\x74\137\142\145\146\157\x72\x65\x5f\143\x6c\x65\141\156\137\164\145\x72\155"), $iwewcwusemqaiggk, $owwcaiyoucwcwmmq, $swaukaagekiououo); $owwcaiyoucwcwmmq = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\x70\x74\x5f\164\x65\x72\x6d\x5f\x70\x75\x72\147\145\137\x75\162\x6c\x73"), $owwcaiyoucwcwmmq, $iwewcwusemqaiggk); $this->wckuqskowgoaoqom($owwcaiyoucwcwmmq); $this->ciyymuaoqiqmucei($swaukaagekiououo); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\160\164\x5f\x61\146\164\x65\x72\x5f\x63\154\145\141\x6e\x5f\164\x65\x72\155"), $iwewcwusemqaiggk, $owwcaiyoucwcwmmq, $swaukaagekiououo); } public function eyayuwiqsqsmkamc(?string $eeamcawaiqocomwy, ?string $wksoawcgagcgoask) { return _get_component_from_parsed_url_array(ManipulateFormat::gooqqcmsyseiaikc($eeamcawaiqocomwy), $wksoawcgagcgoask); } }
