<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61eed0d47caee             |
    |_______________________________________|
*/
 namespace Pmpr\Package\StructuredData\Schema\Intangible\Rating; use Pmpr\Package\StructuredData\Schema\Intangible\Intangible; use Pmpr\Package\StructuredData\Schema\Person; class Rating extends Intangible { protected $bestRating = 0; protected $ratingValue = 0; protected $worstRating = 0; protected ?Person $author = null; public function __construct($goiqeyeaqmicqiky = true) { if (!$goiqeyeaqmicqiky) { goto wgewmqieuamsoayy; } $this->oyigwesguooeqkmo(5)->agumqmayuckgugae(1); wgewmqieuamsoayy: parent::__construct($goiqeyeaqmicqiky); } public function mguqscccckuywsya() : ?Person { return $this->author; } public function oyecyiciiuqooyio(?Person $qwekqcueyoiskwgq) { $this->author = $qwekqcueyoiskwgq; return $this; } public function mwsgoqgyaauiykmk() { return $this->bestRating; } public function oyigwesguooeqkmo($ywqgqkekoeqksccu) { $this->bestRating = $ywqgqkekoeqksccu; return $this; } public function uymoueqkaqussegg() { return $this->ratingValue; } public function squsoiakemiuoouq($oqekuakgmcoussom) { $this->ratingValue = $oqekuakgmcoussom; return $this; } public function egwmiumwuoiaesgm() { return $this->worstRating; } public function agumqmayuckgugae($aakqsygcikymykmo) { $this->worstRating = $aakqsygcikymykmo; return $this; } }
