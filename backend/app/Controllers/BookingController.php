<?php

class BookingController {

    public function createBooking(){

        $data = json_decode(file_get_contents("php://input"), true);

        $name = $data["name"];
        $hotel = $data["hotel"];
        $tour = $data["tour"];
        $date = $data["date"];

        echo json_encode([
            "status" => "success",
            "message" => "Booking created",
            "tour" => $tour
        ]);
    }

}
