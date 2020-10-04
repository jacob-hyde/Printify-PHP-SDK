<?php

namespace Printify;

abstract class PrintifyBaseEndpoint
{
    /**
     * Api Client
     *
     * @var \Printify\PrintifyApiClient
     */
    protected $_api_client = null;

    /**
     * The endpoint structure
     *
     * @var \Printify\Structures\*
     */
    protected $_structure = null;

    /**
     * Constructor
     *
     * @param PrintifyApiClient $api_client
     */
    public function __construct(PrintifyApiClient $api_client)
    {
        $this->_api_client = $api_client;
    }

    /**
     * Get all items from a endpoint
     *
     * @param array $query_options - URI Query options
     * @return array - Structured Items in an array
     */
    abstract public function all(array $query_options = []): array;

    /**
     * Creates a collection of a given endpoint structure
     *
     * @param array $items
     * @param \Printify\Structures\* $structure - Use a different structure than the structure property
     * @return array
     */
    protected function collectStructure(array $items, $structure = null): array
    {
        if (!$structure) {
            $structure = $this->_structure;
        }
        $collection = [];
        foreach ($items as $item) {
            $collection[] = new $structure($item);
        }
        return $collection;
    }
}
