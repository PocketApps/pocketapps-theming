<?php

class pocketapps_theming {
    private $theme;

    public function __construct($theme) {
        $this->theme = $theme;
    }

    public function get_theme() {
        return $this->theme;
    }

    public function get_color($key) {
        return $this->get($key, "colors");
    }

    public function get_image($key) {
        return $this->get($key, "images");
    }

    public function get_setting($key) {
        return $this->get($key, "settings");
    }

    private function get($key, $prefix) {
        $key = str_replace(" ", "_", strtoupper($key));
        $dir = dirname(__FILE__) . "/". $this->theme . "/";
        $file = $dir . "$prefix" . ".json";
        if (!is_dir($dir)) {
            mkdir($dir);
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