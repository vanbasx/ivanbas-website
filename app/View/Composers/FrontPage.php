<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;
use WP_Query;

class FrontPage extends Composer
{
    protected static $views = [
      'front-page',
    ];

    public function with(): array
    {
      return [
        'works' => $this->getWorks(),
        'works_total' => $this->getTotalWorksCount(),
        // 'blog' => $this->getBlog(),
      ];
    }

    protected function getWorks(): WP_Query
    {
      return new WP_Query([
        'post_type' => 'works',
        'posts_per_page' => 2,
      ]);
    }

    protected function getTotalWorksCount(): int
    {
      $count = wp_count_posts('works');
      return (int) $count->publish;
    }
}
