<?php

namespace App\Entity;

use App\Entity\User;

use App\Repository\ApiTokenRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ApiTokenRepository::class)
 */
class ApiToken
{



    public function __construct(User $user)
    {
        $this->user = $user;
        $this->token = bin2hex(random_bytes(60));
        $this->expirseAt = new \DateTime(' +1 hour');
    }
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $token;

    /**
     * @ORM\Column(type="datetime")
     */
    private $expirseAt;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="apiTokens")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getToken(): ?string
    {
        return $this->token;
    }



    public function getExpirseAt(): ?\DateTimeInterface
    {
        return $this->expirseAt;
    }


    public function getUser(): ?User
    {
        return $this->user;
    }

    public function isExpired()
    {

        return $this->getToken() <= new \DateTime();
    }
}