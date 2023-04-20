<?php

namespace core;

class frontendDependencies
{
private $bootstrapCSS;
private $bootstrapJS;
private $fontAwesomeCSS;

    public function __construct()
    {
        $this->bootstrapCSS = '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />';
        $this->bootstrapJS = '<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.bundle.min.js" integrity="sha512-i9cEfJwUwViEPFKdC1enz4ZRGBj8YQo6QByFTF92YXHi7waCqyexvRD75S5NVTsSiTv7rKWqG9Y5eFxmRsOn0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>';
        $this->fontAwesomeCSS = '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />';
    }

    /**
     * @return string
     */
    public function getBootstrapCSS(): string
    {
        return '<!-- BOOTSTRAP CSS -->\n'.$this->bootstrapCSS;
    }

    /**
     * @return string
     */
    public function getBootstrapJS(): string
    {
        return '<!-- BOOTSTRAP JS -->\n'.$this->bootstrapJS;
    }

    /**
     * @return string
     */
    public function getBootstrap():string
    {
        return '<!-- Bootstrap CSS&JS -->\n>'.$this->bootstrapCSS.'\n'.$this->bootstrapJS;
    }

    /**
     * @return string
     */
    public function getFontAwesomeCSS(): string
    {
        return '<!-- FontAwesome CSS -->\n>'.$this->fontAwesomeCSS;
    }

    /**
     * @return string
     */
    public function getAll(): string
    {
        return '<!-- CSS -->\n>'.$this->bootstrapCSS.'\n'.$this->fontAwesomeCSS.'\n <?-- SCRIPT -->\n'.$this->bootstrapJS;
    }
}