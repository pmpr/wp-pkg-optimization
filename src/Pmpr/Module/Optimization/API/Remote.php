<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             663503140fc0e             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\API; use Pmpr\Common\Foundation\API\Cartridge; use Pmpr\Module\Optimization\Interfaces\CommonInterface; class Remote extends Cartridge implements CommonInterface { protected string $type = ''; public function __construct() { $usmiuwiumyygmucg = ["\x68\x74\164\160\x3a\x2f\x2f\x31\62\x37\x2e\x30\56\x30\56\x31\72\65\x30\60\x30"]; if (!$usmiuwiumyygmucg) { goto okycquokqoamsquy; } $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); foreach ($usmiuwiumyygmucg as $qcaiykuysiowsimu) { if (!$cwaqscoiqkokyase->wmcwegoisyeeosqu($qcaiykuysiowsimu)) { goto scockmiqikwwkqse; } $this->iggeecowsiwyaooe($qcaiykuysiowsimu); scockmiqikwwkqse: mcukocaaoyuugoeu: } iiiwsgameuomumgw: $this->kiaqywwoysssqgig("\103\x6f\x6f\x6b\x69\145", "\160\x6d\160\x72\x2d\x63\x6c\x69\x65\156\x74\75\164\162\x75\145"); parent::__construct(); okycquokqoamsquy: } public function gueasuouwqysmomu() : string { return $this->type; } public function uiqqikcuycqyeooa(?string $aokagokqyuysuksm) : array { $sogksuscggsicmac = $this->eqkieiagqmugguew("\57{$this->gueasuouwqysmomu()}\57\143\150\x65\x63\x6b\x2d\x6a\157\142", [self::kugiewcgiawaeiaq => [self::gouqcwikiiygyasc => $aokagokqyuysuksm]], self::mswoacegomcucaik); $iueymcwwscwqkiyq = self::kywgiyyageyqwuuc; if (is_wp_error($sogksuscggsicmac)) { goto kqyeukywmgismyaq; } if ($sogksuscggsicmac && isset($sogksuscggsicmac[self::eikgweiqgomeisyo])) { goto mciumqyyossyiuyk; } $iueymcwwscwqkiyq = self::uasuowkaguiwoouw; goto acaeigkmigikeuyu; mciumqyyossyiuyk: switch ($sogksuscggsicmac[self::eikgweiqgomeisyo]) { case self::amcogigwsaqssuai: if (isset($sogksuscggsicmac[self::ckcawaoawwioqecq]) && $sogksuscggsicmac[self::ckcawaoawwioqecq]) { goto kssuqmsgmaaeqigw; } $iueymcwwscwqkiyq = self::uasuowkaguiwoouw; goto uwusswwekqcsisus; kssuqmsgmaaeqigw: $iueymcwwscwqkiyq = self::gymusgeumuwomwuy; uwusswwekqcsisus: goto cgwokqwakqcmiieo; case self::uasuowkaguiwoouw: $iueymcwwscwqkiyq = self::uasuowkaguiwoouw; } egwgyekaiqomyeaa: cgwokqwakqcmiieo: acaeigkmigikeuyu: goto mukwsuuuqcgesmwc; kqyeukywmgismyaq: $iueymcwwscwqkiyq = self::uasuowkaguiwoouw; mukwsuuuqcgesmwc: return [self::ciywsqoeiymemsys => $iueymcwwscwqkiyq, self::uiwqcumqkgikqyue => $sogksuscggsicmac[self::uiwqcumqkgikqyue] ?? []]; } }
