<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="row">
        <div class="col-lg-12">
            <p>
                Welcome to our bold corner of the internet. We believe that design should be an experience, not just a
                utility.
                Our philosophy is simple: <strong>More is More</strong>.
            </p>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-lg-4">
            <h2>The Vision</h2>
            <p>
                We aim to break the monotony of minimalist web design. Why settle for whitespace when you can have
                patterns,
                borders, and character? Every pixel here is intentional.
            </p>
        </div>
        <div class="col-lg-4">
            <h2>The Process</h2>
            <p>
                Our workflow involves throwing out the rulebook and embracing the chaos. We mix textures,
                tilt our headers, and let our shadows fall wherever they want. It's organized entropy.
            </p>
        </div>
        <div class="col-lg-4">
            <h2>The Community</h2>
            <p>
                Join a group of creators who aren't afraid to be loud. We celebrate the eclectic, the over-the-top,
                and the unapologetically unique. There's room for everyone here.
            </p>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-lg-12">
            <div
                style="background: var(--max-accent); border: var(--max-border); padding: 30px; box-shadow: var(--max-shadow); margin-top: 20px;">
                <h3 style="margin-top: 0; transform: rotate(1deg);">Join the Rebellion</h3>
                <p style="background: white; border: 2px solid #000; padding: 10px; display: inline-block;">
                    Tired of the same three fonts and "clean" layouts? So are we. Let's make the web weird again.
                </p>
                <div class="mt-3">
                    <?= Html::a('Get Involved', ['site/contact'], ['class' => 'btn btn-success']) ?>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-lg-12">
            <div style="display: flex; gap: 20px; align-items: flex-start; flex-wrap: wrap;">
                <div style="flex: 0 0 auto;">
                    <img src="<?= \yii\helpers\Url::to('@web/images/founder.jpg') ?>" alt="The Founder"
                        class="pop-trigger"
                        style="width: 200px; height: 200px; object-fit: cover; border: 4px solid #000; box-shadow: 10px 10px 0 #000; transform: rotate(-2deg);">
                </div>
                <div style="flex: 1;">
                    <h2 style="font-weight: 900; font-size: 2.5rem; text-transform: uppercase; margin-top: 0;">The
                        Founder</h2>
                    <p
                        style="font-size: 1.1rem; border-left: 5px solid var(--max-accent); padding-left: 15px; background: #fff; padding: 15px; border: 2px solid #000;">
                        Meet Mark. He didn't just build this platform; he broke it and put it back together in the wrong
                        order on purpose.
                        With a disdain for "pixel-perfect" and a love for raw HTML, Mark leads the charge against the
                        beige web.
                        "If it doesn't look like a mistake, you're not trying hard enough," he probably said once.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-lg-12">
            <div
                style="display: flex; gap: 20px; align-items: flex-start; flex-wrap: wrap; flex-direction: row-reverse;">
                <div style="flex: 0 0 auto;">
                    <img src="<?= \yii\helpers\Url::to('@web/images/ai-prompter.jpg') ?>" alt="AI Prompter"
                        class="pop-trigger"
                        style="width: 200px; height: 200px; object-fit: cover; border: 4px solid #000; box-shadow: -10px 10px 0 #000; transform: rotate(2deg);">
                </div>
                <div style="flex: 1; text-align: right;">
                    <h2 style="font-weight: 900; font-size: 2.5rem; text-transform: uppercase; margin-top: 0;">The AI
                        Prompter</h2>
                    <p
                        style="font-size: 1.1rem; border-right: 5px solid var(--max-accent); padding-right: 15px; background: #fff; padding: 15px; border: 2px solid #000;">
                        And then there's the machine whisperer. Always tired, usually over-caffeinated.
                        He translates human chaos into digital logic, one prompt at a time.
                        "It works on my machine," is his mantra, usually followed by "Wait, I didn't write that part."
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-lg-12">
            <div style="display: flex; gap: 20px; align-items: flex-start; flex-wrap: wrap;">
                <div style="flex: 0 0 auto;">
                    <img src="<?= \yii\helpers\Url::to('@web/images/ai-slop-designer.jpg') ?>" alt="AI Slop Designer"
                        class="pop-trigger"
                        style="width: 200px; height: 200px; object-fit: cover; border: 4px solid #000; box-shadow: 10px 10px 0 #000; transform: rotate(-1deg);">
                </div>
                <div style="flex: 1;">
                    <h2 style="font-weight: 900; font-size: 2.5rem; text-transform: uppercase; margin-top: 0;">The AI
                        Slop Designer</h2>
                    <p
                        style="font-size: 1.1rem; border-left: 5px solid var(--max-accent); padding-left: 15px; background: #fff; padding: 15px; border: 2px solid #000;">
                        Master of the uncanny valley. He takes perfectly good concepts and feeds them into the neural
                        distortion engine until they emerge as beautiful, glitchy art.
                        He believes that if you can't count the fingers, it's not real art.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-lg-12">
            <div
                style="display: flex; gap: 20px; align-items: flex-start; flex-wrap: wrap; flex-direction: row-reverse;">
                <div style="flex: 0 0 auto;">
                    <img src="<?= \yii\helpers\Url::to('@web/images/piece-of-shit.jpg') ?>" alt="The Piece of Shit"
                        class="pop-trigger"
                        style="width: 200px; height: 200px; object-fit: cover; border: 4px solid #000; box-shadow: -10px 10px 0 #000; transform: rotate(3deg);">
                </div>
                <div style="flex: 1; text-align: right;">
                    <h2 style="font-weight: 900; font-size: 2.5rem; text-transform: uppercase; margin-top: 0;">The Piece
                        of Shit</h2>
                    <p
                        style="font-size: 1.1rem; border-right: 5px solid var(--max-accent); padding-right: 15px; background: #fff; padding: 15px; border: 2px solid #000;">
                        And finally, the heart of the operation. He contributes absolutely nothing of value but insists
                        on being in the credits.
                        Specializes in creating problems that didn't exist and then complaining about them.
                        You can usually find him looking confused at a screen that's been turned off for an hour.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->registerJsFile('@web/js/image-popup.js', ['depends' => [\yii\web\JqueryAsset::class]]);
?>
