<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6758115135c8b             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\HTML\Minify; use Pmpr\Module\Optimization\Optimizer\Buffer\Engine; abstract class Minifier extends Engine { protected string $name; public function aakmagwggmkoiiyu() : string { return $this->name; } public function kgquecmsgcouyaya() { if ($this->weysguygiseoukqw(Setting::quekmgksoiyceykk . $this->aakmagwggmkoiiyu())) { $this->miasamwyaiagioug([$this, "\157\x6b\165\x67\x75\171\141\143\147\147\x73\141\x67\x65\161\x71"], 50); } $this->aqaqisyssqeomwom("\x6d\151\x6e\151\146\x79\137{$this->aakmagwggmkoiiyu()}", [$this, "\x6f\153\165\147\165\171\x61\x63\147\147\x73\x61\147\x65\161\x71"]); } public function wamiiiagcwwigucu(?string $ewgwqamkygiqaawc) : ?string { return $ewgwqamkygiqaawc; } public function okuguyacggsageqq($ewgwqamkygiqaawc, ?string $kqywgoqsmuswammk = null) { $mgaesessocgwasym = preg_replace_callback("\x2f\50\74{$kqywgoqsmuswammk}\133\x5c\163\x5c\x53\x5d\x2a\77\76\x29\50\x5b\x5c\x73\134\x53\135\52\x3f\x29\x28\74\134\x2f{$kqywgoqsmuswammk}\76\51\x2f", function ($meyiiwcswqmuggyg) { $iykuucyqscmsqccc = $meyiiwcswqmuggyg[1] ?? ''; $ewgwqamkygiqaawc = $meyiiwcswqmuggyg[2] ?? ''; $muiegiugiocacqkm = $meyiiwcswqmuggyg[3] ?? ''; if (!$this->cwaqecwkgaquewqm($ewgwqamkygiqaawc)) { $ewgwqamkygiqaawc = $this->wamiiiagcwwigucu($ewgwqamkygiqaawc); } return "{$iykuucyqscmsqccc}{$ewgwqamkygiqaawc}{$muiegiugiocacqkm}"; }, $ewgwqamkygiqaawc); if ($mgaesessocgwasym) { $ewgwqamkygiqaawc = $mgaesessocgwasym; } return $ewgwqamkygiqaawc; } public function cwaqecwkgaquewqm(?string $nsmgceoqaqogqmuw) : bool { return preg_match("\x2f\x5e\x5b\x5e\x5c\156\x5c\164\x5c\x72\x5d\53\50\134\x72\134\164\x5c\x6e\x3f\x7c\134\164\x5c\x6e\51\77\44\57", $nsmgceoqaqogqmuw); } }
