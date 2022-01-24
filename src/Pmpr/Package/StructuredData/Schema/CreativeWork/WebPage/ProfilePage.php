<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61eed0d47caee             |
    |_______________________________________|
*/
 namespace Pmpr\Package\StructuredData\Schema\CreativeWork\WebPage; use Pmpr\Common\Foundation\Decorator\Post\DecoratorAuthor; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Package\StructuredData\Schema\CreativeWork\MediaObject\ImageObject; use Pmpr\Package\StructuredData\Schema\Person; class ProfilePage extends WebPage { public function __construct($goiqeyeaqmicqiky = true) { if (!$goiqeyeaqmicqiky) { goto gicyayswqyuoekcq; } $post = ManipulatePost::get(); $qscaoekmoooeuyqg = ManipulatePost::mguqscccckuywsya($post); $this->kwcomqeygmcaegeo(sprintf(__("\x41\142\x6f\x75\164\40\x25\163", PR__PKG__STRUCTURED_DATA), DecoratorAuthor::get()))->keogoququwauweom((new Person())->mwiamauscyiwogsu(new ImageObject())->gucwmccyimoagwcm(DecoratorAuthor::igawqaomowicuayw(self::eqkeooqcsscoggia)))->eyqkogeiqauioamw(esc_url(DecoratorAuthor::mkaiaewoyaimieqg($qscaoekmoooeuyqg)))->iaqckqwoiseyqaku(); gicyayswqyuoekcq: parent::__construct($goiqeyeaqmicqiky); } }
