<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66d2337171efe             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Media\LazyLoad; use DOMElement; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Optimization; use Pmpr\Module\Optimization\Optimizer\Buffer\Engine as BufferEngine; use Pmpr\Module\Optimization\PageManager\Model\Process; use Pmpr\Module\Optimization\Traits\PageManagerEngineTrait; class Engine extends BufferEngine { use PageManagerEngineTrait; const uoogwumawwsywcaq = ["\163\x72\143" => "\x64\x61\x74\x61\55\163\x72\x63", "\x73\151\x7a\x65\x73" => "\144\x61\x74\141\55\163\151\x7a\145\x73", "\x73\162\143\163\145\x74" => "\144\x61\x74\141\x2d\163\162\x63\163\145\x74", "\x70\157\163\x74\x65\162" => "\144\141\164\x61\x2d\x70\157\x73\x74\x65\x72"]; public function wigskegsqequoeks() { $this->waqewsckuayqguos("\142\x65\146\x6f\162\145\137\x65\156\161\165\145\x75\x65\137\146\162\x6f\x6e\164\145\156\x64\137\x61\x73\x73\145\164\x73", [$this, "\145\156\x71\x75\x65\165\145"]); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\167\160\x5f\154\141\x7a\171\137\x6c\x6f\141\x64\151\156\147\137\x65\x6e\x61\x62\154\145\144", [$this, "\x6d\147\153\x65\x71\161\153\x6d\x73\161\x71\151\x6b\163\x79\x6f"], 10, 2); $this->miasamwyaiagioug([$this, "\x71\x73\x75\163\x75\x65\x67\x67\157\153\x79\141\x61\145\x77\x6d"], 15); } public function enqueue() { if (!$this->ocysssyiuaueqiei()) { goto cuwcsamuuqyuyqsu; } $eygsasmqycagyayw = $this->miocmcoykayoyyau(); $eygsasmqycagyayw->oeoquuwkoywiuesy($eygsasmqycagyayw->owygwqwawqoiusis("\155\145\144\x69\x61\x2d\x6c\x61\172\x79\154\x6f\141\144")->awagieqcmmwkgwgs($eygsasmqycagyayw->souwykwwmyygqyqi("\x6c\141\172\171\x6c\157\141\144\56\x6a\163")))->oeoquuwkoywiuesy($eygsasmqycagyayw->awgyqswkqywwmkye("\155\x65\x64\x69\x61\x2d\x6c\141\172\x79\154\x6f\141\144")->awagieqcmmwkgwgs($eygsasmqycagyayw->souwykwwmyygqyqi("\154\x61\172\x79\x6c\157\141\144\x2e\x63\163\163"))); cuwcsamuuqyuyqsu: } public function qsusueggokyaaewm($moooemyaqewumiay) { if (!$this->ocysssyiuaueqiei()) { goto igwkcikeyoowosoi; } $kqywgoqsmuswammk = $this->weysguygiseoukqw(Setting::souisqooyuiygceo); if (!in_array($kqywgoqsmuswammk, [Constants::ALL, Constants::mkousmkiawwousws], true)) { goto mimacwyuueomgwwy; } $moooemyaqewumiay = $this->owqscsmucwgiqsim($moooemyaqewumiay); $moooemyaqewumiay = $this->mqqggimwoqogukwm($moooemyaqewumiay); mimacwyuueomgwwy: if (!in_array($kqywgoqsmuswammk, [Constants::ALL, Constants::ykigkkwgecsygowo], true)) { goto ksckqkmwiqggykke; } $moooemyaqewumiay = $this->iagoosqgoismuqwe($moooemyaqewumiay); ksckqkmwiqggykke: igwkcikeyoowosoi: return $moooemyaqewumiay; } public function omiaycacqkmkeeaw($moooemyaqewumiay) { $yuumukkaswwoywya = "\x5b\x73\164\x79\154\x65\135"; $smuykqsageuocuos = $this->caokeucsksukesyo()->gkksucgseqqemesc(); if (!$smuykqsageuocuos->has($moooemyaqewumiay, $yuumukkaswwoywya)) { goto awaqksikyomsuaeo; } $moooemyaqewumiay = $smuykqsageuocuos->qaqiuweqoukkgqsk($moooemyaqewumiay, $yuumukkaswwoywya, function (DOMElement $ymyisaeksssueeik) use($smuykqsageuocuos) { if (!($eqgoocgaqwqcimie = $smuykqsageuocuos->guaqqcyuaeucmgoy($ymyisaeksssueeik, "\163\x74\x79\154\145"))) { goto iqsgossweywksoia; } $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, "\x64\x61\x74\x61\55\163\x74\x79\154\x65", $eqgoocgaqwqcimie); iqsgossweywksoia: $smuykqsageuocuos->qeeokkmmskuyoecg($ymyisaeksssueeik, "\163\164\171\x6c\145"); return $this->akqamsokouooqqgw($ymyisaeksssueeik); }); awaqksikyomsuaeo: return $moooemyaqewumiay; } public function owqscsmucwgiqsim($moooemyaqewumiay) : string { return $this->swgieuwskmoyukoq($moooemyaqewumiay, "\151\155\x67\x3a\156\157\164\50\56\x64\x6f\156\x74\x2d\x6c\141\x7a\171\x2d\x6c\x6f\x61\144\51\54\x20\160\151\143\164\165\x72\145\x3a\156\x6f\x74\50\x2e\x64\x6f\x6e\x74\55\x6c\141\172\x79\x2d\x6c\x6f\141\x64\x29\40\x3e\40\163\157\x75\162\x63\x65"); } public function iagoosqgoismuqwe($moooemyaqewumiay) : string { return $this->swgieuwskmoyukoq($moooemyaqewumiay, "\151\146\x72\x61\x6d\x65\x3a\156\157\x74\x28\x2e\144\157\x6e\164\x2d\154\141\172\171\x2d\x6c\157\x61\144\51\x2c\x20\x76\x69\x64\145\x6f\72\x6e\157\164\50\56\144\x6f\x6e\x74\55\x6c\141\172\x79\55\x6c\157\x61\144\x29", Constants::ykigkkwgecsygowo); } public function mqqggimwoqogukwm($moooemyaqewumiay) { $yuumukkaswwoywya = "\144\151\x76\x5b\163\164\171\x6c\145\x5d\x2c\x66\x69\147\165\x72\145\x5b\x73\164\x79\x6c\145\135\54\163\145\143\x74\151\x6f\x6e\x5b\163\x74\171\154\145\x5d\x2c\x73\x70\141\156\x5b\163\164\x79\x6c\x65\x5d\54\x6c\151\x5b\x73\164\x79\x6c\x65\135"; $smuykqsageuocuos = $this->caokeucsksukesyo()->gkksucgseqqemesc(); if (!$smuykqsageuocuos->has($moooemyaqewumiay, $yuumukkaswwoywya)) { goto ggeoqeowscwkeumy; } $samwssuokaguuqcs = $this->ucoeomeeyokssocw($moooemyaqewumiay); $moooemyaqewumiay = $smuykqsageuocuos->qaqiuweqoukkgqsk($moooemyaqewumiay, $yuumukkaswwoywya, function (DOMElement $ymyisaeksssueeik) use($smuykqsageuocuos, $samwssuokaguuqcs) { $kswaimykcacqyaay = $smuykqsageuocuos->guaqqcyuaeucmgoy($ymyisaeksssueeik, "\x73\x74\x79\x6c\x65"); if (!(($eeamcawaiqocomwy = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->eqggmuyywiawyigi($kswaimykcacqyaay)) && !$this->ogomcyeyumwiqekm($eeamcawaiqocomwy, $samwssuokaguuqcs))) { goto cuommomwmsackoqc; } $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, "\x64\x61\x74\141\x2d\x62\x67", $eeamcawaiqocomwy); $kswaimykcacqyaay = $this->caokeucsksukesyo()->owgcciayoweymuws()->wiecmkiugmyyqiqc($eeamcawaiqocomwy, "\42{$this->kkkaiqweiaqiaycg($eeamcawaiqocomwy)}\42", $kswaimykcacqyaay); $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, "\x73\x74\171\154\x65", $kswaimykcacqyaay); $ymyisaeksssueeik = $this->akqamsokouooqqgw($ymyisaeksssueeik); cuommomwmsackoqc: return $ymyisaeksssueeik; }); ggeoqeowscwkeumy: return $moooemyaqewumiay; } public function akqamsokouooqqgw(DOMElement $ymyisaeksssueeik) : DOMElement { $smuykqsageuocuos = $this->caokeucsksukesyo()->gkksucgseqqemesc(); $egkyssmuqcwaciya = $smuykqsageuocuos->guaqqcyuaeucmgoy($ymyisaeksssueeik, "\x63\154\141\x73\163"); $egkyssmuqcwaciya .= "\x20\x6c\141\x7a\171\154\157\x61\x64"; $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, "\143\154\x61\x73\x73", rtrim($egkyssmuqcwaciya)); return $ymyisaeksssueeik; } public function meqmqgiwykuymcki() : array { $ogomymegcoacqisg = []; $goqqimcssiyagkwy = $this->wkagassgcaqeosio(); if (!$this->weysguygiseoukqw(Setting::wsksomawosgqayso)) { goto yggmaskeguaqkusc; } $cquauiyyegoequum = $goqqimcssiyagkwy->mmosakwauqogckem(Process::ikkumeueakggamkk); if (!$cquauiyyegoequum) { goto uqcsksaywyqeumig; } foreach ($cquauiyyegoequum as $kiyaycgqkoueoscs) { $ogomymegcoacqisg[$kiyaycgqkoueoscs] = Constants::ymugckeogmscmacc; uwaimsisescsgyqk: } qyeswawykmasuqye: uqcsksaywyqeumig: yggmaskeguaqkusc: $yiiskoaqwycgymko = $goqqimcssiyagkwy->mmosakwauqogckem(Process::aseoemqucqqamsky); if (!($yiiskoaqwycgymko && isset($yiiskoaqwycgymko["\163\x72\x63"]))) { goto ukwoswyyogmsygqg; } $ogomymegcoacqisg[$yiiskoaqwycgymko["\163\x72\x63"]] = Constants::sgiwkasmqqockceq; ukwoswyyogmsygqg: return $ogomymegcoacqisg; } public function swgieuwskmoyukoq($moooemyaqewumiay, $yuumukkaswwoywya, string $ccamueccusigaaio = Constants::mkousmkiawwousws) : string { $smuykqsageuocuos = $this->caokeucsksukesyo()->gkksucgseqqemesc(); if (!$smuykqsageuocuos->has($moooemyaqewumiay, $yuumukkaswwoywya)) { goto qksckewucmosemuo; } $samwssuokaguuqcs = $ycqyusukiuikceae = []; if (!($ccamueccusigaaio === Constants::mkousmkiawwousws)) { goto jsmisuccwyukksgc; } $samwssuokaguuqcs = $this->ucoeomeeyokssocw($moooemyaqewumiay); $ycqyusukiuikceae = $this->meqmqgiwykuymcki(); jsmisuccwyukksgc: $moooemyaqewumiay = $smuykqsageuocuos->qaqiuweqoukkgqsk($moooemyaqewumiay, $yuumukkaswwoywya, function (DOMElement $ymyisaeksssueeik) use($smuykqsageuocuos, $ycqyusukiuikceae, $samwssuokaguuqcs) { if (!$samwssuokaguuqcs) { goto gkoaeuekqockuoiq; } $ogomymegcoacqisg = $smuykqsageuocuos->guaqqcyuaeucmgoy($ymyisaeksssueeik, "\163\162\143"); if (!$this->aosmowmawkceeses($ogomymegcoacqisg, $samwssuokaguuqcs)) { goto yqicwmekwuoywyus; } if (!isset($ycqyusukiuikceae[$ogomymegcoacqisg])) { goto kwmiwaecqcgiaqye; } $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, "\146\x65\164\x63\150\160\162\151\157\x72\x69\164\x79", $ycqyusukiuikceae[$ogomymegcoacqisg]); kwmiwaecqcgiaqye: return $ymyisaeksssueeik; yqicwmekwuoywyus: gkoaeuekqockuoiq: foreach (self::uoogwumawwsywcaq as $msqkueqksqwmskak => $uwomkgseoiegeume) { if (!$smuykqsageuocuos->owgokkumqicyuyiy($ymyisaeksssueeik, $msqkueqksqwmskak)) { goto mosuacsuaasssciu; } $eqgoocgaqwqcimie = $smuykqsageuocuos->guaqqcyuaeucmgoy($ymyisaeksssueeik, $msqkueqksqwmskak); if (!$eqgoocgaqwqcimie) { goto uyeyscsaigimsqwq; } $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, $uwomkgseoiegeume, $eqgoocgaqwqcimie); uyeyscsaigimsqwq: if ($msqkueqksqwmskak === "\163\x72\x63") { goto esqwswmoegiqcckg; } $smuykqsageuocuos->qeeokkmmskuyoecg($ymyisaeksssueeik, $msqkueqksqwmskak); goto qmokwkocmcyeyesc; esqwswmoegiqcckg: $wwgucssaecqekuek = $smuykqsageuocuos->wuuawmeqqyyyemsw($ymyisaeksssueeik); $aiooqyausygaasqm = $smuykqsageuocuos->guaqqcyuaeucmgoy($ymyisaeksssueeik, "\144\141\x74\x61\55\x69\144"); $iwiewowoqmoekyqi = $this->kkkaiqweiaqiaycg($aiooqyausygaasqm, $wwgucssaecqekuek); if ($iwiewowoqmoekyqi) { goto mwieyyqamgwicgco; } $smuykqsageuocuos->qeeokkmmskuyoecg($ymyisaeksssueeik, $msqkueqksqwmskak); goto wkiymcoqqiigqaaw; mwieyyqamgwicgco: $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, $msqkueqksqwmskak, $iwiewowoqmoekyqi); wkiymcoqqiigqaaw: qmokwkocmcyeyesc: mosuacsuaasssciu: kceuusiekagyeoys: } eekaiaeqewiqkkgm: return $this->akqamsokouooqqgw($ymyisaeksssueeik); }, false); qksckewucmosemuo: return $moooemyaqewumiay; } public function mgkeqqkmsqqiksyo($eqgoocgaqwqcimie, $wkgkmowokewiiaoo) : ?bool { if (!($eqgoocgaqwqcimie === false || !$this->ocysssyiuaueqiei())) { goto kmooekeyemqgucci; } return $eqgoocgaqwqcimie; kmooekeyemqgucci: switch ($wkgkmowokewiiaoo) { case "\x69\155\x67": $eqgoocgaqwqcimie = !$this->yoqcwmkacmggcksg(Constants::mkousmkiawwousws); goto skuuyysooocugyww; case "\151\146\x72\x61\x6d\x65": $eqgoocgaqwqcimie = !$this->yoqcwmkacmggcksg(Constants::ykigkkwgecsygowo); goto skuuyysooocugyww; } cmmusgkieoqyymgs: skuuyysooocugyww: return $eqgoocgaqwqcimie; } public function yoqcwmkacmggcksg($kqywgoqsmuswammk) : bool { return in_array($this->weysguygiseoukqw(Setting::souisqooyuiygceo), [Constants::ALL, $kqywgoqsmuswammk], true); } public function kkkaiqweiaqiaycg($aiooqyausygaasqm, array $wwgucssaecqekuek = []) : string { $iwiewowoqmoekyqi = (string) $this->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\155\145\144\151\x61\137\154\141\172\171\x5f\154\157\141\x64\x5f\160\x6c\141\143\145\x68\x6f\154\x64\x65\x72", '', $aiooqyausygaasqm, $wwgucssaecqekuek); if ($iwiewowoqmoekyqi) { goto mkgmaguyswskyioa; } $qeswwaqqsyymqawg = absint($wwgucssaecqekuek[Constants::qomookamaskuoswk] ?? 0); $cswemwoyesycwkuq = absint($wwgucssaecqekuek[Constants::sogmkkcwuamuqegw] ?? 0); $iwiewowoqmoekyqi = (string) str_replace("\40", "\x25\62\60", "\144\x61\164\x61\72\151\x6d\x61\147\145\57\163\166\x67\53\170\x6d\154\x2c\45\x33\103\163\x76\147\x20\x78\155\x6c\x6e\163\75\x27\150\164\164\160\x3a\x2f\x2f\x77\167\167\x2e\x77\63\x2e\x6f\x72\x67\57\x32\60\x30\60\x2f\x73\166\147\x27\x20\166\151\145\x77\x42\157\x78\75\x27\60\40\x30\40{$qeswwaqqsyymqawg}\40{$cswemwoyesycwkuq}\x27\45\x33\105\x25\63\x43\57\x73\x76\x67\x25\63\105"); mkgmaguyswskyioa: return $iwiewowoqmoekyqi; } public function aciqoewcqaqqqumc($siquossayskcwkea) : bool { $siquossayskcwkea = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->asouumsaymkgawie($siquossayskcwkea); return $this->ogomcyeyumwiqekm($siquossayskcwkea, $this->siciigyskwogeucw()); } public function aosmowmawkceeses(string $ogomymegcoacqisg, array $aowmesqseaiqimyu = []) : bool { return $this->ogomcyeyumwiqekm($ogomymegcoacqisg, $aowmesqseaiqimyu); } public function ucoeomeeyokssocw(string $moooemyaqewumiay) { $aowmesqseaiqimyu = ["\57\167\x70\x63\146\67\x5f\x63\141\x70\164\143\150\141\57", "\164\x69\155\x74\150\165\155\142\x2e\160\x68\160\77\163\162\143", "\167\x6f\x6f\x63\x6f\155\x6d\145\162\143\145\57\x61\163\x73\x65\x74\163\x2f\151\155\x61\x67\145\163\57\160\154\x61\143\145\x68\x6f\x6c\x64\x65\x72\x2e\160\x6e\x67"]; $gyoeyakugsuggyoi = $this->meqmqgiwykuymcki(); if (!$gyoeyakugsuggyoi) { goto skwusmoyomgqkimm; } $aowmesqseaiqimyu = array_merge($aowmesqseaiqimyu, array_keys($gyoeyakugsuggyoi)); skwusmoyomgqkimm: return $this->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\155\145\x64\151\141\137\x6c\x61\x7a\171\x6c\157\x61\x64\137\x65\x78\x63\x6c\165\144\145\x64\137\163\x72\x63", $aowmesqseaiqimyu, $moooemyaqewumiay); } public function siciigyskwogeucw() : array { return $this->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\155\x65\x64\x69\x61\137\154\x61\172\x79\154\157\141\x64\x5f\x65\x78\x63\x6c\x75\x64\x65\144\137\141\164\164\x72\151\x62\165\164\145\x73", ["\x64\141\164\141\x2d\163\162\143\75", "\x64\x61\x74\141\x2d\156\x6f\55\x6c\141\172\x79\x3d", "\x64\141\164\x61\55\154\141\172\171\x2d\x6f\x72\x69\x67\x69\x6e\x61\154\75", "\144\141\164\141\55\154\x61\x7a\x79\55\163\x72\x63\x3d", "\144\x61\164\x61\55\x6c\141\172\x79\x73\x72\x63\x3d", "\x64\141\x74\141\55\x6c\141\x7a\x79\154\157\141\144\75", "\144\141\164\141\55\142\147\x70\157\x73\151\x74\151\x6f\x6e\75", "\x64\141\164\x61\x2d\x65\x6e\166\151\162\141\55\163\x72\x63\75", "\146\x75\154\x6c\165\x72\x6c\x3d", "\x6c\x61\172\x79\55\163\154\151\x64\145\x72\x2d\x69\155\147\75", "\x64\141\164\141\x2d\163\162\x63\x73\145\x74\x3d", "\143\x6c\x61\163\163\x3d\42\x6c\x73\55\x6c", "\x63\154\141\x73\x73\x3d\x22\x6c\x73\x2d\x62\147", "\163\157\x6c\151\x6c\x6f\161\x75\171\x2d\x69\x6d\141\x67\x65", "\154\x6f\141\x64\x69\x6e\x67\x3d\42\x65\141\147\x65\162\x22", "\163\x77\x61\164\143\x68\55\x69\x6d\x67", "\144\141\164\x61\55\x68\145\151\x67\x68\164\x2d\x70\x65\162\x63\145\156\x74\141\147\145", "\144\141\x74\x61\x2d\x6c\x61\x72\x67\x65\137\151\x6d\141\x67\x65", "\x61\166\x69\141\55\x62\147\55\x73\x74\x79\x6c\145\x2d\146\151\x78\x65\144", "\x64\x61\x74\141\55\163\x6b\151\x70\x2d\x6c\141\x7a\x79", "\163\153\151\160\55\154\141\x7a\x79", "\x69\x6d\141\147\145\55\143\157\x6d\x70\x61\162\x65\x5f\x5f"]); } public function ogomcyeyumwiqekm(string $sociqikgoyemqaac, array $aowmesqseaiqimyu) : bool { return $this->caokeucsksukesyo()->gyecsegqciqykomu()->ogomcyeyumwiqekm($sociqikgoyemqaac, $aowmesqseaiqimyu); } }
