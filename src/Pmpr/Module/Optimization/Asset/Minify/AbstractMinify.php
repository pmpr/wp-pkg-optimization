<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63ffbdfd59a7a             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Asset\Minify; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class AbstractMinify extends Common { public function wamiiiagcwwigucu(?string $ewgwqamkygiqaawc) : ?string { return $ewgwqamkygiqaawc; } public function okuguyacggsageqq($ewgwqamkygiqaawc, ?string $kqywgoqsmuswammk = null) { $mgaesessocgwasym = preg_replace_callback("\57\x28\x3c{$kqywgoqsmuswammk}\133\x5c\x73\134\x53\135\x2a\77\x3e\51\x28\x5b\134\x73\134\x53\x5d\x2a\x3f\x29\x28\74\x5c\57{$kqywgoqsmuswammk}\x3e\51\57", function ($meyiiwcswqmuggyg) { $iykuucyqscmsqccc = ManipulateArray::get($meyiiwcswqmuggyg, 1); $ewgwqamkygiqaawc = ManipulateArray::get($meyiiwcswqmuggyg, 2); $muiegiugiocacqkm = ManipulateArray::get($meyiiwcswqmuggyg, 3); if ($this->cwaqecwkgaquewqm($ewgwqamkygiqaawc)) { goto yqicwmekwuoywyus; } $ewgwqamkygiqaawc = $this->wamiiiagcwwigucu($ewgwqamkygiqaawc); yqicwmekwuoywyus: return "{$iykuucyqscmsqccc}{$ewgwqamkygiqaawc}{$muiegiugiocacqkm}"; }, $ewgwqamkygiqaawc); if (!$mgaesessocgwasym) { goto gkoaeuekqockuoiq; } $ewgwqamkygiqaawc = $mgaesessocgwasym; gkoaeuekqockuoiq: return $ewgwqamkygiqaawc; } public function cwaqecwkgaquewqm(?string $nsmgceoqaqogqmuw) : bool { return preg_match("\x2f\x5e\x5b\136\x5c\156\134\x74\x5c\162\135\53\x28\x5c\x72\134\x74\x5c\156\77\x7c\x5c\x74\x5c\156\x29\x3f\44\57", $nsmgceoqaqogqmuw); } }
