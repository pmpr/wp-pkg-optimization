<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66cf88a1c26f3             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Dashboard\Dashboard; use Pmpr\Module\Optimization\Optimizer\Optimizer; use Pmpr\Module\Optimization\PageManager\PageManager; use Pmpr\Module\Optimization\Setting\Setting; use Pmpr\Module\Optimization\Subscription\Subscription; use Pmpr\Module\Optimization\ThirdParty\ThirdParty; use Pmpr\Module\Optimization\Traits\CommonTrait; class Optimization extends ComponentInitiator { use CommonTrait; const kgswyesggeyekgmg = "\160\162\137\157\160\x74\151\155\x69\172\141\164\151\157\x6e\x5f"; const eaegumogucmwsmsk = "\120\x52\137\117\120\x54\x49\115\x49\x5a\x41\124\x49\x4f\x4e\x5f"; public function register() { $this->gkieogwukagigisy(__DIR__, [Constants::qescuiwgsyuikume => static function () { return __("\x4f\160\164\151\x6d\x69\x7a\141\x74\x69\157\x6e", PR__MDL__OPTIMIZATION); }])->eokmosoqmeiakwki(function () { $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . Constants::yyicwqsqaecyqwco); })->gwcqooogwwkcamag(function () { $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . Constants::uoawqiomwkwwaucs)->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . "\x70\x75\x72\x67\x65\x5f\143\x61\x63\150\145"); }); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x61\x64\x6d\151\156\x5f\151\x6e\151\x74", [$this, "\x71\x61\171\151\145\x75\x73\x63\x73\163\x6b\x69\161\x61\x63\163"]); $this->waqewsckuayqguos("\142\x65\146\157\162\x65\137\x65\156\161\x75\145\x75\x65\137\142\141\x63\x6b\145\156\x64\137\141\163\x73\145\164\x73", [$this, "\x65\156\x71\x75\x65\x75\x65"]); } public function kgquecmsgcouyaya() { $this->aqaqisyssqeomwom("\141\154\154\157\x77\x5f\164\157\x5f\x61\144\144\137\142\x61\x63\153\154\151\156\153", [$this, "\x73\x65\151\x61\151\x6f\153\x75\x73\147\171\x73\x6d\x73\x79\x71"]); } public function mameiwsayuyquoeq() { if (!$this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg()) { goto ysusaysykymegguk; } Dashboard::symcgieuakksimmu(); Capability::symcgieuakksimmu(); Subscription::symcgieuakksimmu(); ysusaysykymegguk: Optimizer::symcgieuakksimmu(); ThirdParty::symcgieuakksimmu(); PageManager::symcgieuakksimmu(); } public function enqueue() { $eygsasmqycagyayw = $this->miocmcoykayoyyau(); $eygsasmqycagyayw->ayeieigcckcmsikq($eygsasmqycagyayw->owygwqwawqoiusis("\x62\141\x63\x6b\145\x6e\x64", $eygsasmqycagyayw->get("\142\141\143\153\x65\156\144\x2e\x6a\x73"))->okawmmwsiuauwsiu(Constants::qiaqeaemuukkikmi))->ayeieigcckcmsikq($eygsasmqycagyayw->awgyqswkqywwmkye("\142\141\143\153\x65\156\x64", $eygsasmqycagyayw->get("\142\x61\x63\153\145\x6e\x64\56\x63\x73\x73"))); } public function seiaiokusgysmsyq($cuakwceieagskoaa) { if (!($cuakwceieagskoaa && $this->eiykqgmgyuowgeog() > 0)) { goto yskswskmsgoouyco; } $cuakwceieagskoaa = false; yskswskmsgoouyco: return $cuakwceieagskoaa; } public function qayieuscsskiqacs() { if (!$this->caokeucsksukesyo()->owicscwgeuqcqaig()->euqowsuwmgokuqqo()) { goto amkcomscieegkygc; } if (!(($ucasskoyoewwmmii = $this->igyiymiwguiiqgqm()) && ($iiaumsgauuyeqksw = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()))) { goto iqukigoyiqgcggue; } foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk => $mkomwsiykqigmqca) { if ($iiaumsgauuyeqksw->exists(trailingslashit($mkomwsiykqigmqca) . $qogsmwakwacwqogk)) { goto qkiqquymecyoouki; } $oyuikeusicgqgwak = $this->weqsyyuyccsemacu($qogsmwakwacwqogk); if ($iiaumsgauuyeqksw->mkdir($mkomwsiykqigmqca) && $iiaumsgauuyeqksw->coeoweawgagkycwe($mkomwsiykqigmqca)) { goto yuoyeeuqqaockyqw; } $this->syiuacooagmooima("\x63\157\x6e\x66\151\x67", __("\103\x6f\156\x66\151\x67\165\162\x61\x74\151\x6f\156", PR__MDL__OPTIMIZATION), $mkomwsiykqigmqca); goto kygcymkakucoeock; yuoyeeuqqaockyqw: $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); foreach ($oyuikeusicgqgwak as $uusmaiomayssaecw => $uiewakwqscemywuo) { if (!is_string($uiewakwqscemywuo)) { goto ugcyukgoaiiysymc; } $oyuikeusicgqgwak[$uusmaiomayssaecw] = $yyauwyaeewsickwk->amkcmaguoecyiscg($uiewakwqscemywuo, false); ugcyukgoaiiysymc: wkwkeicwosmkcygc: } mmusoowesqcmuqew: $ewgwqamkygiqaawc = $this->iuygowkemiiwqmiw("\143\x6f\156\146\151\147\x2e\160\x68\160", ["\143\x6f\x6e\x66\x69\x67\163" => $oyuikeusicgqgwak]); $ewgwqamkygiqaawc = preg_replace("\100\x61\x72\x72\x61\171\134\163\53\134\50\x40\151", "\x61\x72\162\x61\x79\x28", $ewgwqamkygiqaawc); $ewgwqamkygiqaawc = preg_replace("\100\x61\162\x72\x61\171\x5c\50\134\163\53\134\x29\x40\x69", "\x61\x72\x72\141\171\50\x29", $ewgwqamkygiqaawc); $iiaumsgauuyeqksw->cmsiuoqwaiwceuqq($mkomwsiykqigmqca, $qogsmwakwacwqogk, $ewgwqamkygiqaawc); $this->cimaucgayqyyccoc(sprintf(__("\117\x70\x74\151\155\151\172\141\164\151\157\156\40\143\157\x6e\146\151\x67\x20\146\151\154\145\40\x25\x73\x20\147\x65\156\x65\x72\141\164\145\x64\x20\151\156\40\x25\x73", PR__MDL__OPTIMIZATION), "\74\143\157\144\145\76{$qogsmwakwacwqogk}\x3c\x2f\x63\157\144\x65\76", "\x3c\x63\157\144\x65\76{$mkomwsiykqigmqca}\74\57\x63\x6f\x64\x65\76"), "\157\160\x74\151\155\x69\x7a\141\x74\x69\157\156\55\x63\x6f\x6e\146\x69\147", Constants::smkwuwawwaqyimcq); kygcymkakucoeock: qkiqquymecyoouki: csskguekqcwcmocu: } oaciskoioaecgwee: iqukigoyiqgcggue: amkcomscieegkygc: } public function weqsyyuyccsemacu($qogsmwakwacwqogk) : array { $uuwwyaeymswgsgsi = $this->caokeucsksukesyo()->eiwcuqigayigimak(); $oyuikeusicgqgwak = ["\x64\145\166\137\155\x6f\144\x65" => Setting::symcgieuakksimmu()->giiuwsmyumqwwiyq(Constants::qeuquamuuwueeiyi, false), "\144\x65\142\x75\x67\x5f\155\x6f\x64\145" => false, "\143\157\157\153\151\x65\137\x68\141\163\150" => $uuwwyaeymswgsgsi->cmaecekuqkwmemms("\103\117\117\113\x49\x45\110\x41\123\110"), "\x72\145\152\x65\x63\x74\x5f\x63\x6f\x6f\153\151\145\163" => $this->mukwwwucwusmmqau(), "\x6c\x6f\x67\x67\145\x64\x5f\151\x6e\x5f\x63\x6f\157\x6b\151\x65" => $uuwwyaeymswgsgsi->cmaecekuqkwmemms("\114\117\x47\107\105\104\x5f\111\116\x5f\x4b\105\x59")]; return $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\x63\x6f\x6e\x66\x69\x67\x75\162\x61\164\151\157\156\x73", $oyuikeusicgqgwak, $qogsmwakwacwqogk); } public function mukwwwucwusmmqau() : string { $guqkkoqomcqgkkgm = explode(COOKIEHASH, LOGGED_IN_COOKIE); $guqkkoqomcqgkkgm = array_map("\x70\162\x65\147\137\x71\165\157\164\x65", $guqkkoqomcqgkkgm); $guqkkoqomcqgkkgm = implode("\56\53", $guqkkoqomcqgkkgm); $osqkgokmuiasuukg[] = $guqkkoqomcqgkkgm; $osqkgokmuiasuukg[] = "\167\160\55\x70\x6f\x73\164\160\x61\x73\163\x5f"; $osqkgokmuiasuukg[] = "\x77\x70\x74\157\x75\143\x68\137\x73\x77\x69\164\x63\x68\x5f\164\157\x67\147\154\x65"; $osqkgokmuiasuukg[] = "\143\x6f\x6d\x6d\145\156\x74\x5f\x61\165\164\x68\157\x72\x5f"; $osqkgokmuiasuukg[] = "\x63\x6f\x6d\155\145\156\164\x5f\x61\x75\x74\x68\157\x72\137\145\155\141\x69\154\137"; $osqkgokmuiasuukg = (array) $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\x72\145\x6a\145\x63\x74\x5f\x63\157\x6f\x6b\x69\x65\163", $osqkgokmuiasuukg); $osqkgokmuiasuukg = array_filter($osqkgokmuiasuukg); $osqkgokmuiasuukg = array_flip(array_flip($osqkgokmuiasuukg)); return implode("\174", $osqkgokmuiasuukg); } }
