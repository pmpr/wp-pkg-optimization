<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             631c41f851e37             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Asset; use Pmpr\Common\Foundation\FormMaker\Admin\Element\MetaBox; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use Pmpr\Module\Optimization\Tab; class Setting extends Tab { const quekmgksoiyceykk = "\155\151\156\x69\x66\171\137"; const eumicecccemicqey = self::quekmgksoiyceykk . "\x6a\163"; const ykqawckyqkmqiamq = self::quekmgksoiyceykk . "\143\x73\x73"; const sikyekqowskqiqga = self::quekmgksoiyceykk . "\x68\x74\x6d\x6c"; const ccoaqmuiqioqaooa = self::iccwcygaeqmomooo . "\x5f\x6d\151\156\151\146\171"; const ouysiyiqiqogowwy = "\143\144\156\137"; const guiakysqekasiwso = self::ouysiyiqiqogowwy . "\x66\x6f\156\164"; const ewqwqyyqgaaaeuwu = self::ouysiyiqiqogowwy . "\x66\157\156\x74\x5f\165\x72\x6c"; const geqkcgkoqqeyuqkg = self::ouysiyiqiqogowwy . "\x66\157\x6e\x74\x5f\x6e\141\155\145"; const sewumqkiymkquogk = self::ouysiyiqiqogowwy . "\x65\x6e\141\142\x6c\x65\x5f\152\x73\144\x65\x6c\151\166\x65\x72"; const ggwcgwwicaucowgo = "\x63\x72\x69\x74\x69\x63\141\154\x5f"; const qwmwuwqwwaiiaqou = self::ggwcgwwicaucowgo . "\145\170\x74\x72\141\x5f\143\163\163"; const kuqaeysqaeyocckm = self::iccwcygaeqmomooo . self::ggwcgwwicaucowgo . "\x63\163\x73"; const aqywkwyscogcecei = "\155\x65\x64\x69\x61\x5f"; const meciimymegqueigk = self::aqywkwyscogcecei . "\x6c\x61\x7a\x79\x5f\x6c\157\x61\x64\x5f"; const moosyqmaqgsikgcg = self::meciimymegqueigk . "\145\156\x61\x62\x6c\x65"; const uwgswmisuuigoucw = self::meciimymegqueigk . "\x69\155\x61\147\145\163"; const ekequaesakywuioq = self::aqywkwyscogcecei . "\151\x6d\x61\147\145\137\143\x6f\x6c\x6f\x72\137\x64\157\155\151\x6e\x61\x74\157\162"; const semmsmiiwgwsqeqi = self::aqywkwyscogcecei . "\144\157\155\x69\156\x61\x74\157\162\x5f\x64\x65\x66\x61\x75\154\164\x5f\143\157\x6c\157\x72"; const gowiqmkskqiqsgsc = self::meciimymegqueigk . "\151\146\162\141\x6d\145\x5f\141\x6e\144\x5f\166\151\x64\145\x6f\163"; const twykececsuscsygc = "\143\x6c\145\141\156\x75\x70\x5f"; const qoyskaoaaakosmaq = self::twykececsuscsygc . "\141\144\x64\x5f\x62\154\141\156\153\137\x66\x61\x76\151\x63\157\x6e"; const yaggsqosuggmgykq = self::twykececsuscsygc . "\163\160\x65\143\151\146\x79\137\x64\x69\155\145\x6e\163\x69\x6f\156\163"; const aysyuueaueiamysu = self::twykececsuscsygc . "\x72\145\155\x6f\166\x65\137\150\164\x74\x70\x5f\160\x72\x6f\164\157\143\157\x6c"; const ookqmecseqmewmeo = self::yaggsqosuggmgykq . "\x5f\x65\x78\x74\145\x72\156\141\x6c\x5f\151\155\x61\x67\x65\x73"; const emeseeausaemuoeq = self::twykececsuscsygc . "\170\x6d\x6c\x72\160\x63"; const wkasasawguckeyuc = self::twykececsuscsygc . "\150\x69\144\145\137\x77\x70\137\x76\x65\162\x73\151\x6f\156"; const wamuucmcqykegkoc = self::twykececsuscsygc . "\x72\x73\x64\137\x6c\151\x6e\x6b"; const iqmqemikwcuuiyom = self::twykececsuscsygc . "\162\x65\x73\164\x5f\141\160\x69"; const sqaukikimiwcqmew = self::twykececsuscsygc . "\163\150\157\x72\x74\154\151\x6e\x6b"; const aaisgiycykyqiqcm = self::twykececsuscsygc . "\167\x6c\x77\137\155\x61\156\151\146\x65\163\x74\x5f\x6c\151\x6e\x6b"; const oeiwkesueukkqggs = self::twykececsuscsygc . "\x65\155\157\x6a\x69\163"; const owgquqcyoseeeiqg = self::twykececsuscsygc . "\145\x6d\142\x65\x64\x73"; const uwcmcaucigmuiugg = self::twykececsuscsygc . "\144\x61\163\150\151\x63\x6f\x6e\x73"; const gukmqsiumkmukaoe = self::twykececsuscsygc . "\147\165\164\145\156\x62\x65\162\147\137\143\x73\x73"; const qwcseoyssyaciyqk = self::twykececsuscsygc . "\x6a\161\x75\x65\162\x79\137\155\x69\x67\x72\x61\x74\x65"; const kcgocyessaswyike = self::twykececsuscsygc . "\160\x61\x73\163\167\157\162\144\137\163\164\x72\x65\156\x67\164\x68\137\x6d\x65\x74\x65\x72"; const qecgmkquiegacugk = "\x61\x73\x79\x6e\143\137\x6c\157\141\144\137"; const hoeamwwegymyeeeg = self::qecgmkquiegacugk . "\163\x74\x79\x6c\x65"; const qogwyiiyouiiuaas = self::hoeamwwegymyeeeg . "\x5f\143\144\x6e"; const kmqkicgwmisqiuoq = self::hoeamwwegymyeeeg . "\137\x65\x78\x63\x6c\165\x64\x65"; const komosgcgwesseeqo = self::qecgmkquiegacugk . "\x6a\141\166\141\x73\x63\162\x69\160\x74"; const wsosyuyuggeiiyeu = self::komosgcgwesseeqo . "\x5f\x63\144\156"; const uoiiqmyeiqseuosu = self::komosgcgwesseeqo . "\137\x65\170\143\154\165\144\145"; const ikwassqmsckwwawo = "\144\x79\x6e\141\x6d\x69\143\137\x72\x65\x6e\144\x65\x72\x69\156\147"; public function aucimgwswmgaocae($ywoucyskcquysiwc = []) : array { $yuwymayicwwqiske = $this->aakmagwggmkoiiyu() . "\x5f\x61\x73\163\x65\164\x73"; $ywoucyskcquysiwc[] = self::sgsmqaoowiyocqaa("{$yuwymayicwwqiske}\x5f\x74\141\x62", __("\x41\x73\163\x65\x74\x73", PR__MDL__OPTIMIZATION))->sikqggwmmykuiymy($this->ecmoqcoyysugcqey($yuwymayicwwqiske))->sikqggwmmykuiymy($this->wywgqayqssuqewyw($yuwymayicwwqiske))->sikqggwmmykuiymy($this->quqkimmaaoeumckc($yuwymayicwwqiske))->sikqggwmmykuiymy($this->ogwgiimweiigcomw($yuwymayicwwqiske))->sikqggwmmykuiymy($this->oumykgggccscaasy($yuwymayicwwqiske))->sikqggwmmykuiymy($this->wseoiekkiwuiuacg($yuwymayicwwqiske))->sikqggwmmykuiymy($this->aiguiusgagaacige($yuwymayicwwqiske))->saemoowcasogykak(IconFontawesomeInterface::qymemaukeumsukku)->jyumyyugiwwiqomk(10); return parent::aucimgwswmgaocae($ywoucyskcquysiwc); } public function oumykgggccscaasy($yuwymayicwwqiske) : MetaBox { $gcwumimeouemawcc = $this->igsmkkoyasgwmkqm(); return self::cgygmuguceeosoey("{$yuwymayicwwqiske}\x5f\x64\x79\156\141\155\151\143\x5f\x72\x65\x6e\144\x65\162\151\156\x67", __("\104\171\156\141\x6d\151\x63\x20\x52\x65\x6e\144\145\162\x69\156\x67", PR__MDL__OPTIMIZATION))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::ikwassqmsckwwawo, __("\x41\143\164\x69\x76\141\x74\x69\x6f\156", PR__MDL__OPTIMIZATION))->ooowowweyusommmm($gcwumimeouemawcc[self::qescuiwgsyuikume], $gcwumimeouemawcc[self::eoskkkieowogacws], self::smkwuwawwaqyimcq, true))->saemoowcasogykak(IconFontawesomeInterface::qkkgsackwasemsag); } public function wseoiekkiwuiuacg($yuwymayicwwqiske) : MetaBox { return self::cgygmuguceeosoey("{$yuwymayicwwqiske}\137\x63\144\x6e", __("\x43\x6f\156\164\x65\156\x74\40\104\145\x6c\151\x76\145\162\x79\40\x4e\x65\x74\x77\x6f\x72\153\x20\x28\x43\x44\116\51", PR__MDL__OPTIMIZATION))->aucimgwswmgaocae(self::sgsmqaoowiyocqaa("{$yuwymayicwwqiske}\x5f\x63\156\144\137\152\x73\144\x65\154\x69\166\145\162", __("\112\x53\104\145\154\x69\x76\145\x72", PR__MDL__OPTIMIZATION))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::sewumqkiymkquogk, __("\x45\156\x61\x62\154\145\40\x4a\123\104\145\x6c\x69\x76\145\x72", PR__MDL__OPTIMIZATION), __("\103\150\x65\x63\x6b\x20\x74\x68\x69\x73\40\151\x74\145\155\x20\164\x6f\40\x72\145\x70\x6c\x61\x63\x65\x20\162\x65\x73\157\165\162\143\145\163\x20\x62\x79\40\112\123\x44\x65\x6c\151\x76\x65\x72\40\x63\144\x6e\x2e", PR__MDL__OPTIMIZATION))->yeigkegagskeaaim())->saemoowcasogykak(IconFontawesomeInterface::oykyeemoeeyooomc))->saemoowcasogykak(IconFontawesomeInterface::yemsakwkwimksusy); } public function ecmoqcoyysugcqey($yuwymayicwwqiske) { return self::cgygmuguceeosoey("{$yuwymayicwwqiske}\x5f\x6d\145\144\x69\141", __("\x4d\145\x64\151\141", PR__MDL__OPTIMIZATION))->aucimgwswmgaocae(self::sgsmqaoowiyocqaa("{$yuwymayicwwqiske}\x5f\155\145\144\x69\141\x5f\x6c\141\x7a\x79\154\157\141\144", __("\x4c\x61\x7a\x79\x6c\x6f\141\x64", PR__MDL__OPTIMIZATION))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::moosyqmaqgsikgcg, __("\x41\143\x74\x69\x76\x61\x74\x69\157\156", PR__MDL__OPTIMIZATION))->agywyaaquwawwuiy([self::uwgswmisuuigoucw, self::gowiqmkskqiqsgsc]))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::uwgswmisuuigoucw, __("\x49\155\141\147\x65\163", PR__MDL__OPTIMIZATION)))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::gowiqmkskqiqsgsc, __("\151\106\162\141\x6d\x65\40\x61\x6e\x64\40\x56\151\144\x65\x6f\x73", PR__MDL__OPTIMIZATION)))->saemoowcasogykak(IconFontawesomeInterface::ewcsmakmqeeueqec))->aucimgwswmgaocae(self::sgsmqaoowiyocqaa("{$yuwymayicwwqiske}\137\x6d\x65\x64\151\x61\137\x64\x6f\155\x69\156\141\x74\157\x72", __("\103\157\x6c\x6f\162\x20\x44\x6f\155\151\156\141\164\x6f\162", PR__MDL__OPTIMIZATION))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::ekequaesakywuioq, __("\x49\x6d\141\147\x65\40\x43\x6f\x6c\157\x72\40\x44\157\x6d\151\156\141\164\157\x72", PR__MDL__OPTIMIZATION))->agywyaaquwawwuiy(self::semmsmiiwgwsqeqi))->mkksewyosgeumwsa(self::mwmcsiqiwkweayuw(self::semmsmiiwgwsqeqi, __("\104\x65\x66\x61\165\154\164\x20\x44\157\155\151\156\x61\164\157\x72\x20\103\157\x6c\157\162", PR__MDL__OPTIMIZATION))->eyygsasuqmommkua("\x23\x46\x46\106"))->saemoowcasogykak(IconFontawesomeInterface::kuicceqcgamkcsuw))->saemoowcasogykak(IconFontawesomeInterface::wauosagckgqiqoio); } public function wywgqayqssuqewyw($yuwymayicwwqiske) : MetaBox { $mkqqqewsokcswckc = __("\x43\150\145\x63\153\x20\164\x68\x69\x73\x20\151\164\145\155\40\151\146\x20\x79\157\165\x20\167\141\x6e\164\40\155\151\156\x69\146\171\x20\45\163\x2e", PR__MDL__OPTIMIZATION); return self::cgygmuguceeosoey("{$yuwymayicwwqiske}\137\155\151\156\151\x66\171", __("\x4d\151\x6e\151\146\x79", PR__MDL__OPTIMIZATION))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::ccoaqmuiqioqaooa, __("\x45\156\141\x62\154\x65\x20\115\151\156\x69\146\x79", PR__MDL__OPTIMIZATION))->agywyaaquwawwuiy([self::sikyekqowskqiqga, self::ykqawckyqkmqiamq, self::eumicecccemicqey])->ccmwycqioaicegoc(__("\103\150\x65\143\x6b\40\164\150\151\163\40\151\164\145\155\40\164\x6f\40\145\x6e\141\142\154\145\x20\x6d\151\156\x69\x66\171\40\146\x75\x6e\143\164\151\157\x6e\x61\x6c\151\164\171\56", PR__MDL__OPTIMIZATION)))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::sikyekqowskqiqga, __("\115\151\x6e\x69\146\x79\x20\x48\124\115\x4c", PR__MDL__OPTIMIZATION), sprintf($mkqqqewsokcswckc, "\74\143\x6f\x64\145\76\x48\x54\115\x4c\x3c\x2f\x63\157\x64\145\x3e")))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::ykqawckyqkmqiamq, __("\115\x69\x6e\x69\x66\x79\40\103\123\x53", PR__MDL__OPTIMIZATION), sprintf($mkqqqewsokcswckc, "\x3c\143\x6f\x64\145\x3e\103\x53\123\x3c\x2f\x63\x6f\144\145\76")))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::eumicecccemicqey, __("\x4d\x69\x6e\x69\x66\x79\x20\112\123", PR__MDL__OPTIMIZATION), sprintf($mkqqqewsokcswckc, "\x3c\143\157\x64\x65\76\112\141\x76\141\x53\143\x72\x69\160\x74\x3c\x2f\x63\157\x64\x65\x3e")))->saemoowcasogykak(IconFontawesomeInterface::yesiuuqooeauouoq); } public function aiguiusgagaacige($yuwymayicwwqiske) : MetaBox { return self::cgygmuguceeosoey("{$yuwymayicwwqiske}\137\143\x6c\145\x61\x6e\x75\160", __("\x43\154\x65\x61\x6e\x75\160", PR__MDL__OPTIMIZATION))->aucimgwswmgaocae(self::sgsmqaoowiyocqaa("{$yuwymayicwwqiske}\137\x63\x6c\145\141\x6e\165\160\x5f\x69\155\141\147\145", __("\111\x6d\141\147\145\163", PR__MDL__OPTIMIZATION))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::qoyskaoaaakosmaq, __("\x41\144\144\x20\102\154\x61\x6e\x6b\40\106\x61\166\x69\143\157\156", PR__MDL__OPTIMIZATION), __("\101\144\144\x20\x61\x20\142\x6c\141\156\153\40\x66\x61\166\x69\143\157\x6e\x20\164\157\40\171\x6f\x75\x72\40\127\x6f\x72\x64\x50\162\145\x73\x73\x20\150\x65\x61\144\x65\162\40\167\150\151\143\150\40\167\151\154\x6c\40\160\162\145\x76\145\156\164\40\141\40\115\151\x73\x73\151\x6e\x67\x20\x46\x61\x76\x69\143\157\x6e\x20\157\x72\40\64\x30\x34\40\145\162\x72\x6f\x72\x2e", PR__MDL__OPTIMIZATION)))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::yaggsqosuggmgykq, __("\123\x70\145\x63\x69\146\x79\x20\111\x6d\x61\x67\x65\x20\104\x69\x6d\x65\x6e\163\x69\x6f\156\x73", PR__MDL__OPTIMIZATION), __("\x41\x64\x64\x20\x77\x69\144\x74\x68\x20\141\156\144\40\x68\x65\x69\x67\x68\x74\40\141\x74\x74\162\151\142\165\164\x65\40\x74\x6f\40\x69\x6d\x61\147\x65\x73\x20\151\x66\40\156\157\164\x20\x65\x78\151\163\164\56", PR__MDL__OPTIMIZATION))->agywyaaquwawwuiy(self::ookqmecseqmewmeo))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::ookqmecseqmewmeo, __("\105\170\164\x65\162\x6e\x61\x6c\x20\111\155\x61\147\145\163\x20\x44\151\155\145\x6e\x73\x69\x6f\x6e\x73", PR__MDL__OPTIMIZATION), __("\x44\157\x20\163\x70\145\x63\151\146\x79\x20\x69\155\x61\x67\145\x20\144\151\155\145\x6e\163\x69\157\x6e\x73\x20\146\x6f\x72\40\x65\170\x74\145\x72\156\141\154\x20\x69\155\x61\147\145\163\56", PR__MDL__OPTIMIZATION)))->saemoowcasogykak(IconFontawesomeInterface::sesaeqomsuesouac))->aucimgwswmgaocae(self::sgsmqaoowiyocqaa("{$yuwymayicwwqiske}\x5f\143\x6c\x65\141\156\165\160\137\x6a\x73\137\x63\x73\x73", __("\x4a\123\40\x26\40\103\123\123\x20\x26\x20\x48\124\x4d\x4c", PR__MDL__OPTIMIZATION))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::oeiwkesueukkqggs, __("\x44\x69\x73\141\x62\154\x65\x20\105\x6d\157\x6a\151\163", PR__MDL__OPTIMIZATION), __("\x52\145\155\x6f\166\x65\x73\x20\127\157\162\144\x50\x72\145\163\x73\40\105\155\157\x6a\x69\163\40\x4a\141\166\x61\x53\143\x72\151\160\164\x20\146\x69\154\x65\x2e", PR__MDL__OPTIMIZATION)))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::owgquqcyoseeeiqg, __("\104\151\163\x61\x62\154\145\40\105\155\x62\145\144\163", PR__MDL__OPTIMIZATION), __("\122\x65\155\x6f\x76\145\x73\40\127\157\x72\144\120\x72\x65\x73\x73\40\x45\155\142\x65\144\40\112\x61\166\x61\x53\143\x72\151\160\x74\x20\x66\151\154\145\x2e", PR__MDL__OPTIMIZATION)))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::qwcseoyssyaciyqk, __("\x52\145\155\x6f\x76\x65\40\152\x51\x75\145\x72\x79\40\115\151\147\162\x61\164\x65", PR__MDL__OPTIMIZATION), __("\x52\x65\x6d\x6f\166\x65\x73\x20\152\x51\x75\x65\162\171\x20\x4d\x69\147\162\141\164\145\x20\x4a\x61\x76\141\123\143\162\x69\x70\x74\x20\x66\x69\154\x65\x2e", PR__MDL__OPTIMIZATION))->yeigkegagskeaaim())->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::uwcmcaucigmuiugg, __("\104\x69\x73\x61\x62\x6c\x65\40\x44\x61\x73\x68\151\x63\157\x6e\163", PR__MDL__OPTIMIZATION), __("\104\x69\163\141\x62\154\x65\x73\x20\144\x61\163\150\x69\x63\157\x6e\x73\x20\x6f\x6e\40\164\150\x65\40\146\x72\x6f\156\164\40\x65\156\x64\x20\x77\150\145\x6e\x20\156\x6f\x74\x20\x6c\x6f\x67\x67\145\144\x20\x69\156\56", PR__MDL__OPTIMIZATION)))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::gukmqsiumkmukaoe, __("\104\x69\x73\141\142\x6c\145\40\107\x75\164\x65\156\x62\x65\x72\x67\40\x42\154\x6f\143\x6b\x20\x4c\x69\142\x72\141\x72\x79", PR__MDL__OPTIMIZATION), __("\x44\151\x73\141\142\x6c\x65\163\x20\147\165\x74\x65\x6e\x62\x65\162\x67\x20\142\x6c\157\143\153\40\154\151\142\x72\141\x72\x79\40\x6f\156\40\164\x68\x65\x20\x66\162\157\x6e\164\40\x65\156\x64\x20\x77\150\x65\156\x20\x6e\157\164\x20\154\157\x67\x67\x65\144\40\151\x6e\x2e", PR__MDL__OPTIMIZATION)))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::kcgocyessaswyike, __("\104\151\163\141\x62\154\145\40\x50\141\x73\163\167\157\x72\x64\40\123\x74\162\145\x6e\147\x74\x68\40\x4d\x65\164\x65\162", PR__MDL__OPTIMIZATION), __("\122\145\x6d\157\166\145\x73\40\x57\157\x72\x64\x50\x72\x65\x73\163\x20\141\x6e\144\x20\127\157\x6f\x43\157\155\155\145\x72\x63\x65\40\x50\141\x73\163\x77\157\162\144\40\123\164\162\x65\x6e\147\164\150\x20\115\x65\x74\x65\162\x20\163\x63\x72\151\x70\164\163\x20\x66\162\x6f\x6d\40\x6e\x6f\x6e\40\x65\163\163\145\x6e\164\151\x61\x6c\x20\160\x61\x67\x65\x73\56", PR__MDL__OPTIMIZATION)))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::aysyuueaueiamysu, __("\x52\145\155\x6f\x76\x65\x20\x48\x54\124\x50\x20\120\162\x6f\x74\x6f\143\157\x6c", PR__MDL__OPTIMIZATION), sprintf(__("\x52\145\160\x6c\141\143\145\x20\45\x73\40\167\151\x74\150\x20\45\163\x20\151\156\40\45\x73\40\164\141\x67\x73\56", PR__MDL__OPTIMIZATION), "\x3c\x63\x6f\144\145\x3e\x68\x74\164\x70\74\57\x63\x6f\144\145\76\x7c\74\143\157\x64\145\76\x68\x74\x74\160\x73\74\x2f\x63\x6f\x64\x65\x3e", "\x3c\143\157\x64\145\x3e\57\x2f\x3c\x2f\x63\x6f\144\145\x3e", "\74\x63\157\144\x65\x3e\163\x63\x72\x69\160\164\74\x2f\143\157\x64\x65\76\174\74\143\x6f\144\x65\76\154\x69\x6e\x6b\74\57\x63\157\144\x65\76\174\74\x63\x6f\x64\145\x3e\x69\155\x67\x3c\x2f\143\157\x64\145\x3e\174\x3c\x63\157\144\145\x3e\x66\157\x72\x6d\x3c\x2f\143\157\144\x65\76")))->saemoowcasogykak(IconFontawesomeInterface::yukkwocaqagsumum))->aucimgwswmgaocae(self::sgsmqaoowiyocqaa("{$yuwymayicwwqiske}\x5f\143\x6c\x65\x61\156\x75\160\137\150\x65\141\144\x5f\x74\141\x67\163", __("\110\x65\x61\x64\x20\x54\141\147\163", PR__MDL__OPTIMIZATION))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::emeseeausaemuoeq, __("\104\x69\x73\x61\x62\154\x65\x20\130\x4d\x4c\55\122\x50\103", PR__MDL__OPTIMIZATION), __("\122\x65\x6d\x6f\166\x65\x73\x20\127\157\162\144\120\162\x65\x73\x73\40\130\115\x4c\55\x52\120\x43\40\146\x75\156\143\x74\151\x6f\x6e\141\154\x69\164\x79\x2e", PR__MDL__OPTIMIZATION)))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::wamuucmcqykegkoc, __("\122\x65\x6d\x6f\166\x65\40\x52\123\x44\40\x4c\x69\x6e\x6b", PR__MDL__OPTIMIZATION), __("\x52\x65\155\157\166\145\40\x52\x53\104\40\x28\x52\x65\141\154\x20\x53\x69\x6d\x70\154\x65\40\104\x69\163\143\157\x76\145\x72\x79\x29\x20\154\x69\156\153\x20\164\141\147\x2e", PR__MDL__OPTIMIZATION)))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::wkasasawguckeyuc, __("\x48\x69\x64\x65\x20\127\120\40\126\145\162\x73\x69\x6f\156", PR__MDL__OPTIMIZATION), __("\x54\x68\151\x73\40\151\x73\x20\x67\157\x6f\x64\40\x66\157\x72\x20\163\x65\143\x75\x72\x69\164\171\x20\x70\165\x72\x70\x6f\163\145\163\40\141\x73\40\x77\x65\154\x6c\54\x20\x73\151\156\143\x65\40\x69\164\x20\x68\x69\x64\x65\x73\x20\164\150\145\x20\x57\157\162\x64\x50\x72\x65\x73\163\x20\166\145\x72\163\151\157\x6e\x20\x79\x6f\x75\x27\162\145\40\x75\x73\x69\x6e\147\x2e", PR__MDL__OPTIMIZATION)))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::aaisgiycykyqiqcm, __("\122\x65\x6d\157\x76\145\40\x77\x6c\x77\x6d\x61\156\x69\146\145\163\x74\40\x4c\151\x6e\153", PR__MDL__OPTIMIZATION), __("\111\x66\40\x79\157\165\40\144\157\x20\x6e\157\x74\40\x75\x73\145\40\x57\x69\x6e\x64\x6f\167\x73\40\114\x69\x76\145\x20\127\162\151\164\145\x72\40\164\157\x20\x65\144\x69\x74\x20\x79\157\x75\162\40\x62\154\x6f\x67\x20\143\x6f\156\164\145\156\164\x73\54\40\164\x68\x65\x6e\40\x69\x74\x27\163\x20\x73\141\146\145\x20\164\x6f\40\x72\145\155\157\x76\x65\x20\x74\150\x69\163\56", PR__MDL__OPTIMIZATION)))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::sqaukikimiwcqmew, __("\x52\x65\x6d\157\166\x65\x20\123\150\157\x72\x74\154\x69\x6e\x6b", PR__MDL__OPTIMIZATION), __("\101\x72\x65\x20\x79\x6f\165\x20\165\x73\151\x6e\x67\x20\x53\x45\x4f\40\146\162\151\145\x6e\144\x6c\x79\x20\x55\122\x4c\x73\x20\x61\x6e\x64\x20\144\157\40\156\x6f\x74\40\x6e\x65\x65\144\x20\x74\x68\x65\x20\x64\x65\x66\x61\x75\x6c\164\40\127\157\x72\x64\x50\x72\x65\x73\163\x20\x73\150\157\162\164\154\x69\156\x6b\x3f\40\x79\157\165\x20\143\141\156\40\162\x65\x6d\157\x76\145\40\164\x68\151\163\x2e", PR__MDL__OPTIMIZATION)))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::iqmqemikwcuuiyom, __("\x52\x65\x6d\x6f\166\x65\40\x52\105\x53\x54\x20\x41\x50\111", PR__MDL__OPTIMIZATION), __("\101\162\x65\40\171\157\165\x20\141\143\x63\x65\163\x73\x69\x6e\x67\40\x79\x6f\165\x72\40\143\157\x6e\164\x65\156\x74\40\164\x68\162\x6f\165\x67\150\40\x65\156\144\160\157\x69\x6e\x74\163\77\40\x49\146\40\x6e\x6f\x74\54\x20\171\x6f\165\x20\143\x61\x6e\x20\x72\x65\x6d\x6f\x76\x65\x20\164\x68\x69\x73\x2e", PR__MDL__OPTIMIZATION)))->saemoowcasogykak(IconFontawesomeInterface::wyssocuugkyeuyqq))->saemoowcasogykak(IconFontawesomeInterface::kgsuyaquimiyogeo); } public function quqkimmaaoeumckc($yuwymayicwwqiske) : MetaBox { $gcwumimeouemawcc = $this->igsmkkoyasgwmkqm(); return self::cgygmuguceeosoey("{$yuwymayicwwqiske}\x5f\x63\162\151\164\151\x63\141\154\x5f\x65\x78\x74\x72\141\143\164\x69\x6f\156", __("\103\x72\x69\164\151\x63\141\154\40\105\x78\x74\162\x61\143\164\x69\157\156", PR__MDL__OPTIMIZATION))->aucimgwswmgaocae(self::sgsmqaoowiyocqaa("{$yuwymayicwwqiske}\x5f\x63\162\x69\x74\x69\143\x61\x6c\x5f\143\163\x73", __("\x43\162\x69\164\x69\143\141\154\x20\103\123\x53", PR__MDL__OPTIMIZATION))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::kuqaeysqaeyocckm, __("\105\156\141\x62\x6c\145\40\x43\162\x69\x74\x69\143\141\x6c\x20\x43\x53\x53", PR__MDL__OPTIMIZATION))->ooowowweyusommmm($gcwumimeouemawcc[self::qescuiwgsyuikume], $gcwumimeouemawcc[self::eoskkkieowogacws], self::smkwuwawwaqyimcq, true)->agywyaaquwawwuiy(self::qwmwuwqwwaiiaqou))->mkksewyosgeumwsa(self::uouyygwcgsmygaee(self::qwmwuwqwwaiiaqou, __("\x45\170\164\162\141\x20\x43\x53\123\40\x43\x6f\x64\145", PR__MDL__OPTIMIZATION))->wcgckeeiiseccqkc())->saemoowcasogykak(IconFontawesomeInterface::yukkwocaqagsumum))->saemoowcasogykak(IconFontawesomeInterface::skqmaokqagyceasc); } public function ogwgiimweiigcomw($yuwymayicwwqiske) : MetaBox { $gcwumimeouemawcc = $this->igsmkkoyasgwmkqm(); $yuwymayicwwqiske = "{$yuwymayicwwqiske}\137\141\163\171\x6e\143\x5f\x6c\x6f\x61\144\x69\156\147"; return self::cgygmuguceeosoey($yuwymayicwwqiske, __("\x41\163\x79\x6e\x63\40\114\x6f\x61\144", PR__MDL__OPTIMIZATION))->aucimgwswmgaocae(self::sgsmqaoowiyocqaa("{$yuwymayicwwqiske}\137\152\141\x76\x61\163\x63\x72\x69\160\x74", __("\112\x61\166\141\x73\x63\x72\151\x70\164", PR__MDL__OPTIMIZATION))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::komosgcgwesseeqo, __("\101\143\x74\151\166\x61\x74\151\x6f\156", PR__MDL__OPTIMIZATION))->yeigkegagskeaaim()->agywyaaquwawwuiy([self::uoiiqmyeiqseuosu, self::wsosyuyuggeiiyeu]))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::wsosyuyuggeiiyeu, __("\101\143\x74\151\x76\141\164\145\40\x66\157\162\x20\x43\104\x4e\40\x4a\x61\x76\x61\x73\x63\x72\x69\160\x74", PR__MDL__OPTIMIZATION)))->mkksewyosgeumwsa(self::uouyygwcgsmygaee(self::uoiiqmyeiqseuosu, __("\105\170\x63\154\x75\144\x65\40\112\141\166\x61\163\143\162\x69\x70\164", PR__MDL__OPTIMIZATION))->qsecygiycssgacqs(5)->yskkmqiusguummwa())->saemoowcasogykak(IconFontawesomeInterface::yukkwocaqagsumum))->aucimgwswmgaocae(self::sgsmqaoowiyocqaa("{$yuwymayicwwqiske}\137\x73\164\171\154\145", __("\123\164\x79\154\145\40\x28\x43\x53\123\51", PR__MDL__OPTIMIZATION))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::hoeamwwegymyeeeg, __("\x41\143\x74\x69\x76\141\164\x69\x6f\x6e", PR__MDL__OPTIMIZATION))->ooowowweyusommmm($gcwumimeouemawcc[self::qescuiwgsyuikume], $gcwumimeouemawcc[self::eoskkkieowogacws], self::smkwuwawwaqyimcq, true)->agywyaaquwawwuiy([self::kmqkicgwmisqiuoq, self::qogwyiiyouiiuaas]))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::qogwyiiyouiiuaas, __("\x41\x63\x74\151\166\x61\x74\x65\40\x66\x6f\162\40\x43\104\x4e\x20\123\x74\171\154\x65", PR__MDL__OPTIMIZATION)))->mkksewyosgeumwsa(self::uouyygwcgsmygaee(self::kmqkicgwmisqiuoq, __("\105\x78\143\154\165\144\145\40\123\x74\x79\154\x65", PR__MDL__OPTIMIZATION))->qsecygiycssgacqs(5)->yskkmqiusguummwa())->saemoowcasogykak(IconFontawesomeInterface::yukkwocaqagsumum))->saemoowcasogykak(IconFontawesomeInterface::yqqwkcykyeagkakg); } public function aiqeywqiyqcekgiu($qiouiwasaauyaaue, $uusmaiomayssaecw) { $ggauoeuaesiymgee = []; switch ($uusmaiomayssaecw) { case self::miaqqqiaweeausws: $ggauoeuaesiymgee = [self::eumicecccemicqey => true, self::ykqawckyqkmqiamq => true, self::sikyekqowskqiqga => true, self::ccoaqmuiqioqaooa => true, self::emeseeausaemuoeq => true, self::oeiwkesueukkqggs => true, self::owgquqcyoseeeiqg => true, self::wamuucmcqykegkoc => true, self::wkasasawguckeyuc => true, self::iqmqemikwcuuiyom => true, self::sqaukikimiwcqmew => true, self::uwgswmisuuigoucw => true, self::moosyqmaqgsikgcg => true, self::hoeamwwegymyeeeg => true, self::qoyskaoaaakosmaq => true, self::uwcmcaucigmuiugg => true, self::ikwassqmsckwwawo => true, self::yaggsqosuggmgykq => true, self::kuqaeysqaeyocckm => true, self::sewumqkiymkquogk => true, self::aysyuueaueiamysu => true, self::qogwyiiyouiiuaas => true, self::ekequaesakywuioq => true, self::komosgcgwesseeqo => true, self::gukmqsiumkmukaoe => true, self::qwcseoyssyaciyqk => true, self::qwcseoyssyaciyqk => true, self::aaisgiycykyqiqcm => true, self::wsosyuyuggeiiyeu => true, self::gowiqmkskqiqsgsc => true, self::kcgocyessaswyike => true, self::ookqmecseqmewmeo => true]; goto oeusomaaeekakake; case self::okeoeeywmosegiiy: $ggauoeuaesiymgee = [self::eumicecccemicqey => false, self::ykqawckyqkmqiamq => true, self::sikyekqowskqiqga => true, self::ccoaqmuiqioqaooa => true, self::emeseeausaemuoeq => false, self::oeiwkesueukkqggs => false, self::owgquqcyoseeeiqg => false, self::wamuucmcqykegkoc => false, self::wkasasawguckeyuc => false, self::iqmqemikwcuuiyom => false, self::sqaukikimiwcqmew => false, self::uwgswmisuuigoucw => true, self::moosyqmaqgsikgcg => true, self::hoeamwwegymyeeeg => false, self::qoyskaoaaakosmaq => true, self::uwcmcaucigmuiugg => false, self::ikwassqmsckwwawo => true, self::yaggsqosuggmgykq => false, self::kuqaeysqaeyocckm => false, self::sewumqkiymkquogk => false, self::aysyuueaueiamysu => false, self::qogwyiiyouiiuaas => false, self::ekequaesakywuioq => false, self::komosgcgwesseeqo => false, self::gukmqsiumkmukaoe => false, self::qwcseoyssyaciyqk => false, self::qwcseoyssyaciyqk => false, self::aaisgiycykyqiqcm => false, self::wsosyuyuggeiiyeu => false, self::gowiqmkskqiqsgsc => true, self::kcgocyessaswyike => false, self::ookqmecseqmewmeo => false]; goto oeusomaaeekakake; } kwuckkyqaygwgcuy: oeusomaaeekakake: if (!$ggauoeuaesiymgee) { goto giuccakymqymawgk; } $qiouiwasaauyaaue = array_merge($qiouiwasaauyaaue, $ggauoeuaesiymgee); giuccakymqymawgk: return parent::aiqeywqiyqcekgiu($qiouiwasaauyaaue, $uusmaiomayssaecw); } private function igsmkkoyasgwmkqm() : array { $uamcoiueqaamsqma = __("\x54\x68\151\163\x20\x73\145\164\x74\151\x6e\147\40\157\156\x6c\171\40\x61\160\160\x6c\151\145\x73\x20\x74\157\40\x4c\x65\166\145\154\40\62\x20\x70\x61\x67\x65\163\56", PR__MDL__OPTIMIZATION); $wksoawcgagcgoask = self::couwksyewgyeooqe(); if (!($wksoawcgagcgoask && $wksoawcgagcgoask->qcgakseyaikigqco())) { goto sicgyiyiocyygkoc; } $uamcoiueqaamsqma = "{$uamcoiueqaamsqma}\40" . sprintf(__("\101\x70\160\154\171\40\x74\x6f\40\142\x75\171\40\x6f\162\40\151\156\x63\162\x65\141\163\145\40\x74\x68\145\x20\x62\165\x64\x67\x65\x74\40\x74\x68\x72\x6f\165\147\x68\x20\x74\x68\145\x20\x25\x73\56", PR__MDL__OPTIMIZATION), ManipulateHTML::ciuuiyckmsygceis(ManipulateHTML::yuawgssgauywkiia($wksoawcgagcgoask->qcgakseyaikigqco(), $wksoawcgagcgoask->giiuwsmyumqwwiyq(self::sauwwsocmukoaayu), ["\x74\x61\x72\x67\145\x74" => "\x5f\142\x6c\x61\x6e\x6b"]))); sicgyiyiocyygkoc: return [self::qescuiwgsyuikume => __("\x4a\x75\163\164\40\146\157\x72\x20\114\145\x76\145\x6c\x20\62\x20\x50\x61\x67\145\163", PR__MDL__OPTIMIZATION), self::eoskkkieowogacws => $uamcoiueqaamsqma]; } }
