<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             669ada83915b0             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Cache\HTML\Purge; use Pmpr\Module\Optimization\Optimizer\Cache\HTML\Setting; use Pmpr\Module\Optimization\Optimizer\Cache\Purge\Engine as BaseClass; use Pmpr\Module\Optimization\PageManager\Model\Page; use WP_Post; use WP_Term; class Engine extends BaseClass { public function gimogqqgyqwiwsmi() : bool { return (bool) $this->weysguygiseoukqw(Setting::aqaeiauuykqeiyoi, false); } public function qsiwaqwsyasqsqcq(...$ywmkwiwkosakssii) : bool { $ksaameoqigiaoigg = false; if (!$this->gimogqqgyqwiwsmi()) { goto gsggsmmwcmkgyyss; } $ksaameoqigiaoigg = $this->caoeosiqwyaauaio(Ajax::symcgieuakksimmu()->gskqygiceygcguyo()); if (!$ksaameoqigiaoigg) { goto qocgmocqauaaekii; } $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . "\x63\x61\x63\x68\145\x5f\150\x74\155\154\137\141\x6c\154\137\160\x75\162\x67\145\x64", ...$ywmkwiwkosakssii); qocgmocqauaaekii: gsggsmmwcmkgyyss: return $ksaameoqigiaoigg; } public function sksuceuccwmiokoe($ccamueccusigaaio) : bool { if (!is_string($ccamueccusigaaio)) { goto yweucowesgsoewyc; } $this->caoeosiqwyaauaio(dirname(Ajax::symcgieuakksimmu()->cckisoakyqqgywey($ccamueccusigaaio))); return true; yweucowesgsoewyc: return false; } public function qwgwwmwcgwommmcy(array $auwuoyyagaiegwae) : bool { $auwuoyyagaiegwae = $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\x63\x61\143\x68\145\x5f\x68\164\x6d\154\x5f\160\x75\162\147\145\137\165\162\x6c\x73", $auwuoyyagaiegwae); if (!(empty($auwuoyyagaiegwae) || !$this->gimogqqgyqwiwsmi())) { goto ikygockuuyimmmwk; } return false; ikygockuuyimmmwk: foreach ($auwuoyyagaiegwae as $eeamcawaiqocomwy) { $this->sksuceuccwmiokoe($eeamcawaiqocomwy); cycasoiysmksuwqk: } uwmcugkwqwcuqqsq: $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . "\143\141\143\150\x65\x5f\150\x74\155\154\137\x75\x72\x6c\163\137\160\x75\162\x67\145\x64", $auwuoyyagaiegwae); return true; } public function miemuiuwumuyqykm($swaukaagekiououo = '') : bool { if ($this->gimogqqgyqwiwsmi()) { goto muimagegskoisckc; } return false; muimagegskoisckc: return true; } public function syicukiqeoyaqsok($iwewcwusemqaiggk) : bool { if ($this->gimogqqgyqwiwsmi()) { goto yicaqocukqoauqgc; } return false; yicaqocukqoauqgc: return true; } public function ussmokeesuogauca($post) : bool { if ($this->gimogqqgyqwiwsmi()) { goto kmcygqkmwcgwamkw; } return false; kmcygqkmwcgwamkw: if (!$this->caokeucsksukesyo()->owicscwgeuqcqaig()->somkqoqeimmeemuq()) { goto gysmigyakgaakeoy; } return false; gysmigyakgaakeoy: $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $gcqseksiskwueksc = 0; if (!is_numeric($post)) { goto sueeqeioeiwkscao; } $gcqseksiskwueksc = $post; $post = $seumokooiykcomco->get($post); sueeqeioeiwkscao: if (is_object($post)) { goto mmesoisgqucowwms; } return false; mmesoisgqucowwms: if ($gcqseksiskwueksc) { goto uieuouugckwokske; } $gcqseksiskwueksc = $seumokooiykcomco->iooowgsqoyqseyuu($post); uieuouugckwokske: static $gqiuywqwmiieqcww = []; if (!isset($gqiuywqwmiieqcww[$gcqseksiskwueksc])) { goto seaiwkkgyyegiyug; } return false; seaiwkkgyyegiyug: $iueymcwwscwqkiyq = $seumokooiykcomco->ucwmcwqmqwaymkkc($post); $useksmwkuswkwcqg = $seumokooiykcomco->gueasuouwqysmomu($post); if (!(empty($useksmwkuswkwcqg) || in_array($iueymcwwscwqkiyq, [self::iuemaweiggauysws, self::ywskismomwmcsqam], true) || in_array($useksmwkuswkwcqg, [self::mskugisegsqmcqkk, self::cqycgsyykemiygou], true))) { goto uauuoyigkmqoasaq; } return false; uauuoyigkmqoasaq: $cskucqcumqsyimye = $this->caokeucsksukesyo()->gscioiumssogceuc(); $kgioguqigccoiyca = $cskucqcumqsyimye->imgymusqgccqsqqq($useksmwkuswkwcqg); if (!($kgioguqigccoiyca === null || !$cskucqcumqsyimye->cekoogweeooasayu($kgioguqigccoiyca))) { goto kmwwqgiacsoksgcy; } return false; kmwwqgiacsoksgcy: $swaukaagekiououo = $this->isgmmgcaqsguwias()->gagsyqagguwwauac()->emqmaiomewcmuacu($post); $kggeaycqkokcquqk = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->sewesguyaqwccksa($post); $kggeaycqkokcquqk = $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\160\157\163\x74\137\x70\x75\162\147\145\137\165\x72\154\163", $kggeaycqkokcquqk, $post); $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . "\x62\x65\x66\157\x72\145\137\x63\x6c\145\141\x6e\x5f\x70\157\x73\x74", $post, $kggeaycqkokcquqk, $swaukaagekiououo); $this->qwgwwmwcgwommmcy($kggeaycqkokcquqk); $this->miemuiuwumuyqykm($swaukaagekiououo); $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . "\141\146\164\145\x72\x5f\143\x6c\x65\141\x6e\137\160\157\x73\x74", $post, $kggeaycqkokcquqk, $swaukaagekiououo); return true; } public function megokskeiiacqoii($suaemuyiacqyugsm) : bool { if ($this->gimogqqgyqwiwsmi()) { goto akieeaeqiwugimie; } return false; akieeaeqiwugimie: $mksyucucyswaukig = Page::symcgieuakksimmu()->eiswegiqykyigwig($suaemuyiacqyugsm); if ($mksyucucyswaukig instanceof WP_Post) { goto woaoeyaowkuukkqm; } if ($mksyucucyswaukig instanceof WP_Term) { goto sequgigsgkqaikmq; } if (!$this->caokeucsksukesyo()->gyecsegqciqykomu()->wmcwegoisyeeosqu($mksyucucyswaukig)) { goto ugqucegcucyyayga; } $this->qwgwwmwcgwommmcy([$mksyucucyswaukig]); ugqucegcucyyayga: goto aemoyqueimayqcaw; sequgigsgkqaikmq: $this->syicukiqeoyaqsok($mksyucucyswaukig); aemoyqueimayqcaw: goto mmqkuymyyycywmqu; woaoeyaowkuukkqm: $this->ussmokeesuogauca($mksyucucyswaukig); mmqkuymyyycywmqu: return true; } public function igkscowaqiikiwam($eouekqmooogkoqoo) : bool { if ($this->gimogqqgyqwiwsmi()) { goto iaockwkwaiqgeuyu; } return false; iaockwkwaiqgeuyu: $ocqawgquwsqioses = Page::symcgieuakksimmu()->woimamkkeyoyauoa(Page::ewyamgkooeqiecwg, $eouekqmooogkoqoo); foreach ($ocqawgquwsqioses as $suaemuyiacqyugsm) { $this->megokskeiiacqoii($suaemuyiacqyugsm); icmsyimgycuocisu: } oeeasouoaaoaaemm: return true; } }
