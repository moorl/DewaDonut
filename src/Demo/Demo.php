<?php declare(strict_types=1);

namespace Appflix\DewaDonut\Demo;

use Appflix\DewaShop\Core\System\DewaShopDataExtension;
use MoorlFoundation\Core\System\DataInterface;

class Demo extends DewaShopDataExtension implements DataInterface
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
            'fonts/comic-neue.css'
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
