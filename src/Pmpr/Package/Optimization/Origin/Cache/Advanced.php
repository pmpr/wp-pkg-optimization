<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c1fcad85629             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Origin\Cache; use Pmpr\Common\Foundation\Container\Container; use Pmpr\Common\Foundation\Container\Storage; use Pmpr\Common\Foundation\Container\Traits\SingletonTrait; use Pmpr\Common\Foundation\Decorator\Decorator; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Common\Foundation\Filesystem; use Pmpr\Common\Foundation\Foundation; use Pmpr\Common\Foundation\Interfaces\ConstantInterface; use Pmpr\Common\Foundation\Logger\Engine; use Pmpr\Common\Foundation\Logger\Traits\LogTrait; use Pmpr\Common\Foundation\Manipulate\ManipulateAjax; use Pmpr\Common\Foundation\Manipulate\ManipulateHook; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\ManipulateValidation; use Pmpr\Common\Foundation\Manipulate\Type\Common as BaseManipulateType; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat as BaseManipulateFormat; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString; use Pmpr\Common\Foundation\Template\Traits\TemplateTrait; use Pmpr\Common\Foundation\Traits\AjaxTrait; use Pmpr\Common\Foundation\Traits\ComponentTrait; use Pmpr\Common\Foundation\Traits\HookTrait; use Pmpr\Common\Foundation\Traits\SettingTrait; use Pmpr\Common\Foundation\Traits\TranslateTrait; use Pmpr\Package\Optimization\Buffer\Config; use Pmpr\Package\Optimization\Buffer\Test; use Pmpr\Package\Optimization\Manipulate\Manipulate; use Pmpr\Package\Optimization\Manipulate\ManipulateFile; use Pmpr\Package\Optimization\Manipulate\ManipulateFormat; use Pmpr\Package\Optimization\Notice; use Pmpr\Package\Optimization\Optimization; use Pmpr\Package\Optimization\Traits\MemoizeTrait; use Pmpr\Package\Optimization\Buffer\Buffer as BaseBuffer; use Pmpr\Common\Foundation\Manipulate\Manipulate as BaseManipulate; class Advanced extends Common { const aeoikmkskgikaqmk = "\x61\144\x76\141\156\143\145\144\x2d\143\x61\x63\x68\x65\56\x70\150\x70"; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\141\x64\x6d\x69\156\x5f\151\156\151\x74", [$this, "\x79\x65\171\x69\x67\165\x79\x65\147\x6d\x6d\171\165\x73\145\141"]); parent::wigskegsqequoeks(); } public function yeyiguyegmmyusea() { if (ManipulateAjax::mcgoysmkqsqooceq()) { goto eeomcmuiqwgwwuqk; } $this->qeoakmiowssoqaom(); eeomcmuiqwgwwuqk: } public function qeoakmiowssoqaom() { $mkomwsiykqigmqca = $this->moassygiomssikqe(); $acqcekoeswseswws = $mkomwsiykqigmqca . self::aeoikmkskgikaqmk; $easioyqacwuockya = ManipulateFile::qucagkayiequsiia(Foundation::class); $gwcwqmuggecygcca = ManipulateFile::qucagkayiequsiia(Optimization::class); if (!($easioyqacwuockya && $gwcwqmuggecygcca)) { goto uookseqsmsqgweuy; } $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); if (!(!$iiaumsgauuyeqksw->exists($acqcekoeswseswws) && $this->ecagqwsekgcaqqgk())) { goto mseokuecmeoyoggk; } $cmkqisoeyioisqaw = [Test::class, Config::class, Buffer::class, BaseBuffer::class, Engine::class, Storage::class, Container::class, Filesystem::class, Decorator::class, DecoratorHook::class, LogTrait::class, AjaxTrait::class, HookTrait::class, SettingTrait::class, MemoizeTrait::class, TemplateTrait::class, SingletonTrait::class, ComponentTrait::class, TranslateTrait::class, BaseManipulate::class, ManipulateHook::class, ManipulateArray::class, ManipulateFormat::class, ManipulateString::class, ManipulateServer::class, BaseManipulateType::class, ManipulateValidation::class, BaseManipulateFormat::class, ConstantInterface::class]; $cmkqisoeyioisqaw = $this->cqmcaceygyqmuokq($cmkqisoeyioisqaw); $ewgwqamkygiqaawc = $this->iuygowkemiiwqmiw("\x61\144\166\x61\x6e\143\145\144\56\160\x68\x70", ["\x75\163\x65\x73" => [Test::class, Buffer::class, Config::class], "\x63\154\x61\163\163\145\163" => $cmkqisoeyioisqaw, "\x6e\141\155\x65\x73\160\x61\x63\145" => $this->gysieksskcaeyuom(Cache::class), "\166\x65\x6e\x64\x6f\162\x5f\x70\141\164\x68" => Foundation::couwksyewgyeooqe()->aksiegmauqiaueis(), "\x63\141\143\150\145\137\160\141\x74\150" => $this->gskqygiceygcguyo(), "\143\157\x6e\x66\151\147\x5f\160\x61\164\150" => Manipulate::cmaecekuqkwmemms("\x4f\120\124\x49\x4d\x49\132\101\124\x49\x4f\x4e\x5f\x43\117\116\106\111\107\137\x50\x41\x54\x48")]); $ewgwqamkygiqaawc = (string) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\x70\164\x5f\x61\144\166\141\156\x63\145\144\137\143\141\143\150\145\x5f\146\151\x6c\x65"), $ewgwqamkygiqaawc); $iiaumsgauuyeqksw->cmsiuoqwaiwceuqq($mkomwsiykqigmqca, self::aeoikmkskgikaqmk, $ewgwqamkygiqaawc); Notice::info(sprintf(__("\x4f\x70\x74\x69\x6d\151\x7a\141\x74\x69\x6f\156\x20\101\144\x76\141\x6e\143\x65\x64\x20\x43\x61\143\150\145\x20\146\151\x6c\145\x20\147\145\x6e\145\162\141\164\145\x64\40\163\x75\x63\143\145\x73\163\146\x75\154\154\171\40\x69\156\x20\45\163\56", PR__PKG__OPTIMIZATION), $mkomwsiykqigmqca), "\141\x64\x76\x61\156\x63\145\55\x63\x61\143\x68\145"); mseokuecmeoyoggk: uookseqsmsqgweuy: } public function cqmcaceygyqmuokq($cmkqisoeyioisqaw) : array { $aqykuigiuwmmcieu = []; foreach ($cmkqisoeyioisqaw as $egkyssmuqcwaciya) { $aqykuigiuwmmcieu[$egkyssmuqcwaciya] = ManipulateFile::eyqooeqgoyokqeoq($egkyssmuqcwaciya); esgyqksmcukeuwyk: } yeaqsiqgakskoykg: return $aqykuigiuwmmcieu; } public function gysieksskcaeyuom($egkyssmuqcwaciya) : string { return substr($egkyssmuqcwaciya, 0, strrpos($egkyssmuqcwaciya, "\x5c")); } public function ecagqwsekgcaqqgk() : bool { $umuecysoywoumgwo = true; if (!(!$this->kcciqwskewsuaemk()->qygmgeswucmcmaiu($this->moassygiomssikqe()) && !Manipulate::cmaecekuqkwmemms("\103\101\x43\x48\x45\137\x41\104\126\101\116\103\x45\104\x5f\103\101\x43\110\x45") && !$this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\160\x74\137\x63\x61\x63\150\x65\x5f\x67\x65\156\x65\162\x61\x74\x65\137\x61\x64\x76\x61\x6e\x63\145\x64\x5f\x63\x61\143\150\x65\x5f\146\151\x6c\145"), true))) { goto iigmgswcogqemgao; } $umuecysoywoumgwo = false; Notice::ymqcyaqqcyuicwqu("\x63\x61\x63\150\x65\x5f\141\x64\166\x61\x6e\x63\145\144\137\143\x61\143\150\145\x5f\x70\145\x72\155\151\163\x73\151\157\x6e\x73", $this->moassygiomssikqe(), __("\103\x61\143\x68\x65", PR__PKG__OPTIMIZATION)); iigmgswcogqemgao: return $umuecysoywoumgwo; } public function moassygiomssikqe() : ?string { return trailingslashit(WPMU_PLUGIN_DIR); } }
