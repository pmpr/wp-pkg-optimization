<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c6e9e36d31a             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Origin\Cache; use Pmpr\Common\Foundation\Container\Container; use Pmpr\Common\Foundation\Container\Storage; use Pmpr\Common\Foundation\Container\Traits\SingletonTrait; use Pmpr\Common\Foundation\Decorator\Decorator; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Common\Foundation\Filesystem; use Pmpr\Common\Foundation\Foundation; use Pmpr\Common\Foundation\Interfaces\ConstantInterface; use Pmpr\Common\Foundation\Logger\Engine; use Pmpr\Common\Foundation\Logger\Traits\LogTrait; use Pmpr\Common\Foundation\Manipulate\ManipulateAjax; use Pmpr\Common\Foundation\Manipulate\ManipulateHook; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\ManipulateValidation; use Pmpr\Common\Foundation\Manipulate\Type\Common as BaseManipulateType; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat as BaseManipulateFormat; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString; use Pmpr\Common\Foundation\Template\Traits\TemplateTrait; use Pmpr\Common\Foundation\Traits\AjaxTrait; use Pmpr\Common\Foundation\Traits\ComponentTrait; use Pmpr\Common\Foundation\Traits\HookTrait; use Pmpr\Common\Foundation\Traits\SettingTrait; use Pmpr\Common\Foundation\Traits\TranslateTrait; use Pmpr\Package\Optimization\Buffer\Config; use Pmpr\Package\Optimization\Buffer\Test; use Pmpr\Package\Optimization\Manipulate\Manipulate; use Pmpr\Package\Optimization\Manipulate\ManipulateFile; use Pmpr\Package\Optimization\Manipulate\ManipulateFormat; use Pmpr\Package\Optimization\Notice; use Pmpr\Package\Optimization\Optimization; use Pmpr\Package\Optimization\Traits\MemoizeTrait; use Pmpr\Package\Optimization\Buffer\Buffer as BaseBuffer; use Pmpr\Common\Foundation\Manipulate\Manipulate as BaseManipulate; class Advanced extends Common { const aeoikmkskgikaqmk = "\141\144\x76\141\156\x63\145\144\55\143\x61\x63\150\x65\x2e\x70\150\x70"; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\141\x64\x6d\151\x6e\x5f\x69\x6e\151\x74", [$this, "\x79\x65\x79\x69\147\x75\171\145\x67\x6d\155\x79\x75\x73\x65\x61"]); parent::wigskegsqequoeks(); } public function yeyiguyegmmyusea() { if (ManipulateAjax::mcgoysmkqsqooceq()) { goto omqyuuomwywmqeiq; } $this->qeoakmiowssoqaom(); omqyuuomwywmqeiq: } public function qeoakmiowssoqaom() { $mkomwsiykqigmqca = $this->moassygiomssikqe(); $acqcekoeswseswws = $mkomwsiykqigmqca . self::aeoikmkskgikaqmk; $easioyqacwuockya = ManipulateFile::qucagkayiequsiia(Foundation::class); $gwcwqmuggecygcca = ManipulateFile::qucagkayiequsiia(Optimization::class); if (!($easioyqacwuockya && $gwcwqmuggecygcca)) { goto misiasooemyskoay; } $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); if (!(!$iiaumsgauuyeqksw->exists($acqcekoeswseswws) && $this->ecagqwsekgcaqqgk())) { goto oysyuiqmsokoykaq; } $cmkqisoeyioisqaw = [Test::class, Config::class, Buffer::class, BaseBuffer::class, Engine::class, Storage::class, Container::class, Filesystem::class, Decorator::class, DecoratorHook::class, LogTrait::class, AjaxTrait::class, HookTrait::class, SettingTrait::class, MemoizeTrait::class, TemplateTrait::class, SingletonTrait::class, ComponentTrait::class, TranslateTrait::class, BaseManipulate::class, ManipulateHook::class, ManipulateArray::class, ManipulateFormat::class, ManipulateString::class, ManipulateServer::class, BaseManipulateType::class, ManipulateValidation::class, BaseManipulateFormat::class, ConstantInterface::class]; $cmkqisoeyioisqaw = $this->cqmcaceygyqmuokq($cmkqisoeyioisqaw); $ewgwqamkygiqaawc = $this->iuygowkemiiwqmiw("\141\144\166\141\x6e\x63\x65\144\56\x70\150\160", ["\165\163\145\x73" => [Test::class, Buffer::class, Config::class], "\143\154\x61\x73\x73\145\163" => $cmkqisoeyioisqaw, "\x6e\x61\x6d\145\x73\160\141\143\x65" => $this->gysieksskcaeyuom(Cache::class), "\x76\x65\x6e\x64\x6f\x72\137\x70\x61\164\150" => Foundation::couwksyewgyeooqe()->aksiegmauqiaueis(), "\x63\x61\143\x68\x65\x5f\160\141\164\x68" => $this->gskqygiceygcguyo(), "\143\157\x6e\146\151\147\137\x70\141\164\x68" => Manipulate::cmaecekuqkwmemms("\x4f\x50\x54\111\115\111\x5a\101\x54\111\x4f\116\137\x43\x4f\116\x46\111\x47\x5f\120\x41\124\110")]); $ewgwqamkygiqaawc = (string) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\160\x74\137\x61\x64\166\141\x6e\x63\x65\x64\137\143\141\x63\150\145\137\x66\151\154\145"), $ewgwqamkygiqaawc); $iiaumsgauuyeqksw->cmsiuoqwaiwceuqq($mkomwsiykqigmqca, self::aeoikmkskgikaqmk, $ewgwqamkygiqaawc); Notice::info(sprintf(__("\117\160\x74\x69\155\151\172\x61\164\151\157\x6e\40\101\144\166\x61\x6e\143\x65\144\40\x43\x61\143\150\x65\x20\x66\x69\154\145\40\147\145\x6e\x65\x72\x61\x74\x65\144\x20\163\165\143\143\x65\163\x73\x66\165\154\x6c\171\40\151\x6e\x20\x25\163\x2e", PR__PKG__OPTIMIZATION), $mkomwsiykqigmqca), "\x61\x64\166\141\156\x63\145\55\143\141\x63\150\145"); oysyuiqmsokoykaq: misiasooemyskoay: } public function cqmcaceygyqmuokq($cmkqisoeyioisqaw) : array { $aqykuigiuwmmcieu = []; foreach ($cmkqisoeyioisqaw as $egkyssmuqcwaciya) { $aqykuigiuwmmcieu[$egkyssmuqcwaciya] = ManipulateFile::eyqooeqgoyokqeoq($egkyssmuqcwaciya); cqkyumayoemqsueu: } eomqeimoequmagum: return $aqykuigiuwmmcieu; } public function gysieksskcaeyuom($egkyssmuqcwaciya) : string { return substr($egkyssmuqcwaciya, 0, strrpos($egkyssmuqcwaciya, "\x5c")); } public function ecagqwsekgcaqqgk() : bool { $umuecysoywoumgwo = true; if (!(!$this->kcciqwskewsuaemk()->qygmgeswucmcmaiu($this->moassygiomssikqe()) && !Manipulate::cmaecekuqkwmemms("\x43\x41\x43\x48\105\x5f\101\104\x56\101\x4e\x43\x45\x44\x5f\x43\101\x43\x48\105") && !$this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\160\164\137\x63\x61\143\150\x65\x5f\147\145\156\145\x72\141\164\x65\x5f\141\144\166\x61\156\143\145\x64\x5f\x63\141\x63\150\145\137\146\151\154\145"), true))) { goto ksqmcugkcmsooeaw; } $umuecysoywoumgwo = false; Notice::ymqcyaqqcyuicwqu("\x63\x61\143\150\145\137\141\x64\x76\x61\x6e\143\x65\144\137\143\x61\x63\x68\x65\137\160\145\162\x6d\x69\163\x73\151\x6f\156\x73", $this->moassygiomssikqe(), __("\103\x61\x63\150\145", PR__PKG__OPTIMIZATION)); ksqmcugkcmsooeaw: return $umuecysoywoumgwo; } public function moassygiomssikqe() : ?string { return trailingslashit(WPMU_PLUGIN_DIR); } }
