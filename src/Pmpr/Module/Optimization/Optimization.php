<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ef5105e9703             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Dashboard\Dashboard; use Pmpr\Module\Optimization\Optimizer\Optimizer; use Pmpr\Module\Optimization\PageManager\PageManager; use Pmpr\Module\Optimization\Setting\Setting; use Pmpr\Module\Optimization\Subscription\Subscription; use Pmpr\Module\Optimization\ThirdParty\ThirdParty; use Pmpr\Module\Optimization\Traits\HelperTrait; class Optimization extends ComponentInitiator { use HelperTrait; const kgswyesggeyekgmg = "\x70\x72\137\x6f\x70\164\x69\x6d\151\x7a\141\x74\x69\x6f\156\137"; const eaegumogucmwsmsk = "\x50\122\x5f\117\x50\x54\111\x4d\111\x5a\101\x54\x49\117\x4e\137"; public function register() { $this->gkieogwukagigisy(__DIR__, [Constants::qescuiwgsyuikume => static function () { return __("\117\160\164\151\155\x69\x7a\x61\x74\x69\x6f\x6e", PR__MDL__OPTIMIZATION); }])->eokmosoqmeiakwki(function () { $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . Constants::yyicwqsqaecyqwco); })->gwcqooogwwkcamag(function () { $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . Constants::uoawqiomwkwwaucs)->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . "\x70\165\x72\147\x65\x5f\143\141\x63\x68\145"); }); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\141\144\x6d\151\x6e\x5f\151\156\x69\x74", [$this, "\x71\141\x79\151\x65\x75\163\143\163\x73\x6b\151\161\141\143\163"]); $this->waqewsckuayqguos("\142\145\x66\157\162\145\x5f\145\x6e\161\165\x65\165\145\x5f\142\141\x63\153\x65\x6e\144\x5f\x61\163\163\145\164\x73", [$this, "\x65\156\x71\165\145\x75\x65"]); } public function kgquecmsgcouyaya() { } public function mameiwsayuyquoeq() { if (!$this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg()) { goto cecuyayqoioasumi; } Dashboard::symcgieuakksimmu(); Capability::symcgieuakksimmu(); Subscription::symcgieuakksimmu(); cecuyayqoioasumi: Optimizer::symcgieuakksimmu(); ThirdParty::symcgieuakksimmu(); PageManager::symcgieuakksimmu(); } public function enqueue() { $eygsasmqycagyayw = $this->miocmcoykayoyyau(); $eygsasmqycagyayw->ayeieigcckcmsikq($eygsasmqycagyayw->owygwqwawqoiusis("\x62\141\x63\153\145\x6e\144", $eygsasmqycagyayw->get("\x62\x61\143\153\x65\156\x64\56\152\163"))->okawmmwsiuauwsiu(Constants::qiaqeaemuukkikmi))->ayeieigcckcmsikq($eygsasmqycagyayw->awgyqswkqywwmkye("\142\141\x63\x6b\145\x6e\144", $eygsasmqycagyayw->get("\142\x61\143\x6b\x65\x6e\x64\56\x63\x73\163"))); } public function qayieuscsskiqacs() { if (!$this->caokeucsksukesyo()->owicscwgeuqcqaig()->euqowsuwmgokuqqo()) { goto mkwskuycuyguqqok; } if (!(($ucasskoyoewwmmii = $this->isgmmgcaqsguwias()->asgqmkcukouykiie()->igyiymiwguiiqgqm()) && ($iiaumsgauuyeqksw = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()))) { goto kuicqywysciceggs; } foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk => $mkomwsiykqigmqca) { if ($iiaumsgauuyeqksw->exists(trailingslashit($mkomwsiykqigmqca) . $qogsmwakwacwqogk)) { goto cuykwgmswkskqkyi; } $oyuikeusicgqgwak = $this->weqsyyuyccsemacu($qogsmwakwacwqogk); if ($iiaumsgauuyeqksw->mkdir($mkomwsiykqigmqca) && $iiaumsgauuyeqksw->coeoweawgagkycwe($mkomwsiykqigmqca)) { goto asmecuqiyyswueqe; } $this->syiuacooagmooima("\143\x6f\x6e\146\x69\147", __("\x43\157\156\146\x69\x67\x75\162\141\x74\x69\157\156", PR__MDL__OPTIMIZATION), $mkomwsiykqigmqca); goto csscmcacoikwsecs; asmecuqiyyswueqe: $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); foreach ($oyuikeusicgqgwak as $uusmaiomayssaecw => $uiewakwqscemywuo) { if (!is_string($uiewakwqscemywuo)) { goto myoicgcuugciueis; } $oyuikeusicgqgwak[$uusmaiomayssaecw] = $yyauwyaeewsickwk->amkcmaguoecyiscg($uiewakwqscemywuo, false); myoicgcuugciueis: qwigomakwmyiwkgo: } qgoiooayqmqqsiok: $ewgwqamkygiqaawc = $this->iuygowkemiiwqmiw("\x63\x6f\x6e\x66\151\147\56\160\150\160", ["\x63\157\156\x66\x69\147\163" => $oyuikeusicgqgwak]); $ewgwqamkygiqaawc = preg_replace("\x40\x61\x72\x72\141\x79\x5c\x73\53\x5c\x28\x40\x69", "\141\162\162\x61\x79\50", $ewgwqamkygiqaawc); $ewgwqamkygiqaawc = preg_replace("\100\141\162\x72\141\x79\134\50\134\163\x2b\134\x29\x40\x69", "\x61\162\x72\141\171\50\x29", $ewgwqamkygiqaawc); $iiaumsgauuyeqksw->cmsiuoqwaiwceuqq($mkomwsiykqigmqca, $qogsmwakwacwqogk, $ewgwqamkygiqaawc); $this->cimaucgayqyyccoc(sprintf(__("\x4f\160\x74\x69\x6d\x69\x7a\x61\164\151\157\156\x20\143\157\x6e\146\151\x67\40\146\151\x6c\x65\40\45\163\x20\147\145\156\x65\162\x61\164\x65\144\40\151\156\40\45\163", PR__MDL__OPTIMIZATION), "\74\143\157\x64\x65\76{$qogsmwakwacwqogk}\x3c\x2f\143\x6f\x64\x65\x3e", "\74\x63\157\x64\145\76{$mkomwsiykqigmqca}\x3c\x2f\x63\157\x64\x65\x3e"), "\157\160\164\151\x6d\151\172\x61\x74\x69\x6f\x6e\x2d\143\157\156\x66\x69\147", Constants::smkwuwawwaqyimcq); csscmcacoikwsecs: cuykwgmswkskqkyi: qogqewiwmwiwskgm: } qiaqsassksqiuyae: kuicqywysciceggs: mkwskuycuyguqqok: } public function weqsyyuyccsemacu($qogsmwakwacwqogk) : array { $uuwwyaeymswgsgsi = $this->caokeucsksukesyo()->eiwcuqigayigimak(); $oyuikeusicgqgwak = ["\144\145\166\137\x6d\x6f\144\145" => Setting::symcgieuakksimmu()->giiuwsmyumqwwiyq(Constants::qeuquamuuwueeiyi, false), "\144\145\142\165\147\x5f\155\x6f\x64\145" => false, "\143\157\157\153\151\x65\137\150\141\x73\150" => $uuwwyaeymswgsgsi->cmaecekuqkwmemms("\103\x4f\117\x4b\x49\x45\110\x41\x53\x48"), "\x72\145\152\x65\x63\x74\x5f\143\157\157\153\151\145\163" => $this->mukwwwucwusmmqau(), "\x6c\x6f\147\x67\145\x64\x5f\151\x6e\x5f\143\x6f\157\153\151\145" => $uuwwyaeymswgsgsi->cmaecekuqkwmemms("\114\x4f\107\x47\105\104\x5f\111\x4e\137\x4b\x45\131")]; return $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\143\157\156\146\x69\x67\165\162\141\164\151\157\x6e\x73", $oyuikeusicgqgwak, $qogsmwakwacwqogk); } public function mukwwwucwusmmqau() : string { $guqkkoqomcqgkkgm = explode(COOKIEHASH, LOGGED_IN_COOKIE); $guqkkoqomcqgkkgm = array_map("\x70\x72\x65\x67\137\161\165\157\x74\145", $guqkkoqomcqgkkgm); $guqkkoqomcqgkkgm = implode("\56\x2b", $guqkkoqomcqgkkgm); $osqkgokmuiasuukg[] = $guqkkoqomcqgkkgm; $osqkgokmuiasuukg[] = "\167\x70\55\160\x6f\x73\x74\x70\x61\x73\163\137"; $osqkgokmuiasuukg[] = "\167\x70\164\x6f\165\x63\x68\x5f\x73\167\151\164\143\150\x5f\164\x6f\x67\x67\154\x65"; $osqkgokmuiasuukg[] = "\143\x6f\x6d\155\145\156\164\137\x61\165\x74\x68\x6f\162\x5f"; $osqkgokmuiasuukg[] = "\x63\x6f\x6d\x6d\145\156\164\x5f\x61\x75\x74\x68\157\x72\137\145\155\x61\x69\x6c\137"; $osqkgokmuiasuukg = (array) $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\x72\145\x6a\145\143\164\x5f\x63\157\157\153\151\x65\163", $osqkgokmuiasuukg); $osqkgokmuiasuukg = array_filter($osqkgokmuiasuukg); $osqkgokmuiasuukg = array_flip(array_flip($osqkgokmuiasuukg)); return implode("\x7c", $osqkgokmuiasuukg); } }
