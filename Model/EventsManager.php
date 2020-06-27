<?php

require_once('model/Manager.php');

class EventManager extends manager

{
    public function getEvents(){

        $db = $this->dbconnect();
        $req = $db->query('SELECT * FROM event ');
        $top =$db->query('SELECT TOP 1 eventID FROM event');

        return $req;

    }

    public function getTopEvent(){
        $db = $this->dbconnect();
        $top =$db->query('SELECT eventID FROM event ORDER BY eventID ASC LIMIT 1;');

        return $top;
    }
    public function GetMaxEventID(){
        $db = $this->dbconnect();
        $req=$db->query('SELECT eventID FROM event ORDER BY eventID DESC LIMIT 1');
        return $req;
    }
    public function postEvent($event,$eventDisc,$eventDate)
    {
        $db =$this->dbconnect();
//        echo 'INSERT INTO event( event , eventDescription, eventDate) VALUES(?, ?,?)';

        $Event = $db->prepare('INSERT INTO event( event,eventDescription, eventDate) VALUES(?, ?, ?)');
        $affectedLines = $Event->execute(array($event,$eventDisc,$eventDate));

        return $affectedLines;

    }

    public function DeleteEvent($id){
        $db =$this->dbconnect();
        var_dump($id);
        $req = $db->query('DELETE FROM `event` where `eventID`='.$id);


        return $req;
    }

}
