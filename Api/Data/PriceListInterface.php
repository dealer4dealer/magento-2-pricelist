<?php

namespace Dealer4dealer\Pricelist\Api\Data;

interface PriceListInterface
{
    const ID   = 'id';
    const GUID = 'guid';
    const CODE = 'code';

    /**
     * Get id
     * @return string|null
     */
    public function getId();

    /**
     * Set id
     * @param string $id
     * @return PriceListInterface
     */
    public function setId($id);

    /**
     * Get guid
     * @return string|null
     */
    public function getGuid();

    /**
     * Set guid
     * @param string $guid
     * @return PriceListInterface
     */
    public function setGuid($guid);

    /**
     * Get code
     * @return string|null
     */
    public function getCode();

    /**
     * Set code
     * @param string $code
     * @return PriceListInterface
     */
    public function setCode($code);
}