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
}
