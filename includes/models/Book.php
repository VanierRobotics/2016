<?php
/**
 * Created by PhpStorm.
 * User: Web Captain
 * Date: 2016-01-13
 * Time: 11:10 AM
 */


class _Book extends Model
{

    /**
     * _cms constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function getTotalPages($language,$book){
        $st = $this->db->select("SELECT id FROM book WHERE lang = :lang AND book = :book", [':lang' => $language,':book' => $book]);
        return count($st);
    }

    public function getBookPage($language, $book){
        return $this->db->select("SELECT class, text FROM translate WHERE lang = :lang AND page = :page", [':lang' => $language,':page' => $book]);
    }

}