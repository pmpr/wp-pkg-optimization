<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c623ad3a21f             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Cloudflare; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\Decorator\DecoratorUser; use Pmpr\Common\Foundation\Manipulate\ManipulateAjax; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Package\Optimization\Manipulate\ManipulateFile; use Pmpr\Package\Optimization\Notice; class Cloudflare extends Common { const yuwieqykuwacwmuw = self::wowuwuigyoceikas . "\x5f\x63\x66\x5f\x63\x6f\x6f\x6b\151\145"; public function __construct() { if (!$this->cyowaaeywssoooeo()) { goto makomwwyomweyamm; } parent::__construct(); $this->iemaakgqgqosiecm(); makomwwyomweyamm: } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\151\x6e\x69\x74", [$this, "\x69\156\151\x74"])->qcsmikeggeemccuu("\x61\x64\x6d\x69\156\137\151\x6e\x69\164", [$this, "\171\145\171\151\x67\165\x79\x65\x67\155\155\171\165\x73\x65\141"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\x6f\160\x74\x5f\x62\145\x66\157\162\145\137\163\164\141\x72\x74\137\160\x72\x65\154\x6f\x61\144"), [$this, "\165\x79\163\x65\x63\x71\153\141\141\155\x69\153\171\x69\x6d\x65"]); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x6f\160\x74\x5f\160\162\145\x6c\x6f\141\144\151\x6e\x67\x5f\164\141\x73\153\137\157\x70\x74\x69\x6f\x6e\163"), [$this, "\x79\147\x73\x61\157\x77\x69\x77\163\163\153\x79\147\153\x75\x79"]); parent::kgquecmsgcouyaya(); } public function cyowaaeywssoooeo() : bool { $ksaameoqigiaoigg = false; if ($skacuygeqykiwiwy = Manipulate::cmaecekuqkwmemms("\120\x52\x5f\137\103\101\103\110\105\137\137\120\101\124\x48")) { goto oqwcmgwimeisusoe; } Notice::ymqcyaqqcyuicwqu("\157\x70\164\151\155\151\x7a\x61\164\x69\x6f\156\x2d\x63\x6c\x6f\165\x64\146\154\141\x72\x65\x2d\x70\x61\164\x68", __("\117\160\x74\151\x6d\x69\172\141\x74\x69\x6f\156\x20\103\x6c\x6f\165\144\x66\x6c\141\162\x65\x20\120\141\x74\150", PR__PKG__OPTIMIZATION), $skacuygeqykiwiwy); goto acesyuieuuqwgkwm; oqwcmgwimeisusoe: $ksaameoqigiaoigg = ManipulateFile::koymmiyegyskqgck("\117\120\x54\x49\115\x49\132\101\124\111\117\116\137\103\x4c\x4f\125\104\x46\x4c\x41\122\x45\x5f\120\101\x54\x48", "{$skacuygeqykiwiwy}\x2f\143\x6c\x6f\x75\144\x66\x6c\x61\x72\x65"); acesyuieuuqwgkwm: return $ksaameoqigiaoigg; } public function iemaakgqgqosiecm() { Purge::symcgieuakksimmu(); Redirect::symcgieuakksimmu(); Controller::symcgieuakksimmu(); if (ManipulateAjax::mcgoysmkqsqooceq()) { goto qiaaqkymeuuueoqk; } if (!is_admin()) { goto asaowisseacciyia; } Setting::symcgieuakksimmu(); asaowisseacciyia: goto ugswokwmkumcmigc; qiaaqkymeuuueoqk: Ajax::symcgieuakksimmu(); ugswokwmkumcmigc: } public function init() { $seiwgiesegcmssam = DecoratorUser::ksgkoukcicwkkaum(); $eygsasmqycagyayw = $this->miocmcoykayoyyau(); if (!$seiwgiesegcmssam) { goto gwiaimosqoiquwkc; } $wcyykoegqiuckcku = $eygsasmqycagyayw->owygwqwawqoiusis("\x62\x75\163\164\x65\162", false)->awagieqcmmwkgwgs($eygsasmqycagyayw->souwykwwmyygqyqi("\x62\165\163\x74\145\x72\x2e\x6a\x73"))->yiuoscqaekcgiyuy("\144\141\x74\141\x2d\x63\146\141\x73\x79\x6e\143", 1); $eygsasmqycagyayw->oeoquuwkoywiuesy($wcyykoegqiuckcku)->ayeieigcckcmsikq($wcyykoegqiuckcku); gwiaimosqoiquwkc: if (is_admin()) { goto owgakkqgckqcegoi; } $eygsasmqycagyayw->ieayqiyiuuguowyq("\143\x6c\157\x75\x64\x66\154\141\162\x65", ["\x62\x75\x73\x74\x65\x72" => self::yyeseoqwcecweeii, "\x73\145\154\145\143\x74\157\162" => "\x61"]); goto cigesysuauaiccms; owgakkqgckqcegoi: $eygsasmqycagyayw->ikqyiskqaaymscgw("\x63\154\157\x75\144\x66\154\x61\162\x65", ["\141\152\141\x78" => Ajax::myikkigscysoykgy, "\x73\x65\154\x65\143\164\157\162" => implode("\x2c\x20", ["\x23\x65\144\x69\x74\x6f\162\40\56\145\144\151\x74\157\x72\x2d\160\157\163\164\55\x70\x65\162\155\x61\x6c\151\x6e\153\137\137\154\151\156\x6b", "\43\x77\160\x2d\141\144\x6d\x69\156\55\x62\141\x72\x2d\155\x79\x2d\163\x69\x74\145\x73\55\x6c\151\163\164\40\141", "\x23\145\144\x69\164\157\x72\40\x2e\x65\x64\x69\164\x6f\162\55\160\157\x73\164\55\160\162\x65\166\x69\x65\x77", "\x23\167\x70\x2d\x61\144\155\151\156\55\142\141\x72\55\x73\x69\x74\145\x2d\x6e\x61\155\x65\40\141", "\x23\x77\160\x2d\141\x64\155\x69\156\x2d\142\141\162\x2d\x76\151\x65\167\x2d\x73\x69\x74\145\x20\x61", "\x23\x73\141\155\x70\x6c\145\55\160\145\162\155\x61\x6c\151\x6e\153\x20\141", "\43\167\160\x2d\141\144\155\151\156\55\x62\x61\162\x2d\x76\x69\145\167\40\141", "\x23\145\144\x69\x74\x6f\x72\40\56\151\163\x2d\x6c\151\156\153", "\56\162\157\167\55\141\x63\x74\151\x6f\156\x73\x20\x61", "\x23\x6d\x65\163\163\x61\x67\x65\x20\x61", "\x2e\x70\162\145\x76\x69\145\x77"]), "\x62\x75\x73\x74\x65\162" => self::yyeseoqwcecweeii, "\x70\x75\162\x67\x65\137\160\x6f\163\x74\x5f\x63\141\x63\150\145" => ["\x74\x69\164\x6c\145" => __("\120\165\162\147\x65\40\x50\157\x73\x74\40\x43\141\143\150\x65", PR__PKG__OPTIMIZATION)]]); cigesysuauaiccms: } public function yeyiguyegmmyusea() { if (ManipulateAjax::mcgoysmkqsqooceq()) { goto gygqgauaceiuawkq; } if (!$this->kmuweyayaqoeqiyw()->eaiyegoagkgeowae()) { goto ayamomygygmgwgkg; } $eggwswqquakgowom = $this->yayksoygskcuaygq(); $yqimccamkgmmuuyg = Controller::symcgieuakksimmu()->auamgqiwisysomsa(); if (!(!is_array($eggwswqquakgowom) || !$eggwswqquakgowom || count($eggwswqquakgowom) > 1)) { goto qqmmycmsoqegcqqw; } if ($eggwswqquakgowom = $yqimccamkgmmuuyg->yayksoygskcuaygq($iswcokucwmiosiaq)) { goto kwoyiysciqumswcy; } if (!$iswcokucwmiosiaq) { goto ooysmgyeqoiesgqm; } Notice::iswcokucwmiosiaq($iswcokucwmiosiaq, "\x6f\x70\x74\x2d\x63\146\x2d\147\x65\x74\x2d\x7a\157\156\x65\x2d\x69\144\55\154\x69\x73\x74"); ooysmgyeqoiesgqm: goto aaogeemgkogagkai; kwoyiysciqumswcy: $wegekcwgakqeqsmq = $this->weysguygiseoukqw(Setting::qeykiyegimcyucgk, Setting::fsekswokoseswcqm); $qeqooyuoiasweuck = $this->aoqykkmokwseeeie(); if (!$qeqooyuoiasweuck) { goto wmaeicoyyciuaiuy; } $ogookoeuwuoiaaac = Manipulate::goewgasukwccacim(); if ($wegekcwgakqeqsmq == Setting::eywauigiwgqckygk) { goto wwswmaewcaisauei; } if (!in_array($ogookoeuwuoiaaac, $eggwswqquakgowom)) { goto kkewoqqowugagwoy; } $cgaiqcoosmmymqqm = ManipulateArray::get(array_flip($eggwswqquakgowom), $ogookoeuwuoiaaac); if (!$cgaiqcoosmmymqqm) { goto gcskyqewysqaceeg; } $qeqooyuoiasweuck[Setting::kymimiuqukascgmw] = $cgaiqcoosmmymqqm; $qeqooyuoiasweuck[Setting::aygoyiggsequgiua] = "\x6f\156"; $qeqooyuoiasweuck[Setting::suwymqqyesquiqqc] = [$cgaiqcoosmmymqqm => $ogookoeuwuoiaaac]; gcskyqewysqaceeg: kkewoqqowugagwoy: goto wsemeeocquawyauo; wwswmaewcaisauei: $iiqoeuwqmkiyigwm = $this->weysguygiseoukqw(Setting::kgigwyeaumymgaca); if (!$iiqoeuwqmkiyigwm) { goto qumkwsqqocooyuoq; } $qeqooyuoiasweuck[Setting::kymimiuqukascgmw] = ManipulateArray::get($eggwswqquakgowom, $iiqoeuwqmkiyigwm); $qeqooyuoiasweuck[Setting::aygoyiggsequgiua] = "\x6f\x6e"; qumkwsqqocooyuoq: wsemeeocquawyauo: if (!(isset($qeqooyuoiasweuck[Setting::aygoyiggsequgiua]) && $qeqooyuoiasweuck[Setting::aygoyiggsequgiua] == "\157\156")) { goto ocgkwqqmgasuoies; } $yqimccamkgmmuuyg->eigwgcuaamoqkuyw($iswcokucwmiosiaq); ocgkwqqmgasuoies: $this->kmuweyayaqoeqiyw()::oqyuwccsuskiwgew($qeqooyuoiasweuck); wmaeicoyyciuaiuy: aaogeemgkogagkai: qqmmycmsoqegcqqw: if ($this->yoaiuuuwwssswyqa()) { goto ukogwqiuuuakkawy; } if ($wquasmyyscuqaqom = $yqimccamkgmmuuyg->ymkgoumkoycwwmmq($iswcokucwmiosiaq)) { goto oiiqqgyqmggyiums; } if (!$iswcokucwmiosiaq) { goto isqwwmikecauwyuc; } Notice::iswcokucwmiosiaq($iswcokucwmiosiaq, "\x6f\160\x74\x2d\x63\x66\x2d\147\x65\x74\x2d\172\157\x6e\x65\x2d\151\144\55\154\151\163\164"); isqwwmikecauwyuc: $this->oaumimwssciwumys("\x43\x61\x6e\40\x6e\157\164\x20\147\x65\x74\40\x64\145\166\145\x6c\x6f\160\155\x65\156\x74\x20\x6d\157\144\x65\40\x64\x61\x74\x61\56\40{$iswcokucwmiosiaq}"); goto magymcqykamwqigw; oiiqqgyqmggyiums: $this->awwuyycwuuuggkqy($wquasmyyscuqaqom); magymcqykamwqigw: ukogwqiuuuakkawy: if (!$this->yusooeuwemoqcwmm()) { goto oymyqcoekqyuiguq; } $gyamuieuowceasyo = $this->weysguygiseoukqw(Setting::scikeyuygqwyiisg); $wesqeosimkuoiogg = $this->weysguygiseoukqw(Setting::myguioueuiaacsko); if (!(!$gyamuieuowceasyo || !$wesqeosimkuoiogg)) { goto gicmaqmuscawegie; } $yqimccamkgmmuuyg->eigwgcuaamoqkuyw($iswcokucwmiosiaq, true); gicmaqmuscawegie: oymyqcoekqyuiguq: ayamomygygmgwgkg: gygqgauaceiuawkq: } public function uysecqkaamikyime() { $yqimccamkgmmuuyg = API::symcgieuakksimmu(); $aecgggeoymywyumm = $yqimccamkgmmuuyg->ukuooogwaoiwagqs(); if (!$aecgggeoymywyumm) { goto ucksaiwquekagyqe; } DecoratorOption::update(self::yuwieqykuwacwmuw, $aecgggeoymywyumm); ucksaiwquekagyqe: } public function ygsaowiwsskygkuy($qiouiwasaauyaaue) : array { $aecgggeoymywyumm = DecoratorOption::get(self::yuwieqykuwacwmuw); if (!$aecgggeoymywyumm) { goto asqqqqakiagymemk; } $ymqmyyeuycgmigyo = ManipulateArray::get($aecgggeoymywyumm, "\x4e\141\155\145"); $eqgoocgaqwqcimie = ManipulateArray::get($aecgggeoymywyumm, "\126\x61\154\165\x65"); if (!($ymqmyyeuycgmigyo && $eqgoocgaqwqcimie)) { goto iyeswoaqkaeggiiy; } $qiouiwasaauyaaue["\150\x65\141\x64\x65\162\x73"]["\103\x6f\157\x6b\151\x65"] = "{$ymqmyyeuycgmigyo}\75{$eqgoocgaqwqcimie}"; iyeswoaqkaeggiiy: asqqqqakiagymemk: return $qiouiwasaauyaaue; } }
