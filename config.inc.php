<?php

 	define ("ROUTEBASE", "http://localhost/fun-power/index.php");

 	define("BDDNAME", "mysql:host=localhost;dbname=tp-sport");
  define("BDDUSER", "root");
 	define("BDDPASSWORD", "root");

  // Route passée dans l'URL => [controller correspondant, options]

  define("ROUTE",[
    "connect"=>"controlConnect",
    "showUser"=>"controlShowUser",
    "createProgram"=>"controlCreateProgram",
    "createSubscription"=>"controlCreateSubscription",
    "showProgram"=>"controlShowPrograms",
    "showSubscription"=>"controlShowSubscriptions"
  ]);
