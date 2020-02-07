<?php namespace WebBook\Checkcontent;

use System\Classes\PluginBase;
use Cms\Classes\Theme;


class Plugin extends PluginBase
{
    /**
     * @return array
     */
    public function registerMarkupTags()
    {
        return [
            'functions' => [
                'content_exists' => [$this, 'contentExists']
            ]
        ];
    }

    /**
     * Checks if a content file exists in the active theme
     * @param string $file File name, including the extension (.htm, .md, .txt)
     * @return bool
     */
    public function contentExists($file = null)
    {
        return file_exists(themes_path(Theme::getActiveThemeCode() . '/content/' . $file));
    }
}
