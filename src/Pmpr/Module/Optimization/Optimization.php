<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66d24006e45d5             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Dashboard\Dashboard; use Pmpr\Module\Optimization\Optimizer\Optimizer; use Pmpr\Module\Optimization\PageManager\PageManager; use Pmpr\Module\Optimization\Setting\Setting; use Pmpr\Module\Optimization\Subscription\Subscription; use Pmpr\Module\Optimization\ThirdParty\ThirdParty; use Pmpr\Module\Optimization\Traits\CommonTrait; class Optimization extends ComponentInitiator { use CommonTrait; const kgswyesggeyekgmg = "\x70\x72\x5f\x6f\x70\164\151\155\x69\x7a\141\x74\151\x6f\x6e\x5f"; const eaegumogucmwsmsk = "\x50\122\x5f\117\x50\124\x49\115\111\x5a\101\x54\x49\117\x4e\137"; public function register() { $this->gkieogwukagigisy(__DIR__, [Constants::qescuiwgsyuikume => static function () { return __("\x4f\x70\164\151\x6d\151\172\x61\x74\151\157\x6e", PR__MDL__OPTIMIZATION); }])->eokmosoqmeiakwki(function () { $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . Constants::yyicwqsqaecyqwco); })->gwcqooogwwkcamag(function () { $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . Constants::uoawqiomwkwwaucs)->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . "\160\165\162\x67\x65\137\143\141\x63\x68\x65"); }); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x61\144\x6d\x69\156\x5f\151\x6e\151\x74", [$this, "\x71\x61\x79\x69\x65\165\x73\143\163\163\x6b\x69\161\141\143\163"]); $this->waqewsckuayqguos("\x62\x65\146\x6f\x72\145\137\x65\156\161\x75\145\x75\145\x5f\x62\x61\x63\x6b\145\156\x64\x5f\141\x73\163\145\x74\x73", [$this, "\145\x6e\x71\x75\x65\x75\145"]); } public function kgquecmsgcouyaya() { $this->aqaqisyssqeomwom("\x61\154\x6c\157\x77\137\x74\157\137\x61\144\x64\137\142\x61\143\153\154\151\x6e\x6b", [$this, "\x73\145\151\141\x69\x6f\x6b\x75\x73\x67\x79\x73\x6d\x73\x79\161"]); } public function mameiwsayuyquoeq() { if (!$this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg()) { goto kkacggiosquqagew; } Dashboard::symcgieuakksimmu(); Capability::symcgieuakksimmu(); Subscription::symcgieuakksimmu(); kkacggiosquqagew: Optimizer::symcgieuakksimmu(); ThirdParty::symcgieuakksimmu(); PageManager::symcgieuakksimmu(); } public function enqueue() { $eygsasmqycagyayw = $this->miocmcoykayoyyau(); $eygsasmqycagyayw->ayeieigcckcmsikq($eygsasmqycagyayw->owygwqwawqoiusis("\142\x61\143\x6b\145\156\144", $eygsasmqycagyayw->get("\142\x61\x63\153\145\x6e\x64\56\x6a\163"))->okawmmwsiuauwsiu(Constants::qiaqeaemuukkikmi))->ayeieigcckcmsikq($eygsasmqycagyayw->awgyqswkqywwmkye("\142\x61\143\x6b\x65\156\x64", $eygsasmqycagyayw->get("\x62\141\143\x6b\x65\156\x64\x2e\143\x73\163"))); } public function seiaiokusgysmsyq($cuakwceieagskoaa) { if (!($cuakwceieagskoaa && $this->eiykqgmgyuowgeog() > 0)) { goto augqweqsqioesmim; } $cuakwceieagskoaa = false; augqweqsqioesmim: return $cuakwceieagskoaa; } public function qayieuscsskiqacs() { if (!$this->caokeucsksukesyo()->owicscwgeuqcqaig()->euqowsuwmgokuqqo()) { goto weiaigyyigkusucy; } if (!(($ucasskoyoewwmmii = $this->igyiymiwguiiqgqm()) && ($iiaumsgauuyeqksw = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()))) { goto mquyemuqcqeassqc; } foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk => $mkomwsiykqigmqca) { if ($iiaumsgauuyeqksw->exists(trailingslashit($mkomwsiykqigmqca) . $qogsmwakwacwqogk)) { goto sykuuisikqcwuaqu; } $oyuikeusicgqgwak = $this->weqsyyuyccsemacu($qogsmwakwacwqogk); if ($iiaumsgauuyeqksw->mkdir($mkomwsiykqigmqca) && $iiaumsgauuyeqksw->coeoweawgagkycwe($mkomwsiykqigmqca)) { goto kqkymieyyqaoeymw; } $this->syiuacooagmooima("\143\x6f\156\146\x69\x67", __("\x43\157\156\x66\x69\x67\165\x72\141\164\151\x6f\x6e", PR__MDL__OPTIMIZATION), $mkomwsiykqigmqca); goto gqyyccceswkqcmaa; kqkymieyyqaoeymw: $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); foreach ($oyuikeusicgqgwak as $uusmaiomayssaecw => $uiewakwqscemywuo) { if (!is_string($uiewakwqscemywuo)) { goto qkwckeqowgaokkuy; } $oyuikeusicgqgwak[$uusmaiomayssaecw] = $yyauwyaeewsickwk->amkcmaguoecyiscg($uiewakwqscemywuo, false); qkwckeqowgaokkuy: ssesmiwwmsayksum: } qcceyyqiuiqcyqqm: $ewgwqamkygiqaawc = $this->iuygowkemiiwqmiw("\x63\x6f\x6e\x66\151\x67\x2e\160\150\160", ["\x63\x6f\x6e\x66\x69\x67\x73" => $oyuikeusicgqgwak]); $ewgwqamkygiqaawc = preg_replace("\x40\x61\162\x72\x61\171\x5c\x73\53\134\50\100\x69", "\x61\x72\162\x61\171\50", $ewgwqamkygiqaawc); $ewgwqamkygiqaawc = preg_replace("\x40\x61\x72\162\x61\x79\134\50\134\x73\53\x5c\x29\x40\x69", "\141\x72\x72\x61\x79\x28\51", $ewgwqamkygiqaawc); $iiaumsgauuyeqksw->cmsiuoqwaiwceuqq($mkomwsiykqigmqca, $qogsmwakwacwqogk, $ewgwqamkygiqaawc); $this->cimaucgayqyyccoc(sprintf(__("\117\160\x74\151\x6d\151\x7a\x61\164\x69\157\x6e\x20\143\x6f\156\146\x69\147\x20\x66\151\154\145\x20\45\x73\40\147\x65\156\145\x72\x61\x74\x65\x64\x20\151\156\40\45\163", PR__MDL__OPTIMIZATION), "\74\x63\157\144\145\x3e{$qogsmwakwacwqogk}\74\x2f\143\157\144\x65\76", "\x3c\x63\x6f\144\145\x3e{$mkomwsiykqigmqca}\74\57\x63\x6f\x64\145\76"), "\x6f\x70\164\151\155\x69\x7a\141\164\151\157\156\x2d\x63\157\156\x66\151\147", Constants::smkwuwawwaqyimcq); gqyyccceswkqcmaa: sykuuisikqcwuaqu: cooeoemccqiyewks: } aescssauecumgwso: mquyemuqcqeassqc: weiaigyyigkusucy: } public function weqsyyuyccsemacu($qogsmwakwacwqogk) : array { $uuwwyaeymswgsgsi = $this->caokeucsksukesyo()->eiwcuqigayigimak(); $oyuikeusicgqgwak = ["\144\145\166\x5f\x6d\x6f\144\145" => Setting::symcgieuakksimmu()->giiuwsmyumqwwiyq(Constants::qeuquamuuwueeiyi, false), "\144\x65\142\165\147\x5f\x6d\157\x64\145" => false, "\143\157\157\x6b\x69\x65\137\x68\141\163\x68" => $uuwwyaeymswgsgsi->cmaecekuqkwmemms("\x43\117\117\x4b\111\105\x48\101\x53\110"), "\162\145\x6a\145\x63\x74\137\x63\x6f\x6f\x6b\151\145\163" => $this->mukwwwucwusmmqau(), "\x6c\157\147\147\x65\144\x5f\151\x6e\x5f\143\x6f\157\x6b\x69\x65" => $uuwwyaeymswgsgsi->cmaecekuqkwmemms("\114\117\x47\x47\105\104\x5f\111\116\x5f\x4b\x45\x59")]; return $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\x63\x6f\156\146\151\147\165\162\x61\x74\x69\157\x6e\163", $oyuikeusicgqgwak, $qogsmwakwacwqogk); } public function mukwwwucwusmmqau() : string { $guqkkoqomcqgkkgm = explode(COOKIEHASH, LOGGED_IN_COOKIE); $guqkkoqomcqgkkgm = array_map("\x70\x72\145\x67\x5f\x71\165\157\x74\x65", $guqkkoqomcqgkkgm); $guqkkoqomcqgkkgm = implode("\56\53", $guqkkoqomcqgkkgm); $osqkgokmuiasuukg[] = $guqkkoqomcqgkkgm; $osqkgokmuiasuukg[] = "\x77\160\55\x70\157\163\x74\x70\x61\x73\163\x5f"; $osqkgokmuiasuukg[] = "\167\x70\164\157\165\x63\x68\137\163\167\151\164\143\x68\x5f\164\157\x67\x67\154\145"; $osqkgokmuiasuukg[] = "\143\157\155\155\x65\156\164\x5f\141\165\164\150\157\x72\137"; $osqkgokmuiasuukg[] = "\x63\x6f\155\x6d\x65\x6e\164\137\141\165\164\x68\x6f\162\137\x65\x6d\141\151\154\137"; $osqkgokmuiasuukg = (array) $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\162\x65\152\x65\143\x74\137\143\x6f\x6f\x6b\151\145\x73", $osqkgokmuiasuukg); $osqkgokmuiasuukg = array_filter($osqkgokmuiasuukg); $osqkgokmuiasuukg = array_flip(array_flip($osqkgokmuiasuukg)); return implode("\174", $osqkgokmuiasuukg); } }
