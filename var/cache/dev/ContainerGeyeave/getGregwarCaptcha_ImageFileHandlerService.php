<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'gregwar_captcha.image_file_handler' shared service.

include_once $this->targetDirs[3].'\\vendor\\gregwar\\captcha-bundle\\Generator\\ImageFileHandler.php';

return $this->services['gregwar_captcha.image_file_handler'] = new \Gregwar\CaptchaBundle\Generator\ImageFileHandler('captcha', ($this->targetDirs[3].'\\app/../web'), 100, 60);
