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

    public function getAllImages()
    {
        $sql = "SELECT id, image FROM gallery_images";
        return $this->sql($sql);
    }

    public function getGalleryImages($id)
    {
        $sql = "SELECT id, image FROM gallery_images WHERE gallery_id='{$id}'";
        return $this->sql($sql);
    }

    public function getGallerysIdForImage($id)
    {
        $sql = "SELECT gallery_id FROM gallery_images WHERE id='{$id}'";
        return $this->sql($sql);
    }

    public function addImageToGallery($gallery_id, $image_id)
    {
        $g_ids = $this->getGallerysIdForImage($image_id);
        $gallerys_list = unserialize($g_ids[0]['gallery_id']);

        var_export($gallerys_list);
        $gallerys_list [] = $gallery_id;
        var_export($gallerys_list);

        $serialized = serialize($gallerys_list);
        $sql = "UPDATE gallery_images SET gallery_id='{$serialized}' WHERE id='{$image_id}'";
        $this->sql($sql);
    }
    public function imagedelete($id)
    {
        $sql = "UPDATE gallery_images SET gallery_id='0' WHERE id='{$id}'";
        $this->sql($sql);
    }
}