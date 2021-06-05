<?php namespace Vasya\Lab18;

use System\Classes\PluginBase;

class Plugin extends PluginBase {
    public function registerComponents() {
    	return [
    		'\Vasya\Lab18\Components\ShowLab18' => 'ShowLab18'
    	];
    }

    public function registerSettings() {
    }
}
