<?php


namespace App\ParserFatory;

/**
 * Interface Courier
 *
 * @package App\ParserFatory
 */
interface Courier
{
    public function parsingAlgorithm(array $data): array;
}
