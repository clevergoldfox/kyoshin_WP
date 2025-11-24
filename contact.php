<?php
/*
Template Name: Contact Page
*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>株式会社共進</title>
    <meta data-n-head="ssr" charset="utf-8">
    <meta data-n-head="ssr" name="viewport" content="width=device-width, initial-scale=1">
    <meta data-n-head="ssr" data-hid="description" name="description" content="株式会社共進">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/base.css">
    <link href="https://db.onlinewebfonts.com/c/bbcc889bed34a1678c6a044df8e83428?family=Noto+Sans" rel="stylesheet"
        type="text/css" />
    <link href="https://db.onlinewebfonts.com/c/6bb72788de0e0eb09756d36c0ba629cf?family=Fugaz+One" rel="stylesheet"
        type="text/css" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@200;300;400;500;600;700;900&display=swap"
        rel="stylesheet">
</head>

<body>
    <div class="content">
        <div class="nav-bar">
            <a class="logo" href="<?php echo site_url('/'); ?>">
                <div class="logo-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Statra Logo">
                </div>
                <div class="logo-text">
                    <h2>株式会社共進</h2>
                    <p>KYOSHIN</p>
                </div>
            </a>
            <div class="link-group">
                <a href="<?php echo site_url('/'); ?>about" class="page-link">
                    <h3>会社概要</h3>
                    <p>ABOUT</p>
                </a>
                <a href="<?php echo site_url('/'); ?>contact" class="page-link">
                    <h3>お問い合わせ</h3>
                    <p>CONTACT</p>
                </a>
            </div>
            <div class="btn-group">
                <a class="line-btn" href="https://lin.ee/34WFjJW" target="_blank">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/line-icon.png" alt="">
                    <p>公式LINEから<br>簡単お見積もり</p>
                </a>
                <button class="budget-btn">
                    <p>お見積りはこちら</p>
                </button>
            </div>
            <div class="menu-bar" id="menu-btn">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/menu.png" alt="">
            </div>
            <div class="menu-btn-group" id="menu-show">
                <a class="line-btn" href="https://lin.ee/34WFjJW" target="_blank">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/line-icon.png" alt="">
                    <p>公式LINEから<br>簡単お見積もり</p>
                </a>
                <button class="budget-btn">
                    <p>お見積りはこちら</p>
                </button>
            </div>
        </div>
    </div>
    <div class="section-16">
        <h2>お問い合わせ</h2>
    </div>
    <div class="section-17">
        <h2>CONTACT</h2>
        <div class="sec-content">
            <p class="alram-text"><span>お問い合わせ</span>３営業日以内にご返信させていただきます。</p>

            <form action="">
                <div class="form-group">
                    <div class="label-group">
                        <label for="">お名前</label>
                        <p>必須</p>
                    </div>
                    <input type="text" name="user" placeholder="例）富士 見太郎" />
                </div>
                <div class="form-group">
                    <div class="label-group">
                        <label for="">郵便番号</label>
                        <p>必須</p>
                    </div>
                    <input type="text" name="postal" placeholder="例）000-1234">
                </div>
                <div class="form-group">
                    <div class="label-group">
                        <label for="">住所</label>
                        <p>必須</p>
                    </div>
                    <div class="address-input">
                        <select name="prefectures" name="prefecture" id="prefectures" placeholder="都道府県を選択">
                            <option value="">都道府県を選択</option>
                        </select>
                        <input type="text" name="address" placeholder="例）港区麻布台1-4-3">
                    </div>
                </div>
                <div class="form-group">
                    <div class="label-group">
                        <label for="">電話番号</label>
                        <p>必須</p>
                    </div>
                    <input type="text" name="tel" placeholder="例）03-1234-5678">
                </div>
                <div class="form-group">
                    <div class="label-group">
                        <label for="">メールアドレス</label>
                        <p>必須</p>
                    </div>
                    <input type="text" name="email" placeholder="taka_id@icloud.com">
                </div>
                <div class="form-group">
                    <div class="label-group">
                        <label for="">お問い合わせ内容</label>
                        <p>必須</p>
                    </div>
                    <textarea name="content" id="" placeholder="お問い合わせ内容を入力してください"></textarea>
                </div>
                <p class="privacy"><span>利用規約</span>（第4条の反社会的勢力の不該当を含む）を<br class="sp">確認し、内容に同意のうえ送信するものとします。</p>
                <button type="submit">上記に同意して送信する</button>
            </form>

            <?php echo do_shortcode('[contact-form-7 id="1c4eae3" title="Test"]'); ?>
        </div>
    </div>
    <div class="section-10">
        <h2>
            戸建住宅から店舗まで、<br>
            外装・内装の塗装工事は<br class="sp">
            プロの職人にお任せください。
        </h2>
        <button class="budget-btn">
            <p>お見積りはこちら</p>
        </button>
        <a class="line-btn" href="https://lin.ee/34WFjJW" target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/line-icon.png" alt="">
            <p>公式LINEから<br>簡単お見積もり</p>
        </a>
    </div>
    <div class="section-11">
        <div class="logo">
            <div class="logo-img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Statra Logo">
            </div>
            <div class="logo-text">
                <h2>株式会社共進</h2>
                <p>KYOSHIN</p>
            </div>
        </div>
        <p class="copyright">Copyright kyoshin Co., Ltd. All Rights Reserved.</p>
    </div>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/menu.js"></script>
</body>