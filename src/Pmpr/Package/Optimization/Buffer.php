<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6226653654432             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization; use Exception; use Pmpr\Common\Foundation\Interfaces\ConstantInterface; use Pmpr\Common\Foundation\Traits\ComponentTrait; use Pmpr\Common\Foundation\Traits\HookTrait; use Pmpr\Package\Optimization\Buffer\Buffer as BaseClass; class Buffer extends BaseClass implements ConstantInterface { use HookTrait, ComponentTrait; protected ?string $id = "\x6f\160\x74\151\155\x69\172\141\164\x69\157\x6e\137\x70\x72\157\143\145\x73\x73"; public function qqcykaeioiwwaqos() { if (!$this->wmgoigiyyeauqwaq()->gequwwueqseakeoq()) { goto aqeyqwuywqcmuoce; } ob_start([$this, "\x6f\x71\x63\161\x6b\x6f\x71\x77\143\165\x6f\161\165\163\153\x75"]); aqeyqwuywqcmuoce: } public function oqcqkoqwcuoqusku(string $moooemyaqewumiay) : string { $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\160\x74\137\x62\165\x66\146\145\162\x5f\x62\145\x66\x6f\x72\x65\137\x6d\141\x79\x62\145\x5f\x70\x72\x6f\x63\x65\163\163"), $moooemyaqewumiay); if (!$this->uuksaskqamgouosy($moooemyaqewumiay)) { goto akoweomooyuwamow; } if ($this->wmgoigiyyeauqwaq()->ccmucyumocoyusaa($moooemyaqewumiay)) { goto aymoguycgmuggcik; } $moooemyaqewumiay = (string) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\160\x74\x5f\x62\165\146\146\145\162\137\x6e\x6f\164\x5f\x70\x72\157\x63\145\x73\x73\x65\x64"), $moooemyaqewumiay); goto qayiqaykkywcyisq; aymoguycgmuggcik: $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\x70\164\x5f\142\x75\x66\146\x65\162\137\142\x65\146\x6f\162\x65\137\x70\x72\x6f\x63\x65\163\163"), $moooemyaqewumiay); $this->log("\157\160\x74\151\155\151\172\x61\x74\x69\157\156\40\x62\x75\146\146\145\162\40\160\162\x6f\x63\x65\x73\x73\x20\x73\x74\x61\162\x74\x2e"); try { $moooemyaqewumiay = (string) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\x70\x74\x5f\142\x75\146\x66\145\x72\137\160\162\157\x63\145\163\x73"), $moooemyaqewumiay); } catch (Exception $wgaoewqkwgomoaai) { $uamcoiueqaamsqma = $wgaoewqkwgomoaai->getMessage(); $this->log("\x65\x72\x72\157\162\x20\x6f\156\40\x62\x75\x66\x66\x65\162\40\x6f\160\x74\151\155\x69\172\x61\164\x69\x6f\156\x3a\x20{$uamcoiueqaamsqma}"); } qayiqaykkywcyisq: $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\160\x74\137\x62\x75\146\x66\145\162\137\x61\x66\x74\145\x72\x5f\x70\162\157\143\145\163\163"), $moooemyaqewumiay); $moooemyaqewumiay = $this->kcikawaummeuyeoq($moooemyaqewumiay); akoweomooyuwamow: return $moooemyaqewumiay; } public function kcikawaummeuyeoq($moooemyaqewumiay) { $moooemyaqewumiay = html_entity_decode($moooemyaqewumiay); if (!preg_match_all("\x2f\x68\162\x65\146\134\x73\52\x3d\134\x73\x2a\x28\77\72\x5b\x22\47\x5d\x28\x5b\x5e\42\47\x5d\x2a\51\x5b\x22\x27\x5d\x7c\50\134\123\53\x29\x29\x2f", $moooemyaqewumiay, $meyiiwcswqmuggyg)) { goto gcecamucuogcciig; } foreach ($meyiiwcswqmuggyg[1] as $geecqyososceumsk) { $moooemyaqewumiay = str_replace($geecqyososceumsk, urldecode($geecqyososceumsk), $moooemyaqewumiay); cueuscqkicwwicei: } oaociaioauummsey: gcecamucuogcciig: return $moooemyaqewumiay; } }
