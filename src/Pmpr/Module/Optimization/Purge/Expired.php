<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62400e586ca94             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Purge; use Pmpr\Module\Optimization\Manipulate\ManipulateFile; use CallbackFilterIterator; use Pmpr\Module\Optimization\Manipulate\ManipulateFormat; use Pmpr\Module\Optimization\Manipulate\ManipulateI18N; class Expired extends Common { const swmaucwuymuqokiu = "\x6f\160\x74\151\x6d\151\172\x61\164\x69\x6f\156\137\160\165\x72\147\x65\137\164\x69\155\145\137\145\x76\x65\x6e\x74"; protected ?string $path = ''; public function __construct(?string $mkomwsiykqigmqca) { $this->path = $mkomwsiykqigmqca; parent::__construct(); } public function amqagusacuuuaswg() : ?string { return $this->path; } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x69\x6e\151\x74", [$this, "\165\x77\x75\x67\141\151\161\x79\x77\x6d\x73\x65\x6b\163\161\x6d"]); parent::wigskegsqequoeks(); } public function uwugaiqywmseksqm() { if (!($this->get_cache_lifespan() && !wp_next_scheduled(static::swmaucwuymuqokiu))) { goto mcukocaaoyuugoeu; } $ycooswiwewekokei = $this->get_interval(); wp_schedule_event(time() + $ycooswiwewekokei, "\157\x70\x74\137\x65\x78\160\151\x72\145\144\137\143\141\143\150\x65\137\x63\162\x6f\x6e\x5f\x69\156\x74\145\x72\x76\141\154", static::swmaucwuymuqokiu); mcukocaaoyuugoeu: } private function aymegqumcmuwyuqm(string $mkomwsiykqigmqca) : bool { $mcowwqgmkuemoumu = ManipulateFile::kiygcugekegoqauw($mkomwsiykqigmqca); foreach ($mcowwqgmkuemoumu as $igqsaukqcqscimok) { if (!ManipulateFile::qkuqsuugayciskek($igqsaukqcqscimok)) { goto cgwokqwakqcmiieo; } goto okycquokqoamsquy; cgwokqwakqcmiieo: return false; okycquokqoamsquy: } scockmiqikwwkqse: return true; } private function ycumyoqmwqsqgmeu($qogsmwakwacwqogk) { $eouekqmooogkoqoo = "\x40\x5e" . preg_quote($qogsmwakwacwqogk["\150\157\163\x74"], "\100") . "\x40"; $mcowwqgmkuemoumu = ManipulateFile::kiygcugekegoqauw($this->amqagusacuuuaswg()); $yicgeeqawwokyssy = rtrim($qogsmwakwacwqogk["\x70\141\x74\x68"], "\x2f"); if (!$mcowwqgmkuemoumu) { goto mciumqyyossyiuyk; } return new CallbackFilterIterator($mcowwqgmkuemoumu, function ($yeacayasgueouoqc) use($eouekqmooogkoqoo, $yicgeeqawwokyssy) { if (!(!ManipulateFile::oagwcgcemwwykokc($yeacayasgueouoqc) || ManipulateFile::qkuqsuugayciskek($yeacayasgueouoqc))) { goto egwgyekaiqomyeaa; } return false; egwgyekaiqomyeaa: if (preg_match($eouekqmooogkoqoo, ManipulateFile::mawoacksgosuccme($yeacayasgueouoqc))) { goto kssuqmsgmaaeqigw; } return false; kssuqmsgmaaeqigw: if (!('' !== $yicgeeqawwokyssy && !$this->kcciqwskewsuaemk()->exists(ManipulateFile::scikcaaaiwcsqowm($yeacayasgueouoqc) . $yicgeeqawwokyssy))) { goto uwusswwekqcsisus; } return false; uwusswwekqcsisus: return true; }); mciumqyyossyiuyk: return false; } public function ccuciuoaysakakqu($wumscqwikueeogok) { if (!$wumscqwikueeogok) { goto wyqmeyoaggwuioak; } $ggauoeuaesiymgee = $auwuoyyagaiegwae = ManipulateI18N::mceoyuqgagciommq(); $ooqwimmeoeeaikyg = time() - $wumscqwikueeogok; $auwuoyyagaiegwae = $this->sscegwueamckwmcy("\143\x61\x63\x68\145\x5f\141\165\x74\x6f\x6d\141\164\x69\143\137\x63\141\x63\x68\145\x5f\160\x75\162\x67\x65\137\165\x72\154\163", $auwuoyyagaiegwae, $ooqwimmeoeeaikyg); if (is_array($auwuoyyagaiegwae)) { goto acaeigkmigikeuyu; } $auwuoyyagaiegwae = $ggauoeuaesiymgee; acaeigkmigikeuyu: $auwuoyyagaiegwae = array_filter($auwuoyyagaiegwae, "\151\163\x5f\x73\164\162\151\x6e\x67"); $auwuoyyagaiegwae = array_filter($auwuoyyagaiegwae); if (!$auwuoyyagaiegwae) { goto aeuosggumiiwoesm; } $auwuoyyagaiegwae = array_unique($auwuoyyagaiegwae); $meisgakuwcmwosms = []; $igyewwsuegggmkkk = Buffer::omgegoiwsakgwwug(); foreach ($auwuoyyagaiegwae as $eeamcawaiqocomwy) { $this->cqscqicucmeamkyq("\x63\x61\x63\x68\x65\137\x62\x65\146\157\x72\145\x5f\x61\x75\164\157\x6d\141\164\x69\143\137\x63\x61\143\150\145\137\160\165\162\147\x65\x5f\x64\x69\x72", $eeamcawaiqocomwy, $ooqwimmeoeeaikyg); $oicyaaqouscyiycq = []; if (!$igyewwsuegggmkkk) { goto omemqagskckoeoog; } $qogsmwakwacwqogk = ManipulateFormat::kcwgwosqkkkkmuks($eeamcawaiqocomwy); $iuaemokqameyemms = rtrim($qogsmwakwacwqogk["\160\x61\164\x68"], "\57"); $ucasskoyoewwmmii = $this->ycumyoqmwqsqgmeu($qogsmwakwacwqogk); foreach ($ucasskoyoewwmmii as $igqsaukqcqscimok) { $sgoqsiukkecgiiso = ManipulateFile::scikcaaaiwcsqowm($igqsaukqcqscimok); $qaisqkcgsgakqykq = $sgoqsiukkecgiiso . $iuaemokqameyemms; $ccykqsgoygiaowac = $this->euyowcyakomciogy($qaisqkcgsgakqykq, $ooqwimmeoeeaikyg); if (!$ccykqsgoygiaowac) { goto wykuosegisygosiq; } $oicyaaqouscyiycq[] = ["\x68\157\155\x65\137\165\162\x6c" => $eeamcawaiqocomwy, "\150\x6f\155\x65\x5f\160\141\164\150" => $qaisqkcgsgakqykq, "\154\157\x67\147\x65\x64\x5f\x69\x6e" => $sgoqsiukkecgiiso !== $this->amqagusacuuuaswg() . $qogsmwakwacwqogk["\150\x6f\x73\x74"], "\146\151\x6c\145\x73" => $ccykqsgoygiaowac]; wykuosegisygosiq: if (!$this->aymegqumcmuwyuqm($sgoqsiukkecgiiso)) { goto ugikgkwuwmgymgus; } $this->kcciqwskewsuaemk()->remove($sgoqsiukkecgiiso); ugikgkwuwmgymgus: omgcsmsikaggaooc: } cqeoguiqiymkyweo: if (!$oicyaaqouscyiycq) { goto gsgyayuaekgyoumc; } $meisgakuwcmwosms = array_merge($meisgakuwcmwosms, $oicyaaqouscyiycq); gsgyayuaekgyoumc: omemqagskckoeoog: $ywmkwiwkosakssii = ["\x75\162\x6c" => $eeamcawaiqocomwy, "\154\x69\x66\145\x73\x70\x61\x6e" => $wumscqwikueeogok, "\x66\151\154\x65\x5f\141\x67\x65\x5f\154\x69\155\151\x74" => $ooqwimmeoeeaikyg]; $this->cqscqicucmeamkyq("\143\x61\143\x68\145\x5f\x61\x66\164\x65\x72\137\141\x75\x74\x6f\x6d\141\164\x69\143\x5f\143\x61\x63\x68\x65\x5f\x70\x75\162\x67\x65\137\x64\x69\162", $oicyaaqouscyiycq, $ywmkwiwkosakssii); mukwsuuuqcgesmwc: } kqyeukywmgismyaq: $ywmkwiwkosakssii = ["\154\x69\x66\145\x73\160\141\x6e" => $wumscqwikueeogok, "\x66\x69\x6c\x65\x5f\141\x67\x65\137\154\151\x6d\x69\164" => $ooqwimmeoeeaikyg]; $this->cqscqicucmeamkyq("\x63\x61\143\x68\x65\137\x61\x66\164\x65\x72\x5f\141\165\x74\x6f\155\x61\164\x69\143\137\143\141\x63\150\145\137\160\x75\162\147\x65", $meisgakuwcmwosms, $ywmkwiwkosakssii); aeuosggumiiwoesm: wyqmeyoaggwuioak: } private function euyowcyakomciogy($mkomwsiykqigmqca, $ooqwimmeoeeaikyg) : array { $meisgakuwcmwosms = []; $mcowwqgmkuemoumu = ManipulateFile::kiygcugekegoqauw($mkomwsiykqigmqca); foreach ($mcowwqgmkuemoumu as $igqsaukqcqscimok) { if (!ManipulateFile::qkuqsuugayciskek($igqsaukqcqscimok)) { goto syykqmkiyoekqsek; } goto sqmqwqeoygcmqcim; syykqmkiyoekqsek: if (ManipulateFile::oagwcgcemwwykokc($igqsaukqcqscimok)) { goto wsqiqkiucakewgou; } if (!(ManipulateFile::mecmkmogggamegic($igqsaukqcqscimok) && ManipulateFile::awosikuiguowiumy($igqsaukqcqscimok) < $ooqwimmeoeeaikyg)) { goto ywsywoumuaykkeaa; } $esaqeawoigqgagum = ManipulateFile::scikcaaaiwcsqowm($igqsaukqcqscimok); if ($this->kcciqwskewsuaemk()->remove($esaqeawoigqgagum)) { goto aiqekkyauwswayyq; } goto sqmqwqeoygcmqcim; aiqekkyauwswayyq: $mkomwsiykqigmqca = dirname($esaqeawoigqgagum); if (in_array($mkomwsiykqigmqca, $meisgakuwcmwosms, true)) { goto mmcikqikqecaeswu; } $meisgakuwcmwosms[] = $mkomwsiykqigmqca; mmcikqikqecaeswu: ywsywoumuaykkeaa: goto yaumwqeommqigswq; wsqiqkiucakewgou: $kmgucgmywowuywem = $this->euyowcyakomciogy(ManipulateFile::scikcaaaiwcsqowm($igqsaukqcqscimok), $ooqwimmeoeeaikyg); $meisgakuwcmwosms = array_merge($meisgakuwcmwosms, $kmgucgmywowuywem); yaumwqeommqigswq: sqmqwqeoygcmqcim: } uyksacasqywyessc: if (!$this->aymegqumcmuwyuqm($mkomwsiykqigmqca)) { goto wiiqigwgyuiuksia; } $this->kcciqwskewsuaemk()->remove($mkomwsiykqigmqca); wiiqigwgyuiuksia: return $meisgakuwcmwosms; } }
