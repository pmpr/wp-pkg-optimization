<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6261aa1543cbb             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Asset; use Pmpr\Common\Foundation\FormMaker\Admin\Element\MetaBox; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use Pmpr\Module\Optimization\Tab; class Setting extends Tab { const quekmgksoiyceykk = "\155\151\156\151\x66\x79\137"; const eumicecccemicqey = self::quekmgksoiyceykk . "\x6a\x73"; const ykqawckyqkmqiamq = self::quekmgksoiyceykk . "\x63\163\163"; const sikyekqowskqiqga = self::quekmgksoiyceykk . "\150\164\155\x6c"; const ccoaqmuiqioqaooa = self::iccwcygaeqmomooo . "\137\x6d\151\x6e\151\146\x79"; const ouysiyiqiqogowwy = "\x63\144\156\x5f"; const guiakysqekasiwso = self::ouysiyiqiqogowwy . "\146\157\156\164"; const ewqwqyyqgaaaeuwu = self::ouysiyiqiqogowwy . "\x66\157\x6e\x74\137\165\162\x6c"; const geqkcgkoqqeyuqkg = self::ouysiyiqiqogowwy . "\x66\x6f\x6e\164\x5f\156\x61\155\145"; const sewumqkiymkquogk = self::ouysiyiqiqogowwy . "\x65\156\x61\142\154\145\x5f\x6a\x73\144\145\154\x69\166\x65\x72"; const ggwcgwwicaucowgo = "\143\162\151\x74\x69\143\141\154\137"; const qwmwuwqwwaiiaqou = self::ggwcgwwicaucowgo . "\x65\170\164\x72\x61\137\x63\163\x73"; const kuqaeysqaeyocckm = self::iccwcygaeqmomooo . self::ggwcgwwicaucowgo . "\143\x73\163"; const aqywkwyscogcecei = "\x6d\x65\144\151\x61\137"; const meciimymegqueigk = self::aqywkwyscogcecei . "\154\141\x7a\x79\x5f\154\x6f\x61\144\137"; const moosyqmaqgsikgcg = self::meciimymegqueigk . "\145\156\x61\142\x6c\145"; const uwgswmisuuigoucw = self::meciimymegqueigk . "\151\155\x61\x67\x65\x73"; const ekequaesakywuioq = self::aqywkwyscogcecei . "\151\155\141\147\145\137\143\157\154\157\x72\x5f\144\157\x6d\x69\x6e\x61\x74\x6f\x72"; const semmsmiiwgwsqeqi = self::aqywkwyscogcecei . "\144\157\x6d\x69\156\x61\164\157\x72\137\144\x65\146\141\165\x6c\x74\137\x63\x6f\154\157\x72"; const gowiqmkskqiqsgsc = self::meciimymegqueigk . "\151\x66\162\141\155\x65\x5f\141\156\144\x5f\x76\x69\144\x65\157\x73"; const twykececsuscsygc = "\143\154\145\141\156\x75\x70\137"; const qoyskaoaaakosmaq = self::twykececsuscsygc . "\x61\x64\x64\x5f\x62\x6c\141\156\153\137\146\x61\166\151\143\157\156"; const yaggsqosuggmgykq = self::twykececsuscsygc . "\x73\x70\145\x63\x69\146\x79\137\x64\151\x6d\x65\156\x73\x69\157\x6e\x73"; const aysyuueaueiamysu = self::twykececsuscsygc . "\x72\145\x6d\157\166\145\x5f\150\164\164\160\x5f\x70\x72\x6f\x74\157\143\157\154"; const ookqmecseqmewmeo = self::yaggsqosuggmgykq . "\137\145\x78\164\145\x72\x6e\141\x6c\137\x69\x6d\x61\147\x65\x73"; const emeseeausaemuoeq = self::twykececsuscsygc . "\x78\x6d\154\162\x70\143"; const wkasasawguckeyuc = self::twykececsuscsygc . "\150\151\x64\145\137\167\160\x5f\x76\145\162\x73\x69\157\x6e"; const wamuucmcqykegkoc = self::twykececsuscsygc . "\x72\x73\x64\137\154\151\156\153"; const iqmqemikwcuuiyom = self::twykececsuscsygc . "\162\x65\163\x74\137\x61\x70\x69"; const sqaukikimiwcqmew = self::twykececsuscsygc . "\x73\x68\157\162\164\154\151\156\x6b"; const aaisgiycykyqiqcm = self::twykececsuscsygc . "\x77\x6c\167\137\155\x61\x6e\151\146\x65\163\164\137\x6c\x69\156\x6b"; const oeiwkesueukkqggs = self::twykececsuscsygc . "\145\155\x6f\x6a\x69\163"; const owgquqcyoseeeiqg = self::twykececsuscsygc . "\x65\x6d\142\145\x64\163"; const uwcmcaucigmuiugg = self::twykececsuscsygc . "\x64\141\163\150\151\x63\x6f\x6e\163"; const gukmqsiumkmukaoe = self::twykececsuscsygc . "\x67\165\x74\145\x6e\142\x65\x72\147\x5f\143\163\163"; const qwcseoyssyaciyqk = self::twykececsuscsygc . "\x6a\161\165\x65\x72\171\x5f\x6d\151\x67\x72\141\x74\145"; const kcgocyessaswyike = self::twykececsuscsygc . "\160\x61\163\x73\x77\157\x72\144\x5f\x73\164\162\x65\x6e\147\164\x68\x5f\155\x65\x74\145\162"; const iumuwmusouesuimw = "\x6c\x6f\141\144\137\x64\x65\154\x61\x79\x5f"; const cskegoigeecaayoi = self::iumuwmusouesuimw . "\154\x6f\141\144\x5f\x73\164\171\154\145"; const wiggegwgmkakogmg = self::cskegoigeecaayoi . "\x5f\143\144\156"; const mogckoqiygeqmiag = self::cskegoigeecaayoi . "\137\145\170\143\154\x75\x64\x65"; const okycmqykyamqaauy = self::iumuwmusouesuimw . "\x6c\157\141\x64\137\x6a\141\166\x61\x73\x63\162\151\x70\x74"; const kgcwmmmwagaccsqi = self::okycmqykyamqaauy . "\137\143\x64\x6e"; const sysesaekousoeosu = self::okycmqykyamqaauy . "\137\x65\x78\143\x6c\165\144\145"; public function aucimgwswmgaocae($ywoucyskcquysiwc = []) : array { $yuwymayicwwqiske = $this->aakmagwggmkoiiyu() . "\x5f\141\x73\163\145\164\163"; $ywoucyskcquysiwc[] = self::sgsmqaoowiyocqaa("{$yuwymayicwwqiske}\x5f\x74\x61\x62", __("\x41\x73\x73\x65\x74\163", PR__MDL__OPTIMIZATION))->sikqggwmmykuiymy($this->wseoiekkiwuiuacg($yuwymayicwwqiske))->sikqggwmmykuiymy($this->ecmoqcoyysugcqey($yuwymayicwwqiske))->sikqggwmmykuiymy($this->aiguiusgagaacige($yuwymayicwwqiske))->sikqggwmmykuiymy($this->oyookmikikgkcgas($yuwymayicwwqiske))->sikqggwmmykuiymy($this->quqkimmaaoeumckc($yuwymayicwwqiske))->sikqggwmmykuiymy($this->wywgqayqssuqewyw($yuwymayicwwqiske))->saemoowcasogykak(IconFontawesomeInterface::qymemaukeumsukku)->jyumyyugiwwiqomk(10); return parent::aucimgwswmgaocae($ywoucyskcquysiwc); } public function wseoiekkiwuiuacg($yuwymayicwwqiske) : MetaBox { return self::cgygmuguceeosoey("{$yuwymayicwwqiske}\x5f\143\x64\x6e", __("\103\x6f\156\164\x65\x6e\164\x20\x44\x65\x6c\x69\166\145\162\171\40\x4e\x65\164\167\x6f\x72\153\40\x28\x43\104\x4e\51", PR__MDL__OPTIMIZATION))->aucimgwswmgaocae(self::sgsmqaoowiyocqaa("{$yuwymayicwwqiske}\x5f\x63\x6e\x64\137\152\x73\x64\x65\154\x69\166\x65\162", __("\112\123\x44\x65\154\x69\x76\145\x72", PR__MDL__OPTIMIZATION))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::sewumqkiymkquogk, __("\105\156\x61\x62\x6c\145\40\112\123\x44\x65\x6c\x69\166\145\x72", PR__MDL__OPTIMIZATION), __("\103\x68\145\143\x6b\x20\x74\150\x69\x73\x20\x69\x74\145\155\40\164\157\40\162\x65\x70\x6c\141\143\x65\x20\162\x65\163\157\x75\x72\x63\145\163\40\x62\171\40\112\x53\x44\x65\154\151\166\145\162\x20\x63\144\x6e\56", PR__MDL__OPTIMIZATION))->yeigkegagskeaaim())->saemoowcasogykak(IconFontawesomeInterface::oykyeemoeeyooomc))->saemoowcasogykak(IconFontawesomeInterface::yemsakwkwimksusy); } public function ecmoqcoyysugcqey($yuwymayicwwqiske) { return self::cgygmuguceeosoey("{$yuwymayicwwqiske}\137\155\x65\144\x69\141", __("\x4d\145\x64\x69\141", PR__MDL__OPTIMIZATION))->aucimgwswmgaocae(self::sgsmqaoowiyocqaa("{$yuwymayicwwqiske}\137\x6d\145\144\x69\x61\137\x6c\141\172\171\154\x6f\141\144", __("\x4c\x61\x7a\171\154\x6f\141\x64", PR__MDL__OPTIMIZATION))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::moosyqmaqgsikgcg, __("\x45\156\x61\142\x6c\x65\40\114\x61\172\171\154\x6f\x61\144", PR__MDL__OPTIMIZATION))->agywyaaquwawwuiy([self::uwgswmisuuigoucw, self::gowiqmkskqiqsgsc]))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::uwgswmisuuigoucw, __("\x49\x6d\x61\x67\145\163", PR__MDL__OPTIMIZATION)))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::gowiqmkskqiqsgsc, __("\x69\x46\x72\141\x6d\145\x20\x61\x6e\x64\40\126\x69\x64\x65\157\163", PR__MDL__OPTIMIZATION)))->saemoowcasogykak(IconFontawesomeInterface::ewcsmakmqeeueqec))->aucimgwswmgaocae(self::sgsmqaoowiyocqaa("{$yuwymayicwwqiske}\x5f\x6d\145\144\x69\141\x5f\x64\157\x6d\151\x6e\x61\164\157\x72", __("\x43\x6f\154\157\x72\40\104\157\x6d\151\156\141\164\157\162", PR__MDL__OPTIMIZATION))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::ekequaesakywuioq, __("\111\x6d\141\147\145\x20\x43\157\154\x6f\162\x20\104\x6f\155\151\156\x61\x74\157\162", PR__MDL__OPTIMIZATION))->agywyaaquwawwuiy(self::semmsmiiwgwsqeqi))->mkksewyosgeumwsa(self::mwmcsiqiwkweayuw(self::semmsmiiwgwsqeqi, __("\104\x65\146\141\165\x6c\x74\x20\104\157\x6d\x69\156\141\164\157\x72\40\103\157\154\x6f\x72", PR__MDL__OPTIMIZATION))->eyygsasuqmommkua("\43\106\106\106"))->saemoowcasogykak(IconFontawesomeInterface::kuicceqcgamkcsuw))->saemoowcasogykak(IconFontawesomeInterface::wauosagckgqiqoio); } public function wywgqayqssuqewyw($yuwymayicwwqiske) : MetaBox { $mkqqqewsokcswckc = __("\103\x68\x65\143\x6b\40\x74\150\x69\x73\x20\x69\164\145\x6d\40\x69\x66\x20\171\x6f\165\x20\167\141\x6e\x74\40\155\151\x6e\151\x66\x79\x20\45\x73\x2e", PR__MDL__OPTIMIZATION); return self::cgygmuguceeosoey("{$yuwymayicwwqiske}\x5f\x6d\151\156\151\x66\x79", __("\115\x69\x6e\151\x66\x79", PR__MDL__OPTIMIZATION))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::ccoaqmuiqioqaooa, __("\105\x6e\x61\142\x6c\145\x20\115\151\156\x69\146\x79", PR__MDL__OPTIMIZATION))->agywyaaquwawwuiy([self::sikyekqowskqiqga, self::ykqawckyqkmqiamq, self::eumicecccemicqey])->ccmwycqioaicegoc(__("\x43\x68\x65\143\x6b\x20\x74\150\x69\163\x20\x69\164\x65\155\x20\164\x6f\40\x65\156\x61\x62\x6c\x65\x20\x6d\151\x6e\151\146\171\40\146\165\156\143\x74\151\x6f\x6e\141\154\x69\164\171\x2e", PR__MDL__OPTIMIZATION)))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::sikyekqowskqiqga, __("\115\x69\x6e\151\146\171\x20\110\x54\x4d\x4c", PR__MDL__OPTIMIZATION), sprintf($mkqqqewsokcswckc, "\74\143\157\144\x65\76\x48\x54\x4d\114\x3c\x2f\x63\157\144\145\76")))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::ykqawckyqkmqiamq, __("\x4d\151\156\x69\146\x79\x20\x43\x53\x53", PR__MDL__OPTIMIZATION), sprintf($mkqqqewsokcswckc, "\x3c\143\x6f\144\x65\76\103\123\x53\74\57\x63\157\144\x65\x3e")))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::eumicecccemicqey, __("\x4d\x69\x6e\151\x66\171\x20\x4a\123", PR__MDL__OPTIMIZATION), sprintf($mkqqqewsokcswckc, "\x3c\x63\x6f\144\145\76\x4a\x61\x76\x61\x53\x63\162\151\160\x74\74\57\143\157\x64\145\76")))->saemoowcasogykak(IconFontawesomeInterface::yesiuuqooeauouoq); } public function aiguiusgagaacige($yuwymayicwwqiske) : MetaBox { return self::cgygmuguceeosoey("{$yuwymayicwwqiske}\137\143\x6c\145\x61\156\165\x70", __("\x43\x6c\x65\x61\x6e\x75\x70", PR__MDL__OPTIMIZATION))->aucimgwswmgaocae(self::sgsmqaoowiyocqaa("{$yuwymayicwwqiske}\137\x63\x6c\x65\141\156\165\x70\x5f\151\x6d\141\x67\145", __("\x49\x6d\x61\x67\x65\163", PR__MDL__OPTIMIZATION))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::qoyskaoaaakosmaq, __("\101\x64\144\40\102\x6c\141\x6e\153\40\x46\x61\166\x69\143\157\x6e", PR__MDL__OPTIMIZATION), __("\101\144\144\40\141\x20\x62\154\x61\156\x6b\40\x66\x61\166\151\x63\157\x6e\40\x74\157\40\171\157\165\162\40\127\x6f\x72\144\120\162\x65\x73\163\x20\x68\x65\x61\x64\145\x72\40\x77\150\x69\x63\150\x20\167\x69\x6c\x6c\x20\x70\x72\x65\x76\145\156\164\x20\141\x20\x4d\x69\163\x73\x69\x6e\147\40\x46\141\x76\151\x63\x6f\x6e\40\x6f\162\x20\x34\x30\64\x20\145\162\162\x6f\162\56", PR__MDL__OPTIMIZATION)))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::yaggsqosuggmgykq, __("\x53\x70\145\x63\x69\146\171\40\x49\155\x61\x67\x65\x20\104\x69\155\x65\x6e\163\x69\157\x6e\163", PR__MDL__OPTIMIZATION), __("\101\144\144\x20\167\x69\x64\164\x68\x20\141\x6e\144\40\x68\145\151\x67\150\164\40\x61\164\164\x72\151\142\x75\x74\x65\x20\x74\x6f\40\x69\x6d\141\x67\145\163\40\x69\x66\x20\x6e\157\x74\40\145\170\151\163\x74\x2e", PR__MDL__OPTIMIZATION))->agywyaaquwawwuiy(self::ookqmecseqmewmeo))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::ookqmecseqmewmeo, __("\x45\170\164\x65\x72\156\141\154\40\111\155\x61\147\145\163\x20\x44\151\155\x65\x6e\x73\151\x6f\156\x73", PR__MDL__OPTIMIZATION), __("\x44\x6f\x20\x73\x70\x65\143\x69\146\171\x20\x69\155\141\147\x65\x20\x64\151\x6d\x65\156\x73\151\157\156\163\40\146\x6f\162\40\145\170\x74\x65\162\x6e\141\154\x20\x69\155\141\147\x65\163\56", PR__MDL__OPTIMIZATION)))->saemoowcasogykak(IconFontawesomeInterface::sesaeqomsuesouac))->aucimgwswmgaocae(self::sgsmqaoowiyocqaa("{$yuwymayicwwqiske}\x5f\143\154\x65\x61\156\x75\x70\x5f\152\163\137\x63\x73\163", __("\x4a\123\40\46\40\x43\123\123\40\46\x20\110\x54\115\x4c", PR__MDL__OPTIMIZATION))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::oeiwkesueukkqggs, __("\104\151\x73\x61\x62\154\x65\40\x45\155\x6f\x6a\151\163", PR__MDL__OPTIMIZATION), __("\122\145\155\157\x76\145\163\x20\127\157\162\x64\x50\x72\x65\163\x73\40\x45\155\157\152\151\x73\x20\112\141\x76\141\123\x63\162\151\160\x74\40\146\151\154\145\x2e", PR__MDL__OPTIMIZATION)))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::owgquqcyoseeeiqg, __("\104\151\x73\141\142\x6c\x65\x20\x45\155\x62\x65\144\163", PR__MDL__OPTIMIZATION), __("\122\145\155\157\x76\145\163\x20\x57\157\162\x64\x50\162\145\x73\x73\x20\105\x6d\142\145\144\40\112\x61\166\141\123\x63\x72\x69\160\164\x20\x66\x69\x6c\x65\x2e", PR__MDL__OPTIMIZATION)))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::qwcseoyssyaciyqk, __("\x52\145\155\x6f\x76\145\x20\x6a\x51\x75\x65\162\x79\40\115\151\x67\162\x61\x74\145", PR__MDL__OPTIMIZATION), __("\122\x65\155\x6f\166\x65\x73\x20\152\x51\x75\x65\162\171\40\115\x69\147\162\141\x74\x65\x20\x4a\141\166\x61\123\x63\162\x69\160\164\x20\x66\151\x6c\x65\x2e", PR__MDL__OPTIMIZATION))->ooowowweyusommmm(__("\x54\x68\x69\x73\40\x63\157\165\x6c\144\x20\x62\162\145\x61\x6b\40\x74\x68\x69\156\x67\x73\x21", PR__MDL__OPTIMIZATION), __("\124\150\x69\163\x20\x63\x6f\165\154\x64\40\x62\x72\145\x61\153\x20\x74\x68\x69\156\x67\163\x21", PR__MDL__OPTIMIZATION))->yeigkegagskeaaim())->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::uwcmcaucigmuiugg, __("\104\x69\x73\x61\x62\154\145\x20\104\141\x73\x68\x69\143\157\156\x73", PR__MDL__OPTIMIZATION), __("\104\151\163\141\x62\x6c\145\163\40\144\x61\x73\150\151\143\157\x6e\x73\40\x6f\156\40\164\x68\145\x20\x66\x72\x6f\x6e\x74\x20\145\x6e\x64\40\167\150\x65\x6e\40\156\157\164\x20\154\x6f\x67\147\x65\144\40\x69\x6e\56", PR__MDL__OPTIMIZATION)))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::gukmqsiumkmukaoe, __("\x44\151\163\141\x62\x6c\145\40\x47\x75\164\145\x6e\142\x65\162\147\40\x42\x6c\157\143\153\x20\x4c\151\142\162\141\x72\x79", PR__MDL__OPTIMIZATION), __("\104\151\163\x61\x62\x6c\145\163\40\147\165\x74\145\156\x62\x65\x72\147\x20\142\154\157\x63\x6b\40\x6c\x69\142\x72\x61\x72\x79\40\157\x6e\x20\164\150\145\x20\x66\162\x6f\156\164\40\145\156\144\40\167\x68\145\x6e\x20\x6e\x6f\164\x20\x6c\x6f\147\147\x65\144\40\151\x6e\56", PR__MDL__OPTIMIZATION)))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::kcgocyessaswyike, __("\x44\151\163\141\142\154\x65\40\x50\141\x73\x73\x77\x6f\162\x64\40\123\x74\162\145\156\x67\164\150\40\115\x65\164\145\162", PR__MDL__OPTIMIZATION), __("\122\145\155\157\x76\145\x73\x20\127\157\162\144\120\x72\145\x73\163\40\141\156\144\x20\x57\157\157\103\157\x6d\x6d\x65\162\143\x65\40\120\x61\163\163\167\x6f\x72\x64\40\123\164\x72\145\x6e\x67\164\150\x20\x4d\x65\x74\x65\162\40\x73\143\x72\x69\x70\x74\x73\x20\146\162\x6f\x6d\x20\156\157\156\x20\x65\163\163\x65\x6e\164\151\141\154\40\160\141\147\x65\x73\x2e", PR__MDL__OPTIMIZATION)))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::aysyuueaueiamysu, __("\x52\x65\x6d\x6f\166\145\40\x48\124\x54\120\40\x50\x72\x6f\x74\157\x63\x6f\x6c", PR__MDL__OPTIMIZATION), sprintf(__("\122\145\x70\x6c\141\143\145\40\45\x73\40\x77\x69\x74\x68\x20\45\x73\40\x69\x6e\x20\45\163\x20\x74\x61\x67\163\56", PR__MDL__OPTIMIZATION), "\x3c\143\157\144\x65\76\150\164\x74\x70\74\x2f\x63\157\x64\145\x3e\x7c\74\x63\x6f\x64\x65\76\x68\164\164\160\x73\74\57\x63\157\x64\145\x3e", "\x3c\143\157\x64\x65\x3e\x2f\x2f\x3c\57\143\157\144\145\76", "\74\x63\x6f\x64\145\76\x73\143\162\151\x70\164\x3c\x2f\143\157\144\145\x3e\x7c\74\143\x6f\x64\x65\x3e\x6c\x69\156\153\74\57\143\157\144\x65\x3e\x7c\74\143\x6f\144\x65\x3e\x69\x6d\x67\74\x2f\x63\x6f\144\x65\76\174\74\x63\157\144\x65\x3e\146\157\162\x6d\74\57\143\x6f\x64\x65\76")))->saemoowcasogykak(IconFontawesomeInterface::yukkwocaqagsumum))->aucimgwswmgaocae(self::sgsmqaoowiyocqaa("{$yuwymayicwwqiske}\137\143\154\x65\141\156\x75\x70\x5f\x68\x65\141\x64\137\164\x61\x67\x73", __("\x48\x65\x61\x64\40\x54\x61\147\x73", PR__MDL__OPTIMIZATION))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::emeseeausaemuoeq, __("\x44\x69\x73\x61\142\x6c\145\x20\130\x4d\x4c\55\x52\x50\103", PR__MDL__OPTIMIZATION), __("\122\x65\155\x6f\166\x65\163\x20\127\157\x72\144\120\162\145\163\163\40\130\115\x4c\x2d\x52\x50\x43\x20\146\165\156\x63\164\x69\x6f\156\x61\154\x69\x74\171\x2e", PR__MDL__OPTIMIZATION)))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::wamuucmcqykegkoc, __("\x52\145\x6d\x6f\166\145\x20\x52\x53\104\40\x4c\151\156\x6b", PR__MDL__OPTIMIZATION), __("\x52\145\x6d\157\x76\145\40\122\123\x44\40\50\x52\x65\x61\154\x20\x53\151\x6d\x70\154\145\x20\104\x69\x73\x63\x6f\166\145\x72\171\51\40\x6c\x69\156\153\40\x74\141\x67\x2e", PR__MDL__OPTIMIZATION)))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::wkasasawguckeyuc, __("\x48\151\x64\x65\x20\127\x50\40\x56\x65\x72\x73\x69\x6f\x6e", PR__MDL__OPTIMIZATION), __("\124\x68\151\x73\40\x69\x73\x20\x67\x6f\157\144\x20\x66\157\x72\40\163\x65\x63\x75\x72\x69\x74\x79\x20\160\165\x72\x70\x6f\163\145\x73\x20\141\163\40\x77\145\x6c\x6c\x2c\x20\163\151\x6e\143\145\x20\151\164\40\150\151\144\145\163\x20\164\150\145\40\x57\x6f\x72\x64\120\162\x65\x73\163\40\166\x65\162\x73\151\157\156\x20\x79\157\x75\47\x72\145\40\165\163\x69\156\147\56", PR__MDL__OPTIMIZATION)))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::aaisgiycykyqiqcm, __("\x52\145\x6d\157\166\145\40\x77\x6c\x77\x6d\141\x6e\x69\146\x65\163\x74\40\114\x69\156\x6b", PR__MDL__OPTIMIZATION), __("\111\x66\40\171\157\165\x20\x64\157\40\x6e\157\x74\x20\165\x73\145\x20\x57\x69\x6e\x64\x6f\x77\x73\x20\x4c\x69\166\145\40\x57\x72\151\x74\x65\162\x20\x74\x6f\x20\x65\x64\x69\164\x20\171\157\165\x72\40\142\x6c\157\x67\40\143\157\x6e\x74\x65\x6e\x74\x73\x2c\x20\x74\150\x65\156\40\x69\164\47\163\40\163\x61\x66\145\x20\x74\157\40\162\x65\x6d\157\166\145\40\164\x68\151\163\x2e", PR__MDL__OPTIMIZATION)))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::sqaukikimiwcqmew, __("\x52\x65\155\157\x76\x65\x20\123\x68\157\x72\164\x6c\151\x6e\x6b", PR__MDL__OPTIMIZATION), __("\101\162\145\40\x79\157\165\x20\165\163\x69\x6e\x67\40\123\105\x4f\40\x66\x72\151\145\156\x64\x6c\171\40\125\122\x4c\x73\40\x61\156\x64\40\x64\157\x20\156\x6f\164\40\156\x65\145\144\40\x74\x68\145\40\x64\x65\146\x61\x75\154\164\x20\x57\x6f\162\x64\x50\x72\x65\163\163\40\x73\x68\157\x72\x74\x6c\x69\156\153\x3f\x20\171\x6f\x75\x20\143\141\156\x20\x72\x65\155\x6f\x76\x65\40\x74\x68\x69\163\56", PR__MDL__OPTIMIZATION)))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::iqmqemikwcuuiyom, __("\x52\x65\155\x6f\166\145\x20\x52\105\123\124\x20\x41\x50\111", PR__MDL__OPTIMIZATION), __("\x41\x72\145\40\x79\x6f\165\40\x61\143\143\145\163\163\151\156\x67\40\171\x6f\x75\x72\x20\143\157\156\x74\145\x6e\x74\40\164\150\x72\x6f\165\x67\150\40\x65\x6e\144\x70\x6f\x69\156\164\x73\x3f\x20\x49\x66\x20\x6e\157\164\x2c\40\171\x6f\x75\40\x63\141\156\x20\162\145\155\x6f\x76\x65\x20\x74\x68\x69\163\x2e", PR__MDL__OPTIMIZATION)))->saemoowcasogykak(IconFontawesomeInterface::wyssocuugkyeuyqq))->saemoowcasogykak(IconFontawesomeInterface::kgsuyaquimiyogeo); } public function quqkimmaaoeumckc($yuwymayicwwqiske) : MetaBox { $uamcoiueqaamsqma = __("\124\150\x69\x73\40\x73\x65\164\x74\151\x6e\147\40\x6f\x6e\x6c\x79\40\141\160\x70\x6c\x69\x65\x73\x20\x74\x6f\40\x4c\145\166\145\x6c\40\62\x20\x70\141\x67\x65\x73\x2e", PR__MDL__OPTIMIZATION); $wksoawcgagcgoask = self::couwksyewgyeooqe(); if (!($wksoawcgagcgoask && $wksoawcgagcgoask->qcgakseyaikigqco())) { goto yyamycyesguwueuw; } $uamcoiueqaamsqma = "{$uamcoiueqaamsqma}\x20" . sprintf(__("\x41\x70\160\x6c\171\x20\164\157\x20\x62\x75\171\x20\x6f\x72\x20\x69\156\x63\162\145\x61\163\145\40\x74\150\145\40\142\x75\144\x67\x65\164\x20\164\150\x72\x6f\x75\x67\x68\x20\x74\150\145\x20\x25\x73\x2e", PR__MDL__OPTIMIZATION), ManipulateHTML::ciuuiyckmsygceis(ManipulateHTML::uuccukgasskgimsq("\x61", ["\150\162\x65\146" => $wksoawcgagcgoask->giiuwsmyumqwwiyq(self::sauwwsocmukoaayu), "\x74\x61\162\x67\x65\164" => "\x5f\x62\154\141\x6e\x6b"], $wksoawcgagcgoask->qcgakseyaikigqco()))); yyamycyesguwueuw: return self::cgygmuguceeosoey("{$yuwymayicwwqiske}\137\x63\162\x69\x74\x69\x63\141\x6c\x5f\x65\170\x74\x72\141\143\x74\x69\157\x6e", __("\x43\162\x69\164\x69\143\141\x6c\40\x45\170\x74\x72\x61\143\164\x69\157\x6e", PR__MDL__OPTIMIZATION))->aucimgwswmgaocae(self::sgsmqaoowiyocqaa("{$yuwymayicwwqiske}\137\143\162\151\164\151\143\141\x6c\137\x63\163\163", __("\x43\x72\x69\164\x69\x63\x61\154\x20\x43\x53\x53", PR__MDL__OPTIMIZATION))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::kuqaeysqaeyocckm, __("\105\156\x61\142\154\x65\40\103\162\151\x74\x69\x63\141\x6c\x20\x43\123\123", PR__MDL__OPTIMIZATION))->ooowowweyusommmm(__("\112\x75\x73\x74\x20\146\157\x72\x20\114\145\166\145\x6c\x20\x32\40\x50\x61\147\x65\163", PR__MDL__OPTIMIZATION), $uamcoiueqaamsqma, self::ecioqysekgaasegg, true)->agywyaaquwawwuiy(self::qwmwuwqwwaiiaqou))->mkksewyosgeumwsa(self::uouyygwcgsmygaee(self::qwmwuwqwwaiiaqou, __("\x45\170\x74\162\141\40\103\123\x53\40\103\157\x64\145", PR__MDL__OPTIMIZATION))->wcgckeeiiseccqkc())->saemoowcasogykak(IconFontawesomeInterface::yukkwocaqagsumum))->saemoowcasogykak(IconFontawesomeInterface::skqmaokqagyceasc); } public function oyookmikikgkcgas($yuwymayicwwqiske) : MetaBox { return self::cgygmuguceeosoey("{$yuwymayicwwqiske}\137\144\x65\x6c\141\x79\x5f\154\x6f\141\x64", __("\x44\x65\x6c\141\x79\40\114\157\x61\x64", PR__MDL__OPTIMIZATION))->aucimgwswmgaocae(self::sgsmqaoowiyocqaa("{$yuwymayicwwqiske}\x5f\144\145\x6c\141\x79\x5f\x6c\157\x61\144\137\x73\164\x79\154\145", __("\123\x74\x79\154\145\40\x28\103\x53\123\51", PR__MDL__OPTIMIZATION))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::cskegoigeecaayoi, __("\114\157\x61\144\40\123\164\171\x6c\145\40\x77\151\164\x68\x20\104\x65\154\141\171", PR__MDL__OPTIMIZATION))->ooowowweyusommmm(__("\103\x72\151\164\x69\x63\141\x6c\40\103\123\x53\x20\122\x65\161\x75\x69\162\145\41", PR__MDL__OPTIMIZATION), __("\x59\157\x75\40\x6e\x65\x65\144\40\164\x6f\x20\145\x6e\x61\x62\x6c\145\x20\x63\162\x69\x74\x69\143\141\x6c\40\x63\x73\x73\40\x74\x6f\x6f\54\40\164\x6f\x20\x67\x65\x74\40\141\40\x62\145\163\x74\x20\x72\145\x73\x75\154\164\x2e", PR__MDL__OPTIMIZATION), "\151\156\146\x6f")->agywyaaquwawwuiy([self::mogckoqiygeqmiag, self::wiggegwgmkakogmg]))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::wiggegwgmkakogmg, __("\104\145\154\x61\x79\x20\x43\x44\x4e\40\x53\164\171\x6c\145", PR__MDL__OPTIMIZATION)))->mkksewyosgeumwsa(self::uouyygwcgsmygaee(self::mogckoqiygeqmiag, __("\105\x78\x63\x6c\165\x64\x65\40\123\x74\x79\154\145", PR__MDL__OPTIMIZATION))->qsecygiycssgacqs(5)->yskkmqiusguummwa())->saemoowcasogykak(IconFontawesomeInterface::yukkwocaqagsumum))->aucimgwswmgaocae(self::sgsmqaoowiyocqaa("{$yuwymayicwwqiske}\x5f\144\x65\x6c\x61\x79\x5f\154\x6f\x61\x64\137\152\141\166\x61\163\143\x72\151\160\x74", __("\x4a\x61\166\141\163\143\x72\151\x70\164", PR__MDL__OPTIMIZATION))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::okycmqykyamqaauy, __("\x4c\x6f\x61\x64\40\112\x61\166\x61\163\x63\x72\x69\x70\164\x20\167\x69\164\x68\40\104\145\x6c\141\x79", PR__MDL__OPTIMIZATION))->yeigkegagskeaaim()->agywyaaquwawwuiy([self::sysesaekousoeosu, self::kgcwmmmwagaccsqi]))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::kgcwmmmwagaccsqi, __("\x44\145\154\x61\x79\40\x43\x44\x4e\x20\x4a\x61\166\x61\x73\143\162\x69\x70\x74", PR__MDL__OPTIMIZATION)))->mkksewyosgeumwsa(self::uouyygwcgsmygaee(self::sysesaekousoeosu, __("\x45\170\143\x6c\x75\x64\x65\40\112\x61\x76\141\163\x63\162\151\160\164", PR__MDL__OPTIMIZATION))->qsecygiycssgacqs(5)->yskkmqiusguummwa())->saemoowcasogykak(IconFontawesomeInterface::yukkwocaqagsumum)); } public function aiqeywqiyqcekgiu($qiouiwasaauyaaue, $uusmaiomayssaecw) { $ggauoeuaesiymgee = []; switch ($uusmaiomayssaecw) { case self::miaqqqiaweeausws: $ggauoeuaesiymgee = [self::eumicecccemicqey => true, self::ykqawckyqkmqiamq => true, self::sikyekqowskqiqga => true, self::ccoaqmuiqioqaooa => true, self::emeseeausaemuoeq => true, self::oeiwkesueukkqggs => true, self::owgquqcyoseeeiqg => true, self::wamuucmcqykegkoc => true, self::wkasasawguckeyuc => true, self::iqmqemikwcuuiyom => true, self::sqaukikimiwcqmew => true, self::uwgswmisuuigoucw => true, self::moosyqmaqgsikgcg => true, self::cskegoigeecaayoi => true, self::qoyskaoaaakosmaq => true, self::uwcmcaucigmuiugg => true, self::yaggsqosuggmgykq => true, self::kuqaeysqaeyocckm => true, self::sewumqkiymkquogk => true, self::aysyuueaueiamysu => true, self::wiggegwgmkakogmg => true, self::ekequaesakywuioq => true, self::okycmqykyamqaauy => true, self::gukmqsiumkmukaoe => true, self::qwcseoyssyaciyqk => true, self::qwcseoyssyaciyqk => true, self::aaisgiycykyqiqcm => true, self::kgcwmmmwagaccsqi => true, self::gowiqmkskqiqsgsc => true, self::kcgocyessaswyike => true, self::ookqmecseqmewmeo => true]; goto aymmymequcisekie; case self::okeoeeywmosegiiy: $ggauoeuaesiymgee = [self::eumicecccemicqey => false, self::ykqawckyqkmqiamq => true, self::sikyekqowskqiqga => true, self::ccoaqmuiqioqaooa => true, self::emeseeausaemuoeq => false, self::oeiwkesueukkqggs => false, self::owgquqcyoseeeiqg => false, self::wamuucmcqykegkoc => false, self::wkasasawguckeyuc => false, self::iqmqemikwcuuiyom => false, self::sqaukikimiwcqmew => false, self::uwgswmisuuigoucw => true, self::moosyqmaqgsikgcg => true, self::cskegoigeecaayoi => false, self::qoyskaoaaakosmaq => true, self::uwcmcaucigmuiugg => false, self::yaggsqosuggmgykq => false, self::kuqaeysqaeyocckm => false, self::sewumqkiymkquogk => false, self::aysyuueaueiamysu => false, self::wiggegwgmkakogmg => false, self::ekequaesakywuioq => false, self::okycmqykyamqaauy => false, self::gukmqsiumkmukaoe => false, self::qwcseoyssyaciyqk => false, self::qwcseoyssyaciyqk => false, self::aaisgiycykyqiqcm => false, self::kgcwmmmwagaccsqi => false, self::gowiqmkskqiqsgsc => true, self::kcgocyessaswyike => false, self::ookqmecseqmewmeo => false]; goto aymmymequcisekie; } gyeayeuuyiemuwuq: aymmymequcisekie: if (!$ggauoeuaesiymgee) { goto kyggwyywiycksgqq; } $qiouiwasaauyaaue = array_merge($qiouiwasaauyaaue, $ggauoeuaesiymgee); kyggwyywiycksgqq: return parent::aiqeywqiyqcekgiu($qiouiwasaauyaaue, $uusmaiomayssaecw); } }
