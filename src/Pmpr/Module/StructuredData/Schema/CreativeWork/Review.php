<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             677fc5905a7ca             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData\Schema\CreativeWork; use Pmpr\Module\StructuredData\Schema\Intangible\Rating\Rating; use Pmpr\Module\StructuredData\Schema\Thing; class Review extends CreativeWork { protected $itemReviewed; protected $reviewAspect; protected $reviewBody; protected $reviewRating; public function __construct($goiqeyeaqmicqiky = true) { if ($goiqeyeaqmicqiky) { $this->mwyyceoeyyyqsiou(new Thing())->oioyywwyiiecyagg(new Rating()); } parent::__construct($goiqeyeaqmicqiky); } public function iiqgqiuayuwcueys() { return $this->itemReviewed; } public function mwyyceoeyyyqsiou($ccqeayaegooouysc) { $this->itemReviewed = $ccqeayaegooouysc; return $this; } public function emckkkywmowguuge() { return $this->reviewAspect; } public function escmkagwsmccacom($ewmkmciueekmqqiq) { $this->reviewAspect = $ewmkmciueekmqqiq; return $this; } public function uqouawquumkioicq() { return $this->reviewBody; } public function emgowkuoysoqgysq($kgkuwsamgmugakyg) { $this->reviewBody = $kgkuwsamgmugakyg; return $this; } public function oooowkgooymqaqee() { return $this->reviewRating; } public function oioyywwyiiecyagg($agyesmaiikywuyyo) { $this->reviewRating = $agyesmaiikywuyyo; return $this; } }
