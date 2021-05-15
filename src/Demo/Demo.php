<?php declare(strict_types=1);

namespace AppflixDewaDonut\Demo;

use AppflixDewaShop\Core\System\DataExtension;
use AppflixDewaShop\Core\System\DataInterface;

class Demo extends DataExtension implements DataInterface
{
    public function getName(): string
    {
        return 'donut';
    }

    public function getType(): string
    {
        return 'demo';
    }

    public function getPath(): string
    {
        return __DIR__;
    }
    public function getStylesheets(): array
    {
        return [
            'fonts/roboto-slab-latin.css'
        ];
    }

    public function getRemoveQueries(): array
    {
        return [
            "UPDATE `category` SET `cms_page_id` = NULL WHERE `id` = UNHEX('{NAVIGATION_CATEGORY_ID}');",
            "DELETE FROM `cms_page` WHERE `id` = UNHEX('{DEMO_CMS_PAGE_1}');",
            "DELETE FROM `cms_page` WHERE `id` = UNHEX('{DEMO_CMS_PAGE_2}');",
            "UPDATE `sales_channel` SET `footer_category_id` = NULL, `footer_category_version_id` = NULL, `service_category_id` = NULL, `service_category_version_id` = NULL WHERE `id` = UNHEX('{SALES_CHANNEL_ID}');",
        ];
    }
}
