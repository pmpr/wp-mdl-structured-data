<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e5eca5e30b3             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData\DataType; use Pmpr\Module\StructuredData\Schema\CreativeWork\HowToDirection; use Pmpr\Module\StructuredData\Schema\CreativeWork\HowToTip; class Instruction extends DataType { const sueuicugaemqiksg = "\x74\x69\x70"; const mwmmmioksayswakq = "\144\151\162\145\x63\164\151\157\x6e"; protected $text; protected $type = self::mwmmmioksayswakq; protected $position; public function __construct(string $cmwygeyygwqaemaq, $kuuiuigeacouwmaa = 1) { if (!(is_string($cmwygeyygwqaemaq) && $cmwygeyygwqaemaq)) { goto iesekaeqeomeuaui; } $cmwygeyygwqaemaq = ltrim($cmwygeyygwqaemaq); if (!($cmwygeyygwqaemaq[0] == "\43")) { goto oyeyomcgkmgymogq; } $cmwygeyygwqaemaq = rtrim(ltrim($cmwygeyygwqaemaq, "\43")); $this->type = self::sueuicugaemqiksg; oyeyomcgkmgymogq: $this->text = $cmwygeyygwqaemaq; iesekaeqeomeuaui: $this->position = $kuuiuigeacouwmaa; } public function ykgcioecqcwwkime() : ?string { return $this->text; } public function gueasuouwqysmomu() : ?string { return $this->type; } public function yqyeyqikcyswcaig() : ?int { return $this->position; } public function ggwmgmiswsqmcywi() : bool { return $this->gueasuouwqysmomu() == self::sueuicugaemqiksg; } public function uqeoyqiwywwmsiew() { switch ($this->gueasuouwqysmomu()) { case self::sueuicugaemqiksg: $aaqqkgyougeiueyq = new HowToTip(); goto wsesqmcqoiyyqkqi; case self::mwmmmioksayswakq: default: $aaqqkgyougeiueyq = new HowToDirection(); goto wsesqmcqoiyyqkqi; } mogkoocsoeuyoqqa: wsesqmcqoiyyqkqi: $aaqqkgyougeiueyq->kguaimkyumsuesem($this->ykgcioecqcwwkime())->weakiuagguweamee($this->yqyeyqikcyswcaig()); return $aaqqkgyougeiueyq; } }
