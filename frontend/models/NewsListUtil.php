<?php

namespace frontend\models;

use common\models\News;

class NewsListUtil
{
    const NEWS_PER_PAGE = 4;
    public static $news_num;
    public static $news_page_num;
    public static $current_news_page;
    private static $news_list;

    public static function init()
    {
        self::$news_num = count(News::find()->all(), COUNT_RECURSIVE);
        self::$news_page_num = self::$news_num / 4;
//        if(self::$news_num % 4 !== 0):
//            self::$news_page_num++;
//        endif;
        self::$current_news_page = 0;
        self::$news_list = News::find()->orderBy('news_date', 'DESC')->all();
    }

    public static function getNewsList()
    {
        return self::$news_list;
    }
}