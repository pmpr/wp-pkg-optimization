<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             665adeeecdb44             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\API; use Pmpr\Common\Foundation\API\Cartridge; use Pmpr\Module\Optimization\Interfaces\CommonInterface; class Remote extends Cartridge implements CommonInterface { protected string $type = ''; public function __construct() { $usmiuwiumyygmucg = ["\150\x74\x74\x70\x3a\57\x2f\x31\62\67\x2e\60\56\x30\x2e\61\72\x35\60\x30\x30"]; if (!$usmiuwiumyygmucg) { goto coywmiyqgsweuiic; } $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); foreach ($usmiuwiumyygmucg as $qcaiykuysiowsimu) { if (!$cwaqscoiqkokyase->wmcwegoisyeeosqu($qcaiykuysiowsimu)) { goto ieumumsgyguceusy; } $this->iggeecowsiwyaooe($qcaiykuysiowsimu); ieumumsgyguceusy: yssscwioiyygssec: } qcessicwuikwqsis: $this->kiaqywwoysssqgig("\103\x6f\x6f\x6b\x69\x65", "\160\155\x70\x72\x2d\x63\154\151\x65\156\x74\x3d\164\x72\165\x65"); parent::__construct(); coywmiyqgsweuiic: } public function gueasuouwqysmomu() : string { return $this->type; } public function uiqqikcuycqyeooa(?string $aokagokqyuysuksm) : array { $sogksuscggsicmac = $this->eqkieiagqmugguew("\57{$this->gueasuouwqysmomu()}\x2f\x63\150\145\143\153\55\152\157\142", [self::kugiewcgiawaeiaq => [self::gouqcwikiiygyasc => $aokagokqyuysuksm]], self::mswoacegomcucaik); $iueymcwwscwqkiyq = self::kywgiyyageyqwuuc; if (is_wp_error($sogksuscggsicmac)) { goto wwkgkaecgiwggcck; } if ($sogksuscggsicmac && isset($sogksuscggsicmac[self::eikgweiqgomeisyo])) { goto gygawoqywkukmqee; } $iueymcwwscwqkiyq = self::uasuowkaguiwoouw; goto kciouyuaqkyqomam; gygawoqywkukmqee: switch ($sogksuscggsicmac[self::eikgweiqgomeisyo]) { case self::amcogigwsaqssuai: if (isset($sogksuscggsicmac[self::ckcawaoawwioqecq]) && $sogksuscggsicmac[self::ckcawaoawwioqecq]) { goto oouoqimaaqcmccay; } $iueymcwwscwqkiyq = self::uasuowkaguiwoouw; goto sycygoiaiqqageym; oouoqimaaqcmccay: $iueymcwwscwqkiyq = self::gymusgeumuwomwuy; sycygoiaiqqageym: goto siqagquguiemuoku; case self::uasuowkaguiwoouw: $iueymcwwscwqkiyq = self::uasuowkaguiwoouw; } ycakugokkqkuqyiu: siqagquguiemuoku: kciouyuaqkyqomam: goto umgaesggesswoaqe; wwkgkaecgiwggcck: $iueymcwwscwqkiyq = self::uasuowkaguiwoouw; umgaesggesswoaqe: return [self::ciywsqoeiymemsys => $iueymcwwscwqkiyq, self::uiwqcumqkgikqyue => $sogksuscggsicmac[self::uiwqcumqkgikqyue] ?? []]; } }
