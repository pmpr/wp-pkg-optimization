<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66b4181e072c1             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Module\Optimization\Dashboard\Dashboard; use Pmpr\Module\Optimization\Interfaces\CommonInterface; use Pmpr\Module\Optimization\Optimizer\Optimizer; use Pmpr\Module\Optimization\PageManager\PageManager; use Pmpr\Module\Optimization\Setting\Setting; use Pmpr\Module\Optimization\Subscription\Subscription; use Pmpr\Module\Optimization\ThirdParty\ThirdParty; use Pmpr\Module\Optimization\Traits\CommonTrait; class Optimization extends ComponentInitiator implements CommonInterface { use CommonTrait; public function register() { $this->gkieogwukagigisy(__DIR__, [self::qescuiwgsyuikume => static function () { return __("\x4f\x70\x74\151\155\x69\172\x61\164\151\157\x6e", PR__MDL__OPTIMIZATION); }])->eokmosoqmeiakwki(function () { $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . self::yyicwqsqaecyqwco); })->gwcqooogwwkcamag(function () { $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . self::uoawqiomwkwwaucs)->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . "\x70\x75\x72\147\145\x5f\x63\141\x63\x68\145"); }); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\141\144\x6d\x69\156\137\151\x6e\x69\x74", [$this, "\x79\145\x79\151\x67\x75\171\145\x67\155\155\x79\165\x73\145\141"]); } public function kgquecmsgcouyaya() { $this->aqaqisyssqeomwom("\141\154\x6c\157\167\x5f\164\157\137\141\x64\x64\x5f\142\x61\x63\x6b\154\x69\x6e\x6b", [$this, "\163\x65\x69\x61\x69\x6f\x6b\x75\163\x67\171\x73\x6d\x73\x79\x71"]); } public function mameiwsayuyquoeq() { if (!$this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg()) { goto uauuoyigkmqoasaq; } Dashboard::symcgieuakksimmu(); Subscription::symcgieuakksimmu(); uauuoyigkmqoasaq: Optimizer::symcgieuakksimmu(); Capability::symcgieuakksimmu(); ThirdParty::symcgieuakksimmu(); PageManager::symcgieuakksimmu(); } public function yeyiguyegmmyusea() { if (!$this->caokeucsksukesyo()->owicscwgeuqcqaig()->euqowsuwmgokuqqo()) { goto kmwwqgiacsoksgcy; } $this->qayieuscsskiqacs(); $eygsasmqycagyayw = $this->miocmcoykayoyyau(); $eygsasmqycagyayw->ayeieigcckcmsikq($eygsasmqycagyayw->owygwqwawqoiusis("\142\141\143\153\x65\156\144", $eygsasmqycagyayw->get("\x62\x61\143\x6b\x65\x6e\144\56\152\x73"))->okawmmwsiuauwsiu(self::qiaqeaemuukkikmi))->ayeieigcckcmsikq($eygsasmqycagyayw->awgyqswkqywwmkye("\142\141\143\x6b\x65\x6e\x64", $eygsasmqycagyayw->get("\142\x61\x63\x6b\145\x6e\144\56\x63\x73\163"))); kmwwqgiacsoksgcy: } public function seiaiokusgysmsyq($cuakwceieagskoaa) { if (!($cuakwceieagskoaa && $this->eiykqgmgyuowgeog() > 0)) { goto akieeaeqiwugimie; } $cuakwceieagskoaa = false; akieeaeqiwugimie: return $cuakwceieagskoaa; } public function qayieuscsskiqacs() { if (!(($ucasskoyoewwmmii = $this->igyiymiwguiiqgqm()) && ($iiaumsgauuyeqksw = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()))) { goto wassyiqsqasaoiau; } foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk => $mkomwsiykqigmqca) { if ($iiaumsgauuyeqksw->exists(trailingslashit($mkomwsiykqigmqca) . $qogsmwakwacwqogk)) { goto icmsyimgycuocisu; } $oyuikeusicgqgwak = $this->weqsyyuyccsemacu($qogsmwakwacwqogk); if ($iiaumsgauuyeqksw->mkdir($mkomwsiykqigmqca) && $iiaumsgauuyeqksw->coeoweawgagkycwe($mkomwsiykqigmqca)) { goto iaockwkwaiqgeuyu; } $this->syiuacooagmooima("\x63\x6f\x6e\146\151\147", __("\103\x6f\x6e\x66\151\147\x75\162\141\164\x69\x6f\156", PR__MDL__OPTIMIZATION), $mkomwsiykqigmqca); goto oeeasouoaaoaaemm; iaockwkwaiqgeuyu: $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); foreach ($oyuikeusicgqgwak as $uusmaiomayssaecw => $uiewakwqscemywuo) { if (!is_string($uiewakwqscemywuo)) { goto mmqkuymyyycywmqu; } $oyuikeusicgqgwak[$uusmaiomayssaecw] = $yyauwyaeewsickwk->amkcmaguoecyiscg($uiewakwqscemywuo, false); mmqkuymyyycywmqu: woaoeyaowkuukkqm: } aemoyqueimayqcaw: $ewgwqamkygiqaawc = $this->iuygowkemiiwqmiw("\x63\157\156\146\x69\x67\x2e\x70\150\160", ["\143\x6f\x6e\x66\x69\x67\x73" => $oyuikeusicgqgwak]); $ewgwqamkygiqaawc = preg_replace("\100\141\x72\162\141\x79\x5c\x73\53\134\50\x40\x69", "\141\162\162\141\171\x28", $ewgwqamkygiqaawc); $ewgwqamkygiqaawc = preg_replace("\x40\141\162\x72\x61\x79\x5c\x28\134\163\53\134\51\100\151", "\x61\x72\162\141\x79\x28\x29", $ewgwqamkygiqaawc); $iiaumsgauuyeqksw->cmsiuoqwaiwceuqq($mkomwsiykqigmqca, $qogsmwakwacwqogk, $ewgwqamkygiqaawc); $this->cimaucgayqyyccoc(sprintf(__("\117\160\164\x69\155\x69\x7a\x61\164\x69\157\x6e\x20\x63\157\156\x66\151\147\x20\146\151\x6c\x65\x20\x25\x73\40\147\145\156\145\162\x61\164\145\144\40\x69\x6e\x20\45\x73", PR__MDL__OPTIMIZATION), "\74\x63\157\x64\x65\76{$qogsmwakwacwqogk}\x3c\57\143\157\x64\145\76", "\x3c\143\157\x64\145\x3e{$mkomwsiykqigmqca}\74\x2f\x63\x6f\x64\x65\76"), "\157\x70\x74\x69\155\x69\172\141\x74\151\157\156\x2d\x63\x6f\156\146\x69\x67", self::smkwuwawwaqyimcq); oeeasouoaaoaaemm: icmsyimgycuocisu: sequgigsgkqaikmq: } ugqucegcucyyayga: wassyiqsqasaoiau: } public function weqsyyuyccsemacu($qogsmwakwacwqogk) : array { $uuwwyaeymswgsgsi = $this->caokeucsksukesyo()->eiwcuqigayigimak(); $oyuikeusicgqgwak = ["\144\145\x76\x5f\155\x6f\x64\x65" => Setting::symcgieuakksimmu()->giiuwsmyumqwwiyq(self::qeuquamuuwueeiyi, false), "\x64\145\x62\x75\x67\137\x6d\x6f\144\145" => false, "\143\x6f\157\153\x69\145\x5f\x68\141\x73\150" => $uuwwyaeymswgsgsi->cmaecekuqkwmemms("\x43\117\117\113\x49\x45\x48\x41\123\x48"), "\x72\x65\152\145\143\164\x5f\143\x6f\157\x6b\151\x65\x73" => $this->mukwwwucwusmmqau(), "\154\157\x67\x67\145\144\137\x69\x6e\137\x63\x6f\x6f\153\x69\145" => $uuwwyaeymswgsgsi->cmaecekuqkwmemms("\x4c\x4f\x47\x47\105\x44\x5f\x49\116\x5f\113\x45\x59")]; return $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\x63\x6f\156\x66\x69\147\x75\x72\x61\164\151\157\156\163", $oyuikeusicgqgwak, $qogsmwakwacwqogk); } public function mukwwwucwusmmqau() : string { $guqkkoqomcqgkkgm = explode(COOKIEHASH, LOGGED_IN_COOKIE); $guqkkoqomcqgkkgm = array_map("\x70\162\145\147\x5f\x71\165\157\x74\145", $guqkkoqomcqgkkgm); $guqkkoqomcqgkkgm = implode("\56\53", $guqkkoqomcqgkkgm); $osqkgokmuiasuukg[] = $guqkkoqomcqgkkgm; $osqkgokmuiasuukg[] = "\167\160\55\x70\x6f\x73\x74\160\141\163\163\x5f"; $osqkgokmuiasuukg[] = "\x77\160\x74\157\165\143\150\137\x73\167\x69\x74\143\x68\137\164\x6f\147\147\x6c\x65"; $osqkgokmuiasuukg[] = "\143\157\155\155\145\156\164\x5f\141\x75\x74\x68\157\162\137"; $osqkgokmuiasuukg[] = "\143\157\x6d\155\x65\156\164\137\x61\165\164\x68\x6f\162\x5f\x65\155\141\x69\x6c\137"; $osqkgokmuiasuukg = (array) $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\162\x65\152\x65\143\x74\137\143\157\157\x6b\151\x65\163", $osqkgokmuiasuukg); $osqkgokmuiasuukg = array_filter($osqkgokmuiasuukg); $osqkgokmuiasuukg = array_flip(array_flip($osqkgokmuiasuukg)); return implode("\x7c", $osqkgokmuiasuukg); } }
