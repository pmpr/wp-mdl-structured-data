<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             624c0d9d51a29             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData\Schema; use Pmpr\Common\Foundation\Interfaces\ConstantInterface; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePage; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString; use Pmpr\Common\Foundation\Traits\ComponentTrait; use Pmpr\Common\Foundation\Traits\HookTrait; use Pmpr\Module\StructuredData\DataType\Identifier; use Pmpr\Module\StructuredData\StructuredData; use WP_User; class Base implements ConstantInterface { use HookTrait, ComponentTrait; protected ?string $id = null; protected ?string $type = null; protected bool $isGlobal = false; public function cykmceoageywgkqs() : bool { return $this->isGlobal; } public function mwikyscisascoeea() : ?string { if ($this->id) { goto emqswoaawgeyosmi; } $this->iaqckqwoiseyqaku(); emqswoaawgeyosmi: return $this->id; } public function ggiaseqygioygumq(?string $aokagokqyuysuksm) : Base { $this->id = $aokagokqyuysuksm; return $this; } public function iaqckqwoiseyqaku(?Identifier $owqaeesoaygymmcy = null) { $yyimiwcuegayoskq = ManipulatePage::iqoacwuiemooiysg(); $wamcomkuwysqgwgk = "\x25\61\x24\163\57\45\x32\44\x73\x2f"; $migiiksoiymissge = null; $ccamueccusigaaio = null; $momcykaoccoymeig = null; $sqeykgyoooqysmca = null; if (!$owqaeesoaygymmcy) { goto iwsmmkqaoksmocok; } $migiiksoiymissge = $owqaeesoaygymmcy->ycqquoiyyuesegsy(); $ccamueccusigaaio = $owqaeesoaygymmcy->squsacgomqgkakaw(); $momcykaoccoymeig = $owqaeesoaygymmcy->mwikyscisascoeea(); $sqeykgyoooqysmca = $owqaeesoaygymmcy->gueasuouwqysmomu(); iwsmmkqaoksmocok: if ($migiiksoiymissge) { goto esikeyqyuikmaiek; } $migiiksoiymissge = $this->ycqquoiyyuesegsy($this->cykmceoageywgkqs(), $yyimiwcuegayoskq); esikeyqyuikmaiek: $migiiksoiymissge = trailingslashit($migiiksoiymissge); if ($ccamueccusigaaio instanceof WP_User) { goto qiiigwkqeoewsuwm; } if ($ccamueccusigaaio && is_string($ccamueccusigaaio)) { goto esaqcqqwuussiiwo; } goto okkmcocqokkskasy; qiiigwkqeoewsuwm: $migiiksoiymissge .= sprintf($wamcomkuwysqgwgk, "\x75\x73\x65\x72", ManipulateUser::mwikyscisascoeea($ccamueccusigaaio, true)); goto okkmcocqokkskasy; esaqcqqwuussiiwo: $migiiksoiymissge .= "{$ccamueccusigaaio}\x2f"; okkmcocqokkskasy: if ($sqeykgyoooqysmca) { goto ikqeeaysmqgcgawq; } $sqeykgyoooqysmca = $this->gueasuouwqysmomu(); ikqeeaysmqgcgawq: if (!$momcykaoccoymeig) { goto mscgewkcqcoowweg; } $sqeykgyoooqysmca .= "\55{$momcykaoccoymeig}"; mscgewkcqcoowweg: return $this->ggiaseqygioygumq("{$migiiksoiymissge}\43{$sqeykgyoooqysmca}"); } public function cyamgsaeyiqasmcc() { return new Identifier(); } public function gueasuouwqysmomu() { if ($this->type) { goto suqcsgaosywaauuu; } $this->aseocggwwegcmqes(ManipulateString::mkwcwqkqeqkqyggc($this)); suqcsgaosywaauuu: return $this->type; } public function mewggysoioyqegcw(string $oaukocmsckciqaok) { return $this->{$oaukocmsckciqaok}; } public function ecioiwwikqqgwqee(string $oaukocmsckciqaok, $eqgoocgaqwqcimie) { if (!($eqgoocgaqwqcimie !== null)) { goto wwukgaquuyoissgy; } $this->{$oaukocmsckciqaok} = $eqgoocgaqwqcimie; wwukgaquuyoissgy: return $this; } public function kmykkqwsssqqmwmg($uomewyckeuqoqocu = [], $oomggoqacsumwqqu = false) { if ($uomewyckeuqoqocu) { goto gsygwgsiawgmqiyi; } $uomewyckeuqoqocu = $this->kikmasogcikysciu(); gsygwgsiawgmqiyi: array_filter($uomewyckeuqoqocu); $uomewyckeuqoqocu = ["\x40\x63\x6f\x6e\164\145\x78\x74" => "\x68\164\x74\160\x3a\x2f\x2f\163\x63\x68\145\x6d\x61\56\157\162\x67\57"] + $uomewyckeuqoqocu; $qouiiuamucsomays = ''; if (!$uomewyckeuqoqocu) { goto qikaewekoecykeou; } if ($oomggoqacsumwqqu && strnatcmp(phpversion(), "\x35\56\x34\x2e\60") >= 0) { goto qsgqwyqaqiowkmco; } $qouiiuamucsomays = json_encode($uomewyckeuqoqocu, JSON_HEX_QUOT | JSON_UNESCAPED_SLASHES); goto yqagomygmeoecwey; qsgqwyqaqiowkmco: $qouiiuamucsomays = json_encode($uomewyckeuqoqocu, JSON_PRETTY_PRINT | JSON_HEX_QUOT | JSON_UNESCAPED_SLASHES); yqagomygmeoecwey: qikaewekoecykeou: return $qouiiuamucsomays; } public function kikmasogcikysciu() { $sogksuscggsicmac = ["\100\164\171\x70\145" => $this->gueasuouwqysmomu(), "\x40\151\144" => $this->mwikyscisascoeea()]; $aowmesqseaiqimyu = ["\164\x79\160\x65", "\151\144", "\151\163\x47\x6c\x6f\142\141\154"]; foreach (get_object_vars($this) as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { if (in_array($uusmaiomayssaecw, $aowmesqseaiqimyu)) { goto yuuyikiacmmueosu; } $uusmaiomayssaecw = $this->ougekwycicscwquc($uusmaiomayssaecw); if (is_array($eqgoocgaqwqcimie)) { goto egmayaiikwsskgmy; } if ($eqgoocgaqwqcimie instanceof Thing) { goto aueaceeyommgkicu; } $sogksuscggsicmac[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; goto mysueeoswqgccmui; aueaceeyommgkicu: $sogksuscggsicmac[$uusmaiomayssaecw] = $eqgoocgaqwqcimie->kikmasogcikysciu(); mysueeoswqgccmui: goto ucuoeymyqeokgsya; egmayaiikwsskgmy: $eqiiwaeiswqmusqm = []; foreach ($eqgoocgaqwqcimie as $wgywewwaswowuooi => $mokouoooiwsmcmiu) { $wgywewwaswowuooi = $this->ougekwycicscwquc($wgywewwaswowuooi); if ($mokouoooiwsmcmiu instanceof Thing) { goto oqousikwiiqagoyw; } $eqiiwaeiswqmusqm[$wgywewwaswowuooi] = $mokouoooiwsmcmiu; goto zayqqeqgcwkekwws; oqousikwiiqagoyw: $eqiiwaeiswqmusqm[$wgywewwaswowuooi] = $mokouoooiwsmcmiu->kikmasogcikysciu(); zayqqeqgcwkekwws: sqyokemumceysegy: } aiccyaswigkaycqk: $sogksuscggsicmac[$uusmaiomayssaecw] = $eqiiwaeiswqmusqm; ucuoeymyqeokgsya: yuuyikiacmmueosu: usymasgsyqgsuocg: } eucqomyqykgoiuge: $sogksuscggsicmac = array_filter($sogksuscggsicmac); return $sogksuscggsicmac; } private function ougekwycicscwquc($eqgoocgaqwqcimie) { if (!(strpos($eqgoocgaqwqcimie, "\137") !== false)) { goto sguskaeaaqcagqgc; } $eqgoocgaqwqcimie = str_replace("\x5f", "\x2d", $eqgoocgaqwqcimie); sguskaeaaqcagqgc: return $eqgoocgaqwqcimie; } public function qcgakseyaikigqco($post = null) : ?string { return $this->sasweaqkmcaqweec(ManipulatePost::qcgakseyaikigqco($post)); } public function ycqquoiyyuesegsy($sycgeiyakseiumqy = false, $yyimiwcuegayoskq = null) { return StructuredData::symcgieuakksimmu()->ycqquoiyyuesegsy($sycgeiyakseiumqy, $yyimiwcuegayoskq); } public function aseocggwwegcmqes(string $sqeykgyoooqysmca) : Base { $this->type = $sqeykgyoooqysmca; return $this; } public function weymkusmeageugsu($post = null) { return ManipulatePost::squyiyimquqicqke("\x63", $post, false); } public function osswsoymmgisqmoy($post = null) { return ManipulatePost::oukqamgqowciwoum("\x63", $post, false); } public function owmuuoycwiskaeme($mkuwoiyskieqciqe) { $owmuuoycwiskaeme = ''; if (empty($mkuwoiyskieqciqe)) { goto agkmiayuawacakau; } $immmocykksywgkqu = floor($mkuwoiyskieqciqe / 86400); $mkuwoiyskieqciqe = $mkuwoiyskieqciqe % 86400; $kqqiasykicusiqaw = floor($mkuwoiyskieqciqe / 3600); $mkuwoiyskieqciqe = $mkuwoiyskieqciqe % 3600; $scuieskcukagwiys = floor($mkuwoiyskieqciqe / 60); $mkuwoiyskieqciqe = $mkuwoiyskieqciqe % 60; $owmuuoycwiskaeme = sprintf("\x50\x25\x64\x44\x54\x25\x64\x48\45\x64\115\45\x64\123", $immmocykksywgkqu, $kqqiasykicusiqaw, $scuieskcukagwiys, $mkuwoiyskieqciqe); agkmiayuawacakau: return $owmuuoycwiskaeme; } public function sasweaqkmcaqweec(?string $sociqikgoyemqaac) : ?string { if (mb_detect_encoding($sociqikgoyemqaac, "\x75\x74\146\55\x38", true)) { goto syuaummumssgwwee; } $sociqikgoyemqaac = utf8_encode($sociqikgoyemqaac); syuaummumssgwwee: return $sociqikgoyemqaac; } }
