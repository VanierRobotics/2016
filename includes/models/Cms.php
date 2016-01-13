<?php
/**
 * Created by PhpStorm.
 * User: Web Captain
 * Date: 2016-01-13
 * Time: 11:10 AM
 */


class _Cms extends Model
{

    /**
     * _cms constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function getTexts($language,$Page){
        return $this->db->select("SELECT class, text FROM translate WHERE lang = :lang AND page = :page", [':lang' => $language,':page' => $Page]);
    }

}