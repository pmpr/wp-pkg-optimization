<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6261aa1543cbb             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Purge; use Pmpr\Module\Optimization\Manipulate\ManipulateFile; use CallbackFilterIterator; use Pmpr\Module\Optimization\Manipulate\ManipulateFormat; use Pmpr\Module\Optimization\Manipulate\ManipulateI18N; class Expired extends Common { const swmaucwuymuqokiu = "\x6f\x70\x74\151\x6d\x69\172\141\164\151\157\x6e\137\x70\x75\x72\x67\145\x5f\164\151\155\145\x5f\x65\166\145\x6e\x74"; protected ?string $path = ''; public function __construct(?string $mkomwsiykqigmqca) { $this->path = $mkomwsiykqigmqca; parent::__construct(); } public function amqagusacuuuaswg() : ?string { return $this->path; } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\151\156\x69\164", [$this, "\165\x77\165\x67\141\151\x71\x79\167\155\163\145\153\x73\161\x6d"]); parent::wigskegsqequoeks(); } public function uwugaiqywmseksqm() { if (!($this->get_cache_lifespan() && !wp_next_scheduled(static::swmaucwuymuqokiu))) { goto suwsiaeoumiwkiqg; } $ycooswiwewekokei = $this->get_interval(); wp_schedule_event(time() + $ycooswiwewekokei, "\157\x70\x74\x5f\145\x78\160\151\x72\x65\x64\137\x63\x61\143\x68\x65\x5f\x63\162\157\x6e\x5f\151\x6e\164\x65\x72\166\141\x6c", static::swmaucwuymuqokiu); suwsiaeoumiwkiqg: } private function aymegqumcmuwyuqm(string $mkomwsiykqigmqca) : bool { $mcowwqgmkuemoumu = ManipulateFile::kiygcugekegoqauw($mkomwsiykqigmqca); foreach ($mcowwqgmkuemoumu as $igqsaukqcqscimok) { if (!ManipulateFile::qkuqsuugayciskek($igqsaukqcqscimok)) { goto koiyaaokigmamqyc; } goto amyaoueckysgmmas; koiyaaokigmamqyc: return false; amyaoueckysgmmas: } yoauoocuckogmsuw: return true; } private function ycumyoqmwqsqgmeu($qogsmwakwacwqogk) { $eouekqmooogkoqoo = "\x40\x5e" . preg_quote($qogsmwakwacwqogk["\150\157\x73\164"], "\x40") . "\x40"; $mcowwqgmkuemoumu = ManipulateFile::kiygcugekegoqauw($this->amqagusacuuuaswg()); $yicgeeqawwokyssy = rtrim($qogsmwakwacwqogk["\x70\x61\164\x68"], "\x2f"); if (!$mcowwqgmkuemoumu) { goto kikkkocywiyuyuqw; } return new CallbackFilterIterator($mcowwqgmkuemoumu, function ($yeacayasgueouoqc) use($eouekqmooogkoqoo, $yicgeeqawwokyssy) { if (!(!ManipulateFile::oagwcgcemwwykokc($yeacayasgueouoqc) || ManipulateFile::qkuqsuugayciskek($yeacayasgueouoqc))) { goto qiqegseqwywcmwoe; } return false; qiqegseqwywcmwoe: if (preg_match($eouekqmooogkoqoo, ManipulateFile::mawoacksgosuccme($yeacayasgueouoqc))) { goto yosyyiksyyscacus; } return false; yosyyiksyyscacus: if (!('' !== $yicgeeqawwokyssy && !$this->kcciqwskewsuaemk()->exists(ManipulateFile::scikcaaaiwcsqowm($yeacayasgueouoqc) . $yicgeeqawwokyssy))) { goto kwcscewawgicomok; } return false; kwcscewawgicomok: return true; }); kikkkocywiyuyuqw: return false; } public function ccuciuoaysakakqu($wumscqwikueeogok) { if (!$wumscqwikueeogok) { goto iecqkqoiqimmisyw; } $ggauoeuaesiymgee = $auwuoyyagaiegwae = ManipulateI18N::mceoyuqgagciommq(); $ooqwimmeoeeaikyg = time() - $wumscqwikueeogok; $auwuoyyagaiegwae = $this->sscegwueamckwmcy("\143\141\143\x68\145\x5f\x61\x75\164\x6f\x6d\141\164\151\x63\137\143\x61\x63\x68\x65\137\160\x75\x72\x67\x65\137\165\x72\x6c\163", $auwuoyyagaiegwae, $ooqwimmeoeeaikyg); if (is_array($auwuoyyagaiegwae)) { goto aqeyqwuywqcmuoce; } $auwuoyyagaiegwae = $ggauoeuaesiymgee; aqeyqwuywqcmuoce: $auwuoyyagaiegwae = array_filter($auwuoyyagaiegwae, "\151\163\x5f\x73\x74\162\x69\x6e\x67"); $auwuoyyagaiegwae = array_filter($auwuoyyagaiegwae); if (!$auwuoyyagaiegwae) { goto eysuawiooiswaseq; } $auwuoyyagaiegwae = array_unique($auwuoyyagaiegwae); $meisgakuwcmwosms = []; $igyewwsuegggmkkk = Buffer::omgegoiwsakgwwug(); foreach ($auwuoyyagaiegwae as $eeamcawaiqocomwy) { $this->cqscqicucmeamkyq("\143\x61\x63\150\145\x5f\142\x65\x66\157\162\x65\x5f\141\x75\164\x6f\x6d\x61\164\151\143\137\143\141\x63\150\145\137\160\165\x72\x67\145\137\144\x69\x72", $eeamcawaiqocomwy, $ooqwimmeoeeaikyg); $oicyaaqouscyiycq = []; if (!$igyewwsuegggmkkk) { goto kiewcwsykccgocuc; } $qogsmwakwacwqogk = ManipulateFormat::kcwgwosqkkkkmuks($eeamcawaiqocomwy); $iuaemokqameyemms = rtrim($qogsmwakwacwqogk["\160\x61\x74\150"], "\x2f"); $ucasskoyoewwmmii = $this->ycumyoqmwqsqgmeu($qogsmwakwacwqogk); foreach ($ucasskoyoewwmmii as $igqsaukqcqscimok) { $sgoqsiukkecgiiso = ManipulateFile::scikcaaaiwcsqowm($igqsaukqcqscimok); $qaisqkcgsgakqykq = $sgoqsiukkecgiiso . $iuaemokqameyemms; $ccykqsgoygiaowac = $this->euyowcyakomciogy($qaisqkcgsgakqykq, $ooqwimmeoeeaikyg); if (!$ccykqsgoygiaowac) { goto cueuscqkicwwicei; } $oicyaaqouscyiycq[] = ["\x68\x6f\155\145\137\165\x72\x6c" => $eeamcawaiqocomwy, "\150\x6f\155\x65\137\160\x61\164\x68" => $qaisqkcgsgakqykq, "\x6c\x6f\147\x67\x65\144\x5f\x69\x6e" => $sgoqsiukkecgiiso !== $this->amqagusacuuuaswg() . $qogsmwakwacwqogk["\150\x6f\163\x74"], "\x66\x69\x6c\x65\x73" => $ccykqsgoygiaowac]; cueuscqkicwwicei: if (!$this->aymegqumcmuwyuqm($sgoqsiukkecgiiso)) { goto gcecamucuogcciig; } $this->kcciqwskewsuaemk()->remove($sgoqsiukkecgiiso); gcecamucuogcciig: oaociaioauummsey: } akoweomooyuwamow: if (!$oicyaaqouscyiycq) { goto suscosoukqeyyqgs; } $meisgakuwcmwosms = array_merge($meisgakuwcmwosms, $oicyaaqouscyiycq); suscosoukqeyyqgs: kiewcwsykccgocuc: $ywmkwiwkosakssii = ["\x75\162\x6c" => $eeamcawaiqocomwy, "\x6c\x69\x66\x65\163\x70\141\x6e" => $wumscqwikueeogok, "\146\x69\154\x65\x5f\x61\147\145\x5f\x6c\x69\155\151\164" => $ooqwimmeoeeaikyg]; $this->cqscqicucmeamkyq("\143\141\143\150\145\137\x61\x66\x74\145\x72\137\x61\165\164\x6f\x6d\x61\x74\x69\x63\x5f\143\141\143\150\x65\137\160\x75\162\x67\145\x5f\144\151\162", $oicyaaqouscyiycq, $ywmkwiwkosakssii); qayiqaykkywcyisq: } aymoguycgmuggcik: $ywmkwiwkosakssii = ["\x6c\x69\146\145\x73\160\141\156" => $wumscqwikueeogok, "\146\151\154\145\137\141\147\145\x5f\x6c\151\155\x69\x74" => $ooqwimmeoeeaikyg]; $this->cqscqicucmeamkyq("\143\x61\x63\150\x65\x5f\x61\146\x74\x65\162\x5f\x61\165\164\x6f\155\141\164\x69\x63\x5f\143\141\143\150\145\x5f\x70\x75\162\147\x65", $meisgakuwcmwosms, $ywmkwiwkosakssii); eysuawiooiswaseq: iecqkqoiqimmisyw: } private function euyowcyakomciogy($mkomwsiykqigmqca, $ooqwimmeoeeaikyg) : array { $meisgakuwcmwosms = []; $mcowwqgmkuemoumu = ManipulateFile::kiygcugekegoqauw($mkomwsiykqigmqca); foreach ($mcowwqgmkuemoumu as $igqsaukqcqscimok) { if (!ManipulateFile::qkuqsuugayciskek($igqsaukqcqscimok)) { goto euuekiyqwkowiees; } goto egiauwuekseyeaeq; euuekiyqwkowiees: if (ManipulateFile::oagwcgcemwwykokc($igqsaukqcqscimok)) { goto esokkakkumskkmiu; } if (!(ManipulateFile::mecmkmogggamegic($igqsaukqcqscimok) && ManipulateFile::awosikuiguowiumy($igqsaukqcqscimok) < $ooqwimmeoeeaikyg)) { goto wyqueeskecameuks; } $esaqeawoigqgagum = ManipulateFile::scikcaaaiwcsqowm($igqsaukqcqscimok); if ($this->kcciqwskewsuaemk()->remove($esaqeawoigqgagum)) { goto assoyoeukmqiucyq; } goto egiauwuekseyeaeq; assoyoeukmqiucyq: $mkomwsiykqigmqca = dirname($esaqeawoigqgagum); if (in_array($mkomwsiykqigmqca, $meisgakuwcmwosms, true)) { goto kikkkoqiumqoeiyy; } $meisgakuwcmwosms[] = $mkomwsiykqigmqca; kikkkoqiumqoeiyy: wyqueeskecameuks: goto msiuqseowuumiwuo; esokkakkumskkmiu: $kmgucgmywowuywem = $this->euyowcyakomciogy(ManipulateFile::scikcaaaiwcsqowm($igqsaukqcqscimok), $ooqwimmeoeeaikyg); $meisgakuwcmwosms = array_merge($meisgakuwcmwosms, $kmgucgmywowuywem); msiuqseowuumiwuo: egiauwuekseyeaeq: } eogomkswkaqwyycm: if (!$this->aymegqumcmuwyuqm($mkomwsiykqigmqca)) { goto gqycmyieayoegcsy; } $this->kcciqwskewsuaemk()->remove($mkomwsiykqigmqca); gqycmyieayoegcsy: return $meisgakuwcmwosms; } }
