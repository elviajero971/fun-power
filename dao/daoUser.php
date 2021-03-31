<?php
class UserDao extends Dao {
  
    const SQL_ALL_USERS = "
    SELECT * FROM user
    ";

    public function getAll(){
        echo "getAll User";
        $myConnection = Dao::connect();
        $request = $myConnection->prepare(self::SQL_ALL_USERS);
        if (! $request->execute()){
            "Cannot get the list of users";
        } else {
          $data = $request->fetchAll(PDO::FETCH_ASSOC);
          $usersData = [];
          foreach ($data as $value) {
              $usersData [] = new User(
                $value["user_id"],
                $value["user_name"],
                $value["user_lastname"],
                $value["user_email"]
              );
          }
          return $usersData;
        }
    }
}
