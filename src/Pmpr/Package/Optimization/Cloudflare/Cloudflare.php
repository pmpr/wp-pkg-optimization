<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c6df5c89942             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Cloudflare; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\Decorator\DecoratorUser; use Pmpr\Common\Foundation\Manipulate\ManipulateAjax; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Package\Optimization\Manipulate\ManipulateFile; use Pmpr\Package\Optimization\Notice; class Cloudflare extends Common { const yuwieqykuwacwmuw = self::wowuwuigyoceikas . "\137\143\x66\137\x63\x6f\157\x6b\151\145"; public function __construct() { if (!$this->cyowaaeywssoooeo()) { goto cigesysuauaiccms; } parent::__construct(); $this->iemaakgqgqosiecm(); cigesysuauaiccms: } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\151\x6e\151\164", [$this, "\151\156\x69\x74"])->qcsmikeggeemccuu("\x61\x64\x6d\151\x6e\x5f\x69\x6e\151\164", [$this, "\x79\x65\171\151\147\x75\x79\x65\x67\x6d\x6d\x79\x75\163\145\141"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\157\x70\x74\x5f\x62\x65\x66\x6f\162\145\137\163\x74\x61\162\x74\x5f\x70\x72\145\154\157\141\x64"), [$this, "\165\x79\x73\145\x63\x71\x6b\141\141\155\x69\153\x79\151\x6d\x65"]); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x6f\160\164\x5f\x70\162\x65\154\x6f\141\144\151\x6e\147\137\x74\141\x73\153\137\157\160\x74\151\x6f\156\163"), [$this, "\x79\x67\163\141\x6f\167\151\167\163\x73\x6b\171\x67\x6b\165\x79"]); parent::kgquecmsgcouyaya(); } public function cyowaaeywssoooeo() : bool { $ksaameoqigiaoigg = false; if ($skacuygeqykiwiwy = Manipulate::cmaecekuqkwmemms("\x50\x52\137\137\103\x41\x43\110\105\x5f\137\x50\x41\124\x48")) { goto qumkwsqqocooyuoq; } Notice::ymqcyaqqcyuicwqu("\157\160\x74\151\155\151\172\x61\x74\151\157\x6e\x2d\143\154\x6f\x75\x64\x66\154\x61\162\145\55\x70\x61\164\150", __("\117\x70\x74\151\x6d\x69\x7a\141\x74\x69\157\x6e\40\103\x6c\x6f\165\144\146\154\x61\x72\x65\x20\x50\141\164\x68", PR__PKG__OPTIMIZATION), $skacuygeqykiwiwy); goto gcskyqewysqaceeg; qumkwsqqocooyuoq: $ksaameoqigiaoigg = ManipulateFile::koymmiyegyskqgck("\117\120\x54\111\x4d\x49\x5a\x41\124\x49\x4f\x4e\137\x43\x4c\x4f\125\x44\106\114\x41\x52\105\137\120\x41\x54\110", "{$skacuygeqykiwiwy}\x2f\x63\154\x6f\165\x64\x66\x6c\x61\x72\x65"); gcskyqewysqaceeg: return $ksaameoqigiaoigg; } public function iemaakgqgqosiecm() { Purge::symcgieuakksimmu(); Redirect::symcgieuakksimmu(); Controller::symcgieuakksimmu(); if (ManipulateAjax::mcgoysmkqsqooceq()) { goto wwswmaewcaisauei; } if (!is_admin()) { goto kkewoqqowugagwoy; } Setting::symcgieuakksimmu(); kkewoqqowugagwoy: goto wsemeeocquawyauo; wwswmaewcaisauei: Ajax::symcgieuakksimmu(); wsemeeocquawyauo: } public function init() { $seiwgiesegcmssam = DecoratorUser::ksgkoukcicwkkaum(); $eygsasmqycagyayw = $this->miocmcoykayoyyau(); if (!$seiwgiesegcmssam) { goto ocgkwqqmgasuoies; } $wcyykoegqiuckcku = $eygsasmqycagyayw->owygwqwawqoiusis("\142\165\163\x74\145\162", false)->awagieqcmmwkgwgs($eygsasmqycagyayw->souwykwwmyygqyqi("\142\x75\x73\164\145\x72\56\152\x73"))->yiuoscqaekcgiyuy("\x64\141\x74\x61\55\143\x66\141\163\x79\156\x63", 1); $eygsasmqycagyayw->oeoquuwkoywiuesy($wcyykoegqiuckcku)->ayeieigcckcmsikq($wcyykoegqiuckcku); ocgkwqqmgasuoies: if (is_admin()) { goto wmaeicoyyciuaiuy; } $eygsasmqycagyayw->ieayqiyiuuguowyq("\143\154\157\x75\144\146\154\141\162\x65", ["\x62\165\x73\164\145\162" => self::yyeseoqwcecweeii, "\163\145\154\x65\143\164\157\162" => "\141"]); goto ooysmgyeqoiesgqm; wmaeicoyyciuaiuy: $eygsasmqycagyayw->ikqyiskqaaymscgw("\143\x6c\157\x75\x64\146\x6c\x61\162\145", ["\141\x6a\x61\x78" => Ajax::myikkigscysoykgy, "\163\145\154\145\x63\x74\157\x72" => implode("\x2c\40", ["\43\x65\x64\x69\164\157\162\40\56\x65\144\x69\164\x6f\162\x2d\x70\x6f\x73\x74\55\160\x65\162\x6d\141\x6c\151\156\x6b\x5f\137\154\151\x6e\x6b", "\x23\x77\160\55\x61\x64\155\x69\x6e\55\x62\x61\x72\55\155\171\55\x73\x69\164\145\163\x2d\154\151\x73\164\40\141", "\x23\x65\x64\x69\x74\157\162\x20\56\145\144\x69\x74\x6f\x72\55\160\x6f\x73\x74\x2d\160\x72\x65\x76\151\x65\x77", "\43\167\160\55\141\144\x6d\151\156\55\142\141\162\x2d\163\151\164\145\55\x6e\x61\x6d\145\40\x61", "\x23\167\x70\55\x61\x64\x6d\151\x6e\x2d\x62\141\162\55\166\151\x65\x77\55\x73\151\x74\145\x20\141", "\43\x73\141\x6d\x70\x6c\145\x2d\x70\145\162\x6d\x61\x6c\x69\156\x6b\40\x61", "\x23\x77\160\55\141\x64\x6d\x69\x6e\x2d\142\141\x72\55\x76\x69\145\x77\40\141", "\43\x65\144\151\164\x6f\x72\x20\56\151\163\55\154\x69\x6e\153", "\x2e\x72\x6f\x77\55\x61\143\x74\x69\x6f\x6e\163\x20\141", "\x23\x6d\145\163\x73\141\x67\145\x20\141", "\56\x70\x72\145\166\151\x65\167"]), "\x62\165\x73\x74\145\162" => self::yyeseoqwcecweeii, "\x70\165\162\147\145\x5f\160\157\163\x74\x5f\143\141\143\150\145" => ["\164\151\x74\154\x65" => __("\x50\x75\x72\147\x65\40\x50\x6f\x73\164\x20\103\x61\143\x68\145", PR__PKG__OPTIMIZATION)]]); ooysmgyeqoiesgqm: } public function yeyiguyegmmyusea() { if (ManipulateAjax::mcgoysmkqsqooceq()) { goto eacysqsegwcqawsa; } if (!$this->kmuweyayaqoeqiyw()->eaiyegoagkgeowae()) { goto iquecygaakmiomeg; } $eggwswqquakgowom = $this->yayksoygskcuaygq(); $yqimccamkgmmuuyg = Controller::symcgieuakksimmu()->auamgqiwisysomsa(); if (!(!is_array($eggwswqquakgowom) || !$eggwswqquakgowom || count($eggwswqquakgowom) > 1)) { goto gygqgauaceiuawkq; } if ($eggwswqquakgowom = $yqimccamkgmmuuyg->yayksoygskcuaygq($iswcokucwmiosiaq)) { goto oymyqcoekqyuiguq; } if (!$iswcokucwmiosiaq) { goto gicmaqmuscawegie; } Notice::iswcokucwmiosiaq($iswcokucwmiosiaq, "\157\x70\164\x2d\143\146\x2d\147\x65\164\x2d\172\x6f\156\x65\55\151\144\x2d\x6c\151\163\164"); gicmaqmuscawegie: goto ayamomygygmgwgkg; oymyqcoekqyuiguq: $wegekcwgakqeqsmq = $this->weysguygiseoukqw(Setting::qeykiyegimcyucgk, Setting::fsekswokoseswcqm); $qeqooyuoiasweuck = $this->aoqykkmokwseeeie(); if (!$qeqooyuoiasweuck) { goto ukogwqiuuuakkawy; } $ogookoeuwuoiaaac = Manipulate::goewgasukwccacim(); if ($wegekcwgakqeqsmq == Setting::eywauigiwgqckygk) { goto isqwwmikecauwyuc; } if (!in_array($ogookoeuwuoiaaac, $eggwswqquakgowom)) { goto qqmmycmsoqegcqqw; } $cgaiqcoosmmymqqm = ManipulateArray::get(array_flip($eggwswqquakgowom), $ogookoeuwuoiaaac); if (!$cgaiqcoosmmymqqm) { goto aaogeemgkogagkai; } $qeqooyuoiasweuck[Setting::kymimiuqukascgmw] = $cgaiqcoosmmymqqm; $qeqooyuoiasweuck[Setting::aygoyiggsequgiua] = "\157\156"; $qeqooyuoiasweuck[Setting::suwymqqyesquiqqc] = [$cgaiqcoosmmymqqm => $ogookoeuwuoiaaac]; aaogeemgkogagkai: qqmmycmsoqegcqqw: goto oiiqqgyqmggyiums; isqwwmikecauwyuc: $iiqoeuwqmkiyigwm = $this->weysguygiseoukqw(Setting::kgigwyeaumymgaca); if (!$iiqoeuwqmkiyigwm) { goto kwoyiysciqumswcy; } $qeqooyuoiasweuck[Setting::kymimiuqukascgmw] = ManipulateArray::get($eggwswqquakgowom, $iiqoeuwqmkiyigwm); $qeqooyuoiasweuck[Setting::aygoyiggsequgiua] = "\x6f\156"; kwoyiysciqumswcy: oiiqqgyqmggyiums: if (!(isset($qeqooyuoiasweuck[Setting::aygoyiggsequgiua]) && $qeqooyuoiasweuck[Setting::aygoyiggsequgiua] == "\157\x6e")) { goto magymcqykamwqigw; } $yqimccamkgmmuuyg->eigwgcuaamoqkuyw($iswcokucwmiosiaq); magymcqykamwqigw: $this->kmuweyayaqoeqiyw()::oqyuwccsuskiwgew($qeqooyuoiasweuck); ukogwqiuuuakkawy: ayamomygygmgwgkg: gygqgauaceiuawkq: if ($this->yoaiuuuwwssswyqa()) { goto jkgouewqysmscmqs; } if ($wquasmyyscuqaqom = $yqimccamkgmmuuyg->ymkgoumkoycwwmmq($iswcokucwmiosiaq)) { goto iyeswoaqkaeggiiy; } if (!$iswcokucwmiosiaq) { goto ucksaiwquekagyqe; } Notice::iswcokucwmiosiaq($iswcokucwmiosiaq, "\157\160\164\55\143\x66\x2d\147\x65\164\x2d\x7a\x6f\156\x65\55\151\x64\x2d\154\151\163\164"); ucksaiwquekagyqe: $this->oaumimwssciwumys("\x43\141\x6e\40\x6e\157\x74\40\147\x65\164\40\144\x65\x76\x65\154\157\x70\155\x65\156\x74\40\x6d\x6f\144\x65\40\x64\x61\x74\141\56\40{$iswcokucwmiosiaq}"); goto asqqqqakiagymemk; iyeswoaqkaeggiiy: $this->awwuyycwuuuggkqy($wquasmyyscuqaqom); asqqqqakiagymemk: jkgouewqysmscmqs: if (!$this->yusooeuwemoqcwmm()) { goto kceeuicccqscwgsu; } $gyamuieuowceasyo = $this->weysguygiseoukqw(Setting::scikeyuygqwyiisg); $wesqeosimkuoiogg = $this->weysguygiseoukqw(Setting::myguioueuiaacsko); if (!(!$gyamuieuowceasyo || !$wesqeosimkuoiogg)) { goto sgiuwkisugmewmcs; } $yqimccamkgmmuuyg->eigwgcuaamoqkuyw($iswcokucwmiosiaq, true); sgiuwkisugmewmcs: kceeuicccqscwgsu: iquecygaakmiomeg: eacysqsegwcqawsa: } public function uysecqkaamikyime() { $yqimccamkgmmuuyg = API::symcgieuakksimmu(); $aecgggeoymywyumm = $yqimccamkgmmuuyg->ukuooogwaoiwagqs(); if (!$aecgggeoymywyumm) { goto yimeskeioamqmuwg; } DecoratorOption::update(self::yuwieqykuwacwmuw, $aecgggeoymywyumm); yimeskeioamqmuwg: } public function ygsaowiwsskygkuy($qiouiwasaauyaaue) : array { $aecgggeoymywyumm = DecoratorOption::get(self::yuwieqykuwacwmuw); if (!$aecgggeoymywyumm) { goto wkaoyycsoeoyqcae; } $ymqmyyeuycgmigyo = ManipulateArray::get($aecgggeoymywyumm, "\116\141\155\145"); $eqgoocgaqwqcimie = ManipulateArray::get($aecgggeoymywyumm, "\x56\x61\x6c\165\145"); if (!($ymqmyyeuycgmigyo && $eqgoocgaqwqcimie)) { goto yeemsgmumygmumqw; } $qiouiwasaauyaaue["\x68\x65\141\x64\145\162\x73"]["\x43\157\x6f\x6b\x69\145"] = "{$ymqmyyeuycgmigyo}\75{$eqgoocgaqwqcimie}"; yeemsgmumygmumqw: wkaoyycsoeoyqcae: return $qiouiwasaauyaaue; } }
