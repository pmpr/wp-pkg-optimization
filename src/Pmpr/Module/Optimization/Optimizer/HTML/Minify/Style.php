<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             672357314a443             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\HTML\Minify; use MatthiasMullie\Minify\CSS; use Pmpr\Common\Foundation\Interfaces\Constants; class Style extends Minifier { public function ikcgmcycisiccyuc() { $this->name = Constants::wwukgkqwyakeqwqk; } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x77\160\137\141\x64\144\x5f\151\x6e\x6c\x69\156\145\137\x73\x74\x79\154\x65\137\x64\x61\164\141", [$this, "\157\x6b\165\x67\x75\171\141\143\147\x67\163\x61\x67\x65\x71\161"]); parent::kgquecmsgcouyaya(); } public function okuguyacggsageqq($ewgwqamkygiqaawc, string $kqywgoqsmuswammk = null) { return parent::okuguyacggsageqq($ewgwqamkygiqaawc, "\x73\164\171\x6c\x65"); } public function wamiiiagcwwigucu(?string $ewgwqamkygiqaawc) : ?string { $aksgkeoomwimawms = new CSS($ewgwqamkygiqaawc); return $aksgkeoomwimawms->minify(); } public function ackccoemuqacsooc(?string $ewgwqamkygiqaawc) : ?string { $ewgwqamkygiqaawc = $this->oeyciyycaaeuacsu($ewgwqamkygiqaawc); return $this->keaqaesooiggwkkg($ewgwqamkygiqaawc); } public function oeyciyycaaeuacsu($ewgwqamkygiqaawc) : string { preg_match_all("\57\100\x2e\x2a\x3f\x5b\136\x7b\x5d\53\x7b\50\133\x5c\163\x5c\123\135\53\x3f\x7d\x29\134\x73\52\175\174\x28\133\x61\x2d\x7a\60\x2d\x39\54\x20\56\x28\72\51\x23\x5c\133\x5c\x5d\x3d\137\x3e\53\176\x5c\x2d\100\135\x2b\x29\173\x28\x5b\136\x7d\174\136\x7b\x5d\52\51\x7d\57", $ewgwqamkygiqaawc, $meyiiwcswqmuggyg); $meyiiwcswqmuggyg = $meyiiwcswqmuggyg[0] ?? []; if (is_array($meyiiwcswqmuggyg) && $meyiiwcswqmuggyg) { $wukkyuqigkkuocmy = array_diff_assoc($meyiiwcswqmuggyg, array_unique($meyiiwcswqmuggyg)); foreach ($wukkyuqigkkuocmy as $mqgsiqkcgqocoaam) { $ewgwqamkygiqaawc = str_replace($mqgsiqkcgqocoaam, '', $ewgwqamkygiqaawc); } } return $ewgwqamkygiqaawc; } public function keaqaesooiggwkkg($ewgwqamkygiqaawc) { return preg_replace("\x2f\x5b\x5e\175\73\173\134\156\135\53\x7b\134\163\x2a\x7d\57", '', $ewgwqamkygiqaawc); } public function awgqiogkeqaeomoa($ewgwqamkygiqaawc) { $qgowgcsuycquswmo = $this->qaekoyawqougggiq($ewgwqamkygiqaawc); if ($qgowgcsuycquswmo) { $yygmoeguaqyumuui = implode("\174", array_keys($qgowgcsuycquswmo)); if (preg_match_all("\57\x76\141\162\x5c\50\50\x5b\136\51\135{$yygmoeguaqyumuui}\x29\134\51\57", $ewgwqamkygiqaawc, $meyiiwcswqmuggyg)) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($meyiiwcswqmuggyg[0] as $momcykaoccoymeig => $uammqaqiwgcmeska) { $uusmaiomayssaecw = $gkyciwoiiisgywcs->get($meyiiwcswqmuggyg[1], $momcykaoccoymeig); $moyaaaascoeowegu = $gkyciwoiiisgywcs->get($qgowgcsuycquswmo, $uusmaiomayssaecw, $uammqaqiwgcmeska); if ($moyaaaascoeowegu && $uammqaqiwgcmeska !== $moyaaaascoeowegu) { $ewgwqamkygiqaawc = str_replace($uammqaqiwgcmeska, $moyaaaascoeowegu, $ewgwqamkygiqaawc); } } } } return $ewgwqamkygiqaawc; } public function qaekoyawqougggiq(?string &$ewgwqamkygiqaawc = null) : array { preg_match_all("\57\72\162\157\157\164\x5c\163\52\173\50\x5b\134\x73\x5c\x53\x5d\53\x3f\51\175\x2f", $ewgwqamkygiqaawc, $meyiiwcswqmuggyg); $moyaaaascoeowegu = []; $qgowgcsuycquswmo = []; if (isset($meyiiwcswqmuggyg[1])) { $meyiiwcswqmuggyg = $meyiiwcswqmuggyg[1]; foreach ($meyiiwcswqmuggyg as $uammqaqiwgcmeska) { $oammesyieqmwuwyi = explode("\x3b", $uammqaqiwgcmeska); foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { $skueimwaqauscmoc = explode("\x3a", $igqsaukqcqscimok); $ymqmyyeuycgmigyo = $skueimwaqauscmoc[0]; $eqgoocgaqwqcimie = $skueimwaqauscmoc[1]; if ($eqgoocgaqwqcimie && $ymqmyyeuycgmigyo) { if (preg_match("\x2f\x76\x61\162\134\50\x28\133\136\x29\x5d\52\x29\x5c\51\x2f", $eqgoocgaqwqcimie, $meyiiwcswqmuggyg)) { $moyaaaascoeowegu[$ymqmyyeuycgmigyo] = $meyiiwcswqmuggyg[0]; } else { $qgowgcsuycquswmo[$ymqmyyeuycgmigyo] = $eqgoocgaqwqcimie; } } } $ewgwqamkygiqaawc = str_replace($uammqaqiwgcmeska, '', $ewgwqamkygiqaawc); } } return $this->akuukemmseeswsom($qgowgcsuycquswmo, $moyaaaascoeowegu); } protected function usauegmmsiakwico($mmomgiqeqykoeukg, $qgowgcsuycquswmo) { $eouekqmooogkoqoo = implode("\x7c", array_keys($qgowgcsuycquswmo)); if (preg_match("\57{$eouekqmooogkoqoo}\x2f", $mmomgiqeqykoeukg, $meyiiwcswqmuggyg)) { $ksiyqouuaoymsycg = $meyiiwcswqmuggyg[0] ?? ''; if ($eqgoocgaqwqcimie = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($qgowgcsuycquswmo, $ksiyqouuaoymsycg)) { $mmomgiqeqykoeukg = str_replace($mmomgiqeqykoeukg, $eqgoocgaqwqcimie, $mmomgiqeqykoeukg); } } return $mmomgiqeqykoeukg; } protected function akuukemmseeswsom(array $qgowgcsuycquswmo, array $moyaaaascoeowegu) : array { if ($moyaaaascoeowegu) { $oyiokksswogocuwm = count($moyaaaascoeowegu); $awqociesscimyymk = $gaeqamemwmwsyukm = $oyiokksswogocuwm; while ($oyiokksswogocuwm && $gaeqamemwmwsyukm) { foreach ($moyaaaascoeowegu as $ymqmyyeuycgmigyo => $mmomgiqeqykoeukg) { $eqgoocgaqwqcimie = $this->usauegmmsiakwico($mmomgiqeqykoeukg, $qgowgcsuycquswmo); if ($eqgoocgaqwqcimie !== $mmomgiqeqykoeukg) { $qgowgcsuycquswmo[$ymqmyyeuycgmigyo] = $eqgoocgaqwqcimie; unset($moyaaaascoeowegu[$ymqmyyeuycgmigyo]); } } $gaeqamemwmwsyukm = count($moyaaaascoeowegu); if ($gaeqamemwmwsyukm == $awqociesscimyymk) { break; } $awqociesscimyymk = $gaeqamemwmwsyukm; $oyiokksswogocuwm--; } } return $qgowgcsuycquswmo; } }
