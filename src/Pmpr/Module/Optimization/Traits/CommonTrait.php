<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66d323439fdb4             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Traits; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Optimization; trait CommonTrait { public function igyiymiwguiiqgqm() : array { $ucasskoyoewwmmii = []; $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if (!($yckucuyiaykemqea = $gkyciwoiiisgywcs->cmaecekuqkwmemms(Constants::gyiksueiaeykqaqq))) { goto uamuuwkyuqomqyuy; } $qogsmwakwacwqogk = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->gooqqcmsyseiaikc($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->auksikwsewaywikq()); $mkomwsiykqigmqca = $gkyciwoiiisgywcs->get($qogsmwakwacwqogk, "\160\141\164\150"); $qogsmwakwacwqogk["\160\141\164\x68"] = $mkomwsiykqigmqca ? str_replace("\x2f", "\56", untrailingslashit($mkomwsiykqigmqca)) : ''; $ymqmyyeuycgmigyo = strtolower($qogsmwakwacwqogk["\150\x6f\163\x74"]) . $qogsmwakwacwqogk["\160\x61\x74\x68"] . "\x2e\x70\x68\x70"; $ucasskoyoewwmmii[$ymqmyyeuycgmigyo] = $yckucuyiaykemqea; uamuuwkyuqomqyuy: return $this->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\143\x6f\156\146\151\x67\x75\162\x61\x74\151\x6f\x6e\x5f\x66\x69\x6c\145\x73\x5f\x70\x61\164\150", $ucasskoyoewwmmii); } public function aisuyoiqugewaocg(?string $migiiksoiymissge) : ?string { $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); $migiiksoiymissge = $cwaqscoiqkokyase->mkcmkkskeeaskowy($migiiksoiymissge); if ($cwaqscoiqkokyase->cmaecekuqkwmemms("\x50\x52\137\x4f\x50\x54\137\103\101\103\x48\x45\x5f\x44\x4f\116\124\x5f\x45\x4e\x43\117\x44\105\137\106\111\x4c\105\116\101\x4d\x45\123")) { goto cieumoqayigkoocy; } $ymkqyawksmqcgsei = array_filter(explode("\x2f", $migiiksoiymissge)); foreach ($ymkqyawksmqcgsei as $uusmaiomayssaecw => $agywggmyywaimwuy) { $ymkqyawksmqcgsei[$uusmaiomayssaecw] = substr(sha1(rawurldecode($agywggmyywaimwuy)), 0, 10); iyaugygcsmqqqkmo: } ekwuycsiuqwycqea: $migiiksoiymissge = implode("\x2f", $ymkqyawksmqcgsei); cieumoqayigkoocy: return untrailingslashit($migiiksoiymissge) . "\x2f\x66\151\154\x65\163\x2f\151\156\x64\145\x78"; } public function iwiqycmucceckwcq(?string $ewgwqamkygiqaawc, $eqgoocgaqwqcimie, string $uusmaiomayssaecw = Constants::imywcsggckkcywgk) : string { $meqocwsecsywiiqs = __("\162\x65\117\x70\164\x69\155\x69\172\x65", PR__MDL__OPTIMIZATION); return $this->caokeucsksukesyo()->wmkogisswkckmeua()->igiawkoqiogocsau([Constants::squoamkioomemiyi => Constants::wyaqwomqwwaoiwas, Constants::qescuiwgsyuikume => $meqocwsecsywiiqs, Constants::ssmskyqgcmeiayco => __("\101\162\x65\x20\171\x6f\165\40\x73\x75\x72\145\40\x61\x62\157\165\x74\x20\162\x65\117\x70\164\x69\x6d\151\172\x65\x20\164\150\151\163\x20\x70\141\x67\x65\77", PR__MDL__OPTIMIZATION), Constants::kekekeusyqkouowm => [Constants::mosycwwoqguicaeo, ["\x63\x6c\x61\x73\x73" => "\157\160\164\x2d\x70\165\x72\x67\x65\55\160\157\x73\164\x2d\x63\141\x63\150\x65\x20\x70\162\x2d\142\164\x6e\40\x62\164\x6e\x2d\160\x72\151\155\x61\162\171", "\164\x69\164\x6c\145" => $meqocwsecsywiiqs, "\144\141\164\x61\x2d{$uusmaiomayssaecw}" => $eqgoocgaqwqcimie, "\144\x61\164\141\x2d\155\x69\143\x72\157\x6d\x6f\144\x61\154\x2d\x63\x6c\157\x73\145"]]], $meqocwsecsywiiqs, ["\143\154\141\163\163" => "\x6f\160\164\x2d\x70\141\147\x65\55\x61\x63\x74\x69\157\156"]); } public function eiykqgmgyuowgeog() : int { return (int) $this->ocksiywmkyaqseou("\157\160\164\x5f\147\145\164\x5f\x62\x75\x64\x67\x65\x74", 0); } public function ggcikeumgqoockyo() : int { return (int) $this->ocksiywmkyaqseou("\157\160\x74\x5f\165\x73\x65\x64\x5f\142\x75\x64\x67\145\x74", 0); } public function ewcikckouwmuqkms() : int { $megmggkiokqkcwou = $this->eiykqgmgyuowgeog(); $sqsyqsscqaauwyyy = $this->ggcikeumgqoockyo(); return max($megmggkiokqkcwou - $sqsyqsscqaauwyyy, 0); } public function ccmqswoueyeqkoeq($uusmaiomayssaecw) : bool { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); return $eiicaiwgqkgsekce->gkwaaeusmsaywikg($uusmaiomayssaecw) || $eiicaiwgqkgsekce->gmsemuiwicucmcok($uusmaiomayssaecw); } public function giuymssyesugquuu() : bool { return $this->ccmqswoueyeqkoeq("\x6f\160\x74\x2d\160\x72\145\154\x6f\141\144") || $this->ccmqswoueyeqkoeq("\160\x72\145\154\x6f\141\144"); } public function eeegakaauwcyugqy() : bool { return $this->ccmqswoueyeqkoeq("\144\157\156\164\55\157\x70\164"); } public function iekaosoqsgqsysoo() : bool { return $this->sscegwueamckwmcy(Optimization::kgswyesggeyekgmg . "\141\x6c\154\x6f\167\x5f\164\157\137\163\164\141\x72\164\137\142\165\146\x66\145\x72\x5f\160\x72\x6f\143\145\163\x73", false); } public function ocysssyiuaueqiei() : bool { $owaoeyikmqaeegma = $this->caokeucsksukesyo()->owicscwgeuqcqaig(); return !$owaoeyikmqaeegma->cmaecekuqkwmemms("\x50\x52\x5f\x4f\120\x54\111\115\111\x5a\101\124\111\x4f\116\137\104\117\x4e\x54\x5f\117\120\x54\x49\x4d\x49\x5a\x45", false) && !$owaoeyikmqaeegma->miccagckiqwseasi() && $owaoeyikmqaeegma->eewqyocggsagyuis() && !$this->eeegakaauwcyugqy(); } public function ocyuqqyeiuomcmmu(array $suuagcecoyuweoqk = []) : array { return $this->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\142\171\160\141\163\x73\137\154\x69\163\x74", $suuagcecoyuweoqk); } public function uuqqoaacemswasgw($migiiksoiymissge = false) : bool { if (!(is_bool($migiiksoiymissge) && !$migiiksoiymissge)) { goto yggciikgkomgeqsc; } $migiiksoiymissge = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ekcymmyqoceukosc(true); yggciikgkomgeqsc: return $this->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\x69\163\x5f\142\x79\160\x61\x73\163", false, $migiiksoiymissge); } }
