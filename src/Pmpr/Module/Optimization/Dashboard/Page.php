<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             669ada83915b0             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Dashboard; use Pmpr\Common\Foundation\Backend\Page as BaseClass; use Pmpr\Common\Foundation\FormGenerator\Backend\Component\Panel; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\Optimization\Interfaces\CommonInterface; use Pmpr\Module\Optimization\Optimizer\Cache\HTML\Preload\Setting as PreloadSetting; use Pmpr\Module\Optimization\Setting\Setting; use Pmpr\Module\Optimization\Subscription\Ajax; use Pmpr\Module\Optimization\Traits\SubscriptionEngineTrait; use Pmpr\Module\Optimization\Subscription\Page as SubscriptionPage; class Page extends BaseClass implements CommonInterface { use SubscriptionEngineTrait; const wwgqqgayyagycysu = "\x70\x75\162\147\145\x5f\x63\x61\x63\x68\145"; const wwkyymgusywcykuk = "\x70\x72\x65\x6c\x6f\141\x64\x5f\160\141\x67\x65\x73"; public function qiccuiwooiquycsg() { $this->eukmukacucooequu([self::kekcgssiyagioocg => 0, self::wuowaiyouwecckaw => "\157\160\x74\137\144\x61\x73\150\x62\157\141\162\x64", self::ysgwugcqguggmigq => __("\104\141\163\150\142\157\x61\162\144", PR__MDL__OPTIMIZATION), self::qoquaeuooeycomks => $this->akuociswqmoigkas()]); } public function enqueue() { $gaumukogkkgkiiuo = $this->miocmcoykayoyyau(); $gaumukogkkgkiiuo->ayeieigcckcmsikq($gaumukogkkgkiiuo->owygwqwawqoiusis("\x64\141\x73\150\x62\157\x61\x72\x64", $gaumukogkkgkiiuo->get("\144\141\x73\x68\x62\157\141\x72\144\x2e\152\x73"))->okawmmwsiuauwsiu(self::qiaqeaemuukkikmi))->ikqyiskqaaymscgw("\x64\141\x73\150\142\157\141\162\x64", ["\x61\x6a\141\x78" => Ajax::myikkigscysoykgy]); SubscriptionPage::symcgieuakksimmu()->enqueue(); } public function rsysgcucogueguuk() : array { $qookweymeqawmcwo = parent::rsysgcucogueguuk(); $ykquycoiqesuckco = Setting::symcgieuakksimmu(); $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $eisusiekaciioueg = $ykquycoiqesuckco->giiuwsmyumqwwiyq(self::qeuquamuuwueeiyi, false); $mwuweekukywuqgsm = __("\120\x75\162\x67\145\x20\103\141\x63\150\145", PR__MDL__OPTIMIZATION); $qyaaumygmwoyoeec = self::uucoeqmmykkwsmqc !== $ykquycoiqesuckco->giiuwsmyumqwwiyq(PreloadSetting::gmwikseimeesqmci, self::uucoeqmmykkwsmqc); $qyusceuomywuquqc = $eisusiekaciioueg ? __("\104\151\x73\141\142\x6c\145\40\104\x65\166\145\x6c\157\160\155\x65\x6e\x74\x20\115\157\144\x65", PR__MDL__OPTIMIZATION) : __("\105\x6e\x61\x62\154\145\40\104\x65\166\x65\x6c\157\160\155\145\156\164\x20\115\x6f\x64\x65", PR__MDL__OPTIMIZATION); $mgsegoqmgegikkig = ["\163\171\156\x63\x5f\144\141\x74\141" => $this->cqscwmqsgomkogoq()->kscwewuywiakosos(), self::wwgqqgayyagycysu => $uuyucgkyusckoaeq->igiawkoqiogocsau([self::squoamkioomemiyi => self::wyaqwomqwwaoiwas, self::qescuiwgsyuikume => $mwuweekukywuqgsm, self::ssmskyqgcmeiayco => __("\101\162\145\40\x79\x6f\165\40\x73\165\x72\145\x20\x61\x62\157\x75\164\x20\160\165\162\x67\145\40\143\x61\x63\150\x65\x3f", PR__MDL__OPTIMIZATION), self::eoskkkieowogacws => $qyaaumygmwoyoeec ? $uuyucgkyusckoaeq->ueyuicgwuyuiioie(__("\120\x72\x65\x6c\157\141\x64\x20\x69\163\40\x65\156\x61\142\x6c\x65\40\141\x6e\x64\40\141\146\x74\145\x72\x20\x70\165\162\x67\x65\x20\143\141\x63\x68\x65\54\40\x72\x65\147\145\x6e\145\x72\141\x74\145\40\143\141\x63\x68\145\x20\146\x69\154\145\40\163\x74\141\162\164\145\x64\x20\x61\x75\164\157\155\x61\164\151\x63\x61\154\154\x79\x2e", PR__MDL__OPTIMIZATION), true) : '', self::kekekeusyqkouowm => [self::mosycwwoqguicaeo, ["\143\154\141\163\x73" => "\x6f\x70\x74\x2d\x70\x75\162\147\x65\x2d\x61\154\154\55\143\141\143\x68\145\x20\x70\x72\55\142\164\156\x20\x62\x74\156\x2d\x64\141\x6e\147\145\162", self::qescuiwgsyuikume => $mwuweekukywuqgsm]]], $mwuweekukywuqgsm, ["\x63\x6c\x61\x73\x73" => "\x77\x2d\x31\60\60\40\160\x72\55\x62\164\156\x20\142\164\156\x2d\141\x63\x74\x69\x6f\156\40\x62\x74\x6e\55\157\x75\164\154\x69\x6e\145\x2d\x70\162\151\155\141\x72\x79"]), self::qeuquamuuwueeiyi => $uuyucgkyusckoaeq->igiawkoqiogocsau([self::squoamkioomemiyi => $eisusiekaciioueg ? self::ckcawaoawwioqecq : self::ecioqysekgaasegg, self::qescuiwgsyuikume => $qyusceuomywuquqc, self::ssmskyqgcmeiayco => $eisusiekaciioueg ? __("\x44\151\163\x61\x62\154\x69\x6e\x67\x20\x44\145\x76\x65\154\157\x70\x6d\145\156\164\x20\x4d\157\x64\145\x20\164\x75\x72\156\x73\40\157\156\40\143\x61\x63\x68\x69\x6e\147\x20\x66\x6f\162\40\171\x6f\x75\162\x20\x73\151\x74\145\x2e\40\x41\x72\x65\40\x79\x6f\x75\x20\x73\165\x72\145\40\x79\157\165\40\x77\141\156\x74\x20\164\157\40\143\x6f\156\164\x69\156\x75\x65\77", PR__MDL__OPTIMIZATION) : __("\105\156\x61\142\x6c\x69\156\147\40\x44\145\166\145\154\x6f\160\x6d\145\156\x74\40\115\157\144\x65\40\164\x75\162\x6e\x73\40\x6f\x66\146\x20\x63\x61\x63\150\x69\x6e\x67\x20\x66\157\x72\40\171\x6f\165\162\40\163\151\x74\145\56\40\101\x72\145\40\171\157\165\x20\163\165\x72\x65\40\171\x6f\165\x20\x77\141\x6e\x74\40\x74\x6f\40\x63\157\156\x74\x69\x6e\165\x65\x3f", PR__MDL__OPTIMIZATION), self::kekekeusyqkouowm => [self::mosycwwoqguicaeo, ["\x63\x6c\141\x73\x73" => "\157\160\164\55\x63\x68\x61\x6e\147\145\55\144\x65\x76\x2d\x6d\x6f\144\x65\x20\x70\162\55\142\x74\x6e\x20\x62\x74\x6e\55" . ($eisusiekaciioueg ? self::ckcawaoawwioqecq : self::ecioqysekgaasegg), self::qescuiwgsyuikume => $qyusceuomywuquqc, "\x64\x61\164\x61\x2d\144\x65\x76\55\155\x6f\144\145" => $eisusiekaciioueg ? self::OFF : self::ON]]], __("\x44\145\x76\145\x6c\x6f\160\155\145\x6e\x74\x20\x4d\157\144\145", PR__MDL__OPTIMIZATION), ["\x63\154\x61\x73\163" => "\x77\55\61\60\60\x20\160\x72\x2d\x62\164\156\x20\142\164\156\55\141\143\164\151\157\x6e\40\142\x74\156\x2d\157\x75\x74\154\x69\156\145\55\160\x72\x69\155\x61\x72\x79"])]; if (!$qyaaumygmwoyoeec) { goto iwekmyyccgiyuecc; } iwekmyyccgiyuecc: $skeuoeoiuwwyqwou = Panel::symcgieuakksimmu("\144\141\163\150\x62\157\x61\x72\144\137\162\x65\160\x6f\x72\x74\163"); $skeuoeoiuwwyqwou->ogimmkwaymekmoky($uuyucgkyusckoaeq->mkcwgaeaaweamyyg("\x70\x75\x72\143\x68\x61\163\145\x73")->uguqimqkesuguqau()->cooeyaumiimygakm("\x70\x2d\x30\x20\x70\164\x2d\x32")->gswweykyogmsyawy(__("\x50\165\x72\143\150\141\163\145\40\x52\x65\x70\x6f\162\x74", PR__MDL__OPTIMIZATION))->oguessuismosauuu([$this, "\171\141\157\163\x67\x63\163\157\x69\x77\155\x79\x65\x6f\x73\x71"]))->ogimmkwaymekmoky($uuyucgkyusckoaeq->mkcwgaeaaweamyyg("\165\x73\x61\147\x65\x73")->uguqimqkesuguqau()->cooeyaumiimygakm("\x70\55\x30\40\x70\164\x2d\62")->gswweykyogmsyawy(__("\125\163\141\147\145\x20\122\x65\x70\157\x72\x74", PR__MDL__OPTIMIZATION))->oguessuismosauuu([$this, "\x64\x6b\143\141\165\x6d\x6d\163\x63\153\165\x6b\157\147\x63\x6d"]))->mkiqamegmeucqeyy(); $qookweymeqawmcwo[self::imiuwqeccyaimyaw] = ["\160\x61\156\145\154" => $skeuoeoiuwwyqwou->render(false, ["\x68\141\163\137\x77\162\x61\160" => false, "\166\x65\x72\x74\x69\143\141\x6c" => false]), self::qescuiwgsyuikume => __("\120\x75\x72\143\x68\141\163\x65\40\x61\x6e\144\x20\103\x6f\x6e\x73\x75\x6d\160\x74\x69\x6f\x6e\x20\122\x65\160\x6f\162\x74", PR__MDL__OPTIMIZATION)]; $qookweymeqawmcwo["\161\165\x69\143\x6b\137\141\143\164\x69\157\x6e\x73"] = $mgsegoqmgegikkig; $qookweymeqawmcwo["\x71\165\x69\x63\x6b\137\x61\x63\164\x69\x6f\156\137\164\151\x74\154\145"] = __("\121\x75\151\x63\x6b\40\x41\x63\x74\x69\157\156\x73", PR__MDL__OPTIMIZATION); $qookweymeqawmcwo[self::eoigaocgcaekssuw] = $this->cqscwmqsgomkogoq()->samoqkkuimogeyew()[self::eoigaocgcaekssuw] ?? []; return $qookweymeqawmcwo; } public function yaosgcsoiwmyeosq() : string { return $this->cqscwmqsgomkogoq()->aaasykywsggkskse(true); } public function dkcaummsckukogcm() : string { return $this->cqscwmqsgomkogoq()->aksiycwcekcecuec(true); } }
