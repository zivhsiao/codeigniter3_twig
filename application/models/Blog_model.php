<?php

class Blog_model extends CI_Model {

    public $title;
    public $content;
    public $date;

    public function __construct()
    {
            parent::__construct();
            // Your own constructor code
    }


    public function insert_entry()
    {
            $this->title    = $_POST['title']; // please read the below note
            $this->content  = $_POST['content'];
            $this->date     = time();

            $this->db->insert('blogs', $this);
    }

    public function update_entry()
    {
            $this->title    = $_POST['title'];
            $this->content  = $_POST['content'];
            $this->date     = time();

            $this->db->update('blogs', $this, array('id' => $_POST['id']));
    }

}