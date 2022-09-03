<?php

class Setting {
    static $setting = null;

    public $dark = 0;
    public $bluetooth = "On";

    protected function __construct() {
        //
    }

    public function setBlutooth() {
        if($this->bluetooth ==="On") $this->bluetooth = "Off";
            else $this->bluetooth = "On";
    }

    static function create() {
        if(!static::$setting) {
            static::$setting = new static;
        }

        echo "<br>";
        var_dump(static::$setting);
        print_r(static::$setting);

        return static::$setting;
    }
}

$setting1 = Setting::create();
$setting1->dark = 1;
$setting1->setBlutooth();
echo $setting1->bluetooth;

echo $setting1->dark;

$setting2 = Setting::create();
echo $setting2->dark;

echo $setting2->bluetooth;