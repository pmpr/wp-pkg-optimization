<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             668724cd3b441             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\API; use Pmpr\Common\Foundation\API\Cartridge; use Pmpr\Module\Optimization\Interfaces\CommonInterface; class Remote extends Cartridge implements CommonInterface { protected string $type = ''; public function __construct() { $usmiuwiumyygmucg = ["\150\164\x74\x70\72\57\x2f\x31\x32\x37\56\60\x2e\x30\x2e\61\x3a\65\x30\60\x30"]; if (!$usmiuwiumyygmucg) { goto cuykwgmswkskqkyi; } $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); foreach ($usmiuwiumyygmucg as $qcaiykuysiowsimu) { if (!$cwaqscoiqkokyase->wmcwegoisyeeosqu($qcaiykuysiowsimu)) { goto csscmcacoikwsecs; } $this->iggeecowsiwyaooe($qcaiykuysiowsimu); csscmcacoikwsecs: asmecuqiyyswueqe: } myoicgcuugciueis: $this->kiaqywwoysssqgig("\103\157\157\153\x69\145", "\x70\x6d\x70\162\x2d\x63\154\151\145\x6e\x74\75\x74\x72\165\x65"); parent::__construct(); cuykwgmswkskqkyi: } public function gueasuouwqysmomu() : string { return $this->type; } public function uiqqikcuycqyeooa(?string $aokagokqyuysuksm) : array { $sogksuscggsicmac = $this->eqkieiagqmugguew("\x2f{$this->gueasuouwqysmomu()}\x2f\143\x68\145\143\x6b\x2d\152\x6f\x62", [self::kugiewcgiawaeiaq => [self::gouqcwikiiygyasc => $aokagokqyuysuksm]], self::mswoacegomcucaik); $iueymcwwscwqkiyq = self::kywgiyyageyqwuuc; if (is_wp_error($sogksuscggsicmac)) { goto kiqogmwcgcamwiig; } if ($sogksuscggsicmac && isset($sogksuscggsicmac[self::eikgweiqgomeisyo])) { goto kwagwqyusyiyoaqs; } $iueymcwwscwqkiyq = self::uasuowkaguiwoouw; goto yowsmsiyimmimemc; kwagwqyusyiyoaqs: switch ($sogksuscggsicmac[self::eikgweiqgomeisyo]) { case self::amcogigwsaqssuai: if (isset($sogksuscggsicmac[self::ckcawaoawwioqecq]) && $sogksuscggsicmac[self::ckcawaoawwioqecq]) { goto sciwggaeogcoesiu; } $iueymcwwscwqkiyq = self::uasuowkaguiwoouw; goto eqkauqciwewmgeoi; sciwggaeogcoesiu: $iueymcwwscwqkiyq = self::gymusgeumuwomwuy; eqkauqciwewmgeoi: goto kuicqywysciceggs; case self::uasuowkaguiwoouw: $iueymcwwscwqkiyq = self::uasuowkaguiwoouw; } mkwskuycuyguqqok: kuicqywysciceggs: yowsmsiyimmimemc: goto iomcaiwewsawiamu; kiqogmwcgcamwiig: $iueymcwwscwqkiyq = self::uasuowkaguiwoouw; iomcaiwewsawiamu: return [self::ciywsqoeiymemsys => $iueymcwwscwqkiyq, self::uiwqcumqkgikqyue => $sogksuscggsicmac[self::uiwqcumqkgikqyue] ?? []]; } }
