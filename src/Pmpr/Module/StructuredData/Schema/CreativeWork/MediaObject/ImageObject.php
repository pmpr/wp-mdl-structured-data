<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             624c0d9d51a29             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData\Schema\CreativeWork\MediaObject; use Pmpr\Common\Foundation\Decorator\DecoratorUser; use Pmpr\Common\Foundation\Decorator\Post\DecoratorAttachment; use Pmpr\Common\Foundation\Decorator\Post\DecoratorAuthor; use Pmpr\Common\Foundation\DOMCrawler; use Pmpr\Common\Foundation\Manipulate\Post\ManipulateAttachment; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\StructuredData\Schema\Intangible\StructuredValue\PropertyValue; use WP_User; class ImageObject extends MediaObject { protected $caption = null; protected $exifData = null; protected ?ImageObject $thumbnail = null; public function __construct($ccamueccusigaaio = null, $goiqeyeaqmicqiky = true) { if (!$goiqeyeaqmicqiky) { goto uougwgeyiokewkkm; } if ($ccamueccusigaaio instanceof WP_User) { goto mwysseaekcsiesmm; } if (DecoratorAttachment::qecqsmowoqmwgagu($ccamueccusigaaio)) { goto ewscugeuicukkycc; } $aiooqyausygaasqm = ManipulatePost::wsiiswmaagmyiaiw($ccamueccusigaaio); goto kqswcsysqawkcgye; ewscugeuicukkycc: $aiooqyausygaasqm = $ccamueccusigaaio; kqswcsysqawkcgye: if ($aiooqyausygaasqm) { goto iiiccouaaqsyikae; } if ($ewgwqamkygiqaawc = ManipulatePost::souwykwwmyygqyqi($ccamueccusigaaio)) { goto ukkcmocamwgiqayu; } goto wusciwkkckmqigms; iiiccouaaqsyikae: $this->omsioukysssesasy($aiooqyausygaasqm); goto wusciwkkckmqigms; ukkcmocamwgiqayu: $wwgucssaecqekuek = DOMCrawler::ccekeuwwqqoiwuwy($ewgwqamkygiqaawc, "\151\x6d\x67"); $this->omsioukysssesasy([ManipulateArray::get($wwgucssaecqekuek, "\163\x72\x63"), ManipulateArray::get($wwgucssaecqekuek, "\x77\x69\144\x74\150"), ManipulateArray::get($wwgucssaecqekuek, "\x68\145\x69\x67\x68\164")]); wusciwkkckmqigms: goto amgsueumgaguceaa; mwysseaekcsiesmm: $oiegiwogmwmawkeo = 96; $ogomymegcoacqisg = DecoratorUser::aeymcyaqkmmukomc(DecoratorAuthor::igawqaomowicuayw("\x75\x73\x65\162\x5f\145\155\141\151\154", $ccamueccusigaaio), ["\x73\151\x7a\145" => $oiegiwogmwmawkeo]); $aiooqyausygaasqm = [$ogomymegcoacqisg, $oiegiwogmwmawkeo, $oiegiwogmwmawkeo]; amgsueumgaguceaa: if ($this->suegwaomueaiseeo()) { goto gygwewcqsmwqismo; } $aiooqyausygaasqm = $this->sscegwueamckwmcy("\x67\145\x74\x5f\151\155\141\147\145\137\x70\154\x61\x63\x65\150\157\x6c\x64\x65\162\x5f\x69\x64", ''); $this->omsioukysssesasy($aiooqyausygaasqm); gygwewcqsmwqismo: $this->iaqckqwoiseyqaku($this->cyamgsaeyiqasmcc()->oockkiieqcwiocga($aiooqyausygaasqm)->qmueseocuuekommo($this->suegwaomueaiseeo())); uougwgeyiokewkkm: parent::__construct($goiqeyeaqmicqiky); } protected function omsioukysssesasy($aiooqyausygaasqm) { $eeamcawaiqocomwy = ''; $qeswwaqqsyymqawg = 100; $cswemwoyesycwkuq = 100; if (!$aiooqyausygaasqm) { goto uimeeckqksqeekqq; } if (!is_array($aiooqyausygaasqm)) { goto ukqocwewouckikso; } $mcqieaigyeeyaksm = $aiooqyausygaasqm; goto ucqmumuygcywwqma; ukqocwewouckikso: $mcqieaigyeeyaksm = ManipulateAttachment::uikkssqcoewckces($aiooqyausygaasqm, "\x66\165\x6c\154"); if ($mcqieaigyeeyaksm) { goto gommacygsykyussk; } $mcqieaigyeeyaksm = ManipulateAttachment::uikkssqcoewckces($this->sscegwueamckwmcy("\x67\145\x74\137\151\x6d\141\x67\145\x5f\x70\x6c\x61\143\x65\x68\x6f\154\144\x65\x72\137\151\144", 0), "\x66\165\x6c\154"); gommacygsykyussk: ucqmumuygcywwqma: if (!($mcqieaigyeeyaksm && is_array($mcqieaigyeeyaksm))) { goto uykousayyomcaeaa; } $eeamcawaiqocomwy = $mcqieaigyeeyaksm[0]; $qeswwaqqsyymqawg = $mcqieaigyeeyaksm[1]; $cswemwoyesycwkuq = $mcqieaigyeeyaksm[2]; uykousayyomcaeaa: $aiooqyausygaasqm = ManipulatePost::get($aiooqyausygaasqm); $this->usuqmwksoeaayaig(ManipulatePost::qcgakseyaikigqco($aiooqyausygaasqm)); uimeeckqksqeekqq: $this->esyyaomkkeccysos($qeswwaqqsyymqawg)->seiwcgsykwcukmsc($cswemwoyesycwkuq)->eyqkogeiqauioamw($eeamcawaiqocomwy); } public function cqcsquysckuaewym() { return $this->caption; } public function skcuoiemgyoacmus($oeceqaaausgeosyu) { $this->caption = $oeceqaaausgeosyu; return $this; } public function symiamcqqasoqewe() { return $this->exifData; } public function qymmgmuqsieomcsm($umgeyqqiekcuqiky) { $this->exifData = $umgeyqqiekcuqiky; return $this; } public function smwweookeqkiiygs() : ImageObject { return $this->thumbnail; } public function oscqyoeskqmekcyo(ImageObject $uickqscmwgggsmgy) : ImageObject { $this->thumbnail = $uickqscmwgggsmgy; return $this; } }