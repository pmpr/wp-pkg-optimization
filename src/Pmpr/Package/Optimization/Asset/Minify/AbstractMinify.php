<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c066895a7f9             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Asset\Minify; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class AbstractMinify extends Common { public function wamiiiagcwwigucu(?string $ewgwqamkygiqaawc) : ?string { return $ewgwqamkygiqaawc; } public function okuguyacggsageqq($ewgwqamkygiqaawc, ?string $kqywgoqsmuswammk = null) { $mgaesessocgwasym = preg_replace_callback("\x2f\x28\x3c{$kqywgoqsmuswammk}\x5b\x5c\163\x5c\123\x5d\x2a\x3f\76\51\50\x5b\x5c\163\x5c\x53\x5d\52\77\51\x28\74\134\x2f{$kqywgoqsmuswammk}\76\x29\x2f", function ($meyiiwcswqmuggyg) { $iykuucyqscmsqccc = ManipulateArray::get($meyiiwcswqmuggyg, 1); $ewgwqamkygiqaawc = ManipulateArray::get($meyiiwcswqmuggyg, 2); $muiegiugiocacqkm = ManipulateArray::get($meyiiwcswqmuggyg, 3); if ($this->cwaqecwkgaquewqm($ewgwqamkygiqaawc)) { goto yqkyoaiwcyqeaqwu; } $ewgwqamkygiqaawc = $this->wamiiiagcwwigucu($ewgwqamkygiqaawc); yqkyoaiwcyqeaqwu: return "{$iykuucyqscmsqccc}{$ewgwqamkygiqaawc}{$muiegiugiocacqkm}"; }, $ewgwqamkygiqaawc); if (!$mgaesessocgwasym) { goto yuyiqaawwgaywgqo; } $ewgwqamkygiqaawc = $mgaesessocgwasym; yuyiqaawwgaywgqo: return $ewgwqamkygiqaawc; } public function cwaqecwkgaquewqm(?string $nsmgceoqaqogqmuw) : bool { return preg_match("\x2f\136\x5b\x5e\134\156\134\x74\x5c\162\135\53\x28\134\162\134\164\134\x6e\77\x7c\134\x74\134\156\x29\x3f\44\57", $nsmgceoqaqogqmuw); } }
