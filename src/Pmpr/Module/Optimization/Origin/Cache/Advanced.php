<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             631ce1ad2f186             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Origin\Cache; use Pmpr\Common\Foundation\Container\Container; use Pmpr\Common\Foundation\Container\Storage; use Pmpr\Common\Foundation\Container\Traits\SingletonTrait; use Pmpr\Common\Foundation\Decorator\Decorator; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Common\Foundation\Filesystem; use Pmpr\Common\Foundation\Foundation; use Pmpr\Common\Foundation\Interfaces\ConstantInterface; use Pmpr\Common\Foundation\Logger\Engine; use Pmpr\Common\Foundation\Logger\Traits\LogTrait; use Pmpr\Common\Foundation\Manipulate\ManipulateAjax; use Pmpr\Common\Foundation\Manipulate\ManipulateComponent; use Pmpr\Common\Foundation\Manipulate\ManipulateHook; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\ManipulateSetting; use Pmpr\Common\Foundation\Manipulate\ManipulateValidation; use Pmpr\Common\Foundation\Manipulate\Type\Common as BaseManipulateType; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat as BaseManipulateFormat; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString; use Pmpr\Common\Foundation\Notice\Traits\NoticeTrait; use Pmpr\Common\Foundation\Template\Traits\TemplateTrait; use Pmpr\Common\Foundation\Traits\AjaxTrait; use Pmpr\Common\Foundation\Traits\ComponentTrait; use Pmpr\Common\Foundation\Traits\ErrorTrait; use Pmpr\Common\Foundation\Traits\HookTrait; use Pmpr\Common\Foundation\Traits\SettingTrait; use Pmpr\Common\Foundation\Traits\TranslateTrait; use Pmpr\Module\Optimization\Buffer\Config; use Pmpr\Module\Optimization\Buffer\Test; use Pmpr\Module\Optimization\Manipulate\Manipulate; use Pmpr\Module\Optimization\Manipulate\ManipulateFile; use Pmpr\Module\Optimization\Manipulate\ManipulateFormat; use Pmpr\Module\Optimization\Optimization; use Pmpr\Module\Optimization\Traits\MemoizeTrait; use Pmpr\Module\Optimization\Buffer\Buffer as BaseBuffer; use Pmpr\Common\Foundation\Manipulate\Manipulate as BaseManipulate; class Advanced extends Common { const aeoikmkskgikaqmk = "\141\x64\166\141\156\143\145\x64\55\143\x61\143\x68\145\x2e\160\x68\x70"; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\141\x64\x6d\x69\x6e\137\x69\156\151\164", [$this, "\x79\x65\171\x69\147\165\x79\145\x67\x6d\x6d\x79\165\x73\145\x61"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\157\160\x74\137\144\151\x73\x61\x62\154\145\144"), [$this, "\163\x77\151\145\141\171\145\171\x73\141\167\x63\145\145\x6b\153"]); parent::wigskegsqequoeks(); } public function yeyiguyegmmyusea() { if (ManipulateAjax::mcgoysmkqsqooceq()) { goto wmwgeoequuwwwywa; } $this->qeoakmiowssoqaom(); wmwgeoequuwwwywa: } public function swieayeysawceekk() { if (!($iiaumsgauuyeqksw = $this->kcciqwskewsuaemk())) { goto uqugcugeomqakcqo; } $iiaumsgauuyeqksw->remove($this->moassygiomssikqe() . self::aeoikmkskgikaqmk); uqugcugeomqakcqo: } public function qeoakmiowssoqaom() { $mkomwsiykqigmqca = $this->moassygiomssikqe(); $acqcekoeswseswws = $mkomwsiykqigmqca . self::aeoikmkskgikaqmk; $easioyqacwuockya = ManipulateFile::qucagkayiequsiia(Foundation::class); $gwcwqmuggecygcca = ManipulateFile::qucagkayiequsiia(Optimization::class); if (!($easioyqacwuockya && $gwcwqmuggecygcca)) { goto wywwieycqskuqcwc; } $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); if (!(!$iiaumsgauuyeqksw->exists($acqcekoeswseswws) && $this->ecagqwsekgcaqqgk())) { goto qmoisuweiskkekca; } $cmkqisoeyioisqaw = [Test::class, Config::class, Buffer::class, BaseBuffer::class, Engine::class, Storage::class, Container::class, Filesystem::class, Decorator::class, DecoratorHook::class, LogTrait::class, AjaxTrait::class, HookTrait::class, ErrorTrait::class, NoticeTrait::class, SettingTrait::class, MemoizeTrait::class, TemplateTrait::class, SingletonTrait::class, ComponentTrait::class, TranslateTrait::class, BaseManipulate::class, ManipulateHook::class, ManipulateArray::class, ManipulateFormat::class, ManipulateString::class, ManipulateServer::class, ManipulateSetting::class, BaseManipulateType::class, ManipulateComponent::class, ManipulateValidation::class, BaseManipulateFormat::class, ConstantInterface::class]; $cmkqisoeyioisqaw = $this->cqmcaceygyqmuokq($cmkqisoeyioisqaw); $ewgwqamkygiqaawc = $this->iuygowkemiiwqmiw("\x61\144\x76\x61\x6e\x63\x65\x64\56\160\x68\160", ["\165\163\x65\x73" => [Test::class, Buffer::class, Config::class], "\x63\154\x61\x73\163\x65\163" => $cmkqisoeyioisqaw, "\156\141\155\145\x73\160\x61\x63\x65" => $this->gysieksskcaeyuom(Cache::class), "\166\145\156\x64\157\x72\137\160\x61\x74\x68" => Foundation::couwksyewgyeooqe()->aksiegmauqiaueis(), "\x63\141\143\150\x65\x5f\x70\141\x74\x68" => $this->gskqygiceygcguyo(), "\143\x6f\x6e\146\151\147\137\x70\141\x74\150" => Manipulate::cmaecekuqkwmemms("\117\x50\x54\x49\115\111\x5a\x41\x54\111\x4f\116\x5f\x43\x4f\116\x46\111\107\x5f\x50\x41\124\x48")]); $ewgwqamkygiqaawc = (string) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\160\x74\x5f\141\144\x76\141\156\143\x65\x64\x5f\x63\x61\143\150\x65\137\146\x69\x6c\x65"), $ewgwqamkygiqaawc); $iiaumsgauuyeqksw->cmsiuoqwaiwceuqq($mkomwsiykqigmqca, self::aeoikmkskgikaqmk, $ewgwqamkygiqaawc); $this->cimaucgayqyyccoc(sprintf(__("\117\x70\164\151\155\151\172\x61\164\151\x6f\156\40\x41\x64\166\x61\x6e\x63\x65\x64\40\103\x61\143\x68\145\x20\x66\151\x6c\x65\x20\x67\145\156\x65\x72\x61\x74\x65\144\40\163\165\x63\x63\145\x73\163\146\x75\154\x6c\171\40\x69\x6e\40\x25\x73\x2e", PR__MDL__OPTIMIZATION), $mkomwsiykqigmqca), "\141\144\x76\141\156\x63\x65\x2d\143\x61\143\150\x65", self::smkwuwawwaqyimcq); qmoisuweiskkekca: wywwieycqskuqcwc: } public function cqmcaceygyqmuokq($cmkqisoeyioisqaw) : array { $aqykuigiuwmmcieu = []; foreach ($cmkqisoeyioisqaw as $egkyssmuqcwaciya) { $aqykuigiuwmmcieu[$egkyssmuqcwaciya] = ManipulateFile::eyqooeqgoyokqeoq($egkyssmuqcwaciya); icouowaoycuuisqe: } gwyseusuceuwwccu: return $aqykuigiuwmmcieu; } public function gysieksskcaeyuom($egkyssmuqcwaciya) : string { return substr($egkyssmuqcwaciya, 0, strrpos($egkyssmuqcwaciya, "\x5c")); } public function ecagqwsekgcaqqgk() : bool { $umuecysoywoumgwo = true; if (!(!$this->kcciqwskewsuaemk()->qygmgeswucmcmaiu($this->moassygiomssikqe()) && !Manipulate::cmaecekuqkwmemms("\x43\101\x43\110\105\x5f\x41\104\x56\101\116\103\x45\x44\137\103\101\x43\x48\x45") && !$this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\160\x74\137\143\141\x63\x68\x65\137\x67\x65\x6e\145\x72\141\164\x65\x5f\141\x64\166\141\x6e\143\145\144\137\x63\x61\143\150\145\137\146\151\x6c\x65"), true))) { goto ocmwuquguuqigose; } $umuecysoywoumgwo = false; $this->syiuacooagmooima("\141\x64\166\141\x6e\x63\145\x64\137\x63\x61\x63\150\145", __("\103\141\143\150\x65", PR__MDL__OPTIMIZATION), $this->moassygiomssikqe()); ocmwuquguuqigose: return $umuecysoywoumgwo; } public function moassygiomssikqe() : ?string { return trailingslashit(WPMU_PLUGIN_DIR); } }
