<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usuario
 *
 * @ORM\Table(name="usuario", uniqueConstraints={@ORM\UniqueConstraint(name="username", columns={"username"}), @ORM\UniqueConstraint(name="email", columns={"email"})})
 * @ORM\Entity(repositoryClass="UsuarioRepository")
 */
class Usuario
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="text", length=65535, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="apellido", type="text", length=65535, nullable=false)
     */
    private $apellido;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="text", length=65535, nullable=false)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="text", length=65535, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="clave", type="text", length=65535, nullable=false)
     */
    private $clave;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="activo", type="boolean", nullable=true, options={"default"="NULL"})
     */
    private $activo = 'NULL';

    function getId() {
        return $this->id;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getApellido() {
        return $this->apellido;
    }

    function getUsername() {
        return $this->username;
    }

    function getEmail() {
        return $this->email;
    }

    function getClave() {
        return $this->clave;
    }

    function getActivo() {
        return $this->activo;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    function setUsername($username) {
        $this->username = $username;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setClave($clave) {
        $this->clave = $clave;
    }

    function setActivo($activo) {
        $this->activo = $activo;
    }

    public function __construct() {
        
    }

    public function __toString() {
        
    }

}
