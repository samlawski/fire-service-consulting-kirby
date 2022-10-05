<html lang="<?= $kirby->language()->code() ?>">
  <?= snippet('head') ?>
  
  <body>
    <div class="website-wrapper">
      <?= snippet('body_nav') ?>

      <main>
        <div id="angebote" class="container">
          <div class="row">
            <div class="col-xs-12 visible-sm visible-xs">
              <section class="angebot">
                <div class="content">
                  <h2>
                    <?= $page->offers_title() ?>
                  </h2>
                </div>
              </section><!-- / angebot -->
            </div><!-- / col -->

            <div class="col-xs-12 col-md-4">
              <section class="angebot">
              <a href="<?= page('beratung-und-coaching')->url() ?>">
                  <header class="content">
                    <h3><?= $page->offer_1_title() ?></h3>
                  </header>
                </a>
                <div class="content">
                  <p><?= $page->offer_1_text() ?></p>
                  <a href="<?= page('beratung-und-coaching')->url() ?>"><?= $page->find_out_more() ?></a>
                </div><!-- / content -->
              </section><!-- / angebot -->
            </div><!-- / col -->

            <div class="col-xs-12 col-md-4">
              <section class="angebot">
              <a href="<?= page('personalservice')->url() ?>">
                  <header class="content">
                    <h3><?= $page->offer_2_title() ?></h3>
                  </header>
                </a>
                <div class="content">
                  <p><?= $page->offer_2_text() ?></p>
                  <a href="<?= page('personalservice')->url() ?>"><?= $page->find_out_more() ?></a>
                </div><!-- / content -->
              </section><!-- / angebot -->
            </div><!-- / col -->

            <div class="col-xs-12 col-md-4">
              <section class="angebot">
              <a href="<?= page('rechnungswesen-und-buchhaltung')->url() ?>">
                  <header class="content">
                    <h3><?= $page->offer_3_title() ?></h3>
                  </header>
                </a>
                <div class="content">
                  <p><?= $page->offer_3_text() ?></p>
                  <a href="<?= page('rechnungswesen-und-buchhaltung')->url() ?>"><?= $page->find_out_more() ?></a>
                </div><!-- / content -->
              </section><!-- / angebot -->
            </div><!-- / col -->


            <div class="col-xs-12">
              <section class="angebot">
                <a href="<?= page('sales-promotion-healthcare-services')->url() ?>">
                  <header class="content">
                    <h3><?= $page->offer_4_title() ?></h3>
                  </header>
                </a>
                <div class="content">
                  <img src="<?= $page->offer_4_img()->toFile()->url() ?>" class="pull-left" height="100" />
                  <p><?= $page->offer_4_text() ?></p>
                  <a href="<?= page('sales-promotion-healthcare-services')->url() ?>"><?= $page->find_out_more() ?></a>
                </div><!-- / content -->
              </section><!-- / angebot -->
            </div><!-- / col -->

            
          </div><!-- / row -->
        </div><!-- / container -->


        <div id="ueber" class="container">
          <div class="lead space-before space-after">
            <p><?= $page->about_intro() ?></p>
          </div>

          <div class="row">
            <div class="col-xs-12 col-md-6 space-after">
              <img class="img-responsive margin-center portrait" src="<?= $page->about_image()->toFile()->url() ?>" width="500" height="500" />
            </div><!-- / col -->
            <div class="col-xs-12 col-md-6 col-lg-5 space-after">
              <h1><?= $page->about_title() ?></h1>
              <div><?= $page->about_text() ?></div>
            </div><!-- / col -->
          </div><!-- row -->
        </div><!-- / container -->

        <div id="netzwerk">
          <div class="container">
            <h2><?= $page->references_title() ?></h2>
            <div class="netzwerk-wrapper">
              <?php foreach(page()->referenzen()->toStructure() as $reference): ?>
                <?php if($reference->link()): ?>
                  <a href="<?= $reference->link() ?>" target="_blank" class="netzwerk text-center">
                    <img src="<?= $reference->logo_path()->toFile()->url() ?>" />
                    <span><?= $reference->name() ?></span>
                  </a><!-- / netzwerk -->
                <?php else: ?>
                  <section class="netzwerk text-center">
                    <img src="<?= $reference->logo_path()->toFile()->url() ?>" />
                    <span><?= $reference->name() ?></span>
                  </section><!-- / netzwerk -->
                <?php endif ?>
              <?php endforeach ?>
            </div><!-- / row -->
          </div><!-- / container -->
        </div><!-- / netzwerk -->

      </main>

      <?= snippet('contact') ?>
      <?= snippet('body_footer') ?>
    </div>
  </body>
</html>
