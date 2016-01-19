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

    //FOR FLIPBOOK... Github has a feature called blame, I will find you if you change this.
    public function getTotalPages($language,$book){
        $st = $this->db->select('SELECT pageid FROM book WHERE lang = :lang AND book = :book', [':lang' => $language,':book' => $book]);
        return count($st);
    }

    public function getBookPage($language, $book, $page){
        return $this->db->select('SELECT content FROM book WHERE lang = :lang AND pageid = :page AND book = :book ', [':lang' => $language,':page' => $page, ':book' => $book]);
    }

    //BACKEND BULLSHIT
    public function getByID(){
        return $this->db->select('SELECT * FROM book WHERE id = :id',[':id' => $_POST['textID']])[0];
    }

    public function getAllEntries(){
        return $this->db->select('SELECT * FROM book');
    }

    public function getAllBooks(){
        return $this->db->select('SELECT book FROM book');
    }

    public function getPageID()
    {
        return $this->db->select('SELECT pageid FROM book WHERE parent = :parent AND name = :name', [':parent' => 0, ":name" => $_POST['name']])[0];
    }

    public function DBManip()
    {
        // set parent
        if(isset($_POST['parent']))
            $parent = (int) $this->getPageID();
        else
            $parent = 0;

        if(isset($_POST['insert']))
            $this->addEntry($parent);
        elseif(isset($_POST['delete']))
            $this->removeEntry();
        elseif(isset($_POST['update']))
            $this->updateEntry();
    }

    public function addEntry()
    {
        return $this->db>insert('book', array('book' => $_POST['book'], 'subpage' => $_POST['subpage'], 'pageid' => $_POST['pageid'], 'lang' => $_POST['lang'], 'content' => $_POST['text']));
    }

    public function removeEntry()
    {
       return $this->db->delete('book', 'id ='.$_POST['delete']);
    }

    public function updateEntry()
    {
        $this->db->update('translate', 'book', ['book' => $_POST['book'], 'subpage' => $_POST['subpage'], 'pageid' => $_POST['pageid'], 'lang' => $_POST['lang'], 'content' => $_POST['text']] ,'id = ' . $_POST['itemID'] );
    }

}