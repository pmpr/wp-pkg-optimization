<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             616c16f754a56             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Origin\Cache; use Exception; use FilesystemIterator; use IteratorIterator; use Pmpr\Common\Foundation\Filesystem; use Pmpr\Package\Optimization\Manipulate\ManipulateFile; use Pmpr\Package\Optimization\Manipulate\Manipulate as BaseClass; use RegexIterator; class Manipulate extends BaseClass { public static function gskqygiceygcguyo() { goto rayeowssukccumsa; kmgimueiaqoamoiq: kwocuyyugaqsicqy: goto uyesmwqkkaeqyqsw; rayeowssukccumsa: $mkomwsiykqigmqca = self::cmaecekuqkwmemms("\x4f\120\124\111\115\111\x5a\101\124\111\117\116\x5f\x43\101\103\110\105\x5f\x50\101\124\110", false); goto aumiwewkmkcyqsic; ukwaqucywiqsqcmw: if ($iiaumsgauuyeqksw->exists($mkomwsiykqigmqca)) { goto kwocuyyugaqsicqy; } goto waqwicwqkgsgaosm; waqwicwqkgsgaosm: $iiaumsgauuyeqksw->mkdir($mkomwsiykqigmqca); goto kmgimueiaqoamoiq; woimcikoqmikiiuo: return $mkomwsiykqigmqca; goto yygiyieeyuuqucke; wmgmwseuygieasiq: ckcsasciyamuyeak: goto woimcikoqmikiiuo; uyesmwqkkaeqyqsw: if (!is_string($mkomwsiykqigmqca)) { goto ckcsasciyamuyeak; } goto meacamomoigoocks; meacamomoigoocks: $mkomwsiykqigmqca = untrailingslashit($mkomwsiykqigmqca); goto wmgmwseuygieasiq; aumiwewkmkcyqsic: $iiaumsgauuyeqksw = Filesystem::symcgieuakksimmu(); goto ukwaqucywiqsqcmw; yygiyieeyuuqucke: } public static function ymqgwsmwqswgsgeg() { goto osuwwuwykkyioics; emwgmewoyckawiaa: if (!$is_apache) { goto wycaemkqgqoqamga; } goto ouiwcwgymiycmesy; iksqmycekaokseuk: $iiaumsgauuyeqksw->touch("{$skacuygeqykiwiwy}\57\x69\x6e\144\x65\170\x2e\150\164\155\x6c"); goto yoikmmqgsuecwqse; ymaiyayeueqekkqu: ksaoceiosgkgkeua: goto yumwmakewcuceeeq; kycuyyawyykwayum: if ($iiaumsgauuyeqksw->asysewkmisimumay($skacuygeqykiwiwy)) { goto ksaoceiosgkgkeua; } goto qayscesoyiskoeko; yamoqmeywqamiyee: if ($iiaumsgauuyeqksw->mecmkmogggamegic($kkeqqamysgasaeyi)) { goto ieaumiwogamciyeq; } goto eisoouawyymkasou; quycsusswssyiqek: wycaemkqgqoqamga: goto cmogamoiwugoaaoo; gsscqquysycuswow: $iiaumsgauuyeqksw->ockyokocuwwmkesa($kkeqqamysgasaeyi, "\74\111\146\115\157\144\165\154\x65\40\155\157\x64\137\x61\165\x74\x6f\151\156\144\145\x78\x2e\x63\76\12\117\160\164\x69\x6f\156\x73\40\55\x49\156\144\x65\x78\145\163\xa\74\57\x49\146\x4d\x6f\144\165\154\145\76"); goto uwcgosckamuosimw; aimoueqqomiogmwe: $skacuygeqykiwiwy = self::gskqygiceygcguyo(); goto osgggiswqmmcauic; yoikmmqgsuecwqse: wesmogqcyeemwqaq: goto emwgmewoyckawiaa; eisoouawyymkasou: $iiaumsgauuyeqksw->touch($kkeqqamysgasaeyi); goto gsscqquysycuswow; yumwmakewcuceeeq: if ($iiaumsgauuyeqksw->mecmkmogggamegic("{$skacuygeqykiwiwy}\57\151\x6e\144\x65\x78\x2e\x68\164\155\154")) { goto wesmogqcyeemwqaq; } goto iksqmycekaokseuk; ouiwcwgymiycmesy: $kkeqqamysgasaeyi = "{$skacuygeqykiwiwy}\x2f\56\150\164\141\143\143\x65\163\x73"; goto yamoqmeywqamiyee; uwcgosckamuosimw: ieaumiwogamciyeq: goto quycsusswssyiqek; osgggiswqmmcauic: $iiaumsgauuyeqksw = Filesystem::symcgieuakksimmu(); goto kycuyyawyykwayum; osuwwuwykkyioics: global $is_apache; goto aimoueqqomiogmwe; qayscesoyiskoeko: $iiaumsgauuyeqksw->mkdir($skacuygeqykiwiwy); goto ymaiyayeueqekkqu; cmogamoiwugoaaoo: } public static function gqguucgwsqasamke(string $ykgaiqusyiekqqec, $skacuygeqykiwiwy = '', $iuomscuiswckwcoe = false) { goto swuwwcumqwckimwy; uyqsoayeaaumkace: $skacuygeqykiwiwy = self::gskqygiceygcguyo(); goto ooayswecmkkqgskg; mckkqgseimcgkcgu: return $eewgemuwouukmwgk[$ykgaiqusyiekqqec]; goto syqysaawasmesiqs; kskqckgmygiwqucm: foreach ($owouacqkcukeeomw as $uwsgakoiqomwikmy) { $eewgemuwouukmwgk[$ykgaiqusyiekqqec][] = $uwsgakoiqomwikmy->scikcaaaiwcsqowm(); uyaweoaaqsagsqyi: } goto sucgyiymguwououy; sucgyiymguwououy: scioecswaikeacmy: goto kcqewweqqqmekuwi; syqysaawasmesiqs: iayqwwsmsuwaykyw: goto yeiwocswikqkwyew; swuwwcumqwckimwy: static $eewgemuwouukmwgk = []; goto qsqwywcesyquykqq; yeiwocswikqkwyew: if (!empty($skacuygeqykiwiwy)) { goto gaqweioagqyciyaw; } goto uyqsoayeaaumkace; uqamuckwuksquqia: ycuksimueyoeugmi: goto gukawqgamokyceki; keaaqaugoyquwsos: try { $owouacqkcukeeomw = new RegexIterator($mcowwqgmkuemoumu, $ucccueqywigcukcc); } catch (Exception $iewosgggaueeyymg) { return []; } goto ieacisiumswqewsq; cskesgswygwiqoim: try { $mcowwqgmkuemoumu = new IteratorIterator(new FilesystemIterator($skacuygeqykiwiwy)); } catch (Exception $iewosgggaueeyymg) { return []; } goto guyeaeiscmgksacs; ooayswecmkkqgskg: gaqweioagqyciyaw: goto cskesgswygwiqoim; ieacisiumswqewsq: $eewgemuwouukmwgk[$ykgaiqusyiekqqec] = []; goto kskqckgmygiwqucm; kcqewweqqqmekuwi: return $eewgemuwouukmwgk[$ykgaiqusyiekqqec]; goto qkueegaowuyiimgw; kqscgsuaugsiwiwi: $eewgemuwouukmwgk = []; goto gmskkukiiwweocwi; qsqwywcesyquykqq: if (!(true === $iuomscuiswckwcoe)) { goto ycuksimueyoeugmi; } goto kqscgsuaugsiwiwi; gukawqgamokyceki: if (!isset($eewgemuwouukmwgk[$ykgaiqusyiekqqec])) { goto iayqwwsmsuwaykyw; } goto mckkqgseimcgkcgu; gmskkukiiwweocwi: return []; goto uqamuckwuksquqia; guyeaeiscmgksacs: $ucccueqywigcukcc = sprintf("\x2f\x25\x31\x24\163\x25\62\44\163\x28\56\x2a\x29\57\x69", ManipulateFile::cgwcgscqeqauaagi($skacuygeqykiwiwy, true), $ykgaiqusyiekqqec); goto keaaqaugoyquwsos; qkueegaowuyiimgw: } }
