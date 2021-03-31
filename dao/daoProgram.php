<?php
class ProgramDao extends Dao {
    const SQL_INSERT_PROGRAM = "
    INSERT INTO program
      (prog_title, prog_duration, prog_price, prog_description)
    VALUES
      (:progTitle, :progDuration, :progPrice, :progDescription)
      ";

    public function insert($form_progTitle,$form_progDuration, $form_progDescription, $form_progPrice){
        echo $form_progTitle;
        $myConnection = Dao::connect();
        $request = $myConnection->prepare(self::SQL_INSERT_PROGRAM);
        $request->bindValue(':progTitle', $form_progTitle);
        $request->bindValue(':progDuration',$form_progDuration);
        $request->bindValue(':progDescription',$form_progDescription);
        $request->bindValue(':progPrice',$form_progPrice);
        if (! $request->execute()){
            echo "Cannot insert new Program";
        }
    }

    const SQL_ALL_PROGRAMS = "
    SELECT * FROM program
    ";

    public function getAll(){
        echo "getAll Program";
        $myConnection = Dao::connect();
        $request = $myConnection->prepare(self::SQL_ALL_PROGRAMS);
        if (! $request->execute()){
            "Cannot get the list of programs";
        } else {
          $data = $request->fetchAll(PDO::FETCH_ASSOC);
          $programsData = [];
          foreach ($data as $value) {
              $programsData [] = new Program(
                $value["prog_id"],
                $value["prog_title"],
                $value["prog_duration"],
                $value["prog_price"],
                $value["prog_description"]
              );
          }
          return $programsData;
        }
    }

    const SQL_ONE_ARTICLE = "
    SELECT * FROM article
    ";

    public function getOne($id){
        $myConnection = Dao::connect();
        $request = $myConnection->prepare((self::SQL_ONE_ARTICLE." WHERE id=".$id." "));
        if (! $request->execute()){
            throw new BlogException(1, "Cannot get the list of Posts");
        } else {
          $data = $request->fetch(PDO::FETCH_ASSOC);
          $articleData = new Article(
                $data["id"],
                $data["title"],
                $data["content"]
              );
          return $articleData;
        }
    }

    const SQL_DELETE_ONE = "
    DELETE FROM article
    ";

    public function deleteOne($id){
        $myConnection = Dao::connect();
        $request = $myConnection->prepare((self::SQL_DELETE_ONE." WHERE id=".$id." "));
        if (! $request->execute()){
            throw new BlogException(1, "Cannot get the list of Posts");
        }
    }



}
