<?php

class Router {

    public function routerRequest(): void {

        if(isset($_GET['route'])) {

            switch($_GET['route']) {

                case 'secteurs':

                    $areaCTRL = new AreaController();
                    $areaCTRL->display();
                    break;

                case 'prise-rdv':

                    $calCTRL = new CalendarController();
                    $calCTRL->display();
                    break;

                default :

                    header('location: /404/');
                    break;

            }

        } else {

            $homeCTRL = new HomeController();
            $homeCTRL->display();

        }

    }

}

?>
