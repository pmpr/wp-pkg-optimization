<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f2a608b965f             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\HTML\Minify; use MatthiasMullie\Minify\CSS; use Pmpr\Common\Foundation\Interfaces\Constants; class Style extends Minifier { public function ikcgmcycisiccyuc() { $this->name = Constants::wwukgkqwyakeqwqk; } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\167\160\x5f\141\x64\x64\137\151\156\154\x69\x6e\x65\x5f\163\x74\171\x6c\145\x5f\x64\x61\x74\x61", [$this, "\x6f\153\165\x67\165\171\x61\x63\147\x67\163\141\x67\x65\161\161"]); parent::kgquecmsgcouyaya(); } public function okuguyacggsageqq($ewgwqamkygiqaawc, string $kqywgoqsmuswammk = null) { return parent::okuguyacggsageqq($ewgwqamkygiqaawc, "\x73\164\x79\x6c\145"); } public function wamiiiagcwwigucu(?string $ewgwqamkygiqaawc) : ?string { $aksgkeoomwimawms = new CSS($ewgwqamkygiqaawc); return $aksgkeoomwimawms->minify(); } public function ackccoemuqacsooc(?string $ewgwqamkygiqaawc) : ?string { $ewgwqamkygiqaawc = $this->oeyciyycaaeuacsu($ewgwqamkygiqaawc); return $this->keaqaesooiggwkkg($ewgwqamkygiqaawc); } public function oeyciyycaaeuacsu($ewgwqamkygiqaawc) : string { preg_match_all("\57\x40\56\52\77\133\136\x7b\x5d\x2b\173\x28\133\x5c\163\x5c\x53\135\x2b\x3f\175\51\x5c\163\x2a\175\x7c\x28\x5b\141\x2d\172\60\55\x39\x2c\40\x2e\x28\72\51\x23\x5c\x5b\134\x5d\75\x5f\76\x2b\x7e\x5c\55\100\x5d\x2b\51\x7b\50\x5b\x5e\175\174\136\173\135\x2a\51\x7d\x2f", $ewgwqamkygiqaawc, $meyiiwcswqmuggyg); $meyiiwcswqmuggyg = $meyiiwcswqmuggyg[0] ?? []; if (!(is_array($meyiiwcswqmuggyg) && $meyiiwcswqmuggyg)) { goto scyqmcegwikkoesw; } $wukkyuqigkkuocmy = array_diff_assoc($meyiiwcswqmuggyg, array_unique($meyiiwcswqmuggyg)); foreach ($wukkyuqigkkuocmy as $mqgsiqkcgqocoaam) { $ewgwqamkygiqaawc = str_replace($mqgsiqkcgqocoaam, '', $ewgwqamkygiqaawc); cewyaqiqmmwmauce: } kucqcqeesaiacekm: scyqmcegwikkoesw: return $ewgwqamkygiqaawc; } public function keaqaesooiggwkkg($ewgwqamkygiqaawc) { return preg_replace("\57\x5b\136\175\73\x7b\134\x6e\x5d\53\173\134\163\52\175\x2f", '', $ewgwqamkygiqaawc); } public function awgqiogkeqaeomoa($ewgwqamkygiqaawc) { $qgowgcsuycquswmo = $this->qaekoyawqougggiq($ewgwqamkygiqaawc); if (!$qgowgcsuycquswmo) { goto qgqasacusgwmoegy; } $yygmoeguaqyumuui = implode("\174", array_keys($qgowgcsuycquswmo)); if (!preg_match_all("\x2f\x76\x61\162\x5c\50\x28\x5b\x5e\51\135{$yygmoeguaqyumuui}\51\x5c\51\57", $ewgwqamkygiqaawc, $meyiiwcswqmuggyg)) { goto eokcuuwqaomkooag; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($meyiiwcswqmuggyg[0] as $momcykaoccoymeig => $uammqaqiwgcmeska) { $uusmaiomayssaecw = $gkyciwoiiisgywcs->get($meyiiwcswqmuggyg[1], $momcykaoccoymeig); $moyaaaascoeowegu = $gkyciwoiiisgywcs->get($qgowgcsuycquswmo, $uusmaiomayssaecw, $uammqaqiwgcmeska); if (!($moyaaaascoeowegu && $uammqaqiwgcmeska !== $moyaaaascoeowegu)) { goto sccqekuwywiisami; } $ewgwqamkygiqaawc = str_replace($uammqaqiwgcmeska, $moyaaaascoeowegu, $ewgwqamkygiqaawc); sccqekuwywiisami: ciwggusyecgskagy: } ycweseaccsomkioa: eokcuuwqaomkooag: qgqasacusgwmoegy: return $ewgwqamkygiqaawc; } public function qaekoyawqougggiq(?string &$ewgwqamkygiqaawc = null) : array { preg_match_all("\57\x3a\x72\157\x6f\164\134\163\x2a\173\50\133\x5c\163\x5c\123\x5d\53\77\51\x7d\x2f", $ewgwqamkygiqaawc, $meyiiwcswqmuggyg); $moyaaaascoeowegu = []; $qgowgcsuycquswmo = []; if (!isset($meyiiwcswqmuggyg[1])) { goto suaymckwwgmugsaa; } $meyiiwcswqmuggyg = $meyiiwcswqmuggyg[1]; foreach ($meyiiwcswqmuggyg as $uammqaqiwgcmeska) { $oammesyieqmwuwyi = explode("\x3b", $uammqaqiwgcmeska); foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { $skueimwaqauscmoc = explode("\72", $igqsaukqcqscimok); $ymqmyyeuycgmigyo = $skueimwaqauscmoc[0]; $eqgoocgaqwqcimie = $skueimwaqauscmoc[1]; if (!($eqgoocgaqwqcimie && $ymqmyyeuycgmigyo)) { goto uwsmcsiiisuocgwg; } if (preg_match("\x2f\166\x61\162\134\x28\x28\x5b\x5e\x29\135\x2a\51\134\51\x2f", $eqgoocgaqwqcimie, $meyiiwcswqmuggyg)) { goto yomoeykcqyukscmi; } $qgowgcsuycquswmo[$ymqmyyeuycgmigyo] = $eqgoocgaqwqcimie; goto swmgucaogosuueug; yomoeykcqyukscmi: $moyaaaascoeowegu[$ymqmyyeuycgmigyo] = $meyiiwcswqmuggyg[0]; swmgucaogosuueug: uwsmcsiiisuocgwg: ysssquieawyysiyc: } gkoiyaagwgycysim: $ewgwqamkygiqaawc = str_replace($uammqaqiwgcmeska, '', $ewgwqamkygiqaawc); ksqgwiceoomkuuiy: } qscqkykqskqmisgw: suaymckwwgmugsaa: return $this->akuukemmseeswsom($qgowgcsuycquswmo, $moyaaaascoeowegu); } protected function usauegmmsiakwico($mmomgiqeqykoeukg, $qgowgcsuycquswmo) { $eouekqmooogkoqoo = implode("\x7c", array_keys($qgowgcsuycquswmo)); if (!preg_match("\x2f{$eouekqmooogkoqoo}\57", $mmomgiqeqykoeukg, $meyiiwcswqmuggyg)) { goto uekkkmwciocmosgg; } $ksiyqouuaoymsycg = $meyiiwcswqmuggyg[0] ?? ''; if (!($eqgoocgaqwqcimie = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($qgowgcsuycquswmo, $ksiyqouuaoymsycg))) { goto wsqoskqgyooqeyga; } $mmomgiqeqykoeukg = str_replace($mmomgiqeqykoeukg, $eqgoocgaqwqcimie, $mmomgiqeqykoeukg); wsqoskqgyooqeyga: uekkkmwciocmosgg: return $mmomgiqeqykoeukg; } protected function akuukemmseeswsom(array $qgowgcsuycquswmo, array $moyaaaascoeowegu) : array { if (!$moyaaaascoeowegu) { goto isiqkeyciyqgkayu; } $oyiokksswogocuwm = count($moyaaaascoeowegu); $awqociesscimyymk = $gaeqamemwmwsyukm = $oyiokksswogocuwm; igscwycsqsckmcuq: if (!($oyiokksswogocuwm && $gaeqamemwmwsyukm)) { goto ecqeqquikuomwgsu; } foreach ($moyaaaascoeowegu as $ymqmyyeuycgmigyo => $mmomgiqeqykoeukg) { $eqgoocgaqwqcimie = $this->usauegmmsiakwico($mmomgiqeqykoeukg, $qgowgcsuycquswmo); if (!($eqgoocgaqwqcimie !== $mmomgiqeqykoeukg)) { goto syeeegeygawwqiuu; } $qgowgcsuycquswmo[$ymqmyyeuycgmigyo] = $eqgoocgaqwqcimie; unset($moyaaaascoeowegu[$ymqmyyeuycgmigyo]); syeeegeygawwqiuu: ycskuioouwwemgke: } wmcaecgwmmwuuqsq: $gaeqamemwmwsyukm = count($moyaaaascoeowegu); if (!($gaeqamemwmwsyukm == $awqociesscimyymk)) { goto iuieskocqoqkkwus; } goto ecqeqquikuomwgsu; iuieskocqoqkkwus: $awqociesscimyymk = $gaeqamemwmwsyukm; $oyiokksswogocuwm--; goto igscwycsqsckmcuq; ecqeqquikuomwgsu: isiqkeyciyqgkayu: return $qgowgcsuycquswmo; } }
