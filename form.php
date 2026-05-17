<form action="mail.php" method="post" role="form" class="php-email-form professional-form" enctype="multipart/form-data">
    <div class="row form-card-container">
        <div class="col-md-12 mb-4">
            <h2 class="text-center form-headline" style="color: var(--accent-color);">Request A Free Quote</h2>
            <p class="text-center form-subheadline">Fill in your details and we'll get back to you within 24 hours.</p>
        </div>
        <div class="form-group col-md-6 mb-3">
            <input type="text" name="name" class="form-control premium-input" id="name" placeholder="Enter Your Full Name" required>
        </div>
        <div class="form-group col-md-6 mb-3">
            <input type="tel" name="mobile" class="form-control premium-input" id="mobile" placeholder="Your Mobile Number (10 Digits)" pattern="[0-9]{10}" maxlength="10" title="Please enter a 10-digit phone number" required>
        </div>
        <div class="form-group col-md-4 mb-3">
            <input type="email" class="form-control premium-input" name="email" id="email" placeholder="Your Email Address" required>
        </div>
        <div class="form-group col-md-4 mb-3">
            <input type="text" class="form-control premium-input" name="movingFrom" id="movingFrom" placeholder="Moving From (City)" required>
        </div>
        <div class="form-group col-md-4 mb-3">
            <input type="text" class="form-control premium-input" name="movingTo" id="movingTo" placeholder="Moving To (City)" required>
        </div>
        <div class="form-group col-md-12 mb-4">
            <textarea class="form-control premium-input" name="comment" rows="4" placeholder="Additional Details or Special Requirements (Optional)"></textarea>
        </div>
        <div class="col-md-12 text-center">
            <button type="submit" class="btn btn-primary submit-premium-btn">Get My Free Quote <i class="bi bi-arrow-right-short"></i></button>
        </div>
    </div>
</form>