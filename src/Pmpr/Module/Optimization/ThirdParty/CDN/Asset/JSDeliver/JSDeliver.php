<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66a68e6136ef8             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\ThirdParty\CDN\Asset\JSDeliver; class JSDeliver extends Common { const igmscwcocgmmeiui = self::kgswyesggeyekgmg . "\146\x69\146\x74\145\145\156\x5f\x6d\151\x6e\165\164\x65\x73"; const euoywiakyecmimgm = self::kgswyesggeyekgmg . "\152\163\144\145\154\151\x76\x72\x5f\x61\x6e\141\x6c\x79\x7a\145\137\143\162\x6f\x6e\137\150\x6f\x6f\x6b"; const gcsqwcqiuumscemw = self::kgswyesggeyekgmg . "\152\x73\144\x65\x6c\x69\166\x72\137\162\x65\x6d\157\166\x65\137\x6f\154\144\x5f\x63\x72\x6f\x6e\137\150\x6f\157\x6b"; protected ?Engine $engine = null; public function ikcgmcycisiccyuc() { $this->engine = Engine::symcgieuakksimmu(); } public function mameiwsayuyquoeq() { Setting::symcgieuakksimmu(); } public function wigskegsqequoeks() { } public function init() { $igcseousimqsewkw = $this->uwkmaywceaaaigwo()->cuwcwgaeiugaccei(); if ($igcseousimqsewkw->sceqickmyoseqcue(self::euoywiakyecmimgm)) { goto ukkcmocamwgiqayu; } $igcseousimqsewkw->uwugaiqywmseksqm(self::igmscwcocgmmeiui, self::euoywiakyecmimgm); ukkcmocamwgiqayu: if ($igcseousimqsewkw->sceqickmyoseqcue(self::gcsqwcqiuumscemw)) { goto mwysseaekcsiesmm; } $igcseousimqsewkw->uwugaiqywmseksqm(self::wmasmcgmyeoaisoa, self::gcsqwcqiuumscemw); mwysseaekcsiesmm: } public function asqwqaqowgeyyayw() { $ecukkacusqswqoem = false; $oammesyieqmwuwyi = $this->wasgwsogmuquqeaa(); foreach ($oammesyieqmwuwyi[self::yaaaeikkkccecgeu] as $momcykaoccoymeig => $egsumesakcaaukem) { if (!(time() - $egsumesakcaaukem[self::equemyqwoqoousqq] > 60 * 60 * 24 * 2)) { goto uougwgeyiokewkkm; } unset($oammesyieqmwuwyi[self::yaaaeikkkccecgeu][$momcykaoccoymeig]); $ecukkacusqswqoem = true; uougwgeyiokewkkm: gygwewcqsmwqismo: } amgsueumgaguceaa: if (!$ecukkacusqswqoem) { goto gommacygsykyussk; } $this->items = $oammesyieqmwuwyi; $this->ciaesowswgmgckaa(); gommacygsykyussk: } public function uykissogmuaaocsg() : ?Engine { return $this->engine; } }
