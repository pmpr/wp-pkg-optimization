<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ce6347bb78c             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\API; use Pmpr\Common\Foundation\API\Cartridge; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Optimization; class Remote extends Cartridge { const ikmkgmwegyasgqmo = Optimization::kgswyesggeyekgmg . "\162\145\155\157\x74\145\x5f\x61\160\160\x73"; protected string $type = ''; public function __construct() { $usmiuwiumyygmucg = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get(self::ikmkgmwegyasgqmo, []); if (!$usmiuwiumyygmucg) { goto qwigomakwmyiwkgo; } $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); foreach ($usmiuwiumyygmucg as $qcaiykuysiowsimu) { if (!$cwaqscoiqkokyase->wmcwegoisyeeosqu($qcaiykuysiowsimu)) { goto qgoiooayqmqqsiok; } $this->iggeecowsiwyaooe($qcaiykuysiowsimu); qgoiooayqmqqsiok: qogqewiwmwiwskgm: } qiaqsassksqiuyae: $this->kiaqywwoysssqgig("\x43\x6f\157\153\x69\145", "\160\x6d\160\x72\x2d\x63\154\151\145\x6e\164\x3d\164\162\165\x65"); parent::__construct(); qwigomakwmyiwkgo: } public function gueasuouwqysmomu() : string { return $this->type; } public function uiqqikcuycqyeooa(?string $aokagokqyuysuksm) : array { $sogksuscggsicmac = $this->eqkieiagqmugguew("\x2f{$this->gueasuouwqysmomu()}\x2f\x63\150\145\143\x6b\55\x6a\x6f\x62", [self::kugiewcgiawaeiaq => [Constants::gouqcwikiiygyasc => $aokagokqyuysuksm]], Constants::mswoacegomcucaik); $iueymcwwscwqkiyq = Constants::kywgiyyageyqwuuc; if (is_wp_error($sogksuscggsicmac)) { goto sciwggaeogcoesiu; } if ($sogksuscggsicmac && isset($sogksuscggsicmac[Constants::eikgweiqgomeisyo])) { goto kuicqywysciceggs; } $iueymcwwscwqkiyq = Constants::uasuowkaguiwoouw; goto mkwskuycuyguqqok; kuicqywysciceggs: switch ($sogksuscggsicmac[Constants::eikgweiqgomeisyo]) { case Constants::amcogigwsaqssuai: if (isset($sogksuscggsicmac[Constants::ckcawaoawwioqecq]) && $sogksuscggsicmac[Constants::ckcawaoawwioqecq]) { goto csscmcacoikwsecs; } $iueymcwwscwqkiyq = Constants::uasuowkaguiwoouw; goto cuykwgmswkskqkyi; csscmcacoikwsecs: $iueymcwwscwqkiyq = Constants::gymusgeumuwomwuy; cuykwgmswkskqkyi: goto myoicgcuugciueis; case Constants::uasuowkaguiwoouw: $iueymcwwscwqkiyq = Constants::uasuowkaguiwoouw; } asmecuqiyyswueqe: myoicgcuugciueis: mkwskuycuyguqqok: goto eqkauqciwewmgeoi; sciwggaeogcoesiu: $iueymcwwscwqkiyq = Constants::uasuowkaguiwoouw; eqkauqciwewmgeoi: return [Constants::ciywsqoeiymemsys => $iueymcwwscwqkiyq, Constants::uiwqcumqkgikqyue => $sogksuscggsicmac[Constants::uiwqcumqkgikqyue] ?? []]; } }
