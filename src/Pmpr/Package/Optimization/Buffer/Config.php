<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             616c0c2e2ea28             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Buffer; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Package\Optimization\Traits\MemoizeTrait; class Config { use MemoizeTrait; protected ?string $path = null; protected ?array $server = []; public function __construct($ywmkwiwkosakssii = []) { goto ccscooiuewmaegyi; eciiyuwciimgmakq: mcggquasyuiygwui: goto qqyeekywsyguucio; iucowqewyoaomsuk: $this->path = trailingslashit($ywmkwiwkosakssii["\x70\141\164\150"]); goto wecycieacweseosm; mugcwkmqsweggcic: $this->server = $ywmkwiwkosakssii["\x73\145\x72\166\x65\x72"]; goto eciiyuwciimgmakq; qqyeekywsyguucio: ugemeyesygqiskic: goto wiiioykewquawmsu; wecycieacweseosm: if (!(is_array($ywmkwiwkosakssii["\x73\x65\x72\166\x65\x72"]) && $ywmkwiwkosakssii["\163\x65\x72\166\x65\x72"])) { goto mcggquasyuiygwui; } goto mugcwkmqsweggcic; ksomcksouggwacay: $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\160\x61\164\x68" => '', "\163\145\x72\x76\x65\162" => $_SERVER]); goto iucowqewyoaomsuk; ccscooiuewmaegyi: if ($this->amqagusacuuuaswg()) { goto ugemeyesygqiskic; } goto ksomcksouggwacay; wiiioykewquawmsu: } public function amqagusacuuuaswg() : ?string { return $this->path; } public function giiecckwoyiawoyy() : ?array { return $this->server; } public function iuocyymeygwuweag($ymqmyyeuycgmigyo, $ggauoeuaesiymgee = null) { goto cyeycessoayeoism; aeogsokusmsqcuaa: if (!isset($ueiegogoeyqoiewa[$ymqmyyeuycgmigyo])) { goto mqmooaikaumwewew; } goto aocuemmuaaiiuiee; cyeycessoayeoism: $ueiegogoeyqoiewa = $this->giiecckwoyiawoyy(); goto emuqseyswwammumy; emuqseyswwammumy: $aqykuigiuwmmcieu = $ggauoeuaesiymgee; goto aeogsokusmsqcuaa; ugaaqomusosqmquw: mqmooaikaumwewew: goto auaioqeaqmeueemi; auaioqeaqmeueemi: return $aqykuigiuwmmcieu; goto kkcouemcsagaqiae; aocuemmuaaiiuiee: $aqykuigiuwmmcieu = $ueiegogoeyqoiewa[$ymqmyyeuycgmigyo]; goto ugaaqomusosqmquw; kkcouemcsagaqiae: } public function get($ymqmyyeuycgmigyo) { goto oyisyigysqeuakcg; oyisyigysqeuakcg: $uiewakwqscemywuo = false; goto awsyksgaekayaigu; msiikeiasyeoaoog: return $uiewakwqscemywuo; goto wcqgkyswqqcmkciw; awsyksgaekayaigu: $oyuikeusicgqgwak = $this->tkgawykgecmsaeis(); goto kkowgwygiekucwym; kkowgwygiekucwym: if (!isset($oyuikeusicgqgwak[$ymqmyyeuycgmigyo])) { goto oywwcacmgwecmmum; } goto wsoueqmwyyemuyye; geecsuskoecwouea: oywwcacmgwecmmum: goto msiikeiasyeoaoog; wsoueqmwyyemuyye: $uiewakwqscemywuo = $oyuikeusicgqgwak[$ymqmyyeuycgmigyo]; goto geecsuskoecwouea; wcqgkyswqqcmkciw: } public function tkgawykgecmsaeis() { goto ywiauwqgumuuuuey; scwiacyickugosom: yokseegosimogkwk: goto eiysgoqwsaegmqim; eygoeceyyscgauce: $oqwuasygwcckkios = $this->wcsoyaccaqessckk(); goto ousuugweskuyuccq; kueeuuagoswgkmck: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $uiewakwqscemywuo); goto yyqyuoqqyisuwuks; eiysgoqwsaegmqim: if (!file_exists($oqwuasygwcckkios["\160\x61\x74\x68"])) { goto yickykwwmiegccym; } goto kkuaccyigssoywao; qomaaqwmkkusiquy: foreach ($uiewakwqscemywuo as $ymqmyyeuycgmigyo => $eqgoocgaqwqcimie) { goto yciwikoukymqiuim; iuqqsyuuwaygsmak: $uiewakwqscemywuo[$ymqmyyeuycgmigyo] = ${$ymqmyyeuycgmigyo}; goto koosywukiiocsmmc; koosywukiiocsmmc: aossisycmuemokks: goto ioegkeouusgkmaqi; yciwikoukymqiuim: if (!(isset(${$ymqmyyeuycgmigyo}) && ${$ymqmyyeuycgmigyo})) { goto aossisycmuemokks; } goto iuqqsyuuwaygsmak; ioegkeouusgkmaqi: cakikewkyyiogyak: goto iweokokocwugywsk; iweokokocwugywsk: } goto isguecsoekyicicy; aikyqicagksmuuwm: iaykekkguwmqckom: goto eygoeceyyscgauce; kkuaccyigssoywao: include $oqwuasygwcckkios["\160\141\x74\x68"]; goto yeeuymikamycumyc; isguecsoekyicicy: mcymcuuwcmssycwi: goto kueeuuagoswgkmck; ecmmowyyaeoocsyc: $uiewakwqscemywuo = ["\144\x65\x62\x75\x67\137\x6d\x6f\x64\145" => 0, "\143\x61\x63\x68\145\137\167\145\142\x70" => 0, "\x63\x6f\157\153\x69\145\137\x68\141\x73\x68" => '', "\x63\x61\143\150\145\x5f\145\x6e\x61\x62\154\145" => 1, "\151\x67\156\157\x72\x65\144\137\x75\162\x6c\x73" => [], "\162\x65\152\x65\143\164\137\143\157\157\x6b\151\x65\x73" => '', "\x73\145\x63\x72\x65\x74\137\143\141\x63\x68\145\x5f\x6b\x65\171" => '', "\154\x6f\147\147\x65\x64\x5f\151\x6e\x5f\x63\x6f\157\x6b\x69\145" => '', "\143\x6f\155\155\x6f\x6e\137\143\141\143\x68\145\137\x6c\x6f\147\x67\145\x64\x5f\165\x73\x65\162\163" => 0]; goto qomaaqwmkkusiquy; mwecckoekskqkugm: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); goto scwiacyickugosom; skuioqyugmyaiyys: return $this->eecucukcqkqysiau(__FUNCTION__); goto aikyqicagksmuuwm; yeeuymikamycumyc: yickykwwmiegccym: goto ecmmowyyaeoocsyc; ousuugweskuyuccq: if (!(!isset($oqwuasygwcckkios["\x73\165\143\143\x65\163\x73"]) || !$oqwuasygwcckkios["\x73\x75\143\x63\145\x73\x73"])) { goto yokseegosimogkwk; } goto mwecckoekskqkugm; ywiauwqgumuuuuey: if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto iaykekkguwmqckom; } goto skuioqyugmyaiyys; yyqyuoqqyisuwuks: } public function mmqyysequeygeaii() : string { goto mkyykkyowymkmcuc; qisqkemyewoikmem: gqyiymemggwaskka: goto qgogowwyeaaqgoie; smquqoksuqyismms: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], rawurlencode($gwgucoaaqcwwciqq)); goto qaqiseeiwwigcwco; ciqsimeoewamiqyc: $gwgucoaaqcwwciqq = preg_replace("\x2f\x3a\134\144\53\44\57", '', $gwgucoaaqcwwciqq); goto ogweqkwccmuaowyq; qgogowwyeaaqgoie: $gwgucoaaqcwwciqq = $this->iuocyymeygwuweag("\110\x54\124\x50\x5f\x48\117\123\124", (string) time()); goto ciqsimeoewamiqyc; mkyykkyowymkmcuc: if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto gqyiymemggwaskka; } goto uymiqgqiegoigcqs; uymiqgqiegoigcqs: return $this->eecucukcqkqysiau(__FUNCTION__); goto qisqkemyewoikmem; ogweqkwccmuaowyq: $gwgucoaaqcwwciqq = trim(strtolower($gwgucoaaqcwwciqq), "\x2e"); goto smquqoksuqyismms; qaqiseeiwwigcwco: } public function wcsoyaccaqessckk() { goto ucicksisoccgqais; icssiymmywikcyuq: qqiasayqgeaewgwe: goto siaqqcmuquqwqusg; msggsiiqkwyywaay: igyksykyeyaswmus: goto qiogcgemwoskeguy; ucicksisoccgqais: if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto iequyuqyouasoeyy; } goto qkukewwwakmkikwo; siaqqcmuquqwqusg: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\163\x75\x63\x63\145\x73\163" => false, "\160\x61\x74\x68" => $this->amqagusacuuuaswg() . $gwgucoaaqcwwciqq . implode("\x2f", $mkomwsiykqigmqca) . "\x2e\x70\x68\160"]); goto cyamiiweeqsksayq; cooogaqeyuuakoky: iequyuqyouasoeyy: goto smsgswikiiieskgy; usayqekieaeawmmo: $mkomwsiykqigmqca = preg_replace("\x7c\50\77\74\x3d\x2e\51\57\x2b\x7c", "\x2f", $mkomwsiykqigmqca); goto qcoyscmyegawqkcm; ioycgwoyokiuwogg: $mkomwsiykqigmqca = str_replace("\134", "\57", strtok($this->iuocyymeygwuweag("\x52\x45\x51\125\105\123\x54\137\125\x52\111", ''), "\77")); goto usayqekieaeawmmo; qkukewwwakmkikwo: return $this->eecucukcqkqysiau(__FUNCTION__); goto cooogaqeyuuakoky; cyamiiweeqsksayq: goto igyksykyeyaswmus; goto uwissmmyqiiqueaw; kogwcmswguiqkimc: $oqwuasygwcckkios = $qogsmwakwacwqogk; goto cymuckioogeayeoo; cymuckioogeayeoo: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\x73\165\143\x63\145\163\x73" => true, "\160\x61\x74\150" => $oqwuasygwcckkios]); goto msggsiiqkwyywaay; sskumuuougwwogwy: $qogsmwakwacwqogk = "{$yckucuyiaykemqea}{$gwgucoaaqcwwciqq}\x2e\160\x68\160"; goto sckoaamegweguoge; qcoyscmyegawqkcm: $mkomwsiykqigmqca = explode("\x25\x32\x46", preg_replace("\57\136\50\77\72\x25\62\106\x29\52\x28\56\x2a\77\51\50\77\72\x25\62\x46\51\52\x24\57", "\x24\61", rawurlencode($mkomwsiykqigmqca))); goto mykqosugciymouyy; smacakeueqkaoquw: $gwgucoaaqcwwciqq = $this->mmqyysequeygeaii(); goto sskumuuougwwogwy; ouoqqaoqeuqomiik: $yykkewcosaecgqyg = realpath($yckucuyiaykemqea) . DIRECTORY_SEPARATOR; goto smacakeueqkaoquw; uwissmmyqiiqueaw: sceggueuwywymmak: goto kogwcmswguiqkimc; sckoaamegweguoge: if (realpath($qogsmwakwacwqogk) && 0 === stripos(realpath($qogsmwakwacwqogk), $yykkewcosaecgqyg)) { goto sceggueuwywymmak; } goto ioycgwoyokiuwogg; mykqosugciymouyy: foreach ($mkomwsiykqigmqca as $uwgioieamckgqics) { goto oyeciwugsaoigkok; mmqoeacwauwumuwy: syacoiikqeqwssee: goto mmkokimcmkwyukcs; aqmqocckmcayaiqy: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\x73\165\x63\x63\x65\x73\163" => true, "\x70\x61\164\150" => $oqwuasygwcckkios]); goto ooqiqegoqeoemwes; caomsqikuqygukiu: if (realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $uwgioieamckgqics . "\56\x70\150\160") && 0 === stripos(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $uwgioieamckgqics . "\x2e\160\x68\x70"), $yykkewcosaecgqyg)) { goto syacoiikqeqwssee; } goto ukosesgoyouygask; ykykoyeewsakokcy: wmwwsisgwaqsqeko: goto aesamimsyomsigoi; ukosesgoyouygask: if (!(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $miawkwqioaeasiig . $uwgioieamckgqics . "\x2e\160\150\x70") && 0 === stripos(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $miawkwqioaeasiig . $uwgioieamckgqics . "\56\160\150\160"), $yykkewcosaecgqyg))) { goto mqusmmmgkskwmoau; } goto equyaeikyukugagk; ugwaocykeyqccama: $miawkwqioaeasiig .= $uwgioieamckgqics . "\x2e"; goto ykykoyeewsakokcy; amgsgosgeuwgssgq: mqusmmmgkskwmoau: goto gawkyeoimacqsamu; ooqiqegoqeoemwes: uoiskyawciaycskg: goto ugwaocykeyqccama; oyeciwugsaoigkok: static $miawkwqioaeasiig; goto caomsqikuqygukiu; mmkokimcmkwyukcs: $oqwuasygwcckkios = $yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $uwgioieamckgqics . "\x2e\x70\150\x70"; goto aqmqocckmcayaiqy; gawkyeoimacqsamu: goto uoiskyawciaycskg; goto mmqoeacwauwumuwy; equyaeikyukugagk: $oqwuasygwcckkios = $yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $miawkwqioaeasiig . $uwgioieamckgqics . "\56\x70\x68\160"; goto sueqwiqgouagewes; sueqwiqgouagewes: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\x73\165\143\x63\145\x73\x73" => true, "\x70\141\164\x68" => $oqwuasygwcckkios]); goto amgsgosgeuwgssgq; aesamimsyomsigoi: } goto icssiymmywikcyuq; smsgswikiiieskgy: $yckucuyiaykemqea = $this->amqagusacuuuaswg(); goto ouoqqaoqeuqomiik; qiogcgemwoskeguy: } public function wymiuaugeeigmmuc() { goto woaucuqwwygyseoy; iwocsmoqemqaiwuo: return $osqkgokmuiasuukg; goto ggkqwysmuwoiueyg; kcagioquuqegqcyg: $osqkgokmuiasuukg = "\x23{$osqkgokmuiasuukg}\x23"; goto wwsomoigcwkwsguy; aqywsykoaksagmii: if (!$osqkgokmuiasuukg) { goto emweskkoeaamissy; } goto kcagioquuqegqcyg; woaucuqwwygyseoy: $osqkgokmuiasuukg = $this->get("\x72\x65\x6a\145\143\x74\137\x63\x6f\x6f\153\x69\x65\163"); goto aqywsykoaksagmii; wwsomoigcwkwsguy: emweskkoeaamissy: goto iwocsmoqemqaiwuo; ggkqwysmuwoiueyg: } public function goqwamweigigmuuu() { goto yqaeaawsoygkiuqq; yqaeaawsoygkiuqq: $osqkgokmuiasuukg = $this->get("\151\x67\156\x6f\x72\145\144\x5f\x75\x72\154\163"); goto kayqeeaqmuuqkuou; kayqeeaqmuuqkuou: if (!$osqkgokmuiasuukg) { goto yewaicmwsoqyceeg; } goto icsikkwucecsisuk; ccuegmwmimgiocso: return $osqkgokmuiasuukg; goto cakioquwkusgwwkw; icsikkwucecsisuk: $osqkgokmuiasuukg = "\x23{$osqkgokmuiasuukg}\x23"; goto gcmikiuqumkkacyo; gcmikiuqumkkacyo: yewaicmwsoqyceeg: goto ccuegmwmimgiocso; cakioquwkusgwwkw: } public function mqoiyygukoqkmwie() : string { goto lnoeyaecmcmsigqy; uaqggqikeeeoemee: return $osqkgokmuiasuukg; goto oyyuwwmewyyewikc; aeyqisueowykqqem: uwoogcquscauiwkg: goto uaqggqikeeeoemee; kcwkigqegoyyasgo: $osqkgokmuiasuukg = "\x23{$osqkgokmuiasuukg}\x23"; goto aeyqisueowykqqem; lnoeyaecmcmsigqy: $osqkgokmuiasuukg = $this->get("\x63\141\x63\150\145\x5f\155\141\156\144\x61\164\x6f\x72\x79\137\143\x6f\157\153\151\145\x73"); goto mmgicwwygeekgamc; mmgicwwygeekgamc: if (!('' !== $osqkgokmuiasuukg)) { goto uwoogcquscauiwkg; } goto kcwkigqegoyyasgo; oyyuwwmewyyewikc: } public function kwauqaweosgcsimi() : bool { return $this->get("\x64\145\142\165\147\137\x6d\157\144\x65"); } }
