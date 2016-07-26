<?php

/**
 * @file
 * Contains \Drupal\author_tool\Plugin\Block\AuthorToolBlock.php.
 */

namespace Drupal\author_tool\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a custom block.
 *
 * Drupal\Core\Block\BlockBase gives us a very useful set of basic functionality
 * for this configurable block. We can just fill in a few of the blanks with
 * defaultConfiguration(), blockForm(), blockSubmit(), and build().
 *
 * @Block(
 *   id = "author_tool_block",
 *   admin_label = @Translation("Author tool block")
 * )
 */
class AuthorToolBlock extends BlockBase {

    /**
     * {@inheritdoc}
     */
    public function build() {

        $link = array(
            '#type' => 'markup',
            '#title' => 'Author tools',
            '#markup' => $this->t('<a href=":url">Add another recipe</a>', array(':url' => 'add/recipe')),
        );

        return $link;
    }

}
