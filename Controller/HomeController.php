<?php

use JetBrains\PhpStorm\Pure;

class HomeController {

    private HomeModel $homeModel;

    #[Pure] public function __construct() {

        $this->homeModel = new HomeModel();

    }

    public function display(): void {

        include('View/HomeView.php');

    }

}

?>