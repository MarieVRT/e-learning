<?php

namespace App\EasyAdmin;

class AppModelList
{
    /**
     * Return array of models and namespaces
     *
     * @return Array
     */
    public static function models()
    {
        return [
            //Models Here - Format: Namespace.Model
            'App\Models.User',
            'App\Models.Question',
            'App\Models.Language',
            'App\Models.Advancement',
        ];
    }

    /**
     * Return array of Page type models
     *
     * @return Array
     */
    public static function pageModels()
    {
        return [
            //Models Here - Format: Model
        ];
    }

    /**
     * Return array of Post type models
     *
     * @return Array
     */
    public static function postModels()
    {
        return [
            //Models Here - Format: Model
        ];
    }

    /**
     * Return array of Partial type models
     *
     * @return Array
     */
    public static function partialModels()
    {
        return [
            //Models Here - Format: PageModel.Model || Global.Model
        ];
    }

    /**
     * Return array of Custom Links
     *
     * @return Array
     */
    public static function customLinks()
    {
        return [
            //Links Here - Format: Title.URL
        ];
    }
}































?>
