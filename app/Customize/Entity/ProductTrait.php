<?php
// app/Customize/Entity/ProductTrait.php
namespace Customize\Entity;

use Doctrine\ORM\Mapping as ORM;
use Eccube\Annotation as Eccube;

/**
 * @Eccube\EntityExtension("Eccube\Entity\Product")
 */
trait ProductTrait
{
    /**
     * @var string|null
     * @ORM\Column(type="string", nullable=true)
     * @Eccube\FormAppend(
     *  auto_render=true,
     *  options={
     *   "required": false,
     *   "label":"メッセージ"
     *  }
     * )
     */
    private $message;

    /**
     * @return string|null
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param string|null $message
     * @return ProductTrait
     */
    public function setMessage($message)
    {
        $this->message = $message;
        return $this;
    }
}
