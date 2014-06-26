<?php
namespace Victoire\Widget\ArchiveBundle\Translation;

use JMS\TranslationBundle\Model\Message;
use JMS\TranslationBundle\Translation\TranslationContainerInterface;
use JMS\TranslationBundle\Model\FileSource;

/**
 *
 * @author Thomas Beaujean
 *
 */
class DynamicTranslations implements TranslationContainerInterface
{
    /**
     * usage example: new Message('example.keymap')->addSource('path/to/source/file', '514', '10'),
     * @return array the keys to register in jms translation
     */
    public static function getTranslationMessages()
    {
        return array(
            new Message('modal.form.widget.type.archive.label', 'victoire'),
            new Message('widget.archive.new.action.label', 'victoire')
        );
    }
}
