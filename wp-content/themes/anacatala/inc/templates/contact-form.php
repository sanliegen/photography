<form id="ajax-contact-form" action="#" method="post" data-url="<?php echo admin_url('admin-ajax.php'); ?>">

  <div class="form-group">
    <input type="text" class="form-control" name="name" id="name"   placeholder="Name" >
    <small class="text-danger form-control-msg">Your Name is Required</small>
  </div>

  <div class="form-group">
    <input type="email" class="form-control" name="email" id="email"  placeholder="E-Mail" >
    <small class="text-danger form-control-msg">Your Email is Required</small>
  </div>

  <div class="form-group">
    <textarea class="form-control" name="message" id="message"  placeholder="Message" ></textarea>
    <small class="text-danger form-control-msg">Message is Required</small>
  </div>

  <button type="submit" class="contact__button">Submit</button>
  <small class="text-success form-control-msg js-form-success">Message Send</small>
  <small class="text-danger form-control-msg js-form-error">Error please try again later</small>
</form>
