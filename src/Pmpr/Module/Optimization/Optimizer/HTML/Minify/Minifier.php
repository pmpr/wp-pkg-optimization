<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             672357314a443             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\HTML\Minify; use Pmpr\Module\Optimization\Optimizer\Buffer\Engine; abstract class Minifier extends Engine { protected string $name; public function aakmagwggmkoiiyu() : string { return $this->name; } public function kgquecmsgcouyaya() { if ($this->weysguygiseoukqw(Setting::quekmgksoiyceykk . $this->aakmagwggmkoiiyu())) { $this->miasamwyaiagioug([$this, "\157\153\x75\x67\165\x79\x61\143\x67\147\163\141\x67\x65\x71\x71"], 50); } $this->aqaqisyssqeomwom("\x6d\x69\156\x69\146\171\x5f{$this->aakmagwggmkoiiyu()}", [$this, "\157\x6b\x75\x67\x75\171\141\x63\x67\147\x73\141\x67\145\161\161"]); } public function wamiiiagcwwigucu(?string $ewgwqamkygiqaawc) : ?string { return $ewgwqamkygiqaawc; } public function okuguyacggsageqq($ewgwqamkygiqaawc, ?string $kqywgoqsmuswammk = null) { $mgaesessocgwasym = preg_replace_callback("\57\50\x3c{$kqywgoqsmuswammk}\x5b\134\x73\134\x53\135\x2a\x3f\x3e\x29\x28\x5b\134\163\134\123\135\52\77\x29\x28\74\x5c\x2f{$kqywgoqsmuswammk}\76\x29\x2f", function ($meyiiwcswqmuggyg) { $iykuucyqscmsqccc = $meyiiwcswqmuggyg[1] ?? ''; $ewgwqamkygiqaawc = $meyiiwcswqmuggyg[2] ?? ''; $muiegiugiocacqkm = $meyiiwcswqmuggyg[3] ?? ''; if (!$this->cwaqecwkgaquewqm($ewgwqamkygiqaawc)) { $ewgwqamkygiqaawc = $this->wamiiiagcwwigucu($ewgwqamkygiqaawc); } return "{$iykuucyqscmsqccc}{$ewgwqamkygiqaawc}{$muiegiugiocacqkm}"; }, $ewgwqamkygiqaawc); if ($mgaesessocgwasym) { $ewgwqamkygiqaawc = $mgaesessocgwasym; } return $ewgwqamkygiqaawc; } public function cwaqecwkgaquewqm(?string $nsmgceoqaqogqmuw) : bool { return preg_match("\57\x5e\133\x5e\134\156\x5c\x74\134\x72\x5d\x2b\x28\134\x72\x5c\164\134\x6e\x3f\174\134\x74\x5c\156\51\x3f\x24\57", $nsmgceoqaqogqmuw); } }
