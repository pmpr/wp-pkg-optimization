<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62400e586ca94             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Page; use Pmpr\Common\Foundation\Manipulate\ManipulateValidation; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\Optimization\API\Manager; use Pmpr\Module\Optimization\Manipulate\ManipulateFormat; use WP_Error; class API extends Manager { public function kwauokaoasomsimk(&$uamcoiueqaamsqma) { $keccaugmemegoimu = $this->get("\x2f\x62\x75\144\147\x65\x74\x2f\x67\145\x74\55\x62\165\144\147\145\x74"); if ($this->occymigcemkqucuw($keccaugmemegoimu, $uamcoiueqaamsqma, $amkukiggyuqwkuyo)) { goto syuywgysqyckcqay; } $mkecsaoyggsmwmau = $this->oemauiimmycumcsk($uamcoiueqaamsqma); goto ggewkaiwwgkmkwgc; syuywgysqyckcqay: $sogksuscggsicmac = $this->qemyqseaomicaacs($keccaugmemegoimu); $kigowwqauiumummw = $this->yquuyiaogsgwmaem($sogksuscggsicmac, $uamcoiueqaamsqma); if (!$kigowwqauiumummw) { goto suiywiakesiegcwu; } $mkecsaoyggsmwmau = ManipulateArray::get($sogksuscggsicmac, self::uiwqcumqkgikqyue); goto kmseiouukkqiumum; suiywiakesiegcwu: $mkecsaoyggsmwmau = $this->oemauiimmycumcsk(__("\131\x6f\x75\x20\x61\162\145\40\157\165\x74\x20\x6f\146\x20\164\x68\x65\x20\142\x75\144\147\x65\x74", PR__MOD__OPTIMIZATION)); kmseiouukkqiumum: ggewkaiwwgkmkwgc: return $mkecsaoyggsmwmau; } private function ycqquoiyyuesegsy($sqeykgyoooqysmca, $ccamueccusigaaio) : string { return $sqeykgyoooqysmca === self::mswmgkkakuooukme ? ManipulatePost::mqgeysameoesmuqw($ccamueccusigaaio) : ManipulatePost::ycqquoiyyuesegsy($ccamueccusigaaio); } public function auuqggkaeoomcksu($sqeykgyoooqysmca, $ccamueccusigaaio, &$uamcoiueqaamsqma, &$kgicwkyskyemksca) : bool { return $this->ksicesygeskkewug($sqeykgyoooqysmca, $ccamueccusigaaio, "\141\144\144", $uamcoiueqaamsqma, $kgicwkyskyemksca, self::mswoacegomcucaik, [self::ciywsqoeiymemsys => self::eqewsqmqmsiocaeg]); } public function kgyokgoeqoaewyye($sqeykgyoooqysmca, $ccamueccusigaaio, &$uamcoiueqaamsqma, &$kgicwkyskyemksca) : bool { return $this->ksicesygeskkewug($sqeykgyoooqysmca, $ccamueccusigaaio, "\162\x65\x6d\157\x76\x65", $uamcoiueqaamsqma, $kgicwkyskyemksca, "\144\x65\x6c\x65\164\145"); } public function oskcgsywauyywyum($iueymcwwscwqkiyq, $sqeykgyoooqysmca, $ccamueccusigaaio, &$uamcoiueqaamsqma, &$kgicwkyskyemksca) : bool { return $this->ksicesygeskkewug($sqeykgyoooqysmca, $ccamueccusigaaio, "\x63\150\141\x6e\x67\145\x2d\x73\x74\x61\164\x75\163", $uamcoiueqaamsqma, $kgicwkyskyemksca, self::mswoacegomcucaik, [self::ciywsqoeiymemsys => $iueymcwwscwqkiyq]); } private function ksicesygeskkewug($sqeykgyoooqysmca, $ccamueccusigaaio, $aiamqeawckcsuaou, &$uamcoiueqaamsqma, &$kgicwkyskyemksca, $qgciuiagkkguykgs = self::mswoacegomcucaik, $icwicymcioeyeyek = []) : bool { $kigowwqauiumummw = false; $migiiksoiymissge = $this->ycqquoiyyuesegsy($sqeykgyoooqysmca, $ccamueccusigaaio); if ($migiiksoiymissge) { goto uwscegkmmumymoaq; } $uamcoiueqaamsqma = __("\120\x61\x67\x65\x20\x69\x73\40\156\x6f\x74\x20\x76\x61\x6c\151\x64", PR__MOD__OPTIMIZATION); goto gkwoqoeaecgkymeu; uwscegkmmumymoaq: if ($qgciuiagkkguykgs = ManipulateValidation::pwcgsiswecasgkgs($this, $qgciuiagkkguykgs)) { goto cquikgykuscqmigw; } $uamcoiueqaamsqma = __("\123\145\162\x76\145\162\x20\x65\162\x72\x6f\162", PR__MOD__OPTIMIZATION); goto cyymeyomuakqakwo; cquikgykuscqmigw: $keccaugmemegoimu = $this->{$qgciuiagkkguykgs}("\57\160\141\x67\145\57{$aiamqeawckcsuaou}", [self::qmwqkaeamecekiso => ManipulateFormat::omaawkkwwyesqwcc($icwicymcioeyeyek, [self::imywcsggckkcywgk => $migiiksoiymissge])]); if ($this->occymigcemkqucuw($keccaugmemegoimu, $uamcoiueqaamsqma, $amkukiggyuqwkuyo)) { goto mugeiwyysiemwaym; } $kgicwkyskyemksca = ManipulateArray::get($amkukiggyuqwkuyo, self::vswoiouoaykswgym); switch ($kgicwkyskyemksca) { case 404: $jwsqucqyaoaasykk = Model::symcgieuakksimmu(); $suaemuyiacqyugsm = $jwsqucqyaoaasykk->oqomcmyuuakigusk([self::squoamkioomemiyi => $sqeykgyoooqysmca, self::mgsccwumkcawaqcy => $ccamueccusigaaio]); if (!$suaemuyiacqyugsm) { goto awimwukcyiceackk; } $jwsqucqyaoaasykk->sgcuwcowgwimgsgk($jwsqucqyaoaasykk->keeuqgyooycqoygw($suaemuyiacqyugsm)); awimwukcyiceackk: goto kkieqqwwascekcmo; } ycueoqkeakismiqw: kkieqqwwascekcmo: goto euymeegkukskiowq; mugeiwyysiemwaym: $keccaugmemegoimu = $this->qemyqseaomicaacs($keccaugmemegoimu); $kigowwqauiumummw = $this->yquuyiaogsgwmaem($keccaugmemegoimu, $uamcoiueqaamsqma); euymeegkukskiowq: cyymeyomuakqakwo: gkwoqoeaecgkymeu: return $kigowwqauiumummw; } }
