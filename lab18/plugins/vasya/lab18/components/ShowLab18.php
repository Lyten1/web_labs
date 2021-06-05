<?php namespace Vasya\Lab18\Components;

use Cms\Classes\ComponentBase;
use Db;
use Vasya\Lab18\Models\Table;
use Input;

class ShowLab18 extends ComponentBase {

    public $myCompany;
    public $PhoneBases;

    public function componentDetails() {
        return [
            'name'        => 'ShowLab18 Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties() {
        return [];
    }

    public function onRun() {
        $this->myCompany = "Stork. Inc.";
        $this->PhoneBases = Table::orderBy('id', 'asc')->get();
    }

    public function onSaveData() {
        $name = Input::get('name');
        $phone = Input::get('phone');
    echo "---" . Input::get('test') . "---";
        Table::insert(
            [
                'name' => $name,
                'phone' => $phone
            ]
        );

        return true;
    }
}
