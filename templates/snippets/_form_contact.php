<form action="mailto:lgzarturo@gmail.com?subject=Contact from my website" method="GET" enctype="text/plain">
    <fieldset class="rounded">
        <legend>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 01.865-.501 48.172 48.172 0 003.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
            </svg>
            Contact form, send me a message and I will contact you as soon as possible
        </legend>

        <div class="form_input mb_3">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" placeholder="Enter your full name" required>
        </div>

        <div class="form_input mb_3">
            <label for="phone">Phone:</label>
            <input type="tel" name="phone" id="phone" placeholder="Your phone number" required>
        </div>

        <div class="form_input mb_3">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" placeholder="Your email address" required>
        </div>

        <div class="form_input mb_3">
            <label for="body">Message:</label>
            <textarea name="body" id="body" cols="30" rows="10" placeholder="Feel free to share your message here" required></textarea>
        </div>

        <p>
            Please fill out all the required fields of this form, so we can assist you better. Your information is safe with us and will only be used to respond to your inquiry.
        </p>
        <button type="submit" class="btn btn_primary">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
            </svg>
            Send Message
        </button>
    </fieldset>
</form>
