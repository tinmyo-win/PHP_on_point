<?php

class Profile {
    private $name;
    private $phone;

    public function __construct($name, $phone) {
        $this->name = $name;
        $this->phone = $phone;
    }
}

$data = [
    ["name" =>"Tommy", "phone" => "0944323444"],
    ["name" =>"Michael"],
    ["name" => "Jack", "phone" => "0977323422"],
];

class ProfileFactory {
    private $data;

    public function __construct($data) {
        $this->data = $data;
    }

    public function create() {
        $result = [];

        foreach($this->data as $data) {
            $name = $data["name"] ?? "Unknown";
            $phone = $data["phone"] ?? "N/A";
            $result[] = new Profile($name, $phone);
        }

        return $result;
    }
}

$pf = new ProfileFactory($data);
$profiles = $pf->create();
print_r($profiles);