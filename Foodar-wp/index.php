<?php get_header(); ?>
<section id="banner">
  <div class="banner-title">
    <h1>Foodar</h1>
    <h2>Your Food. Delivered.</h2>
  </div>
  <div class="banner-content">
    <h3>Find a driver near you!</h3>
    <p>Type in your 5-digit zipcode below and click "Go!" to find a driver near you.</p>
    <div>
      <input id="userZip" type="number" style="width: 8rem;">
      <input id="cityChecker" type="submit" value="Go!"/>
      <div id="zipResult"></div>
    </div>
  </div>
</section>
<section id="services">
  <h1>How It Works!</h1>
  <div class="section-content">
    <div class="service-content">
      <img src="./images/order-online.jpeg" alt="woman ordering online"/>
      <div class="service-text">
        <h3>1. Order What You Want</h3>
        <p>Want your favorite chicken sandwich or italian cuisine but don't want to fight traffick or put down what you're doing? You don't have to do either! Just order what you want and we'll find the closed drive to deliver your meal!</p>
      </div>
    </div>
    <div class="service-content">
      <img src="./images/food-driver.jpeg" alt="man delivering food"/>

      <div class="service-text">
        <h3>2. We Find The Driver</h3>
        <p>Pay directly from the Foodar Delivery App. No need to worry about a cash tip upon delivery; it's all on the app! Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec odio eros, commodo sit amet molestie non, ultricies vitae lectus. Nulla a urna ut lectus scelerisque fringilla et non mi. I</p>
      </div>
    </div>
    <div class="service-content">
      <img src="./images/pay-phone.jpg" alt="man paying by phone"/>
      <div class="service-text">
        <h3>3. Your Food is Delivered!</h3>
        <p>Eat the food you want without having to get dressed up and leave your house! Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec odio eros, commodo sit amet molestie non, ultricies vitae lectus. Nulla a urna ut lectus scelerisque fringilla et non mi. I</p>
      </div>
    </div>
  </div>
</section>
<section id="promos">
  <h1>Special Offers</h1>
  <h2>Save up to 25% on these orders, Today Only!</h2>
  <div class="section-content">
    <div class="promo-content">
      <img src="./images/apple.jpeg" alt="Promo Restaurant 1"/>
      <div class="promo-text">
        <h3>Applebee's</h3>
        <p>Save 15% on your total order, or get a free appetizer, by entering promo code "nathaniscool" when you submit your quote.</p>
      </div>
    </div>
    <div class="promo-content">
      <img src="./images/chili.jpeg" alt="Promo Restaurant 1"/>
      <div class="promo-text">
        <h3>Chili's</h3>
        <p>Save 25% on your total order by entering promo code "nathanisthebest" when you submit your quote.</p>
      </div>
    </div>
    <div class="promo-content">
      <img src="./images/pancake.jpeg" alt="Promo Restaurant 1"/>
      <div class="promo-text">
        <h3>IHOP</h3>
        <p>Save 20% on your total order by entering promo code "nathanpreferspancakestowaffles" when you submit your quote.</p>
      </div>
    </div>
  </div>
</section>

<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
  <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="post-header">
       <div class="date"><?php the_time( 'M j y' ); ?></div>
       <h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
       <div class="author"><?php the_author(); ?></div>
    </div><!--end post header-->
    <div class="entry clear">
       <?php if ( function_exists( 'add_theme_support' ) ) the_post_thumbnail(); ?>
       <?php the_content(); ?>
       <?php edit_post_link(); ?>
       <?php wp_link_pages(); ?> </div>
    <!--end entry-->
    <div class="post-footer">
       <div class="comments"><?php comments_popup_link( 'Leave a Comment', '1 Comment', '% Comments' ); ?></div>
    </div><!--end post footer-->
    </div><!--end post-->
<?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
    <div class="navigation index">
       <div class="alignleft"><?php next_posts_link( 'Older Entries' ); ?></div>
       <div class="alignright"><?php previous_posts_link( 'Newer Entries' ); ?></div>
    </div><!--end navigation-->
<?php else : ?>
<?php endif; ?>

<?php get_footer(); ?>
