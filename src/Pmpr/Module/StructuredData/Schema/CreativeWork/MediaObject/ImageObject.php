<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             661f8d975be2f             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData\Schema\CreativeWork\MediaObject; use Pmpr\Module\StructuredData\Schema\Intangible\StructuredValue\PropertyValue; use WP_Term; use WP_User; class ImageObject extends MediaObject { protected $caption = null; protected $exifData = null; protected ?ImageObject $thumbnail = null; public function __construct($ccamueccusigaaio = null, $goiqeyeaqmicqiky = true) { if (!$goiqeyeaqmicqiky) { goto cuumeogeomowqisc; } if ($ccamueccusigaaio instanceof WP_User) { goto gicyayswqyuoekcq; } if ($ccamueccusigaaio instanceof WP_Term) { goto awoaooyoeoyeeqee; } if ($this->caokeucsksukesyo()->iqsmaqoiukeasukw()->qecqsmowoqmwgagu($ccamueccusigaaio)) { goto aomysykcgikegiau; } $aiooqyausygaasqm = $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->usieywkaugusugwm($ccamueccusigaaio); goto cwwmimggaaecmucw; aomysykcgikegiau: $aiooqyausygaasqm = $ccamueccusigaaio; cwwmimggaaecmucw: goto ogqmesokykywseys; awoaooyoeoyeeqee: $aiooqyausygaasqm = $this->caokeucsksukesyo()->kckogqkiycqeumoa()->usieywkaugusugwm($ccamueccusigaaio); ogqmesokykywseys: if ($aiooqyausygaasqm) { goto mqkmcysgoiaouiwm; } if ($ewgwqamkygiqaawc = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->souwykwwmyygqyqi($ccamueccusigaaio)) { goto kosaqwikueyksqmw; } goto ykomgumacooyomsk; mqkmcysgoiaouiwm: $this->omsioukysssesasy($aiooqyausygaasqm); goto ykomgumacooyomsk; kosaqwikueyksqmw: $wwgucssaecqekuek = $this->caokeucsksukesyo()->gkksucgseqqemesc()->ccekeuwwqqoiwuwy($ewgwqamkygiqaawc, "\x69\x6d\147"); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $this->omsioukysssesasy([$gkyciwoiiisgywcs->get($wwgucssaecqekuek, "\163\x72\143"), $gkyciwoiiisgywcs->get($wwgucssaecqekuek, "\x77\x69\x64\x74\150"), $gkyciwoiiisgywcs->get($wwgucssaecqekuek, "\150\145\x69\x67\x68\164")]); ykomgumacooyomsk: goto iikiiioqiyegyaak; gicyayswqyuoekcq: $ewgmommeawggyaek = $this->uwkmaywceaaaigwo()->issssuygyewuaswa(); $oiegiwogmwmawkeo = 96; $ogomymegcoacqisg = $ewgmommeawggyaek->aeymcyaqkmmukomc($ewgmommeawggyaek->igawqaomowicuayw(self::akoagooquksouwka, $ccamueccusigaaio), [self::waguuiqqgsysuukq => $oiegiwogmwmawkeo]); $aiooqyausygaasqm = [$ogomymegcoacqisg, $oiegiwogmwmawkeo, $oiegiwogmwmawkeo]; iikiiioqiyegyaak: if ($this->suegwaomueaiseeo()) { goto uiosisocuwokwkie; } $aiooqyausygaasqm = $this->ocksiywmkyaqseou("\x67\145\164\137\x69\x6d\141\x67\x65\x5f\160\x6c\141\x63\x65\150\157\154\144\145\162\137\151\x64", ''); $this->omsioukysssesasy($aiooqyausygaasqm); uiosisocuwokwkie: $this->iaqckqwoiseyqaku($this->cyamgsaeyiqasmcc()->oockkiieqcwiocga($aiooqyausygaasqm)->qmueseocuuekommo($this->suegwaomueaiseeo())); cuumeogeomowqisc: parent::__construct($goiqeyeaqmicqiky); } protected function omsioukysssesasy($aiooqyausygaasqm) { $eeamcawaiqocomwy = ''; $qeswwaqqsyymqawg = 100; $cswemwoyesycwkuq = 100; if (!$aiooqyausygaasqm) { goto eekcoeikaeaaeyii; } if (!is_array($aiooqyausygaasqm)) { goto qmkaeeomgkwggoyo; } $mcqieaigyeeyaksm = $aiooqyausygaasqm; goto csammceowmqwaamq; qmkaeeomgkwggoyo: $eaeiswmwiqewicoc = $this->caokeucsksukesyo()->iqsmaqoiukeasukw(); $mcqieaigyeeyaksm = $eaeiswmwiqewicoc->uikkssqcoewckces($aiooqyausygaasqm, "\x66\165\154\154"); if ($mcqieaigyeeyaksm) { goto gcckqucukawcasgk; } $mcqieaigyeeyaksm = $eaeiswmwiqewicoc->uikkssqcoewckces($this->ocksiywmkyaqseou("\147\145\x74\137\x69\x6d\141\x67\x65\x5f\x70\x6c\x61\143\145\150\157\x6c\144\x65\162\137\151\x64", 0), "\146\x75\154\x6c"); gcckqucukawcasgk: csammceowmqwaamq: if (!($mcqieaigyeeyaksm && is_array($mcqieaigyeeyaksm))) { goto ocaguquugeamqckq; } $eeamcawaiqocomwy = $mcqieaigyeeyaksm[0]; $qeswwaqqsyymqawg = $mcqieaigyeeyaksm[1]; $cswemwoyesycwkuq = $mcqieaigyeeyaksm[2]; ocaguquugeamqckq: $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $aiooqyausygaasqm = $seumokooiykcomco->get($aiooqyausygaasqm); $this->usuqmwksoeaayaig($seumokooiykcomco->qcgakseyaikigqco($aiooqyausygaasqm)); eekcoeikaeaaeyii: $this->esyyaomkkeccysos($qeswwaqqsyymqawg)->seiwcgsykwcukmsc($cswemwoyesycwkuq)->eyqkogeiqauioamw($eeamcawaiqocomwy); } public function cqcsquysckuaewym() { return $this->caption; } public function skcuoiemgyoacmus($oeceqaaausgeosyu) { $this->caption = $oeceqaaausgeosyu; return $this; } public function symiamcqqasoqewe() { return $this->exifData; } public function qymmgmuqsieomcsm($umgeyqqiekcuqiky) { $this->exifData = $umgeyqqiekcuqiky; return $this; } public function smwweookeqkiiygs() : ImageObject { return $this->thumbnail; } public function oscqyoeskqmekcyo(ImageObject $uickqscmwgggsmgy) : ImageObject { $this->thumbnail = $uickqscmwgggsmgy; return $this; } }
