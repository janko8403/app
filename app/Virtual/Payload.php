<?php

namespace App\Virtual;

/**
 * Action payload.
 *
 * @OA\Schema(
 *     title="Action payload",
 *     required={"name", "email", "phoneNumber", "isActive"},
 * )
 */
class Payload
{
    /**
     * @OA\Property (
     *      title="Name",
     * )
     *
     * @var string|null
     */
    public $name;

    /**
     * @OA\Property (
     *      title="First name",
     * )
     *
     * @var string|null
     */
    public $firstName;

    /**
     * @OA\Property (
     *      title="Last name",
     * )
     *
     * @var string|null
     */
    public $lastName;
    
    /**
     * @OA\Property (
     *      title="Email",
     * )
     *
     * @var string|null
     */
    public $email;
    
    /**
     * @OA\Property (
     *      title="Number phone",
     * )
     *
     * @var string|null
     */
    public $phoneNumber;
    
    /**
     * @OA\Property (
     *      title="Is active",
     * )
     *
     * @var int
     */
    public $isActive;
}
