<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6240a41b79ab5             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\Manipulate\ManipulateAjax; use Pmpr\Common\Foundation\Manipulate\ManipulateFile; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePage; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateMenu; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use Pmpr\Module\Optimization\Asset\Asset; use Pmpr\Module\Optimization\Buffer\Config; use Pmpr\Module\Optimization\Buffer\Test; use Pmpr\Module\Optimization\Bypass\Bypass; use Pmpr\Module\Optimization\Cloudflare\Cloudflare; use Pmpr\Module\Optimization\Manipulate\Manipulate; use Pmpr\Module\Optimization\Manipulate\ManipulateFormat; use Pmpr\Module\Optimization\Manipulate\ManipulateI18N; use Pmpr\Module\Optimization\Origin\Origin; use Pmpr\Module\Optimization\Page\Page; use Pmpr\Module\Optimization\Page\Model as PageModel; use Pmpr\Module\Optimization\Preloader\Preloader; use Pmpr\Module\Optimization\Purge\Purge; use WP_Post_Type; class Optimization extends Container { public function __construct() { $this->gkieogwukagigisy(__DIR__); if (!$this->gmiyqqaekqcsoime()) { goto koggssokukoukkay; } parent::__construct(); $this->cyowaaeywssoooeo(); koggssokukoukkay: } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\141\x64\155\x69\156\x5f\x69\x6e\x69\164", [$this, "\x79\x65\x79\x69\147\x75\x79\x65\x67\x6d\155\171\x75\163\x65\x61"])->qcsmikeggeemccuu("\x61\x64\155\x69\x6e\x5f\155\145\x6e\165", [$this, "\145\x75\x71\147\x77\151\163\x63\167\147\161\x6b\x71\x6b\145\x63"])->qcsmikeggeemccuu("\x74\x65\x6d\160\x6c\x61\164\145\137\162\x65\x64\x69\162\x65\143\x74", [$this, "\x67\151\x77\171\x73\153\x77\167\155\x63\x69\x65\x75\x61\143\x71"])->qcsmikeggeemccuu("\x61\x66\164\x65\x72\x5f\x73\145\164\x75\160\x5f\x74\x68\x65\x6d\x65", [$this, "\151\145\155\x61\x61\153\x67\161\147\x71\157\163\x69\145\143\x6d"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\157\160\x74\x5f\x72\145\156\144\145\162\x5f\x73\164\141\164\x69\x73\x74\151\x63\163"), [$this, "\163\171\x61\161\167\x6f\x71\147\x73\x71\141\x61\x71\x63\x65\x67"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\146\157\162\155\137\x6d\141\153\145\x72\x5f\x62\x65\x66\157\162\x65\137\164\x61\142\x73"), [$this, "\x61\147\171\171\x73\x79\167\x71\145\157\x6f\x69\157\155\171\x61"]); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x6f\x70\164\x5f\147\x65\164\137\x73\x74\141\164\151\163\164\151\143\x73\x5f\150\x74\155\154"), [$this, "\x69\151\157\155\x61\147\x6d\x73\x6b\x77\151\x61\x77\147\x79\157"], 10, 2); } public function iemaakgqgqosiecm() { Page::symcgieuakksimmu(); Asset::symcgieuakksimmu(); Purge::symcgieuakksimmu(); Bypass::symcgieuakksimmu(); Origin::symcgieuakksimmu(); Preloader::symcgieuakksimmu(); Cloudflare::symcgieuakksimmu(); } public function agyysywqeooiomya() { if (!$this->kmuweyayaqoeqiyw()->eaiyegoagkgeowae()) { goto ueaiskyiqcquiika; } $this->syaqwoqgsqaaqceg(); ueaiskyiqcquiika: } protected function uyeaqmeewagakagw() : array { $uymyaeeowcuoksgm = 0; $gyiuucqgwckqiiqe = Manipulate::maykkqauyaoqmqeu(self::ckmqoekmugkggeym); foreach ($gyiuucqgwckqiiqe as $ymqmyyeuycgmigyo => $sqeykgyoooqysmca) { if (!$sqeykgyoooqysmca instanceof WP_Post_Type) { goto kaiqsuaywyuckuoo; } $gaeqamemwmwsyukm = ManipulatePost::wsqeykgqiemswysa($ymqmyyeuycgmigyo); $uymyaeeowcuoksgm += $gaeqamemwmwsyukm; $ygqyiqguoomyooyq = ManipulatePage::eokiwumgqmymgyoa(); if (!($ymqmyyeuycgmigyo !== self::imywcsggckkcywgk || (!$ygqyiqguoomyooyq || $ymqmyyeuycgmigyo !== self::mswoacegomcucaik))) { goto cqugssuesycomqwa; } $uymyaeeowcuoksgm++; cqugssuesycomqwa: kaiqsuaywyuckuoo: ucecweoaoyeoyuue: } eqemcocqsyasqycq: $iuekmkswcsacoawq = PageModel::symcgieuakksimmu(); return ["\x61\x6c\154" => [self::ciyoccqkiamemcmm => $uymyaeeowcuoksgm, self::qescuiwgsyuikume => __("\123\x69\164\145\40\120\x61\147\145\163", PR__MDL__OPTIMIZATION), self::qgqyauaqwqmqseim => IconFontawesomeInterface::kekeuuqqukocoyes], "\142\165\x64\x67\x65\x74" => [self::ciyoccqkiamemcmm => $this->eiykqgmgyuowgeog(), self::qescuiwgsyuikume => __("\101\154\154\x20\x59\x6f\x75\162\x20\102\165\x64\x67\145\164", PR__MDL__OPTIMIZATION), self::qgqyauaqwqmqseim => IconFontawesomeInterface::kekeuuqqukocoyes], "\165\x73\145\x64" => [self::ciyoccqkiamemcmm => $iuekmkswcsacoawq->ggcikeumgqoockyo(), self::qescuiwgsyuikume => __("\125\x73\145\144\40\x42\165\x64\x67\x65\x74", PR__MDL__OPTIMIZATION), self::qgqyauaqwqmqseim => IconFontawesomeInterface::kekeuuqqukocoyes], "\162\x65\x6d\x61\151\x6e" => [self::ciyoccqkiamemcmm => $iuekmkswcsacoawq->ewcikckouwmuqkms(), self::qescuiwgsyuikume => __("\122\x65\x6d\141\x69\156\151\156\x67\x20\102\x75\x64\147\x65\164", PR__MDL__OPTIMIZATION), self::qgqyauaqwqmqseim => IconFontawesomeInterface::kekeuuqqukocoyes]]; } public function iiomagmskwiawgyo($nsmgceoqaqogqmuw, $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, [self::qwumqqyuasyskkkc => $this->uyeaqmeewagakagw(), "\142\165\164\x74\x6f\156\163" => ["\x75\x70\x64\141\164\145" => [self::ELEMENT => "\x61", self::qescuiwgsyuikume => __("\x55\160\144\x61\164\145\40\x4e\165\155\142\x65\x72\x73", PR__MDL__OPTIMIZATION), self::ysskgssgwuwmqwym => ["\x63\154\x61\163\163" => "\x62\x74\x6e\40\x62\164\x6e\x2d\x73\x65\x63\x6f\x6e\144\x61\162\171\40\x75\x70\x64\x61\164\x65\55\x62\x75\144\147\x65\x74\40\x6d\x62\55\x32", "\x68\x72\145\146" => "\43"]], "\142\x75\171" => [self::ELEMENT => "\141", self::qescuiwgsyuikume => __("\x49\x6e\x63\162\x65\x61\163\145\x20\102\165\x64\x67\x65\164", PR__MDL__OPTIMIZATION), self::ysskgssgwuwmqwym => ["\x63\154\x61\163\x73" => "\x62\164\x6e\x20\x62\164\156\55\x70\162\x69\x6d\141\162\x79", "\x68\x72\x65\x66" => self::couwksyewgyeooqe()->giiuwsmyumqwwiyq(self::sauwwsocmukoaayu), "\164\141\162\x67\145\x74" => "\137\142\154\141\156\x6b"]]], "\x6c\x65\166\x65\x6c\137\x6d\145\163\x73\141\x67\x65" => ManipulateHTML::oockkqiqsssakuug(sprintf(__("\45\163\40\157\x70\x74\151\x6d\151\172\141\164\151\157\x6e\x20\x61\x70\x70\x6c\171\x20\141\165\x74\157\x6d\x61\x74\151\143\141\154\x6c\x79\40\x74\157\40\141\x6c\154\40\x70\x61\147\145\x73\x20\x77\x69\164\150\x6f\165\x74\40\x74\150\x65\40\x6e\145\x65\144\x20\x66\157\162\40\x61\x20\142\x75\144\147\x65\x74\56", PR__MDL__OPTIMIZATION), ManipulateHTML::ciuuiyckmsygceis(__("\114\x65\x76\145\154\40\x31", PR__MDL__OPTIMIZATION))), self::smkwuwawwaqyimcq, [], false, true)]); return $this->iuygowkemiiwqmiw("\163\x74\x61\164\151\x73\x74\151\x63", $ywmkwiwkosakssii); } public function syaqwoqgsqaaqceg($ywmkwiwkosakssii = []) { echo $this->iiomagmskwiawgyo('', $ywmkwiwkosakssii); } public function cyowaaeywssoooeo() : bool { $ksaameoqigiaoigg = false; if ($skacuygeqykiwiwy = Manipulate::cmaecekuqkwmemms("\120\x52\x5f\137\x43\x41\103\x48\x45\x5f\137\120\101\x54\110")) { goto yuoamgkigcwaooqu; } Notice::ymqcyaqqcyuicwqu("\x6f\x70\x74\x69\x6d\x69\172\x61\164\151\157\x6e\55\x63\x6f\x6e\x66\151\x67\55\x70\x61\164\150", __("\117\x70\164\151\155\151\x7a\141\164\x69\157\x6e\40\103\157\x6e\146\x69\x67\40\120\141\164\150", PR__MDL__OPTIMIZATION), $skacuygeqykiwiwy); goto ymwyooosikgokiaa; yuoamgkigcwaooqu: $ksaameoqigiaoigg = ManipulateFile::koymmiyegyskqgck(self::muqmwceaiwwakwws, "{$skacuygeqykiwiwy}\x2f\143\157\x6e\146\x69\147"); ymwyooosikgokiaa: return $ksaameoqigiaoigg; } public function yeyiguyegmmyusea() { if (ManipulateAjax::mcgoysmkqsqooceq()) { goto osqgywagokmsicqe; } $this->qayieuscsskiqacs(); $eygsasmqycagyayw = $this->miocmcoykayoyyau(); $eygsasmqycagyayw->ayeieigcckcmsikq($eygsasmqycagyayw->owygwqwawqoiusis("\x61\144\155\151\x6e", $eygsasmqycagyayw->get("\141\x64\x6d\x69\156\x2e\x6a\163"))->ayuciigykaswwqeo("\x6a\x71\x75\x65\x72\171"))->ayeieigcckcmsikq($eygsasmqycagyayw->awgyqswkqywwmkye("\141\144\x6d\151\156", $eygsasmqycagyayw->get("\141\144\x6d\151\156\56\143\163\x73"))); $usmiuwiumyygmucg = DecoratorOption::get(self::gwccmwywmiccammg); if ($usmiuwiumyygmucg) { goto qaiuogoowcoimwee; } $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\x70\x74\x5f\x75\x70\x64\x61\164\x65\137\x68\x65\162\x6f\x6b\x75\137\x61\x70\160\163")); qaiuogoowcoimwee: osqgywagokmsicqe: } public function euqgwiscwgqkqkec() { ManipulateMenu::aemwscceysomkuea(["\160\x61\147\145\x5f\164\151\164\x6c\145" => __("\x4f\x70\164\x69\155\151\x7a\x61\164\x69\157\x6e", PR__MDL__OPTIMIZATION), "\x6d\145\x6e\x75\137\163\x6c\165\x67" => $this->akuociswqmoigkas(), "\x70\x6f\163\151\x74\x69\x6f\x6e" => 1]); } public function giwyskwwmcieuacq() { $uiewakwqscemywuo = new Config(["\160\x61\x74\150" => Manipulate::cmaecekuqkwmemms(self::muqmwceaiwwakwws)]); new Buffer(new Test($uiewakwqscemywuo, ["\154\x6f\x67\147\145\x72" => $this->ygaescewwyaseaoy()])); } public function ymioscmsquoqmasi() : array { $ucasskoyoewwmmii = []; $auwuoyyagaiegwae = [ManipulateI18N::auksikwsewaywikq()]; $kymsmcekmemqmews = ManipulateI18N::yeaukamowmkwaowi(); if (!$kymsmcekmemqmews) { goto qccmuwiwykuegoga; } $auwuoyyagaiegwae = $kymsmcekmemqmews; qccmuwiwykuegoga: foreach ($auwuoyyagaiegwae as $eeamcawaiqocomwy) { $yckucuyiaykemqea = Manipulate::cmaecekuqkwmemms(self::muqmwceaiwwakwws); $qogsmwakwacwqogk = ManipulateFormat::gooqqcmsyseiaikc($eeamcawaiqocomwy); if (!$yckucuyiaykemqea) { goto qmgueimkwqmsakis; } $mkomwsiykqigmqca = ManipulateArray::get($qogsmwakwacwqogk, "\160\141\x74\x68"); $qogsmwakwacwqogk["\x70\x61\x74\x68"] = $mkomwsiykqigmqca ? str_replace("\x2f", "\56", untrailingslashit($mkomwsiykqigmqca)) : ''; $ymqmyyeuycgmigyo = strtolower($qogsmwakwacwqogk["\x68\x6f\163\x74"]) . $qogsmwakwacwqogk["\160\141\x74\150"] . "\x2e\160\x68\160"; $ucasskoyoewwmmii[$ymqmyyeuycgmigyo] = $yckucuyiaykemqea; qmgueimkwqmsakis: iiuuwuwcwamqegey: } csucwwqcsaymyiuk: return $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\x70\x74\137\x63\x6f\156\x66\151\147\x75\162\141\x74\x69\x6f\x6e\137\146\x69\x6c\x65\163\137\x70\141\164\150"), $ucasskoyoewwmmii); } public function qayieuscsskiqacs() { $ucasskoyoewwmmii = $this->ymioscmsquoqmasi(); if (!(is_array($ucasskoyoewwmmii) && $ucasskoyoewwmmii)) { goto ggoimgeeuugseiwk; } $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk => $mkomwsiykqigmqca) { if ($iiaumsgauuyeqksw->exists(trailingslashit($mkomwsiykqigmqca) . $qogsmwakwacwqogk)) { goto qioswooukgoowsuc; } $oyuikeusicgqgwak = $this->weqsyyuyccsemacu($qogsmwakwacwqogk); if ($iiaumsgauuyeqksw->mkdir($mkomwsiykqigmqca) && $iiaumsgauuyeqksw->coeoweawgagkycwe($mkomwsiykqigmqca)) { goto koemwyegoqwiikom; } Notice::ymqcyaqqcyuicwqu("\x6f\x70\x74\151\155\151\x7a\141\164\x69\157\156\55\143\157\156\146\x69\x67", $mkomwsiykqigmqca); goto qycsooiomiugimqc; koemwyegoqwiikom: foreach ($oyuikeusicgqgwak as $uusmaiomayssaecw => $uiewakwqscemywuo) { if (!is_string($uiewakwqscemywuo)) { goto siuyaemoiiqyoggo; } $oyuikeusicgqgwak[$uusmaiomayssaecw] = ManipulateString::amkcmaguoecyiscg($uiewakwqscemywuo); siuyaemoiiqyoggo: cycwgukowsksmkyc: } kuyqusuycscumuek: $ewgwqamkygiqaawc = $this->iuygowkemiiwqmiw("\143\157\x6e\x66\151\x67\x2e\160\x68\160", ["\x63\157\156\146\x69\147\163" => $oyuikeusicgqgwak]); $ewgwqamkygiqaawc = preg_replace("\x40\x61\162\162\x61\171\134\163\53\x5c\50\100\x69", "\x61\162\x72\141\x79\x28", $ewgwqamkygiqaawc); $ewgwqamkygiqaawc = preg_replace("\100\141\x72\x72\x61\x79\x5c\x28\134\163\53\134\51\100\151", "\x61\162\162\x61\x79\x28\51", $ewgwqamkygiqaawc); $iiaumsgauuyeqksw->cmsiuoqwaiwceuqq($mkomwsiykqigmqca, $qogsmwakwacwqogk, $ewgwqamkygiqaawc); Notice::info(sprintf(__("\117\x70\164\x69\x6d\x69\172\141\164\x69\157\156\40\143\157\x6e\146\151\147\x20\146\x69\154\x65\x20\x25\x73\x20\x67\x65\156\x65\x72\x61\x74\145\144\x20\x69\x6e\40\x25\x73", PR__MDL__OPTIMIZATION), "\74\x63\157\x64\145\76{$qogsmwakwacwqogk}\74\57\143\157\x64\x65\76", "\74\x63\x6f\144\x65\x3e{$mkomwsiykqigmqca}\x3c\x2f\143\157\x64\x65\x3e"), "\157\160\164\x69\x6d\x69\172\141\164\151\x6f\x6e\55\x63\x6f\156\x66\151\x67"); qycsooiomiugimqc: qioswooukgoowsuc: uscissuaiyuiukea: } ooqmaweuqmcmwsuk: ggoimgeeuugseiwk: } public function weqsyyuyccsemacu($qogsmwakwacwqogk) : array { $oyuikeusicgqgwak = ["\144\145\x62\165\x67\x5f\x6d\157\x64\145" => $this->weysguygiseoukqw(Setting::cmgikuaeswggsasy, false), "\143\x6f\157\153\151\145\x5f\150\141\x73\150" => Manipulate::cmaecekuqkwmemms("\103\x4f\117\x4b\111\105\110\101\x53\110"), "\x72\x65\x6a\x65\143\164\x5f\x63\x6f\x6f\153\x69\145\163" => $this->mukwwwucwusmmqau(), "\154\x6f\x67\147\x65\x64\137\x69\156\137\143\157\x6f\x6b\x69\x65" => Manipulate::cmaecekuqkwmemms("\114\x4f\107\107\x45\x44\137\111\x4e\137\113\x45\x59")]; return $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\x70\164\137\143\157\x6e\146\151\x67\165\162\141\164\x69\157\x6e\x73"), $oyuikeusicgqgwak, $qogsmwakwacwqogk); } public function mukwwwucwusmmqau() : string { $guqkkoqomcqgkkgm = explode(COOKIEHASH, LOGGED_IN_COOKIE); $guqkkoqomcqgkkgm = array_map("\160\162\145\x67\x5f\x71\165\157\x74\145", $guqkkoqomcqgkkgm); $guqkkoqomcqgkkgm = implode("\56\x2b", $guqkkoqomcqgkkgm); $osqkgokmuiasuukg[] = $guqkkoqomcqgkkgm; $osqkgokmuiasuukg[] = "\167\160\55\160\x6f\x73\x74\160\141\x73\163\x5f"; $osqkgokmuiasuukg[] = "\x77\x70\164\157\x75\143\150\x5f\x73\x77\151\x74\x63\x68\x5f\164\157\x67\x67\154\x65"; $osqkgokmuiasuukg[] = "\x63\x6f\155\155\145\x6e\164\x5f\141\165\x74\x68\x6f\x72\137"; $osqkgokmuiasuukg[] = "\x63\x6f\x6d\155\x65\156\164\137\x61\x75\x74\x68\157\x72\137\145\155\x61\151\x6c\137"; $osqkgokmuiasuukg = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\160\x74\137\162\145\x6a\145\143\164\137\143\157\157\x6b\151\145\163"), $osqkgokmuiasuukg); $osqkgokmuiasuukg = array_filter($osqkgokmuiasuukg); $osqkgokmuiasuukg = array_flip(array_flip($osqkgokmuiasuukg)); return implode("\174", $osqkgokmuiasuukg); } }
