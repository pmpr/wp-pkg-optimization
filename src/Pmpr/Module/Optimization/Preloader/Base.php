<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62b8861f25a3c             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Preloader; use Exception; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTaxonomy; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateDatetime; use Pmpr\Module\Optimization\Manipulate\ManipulateFormat; abstract class Base extends Common { const oeccaaoegccisqqe = "\x70\162\145\154\157\x61\144\x5f\45\x73\x5f\163\164\x61\162\x74"; const oisqgeeswcsoqcim = "\x70\162\x65\x6c\157\x61\144\x5f\x6f\x6e\x5f\x69\x6e\163\145\x72\164\x5f\155\x65\x74\141\144\x61\x74\141"; const cusqisyimeiygwqy = "\45\163\137\160\162\145\154\x6f\141\x64\x5f\45\163\x5f\x72\x75\x6e\156\151\156\147"; protected ?string $name = null; public function aakmagwggmkoiiyu() : ?string { return $this->name; } public function __construct() { if ($this->name) { goto kwcscewawgicomok; } $this->name = strtolower(self::ugwmakayykcmcmqa()); kwcscewawgicomok: parent::__construct(); } public function wigskegsqequoeks() { $ymqmyyeuycgmigyo = $this->aakmagwggmkoiiyu(); $this->qcsmikeggeemccuu("\141\144\x6d\x69\x6e\x5f\151\x6e\151\x74", [$this, "\161\x71\155\x79\145\147\161\155\x69\x67\x63\x6d\141\x75\x67\x61"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\157\x70\x74\x5f\x70\165\x72\147\145\x5f\x61\x6c\x6c"), [$this, "\153\x73\x6b\153\151\x77\143\141\x79\163\165\x77\167\x73\167\147"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\157\160\164\137\x70\165\162\147\145\x5f\x75\x72\x6c\x73"), [$this, "\161\x71\x65\161\157\141\x73\x63\171\x63\165\145\157\x69\151\165"])->qcsmikeggeemccuu("\143\x72\145\141\164\x65\x5f\x74\x65\162\155", [$this, "\x6c\163\163\153\x6d\155\x67\163\143\153\147\x71\x77\x79\x65\x71"], 10, 3)->qcsmikeggeemccuu("\x77\x70\x5f\x69\x6e\163\x65\x72\x74\137\x70\x6f\163\164", [$this, "\x71\x79\x79\x71\x61\171\143\165\x69\155\x6d\151\x65\141\x75\x6f"], 10, 2)->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\x6f\160\164\137\141\x75\164\x6f\x5f\x70\162\145\x6c\157\141\144"), [$this, "\x65\x75\157\x71\x63\x61\153\x73\141\147\x6b\x65\145\153\165\155"], 10, 2)->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\x6f\x70\x74\x5f{$ymqmyyeuycgmigyo}\137\141\x75\164\x6f\x5f\x70\162\x65\x6c\x6f\141\144"), [$this, "\145\x75\x6f\x71\143\141\x6b\x73\141\x67\153\x65\x65\153\x75\155"], 10, 2)->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\x6f\x70\x74\137\x70\x72\x65\154\x6f\141\x64\x5f\x75\162\x6c"), [$this, "\x75\x65\x77\167\145\153\x65\x73\155\x69\167\145\157\x61\161\147"], 10, 2)->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\x6f\160\164\137{$ymqmyyeuycgmigyo}\137\x70\162\145\x6c\x6f\141\x64\137\x75\162\x6c"), [$this, "\165\x65\167\167\x65\x6b\145\163\155\151\167\145\x6f\141\161\147"], 10, 2); parent::wigskegsqequoeks(); } public function qyyqaycuimmieauo($gcqseksiskwueksc, $post) { if (!(!ManipulatePost::igawqaomowicuayw(self::oisqgeeswcsoqcim, $gcqseksiskwueksc) && ManipulatePost::ucwmcwqmqwaymkkc($post) === self::wmmucsiyiyusmssm)) { goto kikkkocywiyuyuqw; } $this->uewwekesmiweoaqg(ManipulatePost::ycqquoiyyuesegsy($post), $gcqseksiskwueksc); ManipulatePost::ksmqawcowkmegigw(self::oisqgeeswcsoqcim, $gcqseksiskwueksc); kikkkocywiyuyuqw: } public function lsskmmgsckgqwyeq($ucicuwcaawugkseg, $aioqgggsymcimwqa, $kesssewsiegssiya) { if (!ManipulateTaxonomy::cekoogweeooasayu($kesssewsiegssiya)) { goto aqeyqwuywqcmuoce; } $this->uewwekesmiweoaqg(ManipulateTerm::qmgcisuuikgmqcsu($ucicuwcaawugkseg, $kesssewsiegssiya), $ucicuwcaawugkseg); aqeyqwuywqcmuoce: } public function iaygaicgokyskgmq() : string { return sprintf(self::oeccaaoegccisqqe, $this->aakmagwggmkoiiyu()); } public function mgyqciwsceoswuoq(int $gaeqamemwmwsyukm = 0) : bool { return true; } public function euoqcaksagkeekum() { $this->iycqweieskasuimy(); } public function kskkiwcaysuwwswg() { $this->iycqweieskasuimy(); } public function qqeqoascycueoiiu($auwuoyyagaiegwae) { if (!$auwuoyyagaiegwae) { goto aymoguycgmuggcik; } $this->iycqweieskasuimy($auwuoyyagaiegwae); aymoguycgmuggcik: } public function iycqweieskasuimy($auwuoyyagaiegwae = null) { $omqquekswieeogws = $this->iaygaicgokyskgmq(); $omkysikckkcieckq = DecoratorOption::get($omqquekswieeogws, []); $omkysikckkcieckq[self::sqsuiimgeguwgmcg] = date("\131\x2d\x6d\55\x64\40\x48\x3a\x69\x3a\163", strtotime("\53\60\40\155\151\156\x75\164\145\x73")); if (!(isset($omkysikckkcieckq[self::eimuuyqioyqiqwgq]) && !$auwuoyyagaiegwae)) { goto qayiqaykkywcyisq; } unset($omkysikckkcieckq[self::eimuuyqioyqiqwgq]); qayiqaykkywcyisq: if (!($auwuoyyagaiegwae && is_array($auwuoyyagaiegwae))) { goto oaociaioauummsey; } if (!isset($omkysikckkcieckq[self::eimuuyqioyqiqwgq])) { goto akoweomooyuwamow; } $auwuoyyagaiegwae = array_merge($auwuoyyagaiegwae, $omkysikckkcieckq[self::eimuuyqioyqiqwgq]); akoweomooyuwamow: $omkysikckkcieckq[self::eimuuyqioyqiqwgq] = ManipulateArray::giwoasoewgaqiuis($auwuoyyagaiegwae); oaociaioauummsey: DecoratorOption::update($omqquekswieeogws, $omkysikckkcieckq); } public function qqmyegqmigcmauga() { $omqquekswieeogws = $this->iaygaicgokyskgmq(); $omkysikckkcieckq = DecoratorOption::get($omqquekswieeogws); $ggkaciewmeqmgckg = ManipulateArray::get($omkysikckkcieckq, self::sqsuiimgeguwgmcg); if (!($ggkaciewmeqmgckg && ManipulateDatetime::wguceomqgwouoyks($ggkaciewmeqmgckg))) { goto suscosoukqeyyqgs; } DecoratorOption::delete($omqquekswieeogws); if ($auwuoyyagaiegwae = ManipulateArray::get($omkysikckkcieckq, self::eimuuyqioyqiqwgq, [])) { goto cueuscqkicwwicei; } $this->owacqyiaemgywyuy(); goto gcecamucuogcciig; cueuscqkicwwicei: $this->sikgsmsiumsmwmsk($auwuoyyagaiegwae); gcecamucuogcciig: suscosoukqeyyqgs: } public function owacqyiaemgywyuy() { $auwuoyyagaiegwae = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\160\164\137\x70\162\145\x6c\x6f\141\144\137\x61\x6c\154\x5f\165\x72\154\163"), [], $this->aakmagwggmkoiiyu()); $auwuoyyagaiegwae = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\x70\164\x5f\x70\x72\x65\154\x6f\141\x64\137\x61\x6c\x6c\x5f{$this->aakmagwggmkoiiyu()}\x5f\165\162\x6c\x73"), $auwuoyyagaiegwae); if (!$auwuoyyagaiegwae) { goto kiewcwsykccgocuc; } $this->sikgsmsiumsmwmsk($auwuoyyagaiegwae); kiewcwsykccgocuc: } public function uewwekesmiweoaqg($eeamcawaiqocomwy, $aokagokqyuysuksm) { $this->sikgsmsiumsmwmsk([$aokagokqyuysuksm => $eeamcawaiqocomwy]); } public function sikgsmsiumsmwmsk($auwuoyyagaiegwae) { $ymqmyyeuycgmigyo = $this->aakmagwggmkoiiyu(); $auwuoyyagaiegwae = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\x70\x74\137\160\x72\145\x6c\157\141\144\137\x75\x72\154\163"), $auwuoyyagaiegwae); $auwuoyyagaiegwae = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\x70\x74\137\x70\162\x65\154\157\141\x64\137{$ymqmyyeuycgmigyo}\x5f\x75\162\154\163"), $auwuoyyagaiegwae); if (!($auwuoyyagaiegwae = ManipulateArray::giwoasoewgaqiuis($auwuoyyagaiegwae))) { goto eogomkswkaqwyycm; } $gaeqamemwmwsyukm = count($auwuoyyagaiegwae); if (!$this->mgyqciwsceoswuoq($gaeqamemwmwsyukm)) { goto iecqkqoiqimmisyw; } try { $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\160\x74\x5f\142\x65\x66\157\162\145\x5f\163\164\x61\x72\164\137\160\162\x65\154\157\x61\x64"), $auwuoyyagaiegwae); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\x70\x74\x5f\142\145\146\x6f\162\x65\137\163\x74\x61\162\x74\x5f{$ymqmyyeuycgmigyo}\137\x70\162\x65\154\x6f\141\144"), $auwuoyyagaiegwae); if (!($auwuoyyagaiegwae = $this->wiocumuiaykkiwgq($auwuoyyagaiegwae))) { goto eysuawiooiswaseq; } $this->start($auwuoyyagaiegwae); eysuawiooiswaseq: } catch (Exception $wgaoewqkwgomoaai) { } iecqkqoiqimmisyw: eogomkswkaqwyycm: } public function wiocumuiaykkiwgq(array $auwuoyyagaiegwae) : array { foreach ($auwuoyyagaiegwae as $aokagokqyuysuksm => $eeamcawaiqocomwy) { if (is_string($eeamcawaiqocomwy) && ($qsqwqsymmqeoqwcu = $this->asquciqsymgmcuci($eeamcawaiqocomwy))) { goto assoyoeukmqiucyq; } unset($auwuoyyagaiegwae[$aokagokqyuysuksm]); goto kikkkoqiumqoeiyy; assoyoeukmqiucyq: $auwuoyyagaiegwae[$aokagokqyuysuksm] = $qsqwqsymmqeoqwcu; kikkkoqiumqoeiyy: euuekiyqwkowiees: } egiauwuekseyeaeq: return $auwuoyyagaiegwae; } public function asquciqsymgmcuci(string $eeamcawaiqocomwy) : string { $kuuugksiksqcaaaa = false; $auauqswyyugocuem = $this->cmwowcwwqqesoagc($eeamcawaiqocomwy); if (!($auauqswyyugocuem && !DecoratorOption::igqksmmwesguiaae($auauqswyyugocuem))) { goto wyqueeskecameuks; } $kuuugksiksqcaaaa = DecoratorOption::gawcqwcqgwgucgya($auauqswyyugocuem, 1, MINUTE_IN_SECONDS * 3); wyqueeskecameuks: if ($kuuugksiksqcaaaa) { goto esokkakkumskkmiu; } $eeamcawaiqocomwy = ''; esokkakkumskkmiu: return $eeamcawaiqocomwy; } public function iqqgmieeqemiowuk(?string $eeamcawaiqocomwy) : bool { $auauqswyyugocuem = $this->cmwowcwwqqesoagc($eeamcawaiqocomwy); return $auauqswyyugocuem && DecoratorOption::igqksmmwesguiaae($auauqswyyugocuem); } public function ieskuycqsewokycq(?string $eeamcawaiqocomwy) { DecoratorOption::cqgekgeqacmqquas($this->cmwowcwwqqesoagc($eeamcawaiqocomwy)); } public function cmwowcwwqqesoagc(?string $eeamcawaiqocomwy) : ?string { $auauqswyyugocuem = null; if (!($mkomwsiykqigmqca = ManipulateFormat::gooqqcmsyseiaikc($eeamcawaiqocomwy, PHP_URL_PATH))) { goto msiuqseowuumiwuo; } $auauqswyyugocuem = sprintf(self::cusqisyimeiygwqy, $this->aakmagwggmkoiiyu(), $mkomwsiykqigmqca); msiuqseowuumiwuo: return $auauqswyyugocuem; } public abstract function start($auwuoyyagaiegwae); }
