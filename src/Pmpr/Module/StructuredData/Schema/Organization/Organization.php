<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6684011231e1c             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData\Schema\Organization; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Module\StructuredData\Schema\CreativeWork\MediaObject\ImageObject; use Pmpr\Module\StructuredData\Schema\Intangible\Language; use Pmpr\Module\StructuredData\Schema\Intangible\Rating\AggregateRating; use Pmpr\Module\StructuredData\Schema\Intangible\StructuredValue\ContactPoint\ContactPoint; use Pmpr\Module\StructuredData\Schema\Intangible\StructuredValue\ContactPoint\PostalAddress; use Pmpr\Module\StructuredData\Schema\Place\Place; use Pmpr\Module\StructuredData\Schema\Thing; use Pmpr\Module\StructuredData\Setting\Setting; class Organization extends Thing { protected $logo = null; protected ?string $email = null; protected array $contactPoint = []; protected ?string $telephone = null; protected ?string $areaServed = null; protected ?PostalAddress $address = null; protected ?AggregateRating $aggregateRating = null; public function __construct($goiqeyeaqmicqiky = true) { $this->isGlobal = true; if (!$goiqeyeaqmicqiky) { goto qwcegcuowwgiccos; } $this->wqkwkoysgkaaewkc(Setting::gckekgcikugasqwu())->usuqmwksoeaayaig(get_bloginfo("\156\141\155\145"))->eyqkogeiqauioamw(ManipulateServer::gmigwwwmwemyaayy())->gucwmccyimoagwcm(get_bloginfo("\144\x65\163\143\162\x69\x70\164\x69\157\x6e"))->iaqckqwoiseyqaku(); qwcegcuowwgiccos: parent::__construct($goiqeyeaqmicqiky); } public function cseqaqmuaswgwuoo() : string { return $this->email; } public function oeogosayocuskygw(string $owaiikyuwwwmswgc) { $this->email = $owaiikyuwwwmswgc; return $this; } public function gckekgcikugasqwu() { return $this->logo; } public function wqkwkoysgkaaewkc($weowoqykiyuqcwam) { $this->logo = $weowoqykiyuqcwam; return $this; } public function wuoiwkucmsqqeeme() : string { return $this->telephone; } public function sweikoswukusgwwo(string $mseqekmwiimayuek) { $this->telephone = $mseqekmwiimayuek; return $this; } public function oeaeiissukoeowwe() : ?AggregateRating { return $this->aggregateRating; } public function nsqwikmawcqqyayk(?AggregateRating $gggmygsysokgmaiq) { $this->aggregateRating = $gggmygsysokgmaiq; return $this; } public function muuoiamcuueieaoi() { return $this->address; } public function cseiuayiuyawqqkw(PostalAddress $iuwcwgqmsmawoigq) { $this->address = $iuwcwgqmsmawoigq; return $this; } public function mcaeeegmmcmkeyik(ContactPoint $wywawoqwkeackwck) : Organization { $this->contactPoint[] = $wywawoqwkeackwck; return $this; } public function eeiacwskeoykcgmu() : array { return $this->contactPoint; } public function qmgkkgiuwuwiamyi($amcgcekcaqaiayuu) : Organization { $this->areaServed = $amcgcekcaqaiayuu; return $this; } public function gcygcoaugumeyaas() : string { return $this->areaServed; } }
