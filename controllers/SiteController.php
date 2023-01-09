<?php
  namespace app\controllers;
  use app\core\Controller;
  use app\core\Request;

  class SiteController extends Controller {
    public function home() {
      $params = [
        'name' => 'Mohammad Salah'
      ];

      $this->render('home', $params);
    }

    public function contact() {
      $this->render('contact');
    }

    public function handleContact(Request $request) {
      $body = $request->getBody();
      print_r($body);
    }
  }
?>