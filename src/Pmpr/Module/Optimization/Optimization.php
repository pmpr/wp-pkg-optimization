<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63ffbf6dd4c36             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\Manipulate\ManipulateFile; use Pmpr\Common\Foundation\Manipulate\ManipulateQuery; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString; use Pmpr\Module\Optimization\Asset\Asset; use Pmpr\Module\Optimization\Buffer\Config; use Pmpr\Module\Optimization\Buffer\Test; use Pmpr\Module\Optimization\Bypass\Bypass; use Pmpr\Module\Optimization\Cloudflare\Cloudflare; use Pmpr\Module\Optimization\Extension\Extension; use Pmpr\Module\Optimization\Manipulate\Manipulate; use Pmpr\Module\Optimization\Manipulate\ManipulateFormat; use Pmpr\Module\Optimization\Manipulate\ManipulateI18N; use Pmpr\Module\Optimization\Origin\Origin; use Pmpr\Module\Optimization\Page\Page; use Pmpr\Module\Optimization\Preloader\Preloader; use Pmpr\Module\Optimization\PreOpt\PreOpt; use Pmpr\Module\Optimization\Purge\Purge; class Optimization extends Container { public function __construct() { $this->gkieogwukagigisy(__DIR__, [self::qescuiwgsyuikume => static function () { return __("\x4f\x70\164\x69\155\151\172\x61\x74\x69\x6f\156", PR__MDL__OPTIMIZATION); }])->eokmosoqmeiakwki(function () { $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\160\164\137\x65\156\141\142\x6c\x65\x64")); })->gwcqooogwwkcamag(function () { $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\160\164\x5f\144\151\163\141\142\x6c\145\144"))->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\160\164\137\x70\165\162\x67\x65\x5f\x63\x61\x63\150\145")); }); if (!$this->gmiyqqaekqcsoime()) { goto cqwgmwqiakmgyuee; } parent::__construct(); $this->cyowaaeywssoooeo(); cqwgmwqiakmgyuee: } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\141\144\x6d\x69\156\x5f\x69\156\151\x74", [$this, "\x79\145\171\151\x67\165\171\145\147\x6d\155\x79\x75\163\x65\x61"])->qcsmikeggeemccuu("\160\x6c\x75\147\151\156\x73\137\x6c\157\141\x64\145\144", [$this, "\x69\x65\x6d\141\x61\x6b\147\161\x67\x71\157\x73\x69\x65\143\155"])->qcsmikeggeemccuu("\164\145\155\160\154\141\x74\x65\137\162\x65\x64\151\x72\145\143\164", [$this, "\147\x69\167\x79\163\x6b\x77\167\x6d\143\x69\145\165\141\x63\x71"], 9999); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\141\x6c\x6c\x6f\x77\137\x74\157\x5f\141\144\x64\137\x62\x61\143\153\154\151\x6e\x6b"), [$this, "\163\x65\x69\x61\x69\157\153\x75\163\x67\171\x73\155\x73\x79\x71"]); } public function iemaakgqgqosiecm() { Page::symcgieuakksimmu(); Asset::symcgieuakksimmu(); Purge::symcgieuakksimmu(); Bypass::symcgieuakksimmu(); Origin::symcgieuakksimmu(); PreOpt::symcgieuakksimmu(); Preloader::symcgieuakksimmu(); Extension::symcgieuakksimmu(); Cloudflare::symcgieuakksimmu(); } public function cyowaaeywssoooeo() : bool { $ksaameoqigiaoigg = false; if ($skacuygeqykiwiwy = Manipulate::cmaecekuqkwmemms("\120\x52\x5f\x5f\x43\x41\x43\110\105\x5f\137\x50\101\124\110")) { goto ksgwgcguemcescqg; } $this->syiuacooagmooima("\143\157\156\146\151\x67\x2d\x70\x61\x74\x68", __("\103\157\156\x66\151\x67\40\x50\141\164\150", PR__MDL__OPTIMIZATION), $skacuygeqykiwiwy); goto kiwiesucugwoiuum; ksgwgcguemcescqg: $ksaameoqigiaoigg = ManipulateFile::koymmiyegyskqgck(self::muqmwceaiwwakwws, "{$skacuygeqykiwiwy}\57\x63\157\x6e\x66\151\x67"); kiwiesucugwoiuum: return $ksaameoqigiaoigg; } public function yeyiguyegmmyusea() { if (!ManipulateQuery::euqowsuwmgokuqqo()) { goto cmagycousakeeaei; } $this->qayieuscsskiqacs(); $eygsasmqycagyayw = $this->miocmcoykayoyyau(); $eygsasmqycagyayw->ayeieigcckcmsikq($eygsasmqycagyayw->owygwqwawqoiusis("\x61\x64\155\151\156", $eygsasmqycagyayw->get("\141\x64\x6d\151\x6e\56\152\163"))->simswskycwagoeqy())->ayeieigcckcmsikq($eygsasmqycagyayw->awgyqswkqywwmkye("\141\144\155\x69\x6e", $eygsasmqycagyayw->get("\x61\x64\155\x69\156\x2e\143\163\x73"))); cmagycousakeeaei: } public function seiaiokusgysmsyq($cuakwceieagskoaa) { if (!($cuakwceieagskoaa && $this->eiykqgmgyuowgeog() > 0)) { goto eekeksysqeuoskoo; } $cuakwceieagskoaa = false; eekeksysqeuoskoo: return $cuakwceieagskoaa; } public function giwyskwwmcieuacq() { $uiewakwqscemywuo = new Config(["\160\x61\x74\150" => Manipulate::cmaecekuqkwmemms(self::muqmwceaiwwakwws)]); new Buffer(new Test($uiewakwqscemywuo, ["\154\x6f\x67\x67\145\162" => $this->ygaescewwyaseaoy()])); } public function ymioscmsquoqmasi() : array { $ucasskoyoewwmmii = []; $auwuoyyagaiegwae = [ManipulateI18N::auksikwsewaywikq()]; $kymsmcekmemqmews = ManipulateI18N::yeaukamowmkwaowi(); if (!$kymsmcekmemqmews) { goto okemsmmeceoeaswi; } $auwuoyyagaiegwae = $kymsmcekmemqmews; okemsmmeceoeaswi: foreach ($auwuoyyagaiegwae as $eeamcawaiqocomwy) { $yckucuyiaykemqea = Manipulate::cmaecekuqkwmemms(self::muqmwceaiwwakwws); $qogsmwakwacwqogk = ManipulateFormat::gooqqcmsyseiaikc($eeamcawaiqocomwy); if (!$yckucuyiaykemqea) { goto egosmwkuuikwqeak; } $mkomwsiykqigmqca = ManipulateArray::get($qogsmwakwacwqogk, "\x70\x61\x74\150"); $qogsmwakwacwqogk["\x70\141\x74\x68"] = $mkomwsiykqigmqca ? str_replace("\57", "\56", untrailingslashit($mkomwsiykqigmqca)) : ''; $ymqmyyeuycgmigyo = strtolower($qogsmwakwacwqogk["\150\157\x73\x74"]) . $qogsmwakwacwqogk["\160\x61\x74\x68"] . "\x2e\x70\x68\x70"; $ucasskoyoewwmmii[$ymqmyyeuycgmigyo] = $yckucuyiaykemqea; egosmwkuuikwqeak: ggkoiouwecyiosym: } ossyqogewmggmaoc: return $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\160\164\x5f\x63\x6f\x6e\146\151\x67\165\162\141\x74\151\x6f\x6e\x5f\x66\151\154\x65\x73\x5f\160\x61\164\150"), $ucasskoyoewwmmii); } public function qayieuscsskiqacs() { if (!(($ucasskoyoewwmmii = $this->ymioscmsquoqmasi()) && ($iiaumsgauuyeqksw = $this->kcciqwskewsuaemk()))) { goto qggiogeyowcoaiqy; } foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk => $mkomwsiykqigmqca) { if ($iiaumsgauuyeqksw->exists(trailingslashit($mkomwsiykqigmqca) . $qogsmwakwacwqogk)) { goto usgmimcwygsmcioa; } $oyuikeusicgqgwak = $this->weqsyyuyccsemacu($qogsmwakwacwqogk); if ($iiaumsgauuyeqksw->mkdir($mkomwsiykqigmqca) && $iiaumsgauuyeqksw->coeoweawgagkycwe($mkomwsiykqigmqca)) { goto euogcyyayioyyiyg; } $this->syiuacooagmooima("\143\157\x6e\x66\151\147", __("\x43\157\156\x66\x69\147\165\162\141\x74\x69\x6f\156", PR__MDL__OPTIMIZATION), $mkomwsiykqigmqca); goto wkcwuemioaiyouek; euogcyyayioyyiyg: foreach ($oyuikeusicgqgwak as $uusmaiomayssaecw => $uiewakwqscemywuo) { if (!is_string($uiewakwqscemywuo)) { goto uiwswesymogiwsgg; } $oyuikeusicgqgwak[$uusmaiomayssaecw] = ManipulateString::amkcmaguoecyiscg($uiewakwqscemywuo, false); uiwswesymogiwsgg: ekgsawcuswowmosm: } keqagmaiqqsgkmso: $ewgwqamkygiqaawc = $this->iuygowkemiiwqmiw("\143\157\156\x66\151\x67\56\160\150\160", ["\x63\157\x6e\146\151\147\x73" => $oyuikeusicgqgwak]); $ewgwqamkygiqaawc = preg_replace("\100\x61\162\162\141\171\x5c\x73\53\134\50\x40\151", "\141\x72\x72\x61\171\50", $ewgwqamkygiqaawc); $ewgwqamkygiqaawc = preg_replace("\x40\141\x72\x72\141\x79\x5c\50\x5c\x73\x2b\134\51\100\x69", "\x61\x72\162\141\171\x28\51", $ewgwqamkygiqaawc); $iiaumsgauuyeqksw->cmsiuoqwaiwceuqq($mkomwsiykqigmqca, $qogsmwakwacwqogk, $ewgwqamkygiqaawc); $this->cimaucgayqyyccoc(sprintf(__("\117\160\x74\151\155\151\172\x61\x74\151\157\156\x20\143\157\156\146\x69\x67\x20\146\151\x6c\145\x20\x25\x73\x20\147\x65\156\145\x72\x61\x74\145\144\x20\151\x6e\x20\45\x73", PR__MDL__OPTIMIZATION), "\x3c\143\x6f\144\x65\76{$qogsmwakwacwqogk}\74\x2f\143\x6f\144\x65\76", "\x3c\143\x6f\144\145\76{$mkomwsiykqigmqca}\x3c\57\143\157\144\x65\x3e"), "\x6f\160\x74\x69\x6d\x69\x7a\141\164\x69\157\x6e\x2d\143\157\x6e\x66\151\147", self::smkwuwawwaqyimcq); wkcwuemioaiyouek: usgmimcwygsmcioa: eymiqwsygoowowuu: } eosmwawqaocwgccq: qggiogeyowcoaiqy: } public function weqsyyuyccsemacu($qogsmwakwacwqogk) : array { $oyuikeusicgqgwak = ["\144\145\142\x75\147\x5f\155\x6f\144\x65" => $this->weysguygiseoukqw(Setting::cmgikuaeswggsasy, false), "\143\x6f\157\153\x69\145\x5f\x68\141\x73\150" => Manipulate::cmaecekuqkwmemms("\103\x4f\117\113\x49\105\110\101\123\110"), "\162\145\x6a\x65\x63\x74\137\143\x6f\x6f\x6b\151\145\x73" => $this->mukwwwucwusmmqau(), "\154\157\x67\147\145\x64\137\x69\x6e\137\143\157\x6f\153\151\x65" => Manipulate::cmaecekuqkwmemms("\x4c\x4f\107\107\x45\x44\x5f\x49\x4e\x5f\113\x45\131")]; return $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\160\164\137\143\x6f\x6e\x66\151\147\165\x72\141\x74\x69\x6f\156\163"), $oyuikeusicgqgwak, $qogsmwakwacwqogk); } public function mukwwwucwusmmqau() : string { $guqkkoqomcqgkkgm = explode(COOKIEHASH, LOGGED_IN_COOKIE); $guqkkoqomcqgkkgm = array_map("\160\x72\145\147\137\x71\x75\157\164\x65", $guqkkoqomcqgkkgm); $guqkkoqomcqgkkgm = implode("\x2e\53", $guqkkoqomcqgkkgm); $osqkgokmuiasuukg[] = $guqkkoqomcqgkkgm; $osqkgokmuiasuukg[] = "\x77\x70\55\x70\x6f\x73\x74\x70\141\163\x73\x5f"; $osqkgokmuiasuukg[] = "\x77\160\x74\x6f\165\143\150\x5f\x73\x77\151\x74\x63\150\x5f\164\157\147\x67\x6c\145"; $osqkgokmuiasuukg[] = "\x63\x6f\x6d\155\x65\x6e\x74\x5f\x61\165\164\150\157\162\x5f"; $osqkgokmuiasuukg[] = "\x63\157\x6d\155\145\156\x74\137\141\x75\x74\x68\157\x72\x5f\x65\155\141\x69\x6c\137"; $osqkgokmuiasuukg = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\x70\164\137\x72\145\x6a\x65\143\164\x5f\143\x6f\157\153\x69\x65\163"), $osqkgokmuiasuukg); $osqkgokmuiasuukg = array_filter($osqkgokmuiasuukg); $osqkgokmuiasuukg = array_flip(array_flip($osqkgokmuiasuukg)); return implode("\x7c", $osqkgokmuiasuukg); } }
