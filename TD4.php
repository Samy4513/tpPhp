<?php

class Book
{
    private $title;
    private $author;
    private $editor;
    private $pageNb;

    public function _construct()
    {
    }

    public function title()
    {
        return $this->title;
    }

    public function author()
    {
        return $this->author;
    }

    public function editor()
    {
        return $this->editor;
    }

    public function pageNb()
    {
        return $this->pageNb;
    }

    public function setTitle($title)
    {
        if (!is_string($title)) // S'il ne s'agit pas d'un string
        {
            trigger_error('La valeur entrée n\'est pas un string', E_USER_WARNING);
        }

        $this->title = $title;
    }

    public function setAuthor($author)
    {
        if (!is_string($author)) // S'il ne s'agit pas d'un string
        {
            trigger_error('La valeur entrée n\'est pas un string', E_USER_WARNING);
        }

        $this->author = $author;
    }

    public function setEditor($editor)
    {
        if (!is_string($editor)) // S'il ne s'agit pas d'un string
        {
            trigger_error('La valeur entrée n\'est pas un string', E_USER_WARNING);
        }

        $this->editor = $editor;
    }

    public function setPageNb($pageNb)
    {
        if (!is_int($pageNb)) // S'il ne s'agit pas d'un string
        {
            trigger_error('La valeur entrée n\'est pas un entier', E_USER_WARNING);
        }

        $this->pageNb = $pageNb;
    }

    public function afficherLivre()
    {
        title() . '<br/>';
        author() . '<br/>';
        editor() . '<br/>';
        pageNb() . '<br/>';

    }
}

class Library
{
    const MAX_BOOKS;
    private $name;
    private $address;
    private $max;



}

