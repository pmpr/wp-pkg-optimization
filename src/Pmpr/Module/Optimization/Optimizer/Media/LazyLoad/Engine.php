<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f2a608b965f             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Media\LazyLoad; use DOMElement; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Optimization; use Pmpr\Module\Optimization\Optimizer\Buffer\Engine as BufferEngine; use Pmpr\Module\Optimization\PageManager\Model\Process; use Pmpr\Module\Optimization\Traits\PageManagerEngineTrait; class Engine extends BufferEngine { use PageManagerEngineTrait; const uoogwumawwsywcaq = ["\163\162\143" => "\x64\x61\164\x61\55\x73\x72\x63", "\x73\151\x7a\x65\x73" => "\144\x61\164\141\x2d\x73\151\x7a\x65\163", "\163\x72\x63\163\x65\x74" => "\x64\141\164\x61\x2d\x73\x72\143\x73\x65\x74", "\160\x6f\163\x74\x65\x72" => "\x64\x61\164\x61\x2d\160\x6f\x73\x74\x65\x72"]; public function wigskegsqequoeks() { $this->waqewsckuayqguos("\x62\145\x66\x6f\x72\x65\137\x65\156\161\165\145\165\145\x5f\x66\162\157\156\164\145\x6e\144\137\141\x73\163\x65\164\163", [$this, "\x65\156\x71\165\145\165\x65"]); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\167\x70\137\x6c\x61\172\x79\x5f\x6c\x6f\141\144\x69\156\x67\x5f\x65\x6e\x61\142\x6c\x65\x64", [$this, "\155\x67\153\x65\x71\161\153\x6d\x73\161\161\151\x6b\163\171\157"], 10, 2); $this->miasamwyaiagioug([$this, "\161\x73\x75\163\x75\145\147\147\157\153\x79\141\x61\145\x77\155"], 15); } public function enqueue() { if (!$this->isgmmgcaqsguwias()->asgqmkcukouykiie()->ocysssyiuaueqiei()) { goto iiiwsgameuomumgw; } $eygsasmqycagyayw = $this->miocmcoykayoyyau(); $eygsasmqycagyayw->oeoquuwkoywiuesy($eygsasmqycagyayw->owygwqwawqoiusis("\x6d\x65\x64\x69\x61\55\x6c\141\172\x79\x6c\157\x61\x64")->awagieqcmmwkgwgs($eygsasmqycagyayw->souwykwwmyygqyqi("\x6c\x61\172\x79\154\x6f\141\x64\56\x6a\x73")))->oeoquuwkoywiuesy($eygsasmqycagyayw->awgyqswkqywwmkye("\155\145\x64\x69\x61\55\154\x61\172\171\154\x6f\x61\x64")->awagieqcmmwkgwgs($eygsasmqycagyayw->souwykwwmyygqyqi("\154\x61\172\x79\x6c\157\x61\144\x2e\143\x73\163"))); iiiwsgameuomumgw: } public function qsusueggokyaaewm($moooemyaqewumiay) { if (!$this->isgmmgcaqsguwias()->asgqmkcukouykiie()->ocysssyiuaueqiei()) { goto okycquokqoamsquy; } $kqywgoqsmuswammk = $this->weysguygiseoukqw(Setting::souisqooyuiygceo); if (!in_array($kqywgoqsmuswammk, [Constants::ALL, Constants::mkousmkiawwousws], true)) { goto mcukocaaoyuugoeu; } $moooemyaqewumiay = $this->owqscsmucwgiqsim($moooemyaqewumiay); $moooemyaqewumiay = $this->mqqggimwoqogukwm($moooemyaqewumiay); mcukocaaoyuugoeu: if (!in_array($kqywgoqsmuswammk, [Constants::ALL, Constants::ykigkkwgecsygowo], true)) { goto scockmiqikwwkqse; } $moooemyaqewumiay = $this->iagoosqgoismuqwe($moooemyaqewumiay); scockmiqikwwkqse: okycquokqoamsquy: return $moooemyaqewumiay; } public function omiaycacqkmkeeaw($moooemyaqewumiay) { $yuumukkaswwoywya = "\x5b\163\x74\x79\154\145\x5d"; $smuykqsageuocuos = $this->caokeucsksukesyo()->gkksucgseqqemesc(); if (!$smuykqsageuocuos->has($moooemyaqewumiay, $yuumukkaswwoywya)) { goto egwgyekaiqomyeaa; } $moooemyaqewumiay = $smuykqsageuocuos->qaqiuweqoukkgqsk($moooemyaqewumiay, $yuumukkaswwoywya, function (DOMElement $ymyisaeksssueeik) use($smuykqsageuocuos) { if (!($eqgoocgaqwqcimie = $smuykqsageuocuos->guaqqcyuaeucmgoy($ymyisaeksssueeik, "\x73\x74\x79\x6c\x65"))) { goto cgwokqwakqcmiieo; } $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, "\144\x61\164\x61\55\x73\x74\x79\154\145", $eqgoocgaqwqcimie); cgwokqwakqcmiieo: $smuykqsageuocuos->qeeokkmmskuyoecg($ymyisaeksssueeik, "\x73\x74\x79\x6c\x65"); return $this->akqamsokouooqqgw($ymyisaeksssueeik); }); egwgyekaiqomyeaa: return $moooemyaqewumiay; } public function owqscsmucwgiqsim($moooemyaqewumiay) : string { return $this->swgieuwskmoyukoq($moooemyaqewumiay, "\x69\x6d\x67\72\x6e\x6f\x74\50\x2e\x64\x6f\x6e\164\x2d\x6c\141\x7a\x79\x2d\154\157\x61\x64\51\54\40\x70\151\x63\164\165\x72\x65\x3a\x6e\157\164\x28\x2e\x64\157\156\164\55\x6c\x61\172\171\55\x6c\x6f\x61\144\x29\40\x3e\40\x73\x6f\165\x72\143\145"); } public function iagoosqgoismuqwe($moooemyaqewumiay) : string { return $this->swgieuwskmoyukoq($moooemyaqewumiay, "\x69\x66\x72\x61\155\x65\x3a\156\157\x74\x28\x2e\144\157\x6e\164\55\154\x61\x7a\x79\55\154\x6f\141\x64\x29\54\x20\166\151\x64\145\x6f\72\156\157\x74\50\56\x64\157\x6e\x74\x2d\154\x61\x7a\171\x2d\154\x6f\141\144\x29", Constants::ykigkkwgecsygowo); } public function mqqggimwoqogukwm($moooemyaqewumiay) { $yuumukkaswwoywya = "\x64\151\166\133\x73\x74\171\154\145\135\x2c\x66\151\147\x75\x72\x65\133\x73\x74\x79\x6c\x65\135\54\x73\145\143\164\x69\157\x6e\133\163\164\x79\154\x65\x5d\x2c\163\x70\141\156\x5b\x73\x74\x79\154\145\135\x2c\x6c\151\x5b\163\x74\x79\x6c\145\135"; $smuykqsageuocuos = $this->caokeucsksukesyo()->gkksucgseqqemesc(); if (!$smuykqsageuocuos->has($moooemyaqewumiay, $yuumukkaswwoywya)) { goto uwusswwekqcsisus; } $samwssuokaguuqcs = $this->ucoeomeeyokssocw($moooemyaqewumiay); $moooemyaqewumiay = $smuykqsageuocuos->qaqiuweqoukkgqsk($moooemyaqewumiay, $yuumukkaswwoywya, function (DOMElement $ymyisaeksssueeik) use($smuykqsageuocuos, $samwssuokaguuqcs) { $kswaimykcacqyaay = $smuykqsageuocuos->guaqqcyuaeucmgoy($ymyisaeksssueeik, "\x73\x74\x79\x6c\x65"); if (!(($eeamcawaiqocomwy = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->eqggmuyywiawyigi($kswaimykcacqyaay)) && !$this->ogomcyeyumwiqekm($eeamcawaiqocomwy, $samwssuokaguuqcs))) { goto kssuqmsgmaaeqigw; } $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, "\144\141\164\x61\55\x62\x67", $eeamcawaiqocomwy); $kswaimykcacqyaay = $this->caokeucsksukesyo()->owgcciayoweymuws()->wiecmkiugmyyqiqc($eeamcawaiqocomwy, "\x22{$this->kkkaiqweiaqiaycg($eeamcawaiqocomwy)}\x22", $kswaimykcacqyaay); $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, "\x73\x74\x79\x6c\x65", $kswaimykcacqyaay); $ymyisaeksssueeik = $this->akqamsokouooqqgw($ymyisaeksssueeik); kssuqmsgmaaeqigw: return $ymyisaeksssueeik; }); uwusswwekqcsisus: return $moooemyaqewumiay; } public function akqamsokouooqqgw(DOMElement $ymyisaeksssueeik) : DOMElement { $smuykqsageuocuos = $this->caokeucsksukesyo()->gkksucgseqqemesc(); $egkyssmuqcwaciya = $smuykqsageuocuos->guaqqcyuaeucmgoy($ymyisaeksssueeik, "\143\154\141\163\x73"); $egkyssmuqcwaciya .= "\x20\154\x61\x7a\x79\154\x6f\x61\144"; $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, "\x63\154\141\x73\163", rtrim($egkyssmuqcwaciya)); return $ymyisaeksssueeik; } public function meqmqgiwykuymcki() : array { $ogomymegcoacqisg = []; $goqqimcssiyagkwy = $this->wkagassgcaqeosio(); if (!$this->weysguygiseoukqw(Setting::wsksomawosgqayso)) { goto mukwsuuuqcgesmwc; } $cquauiyyegoequum = $goqqimcssiyagkwy->mmosakwauqogckem(Process::ikkumeueakggamkk); if (!$cquauiyyegoequum) { goto kqyeukywmgismyaq; } foreach ($cquauiyyegoequum as $kiyaycgqkoueoscs) { $ogomymegcoacqisg[$kiyaycgqkoueoscs] = Constants::ymugckeogmscmacc; acaeigkmigikeuyu: } mciumqyyossyiuyk: kqyeukywmgismyaq: mukwsuuuqcgesmwc: $yiiskoaqwycgymko = $goqqimcssiyagkwy->mmosakwauqogckem(Process::aseoemqucqqamsky); if (!($yiiskoaqwycgymko && isset($yiiskoaqwycgymko["\163\162\x63"]))) { goto cqeoguiqiymkyweo; } $ogomymegcoacqisg[$yiiskoaqwycgymko["\163\x72\x63"]] = Constants::sgiwkasmqqockceq; cqeoguiqiymkyweo: return $ogomymegcoacqisg; } public function swgieuwskmoyukoq($moooemyaqewumiay, $yuumukkaswwoywya, string $ccamueccusigaaio = Constants::mkousmkiawwousws) : string { $smuykqsageuocuos = $this->caokeucsksukesyo()->gkksucgseqqemesc(); if (!$smuykqsageuocuos->has($moooemyaqewumiay, $yuumukkaswwoywya)) { goto ywsywoumuaykkeaa; } $samwssuokaguuqcs = $ycqyusukiuikceae = []; if (!($ccamueccusigaaio === Constants::mkousmkiawwousws)) { goto omgcsmsikaggaooc; } $samwssuokaguuqcs = $this->ucoeomeeyokssocw($moooemyaqewumiay); $ycqyusukiuikceae = $this->meqmqgiwykuymcki(); omgcsmsikaggaooc: $moooemyaqewumiay = $smuykqsageuocuos->qaqiuweqoukkgqsk($moooemyaqewumiay, $yuumukkaswwoywya, function (DOMElement $ymyisaeksssueeik) use($smuykqsageuocuos, $ycqyusukiuikceae, $samwssuokaguuqcs) { if (!$samwssuokaguuqcs) { goto gsgyayuaekgyoumc; } $ogomymegcoacqisg = $smuykqsageuocuos->guaqqcyuaeucmgoy($ymyisaeksssueeik, "\x73\x72\143"); if (!$this->aosmowmawkceeses($ogomymegcoacqisg, $samwssuokaguuqcs)) { goto ugikgkwuwmgymgus; } if (!isset($ycqyusukiuikceae[$ogomymegcoacqisg])) { goto wykuosegisygosiq; } $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, "\146\x65\164\x63\150\160\x72\151\157\x72\x69\x74\x79", $ycqyusukiuikceae[$ogomymegcoacqisg]); wykuosegisygosiq: return $ymyisaeksssueeik; ugikgkwuwmgymgus: gsgyayuaekgyoumc: foreach (self::uoogwumawwsywcaq as $msqkueqksqwmskak => $uwomkgseoiegeume) { if (!$smuykqsageuocuos->owgokkumqicyuyiy($ymyisaeksssueeik, $msqkueqksqwmskak)) { goto mmcikqikqecaeswu; } $eqgoocgaqwqcimie = $smuykqsageuocuos->guaqqcyuaeucmgoy($ymyisaeksssueeik, $msqkueqksqwmskak); if (!$eqgoocgaqwqcimie) { goto wyqmeyoaggwuioak; } $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, $uwomkgseoiegeume, $eqgoocgaqwqcimie); wyqmeyoaggwuioak: if ($msqkueqksqwmskak === "\x73\x72\143") { goto syykqmkiyoekqsek; } $smuykqsageuocuos->qeeokkmmskuyoecg($ymyisaeksssueeik, $msqkueqksqwmskak); goto aiqekkyauwswayyq; syykqmkiyoekqsek: $wwgucssaecqekuek = $smuykqsageuocuos->wuuawmeqqyyyemsw($ymyisaeksssueeik); $aiooqyausygaasqm = $smuykqsageuocuos->guaqqcyuaeucmgoy($ymyisaeksssueeik, "\x64\x61\164\141\55\151\x64"); $iwiewowoqmoekyqi = $this->kkkaiqweiaqiaycg($aiooqyausygaasqm, $wwgucssaecqekuek); if ($iwiewowoqmoekyqi) { goto uyksacasqywyessc; } $smuykqsageuocuos->qeeokkmmskuyoecg($ymyisaeksssueeik, $msqkueqksqwmskak); goto sqmqwqeoygcmqcim; uyksacasqywyessc: $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, $msqkueqksqwmskak, $iwiewowoqmoekyqi); sqmqwqeoygcmqcim: aiqekkyauwswayyq: mmcikqikqecaeswu: aeuosggumiiwoesm: } omemqagskckoeoog: return $this->akqamsokouooqqgw($ymyisaeksssueeik); }, false); ywsywoumuaykkeaa: return $moooemyaqewumiay; } public function mgkeqqkmsqqiksyo($eqgoocgaqwqcimie, $wkgkmowokewiiaoo) : ?bool { if (!($eqgoocgaqwqcimie === false || !$this->isgmmgcaqsguwias()->asgqmkcukouykiie()->ocysssyiuaueqiei())) { goto wsqiqkiucakewgou; } return $eqgoocgaqwqcimie; wsqiqkiucakewgou: switch ($wkgkmowokewiiaoo) { case "\x69\155\147": $eqgoocgaqwqcimie = !$this->yoqcwmkacmggcksg(Constants::mkousmkiawwousws); goto yaumwqeommqigswq; case "\x69\x66\x72\141\x6d\x65": $eqgoocgaqwqcimie = !$this->yoqcwmkacmggcksg(Constants::ykigkkwgecsygowo); goto yaumwqeommqigswq; } wiiqigwgyuiuksia: yaumwqeommqigswq: return $eqgoocgaqwqcimie; } public function yoqcwmkacmggcksg($kqywgoqsmuswammk) : bool { return in_array($this->weysguygiseoukqw(Setting::souisqooyuiygceo), [Constants::ALL, $kqywgoqsmuswammk], true); } public function kkkaiqweiaqiaycg($aiooqyausygaasqm, array $wwgucssaecqekuek = []) : string { $iwiewowoqmoekyqi = (string) $this->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\155\x65\x64\x69\x61\137\x6c\141\x7a\171\137\154\157\141\144\137\160\154\x61\x63\x65\150\x6f\x6c\x64\145\162", '', $aiooqyausygaasqm, $wwgucssaecqekuek); if ($iwiewowoqmoekyqi) { goto mqoygcuqwacgycek; } $qeswwaqqsyymqawg = absint($wwgucssaecqekuek[Constants::qomookamaskuoswk] ?? 0); $cswemwoyesycwkuq = absint($wwgucssaecqekuek[Constants::sogmkkcwuamuqegw] ?? 0); $iwiewowoqmoekyqi = (string) str_replace("\40", "\45\x32\x30", "\x64\141\164\x61\x3a\151\155\141\147\145\x2f\x73\166\147\53\170\x6d\154\54\x25\x33\x43\163\x76\147\x20\x78\x6d\x6c\x6e\163\x3d\x27\150\164\164\160\72\57\57\x77\x77\167\56\167\x33\x2e\x6f\162\x67\57\62\60\x30\x30\x2f\x73\166\147\x27\40\x76\x69\145\x77\x42\157\x78\75\47\x30\40\60\40{$qeswwaqqsyymqawg}\x20{$cswemwoyesycwkuq}\47\x25\63\105\x25\63\x43\57\x73\166\x67\45\63\105"); mqoygcuqwacgycek: return $iwiewowoqmoekyqi; } public function aciqoewcqaqqqumc($siquossayskcwkea) : bool { $siquossayskcwkea = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->asouumsaymkgawie($siquossayskcwkea); return $this->ogomcyeyumwiqekm($siquossayskcwkea, $this->siciigyskwogeucw()); } public function aosmowmawkceeses(string $ogomymegcoacqisg, array $aowmesqseaiqimyu = []) : bool { return $this->ogomcyeyumwiqekm($ogomymegcoacqisg, $aowmesqseaiqimyu); } public function ucoeomeeyokssocw(string $moooemyaqewumiay) { $aowmesqseaiqimyu = ["\x2f\167\160\x63\x66\67\x5f\143\x61\x70\164\x63\x68\x61\57", "\x74\x69\155\x74\x68\x75\155\142\x2e\x70\150\x70\77\x73\162\143", "\x77\157\157\143\157\155\155\145\x72\x63\x65\x2f\x61\163\163\145\164\x73\x2f\151\x6d\x61\x67\145\x73\57\x70\154\141\143\x65\150\157\154\x64\x65\x72\x2e\x70\156\x67"]; $gyoeyakugsuggyoi = $this->meqmqgiwykuymcki(); if (!$gyoeyakugsuggyoi) { goto agyycikucwgmysee; } $aowmesqseaiqimyu = array_merge($aowmesqseaiqimyu, array_keys($gyoeyakugsuggyoi)); agyycikucwgmysee: return $this->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\155\x65\x64\151\x61\137\x6c\141\172\x79\154\x6f\141\x64\x5f\x65\x78\x63\x6c\x75\144\145\144\x5f\x73\x72\143", $aowmesqseaiqimyu, $moooemyaqewumiay); } public function siciigyskwogeucw() : array { return $this->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\x6d\x65\x64\151\141\137\x6c\141\172\171\154\157\141\x64\x5f\145\170\143\x6c\165\144\x65\144\x5f\141\x74\164\x72\x69\x62\165\164\x65\163", ["\x64\141\164\141\55\x73\x72\x63\75", "\144\x61\164\141\x2d\x6e\x6f\55\154\x61\172\171\x3d", "\144\141\x74\141\55\154\x61\172\171\x2d\157\x72\x69\x67\151\x6e\x61\154\75", "\x64\141\x74\x61\x2d\x6c\141\172\x79\55\x73\x72\143\75", "\144\141\164\141\55\x6c\x61\x7a\x79\163\x72\143\75", "\144\141\164\141\55\154\x61\172\171\154\157\141\x64\75", "\144\141\164\141\55\142\147\x70\157\x73\151\x74\x69\157\156\x3d", "\144\141\164\141\55\x65\x6e\166\151\162\141\55\x73\x72\x63\75", "\146\165\x6c\x6c\x75\162\154\x3d", "\x6c\141\172\x79\55\163\154\151\x64\145\x72\x2d\x69\x6d\x67\75", "\x64\141\164\x61\x2d\163\x72\143\x73\145\164\x3d", "\143\154\x61\163\x73\x3d\x22\x6c\163\x2d\154", "\143\154\141\163\163\x3d\42\x6c\163\x2d\142\x67", "\x73\x6f\154\x69\x6c\x6f\161\x75\171\55\151\x6d\x61\147\145", "\154\157\x61\144\151\156\x67\x3d\42\145\141\147\145\x72\x22", "\163\167\x61\x74\x63\x68\55\151\155\x67", "\144\x61\x74\x61\55\150\x65\151\x67\x68\164\x2d\x70\145\x72\x63\145\x6e\x74\141\147\x65", "\144\x61\x74\x61\55\x6c\141\x72\x67\145\137\x69\155\x61\x67\x65", "\141\x76\x69\141\55\142\x67\x2d\163\164\171\154\145\55\x66\x69\x78\x65\144", "\x64\141\164\x61\55\163\x6b\x69\160\x2d\154\x61\172\171", "\x73\153\151\x70\x2d\154\141\x7a\x79", "\x69\155\x61\147\x65\x2d\143\x6f\155\160\x61\x72\145\x5f\137"]); } public function ogomcyeyumwiqekm(string $sociqikgoyemqaac, array $aowmesqseaiqimyu) : bool { return $this->caokeucsksukesyo()->gyecsegqciqykomu()->ogomcyeyumwiqekm($sociqikgoyemqaac, $aowmesqseaiqimyu); } }
