<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ef5105e9703             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Helper; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Optimization; class Tool extends Common { public function igyiymiwguiiqgqm() : array { $ucasskoyoewwmmii = []; $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if (!($yckucuyiaykemqea = $gkyciwoiiisgywcs->cmaecekuqkwmemms(Constants::gyiksueiaeykqaqq))) { goto wgaqkacekoyiwggi; } $qogsmwakwacwqogk = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->gooqqcmsyseiaikc($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->auksikwsewaywikq()); $mkomwsiykqigmqca = $gkyciwoiiisgywcs->get($qogsmwakwacwqogk, "\x70\x61\164\x68"); $qogsmwakwacwqogk["\160\x61\x74\150"] = $mkomwsiykqigmqca ? str_replace("\x2f", "\x2e", untrailingslashit($mkomwsiykqigmqca)) : ''; $ymqmyyeuycgmigyo = strtolower($qogsmwakwacwqogk["\150\x6f\163\164"]) . $qogsmwakwacwqogk["\160\x61\x74\x68"] . "\56\x70\x68\x70"; $ucasskoyoewwmmii[$ymqmyyeuycgmigyo] = $yckucuyiaykemqea; wgaqkacekoyiwggi: return $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\x63\157\156\146\x69\x67\165\162\141\164\151\157\x6e\x5f\146\x69\154\145\x73\x5f\x70\141\x74\x68", $ucasskoyoewwmmii); } public function aisuyoiqugewaocg(?string $migiiksoiymissge) : ?string { $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); $migiiksoiymissge = $cwaqscoiqkokyase->mkcmkkskeeaskowy($migiiksoiymissge); if ($cwaqscoiqkokyase->cmaecekuqkwmemms("\120\122\x5f\117\x50\124\137\103\101\103\110\105\137\x44\x4f\x4e\124\x5f\x45\x4e\x43\117\x44\105\137\106\111\114\x45\116\101\x4d\105\x53")) { goto jkaemsuwyyoamwim; } $ymkqyawksmqcgsei = array_filter(explode("\57", $migiiksoiymissge)); foreach ($ymkqyawksmqcgsei as $uusmaiomayssaecw => $agywggmyywaimwuy) { $ymkqyawksmqcgsei[$uusmaiomayssaecw] = substr(sha1(rawurldecode($agywggmyywaimwuy)), 0, 10); emioyucskiowqumg: } cscskwugoamcmqyu: $migiiksoiymissge = implode("\x2f", $ymkqyawksmqcgsei); jkaemsuwyyoamwim: return untrailingslashit($migiiksoiymissge) . "\x2f\x5f\x70\x72\x2d\146\151\x6c\145\163\57\151\156\144\x65\x78"; } public function iwiqycmucceckwcq(?string $ewgwqamkygiqaawc, $eqgoocgaqwqcimie, string $uusmaiomayssaecw = Constants::imywcsggckkcywgk) : string { $meqocwsecsywiiqs = __("\x72\x65\x4f\160\164\x69\155\151\172\145", PR__MDL__OPTIMIZATION); return $this->caokeucsksukesyo()->wmkogisswkckmeua()->igiawkoqiogocsau([Constants::squoamkioomemiyi => Constants::wyaqwomqwwaoiwas, Constants::qescuiwgsyuikume => $meqocwsecsywiiqs, Constants::ssmskyqgcmeiayco => __("\101\162\145\x20\x79\x6f\165\x20\163\x75\x72\x65\x20\x61\142\x6f\165\164\x20\x72\145\117\x70\164\151\x6d\151\x7a\x65\x20\x74\x68\x69\163\x20\x70\x61\147\145\77", PR__MDL__OPTIMIZATION), Constants::kekekeusyqkouowm => [Constants::mosycwwoqguicaeo, ["\143\x6c\141\163\x73" => "\x6f\x70\164\55\x70\x75\x72\x67\x65\x2d\x70\x6f\163\164\55\143\x61\x63\x68\x65\x20\160\x72\55\x62\164\x6e\40\x62\x74\x6e\x2d\160\162\151\155\141\162\171", "\x74\151\x74\154\x65" => $meqocwsecsywiiqs, "\x64\x61\x74\141\55{$uusmaiomayssaecw}" => $eqgoocgaqwqcimie, "\x64\x61\164\x61\x2d\155\x69\x63\162\157\x6d\157\x64\x61\154\55\x63\x6c\157\x73\145"]]], $meqocwsecsywiiqs, ["\x63\154\141\x73\163" => "\x6f\x70\164\55\x70\x61\147\x65\x2d\x61\x63\x74\151\157\156"]); } public function ccmqswoueyeqkoeq($uusmaiomayssaecw) : bool { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); return $eiicaiwgqkgsekce->gkwaaeusmsaywikg($uusmaiomayssaecw) || $eiicaiwgqkgsekce->gmsemuiwicucmcok($uusmaiomayssaecw); } public function giuymssyesugquuu() : bool { return $this->ccmqswoueyeqkoeq("\157\x70\x74\55\160\162\145\154\157\x61\144") || $this->ccmqswoueyeqkoeq("\160\x72\145\x6c\157\x61\144"); } public function ogwesogckacoyggy() : bool { return $this->ccmqswoueyeqkoeq("\160\162\x2d\157\x70\164\55\x72\x65\x6d\x6f\164\x65"); } public function eeegakaauwcyugqy() : bool { return $this->ccmqswoueyeqkoeq("\144\157\x6e\x74\55\157\x70\164"); } public function iekaosoqsgqsysoo() : bool { return $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->sscegwueamckwmcy(Optimization::kgswyesggeyekgmg . "\141\x6c\154\157\167\137\164\157\x5f\163\164\x61\x72\164\137\x62\x75\146\146\x65\162\x5f\x70\x72\x6f\x63\145\163\163", false); } public function ocysssyiuaueqiei() : bool { $owaoeyikmqaeegma = $this->caokeucsksukesyo()->owicscwgeuqcqaig(); return !$owaoeyikmqaeegma->cmaecekuqkwmemms("\120\x52\x5f\x4f\120\x54\111\115\111\132\101\x54\x49\117\116\x5f\x44\x4f\x4e\124\137\x4f\120\x54\x49\x4d\111\x5a\105", false) && !$owaoeyikmqaeegma->miccagckiqwseasi() && $owaoeyikmqaeegma->eewqyocggsagyuis() && !$this->eeegakaauwcyugqy(); } public function ocyuqqyeiuomcmmu(array $suuagcecoyuweoqk = []) : array { return $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\x62\171\x70\x61\163\163\137\154\151\x73\164", $suuagcecoyuweoqk); } public function uuqqoaacemswasgw($migiiksoiymissge = false) : bool { if (!(is_bool($migiiksoiymissge) && !$migiiksoiymissge)) { goto suwsiaeoumiwkiqg; } $migiiksoiymissge = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ekcymmyqoceukosc(true); suwsiaeoumiwkiqg: return $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\151\163\x5f\142\171\x70\141\163\x73", false, $migiiksoiymissge); } }
