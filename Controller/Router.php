<?php

class Router {

    public function routerRequest(): void {

        if(isset($_GET['route'])) {

            switch($_GET['route']) {

                case 'education':

                    $educCTRL = new EducController();
                    $educCTRL->display();
                    break;

                case 'promenade':

                    $walkCTRL = new WalkController();
                    $walkCTRL->display();
                    break;

                case 'pension':

                    $pensionCTRL = new PensionController();
                    $pensionCTRL->display();
                    break;

                case 'secteurs':

                    $areaCTRL = new AreaController();
                    $areaCTRL->display();
                    break;

                case 'tarifs':

                    $pricesCTRL = new PricesController();
                    $pricesCTRL->display();
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
