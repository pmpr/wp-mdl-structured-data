<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             661f8d975be2f             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData\Schema\CreativeWork; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\StructuredData\DataType\Instruction; use Pmpr\Module\StructuredData\Schema\CreativeWork\MediaObject\ImageObject; use Pmpr\Module\StructuredData\Schema\Intangible\ItemList\HowToItem\HowToStep; use Pmpr\Module\StructuredData\Schema\Intangible\ItemList\HowToItem\HowToSupply; use Pmpr\Module\StructuredData\Schema\Intangible\ItemList\HowToItem\HowToTool; use Pmpr\Module\StructuredData\Schema\Intangible\StructuredValue\MonetaryAmount; use Pmpr\Module\StructuredData\Setting\Setting; class HowTo extends CreativeWork { protected $step = null; protected $tool = null; protected $supply = null; protected $estimatedCost = null; protected ?string $totalTime = null; public function __construct($omauuckqmiemgegq = [], $goiqeyeaqmicqiky = true) { if (!$omauuckqmiemgegq) { goto samwkqgwouggsguc; } $this->usuqmwksoeaayaig(ManipulateArray::get($omauuckqmiemgegq, self::qescuiwgsyuikume))->gucwmccyimoagwcm(ManipulateArray::get($omauuckqmiemgegq, self::eqkeooqcsscoggia)); if (!($mcqieaigyeeyaksm = ManipulateArray::get($omauuckqmiemgegq, self::mkousmkiawwousws))) { goto mwsmsguqqkcwiiuk; } $this->mwiamauscyiwogsu(new ImageObject($mcqieaigyeeyaksm)); mwsmsguqqkcwiiuk: $imeywacwecgemcco = ManipulateArray::get($omauuckqmiemgegq, "\143\x6f\x73\164"); $wwigiesyquoeawog = ManipulateArray::get($omauuckqmiemgegq, "\x63\165\162\162\x65\x6e\x63\171"); if (!($wwigiesyquoeawog && $imeywacwecgemcco)) { goto eeauyscekuckoues; } $this->ecqgemyswuaswooa((new MonetaryAmount())->iygyugseyaqwywyg($imeywacwecgemcco)->yakomucykaieeiqq($wwigiesyquoeawog)); eeauyscekuckoues: $sieqmaaeyogyamwk = ManipulateArray::get($omauuckqmiemgegq, "\164\x6f\164\141\154\124\x69\x6d\x65"); if (!$sieqmaaeyogyamwk) { goto eogwckcymuugikuy; } $this->oguioqiqyaioiuca(strtoupper($sieqmaaeyogyamwk)); eogwckcymuugikuy: $yeiuicqomkekqeck = ManipulateArray::get($omauuckqmiemgegq, "\x73\165\x70\160\154\x69\145\163"); if (!is_array($yeiuicqomkekqeck)) { goto qoqskyuuwueqkquk; } foreach ($yeiuicqomkekqeck as $momcykaoccoymeig => $egcsuueoacmkqwgy) { ++$momcykaoccoymeig; $this->gquekoigiqqkwiym((new HowToSupply())->usuqmwksoeaayaig($egcsuueoacmkqwgy->name)->iaqckqwoiseyqaku($this->cyamgsaeyiqasmcc()->ggiaseqygioygumq($momcykaoccoymeig))->weakiuagguweamee($momcykaoccoymeig)); wagqgeqymeqoeuyi: } msemumccgceyugmg: qoqskyuuwueqkquk: $qieqyuyaicouukye = ManipulateArray::get($omauuckqmiemgegq, "\164\157\157\x6c\163"); if (!is_array($qieqyuyaicouukye)) { goto asiqwuoswmigcaki; } foreach ($qieqyuyaicouukye as $momcykaoccoymeig => $scsoukmiqiescesc) { ++$momcykaoccoymeig; $this->gocqaqicsamyaeqc((new HowToTool())->usuqmwksoeaayaig($scsoukmiqiescesc->name)->iaqckqwoiseyqaku($this->cyamgsaeyiqasmcc()->ggiaseqygioygumq($momcykaoccoymeig))->weakiuagguweamee($momcykaoccoymeig)); wcugqegqsuuuwqao: } iwsuawwqomaowuii: asiqwuoswmigcaki: $asuggasaseaacmqu = ManipulateArray::get($omauuckqmiemgegq, "\163\x74\x65\160\x73"); if (!is_array($asuggasaseaacmqu)) { goto oomguqikqokqwgku; } foreach ($asuggasaseaacmqu as $momcykaoccoymeig => $wyeyeaaekyoyimqu) { $meqocwsecsywiiqs = ManipulateArray::get($wyeyeaaekyoyimqu, self::qescuiwgsyuikume); $mieuwqqskaueukye = ManipulateArray::get($wyeyeaaekyoyimqu, "\151\x6e\163\x74\162\165\x63\x74\x69\x6f\156\x73"); ++$momcykaoccoymeig; if (!($meqocwsecsywiiqs && is_array($mieuwqqskaueukye))) { goto acsqgiuageaasiyy; } $omayqgkqwmuqgugu = new HowToStep(); $mcqieaigyeeyaksm = ManipulateArray::get($wyeyeaaekyoyimqu, self::mkousmkiawwousws . self::mswocgcucqoaesaa); if ($mcqieaigyeeyaksm) { goto qgeugwymkkiacwoc; } $mcqieaigyeeyaksm = Setting::ygyiswukccscuqmm(); qgeugwymkkiacwoc: $omayqgkqwmuqgugu->mwiamauscyiwogsu(new ImageObject($mcqieaigyeeyaksm)); foreach ($mieuwqqskaueukye as $wgywewwaswowuooi => $imiasuqakwyyyemq) { if (!$imiasuqakwyyyemq instanceof Instruction) { goto mugqyyeayeyggqqk; } ++$wgywewwaswowuooi; $omayqgkqwmuqgugu->asssmuisouigmaom($imiasuqakwyyyemq->uqeoyqiwywwmsiew()->iaqckqwoiseyqaku($this->cyamgsaeyiqasmcc()->ggiaseqygioygumq("{$momcykaoccoymeig}\55{$wgywewwaswowuooi}"))); mugqyyeayeyggqqk: ouamogymawucwswu: } emmsycooskoqmgeg: $omayqgkqwmuqgugu->eyqkogeiqauioamw("{$this->ycqquoiyyuesegsy()}\x23\x73\164\x65\160{$momcykaoccoymeig}")->usuqmwksoeaayaig($meqocwsecsywiiqs)->iaqckqwoiseyqaku($this->cyamgsaeyiqasmcc()->ggiaseqygioygumq($momcykaoccoymeig))->weakiuagguweamee($momcykaoccoymeig); $this->mgqggiyywoageqmo($omayqgkqwmuqgugu); acsqgiuageaasiyy: mqicocmqegwukkwg: } ciykoyeioqgyaeqo: oomguqikqokqwgku: samwkqgwouggsguc: parent::__construct($goiqeyeaqmicqiky); } public function scecwgoqwqwaamgq() { return $this->estimatedCost; } public function ecqgemyswuaswooa($cscgeyumqcskuukg) : self { $this->estimatedCost = $cscgeyumqcskuukg; return $this; } public function qscamskeayuqiosa() : ?string { return $this->totalTime; } public function oguioqiqyaioiuca(?string $sieqmaaeyogyamwk) : self { $this->totalTime = $sieqmaaeyogyamwk; return $this; } public function ocqmggygciqgeuek() { return $this->supply; } public function gquekoigiqqkwiym(?HowToSupply $egcsuueoacmkqwgy) { if (is_array($this->ocqmggygciqgeuek())) { goto wyuemgggaqogsmsq; } $this->supply = []; wyuemgggaqogsmsq: $this->supply[] = $egcsuueoacmkqwgy; return $this; } public function mgakwmcemaaqcogk($egcsuueoacmkqwgy) : self { $this->supply = $egcsuueoacmkqwgy; return $this; } public function asgqmkcukouykiie() { return $this->tool; } public function gocqaqicsamyaeqc(?HowToTool $scsoukmiqiescesc) { if (is_array($this->asgqmkcukouykiie())) { goto guykyqecgswcsmws; } $this->tool = []; guykyqecgswcsmws: $this->tool[] = $scsoukmiqiescesc; return $this; } public function ocqcogaoggsakqky($scsoukmiqiescesc) : self { $this->tool = $scsoukmiqiescesc; return $this; } public function ouwekiquyskqewwi() { return $this->step; } public function mgqggiyywoageqmo(?HowToStep $wyeyeaaekyoyimqu) { if (is_array($this->ouwekiquyskqewwi())) { goto kkumywowcoycymeo; } $this->step = []; kkumywowcoycymeo: $this->step[] = $wyeyeaaekyoyimqu; return $this; } public function ccwiuiwgkmiwamyk($wyeyeaaekyoyimqu) : self { $this->step = $wyeyeaaekyoyimqu; return $this; } }
