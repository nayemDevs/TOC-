add_action( 'dokan_seller_registration_field_after','terms_condition' ); 

function terms_condition(){
?>
<p class="form-row form-group form-row-wide">
<label><input name="terms" required="" type="checkbox" value="checked" />
I agree to the <a href="#">terms and conditions</a><span class="required">*</span></label>
</p>

<?php
}
