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
                'content_exists' => [$this, 'contentExists'],
                'partial_exists' => [$this, 'partialExists'],
                'media_exists' => [$this, 'mediaExists'],
            ]
        ];
    }

    public function contentExists($file = null)
    {
        return file_exists(themes_path(Theme::getActiveThemeCode() . '/content/' . $file));
    }

    public function partialExists($file = null)
    {
        return file_exists(themes_path(Theme::getActiveThemeCode() . '/partial/' . $file));
    }

    public function mediaExists($file = null)
    {
        return file_exists(storage_path('app/media/' . $file));
    }
}
