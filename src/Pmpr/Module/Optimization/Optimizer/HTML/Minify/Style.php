<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ec0900f0e3e             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\HTML\Minify; use MatthiasMullie\Minify\CSS; use Pmpr\Common\Foundation\Interfaces\Constants; class Style extends Minifier { public function ikcgmcycisiccyuc() { $this->name = Constants::wwukgkqwyakeqwqk; } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\167\160\x5f\x61\x64\x64\x5f\x69\156\154\x69\156\145\x5f\x73\164\171\x6c\x65\137\144\141\164\x61", [$this, "\x6f\x6b\x75\x67\x75\171\141\143\147\147\x73\x61\147\x65\x71\161"]); parent::kgquecmsgcouyaya(); } public function okuguyacggsageqq($ewgwqamkygiqaawc, string $kqywgoqsmuswammk = null) { return parent::okuguyacggsageqq($ewgwqamkygiqaawc, "\163\164\x79\x6c\x65"); } public function wamiiiagcwwigucu(?string $ewgwqamkygiqaawc) : ?string { $aksgkeoomwimawms = new CSS($ewgwqamkygiqaawc); return $aksgkeoomwimawms->minify(); } public function ackccoemuqacsooc(?string $ewgwqamkygiqaawc) : ?string { $ewgwqamkygiqaawc = $this->oeyciyycaaeuacsu($ewgwqamkygiqaawc); return $this->keaqaesooiggwkkg($ewgwqamkygiqaawc); } public function oeyciyycaaeuacsu($ewgwqamkygiqaawc) : string { preg_match_all("\x2f\x40\x2e\52\77\133\136\173\135\53\173\x28\x5b\134\x73\134\123\x5d\53\x3f\175\51\134\x73\x2a\x7d\x7c\x28\x5b\141\55\172\60\x2d\71\x2c\x20\x2e\50\x3a\51\x23\134\x5b\x5c\135\75\137\76\x2b\176\134\55\100\x5d\x2b\51\x7b\50\133\x5e\175\x7c\x5e\173\135\52\x29\175\x2f", $ewgwqamkygiqaawc, $meyiiwcswqmuggyg); $meyiiwcswqmuggyg = $meyiiwcswqmuggyg[0] ?? []; if (!(is_array($meyiiwcswqmuggyg) && $meyiiwcswqmuggyg)) { goto icouowaoycuuisqe; } $wukkyuqigkkuocmy = array_diff_assoc($meyiiwcswqmuggyg, array_unique($meyiiwcswqmuggyg)); foreach ($wukkyuqigkkuocmy as $mqgsiqkcgqocoaam) { $ewgwqamkygiqaawc = str_replace($mqgsiqkcgqocoaam, '', $ewgwqamkygiqaawc); gwyseusuceuwwccu: } wywwieycqskuqcwc: icouowaoycuuisqe: return $ewgwqamkygiqaawc; } public function keaqaesooiggwkkg($ewgwqamkygiqaawc) { return preg_replace("\57\133\136\175\x3b\173\134\x6e\135\53\173\x5c\163\52\175\57", '', $ewgwqamkygiqaawc); } public function awgqiogkeqaeomoa($ewgwqamkygiqaawc) { $qgowgcsuycquswmo = $this->qaekoyawqougggiq($ewgwqamkygiqaawc); if (!$qgowgcsuycquswmo) { goto iqwsqykoueqyyomy; } $yygmoeguaqyumuui = implode("\174", array_keys($qgowgcsuycquswmo)); if (!preg_match_all("\x2f\x76\x61\162\x5c\x28\x28\x5b\136\51\x5d{$yygmoeguaqyumuui}\51\134\51\x2f", $ewgwqamkygiqaawc, $meyiiwcswqmuggyg)) { goto coogyackikgmecic; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($meyiiwcswqmuggyg[0] as $momcykaoccoymeig => $uammqaqiwgcmeska) { $uusmaiomayssaecw = $gkyciwoiiisgywcs->get($meyiiwcswqmuggyg[1], $momcykaoccoymeig); $moyaaaascoeowegu = $gkyciwoiiisgywcs->get($qgowgcsuycquswmo, $uusmaiomayssaecw, $uammqaqiwgcmeska); if (!($moyaaaascoeowegu && $uammqaqiwgcmeska !== $moyaaaascoeowegu)) { goto swckikycciugciqq; } $ewgwqamkygiqaawc = str_replace($uammqaqiwgcmeska, $moyaaaascoeowegu, $ewgwqamkygiqaawc); swckikycciugciqq: kmqusaiaiogecyiy: } ocmwuquguuqigose: coogyackikgmecic: iqwsqykoueqyyomy: return $ewgwqamkygiqaawc; } public function qaekoyawqougggiq(?string &$ewgwqamkygiqaawc = null) : array { preg_match_all("\x2f\72\x72\x6f\157\x74\134\x73\52\173\50\x5b\x5c\x73\x5c\123\135\x2b\77\x29\x7d\x2f", $ewgwqamkygiqaawc, $meyiiwcswqmuggyg); $moyaaaascoeowegu = []; $qgowgcsuycquswmo = []; if (!isset($meyiiwcswqmuggyg[1])) { goto cicegcoqyuoggiwy; } $meyiiwcswqmuggyg = $meyiiwcswqmuggyg[1]; foreach ($meyiiwcswqmuggyg as $uammqaqiwgcmeska) { $oammesyieqmwuwyi = explode("\73", $uammqaqiwgcmeska); foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { $skueimwaqauscmoc = explode("\72", $igqsaukqcqscimok); $ymqmyyeuycgmigyo = $skueimwaqauscmoc[0]; $eqgoocgaqwqcimie = $skueimwaqauscmoc[1]; if (!($eqgoocgaqwqcimie && $ymqmyyeuycgmigyo)) { goto qsmoiwqcuamyuwyu; } if (preg_match("\x2f\x76\x61\162\134\x28\x28\x5b\136\x29\x5d\x2a\51\x5c\51\x2f", $eqgoocgaqwqcimie, $meyiiwcswqmuggyg)) { goto wmcmqmmcweecqmsw; } $qgowgcsuycquswmo[$ymqmyyeuycgmigyo] = $eqgoocgaqwqcimie; goto aakoeuuosouyeemc; wmcmqmmcweecqmsw: $moyaaaascoeowegu[$ymqmyyeuycgmigyo] = $meyiiwcswqmuggyg[0]; aakoeuuosouyeemc: qsmoiwqcuamyuwyu: yoaewquyogiimyic: } caaygouikgagsssc: $ewgwqamkygiqaawc = str_replace($uammqaqiwgcmeska, '', $ewgwqamkygiqaawc); egikqoaqqegawugu: } ggaucuaykyuiikem: cicegcoqyuoggiwy: return $this->akuukemmseeswsom($qgowgcsuycquswmo, $moyaaaascoeowegu); } protected function usauegmmsiakwico($mmomgiqeqykoeukg, $qgowgcsuycquswmo) { $eouekqmooogkoqoo = implode("\174", array_keys($qgowgcsuycquswmo)); if (!preg_match("\x2f{$eouekqmooogkoqoo}\57", $mmomgiqeqykoeukg, $meyiiwcswqmuggyg)) { goto saekesoeysauokkq; } $ksiyqouuaoymsycg = $meyiiwcswqmuggyg[0] ?? ''; if (!($eqgoocgaqwqcimie = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($qgowgcsuycquswmo, $ksiyqouuaoymsycg))) { goto ugcwqacogqoswyse; } $mmomgiqeqykoeukg = str_replace($mmomgiqeqykoeukg, $eqgoocgaqwqcimie, $mmomgiqeqykoeukg); ugcwqacogqoswyse: saekesoeysauokkq: return $mmomgiqeqykoeukg; } protected function akuukemmseeswsom(array $qgowgcsuycquswmo, array $moyaaaascoeowegu) : array { if (!$moyaaaascoeowegu) { goto sescaagayikiggyq; } $oyiokksswogocuwm = count($moyaaaascoeowegu); $awqociesscimyymk = $gaeqamemwmwsyukm = $oyiokksswogocuwm; meseuuacmkuowqau: if (!($oyiokksswogocuwm && $gaeqamemwmwsyukm)) { goto wycuyiukyceccaow; } foreach ($moyaaaascoeowegu as $ymqmyyeuycgmigyo => $mmomgiqeqykoeukg) { $eqgoocgaqwqcimie = $this->usauegmmsiakwico($mmomgiqeqykoeukg, $qgowgcsuycquswmo); if (!($eqgoocgaqwqcimie !== $mmomgiqeqykoeukg)) { goto esqiocgueosoksyq; } $qgowgcsuycquswmo[$ymqmyyeuycgmigyo] = $eqgoocgaqwqcimie; unset($moyaaaascoeowegu[$ymqmyyeuycgmigyo]); esqiocgueosoksyq: csqakuuiyywassgw: } sqmiymiemeegegic: $gaeqamemwmwsyukm = count($moyaaaascoeowegu); if (!($gaeqamemwmwsyukm == $awqociesscimyymk)) { goto csggsqueaqmwgwkk; } goto wycuyiukyceccaow; csggsqueaqmwgwkk: $awqociesscimyymk = $gaeqamemwmwsyukm; $oyiokksswogocuwm--; goto meseuuacmkuowqau; wycuyiukyceccaow: sescaagayikiggyq: return $qgowgcsuycquswmo; } }
