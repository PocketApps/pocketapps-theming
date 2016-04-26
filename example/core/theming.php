<?php

class pocketapps_theming {
    private $theme;

    public function __construct($theme) {
        $this->theme = $theme;
    }

    public function get_color($key, $global = false) {
        return $this->get($key, "colors", $global);
    }

    public function get_image($key, $global = false) {
        return $this->get($key, "images", $global);
    }

    public function get_setting($key, $global = false) {
        return $this->get($key, "settings", $global);
    }

    private function get($key, $prefix, $global = false) {
        $key = str_replace(" ", "_", strtoupper($key));

        if ($global) {
            $dir = dirname(__FILE__) . "/themes/core/";
        } else {
            $dir = dirname(__FILE__) . "/themes/". $this->theme . "/";
        }

        $file = $dir . "$prefix" . ".json";

        if (!is_dir($dir)) {
            mkdir($dir, 0777, true);
        }
        $json = json_decode(file_get_contents($file), true);
        if (!empty($json[$key])) {
            return $json[$key];
        } else {
            $json[$key] = "[POCKETAPPS_UNDEFINED_THEME_ITEM]";
            file_put_contents($file, json_encode($json, JSON_PRETTY_PRINT));
            return $json[$key];
        }
    }
}