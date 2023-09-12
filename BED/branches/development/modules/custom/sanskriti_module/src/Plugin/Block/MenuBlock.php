<?php

namespace Drupal\sanskriti_module\Plugin\Block;

use Drupal\Core\Block\BlockPluginInterface;
use Drupal\Core\Block\BlockBase;
use Drupal\Core\Menu\MenuTreeParameters;


/**
 * Provides a 'Menu' Block.
 *
 * @Block(
 *   id = "custom_menu_block",
 *   admin_label = @Translation("custom Main Menu"),
 *   category = @Translation("custom Main Menu"),
 * )
 */
class MenuBlock extends BlockBase implements BlockPluginInterface {

  /**
   * {@inheritdoc}
   */
  public function build() {
    
    $main-menu = $this->loadMenuTree("main-menu");
    $main-menu = \Drupal::service('renderer')->render($main-menu);
    //print_r($main_menu); die;

    return array(
      '#theme' => 'custom_menu_block',
      '#title' => '',
      '#main-menu' => $main-menu,
	  '#logo' => theme_get_setting('logo.url','sanskriti'),
    );
  }

  /**
   * {@inheritdoc}
   */
  private function loadMenuTree($menuName) {

    $menu_tree = \Drupal::service('menu.link_tree');
    $parameters = new MenuTreeParameters();
    $manipulators = [
      ['callable' => 'menu.default_tree_manipulators:generateIndexAndSort'],
    ];

    $loadMenuTree = $menu_tree->load($menuName, $parameters);
  /* start of : remove unpublished node from menu */
  foreach($loadMenuTree as $key=>$value) {    
    $urlObject = $value->link->getUrlObject();    
    if($urlObject->isRouted() && $urlObject->getRouteName() == 'entity.node.canonical') {
      $routeParams = $urlObject->getRouteParameters();
      $node_id = $routeParams['node'];      
      $node = \Drupal\node\Entity\Node::load($node_id);
      if(!$node->isPublished()) {
        unset($loadMenuTree[$key]);
        continue;
      }
    }
    
    if($value->hasChildren) {
      $subTree = $value->subtree;
        foreach($subTree as $sub_key=>$sub_value) {
          $urlObject = $sub_value->link->getUrlObject();
          if($urlObject->isRouted() && $urlObject->getRouteName() == 'entity.node.canonical') {
            $routeParams = $urlObject->getRouteParameters();
            $node_id = $routeParams['node'];
            $node = \Drupal\node\Entity\Node::load($node_id);
            if(!$node->isPublished()) {
              unset($subTree[$sub_key]);
              continue;
            }
          }
        }
      $loadMenuTree[$key]->subtree = $subTree;
    }
    
  }
  /* end of : remove unpublished node from menu */
    $transformTree = $menu_tree->transform($loadMenuTree, $manipulators);
    $menuTree = $menu_tree->build($transformTree);

    return $menuTree;
  }
}
