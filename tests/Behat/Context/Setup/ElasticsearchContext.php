<?php

/*
 * This file has been created by developers from BitBag.
 * Feel free to contact us once you face any issues or want to start
 * another great project.
 * You can find more information about us on https://bitbag.shop and write us
 * an email on mikolaj.krol@bitbag.pl.
 */

declare(strict_types=1);

namespace Tests\BitBag\SyliusElasticsearchPlugin\Behat\Context\Setup;

use Behat\Behat\Context\Context;
use Tests\BitBag\SyliusElasticsearchPlugin\Behat\Service\Populate;

final class ElasticsearchContext implements Context
{
    /**
     * @var Populate
     */
    private $populate;

    /**
     * @param Populate $populate
     */
    public function __construct(Populate $populate)
    {
        $this->populate = $populate;
    }

    /**
     * @Given the data is populated to elasticsearch
     */
    public function theDataIsPopulatedToElasticsearch(): void
    {
        $this->populate->populateIndex();
    }
}
