<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             616c0c2e2ea28             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Preloader; use Exception; use Pmpr\Common\Foundation\Manipulate\ManipulateValidation; use Pmpr\Package\Optimization\API\Heroku; use Pmpr\Package\Optimization\Container; use Pmpr\Package\Optimization\Preloader\Traits\LockTrait; class Common extends Container { use LockTrait; const HOOK_PREFIX = self::OPTIMIZATION . "\137\x70\162\145\x6c\x6f\141\144\x65\162"; const OPT_PRELOADER = "\157\160\164\55\160\162\145\x6c\157\141\x64\145\162"; public function gummmsmgckgwkmgw(&$iswcokucwmiosiaq) : bool { goto wgkamcmqescgqcyw; gcgsyyiismkwoyck: $ksaameoqigiaoigg = $this->paoimmauoscygagc($auwuoyyagaiegwae, $iswcokucwmiosiaq); goto aswikmsouwkequca; aswikmsouwkequca: ycyueqmkqyycmaus: goto ycgsmkkioyqqawyk; ycgsmkkioyqqawyk: return $ksaameoqigiaoigg; goto qywueycgouwamkso; soskeqqausokwugo: $iswcokucwmiosiaq = __("\x4e\157\x74\x68\x69\156\147\40\x74\157\40\x70\162\x65\x6c\x6f\141\x64", PR__PKG__OPTIMIZATION); goto ioqmgaeuiicymgky; amkeeqecmwsmwqma: $auwuoyyagaiegwae = $this->sscegwueamckwmcy("\157\x70\164\151\155\151\172\x61\164\151\157\156\x5f\x70\x72\x65\x6c\157\x61\144\x65\162\x5f\x75\162\x6c\163", []); goto vkmscascaoysaqoc; ioqmgaeuiicymgky: $this->oaumimwssciwumys($iswcokucwmiosiaq); goto ywmcuouqguawueqm; vkmscascaoysaqoc: if ($auwuoyyagaiegwae) { goto sguosuigwgwkikgs; } goto soskeqqausokwugo; wgkamcmqescgqcyw: $ksaameoqigiaoigg = false; goto amkeeqecmwsmwqma; ywmcuouqguawueqm: goto ycyueqmkqyycmaus; goto gkoaywyuyqemyiqw; gkoaywyuyqemyiqw: sguosuigwgwkikgs: goto gcgsyyiismkwoyck; qywueycgouwamkso: } public function paoimmauoscygagc($auwuoyyagaiegwae, &$iswcokucwmiosiaq) : bool { goto isqokqgukyemmqcg; uooisauooikkciom: return $ksaameoqigiaoigg; goto ymkoykouaqiusygo; kyiewmuguyyccsca: $this->oaumimwssciwumys($iswcokucwmiosiaq); goto ecimugmwcawqmyaa; gemuuqmegqkkgeua: if ($this->okiggqmmqewscckc()) { goto mumeawggkmqsowae; } goto yeiawaisoceoysau; yeiawaisoceoysau: $iswcokucwmiosiaq .= __("\125\156\x61\142\x6c\x65\40\x74\157\40\163\164\x61\162\164\40\164\150\x65\x20\x70\162\x65\154\157\141\144\x65\x72\56\x20\101\156\157\x74\150\x65\162\x20\160\162\145\x6c\157\141\x64\x69\x6e\147\40\160\x72\x6f\x63\x65\163\x73\x20\x69\x73\40\x63\165\x72\x72\145\156\x74\154\x79\40\x72\x75\156\x6e\151\x6e\147\x2e", PR__PKG__OPTIMIZATION); goto kyiewmuguyyccsca; msieagoikksumcwa: mumeawggkmqsowae: goto ygywowuyoygiiqaq; ecimugmwcawqmyaa: goto kwcyggeukmgacqsy; goto msieagoikksumcwa; imwcikaiagkakiic: kwcyggeukmgacqsy: goto uooisauooikkciom; ygywowuyoygiiqaq: try { goto cywmgwogisiyymoi; okacwwwygceucqsg: foreach ($auwuoyyagaiegwae as $eeamcawaiqocomwy) { goto cuqwswgmwuwmgkwe; cuqwswgmwuwmgkwe: if (!(ManipulateValidation::wmcwegoisyeeosqu($eeamcawaiqocomwy) && !$this->aoaeiwswyagmesku($eeamcawaiqocomwy))) { goto qaykqsyoyscaqsce; } goto twusqqkmqgswisei; ysykemiscamquoce: qaykqsyoyscaqsce: goto oaimckymswkqoysq; oaimckymswkqoysq: uggisigeswwyqmqi: goto mwmwmswiueocaeug; twusqqkmqgswisei: $okeouiicmwuaykky->mykuoqakuiwsoiss(["\x75\162\x6c" => $eeamcawaiqocomwy]); goto ysykemiscamquoce; mwmwmswiueocaeug: } goto igosooeimygcmois; qauuogkoosmuggas: gcgwqksqskumiumq: goto wwcougcmsuqogqyc; omagsowousaeaiou: if ($gaeqamemwmwsyukm > 0) { goto gcgwqksqskumiumq; } goto kcesecosoiwocymi; swkeqqkqioecmgia: $iswcokucwmiosiaq = sprintf("\103\x61\x6e\40\156\x6f\164\40\154\157\147\151\156\x20\x74\x6f\40\141\x70\151\40\x25\x73\56\x20\160\x6c\145\x61\163\x65\x20\164\162\x79\40\141\x67\x61\x69\156", $iswcokucwmiosiaq); goto yomuicigicmugscy; cywmgwogisiyymoi: $auwuoyyagaiegwae = array_slice(array_unique(array_filter($auwuoyyagaiegwae)), 0, 30); goto qkygewgkycsuawgm; qgyeyyagaeyoequw: ukugqakgsqqmgege: goto yoeqaicysswwgkmm; yoeqaicysswwgkmm: $okeouiicmwuaykky->save()->ieyosyaaisyquesq(); goto okaiokeeaqccisaq; yomuicigicmugscy: $this->oaumimwssciwumys($iswcokucwmiosiaq); goto cyssqgqaoaasmogc; igosooeimygcmois: wecgakiimqymkmiy: goto gcykaeaisuqiqyqi; geqwascicmuguaom: goto awcgiyqmoemqumeg; goto qgyeyyagaeyoequw; qgoaooycwyiyycoa: $this->cqscqicucmeamkyq("\x6f\x70\x74\151\155\x69\172\141\164\x69\x6f\x6e\137\x70\162\145\x6c\x6f\141\x64\145\162\137\142\145\x66\x6f\x72\145\137\x73\x74\x61\162\164\x5f\x70\162\157\x63\145\x73\x73", $auwuoyyagaiegwae); goto okacwwwygceucqsg; ckyamgmuoswcaiak: $this->oaumimwssciwumys($iswcokucwmiosiaq); goto umosyyqqcuqiscco; eecyiiwsqomoggmq: emiugswuagoacakq: goto ckaggwgwsyowuuem; qkygewgkycsuawgm: $gaeqamemwmwsyukm = count($auwuoyyagaiegwae); goto omagsowousaeaiou; mcguyegywqyasmii: $okeouiicmwuaykky = Process::symcgieuakksimmu(); goto qgoaooycwyiyycoa; wwcougcmsuqogqyc: $this->wykquskmqomwiqow($gaeqamemwmwsyukm); goto mcguyegywqyasmii; kcesecosoiwocymi: $iswcokucwmiosiaq .= __("\x55\x6e\x61\x62\154\x65\x20\x74\x6f\x20\163\x74\141\x72\x74\40\164\150\145\x20\160\162\145\x6c\157\141\144\x65\x72\x2e\x20\x75\x72\x6c\x73\40\x69\163\40\x65\x6d\x70\x74\171\x2e", PR__PKG__OPTIMIZATION); goto ckyamgmuoswcaiak; okaiokeeaqccisaq: $ksaameoqigiaoigg = true; goto ugseakwywkuwgyug; umosyyqqcuqiscco: goto emiugswuagoacakq; goto qauuogkoosmuggas; cyssqgqaoaasmogc: $this->guqoesymgcccskyy(); goto geqwascicmuguaom; gcykaeaisuqiqyqi: if (Heroku::symcgieuakksimmu()->kkmkcysyceyiwskq($iswcokucwmiosiaq)) { goto ukugqakgsqqmgege; } goto swkeqqkqioecmgia; ugseakwywkuwgyug: awcgiyqmoemqumeg: goto eecyiiwsqomoggmq; ckaggwgwsyowuuem: } catch (Exception $wgaoewqkwgomoaai) { $this->guqoesymgcccskyy(); $iswcokucwmiosiaq .= $this->kyacickkomkioeyu($wgaoewqkwgomoaai); } goto imwcikaiagkakiic; isqokqgukyemmqcg: $ksaameoqigiaoigg = false; goto gemuuqmegqkkgeua; ymkoykouaqiusygo: } }
