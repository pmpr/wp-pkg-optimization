<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f2a608b965f             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\PageManager\Search; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Optimizer\Cache\SpecialPage\Search\Setting; use Pmpr\Module\Optimization\PageManager\Model\Common; use Pmpr\Module\Optimization\PageManager\Model\Page; use Pmpr\Module\Optimization\PageManager\Model\Pattern; class History extends Common { public $timestamps = null; const imkkyggguymaqgqi = "\150\141\163\137\x72\x65\163\x75\x6c\x74"; public function ckgmycmaukqgkosk() { $this->oyeskqayoscwciem()->guiaswksukmgageq(__("\123\145\x61\162\143\150\40\x48\x69\x73\164\157\162\x79", PR__MDL__OPTIMIZATION))->muuwuqssqkaieqge(__("\123\145\141\162\143\150\40\x48\x69\163\164\x6f\162\x69\x65\x73", PR__MDL__OPTIMIZATION)); parent::ckgmycmaukqgkosk(); } public function ewaqwooqoqmcoomi() { $this->cquokmemekqqywgi($this->usqseiuaeauwuwus(Constants::yoayaissyomokiui)->acceqyqygswoecwe(50)->gswweykyogmsyawy(__("\123\x65\141\x72\143\150\x65\144\x20\x54\x65\x72\155", PR__MDL__OPTIMIZATION)))->cquokmemekqqywgi($this->vsuwiusoqmuueegu(Constants::qiyqwyiiwykeccmo)->ogymmssscoqeuyye()->gswweykyogmsyawy(__("\103\157\x75\x6e\164", PR__MDL__OPTIMIZATION)))->cquokmemekqqywgi($this->omkueasmegecueyk(self::imkkyggguymaqgqi)->eyygsasuqmommkua(0)->gswweykyogmsyawy(__("\110\x61\x73\40\122\145\163\x75\x6c\164", PR__MDL__OPTIMIZATION)))->cquokmemekqqywgi($this->yyuiuwgokmwioomq(Constants::ciywsqoeiymemsys)->gswweykyogmsyawy(__("\x53\x74\141\164\x75\163", PR__MDL__OPTIMIZATION))->kesomeowemmyygey(1, Constants::sgoswgskyiiwkyuo, __("\x50\x65\156\144\151\x6e\x67", PR__MDL__OPTIMIZATION))->kesomeowemmyygey(2, Constants::cqymgkkgeosmoowe, __("\101\144\x64\145\144", PR__MDL__OPTIMIZATION))->eyygsasuqmommkua(Constants::sgoswgskyiiwkyuo)); parent::ewaqwooqoqmcoomi(); } public function ysouksugwwuisyye($icwicymcioeyeyek) { $auuqggkaeoomcksu = true; $kcawyocaiuqkigag = Search::symcgieuakksimmu(); if (!(Constants::yuwueyysmgkecygw === $kcawyocaiuqkigag->weysguygiseoukqw(Setting::ckekocwocaogoeye, Constants::yuwueyysmgkecygw))) { goto gygwewcqsmwqismo; } $gaeqamemwmwsyukm = (int) $kcawyocaiuqkigag->weysguygiseoukqw(Setting::mwcsquoskuckeweg, 10); $auuqggkaeoomcksu = $icwicymcioeyeyek[Constants::qiyqwyiiwykeccmo] >= $gaeqamemwmwsyukm; gygwewcqsmwqismo: if (!($auuqggkaeoomcksu && Constants::qwssyugmmaoeqiei === $kcawyocaiuqkigag->weysguygiseoukqw(Setting::okomcksyqygykaoo, Constants::qwssyugmmaoeqiei))) { goto uougwgeyiokewkkm; } $auuqggkaeoomcksu = (bool) $icwicymcioeyeyek[self::imkkyggguymaqgqi]; uougwgeyiokewkkm: if (!$auuqggkaeoomcksu) { goto ucqmumuygcywwqma; } $jwkieqegmyuwayce = Pattern::symcgieuakksimmu(); $eouekqmooogkoqoo = $jwkieqegmyuwayce->oqomcmyuuakigusk([Constants::squoamkioomemiyi => Pattern::usoeisyyakwkuyoy, Pattern::usoeisyyakwkuyoy => Constants::yayciqueeakqwese]); if (!$eouekqmooogkoqoo) { goto ukqocwewouckikso; } $suaemuyiacqyugsm = $this->wkagassgcaqeosio()->gmowkweososugauu("\x2f\77\163\75{$icwicymcioeyeyek[Constants::yoayaissyomokiui]}", $jwkieqegmyuwayce->keeuqgyooycqoygw($eouekqmooogkoqoo), Constants::yayciqueeakqwese, $jwkieqegmyuwayce::usoeisyyakwkuyoy); $sogksuscggsicmac = Page::symcgieuakksimmu()->sigsaicaiyegiqea($suaemuyiacqyugsm); if (!($sogksuscggsicmac && $sogksuscggsicmac[Constants::ckcawaoawwioqecq])) { goto gommacygsykyussk; } $icwicymcioeyeyek[Constants::ciywsqoeiymemsys] = Constants::cqymgkkgeosmoowe; gommacygsykyussk: ukqocwewouckikso: ucqmumuygcywwqma: return parent::ysouksugwwuisyye($icwicymcioeyeyek); } }
