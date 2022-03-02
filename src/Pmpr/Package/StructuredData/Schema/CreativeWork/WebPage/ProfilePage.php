<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             621f76a412065             |
    |_______________________________________|
*/
 namespace Pmpr\Package\StructuredData\Schema\CreativeWork\WebPage; use Pmpr\Common\Foundation\Decorator\Post\DecoratorAuthor; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Package\StructuredData\Schema\CreativeWork\MediaObject\ImageObject; use Pmpr\Package\StructuredData\Schema\Person; class ProfilePage extends WebPage { public function __construct($goiqeyeaqmicqiky = true) { if (!$goiqeyeaqmicqiky) { goto qqewoyookaskiuek; } $post = ManipulatePost::get(); $qscaoekmoooeuyqg = ManipulatePost::mguqscccckuywsya($post); $this->kwcomqeygmcaegeo(sprintf(__("\x41\x62\157\x75\x74\40\x25\x73", PR__PKG__STRUCTURED_DATA), DecoratorAuthor::get()))->keogoququwauweom((new Person())->mwiamauscyiwogsu(new ImageObject())->gucwmccyimoagwcm(DecoratorAuthor::igawqaomowicuayw(self::eqkeooqcsscoggia)))->eyqkogeiqauioamw(esc_url(DecoratorAuthor::mkaiaewoyaimieqg($qscaoekmoooeuyqg)))->iaqckqwoiseyqaku(); qqewoyookaskiuek: parent::__construct($goiqeyeaqmicqiky); } }
