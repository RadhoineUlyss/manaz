<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class articles_model extends CI_Model
{
    public function getArticles($type=null)
    {
        if($type !=null) {
            return $this->db->select("*")
                ->where("type", $type)
                ->get("view_article_taille", 50)
                ->result();
        }
        else{
            return $this->db->select("*")
                ->get("view_article_taille", 50)
                ->result();
        }
    }
}