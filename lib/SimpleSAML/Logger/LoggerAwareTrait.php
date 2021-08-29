<?php

namespace SimpleSAML\Logger;

use Psr\Log\LoggerInterface;
use SimpleSAML\Configuration;

/**
 * Basic Implementation of LoggerAwareInterface.
 */
trait LoggerAwareTrait
{
    /**
     * The logger instance.
     *
     * @var \Psr\Log\LoggerInterface
     */
    protected $logger;


    /**
     * Gets a logger.
     *
     * @return \Psr\Log\LoggerInterface $logger
     */
    public function getLogger(): LoggerInterface
    {
        if (isset($this->logger)) {
            return $this->logger;
        }

        return Configuration::getInstance()::getLogger();
    }


    /**
     * Sets a logger.
     *
     * @param \Psr\Log\LoggerInterface $logger
     */
    public function setLogger(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
