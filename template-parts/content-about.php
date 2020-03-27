<?php
/**
 * CONTENT
 */
?>

<main id="content-about" class="profile-more-info style-10">
    <div class="about-container">
        <h2 class="h2-main gradient-border-title">
            <?php echo $lang['CONTENT_ABOUT_ME']; ?>
        </h2>
        <div class="half-container">
            <p><?php echo $lang['CONTENT_ABOUT_TEXT']; ?></p>
        </div>
        <div class="half-container">
            <p class="split-text">
                <strong><?php echo $lang['CONTENT_AGE_TEXT']; ?></strong>
                <?php echo cvMyAge('07-02-1984'); ?>
            </p>
            <p class="split-text">
                <strong><?php echo $lang['CONTENT_CITY_TEXT']; ?></strong>
                Strasbourg
            </p>
            <p class="split-text">
                <strong><?php echo $lang['CONTENT_COUNTRY_TEXT']; ?></strong>
                France
            </p>
        </div>
    </div>
    <div class="soft-container">
        <h2 class="soft-skills gradient-border-title">
            <?php echo $lang['CONTENT_HOBBIES']; ?>
        </h2>
        <div class="half-container">
            <div class="item-container gradient-border">
                <i class="fas fa-search big-icon"></i>
                <h3 class="big-title">SEO</h3>
                <p class="big-description">
                    <?php echo $lang['CONTENT_SEO']; ?>
                </p>
            </div>
            <div class="item-container gradient-border">
                <i class="fab fa-uikit big-icon"></i>
                <h3 class="big-title">UX/UI</h3>
                <p class="big-description">
                    <?php echo $lang['CONTENT_UXUI']; ?>
                </p>
            </div>
            <div class="item-container gradient-border">
                <i class="fas fa-memory big-icon"></i>
                <h3 class="big-title">High-tech</h3>
                <p class="big-description">
                    <?php echo $lang['CONTENT_HIGH_TECH']; ?>
                </p>
            </div>
            <div class="item-container gradient-border">
                <i class="fas fa-blog big-icon"></i>
                <h3 class="big-title">Blogging</h3>
                <p class="big-description">
                    <?php echo $lang['CONTENT_BLOGGING']; ?>
                </p>
            </div>
        </div>
    </div>
</main>
