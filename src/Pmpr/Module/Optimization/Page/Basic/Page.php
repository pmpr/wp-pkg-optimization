<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63ffbdfd59a7a             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Page\Basic; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTaxonomy; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Common\Foundation\Page\Admin\Page as BaseClass; use Pmpr\Module\Optimization\Manipulate\Manipulate; use Pmpr\Module\Optimization\Page\Model; use WP_Post_Type; class Page extends BaseClass { public function __construct() { $wksoawcgagcgoask = self::akuociswqmoigkas(); $this->args = ["\x70\x61\x72\145\x6e\x74\x5f\163\154\x75\x67" => $wksoawcgagcgoask, "\160\x61\x67\145\x5f\x74\151\164\154\x65" => __("\x4c\x65\x76\145\x6c\40\x31\40\160\141\x67\145\x73", PR__MDL__OPTIMIZATION), "\155\x65\156\165\137\163\154\x75\147" => $this->oyqkaeooscmcweyc("\142\x61\163\x69\x63\x5f\x70\x61\147\x65"), "\x70\x6f\163\x69\x74\x69\x6f\156" => 0]; parent::__construct(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\141\x64\x6d\x69\156\137\151\x6e\151\x74", [$this, "\171\145\171\x69\147\x75\171\145\147\x6d\x6d\171\x75\163\x65\141"]); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x6f\x70\x74\137\160\162\145\x6c\157\141\144\137\x61\x6c\154\x5f\157\146\x66\154\151\x6e\x65\x5f\x75\162\x6c\163"), [$this, "\x63\x79\x6f\x73\x69\141\145\163\x67\141\x6f\x77\x65\151\155\155"]); parent::kgquecmsgcouyaya(); } public function yeyiguyegmmyusea() { if (!$this->qcsgmgoukiouuscw()) { goto gaomwagkcciesyqy; } $this->cimaucgayqyyccoc(sprintf(__("\45\x73\40\x6f\x70\164\151\155\x69\172\x61\x74\x69\157\x6e\40\x61\160\x70\154\x79\x20\141\x75\164\157\155\141\x74\x69\x63\x61\x6c\x6c\171\x20\x74\x6f\x20\x61\154\x6c\40\160\x61\147\x65\x73\40\x77\x69\164\x68\x6f\165\x74\x20\x74\x68\145\x20\156\x65\x65\144\x20\146\x6f\162\40\x61\x20\x62\x75\144\x67\x65\x74\56", PR__MDL__OPTIMIZATION), ManipulateHTML::ciuuiyckmsygceis(__("\114\x65\x76\145\x6c\40\x31", PR__MDL__OPTIMIZATION))), "\154\x65\166\145\x6c\55\61", self::smkwuwawwaqyimcq); gaomwagkcciesyqy: } public function cyosiaesgaoweimm($auwuoyyagaiegwae = []) : array { if (!($jwsqucqyaoaasykk = Model::symcgieuakksimmu())) { goto aegysmeecgcgayyw; } $sciomagaqmgggsiu = Manipulate::maykkqauyaoqmqeu(); $seyqqsmuaiegkeeq = Manipulate::iikwikykskimciuc(); $auwuoyyagaiegwae = Manipulate::imyuqaesowgauoam([self::ccyeycyyykwuymsy => $jwsqucqyaoaasykk->mqiucouukiymaswc($seyqqsmuaiegkeeq), self::kkekqeuyycwqggou => $auwuoyyagaiegwae, self::kcaoouwiygwwmiok => $jwsqucqyaoaasykk->mqiucouukiymaswc($sciomagaqmgggsiu)]); aegysmeecgcgayyw: return $auwuoyyagaiegwae; } public function suicksywcwiggasc() { $sciomagaqmgggsiu = array_reverse(Manipulate::maykkqauyaoqmqeu(self::ckmqoekmugkggeym), true); foreach ($sciomagaqmgggsiu as $useksmwkuswkwcqg) { if (!$useksmwkuswkwcqg instanceof WP_Post_Type) { goto wiysogeqqwgioyka; } $ymqmyyeuycgmigyo = ManipulatePost::yyqgaciccoiwuwyq($useksmwkuswkwcqg); $aokagokqyuysuksm = self::uouymeyqasaeckso . "\137{$ymqmyyeuycgmigyo}"; $this->aucimgwswmgaocae(Tab::ocmycskcuiawkecq($aokagokqyuysuksm, new ListTable($useksmwkuswkwcqg), $aokagokqyuysuksm, ManipulatePost::gaeyeooascowgiac($useksmwkuswkwcqg, self::NAME))); wiysogeqqwgioyka: soaccwqimeksgwiw: } suqkuqygkkgwyaie: parent::suicksywcwiggasc(); } }
