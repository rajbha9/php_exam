<?php

class API {
    public $HOSTNAME = "127.0.0.1";
    public $USERNAME = "root";
    public $PASSWORD = "";
    public $DATABASE = "movie_booking";
    public $conection = false;

    public function __construct()
    {
        $this->conection = mysqli_connect($this->HOSTNAME,$this->USERNAME,$this->PASSWORD,$this->DATABASE);
    }

    public function addBooking($name,$age,$foo,$too) {

        $sql = "INSERT INTO movie_booking (name,age,from,to) VALUES('$name',$age,'$foo','$too')";

        $res = mysqli_query($this->conection, $sql);

        return $res;
    }

    public function fetchAllBooking() {

        $sql = "SELECT * FROM movie_booking";

        $res = mysqli_query($this->conection,$sql);

        return $res;
    }
    
    public function updateBooking($name,$age,$foo,$too,$id) {

        $sql = "UPDATE movie_booking SET name='$name',age=$age,from='$foo',to='$too' WHERE id=$id";

        $res = mysqli_query($this->conection,$sql);
        
        return $res;
    }

    public function deleteBooking($id) {
        
        $sql = "DELETE FROM movie_booking WHERE id=$id";

        $res = mysqli_query($this->conection,$sql);

        return $res;
    }

}

?>