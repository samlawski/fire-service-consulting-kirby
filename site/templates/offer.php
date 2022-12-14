<html lang="<?= $kirby->language()->code() ?>">
  <?= snippet('head') ?>
  
  <body>
    <div class="website-wrapper">
      <?= snippet('body_nav') ?>

      <main class="container">
        <div class="row">
          <div class="col-xs-12 col-lg-offset-1 col-lg-10">
            <div class="page-content">
              <header class="content-padding">
                <h1><?= $page->title() ?></h1>
              </header>
              <section class="content-padding">
                <a class="help-block" href="<?= page('home')->url() ?>"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span> <span><?= $page->back_link() ?></span></a><br />
                <div class="main-content">
                  <?= $page->text()->toBlocks() ?>
                </div>
              </section>

              <?= snippet('offer_bottom') ?>
            </div><!-- / page-content -->
          </div><!-- / col -->
        </div><!-- / row -->
      </main>

      <?= snippet('contact') ?>
      <?= snippet('body_footer') ?>
    </div>
  </body>
</html>
