<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66afcef5beb16             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Module\Optimization\Dashboard\Dashboard; use Pmpr\Module\Optimization\Interfaces\CommonInterface; use Pmpr\Module\Optimization\Optimizer\Optimizer; use Pmpr\Module\Optimization\PageManager\PageManager; use Pmpr\Module\Optimization\Setting\Setting; use Pmpr\Module\Optimization\Subscription\Subscription; use Pmpr\Module\Optimization\ThirdParty\ThirdParty; use Pmpr\Module\Optimization\Traits\CommonTrait; class Optimization extends ComponentInitiator implements CommonInterface { use CommonTrait; public function register() { $this->gkieogwukagigisy(__DIR__, [self::qescuiwgsyuikume => static function () { return __("\117\x70\x74\x69\155\151\x7a\x61\x74\151\x6f\156", PR__MDL__OPTIMIZATION); }])->eokmosoqmeiakwki(function () { $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . self::yyicwqsqaecyqwco); })->gwcqooogwwkcamag(function () { $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . self::uoawqiomwkwwaucs)->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . "\x70\165\x72\147\x65\x5f\143\141\143\150\145"); }); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\141\x64\x6d\151\156\x5f\151\156\151\164", [$this, "\171\145\x79\151\147\x75\171\145\x67\155\x6d\171\x75\x73\145\x61"]); } public function kgquecmsgcouyaya() { $this->aqaqisyssqeomwom("\x61\x6c\154\157\167\137\x74\157\x5f\141\144\x64\137\142\141\x63\153\154\x69\x6e\153", [$this, "\x73\145\x69\x61\x69\x6f\153\165\x73\147\x79\163\x6d\x73\x79\161"]); } public function mameiwsayuyquoeq() { if (!$this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg()) { goto iuaeeeeggkikuiig; } Dashboard::symcgieuakksimmu(); Subscription::symcgieuakksimmu(); iuaeeeeggkikuiig: Optimizer::symcgieuakksimmu(); Capability::symcgieuakksimmu(); ThirdParty::symcgieuakksimmu(); PageManager::symcgieuakksimmu(); } public function yeyiguyegmmyusea() { if (!$this->caokeucsksukesyo()->owicscwgeuqcqaig()->euqowsuwmgokuqqo()) { goto kmiqskugkmaiugae; } $this->qayieuscsskiqacs(); $eygsasmqycagyayw = $this->miocmcoykayoyyau(); $eygsasmqycagyayw->ayeieigcckcmsikq($eygsasmqycagyayw->owygwqwawqoiusis("\141\144\x6d\x69\156", $eygsasmqycagyayw->get("\x61\x64\155\151\156\x2e\x6a\x73"))->simswskycwagoeqy())->ayeieigcckcmsikq($eygsasmqycagyayw->awgyqswkqywwmkye("\141\144\x6d\x69\x6e", $eygsasmqycagyayw->get("\141\x64\155\151\x6e\x2e\x63\x73\x73"))); kmiqskugkmaiugae: } public function seiaiokusgysmsyq($cuakwceieagskoaa) { if (!($cuakwceieagskoaa && $this->eiykqgmgyuowgeog() > 0)) { goto cqemkecywkkwaaii; } $cuakwceieagskoaa = false; cqemkecywkkwaaii: return $cuakwceieagskoaa; } public function qayieuscsskiqacs() { if (!(($ucasskoyoewwmmii = $this->igyiymiwguiiqgqm()) && ($iiaumsgauuyeqksw = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()))) { goto aueiggyawkmkamum; } foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk => $mkomwsiykqigmqca) { if ($iiaumsgauuyeqksw->exists(trailingslashit($mkomwsiykqigmqca) . $qogsmwakwacwqogk)) { goto wqieuwguumokgyqg; } $oyuikeusicgqgwak = $this->weqsyyuyccsemacu($qogsmwakwacwqogk); if ($iiaumsgauuyeqksw->mkdir($mkomwsiykqigmqca) && $iiaumsgauuyeqksw->coeoweawgagkycwe($mkomwsiykqigmqca)) { goto ysggiwiksocomkek; } $this->syiuacooagmooima("\143\x6f\x6e\146\x69\x67", __("\103\157\156\x66\x69\x67\165\162\141\x74\x69\157\156", PR__MDL__OPTIMIZATION), $mkomwsiykqigmqca); goto wkqwywgikoyqkyeg; ysggiwiksocomkek: $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); foreach ($oyuikeusicgqgwak as $uusmaiomayssaecw => $uiewakwqscemywuo) { if (!is_string($uiewakwqscemywuo)) { goto wmsiqkyqsiysgcyy; } $oyuikeusicgqgwak[$uusmaiomayssaecw] = $yyauwyaeewsickwk->amkcmaguoecyiscg($uiewakwqscemywuo, false); wmsiqkyqsiysgcyy: gkuwmiusoqwesqoo: } ieoiygycmseqmmgc: $ewgwqamkygiqaawc = $this->iuygowkemiiwqmiw("\x63\157\x6e\146\151\147\56\160\x68\160", ["\143\157\x6e\146\x69\x67\x73" => $oyuikeusicgqgwak]); $ewgwqamkygiqaawc = preg_replace("\x40\141\162\x72\x61\x79\134\163\x2b\134\x28\x40\151", "\141\162\162\x61\171\50", $ewgwqamkygiqaawc); $ewgwqamkygiqaawc = preg_replace("\100\x61\x72\162\141\x79\134\50\134\163\53\134\x29\100\151", "\141\162\x72\141\171\x28\51", $ewgwqamkygiqaawc); $iiaumsgauuyeqksw->cmsiuoqwaiwceuqq($mkomwsiykqigmqca, $qogsmwakwacwqogk, $ewgwqamkygiqaawc); $this->cimaucgayqyyccoc(sprintf(__("\x4f\160\164\151\x6d\x69\172\141\164\x69\x6f\x6e\x20\x63\x6f\x6e\x66\151\147\40\146\151\x6c\145\40\45\163\x20\x67\x65\156\145\162\141\x74\x65\x64\x20\151\156\40\45\x73", PR__MDL__OPTIMIZATION), "\74\x63\157\144\x65\76{$qogsmwakwacwqogk}\x3c\x2f\x63\157\x64\x65\76", "\74\x63\157\x64\145\76{$mkomwsiykqigmqca}\x3c\x2f\143\x6f\144\145\76"), "\157\x70\x74\x69\x6d\x69\172\x61\164\x69\x6f\x6e\55\x63\x6f\156\146\151\x67", self::smkwuwawwaqyimcq); wkqwywgikoyqkyeg: wqieuwguumokgyqg: qaikeckkiwasykwk: } wcioaoeiiawwqqqq: aueiggyawkmkamum: } public function weqsyyuyccsemacu($qogsmwakwacwqogk) : array { $uuwwyaeymswgsgsi = $this->caokeucsksukesyo()->eiwcuqigayigimak(); $oyuikeusicgqgwak = ["\x64\x65\x76\x5f\155\157\x64\145" => Setting::symcgieuakksimmu()->giiuwsmyumqwwiyq(self::qeuquamuuwueeiyi, false), "\144\145\x62\x75\x67\x5f\155\x6f\x64\x65" => false, "\143\x6f\x6f\153\x69\145\x5f\150\141\163\x68" => $uuwwyaeymswgsgsi->cmaecekuqkwmemms("\x43\x4f\117\x4b\111\x45\x48\x41\x53\110"), "\162\x65\x6a\x65\143\164\x5f\x63\157\x6f\153\151\x65\x73" => $this->mukwwwucwusmmqau(), "\x6c\157\x67\147\x65\144\137\x69\x6e\137\143\x6f\157\x6b\x69\x65" => $uuwwyaeymswgsgsi->cmaecekuqkwmemms("\114\117\x47\107\105\104\137\111\x4e\x5f\x4b\x45\131")]; return $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\143\157\156\x66\x69\x67\165\x72\x61\x74\151\x6f\x6e\x73", $oyuikeusicgqgwak, $qogsmwakwacwqogk); } public function mukwwwucwusmmqau() : string { $guqkkoqomcqgkkgm = explode(COOKIEHASH, LOGGED_IN_COOKIE); $guqkkoqomcqgkkgm = array_map("\160\162\145\x67\x5f\x71\165\157\x74\145", $guqkkoqomcqgkkgm); $guqkkoqomcqgkkgm = implode("\x2e\53", $guqkkoqomcqgkkgm); $osqkgokmuiasuukg[] = $guqkkoqomcqgkkgm; $osqkgokmuiasuukg[] = "\167\x70\x2d\160\x6f\x73\x74\160\141\163\x73\137"; $osqkgokmuiasuukg[] = "\167\x70\164\x6f\165\143\150\137\x73\167\x69\x74\143\x68\x5f\x74\157\x67\147\x6c\x65"; $osqkgokmuiasuukg[] = "\143\157\155\x6d\x65\x6e\x74\x5f\141\x75\x74\150\x6f\x72\x5f"; $osqkgokmuiasuukg[] = "\143\x6f\x6d\x6d\145\x6e\x74\x5f\141\x75\164\150\x6f\x72\137\145\155\x61\x69\154\x5f"; $osqkgokmuiasuukg = (array) $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\x72\145\152\x65\x63\164\137\143\157\x6f\x6b\151\x65\x73", $osqkgokmuiasuukg); $osqkgokmuiasuukg = array_filter($osqkgokmuiasuukg); $osqkgokmuiasuukg = array_flip(array_flip($osqkgokmuiasuukg)); return implode("\x7c", $osqkgokmuiasuukg); } }
