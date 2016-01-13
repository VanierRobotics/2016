<?php

class _Text extends Model
{
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

    public function getPageId()
    {
      return $this->db->select('SELECT id FROM translate WHERE parent = :parent AND name = :name', [':parent' => 0, ":name" => $_POST['name']])[0];
    }

    public function DBManip()
    {
      // set parent
      if(isset($_POST['parent']))
        $parent = intvalue(getPageId())
      else
        $parent = 0;

      if(isset($_POST['insert']))
        addEntry($parent);
      elseif(isset($_POST['delete']))
        removeEntry();
      elseif(isset($_POST['update']))
        updateEntry();
    }

    public function addEntry()
    {
      $this->db>insert('translate', array('name' => $_POST['name'], 'language' => $_POST['language'], 'text' => $_POST['text']));
    }

    public function removeEntry()
    {
      $this->db->delete('translate', 'id ='.$_POST['delete']);
    }

    public function updateEntry()
    {
        $this->db->update('translate', ['name' => $_POST['name'], 'text' => $_POST['text'], 'language' => $_POST['language'] ],'id = ' . $_POST['id'] );
    }
}
