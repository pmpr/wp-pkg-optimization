<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             624c0a8a4dc93             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Purge; use Pmpr\Module\Optimization\Manipulate\ManipulateFile; use CallbackFilterIterator; use Pmpr\Module\Optimization\Manipulate\ManipulateFormat; use Pmpr\Module\Optimization\Manipulate\ManipulateI18N; class Expired extends Common { const swmaucwuymuqokiu = "\x6f\160\164\151\155\x69\x7a\141\x74\151\x6f\156\x5f\160\x75\162\147\x65\x5f\x74\x69\155\145\137\x65\x76\145\156\164"; protected ?string $path = ''; public function __construct(?string $mkomwsiykqigmqca) { $this->path = $mkomwsiykqigmqca; parent::__construct(); } public function amqagusacuuuaswg() : ?string { return $this->path; } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x69\x6e\151\164", [$this, "\165\167\165\147\x61\151\x71\171\167\x6d\163\145\x6b\x73\x71\155"]); parent::wigskegsqequoeks(); } public function uwugaiqywmseksqm() { if (!($this->get_cache_lifespan() && !wp_next_scheduled(static::swmaucwuymuqokiu))) { goto sukskmcwsoysiuqu; } $ycooswiwewekokei = $this->get_interval(); wp_schedule_event(time() + $ycooswiwewekokei, "\157\160\x74\x5f\x65\170\160\151\x72\145\144\137\143\141\143\x68\x65\137\x63\x72\157\x6e\x5f\x69\156\164\145\162\x76\x61\154", static::swmaucwuymuqokiu); sukskmcwsoysiuqu: } private function aymegqumcmuwyuqm(string $mkomwsiykqigmqca) : bool { $mcowwqgmkuemoumu = ManipulateFile::kiygcugekegoqauw($mkomwsiykqigmqca); foreach ($mcowwqgmkuemoumu as $igqsaukqcqscimok) { if (!ManipulateFile::qkuqsuugayciskek($igqsaukqcqscimok)) { goto eyiamcekkgkiawqy; } goto mqccmesakuemceqi; eyiamcekkgkiawqy: return false; mqccmesakuemceqi: } igymseewwyiocoug: return true; } private function ycumyoqmwqsqgmeu($qogsmwakwacwqogk) { $eouekqmooogkoqoo = "\100\136" . preg_quote($qogsmwakwacwqogk["\150\x6f\x73\x74"], "\x40") . "\100"; $mcowwqgmkuemoumu = ManipulateFile::kiygcugekegoqauw($this->amqagusacuuuaswg()); $yicgeeqawwokyssy = rtrim($qogsmwakwacwqogk["\160\141\164\x68"], "\57"); if (!$mcowwqgmkuemoumu) { goto qcessicwuikwqsis; } return new CallbackFilterIterator($mcowwqgmkuemoumu, function ($yeacayasgueouoqc) use($eouekqmooogkoqoo, $yicgeeqawwokyssy) { if (!(!ManipulateFile::oagwcgcemwwykokc($yeacayasgueouoqc) || ManipulateFile::qkuqsuugayciskek($yeacayasgueouoqc))) { goto twkmiuomimomscew; } return false; twkmiuomimomscew: if (preg_match($eouekqmooogkoqoo, ManipulateFile::mawoacksgosuccme($yeacayasgueouoqc))) { goto kooskuwkuayiuose; } return false; kooskuwkuayiuose: if (!('' !== $yicgeeqawwokyssy && !$this->kcciqwskewsuaemk()->exists(ManipulateFile::scikcaaaiwcsqowm($yeacayasgueouoqc) . $yicgeeqawwokyssy))) { goto qwcegcuowwgiccos; } return false; qwcegcuowwgiccos: return true; }); qcessicwuikwqsis: return false; } public function ccuciuoaysakakqu($wumscqwikueeogok) { if (!$wumscqwikueeogok) { goto umgaesggesswoaqe; } $ggauoeuaesiymgee = $auwuoyyagaiegwae = ManipulateI18N::mceoyuqgagciommq(); $ooqwimmeoeeaikyg = time() - $wumscqwikueeogok; $auwuoyyagaiegwae = $this->sscegwueamckwmcy("\143\141\143\x68\145\137\x61\x75\x74\157\155\141\x74\x69\x63\x5f\x63\141\x63\x68\x65\137\160\165\162\147\145\x5f\x75\162\x6c\163", $auwuoyyagaiegwae, $ooqwimmeoeeaikyg); if (is_array($auwuoyyagaiegwae)) { goto yssscwioiyygssec; } $auwuoyyagaiegwae = $ggauoeuaesiymgee; yssscwioiyygssec: $auwuoyyagaiegwae = array_filter($auwuoyyagaiegwae, "\x69\163\x5f\163\x74\x72\x69\156\147"); $auwuoyyagaiegwae = array_filter($auwuoyyagaiegwae); if (!$auwuoyyagaiegwae) { goto wwkgkaecgiwggcck; } $auwuoyyagaiegwae = array_unique($auwuoyyagaiegwae); $meisgakuwcmwosms = []; $igyewwsuegggmkkk = Buffer::omgegoiwsakgwwug(); foreach ($auwuoyyagaiegwae as $eeamcawaiqocomwy) { $this->cqscqicucmeamkyq("\143\141\143\x68\x65\137\142\145\146\x6f\162\145\137\141\x75\x74\x6f\155\141\x74\x69\143\x5f\143\141\x63\x68\x65\x5f\x70\x75\162\x67\x65\x5f\144\x69\x72", $eeamcawaiqocomwy, $ooqwimmeoeeaikyg); $oicyaaqouscyiycq = []; if (!$igyewwsuegggmkkk) { goto kciouyuaqkyqomam; } $qogsmwakwacwqogk = ManipulateFormat::kcwgwosqkkkkmuks($eeamcawaiqocomwy); $iuaemokqameyemms = rtrim($qogsmwakwacwqogk["\x70\141\164\x68"], "\x2f"); $ucasskoyoewwmmii = $this->ycumyoqmwqsqgmeu($qogsmwakwacwqogk); foreach ($ucasskoyoewwmmii as $igqsaukqcqscimok) { $sgoqsiukkecgiiso = ManipulateFile::scikcaaaiwcsqowm($igqsaukqcqscimok); $qaisqkcgsgakqykq = $sgoqsiukkecgiiso . $iuaemokqameyemms; $ccykqsgoygiaowac = $this->euyowcyakomciogy($qaisqkcgsgakqykq, $ooqwimmeoeeaikyg); if (!$ccykqsgoygiaowac) { goto oouoqimaaqcmccay; } $oicyaaqouscyiycq[] = ["\150\x6f\x6d\x65\137\165\x72\154" => $eeamcawaiqocomwy, "\x68\x6f\155\145\x5f\160\x61\164\150" => $qaisqkcgsgakqykq, "\x6c\157\x67\147\x65\144\x5f\x69\x6e" => $sgoqsiukkecgiiso !== $this->amqagusacuuuaswg() . $qogsmwakwacwqogk["\150\157\x73\x74"], "\146\x69\154\x65\x73" => $ccykqsgoygiaowac]; oouoqimaaqcmccay: if (!$this->aymegqumcmuwyuqm($sgoqsiukkecgiiso)) { goto sycygoiaiqqageym; } $this->kcciqwskewsuaemk()->remove($sgoqsiukkecgiiso); sycygoiaiqqageym: ycakugokkqkuqyiu: } siqagquguiemuoku: if (!$oicyaaqouscyiycq) { goto gygawoqywkukmqee; } $meisgakuwcmwosms = array_merge($meisgakuwcmwosms, $oicyaaqouscyiycq); gygawoqywkukmqee: kciouyuaqkyqomam: $ywmkwiwkosakssii = ["\x75\x72\154" => $eeamcawaiqocomwy, "\154\151\x66\145\163\x70\141\156" => $wumscqwikueeogok, "\146\x69\x6c\x65\x5f\141\147\145\137\154\x69\x6d\151\x74" => $ooqwimmeoeeaikyg]; $this->cqscqicucmeamkyq("\x63\141\143\x68\145\137\x61\146\x74\145\x72\137\141\x75\164\157\155\141\164\151\x63\137\x63\x61\x63\x68\x65\x5f\x70\165\x72\147\x65\137\144\151\162", $oicyaaqouscyiycq, $ywmkwiwkosakssii); coywmiyqgsweuiic: } ieumumsgyguceusy: $ywmkwiwkosakssii = ["\x6c\x69\146\145\163\160\x61\156" => $wumscqwikueeogok, "\146\151\154\145\137\x61\147\x65\x5f\x6c\151\155\151\x74" => $ooqwimmeoeeaikyg]; $this->cqscqicucmeamkyq("\143\x61\143\x68\x65\137\141\x66\164\145\x72\x5f\x61\165\x74\157\155\141\164\x69\143\137\143\x61\143\150\x65\x5f\x70\x75\x72\x67\145", $meisgakuwcmwosms, $ywmkwiwkosakssii); wwkgkaecgiwggcck: umgaesggesswoaqe: } private function euyowcyakomciogy($mkomwsiykqigmqca, $ooqwimmeoeeaikyg) : array { $meisgakuwcmwosms = []; $mcowwqgmkuemoumu = ManipulateFile::kiygcugekegoqauw($mkomwsiykqigmqca); foreach ($mcowwqgmkuemoumu as $igqsaukqcqscimok) { if (!ManipulateFile::qkuqsuugayciskek($igqsaukqcqscimok)) { goto quwcqmyokicssyew; } goto kiwqkcaekqqyuegq; quwcqmyokicssyew: if (ManipulateFile::oagwcgcemwwykokc($igqsaukqcqscimok)) { goto yqykqysmiquwoasu; } if (!(ManipulateFile::mecmkmogggamegic($igqsaukqcqscimok) && ManipulateFile::awosikuiguowiumy($igqsaukqcqscimok) < $ooqwimmeoeeaikyg)) { goto cmqucgoewuyieoyk; } $esaqeawoigqgagum = ManipulateFile::scikcaaaiwcsqowm($igqsaukqcqscimok); if ($this->kcciqwskewsuaemk()->remove($esaqeawoigqgagum)) { goto iqcogmsguwoikame; } goto kiwqkcaekqqyuegq; iqcogmsguwoikame: $mkomwsiykqigmqca = dirname($esaqeawoigqgagum); if (in_array($mkomwsiykqigmqca, $meisgakuwcmwosms, true)) { goto gimmuoqwckiseaik; } $meisgakuwcmwosms[] = $mkomwsiykqigmqca; gimmuoqwckiseaik: cmqucgoewuyieoyk: goto ayyweymyuuiauamo; yqykqysmiquwoasu: $kmgucgmywowuywem = $this->euyowcyakomciogy(ManipulateFile::scikcaaaiwcsqowm($igqsaukqcqscimok), $ooqwimmeoeeaikyg); $meisgakuwcmwosms = array_merge($meisgakuwcmwosms, $kmgucgmywowuywem); ayyweymyuuiauamo: kiwqkcaekqqyuegq: } qsygcycwieukkgwc: if (!$this->aymegqumcmuwyuqm($mkomwsiykqigmqca)) { goto mosqsmqimqgqoase; } $this->kcciqwskewsuaemk()->remove($mkomwsiykqigmqca); mosqsmqimqgqoase: return $meisgakuwcmwosms; } }