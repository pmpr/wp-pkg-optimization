<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6757fc96ddb33             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\PageManager\Search; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Optimizer\Cache\SpecialPage\Search\Setting; use Pmpr\Module\Optimization\PageManager\Model\Common; use Pmpr\Module\Optimization\PageManager\Model\Page; use Pmpr\Module\Optimization\PageManager\Model\Pattern; class History extends Common { const imkkyggguymaqgqi = "\150\x61\163\137\162\145\x73\165\154\x74"; public function register() { $this->guiaswksukmgageq(__("\x53\145\x61\x72\143\150\40\110\151\163\164\157\162\171", PR__MDL__OPTIMIZATION))->muuwuqssqkaieqge(__("\123\x65\141\x72\x63\x68\x20\x48\151\163\x74\x6f\162\151\145\x73", PR__MDL__OPTIMIZATION)); $this->swsaakqseuaacagq(Constants::emsskyeoaqokwsoa, [$this, "\171\x65\x75\x79\x79\143\x6b\x73\x65\x6f\151\x6f\x6b\x6d\x6d\x6d"]); } public function uwmqacgewuauagai() { $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $this->cquokmemekqqywgi($eqwoegegiamegqsm->usqseiuaeauwuwus(Constants::yoayaissyomokiui)->acceqyqygswoecwe(50)->gswweykyogmsyawy(__("\x53\145\141\x72\x63\150\145\144\x20\x54\145\162\x6d", PR__MDL__OPTIMIZATION)))->cquokmemekqqywgi($eqwoegegiamegqsm->vsuwiusoqmuueegu(Constants::qiyqwyiiwykeccmo)->ogymmssscoqeuyye()->gswweykyogmsyawy(__("\x43\157\165\156\x74", PR__MDL__OPTIMIZATION)))->cquokmemekqqywgi($eqwoegegiamegqsm->omkueasmegecueyk(self::imkkyggguymaqgqi)->eyygsasuqmommkua(0)->gswweykyogmsyawy(__("\x48\141\163\x20\x52\145\x73\165\x6c\164", PR__MDL__OPTIMIZATION)))->cquokmemekqqywgi($eqwoegegiamegqsm->yyuiuwgokmwioomq(Constants::ciywsqoeiymemsys)->gswweykyogmsyawy(__("\123\x74\x61\x74\165\x73", PR__MDL__OPTIMIZATION))->kesomeowemmyygey(1, Constants::sgoswgskyiiwkyuo, __("\x50\x65\x6e\x64\x69\156\x67", PR__MDL__OPTIMIZATION))->kesomeowemmyygey(2, Constants::cqymgkkgeosmoowe, __("\x41\x64\144\145\144", PR__MDL__OPTIMIZATION))->eyygsasuqmommkua(Constants::sgoswgskyiiwkyuo)); parent::uwmqacgewuauagai(); } public function yeuyyckseoiokmmm($icwicymcioeyeyek) { $auuqggkaeoomcksu = true; $kcawyocaiuqkigag = Search::symcgieuakksimmu(); if (Constants::yuwueyysmgkecygw === $kcawyocaiuqkigag->weysguygiseoukqw(Setting::ckekocwocaogoeye, Constants::yuwueyysmgkecygw)) { $gaeqamemwmwsyukm = (int) $kcawyocaiuqkigag->weysguygiseoukqw(Setting::mwcsquoskuckeweg, 10); $auuqggkaeoomcksu = $icwicymcioeyeyek[Constants::qiyqwyiiwykeccmo] >= $gaeqamemwmwsyukm; } if ($auuqggkaeoomcksu && Constants::qwssyugmmaoeqiei === $kcawyocaiuqkigag->weysguygiseoukqw(Setting::okomcksyqygykaoo, Constants::qwssyugmmaoeqiei)) { $auuqggkaeoomcksu = (bool) $icwicymcioeyeyek[self::imkkyggguymaqgqi]; } if ($auuqggkaeoomcksu) { $jwkieqegmyuwayce = Pattern::symcgieuakksimmu(); $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $eouekqmooogkoqoo = $jwkieqegmyuwayce->iekyeyicoyyawomk()->oqomcmyuuakigusk([$eqwoegegiamegqsm->megqywqeuquawkim(Constants::squoamkioomemiyi, Pattern::usoeisyyakwkuyoy), $eqwoegegiamegqsm->megqywqeuquawkim(Pattern::usoeisyyakwkuyoy, Constants::yayciqueeakqwese)]); if ($eouekqmooogkoqoo) { $suaemuyiacqyugsm = $this->wkagassgcaqeosio()->gmowkweososugauu("\57\x3f\x73\75{$icwicymcioeyeyek[Constants::yoayaissyomokiui]}", $jwkieqegmyuwayce->mwyqswsaeeewsosm($eouekqmooogkoqoo), Constants::yayciqueeakqwese, $jwkieqegmyuwayce::usoeisyyakwkuyoy); $sogksuscggsicmac = Page::symcgieuakksimmu()->sigsaicaiyegiqea($suaemuyiacqyugsm); if ($sogksuscggsicmac && $sogksuscggsicmac[Constants::ckcawaoawwioqecq]) { $icwicymcioeyeyek[Constants::ciywsqoeiymemsys] = Constants::cqymgkkgeosmoowe; } } } return $icwicymcioeyeyek; } }
