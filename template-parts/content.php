<?php
/**
 * CONTENT
 */
?>

<div class="main-outter-container">
    <div class="main-container">
        <main class="main">
            <img alt="Profile's background"
                 class="background-profile"
                 src="https://i.ibb.co/br01spM/tony-bg.png">
            <img alt="Tony is awesome!"
                 class="tony-profile-main top-negative"
                 src="https://i.ibb.co/VHDBrk0/tony-profile.jpg">
            <div class="tony-name top-negative">
                Alexandre MARK
            </div>
            <div class="cv-age top-negative">
                <?php echo cvMyAge('07-02-1984') . " ans";?>
            </div>
            <div class="tony-subtitle top-negative">
                I <span class="tony-subtitle-span"></span>
            </div>
            <div class="tony-social top-negative">
                <a class="tony-social-item" href="https://www.facebook.com">
                    <i class="fab fa-facebook"></i>
                </a>
                <a class="tony-social-item" href="https://www.twitter.com">
                    <i class="fab fa-twitter-square"></i>
                </a>
                <a class="tony-social-item"
                   href="https://www.linkedin.com">
                    <i class="fab fa-linkedin"></i>
                </a>
            </div>
        </main>

        <a id="button"></a>
        <footer class="footer">
            <a class="tony-footer-item" href="#">
                <span class="link"><?php echo $lang['MENU_DOWNLOAD']; ?></span>
                <i class="fas fa-download"></i>
            </a>
            <a class="tony-footer-item" href="contact.html">
                <span class="link"><?php echo $lang['MENU_WHO']; ?></span>
                <i class="fas fa-user-tie"></i>
            </a>
        </footer>

    </div>
    <div class="tony-more-info" id="style-10">
        <div class="about-container">
            <h2 class="tony-about-me"><?php echo $lang['CONTENT_ABOUT_ME']; ?>
            </h2>
            <p><?php echo $lang['CONTENT_ABOUT_TEXT']; ?></p>
            <p><?php echo $lang['CONTENT_ABOUT_TEXT_2']; ?></p>
        </div>
        <div class="soft-container">
            <h2 class="tony-soft-skills">My soft skills</h2>
            <ul class="ind-soft-skills">
                <li>I'm so handsome!</li>
                <li>I'm ballzy!</li>
                <li>I'm fucking rich!</li>
                <li>I know that I'm the best!</li>
            </ul>
        </div>
        <div class="hard-container">
            <h2 class="tony-hard-skills">My hard skills</h2>
            <ul class="ind-hard-skills">
                <li>Excellent productivity on cocaïn based products.</li>
                <li>Ability to make more money in a single day than you in your
                    whole life.
                </li>
                <li>Specialist in butchery!</li>
            </ul>
        </div>
    </div>
</div>