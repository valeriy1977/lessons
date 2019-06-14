<?php
namespace app\classes;


class CPage extends MPage
{
    public function pagesList()
    {
        return $this->getPagesList();
    }

    public function PageForEdit($id)
    {
        return $this->getPageForEdit($id);
    }
}