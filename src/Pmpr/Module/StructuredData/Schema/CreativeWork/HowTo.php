<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66a58c4c1fb8b             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData\Schema\CreativeWork; use Pmpr\Module\StructuredData\DataType\Instruction; use Pmpr\Module\StructuredData\Schema\CreativeWork\MediaObject\ImageObject; use Pmpr\Module\StructuredData\Schema\Intangible\ItemList\HowToItem\HowToStep; use Pmpr\Module\StructuredData\Schema\Intangible\ItemList\HowToItem\HowToSupply; use Pmpr\Module\StructuredData\Schema\Intangible\ItemList\HowToItem\HowToTool; use Pmpr\Module\StructuredData\Schema\Intangible\StructuredValue\MonetaryAmount; use Pmpr\Module\StructuredData\Setting; class HowTo extends CreativeWork { protected $step = null; protected $tool = null; protected $supply = null; protected $estimatedCost = null; protected ?string $totalTime = null; public function __construct($omauuckqmiemgegq = [], $goiqeyeaqmicqiky = true) { if (!$omauuckqmiemgegq) { goto gmwykkouysyaqwqm; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $this->usuqmwksoeaayaig($gkyciwoiiisgywcs->get($omauuckqmiemgegq, self::qescuiwgsyuikume))->gucwmccyimoagwcm($gkyciwoiiisgywcs->get($omauuckqmiemgegq, self::eqkeooqcsscoggia)); if (!($mcqieaigyeeyaksm = $gkyciwoiiisgywcs->get($omauuckqmiemgegq, self::mkousmkiawwousws))) { goto aomysykcgikegiau; } $this->mwiamauscyiwogsu(new ImageObject($mcqieaigyeeyaksm)); aomysykcgikegiau: $imeywacwecgemcco = $gkyciwoiiisgywcs->get($omauuckqmiemgegq, "\x63\x6f\x73\164"); $wwigiesyquoeawog = $gkyciwoiiisgywcs->get($omauuckqmiemgegq, "\143\165\x72\x72\x65\x6e\143\171"); if (!($wwigiesyquoeawog && $imeywacwecgemcco)) { goto cwwmimggaaecmucw; } $this->ecqgemyswuaswooa((new MonetaryAmount())->iygyugseyaqwywyg($imeywacwecgemcco)->yakomucykaieeiqq($wwigiesyquoeawog)); cwwmimggaaecmucw: $sieqmaaeyogyamwk = $gkyciwoiiisgywcs->get($omauuckqmiemgegq, "\164\157\x74\141\x6c\124\151\155\145"); if (!$sieqmaaeyogyamwk) { goto awoaooyoeoyeeqee; } $this->oguioqiqyaioiuca(strtoupper($sieqmaaeyogyamwk)); awoaooyoeoyeeqee: $yeiuicqomkekqeck = $gkyciwoiiisgywcs->get($omauuckqmiemgegq, "\163\x75\x70\x70\154\x69\145\163"); if (!is_array($yeiuicqomkekqeck)) { goto mqkmcysgoiaouiwm; } foreach ($yeiuicqomkekqeck as $momcykaoccoymeig => $egcsuueoacmkqwgy) { ++$momcykaoccoymeig; $this->gquekoigiqqkwiym((new HowToSupply())->usuqmwksoeaayaig($egcsuueoacmkqwgy->name)->iaqckqwoiseyqaku($this->cyamgsaeyiqasmcc()->ggiaseqygioygumq($momcykaoccoymeig))->weakiuagguweamee($momcykaoccoymeig)); ykomgumacooyomsk: } ogqmesokykywseys: mqkmcysgoiaouiwm: $qieqyuyaicouukye = $gkyciwoiiisgywcs->get($omauuckqmiemgegq, "\x74\x6f\157\x6c\163"); if (!is_array($qieqyuyaicouukye)) { goto iikiiioqiyegyaak; } foreach ($qieqyuyaicouukye as $momcykaoccoymeig => $scsoukmiqiescesc) { ++$momcykaoccoymeig; $this->gocqaqicsamyaeqc((new HowToTool())->usuqmwksoeaayaig($scsoukmiqiescesc->name)->iaqckqwoiseyqaku($this->cyamgsaeyiqasmcc()->ggiaseqygioygumq($momcykaoccoymeig))->weakiuagguweamee($momcykaoccoymeig)); gicyayswqyuoekcq: } kosaqwikueyksqmw: iikiiioqiyegyaak: $asuggasaseaacmqu = $gkyciwoiiisgywcs->get($omauuckqmiemgegq, "\x73\x74\x65\160\x73"); if (!is_array($asuggasaseaacmqu)) { goto cogywoqcqummsyus; } foreach ($asuggasaseaacmqu as $momcykaoccoymeig => $wyeyeaaekyoyimqu) { $meqocwsecsywiiqs = $gkyciwoiiisgywcs->get($wyeyeaaekyoyimqu, self::qescuiwgsyuikume); $mieuwqqskaueukye = $gkyciwoiiisgywcs->get($wyeyeaaekyoyimqu, "\x69\156\163\164\x72\x75\143\164\151\157\x6e\x73"); ++$momcykaoccoymeig; if (!($meqocwsecsywiiqs && is_array($mieuwqqskaueukye))) { goto eekcoeikaeaaeyii; } $omayqgkqwmuqgugu = new HowToStep(); $mcqieaigyeeyaksm = $gkyciwoiiisgywcs->get($wyeyeaaekyoyimqu, self::mkousmkiawwousws . self::mswocgcucqoaesaa); if ($mcqieaigyeeyaksm) { goto gcckqucukawcasgk; } $mcqieaigyeeyaksm = Setting::symcgieuakksimmu()->ygyiswukccscuqmm(); gcckqucukawcasgk: $omayqgkqwmuqgugu->mwiamauscyiwogsu(new ImageObject($mcqieaigyeeyaksm)); foreach ($mieuwqqskaueukye as $wgywewwaswowuooi => $imiasuqakwyyyemq) { if (!$imiasuqakwyyyemq instanceof Instruction) { goto ocaguquugeamqckq; } ++$wgywewwaswowuooi; $omayqgkqwmuqgugu->asssmuisouigmaom($imiasuqakwyyyemq->uqeoyqiwywwmsiew()->iaqckqwoiseyqaku($this->cyamgsaeyiqasmcc()->ggiaseqygioygumq("{$momcykaoccoymeig}\55{$wgywewwaswowuooi}"))); ocaguquugeamqckq: csammceowmqwaamq: } qmkaeeomgkwggoyo: $omayqgkqwmuqgugu->eyqkogeiqauioamw("{$this->ycqquoiyyuesegsy()}\43\x73\x74\145\160{$momcykaoccoymeig}")->usuqmwksoeaayaig($meqocwsecsywiiqs)->iaqckqwoiseyqaku($this->cyamgsaeyiqasmcc()->ggiaseqygioygumq($momcykaoccoymeig))->weakiuagguweamee($momcykaoccoymeig); $this->mgqggiyywoageqmo($omayqgkqwmuqgugu); eekcoeikaeaaeyii: cuumeogeomowqisc: } uiosisocuwokwkie: cogywoqcqummsyus: gmwykkouysyaqwqm: parent::__construct($goiqeyeaqmicqiky); } public function scecwgoqwqwaamgq() { return $this->estimatedCost; } public function ecqgemyswuaswooa($cscgeyumqcskuukg) : self { $this->estimatedCost = $cscgeyumqcskuukg; return $this; } public function qscamskeayuqiosa() : ?string { return $this->totalTime; } public function oguioqiqyaioiuca(?string $sieqmaaeyogyamwk) : self { $this->totalTime = $sieqmaaeyogyamwk; return $this; } public function ocqmggygciqgeuek() { return $this->supply; } public function gquekoigiqqkwiym(?HowToSupply $egcsuueoacmkqwgy) { if (is_array($this->ocqmggygciqgeuek())) { goto ugqwuugsweqgmywk; } $this->supply = []; ugqwuugsweqgmywk: $this->supply[] = $egcsuueoacmkqwgy; return $this; } public function mgakwmcemaaqcogk($egcsuueoacmkqwgy) : self { $this->supply = $egcsuueoacmkqwgy; return $this; } public function asgqmkcukouykiie() { return $this->tool; } public function gocqaqicsamyaeqc(?HowToTool $scsoukmiqiescesc) { if (is_array($this->asgqmkcukouykiie())) { goto uaukmuiwskcemcsw; } $this->tool = []; uaukmuiwskcemcsw: $this->tool[] = $scsoukmiqiescesc; return $this; } public function ocqcogaoggsakqky($scsoukmiqiescesc) : self { $this->tool = $scsoukmiqiescesc; return $this; } public function ouwekiquyskqewwi() { return $this->step; } public function mgqggiyywoageqmo(?HowToStep $wyeyeaaekyoyimqu) { if (is_array($this->ouwekiquyskqewwi())) { goto sockeswygwcskeuq; } $this->step = []; sockeswygwcskeuq: $this->step[] = $wyeyeaaekyoyimqu; return $this; } public function ccwiuiwgkmiwamyk($wyeyeaaekyoyimqu) : self { $this->step = $wyeyeaaekyoyimqu; return $this; } }
