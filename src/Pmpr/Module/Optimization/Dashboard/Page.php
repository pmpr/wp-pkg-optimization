<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66d2182256c51             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Dashboard; use Pmpr\Common\Foundation\Backend\Page as BaseClass; use Pmpr\Common\Foundation\FormGenerator\Backend\Component\Panel; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Optimizer\Cache\HTML\Preload\Setting as PreloadSetting; use Pmpr\Module\Optimization\Setting\Setting; use Pmpr\Module\Optimization\Traits\SubscriptionEngineTrait; use Pmpr\Module\Optimization\Subscription\Page as SubscriptionPage; class Page extends BaseClass { use SubscriptionEngineTrait; const wwgqqgayyagycysu = "\x70\x75\x72\x67\145\137\143\141\143\x68\x65"; const wwkyymgusywcykuk = "\x70\162\145\x6c\157\141\144\x5f\x70\141\x67\x65\x73"; public function qiccuiwooiquycsg() { $this->eukmukacucooequu([Constants::kekcgssiyagioocg => 1, Constants::wuowaiyouwecckaw => "\157\160\164\x5f\144\x61\163\x68\142\x6f\141\162\x64", Constants::ysgwugcqguggmigq => __("\x44\141\x73\150\x62\x6f\141\162\144", PR__MDL__OPTIMIZATION), Constants::qoquaeuooeycomks => $this->akuociswqmoigkas()]); } public function enqueue() { $gaumukogkkgkiiuo = $this->miocmcoykayoyyau(); $gaumukogkkgkiiuo->ayeieigcckcmsikq($gaumukogkkgkiiuo->owygwqwawqoiusis("\144\x61\163\150\x62\157\x61\x72\144", $gaumukogkkgkiiuo->get("\144\141\163\x68\x62\x6f\141\162\x64\56\x6a\163"))->okawmmwsiuauwsiu(Constants::qiaqeaemuukkikmi))->ikqyiskqaaymscgw("\144\x61\x73\x68\x62\157\x61\162\x64", ["\141\152\x61\170" => Ajax::myikkigscysoykgy]); SubscriptionPage::symcgieuakksimmu()->enqueue(); } public function rsysgcucogueguuk() : array { $qookweymeqawmcwo = parent::rsysgcucogueguuk(); $ykquycoiqesuckco = Setting::symcgieuakksimmu(); $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $eisusiekaciioueg = $ykquycoiqesuckco->giiuwsmyumqwwiyq(Constants::qeuquamuuwueeiyi, false); $mwuweekukywuqgsm = __("\x50\x75\x72\x67\145\40\x43\x61\x63\x68\x65", PR__MDL__OPTIMIZATION); $qyaaumygmwoyoeec = Constants::uucoeqmmykkwsmqc !== $ykquycoiqesuckco->giiuwsmyumqwwiyq(PreloadSetting::gmwikseimeesqmci, Constants::uucoeqmmykkwsmqc); $qyusceuomywuquqc = $eisusiekaciioueg ? __("\104\151\x73\141\x62\x6c\145\x20\x44\x65\166\145\154\x6f\160\155\145\x6e\164\40\115\x6f\x64\x65", PR__MDL__OPTIMIZATION) : __("\x45\x6e\x61\x62\154\145\x20\104\145\x76\x65\154\157\160\x6d\145\x6e\x74\40\115\157\144\x65", PR__MDL__OPTIMIZATION); $mgsegoqmgegikkig = ["\x73\171\156\x63\137\x64\x61\x74\141" => $this->cqscwmqsgomkogoq()->kscwewuywiakosos(), self::wwgqqgayyagycysu => $uuyucgkyusckoaeq->igiawkoqiogocsau([Constants::squoamkioomemiyi => Constants::wyaqwomqwwaoiwas, Constants::qescuiwgsyuikume => $mwuweekukywuqgsm, Constants::ssmskyqgcmeiayco => __("\x41\x72\x65\x20\171\x6f\165\x20\x73\x75\x72\x65\40\x61\x62\157\x75\164\x20\160\x75\162\147\145\40\143\x61\x63\150\145\x3f", PR__MDL__OPTIMIZATION), Constants::eoskkkieowogacws => $qyaaumygmwoyoeec ? $uuyucgkyusckoaeq->ueyuicgwuyuiioie(__("\120\162\x65\x6c\157\x61\144\40\151\x73\40\145\x6e\141\142\154\145\40\141\156\144\40\141\x66\164\145\162\x20\160\x75\162\147\x65\40\143\141\x63\150\x65\54\x20\162\x65\147\x65\x6e\145\162\x61\x74\x65\x20\143\141\143\150\145\40\146\151\x6c\145\40\x73\x74\x61\162\x74\145\x64\x20\x61\165\x74\x6f\155\x61\x74\151\x63\141\x6c\x6c\x79\x2e", PR__MDL__OPTIMIZATION), true) : '', Constants::kekekeusyqkouowm => [Constants::mosycwwoqguicaeo, ["\x63\x6c\141\x73\163" => "\157\x70\x74\55\160\165\162\147\x65\x2d\141\154\x6c\x2d\x63\x61\x63\150\x65\x20\160\162\55\142\x74\x6e\x20\x62\164\156\x2d\x64\x61\x6e\147\145\162", Constants::qescuiwgsyuikume => $mwuweekukywuqgsm]]], $mwuweekukywuqgsm, ["\143\154\x61\x73\163" => "\167\x2d\61\60\x30\x20\x70\x72\x2d\x62\164\x6e\x20\142\x74\156\x2d\x61\143\164\x69\x6f\156\40\142\x74\156\x2d\x6f\165\x74\154\151\x6e\x65\55\x70\x72\x69\155\141\x72\x79"]), Constants::qeuquamuuwueeiyi => $uuyucgkyusckoaeq->igiawkoqiogocsau([Constants::squoamkioomemiyi => $eisusiekaciioueg ? Constants::ckcawaoawwioqecq : Constants::ecioqysekgaasegg, Constants::qescuiwgsyuikume => $qyusceuomywuquqc, Constants::ssmskyqgcmeiayco => $eisusiekaciioueg ? __("\x44\x69\x73\x61\142\x6c\x69\156\x67\40\x44\145\x76\145\x6c\157\x70\x6d\x65\x6e\x74\40\115\x6f\x64\x65\x20\164\165\162\x6e\163\x20\157\x6e\x20\143\141\x63\x68\x69\156\147\40\x66\x6f\162\40\x79\157\165\x72\40\x73\151\x74\145\x2e\40\101\162\x65\x20\x79\157\165\40\x73\165\x72\x65\x20\x79\157\165\x20\167\141\156\x74\x20\x74\157\x20\x63\157\156\x74\x69\156\x75\x65\77", PR__MDL__OPTIMIZATION) : __("\x45\156\x61\x62\x6c\151\156\x67\x20\104\145\x76\145\x6c\157\x70\155\x65\x6e\x74\x20\115\157\144\145\x20\x74\x75\162\x6e\x73\40\x6f\146\146\40\143\141\x63\x68\x69\x6e\x67\x20\x66\x6f\x72\40\171\x6f\165\x72\x20\163\151\164\145\56\x20\x41\162\145\40\x79\157\165\40\x73\165\162\145\40\x79\x6f\165\x20\x77\141\156\164\x20\x74\157\x20\143\x6f\x6e\164\x69\156\165\x65\x3f", PR__MDL__OPTIMIZATION), Constants::kekekeusyqkouowm => [Constants::mosycwwoqguicaeo, ["\x63\154\141\163\163" => "\157\x70\164\x2d\143\x68\x61\156\147\x65\x2d\144\x65\166\55\x6d\157\x64\x65\40\x70\162\x2d\142\x74\x6e\40\142\164\156\55" . ($eisusiekaciioueg ? Constants::ckcawaoawwioqecq : Constants::ecioqysekgaasegg), Constants::qescuiwgsyuikume => $qyusceuomywuquqc, "\144\x61\164\x61\55\x64\x65\x76\x2d\x6d\x6f\x64\x65" => $eisusiekaciioueg ? Constants::OFF : Constants::ON]]], __("\104\145\x76\x65\154\157\160\155\x65\x6e\164\40\115\157\144\x65", PR__MDL__OPTIMIZATION), ["\x63\154\x61\163\x73" => "\x77\x2d\61\x30\x30\x20\160\162\55\x62\x74\156\40\x62\164\156\55\x61\143\164\151\x6f\156\x20\142\164\x6e\x2d\157\165\164\x6c\x69\156\145\x2d\x70\162\x69\155\x61\x72\171"])]; if (!$qyaaumygmwoyoeec) { goto qoacckkkwsqkokye; } qoacckkkwsqkokye: $skeuoeoiuwwyqwou = Panel::symcgieuakksimmu("\144\x61\163\150\x62\x6f\141\x72\x64\137\162\x65\x70\157\162\x74\163"); $skeuoeoiuwwyqwou->ogimmkwaymekmoky($uuyucgkyusckoaeq->mkcwgaeaaweamyyg("\160\x75\162\x63\x68\x61\x73\145\x73")->uguqimqkesuguqau()->cooeyaumiimygakm("\160\55\60\x20\160\164\55\x32")->gswweykyogmsyawy(__("\120\x75\162\x63\150\x61\x73\145\x20\x52\145\160\157\162\x74", PR__MDL__OPTIMIZATION))->oguessuismosauuu([$this, "\171\141\x6f\163\147\143\163\157\x69\x77\155\x79\145\157\x73\x71"]))->ogimmkwaymekmoky($uuyucgkyusckoaeq->mkcwgaeaaweamyyg("\x75\163\141\147\x65\163")->uguqimqkesuguqau()->cooeyaumiimygakm("\x70\x2d\60\40\x70\164\55\62")->gswweykyogmsyawy(__("\125\x73\141\x67\145\40\122\145\x70\157\162\164", PR__MDL__OPTIMIZATION))->oguessuismosauuu([$this, "\x64\153\143\141\x75\x6d\x6d\163\x63\x6b\x75\x6b\x6f\x67\143\155"]))->mkiqamegmeucqeyy(); $qookweymeqawmcwo[Constants::imiuwqeccyaimyaw] = ["\160\141\156\x65\154" => $skeuoeoiuwwyqwou->render(false, ["\x68\141\163\137\167\162\141\x70" => false, "\x76\145\162\164\x69\x63\141\x6c" => false]), Constants::qescuiwgsyuikume => __("\120\165\162\143\x68\141\x73\145\x20\x61\x6e\x64\x20\x43\x6f\156\x73\x75\155\x70\164\x69\x6f\x6e\40\122\x65\x70\x6f\162\x74", PR__MDL__OPTIMIZATION)]; $qookweymeqawmcwo["\161\x75\151\143\x6b\137\x61\x63\164\x69\x6f\156\x73"] = $mgsegoqmgegikkig; $qookweymeqawmcwo["\161\x75\151\x63\153\137\x61\x63\164\151\x6f\156\x5f\164\x69\x74\x6c\x65"] = __("\121\165\151\143\x6b\40\x41\143\x74\151\x6f\x6e\163", PR__MDL__OPTIMIZATION); $qookweymeqawmcwo[Constants::eoigaocgcaekssuw] = $this->cqscwmqsgomkogoq()->samoqkkuimogeyew()[Constants::eoigaocgcaekssuw] ?? []; return $qookweymeqawmcwo; } public function yaosgcsoiwmyeosq() : string { return $this->cqscwmqsgomkogoq()->aaasykywsggkskse(true); } public function dkcaummsckukogcm() : string { return $this->cqscwmqsgomkogoq()->aksiycwcekcecuec(true); } }
