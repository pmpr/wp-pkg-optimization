<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             665af54c961e2             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\HTML\Minify; use MatthiasMullie\Minify\CSS; class Style extends Minifier { public function ikcgmcycisiccyuc() { $this->name = self::wwukgkqwyakeqwqk; } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x77\160\x5f\x61\144\x64\137\x69\156\154\151\x6e\x65\137\163\164\171\x6c\x65\137\144\x61\x74\141", [$this, "\157\x6b\x75\x67\165\x79\141\143\147\x67\163\x61\x67\145\161\161"]); parent::kgquecmsgcouyaya(); } public function okuguyacggsageqq($ewgwqamkygiqaawc, string $kqywgoqsmuswammk = null) { return parent::okuguyacggsageqq($ewgwqamkygiqaawc, "\x73\164\x79\154\x65"); } public function wamiiiagcwwigucu(?string $ewgwqamkygiqaawc) : ?string { $aksgkeoomwimawms = new CSS($ewgwqamkygiqaawc); return $aksgkeoomwimawms->minify(); } public function ackccoemuqacsooc(?string $ewgwqamkygiqaawc) : ?string { $ewgwqamkygiqaawc = $this->oeyciyycaaeuacsu($ewgwqamkygiqaawc); return $this->keaqaesooiggwkkg($ewgwqamkygiqaawc); } public function oeyciyycaaeuacsu($ewgwqamkygiqaawc) : string { preg_match_all("\57\100\56\x2a\77\133\x5e\173\135\53\173\x28\x5b\134\163\134\123\x5d\53\x3f\175\x29\x5c\x73\x2a\x7d\x7c\50\x5b\x61\x2d\x7a\60\x2d\71\x2c\40\56\x28\x3a\51\43\134\133\x5c\135\x3d\x5f\76\53\x7e\134\x2d\100\x5d\53\x29\173\50\x5b\x5e\x7d\x7c\136\173\x5d\52\51\x7d\57", $ewgwqamkygiqaawc, $meyiiwcswqmuggyg); $meyiiwcswqmuggyg = $meyiiwcswqmuggyg[0] ?? []; if (!(is_array($meyiiwcswqmuggyg) && $meyiiwcswqmuggyg)) { goto ucaoyoamaycsiacq; } $wukkyuqigkkuocmy = array_diff_assoc($meyiiwcswqmuggyg, array_unique($meyiiwcswqmuggyg)); foreach ($wukkyuqigkkuocmy as $mqgsiqkcgqocoaam) { $ewgwqamkygiqaawc = str_replace($mqgsiqkcgqocoaam, '', $ewgwqamkygiqaawc); mccimkgwkkamsime: } guqmgiqaaowaauyo: ucaoyoamaycsiacq: return $ewgwqamkygiqaawc; } public function keaqaesooiggwkkg($ewgwqamkygiqaawc) { return preg_replace("\57\x5b\136\x7d\x3b\x7b\134\x6e\x5d\x2b\x7b\x5c\163\52\x7d\57", '', $ewgwqamkygiqaawc); } public function awgqiogkeqaeomoa($ewgwqamkygiqaawc) { $qgowgcsuycquswmo = $this->qaekoyawqougggiq($ewgwqamkygiqaawc); if (!$qgowgcsuycquswmo) { goto okagauksoqkoqygi; } $yygmoeguaqyumuui = implode("\x7c", array_keys($qgowgcsuycquswmo)); if (!preg_match_all("\x2f\x76\x61\162\x5c\50\50\133\136\51\135{$yygmoeguaqyumuui}\51\x5c\51\x2f", $ewgwqamkygiqaawc, $meyiiwcswqmuggyg)) { goto iokemmkgmcaksiqu; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($meyiiwcswqmuggyg[0] as $momcykaoccoymeig => $uammqaqiwgcmeska) { $uusmaiomayssaecw = $gkyciwoiiisgywcs->get($meyiiwcswqmuggyg[1], $momcykaoccoymeig); $moyaaaascoeowegu = $gkyciwoiiisgywcs->get($qgowgcsuycquswmo, $uusmaiomayssaecw, $uammqaqiwgcmeska); if (!($moyaaaascoeowegu && $uammqaqiwgcmeska !== $moyaaaascoeowegu)) { goto iaoyeugekskmewgs; } $ewgwqamkygiqaawc = str_replace($uammqaqiwgcmeska, $moyaaaascoeowegu, $ewgwqamkygiqaawc); iaoyeugekskmewgs: oasisywuwssumsok: } iuyagqakcieasiua: iokemmkgmcaksiqu: okagauksoqkoqygi: return $ewgwqamkygiqaawc; } public function qaekoyawqougggiq(?string &$ewgwqamkygiqaawc = null) : array { preg_match_all("\57\72\162\x6f\x6f\x74\134\x73\x2a\x7b\x28\x5b\x5c\163\134\123\x5d\x2b\77\51\175\57", $ewgwqamkygiqaawc, $meyiiwcswqmuggyg); $moyaaaascoeowegu = []; $qgowgcsuycquswmo = []; if (!isset($meyiiwcswqmuggyg[1])) { goto gqaimiooakyykccy; } $meyiiwcswqmuggyg = $meyiiwcswqmuggyg[1]; foreach ($meyiiwcswqmuggyg as $uammqaqiwgcmeska) { $oammesyieqmwuwyi = explode("\73", $uammqaqiwgcmeska); foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { $skueimwaqauscmoc = explode("\x3a", $igqsaukqcqscimok); $ymqmyyeuycgmigyo = $skueimwaqauscmoc[0]; $eqgoocgaqwqcimie = $skueimwaqauscmoc[1]; if (!($eqgoocgaqwqcimie && $ymqmyyeuycgmigyo)) { goto mcucegiogmuyogki; } if (preg_match("\x2f\x76\141\162\134\50\x28\133\136\x29\x5d\52\x29\x5c\51\57", $eqgoocgaqwqcimie, $meyiiwcswqmuggyg)) { goto auaigccmwqwsqsku; } $qgowgcsuycquswmo[$ymqmyyeuycgmigyo] = $eqgoocgaqwqcimie; goto wiaesksmicgikqcm; auaigccmwqwsqsku: $moyaaaascoeowegu[$ymqmyyeuycgmigyo] = $meyiiwcswqmuggyg[0]; wiaesksmicgikqcm: mcucegiogmuyogki: measoqewessauqma: } qckouamqueqiykqi: $ewgwqamkygiqaawc = str_replace($uammqaqiwgcmeska, '', $ewgwqamkygiqaawc); kieyoaoawqacqamy: } eciksmgaqikwegwq: gqaimiooakyykccy: return $this->akuukemmseeswsom($qgowgcsuycquswmo, $moyaaaascoeowegu); } protected function usauegmmsiakwico($mmomgiqeqykoeukg, $qgowgcsuycquswmo) { $eouekqmooogkoqoo = implode("\174", array_keys($qgowgcsuycquswmo)); if (!preg_match("\57{$eouekqmooogkoqoo}\57", $mmomgiqeqykoeukg, $meyiiwcswqmuggyg)) { goto goswwiomuackymqi; } $ksiyqouuaoymsycg = $meyiiwcswqmuggyg[0] ?? ''; if (!($eqgoocgaqwqcimie = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($qgowgcsuycquswmo, $ksiyqouuaoymsycg))) { goto agemeseegiuuowgo; } $mmomgiqeqykoeukg = str_replace($mmomgiqeqykoeukg, $eqgoocgaqwqcimie, $mmomgiqeqykoeukg); agemeseegiuuowgo: goswwiomuackymqi: return $mmomgiqeqykoeukg; } protected function akuukemmseeswsom(array $qgowgcsuycquswmo, array $moyaaaascoeowegu) : array { if (!$moyaaaascoeowegu) { goto aqigiwmamkowomiw; } $oyiokksswogocuwm = count($moyaaaascoeowegu); $awqociesscimyymk = $gaeqamemwmwsyukm = $oyiokksswogocuwm; camawumockccayaq: if (!($oyiokksswogocuwm && $gaeqamemwmwsyukm)) { goto gykuaukukosiocoy; } foreach ($moyaaaascoeowegu as $ymqmyyeuycgmigyo => $mmomgiqeqykoeukg) { $eqgoocgaqwqcimie = $this->usauegmmsiakwico($mmomgiqeqykoeukg, $qgowgcsuycquswmo); if (!($eqgoocgaqwqcimie !== $mmomgiqeqykoeukg)) { goto usgcoawgqswoeiec; } $qgowgcsuycquswmo[$ymqmyyeuycgmigyo] = $eqgoocgaqwqcimie; unset($moyaaaascoeowegu[$ymqmyyeuycgmigyo]); usgcoawgqswoeiec: ggqeakyaggiuegek: } uuisaeysawuagysg: $gaeqamemwmwsyukm = count($moyaaaascoeowegu); if (!($gaeqamemwmwsyukm == $awqociesscimyymk)) { goto qowcwmsiyscackaa; } goto gykuaukukosiocoy; qowcwmsiyscackaa: $awqociesscimyymk = $gaeqamemwmwsyukm; $oyiokksswogocuwm--; goto camawumockccayaq; gykuaukukosiocoy: aqigiwmamkowomiw: return $qgowgcsuycquswmo; } }
