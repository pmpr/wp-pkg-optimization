<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             624c0a8a4dc93             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Page; use Pmpr\Common\Foundation\Manipulate\ManipulateValidation; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\Optimization\API\Manager; use Pmpr\Module\Optimization\Manipulate\ManipulateFormat; use WP_Error; class API extends Manager { public function kwauokaoasomsimk(&$uamcoiueqaamsqma) { $keccaugmemegoimu = $this->get("\57\142\165\144\147\145\x74\x2f\x67\x65\164\x2d\142\165\144\147\x65\x74"); if ($this->occymigcemkqucuw($keccaugmemegoimu, $uamcoiueqaamsqma, $amkukiggyuqwkuyo)) { goto qiqegseqwywcmwoe; } $mkecsaoyggsmwmau = $this->oemauiimmycumcsk($uamcoiueqaamsqma); goto yosyyiksyyscacus; qiqegseqwywcmwoe: $sogksuscggsicmac = $this->qemyqseaomicaacs($keccaugmemegoimu); $kigowwqauiumummw = $this->yquuyiaogsgwmaem($sogksuscggsicmac, $uamcoiueqaamsqma); if (!$kigowwqauiumummw) { goto amyaoueckysgmmas; } $mkecsaoyggsmwmau = ManipulateArray::get($sogksuscggsicmac, self::uiwqcumqkgikqyue); goto koiyaaokigmamqyc; amyaoueckysgmmas: $mkecsaoyggsmwmau = $this->oemauiimmycumcsk(__("\x59\157\165\40\x61\162\x65\40\x6f\165\164\40\x6f\146\x20\164\150\145\x20\142\x75\x64\x67\145\x74", PR__MDL__OPTIMIZATION)); koiyaaokigmamqyc: yosyyiksyyscacus: return $mkecsaoyggsmwmau; } private function ycqquoiyyuesegsy($sqeykgyoooqysmca, $ccamueccusigaaio) : string { return $sqeykgyoooqysmca === self::mswmgkkakuooukme ? ManipulatePost::mqgeysameoesmuqw($ccamueccusigaaio) : ManipulatePost::ycqquoiyyuesegsy($ccamueccusigaaio); } public function auuqggkaeoomcksu($sqeykgyoooqysmca, $ccamueccusigaaio, &$uamcoiueqaamsqma, &$kgicwkyskyemksca) : bool { return $this->ksicesygeskkewug($sqeykgyoooqysmca, $ccamueccusigaaio, "\141\x64\x64", $uamcoiueqaamsqma, $kgicwkyskyemksca, self::mswoacegomcucaik, [self::ciywsqoeiymemsys => self::eqewsqmqmsiocaeg]); } public function kgyokgoeqoaewyye($sqeykgyoooqysmca, $ccamueccusigaaio, &$uamcoiueqaamsqma, &$kgicwkyskyemksca) : bool { return $this->ksicesygeskkewug($sqeykgyoooqysmca, $ccamueccusigaaio, "\x72\x65\x6d\157\x76\145", $uamcoiueqaamsqma, $kgicwkyskyemksca, "\144\145\x6c\x65\164\145"); } public function oskcgsywauyywyum($iueymcwwscwqkiyq, $sqeykgyoooqysmca, $ccamueccusigaaio, &$uamcoiueqaamsqma, &$kgicwkyskyemksca) : bool { return $this->ksicesygeskkewug($sqeykgyoooqysmca, $ccamueccusigaaio, "\143\150\141\x6e\147\x65\55\163\164\141\164\x75\163", $uamcoiueqaamsqma, $kgicwkyskyemksca, self::mswoacegomcucaik, [self::ciywsqoeiymemsys => $iueymcwwscwqkiyq]); } private function ksicesygeskkewug($sqeykgyoooqysmca, $ccamueccusigaaio, $aiamqeawckcsuaou, &$uamcoiueqaamsqma, &$kgicwkyskyemksca, $qgciuiagkkguykgs = self::mswoacegomcucaik, $icwicymcioeyeyek = []) : bool { $kigowwqauiumummw = false; $migiiksoiymissge = $this->ycqquoiyyuesegsy($sqeykgyoooqysmca, $ccamueccusigaaio); if ($migiiksoiymissge) { goto cueuscqkicwwicei; } $uamcoiueqaamsqma = __("\x50\x61\147\145\40\x69\163\x20\156\157\x74\40\x76\141\x6c\x69\x64", PR__MDL__OPTIMIZATION); goto gcecamucuogcciig; cueuscqkicwwicei: if ($qgciuiagkkguykgs = ManipulateValidation::pwcgsiswecasgkgs($this, $qgciuiagkkguykgs)) { goto akoweomooyuwamow; } $uamcoiueqaamsqma = __("\x53\145\162\x76\x65\162\40\145\162\162\157\162", PR__MDL__OPTIMIZATION); goto oaociaioauummsey; akoweomooyuwamow: $keccaugmemegoimu = $this->{$qgciuiagkkguykgs}("\57\160\x61\147\x65\57{$aiamqeawckcsuaou}", [self::qmwqkaeamecekiso => ManipulateFormat::omaawkkwwyesqwcc($icwicymcioeyeyek, [self::imywcsggckkcywgk => $migiiksoiymissge])]); if ($this->occymigcemkqucuw($keccaugmemegoimu, $uamcoiueqaamsqma, $amkukiggyuqwkuyo)) { goto aymoguycgmuggcik; } $kgicwkyskyemksca = ManipulateArray::get($amkukiggyuqwkuyo, self::vswoiouoaykswgym); switch ($kgicwkyskyemksca) { case 404: $jwsqucqyaoaasykk = Model::symcgieuakksimmu(); $suaemuyiacqyugsm = $jwsqucqyaoaasykk->oqomcmyuuakigusk([self::squoamkioomemiyi => $sqeykgyoooqysmca, self::mgsccwumkcawaqcy => $ccamueccusigaaio]); if (!$suaemuyiacqyugsm) { goto aqeyqwuywqcmuoce; } $jwsqucqyaoaasykk->sgcuwcowgwimgsgk($jwsqucqyaoaasykk->keeuqgyooycqoygw($suaemuyiacqyugsm)); aqeyqwuywqcmuoce: goto kwcscewawgicomok; } kikkkocywiyuyuqw: kwcscewawgicomok: goto qayiqaykkywcyisq; aymoguycgmuggcik: $keccaugmemegoimu = $this->qemyqseaomicaacs($keccaugmemegoimu); $kigowwqauiumummw = $this->yquuyiaogsgwmaem($keccaugmemegoimu, $uamcoiueqaamsqma); qayiqaykkywcyisq: oaociaioauummsey: gcecamucuogcciig: return $kigowwqauiumummw; } }
