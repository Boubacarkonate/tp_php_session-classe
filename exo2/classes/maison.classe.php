<?php

class maison{
   private static $lastId=0;
   private $id;
   private $date_creation;
   private $nbr_room;
   private $area;

   public function __construct($date_creation,$nbr_room,$area)
   {
        self::$lastId++;
        $this->id = self::$lastId;
        $this->date_creation = $date_creation;
        $this->nbr_room = $nbr_room;
        $this->area = $area;

   }

   public function getId()
   {
       return $this->id;
   }
   
   public function getDate_creation()
   {
      return $this->date_creation;
   }

   
   public function getNbr_room()
   {
      return $this->nbr_room;
   }

  
   public function getArea()
   {
      return $this->area;
   }

}