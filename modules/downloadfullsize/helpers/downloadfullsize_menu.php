<?php defined("SYSPATH") or die("No direct script access.");
/**
 * Gallery - a web based photo album viewer and editor
 * Copyright (C) 2000-2009 Bharat Mediratta
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or (at
 * your option) any later version.
 *
 * This program is distributed in the hope that it will be useful, but
 * WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street - Fifth Floor, Boston, MA  02110-1301, USA.
 */
class downloadfullsize_menu_Core {
  static function photo($menu, $theme) {
    if (access::can("view_full", $theme->item)) {
      if (module::get_var("downloadfullsize", "fButton")) {
        $downloadLink = url::site("downloadfullsize/send/$theme->item");
        $menu
          ->append(Menu::factory("link")
               ->id("downloadfullsize")
               ->label(t("Download Fullsize Image"))
               ->url($downloadLink)
               ->css_id("gDownloadFullsizeLink"));
      }
    }
  }
<<<<<<< HEAD:modules/downloadfullsize/helpers/downloadfullsize_menu.php
=======

>>>>>>> gallery3-contrib/master:modules/downloadfullsize/helpers/downloadfullsize_menu.php
  static function admin($menu, $theme) {
    $menu->get("settings_menu")
      ->append(Menu::factory("link")
               ->id("downloadfullsize")
               ->label(t("Download Photo Links"))
               ->url(url::site("admin/downloadfullsize")));
  }

}