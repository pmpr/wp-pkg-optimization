<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66a69a35d5c5b             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Cache\HTML\Purge; use Pmpr\Module\Optimization\Optimizer\Cache\HTML\Setting; use Pmpr\Module\Optimization\Optimizer\Cache\Purge\Engine as BaseClass; use Pmpr\Module\Optimization\PageManager\Model\Page; use WP_Post; use WP_Term; class Engine extends BaseClass { public function gimogqqgyqwiwsmi() : bool { return (bool) $this->weysguygiseoukqw(Setting::aqaeiauuykqeiyoi, false); } public function qsiwaqwsyasqsqcq(...$ywmkwiwkosakssii) : bool { $ksaameoqigiaoigg = false; if (!$this->gimogqqgyqwiwsmi()) { goto qywkykqkeeuccoui; } $ksaameoqigiaoigg = $this->caoeosiqwyaauaio(Ajax::symcgieuakksimmu()->gskqygiceygcguyo()); if (!$ksaameoqigiaoigg) { goto oqgymyiwckkwueuw; } $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . "\143\x61\x63\150\145\137\150\x74\155\x6c\x5f\141\x6c\154\137\x70\x75\x72\147\x65\144", ...$ywmkwiwkosakssii); oqgymyiwckkwueuw: qywkykqkeeuccoui: return $ksaameoqigiaoigg; } public function sksuceuccwmiokoe($ccamueccusigaaio) : bool { if (!is_string($ccamueccusigaaio)) { goto yqqseqskcqeqkacm; } $this->caoeosiqwyaauaio(dirname(Ajax::symcgieuakksimmu()->cckisoakyqqgywey($ccamueccusigaaio))); $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . "\x63\x61\x63\x68\x65\x5f\x68\164\155\x6c\x5f\165\162\x6c\137\160\x75\x72\x67\145\144", $ccamueccusigaaio); return true; yqqseqskcqeqkacm: return false; } public function qwgwwmwcgwommmcy(array $auwuoyyagaiegwae) : bool { $auwuoyyagaiegwae = $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\143\141\143\x68\145\x5f\x68\164\x6d\x6c\137\x70\x75\x72\147\145\137\x75\162\x6c\163", $auwuoyyagaiegwae); if (!(empty($auwuoyyagaiegwae) || !$this->gimogqqgyqwiwsmi())) { goto ywokggauuiosegog; } return false; ywokggauuiosegog: foreach ($auwuoyyagaiegwae as $eeamcawaiqocomwy) { $this->sksuceuccwmiokoe($eeamcawaiqocomwy); sockocsycmkaeosg: } uoewiggumomegksg: $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . "\x63\x61\143\150\145\x5f\x68\x74\155\x6c\x5f\x75\162\x6c\163\x5f\160\165\x72\147\x65\x64", $auwuoyyagaiegwae); return true; } public function miemuiuwumuyqykm($swaukaagekiououo = '') : bool { if ($this->gimogqqgyqwiwsmi()) { goto ugkwqaywmwqucoeo; } return false; ugkwqaywmwqucoeo: return true; } public function syicukiqeoyaqsok($iwewcwusemqaiggk) : bool { if ($this->gimogqqgyqwiwsmi()) { goto syisomgawcsqeemk; } return false; syisomgawcsqeemk: return true; } public function ussmokeesuogauca($post) : bool { if ($this->gimogqqgyqwiwsmi()) { goto asoecuscmsyusmkg; } return false; asoecuscmsyusmkg: if (!$this->caokeucsksukesyo()->owicscwgeuqcqaig()->somkqoqeimmeemuq()) { goto kwasqmcyiswoaiuu; } return false; kwasqmcyiswoaiuu: $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $gcqseksiskwueksc = 0; if (!is_numeric($post)) { goto kiskwawumeiiieuk; } $gcqseksiskwueksc = $post; $post = $seumokooiykcomco->get($post); kiskwawumeiiieuk: if (is_object($post)) { goto oaqeoqsksuyyggmg; } return false; oaqeoqsksuyyggmg: if ($gcqseksiskwueksc) { goto kkmuuoscccmokkiw; } $gcqseksiskwueksc = $seumokooiykcomco->iooowgsqoyqseyuu($post); kkmuuoscccmokkiw: static $gqiuywqwmiieqcww = []; if (!isset($gqiuywqwmiieqcww[$gcqseksiskwueksc])) { goto awuwuuuagqysukku; } return false; awuwuuuagqysukku: $iueymcwwscwqkiyq = $seumokooiykcomco->ucwmcwqmqwaymkkc($post); $useksmwkuswkwcqg = $seumokooiykcomco->gueasuouwqysmomu($post); if (!(empty($useksmwkuswkwcqg) || in_array($iueymcwwscwqkiyq, [self::iuemaweiggauysws, self::ywskismomwmcsqam], true) || in_array($useksmwkuswkwcqg, [self::mskugisegsqmcqkk, self::cqycgsyykemiygou], true))) { goto miugmimciywcgswm; } return false; miugmimciywcgswm: $cskucqcumqsyimye = $this->caokeucsksukesyo()->gscioiumssogceuc(); $kgioguqigccoiyca = $cskucqcumqsyimye->imgymusqgccqsqqq($useksmwkuswkwcqg); if (!($kgioguqigccoiyca === null || !$cskucqcumqsyimye->cekoogweeooasayu($kgioguqigccoiyca))) { goto aqekkeqmmewoyawu; } return false; aqekkeqmmewoyawu: $swaukaagekiououo = $this->isgmmgcaqsguwias()->gagsyqagguwwauac()->emqmaiomewcmuacu($post); $kggeaycqkokcquqk = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->sewesguyaqwccksa($post); $kggeaycqkokcquqk = $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\x70\x6f\163\164\x5f\160\x75\x72\147\x65\137\165\162\x6c\x73", $kggeaycqkokcquqk, $post); $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . "\142\145\146\x6f\162\x65\137\143\x6c\x65\x61\156\137\160\x6f\x73\x74", $post, $kggeaycqkokcquqk, $swaukaagekiououo); $this->qwgwwmwcgwommmcy($kggeaycqkokcquqk); $this->miemuiuwumuyqykm($swaukaagekiououo); $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . "\141\146\164\145\162\x5f\143\154\145\x61\x6e\137\160\157\163\x74", $post, $kggeaycqkokcquqk, $swaukaagekiououo); return true; } public function megokskeiiacqoii($suaemuyiacqyugsm) : bool { if ($this->gimogqqgyqwiwsmi()) { goto mcqwuawosciucemq; } return false; mcqwuawosciucemq: $mksyucucyswaukig = Page::symcgieuakksimmu()->eiswegiqykyigwig($suaemuyiacqyugsm); if ($mksyucucyswaukig instanceof WP_Post) { goto ecgwgamiseokmise; } if ($mksyucucyswaukig instanceof WP_Term) { goto maggecymmmesqmqs; } if (!$this->caokeucsksukesyo()->gyecsegqciqykomu()->wmcwegoisyeeosqu($mksyucucyswaukig)) { goto emeeocqaisksyioq; } $this->qwgwwmwcgwommmcy([$mksyucucyswaukig]); emeeocqaisksyioq: goto csaksaisgawusswg; maggecymmmesqmqs: $this->syicukiqeoyaqsok($mksyucucyswaukig); csaksaisgawusswg: goto qkiyyywwuiuackao; ecgwgamiseokmise: $this->ussmokeesuogauca($mksyucucyswaukig); qkiyyywwuiuackao: return true; } public function igkscowaqiikiwam($eouekqmooogkoqoo) : bool { if ($this->gimogqqgyqwiwsmi()) { goto gyskcwykkyakeims; } return false; gyskcwykkyakeims: $ocqawgquwsqioses = Page::symcgieuakksimmu()->woimamkkeyoyauoa(Page::ewyamgkooeqiecwg, $eouekqmooogkoqoo); foreach ($ocqawgquwsqioses as $suaemuyiacqyugsm) { $this->megokskeiiacqoii($suaemuyiacqyugsm); mcagemacuqyskogs: } ossakckwskyqusmm: return true; } }
