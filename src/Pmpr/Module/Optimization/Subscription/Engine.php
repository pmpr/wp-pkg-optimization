<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66697656b7da9             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Subscription; use Pmpr\Common\Foundation\ORM\View\Index; use Pmpr\Module\Optimization\PageManager\Model\Run\Remote; class Engine extends Common { public function aackauiyyagmeqso() : array { return (array) $this->weysguygiseoukqw(self::eeyiwgsusysqessu, []); } public function qcgwasumiaaemeei() : array { return (array) $this->weysguygiseoukqw(self::eoigaocgcaekssuw, []); } public function ksykuaykyyuqgswg() : array { return (array) $this->weysguygiseoukqw(self::moamckowewogygog, []); } public function sqamsikemwwsuwey() : array { return (array) $this->weysguygiseoukqw(self::uysmymaeucegyiyw, []); } public function acgeiccowcqiwmqa() { $icwicymcioeyeyek = API::symcgieuakksimmu()->msyoakwyskammgqi(); if (!(is_array($icwicymcioeyeyek) && $icwicymcioeyeyek)) { goto sciwggaeogcoesiu; } $yygmoeguaqyumuui = [self::eeyiwgsusysqessu, self::moamckowewogygog, self::uysmymaeucegyiyw, self::eoigaocgcaekssuw]; if (!($ykquycoiqesuckco = $this->kmuweyayaqoeqiyw())) { goto mkwskuycuyguqqok; } foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { if (!empty($icwicymcioeyeyek[$uusmaiomayssaecw])) { goto cuykwgmswkskqkyi; } if (!(self::eeyiwgsusysqessu === $uusmaiomayssaecw)) { goto csscmcacoikwsecs; } $ykquycoiqesuckco->qioweyiqewmsocem($uusmaiomayssaecw, ''); csscmcacoikwsecs: goto kuicqywysciceggs; cuykwgmswkskqkyi: if (!(self::eoigaocgcaekssuw === $uusmaiomayssaecw)) { goto asmecuqiyyswueqe; } $kekgkgqeyesmkywu = $icwicymcioeyeyek[self::eeyiwgsusysqessu] ?? []; if ($kekgkgqeyesmkywu) { goto qwigomakwmyiwkgo; } $this->oaumimwssciwumys("\160\x6c\x61\x6e\163\x20\x69\163\40\145\155\160\x74\171\56"); goto qiaqsassksqiuyae; goto myoicgcuugciueis; qwigomakwmyiwkgo: $guacamgosccsckmq = $kekgkgqeyesmkywu[$icwicymcioeyeyek[$uusmaiomayssaecw]["\x70\x6c\x61\x6e\x5f\151\144"] ?? ''] ?? null; if ($guacamgosccsckmq) { goto qogqewiwmwiwskgm; } $this->oaumimwssciwumys("\146\x65\164\x63\150\x65\144\x20\x73\165\142\163\143\162\151\x70\x74\x69\x6f\x6e\40\160\x6c\x61\156\x20\x6e\157\164\x20\x66\x6f\165\x6e\x64\x2e"); goto qiaqsassksqiuyae; goto qgoiooayqmqqsiok; qogqewiwmwiwskgm: $icwicymcioeyeyek[$uusmaiomayssaecw][self::uswkskaqiieoyacg] = $guacamgosccsckmq; qgoiooayqmqqsiok: myoicgcuugciueis: asmecuqiyyswueqe: $ykquycoiqesuckco->qioweyiqewmsocem($uusmaiomayssaecw, $icwicymcioeyeyek[$uusmaiomayssaecw]); kuicqywysciceggs: qiaqsassksqiuyae: } cecuyayqoioasumi: mkwskuycuyguqqok: sciwggaeogcoesiu: return $icwicymcioeyeyek; } public function samoqkkuimogeyew() : array { $yeyequgieweqoume = $this->sqamsikemwwsuwey(); $umwagewoweuckiso = $this->qcgwasumiaaemeei(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if (!(!$yeyequgieweqoume || !$umwagewoweuckiso)) { goto kwagwqyusyiyoaqs; } $icwicymcioeyeyek = $this->acgeiccowcqiwmqa(); if (!($icwicymcioeyeyek && !is_wp_error($icwicymcioeyeyek))) { goto eqkauqciwewmgeoi; } $yeyequgieweqoume = $gkyciwoiiisgywcs->get($icwicymcioeyeyek, self::uysmymaeucegyiyw); $umwagewoweuckiso = $gkyciwoiiisgywcs->get($icwicymcioeyeyek, self::eoigaocgcaekssuw); eqkauqciwewmgeoi: kwagwqyusyiyoaqs: $eymaoksggoskuikg = __("\125\156\153\156\157\x77\156", PR__MDL__OPTIMIZATION); $momcqeuuwwsaagyc = __("\45\163\40\x63\x6f\x69\156\163", PR__MDL__OPTIMIZATION); $guacamgosccsckmq = $gkyciwoiiisgywcs->get($umwagewoweuckiso, self::uswkskaqiieoyacg, []); $ymyueyaumiqiuaqa = $this->caokeucsksukesyo()->sgqicqeoumwmsmyw()->omyucuigmqgqmwio($gkyciwoiiisgywcs->get($umwagewoweuckiso, self::icymuyeowqaciyyu)); $aaukiieceuscwkss = _n("\x25\x73\40\x44\x61\171", "\x25\x73\x20\104\141\x79\163", $ymyueyaumiqiuaqa, PR__MDL__OPTIMIZATION); $gkeiousaoygaimia = [self::eoigaocgcaekssuw => [self::qescuiwgsyuikume => __("\123\x75\142\x73\x63\162\151\x70\x74\151\x6f\x6e\40\x50\154\x61\x6e", PR__MDL__OPTIMIZATION), self::qwumqqyuasyskkkc => ["\160\154\141\156" => [self::qescuiwgsyuikume => __("\x53\165\x62\x73\x63\162\x69\160\x74\x69\x6f\156\x20\x50\x6c\x61\x6e", PR__MDL__OPTIMIZATION), self::ciyoccqkiamemcmm => $gkyciwoiiisgywcs->get($guacamgosccsckmq, self::qescuiwgsyuikume, $eymaoksggoskuikg)], "\x70\x65\162\x69\157\x64" => [self::qescuiwgsyuikume => __("\x50\x6c\141\x6e\x20\x50\x65\x72\151\x6f\144", PR__MDL__OPTIMIZATION), self::ciyoccqkiamemcmm => $gkyciwoiiisgywcs->get($guacamgosccsckmq, "\160\145\x72\151\x6f\x64", $eymaoksggoskuikg)], "\162\145\155\141\x69\x6e\x5f\x64\141\x79" => [self::qescuiwgsyuikume => __("\122\x65\x6d\x61\x69\156\x69\x6e\147\40\124\151\155\145", PR__MDL__OPTIMIZATION), self::ciyoccqkiamemcmm => sprintf($aaukiieceuscwkss, $this->msywmyaoqmaegsuy($ymyueyaumiqiuaqa))], "\143\157\x69\x6e\x73" => [self::qescuiwgsyuikume => __("\103\157\x75\x6e\164\40\157\x66\x20\111\x6e\x69\164\151\x61\154\x20\103\157\x69\156\x73", PR__MDL__OPTIMIZATION), self::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->msywmyaoqmaegsuy(10))], "\165\x73\145\144\137\x63\x6f\151\156\163" => [self::qescuiwgsyuikume => __("\x55\163\x65\x64\x20\103\x6f\x69\x6e\x73", PR__MDL__OPTIMIZATION), self::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->msywmyaoqmaegsuy(0))], "\162\x65\155\141\151\x6e\x5f\143\157\151\156\163" => [self::qescuiwgsyuikume => __("\x52\145\155\141\x69\x6e\40\103\157\151\156\163", PR__MDL__OPTIMIZATION), self::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->msywmyaoqmaegsuy(0))]]], self::uysmymaeucegyiyw => [self::qescuiwgsyuikume => __("\105\x78\164\162\x61\x20\x43\x6f\x69\156", PR__MDL__OPTIMIZATION), self::qwumqqyuasyskkkc => ["\x6c\141\164\145\163\164\137\160\x75\x72\x63\x68\141\163\x65\137\x63\157\x75\x6e\x74" => [self::qescuiwgsyuikume => __("\x4c\x61\164\145\163\x74\40\x50\x75\162\143\x68\x61\x73\145\x20\103\x6f\x75\x6e\164", PR__MDL__OPTIMIZATION), self::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->msywmyaoqmaegsuy(50))], "\x6c\141\164\x65\x73\x74\x5f\x70\165\162\x63\x68\141\x73\x65\x5f\144\141\x74\x65" => [self::qescuiwgsyuikume => __("\114\x61\x74\145\163\x74\40\120\165\x72\x63\150\141\163\x65\40\x44\x61\x74\x65", PR__MDL__OPTIMIZATION), self::ciyoccqkiamemcmm => $this->eciukqcoqmyacwow(date("\156\157\167"))], "\145\x78\x70\151\162\x61\x74\x69\x6f\x6e" => [self::qescuiwgsyuikume => __("\x45\170\160\151\162\x65\x20\104\x61\164\145", PR__MDL__OPTIMIZATION), self::ciyoccqkiamemcmm => __("\127\x69\x74\x68\x6f\x75\x74\x20\x65\170\160\x69\x72\x65\40\144\141\164\x65", PR__MDL__OPTIMIZATION)], "\x63\x6f\x69\x6e\163\x5f\143\x6f\x75\x6e\x74" => [self::qescuiwgsyuikume => __("\x41\154\x6c\x20\103\x6f\x69\x6e\163\40\x43\x6f\x75\156\164", PR__MDL__OPTIMIZATION), self::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->msywmyaoqmaegsuy(100))], "\165\163\x65\x64\137\143\x6f\x69\156\x73" => [self::qescuiwgsyuikume => __("\125\x73\x65\144\x20\103\x6f\x69\156\163", PR__MDL__OPTIMIZATION), self::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->msywmyaoqmaegsuy(0))], "\x72\x65\x6d\141\151\x6e\x5f\x63\157\x69\x6e\x73" => [self::qescuiwgsyuikume => __("\x52\x65\x6d\x61\151\x6e\40\103\x6f\x69\x6e\163", PR__MDL__OPTIMIZATION), self::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->msywmyaoqmaegsuy(0))]]]]; $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); foreach ($gkeiousaoygaimia as $uusmaiomayssaecw => $keymuysuaseeokmy) { $gkeiousaoygaimia[$uusmaiomayssaecw][self::ugsuecoyuqcamsac] = $swqimwqeweekeusq->kuumcaywkqiasisk($keymuysuaseeokmy[self::qwumqqyuasyskkkc], ["\x74\141\142\154\x65\x5f\141\x74\x74\162\x73" => ["\143\154\141\163\163" => "\155\142\x2d\60\x20\x74\141\142\x6c\x65\x20\164\x61\142\154\145\55\x62\x6f\x72\144\x65\x72\x6c\145\163\163"], "\x74\144\137\141\164\164\162\163" => ["\x63\x6c\x61\x73\x73" => "\160\170\55\60\x20\x70\171\x2d\62"], "\154\x61\163\164\137\x74\144\137\141\x74\164\x72\163" => ["\x63\x6c\x61\163\x73" => "\x70\x78\55\x30\40\x70\x79\55\62\40\146\157\x6e\164\x2d\167\145\151\x67\150\164\x2d\142\x6f\154\x64\x20\164\145\170\164\55\x72\151\147\150\164"]]); kiqogmwcgcamwiig: } yowsmsiyimmimemc: return $gkeiousaoygaimia; } public function aaasykywsggkskse(bool $scsaeueqgyymsyei = false) : string { $qookweymeqawmcwo = []; return $this->iuygowkemiiwqmiw("\162\x65\160\x6f\162\x74\57\x70\x75\x72\x63\x68\141\x73\x65", $qookweymeqawmcwo); } public function aksiycwcekcecuec(bool $scsaeueqgyymsyei = false) : string { $wqgwesyciiqcoocs = ''; $gikeqowakccckkqe = Remote::symcgieuakksimmu()->cgswceaawqgeskua(self::weiosaewqequuyuq); if (!$gikeqowakccckkqe instanceof Index) { goto sqiciiuwmykocycc; } $wqgwesyciiqcoocs = $gikeqowakccckkqe->ekysoioumkkwawwm([], $scsaeueqgyymsyei); if (!$scsaeueqgyymsyei) { goto iomcaiwewsawiamu; } $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $wqgwesyciiqcoocs .= $swqimwqeweekeusq->yuawgssgauywkiia(__("\x56\151\x65\167\40\x74\150\x65\40\106\165\x6c\154\x20\x52\x65\x70\157\x72\x74", PR__MDL__OPTIMIZATION), $gikeqowakccckkqe->qmgcisuuikgmqcsu(), ["\143\154\x61\x73\x73" => "\x70\162\55\142\x74\156\40\142\164\156\55\x70\162\x69\155\x61\x72\x79\x20\x62\164\x6e\x2d\x61\143\164\x69\157\x6e"]); iomcaiwewsawiamu: sqiciiuwmykocycc: $qookweymeqawmcwo = ["\154\x69\x73\164\137\150\x74\x6d\154" => $wqgwesyciiqcoocs]; return $this->iuygowkemiiwqmiw("\x72\145\x70\x6f\x72\x74\x2f\165\x73\x61\147\x65", $qookweymeqawmcwo); } }
