<?php
class SubscriptionDao extends Dao {
  const SQL_INSERT_USER = "
  INSERT INTO user
    (user_name, user_firstname, user_email)
  VALUES
    (:userFirstName, :userLastName, :userEmail)
    ";
  
  const SQL_INSERT_SUBSCRIPTION = "
    INSERT INTO subscription
      (subs_date, fk_prog_id, fk_user_id)
    VALUES
      (:date, :progId, :userId)
      ";

    public function insert($form_firstname, $form_lastname, $form_email, $form_program){
        $myConnection = Dao::connect();
        
        $request = $myConnection->prepare(self::SQL_INSERT_USER);
        $request->bindValue(':userFirstName', $form_firstname);
        $request->bindValue(':userLastName', $form_lastname);
        $request->bindValue(':userEmail',$form_email);
      
        if (! $request->execute()){
            "Cannot validate the user creation";
        } else{
          echo "before last id";
          $last_id = $myConnection->lastInsertId();

          $form_date = date('Y-m-d', time());
          echo "last id".$last_id." date".$form_date;
          $requestSub = $myConnection->prepare(self::SQL_INSERT_SUBSCRIPTION);
          $requestSub->bindValue(':progId', $form_program);
          $requestSub->bindValue(':date', $form_date);
          $requestSub->bindValue(':userId', $last_id);
          if (! $requestSub->execute()){
            "User creation valid but cannot validate the subscription";
          }
        }
    }

    const SQL_ALL_SUBSCRIPTIONS = "
    SELECT * FROM subscription
    ";

    public function getAll(){
        $myConnection = Dao::connect();
        $request = $myConnection->prepare(self::SQL_ALL_SUBSCRIPTIONS);
        if (! $request->execute()){
            throw new BlogException(1, "Cannot get the list of Posts");
        } else {
          $data = $request->fetchAll(PDO::FETCH_ASSOC);
          $articlesData = [];
          foreach ($data as $value) {
              $articlesData [] = new Article(
                $value["id"],
                $value["title"],
                $value["content"]
              );
          }
          return $articlesData;
        }
    }
}
