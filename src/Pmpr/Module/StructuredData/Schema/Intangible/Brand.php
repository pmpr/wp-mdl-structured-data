<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66cb56fbc5c29             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData\Schema\Intangible; use Pmpr\Module\StructuredData\Setting; class Brand extends Intangible { protected $logo = null; protected $review = null; protected ?string $slogan = null; protected $aggregateRating = null; public function __construct($goiqeyeaqmicqiky = true) { $this->isGlobal = true; if (!$goiqeyeaqmicqiky) { goto eyiamcekkgkiawqy; } $qkqgcaykemoiecma = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq(); $this->wqkwkoysgkaaewkc(Setting::symcgieuakksimmu()->gckekgcikugasqwu())->usuqmwksoeaayaig($qkqgcaykemoiecma->ciqkaakiwsgqwiqu(self::NAME))->aayqioqmoaasosqc($qkqgcaykemoiecma->ciqkaakiwsgqwiqu(self::eqkeooqcsscoggia))->iaqckqwoiseyqaku(); eyiamcekkgkiawqy: parent::__construct($goiqeyeaqmicqiky); } public function oeaeiissukoeowwe() { return $this->aggregateRating; } public function nsqwikmawcqqyayk($gggmygsysokgmaiq) : self { $this->aggregateRating = $gggmygsysokgmaiq; return $this; } public function gckekgcikugasqwu() { return $this->logo; } public function wqkwkoysgkaaewkc($weowoqykiyuqcwam) { $this->logo = $weowoqykiyuqcwam; return $this; } public function yieewsuceqymoqeu() { return $this->review; } public function wacyaeigikuoaogy($qkcymeiwcsikkkkk) { $this->review = $qkcymeiwcsikkkkk; return $this; } public function qkmcugoswuqogqqk() { return $this->slogan; } public function aayqioqmoaasosqc($msmuuuiukkuoukoe) { $this->slogan = $msmuuuiukkuoukoe; return $this; } }
