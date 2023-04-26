<?php if(!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE html>
<html lang="zh-CN" class="theme-volantis">
<head>
  <meta charset="UTF-8">
  <title><?php $this->options->title(); ?><?php $this->archiveTitle(); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="stylesheet" href="<?php $this->options->themeUrl('css/screen.css'); ?>">
</head>
<body>
  <div id="app">
    <!-- 头部 -->
    <header-bar></header-bar>

    <!-- 主体 -->
    <main>
      <div class="container">
        <div class="content">
          <article-list></article-list>

          <!-- 分页 -->
          <pagination :current-page="currentPage" :total-pages="totalPages" @page-changed="pageChanged"></pagination>
        </div>

        <!-- 侧边栏 -->
        <side-bar></side-bar>
      </div>
    </main>

    <!-- 底部 -->
    <footer-bar></footer-bar>
  </div>
</body>
</html>
