<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62c85c689cc91             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Page\Modal\Segment; use Pmpr\Common\Foundation\FormMaker\Admin\Element\Modal\Segment as BaseClass; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePage; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use Pmpr\Module\Optimization\Manipulate\Manipulate; use Pmpr\Module\Optimization\Page\Interfaces\CommonInterface; use Pmpr\Module\Optimization\Page\Model as PageModel; use Pmpr\Module\Optimization\Traits\CommonTrait; use WP_Post_Type; class Segment extends BaseClass implements CommonInterface { use CommonTrait; protected function wqwkuqceaqeiquqm() : string { return ManipulateHTML::iaaacsuskiakkwui(ManipulateHTML::yuawgssgauywkiia(__("\120\141\147\x65\x73\40\x50\162\145\x76\x69\x65\x77", PR__MDL__OPTIMIZATION), "\43", ["\x69\144" => "\x72\x75\x6c\x65\137\x70\x61\147\x65\x5f\160\162\x65\x76\x69\145\167", "\143\x6c\x61\163\x73" => "\142\164\x6e\x20\142\x74\x6e\x2d\157\165\164\x6c\x69\156\x65\55\160\162\151\x6d\141\x72\x79\x20\x72\x75\154\145\163\x2d\160\141\x67\x65\163\55\x70\162\145\166\x69\x65\167"]), ["\143\x6c\141\x73\163" => "\160\x72\55\x61\143\x74\151\x6f\156"]); } public function ggaacuwaaaqksyoa() : array { $uymyaeeowcuoksgm = 0; $gyiuucqgwckqiiqe = Manipulate::maykkqauyaoqmqeu(self::ckmqoekmugkggeym); foreach ($gyiuucqgwckqiiqe as $ymqmyyeuycgmigyo => $sqeykgyoooqysmca) { if (!$sqeykgyoooqysmca instanceof WP_Post_Type) { goto acisycocoswkekik; } $gaeqamemwmwsyukm = ManipulatePost::wsqeykgqiemswysa($ymqmyyeuycgmigyo); $uymyaeeowcuoksgm += $gaeqamemwmwsyukm; $ygqyiqguoomyooyq = ManipulatePage::eokiwumgqmymgyoa(); if (!($ymqmyyeuycgmigyo !== self::imywcsggckkcywgk || (!$ygqyiqguoomyooyq || $ymqmyyeuycgmigyo !== self::mswoacegomcucaik))) { goto cqaeiesyciakcagu; } if (!ManipulatePost::qeosassuekcieuuy($sqeykgyoooqysmca)) { goto gemwkqocygssmequ; } $uymyaeeowcuoksgm++; gemwkqocygssmequ: cqaeiesyciakcagu: acisycocoswkekik: egmocemomockemia: } wwwggoemicgwwasy: $oammesyieqmwuwyi = ["\141\154\154" => [self::ciyoccqkiamemcmm => $uymyaeeowcuoksgm, self::qescuiwgsyuikume => __("\123\151\164\145\40\x50\x61\x67\145\163", PR__MDL__OPTIMIZATION), self::qgqyauaqwqmqseim => IconFontawesomeInterface::kekeuuqqukocoyes, self::eqkeooqcsscoggia => __("\x41\x6c\154\40\x79\157\165\162\40\163\x69\164\145\x20\160\x61\147\x65\163\54\40\151\156\143\x6c\x75\x64\x69\x6e\147\x20\163\151\156\147\154\x65\x20\x6f\x66\x20\160\x6f\x73\164\40\x74\x79\x70\145\x73\x2c\40\x74\x65\162\x6d\163\x20\x61\156\144\x20\x70\165\x62\x69\x63\x20\x61\x72\143\150\151\x76\145\x20\160\x61\x67\145\163", PR__MDL__OPTIMIZATION)], "\x62\x75\144\147\x65\x74" => [self::ciyoccqkiamemcmm => $this->eiykqgmgyuowgeog(), self::qescuiwgsyuikume => __("\131\157\x75\162\40\102\x75\144\147\145\x74", PR__MDL__OPTIMIZATION), self::qgqyauaqwqmqseim => IconFontawesomeInterface::kekeuuqqukocoyes, self::eqkeooqcsscoggia => __("\x41\x6c\154\x20\x62\x75\x64\x67\145\164\40\160\165\162\143\x68\x61\163\145\144\x20\x62\171\40\171\157\x75", PR__MDL__OPTIMIZATION)]]; if (!($iuekmkswcsacoawq = PageModel::symcgieuakksimmu())) { goto aaiymmkqmocgakei; } $oammesyieqmwuwyi["\x75\163\x65\x64"] = [self::ciyoccqkiamemcmm => $iuekmkswcsacoawq->ggcikeumgqoockyo(), self::qescuiwgsyuikume => __("\125\163\x65\x64\40\x42\x75\144\147\145\x74", PR__MDL__OPTIMIZATION), self::qgqyauaqwqmqseim => IconFontawesomeInterface::kekeuuqqukocoyes, self::eqkeooqcsscoggia => __("\103\x6f\x75\x6e\x74\40\x6f\146\x20\x62\165\x64\147\x65\x74\163\x20\171\157\x75\x20\x75\x73\x65\x64", PR__MDL__OPTIMIZATION)]; $oammesyieqmwuwyi["\162\145\x6d\141\151\x6e"] = [self::ciyoccqkiamemcmm => $iuekmkswcsacoawq->ewcikckouwmuqkms(), self::qescuiwgsyuikume => __("\x52\145\155\x61\151\x6e\x69\156\147\40\102\x75\x64\x67\x65\164", PR__MDL__OPTIMIZATION), self::qgqyauaqwqmqseim => IconFontawesomeInterface::kekeuuqqukocoyes, self::eqkeooqcsscoggia => __("\103\x6f\x75\156\x74\x20\x6f\x66\40\x62\x75\x64\x67\x65\x74\163\40\x79\x6f\x75\40\143\141\x6e\40\x75\163\x65", PR__MDL__OPTIMIZATION)]; aaiymmkqmocgakei: return (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\x70\x74\x5f\163\x74\x61\x74\x69\163\164\151\x63\x5f\x69\164\x65\x6d\163"), $oammesyieqmwuwyi); } protected function iiomagmskwiawgyo(bool $ssimsmwwkqmmgqeg = false, int $eogccskwymysesoe = 3, int $smiiwkmmoscuieqo = 6) : ?string { return $this->iuygowkemiiwqmiw("\163\164\141\164\x69\163\164\x69\143", ["\x69\x73\137\155\x61\151\156" => $ssimsmwwkqmmgqeg, "\163\x68\x6f\167\x5f\x64\145\163\143" => $eogccskwymysesoe >= 6, self::qwumqqyuasyskkkc => $this->ggaacuwaaaqksyoa(), self::soquiwyuimckgiow => ['' => 12, self::esgegasyoiyogwqc => $smiiwkmmoscuieqo, self::myiysugguwsqoaqc => $eogccskwymysesoe]]); } }
