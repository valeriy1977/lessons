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

        // ОСТАНОВИЛИСЬ ЗДЕСЬ
        $sql = "SELECT gallery_id FROM gallery_images";
        $gallerys_list =  $this->sql($sql);

        foreach ($gallerys_list as $g_ids)
        {
            foreach ($g_ids as $id)
            {
                $g []= unserialize($g_ids['gallery_id']);
            }

        }
        echo "<PRE>";
        var_export($g);
        echo "</PRE>";
        //$sql = "SELECT id, image FROM gallery_images WHERE gallery_id='{$id}'";

    }

    public function getGallerysIdForImage($id)
    {
        $sql = "SELECT gallery_id FROM gallery_images WHERE id='{$id}'";
        return $this->sql($sql);
    }

    public function addImageToGallery($gallery_id, $image_id)
    {
        // получим с БД список галерей для конкретной картинки (в сыром виде)
        $g_ids = $this->getGallerysIdForImage($image_id);
        // конвертируем в массив
        $gallerys_list = unserialize($g_ids[0]['gallery_id']);

        // если массив пустой
        if (empty($gallerys_list))
        {
            // добавим номер галереи
            $gallerys_list [] = $gallery_id;
        }
        else
        {
            foreach ($gallerys_list as $g_id)
            {
                if($gallery_id != $g_id)
                {
                    $gallerys_list [] = $gallery_id;
                }
            }
        }

        // сериализуем массив с номерами галерей для конкретной картинки
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