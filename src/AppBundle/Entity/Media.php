<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Gedmo\Mapping\Annotation as Gedmo;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * Image
 *
 * @ORM\Table(name="media")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MediaRepository")
 * @Vich\Uploadable
 * @ApiResource
 *
 * Defines the properties of the Tag entity to represent the post tags.
 *
 * See https://symfony.com/doc/current/book/doctrine.html#creating-an-entity-class
 */
class Media
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="media_name", type="string", length=255, nullable=true)
     */
    private $mediaName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mime_type", type="string", length=255, nullable=true)
     */
    private $mimeType;

    /**
     * @Vich\UploadableField(mapping="media_mapping", fileNameProperty="mediaName")
     * @var File
     */
    private $mediaFile;

    /**
     * @var \DateTime $createdAt
     *
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @var \DateTime $updatedAt
     *
     * @Gedmo\Timestampable(on="update")
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $updatedAt;

    /**
     * @var string $createdBy
     *
     * @Gedmo\Blameable(on="create")
     * @ORM\Column(type="string", nullable=true)
     */
    private $createdBy;

    /**
     * @var string $updatedBy
     *
     * @Gedmo\Blameable(on="update")
     * @ORM\Column(type="string", nullable=true)
     */
    private $updatedBy;

    /**
     * @var array
     *
     * @ORM\Column(name="tags", type="simple_array", length=255, nullable=true)
     */
    private $tags;




    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name.
     *
     * @param string|null $mediaName
     *
     * @return Media
     */
    public function setMediaName($mediaName = null)
    {
        $this->mediaName = $mediaName;

        return $this;
    }

    /**
     * Get name.
     *
     * @return string|null
     */
    public function getMediaName()
    {
        return $this->mediaName;
    }

    /**
     * Set imageFile.
     *
     * @param File $media
     */
    public function setMediaFile(File $media = null)
    {
        $this->mediaFile = $media;

        // VERY IMPORTANT:
        // It is required that at least one field changes if you are using Doctrine,
        // otherwise the event listeners won't be called and the file is lost
        if ($media) {
            // if 'updatedAt' is not defined in your entity, use another property
            $this->updatedAt = new \DateTime('now');
            $this->setMimeType($media->getMimeType());
        }
    }

    /**
     * Get imageFile.
     *
     * @return string|null
     */
    public function getMediaFile()
    {
        return $this->mediaFile;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTime $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param \DateTime $updatedAt
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * @return string
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * @param string $createdBy
     */
    public function setCreatedBy($createdBy)
    {
        $this->createdBy = $createdBy;
    }

    /**
     * @return string
     */
    public function getUpdatedBy()
    {
        return $this->updatedBy;
    }

    /**
     * @param string $updatedBy
     */
    public function setUpdatedBy($updatedBy)
    {
        $this->updatedBy = $updatedBy;
    }

    /**
     * @return null|string
     */
    public function getMimeType()
    {
        return $this->mimeType;
    }

    /**
     * @param null|string $mimeType
     */
    public function setMimeType($mimeType)
    {
        $this->mimeType = $mimeType;
    }

    /**
     * @return array
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * @param array $tags
     */
    public function setTags($tags)
    {
        $this->tags = $tags;
    }

    
}
