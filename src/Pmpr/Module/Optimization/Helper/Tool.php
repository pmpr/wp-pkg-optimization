<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d4b20910f9             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Helper; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Optimization; class Tool extends Common { public function igyiymiwguiiqgqm() : array { $ucasskoyoewwmmii = []; $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if ($yckucuyiaykemqea = $gkyciwoiiisgywcs->cmaecekuqkwmemms(Constants::gyiksueiaeykqaqq)) { $qogsmwakwacwqogk = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->gooqqcmsyseiaikc($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->auksikwsewaywikq()); $mkomwsiykqigmqca = $gkyciwoiiisgywcs->get($qogsmwakwacwqogk, "\x70\x61\x74\x68"); $qogsmwakwacwqogk["\x70\141\x74\150"] = $mkomwsiykqigmqca ? str_replace("\x2f", "\x2e", untrailingslashit($mkomwsiykqigmqca)) : ''; $ymqmyyeuycgmigyo = strtolower($qogsmwakwacwqogk["\x68\157\x73\x74"]) . $qogsmwakwacwqogk["\x70\141\x74\x68"] . "\56\x70\x68\160"; $ucasskoyoewwmmii[$ymqmyyeuycgmigyo] = $yckucuyiaykemqea; } return $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\x63\x6f\x6e\x66\151\147\x75\x72\x61\x74\x69\157\156\x5f\146\151\154\145\163\x5f\160\x61\x74\x68", $ucasskoyoewwmmii); } public function aisuyoiqugewaocg(?string $migiiksoiymissge) : ?string { $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); $migiiksoiymissge = $cwaqscoiqkokyase->mkcmkkskeeaskowy($migiiksoiymissge); if (!$cwaqscoiqkokyase->cmaecekuqkwmemms("\120\x52\x5f\x4f\x50\x54\x5f\103\x41\x43\110\105\x5f\x44\117\x4e\x54\137\x45\116\103\x4f\x44\105\137\x46\111\114\x45\116\x41\115\x45\123")) { $ymkqyawksmqcgsei = array_filter(explode("\57", $migiiksoiymissge)); foreach ($ymkqyawksmqcgsei as $uusmaiomayssaecw => $agywggmyywaimwuy) { $ymkqyawksmqcgsei[$uusmaiomayssaecw] = substr(sha1(rawurldecode($agywggmyywaimwuy)), 0, 10); } $migiiksoiymissge = implode("\57", $ymkqyawksmqcgsei); } return untrailingslashit($migiiksoiymissge) . "\57\x5f\160\x72\55\x66\x69\154\x65\x73\x2f\151\x6e\144\145\170"; } public function iwiqycmucceckwcq(?string $ewgwqamkygiqaawc, $eqgoocgaqwqcimie, string $uusmaiomayssaecw = Constants::imywcsggckkcywgk) : string { $meqocwsecsywiiqs = __("\x72\x65\117\x70\164\x69\x6d\x69\x7a\145", PR__MDL__OPTIMIZATION); return $this->caokeucsksukesyo()->wmkogisswkckmeua()->igiawkoqiogocsau([Constants::squoamkioomemiyi => Constants::wyaqwomqwwaoiwas, Constants::qescuiwgsyuikume => $meqocwsecsywiiqs, Constants::ssmskyqgcmeiayco => __("\x41\x72\x65\x20\x79\157\x75\x20\x73\x75\x72\145\x20\141\142\x6f\x75\164\40\162\145\x4f\160\164\x69\155\x69\172\x65\x20\164\x68\151\x73\40\160\x61\x67\145\77", PR__MDL__OPTIMIZATION), Constants::kekekeusyqkouowm => [Constants::mosycwwoqguicaeo, ["\143\154\x61\163\163" => "\x70\x72\x2d\x6f\x70\x74\x2d\160\x75\x72\x67\x65\x2d\x70\x6f\x73\x74\55\143\x61\143\x68\145\40\160\x72\x2d\x62\x74\156\40\142\x74\156\55\x70\x72\x69\155\141\162\171", "\164\x69\x74\154\x65" => $meqocwsecsywiiqs, "\x64\x61\x74\x61\x2d{$uusmaiomayssaecw}" => $eqgoocgaqwqcimie, "\144\x61\x74\x61\55\x6d\151\x63\162\x6f\x6d\157\144\141\x6c\55\143\x6c\157\x73\x65"]]], $meqocwsecsywiiqs, ["\143\154\x61\163\163" => "\x70\162\55\x6f\160\x74\x2d\x70\x61\147\x65\55\x61\x63\164\x69\x6f\156"]); } public function ccmqswoueyeqkoeq($uusmaiomayssaecw) : bool { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); return $eiicaiwgqkgsekce->gkwaaeusmsaywikg($uusmaiomayssaecw) || $eiicaiwgqkgsekce->gmsemuiwicucmcok($uusmaiomayssaecw); } public function giuymssyesugquuu() : bool { return $this->ccmqswoueyeqkoeq("\x70\162\x2d\x6f\x70\x74\x2d\160\162\x65\154\157\x61\144") || $this->ccmqswoueyeqkoeq("\x70\162\x65\154\157\x61\x64"); } public function ogwesogckacoyggy() : bool { return $this->ccmqswoueyeqkoeq("\160\162\55\157\160\x74\x2d\x72\145\155\x6f\164\145"); } public function eeegakaauwcyugqy() : bool { return $this->ccmqswoueyeqkoeq("\x64\157\156\164\x2d\157\x70\164"); } public function iekaosoqsgqsysoo() : bool { return $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->sscegwueamckwmcy(Optimization::kgswyesggeyekgmg . "\141\x6c\154\157\x77\137\164\x6f\x5f\163\x74\x61\x72\164\137\x62\x75\x66\146\x65\x72\x5f\160\x72\157\143\145\163\163", false); } public function ocysssyiuaueqiei() : bool { $owaoeyikmqaeegma = $this->caokeucsksukesyo()->owicscwgeuqcqaig(); return !$owaoeyikmqaeegma->cmaecekuqkwmemms("\x50\122\137\117\120\124\x49\x4d\111\x5a\101\x54\111\x4f\x4e\137\x44\x4f\116\x54\x5f\117\120\124\111\x4d\x49\x5a\105", false) && !$owaoeyikmqaeegma->miccagckiqwseasi() && $owaoeyikmqaeegma->syukqeyowauuucwi() && !$this->eeegakaauwcyugqy(); } public function ocyuqqyeiuomcmmu(array $suuagcecoyuweoqk = []) : array { return $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\142\171\x70\x61\x73\x73\x5f\154\151\x73\x74", $suuagcecoyuweoqk); } public function uuqqoaacemswasgw($migiiksoiymissge = false) : bool { if (is_bool($migiiksoiymissge) && !$migiiksoiymissge) { $migiiksoiymissge = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ekcymmyqoceukosc(true); } return $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\151\163\137\x62\x79\160\141\x73\163", false, $migiiksoiymissge); } }
