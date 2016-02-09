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

    public function getBookPage($language, $book)
    {
        return $this->db->select('SELECT content FROM book WHERE lang = :lang  AND book = :book ', [':lang' => $language, ':book' => $book]);
    }

    public function getTeamPage($language, $book, $team)
    {
        return $this->db->select('SELECT content FROM book WHERE lang = :lang AND subpage= :team AND book = :book ', [':lang' => $language, ':book' => $book, ':team' => $team]);
    }

    //BACKEND BULLSHIT
    public function getByID()
    {
        return $this->db->select('SELECT * FROM book WHERE id = :id', [':id' => $_POST['textID']])[0];
    }

    public function getAllEntries()
    {
        return $this->db->select('SELECT * FROM book');
    }

    public function getAllBooks()
    {
        return $this->db->select('SELECT book FROM book');
    }

    public function DBManip()
    {
        if (isset($_POST['insert']))
            $this->addEntry();
        elseif (isset($_POST['delete']))
            $this->removeEntry();
        elseif (isset($_POST['update']))
            $this->updateEntry();
    }

    public function addEntry()
    {
        return $this->db->insert('book', array('book' => $_POST['book'], 'subpage' => $_POST['subpage'], 'lang' => $_POST['lang'], 'content' => $_POST['text']));
    }

    public function removeEntry()
    {
        return $this->db->delete('book', 'id =' . $_POST['delete']);
    }

    public function updateEntry()
    {
        $this->db->update('book', ['book' => $_POST['book'], 'subpage' => $_POST['subpage'], 'pageid' => $_POST['pageid'], 'lang' => $_POST['lang'], 'content' => $_POST['text']], 'id = ' . $_POST['itemID']);
    }

}