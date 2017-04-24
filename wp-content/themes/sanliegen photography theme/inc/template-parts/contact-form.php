<?php
/*

@package sanliegen photo template
-- contact-form
*/
?>
<form id="ajax-contact-form" class="contact__us__form" action="#" method="post" data-url="<?php echo admin_url('admin-ajax.php'); ?>">
  <div class="contact__us__form__field">
    <div class="contact__us__form__group">
      <label for="name">Full Name</label>
      <input type="text" name="name" id="name"  >
      <small id="small__name">Your Name is Required</small>
    </div><!-- .contact__us__form__group -->
  </div><!-- .contact__us__form__field -->
  <div class="contact__us__form__field">
    <div class="contact__us__form__group">
      <label for="email">Email Adress</label>
      <input type="text" name="email" id="email"  >
      <small id="small__mail">Your Email is Required</small>
    </div><!-- .contact__us__form__group -->
  </div><!-- .contact__us__form__field -->
  <div class="contact__us__form__field">
    <div class="contact__us__form__group">
      <label for="message">Message</label>
      <textarea name="message" id="message" rows="8"></textarea>
      <small id="small__message">Message is Required</small>
    </div><!-- .contact__us__form__group -->
  </div><!-- .contact__us__form__field -->

  <button class="contact__form__button" >Submit</button>
  <small class="feedback feedback__success">Message Send</small>
  <small class="feedback feedback__error">Error please try again later</small>

</form>
