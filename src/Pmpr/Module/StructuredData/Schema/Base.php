<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66eae930db6b1             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData\Schema; use Pmpr\Common\Foundation\Functions\Traits\HelperTrait; use Pmpr\Common\Foundation\Functions\Traits\WrapperTrait; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Traits\ComponentTrait; use Pmpr\Common\Foundation\Traits\HookTrait; use Pmpr\Module\StructuredData\DataType\Identifier; use Pmpr\Module\StructuredData\StructuredData; use WP_User; class Base { use HookTrait, HelperTrait, WrapperTrait, ComponentTrait; protected ?string $id = null; protected ?string $type = null; protected bool $isGlobal = false; public function cykmceoageywgkqs() : bool { return $this->isGlobal; } public function mwikyscisascoeea() : ?string { if ($this->id) { goto cuykwgmswkskqkyi; } $this->iaqckqwoiseyqaku(); cuykwgmswkskqkyi: return $this->id; } public function ggiaseqygioygumq(?string $aokagokqyuysuksm) : Base { $this->id = $aokagokqyuysuksm; return $this; } public function iaqckqwoiseyqaku(?Identifier $owqaeesoaygymmcy = null) { $yyimiwcuegayoskq = $this->caokeucsksukesyo()->kyqakacqeumicgag()->iqoacwuiemooiysg(); $wamcomkuwysqgwgk = "\45\61\44\x73\x2f\45\62\x24\x73\x2f"; $migiiksoiymissge = null; $ccamueccusigaaio = null; $momcykaoccoymeig = null; $sqeykgyoooqysmca = null; if (!$owqaeesoaygymmcy) { goto kuicqywysciceggs; } $migiiksoiymissge = $owqaeesoaygymmcy->ycqquoiyyuesegsy(); $ccamueccusigaaio = $owqaeesoaygymmcy->squsacgomqgkakaw(); $momcykaoccoymeig = $owqaeesoaygymmcy->mwikyscisascoeea(); $sqeykgyoooqysmca = $owqaeesoaygymmcy->gueasuouwqysmomu(); kuicqywysciceggs: if ($migiiksoiymissge) { goto mkwskuycuyguqqok; } $migiiksoiymissge = $this->ycqquoiyyuesegsy($this->cykmceoageywgkqs(), $yyimiwcuegayoskq); mkwskuycuyguqqok: $migiiksoiymissge = trailingslashit($migiiksoiymissge); if ($ccamueccusigaaio instanceof WP_User) { goto eqkauqciwewmgeoi; } if ($ccamueccusigaaio && (is_string($ccamueccusigaaio) || is_numeric($ccamueccusigaaio))) { goto kwagwqyusyiyoaqs; } goto sciwggaeogcoesiu; eqkauqciwewmgeoi: $migiiksoiymissge .= sprintf($wamcomkuwysqgwgk, Constants::meksegaoamowuwoq, $this->caokeucsksukesyo()->issssuygyewuaswa()->iooowgsqoyqseyuu($ccamueccusigaaio, true)); goto sciwggaeogcoesiu; kwagwqyusyiyoaqs: $migiiksoiymissge .= "{$ccamueccusigaaio}\57"; sciwggaeogcoesiu: if ($sqeykgyoooqysmca) { goto yowsmsiyimmimemc; } $sqeykgyoooqysmca = $this->gueasuouwqysmomu(); yowsmsiyimmimemc: if (!$momcykaoccoymeig) { goto kiqogmwcgcamwiig; } $sqeykgyoooqysmca .= "\55{$momcykaoccoymeig}"; kiqogmwcgcamwiig: return $this->ggiaseqygioygumq(urlencode($this->caokeucsksukesyo()->gyecsegqciqykomu()->mkcmkkskeeaskowy($migiiksoiymissge)) . "\x23{$sqeykgyoooqysmca}"); } public function cyamgsaeyiqasmcc() { return new Identifier(); } public function gueasuouwqysmomu() { if ($this->type) { goto iomcaiwewsawiamu; } $this->aseocggwwegcmqes($this->caokeucsksukesyo()->owgcciayoweymuws()->mkwcwqkqeqkqyggc($this)); iomcaiwewsawiamu: return $this->type; } public function mewggysoioyqegcw(string $oaukocmsckciqaok) { return $this->{$oaukocmsckciqaok}; } public function ecioiwwikqqgwqee(string $oaukocmsckciqaok, $eqgoocgaqwqcimie) { if (!($eqgoocgaqwqcimie !== null)) { goto sqiciiuwmykocycc; } $this->{$oaukocmsckciqaok} = $eqgoocgaqwqcimie; sqiciiuwmykocycc: return $this; } public function kmykkqwsssqqmwmg($uomewyckeuqoqocu = [], $oomggoqacsumwqqu = false) { if ($uomewyckeuqoqocu) { goto eequksumcoogyoem; } $uomewyckeuqoqocu = $this->kikmasogcikysciu(); eequksumcoogyoem: array_filter($uomewyckeuqoqocu); $uomewyckeuqoqocu = ["\100\x63\x6f\x6e\x74\145\x78\164" => "\x68\x74\x74\160\72\57\57\163\x63\150\x65\155\x61\x2e\x6f\x72\147\x2f"] + $uomewyckeuqoqocu; $qouiiuamucsomays = ''; if (!$uomewyckeuqoqocu) { goto ocokwuuquaokmasc; } if ($oomggoqacsumwqqu && strnatcmp(PHP_VERSION, "\x35\56\x34\56\60") >= 0) { goto uukumskkeggaowck; } $qouiiuamucsomays = json_encode($uomewyckeuqoqocu, JSON_HEX_QUOT | JSON_UNESCAPED_SLASHES); goto cggowoquuiwqkyew; uukumskkeggaowck: $qouiiuamucsomays = json_encode($uomewyckeuqoqocu, JSON_PRETTY_PRINT | JSON_HEX_QUOT | JSON_UNESCAPED_SLASHES); cggowoquuiwqkyew: ocokwuuquaokmasc: return $qouiiuamucsomays; } public function kikmasogcikysciu() { $sogksuscggsicmac = ["\100\x74\171\160\x65" => $this->gueasuouwqysmomu(), "\x40\x69\144" => $this->mwikyscisascoeea()]; $aowmesqseaiqimyu = [Constants::squoamkioomemiyi, Constants::gouqcwikiiygyasc, "\151\x73\x47\154\x6f\142\x61\154", "\150\x65\x6c\x70\145\x72", "\167\x72\141\x70\x70\x65\x72"]; foreach (get_object_vars($this) as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { if (in_array($uusmaiomayssaecw, $aowmesqseaiqimyu)) { goto goeoymmqqqeeoime; } $uusmaiomayssaecw = $this->ougekwycicscwquc($uusmaiomayssaecw); if (is_array($eqgoocgaqwqcimie)) { goto qgegkeomwscwwiuw; } if ($eqgoocgaqwqcimie instanceof Thing) { goto egasokooagakisiy; } $sogksuscggsicmac[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; goto kecwuwwcwokuksyq; egasokooagakisiy: $sogksuscggsicmac[$uusmaiomayssaecw] = $eqgoocgaqwqcimie->kikmasogcikysciu(); kecwuwwcwokuksyq: goto qmiwsequckckoaei; qgegkeomwscwwiuw: $eqiiwaeiswqmusqm = []; foreach ($eqgoocgaqwqcimie as $wgywewwaswowuooi => $mokouoooiwsmcmiu) { $wgywewwaswowuooi = $this->ougekwycicscwquc($wgywewwaswowuooi); if ($mokouoooiwsmcmiu instanceof Thing) { goto usqgaogkqgemuima; } $eqiiwaeiswqmusqm[$wgywewwaswowuooi] = $mokouoooiwsmcmiu; goto mswsoaimesegiiic; usqgaogkqgemuima: $eqiiwaeiswqmusqm[$wgywewwaswowuooi] = $mokouoooiwsmcmiu->kikmasogcikysciu(); mswsoaimesegiiic: wcesymwqykqoyuqk: } meawswgwagoqgkye: $sogksuscggsicmac[$uusmaiomayssaecw] = $eqiiwaeiswqmusqm; qmiwsequckckoaei: goeoymmqqqeeoime: goacqqsgaaigyuaw: } yiwiqaqmwiogawym: $sogksuscggsicmac = array_filter($sogksuscggsicmac); return $sogksuscggsicmac; } private function ougekwycicscwquc($eqgoocgaqwqcimie) { if (!(strpos($eqgoocgaqwqcimie, "\x5f") !== false)) { goto eiawsoasmscmqswa; } $eqgoocgaqwqcimie = str_replace("\137", "\x2d", $eqgoocgaqwqcimie); eiawsoasmscmqswa: return $eqgoocgaqwqcimie; } public function qcgakseyaikigqco($post = null) : ?string { return $this->sasweaqkmcaqweec($this->caokeucsksukesyo()->ayueggmoqeeukqmq()->qcgakseyaikigqco($post)); } public function ycqquoiyyuesegsy($sycgeiyakseiumqy = false, $yyimiwcuegayoskq = null) { return StructuredData::symcgieuakksimmu()->ycqquoiyyuesegsy($sycgeiyakseiumqy, $yyimiwcuegayoskq); } public function aseocggwwegcmqes(string $sqeykgyoooqysmca) : Base { $this->type = $sqeykgyoooqysmca; return $this; } public function weymkusmeageugsu($post = null) { return $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->squyiyimquqicqke("\143", $post, false); } public function osswsoymmgisqmoy($post = null) { return $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->oukqamgqowciwoum("\x63", $post, false); } public function owmuuoycwiskaeme($mkuwoiyskieqciqe) { $owmuuoycwiskaeme = ''; if (empty($mkuwoiyskieqciqe)) { goto ickcmqoiosquugwe; } $immmocykksywgkqu = floor($mkuwoiyskieqciqe / 86400); $mkuwoiyskieqciqe = $mkuwoiyskieqciqe % 86400; $kqqiasykicusiqaw = floor($mkuwoiyskieqciqe / 3600); $mkuwoiyskieqciqe = $mkuwoiyskieqciqe % 3600; $scuieskcukagwiys = floor($mkuwoiyskieqciqe / 60); $mkuwoiyskieqciqe = $mkuwoiyskieqciqe % 60; $owmuuoycwiskaeme = sprintf("\120\x25\144\104\124\x25\x64\x48\x25\x64\x4d\x25\x64\123", $immmocykksywgkqu, $kqqiasykicusiqaw, $scuieskcukagwiys, $mkuwoiyskieqciqe); ickcmqoiosquugwe: return $owmuuoycwiskaeme; } public function sasweaqkmcaqweec(?string $sociqikgoyemqaac) : ?string { if (mb_detect_encoding($sociqikgoyemqaac, "\x75\164\146\x2d\x38", true)) { goto qmeoaqmsuseueqiy; } $sociqikgoyemqaac = utf8_encode($sociqikgoyemqaac); qmeoaqmsuseueqiy: return $sociqikgoyemqaac; } }
