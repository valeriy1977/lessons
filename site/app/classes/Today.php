<?php
namespace app\classes;


class Today
{

    public function getTodayDate()
    {
        $month ["January"] = "Январь";
        $month ["February"] = "Февраль";
        $month ["March"] = "Март";
        $month ["April"] = "Апрель";
        $month ["May"] = "Май";
        $month ["June"] = "июня";
        $month ["July"] = "Июль";
        $month ["August"] = "Август";
        $month ["September"] = "Сентябрь";
        $month ["October"] = "Октябрь";
        $month ["November"] = "Ноябрь";
        $month ["December"] = "Декабрь";

        echo "Сегодня ".date("j "). $month[date('F')].date(" Y года, l");
    }
}