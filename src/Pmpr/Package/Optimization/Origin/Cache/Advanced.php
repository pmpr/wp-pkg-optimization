<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c623ad3a21f             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Origin\Cache; use Pmpr\Common\Foundation\Container\Container; use Pmpr\Common\Foundation\Container\Storage; use Pmpr\Common\Foundation\Container\Traits\SingletonTrait; use Pmpr\Common\Foundation\Decorator\Decorator; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Common\Foundation\Filesystem; use Pmpr\Common\Foundation\Foundation; use Pmpr\Common\Foundation\Interfaces\ConstantInterface; use Pmpr\Common\Foundation\Logger\Engine; use Pmpr\Common\Foundation\Logger\Traits\LogTrait; use Pmpr\Common\Foundation\Manipulate\ManipulateAjax; use Pmpr\Common\Foundation\Manipulate\ManipulateHook; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\ManipulateValidation; use Pmpr\Common\Foundation\Manipulate\Type\Common as BaseManipulateType; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat as BaseManipulateFormat; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString; use Pmpr\Common\Foundation\Template\Traits\TemplateTrait; use Pmpr\Common\Foundation\Traits\AjaxTrait; use Pmpr\Common\Foundation\Traits\ComponentTrait; use Pmpr\Common\Foundation\Traits\HookTrait; use Pmpr\Common\Foundation\Traits\SettingTrait; use Pmpr\Common\Foundation\Traits\TranslateTrait; use Pmpr\Package\Optimization\Buffer\Config; use Pmpr\Package\Optimization\Buffer\Test; use Pmpr\Package\Optimization\Manipulate\Manipulate; use Pmpr\Package\Optimization\Manipulate\ManipulateFile; use Pmpr\Package\Optimization\Manipulate\ManipulateFormat; use Pmpr\Package\Optimization\Notice; use Pmpr\Package\Optimization\Optimization; use Pmpr\Package\Optimization\Traits\MemoizeTrait; use Pmpr\Package\Optimization\Buffer\Buffer as BaseBuffer; use Pmpr\Common\Foundation\Manipulate\Manipulate as BaseManipulate; class Advanced extends Common { const aeoikmkskgikaqmk = "\141\x64\166\141\156\x63\x65\144\55\143\141\143\x68\145\x2e\x70\x68\x70"; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x61\144\155\151\x6e\137\x69\x6e\151\164", [$this, "\171\x65\171\151\x67\165\x79\x65\x67\x6d\x6d\171\165\x73\145\x61"]); parent::wigskegsqequoeks(); } public function yeyiguyegmmyusea() { if (ManipulateAjax::mcgoysmkqsqooceq()) { goto eeomcmuiqwgwwuqk; } $this->qeoakmiowssoqaom(); eeomcmuiqwgwwuqk: } public function qeoakmiowssoqaom() { $mkomwsiykqigmqca = $this->moassygiomssikqe(); $acqcekoeswseswws = $mkomwsiykqigmqca . self::aeoikmkskgikaqmk; $easioyqacwuockya = ManipulateFile::qucagkayiequsiia(Foundation::class); $gwcwqmuggecygcca = ManipulateFile::qucagkayiequsiia(Optimization::class); if (!($easioyqacwuockya && $gwcwqmuggecygcca)) { goto uookseqsmsqgweuy; } $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); if (!(!$iiaumsgauuyeqksw->exists($acqcekoeswseswws) && $this->ecagqwsekgcaqqgk())) { goto mseokuecmeoyoggk; } $cmkqisoeyioisqaw = [Test::class, Config::class, Buffer::class, BaseBuffer::class, Engine::class, Storage::class, Container::class, Filesystem::class, Decorator::class, DecoratorHook::class, LogTrait::class, AjaxTrait::class, HookTrait::class, SettingTrait::class, MemoizeTrait::class, TemplateTrait::class, SingletonTrait::class, ComponentTrait::class, TranslateTrait::class, BaseManipulate::class, ManipulateHook::class, ManipulateArray::class, ManipulateFormat::class, ManipulateString::class, ManipulateServer::class, BaseManipulateType::class, ManipulateValidation::class, BaseManipulateFormat::class, ConstantInterface::class]; $cmkqisoeyioisqaw = $this->cqmcaceygyqmuokq($cmkqisoeyioisqaw); $ewgwqamkygiqaawc = $this->iuygowkemiiwqmiw("\x61\x64\166\x61\x6e\x63\x65\144\x2e\x70\150\x70", ["\x75\163\145\163" => [Test::class, Buffer::class, Config::class], "\x63\154\141\x73\x73\145\x73" => $cmkqisoeyioisqaw, "\x6e\141\155\x65\163\160\141\x63\x65" => $this->gysieksskcaeyuom(Cache::class), "\166\x65\x6e\144\x6f\162\x5f\160\141\x74\x68" => Foundation::couwksyewgyeooqe()->aksiegmauqiaueis(), "\143\x61\143\x68\x65\137\x70\x61\164\150" => $this->gskqygiceygcguyo(), "\x63\x6f\156\146\151\x67\137\x70\x61\164\x68" => Manipulate::cmaecekuqkwmemms("\117\120\x54\111\115\111\132\101\x54\111\x4f\116\137\x43\117\x4e\106\x49\x47\x5f\120\x41\124\x48")]); $ewgwqamkygiqaawc = (string) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\160\164\x5f\141\x64\x76\x61\156\x63\x65\x64\x5f\143\141\x63\150\145\137\146\x69\154\145"), $ewgwqamkygiqaawc); $iiaumsgauuyeqksw->cmsiuoqwaiwceuqq($mkomwsiykqigmqca, self::aeoikmkskgikaqmk, $ewgwqamkygiqaawc); Notice::info(sprintf(__("\x4f\160\164\x69\155\151\172\x61\164\151\x6f\x6e\40\101\144\166\141\x6e\143\x65\144\x20\103\x61\143\x68\145\40\x66\151\154\x65\x20\147\145\156\145\162\x61\x74\x65\x64\x20\x73\165\x63\143\x65\163\163\x66\165\154\154\171\x20\151\156\x20\45\163\x2e", PR__PKG__OPTIMIZATION), $mkomwsiykqigmqca), "\141\144\166\x61\156\143\145\55\x63\x61\143\x68\145"); mseokuecmeoyoggk: uookseqsmsqgweuy: } public function cqmcaceygyqmuokq($cmkqisoeyioisqaw) : array { $aqykuigiuwmmcieu = []; foreach ($cmkqisoeyioisqaw as $egkyssmuqcwaciya) { $aqykuigiuwmmcieu[$egkyssmuqcwaciya] = ManipulateFile::eyqooeqgoyokqeoq($egkyssmuqcwaciya); esgyqksmcukeuwyk: } yeaqsiqgakskoykg: return $aqykuigiuwmmcieu; } public function gysieksskcaeyuom($egkyssmuqcwaciya) : string { return substr($egkyssmuqcwaciya, 0, strrpos($egkyssmuqcwaciya, "\x5c")); } public function ecagqwsekgcaqqgk() : bool { $umuecysoywoumgwo = true; if (!(!$this->kcciqwskewsuaemk()->qygmgeswucmcmaiu($this->moassygiomssikqe()) && !Manipulate::cmaecekuqkwmemms("\x43\x41\x43\x48\x45\x5f\101\104\126\101\x4e\103\105\x44\x5f\103\x41\x43\110\x45") && !$this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\x70\164\137\x63\x61\x63\x68\x65\137\x67\145\156\x65\162\x61\x74\x65\137\141\x64\x76\x61\x6e\143\145\x64\137\x63\x61\x63\150\x65\137\x66\151\154\x65"), true))) { goto iigmgswcogqemgao; } $umuecysoywoumgwo = false; Notice::ymqcyaqqcyuicwqu("\143\x61\x63\x68\145\137\x61\144\166\141\156\143\x65\x64\x5f\x63\141\x63\x68\x65\x5f\160\145\162\x6d\151\163\x73\x69\157\x6e\x73", $this->moassygiomssikqe(), __("\x43\x61\x63\x68\145", PR__PKG__OPTIMIZATION)); iigmgswcogqemgao: return $umuecysoywoumgwo; } public function moassygiomssikqe() : ?string { return trailingslashit(WPMU_PLUGIN_DIR); } }
