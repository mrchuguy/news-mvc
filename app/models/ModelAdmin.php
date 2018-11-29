<?php

class ModelAdmin extends Model
{
    public function add_data($name, $text, $date){
        if ($this->db->connect_errno === 0) {
            $query = "INSERT INTO news (name, text, date) VALUES ('".$name."', '".$text."', '$date')";
            $this->db->query($query);
        }
    }
}