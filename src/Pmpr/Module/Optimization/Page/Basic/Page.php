<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             65195c0b0f495             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Page\Basic; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTaxonomy; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Common\Foundation\Page\Admin\Page as BaseClass; use Pmpr\Module\Optimization\Manipulate\Manipulate; use Pmpr\Module\Optimization\Page\Model; use WP_Post_Type; class Page extends BaseClass { public function __construct() { $wksoawcgagcgoask = self::akuociswqmoigkas(); $this->args = ["\x70\x61\162\145\x6e\164\137\x73\154\x75\147" => $wksoawcgagcgoask, "\160\141\147\145\x5f\164\x69\164\154\x65" => __("\114\145\x76\x65\x6c\x20\61\40\x70\x61\x67\145\163", PR__MDL__OPTIMIZATION), "\155\145\156\165\x5f\163\x6c\165\147" => $this->oyqkaeooscmcweyc("\x62\x61\x73\151\x63\x5f\160\x61\147\x65"), "\x70\x6f\163\x69\164\151\x6f\x6e" => 0]; parent::__construct(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\141\x64\155\x69\x6e\137\x69\156\x69\164", [$this, "\x79\x65\x79\151\x67\165\171\145\x67\155\x6d\x79\165\163\145\141"]); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x6f\160\x74\137\160\162\145\154\x6f\141\x64\x5f\141\154\154\137\157\x66\146\x6c\151\156\x65\137\165\x72\154\x73"), [$this, "\143\171\157\163\151\141\145\x73\x67\x61\x6f\x77\x65\151\x6d\155"]); parent::kgquecmsgcouyaya(); } public function yeyiguyegmmyusea() { if (!$this->qcsgmgoukiouuscw()) { goto kocaieyauyiqmyiy; } $this->cimaucgayqyyccoc(sprintf(__("\x25\x73\40\157\160\x74\151\x6d\x69\x7a\141\164\x69\157\156\40\x61\x70\160\x6c\x79\40\141\x75\x74\157\155\141\x74\151\x63\x61\154\x6c\171\x20\164\157\x20\141\x6c\x6c\x20\x70\141\x67\x65\x73\x20\167\151\x74\x68\157\165\164\40\x74\150\145\40\156\145\145\x64\x20\x66\x6f\x72\40\x61\40\142\x75\x64\x67\x65\164\x2e", PR__MDL__OPTIMIZATION), ManipulateHTML::ciuuiyckmsygceis(__("\114\145\x76\145\x6c\x20\61", PR__MDL__OPTIMIZATION))), "\x6c\x65\x76\145\x6c\x2d\61", self::smkwuwawwaqyimcq); kocaieyauyiqmyiy: } public function cyosiaesgaoweimm($auwuoyyagaiegwae = []) : array { if (!($jwsqucqyaoaasykk = Model::symcgieuakksimmu())) { goto gcqssckowmywoesw; } $sciomagaqmgggsiu = Manipulate::maykkqauyaoqmqeu(); $seyqqsmuaiegkeeq = Manipulate::iikwikykskimciuc(); $auwuoyyagaiegwae = Manipulate::imyuqaesowgauoam([self::ccyeycyyykwuymsy => $jwsqucqyaoaasykk->mqiucouukiymaswc($seyqqsmuaiegkeeq), self::kkekqeuyycwqggou => $auwuoyyagaiegwae, self::kcaoouwiygwwmiok => $jwsqucqyaoaasykk->mqiucouukiymaswc($sciomagaqmgggsiu)]); gcqssckowmywoesw: return $auwuoyyagaiegwae; } public function suicksywcwiggasc() { $sciomagaqmgggsiu = array_reverse(Manipulate::maykkqauyaoqmqeu(self::ckmqoekmugkggeym), true); foreach ($sciomagaqmgggsiu as $useksmwkuswkwcqg) { if (!$useksmwkuswkwcqg instanceof WP_Post_Type) { goto igmawmwssyskqqag; } $ymqmyyeuycgmigyo = ManipulatePost::yyqgaciccoiwuwyq($useksmwkuswkwcqg); $aokagokqyuysuksm = self::uouymeyqasaeckso . "\137{$ymqmyyeuycgmigyo}"; $this->aucimgwswmgaocae(Tab::ocmycskcuiawkecq($aokagokqyuysuksm, new ListTable($useksmwkuswkwcqg), $aokagokqyuysuksm, ManipulatePost::gaeyeooascowgiac($useksmwkuswkwcqg, self::NAME))); igmawmwssyskqqag: cuayqmasemsqsume: } eekkcooqswqouoei: parent::suicksywcwiggasc(); } }
