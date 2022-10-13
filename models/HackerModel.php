<?php

require_once 'BaseModel.php';

class HackerModel extends BaseModel
{


    public function insertHacker($input)
    {


        // $string = htmlspecialchars($input['data']);
        if (isset($input['cookie'])) {

            $str = $input['cookie'];

            $sql = "INSERT INTO `hacker`( `name`) VALUES (" . "'" . $str . "'" . ")";

            $user = $this->insert($sql);

            return $user;
        } else {
            return;
        }
    }
}
