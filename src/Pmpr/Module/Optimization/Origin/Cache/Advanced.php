<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             653524d4a234f             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Origin\Cache; use Pmpr\Common\Foundation\Container\Container; use Pmpr\Common\Foundation\Container\Storage; use Pmpr\Common\Foundation\Container\Traits\SingletonTrait; use Pmpr\Common\Foundation\Decorator\Decorator; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Common\Foundation\Filesystem; use Pmpr\Common\Foundation\Foundation; use Pmpr\Common\Foundation\Helper\Format; use Pmpr\Common\Foundation\Helper\Helper; use Pmpr\Common\Foundation\Helper\Hook; use Pmpr\Common\Foundation\Helper\Type\_Callback; use Pmpr\Common\Foundation\Helper\Type\Common as TypeHelper; use Pmpr\Common\Foundation\Helper\Type\_String; use Pmpr\Common\Foundation\Helper\Type\_Array; use Pmpr\Common\Foundation\Helper\Plugin\Common as CommonPlugin; use Pmpr\Common\Foundation\Helper\Plugin\Component; use Pmpr\Common\Foundation\Traits\InstanceTrait; use Pmpr\Common\Foundation\Wrapper\Hook as HookWrapper; use Pmpr\Common\Foundation\Helper\Common as CommonHelper; use Pmpr\Common\Foundation\Wrapper\Format as FormatWrapper; use Pmpr\Common\Foundation\Wrapper\Common as CommonWrapper; use Pmpr\Common\Foundation\Helper\Traits\HelperTrait; use Pmpr\Common\Foundation\Interfaces\ConstantInterface; use Pmpr\Common\Foundation\Logger\Engine; use Pmpr\Common\Foundation\Logger\Traits\LogTrait; use Pmpr\Common\Foundation\Manipulate\ManipulateComponent; use Pmpr\Common\Foundation\Manipulate\ManipulateHook; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\ManipulateSetting; use Pmpr\Common\Foundation\Manipulate\ManipulateValidation; use Pmpr\Common\Foundation\Manipulate\Type\Common as BaseManipulateType; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat as BaseManipulateFormat; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString; use Pmpr\Common\Foundation\Notice\Traits\NoticeTrait; use Pmpr\Common\Foundation\Template\Traits\TemplateTrait; use Pmpr\Common\Foundation\Traits\AjaxTrait; use Pmpr\Common\Foundation\Traits\ComponentTrait; use Pmpr\Common\Foundation\Traits\ErrorTrait; use Pmpr\Common\Foundation\Traits\HookTrait; use Pmpr\Common\Foundation\Traits\SettingTrait; use Pmpr\Common\Foundation\Traits\TranslateTrait; use Pmpr\Common\Foundation\Wrapper\Traits\WrapperTrait; use Pmpr\Common\Foundation\Wrapper\Wrapper; use Pmpr\Module\Optimization\Buffer\Config; use Pmpr\Module\Optimization\Buffer\Test; use Pmpr\Module\Optimization\Manipulate\Manipulate; use Pmpr\Module\Optimization\Manipulate\ManipulateFile; use Pmpr\Module\Optimization\Manipulate\ManipulateFormat; use Pmpr\Module\Optimization\Optimization; use Pmpr\Module\Optimization\Traits\MemoizeTrait; use Pmpr\Module\Optimization\Buffer\Buffer as BaseBuffer; use Pmpr\Common\Foundation\Manipulate\Manipulate as BaseManipulate; class Advanced extends Common { const aeoikmkskgikaqmk = "\141\144\x76\x61\x6e\x63\x65\144\x2d\143\141\143\x68\x65\x2e\160\x68\x70"; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\141\144\155\x69\x6e\137\151\156\x69\164", [$this, "\x79\145\171\x69\147\x75\171\145\147\x6d\155\171\165\163\145\x61"])->waqewsckuayqguos("\x6f\160\x74\x5f\x64\x69\163\141\x62\x6c\x65\x64", [$this, "\x73\x77\x69\145\x61\x79\145\171\x73\x61\167\143\x65\x65\153\153"]); parent::wigskegsqequoeks(); } public function yeyiguyegmmyusea() { if ($this->caokeucsksukesyo()->owicscwgeuqcqaig()->mcgoysmkqsqooceq()) { goto ieumumsgyguceusy; } $this->qeoakmiowssoqaom(); ieumumsgyguceusy: } public function swieayeysawceekk() { if (!($iiaumsgauuyeqksw = $this->kcciqwskewsuaemk())) { goto coywmiyqgsweuiic; } $iiaumsgauuyeqksw->remove($this->moassygiomssikqe() . self::aeoikmkskgikaqmk); coywmiyqgsweuiic: } public function qeoakmiowssoqaom() { $mkomwsiykqigmqca = $this->moassygiomssikqe(); $acqcekoeswseswws = $mkomwsiykqigmqca . self::aeoikmkskgikaqmk; $miiyyswuessymmwe = $this->caokeucsksukesyo()->iuekyyeesukysksy(); $easioyqacwuockya = $miiyyswuessymmwe->qucagkayiequsiia(Foundation::class); $gwcwqmuggecygcca = $miiyyswuessymmwe->qucagkayiequsiia(Optimization::class); if (!($easioyqacwuockya && $gwcwqmuggecygcca)) { goto ycakugokkqkuqyiu; } $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); if (!(!$iiaumsgauuyeqksw->exists($acqcekoeswseswws) && $this->ecagqwsekgcaqqgk())) { goto siqagquguiemuoku; } $cmkqisoeyioisqaw = [TypeHelper::class, _Array::class, _String::class, _Callback::class, Component::class, CommonPlugin::class, Test::class, Config::class, Buffer::class, BaseBuffer::class, Hook::class, Helper::class, Format::class, Engine::class, Wrapper::class, Storage::class, Container::class, Filesystem::class, HookWrapper::class, CommonHelper::class, FormatWrapper::class, CommonWrapper::class, Decorator::class, DecoratorHook::class, LogTrait::class, AjaxTrait::class, HookTrait::class, ErrorTrait::class, HelperTrait::class, NoticeTrait::class, WrapperTrait::class, SettingTrait::class, MemoizeTrait::class, TemplateTrait::class, InstanceTrait::class, SingletonTrait::class, ComponentTrait::class, TranslateTrait::class, BaseManipulate::class, ManipulateHook::class, ManipulateArray::class, ManipulateFormat::class, ManipulateString::class, ManipulateServer::class, ManipulateSetting::class, BaseManipulateType::class, ManipulateComponent::class, ManipulateValidation::class, BaseManipulateFormat::class, ConstantInterface::class]; $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); $qeswykqykqewiqmi = $yyauwyaeewsickwk->cmaecekuqkwmemms("\x50\122\x5f\x45\116\126\137\x53\x4c\x44"); $cmkqisoeyioisqaw = $this->cqmcaceygyqmuokq($cmkqisoeyioisqaw); $ewgwqamkygiqaawc = $this->iuygowkemiiwqmiw("\141\144\x76\x61\x6e\143\x65\x64\x2e\x70\x68\x70", ["\165\x73\x65\x73" => [Test::class, Buffer::class, Config::class], "\x63\154\141\x73\163\x65\163" => $cmkqisoeyioisqaw, "\156\x61\x6d\145\x73\160\x61\143\x65" => $this->gysieksskcaeyuom(Cache::class), "\166\x65\x6e\x64\x6f\x72\137\x70\141\164\150" => Foundation::couwksyewgyeooqe()->aksiegmauqiaueis(), "\x63\x61\143\x68\145\137\160\141\164\150" => $yyauwyaeewsickwk->aimgkskucmymyquc($qeswykqykqewiqmi, "\45\163", $this->gskqygiceygcguyo()), "\x63\x6f\x6e\x66\151\x67\137\x70\141\x74\x68" => $yyauwyaeewsickwk->aimgkskucmymyquc($qeswykqykqewiqmi, "\x25\x73", $miiyyswuessymmwe->cmaecekuqkwmemms("\120\122\137\124\110\105\x5f\x43\x4f\116\x46\111\x47\137\x50\x41\124\x48"))]); $ewgwqamkygiqaawc = (string) $this->ocksiywmkyaqseou("\x6f\x70\x74\137\141\144\x76\x61\x6e\x63\x65\144\x5f\143\141\x63\150\145\x5f\x66\151\x6c\145", $ewgwqamkygiqaawc); $iiaumsgauuyeqksw->cmsiuoqwaiwceuqq($mkomwsiykqigmqca, self::aeoikmkskgikaqmk, $ewgwqamkygiqaawc); $this->cimaucgayqyyccoc(sprintf(__("\117\160\x74\x69\155\151\x7a\x61\x74\151\157\156\40\101\144\166\141\x6e\x63\x65\144\40\x43\x61\x63\x68\145\x20\146\151\154\x65\x20\x67\x65\156\145\x72\x61\x74\145\144\40\163\165\x63\143\145\163\x73\x66\x75\154\x6c\x79\x20\151\x6e\40\45\163\x2e", PR__MDL__OPTIMIZATION), $mkomwsiykqigmqca), "\141\144\166\141\156\x63\145\55\x63\x61\x63\x68\145", self::smkwuwawwaqyimcq); siqagquguiemuoku: ycakugokkqkuqyiu: } public function cqmcaceygyqmuokq($cmkqisoeyioisqaw) : array { $aqykuigiuwmmcieu = []; $miiyyswuessymmwe = $this->caokeucsksukesyo()->iuekyyeesukysksy(); foreach ($cmkqisoeyioisqaw as $egkyssmuqcwaciya) { $aqykuigiuwmmcieu[$egkyssmuqcwaciya] = $miiyyswuessymmwe->eyqooeqgoyokqeoq($egkyssmuqcwaciya); sycygoiaiqqageym: } oouoqimaaqcmccay: return $aqykuigiuwmmcieu; } public function gysieksskcaeyuom($egkyssmuqcwaciya) : string { return substr($egkyssmuqcwaciya, 0, strrpos($egkyssmuqcwaciya, "\134")); } public function ecagqwsekgcaqqgk() : bool { $umuecysoywoumgwo = true; if (!(!$this->kcciqwskewsuaemk()->qygmgeswucmcmaiu($this->moassygiomssikqe()) && !$this->caokeucsksukesyo()->eiwcuqigayigimak()->cmaecekuqkwmemms("\103\101\x43\110\x45\137\101\x44\126\x41\116\x43\x45\x44\x5f\x43\x41\x43\110\105") && !$this->ocksiywmkyaqseou("\x6f\160\x74\137\x63\141\x63\150\x65\137\x67\x65\x6e\x65\162\x61\164\145\137\141\x64\x76\x61\x6e\143\145\x64\x5f\143\141\x63\x68\x65\x5f\x66\x69\154\145", true))) { goto gygawoqywkukmqee; } $umuecysoywoumgwo = false; $this->syiuacooagmooima("\141\144\166\x61\x6e\x63\145\144\x5f\x63\141\x63\x68\x65", __("\x43\x61\x63\150\x65", PR__MDL__OPTIMIZATION), $this->moassygiomssikqe()); gygawoqywkukmqee: return $umuecysoywoumgwo; } public function moassygiomssikqe() : ?string { return trailingslashit(WPMU_PLUGIN_DIR); } }
