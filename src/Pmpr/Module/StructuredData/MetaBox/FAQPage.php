<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66a4064358703             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData\MetaBox; use Pmpr\Common\Foundation\Convert\Type\ConvertArray; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\StructuredData\Setting\Setting; class FAQPage extends Tab { const sqgaeeagsegecugi = "\x66\141\x71\x5f\x6d\x61\151\x6e\137\x65\156\164\151\x74\171"; const kuygeqomywoykkai = "\161\x75\x65\163\164\x69\157\x6e"; const eeiymeksiysiuemu = "\x61\x6e\163\x77\145\162"; public function ieoqyoeecukogies($post) { $oammesyieqmwuwyi = $this->seyyiqmgwymyumoq($post); if (!$oammesyieqmwuwyi) { goto goacqqsgaaigyuaw; } echo $this->iuygowkemiiwqmiw("\x66\x61\161\x5f\x6c\x69\163\164", [self::qgqyauaqwqmqseim => IconInterface::ucomcyskmkiqysee, self::qwumqqyuasyskkkc => $oammesyieqmwuwyi, self::qescuiwgsyuikume => __("\106\x41\121", PR__MDL__STRUCTURED_DATA)]); goacqqsgaaigyuaw: parent::ieoqyoeecukogies($post); } public function seyyiqmgwymyumoq($post = null) { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $post = $seumokooiykcomco->get($post); $icwicymcioeyeyek = parent::seyyiqmgwymyumoq($post); if ($icwicymcioeyeyek) { goto kecwuwwcwokuksyq; } $agkmksicugiqcucq = []; if (!$post) { goto egasokooagakisiy; } $kgcuukieymaqosmm = $seumokooiykcomco->igawqaomowicuayw(self::sqgaeeagsegecugi, $post); if (!($kgcuukieymaqosmm && is_array($kgcuukieymaqosmm))) { goto mswsoaimesegiiic; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($kgcuukieymaqosmm as $igqsaukqcqscimok) { $cgiaqqwoogcwuuwq = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, self::kuygeqomywoykkai); $wqckkkeieieqasqk = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, self::eeiymeksiysiuemu); if (!($cgiaqqwoogcwuuwq && $wqckkkeieieqasqk)) { goto usqgaogkqgemuima; } $agkmksicugiqcucq[] = [$cgiaqqwoogcwuuwq, $wqckkkeieieqasqk]; usqgaogkqgemuima: wcesymwqykqoyuqk: } meawswgwagoqgkye: mswsoaimesegiiic: egasokooagakisiy: $icwicymcioeyeyek = ConvertArray::wauqeqkcymgoceuy($agkmksicugiqcucq, [self::kuygeqomywoykkai, self::eeiymeksiysiuemu]); $this->mgoekicaagiaeuki($icwicymcioeyeyek); kecwuwwcwokuksyq: return $icwicymcioeyeyek; } public function aoukuouwimcigeqe($ywoucyskcquysiwc = []) { $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $ywoucyskcquysiwc[] = $uuyucgkyusckoaeq->doeuiogekyiwgsgw("\x66\141\x71\x5f\164\141\142")->gswweykyogmsyawy(__("\x46\x41\121", PR__MDL__STRUCTURED_DATA))->saemoowcasogykak(IconInterface::qscwsaqyuyomumoc)->mkksewyosgeumwsa($uuyucgkyusckoaeq->qqmgmgasauucoago(self::sqgaeeagsegecugi)->usosgsaaimqcysyk()->gswweykyogmsyawy(__("\111\164\145\x6d\163", PR__MDL__STRUCTURED_DATA))->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(self::kuygeqomywoykkai)->mkmssscwmeekwgqo()->gswweykyogmsyawy(__("\121\165\x65\x73\164\x69\157\x6e", PR__MDL__STRUCTURED_DATA)))->mkksewyosgeumwsa($uuyucgkyusckoaeq->sciaycsmsiekqueg(self::eeiymeksiysiuemu)->qsecygiycssgacqs(5)->gsomueooycksswcy()->gswweykyogmsyawy(__("\101\156\163\x77\x65\x72", PR__MDL__STRUCTURED_DATA)))); return parent::aoukuouwimcigeqe($ywoucyskcquysiwc); } }
