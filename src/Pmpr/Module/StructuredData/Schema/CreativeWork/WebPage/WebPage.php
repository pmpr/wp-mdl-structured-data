<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             661f8d975be2f             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData\Schema\CreativeWork\WebPage; use Pmpr\Module\StructuredData\Schema\CreativeWork\CreativeWork; use Pmpr\Module\StructuredData\Schema\CreativeWork\MediaObject\ImageObject; use Pmpr\Module\StructuredData\Schema\CreativeWork\WebPageElement\WebPageElement; use Pmpr\Module\StructuredData\Schema\Intangible\ItemList\BreadcrumbList; class WebPage extends CreativeWork { protected $breadcrumb; protected $lastReviewed; protected $mainContentOfPage; protected $primaryImageOfPage; protected $relatedLink; public function __construct($goiqeyeaqmicqiky = true) { if (!$goiqeyeaqmicqiky) { goto owmuceyswmgueasi; } $this->kkqwmgsyqkqyqgge($this->weymkusmeageugsu())->akcmoueugeecmoqm($this->osswsoymmgisqmoy()); owmuceyswmgueasi: parent::__construct($goiqeyeaqmicqiky); } public function ecwoamckysyqikqi() { return $this->breadcrumb; } public function kmsouiywgsysyogm($oqweiggykuywsyas) { $this->breadcrumb = $oqweiggykuywsyas; return $this; } public function gagoaukqugykkgqk() : string { return $this->lastReviewed; } public function wqooicayeisqwswo(string $myeeiogacuuqkqyo) : WebPage { $this->lastReviewed = $myeeiogacuuqkqyo; return $this; } public function amukwayswqggesae() : WebPageElement { return $this->mainContentOfPage; } public function eyocyakasqyswumy(WebPageElement $cwgauwaygacmkuuy) : WebPage { $this->mainContentOfPage = $cwgauwaygacmkuuy; return $this; } public function ywgkgyauqquiimik() : ImageObject { return $this->primaryImageOfPage; } public function jaqcsooigwyiekas(ImageObject $uwucyyqemoceiiwy) : WebPage { $this->primaryImageOfPage = $uwucyyqemoceiiwy; return $this; } public function cukqaegmwwkcagss() : string { return $this->relatedLink; } public function umegysimuqgckgko(string $fisuaccccmioqyag) : WebPage { $this->relatedLink = $fisuaccccmioqyag; return $this; } }
