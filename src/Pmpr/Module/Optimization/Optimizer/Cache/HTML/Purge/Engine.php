<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66583cba0bde7             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Cache\HTML\Purge; use Pmpr\Module\Optimization\Optimizer\Cache\HTML\Setting; use Pmpr\Module\Optimization\Optimizer\Cache\Purge\Engine as BaseClass; use Pmpr\Module\Optimization\PageManager\Model\Page; use WP_Post; use WP_Term; class Engine extends BaseClass { public function gimogqqgyqwiwsmi() : bool { return (bool) $this->weysguygiseoukqw(Setting::aqaeiauuykqeiyoi, false); } public function qsiwaqwsyasqsqcq(...$ywmkwiwkosakssii) : bool { $ksaameoqigiaoigg = false; if (!$this->gimogqqgyqwiwsmi()) { goto iwsmmkqaoksmocok; } $ksaameoqigiaoigg = $this->caoeosiqwyaauaio(Ajax::symcgieuakksimmu()->gskqygiceygcguyo()); if (!$ksaameoqigiaoigg) { goto emqswoaawgeyosmi; } $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . "\143\141\143\x68\x65\137\150\x74\155\x6c\x5f\x61\x6c\x6c\137\160\x75\162\x67\x65\x64", ...$ywmkwiwkosakssii); emqswoaawgeyosmi: iwsmmkqaoksmocok: return $ksaameoqigiaoigg; } public function qwgwwmwcgwommmcy(array $auwuoyyagaiegwae) : bool { $auwuoyyagaiegwae = $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\x63\141\143\x68\x65\137\x68\164\x6d\x6c\x5f\160\x75\x72\147\x65\137\x75\x72\x6c\x73", $auwuoyyagaiegwae); if (!(empty($auwuoyyagaiegwae) || !$this->gimogqqgyqwiwsmi())) { goto esikeyqyuikmaiek; } return false; esikeyqyuikmaiek: foreach ($auwuoyyagaiegwae as $eeamcawaiqocomwy) { $this->caoeosiqwyaauaio(dirname(Ajax::symcgieuakksimmu()->cckisoakyqqgywey($eeamcawaiqocomwy))); qiiigwkqeoewsuwm: } okkmcocqokkskasy: $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . "\x63\141\x63\x68\x65\x5f\150\x74\155\154\137\x75\162\x6c\163\137\x70\x75\162\x67\145\144", $auwuoyyagaiegwae); return true; } public function miemuiuwumuyqykm($swaukaagekiououo = '') : bool { if ($this->gimogqqgyqwiwsmi()) { goto esaqcqqwuussiiwo; } return false; esaqcqqwuussiiwo: return true; } public function syicukiqeoyaqsok($iwewcwusemqaiggk) : bool { } public function ussmokeesuogauca($post) : bool { if ($this->gimogqqgyqwiwsmi()) { goto ikqeeaysmqgcgawq; } return false; ikqeeaysmqgcgawq: if (!$this->caokeucsksukesyo()->owicscwgeuqcqaig()->somkqoqeimmeemuq()) { goto mscgewkcqcoowweg; } return false; mscgewkcqcoowweg: $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $gcqseksiskwueksc = 0; if (!is_numeric($post)) { goto suqcsgaosywaauuu; } $gcqseksiskwueksc = $post; $post = $seumokooiykcomco->get($post); suqcsgaosywaauuu: if (is_object($post)) { goto wwukgaquuyoissgy; } return false; wwukgaquuyoissgy: if ($gcqseksiskwueksc) { goto gsygwgsiawgmqiyi; } $gcqseksiskwueksc = $seumokooiykcomco->iooowgsqoyqseyuu($post); gsygwgsiawgmqiyi: static $gqiuywqwmiieqcww = []; if (!isset($gqiuywqwmiieqcww[$gcqseksiskwueksc])) { goto qsgqwyqaqiowkmco; } return false; qsgqwyqaqiowkmco: $iueymcwwscwqkiyq = $seumokooiykcomco->ucwmcwqmqwaymkkc($post); $useksmwkuswkwcqg = $seumokooiykcomco->gueasuouwqysmomu($post); if (!(empty($useksmwkuswkwcqg) || in_array($iueymcwwscwqkiyq, [self::iuemaweiggauysws, self::ywskismomwmcsqam], true) || in_array($useksmwkuswkwcqg, [self::mskugisegsqmcqkk, self::cqycgsyykemiygou], true))) { goto yqagomygmeoecwey; } return false; yqagomygmeoecwey: $cskucqcumqsyimye = $this->caokeucsksukesyo()->gscioiumssogceuc(); $kgioguqigccoiyca = $cskucqcumqsyimye->imgymusqgccqsqqq($useksmwkuswkwcqg); if (!($kgioguqigccoiyca === null || !$cskucqcumqsyimye->cekoogweeooasayu($kgioguqigccoiyca))) { goto qikaewekoecykeou; } return false; qikaewekoecykeou: $swaukaagekiououo = $this->isgmmgcaqsguwias()->gagsyqagguwwauac()->emqmaiomewcmuacu($post); $kggeaycqkokcquqk = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->sewesguyaqwccksa($post); $kggeaycqkokcquqk = $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\160\x6f\163\x74\137\160\165\x72\x67\145\x5f\165\162\154\x73", $kggeaycqkokcquqk, $post); $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . "\x62\145\x66\x6f\162\x65\137\143\x6c\x65\x61\156\x5f\160\157\x73\x74", $post, $kggeaycqkokcquqk, $swaukaagekiououo); $this->qwgwwmwcgwommmcy($kggeaycqkokcquqk); $this->miemuiuwumuyqykm($swaukaagekiououo); $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . "\141\x66\164\x65\162\137\143\154\x65\141\x6e\137\160\x6f\163\164", $post, $kggeaycqkokcquqk, $swaukaagekiououo); return true; } public function megokskeiiacqoii($suaemuyiacqyugsm) : bool { if ($this->gimogqqgyqwiwsmi()) { goto eucqomyqykgoiuge; } return false; eucqomyqykgoiuge: $mksyucucyswaukig = Page::symcgieuakksimmu()->eiswegiqykyigwig($suaemuyiacqyugsm); if ($mksyucucyswaukig instanceof WP_Post) { goto oqousikwiiqagoyw; } if ($mksyucucyswaukig instanceof WP_Term) { goto aiccyaswigkaycqk; } if (!$this->caokeucsksukesyo()->gyecsegqciqykomu()->wmcwegoisyeeosqu($mksyucucyswaukig)) { goto usymasgsyqgsuocg; } $this->qwgwwmwcgwommmcy([$mksyucucyswaukig]); usymasgsyqgsuocg: goto sqyokemumceysegy; aiccyaswigkaycqk: $this->syicukiqeoyaqsok($mksyucucyswaukig); sqyokemumceysegy: goto zayqqeqgcwkekwws; oqousikwiiqagoyw: $this->ussmokeesuogauca($mksyucucyswaukig); zayqqeqgcwkekwws: return true; } public function igkscowaqiikiwam($eouekqmooogkoqoo) : bool { if ($this->gimogqqgyqwiwsmi()) { goto aueaceeyommgkicu; } return false; aueaceeyommgkicu: $ocqawgquwsqioses = Page::symcgieuakksimmu()->woimamkkeyoyauoa(Page::ewyamgkooeqiecwg, $eouekqmooogkoqoo); foreach ($ocqawgquwsqioses as $suaemuyiacqyugsm) { $this->megokskeiiacqoii($suaemuyiacqyugsm); egmayaiikwsskgmy: } mysueeoswqgccmui: return true; } }
