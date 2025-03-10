<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67cecae43b801             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData\Schema; use Pmpr\Common\Foundation\Functions\Traits\HelperTrait; use Pmpr\Common\Foundation\Functions\Traits\WrapperTrait; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Traits\HookTrait; use Pmpr\Module\StructuredData\DataType\Identifier; use Pmpr\Module\StructuredData\StructuredData; use WP_User; class Base { use HookTrait, HelperTrait, WrapperTrait; protected ?string $id = null; protected ?string $type = null; protected bool $isGlobal = false; public function cykmceoageywgkqs() : bool { return $this->isGlobal; } public function mwikyscisascoeea() : ?string { return $this->id; } public function xauiwawimomcgksy(?string $aokagokqyuysuksm) : Base { $this->id = $aokagokqyuysuksm; return $this; } public function cyamgsaeyiqasmcc() { return new Identifier(); } public function gueasuouwqysmomu() { if (!$this->type) { $this->aseocggwwegcmqes($this->caokeucsksukesyo()->owgcciayoweymuws()->mkwcwqkqeqkqyggc($this)); } return $this->type; } public function mewggysoioyqegcw(string $oaukocmsckciqaok) { return $this->{$oaukocmsckciqaok}; } public function ecioiwwikqqgwqee(string $oaukocmsckciqaok, $eqgoocgaqwqcimie) { if ($eqgoocgaqwqcimie !== null) { $this->{$oaukocmsckciqaok} = $eqgoocgaqwqcimie; } return $this; } public function kmykkqwsssqqmwmg($uomewyckeuqoqocu = [], $oomggoqacsumwqqu = false) { if (!$uomewyckeuqoqocu) { $uomewyckeuqoqocu = $this->kikmasogcikysciu(); } array_filter($uomewyckeuqoqocu); $uomewyckeuqoqocu = ['@context' => 'http://schema.org/'] + $uomewyckeuqoqocu; $qouiiuamucsomays = ''; if ($uomewyckeuqoqocu) { if ($oomggoqacsumwqqu && strnatcmp(PHP_VERSION, '5.4.0') >= 0) { $qouiiuamucsomays = json_encode($uomewyckeuqoqocu, JSON_PRETTY_PRINT | JSON_HEX_QUOT | JSON_UNESCAPED_SLASHES); } else { $qouiiuamucsomays = json_encode($uomewyckeuqoqocu, JSON_HEX_QUOT | JSON_UNESCAPED_SLASHES); } } return $qouiiuamucsomays; } public function kikmasogcikysciu() { $sogksuscggsicmac = ['@type' => $this->gueasuouwqysmomu(), '@id' => $this->mwikyscisascoeea()]; $aowmesqseaiqimyu = [Constants::squoamkioomemiyi, Constants::gouqcwikiiygyasc, 'isGlobal', 'helper', 'wrapper']; foreach (get_object_vars($this) as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { if (!in_array($uusmaiomayssaecw, $aowmesqseaiqimyu, true)) { $uusmaiomayssaecw = $this->ougekwycicscwquc($uusmaiomayssaecw); if (is_array($eqgoocgaqwqcimie)) { $eqiiwaeiswqmusqm = []; foreach ($eqgoocgaqwqcimie as $wgywewwaswowuooi => $mokouoooiwsmcmiu) { $wgywewwaswowuooi = $this->ougekwycicscwquc($wgywewwaswowuooi); if ($mokouoooiwsmcmiu instanceof Thing) { $eqiiwaeiswqmusqm[$wgywewwaswowuooi] = $mokouoooiwsmcmiu->kikmasogcikysciu(); } else { $eqiiwaeiswqmusqm[$wgywewwaswowuooi] = $mokouoooiwsmcmiu; } } $sogksuscggsicmac[$uusmaiomayssaecw] = $eqiiwaeiswqmusqm; } else { if ($eqgoocgaqwqcimie instanceof Thing) { $sogksuscggsicmac[$uusmaiomayssaecw] = $eqgoocgaqwqcimie->kikmasogcikysciu(); } else { $sogksuscggsicmac[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; } } } } return array_filter($sogksuscggsicmac); } private function ougekwycicscwquc($eqgoocgaqwqcimie) { if (strpos($eqgoocgaqwqcimie, '_') !== false) { $eqgoocgaqwqcimie = str_replace('_', '-', $eqgoocgaqwqcimie); } return $eqgoocgaqwqcimie; } public function qcgakseyaikigqco($post = null) : ?string { return $this->sasweaqkmcaqweec($this->caokeucsksukesyo()->ayueggmoqeeukqmq()->qcgakseyaikigqco($post)); } public function ycqquoiyyuesegsy($sycgeiyakseiumqy = false, $yyimiwcuegayoskq = null) { return StructuredData::symcgieuakksimmu()->ycqquoiyyuesegsy($sycgeiyakseiumqy, $yyimiwcuegayoskq); } public function aseocggwwegcmqes(string $sqeykgyoooqysmca) : Base { $this->type = $sqeykgyoooqysmca; return $this; } public function weymkusmeageugsu($post = null) { return $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->squyiyimquqicqke('c', $post, false); } public function osswsoymmgisqmoy($post = null) { return $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->oukqamgqowciwoum('c', $post, false); } public function owmuuoycwiskaeme($mkuwoiyskieqciqe) { $owmuuoycwiskaeme = ''; if (!empty($mkuwoiyskieqciqe)) { $immmocykksywgkqu = floor($mkuwoiyskieqciqe / 86400); $mkuwoiyskieqciqe = $mkuwoiyskieqciqe % 86400; $kqqiasykicusiqaw = floor($mkuwoiyskieqciqe / 3600); $mkuwoiyskieqciqe = $mkuwoiyskieqciqe % 3600; $scuieskcukagwiys = floor($mkuwoiyskieqciqe / 60); $mkuwoiyskieqciqe = $mkuwoiyskieqciqe % 60; $owmuuoycwiskaeme = sprintf('P%dDT%dH%dM%dS', $immmocykksywgkqu, $kqqiasykicusiqaw, $scuieskcukagwiys, $mkuwoiyskieqciqe); } return $owmuuoycwiskaeme; } public function sasweaqkmcaqweec(?string $sociqikgoyemqaac) : ?string { if (!mb_detect_encoding($sociqikgoyemqaac, 'utf-8', true)) { $sociqikgoyemqaac = utf8_encode($sociqikgoyemqaac); } return $sociqikgoyemqaac; } }
