<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             616c0c2e2ea28             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Purge; use Pmpr\Package\Optimization\Manipulate\ManipulateFile; use CallbackFilterIterator; use Pmpr\Package\Optimization\Manipulate\ManipulateFormat; use Pmpr\Package\Optimization\Manipulate\ManipulateI18N; class Expired extends Common { const EVENT_NAME = "\x6f\160\x74\x69\155\151\172\141\164\x69\x6f\x6e\x5f\x70\165\162\x67\x65\x5f\x74\151\155\145\137\145\166\x65\x6e\164"; protected ?string $path = ''; public function __construct(?string $mkomwsiykqigmqca) { $this->path = $mkomwsiykqigmqca; parent::__construct(); } public function amqagusacuuuaswg() : ?string { return $this->path; } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x69\156\x69\x74", [$this, "\x75\167\165\x67\141\x69\x71\171\x77\155\163\x65\153\163\161\x6d"]); parent::wigskegsqequoeks(); } public function uwugaiqywmseksqm() { goto yiuukywwcqqeygsq; yiuukywwcqqeygsq: if (!($this->get_cache_lifespan() && !wp_next_scheduled(static::EVENT_NAME))) { goto uwsyyecqikaqcgqc; } goto iowqoiemkmqewasi; iowqoiemkmqewasi: $ycooswiwewekokei = $this->get_interval(); goto qiyeosueygcackus; guiwoqmsuekuqmsq: uwsyyecqikaqcgqc: goto gscmysweygemkygw; qiyeosueygcackus: wp_schedule_event(time() + $ycooswiwewekokei, "\157\160\164\x5f\x65\170\x70\x69\162\145\x64\137\x63\141\143\x68\145\x5f\143\x72\157\x6e\137\x69\156\x74\x65\x72\166\x61\x6c", static::EVENT_NAME); goto guiwoqmsuekuqmsq; gscmysweygemkygw: } private function aymegqumcmuwyuqm(string $mkomwsiykqigmqca) : bool { goto ocymqssawecummoc; uoswemqqoiqcgmqu: aseemaokucmmkewa: goto kamiwukukaqcymey; mqqaucaiuyyyqwmc: foreach ($mcowwqgmkuemoumu as $igqsaukqcqscimok) { goto qkksuykimikkiccq; uaguomesycmigqes: goto yeikwmyoqqweggsa; goto aqwikyayumyswssg; qqisiyigaoqwgiwy: yeikwmyoqqweggsa: goto hgcmiscgymoymyeu; kuguauccymuummkc: return false; goto qqisiyigaoqwgiwy; aqwikyayumyswssg: sieekqakgoqqgeoo: goto kuguauccymuummkc; qkksuykimikkiccq: if (!ManipulateFile::qkuqsuugayciskek($igqsaukqcqscimok)) { goto sieekqakgoqqgeoo; } goto uaguomesycmigqes; hgcmiscgymoymyeu: } goto uoswemqqoiqcgmqu; ocymqssawecummoc: $mcowwqgmkuemoumu = ManipulateFile::kiygcugekegoqauw($mkomwsiykqigmqca); goto mqqaucaiuyyyqwmc; kamiwukukaqcymey: return true; goto qywscyumigwawkie; qywscyumigwawkie: } private function ycumyoqmwqsqgmeu($qogsmwakwacwqogk) { goto wogagiocuukecmug; ocswoocseceiyqgi: wkeykiwuiwawsmiu: goto esysqcuwsagwkkwo; ougcmuoqgysuugwe: $mcowwqgmkuemoumu = ManipulateFile::kiygcugekegoqauw($this->amqagusacuuuaswg()); goto ycowikmssyscsiuk; ycowikmssyscsiuk: $yicgeeqawwokyssy = rtrim($qogsmwakwacwqogk["\160\x61\164\x68"], "\x2f"); goto aagsgaoawimoyyyk; esysqcuwsagwkkwo: return false; goto qamggugcciewoqaq; aagsgaoawimoyyyk: if (!$mcowwqgmkuemoumu) { goto wkeykiwuiwawsmiu; } goto iuuiaagemkckyaci; wogagiocuukecmug: $eouekqmooogkoqoo = "\x40\x5e" . preg_quote($qogsmwakwacwqogk["\x68\157\x73\164"], "\100") . "\x40"; goto ougcmuoqgysuugwe; iuuiaagemkckyaci: return new CallbackFilterIterator($mcowwqgmkuemoumu, function ($yeacayasgueouoqc) use($eouekqmooogkoqoo, $yicgeeqawwokyssy) { goto kgkggaeemkgaccui; sysoiysegowwamyi: aqoucoqyawkgwyck: goto oeqmmwguocqucgee; eyacicemoagyyyce: return false; goto iowuumewocwkceou; ymwayggyccggmceq: if (preg_match($eouekqmooogkoqoo, ManipulateFile::mawoacksgosuccme($yeacayasgueouoqc))) { goto aqoucoqyawkgwyck; } goto mcgiaaykssiskgaa; oeqmmwguocqucgee: if (!('' !== $yicgeeqawwokyssy && !$this->kcciqwskewsuaemk()->exists(ManipulateFile::scikcaaaiwcsqowm($yeacayasgueouoqc) . $yicgeeqawwokyssy))) { goto kyumuucowakwmakq; } goto mmskewcoiaeuiqmi; mmskewcoiaeuiqmi: return false; goto sooukmyooawqaqma; sooukmyooawqaqma: kyumuucowakwmakq: goto kwycakkkuakgscww; iowuumewocwkceou: sskggusmqwiokcoy: goto ymwayggyccggmceq; kwycakkkuakgscww: return true; goto mccicqqoiqmickic; mcgiaaykssiskgaa: return false; goto sysoiysegowwamyi; kgkggaeemkgaccui: if (!(!ManipulateFile::oagwcgcemwwykokc($yeacayasgueouoqc) || ManipulateFile::qkuqsuugayciskek($yeacayasgueouoqc))) { goto sskggusmqwiokcoy; } goto eyacicemoagyyyce; mccicqqoiqmickic: }); goto ocswoocseceiyqgi; qamggugcciewoqaq: } public function ccuciuoaysakakqu($wumscqwikueeogok) { goto ickycigiuiwgmyws; wcoymgwyykauukuq: $ywmkwiwkosakssii = ["\x6c\151\x66\x65\x73\160\141\x6e" => $wumscqwikueeogok, "\146\x69\x6c\x65\137\x61\147\x65\137\x6c\x69\155\x69\164" => $ooqwimmeoeeaikyg]; goto wikaskuciyssiaea; qyiqmoeockmkqgca: $auwuoyyagaiegwae = array_unique($auwuoyyagaiegwae); goto yymeyucsqkwwyoyu; qcqumquqogoukkwu: gsksaikwgqsiowuq: goto cmayaqwsoqwuyiug; ickycigiuiwgmyws: if (!$wumscqwikueeogok) { goto skecaossewayuqyg; } goto gwqyyuasqiquucsu; qsmakmgcgcisywwc: wcecucsciswygeqq: goto qygwgskgigyiqcao; cmayaqwsoqwuyiug: $auwuoyyagaiegwae = array_filter($auwuoyyagaiegwae, "\x69\163\137\163\x74\x72\x69\x6e\x67"); goto mimmaqquyqcgkgma; qygwgskgigyiqcao: skecaossewayuqyg: goto qugqqiyqcgacuqkk; imyucowmgaoaiyam: $auwuoyyagaiegwae = $ggauoeuaesiymgee; goto qcqumquqogoukkwu; mkwiimcwoemmsawk: $igyewwsuegggmkkk = Buffer::omgegoiwsakgwwug(); goto yemmmkmsamgikgoq; wikaskuciyssiaea: $this->cqscqicucmeamkyq("\143\141\143\150\x65\137\x61\x66\164\x65\x72\x5f\141\x75\x74\157\155\x61\x74\151\x63\137\x63\x61\143\x68\145\x5f\160\165\162\x67\145", $meisgakuwcmwosms, $ywmkwiwkosakssii); goto qsmakmgcgcisywwc; mimmaqquyqcgkgma: $auwuoyyagaiegwae = array_filter($auwuoyyagaiegwae); goto oiokkacaieswccye; gwqyyuasqiquucsu: $ggauoeuaesiymgee = $auwuoyyagaiegwae = ManipulateI18N::mceoyuqgagciommq(); goto kkokomceuqcksqmw; doceecwiieccywmq: $auwuoyyagaiegwae = $this->sscegwueamckwmcy("\143\x61\143\x68\x65\137\x61\x75\x74\157\155\141\164\151\143\x5f\143\x61\143\x68\x65\x5f\x70\165\162\x67\145\x5f\165\162\x6c\x73", $auwuoyyagaiegwae, $ooqwimmeoeeaikyg); goto nagegoomawccoesa; qikeguekwsmewscq: kuqmaygwmyayyaqs: goto wcoymgwyykauukuq; nagegoomawccoesa: if (is_array($auwuoyyagaiegwae)) { goto gsksaikwgqsiowuq; } goto imyucowmgaoaiyam; oiokkacaieswccye: if (!$auwuoyyagaiegwae) { goto wcecucsciswygeqq; } goto qyiqmoeockmkqgca; yemmmkmsamgikgoq: foreach ($auwuoyyagaiegwae as $eeamcawaiqocomwy) { goto cmckmmwqkgkmauow; gsoisieoqagwweki: if (!$oicyaaqouscyiycq) { goto omqquicsamaciuow; } goto wkuwkqwkgeksqwoe; cmckmmwqkgkmauow: $this->cqscqicucmeamkyq("\x63\141\x63\x68\145\137\x62\x65\x66\x6f\162\145\137\141\165\x74\157\155\141\x74\x69\143\x5f\143\141\x63\150\x65\137\x70\x75\x72\x67\145\137\144\x69\162", $eeamcawaiqocomwy, $ooqwimmeoeeaikyg); goto uuqqioqmameaooki; ywceiuemaoowsess: $ucasskoyoewwmmii = $this->ycumyoqmwqsqgmeu($qogsmwakwacwqogk); goto ugqqwuyqawqwacuw; gowgwskywyqgaeke: mkeyagagqqmayimw: goto gsoisieoqagwweki; isiaqgoyssmewesi: $qogsmwakwacwqogk = ManipulateFormat::kcwgwosqkkkkmuks($eeamcawaiqocomwy); goto smqaeiwowicwkyqu; uqiowycseskckoqq: omqquicsamaciuow: goto eeyeuakaequcqikw; uuqqioqmameaooki: $oicyaaqouscyiycq = []; goto eimkegkeksgauuoc; qyyowcmyggmmkqag: wgoswkyqgcmyiiis: goto qkcguqcqywkciokk; ycsmqwcwuyswwkca: $ywmkwiwkosakssii = ["\165\x72\154" => $eeamcawaiqocomwy, "\x6c\x69\146\x65\163\x70\141\x6e" => $wumscqwikueeogok, "\146\x69\x6c\x65\x5f\x61\147\145\x5f\x6c\151\155\x69\x74" => $ooqwimmeoeeaikyg]; goto kscyowywgocauqag; ugqqwuyqawqwacuw: foreach ($ucasskoyoewwmmii as $igqsaukqcqscimok) { goto ugkacsuuamggoaee; ugkacsuuamggoaee: $sgoqsiukkecgiiso = ManipulateFile::scikcaaaiwcsqowm($igqsaukqcqscimok); goto aassyqocioskyqss; qeqkywcmyccagagy: aayuoggsqocyigmi: goto aagqsqscqcqsgwga; ugkwekwgewwoumkk: if (!$ccykqsgoygiaowac) { goto egwgcoeimkcmuoay; } goto saumgwumguugmwmc; aassyqocioskyqss: $qaisqkcgsgakqykq = $sgoqsiukkecgiiso . $iuaemokqameyemms; goto ykiikqagkawsoaci; aqywkgmsimoyusww: if (!$this->aymegqumcmuwyuqm($sgoqsiukkecgiiso)) { goto aayuoggsqocyigmi; } goto aoqmkcscmggooccq; miwwmkuqiakemmye: egwgcoeimkcmuoay: goto aqywkgmsimoyusww; saumgwumguugmwmc: $oicyaaqouscyiycq[] = ["\x68\x6f\x6d\x65\137\165\x72\154" => $eeamcawaiqocomwy, "\150\x6f\x6d\x65\x5f\x70\141\164\x68" => $qaisqkcgsgakqykq, "\154\x6f\147\147\145\144\x5f\x69\x6e" => $sgoqsiukkecgiiso !== $this->amqagusacuuuaswg() . $qogsmwakwacwqogk["\x68\x6f\x73\164"], "\146\151\154\x65\163" => $ccykqsgoygiaowac]; goto miwwmkuqiakemmye; ykiikqagkawsoaci: $ccykqsgoygiaowac = $this->euyowcyakomciogy($qaisqkcgsgakqykq, $ooqwimmeoeeaikyg); goto ugkwekwgewwoumkk; aagqsqscqcqsgwga: gukauemcgeeiucky: goto mwqyieouoskcmees; aoqmkcscmggooccq: $this->kcciqwskewsuaemk()->remove($sgoqsiukkecgiiso); goto qeqkywcmyccagagy; mwqyieouoskcmees: } goto gowgwskywyqgaeke; eimkegkeksgauuoc: if (!$igyewwsuegggmkkk) { goto agykysuskscqskcm; } goto isiaqgoyssmewesi; kscyowywgocauqag: $this->cqscqicucmeamkyq("\x63\x61\143\x68\x65\137\x61\146\164\145\162\137\141\165\164\157\x6d\x61\x74\x69\143\137\143\141\x63\150\x65\x5f\160\x75\x72\147\x65\x5f\144\151\162", $oicyaaqouscyiycq, $ywmkwiwkosakssii); goto qyyowcmyggmmkqag; eeyeuakaequcqikw: agykysuskscqskcm: goto ycsmqwcwuyswwkca; wkuwkqwkgeksqwoe: $meisgakuwcmwosms = array_merge($meisgakuwcmwosms, $oicyaaqouscyiycq); goto uqiowycseskckoqq; smqaeiwowicwkyqu: $iuaemokqameyemms = rtrim($qogsmwakwacwqogk["\x70\141\x74\x68"], "\57"); goto ywceiuemaoowsess; qkcguqcqywkciokk: } goto qikeguekwsmewscq; yymeyucsqkwwyoyu: $meisgakuwcmwosms = []; goto mkwiimcwoemmsawk; kkokomceuqcksqmw: $ooqwimmeoeeaikyg = time() - $wumscqwikueeogok; goto doceecwiieccywmq; qugqqiyqcgacuqkk: } private function euyowcyakomciogy($mkomwsiykqigmqca, $ooqwimmeoeeaikyg) : array { goto oeyaeawyigiygyus; kescwsiuywawyqwu: escqecamuceuuueu: goto yqqmeykkyqoiusiu; yqqmeykkyqoiusiu: if (!$this->aymegqumcmuwyuqm($mkomwsiykqigmqca)) { goto sokakmqsquykwcmo; } goto eyqmqqgqiuscecci; eyqmqqgqiuscecci: $this->kcciqwskewsuaemk()->remove($mkomwsiykqigmqca); goto kqocyskgsigykkos; oeyaeawyigiygyus: $meisgakuwcmwosms = []; goto awwoieswswoqsqoa; cmkuegkqiwgaeukq: foreach ($mcowwqgmkuemoumu as $igqsaukqcqscimok) { goto iymmgskkyyskcksk; wycswkyaywmeasyw: goto oqeyoyeywsiomiuk; goto cmqiccmcgsqssmma; iymmgskkyyskcksk: if (!ManipulateFile::qkuqsuugayciskek($igqsaukqcqscimok)) { goto ioseaskqkyayesmi; } goto wycswkyaywmeasyw; uekmgwcumckmqwsu: $kmgucgmywowuywem = $this->euyowcyakomciogy(ManipulateFile::scikcaaaiwcsqowm($igqsaukqcqscimok), $ooqwimmeoeeaikyg); goto kwguusaseiauseoi; wgmscmycmmwagaqe: if (in_array($mkomwsiykqigmqca, $meisgakuwcmwosms, true)) { goto wyggykgisoacmiua; } goto ueiyyiokueymucqa; ugiskommysmcugig: wyggykgisoacmiua: goto oaiikqqsscmywqyk; ucwaiqcuysmskowc: owmqsikiqkoasecs: goto oskssywmqgoauwke; gqeeocimioewyyou: oqeyoyeywsiomiuk: goto wcckccugqkukymay; qigkseceeiekiaic: if ($this->kcciqwskewsuaemk()->remove($esaqeawoigqgagum)) { goto owmqsikiqkoasecs; } goto isaykouuuwsgwywi; ueiyyiokueymucqa: $meisgakuwcmwosms[] = $mkomwsiykqigmqca; goto ugiskommysmcugig; cmqiccmcgsqssmma: ioseaskqkyayesmi: goto mooqiqsymkquusgi; wmuwcaqmcwuescwc: if (!(ManipulateFile::mecmkmogggamegic($igqsaukqcqscimok) && ManipulateFile::awosikuiguowiumy($igqsaukqcqscimok) < $ooqwimmeoeeaikyg)) { goto iocqeaqmccyugmic; } goto kmskmqcgkamsgkcm; mooqiqsymkquusgi: if (ManipulateFile::oagwcgcemwwykokc($igqsaukqcqscimok)) { goto eqysqusausyoicug; } goto wmuwcaqmcwuescwc; isaykouuuwsgwywi: goto oqeyoyeywsiomiuk; goto ucwaiqcuysmskowc; kmskmqcgkamsgkcm: $esaqeawoigqgagum = ManipulateFile::scikcaaaiwcsqowm($igqsaukqcqscimok); goto qigkseceeiekiaic; oaiikqqsscmywqyk: iocqeaqmccyugmic: goto geoygkiuccaqcumg; cyeoiysigumciuma: eqysqusausyoicug: goto uekmgwcumckmqwsu; kwguusaseiauseoi: $meisgakuwcmwosms = array_merge($meisgakuwcmwosms, $kmgucgmywowuywem); goto oeqkeqgkwyayuogc; oskssywmqgoauwke: $mkomwsiykqigmqca = dirname($esaqeawoigqgagum); goto wgmscmycmmwagaqe; oeqkeqgkwyayuogc: iawmkemyuaqgkgag: goto gqeeocimioewyyou; geoygkiuccaqcumg: goto iawmkemyuaqgkgag; goto cyeoiysigumciuma; wcckccugqkukymay: } goto kescwsiuywawyqwu; awwoieswswoqsqoa: $mcowwqgmkuemoumu = ManipulateFile::kiygcugekegoqauw($mkomwsiykqigmqca); goto cmkuegkqiwgaeukq; kssqyweyyigkmigs: return $meisgakuwcmwosms; goto kawikymokoesioay; kqocyskgsigykkos: sokakmqsquykwcmo: goto kssqyweyyigkmigs; kawikymokoesioay: } }
