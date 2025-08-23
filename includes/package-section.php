<div class="pricing_price-tabs">
    <ul>
        <?php
        $first = true; 
        foreach ($packages as $category => $items): ?>
        <li class="<?php echo $first ? 'pricing_active' : ''; ?>"><?php echo $category; ?></li>
        <?php
        $first = false;
        endforeach; ?>
    </ul>
    </div>
    <div class="pricing_tab-content">
    <?php
    $first = true; 
    foreach ($packages as $category => $items): ?>
    <div class="pricing_price-grid <?php echo $first ? 'pricing_active' : ''; ?> <?php echo $category == 'All in One' ? 'pricing_combo-card' : ''; ?>">
        <?php if ($category === "All in One"): ?>
            <?php foreach ($items as $slug => $package): ?>
        <!-- Different HTML for All in One -->
        <div class="pricing_price-box pricing_combo-card">
            <div>
                <div class="pricing_discount">
                    <p><span>SAVE</span> $<?php echo $package['discount']; ?></p>
                </div>
                <h4><?php echo $package['title']; ?></h4>
                <h2><?php echo $package['subtitle']; ?></h2>
                <h5><?php echo $package['tagline']; ?></h5>

                <div class="pricing_ul-grid">
                    <?php foreach ($package['features'] as $sectionTitle => $features): ?>
                        <div class="pricing_ul-box">
                            <h4><?php echo $sectionTitle; ?></h4>
                            <ul>
                                <?php foreach ($features as $feature): ?>
                                    <li><?php echo $feature; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    <?php endforeach; ?>
                </div>

                <div class="pricing_price-btn-grid">
                    <div>
                        <h2>$<?php echo $package['price']; ?></h2>
                        <h6>$<?php echo $package['old_price']; ?></h6>
                        <p>LIMITED TIME OFFER</p>
                        <p>Want To Discuss ?</p>
                    </div>
                    <div class="pricing_btn-info">
                        <button value="$<?php echo $package['price']; ?>" class="primary-button_btn">Order Now</button>
                        <a class="primary-button_btn" href="portfolio.php">View Portfolio</a>
                    </div>
                    <div class="pricing_right-side">
                        <img src="assets/images/logo.svg" alt="logo" width="226" height="143">
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
    <?php else: ?>
        <?php foreach ($items as $slug => $package): ?>
        <div class="pricing_price-box">
            <div>
                <?php if (!empty($package['discount'])): ?>
                <div class="pricing_discount">
                <p>
                    <span>SAVE</span> $<?php echo $package['discount']; ?>
                </p>
                </div>
                <?php endif; ?>
                <h4><?php echo $package['title']; ?></h4>
                <h2>$<?php echo $package['price']; ?></h2>
                <h6>$<?php echo $package['old_price']; ?></h6>
                <ul>
                <?php foreach ($package['features'] as $feature): ?>
                <li><?php echo $feature; ?></li>
                <?php endforeach; ?>
                </ul>
            </div>
            <div class="pricing_btn-info">
                <button value="$<?php echo $package['price']; ?>" class="primary-button_btn">Order Now</button>
                <a class="primary-button_btn" href="portfolio.php">View Portfolio</a>
            </div>
        </div>
        <?php endforeach; ?>
    <?php endif; ?>
    </div>
    <?php
        $first = false;
        endforeach; ?>
    </div>