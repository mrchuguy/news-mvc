<?php

class ModelNews extends Model
{
    public function get_data()
    {
        if ($this->db->connect_errno === 0) {
            $query = 'select * from news';
            $data = $this->db->query($query);
            if ($data) {
                return $data->fetch_all(MYSQLI_ASSOC);
            } else {
                return false;
            }
        }
    }
}