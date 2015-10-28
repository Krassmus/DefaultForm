<?php

class ExampleController extends PluginController {

    public function index_action()
    {
        Navigation::activateItem("/defaultform/index");
    }

}