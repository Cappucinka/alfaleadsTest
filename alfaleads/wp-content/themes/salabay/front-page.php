<?php get_header(); ?>
<section class="promo">
  <h1>Wir testen alle Wettanbieter ohne Wettsteuer in Deutschland</h1>
</section>
<?php the_content(); ?>
  <section class="content">
    <div class="container">
      <p class="content__text">
        Über die Wettsteuer informiert sein! Die Wettsteuer umgehen und ohne 5% Steuer wetten.
        Wettsteuer.com zeigt Ihnen wie es geht – Durch den neuen Glückspielstaatsvertrag, der Anfang Juli
        in Deutschland in Kraft getreten ist, hat sich im Bereich Sportwetten im Internet, beim einen oder
        anderen Wettanbieter einiges geändert. Grundsätzlich muss ab sofort beachtet werden, dass in
        Deutschland eine Wettsteuer von 5% auf Sportwetten erhoben wird, die von den Anbietern von
        Sportwetten im Internet, an das Finanzamt abgeführt werden muss.
      </p>
      <table class="table" id='table-1'>
        <caption class="table__title">Wettanbieter</caption>
        <thead class="table__head">
          <tr class="table__row">
            <th class="table__col">Wettanbieter</th>
            <th class="table__col">Bonus</th>
            <th class="table__col">Mindestquote</th>
            <th class="table__col">Bewertung</th>
            <th class="table__col">Zum Anbieter</th>
          </tr>
        </thead>
        <tbody class="table__body">
          <?php
          $postslist = get_posts(array('category'=>'2'));
          foreach ($postslist as $post) {
            setup_postdata($post);
            $logo = get_field('company-logo');
            $link = get_field('company-link');
            $bonus = get_field('bonus');
            $exklusiv = get_field('exklusiv');
            $mindestquote = get_field('mindestquote');
            $bewertung = get_field('bewertung');
            $anbieter = get_field('zum-anbieter');
            ?>
          <tr class="table__item">
            <td class="table__cell">
            <?php 
              if( !empty( $logo ) ): ?>
                <img src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>" class="table__company-logo" />
            <?php endif; ?>
              <a href="<?php echo esc_url( $link ); ?>" class="table__company-link"><?php the_title(); ?> Wettsteuer</a>
            </td>
            <td class="table__cell <?php if($exklusiv): ?>table__cell_bonus_exclusive<?php endif; ?>"><?php echo $bonus; ?></td>
            <td class="table__cell"><?php echo $mindestquote; ?></td>
            <td class="table__cell"><?php echo $bewertung; ?></td>
            <td class="table__cell">
              <a href="<?php echo esc_url($anbieter['url']); ?>" class="btn btn-buy"><?php echo esc_html( $anbieter['title'] ); ?></a>
            </td>
          </tr>
          <?php
          }
          wp_reset_postdata();  ?>
        </tbody>
      </table>
    </div>
  </section>
<?php get_footer(); ?>