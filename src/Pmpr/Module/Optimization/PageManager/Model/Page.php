<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             669ada83915b0             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\PageManager\Model; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\Optimization\Optimizer\Cache\HTML\Purge\Ajax; use Pmpr\Module\Optimization\Traits\CommonTrait; use Pmpr\Module\Optimization\Traits\PageManagerEngineTrait; use WP_Error; use WP_Post; use WP_Term; class Page extends Common { use PageManagerEngineTrait, CommonTrait; public $timestamps = [self::CREATED_AT]; public function ckgmycmaukqgkosk() { parent::ckgmycmaukqgkosk(); $this->wackgcksemcaiiwe(); $this->oyeskqayoscwciem()->yioesawwewqaigow(IconInterface::cccywmcmsmqismea)->guiaswksukmgageq(__("\x54\141\x72\x67\145\164\x20\x50\x61\147\145", PR__MDL__OPTIMIZATION))->muuwuqssqkaieqge(__("\124\x61\162\x67\x65\x74\40\120\x61\x67\x65\163", PR__MDL__OPTIMIZATION))->wiskakymeaywyeuw($this->akuociswqmoigkas())->aseucqksocwomwos()->qemeyueyiwgsokuc(); } public function ewaqwooqoqmcoomi() { $this->cquokmemekqqywgi($this->gysoeyaguiyewoes(self::IDENTIFIER)->gswweykyogmsyawy(__("\111\x64\x65\156\164\x69\x66\x69\145\x72", PR__MDL__OPTIMIZATION)))->cquokmemekqqywgi($this->yyuiuwgokmwioomq(self::wqqksssaoggqceky)->acokiqqgsmoqaeyu()->kesomeowemmyygey(1, self::uouymeyqasaeckso, __("\120\x6f\163\x74\x20\124\171\160\x65", PR__MDL__OPTIMIZATION))->kesomeowemmyygey(2, self::gmmygyiecgmggaam, __("\x54\x61\170\157\x6e\157\155\171", PR__MDL__OPTIMIZATION))->kesomeowemmyygey(3, self::usoeisyyakwkuyoy, __("\123\x70\145\x63\151\141\x6c\40\x50\141\x67\x65", PR__MDL__OPTIMIZATION))->kesomeowemmyygey(4, self::mswmgkkakuooukme, __("\101\x72\143\x68\x69\166\x65", PR__MDL__OPTIMIZATION))->gswweykyogmsyawy(__("\104\x69\163\x63\162\151\155\151\156\x61\x74\157\162", PR__MDL__OPTIMIZATION)))->cquokmemekqqywgi($this->gysoeyaguiyewoes(self::squoamkioomemiyi)->acokiqqgsmoqaeyu()->gswweykyogmsyawy(__("\x54\x79\160\x65", PR__MDL__OPTIMIZATION)))->cquokmemekqqywgi($this->gysoeyaguiyewoes(self::auqoykcmsiauccao)->acokiqqgsmoqaeyu()->gswweykyogmsyawy(__("\x55\x52\x4c", PR__MDL__OPTIMIZATION)))->cquokmemekqqywgi($this->yyuiuwgokmwioomq(self::ciywsqoeiymemsys)->acokiqqgsmoqaeyu()->kesomeowemmyygey(1, self::eqewsqmqmsiocaeg, __("\101\143\x74\151\x76\145", PR__MDL__OPTIMIZATION))->kesomeowemmyygey(2, self::uucoeqmmykkwsmqc, __("\111\x6e\141\143\x74\151\x76\x65", PR__MDL__OPTIMIZATION))->gswweykyogmsyawy(__("\123\164\x61\164\x75\163", PR__MDL__OPTIMIZATION))->eyygsasuqmommkua(self::eqewsqmqmsiocaeg))->cquokmemekqqywgi($this->yyuiuwgokmwioomq(self::hwawamsmicyywemy)->kesomeowemmyygey(1, self::comsocymaesugswq, __("\x4e\x6f\164\x20\103\x61\x63\x68\x65\x64", PR__MDL__OPTIMIZATION))->kesomeowemmyygey(2, self::qesugsooeckyyame, __("\120\162\145\154\x6f\x61\x64\151\156\x67", PR__MDL__OPTIMIZATION))->kesomeowemmyygey(3, self::uasuowkaguiwoouw, __("\x46\x61\x69\x6c\145\144", PR__MDL__OPTIMIZATION))->kesomeowemmyygey(4, self::essowykmgcasaaok, __("\103\x61\143\x68\145\144", PR__MDL__OPTIMIZATION))->gswweykyogmsyawy(__("\103\x61\143\x68\x65\40\x53\x74\141\x74\x75\163", PR__MDL__OPTIMIZATION))->eyygsasuqmommkua(self::comsocymaesugswq))->cquokmemekqqywgi($this->eoaomaokwkwqyqiq(self::ewyamgkooeqiecwg)->gswweykyogmsyawy(__("\120\141\164\x74\x65\162\156", PR__MDL__OPTIMIZATION))->wuuqgaekqeymecag(Pattern::class)); parent::ewaqwooqoqmcoomi(); } public function mcaggmuyamgsomaa($ccowyogiqwikkkie = [], $aokagokqyuysuksm = null, $tsuauommsquiesmk = null, $igqsaukqcqscimok = null) : array { $sameaqkagyqomooq = $this->qogaqkcsogcqiaic($igqsaukqcqscimok, self::ewyamgkooeqiecwg); if (!(!empty($sameaqkagyqomooq) && self::eqewsqmqmsiocaeg === $this->ogegcqqcukiaqscy(self::ciywsqoeiymemsys, $igqsaukqcqscimok))) { goto sockeswygwcskeuq; } $ccowyogiqwikkkie["\x70\165\x72\147\x65\137\143\141\x63\x68\x65"] = $this->ysaiweuiueyccoqy($aokagokqyuysuksm); sockeswygwcskeuq: $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $ccowyogiqwikkkie["\x73\150\157\167\137\x70\141\147\145"] = $swqimwqeweekeusq->yuawgssgauywkiia(__("\x56\151\145\167\40\120\x61\x67\x65", PR__MDL__OPTIMIZATION), $this->oiucukewkckkwiqc($igqsaukqcqscimok), ["\164\141\x72\147\x65\164" => "\137\x62\x6c\x61\x6e\153"]); $cmyoswawcimsecyy = $this->kamyqikiiuwqiiuw(self::IDENTIFIER, $this->qogaqkcsogcqiaic($igqsaukqcqscimok, self::IDENTIFIER), $igqsaukqcqscimok); $ccowyogiqwikkkie[self::DELETE] = $uuyucgkyusckoaeq->igiawkoqiogocsau([self::qescuiwgsyuikume => sprintf(__("\104\x65\x6c\x65\x74\x65\x20\45\x73\40\x70\141\x67\145", PR__MDL__OPTIMIZATION), $this->caokeucsksukesyo()->owgcciayoweymuws()->kogyygyqqyqcioeg($cmyoswawcimsecyy, 70)), self::ssmskyqgcmeiayco => $swqimwqeweekeusq->iaaacsuskiakkwui([$swqimwqeweekeusq->iaaacsuskiakkwui(__("\x49\164\40\x69\x73\x20\160\x6f\x73\x73\151\142\154\145\40\x74\157\x20\144\x65\154\x65\x74\x65\40\x74\150\x65\40\x70\141\147\145\40\142\x79\40\x65\144\151\x74\x69\x6e\147\x20\x74\150\145\x20\143\157\x6e\156\145\x63\164\145\144\40\160\x61\x74\164\x65\x72\156\56", PR__MDL__OPTIMIZATION), ["\x63\154\141\x73\x73" => "\155\142\x2d\63"]), $swqimwqeweekeusq->iaaacsuskiakkwui(__("\x57\157\165\x6c\x64\x20\171\x6f\165\40\x6c\151\153\x65\x20\164\x6f\40\x65\144\x69\164\40\x74\x68\145\x20\143\157\156\156\145\143\164\x65\144\x20\160\x61\x74\x74\145\162\156\40\x74\157\x20\164\x68\145\40\x70\x61\147\145\x3f", PR__MDL__OPTIMIZATION))], ["\x63\x6c\141\x73\x73" => "\x74\145\x78\164\x2d\x63\x65\156\x74\145\x72"]), self::kekekeusyqkouowm => [self::mosycwwoqguicaeo, ["\143\x6c\141\x73\x73" => "\x70\x72\55\142\164\156\40\x62\x74\x6e\55\x70\162\x69\x6d\x61\162\x79", self::qescuiwgsyuikume => __("\x45\x64\151\164\40\x43\x6f\x6e\x6e\145\x63\x74\145\144\x20\120\x61\x74\x74\x65\162\156", PR__MDL__OPTIMIZATION), "\x68\162\x65\146" => Pattern::symcgieuakksimmu()->yyykkcyiksewsoqy($sameaqkagyqomooq)]]], __("\104\x65\x6c\x65\164\x65", PR__MDL__OPTIMIZATION), ["\x63\154\141\163\x73" => "\x62\164\156\x2d\x64\x61\x6e\x67\145\x72"]); return parent::mcaggmuyamgsomaa($ccowyogiqwikkkie, $aokagokqyuysuksm, $tsuauommsquiesmk, $igqsaukqcqscimok); } public function ysaiweuiueyccoqy($qkcoyiyeuoyyoocy) { $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); return $uuyucgkyusckoaeq->icqkogwskuwscskk([self::squoamkioomemiyi => self::ecioqysekgaasegg, self::qescuiwgsyuikume => __("\122\145\x2d\x4f\160\x74\x69\x6d\x69\172\x65", PR__MDL__OPTIMIZATION), self::PREFIX => "\162\x65\157\x70\x74\151\155\151\172\145\137\x70\141\x67\145\x5f{$qkcoyiyeuoyyoocy}", self::ssmskyqgcmeiayco => __("\101\x72\x65\40\171\x6f\x75\40\163\165\162\145\x20\x61\x62\x6f\165\164\40\x72\x65\x2d\157\x70\164\x69\x6d\x69\172\x65\40\160\x61\147\x65\77", PR__MDL__OPTIMIZATION), self::kekekeusyqkouowm => [self::mosycwwoqguicaeo, "\x72\145\x6f\160\x74\x69\x6d\x69\x7a\145" => $uuyucgkyusckoaeq->sggkmaawiqsqikgu(Ajax::qqeiugkgqcoamkma, __("\122\x65\x2d\117\160\x74\x69\155\x69\172\x65", PR__MDL__OPTIMIZATION), [self::imywcsggckkcywgk => $qkcoyiyeuoyyoocy, self::yyamasygmiymuoce => self::qwmouieeiikqoewq], ["\x63\154\x61\163\163" => "\x70\162\x2d\x62\x74\156\x20\x62\x74\156\x2d\x70\162\151\x6d\x61\x72\171"])]], [self::ELEMENT => "\141", self::qescuiwgsyuikume => __("\120\165\162\x67\145\x20\103\141\143\x68\x65", PR__MDL__OPTIMIZATION)]); } public function quqgocgogegaauao(string $ccamueccusigaaio) { switch ($ccamueccusigaaio) { case self::ugsuecoyuqcamsac: return ["\x77\x69\x64\145\146\x61\x74", "\x66\151\170\145\x64", "\144\151\x73\164\151\x6e\143\x74\x2d\x73\x74\x61\164\x75\x73"]; } uaqackioaiqwcocy: mkwkkmkgiqiamacc: return parent::quqgocgogegaauao($ccamueccusigaaio); } public function ukcqkkgyogwoiccm() : array { return [self::ciywsqoeiymemsys]; } public function sigsaicaiyegiqea($icwicymcioeyeyek) { $sogksuscggsicmac = false; if ($this->qumqowkwyaceeqwu($icwicymcioeyeyek)) { goto cscusseysqygsoiy; } $sogksuscggsicmac = $this->gscuuyuyauokoyuo($icwicymcioeyeyek); cscusseysqygsoiy: return $sogksuscggsicmac; } public function kamyqikiiuwqiiuw($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, &$mksyucucyswaukig = null) { switch ($qgoqiacsiccwoawi) { case self::hwawamsmicyywemy: $goqqimcssiyagkwy = $this->wkagassgcaqeosio(); $skqeckgiuieeusoy = $goqqimcssiyagkwy->wwsyamkkyauwseyg($this->oiucukewkckkwiqc($mksyucucyswaukig)); if ($skqeckgiuieeusoy) { goto eeyyskqsmquyquqw; } switch ($this->ogegcqqcukiaqscy(self::hwawamsmicyywemy, $eqgoocgaqwqcimie)) { case self::uasuowkaguiwoouw: $eqgoocgaqwqcimie = $goqqimcssiyagkwy->ewcmcaqiosuumocw(__("\x46\x61\151\x6c\x65\144", PR__MDL__OPTIMIZATION), IconInterface::kcyyouekgyaqyqak, self::wyaqwomqwwaoiwas); goto uegouoiuyoqkcscg; case self::essowykmgcasaaok: case self::comsocymaesugswq: $eqgoocgaqwqcimie = $goqqimcssiyagkwy->ewcmcaqiosuumocw(__("\116\157\164\40\x43\x61\x63\x68\145\x64", PR__MDL__OPTIMIZATION), IconInterface::kiqsyooieeusaemw, self::ecioqysekgaasegg); goto uegouoiuyoqkcscg; case self::qesugsooeckyyame: $eqgoocgaqwqcimie = $goqqimcssiyagkwy->ewcmcaqiosuumocw(__("\x50\162\x65\154\x6f\x61\144\151\156\x67", PR__MDL__OPTIMIZATION), IconInterface::iqqmgqayyyuwgagk, self::smkwuwawwaqyimcq); goto uegouoiuyoqkcscg; } cgyakcqgugqgkqiw: uegouoiuyoqkcscg: goto ewscugeuicukkycc; eeyyskqsmquyquqw: $eqgoocgaqwqcimie = $goqqimcssiyagkwy->ewcmcaqiosuumocw(__("\x43\x61\x63\150\x65\x64", PR__MDL__OPTIMIZATION)); ewscugeuicukkycc: goto isgwkwacoyimiauk; case self::IDENTIFIER: switch ($this->ogegcqqcukiaqscy(self::wqqksssaoggqceky, $mksyucucyswaukig)) { case self::uouymeyqasaeckso: $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $eqgoocgaqwqcimie = sprintf("\x25\x73\x20\50\45\163\51", $seumokooiykcomco->qcgakseyaikigqco($eqgoocgaqwqcimie), $seumokooiykcomco->gueasuouwqysmomu($eqgoocgaqwqcimie, self::uissasisiuymwsmu)); goto kqswcsysqawkcgye; case self::gmmygyiecgmggaam: $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); $eqgoocgaqwqcimie = sprintf("\x25\x73\x20\x28\x25\x73\51", $aoskwucuugeuaeus->qcgakseyaikigqco($eqgoocgaqwqcimie), $aoskwucuugeuaeus->yyoeeseewqmmyaee($eqgoocgaqwqcimie, self::uissasisiuymwsmu)); goto kqswcsysqawkcgye; case self::usoeisyyakwkuyoy: switch ($this->qogaqkcsogcqiaic($mksyucucyswaukig, self::squoamkioomemiyi)) { case self::wwoeeogswkgeqack: $eqgoocgaqwqcimie = __("\110\x6f\x6d\x65\x20\x50\141\x67\145", PR__MDL__OPTIMIZATION); goto iiiccouaaqsyikae; case self::yayciqueeakqwese: $eqgoocgaqwqcimie = __("\x53\145\141\162\x63\x68\x20\120\141\147\x65", PR__MDL__OPTIMIZATION); goto iiiccouaaqsyikae; case self::skoigciaygmyqkmi: $eqgoocgaqwqcimie = __("\116\x6f\164\146\x6f\165\156\144\40\120\141\147\x65", PR__MDL__OPTIMIZATION); goto iiiccouaaqsyikae; } ukkcmocamwgiqayu: iiiccouaaqsyikae: goto kqswcsysqawkcgye; case self::mswmgkkakuooukme: goto kqswcsysqawkcgye; } wusciwkkckmqigms: kqswcsysqawkcgye: goto isgwkwacoyimiauk; } mggeqkcksyaymcsa: isgwkwacoyimiauk: return parent::kamyqikiiuwqiiuw($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $mksyucucyswaukig); } public function eiswegiqykyigwig($suaemuyiacqyugsm) { $ksaameoqigiaoigg = null; if (!is_numeric($suaemuyiacqyugsm)) { goto mwysseaekcsiesmm; } $suaemuyiacqyugsm = $this->akkkoiiymmamsauc($suaemuyiacqyugsm); mwysseaekcsiesmm: if (is_object($suaemuyiacqyugsm)) { goto amgsueumgaguceaa; } return false; amgsueumgaguceaa: switch ($this->ogegcqqcukiaqscy(self::wqqksssaoggqceky, $suaemuyiacqyugsm)) { case self::uouymeyqasaeckso: $ksaameoqigiaoigg = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->get($this->qogaqkcsogcqiaic($suaemuyiacqyugsm, self::IDENTIFIER)); goto gygwewcqsmwqismo; case self::gmmygyiecgmggaam: $ksaameoqigiaoigg = $this->caokeucsksukesyo()->kckogqkiycqeumoa()->get($this->qogaqkcsogcqiaic($suaemuyiacqyugsm, self::IDENTIFIER)); goto gygwewcqsmwqismo; case self::usoeisyyakwkuyoy: goto gygwewcqsmwqismo; case self::mswmgkkakuooukme: goto gygwewcqsmwqismo; } uougwgeyiokewkkm: gygwewcqsmwqismo: return $ksaameoqigiaoigg; } public function oiucukewkckkwiqc($suaemuyiacqyugsm) : string { $eeamcawaiqocomwy = ''; if ($owqaeesoaygymmcy = $this->eiswegiqykyigwig($suaemuyiacqyugsm)) { goto iuuuususuuuaieem; } $eeamcawaiqocomwy = $this->esewqawcwouwyesq($this->qogaqkcsogcqiaic($suaemuyiacqyugsm, self::auqoykcmsiauccao)); goto kocqqoyymosmuksu; iuuuususuuuaieem: if ($owqaeesoaygymmcy instanceof WP_Post) { goto uykousayyomcaeaa; } if ($owqaeesoaygymmcy instanceof WP_Term) { goto ukqocwewouckikso; } if (!is_string($owqaeesoaygymmcy)) { goto gommacygsykyussk; } $eeamcawaiqocomwy = $owqaeesoaygymmcy; gommacygsykyussk: goto ucqmumuygcywwqma; ukqocwewouckikso: $eeamcawaiqocomwy = $this->caokeucsksukesyo()->kckogqkiycqeumoa()->qmgcisuuikgmqcsu($owqaeesoaygymmcy); ucqmumuygcywwqma: goto uimeeckqksqeekqq; uykousayyomcaeaa: $eeamcawaiqocomwy = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ycqquoiyyuesegsy($owqaeesoaygymmcy); uimeeckqksqeekqq: kocqqoyymosmuksu: return $eeamcawaiqocomwy; } public function esewqawcwouwyesq(?string $eeamcawaiqocomwy) : string { $qsqwqsymmqeoqwcu = ''; if (!$eeamcawaiqocomwy) { goto uqokiksoqcwwqgio; } $qsqwqsymmqeoqwcu = untrailingslashit($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->auksikwsewaywikq()) . $eeamcawaiqocomwy; uqokiksoqcwwqgio: return $qsqwqsymmqeoqwcu; } }
