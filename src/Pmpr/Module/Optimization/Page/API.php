<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             652e61ac134c6             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Page; use Pmpr\Common\Foundation\Manipulate\ManipulateValidation; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\Optimization\API\Manager; use Pmpr\Module\Optimization\Manipulate\ManipulateFormat; use WP_Error; class API extends Manager { public function kwauokaoasomsimk(&$uamcoiueqaamsqma) { $keccaugmemegoimu = $this->get("\57\x62\165\144\x67\145\164\x2f\147\x65\x74\55\142\x75\144\x67\145\x74"); if ($this->occymigcemkqucuw($keccaugmemegoimu, $uamcoiueqaamsqma, $amkukiggyuqwkuyo)) { goto oqgymyiwckkwueuw; } $mkecsaoyggsmwmau = $this->oemauiimmycumcsk($uamcoiueqaamsqma); goto qywkykqkeeuccoui; oqgymyiwckkwueuw: $sogksuscggsicmac = $this->qemyqseaomicaacs($keccaugmemegoimu); $kigowwqauiumummw = $this->yquuyiaogsgwmaem($sogksuscggsicmac, $uamcoiueqaamsqma); if (!$kigowwqauiumummw) { goto gaouaiemokqqgssw; } $mkecsaoyggsmwmau = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($sogksuscggsicmac, self::uiwqcumqkgikqyue); goto wqwmuuicoqigqwyc; gaouaiemokqqgssw: $mkecsaoyggsmwmau = $this->oemauiimmycumcsk(__("\131\x6f\x75\x20\x61\162\x65\x20\157\x75\164\x20\x6f\x66\40\x74\x68\145\x20\x62\x75\x64\147\x65\x74", PR__MDL__OPTIMIZATION)); wqwmuuicoqigqwyc: qywkykqkeeuccoui: return $mkecsaoyggsmwmau; } public function eqgwiuussiawqewi($ocqawgquwsqioses, &$iswcokucwmiosiaq) { $comaqioyokiawoyo = []; $ksaameoqigiaoigg = []; foreach ($ocqawgquwsqioses as $uusmaiomayssaecw => $icwicymcioeyeyek) { if (!($migiiksoiymissge = $this->yyauwmoecaeskcae($icwicymcioeyeyek))) { goto uoewiggumomegksg; } $comaqioyokiawoyo[$uusmaiomayssaecw] = array_merge($icwicymcioeyeyek, [self::sauwwsocmukoaayu => $migiiksoiymissge]); uoewiggumomegksg: ywokggauuiosegog: } yqqseqskcqeqkacm: if (!$comaqioyokiawoyo) { goto ugkwqaywmwqucoeo; } $sogksuscggsicmac = $this->eqkieiagqmugguew("\x2f\160\141\x67\x65\57\x6d\x75\x6c\164\151\x2d\141\144\x64", [self::qmwqkaeamecekiso => [self::yusuiaeueqwieqqq => $comaqioyokiawoyo]], self::mswoacegomcucaik); if (!$this->yquuyiaogsgwmaem($sogksuscggsicmac, $iswcokucwmiosiaq)) { goto sockocsycmkaeosg; } $ksaameoqigiaoigg = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->qamwegcyimgcqksw($sogksuscggsicmac, "\x64\141\164\x61\x2e\x70\x61\147\x65\x73", []); sockocsycmkaeosg: ugkwqaywmwqucoeo: return $ksaameoqigiaoigg; } public function kgyokgoeqoaewyye($suaemuyiacqyugsm, &$uamcoiueqaamsqma, &$kgicwkyskyemksca) : bool { return $this->ksicesygeskkewug($suaemuyiacqyugsm, "\x72\x65\155\157\x76\x65", $uamcoiueqaamsqma, $kgicwkyskyemksca, "\144\x65\154\x65\x74\x65"); } public function oskcgsywauyywyum($suaemuyiacqyugsm, &$uamcoiueqaamsqma, &$kgicwkyskyemksca) : bool { return $this->ksicesygeskkewug($suaemuyiacqyugsm, "\x63\x68\141\x6e\147\x65\x2d\163\164\141\x74\x75\x73", $uamcoiueqaamsqma, $kgicwkyskyemksca); } private function ksicesygeskkewug($suaemuyiacqyugsm, $aiamqeawckcsuaou, &$uamcoiueqaamsqma, &$kgicwkyskyemksca, string $qgciuiagkkguykgs = self::mswoacegomcucaik) : bool { $kigowwqauiumummw = false; if ($migiiksoiymissge = $this->yyauwmoecaeskcae($suaemuyiacqyugsm)) { goto aqekkeqmmewoyawu; } $uamcoiueqaamsqma = __("\120\x61\147\145\40\151\x73\x20\x6e\x6f\164\40\x76\x61\154\x69\x64", PR__MDL__OPTIMIZATION); goto mcqwuawosciucemq; aqekkeqmmewoyawu: if ($qgciuiagkkguykgs = ManipulateValidation::pwcgsiswecasgkgs($this, $qgciuiagkkguykgs)) { goto awuwuuuagqysukku; } $uamcoiueqaamsqma = __("\123\x65\x72\166\145\162\x20\145\162\162\157\162", PR__MDL__OPTIMIZATION); goto miugmimciywcgswm; awuwuuuagqysukku: $keccaugmemegoimu = $this->{$qgciuiagkkguykgs}("\x2f\160\141\147\x65\57{$aiamqeawckcsuaou}", [self::qmwqkaeamecekiso => ManipulateFormat::omaawkkwwyesqwcc($suaemuyiacqyugsm, [self::imywcsggckkcywgk => $migiiksoiymissge])]); if ($this->occymigcemkqucuw($keccaugmemegoimu, $uamcoiueqaamsqma, $amkukiggyuqwkuyo)) { goto oaqeoqsksuyyggmg; } $kgicwkyskyemksca = ManipulateArray::get($amkukiggyuqwkuyo, self::vswoiouoaykswgym); switch ($kgicwkyskyemksca) { case 404: if (!($jwsqucqyaoaasykk = Model::symcgieuakksimmu())) { goto kiskwawumeiiieuk; } $myagqecycsaiyqsk = $jwsqucqyaoaasykk->oqomcmyuuakigusk([self::squoamkioomemiyi => $jwsqucqyaoaasykk->qogaqkcsogcqiaic($suaemuyiacqyugsm, self::squoamkioomemiyi), self::mgsccwumkcawaqcy => $jwsqucqyaoaasykk->qogaqkcsogcqiaic($suaemuyiacqyugsm, self::mgsccwumkcawaqcy)]); if (!$myagqecycsaiyqsk) { goto kwasqmcyiswoaiuu; } $jwsqucqyaoaasykk->sgcuwcowgwimgsgk($jwsqucqyaoaasykk->keeuqgyooycqoygw($suaemuyiacqyugsm)); kwasqmcyiswoaiuu: kiskwawumeiiieuk: goto syisomgawcsqeemk; } asoecuscmsyusmkg: syisomgawcsqeemk: goto kkmuuoscccmokkiw; oaqeoqsksuyyggmg: $keccaugmemegoimu = $this->qemyqseaomicaacs($keccaugmemegoimu); $kigowwqauiumummw = $this->yquuyiaogsgwmaem($keccaugmemegoimu, $uamcoiueqaamsqma); kkmuuoscccmokkiw: miugmimciywcgswm: mcqwuawosciucemq: return $kigowwqauiumummw; } }
