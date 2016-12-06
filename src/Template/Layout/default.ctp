<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'WebPM: the coolest project management tool on web.';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <nav class="top-bar expanded" data-topbar role="navigation">
        <ul class="title-area large-3 medium-4 columns">
            <li class="name">
                <h1><a href=""><?= $this->fetch('title') ?></a></h1>
            </li>
        </ul>
        <div class="top-bar-section">
            <ul class="right">
                <li><?= $this->Html->link(__($this->Auth->getUser('username')), ['controller' => 'users', 'action' => 'view', $this->Auth->getUser('id')]) ?></li>
                <li><?= $this->Html->link(__('Log Out'), ['controller' => 'users', 'action' => 'logout']) ?></li>

                <!-- <li><a target="_self" href="http://api.cakephp.org/3.0/">API</a></li> -->
            </ul>
        </div>
        <div class="top-bar-section">
            <ul class="left">
                <li><?= $this->Html->link(__('Project'), ['controller' => 'projects', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('Product'), ['controller' => 'products', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('Notice'), ['controller' => 'notices', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('Version'), ['controller' => 'versions', 'action' => 'index']) ?></li>
                <!-- <li><a target="_self" href="/tasks">Task</a></li> -->
            </ul>
        </div>
    </nav>
    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <nav class="large-3 medium-4 columns" id="actions-sidebar">
            <ul class="side-nav">
                <li class="heading"><?= __('Actions') ?></li>
                <li><?= $this->Html->link(__('Overview'), ['controller' => 'projects', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('Active Tasks'), ['controller' => 'tasks', 'action' => 'activeTasks']) ?></li>
                <li><?= $this->Html->link(__('All Tasks'), ['controller' => 'tasks', 'action' => 'index']) ?></li>
                <hr/>
                <li><?= $this->Html->link(__('My Todo'), ['controller' => 'tasks', 'action' => 'myTodo']) ?></li>
                <li><?= $this->Html->link(__('Assigned To Me'), ['controller' => 'tasks', 'action' => 'assignedToMe']) ?></li>
                <li><?= $this->Html->link(__('Assigned To Others'), ['controller' => 'tasks', 'action' => 'assignedToOthers']) ?></li>
                <!-- <hr/>
                     <li><?= $this->Html->link(__('Products'), ['controller' => 'products', 'action' => 'index']) ?></li>
                     <li><?= $this->Html->link(__('Notices'), ['controller' => 'notices', 'action' => 'index']) ?></li>
                     <li><?= $this->Html->link(__('Versions'), ['controller' => 'versions', 'action' => 'index']) ?></li> -->
            </ul>
        </nav>
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
</body>
</html>
