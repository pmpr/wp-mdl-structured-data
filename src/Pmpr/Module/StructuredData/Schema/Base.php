<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6620edd58ef76             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData\Schema; use Pmpr\Common\Foundation\Functions\Traits\HelperTrait; use Pmpr\Common\Foundation\Functions\Traits\WrapperTrait; use Pmpr\Common\Foundation\Interfaces\ConstantInterface; use Pmpr\Common\Foundation\Traits\ComponentTrait; use Pmpr\Common\Foundation\Traits\HookTrait; use Pmpr\Module\StructuredData\DataType\Identifier; use Pmpr\Module\StructuredData\StructuredData; use WP_User; class Base implements ConstantInterface { use HookTrait, HelperTrait, WrapperTrait, ComponentTrait; protected ?string $id = null; protected ?string $type = null; protected bool $isGlobal = false; public function cykmceoageywgkqs() : bool { return $this->isGlobal; } public function mwikyscisascoeea() : ?string { if ($this->id) { goto wmmggowmigekyoso; } $this->iaqckqwoiseyqaku(); wmmggowmigekyoso: return $this->id; } public function ggiaseqygioygumq(?string $aokagokqyuysuksm) : Base { $this->id = $aokagokqyuysuksm; return $this; } public function iaqckqwoiseyqaku(?Identifier $owqaeesoaygymmcy = null) { $yyimiwcuegayoskq = $this->caokeucsksukesyo()->kyqakacqeumicgag()->iqoacwuiemooiysg(); $wamcomkuwysqgwgk = "\45\61\x24\163\57\x25\62\x24\x73\x2f"; $migiiksoiymissge = null; $ccamueccusigaaio = null; $momcykaoccoymeig = null; $sqeykgyoooqysmca = null; if (!$owqaeesoaygymmcy) { goto soqqemyioggmoakg; } $migiiksoiymissge = $owqaeesoaygymmcy->ycqquoiyyuesegsy(); $ccamueccusigaaio = $owqaeesoaygymmcy->squsacgomqgkakaw(); $momcykaoccoymeig = $owqaeesoaygymmcy->mwikyscisascoeea(); $sqeykgyoooqysmca = $owqaeesoaygymmcy->gueasuouwqysmomu(); soqqemyioggmoakg: if ($migiiksoiymissge) { goto acaqummmoyiemqss; } $migiiksoiymissge = $this->ycqquoiyyuesegsy($this->cykmceoageywgkqs(), $yyimiwcuegayoskq); acaqummmoyiemqss: $migiiksoiymissge = trailingslashit($migiiksoiymissge); if ($ccamueccusigaaio instanceof WP_User) { goto eeqesooyqagwawae; } if ($ccamueccusigaaio && (is_string($ccamueccusigaaio) || is_numeric($ccamueccusigaaio))) { goto oqugqwcyomiaaoqu; } goto suswcqoyyqkkquuo; eeqesooyqagwawae: $migiiksoiymissge .= sprintf($wamcomkuwysqgwgk, self::meksegaoamowuwoq, $this->caokeucsksukesyo()->issssuygyewuaswa()->iooowgsqoyqseyuu($ccamueccusigaaio, true)); goto suswcqoyyqkkquuo; oqugqwcyomiaaoqu: $migiiksoiymissge .= "{$ccamueccusigaaio}\x2f"; suswcqoyyqkkquuo: if ($sqeykgyoooqysmca) { goto foeeqckqsyockkak; } $sqeykgyoooqysmca = $this->gueasuouwqysmomu(); foeeqckqsyockkak: if (!$momcykaoccoymeig) { goto iekumemscwieugqw; } $sqeykgyoooqysmca .= "\55{$momcykaoccoymeig}"; iekumemscwieugqw: return $this->ggiaseqygioygumq(urlencode($this->caokeucsksukesyo()->gyecsegqciqykomu()->mkcmkkskeeaskowy($migiiksoiymissge)) . "\43{$sqeykgyoooqysmca}"); } public function cyamgsaeyiqasmcc() { return new Identifier(); } public function gueasuouwqysmomu() { if ($this->type) { goto hoeeyiowekaeemko; } $this->aseocggwwegcmqes($this->caokeucsksukesyo()->owgcciayoweymuws()->mkwcwqkqeqkqyggc($this)); hoeeyiowekaeemko: return $this->type; } public function mewggysoioyqegcw(string $oaukocmsckciqaok) { return $this->{$oaukocmsckciqaok}; } public function ecioiwwikqqgwqee(string $oaukocmsckciqaok, $eqgoocgaqwqcimie) { if (!($eqgoocgaqwqcimie !== null)) { goto kymkucucyeoeikim; } $this->{$oaukocmsckciqaok} = $eqgoocgaqwqcimie; kymkucucyeoeikim: return $this; } public function kmykkqwsssqqmwmg($uomewyckeuqoqocu = [], $oomggoqacsumwqqu = false) { if ($uomewyckeuqoqocu) { goto usquiuuyiyqaeyiu; } $uomewyckeuqoqocu = $this->kikmasogcikysciu(); usquiuuyiyqaeyiu: array_filter($uomewyckeuqoqocu); $uomewyckeuqoqocu = ["\100\143\157\156\x74\145\x78\x74" => "\150\x74\x74\x70\72\57\57\x73\143\x68\145\155\x61\x2e\157\162\147\57"] + $uomewyckeuqoqocu; $qouiiuamucsomays = ''; if (!$uomewyckeuqoqocu) { goto uqqaiagaeqgqgaiy; } if ($oomggoqacsumwqqu && strnatcmp(PHP_VERSION, "\65\x2e\x34\56\x30") >= 0) { goto qicwaskssogcokgm; } $qouiiuamucsomays = json_encode($uomewyckeuqoqocu, JSON_HEX_QUOT | JSON_UNESCAPED_SLASHES); goto uguigkcmukuouway; qicwaskssogcokgm: $qouiiuamucsomays = json_encode($uomewyckeuqoqocu, JSON_PRETTY_PRINT | JSON_HEX_QUOT | JSON_UNESCAPED_SLASHES); uguigkcmukuouway: uqqaiagaeqgqgaiy: return $qouiiuamucsomays; } public function kikmasogcikysciu() { $sogksuscggsicmac = ["\x40\164\171\160\x65" => $this->gueasuouwqysmomu(), "\x40\x69\x64" => $this->mwikyscisascoeea()]; $aowmesqseaiqimyu = [self::squoamkioomemiyi, self::gouqcwikiiygyasc, "\x69\x73\x47\x6c\x6f\142\141\x6c", "\150\145\x6c\160\145\162", "\167\162\x61\x70\x70\145\162"]; foreach (get_object_vars($this) as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { if (in_array($uusmaiomayssaecw, $aowmesqseaiqimyu)) { goto ewymsmkkiksgwysk; } $uusmaiomayssaecw = $this->ougekwycicscwquc($uusmaiomayssaecw); if (is_array($eqgoocgaqwqcimie)) { goto syiqkaasoueowwui; } if ($eqgoocgaqwqcimie instanceof Thing) { goto skkamseieeusycye; } $sogksuscggsicmac[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; goto cgiscsqwwgqqaeqi; skkamseieeusycye: $sogksuscggsicmac[$uusmaiomayssaecw] = $eqgoocgaqwqcimie->kikmasogcikysciu(); cgiscsqwwgqqaeqi: goto giaacoqqqsekcayy; syiqkaasoueowwui: $eqiiwaeiswqmusqm = []; foreach ($eqgoocgaqwqcimie as $wgywewwaswowuooi => $mokouoooiwsmcmiu) { $wgywewwaswowuooi = $this->ougekwycicscwquc($wgywewwaswowuooi); if ($mokouoooiwsmcmiu instanceof Thing) { goto soaccwqimeksgwiw; } $eqiiwaeiswqmusqm[$wgywewwaswowuooi] = $mokouoooiwsmcmiu; goto wiysogeqqwgioyka; soaccwqimeksgwiw: $eqiiwaeiswqmusqm[$wgywewwaswowuooi] = $mokouoooiwsmcmiu->kikmasogcikysciu(); wiysogeqqwgioyka: suqkuqygkkgwyaie: } aegysmeecgcgayyw: $sogksuscggsicmac[$uusmaiomayssaecw] = $eqiiwaeiswqmusqm; giaacoqqqsekcayy: ewymsmkkiksgwysk: gaomwagkcciesyqy: } esuiysskoweawsue: $sogksuscggsicmac = array_filter($sogksuscggsicmac); return $sogksuscggsicmac; } private function ougekwycicscwquc($eqgoocgaqwqcimie) { if (!(strpos($eqgoocgaqwqcimie, "\137") !== false)) { goto cmegwsegsosyqcai; } $eqgoocgaqwqcimie = str_replace("\x5f", "\55", $eqgoocgaqwqcimie); cmegwsegsosyqcai: return $eqgoocgaqwqcimie; } public function qcgakseyaikigqco($post = null) : ?string { return $this->sasweaqkmcaqweec($this->caokeucsksukesyo()->ayueggmoqeeukqmq()->qcgakseyaikigqco($post)); } public function ycqquoiyyuesegsy($sycgeiyakseiumqy = false, $yyimiwcuegayoskq = null) { return StructuredData::symcgieuakksimmu()->ycqquoiyyuesegsy($sycgeiyakseiumqy, $yyimiwcuegayoskq); } public function aseocggwwegcmqes(string $sqeykgyoooqysmca) : Base { $this->type = $sqeykgyoooqysmca; return $this; } public function weymkusmeageugsu($post = null) { return $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->squyiyimquqicqke("\143", $post, false); } public function osswsoymmgisqmoy($post = null) { return $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->oukqamgqowciwoum("\x63", $post, false); } public function owmuuoycwiskaeme($mkuwoiyskieqciqe) { $owmuuoycwiskaeme = ''; if (empty($mkuwoiyskieqciqe)) { goto wmywuusgukmmaams; } $immmocykksywgkqu = floor($mkuwoiyskieqciqe / 86400); $mkuwoiyskieqciqe = $mkuwoiyskieqciqe % 86400; $kqqiasykicusiqaw = floor($mkuwoiyskieqciqe / 3600); $mkuwoiyskieqciqe = $mkuwoiyskieqciqe % 3600; $scuieskcukagwiys = floor($mkuwoiyskieqciqe / 60); $mkuwoiyskieqciqe = $mkuwoiyskieqciqe % 60; $owmuuoycwiskaeme = sprintf("\120\45\x64\x44\x54\x25\x64\110\x25\x64\x4d\x25\x64\x53", $immmocykksywgkqu, $kqqiasykicusiqaw, $scuieskcukagwiys, $mkuwoiyskieqciqe); wmywuusgukmmaams: return $owmuuoycwiskaeme; } public function sasweaqkmcaqweec(?string $sociqikgoyemqaac) : ?string { if (mb_detect_encoding($sociqikgoyemqaac, "\x75\x74\146\55\70", true)) { goto gkyawqqcmigqgaiq; } $sociqikgoyemqaac = utf8_encode($sociqikgoyemqaac); gkyawqqcmigqgaiq: return $sociqikgoyemqaac; } }
