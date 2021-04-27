<?php 
/**
 * The section template for displaying a contact form
 * 
 * Contains the contact form
 * 
 * @package Fanega Web Development
 * @subpackage Lee Porter Fitness
 * @since Lee Porter Fitness 1.0
 */
?>

<div class="alert alert-success" id="success_message" style="display: none;"></div>

<form id="enquiry">
    <h6 class="display-6 text-white">Send Your Enquires & Request</h6>

    <div class="form-group row py-1">
        <div class="col-lg-6 mb-3 mb-lg-0">
            <label class="text-white" for="fname">First Name</label>
            <input type="text" class="form-control" name="fname" placeholder="*First Name" required>
        </div>
        <div class="col-lg-6">
            <label class="text-white" for="lname">Last Name</label>
            <input type="text" class="form-control" name="lname" placeholder="*Last Name" required>
        </div>
    </div>
    <div class="form-group row py-1">
        <div class="col-lg-6 mb-3 mb-lg-0">
            <label class="text-white" for="email">Email Address</label>
            <input type="text" class="form-control" name="email" placeholder="*Email Address" required>
        </div>
        <div class="col-lg-6">
            <label class="text-white" for="phone">Phone Number</label>
            <input type="text" class="form-control" name="phone" placeholder="Phone Number">
        </div>
    </div>
    <div class="form-group row py-1">
        <div class="col">
            <label class="text-white">Interests</label>
            <select name="dropdown" class="form-control" id="FormControlSelectService" required>
                <option selected>*Choose a service</option>
                <option value="Personal One-on-One Training">Personal One-on-One Training</option>
                <option value="Online Training">Online Training</option>
                <option value="Other">Other</option>
            </select>
        </div>
        <div class="col" id="OnlineSelectionProgram" style="display: none;">
            <label class="text-white">Month Selection</label>
            <select class="form-control" name="dropdown" id="FormControlSelectionProgram">
                <option value="Three Months">3 Months</option>
                <option value="Six Months">6 Months</option>
            </select>
        </div>
    </div>
    <div class="form-group row py-1">
        <div class="col-12">
            <label class="text-white" for="enquiry">Enquiry</label>
            <textarea class="form-control" name="enquiry" id="#enquiry" placeholder="*Enquiries & Request" required></textarea>
        </div>
    </div>
    <div class="form-group row pt-3">
        <div class="col-12">
            <button class="btn btn-custom-primary btn-block" type="submit">Send Your Enquiries & Request</button>
        </div>
    </div>

</form>

<script>
(function($) {
    $('#FormControlSelectService').change(function() {
        ($(this).val() == 'Online Training' ? $('#OnlineSelectionProgram').show() : $('#OnlineSelectionProgram').hide());
    });

    $('#enquiry').submit(function(event) {
        event.preventDefault(); // Stops the form from submitting to the default PHP handler

        var endPoint = '<?php echo admin_url('admin-ajax.php'); ?>';
        var form = $('#enquiry').serialize();

        var formData = new FormData;
        formData.append('action', 'enquiry');
        formData.append('nonce', '<?php echo wp_create_nonce('ajax-nonce'); ?>');
        formData.append('enquiry', form);

        $.ajax(endPoint, {
            type: 'POST',
            data: formData,
            processData: false, // Turn off Default Ajax Actions
            contentType: false, // Turn off, we are using formData

            success: function(response) {
                $('#success_message').text('Thank You for Your Enquiry & Request!').show();
                $('#succces_message').delay(3000).fadeOut();
                $('#enquiry').trigger('reset');
            },

            error: function(err) {
                alert(err.responseJSON.data);
            }
        })
    });
})(jQuery)
</script>