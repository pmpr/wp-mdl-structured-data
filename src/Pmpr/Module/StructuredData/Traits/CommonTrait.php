<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e5eca5e30b3             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData\Traits; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\StructuredData\Schema\Thing; use Pmpr\Module\StructuredData\StructuredData; trait CommonTrait { public function ycqquoiyyuesegsy($sycgeiyakseiumqy = false, $yyimiwcuegayoskq = null) : string { if ($sycgeiyakseiumqy) { goto oeocukauoyosicso; } if ($yyimiwcuegayoskq) { goto oimkeqocuguqqsqk; } $yyimiwcuegayoskq = $this->caokeucsksukesyo()->kyqakacqeumicgag()->iqoacwuiemooiysg(); oimkeqocuguqqsqk: $migiiksoiymissge = $yyimiwcuegayoskq->ycqquoiyyuesegsy(); goto suqceasgacskcmkc; oeocukauoyosicso: $migiiksoiymissge = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy(); suqceasgacskcmkc: return (string) $this->ocksiywmkyaqseou(StructuredData::ocmiuacywmgycowk . "\155\141\x72\x6b\165\160\137\160\x65\162\155\141\154\151\156\x6b", $migiiksoiymissge); } public function yuaukuikuewwqumk($aaqqkgyougeiueyq, $qscuacuysiqsossk = false) { if (!$aaqqkgyougeiueyq instanceof Thing) { goto yykqaowwsqgqysmq; } $sqeykgyoooqysmca = strtolower($aaqqkgyougeiueyq->gueasuouwqysmomu()); $aaqqkgyougeiueyq = $this->ocksiywmkyaqseou(StructuredData::ocmiuacywmgycowk . "\142\145\146\x6f\x72\x65\x5f\162\x65\156\x64\x65\x72\137\163\x63\x68\x65\x6d\141", $aaqqkgyougeiueyq); $aaqqkgyougeiueyq = $this->ocksiywmkyaqseou(StructuredData::ocmiuacywmgycowk . "\x62\x65\146\157\162\x65\137\x72\x65\156\144\x65\x72\137{$sqeykgyoooqysmca}\x5f\x73\143\x68\x65\155\x61", $aaqqkgyougeiueyq); $aaqqkgyougeiueyq = $aaqqkgyougeiueyq->kmykkqwsssqqmwmg([], $this->caokeucsksukesyo()->eiwcuqigayigimak()->esoowymaimwcuecq()); yykqaowwsqgqysmq: $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); if (!('' !== $aaqqkgyougeiueyq && !is_null($aaqqkgyougeiueyq))) { goto ikuuiauwouuqawuw; } if ($qscuacuysiqsossk) { goto kwiggogcgciwuwqk; } echo $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->ssqqsemoqaeqcqka("{$aaqqkgyougeiueyq}\12", [Constants::squoamkioomemiyi => StructuredData::amgecouwceeaomww]); goto uckewycoogsogwiy; kwiggogcgciwuwqk: $mymggmkssycumueo[] = $yyauwyaeewsickwk->queuakuqucciemcc($aaqqkgyougeiueyq); uckewycoogsogwiy: ikuuiauwouuqawuw: if (!($qscuacuysiqsossk && !empty($mymggmkssycumueo))) { goto ocywegekakimmwcq; } if (!(1 === count($mymggmkssycumueo))) { goto yoqakewookqoqacm; } $mymggmkssycumueo = reset($mymggmkssycumueo); yoqakewookqoqacm: if ($this->caokeucsksukesyo()->eiwcuqigayigimak()->esoowymaimwcuecq()) { goto gswcoeiisamakwii; } $qiouiwasaauyaaue = JSON_UNESCAPED_SLASHES; goto yuimwyoywaiiqacs; gswcoeiisamakwii: $qiouiwasaauyaaue = JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT; yuimwyoywaiiqacs: print $yyauwyaeewsickwk->wegeuqkaeuusoike($mymggmkssycumueo, $qiouiwasaauyaaue); ocywegekakimmwcq: } }
