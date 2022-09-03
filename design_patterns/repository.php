<?php

class Model {
    public $name;
    public $age;

    public function save() {
        echo "Saving $this->name and $this->age";
    
    }
}

class Repository {
    public function update($data) {
        $name = $data['name'] ?? "Unknown";
        $age = $data['age'] ?? "Unknown";

        $model = new Model;
        $model->name = $name;
        $model->age = $age;
        $model->save();
    }
}

class App {
    private $repo;

    public function __construct(Repository $repo) {
        $this->repo = $repo;
    }

    public function update($data) {
        $this->repo->update($data);
    }
}

$app = new App(new Repository);
$data = ['name' => "Kyaw"];
$app->update($data);

function add(int $a, int $b) {
    return $a + $b;
}

