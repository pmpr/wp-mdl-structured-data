<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67d02dae5e8c3             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\StructuredData\DataType\Instruction; use Pmpr\Module\StructuredData\Schema\CreativeWork\Article\SocialMediaPosting\BlogPosting; use Pmpr\Module\StructuredData\Schema\CreativeWork\Blog; use Pmpr\Module\StructuredData\Schema\CreativeWork\Comment\Answer; use Pmpr\Module\StructuredData\Schema\CreativeWork\Comment\Comment; use Pmpr\Module\StructuredData\Schema\CreativeWork\Comment\Question; use Pmpr\Module\StructuredData\Schema\CreativeWork\CreativeWork; use Pmpr\Module\StructuredData\Schema\CreativeWork\HowTo; use Pmpr\Module\StructuredData\Schema\CreativeWork\MediaObject\ImageObject; use Pmpr\Module\StructuredData\Schema\CreativeWork\Review; use Pmpr\Module\StructuredData\Schema\CreativeWork\WebPage\CollectionPage; use Pmpr\Module\StructuredData\Schema\CreativeWork\WebPage\FAQPage; use Pmpr\Module\StructuredData\Schema\CreativeWork\WebPage\ProfilePage; use Pmpr\Module\StructuredData\Schema\CreativeWork\WebPage\SearchResultsPage; use Pmpr\Module\StructuredData\Schema\CreativeWork\WebPage\WebPage; use Pmpr\Module\StructuredData\Schema\Intangible\Enumeration\Enumeration; use Pmpr\Module\StructuredData\Schema\Intangible\ItemList\HowToItem\HowToStep; use Pmpr\Module\StructuredData\Schema\Intangible\ItemList\HowToItem\HowToSupply; use Pmpr\Module\StructuredData\Schema\Intangible\ItemList\HowToItem\HowToTool; use Pmpr\Module\StructuredData\Schema\Intangible\ItemList\ItemList; use Pmpr\Module\StructuredData\Schema\Intangible\ListItem; use Pmpr\Module\StructuredData\Schema\Intangible\MerchantReturnPolicy; use Pmpr\Module\StructuredData\Schema\Intangible\Offer\AggregateOffer; use Pmpr\Module\StructuredData\Schema\Intangible\Offer\Offer; use Pmpr\Module\StructuredData\Schema\Intangible\Rating\AggregateRating; use Pmpr\Module\StructuredData\Schema\Intangible\Rating\Rating; use Pmpr\Module\StructuredData\Schema\Intangible\StructuredValue\MonetaryAmount; use Pmpr\Module\StructuredData\Schema\Intangible\StructuredValue\OfferShippingDetails; use Pmpr\Module\StructuredData\Schema\Intangible\StructuredValue\PriceSpecification; use Pmpr\Module\StructuredData\Schema\Organization\Organization; use Pmpr\Module\StructuredData\Schema\Person; use Pmpr\Module\StructuredData\Schema\Product; use Pmpr\Module\StructuredData\Schema\Thing; use WC_Product_Simple; use WC_Product_Variable; use WC_Shipping_Zones; class SchemaPopulator extends Container { const uusgwaimicgyegae = 'Y-m-d H:i:s'; public function issssuygyewuaswa($mkucggyaiaukqoce, bool $qykkaqkwmecqcyai = false) : ?Person { $aaqqkgyougeiueyq = null; if ($mkucggyaiaukqoce) { $aaqqkgyougeiueyq = new Person(); $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); $gscgmkeggygieoeu = $yoiguusocukqeayg->ygwimyogyaqgumam($mkucggyaiaukqoce, Constants::cuyqkgecokgmcwqu, true); $aaqqkgyougeiueyq->usuqmwksoeaayaig($gscgmkeggygieoeu); if ($qykkaqkwmecqcyai) { $oiegiwogmwmawkeo = 96; $ogomymegcoacqisg = $yoiguusocukqeayg->quasyaqmmikeyoag($mkucggyaiaukqoce, $oiegiwogmwmawkeo); $aaqqkgyougeiueyq->mwiamauscyiwogsu($this->iqsmaqoiukeasukw([$ogomymegcoacqisg, $oiegiwogmwmawkeo, $oiegiwogmwmawkeo, Constants::NAME => sprintf(__('%s Avatar', PR__MDL__STRUCTURED_DATA), $gscgmkeggygieoeu)], $oiegiwogmwmawkeo))->gucwmccyimoagwcm($yoiguusocukqeayg->igawqaomowicuayw(Constants::eqkeooqcsscoggia, $mkucggyaiaukqoce))->gowiaikecoyuieic($yoiguusocukqeayg->ygwimyogyaqgumam($mkucggyaiaukqoce, Constants::miqkwqsewyogmsak)); } $this->cmkamqgimsaseogs($aaqqkgyougeiueyq, Constants::meksegaoamowuwoq, $yoiguusocukqeayg->iooowgsqoyqseyuu($mkucggyaiaukqoce)); } return $aaqqkgyougeiueyq; } public function mguqscccckuywsya($mkucggyaiaukqoce) : ?ProfilePage { $aaqqkgyougeiueyq = null; if ($mkucggyaiaukqoce) { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); $gsqycqmccqgwosck = $this->uwkmaywceaaaigwo()->mguqscccckuywsya(); $ycoeoaakqyskgykq = $yoiguusocukqeayg->iooowgsqoyqseyuu($mkucggyaiaukqoce); $aaqqkgyougeiueyq = new ProfilePage(); $qwekqcueyoiskwgq = $this->issssuygyewuaswa($mkucggyaiaukqoce, true); if ($qwekqcueyoiskwgq) { $qwekqcueyoiskwgq->saagkoumoeowsaas($this->mqkewgkgeqwqoyui())->gucwmccyimoagwcm($gsqycqmccqgwosck->igawqaomowicuayw(Constants::eqkeooqcsscoggia, $ycoeoaakqyskgykq)); $aaqqkgyougeiueyq->gcgaecmemumegiyq($qwekqcueyoiskwgq); } $sqyuessumkyuyaoa = $yoiguusocukqeayg->ygwimyogyaqgumam($mkucggyaiaukqoce, Constants::eocekouyugomaqwo, true); $sgamogaqcgkgciws = $yoiguusocukqeayg->ygwimyogyaqgumam($mkucggyaiaukqoce, Constants::cuyqkgecokgmcwqu, true); $aaqqkgyougeiueyq->qaioowkkkeowewio(sprintf(__('About %s', PR__MDL__STRUCTURED_DATA), $sgamogaqcgkgciws))->ogoesumqawygewou($sqyuessumkyuyaoa)->kkqwmgsyqkqyqgge($sqyuessumkyuyaoa)->boucusiemiykwime($gsqycqmccqgwosck->mkaiaewoyaimieqg($ycoeoaakqyskgykq)); $post = $seumokooiykcomco->uoaamyooqkiyowsc([Constants::awkcoioakcaougmq => Constants::omaksceqmigeaoko, Constants::iwascisiiokuackw => $ycoeoaakqyskgykq, Constants::gqiasegggowomgie => Constants::wssueeuwuycgegwk]); if ($post) { $aaqqkgyougeiueyq->akcmoueugeecmoqm($seumokooiykcomco->oukqamgqowciwoum(self::uusgwaimicgyegae, $post, false)); } $aaqqkgyougeiueyq->xauiwawimomcgksy($this->cmkamqgimsaseogs($aaqqkgyougeiueyq, Constants::iwascisiiokuackw, $ycoeoaakqyskgykq)); } return $aaqqkgyougeiueyq; } public function cykwscocqwykiocm(bool $qykkaqkwmecqcyai = false) : ?Blog { $aaqqkgyougeiueyq = new Blog(); $aoymggwyaoymgmym = $this->caokeucsksukesyo()->kyqakacqeumicgag(); $mioqymmgaycckays = $aoymggwyaoymgmym->cykwscocqwykiocm(); if ($mioqymmgaycckays) { $aaqqkgyougeiueyq->usuqmwksoeaayaig($aoymggwyaoymgmym->qcgakseyaikigqco($mioqymmgaycckays))->boucusiemiykwime($aoymggwyaoymgmym->ycqquoiyyuesegsy($mioqymmgaycckays)); } else { $aaqqkgyougeiueyq->usuqmwksoeaayaig($this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->ciqkaakiwsgqwiqu(Constants::NAME))->boucusiemiykwime($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy()); } if ($qykkaqkwmecqcyai) { if ($mioqymmgaycckays) { $this->mgiikgqiwawywcmo($mioqymmgaycckays, $aaqqkgyougeiueyq); } $wgkqagumoowawogg = $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq(); while ($wgkqagumoowawogg->mgoyskiomyyqmyao()) { $post = $wgkqagumoowawogg->fetch(); if ($post) { $oskcowmogussoikm = $this->ayueggmoqeeukqmq($post); if ($oskcowmogussoikm) { $aaqqkgyougeiueyq->wwuogamoqmacsiqm($oskcowmogussoikm); } } } } return $aaqqkgyougeiueyq; } public function siiwuwaswckkuoya() : SearchResultsPage { $aaqqkgyougeiueyq = new SearchResultsPage(); $gqgemcmoicmgaqie = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->siiwuwaswckkuoya(); $aaqqkgyougeiueyq->usuqmwksoeaayaig(__('Search result for %s', PR__MDL__STRUCTURED_DATA))->boucusiemiykwime($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->imaeaskagikouuey())->ccwowuakmqoemoem($gqgemcmoicmgaqie)->gcgaecmemumegiyq($this->eekeosgqgwasyqci()); return $aaqqkgyougeiueyq; } public function ceowqqwiaooowquk($useksmwkuswkwcqg, bool $qykkaqkwmecqcyai = false) : ?CollectionPage { $aaqqkgyougeiueyq = null; if ($useksmwkuswkwcqg) { $cskucqcumqsyimye = $this->caokeucsksukesyo()->gscioiumssogceuc(); $kgioguqigccoiyca = $cskucqcumqsyimye->imgymusqgccqsqqq($useksmwkuswkwcqg); if ($kgioguqigccoiyca) { $aaqqkgyougeiueyq = $this->geiywuooaemaewge($qykkaqkwmecqcyai); $aaqqkgyougeiueyq->usuqmwksoeaayaig(sprintf(__('%s posts archive', PR__MDL__STRUCTURED_DATA), $cskucqcumqsyimye->uikgwcuascgeissw($kgioguqigccoiyca, Constants::mmieaueggwwaokig)))->boucusiemiykwime($cskucqcumqsyimye->myagyqumwekameww($kgioguqigccoiyca)); if ($qykkaqkwmecqcyai) { $aaqqkgyougeiueyq->gucwmccyimoagwcm($cskucqcumqsyimye->meqceykmywmqgoym($kgioguqigccoiyca)); } } } return $aaqqkgyougeiueyq; } public function wwmegieeqomwecqq($iwewcwusemqaiggk, bool $qykkaqkwmecqcyai = false) : ?CollectionPage { $aaqqkgyougeiueyq = null; if ($iwewcwusemqaiggk) { $aaqqkgyougeiueyq = $this->geiywuooaemaewge($qykkaqkwmecqcyai); $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); $awewoweukmqomqmi = $this->uwkmaywceaaaigwo()->kckogqkiycqeumoa(); $aaqqkgyougeiueyq->usuqmwksoeaayaig($aoskwucuugeuaeus->qcgakseyaikigqco($iwewcwusemqaiggk)); if ($qykkaqkwmecqcyai) { $aaqqkgyougeiueyq->gucwmccyimoagwcm($awewoweukmqomqmi->meqceykmywmqgoym($iwewcwusemqaiggk)); } $this->cmkamqgimsaseogs($aaqqkgyougeiueyq, $aoskwucuugeuaeus->yyoeeseewqmmyaee($iwewcwusemqaiggk) . '-' . Constants::yoayaissyomokiui, $aoskwucuugeuaeus->iooowgsqoyqseyuu($iwewcwusemqaiggk, true)); } return $aaqqkgyougeiueyq; } private function geiywuooaemaewge(bool $qykkaqkwmecqcyai = false) : CollectionPage { $aaqqkgyougeiueyq = new CollectionPage(); if ($qykkaqkwmecqcyai) { $aaqqkgyougeiueyq->gcgaecmemumegiyq($this->eekeosgqgwasyqci()); } return $aaqqkgyougeiueyq; } private function eekeosgqgwasyqci() : ItemList { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $wgkqagumoowawogg = $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq(); $mcgyakwwuquummkw = new ItemList(); $suaemuyiacqyugsm = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->qaumqeeagueuqkcg(Constants::kkcqmwgccaygggcu, 1); $momcykaoccoymeig = 1; while ($wgkqagumoowawogg->mgoyskiomyyqmyao()) { $post = $wgkqagumoowawogg->fetch(); if ($post) { $gceqaqwwqeicckwq = new ListItem(); $gceqaqwwqeicckwq->weakiuagguweamee($suaemuyiacqyugsm * $momcykaoccoymeig)->usuqmwksoeaayaig($seumokooiykcomco->qcgakseyaikigqco($post))->boucusiemiykwime($seumokooiykcomco->ycqquoiyyuesegsy($post)); $mcgyakwwuquummkw->asssmuisouigmaom($gceqaqwwqeicckwq); $momcykaoccoymeig++; } } return $mcgyakwwuquummkw; } public function gmiiuwgykogoksou($post) : ?FAQPage { $aaqqkgyougeiueyq = null; if ($post) { $cqicmuuwowywymew = (array) $this->ocksiywmkyaqseou('get_faq_page_data', [], $post); if ($cqicmuuwowywymew) { $aaqqkgyougeiueyq = new FAQPage(); $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $gcqseksiskwueksc = $seumokooiykcomco->iooowgsqoyqseyuu($post); foreach ($cqicmuuwowywymew as $momcykaoccoymeig => $coqicwqkiwmiaeai) { $wqckkkeieieqasqk = new Answer(); $wqckkkeieieqasqk->kguaimkyumsuesem(wp_strip_all_tags($gkyciwoiiisgywcs->get($coqicwqkiwmiaeai, Constants::eeiymeksiysiuemu))); $cgiaqqwoogcwuuwq = new Question(); $cgiaqqwoogcwuuwq->usuqmwksoeaayaig(wp_strip_all_tags($gkyciwoiiisgywcs->get($coqicwqkiwmiaeai, Constants::kuygeqomywoykkai)))->ismaoyycqacwquag($wqckkkeieieqasqk)->weyeaaokiuoaqkck(1); $cgiaqqwoogcwuuwq->xauiwawimomcgksy($this->cmkamqgimsaseogs($cgiaqqwoogcwuuwq, "post-{$gcqseksiskwueksc}", $momcykaoccoymeig + 1)); $wqckkkeieieqasqk->xauiwawimomcgksy($this->cmkamqgimsaseogs($wqckkkeieieqasqk, "post-{$gcqseksiskwueksc}", $momcykaoccoymeig + 1)); $aaqqkgyougeiueyq->ikueqmmawsgmgyiu($cgiaqqwoogcwuuwq); } $aaqqkgyougeiueyq->usuqmwksoeaayaig(sprintf(__('%s\'s FAQs', PR__MDL__STRUCTURED_DATA), $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->qcgakseyaikigqco($post)))->xauiwawimomcgksy($this->cmkamqgimsaseogs($aaqqkgyougeiueyq, $seumokooiykcomco->gueasuouwqysmomu($post), $seumokooiykcomco->iooowgsqoyqseyuu($post))); } } return $aaqqkgyougeiueyq; } public function eqggmkemkoououam($post) : ?HowTo { $aaqqkgyougeiueyq = null; if ($post) { $omauuckqmiemgegq = (array) $this->ocksiywmkyaqseou('get_how_to_data', [], $post); if ($omauuckqmiemgegq) { $gcqseksiskwueksc = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu($post, true); $aaqqkgyougeiueyq = new HowTo(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $aaqqkgyougeiueyq->usuqmwksoeaayaig($gkyciwoiiisgywcs->get($omauuckqmiemgegq, Constants::qescuiwgsyuikume))->gucwmccyimoagwcm($gkyciwoiiisgywcs->get($omauuckqmiemgegq, Constants::eqkeooqcsscoggia)); if ($mcqieaigyeeyaksm = $gkyciwoiiisgywcs->get($omauuckqmiemgegq, Constants::mkousmkiawwousws)) { $aaqqkgyougeiueyq->mwiamauscyiwogsu($this->iqsmaqoiukeasukw($mcqieaigyeeyaksm)); } $imeywacwecgemcco = $gkyciwoiiisgywcs->get($omauuckqmiemgegq, Constants::sqcsaeqsycmuiiso); $wwigiesyquoeawog = $gkyciwoiiisgywcs->get($omauuckqmiemgegq, Constants::asmooogmgyecqqka); if ($wwigiesyquoeawog && $imeywacwecgemcco) { $aaqqkgyougeiueyq->ecqgemyswuaswooa((new MonetaryAmount())->iygyugseyaqwywyg($imeywacwecgemcco)->yakomucykaieeiqq($wwigiesyquoeawog)); } $sieqmaaeyogyamwk = $gkyciwoiiisgywcs->get($omauuckqmiemgegq, 'totalTime'); if ($sieqmaaeyogyamwk) { $aaqqkgyougeiueyq->oguioqiqyaioiuca(strtoupper($sieqmaaeyogyamwk)); } $yeiuicqomkekqeck = $gkyciwoiiisgywcs->get($omauuckqmiemgegq, 'supplies'); if (is_array($yeiuicqomkekqeck)) { foreach ($yeiuicqomkekqeck as $momcykaoccoymeig => $egcsuueoacmkqwgy) { ++$momcykaoccoymeig; $oskumgsmiwiymioi = new HowToSupply(); $oskumgsmiwiymioi->usuqmwksoeaayaig($gkyciwoiiisgywcs->get($egcsuueoacmkqwgy, Constants::NAME))->weakiuagguweamee($momcykaoccoymeig)->xauiwawimomcgksy($this->cmkamqgimsaseogs($oskumgsmiwiymioi, $momcykaoccoymeig, $gcqseksiskwueksc)); $aaqqkgyougeiueyq->gquekoigiqqkwiym($oskumgsmiwiymioi); } } $qieqyuyaicouukye = $gkyciwoiiisgywcs->get($omauuckqmiemgegq, 'tools'); if (is_array($qieqyuyaicouukye)) { foreach ($qieqyuyaicouukye as $momcykaoccoymeig => $scsoukmiqiescesc) { ++$momcykaoccoymeig; $qgsgquykggygaesc = new HowToTool(); $qgsgquykggygaesc->usuqmwksoeaayaig(wp_strip_all_tags($gkyciwoiiisgywcs->get($scsoukmiqiescesc, Constants::NAME)))->weakiuagguweamee($momcykaoccoymeig)->xauiwawimomcgksy($this->cmkamqgimsaseogs($qgsgquykggygaesc, $momcykaoccoymeig, $gcqseksiskwueksc)); $aaqqkgyougeiueyq->gocqaqicsamyaeqc($qgsgquykggygaesc); } } $asuggasaseaacmqu = $gkyciwoiiisgywcs->get($omauuckqmiemgegq, 'steps'); if (is_array($asuggasaseaacmqu)) { foreach ($asuggasaseaacmqu as $momcykaoccoymeig => $wyeyeaaekyoyimqu) { $meqocwsecsywiiqs = $gkyciwoiiisgywcs->get($wyeyeaaekyoyimqu, Constants::qescuiwgsyuikume); $mieuwqqskaueukye = $gkyciwoiiisgywcs->get($wyeyeaaekyoyimqu, 'instructions'); ++$momcykaoccoymeig; if ($meqocwsecsywiiqs && is_array($mieuwqqskaueukye)) { $omayqgkqwmuqgugu = new HowToStep(); $mcqieaigyeeyaksm = $gkyciwoiiisgywcs->get($wyeyeaaekyoyimqu, Constants::mkousmkiawwousws); if (!$mcqieaigyeeyaksm) { $mcqieaigyeeyaksm = Setting::symcgieuakksimmu()->ygyiswukccscuqmm(); } $omayqgkqwmuqgugu->mwiamauscyiwogsu($this->iqsmaqoiukeasukw($mcqieaigyeeyaksm)); foreach ($mieuwqqskaueukye as $wgywewwaswowuooi => $imiasuqakwyyyemq) { if ($imiasuqakwyyyemq instanceof Instruction) { ++$wgywewwaswowuooi; $omayqgkqwmuqgugu->asssmuisouigmaom($imiasuqakwyyyemq->uqeoyqiwywwmsiew()->xauiwawimomcgksy($this->cmkamqgimsaseogs($imiasuqakwyyyemq->uqeoyqiwywwmsiew(), "{$momcykaoccoymeig}-{$wgywewwaswowuooi}", $gcqseksiskwueksc))); } } $omayqgkqwmuqgugu->boucusiemiykwime("{$this->ycqquoiyyuesegsy()}#step{$momcykaoccoymeig}")->usuqmwksoeaayaig($meqocwsecsywiiqs)->weakiuagguweamee($momcykaoccoymeig)->xauiwawimomcgksy($this->cmkamqgimsaseogs($omayqgkqwmuqgugu, $momcykaoccoymeig, $gcqseksiskwueksc)); $aaqqkgyougeiueyq->mgqggiyywoageqmo($omayqgkqwmuqgugu); } } } } } return $aaqqkgyougeiueyq; } public function ayueggmoqeeukqmq($post, bool $qykkaqkwmecqcyai = false) { $aaqqkgyougeiueyq = null; if ($post) { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $useksmwkuswkwcqg = $seumokooiykcomco->gueasuouwqysmomu($post); switch ($useksmwkuswkwcqg) { case Constants::oguseymmyyoyaako: $aaqqkgyougeiueyq = new Product(); break; default: $aaqqkgyougeiueyq = new BlogPosting(); break; } $aaqqkgyougeiueyq->usuqmwksoeaayaig($seumokooiykcomco->qcgakseyaikigqco($post))->boucusiemiykwime($seumokooiykcomco->ycqquoiyyuesegsy($post, true)); if ($qykkaqkwmecqcyai) { $wgkqagumoowawogg = $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq(); $this->mgiikgqiwawywcmo($post, $aaqqkgyougeiueyq); $aaqqkgyougeiueyq->gucwmccyimoagwcm($seumokooiykcomco->masoymaamekuykso($post))->mwiamauscyiwogsu($this->iqsmaqoiukeasukw($wgkqagumoowawogg->usieywkaugusugwm($post))); if ($aaqqkgyougeiueyq instanceof Product) { $aoswkoaumswgccwy = null; $umkkkaqkwugkemce = $seumokooiykcomco->iooowgsqoyqseyuu($post, true); $product = $this->caokeucsksukesyo()->aqasygcsqysmmyke()->get($umkkkaqkwugkemce); if ($product) { $ekymkycgewkiouqe = $this->caokeucsksukesyo()->wikusamwomuogoau(); $cgceoyqmmwumqyqa = $this->uwkmaywceaaaigwo()->wikusamwomuogoau(); $aumscagymwyyicag = $product->get_price(); if ('' !== $aumscagymwyyicag) { $wwigiesyquoeawog = $cgceoyqmmwumqyqa->useawgqusasoukqm(); if ($wwigiesyquoeawog === 'IRT') { $wwigiesyquoeawog = 'IRR'; } $usukmucoosgeowwu = null; if ($product->is_on_sale() && $product->get_date_on_sale_to()) { $yiuogaeewyockeak = $product->get_date_on_sale_to()->getTimestamp(); $usukmucoosgeowwu = gmdate('Y-m-d', $yiuogaeewyockeak); } if (empty($usukmucoosgeowwu)) { $usukmucoosgeowwu = gmdate('Y-12-31', time() + YEAR_IN_SECONDS); } if ($product->is_type(Constants::ykmuwoysogkekswg)) { $kcyskeymiisoomow = $product->get_variation_price('min', false); $weeckuqyweesgqiy = $product->get_variation_price('max', false); if ($kcyskeymiisoomow === $weeckuqyweesgqiy) { $aoswkoaumswgccwy = (new Offer())->gumawiymasmgwskq($this->ekwmikieeeueekuo($kcyskeymiisoomow))->ykmkuoeiqecoommu($usukmucoosgeowwu)->kamsmicskskyiyce((new PriceSpecification())->gumawiymasmgwskq($kcyskeymiisoomow)->qqiaccgweweoigwc($wwigiesyquoeawog)->skimsyoskeysqmqo($cgceoyqmmwumqyqa->ysiiygsouakkcaos())); } else { $aoswkoaumswgccwy = (new AggregateOffer())->kquoygeayegmaagg($this->ekwmikieeeueekuo($kcyskeymiisoomow))->oamyaumacggaykuy($this->ekwmikieeeueekuo($weeckuqyweesgqiy))->yssaceyaeekoqkci(count($product->get_children())); } } else { if ($product->is_type('grouped')) { $yqwkiouqeaeuqcke = $ekymkycgewkiouqe->giiuwsmyumqwwiyq('tax_display_shop', ''); $okcscwesammossuq = array_filter(array_map('wc_get_product', $product->get_children()), 'wc_products_array_filter_visible_grouped'); $gomasagcusoyuewa = 'incl' === $yqwkiouqeaeuqcke ? 'wc_get_price_including_tax' : 'wc_get_price_excluding_tax'; foreach ($okcscwesammossuq as $wcgsoqmmciswkmiq) { if ('' !== $wcgsoqmmciswkmiq->get_price()) { $ggmyqscukqcamwyw[] = $gomasagcusoyuewa($wcgsoqmmciswkmiq); } } if (empty($ggmyqscukqcamwyw)) { $ecqsqmyisigmggyu = 0; } else { $ecqsqmyisigmggyu = min($ggmyqscukqcamwyw); } $aoswkoaumswgccwy = (new Offer())->gumawiymasmgwskq($this->ekwmikieeeueekuo($ecqsqmyisigmggyu))->ykmkuoeiqecoommu($usukmucoosgeowwu)->kamsmicskskyiyce((new PriceSpecification())->qqiaccgweweoigwc($wwigiesyquoeawog)->gumawiymasmgwskq($this->ekwmikieeeueekuo($ecqsqmyisigmggyu))->skimsyoskeysqmqo($cgceoyqmmwumqyqa->ysiiygsouakkcaos())); } else { $aoswkoaumswgccwy = (new Offer())->gumawiymasmgwskq($this->ekwmikieeeueekuo($aumscagymwyyicag))->ykmkuoeiqecoommu($usukmucoosgeowwu)->kamsmicskskyiyce((new PriceSpecification())->qqiaccgweweoigwc($wwigiesyquoeawog)->gumawiymasmgwskq($this->ekwmikieeeueekuo($aumscagymwyyicag))->skimsyoskeysqmqo($cgceoyqmmwumqyqa->ysiiygsouakkcaos())); } } $imooqykauqyyswsw = false; if ($product->is_in_stock()) { $imooqykauqyyswsw = 'onbackorder' === $product->get_stock_status() ? Enumeration::ocuoayqeisgekokg : true; } $aoswkoaumswgccwy->qqiaccgweweoigwc($wwigiesyquoeawog)->boucusiemiykwime($aaqqkgyougeiueyq->oiucukewkckkwiqc())->iwqqooocksemkogq($imooqykauqyyswsw)->amwiucgmuowkauue($this->mqkewgkgeqwqoyui())->oawqiemaikceswic((new MerchantReturnPolicy())->mugakkeqwciygysw(7)->wmqggaiuokouscoo(Enumeration::aueyywycywkgagiw)); } $yoecwgecueuaaueu = $product->get_rating_count(); if ($yoecwgecueuaaueu > 0 && $cgceoyqmmwumqyqa->sqoukomqoqaqiawa()) { $aaqqkgyougeiueyq->nsqwikmawcqqyayk((new AggregateRating())->squsoiakemiuoouq($product->get_average_rating())->euaugmcwosukseuy($product->get_review_count())->aqgscesisoeawose($yoecwgecueuaaueu)); $kuowggqsyksiyygi = $this->caokeucsksukesyo()->yagekskwwyqosqcs(); $iiyososeqgecqayy = $this->uwkmaywceaaaigwo()->yagekskwwyqosqcs(); $kcagcoeuiasswusq = $kuowggqsyksiyygi->yosyouqyoowwowee($umkkkaqkwugkemce, [Constants::qioguuqkouiccqig => 0, Constants::eymwucuaaiiciymc => 5, Constants::ciywsqoeiymemsys => Constants::eucymkqyykekuymy, Constants::uouymeyqasaeckso => Constants::oguseymmyyoyaako, Constants::gikuasuikwemyqoq => Constants::wmmucsiyiyusmssm, Constants::cuoyscoiacswuauq => [[Constants::ascagqcquwgmygkm => 'rating', Constants::squoamkioomemiyi => 'NUMERIC', Constants::ciyoccqkiamemcmm => 0, Constants::ykemsyouoqyoaysg => '>']]]); if ($kcagcoeuiasswusq) { foreach ($kcagcoeuiasswusq as $comment) { $aaqqkgyougeiueyq->owksioogqeoiegim((new Review())->oioyywwyiiecyagg((new Rating())->squsoiakemiuoouq($kuowggqsyksiyygi->igawqaomowicuayw('rating', $comment)))->emgowkuoysoqgysq($iiyososeqgecqayy->ykgcioecqcwwkime($comment))->oyecyiciiuqooyio($this->issssuygyewuaswa($iiyososeqgecqayy->mguqscccckuywsya($comment)))->kkqwmgsyqkqyqgge($iiyososeqgecqayy->squyiyimquqicqke($comment, 'c'))); } } } $aaqqkgyougeiueyq->uuigaquwymemugcy($product->get_sku() ?: $umkkkaqkwugkemce)->gommiycwmqyygwss($aoswkoaumswgccwy); } } else { $kuqgiquqmkuakmwm = $this->ocksiywmkyaqseou(StructuredData::ocmiuacywmgycowk . 'get_citation_data', [], $post); if ($kuqgiquqmkuakmwm && is_array($kuqgiquqmkuakmwm)) { foreach ($kuqgiquqmkuakmwm as $cwiceqmaqqgqcgga) { $ecyoagmiimwuyyaa = new CreativeWork(); $aaqqkgyougeiueyq->giekkukoeokmkqgi($ecyoagmiimwuyyaa->boucusiemiykwime($cwiceqmaqqgqcgga[Constants::auqoykcmsiauccao] ?? '')->usuqmwksoeaayaig($cwiceqmaqqgqcgga[Constants::NAME] ?? '')->oyecyiciiuqooyio($cwiceqmaqqgqcgga[Constants::iwascisiiokuackw] ?? '')); } } $kmmywmgcgwceeqii = $seumokooiykcomco->weescwwgqgiyumyw($post, Constants::ocsomysosuqaimuc, [Constants::ymckmcsiymwqucoq => Constants::emgcgiseaoouacge]); $aaqqkgyougeiueyq->ywssmgkikwksokge($kmmywmgcgwceeqii); $qscaoekmoooeuyqg = $this->ocksiywmkyaqseou('can_show_author_in_post_single', false) ? $this->issssuygyewuaswa($seumokooiykcomco->mguqscccckuywsya($post, '')) : $this->mqkewgkgeqwqoyui(); $qywugykwaygwckyi = new WebPage(); $qywugykwaygwckyi->xauiwawimomcgksy($this->cmkamqgimsaseogs($qywugykwaygwckyi, '', esc_url(parse_url($seumokooiykcomco->ycqquoiyyuesegsy($post), PHP_URL_PATH)))); $aaqqkgyougeiueyq->oyecyiciiuqooyio($qscaoekmoooeuyqg)->gqiiwauggswiogqy($qywugykwaygwckyi)->qgkocaugaamsqscm($this->mqkewgkgeqwqoyui())->wieaiquucwakewgy($this->ueqesykkqeaeeoyg($post))->owykoqcycwauuioo($seumokooiykcomco->ymgsgecsiqeegseg($post))->kygcaauaawiqycqi($seumokooiykcomco->souwykwwmyygqyqi($post, false)); } } $aaqqkgyougeiueyq->xauiwawimomcgksy($this->cmkamqgimsaseogs($aaqqkgyougeiueyq, $useksmwkuswkwcqg, $seumokooiykcomco->iooowgsqoyqseyuu($post))); } return $aaqqkgyougeiueyq; } public function ekwmikieeeueekuo($eqgoocgaqwqcimie) { $wwigiesyquoeawog = $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->useawgqusasoukqm(); if ($wwigiesyquoeawog === 'IRT') { $eqgoocgaqwqcimie = 10 * (int) $eqgoocgaqwqcimie; } return $eqgoocgaqwqcimie; } public function iqsmaqoiukeasukw($aiooqyausygaasqm, string $oiegiwogmwmawkeo = Constants::egwoacukmsioosum) : ?ImageObject { $aaqqkgyougeiueyq = null; if ($aiooqyausygaasqm) { $ymqmyyeuycgmigyo = ''; $mcqieaigyeeyaksm = $aiooqyausygaasqm; if (!is_array($mcqieaigyeeyaksm)) { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $aiooqyausygaasqm = $seumokooiykcomco->get($aiooqyausygaasqm); if ($aiooqyausygaasqm) { $ymqmyyeuycgmigyo = $seumokooiykcomco->qcgakseyaikigqco($aiooqyausygaasqm); } $eaeiswmwiqewicoc = $this->caokeucsksukesyo()->iqsmaqoiukeasukw(); $mcqieaigyeeyaksm = $eaeiswmwiqewicoc->uikkssqcoewckces($aiooqyausygaasqm, $oiegiwogmwmawkeo); if (!$mcqieaigyeeyaksm) { $iwiewowoqmoekyqi = $this->ocksiywmkyaqseou('get_image_placeholder_id', 0); if ($iwiewowoqmoekyqi) { $mcqieaigyeeyaksm = $eaeiswmwiqewicoc->uikkssqcoewckces($iwiewowoqmoekyqi, $oiegiwogmwmawkeo); } } } if ($mcqieaigyeeyaksm && is_array($mcqieaigyeeyaksm)) { $aaqqkgyougeiueyq = new ImageObject(); if (isset($mcqieaigyeeyaksm[Constants::NAME])) { $ymqmyyeuycgmigyo = $mcqieaigyeeyaksm[Constants::NAME]; } $aaqqkgyougeiueyq->usuqmwksoeaayaig($ymqmyyeuycgmigyo)->boucusiemiykwime($mcqieaigyeeyaksm[0] ?? '')->esyyaomkkeccysos($mcqieaigyeeyaksm[1] ?? 100)->esyyaomkkeccysos($mcqieaigyeeyaksm[2] ?? 100); } } return $aaqqkgyougeiueyq; } public function mqkewgkgeqwqoyui(bool $qykkaqkwmecqcyai = false) : Organization { $aaqqkgyougeiueyq = new Organization(); $qkqgcaykemoiecma = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq(); $aaqqkgyougeiueyq->usuqmwksoeaayaig($qkqgcaykemoiecma->ciqkaakiwsgqwiqu(Constants::NAME))->boucusiemiykwime($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy()); if ($qykkaqkwmecqcyai) { $weowoqykiyuqcwam = Setting::symcgieuakksimmu()->gckekgcikugasqwu(); if ($weowoqykiyuqcwam) { $aaqqkgyougeiueyq->wqkwkoysgkaaewkc($this->iqsmaqoiukeasukw($weowoqykiyuqcwam)); } $aaqqkgyougeiueyq->gucwmccyimoagwcm($qkqgcaykemoiecma->ciqkaakiwsgqwiqu(Constants::eqkeooqcsscoggia)); } $aaqqkgyougeiueyq->xauiwawimomcgksy($this->cmkamqgimsaseogs($aaqqkgyougeiueyq, 'brand')); return $aaqqkgyougeiueyq; } public function yagekskwwyqosqcs($comment) : ?Comment { $aaqqkgyougeiueyq = null; if ($comment) { $aaqqkgyougeiueyq = new Comment(); $kuowggqsyksiyygi = $this->caokeucsksukesyo()->yagekskwwyqosqcs(); $iiyososeqgecqayy = $this->uwkmaywceaaaigwo()->yagekskwwyqosqcs(); $aaqqkgyougeiueyq->oyecyiciiuqooyio($this->issssuygyewuaswa($iiyososeqgecqayy->mguqscccckuywsya($comment)))->boucusiemiykwime($iiyososeqgecqayy->qkweigiqsaaigqau($comment))->gucwmccyimoagwcm($iiyososeqgecqayy->ykgcioecqcwwkime($comment))->ogoesumqawygewou($kuowggqsyksiyygi->squyiyimquqicqke($comment, self::uusgwaimicgyegae, false))->xauiwawimomcgksy($this->cmkamqgimsaseogs($aaqqkgyougeiueyq, $iiyososeqgecqayy->gueasuouwqysmomu($comment), $kuowggqsyksiyygi->iooowgsqoyqseyuu($comment))); } return $aaqqkgyougeiueyq; } public function cmkamqgimsaseogs(Thing $aaqqkgyougeiueyq, ?string $sqeykgyoooqysmca = null, ?string $owqaeesoaygymmcy = null) : string { $ieokeoyugcmwuumq = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->auksikwsewaywikq(); $mokawwccycoiqeka = parse_url($ieokeoyugcmwuumq, PHP_URL_HOST); $aokagokqyuysuksm = $mokawwccycoiqeka . '-' . $aaqqkgyougeiueyq->gueasuouwqysmomu(); if ($sqeykgyoooqysmca) { $aokagokqyuysuksm .= '-' . $sqeykgyoooqysmca; } if ($owqaeesoaygymmcy) { $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); if ($cwaqscoiqkokyase->wmcwegoisyeeosqu($owqaeesoaygymmcy)) { $owqaeesoaygymmcy = $cwaqscoiqkokyase->mkcmkkskeeaskowy(esc_url($owqaeesoaygymmcy)); } $aokagokqyuysuksm .= '-' . $owqaeesoaygymmcy; } return str_replace(['/'], [''], strtolower($aokagokqyuysuksm)); } public function mgiikgqiwawywcmo($post, Thing $aaqqkgyougeiueyq) : Thing { if ($post && $aaqqkgyougeiueyq instanceof CreativeWork) { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $wgkqagumoowawogg = $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq(); $aaqqkgyougeiueyq->kkqwmgsyqkqyqgge($wgkqagumoowawogg->kugamkssceycoyaq(self::uusgwaimicgyegae, '', $post))->ogoesumqawygewou($seumokooiykcomco->squyiyimquqicqke(self::uusgwaimicgyegae, $post, false))->akcmoueugeecmoqm($wgkqagumoowawogg->kkkiiqssauymiqsk(self::uusgwaimicgyegae, $post, false)); } return $aaqqkgyougeiueyq; } public function ueqesykkqeaeeoyg($post, string $sguimycuekmqiugk = Constants::COMMENT) : array { $kcagcoeuiasswusq = []; if ($post) { $wueaugmymmoawukq = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->waoeigwigksoikgu($post, [Constants::squoamkioomemiyi => $sguimycuekmqiugk, Constants::ciywsqoeiymemsys => Constants::eucymkqyykekuymy]); foreach ($wueaugmymmoawukq as $comment) { $kcagcoeuiasswusq[] = $this->yagekskwwyqosqcs($comment); } } return $kcagcoeuiasswusq; } }
