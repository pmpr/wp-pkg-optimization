<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6226653654432             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Origin\Cache; use Pmpr\Common\Foundation\Container\Container; use Pmpr\Common\Foundation\Container\Storage; use Pmpr\Common\Foundation\Container\Traits\SingletonTrait; use Pmpr\Common\Foundation\Decorator\Decorator; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Common\Foundation\Filesystem; use Pmpr\Common\Foundation\Foundation; use Pmpr\Common\Foundation\Interfaces\ConstantInterface; use Pmpr\Common\Foundation\Logger\Engine; use Pmpr\Common\Foundation\Logger\Traits\LogTrait; use Pmpr\Common\Foundation\Manipulate\ManipulateAjax; use Pmpr\Common\Foundation\Manipulate\ManipulateHook; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\ManipulateValidation; use Pmpr\Common\Foundation\Manipulate\Type\Common as BaseManipulateType; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat as BaseManipulateFormat; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString; use Pmpr\Common\Foundation\Template\Traits\TemplateTrait; use Pmpr\Common\Foundation\Traits\AjaxTrait; use Pmpr\Common\Foundation\Traits\ComponentTrait; use Pmpr\Common\Foundation\Traits\HookTrait; use Pmpr\Common\Foundation\Traits\SettingTrait; use Pmpr\Common\Foundation\Traits\TranslateTrait; use Pmpr\Package\Optimization\Buffer\Config; use Pmpr\Package\Optimization\Buffer\Test; use Pmpr\Package\Optimization\Manipulate\Manipulate; use Pmpr\Package\Optimization\Manipulate\ManipulateFile; use Pmpr\Package\Optimization\Manipulate\ManipulateFormat; use Pmpr\Package\Optimization\Notice; use Pmpr\Package\Optimization\Optimization; use Pmpr\Package\Optimization\Traits\MemoizeTrait; use Pmpr\Package\Optimization\Buffer\Buffer as BaseBuffer; use Pmpr\Common\Foundation\Manipulate\Manipulate as BaseManipulate; class Advanced extends Common { const aeoikmkskgikaqmk = "\141\x64\166\141\156\143\x65\x64\55\x63\x61\143\x68\x65\56\x70\150\x70"; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\141\x64\155\151\x6e\x5f\151\156\x69\x74", [$this, "\171\x65\x79\x69\147\165\171\x65\147\155\x6d\x79\x75\163\145\x61"]); parent::wigskegsqequoeks(); } public function yeyiguyegmmyusea() { if (ManipulateAjax::mcgoysmkqsqooceq()) { goto qcwkymcgqacaaywc; } $this->qeoakmiowssoqaom(); qcwkymcgqacaaywc: } public function qeoakmiowssoqaom() { $mkomwsiykqigmqca = $this->moassygiomssikqe(); $acqcekoeswseswws = $mkomwsiykqigmqca . self::aeoikmkskgikaqmk; $easioyqacwuockya = ManipulateFile::qucagkayiequsiia(Foundation::class); $gwcwqmuggecygcca = ManipulateFile::qucagkayiequsiia(Optimization::class); if (!($easioyqacwuockya && $gwcwqmuggecygcca)) { goto qwsmiaegmcwuskwi; } $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); if (!(!$iiaumsgauuyeqksw->exists($acqcekoeswseswws) && $this->ecagqwsekgcaqqgk())) { goto wmcucyuieqgqisis; } $cmkqisoeyioisqaw = [Test::class, Config::class, Buffer::class, BaseBuffer::class, Engine::class, Storage::class, Container::class, Filesystem::class, Decorator::class, DecoratorHook::class, LogTrait::class, AjaxTrait::class, HookTrait::class, SettingTrait::class, MemoizeTrait::class, TemplateTrait::class, SingletonTrait::class, ComponentTrait::class, TranslateTrait::class, BaseManipulate::class, ManipulateHook::class, ManipulateArray::class, ManipulateFormat::class, ManipulateString::class, ManipulateServer::class, BaseManipulateType::class, ManipulateValidation::class, BaseManipulateFormat::class, ConstantInterface::class]; $cmkqisoeyioisqaw = $this->cqmcaceygyqmuokq($cmkqisoeyioisqaw); $ewgwqamkygiqaawc = $this->iuygowkemiiwqmiw("\141\144\x76\141\156\x63\145\144\56\x70\x68\160", ["\x75\x73\x65\163" => [Test::class, Buffer::class, Config::class], "\x63\154\141\163\163\145\163" => $cmkqisoeyioisqaw, "\156\141\x6d\145\x73\160\x61\143\145" => $this->gysieksskcaeyuom(Cache::class), "\x76\x65\156\144\157\x72\137\x70\141\x74\150" => Foundation::couwksyewgyeooqe()->aksiegmauqiaueis(), "\143\x61\x63\150\x65\x5f\160\141\164\x68" => $this->gskqygiceygcguyo(), "\143\x6f\x6e\x66\x69\x67\x5f\x70\141\164\150" => Manipulate::cmaecekuqkwmemms("\x4f\120\124\x49\115\x49\x5a\x41\124\111\x4f\116\137\x43\x4f\x4e\106\111\x47\x5f\x50\x41\124\110")]); $ewgwqamkygiqaawc = (string) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\160\x74\137\141\x64\166\x61\156\143\x65\x64\137\x63\141\143\x68\x65\137\146\151\154\x65"), $ewgwqamkygiqaawc); $iiaumsgauuyeqksw->cmsiuoqwaiwceuqq($mkomwsiykqigmqca, self::aeoikmkskgikaqmk, $ewgwqamkygiqaawc); Notice::info(sprintf(__("\117\x70\164\151\155\x69\172\141\x74\x69\x6f\x6e\40\x41\x64\166\x61\156\x63\x65\144\40\x43\x61\x63\150\145\40\x66\151\x6c\x65\40\147\x65\156\x65\162\141\x74\145\144\40\x73\165\143\143\145\x73\163\x66\x75\154\x6c\171\x20\x69\156\40\45\x73\56", PR__PKG__OPTIMIZATION), $mkomwsiykqigmqca), "\x61\x64\166\141\x6e\x63\145\55\143\141\143\150\145"); wmcucyuieqgqisis: qwsmiaegmcwuskwi: } public function cqmcaceygyqmuokq($cmkqisoeyioisqaw) : array { $aqykuigiuwmmcieu = []; foreach ($cmkqisoeyioisqaw as $egkyssmuqcwaciya) { $aqykuigiuwmmcieu[$egkyssmuqcwaciya] = ManipulateFile::eyqooeqgoyokqeoq($egkyssmuqcwaciya); usmagcaocwiugqum: } yyyyawaqcowsgqcs: return $aqykuigiuwmmcieu; } public function gysieksskcaeyuom($egkyssmuqcwaciya) : string { return substr($egkyssmuqcwaciya, 0, strrpos($egkyssmuqcwaciya, "\134")); } public function ecagqwsekgcaqqgk() : bool { $umuecysoywoumgwo = true; if (!(!$this->kcciqwskewsuaemk()->qygmgeswucmcmaiu($this->moassygiomssikqe()) && !Manipulate::cmaecekuqkwmemms("\x43\x41\103\x48\105\137\101\x44\126\101\x4e\x43\105\104\137\103\101\x43\x48\x45") && !$this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\160\x74\x5f\143\x61\143\150\145\137\147\x65\x6e\145\x72\141\164\145\x5f\141\x64\166\141\x6e\x63\145\x64\x5f\143\141\x63\x68\145\137\146\151\154\x65"), true))) { goto sikmqkecsiyciaei; } $umuecysoywoumgwo = false; Notice::ymqcyaqqcyuicwqu("\x63\141\x63\x68\x65\137\x61\x64\x76\x61\156\143\x65\144\137\x63\x61\x63\x68\145\137\160\145\162\155\151\163\x73\151\157\x6e\163", $this->moassygiomssikqe(), __("\103\141\x63\x68\145", PR__PKG__OPTIMIZATION)); sikmqkecsiyciaei: return $umuecysoywoumgwo; } public function moassygiomssikqe() : ?string { return trailingslashit(WPMU_PLUGIN_DIR); } }
