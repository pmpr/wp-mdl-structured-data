<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63ccf406a0f8f             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData\MetaBox; use Pmpr\Common\Foundation\Convert\Type\ConvertArray; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\StructuredData\Setting\Setting; class FAQPage extends Tab { const sqgaeeagsegecugi = "\146\x61\161\137\155\141\x69\x6e\x5f\x65\156\164\151\164\171"; const kuygeqomywoykkai = "\161\x75\145\163\x74\151\x6f\x6e"; const eeiymeksiysiuemu = "\x61\156\163\167\x65\162"; public function ieoqyoeecukogies($post) { $oammesyieqmwuwyi = $this->seyyiqmgwymyumoq($post); if (!$oammesyieqmwuwyi) { goto kciouyuaqkyqomam; } echo $this->iuygowkemiiwqmiw("\x66\x61\161\137\154\x69\x73\x74", [self::qgqyauaqwqmqseim => IconInterface::ucomcyskmkiqysee, self::qwumqqyuasyskkkc => $oammesyieqmwuwyi, self::qescuiwgsyuikume => __("\106\101\x51", PR__MDL__STRUCTURED_DATA)]); kciouyuaqkyqomam: parent::ieoqyoeecukogies($post); } public function seyyiqmgwymyumoq($post = null) { $post = ManipulatePost::get($post); $icwicymcioeyeyek = parent::seyyiqmgwymyumoq($post); if ($icwicymcioeyeyek) { goto iqcogmsguwoikame; } $agkmksicugiqcucq = []; if (!$post) { goto quwcqmyokicssyew; } $kgcuukieymaqosmm = ManipulatePost::igawqaomowicuayw(self::sqgaeeagsegecugi, $post); if (!($kgcuukieymaqosmm && is_array($kgcuukieymaqosmm))) { goto kiwqkcaekqqyuegq; } foreach ($kgcuukieymaqosmm as $igqsaukqcqscimok) { $cgiaqqwoogcwuuwq = ManipulateArray::get($igqsaukqcqscimok, self::kuygeqomywoykkai); $wqckkkeieieqasqk = ManipulateArray::get($igqsaukqcqscimok, self::eeiymeksiysiuemu); if (!($cgiaqqwoogcwuuwq && $wqckkkeieieqasqk)) { goto qsygcycwieukkgwc; } $agkmksicugiqcucq[] = [$cgiaqqwoogcwuuwq, $wqckkkeieieqasqk]; qsygcycwieukkgwc: umgaesggesswoaqe: } wwkgkaecgiwggcck: kiwqkcaekqqyuegq: quwcqmyokicssyew: $icwicymcioeyeyek = ConvertArray::wauqeqkcymgoceuy($agkmksicugiqcucq, [self::kuygeqomywoykkai, self::eeiymeksiysiuemu]); $this->mgoekicaagiaeuki($icwicymcioeyeyek); iqcogmsguwoikame: return $icwicymcioeyeyek; } public function aoukuouwimcigeqe($ywoucyskcquysiwc = []) { $ywoucyskcquysiwc[] = Setting::sgsmqaoowiyocqaa("\146\x61\x71\137\164\141\142", __("\106\101\x51", PR__MDL__STRUCTURED_DATA))->mkksewyosgeumwsa(Setting::iseogkiymousogom(self::sqgaeeagsegecugi)->mkksewyosgeumwsa(Setting::ymuegqgyuagyucws(self::kuygeqomywoykkai, __("\121\165\145\x73\x74\151\157\156", PR__MDL__STRUCTURED_DATA)))->mkksewyosgeumwsa(Setting::uouyygwcgsmygaee(self::eeiymeksiysiuemu, __("\101\156\x73\x77\x65\162", PR__MDL__STRUCTURED_DATA))->qsecygiycssgacqs(5)->qigsyyqgewgskemg("\x77\55\155\x64\x2d\x31\x30\60"))->usosgsaaimqcysyk())->saemoowcasogykak(IconInterface::qscwsaqyuyomumoc); return parent::aoukuouwimcigeqe($ywoucyskcquysiwc); } }
