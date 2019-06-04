<?php
namespace app\classes;


class Today
{

    public function getTodayDate()
    {
        $month ["January"] = "Января";
        $month ["February"] = "Февраля";
        $month ["March"] = "Марта";
        $month ["April"] = "Апреля";
        $month ["May"] = "Мая";
        $month ["June"] = "июня";
        $month ["July"] = "Июля";
        $month ["August"] = "Августа";
        $month ["September"] = "Сентября";
        $month ["October"] = "Октября";
        $month ["November"] = "Ноября";
        $month ["December"] = "Декабря";
        $weekday ["Monday"] = "понедельник";
        $weekday ["Tuesday"] = "вторник";
        $weekday ["Wednesday"] = "среда";
        $weekday ["Thursday"] = "четверг";
        $weekday ["Friday"] = "пятница";
        $weekday ["Saturday"] = "суббота";
        $weekday ["Sunday"] = "воскресенье";

        echo "Сегодня ".date("j "). $month[date('F')].date(" Y года, ").$weekday[date('l')].". Время ".date("H:i:s");
    }
}