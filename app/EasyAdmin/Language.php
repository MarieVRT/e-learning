<?php

namespace App\EasyAdmin;

/**
 * EasyAdmin - Language
 *
 * Comment of uncomment attributes for this model to alter the EasyAdmin GUI
 * Support this package: https://github.com/devs-ryan/laravel-easy-admin
 */
class Language
{

    /**
     * The methods allowed for this model
     * Note: Index/View are always included, remove model
     ******* from Easy Admin to hide completely.
     *
     * @return Array
     */
    public static function allowed()
    {
        return [
            'create',
            'update',
            'delete',
            'seed'
        ];
    }

    /**
     * Fields allowed to be created.
     * Note: Any fields not in this array must be nullable
     ******* or have default set.
     *
     * @return Array
     */
    public static function create()
    {
        return [
            //'id',
            'name',
            'level',
            //'created_at',
            //'updated_at',
        ];
    }

    /**
     * Fields shown in index table.
     * Note: For the sake of not overloading the
     ******* table for smaller screen sizes it is
     ******* recommended to include only critical fields.
     *
     * @return Array
     */
    public static function index()
    {
        return [
            'id',
            'name',
            'level',
            //'created_at',
            //'updated_at',
        ];
    }

    /**
     * Fields allowed to be updated OR viewed.
     * View only when allowed() does not contain 'update'
     *
     * @return Array
     */
    public static function update()
    {
        return [
            //'id',
            'name',
            'level',
            //'created_at',
            //'updated_at',
        ];
    }

    /**
     * Fields expected to bet treated as select inputs.
     *  Format1: 'field' => 'Option, Option' (the option value is the same as name that the users see)
     *  Format2: 'field' => 'value|Option, value|Option'
     *
     * @return Array
     */
    public static function selectInputs()
    {
        return [
            /* Note: List field names/options below (leave this comment) */
            // 'field_name' => 'value|Option, value|Option'
        ];
    }

    /**
     * Fields expected to bet treated as images.
     * Fields to be type 'string' to store path data
     * Adds image manager functionality in addition to file storage abilities
     * Images will be stored in 'public/devsryan/LaravelEasyAdmin/storage/img'
     *
     * @return Array
     */
    public static function images()
    {
        return [
            /* Note: List field names below (leave this comment) */
            // 'field_name'
        ];
    }

    /**
     * Fields expected to bet treated as general file updloads.
     * Fields to be type 'string' to store path data
     * Images will be stored in 'public/devsryan/LaravelEasyAdmin/storage/img'
     * Files will be stored in 'public/devsryan/LaravelEasyAdmin/storage/files'
     *
     * @return Array
     */
    public static function files()
    {
        return [
            /* Note: List field names below (leave this comment) */
            // 'field_name'
        ];
    }

    /**
     * Fields expected to bet treated as wysiwyg editors.
     * Fields to be type 'text' to store path data
     *
     * @return Array
     */
    public static function wysiwyg_editors()
    {
        return [
            /* Note: List field names below (leave this comment) */
            // 'field_name'
        ];
    }

    /**
     * Limit for minimum and maximum models of this type.
     * Set to `null` for no limit,
     * otherwise a positive integer is expected
     *
     * @return Array
     */
    public static function limits()
    {
        return [
            'min' => null,
            'max' => null
        ];
    }
}


?>
