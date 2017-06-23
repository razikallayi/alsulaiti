
<div class="quick-response">
     <div class="quick-sec">
    <div class="quick-icon"><i class="fa fa-paper-plane"></i></div>
        <div class="quick-txt">
           <h2>Contact Form</h2>
      <form action="contact_mail.php" method="POST">
           <span class="input input--hoshi">
          <input name="name" required class="input__field input__field--hoshi" type="text" id="input-4" />
          <label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-4">
            <span class="input__label-content input__label-content--hoshi">الاسم</span>
          </label>
        </span>
        <span class="input input--hoshi">
          <input name="email" class="input__field input__field--hoshi" type="email" id="input-5" required/>
          <label class="input__label input__label--hoshi input__label--hoshi-color-2" for="input-5">
            <span class="input__label-content input__label-content--hoshi">عنوانالبريدالإلكتروني</span>
          </label>
        </span>
        <span class="input input--hoshi">
          <input name="phone" class="input__field input__field--hoshi" type="number" id="input-6" />
          <label class="input__label input__label--hoshi input__label--hoshi-color-3" for="input-6">
            <span class="input__label-content input__label-content--hoshi">رقمالهاتف</span>
          </label>
        </span>
            <span class="input input--hoshi">
              <textarea name="message" required class="input__field input__field--hoshi" id="input-7"></textarea>
          <label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-7">
            <span class="input__label-content input__label-content--hoshi">الرسالة</span>
          </label>
        </span>

       <input type="hidden" name="location" value="<?php echo basename($_SERVER['PHP_SELF']); ?>"/>
       
       <div class="col-md-12">
         <button name="submit" class="quick-btn">عرض</button>
       </div>
        </form>
        </div>
        </div>
  </div>
