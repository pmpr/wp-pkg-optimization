<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66aeb5d8f13cb             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Cache\HTML\Purge; use Pmpr\Module\Optimization\Optimizer\Cache\HTML\Setting; use Pmpr\Module\Optimization\Optimizer\Cache\Purge\Engine as BaseClass; use Pmpr\Module\Optimization\PageManager\Model\Page; use WP_Post; use WP_Term; class Engine extends BaseClass { public function gimogqqgyqwiwsmi() : bool { return (bool) $this->weysguygiseoukqw(Setting::aqaeiauuykqeiyoi, false); } public function qsiwaqwsyasqsqcq(...$ywmkwiwkosakssii) : bool { $ksaameoqigiaoigg = false; if (!$this->gimogqqgyqwiwsmi()) { goto maeccckgcsaaumkw; } $ksaameoqigiaoigg = $this->caoeosiqwyaauaio(Ajax::symcgieuakksimmu()->gskqygiceygcguyo()); if (!$ksaameoqigiaoigg) { goto qwgkwokcyocqiyee; } $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . "\143\x61\143\x68\x65\137\x68\x74\x6d\x6c\x5f\141\x6c\154\137\160\165\x72\147\x65\x64", ...$ywmkwiwkosakssii); qwgkwokcyocqiyee: maeccckgcsaaumkw: return $ksaameoqigiaoigg; } public function sksuceuccwmiokoe($ccamueccusigaaio) : bool { if (!is_string($ccamueccusigaaio)) { goto gcoeaokkagaaeuse; } $this->caoeosiqwyaauaio(dirname(Ajax::symcgieuakksimmu()->cckisoakyqqgywey($ccamueccusigaaio))); $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . "\143\141\x63\x68\x65\x5f\150\x74\155\154\x5f\x75\162\x6c\x5f\x70\165\162\x67\x65\x64", $ccamueccusigaaio); return true; gcoeaokkagaaeuse: return false; } public function qwgwwmwcgwommmcy(array $auwuoyyagaiegwae) : bool { $auwuoyyagaiegwae = $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\x63\x61\x63\x68\145\x5f\150\x74\155\154\137\160\x75\162\147\145\x5f\165\x72\154\163", $auwuoyyagaiegwae); if (!(empty($auwuoyyagaiegwae) || !$this->gimogqqgyqwiwsmi())) { goto kcqueaewmayywqeq; } return false; kcqueaewmayywqeq: foreach ($auwuoyyagaiegwae as $eeamcawaiqocomwy) { $this->sksuceuccwmiokoe($eeamcawaiqocomwy); qocgmocqauaaekii: } uagsgicwwcakecwq: $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . "\x63\141\x63\x68\x65\x5f\x68\164\155\x6c\137\165\x72\154\x73\x5f\x70\x75\x72\147\145\x64", $auwuoyyagaiegwae); return true; } public function miemuiuwumuyqykm($swaukaagekiououo = '') : bool { if ($this->gimogqqgyqwiwsmi()) { goto gsggsmmwcmkgyyss; } return false; gsggsmmwcmkgyyss: return true; } public function syicukiqeoyaqsok($iwewcwusemqaiggk) : bool { if ($this->gimogqqgyqwiwsmi()) { goto yweucowesgsoewyc; } return false; yweucowesgsoewyc: return true; } public function ussmokeesuogauca($post) : bool { if ($this->gimogqqgyqwiwsmi()) { goto ikygockuuyimmmwk; } return false; ikygockuuyimmmwk: if (!$this->caokeucsksukesyo()->owicscwgeuqcqaig()->somkqoqeimmeemuq()) { goto uwmcugkwqwcuqqsq; } return false; uwmcugkwqwcuqqsq: $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $gcqseksiskwueksc = 0; if (!is_numeric($post)) { goto cycasoiysmksuwqk; } $gcqseksiskwueksc = $post; $post = $seumokooiykcomco->get($post); cycasoiysmksuwqk: if (is_object($post)) { goto muimagegskoisckc; } return false; muimagegskoisckc: if ($gcqseksiskwueksc) { goto yicaqocukqoauqgc; } $gcqseksiskwueksc = $seumokooiykcomco->iooowgsqoyqseyuu($post); yicaqocukqoauqgc: static $gqiuywqwmiieqcww = []; if (!isset($gqiuywqwmiieqcww[$gcqseksiskwueksc])) { goto kmcygqkmwcgwamkw; } return false; kmcygqkmwcgwamkw: $iueymcwwscwqkiyq = $seumokooiykcomco->ucwmcwqmqwaymkkc($post); $useksmwkuswkwcqg = $seumokooiykcomco->gueasuouwqysmomu($post); if (!(empty($useksmwkuswkwcqg) || in_array($iueymcwwscwqkiyq, [self::iuemaweiggauysws, self::ywskismomwmcsqam], true) || in_array($useksmwkuswkwcqg, [self::mskugisegsqmcqkk, self::cqycgsyykemiygou], true))) { goto gysmigyakgaakeoy; } return false; gysmigyakgaakeoy: $cskucqcumqsyimye = $this->caokeucsksukesyo()->gscioiumssogceuc(); $kgioguqigccoiyca = $cskucqcumqsyimye->imgymusqgccqsqqq($useksmwkuswkwcqg); if (!($kgioguqigccoiyca === null || !$cskucqcumqsyimye->cekoogweeooasayu($kgioguqigccoiyca))) { goto sueeqeioeiwkscao; } return false; sueeqeioeiwkscao: $swaukaagekiououo = $this->isgmmgcaqsguwias()->gagsyqagguwwauac()->emqmaiomewcmuacu($post); $kggeaycqkokcquqk = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->sewesguyaqwccksa($post); $kggeaycqkokcquqk = $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\160\157\163\164\x5f\160\x75\162\147\x65\137\x75\x72\x6c\163", $kggeaycqkokcquqk, $post); $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . "\x62\x65\146\x6f\x72\145\137\143\154\145\141\x6e\x5f\x70\x6f\x73\x74", $post, $kggeaycqkokcquqk, $swaukaagekiououo); $this->qwgwwmwcgwommmcy($kggeaycqkokcquqk); $this->miemuiuwumuyqykm($swaukaagekiououo); $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . "\141\146\164\145\x72\137\143\x6c\x65\x61\x6e\137\160\x6f\x73\x74", $post, $kggeaycqkokcquqk, $swaukaagekiououo); return true; } public function megokskeiiacqoii($suaemuyiacqyugsm) : bool { if ($this->gimogqqgyqwiwsmi()) { goto mmesoisgqucowwms; } return false; mmesoisgqucowwms: $mksyucucyswaukig = Page::symcgieuakksimmu()->eiswegiqykyigwig($suaemuyiacqyugsm); if ($mksyucucyswaukig instanceof WP_Post) { goto kmwwqgiacsoksgcy; } if ($mksyucucyswaukig instanceof WP_Term) { goto seaiwkkgyyegiyug; } if (!$this->caokeucsksukesyo()->gyecsegqciqykomu()->wmcwegoisyeeosqu($mksyucucyswaukig)) { goto uieuouugckwokske; } $this->qwgwwmwcgwommmcy([$mksyucucyswaukig]); uieuouugckwokske: goto uauuoyigkmqoasaq; seaiwkkgyyegiyug: $this->syicukiqeoyaqsok($mksyucucyswaukig); uauuoyigkmqoasaq: goto akieeaeqiwugimie; kmwwqgiacsoksgcy: $this->ussmokeesuogauca($mksyucucyswaukig); akieeaeqiwugimie: return true; } public function igkscowaqiikiwam($eouekqmooogkoqoo) : bool { if ($this->gimogqqgyqwiwsmi()) { goto ugqucegcucyyayga; } return false; ugqucegcucyyayga: $ocqawgquwsqioses = Page::symcgieuakksimmu()->woimamkkeyoyauoa(Page::ewyamgkooeqiecwg, $eouekqmooogkoqoo); foreach ($ocqawgquwsqioses as $suaemuyiacqyugsm) { $this->megokskeiiacqoii($suaemuyiacqyugsm); aemoyqueimayqcaw: } sequgigsgkqaikmq: return true; } }
