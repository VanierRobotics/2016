<?php

class _Text extends Model
{

    /**
     * _text constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function getText($id, $lang)
    {
        return $this->db->select("SELECT text FROM translate WHERE class = :id AND lang = :lang", [':id' => $id,':lang' => $lang]);
    }

}