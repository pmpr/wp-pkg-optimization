<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66d1e5ce2c87e             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Traits; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Optimization; trait CommonTrait { public function igyiymiwguiiqgqm() : array { $ucasskoyoewwmmii = []; $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if (!($yckucuyiaykemqea = $gkyciwoiiisgywcs->cmaecekuqkwmemms(Constants::gyiksueiaeykqaqq))) { goto wcekgciqeggiiwgk; } $qogsmwakwacwqogk = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->gooqqcmsyseiaikc($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->auksikwsewaywikq()); $mkomwsiykqigmqca = $gkyciwoiiisgywcs->get($qogsmwakwacwqogk, "\x70\x61\x74\150"); $qogsmwakwacwqogk["\160\141\x74\150"] = $mkomwsiykqigmqca ? str_replace("\57", "\56", untrailingslashit($mkomwsiykqigmqca)) : ''; $ymqmyyeuycgmigyo = strtolower($qogsmwakwacwqogk["\150\157\x73\164"]) . $qogsmwakwacwqogk["\x70\x61\x74\150"] . "\x2e\x70\x68\160"; $ucasskoyoewwmmii[$ymqmyyeuycgmigyo] = $yckucuyiaykemqea; wcekgciqeggiiwgk: return $this->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\x63\x6f\156\x66\151\147\x75\x72\141\x74\151\x6f\156\x5f\x66\151\154\145\x73\137\160\x61\x74\x68", $ucasskoyoewwmmii); } public function aisuyoiqugewaocg(?string $migiiksoiymissge) : ?string { $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); $migiiksoiymissge = $cwaqscoiqkokyase->mkcmkkskeeaskowy($migiiksoiymissge); if ($cwaqscoiqkokyase->cmaecekuqkwmemms("\x50\122\x5f\x4f\120\x54\137\x43\x41\103\110\x45\137\x44\x4f\116\x54\x5f\105\x4e\x43\117\x44\x45\x5f\x46\x49\x4c\x45\116\101\115\105\x53")) { goto uqcwyyiykmwygeau; } $ymkqyawksmqcgsei = array_filter(explode("\x2f", $migiiksoiymissge)); foreach ($ymkqyawksmqcgsei as $uusmaiomayssaecw => $agywggmyywaimwuy) { $ymkqyawksmqcgsei[$uusmaiomayssaecw] = substr(sha1(rawurldecode($agywggmyywaimwuy)), 0, 10); sagemooicmgceiug: } gkwuewqmqeswqukg: $migiiksoiymissge = implode("\x2f", $ymkqyawksmqcgsei); uqcwyyiykmwygeau: return untrailingslashit($migiiksoiymissge) . "\x2f\146\151\x6c\145\163\x2f\x69\x6e\144\145\170"; } public function iwiqycmucceckwcq(?string $ewgwqamkygiqaawc, $eqgoocgaqwqcimie, string $uusmaiomayssaecw = Constants::imywcsggckkcywgk) : string { $meqocwsecsywiiqs = __("\162\x65\x4f\160\x74\x69\x6d\x69\x7a\x65", PR__MDL__OPTIMIZATION); return $this->caokeucsksukesyo()->wmkogisswkckmeua()->igiawkoqiogocsau([Constants::squoamkioomemiyi => Constants::wyaqwomqwwaoiwas, Constants::qescuiwgsyuikume => $meqocwsecsywiiqs, Constants::ssmskyqgcmeiayco => __("\x41\162\x65\x20\x79\x6f\165\x20\x73\165\x72\x65\40\x61\x62\157\x75\x74\x20\162\145\117\x70\x74\151\x6d\151\x7a\x65\x20\x74\x68\x69\x73\40\x70\141\x67\145\x3f", PR__MDL__OPTIMIZATION), Constants::kekekeusyqkouowm => [Constants::mosycwwoqguicaeo, ["\143\x6c\141\163\x73" => "\157\x70\x74\55\x70\x75\162\x67\145\55\x70\157\163\164\x2d\x63\141\143\150\x65\40\x70\162\x2d\142\164\156\40\x62\164\156\55\x70\x72\x69\155\141\162\x79", "\x74\151\164\x6c\145" => $meqocwsecsywiiqs, "\144\x61\164\141\55{$uusmaiomayssaecw}" => $eqgoocgaqwqcimie, "\144\141\164\141\55\155\x69\x63\x72\x6f\155\157\144\141\154\x2d\143\154\157\163\145"]]], $meqocwsecsywiiqs, ["\x63\154\141\163\163" => "\157\160\x74\x2d\x70\x61\x67\145\55\141\143\164\151\157\x6e"]); } public function eiykqgmgyuowgeog() : int { return (int) $this->ocksiywmkyaqseou("\157\x70\164\x5f\x67\x65\x74\137\142\x75\x64\x67\x65\x74", 0); } public function ggcikeumgqoockyo() : int { return (int) $this->ocksiywmkyaqseou("\157\x70\164\137\x75\163\x65\x64\x5f\x62\165\x64\x67\145\x74", 0); } public function ewcikckouwmuqkms() : int { $megmggkiokqkcwou = $this->eiykqgmgyuowgeog(); $sqsyqsscqaauwyyy = $this->ggcikeumgqoockyo(); return max($megmggkiokqkcwou - $sqsyqsscqaauwyyy, 0); } public function ccmqswoueyeqkoeq($uusmaiomayssaecw) : bool { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); return $eiicaiwgqkgsekce->gkwaaeusmsaywikg($uusmaiomayssaecw) || $eiicaiwgqkgsekce->gmsemuiwicucmcok($uusmaiomayssaecw); } public function giuymssyesugquuu() : bool { return $this->ccmqswoueyeqkoeq("\157\x70\x74\x2d\160\x72\145\x6c\x6f\141\144") || $this->ccmqswoueyeqkoeq("\x70\x72\x65\154\x6f\x61\144"); } public function eeegakaauwcyugqy() : bool { return $this->ccmqswoueyeqkoeq("\144\x6f\x6e\164\x2d\x6f\160\x74"); } public function iekaosoqsgqsysoo() : bool { return $this->sscegwueamckwmcy(Optimization::kgswyesggeyekgmg . "\x61\154\x6c\157\x77\137\164\x6f\137\x73\164\x61\x72\164\137\142\165\146\x66\x65\x72\x5f\160\x72\157\x63\145\x73\163", false); } public function ocysssyiuaueqiei() : bool { $owaoeyikmqaeegma = $this->caokeucsksukesyo()->owicscwgeuqcqaig(); return !$owaoeyikmqaeegma->cmaecekuqkwmemms("\x50\122\x5f\x4f\120\x54\x49\x4d\x49\132\x41\x54\x49\x4f\116\x5f\104\x4f\116\x54\x5f\117\x50\124\111\x4d\x49\132\x45", false) && !$owaoeyikmqaeegma->miccagckiqwseasi() && $owaoeyikmqaeegma->eewqyocggsagyuis() && !$this->eeegakaauwcyugqy(); } public function ocyuqqyeiuomcmmu(array $suuagcecoyuweoqk = []) : array { return $this->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\x62\x79\160\x61\163\x73\137\154\x69\163\164", $suuagcecoyuweoqk); } public function uuqqoaacemswasgw($migiiksoiymissge = false) : bool { if (!(is_bool($migiiksoiymissge) && !$migiiksoiymissge)) { goto yeiokcoikcysyimu; } $migiiksoiymissge = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ekcymmyqoceukosc(true); yeiokcoikcysyimu: return $this->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\151\163\137\142\x79\160\141\x73\163", false, $migiiksoiymissge); } }
