<?php

namespace Drupal\custom_field_formatter;

use Cocur\Slugify\Slugify;

/**
 * Class SlugifyText.
 *
 * @package Drupal\custom_field_formatter
 */
class SlugifyText {
  public function slugifyText($str, $sperator) {
    $slugify = new Slugify();
    $slugify_text = $slugify->slugify($str, $sperator);
    return $slugify_text;
  }
}
