<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6620edd58ef76             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData\MetaBox; use Pmpr\Common\Foundation\Convert\Type\ConvertArray; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateNumber; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\StructuredData\DataType\Instruction; use Pmpr\Module\StructuredData\Setting\Setting; class HowTo extends Tab { const uqgisaggcgmekkog = "\150\157\167\x74\x6f\x5f"; const geiigmeyouakiawq = self::uqgisaggcgmekkog . "\x74\157\x6f\154\163"; const ckyksesoyeugoiyw = self::uqgisaggcgmekkog . "\x73\164\145\x70\163"; const aiuciaomueaooauq = self::uqgisaggcgmekkog . "\x73\x75\x70\x70\x6c\x69\x65\x73"; const qyieuqcescsakwga = self::uqgisaggcgmekkog . "\x74\x6f\x74\x61\154\137\164\151\155\145"; const gaaismkuoysggwye = "\151\x6e\163\164\x72\x75\143\x74\x69\157\156\163"; const iycyqgwoeeoioami = self::uqgisaggcgmekkog . "\164\x6f\164\141\154\137\x74\x69\155\x65\137\165\156\x69\x74"; const skcomskcaowwkycu = self::uqgisaggcgmekkog . "\x64\145\x73\143\162\x69\x70\164\151\x6f\156"; const qqyqkusqcmeqssck = self::uqgisaggcgmekkog . "\145\163\164\151\x6d\141\164\145\144\137\166\x61\154\x75\145"; const acokgesogaukygye = self::uqgisaggcgmekkog . "\145\x73\164\x69\155\141\164\x65\x64\x5f\143\x75\162\162\x65\156\143\171"; public function eweuqkioyiiiqgcw($post) { $omauuckqmiemgegq = $this->seyyiqmgwymyumoq($post); if (!$omauuckqmiemgegq) { goto qsgqwyqaqiowkmco; } $imeywacwecgemcco = ManipulateArray::get($omauuckqmiemgegq, "\x63\157\163\x74"); $wwigiesyquoeawog = ManipulateArray::get($omauuckqmiemgegq, "\143\x75\162\x72\145\x6e\143\171"); if (!($imeywacwecgemcco && $wwigiesyquoeawog)) { goto wwukgaquuyoissgy; } $imeywacwecgemcco = $this->wusgwkaycokeckqs(ManipulateNumber::uwwmyomsqkoaqawa($imeywacwecgemcco)); $wwigiesyquoeawog = $wwigiesyquoeawog == "\125\x53\x44" ? __("\104\x6f\154\154\141\162", PR__MDL__STRUCTURED_DATA) : __("\x52\x69\141\x6c", PR__MDL__STRUCTURED_DATA); $omauuckqmiemgegq->cost = "{$imeywacwecgemcco}\x20{$wwigiesyquoeawog}"; wwukgaquuyoissgy: $cqgoimumaewouews = ManipulateArray::get($omauuckqmiemgegq, "\x74\151\155\145"); $iyqygqimawuycsyq = ManipulateArray::get($omauuckqmiemgegq, "\165\156\151\164"); if (!($cqgoimumaewouews && $iyqygqimawuycsyq)) { goto gsygwgsiawgmqiyi; } $omauuckqmiemgegq->time = $this->yccawocmoqqoscuq($cqgoimumaewouews, $iyqygqimawuycsyq); gsygwgsiawgmqiyi: echo $this->iuygowkemiiwqmiw("\x63\x61\162\x64", ["\x68\157\167\x74\x6f" => $omauuckqmiemgegq, "\164\x69\164\x6c\x65" => __("\110\x6f\x77\40\124\157\x20\x44\x4f", PR__MDL__STRUCTURED_DATA), "\x63\157\163\x74\137\x74\x69\x74\154\145" => __("\103\x6f\x73\x74", PR__MDL__STRUCTURED_DATA), "\164\x69\x6d\145\x5f\x74\151\x74\x6c\x65" => __("\124\157\x74\141\154\x20\124\x69\x6d\145", PR__MDL__STRUCTURED_DATA), "\163\x74\x65\160\163\137\164\x69\164\154\x65" => __("\x53\x74\x65\x70\x73", PR__MDL__STRUCTURED_DATA), "\164\157\157\x6c\x73\x5f\x74\151\164\x6c\x65" => __("\124\x6f\x6f\154\x73", PR__MDL__STRUCTURED_DATA), "\163\x75\x70\160\154\151\145\x73\x5f\x74\151\x74\154\145" => __("\123\165\x70\x70\154\151\145\163", PR__MDL__STRUCTURED_DATA), "\x73\x74\x65\x70\137\x74\x69\x74\x6c\x65\137\x6d\141\163\x6b" => __("\x53\164\145\160\x20\x25\x73\x3a\x20\x25\163", PR__MDL__STRUCTURED_DATA)]); qsgqwyqaqiowkmco: parent::eweuqkioyiiiqgcw($post); } public function seyyiqmgwymyumoq($post = null) { $icwicymcioeyeyek = parent::seyyiqmgwymyumoq($post); if ($icwicymcioeyeyek) { goto ucuoeymyqeokgsya; } $post = ManipulatePost::get($post); if (!$post) { goto egmayaiikwsskgmy; } $sieqmaaeyogyamwk = $cqgoimumaewouews = ManipulatePost::igawqaomowicuayw(self::qyieuqcescsakwga, $post); $wowwosiimcqeokuo = ManipulatePost::igawqaomowicuayw(self::iycyqgwoeeoioami, $post); if (!($cqgoimumaewouews && $wowwosiimcqeokuo)) { goto yqagomygmeoecwey; } $sieqmaaeyogyamwk = sprintf($wowwosiimcqeokuo, $cqgoimumaewouews); yqagomygmeoecwey: $asuggasaseaacmqu = ConvertArray::wauqeqkcymgoceuy(ManipulatePost::igawqaomowicuayw(self::ckyksesoyeugoiyw, $post)); if (!$asuggasaseaacmqu) { goto mysueeoswqgccmui; } foreach ($asuggasaseaacmqu as $wyeyeaaekyoyimqu) { $mieuwqqskaueukye = ManipulateArray::get($wyeyeaaekyoyimqu, self::gaaismkuoysggwye, []); if (!$mieuwqqskaueukye) { goto aueaceeyommgkicu; } $mieuwqqskaueukye = preg_split("\57\134\x72\x5c\156\x7c\x5c\x6e\174\x5c\162\57", $mieuwqqskaueukye); if (!($mieuwqqskaueukye && is_array($mieuwqqskaueukye))) { goto zayqqeqgcwkekwws; } $mieuwqqskaueukye = array_filter($mieuwqqskaueukye); foreach ($mieuwqqskaueukye as $momcykaoccoymeig => $imiasuqakwyyyemq) { if (!rtrim($imiasuqakwyyyemq)) { goto sqyokemumceysegy; } $igqsaukqcqscimok = $this->ywayygsauoeyiasi($imiasuqakwyyyemq, $momcykaoccoymeig + 1); $mieuwqqskaueukye[$momcykaoccoymeig] = $igqsaukqcqscimok; sqyokemumceysegy: aiccyaswigkaycqk: } usymasgsyqgsuocg: $mcqieaigyeeyaksm = ManipulateArray::get($wyeyeaaekyoyimqu, self::mkousmkiawwousws . self::mswocgcucqoaesaa); if ($mcqieaigyeeyaksm) { goto oqousikwiiqagoyw; } $wyeyeaaekyoyimqu->{self::mkousmkiawwousws . self::mswocgcucqoaesaa} = Setting::ygyiswukccscuqmm(); oqousikwiiqagoyw: $wyeyeaaekyoyimqu->{self::gaaismkuoysggwye} = $mieuwqqskaueukye; zayqqeqgcwkekwws: aueaceeyommgkicu: eucqomyqykgoiuge: } qikaewekoecykeou: $icwicymcioeyeyek = ["\x63\157\x73\164" => ManipulatePost::igawqaomowicuayw(self::qqyqkusqcmeqssck, $post), "\x74\151\155\145" => $cqgoimumaewouews, "\165\x6e\x69\164" => $wowwosiimcqeokuo, "\164\x6f\157\x6c\x73" => ConvertArray::wauqeqkcymgoceuy(ManipulatePost::igawqaomowicuayw(self::geiigmeyouakiawq, $post)), "\x73\164\x65\x70\x73" => $asuggasaseaacmqu, "\164\151\164\x6c\x65" => ManipulatePost::qcgakseyaikigqco($post), "\x69\x6d\141\147\145" => ManipulatePost::wsiiswmaagmyiaiw($post), "\x73\165\x70\160\x6c\x69\145\163" => ConvertArray::wauqeqkcymgoceuy(ManipulatePost::igawqaomowicuayw(self::aiuciaomueaooauq, $post)), "\x63\165\x72\x72\x65\156\143\x79" => ManipulatePost::igawqaomowicuayw(self::acokgesogaukygye, $post), "\x74\157\164\141\154\124\x69\x6d\x65" => $sieqmaaeyogyamwk, "\144\145\163\143\162\151\x70\164\x69\157\156" => ManipulatePost::igawqaomowicuayw(self::skcomskcaowwkycu, $post)]; $icwicymcioeyeyek = ConvertArray::kamisyecckmwywwo($icwicymcioeyeyek); mysueeoswqgccmui: egmayaiikwsskgmy: ucuoeymyqeokgsya: return $icwicymcioeyeyek; } public function aoukuouwimcigeqe($ywoucyskcquysiwc = []) { $ywoucyskcquysiwc[] = Setting::sgsmqaoowiyocqaa("\150\157\167\x74\157\x5f\x74\141\142", __("\110\x4f\127\55\x54\117", PR__MDL__STRUCTURED_DATA))->mkksewyosgeumwsa(Setting::ymuegqgyuagyucws(self::qyieuqcescsakwga, __("\x54\157\x74\141\154\x20\x54\x69\155\x65", PR__MDL__STRUCTURED_DATA))->escqqisecooswqgo()->oiwawawcmigageco(6))->mkksewyosgeumwsa(Setting::ckuwucygcwsiawms(self::iycyqgwoeeoioami, __("\124\157\x74\x61\154\x20\124\x69\x6d\145\x20\x55\x6e\x69\164", PR__MDL__STRUCTURED_DATA), ["\160\x74\x25\163\x6d" => __("\115\x69\156\165\x74\x65", PR__MDL__STRUCTURED_DATA), "\x70\x74\x25\x73\150" => __("\110\x6f\x75\x72", PR__MDL__STRUCTURED_DATA), "\x70\x25\163\144" => __("\x44\x61\x79", PR__MDL__STRUCTURED_DATA)])->oiwawawcmigageco(6))->mkksewyosgeumwsa(Setting::ymuegqgyuagyucws(self::qqyqkusqcmeqssck, __("\x45\163\164\x69\x6d\141\164\145\x64\40\x43\x6f\x73\x74", PR__MDL__STRUCTURED_DATA))->escqqisecooswqgo()->oiwawawcmigageco(6))->mkksewyosgeumwsa(Setting::ckuwucygcwsiawms(self::acokgesogaukygye, __("\x43\165\162\162\145\x6e\143\171", PR__MDL__STRUCTURED_DATA), ["\x55\x53\x44" => __("\x55\123\101\x20\104\157\x6c\x6c\141\162", PR__MDL__STRUCTURED_DATA), "\111\122\x52" => __("\111\x52\111\x20\122\151\x61\154", PR__MDL__STRUCTURED_DATA)])->oiwawawcmigageco(6))->mkksewyosgeumwsa(Setting::uouyygwcgsmygaee(self::skcomskcaowwkycu, __("\x44\145\163\143\162\151\x70\x74\x69\x6f\x6e", PR__MDL__STRUCTURED_DATA))->qigsyyqgewgskemg("\x77\x2d\x6d\x64\x2d\61\60\x30"))->mkksewyosgeumwsa(Setting::iseogkiymousogom(self::aiuciaomueaooauq, __("\x53\165\160\160\x6c\151\x65\163", PR__MDL__STRUCTURED_DATA))->mkksewyosgeumwsa(Setting::ymuegqgyuagyucws(self::NAME, __("\116\x61\x6d\145", PR__MDL__STRUCTURED_DATA)))->oiwawawcmigageco(6))->mkksewyosgeumwsa(Setting::iseogkiymousogom(self::geiigmeyouakiawq, __("\124\x6f\x6f\x6c\163", PR__MDL__STRUCTURED_DATA))->mkksewyosgeumwsa(Setting::ymuegqgyuagyucws(self::NAME, __("\116\x61\155\x65", PR__MDL__STRUCTURED_DATA)))->oiwawawcmigageco(6))->mkksewyosgeumwsa(Setting::iseogkiymousogom(self::ckyksesoyeugoiyw, __("\123\x74\x65\x70\x73", PR__MDL__STRUCTURED_DATA))->mkksewyosgeumwsa(Setting::ymuegqgyuagyucws(self::qescuiwgsyuikume, __("\124\x69\164\x6c\x65", PR__MDL__STRUCTURED_DATA)))->mkksewyosgeumwsa(Setting::uouyygwcgsmygaee(self::gaaismkuoysggwye, __("\x49\x6e\x73\164\162\x75\143\x74\151\157\156\163", PR__MDL__STRUCTURED_DATA))->qigsyyqgewgskemg("\167\x2d\155\144\x2d\x31\60\60"))->mkksewyosgeumwsa(Setting::kimoeccokowuaiic(self::mkousmkiawwousws, __("\x49\155\x61\147\145", PR__MDL__STRUCTURED_DATA)))->ccmwycqioaicegoc(__("\120\x75\164\x20\x65\x61\143\150\x20\x64\x69\162\145\143\164\x69\157\x6e\x20\157\162\x20\x74\151\160\x20\x61\164\40\x73\145\x70\141\x72\x61\164\145\x20\x6c\151\x6e\x65\x73\x2e", PR__MDL__STRUCTURED_DATA) . sprintf("\74\142\x72\76\40\45\163", __("\102\x65\147\151\156\40\x74\x69\x70\x20\x6c\151\156\145\163\40\x77\151\x74\150\x20\x61\x20\43\40\143\150\141\x72\x61\x63\164\145\x72\x2e", PR__MDL__STRUCTURED_DATA)))->usosgsaaimqcysyk())->saemoowcasogykak(IconInterface::sogokmmgmqesmyum); return parent::aoukuouwimcigeqe($ywoucyskcquysiwc); } public function ywayygsauoeyiasi(?string $cmwygeyygwqaemaq, $kuuiuigeacouwmaa = 1) { return new Instruction($cmwygeyygwqaemaq, $kuuiuigeacouwmaa); } public function yccawocmoqqoscuq(?string $cqgoimumaewouews, ?string $iyqygqimawuycsyq) { switch ($iyqygqimawuycsyq) { case "\x70\x74\x25\x73\150": $aqykuigiuwmmcieu = __("\x25\x73\40\110\x6f\x75\162\163", PR__MDL__STRUCTURED_DATA); goto yuuyikiacmmueosu; case "\160\x25\x73\144": $aqykuigiuwmmcieu = __("\x25\x73\40\104\141\171\x73", PR__MDL__STRUCTURED_DATA); goto yuuyikiacmmueosu; case "\160\x74\x25\x73\x6d": default: $aqykuigiuwmmcieu = __("\x25\x73\40\115\151\x6e\x75\x74\x65\x73", PR__MDL__STRUCTURED_DATA); goto yuuyikiacmmueosu; } sguskaeaaqcagqgc: yuuyikiacmmueosu: return $this->wusgwkaycokeckqs(sprintf($aqykuigiuwmmcieu, $cqgoimumaewouews)); } }
