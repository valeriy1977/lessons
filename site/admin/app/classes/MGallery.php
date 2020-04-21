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

    public function getGalleryImages($gallery_id)
    {
        $sql = "SELECT image_ids FROM gallery WHERE id='{$gallery_id}'";
        $images_list =  $this->sql($sql);

        $all_images = unserialize($images_list[0]['image_ids']);
        return $all_images;
    }

    public function getImageFullName($id)
    {
        $sql = "SELECT image FROM gallery_images WHERE id='{$id}'";
        return $this->sql($sql);
    }



    public function addImageToGallery($gallery_id, $image_id)
    {
        // получим название картинки с определённым id
        $image_name = $this->getImageFullName($image_id);
        $image_name = $image_name[0]['image'];

        // получим с БД список полных имён картинок для конкретной галереи (в сыром виде)
        $full_names = $this->getGalleryImages($gallery_id);

        // если массив пустой
        if (empty($full_names))
        {
            // добавим полное имя картинки в галерею
            $full_names [] = $image_name;
        }
        else
        {
            //  ДУБЛИРУЕТ КАРТИНКУ В МАССИВ
            foreach ($full_names as $image_full_name)
            {
                if($image_name != $image_full_name)
                {
                    // добавим полное имя картинки в галерею
                    $full_names [] = $image_name;
                }
            }
        }
        var_export($full_names);

        // сериализуем массив с полным именем картинок для конкретной галереи
        $serialized = serialize($full_names);
        $sql = "UPDATE gallery SET image_ids='{$serialized}' WHERE id='{$gallery_id}'";
        $this->sql($sql);
    }
    public function imagedelete($id)
    {
        $sql = "UPDATE gallery_images SET gallery_id='0' WHERE id='{$id}'";
        $this->sql($sql);
    }
}