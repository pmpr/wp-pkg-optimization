<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f12a869bef5             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\HTML\Minify; use Pmpr\Module\Optimization\Optimizer\Buffer\Engine; abstract class Minifier extends Engine { protected string $name; public function aakmagwggmkoiiyu() : string { return $this->name; } public function kgquecmsgcouyaya() { if (!$this->weysguygiseoukqw(Setting::quekmgksoiyceykk . $this->aakmagwggmkoiiyu())) { goto wycuyiukyceccaow; } $this->miasamwyaiagioug([$this, "\157\153\x75\147\x75\171\141\x63\x67\147\163\141\147\145\x71\161"], 50); wycuyiukyceccaow: $this->aqaqisyssqeomwom("\x6d\151\156\x69\146\171\x5f{$this->aakmagwggmkoiiyu()}", [$this, "\x6f\x6b\x75\147\x75\x79\141\143\x67\147\163\141\x67\x65\x71\x71"]); } public function wamiiiagcwwigucu(?string $ewgwqamkygiqaawc) : ?string { return $ewgwqamkygiqaawc; } public function okuguyacggsageqq($ewgwqamkygiqaawc, ?string $kqywgoqsmuswammk = null) { $mgaesessocgwasym = preg_replace_callback("\57\x28\x3c{$kqywgoqsmuswammk}\x5b\x5c\163\134\123\x5d\52\77\x3e\x29\50\133\134\x73\x5c\123\x5d\52\x3f\x29\x28\x3c\134\x2f{$kqywgoqsmuswammk}\76\x29\57", function ($meyiiwcswqmuggyg) { $iykuucyqscmsqccc = $meyiiwcswqmuggyg[1] ?? ''; $ewgwqamkygiqaawc = $meyiiwcswqmuggyg[2] ?? ''; $muiegiugiocacqkm = $meyiiwcswqmuggyg[3] ?? ''; if ($this->cwaqecwkgaquewqm($ewgwqamkygiqaawc)) { goto meseuuacmkuowqau; } $ewgwqamkygiqaawc = $this->wamiiiagcwwigucu($ewgwqamkygiqaawc); meseuuacmkuowqau: return "{$iykuucyqscmsqccc}{$ewgwqamkygiqaawc}{$muiegiugiocacqkm}"; }, $ewgwqamkygiqaawc); if (!$mgaesessocgwasym) { goto sqmiymiemeegegic; } $ewgwqamkygiqaawc = $mgaesessocgwasym; sqmiymiemeegegic: return $ewgwqamkygiqaawc; } public function cwaqecwkgaquewqm(?string $nsmgceoqaqogqmuw) : bool { return preg_match("\57\x5e\x5b\x5e\134\x6e\x5c\x74\134\x72\x5d\x2b\50\x5c\162\x5c\164\134\x6e\77\174\134\164\134\156\x29\x3f\x24\x2f", $nsmgceoqaqogqmuw); } }
