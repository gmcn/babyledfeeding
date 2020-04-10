<div class="container share">
  <div class="row">
    <div class="col-md-12">

      <span>Share this recipe on:</span>

      <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo the_permalink(); ?>" onclick="return !window.open(this.href, '', 'width=550,height=400')" class="fb-xfbml-parse-ignore"><img class="share__popovers" src="/wp-content/themes/baby-led-feeding/images/facebook_share.svg" alt="Share On Facbook"></a>

      <a data-pin-do="buttonPin" onclick="return !window.open(this.href, '', 'width=550,height=400')" data-pin-custom="true" data-pin-log="button_pinit" data-pin-href="https://www.pinterest.com/pin/create/button?guid=bHbNwUiWcb3y-1&amp;url=<?php echo the_permalink(); ?>"><img class="share__popovers" src="/wp-content/themes/baby-led-feeding/images/pinterest_share.svg" alt="Share On Pinterest"></a>

      <a href="mailto:?subject=I wanted you to see this site&amp;body=<?php echo the_permalink(); ?>." title="Share by Email">
        <img class="share__popovers" src="/wp-content/themes/baby-led-feeding/images/email_share.svg" alt="Share by Email">
      </a>

      <!-- <a href="javascript:bookmarkPage()">
        <img class="share__popovers" src="/wp-content/themes/baby-led-feeding/images/bookmark_share.svg" alt="Bookmark Page">
      </a> -->

      <a href="#review">
        <img class="share__popovers" src="/wp-content/themes/baby-led-feeding/images/comment_share.svg" alt="Comment">
      </a>

    </div>

  </div>
</div>
