<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6668a93c5745b             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\HTML\Minify; use MatthiasMullie\Minify\CSS; class Style extends Minifier { public function ikcgmcycisiccyuc() { $this->name = self::wwukgkqwyakeqwqk; } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\167\x70\137\x61\x64\x64\137\x69\156\x6c\151\156\x65\137\x73\x74\171\x6c\145\137\x64\x61\x74\141", [$this, "\157\153\x75\147\x75\171\x61\143\147\x67\163\x61\x67\145\161\161"]); parent::kgquecmsgcouyaya(); } public function okuguyacggsageqq($ewgwqamkygiqaawc, string $kqywgoqsmuswammk = null) { return parent::okuguyacggsageqq($ewgwqamkygiqaawc, "\163\x74\x79\154\x65"); } public function wamiiiagcwwigucu(?string $ewgwqamkygiqaawc) : ?string { $aksgkeoomwimawms = new CSS($ewgwqamkygiqaawc); return $aksgkeoomwimawms->minify(); } public function ackccoemuqacsooc(?string $ewgwqamkygiqaawc) : ?string { $ewgwqamkygiqaawc = $this->oeyciyycaaeuacsu($ewgwqamkygiqaawc); return $this->keaqaesooiggwkkg($ewgwqamkygiqaawc); } public function oeyciyycaaeuacsu($ewgwqamkygiqaawc) : string { preg_match_all("\57\100\56\52\77\x5b\x5e\x7b\135\53\173\50\133\x5c\163\x5c\x53\135\53\77\x7d\51\134\163\52\175\174\x28\133\141\x2d\172\60\55\71\54\x20\56\50\72\x29\43\x5c\133\134\135\75\x5f\76\x2b\176\134\x2d\100\x5d\53\x29\173\x28\x5b\x5e\x7d\174\136\173\x5d\x2a\51\175\57", $ewgwqamkygiqaawc, $meyiiwcswqmuggyg); $meyiiwcswqmuggyg = $meyiiwcswqmuggyg[0] ?? []; if (!(is_array($meyiiwcswqmuggyg) && $meyiiwcswqmuggyg)) { goto iaoyeugekskmewgs; } $wukkyuqigkkuocmy = array_diff_assoc($meyiiwcswqmuggyg, array_unique($meyiiwcswqmuggyg)); foreach ($wukkyuqigkkuocmy as $mqgsiqkcgqocoaam) { $ewgwqamkygiqaawc = str_replace($mqgsiqkcgqocoaam, '', $ewgwqamkygiqaawc); oasisywuwssumsok: } iuyagqakcieasiua: iaoyeugekskmewgs: return $ewgwqamkygiqaawc; } public function keaqaesooiggwkkg($ewgwqamkygiqaawc) { return preg_replace("\x2f\x5b\136\x7d\73\173\134\x6e\x5d\53\173\134\163\52\x7d\57", '', $ewgwqamkygiqaawc); } public function awgqiogkeqaeomoa($ewgwqamkygiqaawc) { $qgowgcsuycquswmo = $this->qaekoyawqougggiq($ewgwqamkygiqaawc); if (!$qgowgcsuycquswmo) { goto qckouamqueqiykqi; } $yygmoeguaqyumuui = implode("\174", array_keys($qgowgcsuycquswmo)); if (!preg_match_all("\57\x76\141\x72\134\50\x28\x5b\x5e\x29\135{$yygmoeguaqyumuui}\x29\x5c\x29\57", $ewgwqamkygiqaawc, $meyiiwcswqmuggyg)) { goto kieyoaoawqacqamy; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($meyiiwcswqmuggyg[0] as $momcykaoccoymeig => $uammqaqiwgcmeska) { $uusmaiomayssaecw = $gkyciwoiiisgywcs->get($meyiiwcswqmuggyg[1], $momcykaoccoymeig); $moyaaaascoeowegu = $gkyciwoiiisgywcs->get($qgowgcsuycquswmo, $uusmaiomayssaecw, $uammqaqiwgcmeska); if (!($moyaaaascoeowegu && $uammqaqiwgcmeska !== $moyaaaascoeowegu)) { goto eciksmgaqikwegwq; } $ewgwqamkygiqaawc = str_replace($uammqaqiwgcmeska, $moyaaaascoeowegu, $ewgwqamkygiqaawc); eciksmgaqikwegwq: okagauksoqkoqygi: } iokemmkgmcaksiqu: kieyoaoawqacqamy: qckouamqueqiykqi: return $ewgwqamkygiqaawc; } public function qaekoyawqougggiq(?string &$ewgwqamkygiqaawc = null) : array { preg_match_all("\57\x3a\x72\x6f\x6f\x74\x5c\x73\x2a\173\x28\x5b\x5c\163\134\123\x5d\53\77\51\175\57", $ewgwqamkygiqaawc, $meyiiwcswqmuggyg); $moyaaaascoeowegu = []; $qgowgcsuycquswmo = []; if (!isset($meyiiwcswqmuggyg[1])) { goto gykuaukukosiocoy; } $meyiiwcswqmuggyg = $meyiiwcswqmuggyg[1]; foreach ($meyiiwcswqmuggyg as $uammqaqiwgcmeska) { $oammesyieqmwuwyi = explode("\73", $uammqaqiwgcmeska); foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { $skueimwaqauscmoc = explode("\x3a", $igqsaukqcqscimok); $ymqmyyeuycgmigyo = $skueimwaqauscmoc[0]; $eqgoocgaqwqcimie = $skueimwaqauscmoc[1]; if (!($eqgoocgaqwqcimie && $ymqmyyeuycgmigyo)) { goto goswwiomuackymqi; } if (preg_match("\x2f\166\x61\x72\134\50\50\x5b\x5e\x29\135\52\x29\x5c\x29\57", $eqgoocgaqwqcimie, $meyiiwcswqmuggyg)) { goto gqaimiooakyykccy; } $qgowgcsuycquswmo[$ymqmyyeuycgmigyo] = $eqgoocgaqwqcimie; goto agemeseegiuuowgo; gqaimiooakyykccy: $moyaaaascoeowegu[$ymqmyyeuycgmigyo] = $meyiiwcswqmuggyg[0]; agemeseegiuuowgo: goswwiomuackymqi: mcucegiogmuyogki: } wiaesksmicgikqcm: $ewgwqamkygiqaawc = str_replace($uammqaqiwgcmeska, '', $ewgwqamkygiqaawc); auaigccmwqwsqsku: } measoqewessauqma: gykuaukukosiocoy: return $this->akuukemmseeswsom($qgowgcsuycquswmo, $moyaaaascoeowegu); } protected function usauegmmsiakwico($mmomgiqeqykoeukg, $qgowgcsuycquswmo) { $eouekqmooogkoqoo = implode("\174", array_keys($qgowgcsuycquswmo)); if (!preg_match("\x2f{$eouekqmooogkoqoo}\57", $mmomgiqeqykoeukg, $meyiiwcswqmuggyg)) { goto uuisaeysawuagysg; } $ksiyqouuaoymsycg = $meyiiwcswqmuggyg[0] ?? ''; if (!($eqgoocgaqwqcimie = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($qgowgcsuycquswmo, $ksiyqouuaoymsycg))) { goto camawumockccayaq; } $mmomgiqeqykoeukg = str_replace($mmomgiqeqykoeukg, $eqgoocgaqwqcimie, $mmomgiqeqykoeukg); camawumockccayaq: uuisaeysawuagysg: return $mmomgiqeqykoeukg; } protected function akuukemmseeswsom(array $qgowgcsuycquswmo, array $moyaaaascoeowegu) : array { if (!$moyaaaascoeowegu) { goto ggqwcqssoauckuic; } $oyiokksswogocuwm = count($moyaaaascoeowegu); $awqociesscimyymk = $gaeqamemwmwsyukm = $oyiokksswogocuwm; usgcoawgqswoeiec: if (!($oyiokksswogocuwm && $gaeqamemwmwsyukm)) { goto ggqeakyaggiuegek; } foreach ($moyaaaascoeowegu as $ymqmyyeuycgmigyo => $mmomgiqeqykoeukg) { $eqgoocgaqwqcimie = $this->usauegmmsiakwico($mmomgiqeqykoeukg, $qgowgcsuycquswmo); if (!($eqgoocgaqwqcimie !== $mmomgiqeqykoeukg)) { goto qesqgumuouyymcwa; } $qgowgcsuycquswmo[$ymqmyyeuycgmigyo] = $eqgoocgaqwqcimie; unset($moyaaaascoeowegu[$ymqmyyeuycgmigyo]); qesqgumuouyymcwa: aqigiwmamkowomiw: } qowcwmsiyscackaa: $gaeqamemwmwsyukm = count($moyaaaascoeowegu); if (!($gaeqamemwmwsyukm == $awqociesscimyymk)) { goto csyoimsqgwcmiwki; } goto ggqeakyaggiuegek; csyoimsqgwcmiwki: $awqociesscimyymk = $gaeqamemwmwsyukm; $oyiokksswogocuwm--; goto usgcoawgqswoeiec; ggqeakyaggiuegek: ggqwcqssoauckuic: return $qgowgcsuycquswmo; } }
