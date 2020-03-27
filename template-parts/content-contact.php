<?php
/**
 * CONTACT
 */
?>

<main id="content-contact" class="profile-more-info style-10">
    <div class="contact-container">
        <h2 class="h2-main gradient-border-title">Contact</h2>
        <div class="contact-google-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d21112.803266265266!2d7.738897324189502!3d48.588776286845956!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4796c85aaeb73dcf%3A0x602ac70d6f348c9e!2s4%20Rue%20Paul%20Muller%20Simonis%2C%2067000%20Strasbourg!5e0!3m2!1sfr!2sfr!4v1585246801513!5m2!1sfr!2sfr" width="600" height="250" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
        <form class="contact-form" action="#" method="$_GET">
            <p class="contact-form-item">
                <input id="name" name="name" type="text"
                       placeholder="<?php echo $lang['CONTENT_CONTACT_FNAME'];
                       ?>">
            </p>
            <p class="contact-form-item">
                <input id="company" name="company" type="text"
                       placeholder="<?php echo $lang['CONTENT_CONTACT_COMPANY'];
                       ?>">
            </p>
            <p class="contact-form-item">
                <input id="adress" type="text"
                       placeholder="<?php echo
                       $lang['CONTENT_CONTACT_COMPANY_ADDR'];
                       ?>">
            </p>
            <p class="contact-form-item">
                <select id="who" name="who">
                    <option value="">
                        <?php echo $lang['CONTENT_CONTACT_COMPANY_FUNC']; ?>
                    </option>
                    <option value="hrdep">
                        <?php echo $lang['CONTENT_CONTACT_FUNC_1']; ?>
                    </option>
                    <option value="hrmanage">
                        <?php echo $lang['CONTENT_CONTACT_FUNC_2']; ?>
                    </option>
                    <option value="secretary">
                        <?php echo $lang['CONTENT_CONTACT_FUNC_3']; ?>
                    </option>
                    <option value="employment_Agency">
                        <?php echo $lang['CONTENT_CONTACT_FUNC_4']; ?>
                    </option>
                    <option value="employment_Agency">
                        <?php echo $lang['CONTENT_CONTACT_FUNC_5']; ?>
                    </option>
                </select>
            </p>
            <p class="contact-form-item">
                <textarea placeholder="<?php echo $lang['CONTENT_CONTACT_TEXTAREA']; ?>" id="message" name="message"></textarea>
            </p>
            <button class="contact-form-button"><?php echo $lang['SUBMIT']; ?>
            </button>
        </form>
    </div>
</main>
