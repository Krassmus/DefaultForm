<?php

class DefaultForm extends StudIPPlugin implements SystemPlugin {

    public function __construct() {
        parent::__construct();
        $this->addStylesheet("assets/defaultform.less");
        $nav = new Navigation(_("DefaultForm"), PluginEngine::getURL($this, array(), "example/index"));

        Navigation::addItem("/start/defaultform", $nav);
        $nav = clone $nav;
        $nav->addSubNavigation("index", clone $nav);


        Navigation::addItem("/defaultform", $nav);
    }
}