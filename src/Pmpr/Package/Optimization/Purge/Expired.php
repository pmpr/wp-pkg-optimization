<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c6e9e36d31a             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Purge; use Pmpr\Package\Optimization\Manipulate\ManipulateFile; use CallbackFilterIterator; use Pmpr\Package\Optimization\Manipulate\ManipulateFormat; use Pmpr\Package\Optimization\Manipulate\ManipulateI18N; class Expired extends Common { const swmaucwuymuqokiu = "\157\x70\x74\x69\x6d\151\172\x61\x74\x69\157\x6e\137\x70\165\162\147\145\x5f\164\151\x6d\x65\x5f\145\x76\x65\156\x74"; protected ?string $path = ''; public function __construct(?string $mkomwsiykqigmqca) { $this->path = $mkomwsiykqigmqca; parent::__construct(); } public function amqagusacuuuaswg() : ?string { return $this->path; } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\151\x6e\x69\x74", [$this, "\165\x77\x75\147\141\151\x71\171\167\155\x73\x65\153\x73\x71\x6d"]); parent::wigskegsqequoeks(); } public function uwugaiqywmseksqm() { if (!($this->get_cache_lifespan() && !wp_next_scheduled(static::swmaucwuymuqokiu))) { goto osuscoaaomwcqkew; } $ycooswiwewekokei = $this->get_interval(); wp_schedule_event(time() + $ycooswiwewekokei, "\x6f\160\x74\137\145\x78\x70\x69\162\145\x64\137\x63\141\x63\x68\145\137\x63\162\x6f\156\x5f\x69\156\x74\145\x72\166\141\154", static::swmaucwuymuqokiu); osuscoaaomwcqkew: } private function aymegqumcmuwyuqm(string $mkomwsiykqigmqca) : bool { $mcowwqgmkuemoumu = ManipulateFile::kiygcugekegoqauw($mkomwsiykqigmqca); foreach ($mcowwqgmkuemoumu as $igqsaukqcqscimok) { if (!ManipulateFile::qkuqsuugayciskek($igqsaukqcqscimok)) { goto mkomygccqkmkumsi; } goto cgmgqucewwssmicq; mkomygccqkmkumsi: return false; cgmgqucewwssmicq: } ciucewqgyoiouesq: return true; } private function ycumyoqmwqsqgmeu($qogsmwakwacwqogk) { $eouekqmooogkoqoo = "\100\136" . preg_quote($qogsmwakwacwqogk["\x68\x6f\163\x74"], "\100") . "\100"; $mcowwqgmkuemoumu = ManipulateFile::kiygcugekegoqauw($this->amqagusacuuuaswg()); $yicgeeqawwokyssy = rtrim($qogsmwakwacwqogk["\x70\141\x74\150"], "\57"); if (!$mcowwqgmkuemoumu) { goto sqmoqymckwsogsqg; } return new CallbackFilterIterator($mcowwqgmkuemoumu, function ($yeacayasgueouoqc) use($eouekqmooogkoqoo, $yicgeeqawwokyssy) { if (!(!ManipulateFile::oagwcgcemwwykokc($yeacayasgueouoqc) || ManipulateFile::qkuqsuugayciskek($yeacayasgueouoqc))) { goto ussceseaimqywuiy; } return false; ussceseaimqywuiy: if (preg_match($eouekqmooogkoqoo, ManipulateFile::mawoacksgosuccme($yeacayasgueouoqc))) { goto oyiuemaaykgkqqam; } return false; oyiuemaaykgkqqam: if (!('' !== $yicgeeqawwokyssy && !$this->kcciqwskewsuaemk()->exists(ManipulateFile::scikcaaaiwcsqowm($yeacayasgueouoqc) . $yicgeeqawwokyssy))) { goto gqmewagyagamokok; } return false; gqmewagyagamokok: return true; }); sqmoqymckwsogsqg: return false; } public function ccuciuoaysakakqu($wumscqwikueeogok) { if (!$wumscqwikueeogok) { goto quaqmuusokiyqgqe; } $ggauoeuaesiymgee = $auwuoyyagaiegwae = ManipulateI18N::mceoyuqgagciommq(); $ooqwimmeoeeaikyg = time() - $wumscqwikueeogok; $auwuoyyagaiegwae = $this->sscegwueamckwmcy("\143\141\x63\150\x65\x5f\x61\165\x74\157\x6d\141\x74\x69\143\137\143\x61\x63\x68\x65\137\160\x75\162\x67\145\x5f\165\x72\154\x73", $auwuoyyagaiegwae, $ooqwimmeoeeaikyg); if (is_array($auwuoyyagaiegwae)) { goto uycesqqkoeamocgm; } $auwuoyyagaiegwae = $ggauoeuaesiymgee; uycesqqkoeamocgm: $auwuoyyagaiegwae = array_filter($auwuoyyagaiegwae, "\151\163\x5f\163\x74\x72\151\156\x67"); $auwuoyyagaiegwae = array_filter($auwuoyyagaiegwae); if (!$auwuoyyagaiegwae) { goto yuqgwwmqwqiuwmaw; } $auwuoyyagaiegwae = array_unique($auwuoyyagaiegwae); $meisgakuwcmwosms = []; $igyewwsuegggmkkk = Buffer::omgegoiwsakgwwug(); foreach ($auwuoyyagaiegwae as $eeamcawaiqocomwy) { $this->cqscqicucmeamkyq("\143\x61\x63\150\145\137\x62\x65\146\x6f\x72\x65\x5f\141\x75\x74\157\x6d\141\164\x69\x63\137\x63\x61\x63\x68\145\x5f\x70\165\162\x67\x65\x5f\144\151\x72", $eeamcawaiqocomwy, $ooqwimmeoeeaikyg); $oicyaaqouscyiycq = []; if (!$igyewwsuegggmkkk) { goto easqmyamcmeesgya; } $qogsmwakwacwqogk = ManipulateFormat::kcwgwosqkkkkmuks($eeamcawaiqocomwy); $iuaemokqameyemms = rtrim($qogsmwakwacwqogk["\160\x61\164\x68"], "\x2f"); $ucasskoyoewwmmii = $this->ycumyoqmwqsqgmeu($qogsmwakwacwqogk); foreach ($ucasskoyoewwmmii as $igqsaukqcqscimok) { $sgoqsiukkecgiiso = ManipulateFile::scikcaaaiwcsqowm($igqsaukqcqscimok); $qaisqkcgsgakqykq = $sgoqsiukkecgiiso . $iuaemokqameyemms; $ccykqsgoygiaowac = $this->euyowcyakomciogy($qaisqkcgsgakqykq, $ooqwimmeoeeaikyg); if (!$ccykqsgoygiaowac) { goto goqmywuiicciasyk; } $oicyaaqouscyiycq[] = ["\x68\x6f\x6d\x65\137\x75\162\154" => $eeamcawaiqocomwy, "\150\157\x6d\x65\x5f\x70\x61\164\150" => $qaisqkcgsgakqykq, "\x6c\157\147\x67\145\x64\137\x69\156" => $sgoqsiukkecgiiso !== $this->amqagusacuuuaswg() . $qogsmwakwacwqogk["\x68\157\x73\x74"], "\x66\151\x6c\145\x73" => $ccykqsgoygiaowac]; goqmywuiicciasyk: if (!$this->aymegqumcmuwyuqm($sgoqsiukkecgiiso)) { goto siecswkggyikqkga; } $this->kcciqwskewsuaemk()->remove($sgoqsiukkecgiiso); siecswkggyikqkga: oyiuyywyeoskckuw: } wkgskiuiukiuyque: if (!$oicyaaqouscyiycq) { goto qkuiwoqksgayqqmg; } $meisgakuwcmwosms = array_merge($meisgakuwcmwosms, $oicyaaqouscyiycq); qkuiwoqksgayqqmg: easqmyamcmeesgya: $ywmkwiwkosakssii = ["\165\162\154" => $eeamcawaiqocomwy, "\154\x69\x66\x65\163\160\x61\156" => $wumscqwikueeogok, "\x66\151\x6c\x65\x5f\141\x67\145\x5f\154\151\x6d\x69\x74" => $ooqwimmeoeeaikyg]; $this->cqscqicucmeamkyq("\143\x61\x63\x68\x65\137\x61\146\x74\145\162\137\x61\x75\x74\157\x6d\141\x74\x69\x63\137\143\x61\143\150\145\x5f\x70\165\x72\x67\145\x5f\x64\x69\x72", $oicyaaqouscyiycq, $ywmkwiwkosakssii); ukomuiwukymcoaso: } ceiwqkyquikcemmo: $ywmkwiwkosakssii = ["\154\151\146\145\x73\160\141\156" => $wumscqwikueeogok, "\x66\151\154\x65\x5f\x61\147\x65\x5f\154\x69\x6d\x69\x74" => $ooqwimmeoeeaikyg]; $this->cqscqicucmeamkyq("\x63\141\143\x68\x65\x5f\x61\x66\164\145\162\137\x61\165\164\157\x6d\141\x74\x69\143\x5f\x63\141\143\150\x65\x5f\160\165\162\x67\x65", $meisgakuwcmwosms, $ywmkwiwkosakssii); yuqgwwmqwqiuwmaw: quaqmuusokiyqgqe: } private function euyowcyakomciogy($mkomwsiykqigmqca, $ooqwimmeoeeaikyg) : array { $meisgakuwcmwosms = []; $mcowwqgmkuemoumu = ManipulateFile::kiygcugekegoqauw($mkomwsiykqigmqca); foreach ($mcowwqgmkuemoumu as $igqsaukqcqscimok) { if (!ManipulateFile::qkuqsuugayciskek($igqsaukqcqscimok)) { goto yamyagayiooyeekg; } goto iksewmsaugayqaqq; yamyagayiooyeekg: if (ManipulateFile::oagwcgcemwwykokc($igqsaukqcqscimok)) { goto mqiiqkuaoekeuswo; } if (!(ManipulateFile::mecmkmogggamegic($igqsaukqcqscimok) && ManipulateFile::awosikuiguowiumy($igqsaukqcqscimok) < $ooqwimmeoeeaikyg)) { goto ecouwqosmoyyqmkw; } $esaqeawoigqgagum = ManipulateFile::scikcaaaiwcsqowm($igqsaukqcqscimok); if ($this->kcciqwskewsuaemk()->remove($esaqeawoigqgagum)) { goto yoagcooekomeokwg; } goto iksewmsaugayqaqq; yoagcooekomeokwg: $mkomwsiykqigmqca = dirname($esaqeawoigqgagum); if (in_array($mkomwsiykqigmqca, $meisgakuwcmwosms, true)) { goto eckcqesiokgwkkiw; } $meisgakuwcmwosms[] = $mkomwsiykqigmqca; eckcqesiokgwkkiw: ecouwqosmoyyqmkw: goto qmoocweoekqueuyy; mqiiqkuaoekeuswo: $kmgucgmywowuywem = $this->euyowcyakomciogy(ManipulateFile::scikcaaaiwcsqowm($igqsaukqcqscimok), $ooqwimmeoeeaikyg); $meisgakuwcmwosms = array_merge($meisgakuwcmwosms, $kmgucgmywowuywem); qmoocweoekqueuyy: iksewmsaugayqaqq: } smiemmcqqukyguuu: if (!$this->aymegqumcmuwyuqm($mkomwsiykqigmqca)) { goto sgiwoiscywusgmmm; } $this->kcciqwskewsuaemk()->remove($mkomwsiykqigmqca); sgiwoiscywusgmmm: return $meisgakuwcmwosms; } }
