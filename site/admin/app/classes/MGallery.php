<?php


namespace app\classes;


class MGallery extends Db
{
    // удалить галерею
    public function deleteGallery($id)
    {
        $sql = "DELETE FROM gallery WHERE id='{$id}'";
        $this->sql($sql);
    }

    public function getGalleryName($id)
    {
        $sql = "SELECT gallery_name FROM gallery WHERE id='{$id}'";
        return $this->sql($sql);
    }

    public function getGalleryImages($id)
    {
        $sql = "SELECT id, image FROM gallery_images WHERE gallery_id='{$id}'";
        return $this->sql($sql);
    }

    public function imagedelete($id)
    {
        $sql = "UPDATE gallery_images SET gallery_id='0' WHERE id='{$id}'";
        echo $sql;
        $this->sql($sql);
    }
}