<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6554af2fcfcfa             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData\Schema; use Pmpr\Common\Foundation\Helper\Traits\HelperTrait; use Pmpr\Common\Foundation\Interfaces\ConstantInterface; use Pmpr\Common\Foundation\Traits\ComponentTrait; use Pmpr\Common\Foundation\Traits\HookTrait; use Pmpr\Common\Foundation\Wrapper\Traits\WrapperTrait; use Pmpr\Module\StructuredData\DataType\Identifier; use Pmpr\Module\StructuredData\StructuredData; use WP_User; class Base implements ConstantInterface { use HookTrait, HelperTrait, WrapperTrait, ComponentTrait; protected ?string $id = null; protected ?string $type = null; protected bool $isGlobal = false; public function cykmceoageywgkqs() : bool { return $this->isGlobal; } public function mwikyscisascoeea() : ?string { if ($this->id) { goto emmsycooskoqmgeg; } $this->iaqckqwoiseyqaku(); emmsycooskoqmgeg: return $this->id; } public function ggiaseqygioygumq(?string $aokagokqyuysuksm) : Base { $this->id = $aokagokqyuysuksm; return $this; } public function iaqckqwoiseyqaku(?Identifier $owqaeesoaygymmcy = null) { $yyimiwcuegayoskq = $this->caokeucsksukesyo()->kyqakacqeumicgag()->iqoacwuiemooiysg(); $wamcomkuwysqgwgk = "\x25\x31\x24\x73\x2f\45\x32\x24\x73\57"; $migiiksoiymissge = null; $ccamueccusigaaio = null; $momcykaoccoymeig = null; $sqeykgyoooqysmca = null; if (!$owqaeesoaygymmcy) { goto ouamogymawucwswu; } $migiiksoiymissge = $owqaeesoaygymmcy->ycqquoiyyuesegsy(); $ccamueccusigaaio = $owqaeesoaygymmcy->squsacgomqgkakaw(); $momcykaoccoymeig = $owqaeesoaygymmcy->mwikyscisascoeea(); $sqeykgyoooqysmca = $owqaeesoaygymmcy->gueasuouwqysmomu(); ouamogymawucwswu: if ($migiiksoiymissge) { goto mugqyyeayeyggqqk; } $migiiksoiymissge = $this->ycqquoiyyuesegsy($this->cykmceoageywgkqs(), $yyimiwcuegayoskq); mugqyyeayeyggqqk: $migiiksoiymissge = trailingslashit($migiiksoiymissge); if ($ccamueccusigaaio instanceof WP_User) { goto oomguqikqokqwgku; } if ($ccamueccusigaaio && (is_string($ccamueccusigaaio) || is_numeric($ccamueccusigaaio))) { goto samwkqgwouggsguc; } goto acsqgiuageaasiyy; oomguqikqokqwgku: $migiiksoiymissge .= sprintf($wamcomkuwysqgwgk, self::meksegaoamowuwoq, $this->caokeucsksukesyo()->issssuygyewuaswa()->iooowgsqoyqseyuu($ccamueccusigaaio, true)); goto acsqgiuageaasiyy; samwkqgwouggsguc: $migiiksoiymissge .= "{$ccamueccusigaaio}\57"; acsqgiuageaasiyy: if ($sqeykgyoooqysmca) { goto wyuemgggaqogsmsq; } $sqeykgyoooqysmca = $this->gueasuouwqysmomu(); wyuemgggaqogsmsq: if (!$momcykaoccoymeig) { goto guykyqecgswcsmws; } $sqeykgyoooqysmca .= "\55{$momcykaoccoymeig}"; guykyqecgswcsmws: return $this->ggiaseqygioygumq(urlencode($this->caokeucsksukesyo()->gyecsegqciqykomu()->mkcmkkskeeaskowy($migiiksoiymissge)) . "\43{$sqeykgyoooqysmca}"); } public function cyamgsaeyiqasmcc() { return new Identifier(); } public function gueasuouwqysmomu() { if ($this->type) { goto kkumywowcoycymeo; } $this->aseocggwwegcmqes($this->caokeucsksukesyo()->owgcciayoweymuws()->mkwcwqkqeqkqyggc($this)); kkumywowcoycymeo: return $this->type; } public function mewggysoioyqegcw(string $oaukocmsckciqaok) { return $this->{$oaukocmsckciqaok}; } public function ecioiwwikqqgwqee(string $oaukocmsckciqaok, $eqgoocgaqwqcimie) { if (!($eqgoocgaqwqcimie !== null)) { goto miweggwqeiaeweia; } $this->{$oaukocmsckciqaok} = $eqgoocgaqwqcimie; miweggwqeiaeweia: return $this; } public function kmykkqwsssqqmwmg($uomewyckeuqoqocu = [], $oomggoqacsumwqqu = false) { if ($uomewyckeuqoqocu) { goto kqqiegkuqagcqsya; } $uomewyckeuqoqocu = $this->kikmasogcikysciu(); kqqiegkuqagcqsya: array_filter($uomewyckeuqoqocu); $uomewyckeuqoqocu = ["\100\x63\157\x6e\164\145\170\x74" => "\x68\164\164\160\x3a\57\57\x73\x63\150\x65\x6d\141\x2e\157\162\147\57"] + $uomewyckeuqoqocu; $qouiiuamucsomays = ''; if (!$uomewyckeuqoqocu) { goto iwekmyyccgiyuecc; } if ($oomggoqacsumwqqu && strnatcmp(PHP_VERSION, "\x35\x2e\x34\x2e\x30") >= 0) { goto ousiuuwgwkiyikyq; } $qouiiuamucsomays = json_encode($uomewyckeuqoqocu, JSON_HEX_QUOT | JSON_UNESCAPED_SLASHES); goto ogsaaqsaogcqiouy; ousiuuwgwkiyikyq: $qouiiuamucsomays = json_encode($uomewyckeuqoqocu, JSON_PRETTY_PRINT | JSON_HEX_QUOT | JSON_UNESCAPED_SLASHES); ogsaaqsaogcqiouy: iwekmyyccgiyuecc: return $qouiiuamucsomays; } public function kikmasogcikysciu() { $sogksuscggsicmac = ["\x40\164\x79\x70\x65" => $this->gueasuouwqysmomu(), "\x40\x69\x64" => $this->mwikyscisascoeea()]; $aowmesqseaiqimyu = [self::squoamkioomemiyi, self::gouqcwikiiygyasc, "\x69\163\107\x6c\x6f\x62\141\x6c", "\150\145\x6c\160\x65\x72", "\167\x72\x61\160\x70\x65\162"]; foreach (get_object_vars($this) as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { if (in_array($uusmaiomayssaecw, $aowmesqseaiqimyu)) { goto uiosisocuwokwkie; } $uusmaiomayssaecw = $this->ougekwycicscwquc($uusmaiomayssaecw); if (is_array($eqgoocgaqwqcimie)) { goto gicyayswqyuoekcq; } if ($eqgoocgaqwqcimie instanceof Thing) { goto mqkmcysgoiaouiwm; } $sogksuscggsicmac[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; goto kosaqwikueyksqmw; mqkmcysgoiaouiwm: $sogksuscggsicmac[$uusmaiomayssaecw] = $eqgoocgaqwqcimie->kikmasogcikysciu(); kosaqwikueyksqmw: goto iikiiioqiyegyaak; gicyayswqyuoekcq: $eqiiwaeiswqmusqm = []; foreach ($eqgoocgaqwqcimie as $wgywewwaswowuooi => $mokouoooiwsmcmiu) { $wgywewwaswowuooi = $this->ougekwycicscwquc($wgywewwaswowuooi); if ($mokouoooiwsmcmiu instanceof Thing) { goto ogqmesokykywseys; } $eqiiwaeiswqmusqm[$wgywewwaswowuooi] = $mokouoooiwsmcmiu; goto ykomgumacooyomsk; ogqmesokykywseys: $eqiiwaeiswqmusqm[$wgywewwaswowuooi] = $mokouoooiwsmcmiu->kikmasogcikysciu(); ykomgumacooyomsk: awoaooyoeoyeeqee: } cwwmimggaaecmucw: $sogksuscggsicmac[$uusmaiomayssaecw] = $eqiiwaeiswqmusqm; iikiiioqiyegyaak: uiosisocuwokwkie: aomysykcgikegiau: } ikqqskkqqwmwssoo: $sogksuscggsicmac = array_filter($sogksuscggsicmac); return $sogksuscggsicmac; } private function ougekwycicscwquc($eqgoocgaqwqcimie) { if (!(strpos($eqgoocgaqwqcimie, "\x5f") !== false)) { goto cuumeogeomowqisc; } $eqgoocgaqwqcimie = str_replace("\137", "\x2d", $eqgoocgaqwqcimie); cuumeogeomowqisc: return $eqgoocgaqwqcimie; } public function qcgakseyaikigqco($post = null) : ?string { return $this->sasweaqkmcaqweec($this->caokeucsksukesyo()->ayueggmoqeeukqmq()->qcgakseyaikigqco($post)); } public function ycqquoiyyuesegsy($sycgeiyakseiumqy = false, $yyimiwcuegayoskq = null) { return StructuredData::symcgieuakksimmu()->ycqquoiyyuesegsy($sycgeiyakseiumqy, $yyimiwcuegayoskq); } public function aseocggwwegcmqes(string $sqeykgyoooqysmca) : Base { $this->type = $sqeykgyoooqysmca; return $this; } public function weymkusmeageugsu($post = null) { return $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->squyiyimquqicqke("\x63", $post, false); } public function osswsoymmgisqmoy($post = null) { return $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->oukqamgqowciwoum("\x63", $post, false); } public function owmuuoycwiskaeme($mkuwoiyskieqciqe) { $owmuuoycwiskaeme = ''; if (empty($mkuwoiyskieqciqe)) { goto gcckqucukawcasgk; } $immmocykksywgkqu = floor($mkuwoiyskieqciqe / 86400); $mkuwoiyskieqciqe = $mkuwoiyskieqciqe % 86400; $kqqiasykicusiqaw = floor($mkuwoiyskieqciqe / 3600); $mkuwoiyskieqciqe = $mkuwoiyskieqciqe % 3600; $scuieskcukagwiys = floor($mkuwoiyskieqciqe / 60); $mkuwoiyskieqciqe = $mkuwoiyskieqciqe % 60; $owmuuoycwiskaeme = sprintf("\120\x25\144\x44\124\x25\144\110\45\x64\115\45\x64\123", $immmocykksywgkqu, $kqqiasykicusiqaw, $scuieskcukagwiys, $mkuwoiyskieqciqe); gcckqucukawcasgk: return $owmuuoycwiskaeme; } public function sasweaqkmcaqweec(?string $sociqikgoyemqaac) : ?string { if (mb_detect_encoding($sociqikgoyemqaac, "\x75\164\x66\x2d\x38", true)) { goto qmkaeeomgkwggoyo; } $sociqikgoyemqaac = utf8_encode($sociqikgoyemqaac); qmkaeeomgkwggoyo: return $sociqikgoyemqaac; } }
