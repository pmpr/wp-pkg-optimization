<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c6e9e36d31a             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\Manipulate\ManipulateAjax; use Pmpr\Common\Foundation\Manipulate\ManipulateFile; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePage; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateMenu; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use Pmpr\Package\Optimization\API\Manager; use Pmpr\Package\Optimization\Asset\Asset; use Pmpr\Package\Optimization\Buffer\Config; use Pmpr\Package\Optimization\Buffer\Test; use Pmpr\Package\Optimization\Bypass\Bypass; use Pmpr\Package\Optimization\Cloudflare\Cloudflare; use Pmpr\Package\Optimization\Manipulate\Manipulate; use Pmpr\Package\Optimization\Manipulate\ManipulateFormat; use Pmpr\Package\Optimization\Manipulate\ManipulateI18N; use Pmpr\Package\Optimization\Origin\Origin; use Pmpr\Package\Optimization\Page\Page; use Pmpr\Package\Optimization\Page\Model as PageModel; use Pmpr\Package\Optimization\Preloader\Preloader; use Pmpr\Package\Optimization\Purge\Purge; use WP_Post_Type; class Optimization extends Container { public function __construct() { $this->gkieogwukagigisy(__DIR__); if (!$this->gmiyqqaekqcsoime()) { goto gmsyoscesymiwwue; } parent::__construct(); $this->cyowaaeywssoooeo(); gmsyoscesymiwwue: } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x61\x64\155\x69\x6e\x5f\151\x6e\x69\x74", [$this, "\x79\x65\171\x69\147\165\171\x65\x67\x6d\x6d\x79\165\163\145\141"])->qcsmikeggeemccuu("\141\x64\x6d\x69\x6e\137\x6d\x65\x6e\165", [$this, "\145\x75\x71\147\167\151\163\143\x77\147\161\x6b\x71\x6b\x65\143"])->qcsmikeggeemccuu("\x74\145\x6d\x70\x6c\141\164\x65\137\x72\x65\x64\x69\162\145\143\164", [$this, "\x67\x69\167\171\x73\x6b\x77\x77\x6d\143\151\145\165\141\x63\161"])->qcsmikeggeemccuu("\x61\x66\164\145\x72\137\x73\x65\164\165\x70\137\x74\x68\x65\155\x65", [$this, "\151\x65\155\x61\x61\x6b\x67\161\x67\161\157\163\x69\145\143\x6d"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\157\x70\164\137\162\x65\156\144\145\162\x5f\163\164\x61\x74\151\x73\x74\151\143\163"), [$this, "\x73\x79\x61\x71\x77\157\161\x67\x73\x71\x61\x61\x71\x63\145\147"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\x66\157\162\155\x5f\x6d\141\153\x65\162\137\142\x65\x66\157\162\145\x5f\164\x61\x62\x73"), [$this, "\x61\x67\x79\171\x73\171\x77\x71\145\x6f\x6f\151\x6f\155\171\141"]); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\157\x70\164\137\147\145\164\137\163\x74\141\164\151\163\164\151\143\x73\x5f\x68\164\x6d\154"), [$this, "\x69\x69\157\x6d\x61\147\155\163\153\167\x69\141\x77\x67\171\157"], 10, 2); } public function agyysywqeooiomya() { if (!$this->kmuweyayaqoeqiyw()->eaiyegoagkgeowae()) { goto eiicmcasqikiyasw; } $this->syaqwoqgsqaaqceg(); eiicmcasqikiyasw: } protected function uyeaqmeewagakagw() : array { $uymyaeeowcuoksgm = 0; $gyiuucqgwckqiiqe = Manipulate::maykkqauyaoqmqeu(self::ckmqoekmugkggeym); foreach ($gyiuucqgwckqiiqe as $ymqmyyeuycgmigyo => $sqeykgyoooqysmca) { if (!$sqeykgyoooqysmca instanceof WP_Post_Type) { goto swesqeqmagkicuws; } $gaeqamemwmwsyukm = ManipulatePost::wsqeykgqiemswysa($ymqmyyeuycgmigyo); $uymyaeeowcuoksgm += $gaeqamemwmwsyukm; $ygqyiqguoomyooyq = ManipulatePage::eokiwumgqmymgyoa(); if (!($ymqmyyeuycgmigyo !== self::imywcsggckkcywgk || (!$ygqyiqguoomyooyq || $ymqmyyeuycgmigyo !== self::mswoacegomcucaik))) { goto wsqeiwkgoiekwasy; } $uymyaeeowcuoksgm++; wsqeiwkgoiekwasy: swesqeqmagkicuws: smmagoyuqoigoesc: } ayucsuwsiocgycww: $iuekmkswcsacoawq = PageModel::symcgieuakksimmu(); return ["\141\154\x6c" => [self::ciyoccqkiamemcmm => $uymyaeeowcuoksgm, self::qescuiwgsyuikume => __("\x53\151\x74\145\40\x50\141\x67\145\x73", PR__PKG__OPTIMIZATION), self::qgqyauaqwqmqseim => IconFontawesomeInterface::kekeuuqqukocoyes], "\x62\x75\x64\147\145\x74" => [self::ciyoccqkiamemcmm => $this->eiykqgmgyuowgeog(), self::qescuiwgsyuikume => __("\x41\x6c\x6c\40\x59\157\x75\x72\x20\102\165\144\147\x65\164", PR__PKG__OPTIMIZATION), self::qgqyauaqwqmqseim => IconFontawesomeInterface::kekeuuqqukocoyes], "\x75\163\x65\144" => [self::ciyoccqkiamemcmm => $iuekmkswcsacoawq->ggcikeumgqoockyo(), self::qescuiwgsyuikume => __("\x55\x73\145\x64\x20\102\x75\x64\x67\x65\x74", PR__PKG__OPTIMIZATION), self::qgqyauaqwqmqseim => IconFontawesomeInterface::kekeuuqqukocoyes], "\x72\145\155\x61\151\x6e" => [self::ciyoccqkiamemcmm => $iuekmkswcsacoawq->ewcikckouwmuqkms(), self::qescuiwgsyuikume => __("\122\x65\155\141\x69\156\151\156\147\x20\x42\x75\144\x67\x65\164", PR__PKG__OPTIMIZATION), self::qgqyauaqwqmqseim => IconFontawesomeInterface::kekeuuqqukocoyes]]; } public function iiomagmskwiawgyo($nsmgceoqaqogqmuw, $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, [self::qwumqqyuasyskkkc => $this->uyeaqmeewagakagw(), "\142\165\x74\164\x6f\x6e\x73" => ["\165\160\144\141\164\x65" => [self::ELEMENT => "\x61", self::qescuiwgsyuikume => __("\125\x70\x64\141\164\x65\x20\116\165\x6d\x62\x65\x72\163", PR__PKG__OPTIMIZATION), self::ysskgssgwuwmqwym => ["\143\x6c\x61\x73\x73" => "\142\164\156\40\142\x74\x6e\55\x73\x65\x63\157\156\144\141\x72\171\40\165\x70\144\141\x74\x65\x2d\x62\x75\x64\x67\145\164\40\155\142\x2d\x32", "\150\162\x65\x66" => "\x23"]], "\x62\165\x79" => [self::ELEMENT => "\141", self::qescuiwgsyuikume => __("\111\x6e\143\x72\145\141\163\145\x20\102\x75\144\x67\145\164", PR__PKG__OPTIMIZATION), self::ysskgssgwuwmqwym => ["\143\x6c\141\x73\x73" => "\142\x74\x6e\x20\x62\164\x6e\55\x70\162\x69\x6d\x61\162\171", "\150\162\x65\x66" => self::couwksyewgyeooqe()->giiuwsmyumqwwiyq(self::sauwwsocmukoaayu), "\164\141\x72\147\145\164" => "\x5f\x62\154\x61\156\153"]]], "\154\145\x76\x65\154\x5f\155\x65\x73\163\141\x67\145" => ManipulateHTML::oockkqiqsssakuug(sprintf(__("\45\163\x20\x6f\x70\x74\x69\155\x69\172\x61\164\x69\157\156\40\141\x70\x70\x6c\171\40\x61\x75\x74\157\x6d\141\164\x69\143\x61\154\154\171\x20\164\x6f\40\141\154\154\40\x70\x61\x67\145\x73\x20\167\x69\x74\150\157\x75\164\x20\x74\150\x65\40\156\x65\145\144\x20\146\x6f\162\x20\141\40\142\x75\144\x67\x65\x74\x2e", PR__PKG__OPTIMIZATION), ManipulateHTML::ciuuiyckmsygceis(__("\x4c\x65\166\x65\154\40\x31", PR__PKG__OPTIMIZATION))), self::smkwuwawwaqyimcq, [], false, true)]); return $this->iuygowkemiiwqmiw("\x73\x74\x61\x74\x69\x73\x74\x69\143", $ywmkwiwkosakssii); } public function syaqwoqgsqaaqceg($ywmkwiwkosakssii = []) { echo $this->iiomagmskwiawgyo('', $ywmkwiwkosakssii); } public function cyowaaeywssoooeo() : bool { $ksaameoqigiaoigg = false; if ($skacuygeqykiwiwy = Manipulate::cmaecekuqkwmemms("\x50\x52\x5f\x5f\103\101\103\x48\x45\x5f\137\120\101\124\x48")) { goto cwyaysecsakaqgew; } Notice::ymqcyaqqcyuicwqu("\x6f\x70\x74\x69\155\x69\172\x61\x74\151\x6f\x6e\x2d\x63\157\156\x66\151\147\x2d\x70\x61\164\150", __("\117\x70\164\x69\x6d\151\172\141\x74\151\157\156\40\x43\157\156\146\151\x67\40\x50\x61\x74\x68", PR__PKG__OPTIMIZATION), $skacuygeqykiwiwy); goto kgqgcggccmiwayua; cwyaysecsakaqgew: $ksaameoqigiaoigg = ManipulateFile::koymmiyegyskqgck(self::muqmwceaiwwakwws, "{$skacuygeqykiwiwy}\57\143\157\x6e\x66\x69\x67"); kgqgcggccmiwayua: return $ksaameoqigiaoigg; } public function yeyiguyegmmyusea() { if (ManipulateAjax::mcgoysmkqsqooceq()) { goto mcmcocyuugueaeww; } $this->qayieuscsskiqacs(); $eygsasmqycagyayw = $this->miocmcoykayoyyau(); $eygsasmqycagyayw->ayeieigcckcmsikq($eygsasmqycagyayw->owygwqwawqoiusis("\x61\144\x6d\x69\156", $eygsasmqycagyayw->get("\141\144\155\151\156\x2e\152\x73"))->ayuciigykaswwqeo("\x6a\x71\165\145\x72\171"))->ayeieigcckcmsikq($eygsasmqycagyayw->awgyqswkqywwmkye("\x61\x64\x6d\x69\156", $eygsasmqycagyayw->get("\x61\144\155\x69\156\56\x63\x73\x73"))); $usmiuwiumyygmucg = DecoratorOption::get(self::gwccmwywmiccammg); if ($usmiuwiumyygmucg) { goto rgaagksgsewuwgmo; } $usmiuwiumyygmucg = Manager::symcgieuakksimmu()->mksgiocmqcaikoem(); if (!(!is_wp_error($usmiuwiumyygmucg) && is_array($usmiuwiumyygmucg) && $usmiuwiumyygmucg)) { goto kwayumouacgkgyas; } DecoratorOption::update(self::gwccmwywmiccammg, $usmiuwiumyygmucg); kwayumouacgkgyas: rgaagksgsewuwgmo: mcmcocyuugueaeww: } public function iemaakgqgqosiecm() { Page::symcgieuakksimmu(); Asset::symcgieuakksimmu(); Purge::symcgieuakksimmu(); Bypass::symcgieuakksimmu(); Origin::symcgieuakksimmu(); Preloader::symcgieuakksimmu(); Cloudflare::symcgieuakksimmu(); } public function euqgwiscwgqkqkec() { ManipulateMenu::aemwscceysomkuea(["\160\141\147\145\x5f\x74\x69\164\x6c\x65" => __("\x4f\x70\x74\x69\155\x69\172\x61\x74\151\157\x6e", PR__PKG__OPTIMIZATION), "\155\x65\x6e\x75\137\x73\154\165\147" => $this->akuociswqmoigkas(), "\x70\157\163\x69\164\151\x6f\156" => 1]); } public function giwyskwwmcieuacq() { $uiewakwqscemywuo = new Config(["\160\x61\x74\150" => Manipulate::cmaecekuqkwmemms(self::muqmwceaiwwakwws)]); new Buffer(new Test($uiewakwqscemywuo, ["\154\x6f\147\x67\145\x72" => $this->ygaescewwyaseaoy()])); } public function ymioscmsquoqmasi() : array { $ucasskoyoewwmmii = []; $auwuoyyagaiegwae = [ManipulateI18N::auksikwsewaywikq()]; $kymsmcekmemqmews = ManipulateI18N::yeaukamowmkwaowi(); if (!$kymsmcekmemqmews) { goto eucakkcoiiwkwsme; } $auwuoyyagaiegwae = $kymsmcekmemqmews; eucakkcoiiwkwsme: foreach ($auwuoyyagaiegwae as $eeamcawaiqocomwy) { $yckucuyiaykemqea = Manipulate::cmaecekuqkwmemms(self::muqmwceaiwwakwws); $qogsmwakwacwqogk = ManipulateFormat::gooqqcmsyseiaikc($eeamcawaiqocomwy); if (!$yckucuyiaykemqea) { goto kygccamgawookukq; } $mkomwsiykqigmqca = ManipulateArray::get($qogsmwakwacwqogk, "\160\141\x74\x68"); $qogsmwakwacwqogk["\x70\141\x74\150"] = $mkomwsiykqigmqca ? str_replace("\57", "\56", untrailingslashit($mkomwsiykqigmqca)) : ''; $ymqmyyeuycgmigyo = strtolower($qogsmwakwacwqogk["\x68\157\163\164"]) . $qogsmwakwacwqogk["\x70\141\x74\x68"] . "\56\x70\150\x70"; $ucasskoyoewwmmii[$ymqmyyeuycgmigyo] = $yckucuyiaykemqea; kygccamgawookukq: agsuaimomgsoyiem: } iwsaaiggkciigsmc: return $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\160\x74\x5f\x63\x6f\156\x66\151\x67\x75\x72\x61\x74\151\x6f\x6e\137\146\151\x6c\x65\x73\x5f\160\x61\164\150"), $ucasskoyoewwmmii); } public function qayieuscsskiqacs() { $ucasskoyoewwmmii = $this->ymioscmsquoqmasi(); if (!(is_array($ucasskoyoewwmmii) && $ucasskoyoewwmmii)) { goto ocwouquuwsaqakae; } $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk => $mkomwsiykqigmqca) { if ($iiaumsgauuyeqksw->exists(trailingslashit($mkomwsiykqigmqca) . $qogsmwakwacwqogk)) { goto swuggqyiaiqywgge; } $oyuikeusicgqgwak = $this->weqsyyuyccsemacu($qogsmwakwacwqogk); if ($iiaumsgauuyeqksw->mkdir($mkomwsiykqigmqca) && $iiaumsgauuyeqksw->coeoweawgagkycwe($mkomwsiykqigmqca)) { goto tagquiiokseckkqs; } Notice::ymqcyaqqcyuicwqu("\157\160\164\x69\155\x69\172\x61\164\x69\157\156\x2d\x63\157\x6e\x66\151\147", $mkomwsiykqigmqca); goto qoacckkkwsqkokye; tagquiiokseckkqs: foreach ($oyuikeusicgqgwak as $uusmaiomayssaecw => $uiewakwqscemywuo) { if (!is_string($uiewakwqscemywuo)) { goto qwiyicoywcekgyce; } $oyuikeusicgqgwak[$uusmaiomayssaecw] = ManipulateString::amkcmaguoecyiscg($uiewakwqscemywuo); qwiyicoywcekgyce: gkeymcqqsewayscs: } ooooceiweeackgie: $ewgwqamkygiqaawc = $this->iuygowkemiiwqmiw("\143\157\156\x66\151\147\56\x70\x68\160", ["\x63\x6f\156\x66\x69\x67\163" => $oyuikeusicgqgwak]); $ewgwqamkygiqaawc = preg_replace("\x40\141\x72\x72\141\x79\x5c\x73\x2b\134\x28\x40\151", "\141\x72\x72\141\171\50", $ewgwqamkygiqaawc); $ewgwqamkygiqaawc = preg_replace("\x40\x61\162\162\141\171\134\x28\134\163\x2b\x5c\x29\x40\151", "\141\x72\x72\141\x79\50\51", $ewgwqamkygiqaawc); $iiaumsgauuyeqksw->cmsiuoqwaiwceuqq($mkomwsiykqigmqca, $qogsmwakwacwqogk, $ewgwqamkygiqaawc); Notice::info(sprintf(__("\x4f\x70\164\151\155\151\172\141\x74\151\157\x6e\x20\x63\x6f\156\x66\151\x67\x20\146\x69\154\145\40\x25\163\x20\x67\145\x6e\145\162\141\x74\x65\144\x20\151\x6e\40\45\x73", PR__PKG__OPTIMIZATION), "\74\143\157\x64\x65\x3e{$qogsmwakwacwqogk}\x3c\57\143\x6f\x64\x65\x3e", "\74\x63\157\x64\x65\x3e{$mkomwsiykqigmqca}\74\x2f\x63\x6f\x64\x65\76"), "\x6f\160\164\x69\155\151\x7a\141\x74\151\x6f\156\55\143\x6f\x6e\x66\151\x67"); qoacckkkwsqkokye: swuggqyiaiqywgge: kuaiscyqkgcouiye: } qysmyemoucigsmua: ocwouquuwsaqakae: } public function weqsyyuyccsemacu($qogsmwakwacwqogk) : array { $oyuikeusicgqgwak = ["\144\x65\142\165\x67\137\x6d\x6f\x64\x65" => $this->weysguygiseoukqw(Setting::cmgikuaeswggsasy, false), "\143\157\x6f\x6b\151\145\x5f\x68\x61\163\x68" => Manipulate::cmaecekuqkwmemms("\103\x4f\x4f\113\111\105\x48\101\123\x48"), "\x72\x65\x6a\x65\143\x74\x5f\143\157\157\153\x69\145\x73" => $this->mukwwwucwusmmqau(), "\154\x6f\x67\x67\x65\144\x5f\151\x6e\137\143\x6f\x6f\x6b\151\145" => Manipulate::cmaecekuqkwmemms("\x4c\x4f\x47\107\x45\104\137\111\x4e\137\x4b\x45\131")]; return $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\160\x74\137\x63\x6f\156\x66\151\147\x75\x72\x61\164\151\157\x6e\163"), $oyuikeusicgqgwak, $qogsmwakwacwqogk); } public function mukwwwucwusmmqau() : string { $guqkkoqomcqgkkgm = explode(COOKIEHASH, LOGGED_IN_COOKIE); $guqkkoqomcqgkkgm = array_map("\160\x72\x65\147\137\161\165\157\x74\145", $guqkkoqomcqgkkgm); $guqkkoqomcqgkkgm = implode("\56\53", $guqkkoqomcqgkkgm); $osqkgokmuiasuukg[] = $guqkkoqomcqgkkgm; $osqkgokmuiasuukg[] = "\167\160\55\160\x6f\x73\x74\x70\x61\163\x73\x5f"; $osqkgokmuiasuukg[] = "\x77\x70\164\157\165\143\150\137\x73\x77\151\164\143\x68\137\x74\157\x67\147\154\145"; $osqkgokmuiasuukg[] = "\x63\157\x6d\x6d\145\156\x74\x5f\141\165\164\150\157\162\x5f"; $osqkgokmuiasuukg[] = "\x63\x6f\x6d\x6d\x65\x6e\x74\x5f\x61\x75\164\150\x6f\x72\137\145\155\141\x69\154\x5f"; $osqkgokmuiasuukg = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\x70\x74\x5f\162\x65\x6a\x65\143\164\137\x63\x6f\157\x6b\151\145\x73"), $osqkgokmuiasuukg); $osqkgokmuiasuukg = array_filter($osqkgokmuiasuukg); $osqkgokmuiasuukg = array_flip(array_flip($osqkgokmuiasuukg)); return implode("\x7c", $osqkgokmuiasuukg); } }
