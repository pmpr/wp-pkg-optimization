<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61afe111519f2             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Purge; use Pmpr\Package\Optimization\Manipulate\ManipulateFile; use CallbackFilterIterator; use Pmpr\Package\Optimization\Manipulate\ManipulateFormat; use Pmpr\Package\Optimization\Manipulate\ManipulateI18N; class Expired extends Common { const EVENT_NAME = "\157\160\x74\x69\x6d\x69\172\141\164\x69\x6f\156\137\x70\165\x72\147\x65\137\x74\151\x6d\145\137\145\x76\145\x6e\164"; protected ?string $path = ''; public function __construct(?string $mkomwsiykqigmqca) { $this->path = $mkomwsiykqigmqca; parent::__construct(); } public function amqagusacuuuaswg() : ?string { return $this->path; } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x69\x6e\151\x74", [$this, "\165\167\165\x67\141\x69\161\x79\167\x6d\x73\x65\x6b\x73\161\x6d"]); parent::wigskegsqequoeks(); } public function uwugaiqywmseksqm() { goto kqscgsuaugsiwiwi; gukawqgamokyceki: qsqwywcesyquykqq: goto mckkqgseimcgkcgu; kqscgsuaugsiwiwi: if (!($this->get_cache_lifespan() && !wp_next_scheduled(static::EVENT_NAME))) { goto qsqwywcesyquykqq; } goto gmskkukiiwweocwi; uqamuckwuksquqia: wp_schedule_event(time() + $ycooswiwewekokei, "\x6f\x70\x74\137\145\x78\x70\151\x72\145\x64\x5f\143\x61\143\x68\145\x5f\143\162\157\156\137\151\x6e\x74\145\x72\x76\141\154", static::EVENT_NAME); goto gukawqgamokyceki; gmskkukiiwweocwi: $ycooswiwewekokei = $this->get_interval(); goto uqamuckwuksquqia; mckkqgseimcgkcgu: } private function aymegqumcmuwyuqm(string $mkomwsiykqigmqca) : bool { goto sucgyiymguwououy; qkueegaowuyiimgw: syqysaawasmesiqs: goto aweayueuaeoasyms; sucgyiymguwououy: $mcowwqgmkuemoumu = ManipulateFile::kiygcugekegoqauw($mkomwsiykqigmqca); goto kcqewweqqqmekuwi; aweayueuaeoasyms: return true; goto wyokakscicekiums; kcqewweqqqmekuwi: foreach ($mcowwqgmkuemoumu as $igqsaukqcqscimok) { goto ooayswecmkkqgskg; guyeaeiscmgksacs: uyqsoayeaaumkace: goto keaaqaugoyquwsos; ooayswecmkkqgskg: if (!ManipulateFile::qkuqsuugayciskek($igqsaukqcqscimok)) { goto uyqsoayeaaumkace; } goto cskesgswygwiqoim; ieacisiumswqewsq: yeiwocswikqkwyew: goto kskqckgmygiwqucm; keaaqaugoyquwsos: return false; goto ieacisiumswqewsq; cskesgswygwiqoim: goto yeiwocswikqkwyew; goto guyeaeiscmgksacs; kskqckgmygiwqucm: } goto qkueegaowuyiimgw; wyokakscicekiums: } private function ycumyoqmwqsqgmeu($qogsmwakwacwqogk) { goto usqgeieewckcwumm; qyggcimqgyscmcci: $mcowwqgmkuemoumu = ManipulateFile::kiygcugekegoqauw($this->amqagusacuuuaswg()); goto mwsogcaisqkoyoyo; ciuaqmasmqyeioiy: kakwaaemoyyusiek: goto aiouimmkquyuwagk; aiouimmkquyuwagk: return false; goto msmyywuowokwiswe; iiieosoykaeycaks: return new CallbackFilterIterator($mcowwqgmkuemoumu, function ($yeacayasgueouoqc) use($eouekqmooogkoqoo, $yicgeeqawwokyssy) { goto yoosmuokogseueas; cycukssoyewuiyyw: cgsuikiqggkikaae: goto oaogeakeuqgouywe; ziqysygmaasemyem: cecomsiewwckuwqy: goto ocwegqcikuwygcos; wagqsecuquyukiwc: return false; goto ziqysygmaasemyem; ocwegqcikuwygcos: if (!('' !== $yicgeeqawwokyssy && !$this->kcciqwskewsuaemk()->exists(ManipulateFile::scikcaaaiwcsqowm($yeacayasgueouoqc) . $yicgeeqawwokyssy))) { goto cgsuikiqggkikaae; } goto qmesaeogykqacemy; osksqmgkikamgaui: if (preg_match($eouekqmooogkoqoo, ManipulateFile::mawoacksgosuccme($yeacayasgueouoqc))) { goto cecomsiewwckuwqy; } goto wagqsecuquyukiwc; yoosmuokogseueas: if (!(!ManipulateFile::oagwcgcemwwykokc($yeacayasgueouoqc) || ManipulateFile::qkuqsuugayciskek($yeacayasgueouoqc))) { goto ygywqwksoumccysq; } goto moeqauuausuqygiq; oaogeakeuqgouywe: return true; goto igcusescocaiyqki; kmmwmccqeuasieoy: ygywqwksoumccysq: goto osksqmgkikamgaui; moeqauuausuqygiq: return false; goto kmmwmccqeuasieoy; qmesaeogykqacemy: return false; goto cycukssoyewuiyyw; igcusescocaiyqki: }); goto ciuaqmasmqyeioiy; imyyokaecggauwca: if (!$mcowwqgmkuemoumu) { goto kakwaaemoyyusiek; } goto iiieosoykaeycaks; usqgeieewckcwumm: $eouekqmooogkoqoo = "\x40\x5e" . preg_quote($qogsmwakwacwqogk["\x68\x6f\163\164"], "\x40") . "\100"; goto qyggcimqgyscmcci; mwsogcaisqkoyoyo: $yicgeeqawwokyssy = rtrim($qogsmwakwacwqogk["\160\x61\164\x68"], "\57"); goto imyyokaecggauwca; msmyywuowokwiswe: } public function ccuciuoaysakakqu($wumscqwikueeogok) { goto coomeqeooeuaagwm; aaksksikokoywwqw: $auwuoyyagaiegwae = array_filter($auwuoyyagaiegwae); goto kcsegweogmaqiwco; gueqcauquesmkqym: qiagugckeckokcas: goto wwiiieggesogkwky; mqkmsmceakcwuykg: if (is_array($auwuoyyagaiegwae)) { goto uaewuiuogmissaks; } goto semsywguyogigssk; eqewaacwikyoaswc: $auwuoyyagaiegwae = $this->sscegwueamckwmcy("\x63\x61\x63\x68\145\x5f\141\165\164\157\155\x61\x74\151\143\137\143\141\x63\x68\x65\137\160\165\162\147\x65\137\x75\162\154\163", $auwuoyyagaiegwae, $ooqwimmeoeeaikyg); goto mqkmsmceakcwuykg; aosyiicmoiuswsce: $meisgakuwcmwosms = []; goto eisakkewoaeqqeqi; gkkywuycqkawqiuq: $ggauoeuaesiymgee = $auwuoyyagaiegwae = ManipulateI18N::mceoyuqgagciommq(); goto swoiuaaoaceaaeou; eisakkewoaeqqeqi: $igyewwsuegggmkkk = Buffer::omgegoiwsakgwwug(); goto mqckeqywkyewukku; swoiuaaoaceaaeou: $ooqwimmeoeeaikyg = time() - $wumscqwikueeogok; goto eqewaacwikyoaswc; koyswyqcemwusuku: iwcyguueicgkqmiq: goto mqaemqqgquyscwgg; mqckeqywkyewukku: foreach ($auwuoyyagaiegwae as $eeamcawaiqocomwy) { goto ccuiyiguswiossui; miigyyocoaqouyws: if (!$igyewwsuegggmkkk) { goto iussoiiiygmaqoey; } goto oyiogyamekukoqce; yymmsiqcoeikoges: $ucasskoyoewwmmii = $this->ycumyoqmwqsqgmeu($qogsmwakwacwqogk); goto mycaymeeoakigqwk; oyiogyamekukoqce: $qogsmwakwacwqogk = ManipulateFormat::kcwgwosqkkkkmuks($eeamcawaiqocomwy); goto cwaksqcggwcaucmo; wosiwcgiequysoiq: wyaiukacimqqkwso: goto ecicsgkwsukqmquo; ccuiyiguswiossui: $this->cqscqicucmeamkyq("\x63\141\143\150\x65\137\x62\145\x66\x6f\162\x65\137\141\165\164\x6f\x6d\x61\164\x69\143\x5f\143\x61\x63\x68\x65\137\160\x75\x72\x67\x65\x5f\x64\151\x72", $eeamcawaiqocomwy, $ooqwimmeoeeaikyg); goto kouykoaqsyamwkow; kouykoaqsyamwkow: $oicyaaqouscyiycq = []; goto miigyyocoaqouyws; ecicsgkwsukqmquo: if (!$oicyaaqouscyiycq) { goto kmoguoggeuugwcuk; } goto cqkkmgicucyoeqca; mycaymeeoakigqwk: foreach ($ucasskoyoewwmmii as $igqsaukqcqscimok) { goto ykyauiwkesygwwyq; uumsakwagcmcusai: aysgkuigyuqqcuae: goto wcgeeoqqamawayyk; kwacykquqegccocg: $qaisqkcgsgakqykq = $sgoqsiukkecgiiso . $iuaemokqameyemms; goto qaiqkuwcooimcsyc; ykyauiwkesygwwyq: $sgoqsiukkecgiiso = ManipulateFile::scikcaaaiwcsqowm($igqsaukqcqscimok); goto kwacykquqegccocg; qaiqkuwcooimcsyc: $ccykqsgoygiaowac = $this->euyowcyakomciogy($qaisqkcgsgakqykq, $ooqwimmeoeeaikyg); goto wgcwoaukyqokqegs; wcgeeoqqamawayyk: aiqouoismmsiakak: goto ewmswgookyygmeck; ywgasekuusqmywou: $this->kcciqwskewsuaemk()->remove($sgoqsiukkecgiiso); goto uumsakwagcmcusai; eeemieuggkqicmcm: if (!$this->aymegqumcmuwyuqm($sgoqsiukkecgiiso)) { goto aysgkuigyuqqcuae; } goto ywgasekuusqmywou; wgcwoaukyqokqegs: if (!$ccykqsgoygiaowac) { goto qiygeqkamwuomgie; } goto agwuqimeueqcgeig; ioawqeykaygmcusq: qiygeqkamwuomgie: goto eeemieuggkqicmcm; agwuqimeueqcgeig: $oicyaaqouscyiycq[] = ["\x68\x6f\x6d\145\137\165\162\x6c" => $eeamcawaiqocomwy, "\x68\157\x6d\x65\x5f\x70\141\x74\x68" => $qaisqkcgsgakqykq, "\154\157\x67\x67\x65\144\137\151\x6e" => $sgoqsiukkecgiiso !== $this->amqagusacuuuaswg() . $qogsmwakwacwqogk["\150\157\x73\164"], "\146\x69\x6c\145\x73" => $ccykqsgoygiaowac]; goto ioawqeykaygmcusq; ewmswgookyygmeck: } goto wosiwcgiequysoiq; cwuiegmgmaoasqys: qswoesemmkuisiak: goto oqsgqmmoqoyoicia; mqkkmgeccukekuus: $ywmkwiwkosakssii = ["\165\x72\x6c" => $eeamcawaiqocomwy, "\x6c\x69\x66\145\163\x70\x61\x6e" => $wumscqwikueeogok, "\x66\151\x6c\x65\x5f\141\147\x65\137\154\x69\x6d\x69\164" => $ooqwimmeoeeaikyg]; goto agosuskgagmqkcqq; iiymmyommkikmyqa: kmoguoggeuugwcuk: goto oicqseawwmwcgsua; oicqseawwmwcgsua: iussoiiiygmaqoey: goto mqkkmgeccukekuus; agosuskgagmqkcqq: $this->cqscqicucmeamkyq("\x63\x61\143\x68\x65\x5f\x61\146\164\145\162\137\141\x75\164\157\155\x61\x74\151\x63\x5f\x63\x61\143\150\x65\137\160\x75\162\x67\x65\137\144\151\x72", $oicyaaqouscyiycq, $ywmkwiwkosakssii); goto cwuiegmgmaoasqys; cwaksqcggwcaucmo: $iuaemokqameyemms = rtrim($qogsmwakwacwqogk["\160\x61\x74\150"], "\x2f"); goto yymmsiqcoeikoges; cqkkmgicucyoeqca: $meisgakuwcmwosms = array_merge($meisgakuwcmwosms, $oicyaaqouscyiycq); goto iiymmyommkikmyqa; oqsgqmmoqoyoicia: } goto koyswyqcemwusuku; aisciyiooggegcwa: $this->cqscqicucmeamkyq("\143\x61\x63\x68\145\137\141\146\164\145\x72\x5f\x61\165\164\x6f\x6d\141\x74\151\143\x5f\x63\141\x63\x68\145\137\160\165\162\x67\x65", $meisgakuwcmwosms, $ywmkwiwkosakssii); goto cymkyayecqkecsso; ykocaswauweieysc: $auwuoyyagaiegwae = array_filter($auwuoyyagaiegwae, "\151\163\x5f\163\x74\x72\151\156\147"); goto aaksksikokoywwqw; semsywguyogigssk: $auwuoyyagaiegwae = $ggauoeuaesiymgee; goto scmyekuemcoeeggy; scmyekuemcoeeggy: uaewuiuogmissaks: goto ykocaswauweieysc; sqigasuoiqyqqokc: $auwuoyyagaiegwae = array_unique($auwuoyyagaiegwae); goto aosyiicmoiuswsce; cymkyayecqkecsso: mqycugoiuasmyycy: goto gueqcauquesmkqym; coomeqeooeuaagwm: if (!$wumscqwikueeogok) { goto qiagugckeckokcas; } goto gkkywuycqkawqiuq; kcsegweogmaqiwco: if (!$auwuoyyagaiegwae) { goto mqycugoiuasmyycy; } goto sqigasuoiqyqqokc; mqaemqqgquyscwgg: $ywmkwiwkosakssii = ["\x6c\x69\146\145\163\160\141\156" => $wumscqwikueeogok, "\x66\151\x6c\x65\x5f\x61\x67\x65\137\154\151\x6d\x69\164" => $ooqwimmeoeeaikyg]; goto aisciyiooggegcwa; wwiiieggesogkwky: } private function euyowcyakomciogy($mkomwsiykqigmqca, $ooqwimmeoeeaikyg) : array { goto qwyuoiycqcaaakcq; ukswuuooigiykaso: $mcowwqgmkuemoumu = ManipulateFile::kiygcugekegoqauw($mkomwsiykqigmqca); goto iqmymqqskgsgsiku; qwyuoiycqcaaakcq: $meisgakuwcmwosms = []; goto ukswuuooigiykaso; gkskumckoocyioge: return $meisgakuwcmwosms; goto ycogsiaoceaiaosi; ucewekmmuygqecqk: $this->kcciqwskewsuaemk()->remove($mkomwsiykqigmqca); goto ayymceqgcuqkqkmo; qyeiyecmaomycoks: moicgacciggecuie: goto qcqyawqiwksyicok; ayymceqgcuqkqkmo: yeqcqmakwyuoaayk: goto gkskumckoocyioge; qcqyawqiwksyicok: if (!$this->aymegqumcmuwyuqm($mkomwsiykqigmqca)) { goto yeqcqmakwyuoaayk; } goto ucewekmmuygqecqk; iqmymqqskgsgsiku: foreach ($mcowwqgmkuemoumu as $igqsaukqcqscimok) { goto esiuqyuiuagocqce; msqiamqqoiceauwy: goto muiiokquumgiyaas; goto iawimoagycsccyqw; eakgamsscsuususi: $meisgakuwcmwosms = array_merge($meisgakuwcmwosms, $kmgucgmywowuywem); goto coskskmacukoewgo; oyoiceikawwqskai: $esaqeawoigqgagum = ManipulateFile::scikcaaaiwcsqowm($igqsaukqcqscimok); goto ekkswyasyksokemg; pmmcyycmwceweqck: $kmgucgmywowuywem = $this->euyowcyakomciogy(ManipulateFile::scikcaaaiwcsqowm($igqsaukqcqscimok), $ooqwimmeoeeaikyg); goto eakgamsscsuususi; syicggsyayqwywma: goto qqsiesyooukcuege; goto ykmiqawqiommeyic; kascwigwmyyywwom: oosoeecugcecmoqu: goto soewwyoqiysyqsmm; bgwomyaccmauskgm: $mkomwsiykqigmqca = dirname($esaqeawoigqgagum); goto cmsgsoqiskwwqywg; coskskmacukoewgo: muiiokquumgiyaas: goto imuyoescowgckyyc; imuyoescowgckyyc: qqsiesyooukcuege: goto uiookuuakyqyuagw; aamogomsaksgcsig: $meisgakuwcmwosms[] = $mkomwsiykqigmqca; goto kascwigwmyyywwom; cmsgsoqiskwwqywg: if (in_array($mkomwsiykqigmqca, $meisgakuwcmwosms, true)) { goto oosoeecugcecmoqu; } goto aamogomsaksgcsig; yyicwymeasmimggy: if (!(ManipulateFile::mecmkmogggamegic($igqsaukqcqscimok) && ManipulateFile::awosikuiguowiumy($igqsaukqcqscimok) < $ooqwimmeoeeaikyg)) { goto kssaskooygaesyuq; } goto oyoiceikawwqskai; ekkswyasyksokemg: if ($this->kcciqwskewsuaemk()->remove($esaqeawoigqgagum)) { goto iuamoyacomwmyswu; } goto mqsoccawiacgogca; iawimoagycsccyqw: somoaammcamiswiq: goto pmmcyycmwceweqck; muoeugawocmikiua: iuamoyacomwmyswu: goto bgwomyaccmauskgm; mqsoccawiacgogca: goto qqsiesyooukcuege; goto muoeugawocmikiua; ykmiqawqiommeyic: goiywqywgesicwsm: goto esaoimegkqmoakoo; esiuqyuiuagocqce: if (!ManipulateFile::qkuqsuugayciskek($igqsaukqcqscimok)) { goto goiywqywgesicwsm; } goto syicggsyayqwywma; esaoimegkqmoakoo: if (ManipulateFile::oagwcgcemwwykokc($igqsaukqcqscimok)) { goto somoaammcamiswiq; } goto yyicwymeasmimggy; soewwyoqiysyqsmm: kssaskooygaesyuq: goto msqiamqqoiceauwy; uiookuuakyqyuagw: } goto qyeiyecmaomycoks; ycogsiaoceaiaosi: } }
