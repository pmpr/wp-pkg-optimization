<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6668a93c5745b             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\API; use Pmpr\Common\Foundation\API\Cartridge; use Pmpr\Module\Optimization\Interfaces\CommonInterface; class Remote extends Cartridge implements CommonInterface { protected string $type = ''; public function __construct() { $usmiuwiumyygmucg = ["\150\x74\x74\x70\x3a\x2f\57\x31\x32\x37\56\x30\x2e\x30\x2e\x31\72\65\x30\x30\x30"]; if (!$usmiuwiumyygmucg) { goto ycakugokkqkuqyiu; } $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); foreach ($usmiuwiumyygmucg as $qcaiykuysiowsimu) { if (!$cwaqscoiqkokyase->wmcwegoisyeeosqu($qcaiykuysiowsimu)) { goto siqagquguiemuoku; } $this->iggeecowsiwyaooe($qcaiykuysiowsimu); siqagquguiemuoku: coywmiyqgsweuiic: } ieumumsgyguceusy: $this->kiaqywwoysssqgig("\x43\x6f\157\153\151\145", "\x70\x6d\160\162\55\x63\x6c\151\x65\156\x74\75\164\x72\x75\145"); parent::__construct(); ycakugokkqkuqyiu: } public function gueasuouwqysmomu() : string { return $this->type; } public function uiqqikcuycqyeooa(?string $aokagokqyuysuksm) : array { $sogksuscggsicmac = $this->eqkieiagqmugguew("\57{$this->gueasuouwqysmomu()}\57\x63\x68\145\143\x6b\55\152\x6f\x62", [self::kugiewcgiawaeiaq => [self::gouqcwikiiygyasc => $aokagokqyuysuksm]], self::mswoacegomcucaik); $iueymcwwscwqkiyq = self::kywgiyyageyqwuuc; if (is_wp_error($sogksuscggsicmac)) { goto qsygcycwieukkgwc; } if ($sogksuscggsicmac && isset($sogksuscggsicmac[self::eikgweiqgomeisyo])) { goto wwkgkaecgiwggcck; } $iueymcwwscwqkiyq = self::uasuowkaguiwoouw; goto umgaesggesswoaqe; wwkgkaecgiwggcck: switch ($sogksuscggsicmac[self::eikgweiqgomeisyo]) { case self::amcogigwsaqssuai: if (isset($sogksuscggsicmac[self::ckcawaoawwioqecq]) && $sogksuscggsicmac[self::ckcawaoawwioqecq]) { goto gygawoqywkukmqee; } $iueymcwwscwqkiyq = self::uasuowkaguiwoouw; goto kciouyuaqkyqomam; gygawoqywkukmqee: $iueymcwwscwqkiyq = self::gymusgeumuwomwuy; kciouyuaqkyqomam: goto oouoqimaaqcmccay; case self::uasuowkaguiwoouw: $iueymcwwscwqkiyq = self::uasuowkaguiwoouw; } sycygoiaiqqageym: oouoqimaaqcmccay: umgaesggesswoaqe: goto kiwqkcaekqqyuegq; qsygcycwieukkgwc: $iueymcwwscwqkiyq = self::uasuowkaguiwoouw; kiwqkcaekqqyuegq: return [self::ciywsqoeiymemsys => $iueymcwwscwqkiyq, self::uiwqcumqkgikqyue => $sogksuscggsicmac[self::uiwqcumqkgikqyue] ?? []]; } }
