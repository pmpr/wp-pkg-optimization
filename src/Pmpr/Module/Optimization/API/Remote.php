<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66bd253c8f77d             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\API; use Pmpr\Common\Foundation\API\Cartridge; use Pmpr\Module\Optimization\Interfaces\CommonInterface; class Remote extends Cartridge implements CommonInterface { protected string $type = ''; public function __construct() { $usmiuwiumyygmucg = ["\150\164\164\160\72\x2f\57\x31\x32\x37\56\60\56\60\x2e\61\x3a\x35\60\x30\x30"]; if (!$usmiuwiumyygmucg) { goto qwigomakwmyiwkgo; } $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); foreach ($usmiuwiumyygmucg as $qcaiykuysiowsimu) { if (!$cwaqscoiqkokyase->wmcwegoisyeeosqu($qcaiykuysiowsimu)) { goto qgoiooayqmqqsiok; } $this->iggeecowsiwyaooe($qcaiykuysiowsimu); qgoiooayqmqqsiok: qogqewiwmwiwskgm: } qiaqsassksqiuyae: $this->kiaqywwoysssqgig("\103\157\x6f\153\x69\145", "\x70\x6d\160\x72\x2d\143\154\x69\145\x6e\x74\75\x74\162\165\145"); parent::__construct(); qwigomakwmyiwkgo: } public function gueasuouwqysmomu() : string { return $this->type; } public function uiqqikcuycqyeooa(?string $aokagokqyuysuksm) : array { $sogksuscggsicmac = $this->eqkieiagqmugguew("\57{$this->gueasuouwqysmomu()}\x2f\x63\x68\145\x63\x6b\x2d\x6a\157\142", [self::kugiewcgiawaeiaq => [self::gouqcwikiiygyasc => $aokagokqyuysuksm]], self::mswoacegomcucaik); $iueymcwwscwqkiyq = self::kywgiyyageyqwuuc; if (is_wp_error($sogksuscggsicmac)) { goto sciwggaeogcoesiu; } if ($sogksuscggsicmac && isset($sogksuscggsicmac[self::eikgweiqgomeisyo])) { goto kuicqywysciceggs; } $iueymcwwscwqkiyq = self::uasuowkaguiwoouw; goto mkwskuycuyguqqok; kuicqywysciceggs: switch ($sogksuscggsicmac[self::eikgweiqgomeisyo]) { case self::amcogigwsaqssuai: if (isset($sogksuscggsicmac[self::ckcawaoawwioqecq]) && $sogksuscggsicmac[self::ckcawaoawwioqecq]) { goto csscmcacoikwsecs; } $iueymcwwscwqkiyq = self::uasuowkaguiwoouw; goto cuykwgmswkskqkyi; csscmcacoikwsecs: $iueymcwwscwqkiyq = self::gymusgeumuwomwuy; cuykwgmswkskqkyi: goto myoicgcuugciueis; case self::uasuowkaguiwoouw: $iueymcwwscwqkiyq = self::uasuowkaguiwoouw; } asmecuqiyyswueqe: myoicgcuugciueis: mkwskuycuyguqqok: goto eqkauqciwewmgeoi; sciwggaeogcoesiu: $iueymcwwscwqkiyq = self::uasuowkaguiwoouw; eqkauqciwewmgeoi: return [self::ciywsqoeiymemsys => $iueymcwwscwqkiyq, self::uiwqcumqkgikqyue => $sogksuscggsicmac[self::uiwqcumqkgikqyue] ?? []]; } }
