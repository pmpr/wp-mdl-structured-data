<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66eae930db6b1             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData\Schema\Intangible\StructuredValue\ContactPoint; use Pmpr\Module\StructuredData\Schema\Intangible\Language; use Pmpr\Module\StructuredData\Schema\Intangible\StructuredValue\OpeningHoursSpecification; use Pmpr\Module\StructuredData\Schema\Intangible\StructuredValue\StructuredValue; class ContactPoint extends StructuredValue { protected ?string $email = null; protected ?string $telephone = null; protected array $hoursAvailable = []; protected ?string $areaServed = null; protected ?string $contactType = null; protected array $availableLanguages = []; protected ?string $productSupported = null; public function __construct($goiqeyeaqmicqiky = true) { $this->isGlobal = true; parent::__construct($goiqeyeaqmicqiky); } public function oeogosayocuskygw($owaiikyuwwwmswgc) { $this->email = $owaiikyuwwwmswgc; return $this; } public function cseqaqmuaswgwuoo() { return $this->email; } public function sweikoswukusgwwo($mseqekmwiimayuek) { $this->telephone = $mseqekmwiimayuek; return $this; } public function wuoiwkucmsqqeeme() { return $this->telephone; } public function qaqskcgeiusiagye(OpeningHoursSpecification $wagcgqoowekasiye) : ContactPoint { $this->hoursAvailable[] = $wagcgqoowekasiye; return $this; } public function kkcqwswocsiqooiw() : array { return $this->hoursAvailable; } public function qgikewmwgugsycai(?string $aocccsqkceyqauye) : ContactPoint { $this->contactType = $aocccsqkceyqauye; return $this; } public function womqwmgismygicqg() : ?string { return $this->contactType; } public function qmgkkgiuwuwiamyi(?string $amcgcekcaqaiayuu) : ContactPoint { $this->areaServed = $amcgcekcaqaiayuu; return $this; } public function gcygcoaugumeyaas() : ?string { return $this->areaServed; } public function ueiiieygmgawesgq() : array { return $this->availableLanguages; } public function kecmkooasiwmyoey(Language $qssueowgqeqkyqeq) : ContactPoint { if (!$qssueowgqeqkyqeq->aakmagwggmkoiiyu()) { goto qcessicwuikwqsis; } $this->availableLanguages[$qssueowgqeqkyqeq->aakmagwggmkoiiyu()] = $qssueowgqeqkyqeq; qcessicwuikwqsis: return $this; } public function wuokgwemuqwaosow(array $ymkomcgesksuuysk) : ContactPoint { foreach ($ymkomcgesksuuysk as $qssueowgqeqkyqeq) { $this->kecmkooasiwmyoey($qssueowgqeqkyqeq); ieumumsgyguceusy: } yssscwioiyygssec: return $this; } public function emycsgqmywocskyq(?string $ksaucoawwsymacyq) : ContactPoint { $this->productSupported = $ksaucoawwsymacyq; return $this; } public function ksiyayuseuqamwuw() : ?string { return $this->productSupported; } }
