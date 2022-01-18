<?php namespace Globals;

  class Visitor
  {
    public function __construct()
    {
      \Session::remove('global_visitor');
      $this->saveVisitor();
    }

    private function saveVisitor()
    {
      $sessioName = 'global_visitor';
      /*Save Visitors Information*/
      if(! \Session::check($sessioName))
      {
        /*Load Database*/
        $db = \Database::getInstance();
        //check if from other site
        $parameters = !empty($_GET) ? $_GET : ['no_referrer' => ''];
        $parameters = str_escape(keypair_to_str($parameters));

        $token = uniqid( );
        $db->query( " INSERT INTO page_visits (parameters) VALUES('$parameters')");

        $db->insert();
        \Session::set($sessioName , uniqid());
      }
    }
  }
