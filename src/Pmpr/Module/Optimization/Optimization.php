<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66d1de2caabf8             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Dashboard\Dashboard; use Pmpr\Module\Optimization\Optimizer\Optimizer; use Pmpr\Module\Optimization\PageManager\PageManager; use Pmpr\Module\Optimization\Setting\Setting; use Pmpr\Module\Optimization\Subscription\Subscription; use Pmpr\Module\Optimization\ThirdParty\ThirdParty; use Pmpr\Module\Optimization\Traits\CommonTrait; class Optimization extends ComponentInitiator { use CommonTrait; const kgswyesggeyekgmg = "\160\162\x5f\157\x70\164\x69\x6d\x69\172\x61\x74\x69\157\156\137"; const eaegumogucmwsmsk = "\x50\x52\137\117\120\x54\111\115\x49\132\101\124\x49\x4f\x4e\137"; public function register() { $this->gkieogwukagigisy(__DIR__, [Constants::qescuiwgsyuikume => static function () { return __("\x4f\160\x74\x69\x6d\151\172\141\164\151\157\156", PR__MDL__OPTIMIZATION); }])->eokmosoqmeiakwki(function () { $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . Constants::yyicwqsqaecyqwco); })->gwcqooogwwkcamag(function () { $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . Constants::uoawqiomwkwwaucs)->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . "\x70\x75\x72\x67\145\137\143\141\x63\x68\145"); }); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\141\144\155\151\156\137\151\156\151\x74", [$this, "\161\141\171\151\145\x75\x73\x63\163\x73\153\151\161\141\x63\x73"]); $this->waqewsckuayqguos("\x62\x65\x66\157\x72\145\137\145\x6e\x71\165\145\165\145\x5f\142\141\x63\153\145\x6e\144\x5f\141\x73\x73\x65\164\x73", [$this, "\145\x6e\161\x75\x65\x75\x65"]); } public function kgquecmsgcouyaya() { $this->aqaqisyssqeomwom("\141\x6c\x6c\157\x77\x5f\x74\x6f\x5f\x61\144\144\x5f\142\x61\143\153\154\151\156\x6b", [$this, "\163\145\x69\141\151\157\x6b\x75\163\x67\x79\163\x6d\x73\x79\161"]); } public function mameiwsayuyquoeq() { if (!$this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg()) { goto mmwqwowqcaseyyki; } Dashboard::symcgieuakksimmu(); Capability::symcgieuakksimmu(); Subscription::symcgieuakksimmu(); mmwqwowqcaseyyki: Optimizer::symcgieuakksimmu(); ThirdParty::symcgieuakksimmu(); PageManager::symcgieuakksimmu(); } public function enqueue() { $eygsasmqycagyayw = $this->miocmcoykayoyyau(); $eygsasmqycagyayw->ayeieigcckcmsikq($eygsasmqycagyayw->owygwqwawqoiusis("\142\x61\143\x6b\145\156\x64", $eygsasmqycagyayw->get("\x62\141\x63\153\x65\156\144\x2e\152\x73"))->okawmmwsiuauwsiu(Constants::qiaqeaemuukkikmi))->ayeieigcckcmsikq($eygsasmqycagyayw->awgyqswkqywwmkye("\x62\x61\x63\x6b\x65\156\144", $eygsasmqycagyayw->get("\142\141\x63\x6b\x65\156\x64\56\x63\x73\163"))); } public function seiaiokusgysmsyq($cuakwceieagskoaa) { if (!($cuakwceieagskoaa && $this->eiykqgmgyuowgeog() > 0)) { goto wsckacayikksiswo; } $cuakwceieagskoaa = false; wsckacayikksiswo: return $cuakwceieagskoaa; } public function qayieuscsskiqacs() { if (!$this->caokeucsksukesyo()->owicscwgeuqcqaig()->euqowsuwmgokuqqo()) { goto qkwckeqowgaokkuy; } if (!(($ucasskoyoewwmmii = $this->igyiymiwguiiqgqm()) && ($iiaumsgauuyeqksw = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()))) { goto ssesmiwwmsayksum; } foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk => $mkomwsiykqigmqca) { if ($iiaumsgauuyeqksw->exists(trailingslashit($mkomwsiykqigmqca) . $qogsmwakwacwqogk)) { goto qcceyyqiuiqcyqqm; } $oyuikeusicgqgwak = $this->weqsyyuyccsemacu($qogsmwakwacwqogk); if ($iiaumsgauuyeqksw->mkdir($mkomwsiykqigmqca) && $iiaumsgauuyeqksw->coeoweawgagkycwe($mkomwsiykqigmqca)) { goto aescssauecumgwso; } $this->syiuacooagmooima("\143\x6f\156\x66\151\147", __("\x43\x6f\x6e\x66\x69\147\165\162\141\x74\151\157\156", PR__MDL__OPTIMIZATION), $mkomwsiykqigmqca); goto cooeoemccqiyewks; aescssauecumgwso: $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); foreach ($oyuikeusicgqgwak as $uusmaiomayssaecw => $uiewakwqscemywuo) { if (!is_string($uiewakwqscemywuo)) { goto augqweqsqioesmim; } $oyuikeusicgqgwak[$uusmaiomayssaecw] = $yyauwyaeewsickwk->amkcmaguoecyiscg($uiewakwqscemywuo, false); augqweqsqioesmim: kkacggiosquqagew: } qimomesqamyyicmo: $ewgwqamkygiqaawc = $this->iuygowkemiiwqmiw("\143\157\x6e\146\151\x67\x2e\160\150\160", ["\x63\157\x6e\x66\x69\147\x73" => $oyuikeusicgqgwak]); $ewgwqamkygiqaawc = preg_replace("\x40\x61\x72\162\x61\171\134\x73\x2b\x5c\x28\100\x69", "\141\x72\x72\x61\171\50", $ewgwqamkygiqaawc); $ewgwqamkygiqaawc = preg_replace("\100\x61\x72\162\x61\171\134\x28\x5c\x73\53\x5c\x29\x40\x69", "\x61\162\162\x61\171\x28\51", $ewgwqamkygiqaawc); $iiaumsgauuyeqksw->cmsiuoqwaiwceuqq($mkomwsiykqigmqca, $qogsmwakwacwqogk, $ewgwqamkygiqaawc); $this->cimaucgayqyyccoc(sprintf(__("\x4f\x70\164\x69\155\x69\172\x61\x74\x69\x6f\156\40\x63\157\156\146\x69\147\x20\x66\151\x6c\145\40\x25\x73\x20\x67\x65\x6e\x65\x72\141\164\x65\x64\x20\x69\x6e\40\x25\163", PR__MDL__OPTIMIZATION), "\x3c\143\x6f\x64\145\76{$qogsmwakwacwqogk}\74\57\x63\157\144\145\x3e", "\x3c\x63\157\144\145\76{$mkomwsiykqigmqca}\74\x2f\x63\157\144\145\x3e"), "\x6f\x70\164\151\155\151\172\141\164\151\x6f\156\55\143\x6f\x6e\146\151\147", Constants::smkwuwawwaqyimcq); cooeoemccqiyewks: qcceyyqiuiqcyqqm: ngagwiymmmycgscu: } qiawociayswicugw: ssesmiwwmsayksum: qkwckeqowgaokkuy: } public function weqsyyuyccsemacu($qogsmwakwacwqogk) : array { $uuwwyaeymswgsgsi = $this->caokeucsksukesyo()->eiwcuqigayigimak(); $oyuikeusicgqgwak = ["\144\145\166\137\155\157\x64\145" => Setting::symcgieuakksimmu()->giiuwsmyumqwwiyq(Constants::qeuquamuuwueeiyi, false), "\144\x65\x62\165\147\137\155\x6f\144\145" => false, "\x63\157\157\x6b\151\145\137\x68\141\163\150" => $uuwwyaeymswgsgsi->cmaecekuqkwmemms("\103\x4f\x4f\113\111\x45\x48\x41\x53\110"), "\162\145\152\x65\143\164\x5f\143\157\x6f\153\151\x65\163" => $this->mukwwwucwusmmqau(), "\x6c\x6f\x67\147\145\x64\137\x69\156\x5f\x63\157\157\153\x69\x65" => $uuwwyaeymswgsgsi->cmaecekuqkwmemms("\114\117\x47\107\105\104\137\111\116\x5f\113\105\x59")]; return $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\143\157\156\146\x69\x67\165\x72\141\164\151\x6f\x6e\163", $oyuikeusicgqgwak, $qogsmwakwacwqogk); } public function mukwwwucwusmmqau() : string { $guqkkoqomcqgkkgm = explode(COOKIEHASH, LOGGED_IN_COOKIE); $guqkkoqomcqgkkgm = array_map("\160\x72\145\147\x5f\x71\x75\157\164\145", $guqkkoqomcqgkkgm); $guqkkoqomcqgkkgm = implode("\x2e\53", $guqkkoqomcqgkkgm); $osqkgokmuiasuukg[] = $guqkkoqomcqgkkgm; $osqkgokmuiasuukg[] = "\167\x70\x2d\x70\157\163\164\160\141\163\x73\137"; $osqkgokmuiasuukg[] = "\x77\160\164\x6f\x75\143\150\137\163\x77\151\x74\x63\150\x5f\x74\x6f\x67\x67\x6c\145"; $osqkgokmuiasuukg[] = "\x63\157\x6d\x6d\145\x6e\164\137\x61\x75\164\x68\157\x72\x5f"; $osqkgokmuiasuukg[] = "\143\x6f\x6d\x6d\145\156\164\x5f\x61\165\x74\150\157\x72\x5f\145\x6d\x61\151\x6c\137"; $osqkgokmuiasuukg = (array) $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\162\145\152\145\143\x74\x5f\143\157\x6f\x6b\x69\x65\x73", $osqkgokmuiasuukg); $osqkgokmuiasuukg = array_filter($osqkgokmuiasuukg); $osqkgokmuiasuukg = array_flip(array_flip($osqkgokmuiasuukg)); return implode("\x7c", $osqkgokmuiasuukg); } }
