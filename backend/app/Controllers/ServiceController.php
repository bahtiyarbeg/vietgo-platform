<?php

class ServiceController {

    public function addService(){

        $data = json_decode(file_get_contents("php://input"), true);

        $title = $data["title"];
        $category = $data["category"];
        $price = $data["price"];

        echo json_encode([
            "status"=>"ok",
            "service"=>$title
        ]);

    }

}
