<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6716d9c2a7289             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData\Traits; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\StructuredData\Schema\Thing; use Pmpr\Module\StructuredData\StructuredData; trait CommonTrait { public function ycqquoiyyuesegsy($sycgeiyakseiumqy = false, $yyimiwcuegayoskq = null) : string { if ($sycgeiyakseiumqy) { $migiiksoiymissge = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy(); } else { if (!$yyimiwcuegayoskq) { $yyimiwcuegayoskq = $this->caokeucsksukesyo()->kyqakacqeumicgag()->iqoacwuiemooiysg(); } $migiiksoiymissge = $yyimiwcuegayoskq->ycqquoiyyuesegsy(); } return (string) $this->ocksiywmkyaqseou(StructuredData::ocmiuacywmgycowk . "\155\141\x72\153\x75\160\x5f\x70\145\x72\x6d\x61\x6c\x69\x6e\153", $migiiksoiymissge); } public function yuaukuikuewwqumk($aaqqkgyougeiueyq, $qscuacuysiqsossk = false) { if ($aaqqkgyougeiueyq instanceof Thing) { $sqeykgyoooqysmca = strtolower($aaqqkgyougeiueyq->gueasuouwqysmomu()); $aaqqkgyougeiueyq = $this->ocksiywmkyaqseou(StructuredData::ocmiuacywmgycowk . "\142\145\146\157\162\x65\x5f\x72\145\156\x64\x65\162\x5f\x73\x63\x68\145\x6d\141", $aaqqkgyougeiueyq); $aaqqkgyougeiueyq = $this->ocksiywmkyaqseou(StructuredData::ocmiuacywmgycowk . "\142\145\x66\157\162\x65\x5f\x72\x65\x6e\144\145\162\x5f{$sqeykgyoooqysmca}\137\163\143\x68\145\155\141", $aaqqkgyougeiueyq); $aaqqkgyougeiueyq = $aaqqkgyougeiueyq->kmykkqwsssqqmwmg([], $this->caokeucsksukesyo()->eiwcuqigayigimak()->esoowymaimwcuecq()); } $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); if ('' !== $aaqqkgyougeiueyq && !is_null($aaqqkgyougeiueyq)) { if ($qscuacuysiqsossk) { $mymggmkssycumueo[] = $yyauwyaeewsickwk->queuakuqucciemcc($aaqqkgyougeiueyq); } else { echo $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->ssqqsemoqaeqcqka("{$aaqqkgyougeiueyq}\xa", [Constants::squoamkioomemiyi => StructuredData::amgecouwceeaomww]); } } if ($qscuacuysiqsossk && !empty($mymggmkssycumueo)) { if (1 === count($mymggmkssycumueo)) { $mymggmkssycumueo = reset($mymggmkssycumueo); } if ($this->caokeucsksukesyo()->eiwcuqigayigimak()->esoowymaimwcuecq()) { $qiouiwasaauyaaue = JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT; } else { $qiouiwasaauyaaue = JSON_UNESCAPED_SLASHES; } print $yyauwyaeewsickwk->wegeuqkaeuusoike($mymggmkssycumueo, $qiouiwasaauyaaue); } } }
