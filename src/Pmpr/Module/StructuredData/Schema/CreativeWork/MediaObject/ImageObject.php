<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66243f5fe1f6c             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData\Schema\CreativeWork\MediaObject; use Pmpr\Module\StructuredData\Schema\Intangible\StructuredValue\PropertyValue; use WP_Term; use WP_User; class ImageObject extends MediaObject { protected $caption = null; protected $exifData = null; protected ?ImageObject $thumbnail = null; public function __construct($ccamueccusigaaio = null, $goiqeyeaqmicqiky = true) { if (!$goiqeyeaqmicqiky) { goto yowsmsiyimmimemc; } if ($ccamueccusigaaio instanceof WP_User) { goto sciwggaeogcoesiu; } if ($ccamueccusigaaio instanceof WP_Term) { goto asmecuqiyyswueqe; } if ($this->caokeucsksukesyo()->iqsmaqoiukeasukw()->qecqsmowoqmwgagu($ccamueccusigaaio)) { goto qwigomakwmyiwkgo; } $aiooqyausygaasqm = $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->usieywkaugusugwm($ccamueccusigaaio); goto myoicgcuugciueis; qwigomakwmyiwkgo: $aiooqyausygaasqm = $ccamueccusigaaio; myoicgcuugciueis: goto csscmcacoikwsecs; asmecuqiyyswueqe: $aiooqyausygaasqm = $this->caokeucsksukesyo()->kckogqkiycqeumoa()->usieywkaugusugwm($ccamueccusigaaio); csscmcacoikwsecs: if ($aiooqyausygaasqm) { goto kuicqywysciceggs; } if ($ewgwqamkygiqaawc = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->souwykwwmyygqyqi($ccamueccusigaaio)) { goto mkwskuycuyguqqok; } goto cuykwgmswkskqkyi; kuicqywysciceggs: $this->omsioukysssesasy($aiooqyausygaasqm); goto cuykwgmswkskqkyi; mkwskuycuyguqqok: $wwgucssaecqekuek = $this->caokeucsksukesyo()->gkksucgseqqemesc()->ccekeuwwqqoiwuwy($ewgwqamkygiqaawc, "\x69\x6d\x67"); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $this->omsioukysssesasy([$gkyciwoiiisgywcs->get($wwgucssaecqekuek, "\x73\x72\143"), $gkyciwoiiisgywcs->get($wwgucssaecqekuek, "\167\151\144\x74\x68"), $gkyciwoiiisgywcs->get($wwgucssaecqekuek, "\150\x65\151\x67\150\x74")]); cuykwgmswkskqkyi: goto eqkauqciwewmgeoi; sciwggaeogcoesiu: $ewgmommeawggyaek = $this->uwkmaywceaaaigwo()->issssuygyewuaswa(); $oiegiwogmwmawkeo = 96; $ogomymegcoacqisg = $ewgmommeawggyaek->aeymcyaqkmmukomc($ewgmommeawggyaek->igawqaomowicuayw(self::akoagooquksouwka, $ccamueccusigaaio), [self::waguuiqqgsysuukq => $oiegiwogmwmawkeo]); $aiooqyausygaasqm = [$ogomymegcoacqisg, $oiegiwogmwmawkeo, $oiegiwogmwmawkeo]; eqkauqciwewmgeoi: if ($this->suegwaomueaiseeo()) { goto kwagwqyusyiyoaqs; } $aiooqyausygaasqm = $this->ocksiywmkyaqseou("\147\145\164\137\151\x6d\141\x67\145\x5f\160\154\x61\143\x65\150\157\x6c\x64\145\162\137\151\x64", ''); $this->omsioukysssesasy($aiooqyausygaasqm); kwagwqyusyiyoaqs: $this->iaqckqwoiseyqaku($this->cyamgsaeyiqasmcc()->oockkiieqcwiocga($aiooqyausygaasqm)->qmueseocuuekommo($this->suegwaomueaiseeo())); yowsmsiyimmimemc: parent::__construct($goiqeyeaqmicqiky); } protected function omsioukysssesasy($aiooqyausygaasqm) { $eeamcawaiqocomwy = ''; $qeswwaqqsyymqawg = 100; $cswemwoyesycwkuq = 100; if (!$aiooqyausygaasqm) { goto uukumskkeggaowck; } if (!is_array($aiooqyausygaasqm)) { goto iomcaiwewsawiamu; } $mcqieaigyeeyaksm = $aiooqyausygaasqm; goto sqiciiuwmykocycc; iomcaiwewsawiamu: $eaeiswmwiqewicoc = $this->caokeucsksukesyo()->iqsmaqoiukeasukw(); $mcqieaigyeeyaksm = $eaeiswmwiqewicoc->uikkssqcoewckces($aiooqyausygaasqm, "\x66\165\x6c\154"); if ($mcqieaigyeeyaksm) { goto kiqogmwcgcamwiig; } $mcqieaigyeeyaksm = $eaeiswmwiqewicoc->uikkssqcoewckces($this->ocksiywmkyaqseou("\x67\x65\164\x5f\151\x6d\141\x67\145\x5f\x70\x6c\141\x63\x65\150\157\154\144\145\x72\137\151\x64", 0), "\x66\165\154\154"); kiqogmwcgcamwiig: sqiciiuwmykocycc: if (!($mcqieaigyeeyaksm && is_array($mcqieaigyeeyaksm))) { goto eequksumcoogyoem; } $eeamcawaiqocomwy = $mcqieaigyeeyaksm[0]; $qeswwaqqsyymqawg = $mcqieaigyeeyaksm[1]; $cswemwoyesycwkuq = $mcqieaigyeeyaksm[2]; eequksumcoogyoem: $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $aiooqyausygaasqm = $seumokooiykcomco->get($aiooqyausygaasqm); $this->usuqmwksoeaayaig($seumokooiykcomco->qcgakseyaikigqco($aiooqyausygaasqm)); uukumskkeggaowck: $this->esyyaomkkeccysos($qeswwaqqsyymqawg)->seiwcgsykwcukmsc($cswemwoyesycwkuq)->eyqkogeiqauioamw($eeamcawaiqocomwy); } public function cqcsquysckuaewym() { return $this->caption; } public function skcuoiemgyoacmus($oeceqaaausgeosyu) { $this->caption = $oeceqaaausgeosyu; return $this; } public function symiamcqqasoqewe() { return $this->exifData; } public function qymmgmuqsieomcsm($umgeyqqiekcuqiky) { $this->exifData = $umgeyqqiekcuqiky; return $this; } public function smwweookeqkiiygs() : ImageObject { return $this->thumbnail; } public function oscqyoeskqmekcyo(ImageObject $uickqscmwgggsmgy) : ImageObject { $this->thumbnail = $uickqscmwgggsmgy; return $this; } }
