<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6681a8b6b9a73             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\SpecialPage\Notfound; class Engine extends Common { public function gskqygiceygcguyo() : string { return untrailingslashit($this->caokeucsksukesyo()->eiwcuqigayigimak()->cmaecekuqkwmemms(self::umciwouwwsyqumae)) . "\x2f\x6e\157\164\146\157\x75\156\144"; } public function guwogeosiyasimgk() : string { return "{$this->gskqygiceygcguyo()}\x2f\64\60\x34\x2e\164\x78\164"; } public function wuceuyakuwiquase() : string { return "{$this->gskqygiceygcguyo()}\x2f\64\60\64\x2e\150\164\155\x6c"; } public function cqqyaosqycscowyw() : array { $megmggkiokqkcwou = []; $esaqeawoigqgagum = $this->guwogeosiyasimgk(); if (!$this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->exists($esaqeawoigqgagum)) { goto ugqwuugsweqgmywk; } $megmggkiokqkcwou = file($esaqeawoigqgagum, FILE_IGNORE_NEW_LINES); if ($megmggkiokqkcwou) { goto gmwykkouysyaqwqm; } $megmggkiokqkcwou = []; gmwykkouysyaqwqm: ugqwuugsweqgmywk: return $megmggkiokqkcwou; } public function iuwqmqagcwaeoksk(?string $aaokuekaimigoyue, ?array $essikcmqiyqaqoaq = null) { $ksaameoqigiaoigg = false; if (!$aaokuekaimigoyue) { goto mkwkkmkgiqiamacc; } if (is_array($essikcmqiyqaqoaq)) { goto uaukmuiwskcemcsw; } $essikcmqiyqaqoaq = $this->cqqyaosqycscowyw(); uaukmuiwskcemcsw: if (!($essikcmqiyqaqoaq && in_array($aaokuekaimigoyue, $essikcmqiyqaqoaq))) { goto sockeswygwcskeuq; } $ksaameoqigiaoigg = array_search($aaokuekaimigoyue, $essikcmqiyqaqoaq); sockeswygwcskeuq: mkwkkmkgiqiamacc: return $ksaameoqigiaoigg; } public function kywqieosgkokaiue(?string $aaokuekaimigoyue) { if (!($this->iuwqmqagcwaeoksk($aaokuekaimigoyue) === false)) { goto uaqackioaiqwcocy; } $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->kwsmkgyoyaqecwuu($this->guwogeosiyasimgk(), $aaokuekaimigoyue . PHP_EOL, FILE_APPEND); uaqackioaiqwcocy: } public function wywmcmiueimeaegy(?string $aaokuekaimigoyue) { $essikcmqiyqaqoaq = $this->cqqyaosqycscowyw(); $momcykaoccoymeig = $this->iuwqmqagcwaeoksk($aaokuekaimigoyue, $essikcmqiyqaqoaq); if (!($momcykaoccoymeig !== false)) { goto cscusseysqygsoiy; } unset($essikcmqiyqaqoaq[$momcykaoccoymeig]); $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->kwsmkgyoyaqecwuu($this->guwogeosiyasimgk(), implode(PHP_EOL, $essikcmqiyqaqoaq)); cscusseysqygsoiy: } public function iwmwsmkugeeuyasg() { $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->kwsmkgyoyaqecwuu($this->guwogeosiyasimgk()); } }
