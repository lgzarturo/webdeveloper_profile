<?php

require_once(__DIR__ . '/../../vendor/autoload.php');

use Profile\Config;

Config::init();
?>
<form id="contact_form" action="/src/send_message.php" method="POST">
    <input type="hidden" name="subject" value="<?php echo $translations['contact_form__field--subject__value'] ?>">
    <input type="hidden" name="language" value="<?php echo $lang ?>">
    <input type="hidden" name="csrf_token" value="<?php echo $csrf_token ?>">
    <fieldset class="rounded">
        <p class="section_contact__message" id="contact__response"></p>

        <legend class="contact_form__legend">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 01.865-.501 48.172 48.172 0 003.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
            </svg>
            <?php echo $translations['contact_form__legend'] ?>
        </legend>

        <div class="wrapper_fields">
            <div class="contact_form__field--name field form_input mb_3">
                <label for="name">
                    <?php echo $translations['contact_form__field--name'] ?>
                </label>
                <input type="text" name="name" id="name" placeholder="<?php echo $translations['contact_form__field--name__placeholder'] ?>" required>
                <div class="contact_form__field__helper contact_form__field--name__error"></div>
            </div>

            <div class="contact_form__field--phone field form_input mb_3">
                <label for="phone">
                    <?php echo $translations['contact_form__field--phone'] ?>
                </label>
                <input type="tel" name="phone" id="phone" placeholder="<?php echo $translations['contact_form__field--phone__placeholder'] ?>" required>
                <div class="contact_form__field__helper contact_form__field--phone__error"></div>
            </div>

            <div class="contact_form__field--email field form_input mb_3">
                <label for="email">
                    <?php echo $translations['contact_form__field--email'] ?>
                </label>
                <input type="email" name="email" id="email" placeholder="<?php echo $translations['contact_form__field--email__placeholder'] ?>" required>
                <div class="contact_form__field__helper contact_form__field--email__error"></div>
            </div>

            <div class="contact_form__field--message field form_input mb_3">
                <label for="body">
                    <?php echo $translations['contact_form__field--message'] ?>
                </label>
                <textarea name="body" id="body" cols="30" rows="10" placeholder="<?php echo $translations['contact_form__field--message__placeholder'] ?>" required></textarea>
                <div class="contact_form__field__helper contact_form__field--body__error"></div>
            </div>
        </div>

        <p class="contact_form__instructions">
            <?php echo $translations['contact_form__instructions'] ?>
        </p>
        <div class="form__buttons">
            <button type="submit" class="contact_form__button--submit btn btn_primary">
                <span class="loader" id="contact_form__button--loader">
                    <svg xmlns=" http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-loader" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M12 6l0 -3"></path>
                        <path d="M16.25 7.75l2.15 -2.15"></path>
                        <path d="M18 12l3 0"></path>
                        <path d="M16.25 16.25l2.15 2.15"></path>
                        <path d="M12 18l0 3"></path>
                        <path d="M7.75 16.25l-2.15 2.15"></path>
                        <path d="M6 12l-3 0"></path>
                        <path d="M7.75 7.75l-2.15 -2.15"></path>
                    </svg>
                </span>
                <svg id="contact_form__button--icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                </svg>
                <?php echo $translations['contact_form__button--submit'] ?>
            </button>
        </div>
    </fieldset>
</form>
