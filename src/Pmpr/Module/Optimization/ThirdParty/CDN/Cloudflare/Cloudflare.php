<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             668c5b6d38ae4             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\ThirdParty\CDN\Cloudflare; class Cloudflare extends Common { public function ikcgmcycisiccyuc() { $this->guyooeyuaoocssog(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\151\156\x69\164", [$this, "\145\156\161\x75\x65\165\145"])->qcsmikeggeemccuu("\x61\144\x6d\151\x6e\x5f\151\156\151\x74", [$this, "\157\163\x69\161\x6d\155\155\153\163\161\161\x6d\163\143\155\x63"]); $this->waqewsckuayqguos(self::kgswyesggeyekgmg . "\144\x65\x76\137\x6d\x6f\x64\145\137\x63\150\141\x6e\147\x65\144", [$this, "\153\145\x67\x73\x63\x65\143\x6d\141\x67\151\145\x67\x6f\x73\x65"])->waqewsckuayqguos(self::kgswyesggeyekgmg . "\x62\x65\x66\157\162\145\137\163\164\x61\x72\164\x5f\160\x72\145\x6c\x6f\x61\x64\137\165\162\x6c\x73", [$this, "\x63\171\143\165\155\165\171\x71\141\x75\141\145\153\x6f\171\161"]); } public function kgquecmsgcouyaya() { $this->aqaqisyssqeomwom(self::kgswyesggeyekgmg . "\160\162\x65\154\157\x61\144\x5f\162\145\161\165\x65\x73\x74\x5f\141\162\147\x73", [$this, "\171\x69\141\x61\143\145\167\155\153\167\143\x77\x61\157\x77\x6b"])->aqaqisyssqeomwom(self::suyoqewagugqoeuy . self::yyicwqsqaecyqwco, [$this, "\171\x75\x73\157\157\x65\165\167\145\x6d\x6f\x71\x63\x77\x6d\x6d"], 10, 0); } public function mameiwsayuyquoeq() { Purge::symcgieuakksimmu(); Setting::symcgieuakksimmu(); Controller::symcgieuakksimmu(); } public function kegscecmagiegose($wquasmyyscuqaqom) { $goqqimcssiyagkwy = $this->uykissogmuaaocsg(); if (!(in_array($wquasmyyscuqaqom, [self::ON, self::OFF], true) && $goqqimcssiyagkwy->omimwscgequgiaue())) { goto mssaawaiaimogowg; } $yeacayasgueouoqc = $goqqimcssiyagkwy->ymkgoumkoycwwmmq(); if (!is_wp_error($yeacayasgueouoqc)) { goto yueosioyegouuwqo; } $this->oaumimwssciwumys("\103\x46\x3a\x20\x63\x61\x6e\x20\156\157\x74\40\x66\145\164\x63\x68\40\x63\x75\162\x72\x65\156\x74\40\144\145\166\40\155\157\144\145\x2c\x20{$this->gcsweumukyckmgik($yeacayasgueouoqc)}"); goto giuoqsumkimmuaya; yueosioyegouuwqo: if (!$yeacayasgueouoqc) { goto yeiicwscguyokwyu; } if ($yeacayasgueouoqc !== $wquasmyyscuqaqom) { goto qsyqcokomswykyso; } Setting::symcgieuakksimmu()->awwuyycwuuuggkqy($wquasmyyscuqaqom); goto issgmmkcgesyeoas; qsyqcokomswykyso: $csgemygcekwywekw = $this->uykissogmuaaocsg()->emukusgiakigsoms($wquasmyyscuqaqom); if (!is_wp_error($csgemygcekwywekw)) { goto iacwyogogoccmwsg; } $this->oaumimwssciwumys("\103\106\72\40\x53\157\x6d\145\164\x68\x69\x6e\x67\40\x77\x72\x6f\x6e\147\x20\x6f\x6e\40\143\x68\141\x6e\147\151\156\x67\x20\x64\x65\x76\x20\155\x6f\144\145\54\x20{$this->gcsweumukyckmgik($csgemygcekwywekw)}"); goto wqmwcuggcisqieao; iacwyogogoccmwsg: Setting::symcgieuakksimmu()->awwuyycwuuuggkqy($wquasmyyscuqaqom); $this->oaumimwssciwumys("\x43\x46\72\x20\x44\145\x76\x20\115\x6f\144\145\x20\143\150\x61\156\x67\145\x64\40\x73\x75\x63\x63\145\163\163\x66\x75\x6c\x6c\171\56"); wqmwcuggcisqieao: issgmmkcgesyeoas: yeiicwscguyokwyu: giuoqsumkimmuaya: mssaawaiaimogowg: } public function yiaacewmkwcwaowk($ywmkwiwkosakssii) { if (!($aecgggeoymywyumm = $this->weysguygiseoukqw(Setting::emausmuaoecugeeg))) { goto umamqqwcoewcigew; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $ymqmyyeuycgmigyo = $gkyciwoiiisgywcs->get($aecgggeoymywyumm, "\116\141\155\x65"); $eqgoocgaqwqcimie = $gkyciwoiiisgywcs->get($aecgggeoymywyumm, "\x56\x61\x6c\165\x65"); if (!($ymqmyyeuycgmigyo && $eqgoocgaqwqcimie)) { goto ccyiggckemwgooco; } $ywmkwiwkosakssii[self::gmosckicggqkicim]["\x43\x6f\x6f\153\x69\145"] = "{$ymqmyyeuycgmigyo}\75{$eqgoocgaqwqcimie}"; ccyiggckemwgooco: umamqqwcoewcigew: return $ywmkwiwkosakssii; } public function cycumuyqauaekoyq() { if (!($aecgggeoymywyumm = $this->uykissogmuaaocsg()->mgmmiqgyemaeicim()->yuyomsisoyaokqgu())) { goto swkeiggkawwgewuw; } $this->uykissogmuaaocsg()->ewqscwwmugoqwomg(Setting::emausmuaoecugeeg, $aecgggeoymywyumm); swkeiggkawwgewuw: } public function osiqmmmksqqmscmc() { if (!$this->kmuweyayaqoeqiyw()->qcsgmgoukiouuscw()) { goto wmycwscioqackeig; } $goqqimcssiyagkwy = $this->uykissogmuaaocsg(); $wewwcsywcagywaay = $goqqimcssiyagkwy->omimwscgequgiaue(); if ($wewwcsywcagywaay && !is_wp_error($wewwcsywcagywaay)) { goto usmagcaocwiugqum; } $this->cimaucgayqyyccoc(sprintf(__("\120\x6c\145\141\x73\145\40\x63\157\x6d\x70\x6c\x65\x74\x65\x20\x63\x6c\x6f\x75\144\x66\x6c\x61\x72\x65\x20\x74\x61\142\40\x69\x6e\146\x6f\162\155\141\x74\x69\x6f\156\x3a\x20\x25\x73", PR__MDL__OPTIMIZATION), $this->gcsweumukyckmgik($wewwcsywcagywaay)), self::suyoqewagugqoeuy . "\143\x6f\156\146\151\x67\x75\162\x61\x74\x69\157\x6e"); goto sikmqkecsiyciaei; usmagcaocwiugqum: if ($this->weysguygiseoukqw(Setting::iqksqseqeqmaukkk)) { goto yywwaaiicukuwcao; } $eggwswqquakgowom = $goqqimcssiyagkwy->iqokecwcgkaookuc(); if (is_wp_error($eggwswqquakgowom)) { goto aacaoywsaqscgyua; } if (!is_array($eggwswqquakgowom)) { goto oaskqsoyesmmeaew; } $this->kmuweyayaqoeqiyw()->qioweyiqewmsocem(Setting::iyamemcoiwsucioi, $eggwswqquakgowom); $this->uiagwusgwcassqua("\x43\154\x6f\x75\x64\146\x6c\141\x72\x65\40\172\157\156\x65\x20\x69\x64\x73\40\x66\145\164\143\150\145\x64\x20\163\x75\x63\x63\145\163\163\x66\x75\x6c\x6c\171\56", $eggwswqquakgowom); if (!($kkuqeemoawuaqiwu = Setting::symcgieuakksimmu()->uiwouioqckimcqsq($eggwswqquakgowom))) { goto kuimgwmkcgcoecko; } $qmykgskisgoyymoc = $goqqimcssiyagkwy->qmykgskisgoyymoc(); if (!is_wp_error($qmykgskisgoyymoc)) { goto gaiaucesmcqgqwac; } $this->kmuweyayaqoeqiyw()->qioweyiqewmsocem(Setting::iqksqseqeqmaukkk, $kkuqeemoawuaqiwu); gaiaucesmcqgqwac: kuimgwmkcgcoecko: oaskqsoyesmmeaew: goto miigqygoawqmkkqm; aacaoywsaqscgyua: $this->cimaucgayqyyccoc(sprintf(__("\x43\141\x6e\40\x6e\157\164\x20\x67\145\x74\x20\x63\154\157\x75\x64\146\x6c\141\x72\145\40\x7a\x6f\156\x65\163\40\154\x69\x73\x74\72\40\45\x73", PR__MDL__OPTIMIZATION), $this->gcsweumukyckmgik($eggwswqquakgowom)), self::suyoqewagugqoeuy . "\x67\x65\x74\137\x7a\157\x6e\145\x5f\154\151\163\x74", self::imkacwmiuiykyuim); miigqygoawqmkkqm: yywwaaiicukuwcao: $ykquycoiqesuckco = Setting::symcgieuakksimmu(); if ($ykquycoiqesuckco->yoaiuuuwwssswyqa()) { goto wmcucyuieqgqisis; } $wquasmyyscuqaqom = $goqqimcssiyagkwy->ymkgoumkoycwwmmq(); if ($wquasmyyscuqaqom && !is_wp_error($wquasmyyscuqaqom)) { goto ywqouwqomiqwoquu; } $iswcokucwmiosiaq = $this->gcsweumukyckmgik($wquasmyyscuqaqom); if (!is_wp_error($wquasmyyscuqaqom)) { goto eykiuqsamowqykam; } $this->cimaucgayqyyccoc(sprintf(__("\x43\141\x6e\x20\x6e\x6f\164\x20\x67\x65\164\40\x63\154\157\165\x64\146\x6c\141\162\x65\40\x64\x65\x76\145\154\157\160\x6d\145\x6e\164\x20\x6d\157\x64\x65\x3a\40\45\x73", PR__MDL__OPTIMIZATION), $this->gcsweumukyckmgik($iswcokucwmiosiaq)), self::suyoqewagugqoeuy . "\x67\x65\164\137\x64\145\166\137\x6d\x6f\x64\145", self::imkacwmiuiykyuim); eykiuqsamowqykam: $this->oaumimwssciwumys("\x43\x61\x6e\x20\156\x6f\164\x20\147\145\164\40\x64\x65\x76\145\x6c\157\x70\155\x65\156\164\x20\155\157\x64\x65\40\x64\141\x74\x61\x2e\40{$iswcokucwmiosiaq}"); goto qcwkymcgqacaaywc; ywqouwqomiqwoquu: $ykquycoiqesuckco->awwuyycwuuuggkqy($wquasmyyscuqaqom); qcwkymcgqacaaywc: wmcucyuieqgqisis: if (!(!$this->yusooeuwemoqcwmm() || !$goqqimcssiyagkwy->ammwuioucccacgwc())) { goto yyyyawaqcowsgqcs; } $qmykgskisgoyymoc = $goqqimcssiyagkwy->qmykgskisgoyymoc(); if (!is_wp_error($qmykgskisgoyymoc)) { goto qwsmiaegmcwuskwi; } $this->cimaucgayqyyccoc($this->gcsweumukyckmgik($qmykgskisgoyymoc), self::suyoqewagugqoeuy . "\145\x6e\x61\142\x6c\x65\137\x70\141\x67\x65\137\143\141\x63\150\145", self::imkacwmiuiykyuim); qwsmiaegmcwuskwi: yyyyawaqcowsgqcs: sikmqkecsiyciaei: wmycwscioqackeig: } public function enqueue() { $seiwgiesegcmssam = $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->ksgkoukcicwkkaum(); $eygsasmqycagyayw = $this->miocmcoykayoyyau(); if (!$seiwgiesegcmssam) { goto wammkmaqucqagqww; } $wcyykoegqiuckcku = $eygsasmqycagyayw->owygwqwawqoiusis("\142\165\x73\x74\x65\162")->awagieqcmmwkgwgs($eygsasmqycagyayw->souwykwwmyygqyqi("\x62\x75\163\164\x65\x72\x2e\x6a\x73"))->yiuoscqaekcgiyuy("\144\x61\164\141\x2d\143\x66\x61\x73\x79\156\143", 1); $eygsasmqycagyayw->oeoquuwkoywiuesy($wcyykoegqiuckcku)->ayeieigcckcmsikq($wcyykoegqiuckcku); wammkmaqucqagqww: if ($this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg()) { goto iuooqassskiyeemo; } $eygsasmqycagyayw->ieayqiyiuuguowyq("\x63\x6c\x6f\165\x64\146\x6c\x61\x72\145", ["\142\165\163\164\x65\x72" => self::kakkwkmmmaykeoeq, "\x73\145\154\145\143\164\157\162" => "\x61"]); goto cquyuwsisgqscemm; iuooqassskiyeemo: $eygsasmqycagyayw->ikqyiskqaaymscgw("\143\154\157\165\144\146\154\x61\x72\x65", ["\x61\152\141\x78" => Ajax::myikkigscysoykgy, "\x73\145\154\x65\x63\164\x6f\162" => implode("\x2c\x20", ["\x23\145\x64\x69\x74\x6f\x72\40\x2e\x65\x64\x69\164\157\162\55\x70\x6f\163\164\55\160\145\162\155\x61\x6c\151\156\x6b\137\x5f\x6c\x69\156\x6b", "\43\x77\x70\x2d\141\144\155\151\x6e\x2d\142\x61\x72\x2d\x6d\x79\x2d\163\x69\x74\145\163\x2d\154\151\163\164\x20\x61", "\43\145\144\151\164\x6f\162\40\x2e\x65\144\151\x74\157\162\x2d\x70\x6f\x73\x74\55\160\162\145\x76\151\x65\167", "\43\x77\x70\55\141\144\x6d\x69\x6e\55\142\141\x72\55\163\151\164\x65\x2d\x6e\x61\x6d\145\40\141", "\x23\167\x70\55\x61\x64\155\x69\x6e\x2d\x62\x61\x72\55\x76\x69\145\x77\x2d\x73\x69\x74\145\x20\x61", "\43\163\x61\155\160\x6c\145\x2d\160\x65\x72\155\x61\x6c\151\156\153\x20\x61", "\x23\x77\160\55\141\144\155\151\156\x2d\142\141\162\55\x76\151\145\x77\40\x61", "\43\x65\144\151\164\x6f\162\40\x2e\151\x73\55\x6c\x69\156\x6b", "\56\x72\x6f\167\55\x61\x63\164\x69\x6f\x6e\163\x20\141", "\x23\155\x65\163\x73\x61\147\145\40\x61", "\56\160\x72\145\166\x69\145\167"]), "\x62\x75\163\x74\x65\162" => self::kakkwkmmmaykeoeq, "\x70\165\162\147\145\137\160\x6f\163\x74\137\143\141\143\150\x65" => ["\164\x69\x74\x6c\x65" => __("\x50\x75\x72\147\145\40\120\x6f\163\164\40\103\x61\x63\x68\145", PR__MDL__OPTIMIZATION)]]); cquyuwsisgqscemm: } public function goewgasukwccacim() { $eeamcawaiqocomwy = $this->caokeucsksukesyo()->gyecsegqciqykomu()->mkcmkkskeeaskowy(untrailingslashit($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->ieokeoyugcmwuumq())); preg_match("\x23\x5b\136\56\135\52\134\56\133\x5e\56\x5d\x7b\x32\54\x33\x7d\50\77\72\134\56\133\x5e\x2e\x5d\173\x32\54\63\x7d\51\77\x24\43", $eeamcawaiqocomwy, $meyiiwcswqmuggyg); return $meyiiwcswqmuggyg[0] ?? ''; } public function guyooeyuaoocssog() { if (!($this->wsaocqmcggmqiskw() && !$this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->wymyeyweagqomiim())) { goto imykswegcuekqwio; } $_SERVER["\110\x54\x54\120\123"] = self::ON; imykswegcuekqwio: } private function wsaocqmcggmqiskw() : bool { $aaqqeciegmgusoye = false; $mqkcyikamyyaqicq = ["\110\x54\x54\x50\137\103\106\x5f\x56\111\x53\x49\x54\117\x52", "\x48\x54\124\x50\137\130\137\x46\x4f\122\127\101\x52\104\105\104\137\120\x52\117\124\117"]; foreach ($mqkcyikamyyaqicq as $kwsemgmaugsiusqg) { if (!(isset($_SERVER[$kwsemgmaugsiusqg]) && strpos($_SERVER[$kwsemgmaugsiusqg], "\150\164\x74\x70\x73") !== false)) { goto mqaamqyoywyekiko; } $aaqqeciegmgusoye = true; goto eokikuciuqkyauum; mqaamqyoywyekiko: ykuqeyogsasokqis: } eokikuciuqkyauum: return $aaqqeciegmgusoye; } }
