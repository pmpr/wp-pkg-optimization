<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             668724cd3b441             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Module\Optimization\Dashboard\Dashboard; use Pmpr\Module\Optimization\Interfaces\CommonInterface; use Pmpr\Module\Optimization\Optimizer\Optimizer; use Pmpr\Module\Optimization\PageManager\PageManager; use Pmpr\Module\Optimization\Setting\Setting; use Pmpr\Module\Optimization\Subscription\Subscription; use Pmpr\Module\Optimization\ThirdParty\ThirdParty; use Pmpr\Module\Optimization\Traits\CommonTrait; class Optimization extends ComponentInitiator implements CommonInterface { use CommonTrait; public function register() { $this->gkieogwukagigisy(__DIR__, [self::qescuiwgsyuikume => static function () { return __("\117\160\x74\x69\155\151\x7a\141\x74\x69\x6f\x6e", PR__MDL__OPTIMIZATION); }])->eokmosoqmeiakwki(function () { $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . self::yyicwqsqaecyqwco); })->gwcqooogwwkcamag(function () { $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . self::uoawqiomwkwwaucs)->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . "\x70\165\x72\147\x65\137\143\x61\x63\150\145"); }); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\141\x64\155\151\x6e\x5f\151\x6e\151\164", [$this, "\x79\145\x79\151\147\x75\171\x65\x67\x6d\155\171\165\x73\x65\x61"]); } public function kgquecmsgcouyaya() { $this->aqaqisyssqeomwom("\x61\x6c\154\157\x77\137\164\157\x5f\x61\x64\144\x5f\x62\141\143\153\x6c\151\x6e\153", [$this, "\163\x65\151\141\151\x6f\x6b\x75\x73\x67\171\163\x6d\163\x79\x71"]); } public function mameiwsayuyquoeq() { if (!$this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg()) { goto kiwqkcaekqqyuegq; } Dashboard::symcgieuakksimmu(); Subscription::symcgieuakksimmu(); kiwqkcaekqqyuegq: Optimizer::symcgieuakksimmu(); Capability::symcgieuakksimmu(); ThirdParty::symcgieuakksimmu(); PageManager::symcgieuakksimmu(); } public function yeyiguyegmmyusea() { if (!$this->caokeucsksukesyo()->owicscwgeuqcqaig()->euqowsuwmgokuqqo()) { goto quwcqmyokicssyew; } $this->qayieuscsskiqacs(); $eygsasmqycagyayw = $this->miocmcoykayoyyau(); $eygsasmqycagyayw->ayeieigcckcmsikq($eygsasmqycagyayw->owygwqwawqoiusis("\x61\x64\x6d\151\156", $eygsasmqycagyayw->get("\141\x64\155\151\156\x2e\152\x73"))->simswskycwagoeqy())->ayeieigcckcmsikq($eygsasmqycagyayw->awgyqswkqywwmkye("\x61\144\155\x69\x6e", $eygsasmqycagyayw->get("\x61\x64\x6d\x69\x6e\x2e\x63\163\163"))); quwcqmyokicssyew: } public function seiaiokusgysmsyq($cuakwceieagskoaa) { if (!($cuakwceieagskoaa && $this->eiykqgmgyuowgeog() > 0)) { goto iqcogmsguwoikame; } $cuakwceieagskoaa = false; iqcogmsguwoikame: return $cuakwceieagskoaa; } public function qayieuscsskiqacs() { if (!(($ucasskoyoewwmmii = $this->igyiymiwguiiqgqm()) && ($iiaumsgauuyeqksw = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()))) { goto iggyqogweyosuikc; } foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk => $mkomwsiykqigmqca) { if ($iiaumsgauuyeqksw->exists(trailingslashit($mkomwsiykqigmqca) . $qogsmwakwacwqogk)) { goto kqksuugcgsyeoayy; } $oyuikeusicgqgwak = $this->weqsyyuyccsemacu($qogsmwakwacwqogk); if ($iiaumsgauuyeqksw->mkdir($mkomwsiykqigmqca) && $iiaumsgauuyeqksw->coeoweawgagkycwe($mkomwsiykqigmqca)) { goto omugkkesagcyagmk; } $this->syiuacooagmooima("\143\157\x6e\146\151\147", __("\x43\x6f\156\146\151\147\165\162\x61\x74\x69\x6f\x6e", PR__MDL__OPTIMIZATION), $mkomwsiykqigmqca); goto ygcsmkuycoagwyou; omugkkesagcyagmk: $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); foreach ($oyuikeusicgqgwak as $uusmaiomayssaecw => $uiewakwqscemywuo) { if (!is_string($uiewakwqscemywuo)) { goto mosqsmqimqgqoase; } $oyuikeusicgqgwak[$uusmaiomayssaecw] = $yyauwyaeewsickwk->amkcmaguoecyiscg($uiewakwqscemywuo, false); mosqsmqimqgqoase: ayyweymyuuiauamo: } yqykqysmiquwoasu: $ewgwqamkygiqaawc = $this->iuygowkemiiwqmiw("\x63\x6f\156\146\151\x67\56\160\x68\160", ["\x63\x6f\x6e\x66\151\x67\163" => $oyuikeusicgqgwak]); $ewgwqamkygiqaawc = preg_replace("\100\x61\162\162\141\171\134\163\53\x5c\50\x40\x69", "\x61\x72\162\141\171\x28", $ewgwqamkygiqaawc); $ewgwqamkygiqaawc = preg_replace("\x40\x61\x72\162\141\171\134\50\x5c\163\x2b\x5c\x29\100\x69", "\141\162\162\x61\171\x28\x29", $ewgwqamkygiqaawc); $iiaumsgauuyeqksw->cmsiuoqwaiwceuqq($mkomwsiykqigmqca, $qogsmwakwacwqogk, $ewgwqamkygiqaawc); $this->cimaucgayqyyccoc(sprintf(__("\117\160\164\x69\155\151\172\141\164\x69\157\x6e\x20\143\x6f\x6e\x66\x69\147\40\x66\151\x6c\x65\40\x25\x73\x20\147\x65\x6e\x65\162\x61\x74\145\x64\x20\151\x6e\x20\45\163", PR__MDL__OPTIMIZATION), "\x3c\x63\157\x64\x65\76{$qogsmwakwacwqogk}\74\57\143\157\144\145\76", "\74\143\x6f\144\x65\76{$mkomwsiykqigmqca}\74\57\143\x6f\x64\x65\76"), "\157\160\164\x69\155\151\172\x61\164\151\x6f\156\55\x63\x6f\156\x66\x69\x67", self::smkwuwawwaqyimcq); ygcsmkuycoagwyou: kqksuugcgsyeoayy: cmqucgoewuyieoyk: } gimmuoqwckiseaik: iggyqogweyosuikc: } public function weqsyyuyccsemacu($qogsmwakwacwqogk) : array { $uuwwyaeymswgsgsi = $this->caokeucsksukesyo()->eiwcuqigayigimak(); $oyuikeusicgqgwak = ["\x64\145\x76\137\x6d\157\144\145" => Setting::symcgieuakksimmu()->giiuwsmyumqwwiyq(self::qeuquamuuwueeiyi, false), "\x64\x65\142\x75\x67\137\x6d\157\144\145" => false, "\143\157\157\x6b\151\x65\x5f\150\x61\163\150" => $uuwwyaeymswgsgsi->cmaecekuqkwmemms("\x43\x4f\117\x4b\111\x45\110\x41\123\x48"), "\x72\x65\x6a\x65\143\164\137\x63\157\157\153\151\145\x73" => $this->mukwwwucwusmmqau(), "\154\157\147\x67\x65\x64\137\151\x6e\137\x63\x6f\x6f\153\x69\145" => $uuwwyaeymswgsgsi->cmaecekuqkwmemms("\x4c\x4f\x47\x47\105\x44\x5f\111\116\137\x4b\x45\131")]; return $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\143\157\x6e\x66\151\x67\x75\x72\141\x74\151\x6f\156\163", $oyuikeusicgqgwak, $qogsmwakwacwqogk); } public function mukwwwucwusmmqau() : string { $guqkkoqomcqgkkgm = explode(COOKIEHASH, LOGGED_IN_COOKIE); $guqkkoqomcqgkkgm = array_map("\x70\162\x65\147\137\x71\165\157\164\145", $guqkkoqomcqgkkgm); $guqkkoqomcqgkkgm = implode("\x2e\53", $guqkkoqomcqgkkgm); $osqkgokmuiasuukg[] = $guqkkoqomcqgkkgm; $osqkgokmuiasuukg[] = "\x77\160\x2d\x70\x6f\163\164\160\x61\163\163\137"; $osqkgokmuiasuukg[] = "\x77\x70\164\157\x75\143\x68\137\x73\x77\151\164\143\x68\x5f\x74\x6f\x67\147\x6c\145"; $osqkgokmuiasuukg[] = "\x63\157\x6d\x6d\145\156\164\x5f\141\x75\164\150\x6f\x72\137"; $osqkgokmuiasuukg[] = "\x63\x6f\x6d\155\145\x6e\164\137\x61\165\164\x68\157\x72\137\x65\x6d\141\x69\x6c\x5f"; $osqkgokmuiasuukg = (array) $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\162\145\x6a\x65\143\164\x5f\143\x6f\157\153\151\x65\163", $osqkgokmuiasuukg); $osqkgokmuiasuukg = array_filter($osqkgokmuiasuukg); $osqkgokmuiasuukg = array_flip(array_flip($osqkgokmuiasuukg)); return implode("\x7c", $osqkgokmuiasuukg); } }
