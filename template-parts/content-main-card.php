<section class="content-main-card">
    <section class="main-card-container">
        <div class="main-header">
            <div class="profile-background"></div>
            <figure class="profile-container">
                <img alt="Profile's picture | Alexandre MARK"
                     class="profile-picture top-negative"
                     src="/src/img/profile-photo.png">
            </figure>
            <h1 class="profile-name top-negative">
                Alexandre MARK
            </h1>
            <div class="profile-age top-negative">
                <?php echo cvMyAge('07-02-1984') . " ans";?>
            </div>
            <div class="profile-subtitle top-negative">
                I <span class="profile-subtitle-span"></span>
            </div>
            <div class="profile-social top-negative">
                <a class="profile-social-item" href="https://www.facebook.com">
                    <i class="fab fa-facebook"></i>
                </a>
                <a class="profile-social-item" href="https://www.twitter.com">
                    <i class="fab fa-twitter-square"></i>
                </a>
                <a class="profile-social-item"
                   href="https://www.linkedin.com">
                    <i class="fab fa-linkedin"></i>
                </a>
            </div>
        </div>

        <a id="button"></a>
        <footer class="footer">
            <a class="footer-item" href="#">
                <span class="link"><?php echo $lang['MENU_DOWNLOAD']; ?></span>
                <i class="fas fa-download"></i>
            </a>
            <a id="anchor" class="footer-item"
               href="#anchor">
                <span class="link"><?php echo $lang['MENU_WHO']; ?></span>
                <i class="fas fa-user-tie"></i>
            </a>
        </footer>

    </section>