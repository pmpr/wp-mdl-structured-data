<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66eae930db6b1             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData\MetaBox; use Pmpr\Common\Foundation\Convert\Type\ConvertArray; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; class FAQPage extends Tab { const sqgaeeagsegecugi = "\146\141\161\137\x6d\x61\151\x6e\137\x65\x6e\164\x69\x74\171"; public function ieoqyoeecukogies($post) { $oammesyieqmwuwyi = $this->seyyiqmgwymyumoq($post); if (!$oammesyieqmwuwyi) { goto mggeqkcksyaymcsa; } echo $this->iuygowkemiiwqmiw("\x66\x61\161\137\154\151\163\164", [Constants::qgqyauaqwqmqseim => IconInterface::ucomcyskmkiqysee, Constants::qwumqqyuasyskkkc => $oammesyieqmwuwyi, Constants::qescuiwgsyuikume => __("\x46\x41\x51", PR__MDL__STRUCTURED_DATA)]); mggeqkcksyaymcsa: parent::ieoqyoeecukogies($post); } public function seyyiqmgwymyumoq($post = null) { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $post = $seumokooiykcomco->get($post); $icwicymcioeyeyek = parent::seyyiqmgwymyumoq($post); if ($icwicymcioeyeyek) { goto wusciwkkckmqigms; } $agkmksicugiqcucq = []; if (!$post) { goto kqswcsysqawkcgye; } $kgcuukieymaqosmm = $seumokooiykcomco->igawqaomowicuayw(self::sqgaeeagsegecugi, $post); if (!($kgcuukieymaqosmm && is_array($kgcuukieymaqosmm))) { goto ewscugeuicukkycc; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($kgcuukieymaqosmm as $igqsaukqcqscimok) { $cgiaqqwoogcwuuwq = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, Constants::kuygeqomywoykkai); $wqckkkeieieqasqk = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, Constants::eeiymeksiysiuemu); if (!($cgiaqqwoogcwuuwq && $wqckkkeieieqasqk)) { goto eeyyskqsmquyquqw; } $agkmksicugiqcucq[] = [$cgiaqqwoogcwuuwq, $wqckkkeieieqasqk]; eeyyskqsmquyquqw: cgyakcqgugqgkqiw: } uegouoiuyoqkcscg: ewscugeuicukkycc: kqswcsysqawkcgye: $icwicymcioeyeyek = ConvertArray::wauqeqkcymgoceuy($agkmksicugiqcucq, [Constants::kuygeqomywoykkai, Constants::eeiymeksiysiuemu]); $this->mgoekicaagiaeuki($icwicymcioeyeyek); wusciwkkckmqigms: return $icwicymcioeyeyek; } public function aoukuouwimcigeqe($ywoucyskcquysiwc = []) { $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $ywoucyskcquysiwc[] = $uuyucgkyusckoaeq->doeuiogekyiwgsgw("\x66\141\161\137\164\x61\x62")->gswweykyogmsyawy(__("\106\101\121", PR__MDL__STRUCTURED_DATA))->saemoowcasogykak(IconInterface::qscwsaqyuyomumoc)->mkksewyosgeumwsa($uuyucgkyusckoaeq->qqmgmgasauucoago(self::sqgaeeagsegecugi)->usosgsaaimqcysyk()->gswweykyogmsyawy(__("\x49\164\x65\x6d\163", PR__MDL__STRUCTURED_DATA))->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(Constants::kuygeqomywoykkai)->mkmssscwmeekwgqo()->gswweykyogmsyawy(__("\121\165\145\163\164\151\157\156", PR__MDL__STRUCTURED_DATA)))->mkksewyosgeumwsa($uuyucgkyusckoaeq->sciaycsmsiekqueg(Constants::eeiymeksiysiuemu)->qsecygiycssgacqs(5)->gsomueooycksswcy()->gswweykyogmsyawy(__("\101\x6e\163\167\x65\x72", PR__MDL__STRUCTURED_DATA)))); return parent::aoukuouwimcigeqe($ywoucyskcquysiwc); } }
