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
        self::$news_list = News::find()->orderBy('news_date DESC')->all();
        self::$news_num = count(self::$news_list, COUNT_RECURSIVE);
        self::$news_page_num = self::$news_num / 4;
        self::$current_news_page = 0;
    }

    public static function getNewsList()
    {
        return self::$news_list;
    }

    public static function filterNewsSource($news_source)
    {
        self::$news_list = News::find()->orderBy('news_date DESC')->where(['news_source' => $news_source])->all();
        self::$news_num = count(self::$news_list, COUNT_RECURSIVE);
        self::$news_page_num = self::$news_num / 4;
        self::$current_news_page = 0;
    }
}