<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62400e586ca94             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\Manipulate\ManipulateAjax; use Pmpr\Common\Foundation\Manipulate\ManipulateFile; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePage; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateMenu; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use Pmpr\Module\Optimization\Asset\Asset; use Pmpr\Module\Optimization\Buffer\Config; use Pmpr\Module\Optimization\Buffer\Test; use Pmpr\Module\Optimization\Bypass\Bypass; use Pmpr\Module\Optimization\Cloudflare\Cloudflare; use Pmpr\Module\Optimization\Manipulate\Manipulate; use Pmpr\Module\Optimization\Manipulate\ManipulateFormat; use Pmpr\Module\Optimization\Manipulate\ManipulateI18N; use Pmpr\Module\Optimization\Origin\Origin; use Pmpr\Module\Optimization\Page\Page; use Pmpr\Module\Optimization\Page\Model as PageModel; use Pmpr\Module\Optimization\Preloader\Preloader; use Pmpr\Module\Optimization\Purge\Purge; use WP_Post_Type; class Optimization extends Container { public function __construct() { $this->gkieogwukagigisy(__DIR__); if (!$this->gmiyqqaekqcsoime()) { goto koggssokukoukkay; } parent::__construct(); $this->cyowaaeywssoooeo(); koggssokukoukkay: } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\141\144\x6d\x69\156\x5f\151\x6e\x69\x74", [$this, "\x79\x65\x79\151\x67\165\171\x65\x67\x6d\155\x79\165\163\145\141"])->qcsmikeggeemccuu("\141\144\155\151\156\137\x6d\145\156\x75", [$this, "\145\165\x71\x67\167\151\x73\143\167\x67\x71\x6b\161\x6b\x65\143"])->qcsmikeggeemccuu("\164\x65\x6d\160\154\141\x74\145\137\162\x65\144\151\162\145\x63\164", [$this, "\x67\x69\167\171\x73\x6b\167\x77\x6d\x63\x69\145\x75\x61\143\x71"])->qcsmikeggeemccuu("\141\x66\x74\x65\162\x5f\x73\x65\x74\x75\x70\x5f\164\x68\145\155\145", [$this, "\151\145\x6d\141\141\153\147\x71\147\161\x6f\x73\x69\145\143\155"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\157\x70\x74\137\x72\x65\156\144\145\x72\x5f\x73\x74\x61\x74\151\x73\164\x69\x63\x73"), [$this, "\163\x79\x61\161\x77\x6f\x71\147\163\x71\x61\x61\161\143\x65\x67"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\146\157\162\155\137\x6d\141\x6b\145\162\137\x62\145\x66\x6f\x72\x65\x5f\164\x61\x62\163"), [$this, "\141\147\171\x79\x73\171\167\161\145\157\x6f\151\x6f\x6d\x79\x61"]); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x6f\x70\x74\x5f\x67\x65\164\x5f\x73\x74\141\164\151\x73\164\x69\x63\163\x5f\x68\x74\x6d\x6c"), [$this, "\x69\x69\x6f\x6d\x61\147\x6d\163\x6b\167\151\141\167\147\x79\x6f"], 10, 2); } public function iemaakgqgqosiecm() { Page::symcgieuakksimmu(); Asset::symcgieuakksimmu(); Purge::symcgieuakksimmu(); Bypass::symcgieuakksimmu(); Origin::symcgieuakksimmu(); Preloader::symcgieuakksimmu(); Cloudflare::symcgieuakksimmu(); } public function agyysywqeooiomya() { if (!$this->kmuweyayaqoeqiyw()->eaiyegoagkgeowae()) { goto ueaiskyiqcquiika; } $this->syaqwoqgsqaaqceg(); ueaiskyiqcquiika: } protected function uyeaqmeewagakagw() : array { $uymyaeeowcuoksgm = 0; $gyiuucqgwckqiiqe = Manipulate::maykkqauyaoqmqeu(self::ckmqoekmugkggeym); foreach ($gyiuucqgwckqiiqe as $ymqmyyeuycgmigyo => $sqeykgyoooqysmca) { if (!$sqeykgyoooqysmca instanceof WP_Post_Type) { goto kaiqsuaywyuckuoo; } $gaeqamemwmwsyukm = ManipulatePost::wsqeykgqiemswysa($ymqmyyeuycgmigyo); $uymyaeeowcuoksgm += $gaeqamemwmwsyukm; $ygqyiqguoomyooyq = ManipulatePage::eokiwumgqmymgyoa(); if (!($ymqmyyeuycgmigyo !== self::imywcsggckkcywgk || (!$ygqyiqguoomyooyq || $ymqmyyeuycgmigyo !== self::mswoacegomcucaik))) { goto cqugssuesycomqwa; } $uymyaeeowcuoksgm++; cqugssuesycomqwa: kaiqsuaywyuckuoo: ucecweoaoyeoyuue: } eqemcocqsyasqycq: $iuekmkswcsacoawq = PageModel::symcgieuakksimmu(); return ["\141\x6c\154" => [self::ciyoccqkiamemcmm => $uymyaeeowcuoksgm, self::qescuiwgsyuikume => __("\123\x69\x74\145\x20\120\141\x67\145\163", PR__MOD__OPTIMIZATION), self::qgqyauaqwqmqseim => IconFontawesomeInterface::kekeuuqqukocoyes], "\x62\165\x64\x67\x65\x74" => [self::ciyoccqkiamemcmm => $this->eiykqgmgyuowgeog(), self::qescuiwgsyuikume => __("\101\154\154\x20\x59\x6f\165\162\40\102\x75\144\147\145\164", PR__MOD__OPTIMIZATION), self::qgqyauaqwqmqseim => IconFontawesomeInterface::kekeuuqqukocoyes], "\165\163\145\x64" => [self::ciyoccqkiamemcmm => $iuekmkswcsacoawq->ggcikeumgqoockyo(), self::qescuiwgsyuikume => __("\x55\163\x65\144\40\x42\165\144\x67\x65\164", PR__MOD__OPTIMIZATION), self::qgqyauaqwqmqseim => IconFontawesomeInterface::kekeuuqqukocoyes], "\162\145\155\141\151\x6e" => [self::ciyoccqkiamemcmm => $iuekmkswcsacoawq->ewcikckouwmuqkms(), self::qescuiwgsyuikume => __("\x52\x65\155\x61\151\156\151\x6e\147\x20\x42\165\144\147\x65\x74", PR__MOD__OPTIMIZATION), self::qgqyauaqwqmqseim => IconFontawesomeInterface::kekeuuqqukocoyes]]; } public function iiomagmskwiawgyo($nsmgceoqaqogqmuw, $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, [self::qwumqqyuasyskkkc => $this->uyeaqmeewagakagw(), "\142\165\x74\164\157\x6e\163" => ["\x75\160\x64\x61\x74\145" => [self::ELEMENT => "\x61", self::qescuiwgsyuikume => __("\x55\x70\144\141\164\x65\40\116\165\x6d\142\145\x72\163", PR__MOD__OPTIMIZATION), self::ysskgssgwuwmqwym => ["\143\154\141\x73\163" => "\142\x74\x6e\40\142\164\156\x2d\x73\145\143\157\156\144\141\x72\171\x20\165\x70\x64\141\164\x65\x2d\x62\165\144\147\145\164\x20\155\142\55\x32", "\150\x72\145\x66" => "\43"]], "\142\x75\x79" => [self::ELEMENT => "\x61", self::qescuiwgsyuikume => __("\111\156\143\x72\145\x61\163\x65\40\x42\165\144\147\x65\164", PR__MOD__OPTIMIZATION), self::ysskgssgwuwmqwym => ["\143\x6c\141\163\x73" => "\x62\x74\156\40\x62\x74\156\x2d\x70\162\x69\155\141\x72\171", "\150\x72\x65\x66" => self::couwksyewgyeooqe()->giiuwsmyumqwwiyq(self::sauwwsocmukoaayu), "\164\141\x72\x67\145\164" => "\x5f\142\154\x61\156\153"]]], "\x6c\x65\166\x65\x6c\137\x6d\x65\163\x73\141\x67\x65" => ManipulateHTML::oockkqiqsssakuug(sprintf(__("\45\163\x20\x6f\x70\x74\x69\155\151\x7a\141\164\151\x6f\156\x20\141\160\160\154\171\x20\x61\165\x74\x6f\x6d\x61\164\x69\143\x61\x6c\154\x79\x20\164\157\40\141\154\154\x20\160\x61\x67\x65\163\40\x77\x69\x74\x68\157\x75\x74\x20\164\150\x65\40\156\145\145\144\x20\x66\x6f\x72\40\141\x20\142\165\x64\147\x65\164\x2e", PR__MOD__OPTIMIZATION), ManipulateHTML::ciuuiyckmsygceis(__("\x4c\x65\166\145\154\40\61", PR__MOD__OPTIMIZATION))), self::smkwuwawwaqyimcq, [], false, true)]); return $this->iuygowkemiiwqmiw("\x73\164\141\x74\x69\x73\164\x69\143", $ywmkwiwkosakssii); } public function syaqwoqgsqaaqceg($ywmkwiwkosakssii = []) { echo $this->iiomagmskwiawgyo('', $ywmkwiwkosakssii); } public function cyowaaeywssoooeo() : bool { $ksaameoqigiaoigg = false; if ($skacuygeqykiwiwy = Manipulate::cmaecekuqkwmemms("\x50\x52\137\137\103\101\x43\x48\105\137\x5f\120\x41\124\x48")) { goto yuoamgkigcwaooqu; } Notice::ymqcyaqqcyuicwqu("\x6f\x70\164\x69\155\x69\x7a\x61\x74\x69\x6f\x6e\55\143\157\156\x66\151\147\x2d\x70\x61\164\150", __("\x4f\160\164\151\155\151\172\141\x74\x69\x6f\x6e\40\103\x6f\156\146\151\147\40\x50\x61\164\x68", PR__MOD__OPTIMIZATION), $skacuygeqykiwiwy); goto ymwyooosikgokiaa; yuoamgkigcwaooqu: $ksaameoqigiaoigg = ManipulateFile::koymmiyegyskqgck(self::muqmwceaiwwakwws, "{$skacuygeqykiwiwy}\x2f\143\157\x6e\x66\151\x67"); ymwyooosikgokiaa: return $ksaameoqigiaoigg; } public function yeyiguyegmmyusea() { if (ManipulateAjax::mcgoysmkqsqooceq()) { goto osqgywagokmsicqe; } $this->qayieuscsskiqacs(); $eygsasmqycagyayw = $this->miocmcoykayoyyau(); $eygsasmqycagyayw->ayeieigcckcmsikq($eygsasmqycagyayw->owygwqwawqoiusis("\141\144\x6d\151\x6e", $eygsasmqycagyayw->get("\141\x64\x6d\151\156\56\x6a\x73"))->ayuciigykaswwqeo("\152\161\165\x65\x72\171"))->ayeieigcckcmsikq($eygsasmqycagyayw->awgyqswkqywwmkye("\x61\144\x6d\151\x6e", $eygsasmqycagyayw->get("\x61\144\x6d\151\156\56\x63\x73\163"))); $usmiuwiumyygmucg = DecoratorOption::get(self::gwccmwywmiccammg); if ($usmiuwiumyygmucg) { goto qaiuogoowcoimwee; } $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\160\x74\x5f\x75\x70\144\141\164\145\137\x68\x65\162\x6f\x6b\x75\137\x61\x70\x70\163")); qaiuogoowcoimwee: osqgywagokmsicqe: } public function euqgwiscwgqkqkec() { ManipulateMenu::aemwscceysomkuea(["\x70\x61\147\x65\x5f\164\x69\164\154\x65" => __("\x4f\160\x74\151\155\x69\x7a\x61\164\151\x6f\x6e", PR__MOD__OPTIMIZATION), "\155\145\156\165\137\163\154\x75\147" => $this->akuociswqmoigkas(), "\160\x6f\163\x69\164\151\x6f\x6e" => 1]); } public function giwyskwwmcieuacq() { $uiewakwqscemywuo = new Config(["\160\x61\x74\x68" => Manipulate::cmaecekuqkwmemms(self::muqmwceaiwwakwws)]); new Buffer(new Test($uiewakwqscemywuo, ["\x6c\x6f\147\147\x65\162" => $this->ygaescewwyaseaoy()])); } public function ymioscmsquoqmasi() : array { $ucasskoyoewwmmii = []; $auwuoyyagaiegwae = [ManipulateI18N::auksikwsewaywikq()]; $kymsmcekmemqmews = ManipulateI18N::yeaukamowmkwaowi(); if (!$kymsmcekmemqmews) { goto qccmuwiwykuegoga; } $auwuoyyagaiegwae = $kymsmcekmemqmews; qccmuwiwykuegoga: foreach ($auwuoyyagaiegwae as $eeamcawaiqocomwy) { $yckucuyiaykemqea = Manipulate::cmaecekuqkwmemms(self::muqmwceaiwwakwws); $qogsmwakwacwqogk = ManipulateFormat::gooqqcmsyseiaikc($eeamcawaiqocomwy); if (!$yckucuyiaykemqea) { goto qmgueimkwqmsakis; } $mkomwsiykqigmqca = ManipulateArray::get($qogsmwakwacwqogk, "\160\x61\164\150"); $qogsmwakwacwqogk["\160\141\164\x68"] = $mkomwsiykqigmqca ? str_replace("\x2f", "\56", untrailingslashit($mkomwsiykqigmqca)) : ''; $ymqmyyeuycgmigyo = strtolower($qogsmwakwacwqogk["\150\x6f\x73\164"]) . $qogsmwakwacwqogk["\x70\141\164\x68"] . "\x2e\160\x68\x70"; $ucasskoyoewwmmii[$ymqmyyeuycgmigyo] = $yckucuyiaykemqea; qmgueimkwqmsakis: iiuuwuwcwamqegey: } csucwwqcsaymyiuk: return $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\x70\164\x5f\x63\x6f\156\146\x69\x67\x75\x72\141\164\151\157\156\x5f\x66\151\154\x65\x73\x5f\160\x61\164\x68"), $ucasskoyoewwmmii); } public function qayieuscsskiqacs() { $ucasskoyoewwmmii = $this->ymioscmsquoqmasi(); if (!(is_array($ucasskoyoewwmmii) && $ucasskoyoewwmmii)) { goto ggoimgeeuugseiwk; } $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk => $mkomwsiykqigmqca) { if ($iiaumsgauuyeqksw->exists(trailingslashit($mkomwsiykqigmqca) . $qogsmwakwacwqogk)) { goto qioswooukgoowsuc; } $oyuikeusicgqgwak = $this->weqsyyuyccsemacu($qogsmwakwacwqogk); if ($iiaumsgauuyeqksw->mkdir($mkomwsiykqigmqca) && $iiaumsgauuyeqksw->coeoweawgagkycwe($mkomwsiykqigmqca)) { goto koemwyegoqwiikom; } Notice::ymqcyaqqcyuicwqu("\157\160\164\x69\155\151\172\x61\164\x69\x6f\156\55\x63\x6f\x6e\x66\151\147", $mkomwsiykqigmqca); goto qycsooiomiugimqc; koemwyegoqwiikom: foreach ($oyuikeusicgqgwak as $uusmaiomayssaecw => $uiewakwqscemywuo) { if (!is_string($uiewakwqscemywuo)) { goto siuyaemoiiqyoggo; } $oyuikeusicgqgwak[$uusmaiomayssaecw] = ManipulateString::amkcmaguoecyiscg($uiewakwqscemywuo); siuyaemoiiqyoggo: cycwgukowsksmkyc: } kuyqusuycscumuek: $ewgwqamkygiqaawc = $this->iuygowkemiiwqmiw("\143\157\x6e\x66\x69\x67\x2e\160\x68\x70", ["\x63\157\156\146\151\x67\163" => $oyuikeusicgqgwak]); $ewgwqamkygiqaawc = preg_replace("\100\x61\x72\162\x61\171\134\163\53\134\x28\x40\151", "\141\162\162\141\171\x28", $ewgwqamkygiqaawc); $ewgwqamkygiqaawc = preg_replace("\x40\141\x72\162\141\171\134\x28\134\163\53\x5c\x29\x40\x69", "\x61\162\x72\x61\x79\50\x29", $ewgwqamkygiqaawc); $iiaumsgauuyeqksw->cmsiuoqwaiwceuqq($mkomwsiykqigmqca, $qogsmwakwacwqogk, $ewgwqamkygiqaawc); Notice::info(sprintf(__("\x4f\160\x74\x69\x6d\151\172\141\164\x69\157\156\x20\143\x6f\156\x66\x69\x67\40\146\151\154\145\40\x25\163\x20\x67\x65\x6e\145\x72\x61\164\145\x64\x20\151\156\x20\45\163", PR__MOD__OPTIMIZATION), "\74\143\x6f\x64\x65\76{$qogsmwakwacwqogk}\x3c\57\143\157\144\145\76", "\x3c\x63\157\x64\x65\76{$mkomwsiykqigmqca}\x3c\x2f\143\x6f\x64\145\x3e"), "\x6f\x70\164\x69\x6d\x69\172\x61\x74\151\157\156\55\143\x6f\156\146\x69\147"); qycsooiomiugimqc: qioswooukgoowsuc: uscissuaiyuiukea: } ooqmaweuqmcmwsuk: ggoimgeeuugseiwk: } public function weqsyyuyccsemacu($qogsmwakwacwqogk) : array { $oyuikeusicgqgwak = ["\x64\145\142\165\147\x5f\x6d\x6f\144\x65" => $this->weysguygiseoukqw(Setting::cmgikuaeswggsasy, false), "\x63\157\157\x6b\x69\x65\137\150\x61\x73\x68" => Manipulate::cmaecekuqkwmemms("\x43\117\117\113\x49\x45\110\101\x53\x48"), "\x72\145\x6a\x65\143\164\137\143\x6f\157\x6b\x69\x65\163" => $this->mukwwwucwusmmqau(), "\x6c\157\147\x67\145\x64\137\x69\x6e\137\143\x6f\157\153\x69\x65" => Manipulate::cmaecekuqkwmemms("\x4c\x4f\x47\107\105\x44\x5f\x49\116\137\x4b\x45\x59")]; return $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\160\164\x5f\143\157\x6e\146\151\x67\x75\x72\141\x74\x69\157\x6e\163"), $oyuikeusicgqgwak, $qogsmwakwacwqogk); } public function mukwwwucwusmmqau() : string { $guqkkoqomcqgkkgm = explode(COOKIEHASH, LOGGED_IN_COOKIE); $guqkkoqomcqgkkgm = array_map("\x70\x72\145\147\x5f\x71\x75\x6f\x74\145", $guqkkoqomcqgkkgm); $guqkkoqomcqgkkgm = implode("\x2e\x2b", $guqkkoqomcqgkkgm); $osqkgokmuiasuukg[] = $guqkkoqomcqgkkgm; $osqkgokmuiasuukg[] = "\167\160\x2d\x70\x6f\163\164\160\x61\x73\163\137"; $osqkgokmuiasuukg[] = "\167\x70\x74\157\x75\x63\x68\x5f\163\x77\x69\x74\143\x68\137\164\157\147\x67\154\x65"; $osqkgokmuiasuukg[] = "\143\x6f\x6d\155\145\x6e\164\x5f\141\x75\164\150\x6f\x72\137"; $osqkgokmuiasuukg[] = "\x63\157\x6d\x6d\145\156\164\137\x61\x75\164\x68\157\162\x5f\145\155\141\151\154\x5f"; $osqkgokmuiasuukg = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\x70\x74\x5f\162\x65\152\145\x63\164\x5f\143\157\157\x6b\x69\x65\163"), $osqkgokmuiasuukg); $osqkgokmuiasuukg = array_filter($osqkgokmuiasuukg); $osqkgokmuiasuukg = array_flip(array_flip($osqkgokmuiasuukg)); return implode("\174", $osqkgokmuiasuukg); } }
