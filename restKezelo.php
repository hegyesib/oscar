<?php
class RestKezelo{
    private $httpVersion = "HTTP/1.1";
    public function sethttpFejlec(){
        $statusUzenet = $this->gethttpStatusUzenet($statusKod);
        header($this->httpVersion. " ". $statusKod. " ". $statusUzenet);
        header("Content_Type: Application/json; charset=utp")
    }
    public function gethttpStatusUzenet($statusKod){
        $httpStatus = array(
            200 => 'OK',
            400 => 'Bad Rikviszt',
            403 => 'Not Found'
        );
        return ($httpStatus[$statusKod]);
    }
}
?>