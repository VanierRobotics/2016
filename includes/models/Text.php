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

    public function getThing(){
        return $this->db->select('SELECT * FROM translate WHERE id = :id',[':id' => $_POST['textID']])[0];
    }

    public function getSomething(){
        return $this->db->select('SELECT * FROM  translate');
}



    public function doThings(){
        if(isset($_POST['insert'])){
            $this->db->insert('translate', ['page' => $_POST['page'], 'class' => $_POST['class'], 'lang' => $_POST['lang'], 'text' => $_POST['text'] ] );
        }
        elseif(isset($_POST['delete'])){
            $this->db->delete('translate', 'id ='.$_POST['delete']);
        }
        elseif(isset($_POST['update'])){
            $this->db->update('translate', ['page' => $_POST['page'], 'class' => $_POST['class'], 'text' => $_POST['text'], 'lang' => $_POST['lang'] ],' id = ' . $_POST['itemID'] );
        }

    }

}